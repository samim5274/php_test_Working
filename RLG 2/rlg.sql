-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 02:20 PM
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
-- Database: `rlg`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(90) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`Id`, `FirstName`, `LastName`, `Email`, `DateOfBirth`, `Address`, `Phone`, `Password`, `Username`) VALUES
(1, 'Shamim', 'Hossain', 'ex@gmail.com', '2001-12-21', 'Gazipur', 123456789, 'asdf', NULL),
(4, 'Indrojit', 'Sarkar', 'indro@gmail.com', '2001-12-12', 'Dhaka', 123456789, 'zxcv', NULL),
(5, 'Akram', 'Uddin', 'akram@gamil.com', '1985-12-12', 'Sylhet', 654987123, 'asdf456', NULL),
(6, 'Pavel', 'Munshi', 'pavel@gamil.com', '2001-04-05', 'Savar', 654987453, 'asdf456', NULL),
(7, 'Ashraful', 'Islam', 'as@gmail.com', '2000-01-01', 'Ashulia', 654987321, '0124', NULL),
(8, 'Ashraful', 'Islam', 'islam@gmail.com', '2001-11-11', 'Ashulia,Savar,Dhaka', 1321224660, 'islam', 'asdf'),
(9, 'Sumon', 'Mahmud', 'sumon@gmail.com', '1995-11-11', 'Mirzapur,Tangail,Dhaka', 1762164746, 'asdf', 'mahmud'),
(10, 'Riya', 'Naim', 'naim@gmail.com', '2014-12-12', 'Savar,Dhaka', 1548462184, 'asdf', 'naim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
