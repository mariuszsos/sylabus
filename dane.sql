CREATE TABLE `dane` (
  `id` int(11) NOT NULL,
  `nazwa_zajec` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nazwa_zajec_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kierunek` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jezyk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poziom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `forma` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ects` int(11) NOT NULL,
  `semNr` int(11) NOT NULL,
  `semestr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rok` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kod` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `koordynator` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prowadzacy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jednostkaRealizujaca` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jednostkaZlecajaca` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `zalozenia` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `formyDydaktyczne` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `metodyDydaktyczne` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wymagania` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `efektWiedza` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `efektUm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `efektKom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `weryfikacja` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `formaDokumentacji` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `elementyWagi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `miejsceZajec` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `literatura` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `uwagi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pracaStudenta` int(11) NOT NULL,
  `ectsK` int(11) NOT NULL,
  `ileEfekty` int(11) NOT NULL,
  `kat_efektu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `efekty_calosc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kod_efektu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `oddzialywanie` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sylabus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `dane`
--

INSERT INTO `dane` (`id`, `nazwa_zajec`, `nazwa_zajec_en`, `kierunek`, `jezyk`, `poziom`, `forma`, `status1`, `status2`, `ects`, `semNr`, `semestr`, `rok`, `kod`, `koordynator`, `prowadzacy`, `jednostkaRealizujaca`, `jednostkaZlecajaca`, `zalozenia`, `formyDydaktyczne`, `metodyDydaktyczne`, `wymagania`, `efektWiedza`, `efektUm`, `efektKom`, `weryfikacja`, `formaDokumentacji`, `elementyWagi`, `miejsceZajec`, `literatura`, `uwagi`, `pracaStudenta`, `ectsK`, `ileEfekty`, `kat_efektu`, `efekty_calosc`, `kod_efektu`, `oddzialywanie`, `sylabus`) VALUES
(1, 'Wstep do programowania', 'Introduction to programming', 'Informatyka i ekonometria', 'polski', 'studia I stopnia', 'stacjonarne', 'podstawowe', 'obowiazkowe', 4, 1, 'zimowy', '2019/2020', 'ZIM-IN-1S-01Z-01', 'Kordynator zmieniony', 'prowadzącyadawwadadwwad', 'jednostkaR', 'jednostkaZ', 'Założenia, cele i opis zajęć:	Celem przedmiotu jest wprowadzenie podstawowych pojęć programistycznych i struktur danych, umożliwiających stworzenie prostych programów komputerowych. \r\n\r\nPrzedmiot przygotowuje studentów do przedmiotów realizowanych na kolejnych semestrach studiów: Algorytmy i Struktury Danych oraz Programowanie Obiektowe. \r\n\r\nW ramach przedmiotu student nabywa teoretyczną wiedzę z zakresu programowania oraz umiejętność implementacji prostych programów z wykorzystaniem środowiska programistycznego.\r\n\r\nTematyka wykładów i ćwiczeń laboratoryjnych: \r\n•Wprowadzenie do środowiska programistycznego\r\n•Użycie zmiennych\r\n•Wprowadzanie i wyprowadzenie danych\r\n•Warunkowe i wielokrotne wywoływanie instrukcji (pętle, rekurencja)\r\n•Tablice \r\n•Funkcje\r\n•Struktury, klasy\r\n•Obsługa plików\r\n•Wyjątki\r\n', 'a)	wykład;  15 h;  \r\nb)	ćwiczenia laboratoryjne;  30 h;  ', 'Wykład, dyskusja problemu, laboratoria, prezentacja i analiza kodów źródłowych, konsultacje,  platforma e-learningowa', 'brak', '\r\n13 -  posiada wiedzę na temat tworzenia prostych programów komputerowych z wykorzystaniem języka programowania oraz dedykowanego środowiska programistycznego\r\n', '15 - potrafi stworzyć programy komputerowe z wykorzystaniem technik programistycznych oraz implementować algorytmy rozwiązujące problemy obliczeniowe', '', 'Sprawdzian praktyczny, ocena zadań wykonywanych w trakcie zajęć laboratoryjnych', 'Zadania wykonywane podczas zajęć (archiwum z portalu e-learningowego)\r\nSprawdziany praktyczne wykonywane podczas zajęć (archiwum z portalu e-learningowego)\r\n', 'Sprawdzian praktyczny – 100%', 'Wykład - sala audytoryjna, ćwiczenia laboratoryjne – laboratorium komputerowe', 'Wstęp do programowania w języku C#, Adam Boduch, Helion 2006\r\nC#. Rusz głową!, Jennifer Greene, Andrew Stellman, Helion 2014\r\nC#. Ćwiczenia, Marcin Lis, Helion 2016\r\nVisual Studio .NET: .NET Framework. Czarna księga, Templeman, Vitter, Helion\r\nJęzyk ANSI C, B. Kernighan, D. Ritchie, Wydawnictwa Naukowo-Techniczne, Warszawa 2004\r\nC# Fundamentals for Absolute Beginners, MVA Course, https://mva.microsoft.com/en-US/training-courses/c-fundamentals-for-absolute-beginners-16169\r\n', 'Minimalna liczba punktów konieczna do zaliczenia: 50%', 100, 4, 2, 'Wiedza 1;Wiedza 2;Wiedza 3', 'Wiedza1efekt1;Wiedza2efekt1;Wiedza3efekt', 'kod1;kod2;kod3', '1;2;3', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dane`
--
ALTER TABLE `dane`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `dane`
--
ALTER TABLE `dane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
