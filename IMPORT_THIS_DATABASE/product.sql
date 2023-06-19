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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_ID` bigint(20) UNSIGNED NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_category` varchar(255) NOT NULL,
  `prod_price` varchar(255) NOT NULL,
  `prod_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_ID`, `prod_name`, `prod_category`, `prod_price`, `prod_picture`, `created_at`, `updated_at`) VALUES
(8, '6pcs Roses Flower Bouqet', 'flower', '700', '1687133262.jpg', '2023-06-19 00:07:42', '2023-06-19 00:07:42'),
(9, '9pcs Roses Flower Bouquet', 'flower', '1000', '1687133284.jpg', '2023-06-19 00:08:04', '2023-06-19 00:08:04'),
(10, '1 Dozen Roses Flower Bouquet', 'flower', '1500', '1687133310.jpg', '2023-06-19 00:08:30', '2023-06-19 00:08:30'),
(11, '2 Dozen Roses Flower Bouquet', 'flower', '3500', '1687133337.jpg', '2023-06-19 00:08:57', '2023-06-19 00:08:57'),
(12, '3pcs Sunflower Bouquet', 'sunflower', '1000', '1687133358.jpg', '2023-06-19 00:09:18', '2023-06-19 00:09:18'),
(13, '6pcs Sunflower Bouquet', 'sunflower', '1500', '1687133376.jpg', '2023-06-19 00:09:36', '2023-06-19 00:09:36'),
(14, 'Chocolate Bouquet Combo 1', 'chocolate', '3000', '1687133394.jpg', '2023-06-19 00:09:54', '2023-06-19 00:09:54'),
(15, 'Ferrero Bouquet', 'chocolate', '2700', '1687133442.jpg', '2023-06-19 00:10:42', '2023-06-19 00:10:42'),
(16, 'Toblerone Bouquet', 'chocolate', '5000', '1687133461.jpg', '2023-06-19 00:11:01', '2023-06-19 00:11:01'),
(17, '8x8 Red Ribbon Cake', 'additionals', '1200', '1687133477.jpg', '2023-06-19 00:11:17', '2023-06-19 00:11:17'),
(18, '1ft Teddy Bear', 'additionals', '200', '1687133492.png', '2023-06-19 00:11:32', '2023-06-19 00:11:32'),
(19, '2ft Teddy Bear', 'additionals', '350', '1687133503.jpg', '2023-06-19 00:11:43', '2023-06-19 00:11:43'),
(20, 'Human Size Teddy Bear', 'additionals', '2500', '1687133526.jpg', '2023-06-19 00:12:06', '2023-06-19 00:12:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
