-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Skapad: 24 nov 2014 kl 10:38
-- Serverversion: 5.6.14
-- PHP-version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `mobil`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `kontakt`
--

CREATE TABLE IF NOT EXISTS `kontakt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namn` varchar(10) NOT NULL,
  `efternamn` varchar(25) NOT NULL,
  `telefonnummer` int(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `kontakt`
--

INSERT INTO `kontakt` (`id`, `namn`, `efternamn`, `telefonnummer`, `mail`) VALUES
(1, 'Martin', 'Benno Klevbrand', 703548154, 'martin.benno.klevbrand@gmail.com'),
(2, 'Albin', 'Johansson', 762253866, 'Albin.aj@hotmail.se');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
