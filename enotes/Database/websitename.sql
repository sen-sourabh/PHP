-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2019 at 09:12 AM
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
-- Database: `websitename`
--

-- --------------------------------------------------------

--
-- Table structure for table `ppts`
--

CREATE TABLE `ppts` (
  `ppts_id` int(10) NOT NULL,
  `ppts_email` varchar(255) NOT NULL,
  `ppts_title` varchar(255) NOT NULL,
  `ppts_desc` varchar(255) NOT NULL,
  `ppts_image` varchar(255) NOT NULL,
  `ppts_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppts`
--

INSERT INTO `ppts` (`ppts_id`, `ppts_email`, `ppts_title`, `ppts_desc`, `ppts_image`, `ppts_file`) VALUES
(3, 'sourabh.endeavor@gmail.com', 'cso3rtl.ppt', 'CSO Unit-3 Notes...', 'cso3rtl.png', 'cso3rtl.ppt'),
(4, 'sourabh.endeavor@gmail.com', 'introduction...', 'Introduction...', 'introduction_to_course&CGM.png', 'introduction_to_course&CGM.pptx'),
(5, 'sourabh.endeavor@gmail.com', 'Line_circle_generating_a...', 'Line_circle_generating_a...', 'Line_circle_generating_algorithm_UnitII.png', 'Line_circle_generating_algorithm_Unitll.pptx'),
(6, 'sourabh.endeavor@gmail.com', 'MICRO_P.ppt', 'MICRO_P...', 'MICRO_P.png', 'MICRO_P.ppt'),
(8, 'sourabh.endeavor@gmail.com', 'Printers,types ,working...', 'Printers,types ,working...', 'Printers,types ,working and use_unit1.png', 'Printers,types ,working and use_unit1.pptx'),
(9, 'sourabh.endeavor@gmail.com', 'scanconversion...', 'scanconversion...', 'scanconversion.png', 'scanconversion.pptx'),
(10, 'sourabh.endeavor@gmail.com', 'Unit-3_MEMORY...', 'Unit-3_MEMORY...', 'Unit-3_MEMORY Management Strategies.png', 'Unit-3_MEMORY Management Strategies.ppsx'),
(11, 'sourabh.endeavor@gmail.com', 'Unit-4 Virtual...', 'Unit-4 Virtual...', 'Unit-4 Virtual Memory.png', 'Unit-4 Virtual Memory.ppsx'),
(12, 'sourabh.endeavor@gmail.com', 'Unit-4_Security...', 'Unit-4_Security...', 'Unit-4_Security & protection.png', 'Unit-4_Security & protection.ppsx'),
(15, 'sourabh.endeavor@gmail.com', 'Unit-5_File Concept', 'Unit-5 File Concept Notes', 'Unit-5_File Concept.png', 'Unit-5_File Concept.ppsx'),
(16, 'sourabhsen201313@gmail.com', 'Unit-5_Disk Scheduling', 'Unit-5 Disk Scheduling Notes', 'Unit-5_Disk Scheduling.png', 'Unit-5_Disk Scheduling.ppsx'),
(17, 'sourabh.endeavor@gmail.com', 'cso1', 'CSO Unit-1 Notes', 'cso1.png', 'cso1.ppt'),
(18, 'sourabh.endeavor@gmail.com', 'cso2', 'CSO Unit-2 Notes', 'cso2.png', 'cso2.ppt'),
(19, 'sourabh.endeavor@gmail.com', 'Microprocessor', 'CSO Unit-2 Microprocessor Notes', 'ppt1.png', 'ppt1.ppt');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `signup_id` int(10) NOT NULL,
  `signup_name` varchar(255) NOT NULL,
  `signup_email` varchar(255) NOT NULL,
  `signup_pass` varchar(255) NOT NULL,
  `signup_gender` varchar(255) NOT NULL,
  `signup_dob` varchar(255) NOT NULL,
  `signup_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`signup_id`, `signup_name`, `signup_email`, `signup_pass`, `signup_gender`, `signup_dob`, `signup_date`) VALUES
(4, 'Sourabh Sen', 'sourabhsen201313@gmail.com', 'sourabh123', 'male', '1996-06-09', '2019-03-14'),
(5, 'Admin', 'admin@gmail.com', 'admin123', 'male', '1996-02-05', '2019-03-14'),
(6, 'User-3', 'user-3@gmail.com', 'user-3', 'female', '1996-01-30', '2019-03-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ppts`
--
ALTER TABLE `ppts`
  ADD PRIMARY KEY (`ppts_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`signup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ppts`
--
ALTER TABLE `ppts`
  MODIFY `ppts_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `signup_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
