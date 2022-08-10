-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 10, 2022 at 07:53 PM
-- Server version: 10.5.13-MariaDB-0ubuntu0.21.04.1
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surya_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `fourth`
--

CREATE TABLE `fourth` (
  `id` int(50) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `college_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fourth`
--

INSERT INTO `fourth` (`id`, `college_name`, `college_date`) VALUES
(1, 'klu', '2022-08-04'),
(2, 'PSG', '2022-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `second`
--

CREATE TABLE `second` (
  `id` int(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `register_number` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `mobile_number` bigint(20) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `sport` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `second`
--

INSERT INTO `second` (`id`, `student_name`, `register_number`, `college`, `department`, `dob`, `gender`, `blood_group`, `mobile_number`, `gmail`, `sport`, `address`) VALUES
(47, 'balu', '2138664', '2', '2', '2022-08-11', 'female', 'B+', 12324215, 'divvv', 'cricket', ''),
(48, 'karthik', '1234568', '2', '1', '2022-08-14', 'female', 'c#', 9807890765, 'surya', 'cricket', '');

-- --------------------------------------------------------

--
-- Table structure for table `third`
--

CREATE TABLE `third` (
  `id` int(50) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `department_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `third`
--

INSERT INTO `third` (`id`, `department_name`, `department_date`) VALUES
(1, 'arts', '2022-08-05'),
(2, 'Engineering', '2022-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `student_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updateby` varchar(50) NOT NULL,
  `updatedon` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `student_id`, `username`, `password`, `role_id`, `firstname`, `email`, `mobile`, `address`, `createdby`, `createdon`, `updateby`, `updatedon`, `status`) VALUES
(1, 123, 'surya', '123456', 2, 'daf', 'asdf', 23552431, 'afsdcds', 'dsfad', '2022-08-10 07:20:15', 'dsvf', '0000-00-00 00:00:00', 1),
(2, 12133, 'sarves', '12345', 2, 'balaji', '2314', 9585724641, 'rgtsgfdsf', 'sagfa', '2022-08-10 05:12:56', 'asgafg', '0000-00-00 00:00:00', 3),
(11, 0, 'hiiii', '12345', 2, 'siva', 'surya', 12324215, 'gdhth', '2', '2022-08-10 09:42:14', '', '0000-00-00 00:00:00', 0),
(12, 0, 'prakash', '12345', 2, 'trainer', 'surya', 9807890765, 'edfreagt', '2', '2022-08-10 09:43:12', '', '0000-00-00 00:00:00', 0),
(13, 16, 'hr', '12345', 2, 'balu', 'surya', 12324215, 'rehshgdbcdcb', '2', '2022-08-10 09:49:52', '', '0000-00-00 00:00:00', 0),
(14, 17, 'hgdfh', '12345', 2, 'asuran', 'surya', 12324215, 'ghsdghffdh', '2', '2022-08-10 09:50:44', '', '0000-00-00 00:00:00', 0),
(15, 2, '', '', 2, 'fgsd', 'surya', 9807890765, '', '2', '2022-08-10 12:06:15', '', '0000-00-00 00:00:00', 0),
(17, 46, 'darko', '12345', 2, 'dark', 'divvv', 9807890765, 'EADSF', '2', '2022-08-10 13:07:50', '', '0000-00-00 00:00:00', 0),
(18, 47, 'prakash', '1223445', 2, 'balu', 'divvv', 12324215, '', '2', '2022-08-10 14:05:04', '', '0000-00-00 00:00:00', 0),
(19, 2, 'hii', '1223445', 2, 'balu', 'divvv', 12324215, '', '2', '2022-08-10 13:17:14', '', '0000-00-00 00:00:00', 0),
(20, 2, 'dude', '34567', 2, 'balu', 'divvv', 12324215, '', '2', '2022-08-10 13:17:49', '', '0000-00-00 00:00:00', 0),
(21, 48, 'sarves', '34567', 2, 'karthik', 'surya', 9807890765, 'adsfads', '2', '2022-08-10 13:19:52', '', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fourth`
--
ALTER TABLE `fourth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `second`
--
ALTER TABLE `second`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `third`
--
ALTER TABLE `third`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fourth`
--
ALTER TABLE `fourth`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `second`
--
ALTER TABLE `second`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `third`
--
ALTER TABLE `third`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
