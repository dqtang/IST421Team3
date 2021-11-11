-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2021 at 01:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flexmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `Usernmae` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Profile ID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Friends List`
--

CREATE TABLE `Friends List` (
  `Profile ID` int(50) NOT NULL,
  `URL` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Post Information`
--

CREATE TABLE `Post Information` (
  `Picture` varbinary(10000) NOT NULL,
  `Comments` varchar(500) NOT NULL,
  `Likes` int(225) NOT NULL,
  `Post Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Profile Information`
--

CREATE TABLE `Profile Information` (
  `Frist Name` varchar(50) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `Phone Number` varchar(15) NOT NULL,
  `DOB` date NOT NULL,
  `Profile ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD UNIQUE KEY `Profile ID` (`Profile ID`);

--
-- Indexes for table `Friends List`
--
ALTER TABLE `Friends List`
  ADD UNIQUE KEY `Profile ID` (`Profile ID`);

--
-- Indexes for table `Post Information`
--
ALTER TABLE `Post Information`
  ADD PRIMARY KEY (`Post Id`);

--
-- Indexes for table `Profile Information`
--
ALTER TABLE `Profile Information`
  ADD PRIMARY KEY (`Profile ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Post Information`
--
ALTER TABLE `Post Information`
  MODIFY `Post Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Profile Information`
--
ALTER TABLE `Profile Information`
  MODIFY `Profile ID` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
