-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 16, 2019 at 05:38 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobilestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobile_adminlogin`
--

CREATE TABLE `mobile_adminlogin` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobile_adminlogin`
--

INSERT INTO `mobile_adminlogin` (`id`, `name`, `gender`, `email`, `password`) VALUES
(1, 'anita', 'female', 'anita@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_brand`
--

CREATE TABLE `mobile_brand` (
  `id` int(10) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobile_brand`
--

INSERT INTO `mobile_brand` (`id`, `brand`) VALUES
(1, 'SAMSUNG'),
(2, 'APPLE'),
(3, 'HUAWEI'),
(4, 'NOKIA'),
(5, 'SONY'),
(6, 'LG'),
(7, 'HTC'),
(8, 'MOTOROLA'),
(9, 'LENOVO'),
(10, 'XIAOMI'),
(11, 'GOOGLE'),
(12, 'HONOR'),
(13, 'OPPO'),
(14, 'REALME'),
(15, 'ONEPLUS'),
(16, 'VIVO'),
(17, 'BLACKBERRY'),
(19, 'HONOR');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_credit`
--

CREATE TABLE `mobile_credit` (
  `id` int(10) NOT NULL,
  `nm` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `cardnumber` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobile_credit`
--

INSERT INTO `mobile_credit` (`id`, `nm`, `cv`, `cardnumber`, `month`, `year`) VALUES
(7, 'ANITA', '123', '4716108999716531', '04', '20'),
(8, 'a', '123', '4516108999711065', '03', '20'),
(9, 'anu', '123', '4510 1679 9971 3212', '01', '19'),
(10, 'shekhar awalhe', '1234', '4716 1089 9971 6531', '03', '20'),
(11, 'aaa', '123', '4716 1089 9971 6531', '01', '19'),
(12, 'anita', '123', '4716 1089 9971 6531', '01', '22'),
(13, 'darshu', '123', '4716 1089 9971 6531', '03', '19'),
(14, 'anita', '1234', '1', '01', '19');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_customerdetails`
--

CREATE TABLE `mobile_customerdetails` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobile_customerdetails`
--

INSERT INTO `mobile_customerdetails` (`id`, `firstname`, `middlename`, `lastname`, `contact`, `city`, `address`, `pincode`) VALUES
(6, 'sad', 'sddcad', 'dcdsc', '1221122121', 'dfsfs', 'sfgh', '212121'),
(7, 'anita', 'baban', 'nale', '9920318961', 'mumbai', 'pune', '413701'),
(8, 'shekhar', 'vinayak', 'awalhe', '9920318961', 'pune', 'wagholi', '212121'),
(9, 'shekhar', 'vinayak', 'awalhe', '9920318961', 'pune', 'wagholi', '212121'),
(10, 'shekhar', 'vinayak', 'awalhe', '8822438521', 'pune', 'wagholi', '212121'),
(11, 'trydcs', 'sczx', 'sczx', '9920318961', 'saz', 'dsxz', '212121'),
(12, 'anita', 'baban', 'nale', '9920318961', 'mumbai', 'pune', '413701'),
(13, 'anita', 'baban', 'nale', '2121121221', 'mumbai', 'pune', '413701'),
(14, 'az', 'wsazx', 'dfsa', '1221211221', 'sxz', 'dqasz', '122112');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_login`
--

CREATE TABLE `mobile_login` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobile_login`
--

INSERT INTO `mobile_login` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `email`, `contact`, `city`, `address`, `username`, `password`, `pincode`) VALUES
(1, 'anita', 'baban', 'nale', 'female', 'anita@gmail.com', '8822438521', 'mumbai', 'pune', 'anita', '123', '413701');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_product`
--

CREATE TABLE `mobile_product` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobile_product`
--

INSERT INTO `mobile_product` (`id`, `name`, `brand`, `price`, `description`, `image`, `os`, `ram`, `color`) VALUES
(3, 'apple-iphone-6s', '2', '500000', 'A mobile phone (also known as a hand phone, cell phone, or cellular telephone) is a small portable radio telephone. ... In the 21st century, a new type of mobile phone, called smartphones.', '20190529082523.jpg', 'ios', '128 GB', 'Rose Gold'),
(4, 'apple-iphone-xr', '2', '45000', 'A mobile phone (also known as a hand phone, cell phone, or cellular telephone) is a small portable radio telephone. ... In the 21st century, a new type of mobile phone, called smartphones.', '20190529085330.jpg', 'ios', '64 GB', 'Red'),
(5, 'samsung-galaxy-s10', '1', '17000', 'A mobile phone (also known as a hand phone, cell phone, or cellular telephone) is a small portable radio telephone. ... In the 21st century, a new type of mobile phone, called smartphones.', '20190529092606.jpg', 'android', '64 GB', 'Prism White'),
(6, 'samsung-m10', '1', '15000', 'A mobile phone (also known as a hand phone, cell phone, or cellular telephone) is a small portable radio telephone. ... In the 21st century, a new type of mobile phone, called smartphones.', '20190529092726.jpg', 'android', '28 GB', 'Red'),
(8, 'HUAWEI-P30', '3', '15000', 'A mobile phone (also known as a hand phone, cell phone, or cellular telephone) is a small portable radio telephone. ... In the 21st century, a new type of mobile phone, called smartphones.', '20190529094626.jpg', 'android', '64 GB', 'Rose Gold'),
(9, 'xperia-1', '5', '15000', 'A mobile phone (also known as a hand phone, cell phone, or cellular telephone) is a small portable radio telephone. ... In the 21st century, a new type of mobile phone, called smartphones.', '20190529094737.jpg', 'android', '64 GB', 'Red'),
(10, 'vivo-z1-lite', '16', '17000', 'A mobile phone (also known as a hand phone, cell phone, or cellular telephone) is a small portable radio telephone. ... In the 21st century, a new type of mobile phone, called smartphones.', '20190529094846.jpg', 'android', '128 GB', 'Rose Gold'),
(11, 'vivo-v15', '16', '17000', 'A mobile phone (also known as a hand phone, cell phone, or cellular telephone) is a small portable radio telephone. ... In the 21st century, a new type of mobile phone, called smartphones.', '20190529094917.jpg', 'android', '64 GB', 'Red'),
(12, 'oppo-a9', '13', '15000', 'A mobile phone (also known as a hand phone, cell phone, or cellular telephone) is a small portable radio telephone. ... In the 21st century, a new type of mobile phone, called smartphones.', '20190529095049.jpg', 'android', '128 GB', 'Sky Blue'),
(13, 'oppo-r15', '13', '17000', 'A mobile phone (also known as a hand phone, cell phone, or cellular telephone) is a small portable radio telephone. ... In the 21st century, a new type of mobile phone, called smartphones.', '20190529095130.jpg', 'android', '36 GB', 'Red'),
(14, 'oppo-f7', '13', '15000', 'A mobile phone (also known as a hand phone, cell phone, or cellular telephone) is a small portable radio telephone. ... In the 21st century, a new type of mobile phone, called smartphones.', '20190529095159.jpg', 'android', '128 GB', 'Red'),
(15, 'blackberry-exolve-6', '17', '15000', 'A mobile phone (also known as a hand phone, cell phone, or cellular telephone) is a small portable radio telephone. ... In the 21st century, a new type of mobile phone, called smartphones.', '20190529095909.jpg', 'android', '128 GB', 'Black'),
(16, 'honor-20', '12', '17000', 'A mobile phone (also known as a hand phone, cell phone, or cellular telephone) is a small portable radio telephone. ... In the 21st century, a new type of mobile phone, called smartphones.', '20190529100034.jpg', 'ios', '128 GB', 'Prism White'),
(17, 'redmi-y3', '10', '17000', 'A mobile phone (also known as a hand phone, cell phone, or cellular telephone) is a small portable radio telephone. ... In the 21st century, a new type of mobile phone, called smartphones. ', '20190529100242.jpg', 'android', '128 GB', 'Black'),
(18, 'huawei-y5', '3', '10000', 'A mobile phone (also known as a hand phone, cell phone, or cellular telephone) is a small portable radio telephone. ... In the 21st century, a new type of mobile phone, called smartphones.', '20190529094552.jpg', 'android', '36 GB', 'Prism White');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobile_adminlogin`
--
ALTER TABLE `mobile_adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_brand`
--
ALTER TABLE `mobile_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_credit`
--
ALTER TABLE `mobile_credit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_customerdetails`
--
ALTER TABLE `mobile_customerdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_login`
--
ALTER TABLE `mobile_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_product`
--
ALTER TABLE `mobile_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobile_adminlogin`
--
ALTER TABLE `mobile_adminlogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mobile_brand`
--
ALTER TABLE `mobile_brand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mobile_credit`
--
ALTER TABLE `mobile_credit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mobile_customerdetails`
--
ALTER TABLE `mobile_customerdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mobile_login`
--
ALTER TABLE `mobile_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mobile_product`
--
ALTER TABLE `mobile_product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
