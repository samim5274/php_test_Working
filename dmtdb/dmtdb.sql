-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 01:33 PM
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
-- Database: `dmtdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_std_info`
--

CREATE TABLE `tb_std_info` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Department` varchar(90) NOT NULL,
  `Gender` varchar(45) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `EmergencyPhone` int(11) NOT NULL,
  `Remark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_std_info`
--

INSERT INTO `tb_std_info` (`Id`, `Name`, `DateOfBirth`, `Department`, `Gender`, `Address`, `Phone`, `EmergencyPhone`, `Remark`) VALUES
(1, 'sa mim', '2001-12-31', 'BBA', 'Male', 'Saver', 1762164746, 1762164746, 'N/A'),
(2, 'Shamim Hossain', '2001-12-31', 'DBA', 'Male', 'Gazipur', 123456789, 132465798, 'N/A'),
(3, 'Ashraful Islam', '2002-03-11', 'CSE', 'Male', 'Saver', 123456789, 123456789, 'Nothing'),
(4, 'Prothoma Islam', '2001-01-21', 'CSE', 'Female', 'Tangail', 987654132, 654987132, 'N/A'),
(5, 'Shahed Parvej', '1996-06-06', 'EEE', 'Male', 'Shirajgonj', 654321987, 456132465, 'N/A'),
(6, 'Fahim Khandokar', '2001-05-04', 'BBA', 'Male', 'Shirajgonj', 654321987, 654321986, 'N/A'),
(7, 'Sourov Ahmed', '2003-12-23', 'Civil', 'Male', 'Kazipur', 654987321, 12345679, 'N/A'),
(8, 'Pavel Munshi', '2001-06-05', 'Textile', 'Male', 'Saver', 654321987, 465798132, 'N/A'),
(9, 'Joy Debnath', '2001-09-09', 'DBA', 'Male', 'Mymansinh', 654987321, 321654987, 'N/A'),
(10, 'Rayhan Islam', '1996-02-20', 'FOOD', 'Male', 'Gazipur', 654321987, 321654987, 'N/A'),
(11, 'Meghla Akter', '2001-07-07', 'Civil', 'Female', 'Madaripur', 456798, 45644984, 'N/A'),
(12, 'Ibrahim Khan', '1980-12-12', 'FOOD', 'Male', 'Tangail', 465798456, 2147483647, 'N/A'),
(13, 'Farjana Akter', '1985-12-12', 'BBA', 'Female', 'Tangail', 456798456, 465465465, 'N/A'),
(14, 'Shajahan Khan', '1980-12-04', 'BBA', 'Male', 'Dhaka', 46579879, 98798789, 'N/A'),
(15, 'Iffat Akter', '1995-12-12', 'BBA', 'Female', 'Dhaka', 2147483647, 2147483647, 'N/A'),
(16, 'Megha Akter', '1992-12-04', 'CSE', 'Female', 'Dhaka', 56489798, 54656511, 'N/A'),
(17, 'Trishna Pual', '2003-05-12', 'CSE', 'Female', 'Saver', 321654987, 465798321, 'N/A'),
(18, 'Sharmin Akter', '2001-08-25', 'Textile', 'Female', 'Gazipur', 321654987, 321654987, 'N/A'),
(19, 'Aysha Akter', '2001-10-10', 'FOOD', 'Female', 'Tangail', 321654987, 321654987, 'N/A'),
(20, 'Mohaiminul Islam', '1998-01-15', 'CSE', 'Male', 'Nator', 465465654, 654654654, 'N/A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_std_info`
--
ALTER TABLE `tb_std_info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_std_info`
--
ALTER TABLE `tb_std_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
