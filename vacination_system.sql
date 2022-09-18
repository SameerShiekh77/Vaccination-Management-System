-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 04:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vacination_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `booking_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `child_details`
--

CREATE TABLE `child_details` (
  `child_id` int(11) NOT NULL,
  `child_name` varchar(50) NOT NULL,
  `child_age` int(11) NOT NULL,
  `child_dob` date NOT NULL,
  `vaccinated` varchar(50) NOT NULL,
  `child_f_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child_details`
--

INSERT INTO `child_details` (`child_id`, `child_name`, `child_age`, `child_dob`, `vaccinated`, `child_f_name`) VALUES
(1, 'hiba', 26, '2022-09-13', 'yes', 'altaf'),
(2, 'jaweria', 19, '2013-09-04', 'yes', 'zulfiqar'),
(3, 'maria', 45, '2012-09-04', 'no', 'zulfiqar'),
(4, 'fatima', 34, '2012-09-18', 'no', 'shezad'),
(5, 'khan', 12, '2020-12-29', 'yes', 'khanzada'),
(6, 'khan', 12, '2020-12-29', 'yes', 'khanzada'),
(7, 'khan', 12, '2020-12-29', 'yes', 'khanzada'),
(9, 'ali', 23, '2022-09-08', 'yes', 'alikhan');

-- --------------------------------------------------------

--
-- Table structure for table `hopital_list`
--

CREATE TABLE `hopital_list` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(50) NOT NULL,
  `hospital_timing` datetime DEFAULT NULL,
  `doctor_counts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vacinate_peoples`
--

CREATE TABLE `vacinate_peoples` (
  `vacinate_id` int(11) NOT NULL,
  `pfizer` varchar(50) NOT NULL,
  `moderna` varchar(50) NOT NULL,
  `astrazeneca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `child_details`
--
ALTER TABLE `child_details`
  ADD PRIMARY KEY (`child_id`);

--
-- Indexes for table `hopital_list`
--
ALTER TABLE `hopital_list`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vacinate_peoples`
--
ALTER TABLE `vacinate_peoples`
  ADD PRIMARY KEY (`vacinate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `child_details`
--
ALTER TABLE `child_details`
  MODIFY `child_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hopital_list`
--
ALTER TABLE `hopital_list`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vacinate_peoples`
--
ALTER TABLE `vacinate_peoples`
  MODIFY `vacinate_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
