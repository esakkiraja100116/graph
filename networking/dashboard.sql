-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 01:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `about` varchar(50) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `date_time` datetime NOT NULL,
  `auth_token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `about`, `admin_id`, `date_time`, `auth_token`) VALUES
(1, 'admin', 'manager', 45394, '2021-12-09 19:25:12', '[value-6dfd49d8shddfdfd');

-- --------------------------------------------------------

--
-- Table structure for table `comerence`
--

CREATE TABLE `comerence` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `lab_name` varchar(50) NOT NULL,
  `comerence_name` text NOT NULL,
  `comerence_status` int(2) NOT NULL,
  `comerence_completed` int(2) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comerence`
--

INSERT INTO `comerence` (`id`, `user_id`, `lab_name`, `comerence_name`, `comerence_status`, `comerence_completed`, `date_time`) VALUES
(1, 8457560, 'Innovation & Product development Lab', 'thrlda', 0, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `id` int(10) NOT NULL,
  `student_name` text NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `lab_name` varchar(50) NOT NULL,
  `c_name` text NOT NULL,
  `c_date` datetime NOT NULL,
  `c_status` int(2) NOT NULL,
  `c_win` int(10) NOT NULL,
  `c_loss` int(10) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`id`, `student_name`, `user_id`, `lab_name`, `c_name`, `c_date`, `c_status`, `c_win`, `c_loss`, `date_time`) VALUES
(1, 'esakkiraja', '8457560', 'Programming and Coding Lab', 'hakathon', '2021-11-09 06:35:14', 0, 0, 0, '2021-11-04 11:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `lab_name` varchar(50) NOT NULL,
  `Journal_name` text NOT NULL,
  `Journal_status` int(2) NOT NULL,
  `Journal_completed` int(2) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `user_id`, `lab_name`, `Journal_name`, `Journal_status`, `Journal_completed`, `date_time`) VALUES
(1, 8457560, 'Embedded and IoT Lab', 'thrla', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `patent`
--

CREATE TABLE `patent` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `lab_name` varchar(50) NOT NULL,
  `awarded` text NOT NULL,
  `published` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patent`
--

INSERT INTO `patent` (`id`, `user_id`, `lab_name`, `awarded`, `published`, `date_time`) VALUES
(1, 8457560, 'Robotics and Automation Lab', '0', '1', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `lab_name` varchar(50) NOT NULL,
  `product_name` text NOT NULL,
  `product_status` int(2) NOT NULL,
  `product_completed` int(2) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `user_id`, `lab_name`, `product_name`, `product_status`, `product_completed`, `date`) VALUES
(1, 8457560, 'Ideation Lab', 'thrla', 1, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `staff_info`
--

CREATE TABLE `staff_info` (
  `id` int(10) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `staff_code` int(10) NOT NULL,
  `lab_name` varchar(50) NOT NULL,
  `total_students` int(10) NOT NULL,
  `auth_token` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_info`
--

INSERT INTO `staff_info` (`id`, `staff_name`, `gender`, `username`, `password`, `staff_code`, `lab_name`, `total_students`, `auth_token`, `status`, `date_time`) VALUES
(28, 'Manohar', 'male', 'manohar', '0cc175b9c0f1b6a831c399e269772661', 833024, 'Programming and Coding Lab', 0, '61a70e80cbc2f', 0, '2021-12-01 11:26:16'),
(29, 'rajan', 'male', 'rajan', '0cc175b9c0f1b6a831c399e269772661', 586900, 'Architecture and Design Lab', 0, '61a7109b62364', 0, '2021-12-01 11:35:15'),
(30, 'vel', 'male', 'vel', '0cc175b9c0f1b6a831c399e269772661', 888706, 'Cyber Forensics Lab', 0, '61a710bbdd20d', 0, '2021-12-01 11:35:47'),
(31, 'mahendran', 'male', 'mahendran', '0cc175b9c0f1b6a831c399e269772661', 631456, 'Data Science Lab', 0, '61a710fc0c66d', 0, '2021-12-01 11:36:52'),
(33, 'jenifer', 'female', 'jenifer', '0cc175b9c0f1b6a831c399e269772661', 343454, 'Design and Analysis Lab', 0, '61a7123e7151d', 0, '2021-12-01 11:42:14'),
(34, 'nisha', 'female', 'nisha', '0cc175b9c0f1b6a831c399e269772661', 963437, 'Embedded and IoT Lab', 0, '61a7125bedbce', 0, '2021-12-01 11:42:43'),
(35, 'jason', 'male', 'jason', '0cc175b9c0f1b6a831c399e269772661', 797478, 'Mobile App Development Lab', 0, '61a71308bcbf4', 0, '2021-12-01 11:45:36'),
(36, 'mahendra', 'male', 'mahendra', '0cc175b9c0f1b6a831c399e269772661', 947594, 'Innovation & Product development Lab', 0, '61a7132d1477e', 0, '2021-12-01 11:46:13'),
(38, 'kamal', 'male', 'kamal', '0cc175b9c0f1b6a831c399e269772661', 766811, 'Robotics and Automation Lab', 0, '61a714068436d', 0, '2021-12-01 11:49:50'),
(39, 'rajapriya', 'female', 'rajapriya', '0cc175b9c0f1b6a831c399e269772661', 348739, 'Ideation Lab', 0, '61a7142a30c24', 0, '2021-12-01 11:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `id` int(10) NOT NULL,
  `register_number` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `user_id` int(10) NOT NULL,
  `password` text NOT NULL,
  `mail_id` text NOT NULL,
  `year` int(10) NOT NULL,
  `department` text NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `auth_token` text NOT NULL,
  `lab_name` text NOT NULL,
  `status` int(2) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`id`, `register_number`, `name`, `gender`, `user_id`, `password`, `mail_id`, `year`, `department`, `phone_number`, `auth_token`, `lab_name`, `status`, `date_time`) VALUES
(1, 2012025, 'esakkiraja', 'male', 8457560, 'Jkitoppdjeyshjwetyd2345', 'esakkirajam.cs.ug20@francisxavier.ac.in', 2, 'CSE', '6380771887', 'odihtldputiopwjkv589djdf', 'Programming and Coding Lab', 0, '2021-11-20 10:08:57'),
(5, 2012026, 'felix', 'male', 548418, 'pass', 'felixrajadurai.m.ug20.cs@francisxavier.ac.in', 2, 'CSE', '9567438939', 'dheicuitjdckheiuhsdhfhjou', 'Programming and Coding Lab', 0, '2021-11-23 14:43:59'),
(66, 4545, 'rajesh_sir', '', 210923, '123', '', 0, '', '', '61b706d677cca', '', 0, '2021-12-13 14:09:50'),
(67, 30482, 'rajesh_sir', 'Male', 561559, 'a', '2ee3@fdfd.com', 2, 'CSE', '97917344', '61b7070678fdd', 'Programming and Coding Lab', 0, '2021-12-13 14:10:38'),
(68, 54564, 'rajesh_sir', 'Male', 947743, '123', 'esakkira@ancisxavier.ac.in', 2, 'CSBS', '637403', '61b70838b99e2', 'Design and Analysis Lab', 0, '2021-12-13 14:15:44'),
(69, 45343, 'rajesh', 'Male', 900743, '123', 'esakkirajug20.cs@francisxavier.ac.in', 2, 'CIVIL', '9791744', '61b708ab99c94', 'Embedded and IoT Lab', 0, '2021-12-13 14:17:39'),
(70, 3434, 'rajesh_sir', '', 170155, '123', '343', 3, 'CSE', '343', '61b70aa4edbdc', 'Design and Analysis Lab', 0, '2021-12-13 14:26:04'),
(71, 454, 'rajesh_sir', 'Male', 883718, '123', '343@mgialc.com', 3, 'CSE', '3434', '61b70ae712ee2', 'Design and Analysis Lab', 0, '2021-12-13 14:27:11'),
(72, 565, 'rajesh_sir', 'Male', 446964, '123', '3453@mgialc.com', 3, 'CSE', '34345', '61b70b0e2199b', 'Design and Analysis Lab', 0, '2021-12-13 14:27:50'),
(73, 43433, 'rajesh_sir', 'Male', 425758, '123', '34533@mgialc.com', 3, 'CSE', '343345', '61b70b2a90a53', 'Design and Analysis Lab', 0, '2021-12-13 14:28:18'),
(74, 67676, 'rajesh_sir', 'Male', 956343, '123', '67623@fdfd.com', 1, 'AI', '9791711', '61b70b614c83b', 'Innovation & Product development Lab', 0, '2021-12-13 14:29:13'),
(75, 676763, 'rajesh_sir', 'Male', 550791, '123', '676323@fdfd.com', 1, 'AI', '97913711', '61b70b73cbab6', 'Innovation & Product development Lab', 0, '2021-12-13 14:29:31'),
(76, 20120234, 'rajesh_sir', 'Male', 900463, '1', 'vmsti11@gmail.com', 1, 'ECE', '63744003', '61b844e0cf9ad', 'Architecture and Design Lab', 0, '2021-12-14 12:46:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comerence`
--
ALTER TABLE `comerence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patent`
--
ALTER TABLE `patent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_info`
--
ALTER TABLE `staff_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_code` (`staff_code`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `lab_name` (`lab_name`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `register_number` (`register_number`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD UNIQUE KEY `mail_id` (`mail_id`) USING HASH,
  ADD UNIQUE KEY `auth_token` (`auth_token`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comerence`
--
ALTER TABLE `comerence`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `competition`
--
ALTER TABLE `competition`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patent`
--
ALTER TABLE `patent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_info`
--
ALTER TABLE `staff_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
