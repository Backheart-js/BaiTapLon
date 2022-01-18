-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 04:03 PM
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
-- Database: `database_baitaplon`
--

-- --------------------------------------------------------

--
-- Table structure for table `avt_images`
--

CREATE TABLE `avt_images` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `avt_images`
--

INSERT INTO `avt_images` (`id`, `email`, `file_name`, `uploaded_on`, `status`) VALUES
(15, 'huyenpham2612001@gmail.com', '118255485_3279507468754795_1961276475551725227_n.jpg', '2022-01-16 21:49:17', '1'),
(16, 'huyenpham2612001@gmail.com', '242036528_184032387177920_5019159761489661791_n.jpg', '2022-01-16 22:04:47', '1'),
(18, 'huyenpham26112001@gmail.com', 'Screenshot (1809).png', '2022-01-16 23:16:16', '1'),
(20, 'huyenpham26112001@gmail.com', 'cat.jpeg', '2022-01-16 23:40:45', '1'),
(21, '12001@gmail.com', 'hinh-anh-den-si_122547418.jpg', '2022-01-17 07:50:54', '1'),
(22, 'huyen12001@gmail.com', '2-OPENSPACE-4.jpg', '2022-01-17 14:51:27', '1'),
(24, 'huyenpham26112001@gmail.com', 'dog-stupdi.jpeg', '2022-01-17 20:13:36', '1'),
(25, 'huyenpham2612001@gmail.com', 'avt.jpg', '2022-01-18 09:39:33', '1');

-- --------------------------------------------------------

--
-- Table structure for table `data_images`
--

CREATE TABLE `data_images` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_images`
--

INSERT INTO `data_images` (`id`, `email`, `file_name`, `uploaded_on`, `status`) VALUES
(9, 'loannguyenthi290301@gmail.com', 'Classbaocao.jpg', '2022-01-15 22:50:14', '1'),
(10, 'loannguyenthi290301@gmail.com', 'Classdonxinnghiphep.jpg', '2022-01-15 22:50:25', '1'),
(11, 'loannguyenthi290301@gmail.com', 'Classlinhvuc.jpg', '2022-01-15 22:52:04', '1'),
(12, 'loannguyenthi290301@gmail.com', 'UseCasexinnghiphep.jpg', '2022-01-15 22:52:55', '1');

-- --------------------------------------------------------

--
-- Table structure for table `db_admin`
--

CREATE TABLE `db_admin` (
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_admin`
--

INSERT INTO `db_admin` (`tendangnhap`, `matkhau`) VALUES
('binh', '123456789'),
('huyen', '123456789');

-- --------------------------------------------------------

--
-- Stand-in structure for view `login`
-- (See below for the actual view)
--
CREATE TABLE `login` (
`Email` varchar(100)
,`Password` varchar(250)
,`Status` int(11)
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
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `description` varchar(500) CHARACTER SET utf8 DEFAULT 'Hãy giới thiệu đôi điều về bạn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `age`, `email`, `password`, `status`, `email_verification_link`, `email_verified_at`, `description`) VALUES
(3, 'loan', 'nguyen', 18, 'loannguyenthi290301@gmail.com', '$2y$10$ajn8AD24oUspATnu3Qot4O8s3yfqy1eVZcXNxTGcZ116tvT7xbXTi', 0, '41ab90617ff48ade21765a3947b61cc29548', NULL, 'Tớ là Ngáo!'),
(4, 'binh', 'nguyen', 18, 'binhnguyen29122001@gmail.com', '$2y$10$4PPokTeKaaWpeZ83C33H6e9.odeZG4krtodJKsy4VXVqcqJlREYFS', 1, 'a7258d148bb9c1f2bc498482c45c400f7935', '2022-01-02 15:49:56', 'Anh da đen'),
(33, 'Gemma', 'Pham', 26, '12001@gmail.com', '$2y$10$.8G6boZ26Iy.xBUcO.iAz.iURazjR.XYHPPnEyBMZ6gWbHZpoV7Sa', 1, '33edfc40d3536d371de109e5917ec0136563', '2022-01-16 01:01:01', 'Hãy giới thiệu đôi điều về bạn'),
(34, 'Huyen', 'Huyen', 17, 'huyenpham2112@gmail.com', '$2y$10$CJlEYYc8pe/Nc4QMXg8LNeDmSLWTYTftcx0Zv9g2VO1h833Mh4loG', 1, '47435c9e3c532f674805c419a60888f82137', '2022-01-11 15:51:48', 'Hãy giới thiệu đôi điều về bạn'),
(36, 'Gemma', 'Pham', 20, 'huyenpham2612001@gmail.com', '$2y$10$6Y64gwq4C1fCQAby2NOVJO5MRcZv9yHxts0Qf2d0egIHDF/0WSLYW', 0, '11658647394684b8117b88e8b268620c1626', NULL, 'Hãy giới thiệu đôi điều về bạn'),
(37, 'Gemma', 'Pham', 20, 'huyenpham26112001@gmail.com', '$2y$10$2BnuqGZvVR1toLQvkDoP1OBvlBW8fPLUIkXqo5o.QDiSXh8c9NtMW', 1, '011f795750257d56cb5e5d6a1194b8fe263', '2022-01-17 06:56:43', 'Hãy giới thiệu đôi điều về bạn');

-- --------------------------------------------------------

--
-- Structure for view `login`
--
DROP TABLE IF EXISTS `login`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `login`  AS SELECT `users`.`email` AS `Email`, `users`.`password` AS `Password`, `users`.`status` AS `Status` FROM `users` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avt_images`
--
ALTER TABLE `avt_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_images`
--
ALTER TABLE `data_images`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `avt_images`
--
ALTER TABLE `avt_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `data_images`
--
ALTER TABLE `data_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
