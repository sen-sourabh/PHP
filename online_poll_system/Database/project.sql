-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 12:56 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `Id` int(5) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`Id`, `username`, `email`, `password`, `gender`, `phone`, `city`, `time`, `date`, `image`) VALUES
(5, 'Admin', 'admin@gmail.com', 'admin', 'male', 9893564045, 'Indore', '06:37:18', '2018-10-21', 0x7465616d2d312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `allvote`
--

CREATE TABLE `allvote` (
  `Id` int(5) NOT NULL,
  `candidate_name` varchar(30) NOT NULL,
  `candidate_position` varchar(50) NOT NULL,
  `voter_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allvote`
--

INSERT INTO `allvote` (`Id`, `candidate_name`, `candidate_position`, `voter_email`) VALUES
(22, 'Shishubh Sen', 'Chairperson', 'dinesh@gmail.com'),
(23, 'Rakul Preet', 'General Secretary', 'dinesh@gmail.com'),
(24, 'sweta', 'Head of Department', 'dinesh@gmail.com'),
(25, 'Shishubh Sen', 'Chairperson', 'amir@gmail.com'),
(26, 'dinesh pal', 'General Secretary', 'raja@gmail.com'),
(27, 'Rakul Preet', 'General Secretary', 'sourabh@gmail.com'),
(28, 'Amir Khan', 'Head of Department', 'sourabh@gmail.com'),
(29, 'Shishubh Sen', 'Chairperson', 'sourabh@gmail.com'),
(30, 'Gagan Pal', 'Chairperson', 'sourabhsen201313@gmail.com'),
(31, 'dinesh pal', 'General Secretary', 'sourabhsen201313@gmail.com'),
(32, 'sweta', 'Head of Department', 'sourabhsen201313@gmail.com'),
(33, 'dinesh pal', 'General Secretary', 'domnic@yahoo.com'),
(34, 'Amir Khan', 'Head of Department', 'domnic@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `positiontable`
--

CREATE TABLE `positiontable` (
  `Id` int(5) UNSIGNED NOT NULL,
  `position_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positiontable`
--

INSERT INTO `positiontable` (`Id`, `position_name`) VALUES
(16, 'Head of Department'),
(18, 'General Secretary');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `username`, `email`, `password`, `gender`, `date`, `phone`, `city`, `image`) VALUES
(8, 'Gagan Pal', 'gagan@gmail.com', 'gagan', 'male', '2018-10-19', 7589635896, 'Indore', '3.jpg'),
(14, 'Deepak Rathore', 'deepakrathor25@gmail.com', '123', 'male', '2018-10-29', 7856340910, 'Indore', 'team-3.jpg'),
(17, 'Sourabh Sen', 'sourabh@gmail.com', 'sourabh', 'male', '2019-01-22', 8109292694, 'Indore', 'code1.png'),
(18, 'Raja kapoor', 'raja@gmail.com', 'raja', 'male', '2019-01-22', 7878787878, 'Ujjain', 'code1.png'),
(20, 'sourabhsen9696', 'domnic@yahoo.com', 'domnic', 'male', '2019-04-24', 7894561230, 'Indore', 'no-person.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reg_for_election`
--

CREATE TABLE `reg_for_election` (
  `Id` int(5) UNSIGNED NOT NULL,
  `candidate_name` varchar(30) NOT NULL,
  `candidate_email` varchar(30) NOT NULL,
  `candidate_position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_for_election`
--

INSERT INTO `reg_for_election` (`Id`, `candidate_name`, `candidate_email`, `candidate_position`) VALUES
(46, 'sweta', 'sweta@yahoo.com', 'Head of Department'),
(48, 'dinesh pal', 'dinesh@gmail.com', 'General Secretary'),
(49, 'Rakul Preet', 'rakul@gmail.com', 'General Secretary'),
(50, 'Gagan Pal', 'gagan@gmail.com', 'Chairperson'),
(51, 'Shishubh Sen', 'shishubh@gmail.com', 'Chairperson'),
(52, 'Amir Khan', 'amir@gmail.com', 'Head of Department');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `allvote`
--
ALTER TABLE `allvote`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `positiontable`
--
ALTER TABLE `positiontable`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reg_for_election`
--
ALTER TABLE `reg_for_election`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `candidate_email` (`candidate_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `Id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `allvote`
--
ALTER TABLE `allvote`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `positiontable`
--
ALTER TABLE `positiontable`
  MODIFY `Id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reg_for_election`
--
ALTER TABLE `reg_for_election`
  MODIFY `Id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
