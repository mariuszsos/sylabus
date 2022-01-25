<?php
include('config.php');
include('inc/danesyl.php');

if($ileEfekty != 0) {
    for ($i = 0; $i < $ileEfekty; $i++) {
        $e1 = 'kategoriaE'.$i;
        $e2 = 'efektyUcznia'.$i;
        $e3 = 'kodEfektu'.$i;
        $e4 = 'oddzialywanieE'.$i;
        $tablicaEfektow[$i] = array(
            'kategoria' => $_POST[$e1],
            'tresc' => $_POST[$e2],
            'kod' => $_POST[$e3],
            'oddzialywanie' => $_POST[$e4]
        );
    }

    for($i = 0; $i < $ileEfekty; $i ++) {
        $kategoriaEfektu[$i] = 'kategoriaEfektu#'.($i+1);
        $efekty[$i] = 'efekty#'.($i+1);
        $kodEfeku[$i] = 'kodEfektu#'.($i+1);
        $oddzialywanieEfektu[$i] = 'oddzialywanieEfektu#'.($i+1);
    }

    for($i = 0; $i < $ileEfekty; $i ++ ) {
        $wynik[$kategoriaEfektu[$i]] = $tablicaEfektow[$i]['kategoria'];
        $wynik[$efekty[$i]] = $tablicaEfektow[$i]['tresc'];
        $wynik[$kodEfeku[$i]] = $tablicaEfektow[$i]['kod'];
        $wynik[$oddzialywanieEfektu[$i]] = $tablicaEfektow[$i]['oddzialywanie'];
    }

}

if($forma == 'stac') {
        $fStac = $czarny;
        $fNstac = $bialy;
        } else {
        $fStac = $bialy;
        $fNstac = $czarny;
        }

if($status1 == 'podstawowe') {
        $sPods = $czarny;
        $sKier = $bialy;
    } else {
        $sPods = $bialy;
        $sKier = $czarny;
    }
if($status2 == 'obowiazkowe') {
        $sObow = $czarny;
        $sWybor = $bialy;
    } else {
        $sObow = $bialy;
        $sWybor = $czarny;
    }
if($semestr == 'zimowy') {
        $sZim = $czarny;
        $sLet = $bialy;
    } else {
        $sZim = $bialy;
        $sLet = $czarny;
}


$templateProcessor->setValues(array(
    'nazwaPrzedmiotu' => $nazwaZajec, 
    'nazwaPrzedmiotuAng' => $nazwaZajecEn,
    'ects' => $ects,
    'kierunek' => $kierunek,
    'jezyk' => $jezyk,
    'poziomStudiow' => $poziom,
    'nrSem' => $semNr,
    'rok' => $rok,
    'kodPrzedmiotu' => $kod,

    'formaStac' => htmlspecialchars_decode($fStac),
    'formaNstac' => htmlspecialchars_decode($fNstac),
    'statusPods' => htmlspecialchars_decode($sPods),
    'statusKier' => htmlspecialchars_decode($sKier),
    'statusObow' => htmlspecialchars_decode($sObow),
    'statusWybor' => htmlspecialchars_decode($sWybor),
    'semZim' => htmlspecialchars_decode($sZim),
    'semLet' => htmlspecialchars_decode($sLet),

    'koordynator' => $koordynator,
    'prowadzacy' => $prowadzacy,
    'jednostkaRealizujaca' => $jednostkaRealizujaca,
    'jednostkaZlecajaca' => $jednostkaZlecajaca,
    'zalozeniaCeleOpis' => $zalozenia,
    'formyDydaktyczne' => $formyDydaktyczne,
    'metodyDydaktyczne' => $metodyDydaktyczne,
    'wymaganiaFormalne' => $wymagania,
    'efektyWiedza' => $efektWiedza,
    'efektyUmiejetnosci' => $efektUm,
    'efektyKompetencje' => $efektKom,
    'sposobWeryfikacji' => $weryfikacja,
    'formaDokumentacji' => $formaDokumentacji,
    'elementyOcena' => $elementyWagi,
    'miejsceZajec' => $miejsceZajec,
    'literatura' => $literatura,
    'uwagi' => $uwagi,
    'pracaStudenta' => $pracaStudenta,
    'ectsK' => $ectsK
));

$templateProcessor->cloneRow('kategoriaEfektu', $ileEfekty);
$templateProcessor->setValues($wynik);
$templateProcessor->saveAs('sylabus.docx');
echo 'OK';

?>