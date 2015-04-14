-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 10 apr 2015 om 12:50
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
-- Tabelstructuur voor tabel `artists`
--

CREATE TABLE IF NOT EXISTS `artists` (
  `artist_id` int(45) NOT NULL,
  `name` varchar(50) NOT NULL,
  `management` varchar(50) NOT NULL,
  `contactperson_firstname` varchar(50) NOT NULL,
  `contactperson_lastname` varchar(50) NOT NULL,
  `phonenumber` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `artists`
--

INSERT INTO `artists` (`artist_id`, `name`, `management`, `contactperson_firstname`, `contactperson_lastname`, `phonenumber`) VALUES
(8, 'b1', 'b2', 'b3', 'b4', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
`marker_id` int(11) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Gegevens worden geëxporteerd voor tabel `markers`
--

INSERT INTO `markers` (`marker_id`, `location_name`, `latitude`, `longitude`, `description`) VALUES
(3, 'test1', '51.911237875723145', '4.4831085205078125', 'Dit is een test'),
(4, 'test2', '51.91589700214632', '4.459590911865234', 'Dit is een test'),
(5, 'test3', '51.9105363176546', '4.457412958145142', 'Dit is een test'),
(6, 'test4', '51.918947673862554', '4.4864290952682495', 'Dit is een test');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sponsors`
--

CREATE TABLE IF NOT EXISTS `sponsors` (
  `sponsor_id` int(11) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `contactperson_firstname` varchar(50) NOT NULL,
  `contactperson_lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `zipcode` varchar(6) NOT NULL,
  `phonenumber` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `sponsors`
--

INSERT INTO `sponsors` (`sponsor_id`, `companyname`, `contactperson_firstname`, `contactperson_lastname`, `address`, `place`, `zipcode`, `phonenumber`) VALUES
(9, '3a', '3b', '3c', '3d', '3f', '3g', 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(45) NOT NULL,
  `type` int(3) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `type`, `email`, `password`) VALUES
(7, 1, '1@1.nl', '098f6bcd4621d373cade4e832627b4f6'),
(8, 2, '2@2.nl', '098f6bcd4621d373cade4e832627b4f6'),
(9, 3, '3@3.nl', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `place` varchar(45) NOT NULL,
  `zipcode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `address`, `place`, `zipcode`) VALUES
(7, 'a1', 'a2', 'a3', 'a4', 'a5');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `artists`
--
ALTER TABLE `artists`
 ADD PRIMARY KEY (`artist_id`);

--
-- Indexen voor tabel `markers`
--
ALTER TABLE `markers`
 ADD PRIMARY KEY (`marker_id`);

--
-- Indexen voor tabel `sponsors`
--
ALTER TABLE `sponsors`
 ADD PRIMARY KEY (`sponsor_id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `markers`
--
ALTER TABLE `markers`
MODIFY `marker_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
MODIFY `id` int(45) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
