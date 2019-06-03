-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: classmysql.engr.oregonstate.edu:3306
-- Generation Time: May 29, 2019 at 12:50 PM
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
  `Cid` int(11) NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(50) NOT NULL UNIQUE,
  `Name` VARCHAR(30) NOT NULL, 
  `Password` VARCHAR(256) NOT NULL,
  PRIMARY KEY(Cid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpiang data for table `Customer`
--

INSERT INTO `Customer` (`Cid`, `Email`, `Name`, `Password`) VALUES
(1, 'anEmail@email.com', 'User', '0cc175b9c0f1b6a831c399e269772661'),
(2, '9001@email.com', 'Over 9000', '0cc175b9c0f1b6a831c399e269772661'),
(3, 'sample@email.com', 'Sample', '0cc175b9c0f1b6a831c399e269772661'),
(4, 'test@email.com', 'test', '0cc175b9c0f1b6a831c399e269772661'),
(5, 'HessRobot@email.com', 'Rob Hess', '0cc175b9c0f1b6a831c399e269772661'),
(6, 'kimth@oregonstate.edu', 'LK Thang', '0cc175b9c0f1b6a831c399e269772661'),
(7, 'mestasp@oregonstate.edu', 'Phillip Mestas', '0cc175b9c0f1b6a831c399e269772661'),
(8, 'camachso@oregonstate.edu', 'LK Girl', '0cc175b9c0f1b6a831c399e269772661'),
(9, 'tester@email.com', 'tester', '0cc175b9c0f1b6a831c399e269772661'),
(10, 'benlee@oregonstate.edu', 'Ben Lee', '0cc175b9c0f1b6a831c399e269772661');


CREATE TABLE `Review` (
  `Cid` int(11) NOT NULL,
  `ReviewText` VARCHAR(256) DEFAULT NULL,
  `ReviewRating` int(2) DEFAULT NULL,
  `OwnerFollowUp` VARCHAR(50) DEFAULT NULL,
  `Visits` int (11) DEFAULT NULL,
  PRIMARY KEY (Cid),
  FOREIGN KEY (Cid) REFERENCES Customer (Cid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Review`
--

INSERT INTO `Review` (`Cid`, `ReviewText`, `ReviewRating`, `OwnerFollowUp`, `Visits`) VALUES
(10, 'Did not meet my expectations', 2, 'Sorry', 1),
(8, 'Good LK food!', 10, 'Thanks!', 56);


CREATE TABLE `Tables` (
  `Tid` int(11) NOT NULL,
  `Shape` VARCHAR(50) NOT NULL,
  `NumberOfSeats` int(11) NOT NULL,
  PRIMARY KEY (Tid) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Tables`
--

INSERT INTO `Tables` (`Tid`, `Shape`, `NumberOfSeats`) VALUES
(1, 'Circle', 8),
(2, 'Circle', 6),
(3, 'Square', 10),
(4, 'Square', 4),
(5, 'Square', 4),
(6, 'Bar', 1),
(7, 'Bar', 1),
(8, 'Bar', 1),
(9, 'Bar', 1),
(10, 'Bar', 1);

CREATE TABLE `Reservation` (
  `Cid` int(11) NOT NULL UNIQUE,
  `Tid` int(11) NOT NULL,
  `StartTime` datetime NOT NULL,
  PRIMARY KEY (Tid, StartTime), 
  FOREIGN KEY (Tid) REFERENCES Tables (Tid),
  FOREIGN KEY (Cid) REFERENCES Customer (Cid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Reservation`
--

INSERT INTO `Reservation` (`Cid`, `Tid`, `StartTime`) VALUES
(10, 6, '2019-05-28 11:30:00'),
(1, 1, '2019-06-18 16:00:00'),
(3, 7, '2019-06-13 16:00:00'),
(4, 8, '2019-06-13 16:00:00'),
(2, 5, '2019-06-13 16:00:00'),
(5, 5, '2019-06-11 14:00:00'),
(6, 6, '2019-07-11 12:00:00'),
(7, 7, '2019-07-11 12:00:00'),
(8, 8, '2019-06-01 13:30:00'),
(9, 9, '2019-06-01 13:30:00');

---
--- Trigers
---
drop trigger IF exists WatchForBadUsername
delimiter $$
CREATE TRIGGER `WatchForBadUsername`
BEFORE INSERT ON `Customer` 
FOR EACH ROW 
BEGIN 
	IF (New.Email NOT LIKE '%@%.%') THEN 
		SET New.Email = NULL; 
	End IF;
	IF (New.Email Like '%;%') THEN 
		SET New.Email = NULL; 
	END IF; 
END;
$$

--
-- DO NOT DELETE
-- I promise this is not a joke.
-- The line above this actually
-- won't work unless you put something
-- else after.  Why?  No idea. But this 
-- makes it work so ya. 
--

CREATE TABLE `LK` (
  `LKid` int(11) NOT NULL,
  PRIMARY KEY (LKid)
);

DROP TABLE `LK`;
