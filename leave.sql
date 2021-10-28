-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2021 at 03:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employeee_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employeee_ID`, `Name`, `Phone`, `Address`, `Email`, `Password`) VALUES
(1, 'hello', 123456789, 'hello', 'hello@gmail.com', '$2y$10$dnPzEw4nDuq.LyAa1zzH0uDr3BKtloMVBOV/LDiG9c1UTcd.NCeKC'),
(2, 'hello', 123456789, 'hello', 'hello@gmail.com', '$2y$10$4RAlMvNEHdzVEK.frsoxQegj4LZ2GYA/HsoxQ4cK4efzdBm58pK5u'),
(3, 'a', 123456789, 'a', 'a@gmail.com', '$2y$10$TPPOKqtdOSBVrEd1ZR/LWO4qShGHP5gg8gxQydBBhlVho5ENUK7cS'),
(4, 'a', 123456789, 'a', 'a@gmail.com', '$2y$10$j9AO0jp/SHXWNB24s3v6suH7c8jtpWo.2ot1l2Og1dd.hMe07hcTy'),
(5, 'j', 458967412, 'j', 'j@gmail.com', '$2y$10$KpBKw9Ng.j/U6dYXM3OoHe5aXvKrGT5ckO4BF20uR112L2gay4av.'),
(6, 'abhishek', 123456789, 'Bandra', 'abhishek@mail.com', '$2y$10$EeogKT17J9ZOP6DonxEWE.zPogDgY1vNxJ30N8bOZhD.AhBdtF/Ze'),
(7, 'someone', 123456789, 'home', 'email@email.com', '$2y$10$3ouD4Ap8S9pvZrtOp9oMlu47vl00tKIMa4Rep6.Snt6g7/L/Qbmnm');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Leave_ID` int(10) NOT NULL,
  `Employee_ID` int(10) DEFAULT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Reason` varchar(255) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Leave_ID`, `Employee_ID`, `Start_Date`, `End_Date`, `Location`, `Reason`, `Status`) VALUES
(2, NULL, '2021-10-18', '2021-10-19', 'a', 'a', 'approved'),
(3, 6, '2021-10-05', '2021-10-05', 'soetwlktr', 'somehting', 'approved'),
(4, 6, '2021-10-05', '2021-10-06', 'give me a kekw', 'poggers in the chat', 'reject'),
(5, 6, '2021-10-12', '2021-10-14', 'd', 'd', 'reject'),
(6, 7, '2021-10-25', '2021-10-26', 'home', 'sick', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employeee_ID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Leave_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Employeee_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `Leave_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
