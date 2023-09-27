-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2023 at 06:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `youtube` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `email`, `username`, `firstname`, `lastname`, `address`, `contact`, `password`, `youtube`, `instagram`, `facebook`, `twitter`) VALUES
(1, 'afia@gmail.com', '', 'Afia', 'Jahin', 'Rupnogor', '01754346749', '$2y$10$GZttvm6eLq/HoOGJwA43d.oAr0LFZ2pX4lxjgZXBvaAuWrbsZtpBi', '', '', '', ''),
(2, 'afia25@gmail.com', '', 'Afia', 'Jahin', 'Rupnogor', '01754346749', '$2y$10$N8.M5NagY3QwVM3SjbZNBephTWqAG5dRVTXaFblDBfh2Ylml2Fd0S', '', '', '', ''),
(3, 'afiajahin.p25@gmail.com', '', 'Afia', 'Jahin', 'Rupnogor', '01754346749', '$2y$10$sDEFrmxV2YbDlTRsC2IOj.A8f29amuqeQNszhNJqCab3ocXopMjU6', 'www.youtube.com', 'www.instagram.com', '', 'www.twitter.com'),
(4, 'ratun@gmail.com', '', 'kazi', 'ratun', 'mirpur 2', '01736537766', '$2y$10$PIwN4LpY4s2JHHFb/Ycwr.lWWg1/OUKxxZqgaD0Fdj7hnSTwkhr6S', '', '', '', ''),
(5, 'afiajah.p25@gmail.com', '', 'Afia', 'Jahin', 'Rupnogor', '01754346749', '$2y$10$vDiPxifBBW.Q7nZILPLRFOnd0X7tvn87w1XD0nc/7TNx8x54mVOvy', '', '', '', ''),
(6, 'afi@gmail.com', '', 'Afia', 'Jahin', 'Rupnogor', '01754346749', '$2y$10$MI0TkiggEnS07zut7rdBg.4T/rg8IEr.CiBbxSzPOjFLQvD0m5qlC', '', '', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
