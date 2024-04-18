-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 06:40 AM
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
(3, 'Set A', '3600', 'INTEL i5-11500', 'ASROCK A520M-HVS', 'RTX3060Ti', '16', '1TB', 'images/pc1.jpg'),
(4, 'Set B', '3800', 'Ryzen 7 7700X', 'GIGABYTE B550M-K', 'RTX 3070Ti', '16', '1TB', 'images/pc2.png'),
(5, 'Set C', '4300', 'Ryzen 7 7700X', 'GIGABYTE B550M-K', 'RTX 3070Ti', '16', '1TB', 'images/p3.jpg'),
(6, 'Set D', '4500', 'INTEL i5-12400F', 'ASROCK H610M-HVS', 'RTX 3080', '16', '1TB', 'images/pc4.png'),
(7, 'Set E', '4900', 'INTEL i5-13400', 'MSI PRO B760M-E', 'RTX 3080Ti', '16GB RAM', '1TB', 'images/pc5.jpg'),
(8, 'Set F', '4800', 'INTEL i5-13400', 'MSI PRO B760M-E', 'RTX 3090', '16', '1TB', 'images/1.png'),
(9, 'Set G', '5100', 'INTEL i9-14400', 'MSI PRO B760M-E', 'RTX 3090Ti ', '16', '1TB', 'images/pc6.jpg'),
(10, 'Set H', '4500', 'INTEL i7-13400', 'MSI PRO B760M-E', 'RTX 4060Ti', '16', '1TB', 'images/pc7.jpg'),
(11, 'Set I', '5100', 'INTEL i7-13400', 'MSI PRO B760M-E', 'RTX 4070', '32', '1TB', 'images/pc8.jpg'),
(12, 'Set J', '5400', 'INTEL i7-13400', 'MSI PRO B760M-E', 'RTX 4070 Super', '32', '1TB', 'images/pc9.jpg'),
(13, 'Set K', '5700', 'INTEL i7-13400', 'MSI PRO B760M-E', 'RTX 4070Ti ', '32', '1TB', 'images/pc3.png'),
(14, 'Set L', '6500', 'INTEL i9-13400', 'MSI PRO B760M-E', 'RTX 4080 Super', '32', '1TB', 'images/pc2.png'),
(15, 'Set M', '7300', 'INTEL i9-14400', 'MSI PRO B760M-E', 'RTX 4080', '32', '1TB', 'images/p4.jpg'),
(16, 'Set N', '9000', 'INTEL i9-14400', 'MSI PRO B760M-E', 'RTX 4090 ', '32', '1TB', 'images/p6.jpeg');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comp`
--
ALTER TABLE `comp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comps`
--
ALTER TABLE `comps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
