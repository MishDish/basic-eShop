-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2014 at 06:56 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `radnja2`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

CREATE TABLE IF NOT EXISTS `kategorije` (
  `kategorija_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vidljivo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`kategorija_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`kategorija_id`, `naziv`, `vidljivo`) VALUES
(1, 'Avioni', '1'),
(2, 'Odeća', '1'),
(3, 'Parfemi', '1'),
(4, 'Hrana', '1');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `korisnik_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vidljivo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`korisnik_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`korisnik_id`, `ime`, `prezime`, `email`, `lozinka`, `vidljivo`) VALUES
(1, 'Zoran', 'Ilic', 'a', '*667F407DE7C6AD07358FA38DAED7828A72014B4E', '1');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE IF NOT EXISTS `proizvodi` (
  `proizvod_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cena` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `opis` text COLLATE utf8_unicode_ci NOT NULL,
  `kategorija` int(10) unsigned NOT NULL,
  `vidljivo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`proizvod_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`proizvod_id`, `naziv`, `cena`, `opis`, `kategorija`, `vidljivo`) VALUES
(1, 'Boeing 737-800 NG', '900000', 'Malo presao, u voznom stanju, uradjena generalna.', 1, '1'),
(2, 'Givenchy III', '8000', 'Dobar parfem, malo iz proslosti, ali retro je u modi.', 3, '1'),
(3, 'iVar', '150', 'Novi Apple proizvod.', 4, '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
