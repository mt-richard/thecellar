-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 03:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thecellar`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `a_id` int(11) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_username` varchar(50) NOT NULL,
  `a_password` varchar(50) NOT NULL,
  `a_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`a_id`, `a_email`, `a_username`, `a_password`, `a_created`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', '2023-07-13 11:59:00'),
(2, 'mbanzatrichard@gmail.com', 'honofx', '123', '0000-00-00 00:00:00'),
(4, 'honogeek@gmail.com', 'honore', '123', '2023-07-13 13:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_email` varchar(50) NOT NULL,
  `b_phone` varchar(50) NOT NULL,
  `b_time` varchar(50) NOT NULL,
  `b_checkin` varchar(50) NOT NULL,
  `b_guest` varchar(50) NOT NULL,
  `b_space` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`b_id`, `b_name`, `b_email`, `b_phone`, `b_time`, `b_checkin`, `b_guest`, `b_space`) VALUES
(1, 'RIchard MBANZA', 'mbanzatrichard@gmail.com', '0787654212', '12:00', '12/04/2023', '4', 'Large'),
(6, 'honogeek@gmail.com', 'MUGWANEZA', '0792447050', '22:55', '2023-07-20', '5', 'Balcony'),
(7, 'rukundojacksn@gmail.com', 'HABIMANA', '0792447050', '22:00', '2023-07-05', '3', 'Garden');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Food'),
(38, 'MUGWANEZA');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `co_id` int(11) NOT NULL,
  `co_name` varchar(50) NOT NULL,
  `co_email` varchar(50) NOT NULL,
  `co_phone` varchar(50) NOT NULL,
  `co_message` varchar(50) NOT NULL,
  `co_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`co_id`, `co_name`, `co_email`, `co_phone`, `co_message`, `co_created`) VALUES
(1, 'Honore', 'honofx@gmail.com', '078777777', 'The service is very good', '2023-07-13 16:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_category` varchar(50) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_desc` varchar(50) NOT NULL,
  `p_size` varchar(50) NOT NULL,
  `p_price` int(50) NOT NULL,
  `p_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_category`, `p_name`, `p_desc`, `p_size`, `p_price`, `p_img`) VALUES
(13, 'Drinks', 'Soda', 'Orange', 'Large', 1000, '../images/product/agashyaaa-1-150x150.jpg'),
(14, 'Food', 'Pizza', 'Vegitables', 'Large', 3000, '../images/product/Burger-150x150.jpg'),
(15, 'Food', 'Chicken Wings', '4 legs', '4 legs', 4000, '../images/product/fried-chicken-ge0ca49600_640.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `s_id` int(11) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`s_id`, `s_email`, `s_created`) VALUES
(1, 'mbanzatrichard@gmail.com', '2023-07-13 18:17:38'),
(2, 'honofox@gmail.com', '2023-07-13 18:17:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
