-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2017 at 06:43 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lis161_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `dateom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `dateom`) VALUES
(1, 'Abyssus', 'Mouse', '2009'),
(2, 'Copperhead', 'Mouse', '2005'),
(3, 'Deathadder', 'Mouse', '2006'),
(4, 'Diamondback', 'Mouse', '2004'),
(5, 'Imperator', 'Mouse', '2011'),
(6, 'Mamba', 'Mouse', '2009'),
(7, 'Naga', 'Mouse', '2009'),
(8, 'Ouroboros', 'Mouse', '2012'),
(9, 'Taipan', 'Mouse', '2012'),
(10, 'Viper', 'Mouse', '2004'),
(11, 'Tarantula', 'Keyboard', '2006'),
(12, 'Marauder', 'Keyboard', '2010'),
(13, 'Blackwidow', 'Keyboard', '2010'),
(14, 'Death Stalker', 'Keyboard', '2010'),
(15, 'Blade', 'Laptop', '2014'),
(16, 'Leviathan', 'Audio', '2015'),
(17, 'Man O War', 'Audio', '2016'),
(18, 'Thresher Ultimate', 'Audio', '2017'),
(19, 'Serval', 'Console', '2015'),
(20, 'Wildcat', 'Console', '2015');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
