-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 25. Sep 2023 um 13:51
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
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `tbl_betrieb`
--
ALTER TABLE `tbl_betrieb`
  MODIFY `PK_Betrieb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `tbl_betrieb`
--
ALTER TABLE `tbl_betrieb`
  ADD CONSTRAINT `tbl_betrieb_ibfk_1` FOREIGN KEY (`FK_Ort`) REFERENCES `tbl_ort` (`PK_Ort`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
