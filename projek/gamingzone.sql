-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 11:44 AM
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
-- Database: `gamingzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` int(20) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthday` int(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmationPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phoneNumber`, `gender`, `address`, `birthday`, `password`, `confirmationPassword`) VALUES
(1, 'muhammad haiqal bin mohd zamri', 'haiqalzamri1111@gmail.com', 133791828, 'male', 'melaka merlimau ', 2002, 'Haiqal24', 'Haiqal24'),
(21, 'MOHD ZAMRI BIN SAHIB MARICAN', 'haiqalzamri1111@gmai.com', 192204737, 'male', 'Lot 2743, Jalan Laidin, Batu 16\r\nSebatu\r\n77300,Merlimau\r\nMelaka', 2024, 'sadasd', 'asdasd'),
(22, 'MOHD ZAMRI BIN SAHIB MARICAN', 'haiqalzamri1111@gmai.com', 192204737, 'male', 'Lot 2743, Jalan Laidin, Batu 16\r\nSebatu\r\n77300,Merlimau\r\nMelaka', 2024, 'sadasd', 'asdasd'),
(23, 'Aiman Danial', 'emdan23@gmail.com', 123758365, 'male', 'putrajaya', 2002, '210302', '210302');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
