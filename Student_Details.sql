-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2021 at 02:48 PM
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
-- Database: `Student Details`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer detail`
--

CREATE TABLE `customer detail` (
  `sr_` int(11) NOT NULL,
  `customer_name` varchar(11) NOT NULL,
  `city` varchar(40) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer detail`
--

INSERT INTO `customer detail` (`sr_`, `customer_name`, `city`, `mobile_no`, `date`) VALUES
(1, 'mahesh', 'ahmedabad', '4657767787', '2021-10-24'),
(2, 'rishi', 'rajkot', '7477875778', '2021-10-18'),
(3, 'dell', 'mumbai', '6646677656', '2021-10-18'),
(4, 'apple', 'L.A.', '6646679876', '2021-10-24'),
(5, 'anjali', 'jaipur', '6746599876', '2021-10-15'),
(6, 'meena', 'manipuram', '6746677857', '2021-10-18'),
(7, 'akshay', 'jodhpur', '4667566747', '2021-10-10'),
(8, 'abhi', 'dahod', '4637778288', '2021-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `december Trip`
--

CREATE TABLE `december Trip` (
  `sr_no` int(11) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `student_roll_no` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `mobile_no` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `december Trip`
--

INSERT INTO `december Trip` (`sr_no`, `student_name`, `student_roll_no`, `date`, `mobile_no`) VALUES
(1, 'mahesh', '5', '2021-10-25 16:05:59', '1234567891'),
(2, 'qqqwwq', '12', '2021-10-08 16:20:06', '1221122112'),
(3, 'rtyuiu', '65', '2021-10-19 16:21:22', '1221122112'),
(4, 'ramesh', '22', '2021-10-18 16:22:55', '3557675846'),
(5, 'jaydeep', '35', '2021-10-11 16:27:38', '6746576878'),
(6, 'dipak', '32', '2021-10-11 16:28:41', '5748574878'),
(7, 'mani', '2', '2021-10-18 16:29:17', '4536786567'),
(8, 'mukesh', '3', '2021-10-23 16:30:02', '3546676566'),
(9, 'rajiv', '55', '2021-10-24 16:30:56', '6778465789'),
(10, 'karan', '58', '2021-10-24 16:31:37', '7846577889');

-- --------------------------------------------------------

--
-- Table structure for table `Interviewee_Detail`
--

CREATE TABLE `Interviewee_Detail` (
  `sr_no` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Gender` varchar(9) NOT NULL,
  `Age` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Interviewee_Detail`
--

INSERT INTO `Interviewee_Detail` (`sr_no`, `Name`, `City`, `Gender`, `Age`) VALUES
(1, 'Pandey Manshi', 'Jaipur', 'F', '20'),
(2, 'Darshan Raval', 'Ahmedabad', 'M', '21'),
(3, 'Rishi Tiwari', 'Vadodara', 'M', '21'),
(4, 'Manish Ojha', 'Surat', 'M', '21'),
(5, 'Rajput Gaurav', 'Ahmedabad', 'M', '23'),
(6, 'Baghel Kamlesh', 'Indor', 'M', '24'),
(7, 'Shakya Yogesh', 'Boriwali', 'M', '26'),
(8, 'Vishwas Patel', 'Jamnagar', 'M', '35'),
(9, 'Harsh Parmar', 'Jodhpur', 'M', '26'),
(10, 'Pandey Swati', 'Mumbai', 'F', '23');

-- --------------------------------------------------------

--
-- Table structure for table `Laptop_Details`
--

CREATE TABLE `Laptop_Details` (
  `sr_no` int(11) NOT NULL,
  `Brand` varchar(11) NOT NULL,
  `Ram(gb)` varchar(11) NOT NULL,
  `Price(rs)` varchar(11) NOT NULL,
  `Storage(gb)` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Laptop_Details`
--

INSERT INTO `Laptop_Details` (`sr_no`, `Brand`, `Ram(gb)`, `Price(rs)`, `Storage(gb)`) VALUES
(1, 'dell', '4', '60,000', '700'),
(2, 'lenovo', '8', '58,000', '500'),
(3, 'hp', '4', '68,000', '800'),
(4, 'asus', '8', '50,000', '750'),
(5, 'dell-g15', '8', '67,000', '500(ssd)'),
(6, 'acer', '4', '40,000', '250(ssd)');

-- --------------------------------------------------------

--
-- Table structure for table `Product_Details`
--

CREATE TABLE `Product_Details` (
  `sr_no` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `Product_id` varchar(10) NOT NULL,
  `Product_price(rs.)` varchar(10) NOT NULL,
  `Qnty.` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Product_Details`
--

INSERT INTO `Product_Details` (`sr_no`, `product_name`, `Product_id`, `Product_price(rs.)`, `Qnty.`) VALUES
(1, 'LAkeme kajal', '221', '230', '2'),
(2, 'way protine', '225', '500', '2'),
(3, 'Horlicks', '113', '300', '5'),
(4, 'Complain', '224', '600', '44'),
(5, 'mass gainer', '456', '800', '2'),
(6, 'kayam churan', '334', '80', '10'),
(7, 'parle-G', '22', '10', '300'),
(8, 'natraj pencil', '1132', '5', '400'),
(9, 'Apsra Pencil', '675', '8', '300'),
(10, 'Domes Eraser', '110', '2', '600');

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` varchar(11) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`id`, `name`, `age`, `mobile`, `email`) VALUES
(244, 'ramesh', '18', 6577685888, 'ramesh@gmail.com'),
(455, 'mahesh', '21', 5674577688, 'mahesh@gmail.com'),
(344, 'kajal', '21', 5664667577, 'kajal@gmail.com'),
(233, 'raju', '21', 5646636677, 'rahu@gmail.com'),
(341, 'babu', '21', 6757747777, 'babu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer detail`
--
ALTER TABLE `customer detail`
  ADD PRIMARY KEY (`sr_`);

--
-- Indexes for table `december Trip`
--
ALTER TABLE `december Trip`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `Interviewee_Detail`
--
ALTER TABLE `Interviewee_Detail`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `Laptop_Details`
--
ALTER TABLE `Laptop_Details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `Product_Details`
--
ALTER TABLE `Product_Details`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer detail`
--
ALTER TABLE `customer detail`
  MODIFY `sr_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `december Trip`
--
ALTER TABLE `december Trip`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Interviewee_Detail`
--
ALTER TABLE `Interviewee_Detail`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Laptop_Details`
--
ALTER TABLE `Laptop_Details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Product_Details`
--
ALTER TABLE `Product_Details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
