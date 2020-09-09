-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 01:00 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_gender` varchar(10) NOT NULL,
  `admin_phone` bigint(10) NOT NULL,
  `admin_image` varchar(255) NOT NULL,
  `admin_create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_gender`, `admin_phone`, `admin_image`, `admin_create_date`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', 'male', 1234567890, 'admin_image.png', '2019-03-30 15:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(5) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_message` text NOT NULL,
  `contact_created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_message`, `contact_created_date`) VALUES
(1, 'Admin', 'admin@gmail.com', '8109292654', 'Duis sollicitudin enim sapien, eu feugiat justo luctus ut. Phasellus ornare et justo ac imperdiet. In dignissim velit ut rutrum scelerisque. Curabitur semper turpis felis, a accumsan dolor scelerisque non. Phasellus ultricies sapien sed elementum molestie. Pellentesque eget dolor non massa vehicula maximus ut vitae eros. Duis sodales tellus dignissim varius aliquam. Duis purus neque, facilisis vitae massa quis, placerat luctus massa. Aenean mollis lacus vitae urna aliquam, eget aliquam felis dictum. Curabitur ut est nec nibh consequat finibus vitae ut nulla. Maecenas viverra eget sem quis ullamcorper.', '2019-03-30 09:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `ppts`
--

CREATE TABLE `ppts` (
  `ppts_id` int(10) NOT NULL,
  `ppts_email` varchar(255) NOT NULL,
  `ppts_title` varchar(255) NOT NULL,
  `ppts_desc` text NOT NULL,
  `ppts_image` varchar(255) NOT NULL,
  `ppts_file` varchar(255) NOT NULL,
  `ppts_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppts`
--

INSERT INTO `ppts` (`ppts_id`, `ppts_email`, `ppts_title`, `ppts_desc`, `ppts_image`, `ppts_file`, `ppts_date`) VALUES
(3, 'sourabh.endeavor@gmail.com', 'cso3rtl.ppt', 'CSO Unit-3 Notes...', 'cso3rtl.png', 'cso3rtl.ppt', '0000-00-00'),
(4, 'sourabh.endeavor@gmail.com', 'Introduction to Course & CGM', 'Introduction Aenean ornare nulla risus, a tempus urna mollis et. Praesent maximus nibh quis ligula scelerisque, consequat accumsan ligula sollicitudin. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras tincidunt sem id odio commodo, a fringilla mauris aliquam. Curabitur ac risus scelerisque elit rutrum gravida et sed est. Maecenas augue metus, ultrices sit amet sem sit amet, imperdiet scelerisque lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce rutrum vulputate tellus, eu vehicula velit. Fusce lacinia accumsan iaculis. Cras sodales hendrerit dui, sed tempus nulla tincidunt ac. Proin commodo laoreet imperdiet. Nulla odio tortor, ultricies in mattis id, scelerisque quis lorem.', 'introduction_to_course&CGM.png', 'introduction_to_course&CGM.pptx', '0000-00-00'),
(5, 'sourabh.endeavor@gmail.com', 'Line_circle_generating_a...', 'Line_circle_generating_a...', 'Line_circle_generating_algorithm_UnitII.png', 'Line_circle_generating_algorithm_Unitll.pptx', '0000-00-00'),
(6, 'sourabh.endeavor@gmail.com', 'MICRO_P.ppt', 'MICRO_P...', 'MICRO_P.png', 'MICRO_P.ppt', '0000-00-00'),
(8, 'sourabh.endeavor@gmail.com', 'Printers,types ,working...', 'Printers,types ,working...', 'Printers,types ,working and use_unit1.png', 'Printers,types ,working and use_unit1.pptx', '0000-00-00'),
(9, 'sourabh.endeavor@gmail.com', 'scanconversion...', 'scanconversion Aenean ornare nulla risus, a tempus urna mollis et. Praesent maximus nibh quis ligula scelerisque.', 'scanconversion.png', 'scanconversion.pptx', '0000-00-00'),
(10, 'sourabh.endeavor@gmail.com', 'Unit-3_MEMORY...', 'Unit-3_MEMORY...', 'Unit-3_MEMORY Management Strategies.png', 'Unit-3_MEMORY Management Strategies.ppsx', '0000-00-00'),
(11, 'sourabh.endeavor@gmail.com', 'Unit-4 Virtual...', 'Unit-4 Virtual...', 'Unit-4 Virtual Memory.png', 'Unit-4 Virtual Memory.ppsx', '0000-00-00'),
(12, 'sourabh.endeavor@gmail.com', 'Unit-4_Security...', 'Unit-4_Security...', 'Unit-4_Security & protection.png', 'Unit-4_Security & protection.ppsx', '0000-00-00'),
(15, 'sourabh.endeavor@gmail.com', 'Unit-5_File Concept', 'Unit-5 File Concept Notes', 'Unit-5_File Concept.png', 'Unit-5_File Concept.ppsx', '0000-00-00'),
(16, 'sourabhsen201313@gmail.com', 'Unit-5_Disk Scheduling', 'Unit-5 Disk Scheduling Notes', 'Unit-5_Disk Scheduling.png', 'Unit-5_Disk Scheduling.ppsx', '0000-00-00'),
(17, 'sourabh.endeavor@gmail.com', 'cso1', 'CSO Unit-1 Notes', 'cso1.png', 'cso1.ppt', '0000-00-00'),
(18, 'sourabh.endeavor@gmail.com', 'cso2', 'CSO Unit-2 Notes', 'cso2.png', 'cso2.ppt', '0000-00-00'),
(19, 'sourabh.endeavor@gmail.com', 'Microprocessor', 'CSO Unit-2 Microprocessor Notes', 'ppt1.png', 'ppt1.ppt', '0000-00-00'),
(20, 'admin@gmail.com', 'Working principles of interactive input devices', 'Workingprinciples_interactive_inputdevices_unit1', 'Working_principle.png', 'Workingprinciples_interactive_inputdevices_unit1.pptx', '0000-00-00'),
(22, 'admin@gmail.com', 'Visual C basic Programming Language', 'Learn Visual C basic Programming Language in Simple way and fast.', 'Getting_Visual_C.png', 'Getting_Visual_C.pptx', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(10) NOT NULL,
  `rating_ppts_id` int(10) NOT NULL,
  `rating_user_email` varchar(50) NOT NULL,
  `rating_number` int(11) NOT NULL,
  `rating_title` varchar(255) NOT NULL,
  `rating_desc` text NOT NULL,
  `rating_create_date` datetime NOT NULL,
  `rating_update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `rating_ppts_id`, `rating_user_email`, `rating_number`, `rating_title`, `rating_desc`, `rating_create_date`, `rating_update_date`) VALUES
(1, 19, 'admin@gmail.com', 2, 'Very Bad', 'Very Hard to learn, No need for uploading.', '2019-03-29 09:34:38', '2019-03-29 07:32:13'),
(3, 12, 'admin@gmail.com', 2, 'Cool, Good Job', 'I like it and good for reading but no images and it takes time to understand.', '2019-03-29 06:39:45', '2019-03-29 06:39:45'),
(11, 19, 'sourabh.endeavor@gmail.com', 3, 'Helpful', 'Fair Job and helpful.', '2019-03-29 09:30:02', '2019-03-29 09:47:26'),
(16, 18, 'sourabhsen201313@gmail.com', 2, 'Very Bad', 'bad', '2019-03-29 11:23:46', '2019-03-29 11:24:23'),
(17, 20, 'admin@gmail.com', 4, 'Very Nice', 'Thank you for uploading. This Presentation is a way of quick learning and understanding.', '2019-03-30 06:23:10', '2019-03-30 06:23:10'),
(18, 20, 'user-3@gmail.com', 3, 'Very Nice', 'I like it. It helps for me.', '2019-03-30 07:09:40', '2019-03-30 07:09:40'),
(19, 22, 'admin@gmail.com', 4, 'Good', 'Full Visual Basic C# programming language. Thank You.', '2019-03-30 07:18:41', '2019-03-30 07:18:41'),
(20, 10, 'admin@gmail.com', 4, 'Very Good', 'I like it. Thank you for uploading.', '2019-03-30 08:00:04', '2019-03-30 08:00:04');

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
(6, 'User-3', 'user-3@gmail.com', 'user-3', 'female', '1996-01-30', '2019-03-15'),
(7, 'Domnic', 'domnic@yahoo.com', 'domnic', 'male', '2019-04-01', '2019-04-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `ppts`
--
ALTER TABLE `ppts`
  ADD PRIMARY KEY (`ppts_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`signup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ppts`
--
ALTER TABLE `ppts`
  MODIFY `ppts_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `signup_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
