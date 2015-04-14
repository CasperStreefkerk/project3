-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 14 apr 2015 om 03:31
-- Serverversie: 5.6.20
-- PHP-versie: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `db_project_3`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `solo_events`
--

CREATE TABLE IF NOT EXISTS `solo_events` (
`solo_events_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `marker1_id` int(11) NOT NULL,
  `marker2_id` int(11) NOT NULL,
  `marker3_id` int(11) NOT NULL,
  `marker4_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Gegevens worden geëxporteerd voor tabel `solo_events`
--

INSERT INTO `solo_events` (`solo_events_id`, `name`, `description`, `marker1_id`, `marker2_id`, `marker3_id`, `marker4_id`, `artist_id`) VALUES
(13, 'xx', 'xx', 23, 24, 25, 26, 7),
(14, 'hh', 'hh', 27, 28, 29, 30, 7),
(15, 'Brug', 'Brug', 31, 32, 33, 34, 7);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `solo_events`
--
ALTER TABLE `solo_events`
 ADD PRIMARY KEY (`solo_events_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `solo_events`
--
ALTER TABLE `solo_events`
MODIFY `solo_events_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
