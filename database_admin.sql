-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 03:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_admin`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `login`
-- (See below for the actual view)
--
CREATE TABLE `login` (
`Email` varchar(100)
,`Password` varchar(250)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `email_verification_link` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `age`, `email`, `password`, `status`, `email_verification_link`, `email_verified_at`) VALUES
(3, 'loan', 'nguyen', 18, 'loannguyenthi290301@gmail.com', '$2y$10$ajn8AD24oUspATnu3Qot4O8s3yfqy1eVZcXNxTGcZ116tvT7xbXTi', 0, '41ab90617ff48ade21765a3947b61cc29548', NULL),
(4, 'binh', 'nguyen', 18, 'binhnguyen29122001@gmail.com', '$2y$10$4PPokTeKaaWpeZ83C33H6e9.odeZG4krtodJKsy4VXVqcqJlREYFS', 0, 'a7258d148bb9c1f2bc498482c45c400f7935', NULL),
(7, 'huyen', 'Pham', 23, 'huyenpham26112001@gmail.com', '$2y$10$iyqJBYbR2XWQD9K4JFbUhOQEeMDSmfKPU1ieVFuwwZBFY0x.H2kHO', 1, '011f795750257d56cb5e5d6a1194b8fe8569', '2022-01-04 07:56:58');

-- --------------------------------------------------------

--
-- Structure for view `login`
--
DROP TABLE IF EXISTS `login`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `login`  AS SELECT `users`.`email` AS `Email`, `users`.`password` AS `Password` FROM `users` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
