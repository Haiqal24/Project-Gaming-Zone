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
-- Database: `gz`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmationPassword` varchar(100) NOT NULL,
  `userType` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `phoneNumber`, `gender`, `address`, `birthday`, `password`, `confirmationPassword`, `userType`) VALUES
(1, 'Haiqal', 'haiqaladmin@gmail.com', '0133791828', 'Male', 'merlimau, melaka', '2002-01-24', 'Haiqal24', 'Haiqal24', 'admin'),
(2, 'haiqalzamri', 'haiqalzamri1111@gmail.com', '0133791828', 'male', 'Lot 2743, Jalan Laidin, Batu 16\r\nSebatu\r\n77300,Merlimau\r\nMelaka', '2002-01-24', 'Haiqal24', 'Haiqal24', 'user'),
(3, 'Maniel', 'emaniel32@gmail.com', '0142345512', 'male', 'no24, Jalan Kasturi, Petaling Jaya', '2002-03-21', '258456', '258456', 'user'),
(4, 'HaiqalZ', 'haiqalzamri1111@gmai.com', '0192204737', 'male', 'Lot 2743, Jalan Laidin, Batu 16\r\nSebatu\r\n77300,Merlimau\r\nMelaka', '2002-01-24', 'Haiqal24', 'Haiqal24', 'user'),
(6, 'Trezx', 'ramensedap21@gmail.com', '0142385293', 'Male', 'No.234 sandakan kuala lumpur indonesia', '2002-03-21', 'softcookies', 'sofcookies', 'user'),
(7, 'Abu Haikal', 'abuhaikal@gmail.com', '1232434535', 'Male', '32, AnBang', '0000-00-00', '123456', '123456', 'user'),
(8, 'Ameer Danial', 'ameerdanial18@gmail.com', '149397864', 'male', 'Lot 2743, Jalan Laidin, Batu 16\r\nSebatu\r\n77300,Merlimau\r\nMelaka', '0000-00-00', 'Haiqal24', 'Haiqal24', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
