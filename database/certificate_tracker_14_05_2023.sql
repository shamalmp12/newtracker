-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 05:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certificate_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `updated_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `certificate_id` varchar(50) DEFAULT NULL,
  `fk_cat_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_marks` varchar(10) NOT NULL,
  `c_description` varchar(255) NOT NULL,
  `fk_student_id` int(11) NOT NULL,
  `c_status` varchar(100) NOT NULL,
  `c_issue_date` date NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_allocation`
--

CREATE TABLE `student_allocation` (
  `id` int(11) NOT NULL,
  `fk_student_id` int(11) NOT NULL,
  `fk_staff_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `usn` varchar(100) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `sem` int(2) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL,
  `allocation_status` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `user_type`, `usn`, `name`, `phone`, `sem`, `created_date`, `updated_date`, `status`, `allocation_status`) VALUES
(2, 'admin@gmail.com', '12345', 'Admin', NULL, 'Admin', '', NULL, '2023-01-22 16:12:24', '2023-01-22 16:12:24', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_student_id` (`fk_student_id`),
  ADD KEY `fk_cat_id` (`fk_cat_id`);

--
-- Indexes for table `student_allocation`
--
ALTER TABLE `student_allocation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_studentid` (`fk_student_id`),
  ADD KEY `fk_staff_id` (`fk_staff_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `usn` (`usn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_allocation`
--
ALTER TABLE `student_allocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certificate`
--
ALTER TABLE `certificate`
  ADD CONSTRAINT `fk_cat_id` FOREIGN KEY (`fk_cat_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `fk_student_id` FOREIGN KEY (`fk_student_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `student_allocation`
--
ALTER TABLE `student_allocation`
  ADD CONSTRAINT `fk_staff_id` FOREIGN KEY (`fk_staff_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_studentid` FOREIGN KEY (`fk_student_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
