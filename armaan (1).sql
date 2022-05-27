-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 12:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `armaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Number` int(11) DEFAULT NULL,
  `Adults` int(11) DEFAULT NULL,
  `Children` int(11) DEFAULT NULL,
  `Service` varchar(20) DEFAULT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `Prescription` varchar(5) DEFAULT NULL,
  `Comment` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Name`, `Email`, `Number`, `Adults`, `Children`, `Service`, `Category`, `Prescription`, `Comment`) VALUES
('', 'frw@abjfv', 0, 0, 0, '', '', 'presc', ''),
('dfsger', 'swfgv@fdvfr.com', 0, 0, 0, '', '', 'presc', ''),
('Armaan', 'Jain@gmail.com', 2147483647, 2, 0, 'i me and my self', 'none', 'presc', 'armaan is the best'),
('armaan', 'jainarmaan407@gmail.com', 2147483647, 2, 0, 'abcd', 'abcd', 'presc', 'abcde');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `User` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`User`, `Email`, `Mobile`, `Comment`) VALUES
('cbgjad', '', 5574646, ' dcgjad'),
('Jain', 'efgucvefb', 9987435, ' adgfe'),
('Armaan Jain', 'jainarmaan407@gmail.com', 991005679, 'Hello I am armaan jain');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD UNIQUE KEY `Unique` (`Mobile`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
