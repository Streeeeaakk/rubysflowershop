-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 03:29 PM
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
-- Database: `db_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `order_ID` bigint(20) UNSIGNED NOT NULL,
  `user_ID` bigint(20) UNSIGNED NOT NULL,
  `address_ID` bigint(20) UNSIGNED NOT NULL,
  `order_payment_method` varchar(255) NOT NULL,
  `tmp_cart_rand` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`order_ID`, `user_ID`, `address_ID`, `order_payment_method`, `tmp_cart_rand`, `created_at`, `updated_at`) VALUES
(10, 1, 1, 'gcash', 1636826142, '2023-06-19 00:19:21', '2023-06-19 00:19:21'),
(11, 1, 1, 'paypal', 1765338093, '2023-06-19 00:19:41', '2023-06-19 00:19:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `user_order_user_id_foreign` (`user_ID`),
  ADD KEY `user_order_address_id_foreign` (`address_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_order`
--
ALTER TABLE `user_order`
  MODIFY `order_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_order`
--
ALTER TABLE `user_order`
  ADD CONSTRAINT `user_order_address_id_foreign` FOREIGN KEY (`address_ID`) REFERENCES `user_address` (`address_ID`),
  ADD CONSTRAINT `user_order_user_id_foreign` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
