-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Okt 2019 um 22:39
-- Server-Version: 10.3.16-MariaDB
-- PHP-Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `fotiface`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_image`
--

CREATE TABLE `tbl_image` (
  `id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `image_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tbl_image`
--

INSERT INTO `tbl_image` (`id`, `fk_user_id`, `image_path`, `image_name`) VALUES
(54, 1, 'images/hochzeit_jakob.jpg', 'hochzeit_jakob.jpg'),
(55, 1, 'images/hochzeit_johannes.jpg', 'hochzeit_johannes.jpg'),
(56, 1, 'images/hochzeit_michael.jpg', 'hochzeit_michael.jpg'),
(57, 1, 'images/hochzeit_nadine.jpg', 'hochzeit_nadine.jpg'),
(58, 1, 'images/hochzeit_nadine_johannes.jpg', 'hochzeit_nadine_johannes.jpg'),
(59, 1, 'images/hochzeit_pascale.jpg', 'hochzeit_pascale.jpg'),
(60, 1, 'images/hochzeit_rita_jan.jpg', 'hochzeit_rita_jan.jpg'),
(61, 1, 'images/hochzeit_sara.jpg', 'hochzeit_sara.jpg'),
(62, 1, 'images/hochzeit_sarah.jpg', 'hochzeit_sarah.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(1, 'Abrjak01', '$2y$10$mGeVzmLMHQVluqZPjeHva.Y.IzMeWIxCO2cTfcxRum0UgOS0mLO9a'),
(2, 'Brodan01', '$2y$10$.lkahx4l7eDtT4tzi9wbrutCbHuKvaRqfSeb81YkeAev52vbJVibi');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`fk_user_id`);

--
-- Indizes für die Tabelle `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT für Tabelle `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD CONSTRAINT `tbl_image_ibfk_1` FOREIGN KEY (`fk_user_id`) REFERENCES `tbl_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
