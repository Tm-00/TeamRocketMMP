-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2024 at 12:11 PM
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
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `AddressID` int(11) NOT NULL,
  `Postcode` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `AddressLine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`AddressID`, `Postcode`, `City`, `Country`, `AddressLine`) VALUES
(21, 'op', 'po', 'yam', 'zaria');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `carer_id` int(11) NOT NULL,
  `patientID` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `carer_id`, `patientID`, `date`, `time`) VALUES
(2, 1, 2, '2024-03-18', '00:18:00'),
(6, 1, 1, '2024-03-10', '04:50:22'),
(7, 1, 1, '2024-03-24', '00:00:00'),
(9, 1, 1, '2024-03-18', '00:00:00'),
(10, 2, 1, '2024-05-13', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `carer_id` int(11) NOT NULL,
  `patientID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `carer_id`, `patientID`) VALUES
(17, 1, 1),
(19, 1, 2),
(20, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `carer`
--

CREATE TABLE `carer` (
  `carer_id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `Job` varchar(255) NOT NULL,
  `Experience` varchar(255) NOT NULL,
  `verify` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carer`
--

INSERT INTO `carer` (`carer_id`, `FirstName`, `MiddleName`, `LastName`, `Gender`, `Address`, `Password`, `Email`, `PhoneNumber`, `Job`, `Experience`, `verify`) VALUES
(1, 'IBRAHI', '', 'SULU-GAMBARI', '', '', '$2y$10$ZVppLaPyqreNn2848HSfR.zQHz9UQqPKjUHqHDjAec//c6k7swY16', 'ibrahimsulu04@gmail.com', '07417442912', '', '', '0'),
(2, 'Kylian', '', 'Mbappe', '', '', '$2y$10$Z6C.2.KjbKtZxGw5rIBazOVMVWSkFKZAQDNoxmTDiorRO5r1uT9pW', 'abdul12@gmail.com', '07417442912', '', '', ''),
(3, 'Roland', '', 'Familua', '', '', '$2y$10$XJYLzVwRF8gcq0osSrTiouAp55zDYBKR9PDuBfMO6NkgGK5tnbl82', 'abdul@gmail.com', '07417442912', '', '', '0'),
(11, 'IBRAHIM', 'SARKI', 'SULU-GAMBARI', 'female', '(402571)BY 861 BLOCK 3', '$2y$10$5pJlneW2BoFcEarUGW1HpuJNYGtYiSC./Z6ni8pHOj2OVzWx2.pO.', 'i.s.sulu-gambari@wlv.ac.uk', '07417442912', 'Tesco', '3-6', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `Health` varchar(255) NOT NULL,
  `verify` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientID`, `FirstName`, `MiddleName`, `LastName`, `DOB`, `Gender`, `Address`, `Password`, `Email`, `PhoneNumber`, `Health`, `verify`) VALUES
(1, 'Siobhan', '', 'Utete', '2024-03-05', '', '', '$2y$10$Y945a2guJ.ZlZ6QULjAcZei4rcUzw5Efp.fE40.TFJpsThql7zqGy', 'callmesiobhan02@gmail.com', '07417442912', '', ''),
(2, 'Cristiano ', '', 'Ronaldo', '2024-03-06', '', '', '$2y$10$5Gf33mxxAtzeTN782i91E.KnVqaxOHWFby.J4FdVZnnfgDKFhcQNG', 'abdul1@gmail.com', '07417442912', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`AddressID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `carer_id_fk` (`carer_id`),
  ADD KEY `patient_id_fk` (`patientID`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carer_id_fk` (`carer_id`),
  ADD KEY `patient_id_fk` (`patientID`);

--
-- Indexes for table `carer`
--
ALTER TABLE `carer`
  ADD PRIMARY KEY (`carer_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `carer`
--
ALTER TABLE `carer`
  MODIFY `carer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `Test4` FOREIGN KEY (`carer_id`) REFERENCES `carer` (`carer_id`),
  ADD CONSTRAINT `Test5` FOREIGN KEY (`patientID`) REFERENCES `patient` (`patientID`);

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `Test1` FOREIGN KEY (`carer_id`) REFERENCES `carer` (`carer_id`),
  ADD CONSTRAINT `Test2` FOREIGN KEY (`patientID`) REFERENCES `patient` (`patientID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
