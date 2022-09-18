-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 05:57 PM
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
  `patient_name` varchar(25) NOT NULL,
  `room_no` int(11) NOT NULL,
  `hospital_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`booking_id`, `patient_name`, `room_no`, `hospital_name`) VALUES
(2, 'Jaweriya', 11, 'Aga Khan Hospital'),
(4, 'fatima', 43, 'Ziauddin ');

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
(7, 'shahzaib', 213, '2020-12-29', 'yes', 'khanzada324'),
(12, 'fatima', 45, '2004-02-23', 'yes', 'khan');

-- --------------------------------------------------------

--
-- Table structure for table `hopital_list`
--

CREATE TABLE `hopital_list` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(50) NOT NULL,
  `hospital_timing` int(12) DEFAULT NULL,
  `doctor_counts` int(11) NOT NULL,
  `timing_from` time DEFAULT NULL,
  `timing_to` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hopital_list`
--

INSERT INTO `hopital_list` (`hospital_id`, `hospital_name`, `hospital_timing`, `doctor_counts`, `timing_from`, `timing_to`) VALUES
(1, 'Abbassi Shaheed Hospital', 24, 100, '09:00:00', '22:34:00'),
(4, 'Burhani', 23, 244, '06:41:00', '21:36:00'),
(6, 'Ziadduin Hospital', 12, 100, '00:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `dt`, `username`) VALUES
(8, 'sameer12@gmail.com', '$2y$10$.6DnqliJwN/II5nbocRUEu6PM27pXuyv24EXdXog2VqNGRM.w56sC', '2022-09-18 20:12:19', 'SAMEER'),
(9, 'adnan@gmail.com', '$2y$10$srTBM3oaN65DliOqnfPqKeDeY6x8yZAWsJU7FS.6SvkkQt3GtomfC', '2022-09-18 20:13:54', 'adnan'),
(10, 'sameershaikh@gmail.com', '$2y$10$MQpx5L.ReVHHHLllJAXwteH9L6wUz/lA.Wi/DgpmQvdok7bqVBLS2', '2022-09-18 20:41:26', 'sameer'),
(11, 'sameer@gmail.com', '$2y$10$VnKWuZLuVgQOXwlcfoS6CuPk01ok9wTivx4o8if.wt6NZHBbC2K8q', '2022-09-18 20:45:38', 'muhammadsameer');

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
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `child_details`
--
ALTER TABLE `child_details`
  MODIFY `child_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hopital_list`
--
ALTER TABLE `hopital_list`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
