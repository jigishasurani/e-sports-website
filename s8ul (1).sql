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
-- Database: `s8ul`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `c_id`, `p_id`) VALUES
(1, 2, 1, 6),
(2, 2, 1, 1),
(3, 2, 4, 5),
(4, 2, 3, 3),
(5, 1, 1, 8),
(6, 1, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `category_tb`
--

CREATE TABLE `category_tb` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_img` varchar(100) NOT NULL,
  `c_type` enum('Feature product','New arivels','shop product','accessories','recommended') NOT NULL,
  `c_status` enum('Active','Deactive') NOT NULL,
  `c_cdate` datetime NOT NULL,
  `c_udate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category_tb`
--

INSERT INTO `category_tb` (`c_id`, `c_name`, `c_img`, `c_type`, `c_status`, `c_cdate`, `c_udate`) VALUES
(1, 'fproduct', '2304210821504.webp', 'Feature product', 'Active', '2023-04-21 11:51:50', '2023-04-21 23:53:02'),
(2, 'nproduct', '23042108220013.webp', 'New arivels', 'Active', '2023-04-21 11:52:00', '2023-04-21 23:47:37'),
(3, 'sproduct', '23042108221010.webp', 'shop product', 'Active', '2023-04-21 11:52:10', '2023-04-21 23:46:18'),
(4, 'accessories', '230421202248images.jpeg', 'accessories', 'Active', '2023-04-21 23:52:48', '2023-04-21 23:52:48'),
(5, 'recommended', '230422081723wallpaper.jpg', 'recommended', 'Active', '2023-04-22 11:47:23', '2023-04-22 11:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `live_tb`
--

CREATE TABLE `live_tb` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_img` varchar(200) NOT NULL,
  `c_link` varchar(200) NOT NULL,
  `c_status` enum('Active','Deactive') NOT NULL,
  `c_cdate` datetime NOT NULL,
  `c_udate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `live_tb`
--

INSERT INTO `live_tb` (`c_id`, `c_name`, `c_img`, `c_link`, `c_status`, `c_cdate`, `c_udate`) VALUES
(2, 'goldy', '230424020519Snapchat-139268123.jpg', 'https://www.youtube.com/channel/UCYRY748zxmc_WNrnB6UzJpg', 'Active', '2023-04-24 05:35:19', '2023-04-24 05:35:19'),
(3, 'mortal', '230424024302Snapchat-34328835.jpg', 'https://www.youtube.com/channel/UCYRY748zxmc_WNrnB6UzJpg', 'Deactive', '2023-04-24 05:41:59', '2023-04-24 06:13:55');

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
(1, 'priyanshu', '12345', '', '2023-04-24 02:28:15'),
(2, 'jigisha', '12345', '', '2023-04-24 02:28:25');

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
  `p_desc` varchar(500) NOT NULL,
  `p_status` enum('Active','Deactive') NOT NULL,
  `p_cdate` datetime NOT NULL,
  `p_udate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_tb`
--

INSERT INTO `product_tb` (`p_id`, `c_id`, `p_name`, `p_img`, `p_price`, `p_offerprice`, `p_desc`, `p_status`, `p_cdate`, `p_udate`) VALUES
(1, 1, 'Mortal-3', '230424022434Snapchat-31971125.jpg', 700, 500, 'this is mortal primam t shirt  an dthis this is selling in less price ', 'Active', '2023-04-21 11:52:32', '2023-04-24 05:54:34'),
(2, 2, 'Mortal', '2304210822455.webp', 800, 700, '', 'Active', '2023-04-21 11:52:45', '2023-04-21 11:52:45'),
(3, 3, 'Mortal-4', '23042108230512.webp', 800, 420, '', 'Active', '2023-04-21 11:53:05', '2023-04-21 11:53:05'),
(4, 1, 'Mortal-9', '23042108291710.webp', 800, 700, '', 'Active', '2023-04-21 11:59:17', '2023-04-21 11:59:17'),
(5, 4, 'kyeboard', '230421202537k5.png', 1200, 1000, '', 'Active', '2023-04-21 23:55:37', '2023-04-21 23:55:37'),
(6, 1, 'Mortal-3', '2304212059302.webp', 700, 400, '', 'Active', '2023-04-22 00:29:30', '2023-04-22 00:29:30'),
(7, 1, 'Mortal-4', '23042120595112.webp', 700, 400, '', 'Active', '2023-04-22 00:29:51', '2023-04-22 00:29:51'),
(8, 1, 'Mortal-9', '2304212100066.webp', 1200, 500, '', 'Active', '2023-04-22 00:30:06', '2023-04-22 00:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `u_contact` varchar(20) NOT NULL,
  `u_email` varchar(36) NOT NULL,
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
(1, 'priyanshu', '7600195223', 'priyanshu24@gmail.com', '230423230008Snapchat-420010368.jpg', 'Pinku24@', 'Active', '2023-04-24 02:30:08', '2023-04-24 02:30:08'),
(2, 'jigisha', '9408523751', 'jigisha21@gmail.com', '230423230058Snapchat-137764918.jpg', 'Jigisha21@', 'Active', '2023-04-24 02:30:58', '2023-04-24 02:30:58');

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
-- Indexes for table `live_tb`
--
ALTER TABLE `live_tb`
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
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_tb`
--
ALTER TABLE `category_tb`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `live_tb`
--
ALTER TABLE `live_tb`
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
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
