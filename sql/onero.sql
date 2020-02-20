-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 10:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onero`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `star` int(5) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `harga`, `logo`, `star`, `update_at`, `create_at`) VALUES
(1, 'Apple', '2000', 'default.jpg', 5, '2020-02-20 07:27:10', '2020-02-20 07:27:10'),
(2, 'samsung S10', '30000', 'default.jpg', 4, '2020-02-20 07:27:11', '2020-02-20 07:27:10'),
(3, 'Speaker Bluetooth', '18000', 'default.jpg', 2, '2020-02-20 09:08:18', '2020-02-20 09:08:18'),
(4, 'Xiaomi', '100000', 'default.jpg', 2, '2020-02-20 09:08:18', '2020-02-20 09:08:18'),
(5, 'Asus Zenfone 5', '1500000', 'default.jpg', 1, '2020-02-20 09:10:25', '2020-02-20 09:10:25'),
(6, 'Vipo S1 Pro', '4000000', 'default.jpg', 4, '2020-02-20 09:10:25', '2020-02-20 09:10:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
