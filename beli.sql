-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 07:42 AM
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
-- Database: `beli`
--

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

CREATE TABLE `comp` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `cp` varchar(100) NOT NULL,
  `mb` varchar(100) NOT NULL,
  `gp` varchar(100) NOT NULL,
  `gbram` varchar(100) NOT NULL,
  `store` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comp`
--

INSERT INTO `comp` (`id`, `name`, `price`, `cp`, `mb`, `gp`, `gbram`, `store`, `image`) VALUES
(3, 'Set A', '3600', 'INTEL i5-11500', 'RTX 3070', '', '16', '1TB', 'images/pc1.jpg'),
(4, 'Set B', '3800', 'Ryzen 7 7700X', 'GIGABYTE B550M-K', 'RTX 3070Ti', '16', '1TB', 'images/pc2.png'),
(5, 'Set C', '4300', 'Ryzen 7 7700X', 'GIGABYTE B550M-K', 'RTX 3070Ti', '16', '1TB', 'images/p3.jpg'),
(6, 'Set D', '4500', 'INTEL i5-12400F', 'ASROCK H610M-HVS', 'RTX 3080', '16', '1TB', 'images/pc4.png'),
(7, 'Set E', '4900', 'INTEL i5-13400', 'MSI PRO B760M-E', 'RTX 3080Ti', '16', '1TB', 'images/pc5.jpg'),
(8, 'Set F', '4800', 'INTEL i5-13400', 'MSI PRO B760M-E', 'RTX 3090', '16', '1TB', 'images/1.png'),
(9, 'Set G', '5100', 'INTEL i9-14400', 'MSI PRO B760M-E', 'RTX 3090Ti ', '16', '1TB', 'images/pc6.jpg'),
(10, 'Set H', '4500', 'INTEL i7-13400', 'MSI PRO B760M-E', 'RTX 4060Ti', '16', '1TB', 'images/pc7.jpg'),
(11, 'Set I', '5100', 'INTEL i7-13400', 'MSI PRO B760M-E', 'RTX 4070', '32', '1TB', 'images/pc8.jpg'),
(12, 'Set J', '5400', 'INTEL i7-13400', 'MSI PRO B760M-E', 'RTX 4070 Super', '32', '1TB', 'images/pc9.jpg'),
(13, 'Set K', '5700', 'INTEL i7-13400', 'MSI PRO B760M-E', 'RTX 4070Ti ', '32', '1TB', 'images/pc3.png'),
(14, 'Set L', '6500', 'INTEL i9-13400', 'MSI PRO B760M-E', 'RTX 4080 Super', '32', '1TB', 'images/pc2.png'),
(15, 'Set M', '7300', 'INTEL i9-14400', 'MSI PRO B760M-E', 'RTX 4080', '32', '1TB', 'images/p4.jpg'),
(16, 'Set N', '9000', 'INTEL i9-14400', 'MSI PRO B760M-E', 'RTX 4090 ', '32', '1TB', 'images/p6.jpeg'),
(17, 'lenovo', '5100', 'INTEL i7-13400', 'MSI PRO B760M-E', 'RTX4090Ti', '32', '1TB', 'images/sad.png');

-- --------------------------------------------------------

--
-- Table structure for table `comps`
--

CREATE TABLE `comps` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `cp` varchar(100) NOT NULL,
  `mb` varchar(100) NOT NULL,
  `gp` varchar(100) NOT NULL,
  `gbram` varchar(100) NOT NULL,
  `store` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comps`
--

INSERT INTO `comps` (`id`, `name`, `price`, `cp`, `mb`, `gp`, `gbram`, `store`, `image`) VALUES
(1, 'Set 1', '3600', 'INTEL i5-11500', '', '', '16', '1TB', 'images/p1.jpg'),
(2, 'Set 2', '3800', 'Ryzen 5 7500', 'ASROCK A520M-HVS', 'RX5600XT ', '16', '1TB', 'images/p2.jpg'),
(3, 'Set 3', '4300', 'Ryzen 7 7700X', 'GIGABYTE B550M-K', 'RX6800XT', '16', '1TB', 'images/p3.jpg'),
(4, 'Set 5', '4500', 'INTEL i5-12400F', 'ASROCK H610M-HVS', 'RX6750XT', '16', '1TB', 'images/p4.jpg'),
(5, 'Set 4', '4900', 'INTEL i5-13400', 'MSI PRO B760M-E', 'RX7900', '16', '1TB', 'images/p5.jpg'),
(6, 'Set 6', '4800', 'INTEL i5-13400', 'MSI PRO B760M-E', 'RX7600', '16', '1TB', 'images/p6.jpeg'),
(7, 'Set 7', '5100', 'INTEL i9-14400', 'MSI PRO B760M-E', 'RX7600', '16', '1TB', 'images/p7.jpeg'),
(8, 'Set 8', '4500', 'INTEL i7-13400', 'MSI PRO B760M-E', 'RX7800XT', '16', '1TB', 'images/p8.jpg'),
(9, 'Set 9', '5100', 'INTEL i7-13400', 'MSI PRO B760M-E', 'RX7800XT', '16', '1TB', 'images/p9.jpg'),
(10, 'Set 10', '5400', 'INTEL i7-13400', 'MSI PRO B760M-E', 'RX6600XT', '32', '1TB', 'images/p10.jpg'),
(11, 'Set 11', '5700', 'INTEL i7-13400', 'MSI PRO B760M-E', 'RX7900XT', '32', '1TB', 'images/p1.jpg'),
(12, 'Set 11', '6500', 'INTEL i9-13400', 'MSI PRO B760M-E', 'RX6750', '32', '1TB', 'images/p2.jpg'),
(13, 'Set 12', '6700', 'INTEL i9-14400', 'MSI PRO B760M-E', 'RX6800XT', '32', '1TB', 'images/p3.jpg'),
(14, 'Set 13', '7000', 'INTEL i9-14400', 'MSI PRO B760M-E', 'RX7900XT', '32', '1TB', 'images/p9.jpg'),
(15, 'aiman pc', '3000', 'rtx', 'hx msi', 'rtx3090', '32', '1TB', 'images/illigear.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `cp` varchar(100) NOT NULL,
  `gp` varchar(100) NOT NULL,
  `gbram` varchar(100) NOT NULL,
  `store` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `name`, `price`, `cp`, `gp`, `gbram`, `store`, `image`) VALUES
(2, 'ASUS TUF Dash F15', '10999', 'I7-13650', 'RTX4090', '64', '1TB', 'images/asus.jpg'),
(3, 'MSI<br>Titan hX ', '13999', 'I9-14900', 'RTX4090', '64', '1TB', 'images/msi.jpg'),
(4, 'ILLIGEAR Sapphire gX', '11000', 'I9-14900', 'RTX4090', '64', '1TB', 'images/illigear.jpg'),
(5, 'HP<br>Victus 16', '9000', 'I7-12500', 'RTX4080', '32', '1TB', 'images/hp.jpg'),
(6, 'DELL<br>Alienware', '15000', 'I9-14900', 'RTX4090', '64', '1TB', 'images/alienware.jpg'),
(7, 'GIGABYTE Aorus 17 ', '12000', 'I7-13700', 'RTX4080', '64', '1TB', 'images/gigabyte.jpg'),
(8, 'LENOVO<br>Legion Pro 7 ', '11000', '19-14900', 'RTX4090', '64', '1TB', 'images/lenovo.jpg'),
(12, 'Apple MacBook Air', '10000', 'IOS 17', 'INTEL Core i14', '64', '1TB', 'images/apple macbook.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `product`, `name`, `email`, `phone`) VALUES
(4, 'Set B', 'Trezx', 'ramensedap21@gmail.com', '0192204737'),
(10, 'ASUS TUF Dash F15', 'Haiqal', 'haiqalzamri1111@gmai.com', '0192204737'),
(11, 'Set C', 'Ammar Yasser', 'ammar23@gmai.com', '0134704737');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comp`
--
ALTER TABLE `comp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comps`
--
ALTER TABLE `comps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comp`
--
ALTER TABLE `comp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comps`
--
ALTER TABLE `comps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
