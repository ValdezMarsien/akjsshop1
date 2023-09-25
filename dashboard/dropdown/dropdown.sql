-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 12:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dropdown`
--

-- --------------------------------------------------------

--
-- Table structure for table `continent`
--

CREATE TABLE `continent` (
  `id` int(11) NOT NULL,
  `ContinentName` varchar(255) CHARACTER SET latin1 NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `continent`
--

INSERT INTO `continent` (`id`, `ContinentName`, `CreationDate`) VALUES
(1, 'South America', '2021-06-13 00:11:10'),
(2, 'North America', '2021-06-13 00:11:10'),
(3, 'Europe', '2021-06-13 00:11:50'),
(4, 'Asia', '2021-06-13 00:11:50'),
(5, 'Africa', '2021-06-13 00:12:01');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `continent_id` int(11) NOT NULL,
  `country` varchar(255) CHARACTER SET latin1 NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `continent_id`, `country`, `creationDate`) VALUES
(1, 1, 'Brazil', '2021-06-13 00:18:11'),
(2, 2, 'United States', '2021-06-13 00:18:11'),
(3, 3, 'Russia', '2021-06-13 00:19:42'),
(4, 4, 'China', '2021-06-13 00:19:42'),
(5, 5, 'Uganda', '2021-06-13 00:19:42'),
(6, 1, 'Colombia', '2021-06-13 00:25:46'),
(7, 1, 'Argentina', '2021-06-13 00:25:46'),
(8, 1, 'Peru', '2021-06-13 00:25:46'),
(9, 1, 'Chile', '2021-06-13 00:25:46'),
(10, 1, 'Bolivia', '2021-06-13 00:25:46'),
(11, 1, 'Uruguay', '2021-06-13 00:25:46'),
(12, 2, 'Mexico', '2021-06-13 00:28:06'),
(13, 2, 'Canada', '2021-06-13 00:28:06'),
(14, 2, 'Guatemala', '2021-06-13 00:28:06'),
(15, 2, 'Cuba', '2021-06-13 00:28:06'),
(16, 2, 'Haiti', '2021-06-13 00:28:06'),
(17, 2, 'Honduras', '2021-06-13 00:28:06'),
(18, 3, 'Germany', '2021-06-13 00:29:56'),
(19, 3, 'United Kingdom', '2021-06-13 00:29:56'),
(20, 3, 'France', '2021-06-13 00:29:56'),
(21, 3, 'Italy', '2021-06-13 00:29:56'),
(22, 3, 'Spain', '2021-06-13 00:29:56'),
(23, 3, 'Ukraine', '2021-06-13 00:29:56'),
(24, 3, 'Poland', '2021-06-13 00:29:56'),
(25, 3, 'Denmark', '2021-06-13 00:29:56'),
(26, 4, 'India', '2021-06-13 00:31:30'),
(27, 4, 'Indonesia', '2021-06-13 00:31:30'),
(28, 4, 'Japan', '2021-06-13 00:31:30'),
(29, 4, 'Turkey', '2021-06-13 00:31:30'),
(30, 4, 'Iran', '2021-06-13 00:31:30'),
(31, 4, 'Oman', '2021-06-13 00:31:30'),
(32, 4, 'Israel', '2021-06-13 00:31:30'),
(33, 4, 'Jordan', '2021-06-13 00:31:30'),
(34, 5, 'Kenya', '2021-06-13 00:33:27'),
(35, 5, 'Congo', '2021-06-13 00:33:27'),
(36, 5, 'Egypt', '2021-06-13 00:33:27'),
(37, 5, 'Nigeria', '2021-06-13 00:33:27'),
(38, 5, 'Libia', '2021-06-13 00:33:27'),
(39, 5, 'South Africa', '2021-06-13 00:33:27'),
(40, 5, 'Tanzania', '2021-06-13 00:33:27'),
(41, 5, 'Ethiopia', '2021-06-13 00:33:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `continent`
--
ALTER TABLE `continent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `continent`
--
ALTER TABLE `continent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
