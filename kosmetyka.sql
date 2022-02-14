-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 01 Lis 2020, 21:38
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kosmetyka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownik`
--

CREATE TABLE `pracownik` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `haslo` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `rola_id` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pracownik`
--

INSERT INTO `pracownik` (`id`, `nazwa`, `haslo`, `rola_id`) VALUES
(1, 'admin', 'admin', 1),
(2, 'Basia', 'haslo', 1),
(3, 'Kasia', 'haslo', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacja`
--

CREATE TABLE `rezerwacja` (
  `id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `godzina` tinyint(4) DEFAULT NULL,
  `telefon_klienta` int(9) DEFAULT NULL,
  `uwagi` text COLLATE utf8_polish_ci DEFAULT NULL,
  `id_usluga` int(11) DEFAULT NULL,
  `id_pracownik` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rezerwacja`
--

INSERT INTO `rezerwacja` (`id`, `data`, `godzina`, `telefon_klienta`, `uwagi`, `id_usluga`, `id_pracownik`) VALUES
(1, '2021-01-01', 13, 123456789, 'Proszę o staranne wykonanie', 1, 1),
(2, '2021-01-16', 15, 123456789, 'Proszę o staranne wykonanie', 1, 1),
(3, '2021-01-01', 17, 666666666, 'Brak', 3, 1),
(19, '2021-01-01', 15, 858058567, 'Brak dodatkowych usług', 3, 2),
(21, '2021-01-01', 10, 892029523, 'brak', 10, 2),
(22, '2021-02-10', 12, 512525253, '', 11, 2),
(23, '2020-12-31', 14, 999999999, 'No nie wiem', 10, 2),
(24, '2022-03-06', 14, 969797955, 'Kolejna przykładowa usługa', 4, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rola`
--

CREATE TABLE `rola` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(30) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rola`
--

INSERT INTO `rola` (`id`, `nazwa`) VALUES
(1, 'Administrator'),
(2, 'Pracownik');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `usluga`
--

CREATE TABLE `usluga` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(100) COLLATE utf8_polish_ci DEFAULT NULL,
  `cena` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `usluga`
--

INSERT INTO `usluga` (`id`, `nazwa`, `cena`) VALUES
(1, 'Manicure + lakier monofaza', '60'),
(2, 'Manicure japoński', '60'),
(3, 'Usunięcie żelu/ acrylu', '50'),
(4, 'Malowanie hybrydowe french', '50'),
(5, 'Usunięcie lakieru hybrydowego', '20'),
(6, 'Malowanie hybrydowe', '40'),
(7, 'Manicure hybrydowy', '70'),
(8, 'Malowanie paznokci', '20'),
(9, 'Opiłowanie paznokci', '20'),
(10, 'RYTUAŁ WINOGROWA REGENERACJA - detoks i odżywienie', '200'),
(11, 'LUKSUSOWY RYTUAŁ TRUFLOWY - Anti-age', '200'),
(12, 'RYTUAŁ TROPIKALNA ROZKOSZ OWOCÓW MANGO - nawilżenie i ochrona', '200'),
(13, 'RYTUAŁ HARMONIA ZIELONEJ HERBATY - regeneracja i relaks', '200'),
(14, 'CZYSZCZENIE KWASEM - oczyszczające', '200'),
(15, 'Laserowe usuwanie makijażu permanentnego brwi', '200'),
(16, 'Odświeżenie makijażu do 1,5 roku od zabiegu w naszym salonie', '100'),
(17, 'Metoda cienia, cień ombre, metoda pudrowa', '800'),
(18, 'Odświeżenie makijażu oczu do 1,5 roku od zabiegu w naszym salonie', '600'),
(19, 'Kreska dekoracyjna górna', '700'),
(20, 'Kreski komplet', '650'),
(21, 'Kreska dolna', '250'),
(22, 'Kreska górna w linii rzęs', '650'),
(23, 'Usta kontur z wypełnieniem lub cieniowaniem', '850'),
(24, 'Usta kontur', '500'),
(25, 'Odświeżenie makijażu do 1,5 roku od zabiegu w naszym salonie', '600'),
(26, 'Masaż', '200');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rola_id_fk` (`rola_id`);

--
-- Indeksy dla tabeli `rezerwacja`
--
ALTER TABLE `rezerwacja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usluga_fk` (`id_usluga`),
  ADD KEY `id_pracownik_fk2` (`id_pracownik`);

--
-- Indeksy dla tabeli `rola`
--
ALTER TABLE `rola`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `usluga`
--
ALTER TABLE `usluga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `rezerwacja`
--
ALTER TABLE `rezerwacja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT dla tabeli `rola`
--
ALTER TABLE `rola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `usluga`
--
ALTER TABLE `usluga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  ADD CONSTRAINT `rola_id_fk` FOREIGN KEY (`rola_id`) REFERENCES `rola` (`id`);

--
-- Ograniczenia dla tabeli `rezerwacja`
--
ALTER TABLE `rezerwacja`
  ADD CONSTRAINT `id_pracownik_fk2` FOREIGN KEY (`id_pracownik`) REFERENCES `pracownik` (`id`),
  ADD CONSTRAINT `id_usluga_fk` FOREIGN KEY (`id_usluga`) REFERENCES `usluga` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
