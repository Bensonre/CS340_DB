-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: classmysql.engr.oregonstate.edu:3306
-- Generation Time: Apr 05, 2019 at 09:50 AM
-- Server version: 10.3.13-MariaDB-log
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs340_bensonre`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `Cid` int(11) NOT NULL,
  `Email` VARCHAR(50) NOT NULL,
  `Name` VARCHAR(30) NOT NULL, 
  `Password` VARCHAR(30) NOT NULL,
  `ReviewText` VARCHAR(256) DEFAULT NULL,
  `ReviewRating` int(2) DEFAULT NULL,
  `OwnerFollowUp` VARCHAR(50) DEFAULT NULL,
  `Visits` int (11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `Customer`
  ADD PRIMARY KEY (`Cid`),
  ADD UNIQUE (`Email`);
--
-- Dumpiang data for table `Customer`
--

INSERT INTO `Customer` (`CId`, `Email`, `Name`, `Password`) VALUES
(1, 'anEmail@email.com', 'User', 'a'),
(2, '9001@email.com', 'Over 9000', 'a'),
(3, 'sample@email.com', 'Sample', 'a'),
(4, 'test@email.com', 'test', 'a'),
(5, 'HessRobot@email.com', 'Rob Hess', 'a');