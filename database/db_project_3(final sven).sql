-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 10 apr 2015 om 05:55
-- Serverversie: 5.6.21
-- PHP-versie: 5.6.3

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `markers`
--

INSERT INTO `markers` (`marker_id`, `location_name`, `latitude`, `longitude`, `description`) VALUES
(3, 'Van Speykstraat', '51.918438140078074', '4.4662803411483765', 'Veel plezier met de volgende locaties!'),
(4, 'Nieuwe Binnenweg', '51.916313917450694', '4.469627737998962', 'Als jullie alle locaties hebben bezocht, kunnen jullie vette exclusive tracks beluisteren.'),
(5, 'Karel Doormanstraat', '51.91933809194015', '4.475351572036743', 'Hier heb ik inspiratie opgedaan voor enkele tracks.'),
(6, 'Jacobusstraat', '51.91735949753421', '4.474284052848816', 'Hier ga ik vaak met mijn vrienden eten.'),
(7, 'Hogeschool Rotterdam', '51.91710803113037', '4.483875632286072', 'Speciaal voor mijn fans op de Hogeschool Rotterdam geef ik een optreden bij de Wijnhaven.  -Winne');

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
(3, 'DRIEE', 'DRIEE', 'DIREE', 'DRIE', 'DRIE', 'DRIE', 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(45) NOT NULL,
  `type` int(3) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `type`, `email`, `password`) VALUES
(1, 3, 'EEN@EEN.nl', '3a05e8ce348b0a2a6f03179e379d98bf'),
(2, 3, 'TWEE@TWEE.nl', 'e6d0d2f673e4a721a60b5a7ffd704ff7'),
(3, 3, 'dirie@drie.nl', '3ab69e37be2ce9ab5a4791c98bf48cb8'),
(4, 3, 'winne@gmail.com', 'test'),
(5, 1, 'fan@gmail.com', 'test');

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
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `markers`
--
ALTER TABLE `markers`
MODIFY `marker_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
MODIFY `id` int(45) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
