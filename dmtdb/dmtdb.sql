-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 01:10 PM
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
-- Table structure for table `tb_diposit_money`
--

CREATE TABLE `tb_diposit_money` (
  `Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `R_Name` varchar(90) NOT NULL,
  `D_Name` varchar(90) NOT NULL,
  `Purpose` varchar(120) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Remark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diposit_money`
--

INSERT INTO `tb_diposit_money` (`Id`, `Date`, `R_Name`, `D_Name`, `Purpose`, `Amount`, `Remark`) VALUES
(1, '2023-09-24', 'Shamim Hossain', 'Ashraful Islam', 'Food', 2500, 'N/A'),
(2, '2023-09-15', 'Shamim Hossain', 'Prothoma Islam', 'Food', 1000, 'N/A'),
(3, '2023-09-05', 'Shamim Hossain', 'Meghla Akter', 'Wifi', 250, 'N/A'),
(4, '2023-09-10', 'Shamim Hossain', 'Sourov Ahmed', 'Electricity', 200, 'N/A'),
(5, '2023-09-01', 'Shamim Hossain', 'Fahim Khandokar', 'Food', 3000, 'N/A'),
(6, '2023-02-09', 'Shamim Hossain', 'Shahed Parvej', 'Food', 2200, 'N/A'),
(7, '2023-09-09', 'Shamim Hossain', 'Pavel Munshi', 'Food', 1500, 'N/A'),
(8, '2023-09-13', 'Shamim Hossain', 'Pavel Munshi', 'Electricity', 200, 'N/A'),
(9, '2023-09-05', 'Shamim Hossain', 'Ibrahim Khan', 'Water', 150, 'N/A'),
(10, '2023-09-04', 'Shamim Hossain', 'Farjana Akter', 'Food', 2000, 'N/A'),
(11, '2023-09-02', 'Shamim Hossain', 'Abir Hossain', 'Food', 2000, 'N/A'),
(12, '2023-01-03', 'Shamim Hossain', 'Rifat Akter', 'Food', 2300, 'N/A'),
(13, '2023-09-07', 'Shamim Hossain', 'Abir Hossain', 'Food Cooker', 500, 'N/A'),
(14, '2023-09-09', 'Shamim Hossain', 'Mohaiminul Islam', 'Food', 2300, 'N/A'),
(15, '2023-09-12', 'Shamim Hossain', 'Rayhan Islam', 'Food', 3000, 'N/A'),
(16, '2023-09-12', 'Shamim Hossain', 'Joy Debnath', 'Food', 2500, 'N/A'),
(17, '2023-09-04', 'Shamim Hossain', 'Rayhan Islam', 'Food', 2600, 'N/A'),
(18, '2023-09-09', 'Shamim Hossain', 'Aysha Akter', 'Wifi', 200, 'N/A'),
(19, '2023-09-16', 'Shamim Hossain', 'Mohaiminul Islam', 'Water', 150, 'N/A'),
(20, '2023-09-06', 'Shamim Hossain', 'Pavel Munshi', 'Food', 2000, 'N/A'),
(21, '2023-09-26', 'Shamim Hossain', 'Fahim Khandokar', 'Wifi', 450, 'N/A'),
(22, '2023-09-01', 'Shamim Hossain', 'Sourov Ahmed', 'Food', 1000, 'N/A'),
(23, '2023-09-26', 'Shamim Hossain', 'Rayhan Islam', 'Wifi', 200, 'N/A'),
(24, '2023-09-27', 'Shamim Hossain', 'Aysha Akter', 'Food', 2000, 'N/A'),
(25, '2023-10-02', 'Ashraful Islam', 'Shahed Parvej', 'Food', 500, ''),
(26, '2023-10-01', 'Ashraful Islam', 'Sourov Ahmed', 'Food', 1000, ''),
(27, '2023-10-02', 'Ashraful Islam', 'Rayhan Islam', 'Food', 2500, ''),
(28, '2023-10-10', 'Ashraful Islam', 'Dipu Dipu', 'Food', 3200, 'N/A'),
(29, '2023-10-09', 'Ashraful Islam', 'Dipu Dipu', 'Food Cooker', 500, 'N/A'),
(30, '2023-10-02', 'Shamim Hossain', 'sa mim', 'Food', 1500, ''),
(31, '2023-10-03', 'Ashraful Islam', 'Ashraful Islam', 'Food', 1500, ''),
(32, '2023-10-03', 'sa mim', 'Prothoma Islam', 'Food', 1500, ''),
(33, '2023-10-03', 'sa mim', 'Fahim Khandokar', 'Food', 1500, ''),
(34, '2023-10-03', 'sa mim', 'Sourov Ahmed', 'Food', 1500, ''),
(35, '2023-10-03', 'sa mim', 'Pavel Munshi', 'Food', 1500, ''),
(36, '2023-10-03', 'sa mim', 'Joy Debnath', 'Food', 1500, ''),
(37, '2023-10-02', 'sa mim', 'Rayhan Islam', 'Food', 1500, ''),
(38, '2023-10-04', 'sa mim', 'Meghla Akter', 'Food', 1400, ''),
(39, '2023-10-04', 'sa mim', 'Ibrahim Khan', 'Food', 1500, ''),
(40, '2023-10-04', 'sa mim', 'Farjana Akter', 'Food', 2000, ''),
(41, '2023-10-05', 'sa mim', 'Shajahan Khan', 'Food', 1500, ''),
(42, '2023-10-05', 'sa mim', 'Iffat Akter', 'Food', 1500, ''),
(43, '2023-10-05', 'sa mim', 'Megha Akter', 'Food', 1200, ''),
(44, '2023-10-06', 'sa mim', 'Trishna Pual', 'Food', 1500, ''),
(45, '2023-10-06', 'sa mim', 'Sharmin Akter', 'Food', 1500, ''),
(46, '2023-10-07', 'sa mim', 'Aysha Akter', 'Food', 1500, ''),
(47, '2023-10-07', 'sa mim', 'Mohaiminul Islam', 'Food', 1500, ''),
(48, '2023-10-07', 'sa mim', 'Rifat Akter', 'Food', 1000, ''),
(49, '2023-10-08', 'sa mim', 'Abir Hossain', 'Food', 1500, ''),
(50, '2023-10-06', 'sa mim', 'Shamim Hossain', 'Food', 1500, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_expenses`
--

CREATE TABLE `tb_expenses` (
  `Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Remark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_expenses`
--

INSERT INTO `tb_expenses` (`Id`, `Date`, `Name`, `Amount`, `Remark`) VALUES
(1, '2023-09-28', 'Ashraful Islam', 200, 'N/A'),
(2, '2023-09-14', 'Prothoma Islam', 200, 'N/A'),
(3, '2023-09-26', 'Pavel Munshi', 150, 'N/A'),
(4, '2023-09-12', 'Meghla Akter', 120, 'N/A'),
(5, '2023-09-15', 'Rayhan Islam', 160, 'N/A'),
(6, '2023-09-29', 'Fahim Khandokar', 120, 'N/A'),
(7, '2023-09-30', 'Prothoma Islam', 900, 'N/A'),
(8, '2023-09-19', 'Pavel Munshi', 450, 'N/A'),
(9, '2023-09-28', 'Meghla Akter', 350, 'N/A'),
(10, '2023-09-15', 'Dipu Dipu', 400, 'N/A'),
(11, '2023-11-13', 'Mohaiminul Islam', 900, 'N/A'),
(12, '2023-09-26', 'Fahim Khandokar', 120, 'N/A'),
(13, '2023-09-06', 'Rayhan Islam', 150, 'N/A'),
(14, '2023-09-26', 'Ashraful Islam', 250, 'N/A'),
(15, '2023-09-02', 'Joy Debnath', 50, 'N/A'),
(16, '2023-09-19', 'Sourov Ahmed', 230, 'N/A'),
(17, '2023-09-20', 'Ibrahim Khan', 50, ''),
(18, '2023-10-02', 'Prothoma Islam', 120, ''),
(19, '2023-10-01', 'Pavel Munshi', 30, ''),
(20, '2023-10-04', 'Ashraful Islam', 50, ''),
(21, '2023-10-03', 'Pavel Munshi', 1500, ''),
(22, '2023-10-04', 'Rayhan Islam', 1200, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_milldetail`
--

CREATE TABLE `tb_milldetail` (
  `Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Mill` float NOT NULL,
  `Remark` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_milldetail`
--

INSERT INTO `tb_milldetail` (`Id`, `Date`, `Name`, `Mill`, `Remark`) VALUES
(1, '2023-09-27', 'Shamim Hossain', 3, 'N/A'),
(2, '2023-09-27', 'Ashraful Islam', 2, 'N/A'),
(3, '2023-09-27', 'Prothoma Islam', 3, 'N/A'),
(4, '2023-09-27', 'Shahed Parvej', 2, ''),
(5, '2023-09-27', 'Fahim Khandokar', 3, ''),
(6, '2023-09-27', 'Sourov Ahmed', 2.5, 'N/A'),
(7, '2023-09-28', 'sa mim', 3, ''),
(8, '2023-09-28', 'Shamim Hossain', 3, ''),
(9, '2023-09-28', 'Ashraful Islam', 3, 'N/A'),
(10, '2023-09-28', 'Prothoma Islam', 2, 'N/A'),
(11, '2023-09-28', 'Sourov Ahmed', 3, ''),
(12, '2023-09-28', 'Fahim Khandokar', 2, ''),
(13, '2023-09-28', 'Meghla Akter', 2, ''),
(14, '2023-09-28', 'Ibrahim Khan', 2, ''),
(15, '2023-09-28', 'Farjana Akter', 3, 'N/A'),
(16, '2023-09-28', 'Shajahan Khan', 3, 'N/A'),
(17, '2023-09-28', 'Iffat Akter', 4, '1 Guest'),
(18, '2023-09-27', 'Trishna Pual', 5, '2 Guest'),
(19, '2023-09-28', 'Aysha Akter', 2.5, 'N/A'),
(20, '2023-09-28', 'Dipu Dipu', 1, 'N/A'),
(21, '2023-09-28', 'Abir Hossain', 3, 'N/A'),
(22, '2023-09-01', 'Ashraful Islam', 4, ''),
(23, '2023-09-14', 'Prothoma Islam', 3, ''),
(24, '2023-09-09', 'Fahim Khandokar', 3, ''),
(25, '2023-09-06', 'Sourov Ahmed', 3, ''),
(26, '2023-10-01', 'Shamim Hossain', 2, ''),
(27, '2023-10-02', 'Shamim Hossain', 2, ''),
(28, '2023-10-04', 'Shamim Hossain', 3, ''),
(29, '2023-10-04', 'Ashraful Islam', 3, ''),
(30, '2023-10-04', 'Prothoma Islam', 3, ''),
(31, '2023-10-02', 'Shamim Hossain', 5, ''),
(32, '2023-10-04', 'Ashraful Islam', 5, ''),
(33, '2023-10-03', 'Prothoma Islam', 5, ''),
(34, '2023-10-03', 'Shahed Parvej', 5, ''),
(35, '2023-10-03', 'Fahim Khandokar', 5, ''),
(36, '2023-10-03', 'Sourov Ahmed', 5, ''),
(37, '2023-10-03', 'Pavel Munshi', 5, ''),
(38, '2023-10-03', 'Joy Debnath', 5, ''),
(39, '2023-10-03', 'Rayhan Islam', 5, ''),
(40, '2023-10-03', 'Meghla Akter', 5, ''),
(41, '2023-10-04', 'Ibrahim Khan', 5, ''),
(42, '2023-10-04', 'Farjana Akter', 5, ''),
(43, '2023-10-03', 'Shajahan Khan', 5, ''),
(44, '2023-10-03', 'Iffat Akter', 5, ''),
(45, '2023-10-03', 'Megha Akter', 5, ''),
(46, '2023-10-03', 'Trishna Pual', 5, ''),
(47, '2023-10-03', 'Sharmin Akter', 5, ''),
(48, '2023-10-04', 'Sharmin Akter', 5, ''),
(49, '2023-10-03', 'Mohaiminul Islam', 5, ''),
(50, '2023-10-03', 'Rifat Akter', 5, ''),
(51, '2023-10-03', 'Abir Hossain', 5, ''),
(52, '2023-10-03', 'Dipu Dipu', 5, ''),
(53, '2023-10-05', 'Aysha Akter', 5, ''),
(54, '2023-10-04', 'sa mim', 10, '');

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
(20, 'Mohaiminul Islam', '1998-01-15', 'CSE', 'Male', 'Nator', 465465654, 654654654, 'N/A'),
(21, 'Rifat Akter', '2005-05-25', 'FOOD', 'Female', 'Sylhet', 321654987, 465498745, 'N/A'),
(22, 'Abir Hossain', '2001-12-10', 'Textile', 'Male', 'Kaliakair', 654987321, 654987654, 'N/A'),
(23, 'Dipu Dipu', '1980-12-12', 'DBA', 'Male', 'Dhaka,Bangladesh', 2147483647, 2147483647, 'N/A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_diposit_money`
--
ALTER TABLE `tb_diposit_money`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_expenses`
--
ALTER TABLE `tb_expenses`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_milldetail`
--
ALTER TABLE `tb_milldetail`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_std_info`
--
ALTER TABLE `tb_std_info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_diposit_money`
--
ALTER TABLE `tb_diposit_money`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_expenses`
--
ALTER TABLE `tb_expenses`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_milldetail`
--
ALTER TABLE `tb_milldetail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tb_std_info`
--
ALTER TABLE `tb_std_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
