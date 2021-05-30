-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 04:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproj01`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_record`
--

CREATE TABLE `new_record` (
  `id` int(11) NOT NULL,
  `trn_date` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll` int(11) NOT NULL,
  `mat` int(11) NOT NULL,
  `sci` int(11) NOT NULL,
  `eng` int(11) NOT NULL,
  `hin` int(11) NOT NULL,
  `sst` int(11) NOT NULL,
  `submittedby` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_record`
--

INSERT INTO `new_record` (`id`, `trn_date`, `name`, `roll`, `mat`, `sci`, `eng`, `hin`, `sst`, `submittedby`) VALUES
(3, '2020-02-23 11:48:50', 'Spiderman', 21, 99, 95, 100, 80, 90, 'Suraj'),
(5, '2020-02-23 11:11:35', 'Batman', 2, 100, 100, 100, 100, 100, 'Suraj'),
(6, '2020-02-23 13:21:41', 'hulk', 55, 99, 98, 95, 65, 32, 'Suraj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'Suraj', 'sp@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-02-23 09:55:24'),
(2, 'Batman', 'batman@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-03-11 10:38:49'),
(3, 'Peter Parker', 'spidey@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-03-13 10:35:43'),
(4, 'Suraj', 'xyz@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-02-10 16:55:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_record`
--
ALTER TABLE `new_record`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_record`
--
ALTER TABLE `new_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
