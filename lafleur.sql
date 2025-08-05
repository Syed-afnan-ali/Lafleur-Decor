-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2025 at 08:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lafleur`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` decimal(10,2) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT 1,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_name`, `product_price`, `product_image`, `quantity`, `added_at`) VALUES
(2, 17, 'Beauty Flower', 30.62, './img/card2.jpg', 1, '2025-05-27 20:18:26'),
(4, 17, 'Heavenly Red Rose', 15.62, './img/card4.jpg', 1, '2025-05-27 20:48:52'),
(7, 17, 'Mummy Flower', 22.62, './img/card1.jpg', 6, '2025-05-27 21:09:51'),
(9, 17, 'Birthday Flower', 22.62, './img/card5.jpg', 1, '2025-05-27 21:58:03'),
(10, 17, 'Birthday Flower 2', 22.62, './img/card6.jpg', 1, '2025-05-27 22:00:18'),
(11, 18, 'Mummy Flower', 22.62, './img/card1.jpg', 2, '2025-05-28 18:41:48'),
(12, 18, 'Beauty Flower', 30.62, './img/card2.jpg', 2, '2025-05-28 18:56:28'),
(13, 18, 'New Rose', 25.62, './img/card3.jpg', 1, '2025-05-28 18:56:34'),
(21, 20, 'Mummy Flower', 22.62, './img/card1.jpg', 3, '2025-05-29 05:00:23'),
(22, 21, 'New Rose', 25.62, './img/card3.jpg', 2, '2025-05-29 05:31:50'),
(25, 24, 'Mummy Flower', 22.62, './img/card1.jpg', 1, '2025-05-30 16:41:35'),
(26, 24, 'Beauty Flower', 30.62, './img/card2.jpg', 1, '2025-05-30 16:50:09');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text DEFAULT NULL,
  `submitted_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flowers`
--

CREATE TABLE `flowers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flowers`
--

INSERT INTO `flowers` (`id`, `name`, `image`, `price`, `description`) VALUES
(1, 'Mummy Flowers', './img/f1.jpg', 22.62, 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will'),
(2, 'Heavenly Red Rose', './img/f2.jpg', 22.62, 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will'),
(3, 'Luxury Red Rose', './img/f3.jpg', 20.00, 'Premium red roses for luxury gifts.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `address`, `phone`, `order_date`) VALUES
(1, 20, 'karachi', '03040810195', '2025-05-29 03:19:37'),
(2, 23, 'KARACHI', '03040810195', '2025-05-29 05:50:07'),
(3, 23, 'KARACHI', '03040810195', '2025-05-29 05:53:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_auth`
--

INSERT INTO `user_auth` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(20, 'afnan', 'somanshah55@gmail.com', '$2y$10$Kr5WfyLFYddi98ygMNGXlOjUTSvYGU3BE4za6gNJYwQ/4UwEqyRia', '2025-05-28 19:42:12'),
(21, 'Hannad', 'hannadkzh2gn-mail.com', '$2y$10$nK558hak2trZ8qeLDpaakOEP3aIuHl.29oO5U.5a0iUsEswFgoHT2', '2025-05-29 05:29:43'),
(23, 'admin', 'tihaf52210@bmixr.com', '$2y$10$FcrhnhxZtd22eql7Wdro5O3RkC7PZifFdF72p6xQlowHnbs.euBIG', '2025-05-29 05:47:40'),
(24, 'syed afnan', 'has55du11@gmail.com', '$2y$10$BKCiR6kOMdaRjJspN7HS6ufHfLKVO6zWEvAVlC3V15TVruQQ/0uHK', '2025-05-30 14:45:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `flowers`
--
ALTER TABLE `flowers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
