-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 27 Maj 2020, 22:24
-- Wersja serwera: 5.7.23
-- Wersja PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `library`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autorzy`
--

DROP TABLE IF EXISTS `autorzy`;
CREATE TABLE IF NOT EXISTS `autorzy` (
  `id_autor` int(11) NOT NULL,
  `imie` text COLLATE utf8mb4_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `autorzy`
--

INSERT INTO `autorzy` (`id_autor`, `imie`, `nazwisko`) VALUES
(1, 'Stephen', 'King'),
(2, 'Adam', 'Mickiewicz'),
(3, 'Henryk', 'Sienkiewicz'),
(4, 'Eliza', 'Orzeszkowa'),
(5, 'Remigiusz', 'Mróz'),
(6, 'Aleksander', 'Kamiński'),
(7, 'Jan', 'Brzechwa');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `connect`
--

DROP TABLE IF EXISTS `connect`;
CREATE TABLE IF NOT EXISTS `connect` (
  `id_connect` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `id_tytul` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `connect`
--

INSERT INTO `connect` (`id_connect`, `id_autor`, `id_tytul`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tytuly`
--

DROP TABLE IF EXISTS `tytuly`;
CREATE TABLE IF NOT EXISTS `tytuly` (
  `id_tytul` int(11) NOT NULL,
  `tytul` text COLLATE utf8mb4_polish_ci NOT NULL,
  `isbn` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `tytuly`
--

INSERT INTO `tytuly` (`id_tytul`, `tytul`, `isbn`) VALUES
(1, 'To', 111),
(2, 'Pan Tadeusz', 222),
(3, 'Potop', 333),
(4, 'Nad Niemnem', 444),
(5, 'Kasacja', 555),
(6, 'Kamienie na szaniec', 666),
(7, 'Akademia pana Kleksa', 777);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
