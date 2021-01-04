-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql209.freesite.vip
-- Generation Time: Jan 03, 2021 at 08:59 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frsiv_24886366_bin`
--

-- --------------------------------------------------------

--
-- Table structure for table `BIN`
--

CREATE TABLE `BIN` (
  `bin_id` int(5) NOT NULL,
  `bin_title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'undefined',
  `bin_lang` varchar(255) COLLATE utf8_bin NOT NULL,
  `bin_paste` longtext COLLATE utf8_bin NOT NULL,
  `bin_date` varchar(44) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `BIN`
--

INSERT INTO `BIN` (`bin_id`, `bin_title`, `bin_lang`, `bin_paste`, `bin_date`) VALUES
(1, 'DFGDF', 'html', 'DFGF', '2019-12-05'),
(2, 'SDFD', 'cpp', 'SDFSDF', '2019-12-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BIN`
--
ALTER TABLE `BIN`
  ADD PRIMARY KEY (`bin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BIN`
--
ALTER TABLE `BIN`
  MODIFY `bin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
