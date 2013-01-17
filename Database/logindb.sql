-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 17. Jan 2013 um 19:50
-- Server Version: 5.5.16
-- PHP-Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `logindb`
--
CREATE DATABASE `logindb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `logindb`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(1) NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `FBname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `IP` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Agent` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LoginDay` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `LoginPerDay` int(5) NOT NULL,
  `LoginPerWeek` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Daten für Tabelle `account`
--

INSERT INTO `account` (`ID`, `name`, `gender`, `location`, `birthday`, `email`, `FBname`, `password`, `IP`, `Agent`, `LoginDay`, `LoginPerDay`, `LoginPerWeek`) VALUES
(1, 'admin', 1, 'VN', '1991-01-01', 'admin@admin.com', 'admin', '123456', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/20100101 Firefox/18.0', 'January 17, 2013', 1, 1),
(2, 'aaaa', 1, 'US', '1992-01-01', 'aaaa@abc.com', 'aaaa', '123456', '202.203.1.5', 'Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/20100101 Firefox/18.0', 'January 17, 2013', 5, 32),
(3, 'bbbb', 0, 'AU', '1993-01-01', 'bbbb@abc.com', 'bbbb', '123456', '193.99.10.190', 'Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/20100101 Firefox/18.0', 'January 17, 2013', 7, 43),
(4, 'cccc', 1, 'CN', '1994-01-01', 'cccc@abc.com', 'cccc', '123456', '100.92.250.25', 'Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/20100101 Firefox/18.0', 'January 17, 2013', 3, 24);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `session_data` text COLLATE utf8_unicode_ci NOT NULL,
  `session_expiration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `sessions`
--

INSERT INTO `sessions` (`session_id`, `session_data`, `session_expiration`) VALUES
('0e138h92kb0bip7nkphj9uhv62', '', '0000-00-00 00:00:00'),
('le584dpp6itbsmn6mum7nq6in4', '', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
