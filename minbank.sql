
-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 06:47 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `SNo` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Balance` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`SNo`, `Name`, `Email`, `Balance`) VALUES
(1, 'kailash', 'kailashbg2000@gmail.com', '1420.00'),
(2, 'Amit Nijamra', 'amit14@gmail.com', '1070.00'),
(3, 'Utsav L.', 'utsavjain55@gmail.com', '940.00'),
(4, 'Shourya Patidar', 'lolopat21@gmail.com', '950.00'),
(5, 'Varnin Meshloop', 'gohan100@gmail.com', '760.00'),
(6, 'Jatin Chaaw', 'jatiniyabjp34@gmail.com', '930.00'),
(7, 'Bishal Kumar', 'vishal619@gmail.com', '710.00'),
(8, 'Gyanendra Singh', 'gyanib14@gmail.com', '1310.00'),
(9, 'Jay Tilgota', 'jaytel84@gmail.com', '780.00'),
(10, 'Yash Jain', 'yashnhp71@gmail.com', '1130.00');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `TransferId` int(5) NOT NULL,
  `From_Sender` varchar(20) NOT NULL,
  `To_Receiver` varchar(20) NOT NULL,
  `Amount` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`TransferId`, `From_Sender`, `To_Receiver`, `Amount`) VALUES
(1, 'Himanshu Malviya', 'Shourya Patidar', '100.00'),
(2, 'Jatin Chaaw', 'Amit Nijamra', '70.00'),
(3, 'Bishal Kumar', 'Gyanendra Singh', '290.00'),
(4, 'Utsav L.', 'Himanshu Malviya', '300.00'),
(5, 'Jay Tilgota', 'Utsav L.', '480.00'),
(6, 'Himanshu Malviya', 'Varnin Meshloop', '20.00'),
(7, 'Varnin Meshloop', 'Jay Tilgota', '260.00'),
(8, 'Shourya Patidar', 'Himanshu Malviya', '130.00'),
(9, 'Utsav L.', 'Himanshu Malviya', '240.00'),
(10, 'Yash Jain', 'Utsav L.', '350.00'),
(11, 'Shourya Patidar', 'Gyanendra Singh', '20.00'),
(12, 'Himanshu Malviya', 'Utsav L.', '130.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`TransferId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `SNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `TransferId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
