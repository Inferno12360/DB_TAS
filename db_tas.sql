-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 27. Sep 2023 um 07:58
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
  `Hausnummer` int(11) DEFAULT NULL,
  `FK_Ort` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tbl_betrieb`
--

INSERT INTO `tbl_betrieb` (`PK_Betrieb`, `Name`, `EMail`, `Tel`, `Strasse`, `Hausnummer`, `FK_Ort`) VALUES
(1, 'Firma A', 'firma_a@example.com', 123456789, 'Musterstraße', 123, NULL),
(2, 'Firma B', 'firma_b@example.com', 987654321, 'Hauptstraße', 456, NULL),
(3, 'Firma C', 'firma_c@example.com', 555555555, 'Nebengasse', 789, NULL),
(4, 'Firma D', 'firma_d@example.com', 111111111, 'Marktplatz', 1011, NULL),
(5, 'Firma E', 'firma_e@example.com', 999999999, 'Testweg', 1213, NULL);

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
  `Steuernummer` int(11) DEFAULT NULL,
  `FK_Vertrag` int(11) DEFAULT NULL,
  `FK_Ort` int(11) DEFAULT NULL,
  `FK_Kurs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tbl_dozent`
--

INSERT INTO `tbl_dozent` (`PK_Dozent`, `Vorname`, `Nachname`, `Anrede`, `Kuerzel`, `Strasse`, `Hausnummer`, `Steuernummer`, `FK_Vertrag`, `FK_Ort`, `FK_Kurs`) VALUES
(1, 'Max', 'Mustermann', 'Herr', 'MM', 'Musterstraße', 1, 123456789, NULL, NULL, NULL),
(2, 'Anna', 'Schmidt', 'Frau', 'AS', 'Hauptstraße', 2, 987654321, NULL, NULL, NULL),
(3, 'Peter', 'Müller', 'Herr', 'PM', 'Nebengasse', 3, 555555555, NULL, NULL, NULL),
(4, 'Sabine', 'Schulz', 'Frau', 'SS', 'Marktplatz', 4, 111111111, NULL, NULL, NULL),
(5, 'Michael', 'Meier', 'Herr', 'MM', 'Testweg', 5, 999999999, NULL, NULL, NULL);

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

--
-- Daten für Tabelle `tbl_kurs`
--

INSERT INTO `tbl_kurs` (`PK_Kurs`, `Kursnummer`, `Kurstyp`, `Datum`, `Raumnummer`, `Kursart`, `Kursgebuehr`, `Hausnummer`, `Strasse`, `Kursbeschreibung`, `Laenge`, `Max_Teilnehmer`, `Min_Teilnehmer`) VALUES
(1, 1001, 'Seminarkurs', '0000-00-00 00:00:00', 101, 'Programmieren', 500, 123, 'Musterstraße', 'Einführung in die Programmierung', 4, 20, 5),
(2, 1002, 'Workshop', '0000-00-00 00:00:00', 202, 'Marketing', 300, 127, 'Hauptstraße', 'Grundlagen des Marketings', 3, 15, 5),
(3, 1003, 'Sprachkurs', '0000-00-00 00:00:00', 303, 'Sprachen', 600, 127, 'Nebengasse', 'Englisch für Anfänger', 8, 25, 5),
(4, 1004, 'Seminarkurs', '0000-00-00 00:00:00', 404, 'Buchhaltung', 450, 127, 'Marktplatz', 'Einführung in die Buchhaltung', 5, 18, 6),
(5, 1005, 'Workshop', '0000-00-00 00:00:00', 505, 'Webdesign', 400, 127, 'Testweg', 'Webdesign-Grundlagen', 3, 12, 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_kurs_dozent`
--

CREATE TABLE `tbl_kurs_dozent` (
  `Datum` datetime DEFAULT NULL,
  `PDF_Link` varchar(90) DEFAULT NULL,
  `FK_Dozent` int(11) DEFAULT NULL,
  `FK_Kurs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tbl_kurs_dozent`
--

INSERT INTO `tbl_kurs_dozent` (`Datum`, `PDF_Link`, `FK_Dozent`, `FK_Kurs`) VALUES
('0000-00-00 00:00:00', 'kurs1.pdf', NULL, NULL),
('0000-00-00 00:00:00', 'kurs2.pdf', NULL, NULL),
('0000-00-00 00:00:00', 'kurs3.pdf', NULL, NULL),
('0000-00-00 00:00:00', 'kurs4.pdf', NULL, NULL),
('0000-00-00 00:00:00', 'kurs5.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_kurs_teilnehmer`
--

CREATE TABLE `tbl_kurs_teilnehmer` (
  `Anfangszeit` datetime DEFAULT NULL,
  `Endzeit` datetime DEFAULT NULL,
  `Rechnungsart` varchar(15) DEFAULT NULL,
  `FK_Kurs` int(11) DEFAULT NULL,
  `FK_Teilnehmer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tbl_kurs_teilnehmer`
--

INSERT INTO `tbl_kurs_teilnehmer` (`Anfangszeit`, `Endzeit`, `Rechnungsart`, `FK_Kurs`, `FK_Teilnehmer`) VALUES
('0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
('0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
('0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
('0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL),
('0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL);

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

--
-- Daten für Tabelle `tbl_ort`
--

INSERT INTO `tbl_ort` (`PK_Ort`, `PLZ`, `Ort`, `Land`) VALUES
(1, 1010, 'Stadt A', 'Deutschland'),
(2, 2020, 'Stadt B', 'Deutschland'),
(3, 3030, 'Stadt C', 'Deutschland'),
(4, 4040, 'Stadt D', 'Deutschland'),
(5, 5050, 'Stadt E', 'Deutschland');

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
  `Mahnungsdatum` datetime DEFAULT NULL,
  `FK_Betrieb` int(11) DEFAULT NULL,
  `FK_Teilnehmer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tbl_rechnung`
--

INSERT INTO `tbl_rechnung` (`PK_Rechnung`, `Art_der_Leistung`, `Rechnungsnummer`, `Kursdatum`, `Betrag`, `Bezahldatum`, `Zahlungsziel`, `Bestellnummer`, `Mahnungsdatum`, `FK_Betrieb`, `FK_Teilnehmer`) VALUES
(1, 'Kursgebühr', 1001, '0000-00-00 00:00:00', 500, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, NULL, NULL, NULL),
(2, 'Kursgebühr', 1002, '0000-00-00 00:00:00', 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, NULL, NULL, NULL),
(3, 'Kursgebühr', 1003, '0000-00-00 00:00:00', 600, NULL, '0000-00-00 00:00:00', 3, NULL, NULL, NULL),
(4, 'Kursgebühr', 1004, '0000-00-00 00:00:00', 450, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, NULL, NULL, NULL),
(5, 'Kursgebühr', 1005, '0000-00-00 00:00:00', 400, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, NULL, NULL, NULL);

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
  `Telefon` int(11) DEFAULT NULL,
  `Hausnummer` tinyint(4) DEFAULT NULL,
  `Strasse` varchar(90) DEFAULT NULL,
  `Rechnungsstellung` varchar(90) DEFAULT NULL,
  `FK_Ort` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tbl_teilnehmer`
--

INSERT INTO `tbl_teilnehmer` (`PK_Teilnehmer`, `Vorname`, `Nachname`, `Anrede`, `EMail`, `Telefon`, `Hausnummer`, `Strasse`, `Rechnungsstellung`, `FK_Ort`) VALUES
(1, 'Lisa', 'Schulz', 'Frau', 'lisa@example.com', 111222333, 1, 'Musterstraße', 'Firma A', NULL),
(2, 'Tim', 'Müller', 'Herr', 'tim@example.com', 444555666, 2, 'Hauptstraße', 'Firma B', NULL),
(3, 'Laura', 'Wagner', 'Frau', 'laura@example.com', 777888999, 3, 'Nebengasse', 'Firma C', NULL),
(4, 'David', 'Becker', 'Herr', 'david@example.com', 123456789, 4, 'Marktplatz', 'Firma D', NULL),
(5, 'Sophie', 'Hoffmann', 'Frau', 'sophie@example.com', 987654321, 5, 'Testweg', 'Firma E', NULL);

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
-- Daten für Tabelle `tbl_vertrag`
--

INSERT INTO `tbl_vertrag` (`PK_Vertrag`, `Honorar`, `Kursumfang`) VALUES
(1, 1000, 'Vollzeit'),
(2, 800, 'Teilzeit'),
(3, 1200, 'Vollzeit'),
(4, 900, 'Teilzeit'),
(5, 1100, 'Vollzeit');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tbl_betrieb`
--
ALTER TABLE `tbl_betrieb`
  ADD PRIMARY KEY (`PK_Betrieb`),
  ADD KEY `FK_Ort` (`FK_Ort`);

--
-- Indizes für die Tabelle `tbl_dozent`
--
ALTER TABLE `tbl_dozent`
  ADD PRIMARY KEY (`PK_Dozent`),
  ADD KEY `FK_Vertrag` (`FK_Vertrag`),
  ADD KEY `FK_Ort` (`FK_Ort`),
  ADD KEY `FK_Kurs` (`FK_Kurs`);

--
-- Indizes für die Tabelle `tbl_kurs`
--
ALTER TABLE `tbl_kurs`
  ADD PRIMARY KEY (`PK_Kurs`);

--
-- Indizes für die Tabelle `tbl_kurs_dozent`
--
ALTER TABLE `tbl_kurs_dozent`
  ADD KEY `FK_Dozent` (`FK_Dozent`),
  ADD KEY `FK_Kurs` (`FK_Kurs`);

--
-- Indizes für die Tabelle `tbl_kurs_teilnehmer`
--
ALTER TABLE `tbl_kurs_teilnehmer`
  ADD KEY `FK_Kurs` (`FK_Kurs`),
  ADD KEY `FK_Teilnehmer` (`FK_Teilnehmer`);

--
-- Indizes für die Tabelle `tbl_ort`
--
ALTER TABLE `tbl_ort`
  ADD PRIMARY KEY (`PK_Ort`);

--
-- Indizes für die Tabelle `tbl_rechnung`
--
ALTER TABLE `tbl_rechnung`
  ADD PRIMARY KEY (`PK_Rechnung`),
  ADD KEY `FK_Betrieb` (`FK_Betrieb`),
  ADD KEY `FK_Teilnehmer` (`FK_Teilnehmer`);

--
-- Indizes für die Tabelle `tbl_teilnehmer`
--
ALTER TABLE `tbl_teilnehmer`
  ADD PRIMARY KEY (`PK_Teilnehmer`),
  ADD KEY `FK_Ort` (`FK_Ort`);

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
  MODIFY `PK_Betrieb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT für Tabelle `tbl_dozent`
--
ALTER TABLE `tbl_dozent`
  MODIFY `PK_Dozent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT für Tabelle `tbl_kurs`
--
ALTER TABLE `tbl_kurs`
  MODIFY `PK_Kurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `tbl_ort`
--
ALTER TABLE `tbl_ort`
  MODIFY `PK_Ort` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `tbl_rechnung`
--
ALTER TABLE `tbl_rechnung`
  MODIFY `PK_Rechnung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `tbl_teilnehmer`
--
ALTER TABLE `tbl_teilnehmer`
  MODIFY `PK_Teilnehmer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `tbl_vertrag`
--
ALTER TABLE `tbl_vertrag`
  MODIFY `PK_Vertrag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `tbl_betrieb`
--
ALTER TABLE `tbl_betrieb`
  ADD CONSTRAINT `tbl_betrieb_ibfk_1` FOREIGN KEY (`FK_Ort`) REFERENCES `tbl_ort` (`PK_Ort`);

--
-- Constraints der Tabelle `tbl_dozent`
--
ALTER TABLE `tbl_dozent`
  ADD CONSTRAINT `tbl_dozent_ibfk_1` FOREIGN KEY (`FK_Vertrag`) REFERENCES `tbl_vertrag` (`PK_Vertrag`),
  ADD CONSTRAINT `tbl_dozent_ibfk_2` FOREIGN KEY (`FK_Ort`) REFERENCES `tbl_ort` (`PK_Ort`),
  ADD CONSTRAINT `tbl_dozent_ibfk_3` FOREIGN KEY (`FK_Kurs`) REFERENCES `tbl_kurs` (`PK_Kurs`),
  ADD CONSTRAINT `tbl_dozent_ibfk_4` FOREIGN KEY (`FK_Vertrag`) REFERENCES `tbl_vertrag` (`PK_Vertrag`),
  ADD CONSTRAINT `tbl_dozent_ibfk_5` FOREIGN KEY (`FK_Ort`) REFERENCES `tbl_ort` (`PK_Ort`),
  ADD CONSTRAINT `tbl_dozent_ibfk_6` FOREIGN KEY (`FK_Kurs`) REFERENCES `tbl_kurs` (`PK_Kurs`),
  ADD CONSTRAINT `tbl_dozent_ibfk_7` FOREIGN KEY (`FK_Vertrag`) REFERENCES `tbl_vertrag` (`PK_Vertrag`),
  ADD CONSTRAINT `tbl_dozent_ibfk_8` FOREIGN KEY (`FK_Ort`) REFERENCES `tbl_ort` (`PK_Ort`),
  ADD CONSTRAINT `tbl_dozent_ibfk_9` FOREIGN KEY (`FK_Kurs`) REFERENCES `tbl_kurs` (`PK_Kurs`);

--
-- Constraints der Tabelle `tbl_kurs_dozent`
--
ALTER TABLE `tbl_kurs_dozent`
  ADD CONSTRAINT `tbl_kurs_dozent_ibfk_1` FOREIGN KEY (`FK_Dozent`) REFERENCES `tbl_dozent` (`PK_Dozent`),
  ADD CONSTRAINT `tbl_kurs_dozent_ibfk_2` FOREIGN KEY (`FK_Kurs`) REFERENCES `tbl_kurs` (`PK_Kurs`);

--
-- Constraints der Tabelle `tbl_kurs_teilnehmer`
--
ALTER TABLE `tbl_kurs_teilnehmer`
  ADD CONSTRAINT `tbl_kurs_teilnehmer_ibfk_1` FOREIGN KEY (`FK_Kurs`) REFERENCES `tbl_kurs` (`PK_Kurs`),
  ADD CONSTRAINT `tbl_kurs_teilnehmer_ibfk_2` FOREIGN KEY (`FK_Teilnehmer`) REFERENCES `tbl_teilnehmer` (`PK_Teilnehmer`);

--
-- Constraints der Tabelle `tbl_rechnung`
--
ALTER TABLE `tbl_rechnung`
  ADD CONSTRAINT `tbl_rechnung_ibfk_1` FOREIGN KEY (`FK_Betrieb`) REFERENCES `tbl_betrieb` (`PK_Betrieb`),
  ADD CONSTRAINT `tbl_rechnung_ibfk_2` FOREIGN KEY (`FK_Teilnehmer`) REFERENCES `tbl_teilnehmer` (`PK_Teilnehmer`);

--
-- Constraints der Tabelle `tbl_teilnehmer`
--
ALTER TABLE `tbl_teilnehmer`
  ADD CONSTRAINT `tbl_teilnehmer_ibfk_1` FOREIGN KEY (`FK_Ort`) REFERENCES `tbl_ort` (`PK_Ort`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
