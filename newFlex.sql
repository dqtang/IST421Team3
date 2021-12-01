-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 02:09 AM
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
-- Table structure for table `friends_list`
--

CREATE TABLE `friends_list` (
  `ProfileID` varchar(50) NOT NULL,
  `FriendID` varchar(50) NOT NULL,
  `table_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends_list`
--

INSERT INTO `friends_list` (`ProfileID`, `FriendID`, `table_id`) VALUES
('1', '2', 1),
('113862044103668208907', '222', 2),
('2', '1', 3),
('113862044103668208907', '333', 4),
('113862044103668208907', '555', 6);

-- --------------------------------------------------------

--
-- Table structure for table `messaging`
--

CREATE TABLE `messaging` (
  `SenderID` varchar(25) NOT NULL,
  `ReceiverID` varchar(25) NOT NULL,
  `Messages` varchar(450) NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messaging`
--

INSERT INTO `messaging` (`SenderID`, `ReceiverID`, `Messages`, `TimeStamp`) VALUES
('1', '2', 'hhhi', '2021-11-28 21:51:58'),
('2', '1', 'Hello', '2021-11-28 21:51:58'),
('', '', '22', '2021-11-28 21:51:58'),
('', '', '', '2021-11-28 21:51:58'),
('', '', '', '2021-11-28 21:51:58'),
('113862044103668208907', '', '', '2021-11-28 21:51:58'),
('113862044103668208907', '222', '', '2021-11-28 21:51:58'),
('113862044103668208907', '222', 'aaaa', '2021-11-28 21:51:58'),
('113862044103668208907', '222', '', '2021-11-28 21:51:58'),
('113862044103668208907', '222', 'Faa', '2021-11-28 21:51:58'),
('', '', '', '2021-11-28 21:51:58'),
('', '', '', '2021-11-28 21:51:58'),
('', '', '', '2021-11-28 21:51:58'),
('113862044103668208907', '222', 'aaa', '2021-11-28 21:51:58'),
('113862044103668208907', '333', 'aaa', '2021-11-28 21:51:58'),
('113862044103668208907', '333', 'aaafeas', '2021-11-28 21:51:58'),
('113862044103668208907', '333', 'fea', '2021-11-28 21:51:58'),
('113862044103668208907', '333', 'feaa', '2021-11-28 21:51:58'),
('113862044103668208907', '333', 'fddfd', '2021-11-28 21:51:58'),
('333', '113862044103668208907', 'TEsting', '2021-11-28 21:51:58'),
('333', '113862044103668208907', 'New Mesa', '2021-11-28 21:51:58'),
('113862044103668208907', '333', 'Dennis new message', '2021-11-28 21:53:54'),
('113862044103668208907', '333', 'aa', '2021-11-28 22:05:28'),
('113862044103668208907', '333', 'reee', '2021-11-28 22:05:30'),
('113862044103668208907', '333', 'ggg', '2021-11-28 22:05:31'),
('113862044103668208907', '333', 'new Updates', '2021-11-28 22:05:35'),
('333', '113862044103668208907', 'Friend Send new message', '2021-11-28 22:06:02'),
('113862044103668208907', '333', 'aa', '2021-11-28 22:06:07'),
('113862044103668208907', '333', 'eee', '2021-11-28 22:16:11'),
('113862044103668208907', '333', 'aaa', '2021-11-28 22:16:13'),
('333', '113862044103668208907', '5 16 pm', '2021-11-28 22:16:39'),
('113862044103668208907', '333', '5 16 pm 2', '2021-11-28 22:16:48'),
('333', '113862044103668208907', '5 23', '2021-11-28 22:24:00'),
('113862044103668208907', '333', 's', '2021-11-28 22:24:08'),
('113862044103668208907', '333', 'f', '2021-11-28 22:24:09'),
('113862044103668208907', '333', 'f', '2021-11-28 22:24:10'),
('113862044103668208907', '333', 'f', '2021-11-28 22:24:12'),
('333', '113862044103668208907', 'fdas', '2021-11-28 22:42:55'),
('333', '113862044103668208907', 'vvvvvv', '2021-11-28 22:43:08'),
('113862044103668208907', '333', 'aa', '2021-11-28 22:43:12'),
('333', '113862044103668208907', '5 45', '2021-11-28 22:45:56'),
('333', '113862044103668208907', '5 48', '2021-11-28 22:48:04'),
('333', '113862044103668208907', '6 20', '2021-11-28 23:20:21'),
('333', '113862044103668208907', 'neweer mesage', '2021-11-28 23:20:35'),
('113862044103668208907', '222', '111', '2021-12-01 00:29:02'),
('113862044103668208907', '222', 'dfewwa', '2021-12-01 00:29:12'),
('113862044103668208907', '222', 'fesww', '2021-12-01 00:29:14'),
('113862044103668208907', '333', 'wedqa', '2021-12-01 00:29:20'),
('113862044103668208907', '222', 'wqdf', '2021-12-01 00:29:26'),
('113862044103668208907', '222', 'fedasfddsa', '2021-12-01 00:29:30'),
('113862044103668208907', '222', 'efsaefeswa', '2021-12-01 00:29:32'),
('113862044103668208907', '222', 'new Updates', '2021-12-01 00:29:51'),
('113862044103668208907', '222', '', '2021-12-01 00:32:39'),
('113862044103668208907', '222', 'eddd', '2021-12-01 00:32:40'),
('113862044103668208907', '222', 'fefswe', '2021-12-01 00:32:50'),
('113862044103668208907', '222', '', '2021-12-01 00:32:51'),
('113862044103668208907', '222', '', '2021-12-01 00:32:51'),
('113862044103668208907', '222', '', '2021-12-01 00:32:51'),
('113862044103668208907', '222', 'wd', '2021-12-01 00:36:25'),
('222', '113862044103668208907', 'Test', '2021-12-01 00:42:08'),
('55', '1', 'Hello Test Empty', '2021-12-01 00:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `post_information`
--

CREATE TABLE `post_information` (
  `Picture` varbinary(10000) NOT NULL,
  `Post Id` int(11) NOT NULL,
  `Profile_ID` varchar(50) NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_information`
--

INSERT INTO `post_information` (`Picture`, `Post Id`, `Profile_ID`, `TimeStamp`) VALUES
(0x436170747572652e4a5047, 8, '', '2021-11-23 17:55:27'),
(0x436170747572652e4a5047, 9, '113862044103668208907', '2021-11-23 17:55:27'),
(0x436170747572652e4a5047, 10, '113862044103668208907', '2021-11-23 17:55:27'),
(0x436170747572652e4a5047, 11, '113862044103668208907', '2021-11-23 17:55:27'),
(0x737320416d617a6f6e2e4a5047, 12, '113862044103668208907', '2021-11-28 22:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `profile_information`
--

CREATE TABLE `profile_information` (
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Phone_Number` varchar(15) NOT NULL,
  `DOB` date NOT NULL,
  `Profile_ID` varchar(25) NOT NULL,
  `Profile_URL` varchar(250) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_information`
--

INSERT INTO `profile_information` (`First_Name`, `Last_Name`, `Phone_Number`, `DOB`, `Profile_ID`, `Profile_URL`, `Email`) VALUES
('Test', '1', '', '0000-00-00', '1', '', ''),
('Dennis', 'Tang', '6462672420', '1997-01-22', '113862044103668208907', 'https://lh3.googleusercontent.com/a/AATXAJyitlq8-zV0bSzZfRsYkeUQYA-HzT5PnolCobZ8=s96-c', 'dqt5211@gmail.com'),
('Test2', '2', '', '0000-00-00', '2', '', ''),
('Test', 'Friend', '', '0000-00-00', '222', 'https://lh3.googleusercontent.com/a/AATXAJyitlq8-zV0bSzZfRsYkeUQYA-HzT5PnolCobZ8=s96-c', ''),
('Another', 'Friend', '', '0000-00-00', '333', 'https://lh3.googleusercontent.com/a/AATXAJyitlq8-zV0bSzZfRsYkeUQYA-HzT5PnolCobZ8=s96-c', ''),
('NEw', 'Friend', '', '0000-00-00', '555', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends_list`
--
ALTER TABLE `friends_list`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `post_information`
--
ALTER TABLE `post_information`
  ADD PRIMARY KEY (`Post Id`),
  ADD KEY `Profile_ID` (`Profile_ID`);

--
-- Indexes for table `profile_information`
--
ALTER TABLE `profile_information`
  ADD PRIMARY KEY (`Profile_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends_list`
--
ALTER TABLE `friends_list`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post_information`
--
ALTER TABLE `post_information`
  MODIFY `Post Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
