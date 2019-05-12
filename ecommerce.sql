-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2019 at 06:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `category` enum('Mobile','Clothes','Watches') DEFAULT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`) VALUES
(1, 'Asus Zenfone Max Pro M2', 'Mobile', '12999'),
(2, 'Samsung Galaxy A9', 'Mobile', '12999'),
(3, 'Google Pixel 3 (White)', 'Mobile', '71000'),
(4, 'Google Pixel 3 XL (Black)', 'Mobile', '92000'),
(5, 'Full Sleeve Printed Men Sweats', 'Clothes', '543'),
(6, 'Full Sleeve Solid Mens Sweats', 'Clothes', '699'),
(7, 'Sleeveless Self Design Mens S', 'Clothes', '799'),
(8, 'Full Sleeve Solid Mens Shirt)', 'Clothes', '599'),
(9, 'Tees Analog Watch - For Men', 'Watches', '449'),
(10, 'Bare Analog Watch - For Men', 'Watches', '449'),
(11, 'Analog Digital Black Watch for', 'Watches', '649'),
(12, 'FLYNN Analog Watch - For Men', 'Watches', '5349');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`) VALUES
(1, 'Rushikesh', NULL, '753159', 'jaderushi@', ''),
(2, 'Priyanka', NULL, '789456', 'priyanka@g', ''),
(3, 'Priyanka', NULL, '123456', 'jaderushi@', ''),
(4, 'Priyanka', NULL, 'priyu@gmail.com', '8788269494', 'Priyanka@1'),
(5, 'Darth', NULL, 'pravinjade@gmail.com', '7028155511', '123456'),
(6, 'Rushikesh', NULL, '789456', 'prachi@xyz', ''),
(7, 'firstname', NULL, 'email', 'phone', 'password'),
(8, 'Akshay', NULL, 'akshuu', 'apj@gmail.', ''),
(9, 'Neeta', NULL, 'neeta@gmail.com', '7028155511', 'neetaa'),
(10, 'Dart Vader', NULL, 'dart@gmail.com', '7894561234', 'vaderr'),
(12, 'Sweety ', NULL, 'sweety@gmail.com', '8788269494', 'sweety');

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

CREATE TABLE `users_products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`id`, `user_id`, `product_id`, `status`) VALUES
(2, 1, 1, ''),
(3, 2, 2, ''),
(9, 4, 1, 'Added to cart'),
(10, 4, 2, 'Added to cart'),
(11, 10, 2, 'Added to cart'),
(15, 12, 12, 'Confirmed'),
(18, 12, 4, 'Confirmed'),
(19, 12, 10, 'Confirmed'),
(21, 12, 6, 'Confirmed'),
(22, 12, 5, 'Confirmed'),
(26, 12, 9, 'Confirmed'),
(27, 9, 6, 'Confirmed'),
(28, 9, 10, 'Confirmed'),
(29, 9, 4, 'Confirmed'),
(30, 9, 2, 'Confirmed'),
(31, 12, 1, 'Added to cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_products`
--
ALTER TABLE `users_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users_products`
--
ALTER TABLE `users_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
