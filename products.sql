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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(128) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `quantity`) VALUES
(1, 'iphone 13', 'DObar iphone', 1199.99, 'iphone13.jpg', 0),
(2, 'iphone 11', 'iphone 11 kao nov, baba koristila za FB', 999.99, 'iphone11.jpg', 22),
(3, 'iphone 15', '100% pravi iphone, samo niko ne zna da postoji', 2499.99, 'nepostojeci.jpg', 1),
(4, 'iphone 14 ProMax', 'Ukraden nov iz Austrije', 2499.99, 'iphone14.jpg', 66),
(5, 'huawei', 'sjajan huawei', 150.00, 'ajdaklddjs', 100),
(6, 'samsung', 'jak', 160.59, 'dddd', 70),
(7, 'jabuka', 'ajdared', 100.76, 'image.png', 0),
(8, 'jabuka', 'ajdared', 100.76, 'image.png', 10),
(9, 'krompir', 'Beli krompir', 99.99, 'test.jpg', 100),
(10, 'jabuka', 'granny smith', 100.34, 'image.png', 10),
(11, 'jaja', 'domaca', 11.00, 'jaja.png', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
