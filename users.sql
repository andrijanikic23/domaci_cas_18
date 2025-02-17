-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2025 at 05:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(17, 'jelisaveta123@gmail.com', 'kkk'),
(18, 'marina@gmail.com', '$2y$10$jHp6vRcv65BtLMFN8W0/DOtqJecMEpiPuhYB.p7zIi/TSkGYeD2wG'),
(19, 'milan@gmail.com', 'Millan58'),
(20, 'tomanikolic1993@gmail.com', '123321'),
(21, 'andrija@gmail.com', '$2y$10$Q5JPLIBhp3CGMLag7C/w0Ods8.6.w7nSxO8XVTYG0JXCWLHYv0XBG'),
(22, 'marinanikicmail@gmail.com', '$2y$10$OAaljJLuySz/uS.cVmpSH.3bimQbXTYXKZs9IIYwFwv618phM6Cvi'),
(23, 'tomaredstar@hotmail.com', '123321'),
(31, 'jandro@hotmail.com', '123321'),
(33, 'tomaredstar@gmail.com', 'assasasa'),
(34, 'aleksandar@gmail.com', '$2y$10$vcAGSxb3e4PynZiuuEWH2.NSk7MK1HY.bfwclX5eMObSnj25QKwEi'),
(35, 'zika@gmail.com', '$2y$10$kx3gLhHFN7rYktCp5FqIhOMd7d.G6H0/O6xMJMxgmWwKIb.3NaZ4i'),
(36, 'andjm282001@gmail.com', '$2y$10$ik2RxyCzUijIhmohpneGx.OU40pgmpx27pcSJ81.9mIZnvAVceZCC'),
(37, 'pavle@gmail.com', 'malipavle\r\n'),
(38, 'ana@gmail.com', ''),
(39, 'bojan@gmail.com', '$2y$10$EYJIdGbGKxko/Ud9UruDVul1Dq/spSn/ZtEIQAmY8NOcfvMK4HTsu'),
(41, 'andrijanikic001@gmail.com', '$2y$10$WIQdO7mNuSTNJzVOAXhLGu3oRjzddravAW26AeFi.E79bATZOPpRG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
