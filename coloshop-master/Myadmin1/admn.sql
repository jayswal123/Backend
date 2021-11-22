-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2021 at 02:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admn`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(11) NOT NULL,
  `pname` int(11) NOT NULL,
  `pprice` int(11) NOT NULL,
  `pdesc` int(11) NOT NULL,
  `pimage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` varchar(50) NOT NULL,
  `pdesc` varchar(200) NOT NULL,
  `pimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pname`, `pprice`, `pdesc`, `pimage`) VALUES
(5, 'Gym Bag', '200$', 'leather (grey color)', 'uploadimage/product_4.png'),
(6, 'Nike Shoes', '500$', 'cream color , canvas', 'uploadimage/product_5.png');

-- --------------------------------------------------------

--
-- Table structure for table `man`
--

CREATE TABLE `man` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` varchar(30) NOT NULL,
  `pdesc` varchar(100) NOT NULL,
  `pimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` varchar(30) NOT NULL,
  `pdesc` varchar(100) NOT NULL,
  `pimage` varchar(200) NOT NULL,
  `pcategory` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `pprice`, `pdesc`, `pimage`, `pcategory`) VALUES
(1, 'men\'s hoodie ', '100 $', ' violet color (cotton)', 'uploadimage/product_1.png', 'men'),
(2, '\"Hand Bag\"(Grocessary) ', '500$', 'grey color', 'uploadimage/product_2.png', 'accessories'),
(3, 'Sweater (yellow colored)', '100 $', 'cotton', 'uploadimage/product_3.png', 'women'),
(4, 'Gym Bag', '200$', 'leather (grey color)', 'uploadimage/product_4.png', 'accessories'),
(5, 'Nike Shoes', '500$', 'cream color , canvas', 'uploadimage/product_5.png', 'men'),
(7, 'dadfdas', '3343', 'efsdfsf', 'uploadimage/banner_1.jpg', 'women');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'ranjeet jayswal', 'rj@gmail.com', '1234'),
(3, 'jd rajput', 'jd@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `id` int(11) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `pprice` varchar(50) NOT NULL,
  `pdesc` varchar(200) NOT NULL,
  `pimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`id`, `pname`, `pprice`, `pdesc`, `pimage`) VALUES
(1, 'dadfdas', '3343', 'efsdfsf', 'uploadimage/banner_1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `man`
--
ALTER TABLE `man`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `man`
--
ALTER TABLE `man`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `women`
--
ALTER TABLE `women`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
