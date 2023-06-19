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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` bigint(20) UNSIGNED NOT NULL,
  `user_level` varchar(255) NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_MI` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_phonenumber` varchar(255) NOT NULL,
  `user_birthdate` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `user_level`, `email`, `password`, `user_fname`, `user_lname`, `user_MI`, `user_gender`, `user_phonenumber`, `user_birthdate`, `created_at`, `updated_at`) VALUES
(1, '0', 'admin@gmail.com', '$2y$10$1Y3ZohBjw/4rYNoFX.dp3e/XMu9lleGtkIIKMys6gZ/WorCuTqv16', 'Admin', 'Admin', 'A', 'Male', '+639455114825', '2000-01-22', '2023-05-24 06:03:30', '2023-05-24 06:03:30'),
(2, '1', 'jl.streak7@gmail.com', '$2y$10$4bUB25mTazmHkpUPA2Sp3Os7GZr3rP1IftJ8SlwRZgLYRJn.8WPRW', 'Jullian', 'Mañas', 'L', 'Male', '+639455114825', '2001-06-22', '2023-05-24 06:16:45', '2023-05-24 06:16:45'),
(3, '1', 'johncarlboyero@gmail.com', '$2y$10$vfsu88O0APNujgOEpTF46OKBWofiTxZIxwVw24nAazPQmN31Z9KG6', 'John', 'Carl', 'A', 'Male', '+639455114825', '2023-05-25', '2023-05-25 01:11:01', '2023-05-25 01:11:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
