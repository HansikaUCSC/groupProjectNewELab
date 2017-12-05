-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 08:10 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gp_elab`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesshistory`
--

CREATE TABLE `accesshistory` (
  `access_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` int(4) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `card_id` int(5) NOT NULL,
  `cardLable` int(30) NOT NULL,
  `accStatus` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ncleanstaff`
--

CREATE TABLE `ncleanstaff` (
  `nuser_id` int(5) NOT NULL,
  `tag_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nlecture`
--

CREATE TABLE `nlecture` (
  `nuser_id` int(5) NOT NULL,
  `passDevice` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nonreguser`
--

CREATE TABLE `nonreguser` (
  `user_id` int(5) NOT NULL,
  `fName` varchar(30) NOT NULL,
  `lName` varchar(30) NOT NULL,
  `nic` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nonreguser`
--

INSERT INTO `nonreguser` (`user_id`, `fName`, `lName`, `nic`) VALUES
(12, 'gsfgf', 'fvxcv', 32323),
(6, 'sanju', 'maheeshan', 951453052),
(5, 'anju', 'maheeshan', 951453072);

-- --------------------------------------------------------

--
-- Table structure for table `nstudent`
--

CREATE TABLE `nstudent` (
  `nuser_id` int(5) NOT NULL,
  `tagId` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nstudent`
--

INSERT INTO `nstudent` (`nuser_id`, `tagId`) VALUES
(5, 1),
(6, 2),
(12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(5) NOT NULL,
  `prodDes` varchar(10000) NOT NULL,
  `prodImagePath` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reguser`
--

CREATE TABLE `reguser` (
  `user_id` int(5) NOT NULL,
  `fName` varchar(30) NOT NULL,
  `lName` varchar(30) NOT NULL,
  `nic` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phNum` int(10) NOT NULL,
  `card_id` int(30) NOT NULL,
  `userLevel` int(2) NOT NULL,
  `passWeb` varchar(50) NOT NULL,
  `secretCode` int(5) NOT NULL,
  `passDevice` int(5) NOT NULL,
  `userImage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `scheId` int(10) NOT NULL,
  `scheType` varchar(20) NOT NULL,
  `user_id` int(5) NOT NULL,
  `startTime` int(4) NOT NULL,
  `endTime` int(4) NOT NULL,
  `scheDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag_id` int(5) NOT NULL,
  `tagLable` int(30) NOT NULL,
  `tagStatus` enum('inactive','active') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tag_id`, `tagLable`, `tagStatus`) VALUES
(1, 123, 'active'),
(2, 234, 'active'),
(3, 345345, 'active'),
(4, 525245, 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `userName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `userName`) VALUES
(5, 'anju'),
(12, 'gsfgf'),
(6, 'sanju');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesshistory`
--
ALTER TABLE `accesshistory`
  ADD PRIMARY KEY (`access_id`),
  ADD UNIQUE KEY `access_id` (`access_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`card_id`),
  ADD UNIQUE KEY `card_id` (`card_id`),
  ADD UNIQUE KEY `cardLable` (`cardLable`);

--
-- Indexes for table `ncleanstaff`
--
ALTER TABLE `ncleanstaff`
  ADD KEY `nuser_id` (`nuser_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `nlecture`
--
ALTER TABLE `nlecture`
  ADD KEY `nuser_id` (`nuser_id`);

--
-- Indexes for table `nonreguser`
--
ALTER TABLE `nonreguser`
  ADD UNIQUE KEY `nic` (`nic`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `nstudent`
--
ALTER TABLE `nstudent`
  ADD KEY `nuser_id` (`nuser_id`),
  ADD KEY `tagId` (`tagId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `reguser`
--
ALTER TABLE `reguser`
  ADD UNIQUE KEY `nic` (`nic`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `card_id` (`card_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`scheId`),
  ADD UNIQUE KEY `scheId` (`scheId`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`),
  ADD UNIQUE KEY `tag_id` (`tag_id`),
  ADD UNIQUE KEY `tagLable` (`tagLable`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesshistory`
--
ALTER TABLE `accesshistory`
  MODIFY `access_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `scheId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accesshistory`
--
ALTER TABLE `accesshistory`
  ADD CONSTRAINT `accesshistory_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `ncleanstaff`
--
ALTER TABLE `ncleanstaff`
  ADD CONSTRAINT `ncleanstaff_ibfk_1` FOREIGN KEY (`nuser_id`) REFERENCES `nonreguser` (`user_id`),
  ADD CONSTRAINT `ncleanstaff_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`tag_id`);

--
-- Constraints for table `nlecture`
--
ALTER TABLE `nlecture`
  ADD CONSTRAINT `nlecture_ibfk_1` FOREIGN KEY (`nuser_id`) REFERENCES `nonreguser` (`user_id`);

--
-- Constraints for table `nonreguser`
--
ALTER TABLE `nonreguser`
  ADD CONSTRAINT `nonreguser_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `nstudent`
--
ALTER TABLE `nstudent`
  ADD CONSTRAINT `nstudent_ibfk_1` FOREIGN KEY (`nuser_id`) REFERENCES `nonreguser` (`user_id`),
  ADD CONSTRAINT `nstudent_ibfk_2` FOREIGN KEY (`tagId`) REFERENCES `tags` (`tag_id`);

--
-- Constraints for table `reguser`
--
ALTER TABLE `reguser`
  ADD CONSTRAINT `reguser_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `reguser_ibfk_2` FOREIGN KEY (`card_id`) REFERENCES `cards` (`card_id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
