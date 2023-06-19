-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 03:28 PM
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
-- Table structure for table `order_queue`
--

CREATE TABLE `order_queue` (
  `order_queue_ID` bigint(20) UNSIGNED NOT NULL,
  `user_ID` bigint(20) UNSIGNED NOT NULL,
  `order_ID` bigint(20) UNSIGNED NOT NULL,
  `prod_ID` bigint(20) UNSIGNED NOT NULL,
  `prod_quantity` int(11) NOT NULL,
  `order_delivered` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_queue`
--

INSERT INTO `order_queue` (`order_queue_ID`, `user_ID`, `order_ID`, `prod_ID`, `prod_quantity`, `order_delivered`, `created_at`, `updated_at`) VALUES
(12, 1, 10, 10, 3, 0, '2023-06-19 00:19:21', '2023-06-19 00:19:21'),
(13, 1, 11, 11, 32, 0, '2023-06-19 00:19:41', '2023-06-19 00:19:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_queue`
--
ALTER TABLE `order_queue`
  ADD PRIMARY KEY (`order_queue_ID`),
  ADD KEY `order_queue_user_id_foreign` (`user_ID`),
  ADD KEY `order_queue_order_id_foreign` (`order_ID`),
  ADD KEY `order_queue_prod_id_foreign` (`prod_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_queue`
--
ALTER TABLE `order_queue`
  MODIFY `order_queue_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_queue`
--
ALTER TABLE `order_queue`
  ADD CONSTRAINT `order_queue_order_id_foreign` FOREIGN KEY (`order_ID`) REFERENCES `user_order` (`order_ID`),
  ADD CONSTRAINT `order_queue_prod_id_foreign` FOREIGN KEY (`prod_ID`) REFERENCES `product` (`prod_ID`),
  ADD CONSTRAINT `order_queue_user_id_foreign` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
