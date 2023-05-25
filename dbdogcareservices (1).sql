-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 07:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdogcareservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `CustomerID` int(5) NOT NULL,
  `OwnerName` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `ContactNumber` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicalrecord`
--

CREATE TABLE `tblmedicalrecord` (
  `id` int(11) NOT NULL,
  `dog_ID` int(5) NOT NULL,
  `ownername` varchar(25) NOT NULL,
  `customer_ID` int(5) NOT NULL,
  `veterinarian_ID` int(5) NOT NULL,
  `date_of_treatment` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblmedicalrecord`
--

INSERT INTO `tblmedicalrecord` (`id`, `dog_ID`, `ownername`, `customer_ID`, `veterinarian_ID`, `date_of_treatment`) VALUES
(1, 1, 'Rodlyn', 1, 1, '0000-00-00 00:00:00.000000'),
(2, 2, 'Emman', 2, 2, '0000-00-00 00:00:00.000000'),
(3, 3, 'Ryan', 3, 3, '0000-00-00 00:00:00.000000'),
(4, 4, 'Angelo', 4, 4, '0000-00-00 00:00:00.000000'),
(5, 5, 'Mimi', 5, 5, '0000-00-00 00:00:00.000000'),
(6, 6, 'Gabriel', 6, 6, '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`userid`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'q', 1, 'ryan', 'marfa'),
(2, 'rods', 12, 'Rodlyn', 'Mahilum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblmedicalrecord`
--
ALTER TABLE `tblmedicalrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblmedicalrecord`
--
ALTER TABLE `tblmedicalrecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
