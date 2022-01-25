<?php
    include('config.php');


    $sylabus = $_POST['sylabus'];
    $kodExcel = $_POST['kod'];

    $sql = "SELECT * FROM `dane` WHERE `dane`.`kod` = 'ZIM-IN-1S-01Z-01'";
    $query = $mysqli -> query($sql);
    if( $query -> num_rows > 0) {
        while($row = $query->fetch_assoc()) { 
            $nazwaZajec = $row['nazwa_zajec'];
            $nazwaZajecEn = $row['nazwa_zajec_en'];
            $kierunek = $row['kierunek'];
            $jezyk = $row['jezyk'];
            $poziom = $row['poziom'];
            $forma = $row['forma'];
            $status1 = $row['status1'];
            $status2 = $row['status2'];
            $ects = $row['ects'];
            $semNr = $row['semNr'];
            $semestr = $row['semestr'];
            $rok = $row['rok'];
            $kod = $row['kod'];
            $koordynator = $row['koordynator'];
            $prowadzacy = $row['prowadzacy'];
            $jednostkaRealizujaca = $row['jednostkaRealizujaca'];
            $jednostkaZlecajaca = $row['jednostkaZlecajaca'];
            $zalozenia = $row['zalozenia'];
            $formyDydaktyczne = $row['formyDydaktyczne'];
            $metodyDydaktyczne = $row['metodyDydaktyczne'];
            $wymagania = $row['wymagania'];
            $efektWiedza = $row['efektWiedza'];
            $efektUm = $row['efektUm'];
            $efektKom = $row['efektKom'];
            $weryfikacja = $row['weryfikacja'];
            $formaDokumentacji = $row['formaDokumentacji'];
            $elementyWagi = $row['elementyWagi'];
            $miejsceZajec = $row['miejsceZajec'];
            $literatura = $row['literatura'];
            $uwagi = $row['uwagi'];
            $pracaStudenta = $row['pracaStudenta'];
            $ectsK = $row['ectsK'];
            $ileEfekty = $row['ileEfekty'];
        }
    }
    


    if(isset($_POST['ok'])) {

?>
<div class="w3-content w3-margin-top w3-margin-bottom">
<form name="dodajsyl" action="index.php?id=dodajsylabusok" method="POST" class="w3-container w3-card-4 w3-light-grey">
    <div class="w3-row-padding">
        <p><label>Nazwa zajęć</label>
        <input class="w3-input w3-border" name="nazwa_zajec" type="text" value="<?php echo $_POST['nazwa'] ?>" required></p>

        <p><label>Nazwa zajęć w języku angielskim</label>
        <input class="w3-input w3-border" name="nazwa_zajec_en" value="<?php if($sylabus) echo $nazwaZajecEn; ?>" type="text" required></p>

        <p><label>Kierunek studiów</label>
        <select class="w3-select" name="formKierunek">
            <option value="Informatyka">Informatyka</option>
            <option value="Informatyka i Ekonometria">Informatyka i Ekonometria</option>
        </select></p>

        <!--    KOLEJNA LINIA    -->

        <div class="w3-quarter">
            <label>Język wykładowy</label>
            <p><input class="w3-radio" type="radio" name="jezyk" value="polski" checked>
            <label>Język polski</label></p>

            <p><input class="w3-radio" type="radio" name="jezyk" value="angielski">
            <label>Język angielski</label></p>
        </div>
        <div class="w3-quarter">
            <label>Poziom studiów</label>
            <p><input class="w3-radio" type="radio" name="stopien" value="inz" checked>
            <label>I stopień</label></p>

            <p><input class="w3-radio" type="radio" name="stopien" value="mgr">
            <label>II stopień</label></p>  
        </div>
        <div class="w3-quarter">
            <label>Forma studiów</label>
            <p><input class="w3-radio" type="radio" name="forma" value="stac" checked>
            <label>Stacjonarne</label></p>

            <p><input class="w3-radio" type="radio" name="forma" value="nstac">
            <label>Niestacjonarne</label></p>  
            
        </div>
        <div class="w3-quarter">
            <label>Status zajęć</label>
            <p><input class="w3-radio" type="radio" name="status" value="podstawowe" checked>
            <label>Podstawowe</label></p>

            <p><input class="w3-radio" type="radio" name="status" value="kierunkowe">
            <label>Kierunkowe</label></p>
        </div>

        <!--    KOLEJNA LINIA    -->

        <div class="w3-quarter">
            <label>Status zajęć 2</label>
            <p><input class="w3-radio" type="radio" name="status2" value="obowiazkowe" checked>
            <label>Obowiązkowe</label></p>

            <p><input class="w3-radio" type="radio" name="status2" value="dowyboru">
            <label>Do wyboru</label></p>
        </div>
        <div class="w3-quarter">
            <label>ECTS</label>
            <p><input class="w3-input w3-border" value="<?php echo $_POST['ects'] ?>" type="number" name="ects" required></p>
        </div>
        <div class="w3-quarter">
            <label>Numer semestru</label>
            <p><input class="w3-input w3-border" value="<?php echo $_POST['sem'] ?>" type="number" name="semestr_nr" required></p>  
        </div>
        <div class="w3-quarter">
            <label>Semestr</label>
            <p><input class="w3-radio" type="radio" name="semestr" value="zimowy" checked>
            <label>Zimowy</label></p>

            <p><input class="w3-radio" type="radio" name="semestr" value="letni">
            <label>Letni</label></p>     
        </div>

        <!--    KOLEJNA LINIA    -->

        <div class="w3-half">
            <label>Rok akademicki</label>
            <p>
                <select class="w3-select" name="rok">
                    <option value="2020/2021">2020/2021</option>
                    <option value="2019/2020" selected>2019/2020</option>
                    <option value="2018/2019">2018/2019</option>
                    <option value="2017/2018">2017/2018</option>
                </select>
            </p>    
        </div>

        <div class="w3-half">
            <label>Numer katalogowy</label>
            <p><input class="w3-input w3-border" value="<?php echo $_POST['kod'] ?>" type="text" name="kod" required></p>    
        </div>

        <!--    KOLEJNA LINIA    -->
        <div class="w3-half">
            <label>Koordynator zajęć</label>
            <p><input class="w3-input w3-border"  value="<?php if($sylabus) echo $koordynator; ?>" type="text" name="koordynator" required></p>    
        </div>

        <div class="w3-half">
            <label>Prowadzący zajęć</label>
            <p><input class="w3-input w3-border"  value="<?php if($sylabus) echo $prowadzacy; ?>"type="text" name="prowadzacy" required></p>    
        </div>


        <!--    KOLEJNA LINIA    -->
        <div class="w3-half">
            <label>Jednostka realizująca</label>
            <p><input class="w3-input w3-border" type="text"  value="<?php if($sylabus) echo $jednostkaRealizujaca; ?>"name="jednostka_realizujaca" required></p>    
        </div>

        <div class="w3-half">
            <label>Jednostka zlecająca</label>
            <p><input class="w3-input w3-border" type="text"  value="<?php if($sylabus) echo $jednostkaZlecajaca; ?>"name="jednostka_zlecajaca" required></p>    
        </div>

        <label>Założenia, cele i opis zajęć</label>
        <p><textarea rows="10" name="zalozenia" class="w3-input w3-border"  required><?php if($sylabus) echo $zalozenia; ?></textarea></p>

        
        <label>Formy dydaktyczne i liczba godzin</label>
        <p><textarea rows="3" name="formyDydaktyczne" class="w3-input w3-border" required><?php if($sylabus) echo $formyDydaktyczne; ?></textarea></p>

        <!--    KOLEJNA LINIA    -->

        <div class="w3-half">
            <label>Metody dydaktyczne</label>
            <p><input class="w3-input w3-border" type="text"  value="<?php if($sylabus) echo $metodyDydaktyczne; ?>"name="metody_dydaktyczne" required></p>    
        </div>

        <div class="w3-half">
            <label>Wymagania formalne i założenia wstępne</label>
            <p><input class="w3-input w3-border" type="text"  value="<?php if($sylabus) echo $wymagania; ?>"name="wymagania" required></p>    
        </div>
    
        <!-- KOLEJNA LINIA -->

        <div class="w3-third"> 
            <label>Efekty uczenia się: Wiedza</label>
            <p><textarea rows="4" name="efektWiedza"  class="w3-input w3-border" ><?php if($sylabus) echo $efektWiedza; ?></textarea></p>
        </div>

        <div class="w3-third"> 
            <label>Efekty uczenia się: Umiejętności</label>
            <p><textarea rows="4" name="efektUm" class="w3-input w3-border" ><?php if($sylabus) echo $efektUm; ?></textarea></p>
        </div>
        
        <div class="w3-third"> 
            <label>Efekty uczenia się: Kompetencje</label>
            <p><textarea rows="4" name="efektKom"  class="w3-input w3-border" ><?php if($sylabus) echo $efektKom; ?></textarea></p>
        </div>
        <!-- KOLEJNA LINIA -->

        <label>Sposób weryfikacji uczenia się</label>
        <p><input class="w3-input w3-border"  value="<?php if($sylabus) echo $weryfikacja; ?>" type="text" name="weryfikacja" required></p>    

        <!-- KOLEJNA LINIA -->
        <div class="w3-half">
            <label>Forma dokumentacji osiągniętych efektów uczenia się</label>
            <p><textarea rows="1" name="formaDokumentacji"  class="w3-input w3-border" required><?php if($sylabus) echo $formaDokumentacji; ?></textarea></p>     
        </div>

        <div class="w3-half">
            <label>Elementy i wagi mające wpływ na ocenę końcową</label>
            <p><input class="w3-input w3-border" type="text"  value="<?php if($sylabus) echo $elementyWagi; ?>" name="elementy_wagi_ocena" required></p>    
        </div>

        <p><label>Miejsce realizacji zajęć</label></p>
        <p><input class="w3-input w3-border" type="text"  value="<?php if($sylabus) echo $miejsceZajec; ?>" name="miejsce_zajec" required></p> 

        <label>Literatura podstawowa i uzupełniająca</label>
        <p><textarea rows="5" name="literatura" class="w3-input w3-border" ><?php if($sylabus) echo $literatura; ?></textarea></p>  


        <label>Uwagi</label>
        <p><textarea rows="2" name="uwagi" class="w3-input w3-border"><?php if($sylabus) echo $uwagi; ?></textarea></p> 

        <!-- nowa linia -->

        <div class="w3-half">
            <label>Praca godzinowa studenta </label>
            <p><input class="w3-input w3-border" type="number"  value="<?php if($sylabus) echo $pracaStudenta; ?>" id="praca" name="praca_studenta" required></p>    
        </div>

        <div class="w3-half">
            <label>ECTS_k </label>
            <p><input class="w3-input w3-border" type="number"  value="<?php if($sylabus) echo $ectsK; ?>"id="ectsk" name="ects_k" required></p>    
        </div>

        <label>Wiersze w tabeli</label>
        <input id="iledodac" name="ileEfekty" type="number" value="1">
        <a id="dodaj" style="text-decoration: underline;" onclick="dodaj()">Dodaj</a>
        <table id="efektyTabelka" class="w3-table w3-bordered">
            <tr>
                <th>Kategoria efektu</th>
                <th>Efekty uczenia się dla zajęć</th>
                <th>Odniesienie do efektów dla programu studiów dla kierunku</th>
                <th>Oddziaływanie zajęć na efekt kierunkowy</th>
            </tr>
        </table>


        <p><button type="submit" name="formSubmit" id="button" class="w3-button w3-section w3-indigo w3-ripple" disabled>Dodaj</button></p>
    </div>


</form>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $("#ectsk, #praca").keyup(function(){
        var min = $("#ectsk").val() * 25;
        var max = $("#ectsk").val() * 30;
        if($("#praca").val() >= min && $("#praca").val() <= max) {
            $("#ectsk").css("background-color", "green");
            $("#praca").css("background-color", "green");
            $("#button").prop('disabled', false);
        } else {
            $("#ectsk").css("background-color", "red");
            $("#praca").css("background-color", "red");
            $("#button").prop('disabled', true);

        }
    });
});
</script>
<?php 
    } else {
        echo '
        <div class="w3-panel w3-pale-blue w3-border">
          <h3>Informacja!</h3>
          <p>Dodaj ponownie arkusz excel z programem studiów na stronie startowej.</p>
        </div>';
    }
?>

