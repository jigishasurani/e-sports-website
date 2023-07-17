-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 04:47 PM
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
-- Database: `s8ul`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `c_id`, `user_id`, `p_id`) VALUES
(2, 1, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `category_tb`
--

CREATE TABLE `category_tb` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_img` varchar(100) NOT NULL,
  `c_type` enum('Wedding Dresses','Wedding Trends','Cultural Extravagance') NOT NULL,
  `c_status` enum('Active','Deactive') NOT NULL,
  `c_cdate` datetime NOT NULL,
  `c_udate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category_tb`
--

INSERT INTO `category_tb` (`c_id`, `c_name`, `c_img`, `c_type`, `c_status`, `c_cdate`, `c_udate`) VALUES
(1, 'fproduct', '2304210821504.webp', '', 'Active', '2023-04-21 11:51:50', '2023-04-21 11:51:50'),
(2, 'nproduct', '23042108220013.webp', '', 'Active', '2023-04-21 11:52:00', '2023-04-21 11:52:00'),
(3, 'sproduct', '23042108221010.webp', '', 'Active', '2023-04-21 11:52:10', '2023-04-21 11:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `last_seen` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`id`, `username`, `password`, `image`, `last_seen`) VALUES
(1, 'yagni', '12345', 'icon5.png', '2021-09-17 10:18:36'),
(2, 'manan', '12345', 'ms.jpg', '2021-09-16 16:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

CREATE TABLE `product_tb` (
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_offerprice` int(11) NOT NULL,
  `p_status` enum('Active','Deactive') NOT NULL,
  `p_cdate` datetime NOT NULL,
  `p_udate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_tb`
--

INSERT INTO `product_tb` (`p_id`, `c_id`, `p_name`, `p_img`, `p_price`, `p_offerprice`, `p_status`, `p_cdate`, `p_udate`) VALUES
(1, 1, 'Mortal-3', '2304210822324.webp', 700, 500, 'Deactive', '2023-04-21 11:52:32', '2023-04-21 14:05:46'),
(2, 2, 'Mortal', '2304210822455.webp', 800, 700, 'Active', '2023-04-21 11:52:45', '2023-04-21 11:52:45'),
(3, 3, 'Mortal-4', '23042108230512.webp', 800, 420, 'Active', '2023-04-21 11:53:05', '2023-04-21 11:53:05'),
(4, 1, 'Mortal-9', '23042108291710.webp', 800, 700, 'Active', '2023-04-21 11:59:17', '2023-04-21 11:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `u_contact` varchar(20) NOT NULL,
  `u_email` varchar(15) NOT NULL,
  `u_img` varchar(100) NOT NULL,
  `u_password` varchar(20) NOT NULL,
  `u_status` enum('Active','Deactive') NOT NULL,
  `u_cdate` datetime NOT NULL,
  `u_udate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`u_id`, `u_name`, `u_contact`, `u_email`, `u_img`, `u_password`, `u_status`, `u_cdate`, `u_udate`) VALUES
(1, 'yagni', '9727474066', 'yagni@gmail.com', '210919064303me.jpeg', '972747', 'Active', '2021-09-19 12:13:03', '2021-09-19 12:13:03'),
(2, 'purv', '9999999999', 'purv@gmail.com', '210921134234wedicon.png', 'Purv@711', 'Active', '2021-09-21 19:12:34', '2021-09-21 19:12:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category_tb`
--
ALTER TABLE `category_tb`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tb`
--
ALTER TABLE `product_tb`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_tb`
--
ALTER TABLE `category_tb`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_tb`
--
ALTER TABLE `product_tb`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
