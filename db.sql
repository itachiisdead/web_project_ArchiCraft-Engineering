-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 08:59 PM
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
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `projectName` varchar(40) NOT NULL,
  `details` varchar(40) NOT NULL,
  `comment` varchar(40) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstName`, `lastName`, `email`, `projectName`, `details`, `comment`, `reg_date`) VALUES
(1, 'Heba', 'Adel', 'hebaadelali78@gmail.com', 'ujh', '55', '66', '2023-12-24 15:32:40'),
(2, 'mai', 'Adel', 'hebaadelali78@gmail.com', 'lalaland', 'hellooo', 'woooo', '2023-12-24 15:33:42'),
(3, 'Heba', 'Adel', 'hebaadelali78@gmail.com', 'jjnjk', 'njjjk', '', '2023-12-25 18:10:39'),
(4, 'Heba', 'Adel', 'hebaadelali78@gmail.com', '', 'hebaaaaaaaaaaaaa', '', '2023-12-25 19:07:20'),
(5, 'Heba', 'Adel', 'hebaadelali78@gmail.com', '', 'hebaaaaaaaaaaaaa', '', '2023-12-25 19:08:40'),
(6, 'Heba', 'Ali', 'adleelhgale@gmail.com', '', '', '', '2023-12-25 19:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(6) UNSIGNED NOT NULL DEFAULT 0,
  `image` blob DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `describtion` varchar(2000) DEFAULT NULL,
  `price_range` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Name` varchar(60) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Name`, `email`, `password`) VALUES
('mai', 'mega13873@gmail.com', '01016598'),
('hebaabdelali78@gmail.com', 'hebaabdelali78@gmail.com', '01159754'),
('hebaadelali78@gmail.com', 'hebaadelali78@gmail.com', '11112222'),
('heba', 'hebaadelali78@gmail.com', '12344567'),
('heba adel', 'hebaadelali78@gmail.com', '12345612'),
('hebaadelali78@gmail.com', 'hebaadelali78@gmail.com', '12345678'),
('heba', 'hebaadelali78@gmail.com', '25252525'),
('hebaadelali78@gmail.com', 'hebaadelali78@gmail.com', '88665588');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
