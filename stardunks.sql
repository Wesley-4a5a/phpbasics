-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 mrt 2017 om 14:48
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 5.6.30

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
-- Tabelstructuur voor tabel `products`
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
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`product_id`, `product_type_code`, `supplier_id`, `product_name`, `product_price`, `other_product_details`) VALUES
(1, 1, 1, 'Sprinkled', '1.29', '1 pc.'),
(2, 1, 1, 'Chocolate', '1.49', '1 pc.'),
(3, 1, 1, 'Maple', '1.49', '1 pc.'),
(4, 2, 2, 'Dunkaccino', '1.69', 'Small'),
(5, 3, 3, 'Steak Long Jim', '2.29', 'Steak wrap'),
(6, 1, 1, '', '0.00', ''),
(7, 1, 1, '', '0.00', ''),
(8, 1, 1, 'Taart', '1.29', 'Taart is een lie');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
