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
-- `Menu` table structure
--
CREATE TABLE `Menu` (
  `Title` VARCHAR(40) NOT NULL UNIQUE,
  `Season` VARCHAR(30), 
  `Period of Day` VARCHAR(30), 
  PRIMARY KEY(Title)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for `Menu` table
--
INSERT INTO `Menu` (`Title`, `Season`, `Period of Day`) VALUES
('Phils Phreaky Filling Filberts', 'Summer', 'All-Day'),
('A Taste of Myanmar', 'Summer', 'Dinner'),
('Reeses Pieces', 'Dessert', 'Dinner'),
('Summer Smoothies', 'Summer', 'All-Day'),
('Shazam', 'Spring', 'Breakfast'),
('The Goat', 'Year-Round', 'Lunch'),
('Citronnelle', 'Summer', 'Dinner'),
('le Tambour de Grande Ville', 'Spring', 'Brunch'),
('le Cheval de Jade', 'Spring', 'Brunch'),
('le Parloir Silencieux', 'Spring', 'Brunch');


--
-- `Dish` table structure
--
CREATE TABLE `Dish` (
  `Name` VARCHAR(40) NOT NULL UNIQUE,
  `Description` VARCHAR(256), 
  PRIMARY KEY(Name)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for `Dish` table
--
INSERT INTO `Dish` (`Name`, `Description`) VALUES
('Morel and ezekiel salad', 'A crisp salad featuring morel and ezekiel'),
('Martini and strawberry tiramisu', 'A silky tiramisu made with martini and fresh strawberries'),
('Pepper and coconut curry', 'Hot curry made with red pepper and fresh coconut'),
('Kalnji and cheshire cheese salad', 'Kalnji and cheshire cheese served on a bed of lettuce'),
('Mangetout and napolitana', 'A crunchy salad featuring fresh mangetout and napolitana'),
('Pepper and banana madras', 'Medium-hot madras made with orange pepper and fresh banana'),
('Donair and kalnji salad', 'A crunchy salad featuring donair and kalnji'),
('Savoy cabbage and zabaglione salad', 'A crisp salad featuring savoy cabbage and zabaglione'),
('Roast daikon', 'Roast daikon served with tender vegetables'),
('Aubergine and plantain curry', 'Hot curry made with salted aubergine and fresh plantain');




--
-- `Customer` table structure
--
CREATE TABLE `Customer` (
  `Cid` int(11) NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(50) NOT NULL UNIQUE,
  `Name` VARCHAR(30) NOT NULL, 
  `Password` VARCHAR(30) NOT NULL,
  PRIMARY KEY(Cid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for `Customer` table
--
INSERT INTO `Customer` (`Cid`, `Email`, `Name`, `Password`) VALUES
(1, 'anEmail@email.com', 'User', 'a'),
(2, '9001@email.com', 'Over 9000', 'a'),
(3, 'sample@email.com', 'Sample', 'a'),
(4, 'test@email.com', 'test', 'a'),
(5, 'HessRobot@email.com', 'Rob Hess', 'a'),
(6, 'kimth@oregonstate.edu', 'LK Thang', 'a'),
(7, 'mestasp@oregonstate.edu', 'Phillip Mestas', 'a'),
(8, 'camachso@oregonstate.edu', 'LK Girl', 'a'),
(9, 'tester@email.com', 'tester', 'a'),
(10, 'benlee@oregonstate.edu', 'Ben Lee', 'a');


--
-- `Review` table structure
--
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
-- Dumping data for `Review` table
--
INSERT INTO `Review` (`Cid`, `ReviewText`, `ReviewRating`, `OwnerFollowUp`, `Visits`) VALUES
(1, 'I love this place. I have been going here for years and it is a great place to hang out with friends and family. I love the food and service. I have never had a bad experience when I am there.', 10, 'Thanks!', 56),
(2, 'I had the grilled veggie burger with fries!!!! Ohhhh and taste. Omgggg! Very flavorful! It was so delicious that I didn’t spell it!!', 10, 'Glad you liked it! Hope to see you again soon.', 1),
(3, 'My family and I are huge fans of this place. The staff is super nice and the food is great. The chicken is very good and the garlic sauce is perfect. Ice cream topped with fruit is delicious too. Highly recommended!', 10, 'Wow, thanks!', 5),
(4, 'Cool seating design inside including some countertop space.', 9, '', 4),
(5, 'I come eat here often and everyone is always so friendly an si Sam she is always super happy and welcomes everyone that walks in and take good care of your order', 10, '', 20),
(6, 'They are usually all the same so I wont say too much. But my experience at this location was overall positive.', 8, '', 1),
(7, 'really good Mexican food for a chain restaurant.', 9, '', 5),
(8, 'dont really like the food but a good atmosphere.', 5, '', 6),
(9, 'Good LK food!', 10, 'Thanks!', 56),
(10, 'Did not meet my expectations', 2, 'Sorry', 1);


--
-- `Tables` table structure
--
CREATE TABLE `Tables` (
  `Tid` int(11) NOT NULL,
  `Shape` VARCHAR(50) NOT NULL,
  `NumberOfSeats` int(11) NOT NULL,
  PRIMARY KEY (Tid) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for `Tables` table
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


--
-- `Reservation` table structure
--
CREATE TABLE `Reservation` (
  `Cid` int(11) NOT NULL UNIQUE,
  `Tid` int(11) NOT NULL,
  `StartTime` datetime NOT NULL,
  PRIMARY KEY (Tid, StartTime), 
  FOREIGN KEY (Tid) REFERENCES Tables (Tid),
  FOREIGN KEY (Cid) REFERENCES Customer (Cid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for `Reservation` table
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
