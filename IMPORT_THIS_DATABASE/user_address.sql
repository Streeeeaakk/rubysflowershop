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
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `address_ID` bigint(20) UNSIGNED NOT NULL,
  `user_ID` bigint(20) UNSIGNED NOT NULL,
  `address_street` varchar(255) NOT NULL,
  `address_barangay` varchar(255) NOT NULL,
  `address_city` varchar(255) NOT NULL,
  `address_province` varchar(255) NOT NULL,
  `address_zipcode` int(11) NOT NULL,
  `address_country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`address_ID`, `user_ID`, `address_street`, `address_barangay`, `address_city`, `address_province`, `address_zipcode`, `address_country`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ruiz Subdivision', 'Barangay Talubangi', 'Kabankalan City', 'Negros Occidental', 6111, 'Philippines', '2023-05-24 06:06:05', '2023-05-24 06:06:05'),
(2, 2, 'Aspenn Residences', 'Barangay Villamonte', 'Bacolod City', 'Negros Occidental', 6100, 'Philippines', '2023-05-24 06:30:30', '2023-05-24 06:30:30'),
(3, 3, 'Aspenn Residences', 'Barangay Villamonte', 'Bacolod City', 'Negros Occidental', 6100, 'Philippines', '2023-05-25 01:13:57', '2023-05-25 01:13:57'),
(4, 3, 'Ruiz Subdivision', 'Barangay Talubangi', 'Kabankalan City', 'Negros Occidental', 6111, 'Philippines', '2023-05-25 01:14:13', '2023-05-25 01:14:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`address_ID`),
  ADD KEY `user_address_user_id_foreign` (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `address_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_address`
--
ALTER TABLE `user_address`
  ADD CONSTRAINT `user_address_user_id_foreign` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
