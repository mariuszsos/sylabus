<?php
include('config.php');
$config['navbar'] = 'Dane z arkusza kalkulacyjnego';

if(isset($_POST['formSubmit'])) {
	if($_FILES['excel']['error'] == 0) {
		$specBool = false;
	
		$plik = $_FILES['excel']['name'];
		$tryb = $_POST['formTryb'];
		$stopien = $_POST['formStopien'];
		$spec = $_POST['specText'];
	
		$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($plik);
		if($tryb == 'stac' && $stopien == 'inz') $i = 0;
		if($tryb == 'stac' && $stopien == 'mgr') $i = 2;
		if($tryb == 'nstac' && $stopien == 'inz') $i = 1;
		if($tryb == 'nstac' && $stopien == 'mgr') $i = 3;
		$spreadsheet->setActiveSheetIndex($i);
		$sheetData = $spreadsheet->getActiveSheet();
		$sheetIndx = $spreadsheet->getActiveSheetIndex();
		$sheetnames = $spreadsheet->getSheetNames();
	
		if($spec == null || $spec == '' || empty($spec) || !isset($_POST['specOK'])) {	
			//sformatowany arkusz na D4 ma pierwszy przedmiot
			$kordy[0] = 'D';
			$kordy[1] = 4;
		} else {
			//w excelu każda specjalizacja ma przedrostek
			$specjalizacja = 'Specjalizacja: '.$spec;
			$lastRow = $sheetData->getHighestRow();
			$lastColumn = $sheetData->getHighestColumn();
			$highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($lastColumn);
	
			//wyszukiwanie konkretnego tekstu w arkuszu
			for($column = 0; $column < $highestColumnIndex; $column++) {
				for($row = 1; $row <= $lastRow; $row++) {
					$cell = $sheetData->getCellByColumnAndRow($column, $row);
					if($cell->getFormattedValue() == $specjalizacja) {
						$kordy[0] = $cell->getColumn();
						$kordy[1] = $cell->getRow();
						$kordy[2] = $cell->getFormattedValue();	
						$specBool = true;		
						break;
					} 
				}
			}
	
		}
	
		//różne kolumny Zaliczenia w różnych wariantach exceli
		if($sheetIndx == 0) {
			$zalCol = 'AC';
			$ectsCol = 'AF';
		} elseif($sheetIndx == 1) {
			$zalCol = 'AK';
			$ectsCol = 'AN';
		} else {
			$zalCol = 'W';
			$ectsCol = 'Z';
		}
			


		echo '<h1>'.$sheetnames[$sheetIndx].'</h1>';
		if($specBool == true) echo '<h3>'.$kordy[2].'</h3>';
		echo '<table class="w3-table w3-bordered w3-striped w3-border test w3-hoverable" width="75%">
			<tr class="w3-indigo">
				<th>Semestr</th>
				<th>Kod przedmiotu</th>
				<th>Nazwa przedmiotu</th>
				<th>Ilość godzin</th>
				<th>Zaliczenie</th>
				<th>ECTS</th>
				<th>Sylabus</th>
			</tr>';
	
		//zaczynamy wyliczanie od następnego wiersza po nazwie specjalizacji
		$i = $kordy[1]+1;
	
		while( $sheetData->getCell($kordy[0].$i)->getValue() != "") {
			$sem = $sheetData->getCell('B'.$i)->getValue();
			$kod = $sheetData->getCell('C'.$i)->getValue();
			$nazwa = $sheetData->getCell('D'.$i)->getValue();
			$godziny = $sheetData->getCell('N'.$i)->getCalculatedValue();
			$zaliczenie = $sheetData->getCell($zalCol.$i)->getValue();
			$ects = $sheetData->getCell($ectsCol.$i)->getValue();
			$sylabus = false;

			$sql = "SELECT `kod` FROM `dane`";
			$query = $mysqli -> query($sql);
			if( $query -> num_rows > 0) {
				while($row = $query->fetch_assoc()) {	
					if($row['kod'] == $kod) {
						$sylabus = true;
					}
				}
			}
		
			if(empty($zaliczenie) || $zaliczenie == '' || !isset($zaliczenie)) {
				$zaliczenie = "Z";
			}

			// wyeliminuj nazwy przedmiotów z ( )
			$pos = strpos($nazwa, '(');
			if($pos !== false){
				$i++;
				continue;
			}

			$formNoSylabus = '
			<form method="POST" action="index.php?id=dodajsylabus">
				<input type="hidden" name="kod" value="'.$kod.'">
				<input type="hidden" name="ects" value="'.$ects.'">
				<input type="hidden" name="sem" value="'.$sem.'">
				<input type="hidden" name="nazwa" value="'.$nazwa.'">
				<input type="hidden" name="sylabus" value="'.$sylabus.'">
				<input class="w3-green" type="submit" name="ok" value="Dodaj"/>
			</form>';

			$formSylabus = '
			<form style="display: inline;" method="POST" action="index.php?id=usunsylabus">
				<input type="hidden" name="kod" value="'.$kod.'">
				<input class="w3-red" name="ok" type="submit" value="Usuń"/>
			</form>
			<form style="display: inline;" method="POST" action="index.php?id=dodajsylabus">
				<input class="w3-green" name="ok" type="submit" value="Edytuj"/>
				<input type="hidden" name="kod" value="'.$kod.'">
				<input type="hidden" name="ects" value="'.$ects.'">
				<input type="hidden" name="sem" value="'.$sem.'">
				<input type="hidden" name="nazwa" value="'.$nazwa.'">
				<input type="hidden" name="sylabus" value="'.$sylabus.'">
			</form>
			
			';

			
			if($sylabus == 1) {
				echo '<tr class="w3-pale-green">';
			} else {
				echo '<tr>';
			}

			echo '
				<td>'.$sem.'</td>
				<td>'.$kod.'</td>
				<td>'.$nazwa.'</td>
				<td>'.$godziny.'</td>
				<td>'.$zaliczenie.'</td>
				<td>'.$ects.'</td>
				<td>';
				
				if($sylabus == 0) {
					echo $formNoSylabus;
				} else {
					echo $formSylabus;
				}
				
				echo '</td>
			</tr>';
			$i++;
		}
		echo '</table>';

	} else {
		echo 
			'<div class="w3-panel w3-pale-red w3-border">
			<h3>Nie wczytano pliku excel!</h3>
			<p>Zaimportuj arkusz i spróbuj ponownie</p>
			</div>';
	}
} else {
	echo 
		'<div class="w3-panel w3-pale-red w3-border">
		<h3>Nie wczytano pliku excel!</h3>
		<p>Zaimportuj arkusz i spróbuj ponownie</p>
		</div>';
}
?>