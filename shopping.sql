-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 17, 2019 at 02:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  `cellno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `pw`, `cellno`) VALUES
(1, 'hkhan70', 'mylove', '3315701355'),
(2, 'alveena50', 'rainbow', '3345104994');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_name` mediumtext NOT NULL,
  `order_price` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_name`, `order_price`, `customer_name`, `status`) VALUES
(1, 'JJFW-JPC-11271/S19/ZU-TXT ', 2290, 'hkhan70', 'cancelled'),
(2, 'JJFW-JPC-11233/S19-AB-TXT ', 2400, 'hkhan70', 'cancelled'),
(3, 'JYGK-YGKL-S-160-19 FB/Kalliste ', 1990, 'hkhan70', 'cancelled'),
(4, 'JJFW-JPC-124/S19/NI-JJ6393 ', 2390, 'hkhan70', 'cancelled'),
(5, 'JJFW-JPC-11174/S19-GK-PLN ', 2890, 'hkhan70', 'ordered'),
(6, 'JJFW-JPC-121-EMB-HTK/S19/JJ4771 ', 2790, 'alveena50', 'cancelled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
