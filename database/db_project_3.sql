-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Machine: localhost:8889
-- Gegenereerd op: 07 apr 2015 om 16:35
-- Serverversie: 5.5.38
-- PHP-versie: 5.6.2

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
-- Tabelstructuur voor tabel `active_events`
--

CREATE TABLE `active_events` (
`active_events_id` int(11) NOT NULL,
  `marker1_check` int(11) NOT NULL,
  `marker2_check` int(11) NOT NULL,
  `marker3_check` int(11) NOT NULL,
  `marker4_check` int(11) NOT NULL,
  `users_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `active_events_has_users`
--

CREATE TABLE `active_events_has_users` (
  `active_events_active_events_id` int(11) NOT NULL,
  `users_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artists`
--

CREATE TABLE `artists` (
`artist_id` int(11) NOT NULL,
  `nme` varchar(45) DEFAULT NULL,
  `management` varchar(45) DEFAULT NULL,
  `contactpersoon_firstname` varchar(45) DEFAULT NULL,
  `contactpersoon_lastname` varchar(45) DEFAULT NULL,
  `phonenumber` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `group_events`
--

CREATE TABLE `group_events` (
`group_events_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `artist_id` int(11) NOT NULL,
  `marker1_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `markers`
--

CREATE TABLE `markers` (
`marker_id` int(11) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `solo_events`
--

CREATE TABLE `solo_events` (
`solo_events_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `marker1_id` int(11) NOT NULL,
  `marker2_id` int(11) NOT NULL,
  `marker3_id` int(11) NOT NULL,
  `marker4_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sponsors`
--

CREATE TABLE `sponsors` (
`sponsor_id` int(11) NOT NULL,
  `companyname` varchar(45) DEFAULT NULL,
  `contactpersoon_firstname` varchar(45) DEFAULT NULL,
  `contactpersoon_lastname` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `place` varchar(45) DEFAULT NULL,
  `zipcode` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
`user_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
`user_id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `place` varchar(45) DEFAULT NULL,
  `zipcode` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `active_events`
--
ALTER TABLE `active_events`
 ADD PRIMARY KEY (`active_events_id`), ADD KEY `fk_active_events_users1_idx` (`users_user_id`);

--
-- Indexen voor tabel `active_events_has_users`
--
ALTER TABLE `active_events_has_users`
 ADD KEY `fk_active_events_has_users_users1_idx` (`users_user_id`), ADD KEY `fk_active_events_has_users_active_events_idx` (`active_events_active_events_id`);

--
-- Indexen voor tabel `artists`
--
ALTER TABLE `artists`
 ADD PRIMARY KEY (`artist_id`);

--
-- Indexen voor tabel `group_events`
--
ALTER TABLE `group_events`
 ADD PRIMARY KEY (`group_events_id`);

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
 ADD PRIMARY KEY (`user_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `active_events`
--
ALTER TABLE `active_events`
MODIFY `active_events_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `artists`
--
ALTER TABLE `artists`
MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `group_events`
--
ALTER TABLE `group_events`
MODIFY `group_events_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `markers`
--
ALTER TABLE `markers`
MODIFY `marker_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `solo_events`
--
ALTER TABLE `solo_events`
MODIFY `solo_events_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `sponsors`
--
ALTER TABLE `sponsors`
MODIFY `sponsor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `active_events`
--
ALTER TABLE `active_events`
ADD CONSTRAINT `fk_active_events_users1` FOREIGN KEY (`users_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `active_events_has_users`
--
ALTER TABLE `active_events_has_users`
ADD CONSTRAINT `fk_active_events_has_users_active_events` FOREIGN KEY (`active_events_active_events_id`) REFERENCES `active_events` (`active_events_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_active_events_has_users_users1` FOREIGN KEY (`users_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
