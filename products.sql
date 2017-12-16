-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 08:01 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lis161_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `dateom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `category`, `dateom`) VALUES
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
(20, 'Wildcat', 'Consile', '2015');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
