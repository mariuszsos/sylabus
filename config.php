<?php
    require 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Reader\Xls;

    $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('szablon_sylabus.docx');

    $czarny = '&#9632;'; // zamalowany kwadrat
    $bialy = '&#9633;'; // niezamalowany kwadrat

    $config['host'] = 'localhost';
    $config['user'] = 'root';
    $config['haslo'] = '';
    $config['baza'] = 'sylabus';
    $config['navbar'] = 'Obsługa sylabusów';
    $config['tytul'] = 'Obsługa sylabusów - praca inżynierska';

    $mysqli = new mysqli($config['host'], $config['user'], $config['haslo'], $config['baza']);
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
?>