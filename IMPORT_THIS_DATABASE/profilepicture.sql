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
-- Table structure for table `profilepicture`
--

CREATE TABLE `profilepicture` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_ID` bigint(20) UNSIGNED NOT NULL,
  `profile_picture_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profilepicture`
--

INSERT INTO `profilepicture` (`id`, `user_ID`, `profile_picture_path`, `created_at`, `updated_at`) VALUES
(1, 3, '1684977226.jpg', '2023-05-25 01:13:46', '2023-05-25 01:13:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profilepicture`
--
ALTER TABLE `profilepicture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profilepicture_user_id_foreign` (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profilepicture`
--
ALTER TABLE `profilepicture`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profilepicture`
--
ALTER TABLE `profilepicture`
  ADD CONSTRAINT `profilepicture_user_id_foreign` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
