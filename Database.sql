-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 07:12 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinyl collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `Vinyl`
--

CREATE TABLE `vinyl` (
  `ID` int(11) NOT NULL,
  `Album Name` varchar(30) NOT NULL,
  `Album Artist` varchar(20) NOT NULL,
  `Year` int(4) DEFAULT NULL,
  `Genre` varchar(20) DEFAULT NULL,
  `Diameter` varchar(5) DEFAULT NULL,
  `Price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Vinyl`
--

INSERT INTO `Vinyl` (`ID`, `Album Name`, `Album Artist`, `Year`, `Genre`, `Diameter`, `Price`) VALUES
(1, 'Side of the Moon', 'Pink Floyd', 1975, 'Prog Rock', '12\"', '64.00'),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Vinyl`
--
ALTER TABLE `Vinyl`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Vinyl`
--
ALTER TABLE `Vinyl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1979;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
