-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 14 apr 2015 om 07:38
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
(8, 'b1', 'b2', 'b3', 'b4', 4),
(11, 'svem', 'bwoy', 'svennie', 'boykie', 187);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
`marker_id` int(11) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Gegevens worden geëxporteerd voor tabel `markers`
--

INSERT INTO `markers` (`marker_id`, `location_name`, `latitude`, `longitude`, `description`, `event_id`) VALUES
(3, 'test1', '51.911237875723145', '4.4831085205078125', 'Dit is een test', 0),
(4, 'test2', '51.91589700214632', '4.459590911865234', 'Dit is een test', 0),
(5, 'test3', '51.9105363176546', '4.457412958145142', 'Dit is een test', 0),
(6, 'test4', '51.918947673862554', '4.4864290952682495', 'Dit is een test', 0),
(15, 'Toegevoegde Marker', '51.95399655660274', '4.400242893607356', 'Beschrijving', 8),
(16, 'Toegevoegde Marker', '51.92883099906416', '4.460215135768522', 'Beschrijving', 9),
(17, 'Toegevoegde Marker', '51.96351820150665', '4.422106310084928', 'Beschrijving', 10),
(18, 'Toegevoegde Marker', '51.795948936289946', '4.533670601667836', 'Beschrijving', 11),
(19, 'Toegevoegde Marker', '51.96588236669979', '4.420155613333918', 'Beschrijving', 12),
(20, 'Toegevoegde Marker', '52.028452008240926', '4.501179783255793', 'Beschrijving', 12),
(21, 'Toegevoegde Marker', '52.08671523278722', '4.422215547892847', 'Beschrijving', 12),
(22, 'Toegevoegde Marker', '52.165123696347656', '4.464787571341731', 'Beschrijving', 12),
(23, 'Toegevoegde Marker', '51.96630542835122', '4.366597263724543', 'Beschrijving', 13),
(24, 'Toegevoegde Marker', '52.00182833638185', '4.461354343802668', 'Beschrijving', 13),
(25, 'Toegevoegde Marker', '52.071523424921224', '4.402302827511448', 'Beschrijving', 13),
(26, 'Toegevoegde Marker', '52.143638290630484', '4.468220798880793', 'Beschrijving', 13),
(27, '1', '51.937173987684176', '4.463078759290511', 'Beschrijving', 14),
(28, '2', '51.95748943323294', '4.453637383066962', 'Beschrijving', 14),
(29, '3', '51.98033330078439', '4.482476494886214', 'Beschrijving', 14),
(30, '4', '51.99840977032148', '4.500157616712386', 'Beschrijving', 14),
(31, 'Marker 1', '51.909860921087244', '4.484337460417009', 'Beschrijving', 15),
(32, 'Marker 2', '51.90938437604528', '4.485195766974357', 'Beschrijving', 15),
(33, 'Marker 3', '51.90906667923458', '4.486225735236076', 'Beschrijving', 15),
(34, 'Marker 4', '51.908696026613775', '4.48734153434998', 'Beschrijving', 15),
(35, 'Marker 1', '51.93452625890729', '4.431828586966731', 'Beschrijving', 16),
(36, 'Marker 2', '51.904881319362154', '4.493626681360183', 'Beschrijving', 16),
(37, 'Marker 3', '51.91123547239654', '4.456547826557653', 'Beschrijving', 16),
(38, 'Marker 4', '51.904881338754784', '4.524525730521418', 'Beschrijving', 16);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Gegevens worden geëxporteerd voor tabel `solo_events`
--

INSERT INTO `solo_events` (`solo_events_id`, `name`, `description`, `marker1_id`, `marker2_id`, `marker3_id`, `marker4_id`, `artist_id`) VALUES
(13, 'xx', 'xx', 23, 24, 25, 26, 7),
(14, 'hh', 'hh', 27, 28, 29, 30, 7),
(15, 'Brug', 'Brug', 31, 32, 33, 34, 7),
(16, 'Tour de Jour', 'Hele toffe event', 35, 36, 37, 38, 8);

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
(9, '3a', '3b', '3c', '3d', '3f', '3g', 3),
(10, 'drie', 'drie', 'drie', 'drie', 'drie', 'drie', 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(45) NOT NULL,
  `type` int(3) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `type`, `email`, `password`) VALUES
(7, 1, '1@1.nl', '098f6bcd4621d373cade4e832627b4f6'),
(8, 2, '2@2.nl', '098f6bcd4621d373cade4e832627b4f6'),
(9, 3, '3@3.nl', '098f6bcd4621d373cade4e832627b4f6'),
(10, 3, 'casper@live.nl', '098f6bcd4621d373cade4e832627b4f6'),
(11, 2, 'sven@live.nl', '098f6bcd4621d373cade4e832627b4f6');

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
-- Indexen voor tabel `solo_events`
--
ALTER TABLE `solo_events`
 ADD PRIMARY KEY (`solo_events_id`);

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
MODIFY `marker_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT voor een tabel `solo_events`
--
ALTER TABLE `solo_events`
MODIFY `solo_events_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
MODIFY `id` int(45) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
