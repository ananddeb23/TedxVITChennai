-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2016 at 08:50 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tedx`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_info`
--

CREATE TABLE `main_info` (
  `Id` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_info`
--

INSERT INTO `main_info` (`Id`, `Fname`, `Lname`) VALUES
(1, 'Dipankar', 'Das'),
(2, 'Suporno', 'Chaudhury'),
(3, 'H Hemant', 'Sriteja');

-- --------------------------------------------------------

--
-- Table structure for table `other_info`
--

CREATE TABLE `other_info` (
  `Id` int(11) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Institution` varchar(255) NOT NULL,
  `Birthdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_info`
--

INSERT INTO `other_info` (`Id`, `Phone`, `Email`, `Institution`, `Birthdate`) VALUES
(1, '9836336470', 'cooldipanks14@gmail.com', 'Vellore Institute of Technology,Chennai', '12/07/2016'),
(2, '9790731168', 'suporno.2015@vit.ac.in', 'Vellore Institute of Technology,Chennai', '12/22/2016'),
(3, '34567890', 'heb@jg.com', 'ertg', '12/12/2016');

-- --------------------------------------------------------

--
-- Table structure for table `other_info2`
--

CREATE TABLE `other_info2` (
  `Id` int(11) NOT NULL,
  `PreviousEvents` longtext NOT NULL,
  `Quotes` longtext NOT NULL,
  `Learn` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_info2`
--

INSERT INTO `other_info2` (`Id`, `PreviousEvents`, `Quotes`, `Learn`) VALUES
(1, 'x', 'yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', 'q'),
(2, 'q', 'w', 'e'),
(3, 'a', 's', 'd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_info`
--
ALTER TABLE `main_info`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `other_info`
--
ALTER TABLE `other_info`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `other_info2`
--
ALTER TABLE `other_info2`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_info`
--
ALTER TABLE `main_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `other_info`
--
ALTER TABLE `other_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `other_info2`
--
ALTER TABLE `other_info2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
