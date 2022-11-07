-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 03:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chattogram`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `Name` varchar(70) NOT NULL,
  `Description` text NOT NULL,
  `Location` varchar(80) NOT NULL,
  `Website` text NOT NULL,
  `Images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`Name`, `Description`, `Location`, `Website`, `Images`) VALUES
('Chattogram Metropolitan Hospital Limited', 'Metropolitan Hospital Limited', '698, 752 O.R. Nizam Rd, Chattogram 4001', 'https://goo.gl/maps/1sqwzzaNffBQx4pq9', '2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Name` varchar(70) NOT NULL,
  `Description` text NOT NULL,
  `Location` varchar(80) NOT NULL,
  `Website` text NOT NULL,
  `Ratings` text NOT NULL,
  `Images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Name`, `Description`, `Location`, `Website`, `Ratings`, `Images`) VALUES
('Hotel Agrabad Limited', 'Featuring an all year outdoor swimming pool, Aqua Blu, the 4-star Hotel Agrabad Limited also boasts a well-equipped gym and a bar with live band performances.', 'Sabder Ali Road, Agrabad C/A, Agrabad, 4000 Chittagong', 'booking.com/hotel/bd/agrabad.en-gb.html?aid=1610687&label=chittagong-0a0s%2A9nLhVTyB5ztvla7sQS379622466193%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-301218619871%3Alp9069450%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YfpWGnRw6lOGgfEoJVv7zYo&sid=408159eef4a85f3e6fd82dd1cb0c68d1', '', '2.jpeg'),
('The Peninsula Chittagong Limited', 'The Peninsula Chittagong Limited is a 4-star property in Port City\'s upscale GEC Circle, a short 5-minute walk from Central Plaza shopping area. Roof top swimming pool and Ozone cafe.', 'CDA Avenue, 4000 Chittagong, Bangladesh', 'https://www.booking.com/hotel/bd/the-peninsula-chittagong-limited.en-gb.html?aid=1610687&label=chittagong-0a0s%2A9nLhVTyB5ztvla7sQS541208166883%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-301218619871%3Alp9069450%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YfpWGnRw6lOGgfEoJVv7zYo&sid=408159eef4a85f3e6fd82dd1cb0c68d1', '', 'hotel2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `Name` varchar(70) NOT NULL,
  `Description` text NOT NULL,
  `Location` varchar(80) NOT NULL,
  `Website` text NOT NULL,
  `Ratings` text NOT NULL,
  `Images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`Name`, `Description`, `Location`, `Website`, `Ratings`, `Images`) VALUES
('fvfvf fvfvfv', 'vfvfvfvfvf', 'vfvfvfvfvfvfv', 'fvfvfvfvfvfv', '', 'hotel1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(70) NOT NULL,
  `user_rating` int(11) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` text NOT NULL,
  `hotel_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`, `hotel_name`) VALUES
(8, 'abbas123', 5, 'gbgbgb', '1659621403', 'The Peninsula Chittagong Limited'),
(13, 'abbas123', 5, 'ffvfvfv', '1659622281', 'Hotel Agrabad Limited'),
(14, 'abbas123', 3, 'good', '1659622905', 'fvfvf fvfvfv');

-- --------------------------------------------------------

--
-- Table structure for table `spot`
--

CREATE TABLE `spot` (
  `Name` varchar(70) NOT NULL,
  `Description` text NOT NULL,
  `Location` varchar(80) NOT NULL,
  `Images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spot`
--

INSERT INTO `spot` (`Name`, `Description`, `Location`, `Images`) VALUES
('dcddfdvd', 'cdcdcdcdc', 'dcddcdcdcdcdc', '3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `Name` varchar(70) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `User_Name` varchar(70) NOT NULL,
  `Password` varchar(70) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(70) NOT NULL,
  `Role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Name`, `Email`, `User_Name`, `Password`, `Dob`, `Gender`, `Role`) VALUES
('Arfanul Kabirrrrrr', 'arfanulkabirapurbo6@gmail.comm', 'abbas123', 'abbas123', '1998-12-10', 'male', 'User'),
('jjj', 'abbas@gmail.com', 'kabir123', 'kabir123', '2022-08-12', 'kabir123', 'Admin'),
('ss', 'kkk@gmail.com', 'ss', 'ssssssss', '1998-12-23', 'male', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD UNIQUE KEY `Name_2` (`Name`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD UNIQUE KEY `Name_2` (`Name`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `spot`
--
ALTER TABLE `spot`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`User_Name`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `User_Name` (`User_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
