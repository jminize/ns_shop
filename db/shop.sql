-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2019 at 10:49 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `no_design` int(11) NOT NULL,
  `name_design` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`no_design`, `name_design`) VALUES
(1, 'a.png'),
(2, 'b.png'),
(3, 'g.png'),
(4, 's.png'),
(5, 't.png'),
(6, 'u.png'),
(7, 'format2.png'),
(8, 'format2-2.png'),
(9, 'format2-3.png'),
(10, 'format2-4.png'),
(11, 'format3-1.png'),
(12, 'format3-2.png'),
(13, 'format3-3.png'),
(14, 'format3-4.png');

-- --------------------------------------------------------

--
-- Table structure for table `mainback`
--

CREATE TABLE `mainback` (
  `no_mainback` int(11) NOT NULL,
  `name_nameback` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mainback`
--

INSERT INTO `mainback` (`no_mainback`, `name_nameback`) VALUES
(1, 'mainback1.png'),
(2, 'mainback2.png'),
(3, 'mainback3.png'),
(4, 'mainback4.png'),
(5, 'mainback5.png'),
(6, 'mainback6.png'),
(7, 'mainback7.png'),
(8, 'mainbackdefult.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`no_design`);

--
-- Indexes for table `mainback`
--
ALTER TABLE `mainback`
  ADD PRIMARY KEY (`no_mainback`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `no_design` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mainback`
--
ALTER TABLE `mainback`
  MODIFY `no_mainback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
