-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2017 at 04:30 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stardunks`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_type_code` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `product_name` varchar(65) NOT NULL,
  `product_price` decimal(12,2) NOT NULL,
  `other_product_details` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_type_code`, `supplier_id`, `product_name`, `product_price`, `other_product_details`) VALUES
(1, 1, 1, 'Sprinkled', '1.29', '1 pc.'),
(2, 1, 1, 'Chocolate', '1.49', '1 pc.'),
(3, 1, 1, 'Maple', '1.49', '1 pc.'),
(4, 2, 2, 'Dunkaccino', '1.69', 'Small'),
(5, 3, 3, 'Steak Long Jim', '2.29', 'Steakasdasd'),
(8, 1, 1, 'Taart', '1.29', 'Taart is een lie'),
(9, 1, 1, 'Dunk&Donut', '0.89', 'Smaller than expected'),
(15, 1, 1, 'hgf', '2.00', 'aa'),
(16, 1, 1, 'Taart', '89.00', 'Taart is een lie'),
(17, 1, 1, 'Taartje', '231.20', 'Wel duur'),
(18, 1, 1, '34', '23.00', 'wqe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
