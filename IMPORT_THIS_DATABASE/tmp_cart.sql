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
-- Table structure for table `tmp_cart`
--

CREATE TABLE `tmp_cart` (
  `tmp_cart_ID` bigint(20) UNSIGNED NOT NULL,
  `cart_ID` int(11) NOT NULL,
  `prod_ID` bigint(20) UNSIGNED NOT NULL,
  `user_ID` bigint(20) UNSIGNED NOT NULL,
  `prod_quantity` int(11) NOT NULL,
  `tmp_cart_rand` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tmp_cart`
--

INSERT INTO `tmp_cart` (`tmp_cart_ID`, `cart_ID`, `prod_ID`, `user_ID`, `prod_quantity`, `tmp_cart_rand`, `created_at`, `updated_at`) VALUES
(12, 19, 10, 1, 3, 1636826142, NULL, NULL),
(13, 20, 11, 1, 32, 1765338093, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tmp_cart`
--
ALTER TABLE `tmp_cart`
  ADD PRIMARY KEY (`tmp_cart_ID`),
  ADD KEY `tmp_cart_user_id_foreign` (`user_ID`),
  ADD KEY `tmp_cart_prod_id_foreign` (`prod_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tmp_cart`
--
ALTER TABLE `tmp_cart`
  MODIFY `tmp_cart_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tmp_cart`
--
ALTER TABLE `tmp_cart`
  ADD CONSTRAINT `tmp_cart_prod_id_foreign` FOREIGN KEY (`prod_ID`) REFERENCES `product` (`prod_ID`),
  ADD CONSTRAINT `tmp_cart_user_id_foreign` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
