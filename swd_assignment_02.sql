-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2014 at 10:22 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `swd_assignment_02`
--

-- --------------------------------------------------------

--
-- Table structure for table `giro_ditalia_2014`
--

CREATE TABLE IF NOT EXISTS `giro_ditalia_2014` (
  `StageNo` int(11) NOT NULL AUTO_INCREMENT,
  `Route` varchar(255) NOT NULL,
  `StageProfile` varchar(255) NOT NULL,
  `Favourites` varchar(255) NOT NULL,
  PRIMARY KEY (`StageNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `giro_ditalia_2014`
--

INSERT INTO `giro_ditalia_2014` (`StageNo`, `Route`, `StageProfile`, `Favourites`) VALUES
(1, 'Belfast 21.7km', 'TTT - Team Time Trial', 'Sky Pro Cycling, Omega Pharma QuickStep, Garmin Sharp'),
(2, 'Belfast 218km', 'Flat', 'Marcel Kittel, Ben Sift, Michael Mathews, Nacer Bouhani'),
(3, 'Armagh - Dublin 187km', 'Flat', 'Marcel Kittel, Michael Mathews, Nacer Bouhani, Ben Swift'),
(4, 'Giovinazzo - Bari 121km', 'Flat', 'Marcel Kittel, Michael Mathews, Nacer Bouhani, Ben Swift'),
(5, 'Taranto - Viggiano 200km', 'Hilly', 'Cadel Evans, Daniel Martin, Nicholas Roche, Nairo Quintana'),
(6, 'Sassano - Montecassino, 247 km', 'Flat', 'Cadel Evans, Ivan Basso'),
(8, 'Foligno - Montecopiolo, 174 km', 'High Mountains', 'Dan Martin, Joaquim Rodriguez '),
(12, 'Barbaresco - Barolo, 46.4 km', 'ITT - Individual Time Trial', 'Cadel Evans'),
(14, 'Aglie - Oropa, 162km', 'High Mountains', 'Nairo Quintana'),
(16, 'Ponte di Legno - Val Martelllo/Martelltal, 139km', 'High Mountains', 'Dan Martin,Joaquim Rodriguez, Nairo Quintana'),
(20, 'Maniago - Monte Zoncolan, 167km', 'High Mountains', 'Nairo Quintana, Dan Martin, Joaquim Rodriguez ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
