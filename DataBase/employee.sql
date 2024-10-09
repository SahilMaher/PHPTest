-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 04:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `e_data`
--

CREATE TABLE `e_data` (
  `id` int(3) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `e_date` date NOT NULL DEFAULT current_timestamp(),
  `number` varchar(20) NOT NULL,
  `c_code` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `hobby` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e_data`
--

INSERT INTO `e_data` (`id`, `f_name`, `l_name`, `email`, `e_date`, `number`, `c_code`, `address`, `gender`, `hobby`, `photo`) VALUES
(1, 'shita1', 'modhavadiya11', 's@gmail.com11', '2024-10-09', '9974703311', '+91', 'porbandar11', 'Female', 'Playing', 'forgit.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e_data`
--
ALTER TABLE `e_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `e_data`
--
ALTER TABLE `e_data`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
