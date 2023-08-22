-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 12:42 PM
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
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_apply`
--

CREATE TABLE `card_apply` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(255) DEFAULT NULL,
  `CITY` varchar(255) DEFAULT NULL,
  `FIRST_NAME` varchar(255) DEFAULT NULL,
  `NEAREST_BRANCH` varchar(255) DEFAULT NULL,
  `MIDDLE_NAME` varchar(255) DEFAULT NULL,
  `GENDER` varchar(255) DEFAULT NULL,
  `LAST_NAME` varchar(255) DEFAULT NULL,
  `MARITAL_STATUS` int(11) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PIN` varchar(10) DEFAULT NULL,
  `ADHAR_NO` varchar(20) NOT NULL,
  `STATE` varchar(10) DEFAULT NULL,
  `DOC` varchar(255) DEFAULT NULL,
  `ACCOUNT_NO` varchar(255) DEFAULT NULL,
  `STATUS` int(11) DEFAULT '1',
  `REG_DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `ID` int(11) NOT NULL,
  `ACCOUNT_ID` int(11) NOT NULL,
  `ACCOUNT_NO` varchar(30) NOT NULL,
  `DEPOSIT` int(11) NOT NULL,
  `TYPE` int(11) NOT NULL DEFAULT '-1',
  `DATE` datetime NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`ID`, `ACCOUNT_ID`, `ACCOUNT_NO`, `DEPOSIT`, `TYPE`, `DATE`, `STATUS`) VALUES
(6, 1, '20201019092429', 100, 1, '2020-10-19 12:29:32', 1),
(7, 1, '20201019092429', 400, 1, '2020-10-19 12:30:46', 0),
(8, 1, '20201019092429', 400, 1, '2020-10-19 12:31:54', 0),
(9, 1, '20201019092429', 4888, 1, '2020-10-19 12:36:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `saving_account`
--

CREATE TABLE `saving_account` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(255) DEFAULT NULL,
  `CITY` varchar(255) DEFAULT NULL,
  `FIRST_NAME` varchar(255) DEFAULT NULL,
  `NEAREST_BRANCH` varchar(255) DEFAULT NULL,
  `MIDDLE_NAME` varchar(255) DEFAULT NULL,
  `GENDER` int(11) DEFAULT NULL,
  `LAST_NAME` varchar(255) DEFAULT NULL,
  `MARITAL_STATUS` int(11) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PIN` varchar(10) DEFAULT NULL,
  `ADHAR_NO` varchar(20) NOT NULL,
  `STATE` varchar(10) DEFAULT NULL,
  `DOC` varchar(255) DEFAULT NULL,
  `ACCOUNT_TYPE` int(11) DEFAULT NULL,
  `ACCOUNT_NO` varchar(30) NOT NULL,
  `STATUS` int(11) DEFAULT '1',
  `BALANCE` int(11) NOT NULL DEFAULT '0',
  `REG_DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saving_account`
--

INSERT INTO `saving_account` (`ID`, `TITLE`, `CITY`, `FIRST_NAME`, `NEAREST_BRANCH`, `MIDDLE_NAME`, `GENDER`, `LAST_NAME`, `MARITAL_STATUS`, `ADDRESS`, `EMAIL`, `PIN`, `ADHAR_NO`, `STATE`, `DOC`, `ACCOUNT_TYPE`, `ACCOUNT_NO`, `STATUS`, `BALANCE`, `REG_DATE`) VALUES
(1, 'mr', 'delhi', 'Nishant', 'nagloi', 'Kumar', 1, 'Kumar', 1, '25 sewak park ground floor opp metro pill no 772', 'dea.elijah75@gmail.com', '110059', '1234567890', 'delhi', '', 1, '20201019092429', 1, 7388, '2020-10-19 09:24:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_apply`
--
ALTER TABLE `card_apply`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `ADHAR_NO` (`ADHAR_NO`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `saving_account`
--
ALTER TABLE `saving_account`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `ADHAR_NO` (`ADHAR_NO`),
  ADD UNIQUE KEY `ACCOUNT_NO` (`ACCOUNT_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_apply`
--
ALTER TABLE `card_apply`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `saving_account`
--
ALTER TABLE `saving_account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
