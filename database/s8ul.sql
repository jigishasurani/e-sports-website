-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 06:51 PM
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
(1, 1, 1, 8),
(2, 1, 4, 42);

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
(4, 'mortal', '230424072339moeral.jpg', 'https://www.youtube.com/channel/UCYRY748zxmc_WNrnB6UzJpg', 'Active', '2023-04-24 09:27:53', '2023-04-24 10:53:39'),
(5, 'goldy', '230424072434channels4_profile.jpg', 'https://www.youtube.com/channel/UCYRY748zxmc_WNrnB6UzJpg', 'Deactive', '2023-04-24 10:54:34', '2023-04-24 10:57:52'),
(6, 'mercy', '230424072537mdercy logo.jpg', 'https://www.youtube.com/channel/UCOjgTuou4IgCyupXtFhB0eQ', 'Active', '2023-04-24 10:55:37', '2023-04-24 10:55:37'),
(7, 'sid', '230424072719sid logo.jpg', 'youtube.com/channel/UC5DKK8zzpG7dt8FLEzT_mnw', 'Deactive', '2023-04-24 10:57:19', '2023-04-24 12:09:48');

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
(1, 1, 'Men Round Neck Cotton Blend Solid Half Sleeve T shirt', '23042404324517.jpg', 1200, 800, 'Care Instructions: Machine Wash Fit Type: Regular Fit Fabric: Cotton; Style: Regular Neck Style: Round Neck<br> Pattern: Striped<br> Sleeve Type: Half Sleeve<br>', 'Active', '2023-04-24 08:02:45', '2023-04-24 08:02:45'),
(2, 1, 'Solid Half Sleeve T-Shirt', '23042404353214.webp', 900, 700, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 08:05:32', '2023-04-24 08:05:32'),
(3, 1, 'White s8ul T-shirt', '23042404354510.webp', 800, 500, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 08:05:45', '2023-04-24 09:29:26'),
(4, 1, 'Black s8ul T-shirt', '23042404360212.webp', 800, 400, 'Care Instructions: Machine Wash Fit Type: Regular Fit Fabric: Cotton; Style: Regular Neck Style: Round Neck<br> Pattern: Striped<br> Sleeve Type: Half Sleeve<br>', 'Active', '2023-04-24 08:06:02', '2023-04-24 09:29:45'),
(5, 1, 'Mortal logo T-shirt', '23042404362311.webp', 1200, 1000, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 08:06:23', '2023-04-24 09:30:13'),
(7, 1, 'Mortal-1 T-shirt', '2304240437166.webp', 1200, 1000, 'Care Instructions: Machine Wash Fit Type: Regular Fit Fabric: Cotton; Style: Regular Neck Style: Round Neck<br> Pattern: Striped<br> Sleeve Type: Half Sleeve<br>', 'Active', '2023-04-24 08:07:16', '2023-04-24 09:30:29'),
(8, 1, 'Plain soul t-shirt', '23042404375416.webp', 800, 700, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 08:07:54', '2023-04-24 09:30:58'),
(9, 2, 'Plain black s8ul ', '2304240438413.png', 700, 400, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 08:08:41', '2023-04-24 09:31:30'),
(10, 2, 'Black X-sparx t-shirt', '23042404391417.jpg', 1200, 900, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 08:09:14', '2023-04-24 09:32:09'),
(11, 2, 'Black soul t-shirt', '23042404395115.webp', 800, 700, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 08:09:51', '2023-04-24 09:32:41'),
(12, 2, 'Soul t-shirt', '23042404405315.webp', 700, 420, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 08:10:53', '2023-04-24 09:33:17'),
(13, 2, 'Scout olain black', '2304240441321.webp', 800, 500, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 08:11:32', '2023-04-24 09:33:58'),
(14, 2, 'Plain black mortal logo t-shirt', '2304240442064.webp', 800, 700, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 08:12:06', '2023-04-24 09:34:36'),
(15, 2, 'Scout X S8ul t-shirt', '2304240442372.webp', 1200, 900, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 08:12:37', '2023-04-24 09:35:28'),
(16, 2, 'Plain white premium S8UL t-shirt', '23042404430713.webp', 800, 500, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 08:13:07', '2023-04-24 09:36:29'),
(18, 3, 'Mortal-3', '2304240657597.webp', 690, 550, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 09:37:15', '2023-04-24 10:27:59'),
(19, 3, 'Mortal', '2304240609531.webp', 600, 500, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 09:39:53', '2023-04-24 09:39:53'),
(20, 3, 'Mortal-3', '2304240610322.webp', 800, 700, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 09:40:32', '2023-04-24 09:40:32'),
(21, 3, 'mamba t-shirt', '2304240611133.png', 650, 400, 'Care Instructions: Machine Wash Fit Type: Regular Fit Fabric: Cotton; Style: Regular Neck Style: Round Neck<br> Pattern: Striped<br> Sleeve Type: Half Sleeve<br>', 'Active', '2023-04-24 09:41:13', '2023-04-24 09:41:13'),
(22, 3, 'Goldy T-shirt', '2304240611544.webp', 1200, 850, 'Care Instructions: Machine Wash Fit Type: Regular Fit Fabric: Cotton; Style: Regular Neck Style: Round Neck<br> Pattern: Striped<br> Sleeve Type: Half Sleeve<br>', 'Active', '2023-04-24 09:41:54', '2023-04-24 09:41:54'),
(23, 3, 'thug t-shirt', '2304240612235.webp', 900, 700, 'Care Instructions: Machine Wash Fit Type: Regular Fit Fabric: Cotton; Style: Regular Neck Style: Round Neck<br> Pattern: Striped<br> Sleeve Type: Half Sleeve<br>', 'Active', '2023-04-24 09:42:23', '2023-04-24 09:42:23'),
(24, 3, 'sid t-shirt', '2304240613186.webp', 900, 820, 'Care Instructions: Machine Wash Fit Type: Regular Fit Fabric: Cotton; Style: Regular Neck Style: Round Neck<br> Pattern: Striped<br> Sleeve Type: Half Sleeve<br>', 'Active', '2023-04-24 09:43:18', '2023-04-24 09:43:18'),
(25, 3, 'Pappy t-shirt', '23042406141218.webp', 650, 570, 'Care Instructions: Machine Wash Fit Type: Regular Fit Fabric: Cotton; Style: Regular Neck Style: Round Neck<br> Pattern: Striped<br> Sleeve Type: Half Sleeve<br>', 'Active', '2023-04-24 09:44:12', '2023-04-24 09:44:12'),
(26, 3, 'binks t-shirt', '2304240615028.webp', 1200, 1000, 'Care Instructions: Machine Wash Fit Type: Regular Fit Fabric: Cotton; Style: Regular Neck Style: Round Neck<br> Pattern: Striped<br> Sleeve Type: Half Sleeve<br>', 'Active', '2023-04-24 09:45:02', '2023-04-24 10:28:54'),
(27, 3, 'Mortal-9', '23042406162117.jpg', 1150, 890, 'Care Instructions: Machine Wash Fit Type: Regular Fit Fabric: Cotton; Style: Regular Neck Style: Round Neck<br> Pattern: Striped<br> Sleeve Type: Half Sleeve<br>', 'Active', '2023-04-24 09:46:21', '2023-04-24 09:46:21'),
(28, 3, 'Mafia t-shirt', '23042406172216.webp', 800, 690, 'Care Instructions: Machine Wash Fit Type: Regular Fit Fabric: Cotton; Style: Regular Neck Style: Round Neck<br> Pattern: Striped<br> Sleeve Type: Half Sleeve<br>', 'Active', '2023-04-24 09:47:22', '2023-04-24 09:47:22'),
(29, 3, 'thug t-shirt', '23042406175615.webp', 700, 580, 'Care Instructions: Machine Wash Fit Type: Regular Fit Fabric: Cotton; Style: Regular Neck Style: Round Neck<br> Pattern: Striped<br> Sleeve Type: Half Sleeve<br>', 'Active', '2023-04-24 09:47:56', '2023-04-24 09:47:56'),
(30, 3, 'aman t-shirt', '23042406194414.webp', 900, 700, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 09:49:44', '2023-04-24 09:49:44'),
(31, 3, 'jakku v t-shirt', '2304240620429.jpg', 600, 560, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 09:50:42', '2023-04-24 09:50:42'),
(32, 3, 'k18 t-shirt', '23042406213611.webp', 900, 880, 'Care Instructions: Machine Wash Fit Type: Slim Fit TEMPERATURE CONTROL QUICK DRY FABRIC MOISTURE MANAGEMENT ANTIMICROBIAL ODOUR FREE', 'Active', '2023-04-24 09:51:36', '2023-04-24 09:51:36'),
(33, 4, 'Immortal keyboard 16', '230424070238k4.png', 1600, 1550, 'Gaming keyboard with rgb lights', 'Active', '2023-04-24 10:32:38', '2023-04-24 10:32:38'),
(34, 4, 'Keyboard 25', '230424070352k2.png', 4500, 3900, 'Gaming keyboard with mechanical switches', 'Active', '2023-04-24 10:33:52', '2023-04-24 10:33:52'),
(35, 4, 'Keyboard 10', '230424070456k6.png', 5000, 4800, 'Gaming keyboard with rgb lights red switches', 'Active', '2023-04-24 10:34:56', '2023-04-24 10:34:56'),
(36, 4, 'Keyboard 9', '230424070537k5.png', 4600, 4500, 'Gaming keyboard with mechanical switches red lights', 'Active', '2023-04-24 10:35:37', '2023-04-24 10:35:37'),
(37, 4, 'S8UL Bottle ', '230424070725b1.png', 1500, 1450, 'Black cool water bottle ', 'Active', '2023-04-24 10:37:25', '2023-04-24 10:37:25'),
(38, 4, 'Bottle red', '230424070856b2.png', 1250, 1200, 'S8UL stainless steel water bottle', 'Active', '2023-04-24 10:38:56', '2023-04-24 10:38:56'),
(39, 4, 'S8UL Gaming Mouse', '230424071022m2.png', 1300, 1150, 'Gaming Mouse with rgb lights', 'Active', '2023-04-24 10:40:22', '2023-04-24 10:40:22'),
(40, 4, 'S8UL mouse', '230424071133k3.png', 1200, 1100, 'Gaming Mouse', 'Active', '2023-04-24 10:41:33', '2023-04-24 10:41:33'),
(41, 4, 'Mouse Pad ', '230424071258mp2.png', 800, 750, 'Smooth and waterproof high quality material', 'Active', '2023-04-24 10:42:58', '2023-04-24 10:42:58'),
(42, 4, 'Mouse pad G', '230424071438mp3.png', 1200, 900, 'Mousepad with smoothness and sweatproof ', 'Active', '2023-04-24 10:44:38', '2023-04-24 10:44:38'),
(43, 4, 'S8UL Mic ', '230424071648m1.png', 6000, 5700, 'Noice cancellation best quality mic', 'Active', '2023-04-24 10:46:48', '2023-04-24 10:46:48'),
(44, 4, 'S8UL Gaming Cabinet', '230424071849Untitled-3.png', 7500, 6900, 'Premium gaming cabinet with side glass and rgb light', 'Active', '2023-04-24 10:48:49', '2023-04-24 10:48:49');

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
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_tb`
--
ALTER TABLE `category_tb`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `live_tb`
--
ALTER TABLE `live_tb`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_tb`
--
ALTER TABLE `product_tb`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
