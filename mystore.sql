-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2023 at 02:10 PM
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
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(14) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`) VALUES
(1, 'Bill', 'Gates', 'bill.gates@microsoft.com', '+100100100', 'Washington, USA'),
(2, 'Will', 'Smith', 'will@gmail.com', '+111222333', 'Arizona, USA'),
(3, 'Georgi', 'Facello', 'Georgi@gmail.com', '+123123123', 'New York, USA'),
(5, 'Parto', 'Bamford', 'Parto@gmail.com', '+124124124', 'Chicago, USA'),
(6, 'Chirstian', 'Koblick', 'Chirstian@gmail.com', '+125125125', 'New York, USA'),
(7, 'Kyoichi', 'Maliniak', 'Kyoichi@gmail.com', '+126126126', 'California, USA'),
(8, 'Anneke', 'Preusig', 'Anneke@gmail.com', '+127127127', 'Chicago, USA'),
(9, 'Tzvetan', 'Zielinski', 'Tzvetan@gmail.com', '+128128128', 'New York, USA'),
(10, 'Saniya', 'Kalloufi', 'Saniya@gmail.com', '+129129129', 'California, USA'),
(11, 'Sumant', 'Peac', 'Sumant@gmail.com', '+130130130', 'Chicago, USA'),
(12, 'Duangkaew', 'Piveteau', 'Duangkaew@gmail.com', '+131131131', 'New York, USA'),
(13, 'Mary', 'Sluis', 'Mary@gmail.com', '+132132132', 'Chicago, USA'),
(17, 'asad', 'ullah', 'ulla@gmail.com', '123456789', 'savar,dhaka'),
(20, 'Riyad', 'Mahmud', 'aaaa@gmail.com', '1234567987', 'savar,dhaka'),
(21, 'Ahnaf', 'Mia', 'ahnaf@gmail.com', '1234567987', 'savar,dhaka'),
(22, 'Ahsanullah', 'Ahmed', 'admed@gmail.com', '123456498', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`) VALUES
(18, 'IMG-64e34acabea1d9.68598747.jpg'),
(20, 'IMG-64e34ad178cfc2.23523221.jpg'),
(22, '1581695119.jpg'),
(23, 'IMG-64e35386b4c8b9.57547975.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `en_no` int(8) NOT NULL,
  `name` varchar(40) NOT NULL,
  `division` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`en_no`, `name`, `division`) VALUES
(1, 'ashraful islam', 'B'),
(2, 'ashraful islam', 'A'),
(3, 'as is', 'C'),
(4, 'sb bds', 'B'),
(5, ' kpr', 'B'),
(6, 'asdf asdf', 'B'),
(8, 'Ariful Islam', 'B'),
(9, 'Shamim Hossain', 'C'),
(10, 'Abdul Gaffor', 'B'),
(11, 'ahsanullah ahmed', 'C'),
(12, 'Akramul Islam', 'B'),
(13, 'asdf asdf', 'B'),
(14, 'Korim Mia', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `pictureinfo`
--

CREATE TABLE `pictureinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(60) NOT NULL,
  `Remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictureinfo`
--

INSERT INTO `pictureinfo` (`id`, `name`, `image`, `Remark`) VALUES
(22, 'asdf', 'IMG-64e488d7bcfb67.08032155.jpg', NULL),
(23, 'asdf', 'IMG-64e488dfa6f520.88463278.jpg', NULL),
(24, '', 'IMG-64e489f9085206.54875344.jpg', NULL),
(25, 'asdf', 'IMG-64e48a311c3913.67308476.jpg', NULL),
(26, '', 'IMG-64e48b7feb77e6.90217034.jpg', NULL),
(27, '', 'IMG-64e48baa2543f4.35748453.jpg', NULL),
(28, '\0', 'IMG-64e4966c3dd505.95759350.jpg', NULL),
(29, 'ASDF', 'IMG-64e49757bff139.00527386.jpg', NULL),
(30, 'ashraful islam', 'IMG-64e49797719087.66337831.jpg', NULL),
(31, 'samim', 'IMG-64e49861cda4b4.80136085.png', 'desktop image'),
(32, 'asdf', 'IMG-64e5a793bcb117.98387324.png', 'asdf'),
(33, 'asdf', 'IMG-64f84192c90800.12685268.jpg', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student_info`
--

CREATE TABLE `tb_student_info` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `PresentAddress` varchar(255) NOT NULL,
  `PermanentAddress` varchar(255) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_student_info`
--

INSERT INTO `tb_student_info` (`Id`, `FirstName`, `LastName`, `Gender`, `DateOfBirth`, `PresentAddress`, `PermanentAddress`, `Department`, `Designation`, `Phone`) VALUES
(1, 'John', 'Doe', 'male', '2003-02-02', 'Dhaka', 'Dhaka', 'MRC', 'MRE', 123),
(2, 'John', 'Doe', 'male', '2001-01-01', 'Dhaka', 'Dhaka', 'MRC', 'MRE', 123),
(3, 'John', 'Doe', 'male', '2000-12-12', 'Dhaka', 'Dhaka', 'MRC', 'MRE', 123),
(5, 'Asad', 'Mia', '', '2023-08-01', 'adf', 'asdf', 'Merchandiser', 'asdf', 1234),
(6, 'Maria', 'Akter', '', '2023-08-01', 'adf', 'asdf', 'Merchandiser', 'asdf', 1234),
(7, 'Maria', 'Akter', '', '1996-08-01', 'Dhaka', 'Maymansing', 'Merchandiser', 'Sr.Merchandiser', 171484571),
(8, 'Maria', 'Maria', '', '1996-08-01', 'Dhaka', 'Maymansing', 'Merchandiser', 'Sr.Merchandiser', 171484571),
(9, 'Jack', 'Martin', 'Male', '1998-07-22', 'USA', 'Canada', 'Merchandiser', 'Jr.Mer', 548134625),
(10, 'Rakib', 'Islam', '', '1999-12-12', '', '', '', '', 456789413),
(11, 'Abir', 'Hossain', 'Male', '1995-12-12', '', '', '', '', 123456789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`en_no`);

--
-- Indexes for table `pictureinfo`
--
ALTER TABLE `pictureinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_student_info`
--
ALTER TABLE `tb_student_info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `en_no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pictureinfo`
--
ALTER TABLE `pictureinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_student_info`
--
ALTER TABLE `tb_student_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
