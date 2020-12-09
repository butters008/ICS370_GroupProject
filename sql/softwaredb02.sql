-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 02:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softwaredb02`
--

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `project_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `material_name` varchar(255) NOT NULL,
  `material_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `project_quote` int(11) NOT NULL,
  `project_address` varchar(255) NOT NULL,
  `project_City` varchar(255) NOT NULL,
  `project_Zip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_type`, `project_quote`, `project_address`, `project_City`, `project_Zip`) VALUES
(1, 'Test P-Name 1', 'Roofing', 5000, '515 CENTRAL AVE S', 'MILACA', 56353),
(2, 'Test P-Name 1', 'Roofing', 0, '10385 Linnet Circle NW Apt 107', 'Minneapolis', 55433),
(3, 'Test P-Name 3', 'Landscaping', 0, '5522', '20700 ITALY AVE', 0),
(4, 'Test P-Name 1', 'Landscaping', 5522, '20700 ITALY AVE', 'LAKEVILLE', 55044);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userUID` varchar(255) NOT NULL,
  `userPwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `userEmail`, `userUID`, `userPwd`) VALUES
(1, 'Admin', 'admin@test.com', 'admin', '$2y$10$Qa1jjZFPO5kJC1xERyJr2ulF7mn/py8zm02jSQAN7Zi.tLbPVc33W'),
(2, 'Keith Merrett Butterfield', 'k.butterfield08@gmail.com', 'test', '$2y$10$C8zeJoTeWKBSSC6xgLFi4uJP03v7436Gz9E3ROh.d4qcqxHtWi0XS');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `project_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `worker_name` varchar(255) NOT NULL,
  `worker_wage` int(11) NOT NULL,
  `worker_hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
