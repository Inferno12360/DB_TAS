-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Sep 2023 um 14:19
-- Server-Version: 10.4.22-MariaDB
-- PHP-Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `db_tas`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_betrieb`
--

CREATE TABLE `tbl_betrieb` (
  `PK_Betrieb` int(11) NOT NULL,
  `Name` varchar(90) DEFAULT NULL,
  `EMail` varchar(90) DEFAULT NULL,
  `Tel` int(11) DEFAULT NULL,
  `Strasse` varchar(90) DEFAULT NULL,
  `Hausnummer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_dozent`
--

CREATE TABLE `tbl_dozent` (
  `PK_Dozent` int(11) NOT NULL,
  `Vorname` varchar(90) DEFAULT NULL,
  `Nachname` varchar(90) DEFAULT NULL,
  `Anrede` varchar(9) DEFAULT NULL,
  `Kuerzel` varchar(5) DEFAULT NULL,
  `Strasse` varchar(90) DEFAULT NULL,
  `Hausnummer` tinyint(4) DEFAULT NULL,
  `Steuernummer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_kurs`
--

CREATE TABLE `tbl_kurs` (
  `PK_Kurs` int(11) NOT NULL,
  `Kursnummer` int(11) DEFAULT NULL,
  `Kurstyp` varchar(90) DEFAULT NULL,
  `Datum` datetime DEFAULT NULL,
  `Raumnummer` int(11) DEFAULT NULL,
  `Kursart` varchar(90) DEFAULT NULL,
  `Kursgebuehr` double DEFAULT NULL,
  `Hausnummer` tinyint(4) DEFAULT NULL,
  `Strasse` varchar(90) DEFAULT NULL,
  `Kursbeschreibung` varchar(90) DEFAULT NULL,
  `Laenge` int(11) DEFAULT NULL,
  `Max_Teilnehmer` int(11) DEFAULT NULL,
  `Min_Teilnehmer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_kurs_dozent`
--

CREATE TABLE `tbl_kurs_dozent` (
  `Datum` datetime DEFAULT NULL,
  `PDF_Link` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_kurs_teilnehmer`
--

CREATE TABLE `tbl_kurs_teilnehmer` (
  `Anfangszeit` datetime DEFAULT NULL,
  `Endzeit` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_ort`
--

CREATE TABLE `tbl_ort` (
  `PK_Ort` int(11) NOT NULL,
  `PLZ` int(11) DEFAULT NULL,
  `Ort` varchar(90) DEFAULT NULL,
  `Land` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_rechnung`
--

CREATE TABLE `tbl_rechnung` (
  `PK_Rechnung` int(11) NOT NULL,
  `Art_der_Leistung` varchar(90) DEFAULT NULL,
  `Rechnungsnummer` int(11) DEFAULT NULL,
  `Kursdatum` datetime DEFAULT NULL,
  `Betrag` double DEFAULT NULL,
  `Bezahldatum` datetime DEFAULT NULL,
  `Zahlungsziel` datetime DEFAULT NULL,
  `Bestellnummer` int(11) DEFAULT NULL,
  `Mahnungsdatum` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_teilnehmer`
--

CREATE TABLE `tbl_teilnehmer` (
  `PK_Teilnehmer` int(11) NOT NULL,
  `Vorname` varchar(90) DEFAULT NULL,
  `Nachname` varchar(90) DEFAULT NULL,
  `Anrede` varchar(9) DEFAULT NULL,
  `EMail` varchar(100) DEFAULT NULL,
  `Tel` int(11) DEFAULT NULL,
  `Hausnummer` tinyint(4) DEFAULT NULL,
  `Strasse` varchar(90) DEFAULT NULL,
  `Rechnungsstellung` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_vertrag`
--

CREATE TABLE `tbl_vertrag` (
  `PK_Vertrag` int(11) NOT NULL,
  `Honorar` double DEFAULT NULL,
  `Kursumfang` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tbl_betrieb`
--
ALTER TABLE `tbl_betrieb`
  ADD PRIMARY KEY (`PK_Betrieb`);

--
-- Indizes für die Tabelle `tbl_dozent`
--
ALTER TABLE `tbl_dozent`
  ADD PRIMARY KEY (`PK_Dozent`);

--
-- Indizes für die Tabelle `tbl_kurs`
--
ALTER TABLE `tbl_kurs`
  ADD PRIMARY KEY (`PK_Kurs`);

--
-- Indizes für die Tabelle `tbl_ort`
--
ALTER TABLE `tbl_ort`
  ADD PRIMARY KEY (`PK_Ort`);

--
-- Indizes für die Tabelle `tbl_rechnung`
--
ALTER TABLE `tbl_rechnung`
  ADD PRIMARY KEY (`PK_Rechnung`);

--
-- Indizes für die Tabelle `tbl_teilnehmer`
--
ALTER TABLE `tbl_teilnehmer`
  ADD PRIMARY KEY (`PK_Teilnehmer`);

--
-- Indizes für die Tabelle `tbl_vertrag`
--
ALTER TABLE `tbl_vertrag`
  ADD PRIMARY KEY (`PK_Vertrag`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `tbl_betrieb`
--
ALTER TABLE `tbl_betrieb`
  MODIFY `PK_Betrieb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tbl_dozent`
--
ALTER TABLE `tbl_dozent`
  MODIFY `PK_Dozent` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tbl_kurs`
--
ALTER TABLE `tbl_kurs`
  MODIFY `PK_Kurs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tbl_ort`
--
ALTER TABLE `tbl_ort`
  MODIFY `PK_Ort` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tbl_rechnung`
--
ALTER TABLE `tbl_rechnung`
  MODIFY `PK_Rechnung` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tbl_teilnehmer`
--
ALTER TABLE `tbl_teilnehmer`
  MODIFY `PK_Teilnehmer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tbl_vertrag`
--
ALTER TABLE `tbl_vertrag`
  MODIFY `PK_Vertrag` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
