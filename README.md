
# System zarządzania sylabusami

Oprogramowanie stworzone do dynamicznego zarządzania sylabusami na uczelni. 
Projekt stworzony w ramach pracy dyplomowej na Wydziale Zastosowania Informatyki i Matematyki w SGGW w Warszawie. 
Formatowanie dokumentów dopasowane jest do wymogów ustalonych przez władze uczelni.

![index](https://github.com/mariuszsos/sylabus/blob/master/img/opis_index.png)

## Opis działania
Aplikacja prosi użytkownika na wejściu o zaimportowanie pliku typu excel wraz z dobraniem odpowiednich kryteriów w formularzu. Następnie oprogramowanie przetwarza dane żądanie i wyświetla dane z pliku excel w formie przyjaznej dla użytkownika. Pojawiają się podstawowe opcje typu edycja, dodawanie lub usuwanie przedmiotów z sylabusa. Zmiany zapisywane są w bazie danych. 

### Przykładowe dane z arkusza
![excel](https://github.com/mariuszsos/sylabus/blob/master/img/opis_excel.png)


### Formularz edytujący przykładową pozycję z arkusza
Dodatkowo dane wypełniają się autmatycznie jeśli dany przedmiot został wcześniej wykryty w bazie danych.
![formularz](https://github.com/mariuszsos/sylabus/blob/master/img/opis_formularz.png)

## Wykorzystane narzędzia
- PHP
- MySQL
- PhpSpreadSheet
- PhpWord

