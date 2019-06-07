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
--   - used 'DishName' because it looked like 'Name' was reserved?
CREATE TABLE `Dish` (
  `DishName` VARCHAR(40) NOT NULL UNIQUE,
  `Description` VARCHAR(256), 
  PRIMARY KEY(DishName)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for `Dish` table
--
INSERT INTO `Dish` (`DishName`, `Description`) VALUES
('Morel and ezekiel salad', 'A crisp salad featuring morel and ezekiel'),
('Martini and strawberry tiramisu', 'A silky tiramisu made with martini and fresh strawberries'),
('Pepper and coconut curry', 'Hot curry made with red pepper and fresh coconut'),
('Kalnji and cheshire cheese salad', 'Kalnji and cheshire cheese served on a bed of lettuce'),
('Mangetout and napolitana', 'A crunchy salad featuring fresh mangetout and napolitana'),
('Pepper and banana madras', 'Medium-hot madras made with orange pepper and fresh banana'),
('Donair and kalnji salad', 'A crunchy salad featuring donair and kalnji'),
('Savoy cabbage and zabaglione salad', 'A crisp salad featuring savoy cabbage and zabaglione'),

--
--ingredients Table
--

CREATE TABLE `Ingredients`(
	IngredientName VARCHAR(20) PRIMARY KEY NOT NULL,
	Units INT DEFAULT NULL,
	Weight FLOAT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Ingredients` (`IngredientName`, `Units`, `Weight`) VALUES
('Mushroom', 5, 8.5),
('Python Meat', 30, 10.7),
('Garlic', 25, 1.5),
('Tomatoes', 7, 3),
('Spinach', 80, 1.0),
('Sausage', 100, 3.2),
('Lettuce', 67, 6.5),
('Salt', 300, 0.1),
('Pepper', 300, 0.1),
('Phillip Meat', 4, 9.6);('Roast daikon', 'Roast daikon served with tender vegetables'),
('Aubergine and plantain curry', 'Hot curry made with salted aubergine and fresh plantain');



-- Uses Table
--

CREATE TABLE Uses(
	`Name` VARCHAR(40) NOT NULL,
	`IngredientName` VARCHAR(20) NOT NULL,
  FOREIGN KEY(Name) REFERENCES Dish(DishName),
  PRIMARY KEY (Name, IngredientName),
  FOREIGN KEY(IngredientName) REFERENCES Ingredients(IngredientName)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `Uses` (`Name`, `IngredientName`) VALUES
('Roast daikon', 'Mushroom'),
('Aubergine and plantain curry', 'Salt'),
('Morel and ezekiel salad', 'Pepper'),
('Martini and strawberry tiramisu', 'Phillip Meat'),
('Pepper and coconut curry', 'Garlic'),
('Kalnji and cheshire cheese salad', 'Python Meat'),
('Mangetout and napolitana', 'Tomatoes'),
('Pepper and banana madras', 'Lettuce'),
('Donair and kalnji salad', 'Spinach'),
('Savoy cabbage and zabaglione salad', 'Sausage');




--
-- `Contains` table structure
--
CREATE TABLE `Contains` (
  `Price` int(8) NOT NULL,
  `Menu` VARCHAR(40) NOT NULL,
  `Dish` VARCHAR(40) NOT NULL,
  PRIMARY KEY (Menu, Dish), 
  FOREIGN KEY (Menu) REFERENCES Menu (Title),
  FOREIGN KEY (Dish) REFERENCES Dish (DishName)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for `Contains` table
--
INSERT INTO `Contains` (`Price`, `Menu`, `Dish`) VALUES
(8.5, 'Phils Phreaky Filling Filberts', 'Morel and ezekiel salad'),
(8, 'Phils Phreaky Filling Filberts', 'Martini and strawberry tiramisu'),
(9.5, 'Phils Phreaky Filling Filberts', 'Pepper and banana madras'),
(10.5, 'Phils Phreaky Filling Filberts', 'Kalnji and cheshire cheese salad'),
(8.5, 'Phils Phreaky Filling Filberts', 'Donair and kalnji salad'),
(7.5, 'A Taste of Myanmar', 'Pepper and banana madras'),
(7, 'A Taste of Myanmar', 'Roast daikon'),
(8.5, 'A Taste of Myanmar', 'Pepper and coconut curry'),
(7.5, 'A Taste of Myanmar', 'Kalnji and cheshire cheese salad'),
(7, 'A Taste of Myanmar', 'Aubergine and plantain curry'),
(5.5, 'A Taste of Myanmar', 'Martini and strawberry tiramisu'),
(5, 'Reeses Pieces', 'Pepper and banana madras'),
(4, 'Reeses Pieces', 'Martini and strawberry tiramisu'),
(6, 'Reeses Pieces', 'Pepper and coconut curry'),
(20, 'le Tambour de Grande Ville', 'Morel and ezekiel salad'),
(21, 'le Tambour de Grande Ville', 'Pepper and coconut curry'),
(16, 'le Tambour de Grande Ville', 'Kalnji and cheshire cheese salad'),
(18, 'le Tambour de Grande Ville', 'Roast daikon'),
(19, 'le Tambour de Grande Ville', 'Aubergine and plantain curry'),
(17.5, 'le Tambour de Grande Ville', 'Donair and kalnji salad');




--
-- `Pictures` table structure
--
CREATE TABLE `Picture` (
  `Pid` int(11) NOT NULL UNIQUE,
  `URL` VARCHAR(100) NOT NULL,
  `Dish` VARCHAR(40) NOT NULL,
  PRIMARY KEY (Pid),
  FOREIGN KEY (Dish) REFERENCES Dish (DishName)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for `Pictures` table
--
INSERT INTO `Picture` (`Pid`, `URL`, `Dish`) VALUES
(101, 'https://photos.app.goo.gl/rGY3yRAqnzKFrPDe6', `Morel and ezekiel salad`),
(102, 'https://photos.app.goo.gl/bhEycDjwMeu5Rzey9', `Martini and strawberry tiramisu`),
(103, 'https://photos.app.goo.gl/xnRd7uVg5U4WC17w7', 'Pepper and coconut curry'),
(104, 'https://photos.app.goo.gl/5QHRnrfSPzdx14af9', 'Kalnji and cheshire cheese salad'),
(105, 'https://photos.app.goo.gl/7TW7VYVdAUBtyCfB6', 'Mangetout and napolitana'),
(106, 'https://photos.app.goo.gl/Pzh1UHPkdmZd1sn97', 'Pepper and banana madras'),
(107, 'https://photos.app.goo.gl/wf5o1SY8C4XvMkP29', 'Donair and kalnji salad'),
(108, 'https://photos.app.goo.gl/gdCbiFCoFyUj91RG7', 'Savoy cabbage and zabaglione salad'),
(109, 'https://photos.app.goo.gl/KSfCYZ8j4URGfZir9', 'Roast daikon'),
(110, 'https://photos.app.goo.gl/rNcJJMZHgXu65iAA9', 'Aubergine and plantain curry');




--
-- `Customer` table structure
--
CREATE TABLE `Customer` (
  `Cid` int(11) NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(50) NOT NULL UNIQUE,
  `Name` VARCHAR(30) NOT NULL, 
  `Password` VARCHAR(250) NOT NULL,
  PRIMARY KEY(Cid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Dumping data for `Customer` table
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
