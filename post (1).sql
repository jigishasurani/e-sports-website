-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 03:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `news` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `news`) VALUES
(8, 'S8UL E-Sport Award', 'We won an award for best content creater organization. in this nomination from all of the world team we be partisipated in the webeat 100theavs and won the award.'),
(13, 'New roster update', 'we wiil be announcening new updated roste for pubg new state.new roster player will be mortal, scout,omega,viper,aman. for the roster our menter wil be sid.'),
(15, 'Welcome S8ul snax', 'we welcome our new member s8ul snax as a content creater.');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` bigint(10) NOT NULL,
  `Shippingaddress` varchar(700) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_offerprice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `name`, `email`, `number`, `Shippingaddress`, `p_name`, `p_offerprice`) VALUES
(11, 'PRIYANSHU THAKAR', 'priyanshu24@gmail.com', 9265009925, '34, SHALIN-2, K-ROAD,', 'pinku', 700),
(12, 'PRIYANSHU THAKAR', 'priyanshu24@gmail.com', 9265009925, '34, SHALIN-2, K-ROAD,', 'pinku2', 400),
(13, 'PRIYANSHU THAKAR777', 'priyanshu24@gmail.com', 9265009925, '34, SHALIN-2, K-ROAD,', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(15) NOT NULL DEFAULT 'Customer',
  `name` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(16) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `username`, `password`, `contact`, `verified`, `deleted`) VALUES
(1, 'Administrator', 'Admin 1', 'root', 'toor', 9898000000, 1, 0),
(2, 'Customer', 'Customer 1', 'user1', 'pass1', 9898000001, 1, 0),
(3, 'Customer', 'Customer 2', 'user2', 'pass2', 9898000002, 1, 0),
(4, 'Customer', 'Customer 3', 'user3', 'pass3', 9898000003, 0, 0),
(5, 'Customer', 'Customer 4', 'user4', 'pass4', 9898000004, 0, 1),
(6, 'Customer', 'jigisha ', 'jigisha123', 'jigisha123', 7980358250, 0, 0),
(7, 'Customer', 'hsjsjd', 'user6', 'pass6', 9408523751, 0, 0),
(8, 'Customer', 'jigisha surani', 'jigisha1', 'jigisha1', 7780358055, 0, 0),
(9, 'Customer', 'jigisha ', 'jigisha12', 'jigisha12', 6547383773, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
