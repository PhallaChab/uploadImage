-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2017 at 02:27 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbupload`
--
CREATE DATABASE IF NOT EXISTS `dbupload` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbupload`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

DROP TABLE IF EXISTS `tbl_images`;
CREATE TABLE `tbl_images` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `image_url` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`id`, `pro_id`, `image`, `image_url`) VALUES
(1, 7, 'e12.jpg', 'uploads/e12.jpg'),
(2, 7, 'e15.jpg', 'uploads/e15.jpg'),
(3, 7, 'e16.jpg', 'uploads/e16.jpg'),
(4, 8, 'e7.jpg', 'uploads/e7.jpg'),
(5, 8, 'e11.jpg', 'uploads/e11.jpg'),
(6, 9, 'e5.jpg', 'uploads/e5.jpg'),
(7, 9, 'e6.jpg', 'uploads/e6.jpg'),
(8, 9, 'e7.jpg', 'uploads/e7.jpg'),
(9, 9, 'e8.jpg', 'uploads/e8.jpg'),
(10, 9, 'e9.jpg', 'uploads/e9.jpg'),
(11, 10, 'e16.jpg', 'http://ci-inventory.dev/phpUpload/uploads/e16.jpg'),
(12, 10, 'e20.jpg', 'http://ci-inventory.dev/phpUpload/uploads/e20.jpg'),
(13, 11, 'e11.jpg', 'http://ci-inventory.dev/phpUpload/uploads/e11.jpg'),
(14, 12, 'e20.jpg', 'http://ci-inventory.dev/phpUpload/uploads/e20.jpg'),
(15, 13, 'e6.jpg', 'http://ci-inventory.dev/phpUpload/uploads/e6.jpg'),
(16, 13, 'e10.jpg', 'http://ci-inventory.dev/phpUpload/uploads/e10.jpg'),
(17, 14, 'e5.jpg', 'http://ci-inventory.dev/phpUpload/uploads/e5.jpg'),
(18, 14, 'e9.jpg', 'http://ci-inventory.dev/phpUpload/uploads/e9.jpg'),
(19, 14, 'e13.jpg', 'http://ci-inventory.dev/phpUpload/uploads/e13.jpg'),
(20, 15, 'e6.jpg', 'http://ci-inventory.dev/phpUpload/uploads/e6.jpg'),
(21, 16, 'e25.jpg', 'http://ci-inventory.dev/phpUpload/uploads/e25.jpg'),
(22, 17, 'logo-stallion.png', 'http://ci-inventory.dev/phpUpload/uploads/logo-stallion.png'),
(23, 18, 'e6.jpg', 'http://ci-inventory.dev/phpUpload/uploads/e6.jpg'),
(24, 19, 'e10.jpg', 'http://ci-inventory.dev/phpUpload/uploads/e10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

DROP TABLE IF EXISTS `tbl_products`;
CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `name`, `price`) VALUES
(1, 'apble', '20'),
(2, 'abc', '3'),
(3, 'ww', 'ww'),
(4, 'dd', 'dd'),
(5, 'dd', 'dd'),
(6, 'dd', 'dd'),
(7, 'helloq', '12'),
(8, 'ff', 'fff'),
(9, 'ffdd', 'd'),
(10, 'dd', 'dd'),
(11, 'ffddff', 'ff'),
(12, 'ffdd', 'ff'),
(13, 'dhd', 'hdd'),
(14, 'afa', 'afa'),
(15, 'gs', 'gsg'),
(16, 'lala', '3000'),
(17, 'phalla', '20'),
(18, 'dd', 'dd'),
(19, 'gg', 'f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
