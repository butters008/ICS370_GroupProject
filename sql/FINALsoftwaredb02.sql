-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 03:10 AM
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
  `material_amount` int(11) NOT NULL,
  `material_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`project_id`, `material_id`, `material_name`, `material_amount`, `material_cost`) VALUES
(0, 9, '1', 1, 1),
(0, 10, '1', 1, 1),
(0, 11, '1', 1, 1),
(19, 12, 'adfdsa', 1, 2),
(19, 13, 'sadfgas', 3, 4),
(20, 14, 'Material Name 1', 22, 33),
(20, 15, 'Material Name 3', 22, 11),
(20, 16, 'Material Name 2', 11, 44);

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
(17, 'See the Change', 'Roofing', 4444, '20700', 'LAKEVILLE', 20700),
(18, 'See the Change', 'Roofing', 4444, '20700', 'LAKEVILLE', 20700),
(19, 'See the Change', 'Roofing', 4444, '20700', 'LAKEVILLE', 20700),
(20, 'See the Change', 'Roofing', 4444, '20700', 'LAKEVILLE', 20700);

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
(1, 'Admin', 'admin@test.com', 'admin', '$2y$10$Qa1jjZFPO5kJC1xERyJr2ulF7mn/py8zm02jSQAN7Zi.tLbPVc33W');

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
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`project_id`, `worker_id`, `worker_name`, `worker_wage`, `worker_hours`) VALUES
(17, 7, 'Johnny', 25, 50),
(17, 8, 'Sally', 25, 50),
(19, 9, 'Worker Name 1', 12, 34),
(19, 10, 'Worker Name 3', 124, 4),
(20, 11, 'Worker Name 1', 12, 33),
(20, 12, 'Worker Name 2', 34, 55),
(20, 13, 'Worker Name 3', 22, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`material_id`);

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
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
