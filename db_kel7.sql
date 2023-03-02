-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 03:55 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kel7`
--

-- --------------------------------------------------------

--
-- Table structure for table `logdata`
--

CREATE TABLE `logdata` (
  `id` int(5) UNSIGNED NOT NULL,
  `suhu` varchar(5) NOT NULL,
  `kelembapan` varchar(5) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logdata`
--

INSERT INTO `logdata` (`id`, `suhu`, `kelembapan`, `created_date`) VALUES
(51, '26', '24.25', '2023-02-24 15:32:12'),
(52, '26', '24.25', '2023-02-24 15:32:19'),
(53, '26', '24.25', '2023-02-24 15:32:25'),
(54, '26', '24.25', '2023-02-24 15:32:30'),
(55, '26', '24.25', '2023-02-24 15:32:36'),
(56, '26', '24.25', '2023-02-24 15:32:42'),
(57, '26', '24.25', '2023-02-24 15:32:47'),
(58, '26', '24.25', '2023-02-24 15:33:05'),
(59, '26', '24.25', '2023-02-24 15:33:27'),
(60, '26', '24.25', '2023-02-24 15:33:51'),
(61, '26', '24.25', '2023-02-24 15:33:58'),
(62, '26', '24.25', '2023-02-24 15:34:03'),
(63, '26', '24.25', '2023-02-24 15:34:11'),
(64, '26', '24.25', '2023-02-24 15:34:16'),
(65, '26', '24.25', '2023-02-24 15:34:23'),
(66, '26', '24.25', '2023-02-24 15:34:31'),
(67, '26', '24.25', '2023-02-24 15:35:56'),
(68, '26', '24.25', '2023-02-24 15:36:02'),
(69, '26', '24.25', '2023-02-24 15:36:07'),
(70, '26', '24.25', '2023-02-24 15:36:13'),
(71, '26', '24.25', '2023-02-24 15:36:18'),
(72, '26', '24.25', '2023-02-24 15:36:23'),
(73, '26', '24.25', '2023-02-24 15:36:28'),
(74, '26', '24.25', '2023-02-24 15:36:34'),
(75, '26', '24.25', '2023-02-24 15:36:40'),
(76, '26', '24.25', '2023-02-24 15:36:45'),
(77, '26', '24.25', '2023-02-24 15:36:51'),
(78, '26', '24.25', '2023-02-24 15:36:56'),
(79, '26', '24.25', '2023-02-24 15:37:01'),
(80, '26', '24.25', '2023-02-24 15:37:07'),
(81, '26', '24.25', '2023-02-24 15:37:12'),
(82, '26', '24.25', '2023-02-24 15:37:18'),
(83, '26', '24.25', '2023-02-24 15:37:23'),
(84, '26', '24.25', '2023-02-24 15:37:31'),
(85, '26', '24.25', '2023-02-24 15:37:38'),
(86, '26', '24.25', '2023-02-24 15:37:44'),
(87, '26', '24.25', '2023-02-24 15:37:49'),
(88, '26', '24.25', '2023-02-24 15:37:54'),
(89, '26', '24.25', '2023-02-24 15:37:59'),
(90, '26', '24.25', '2023-02-24 15:38:05'),
(91, '26', '24.25', '2023-02-24 15:47:15'),
(92, '26', '24.25', '2023-02-24 15:47:21'),
(93, '26', '24.25', '2023-02-24 15:47:27'),
(94, '26', '24.25', '2023-02-24 15:47:37'),
(95, '26', '24.25', '2023-02-24 15:47:43'),
(96, '26', '24.25', '2023-02-24 15:47:49'),
(97, '26', '24.25', '2023-02-24 15:47:58'),
(98, '26', '24.25', '2023-02-24 15:48:04'),
(99, '26', '24.25', '2023-02-24 15:48:09'),
(100, '26', '24.25', '2023-02-24 15:48:15'),
(101, '26', '24.25', '2023-02-24 15:48:21'),
(102, '26', '24.25', '2023-02-24 15:48:26'),
(103, '26', '24.25', '2023-02-24 15:48:32'),
(104, '26', '24.25', '2023-02-24 15:48:37'),
(105, '26', '24.25', '2023-02-24 15:48:43'),
(106, '26', '24.25', '2023-02-24 15:48:49'),
(107, '26', '24.25', '2023-02-24 15:48:54'),
(108, '22', '22', '2023-02-26 11:13:46'),
(109, '22', '22', '2023-02-26 11:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `logdata_2`
--

CREATE TABLE `logdata_2` (
  `id` int(5) UNSIGNED NOT NULL,
  `suhu` varchar(5) NOT NULL,
  `kelembapan` varchar(5) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logdata_2`
--

INSERT INTO `logdata_2` (`id`, `suhu`, `kelembapan`, `created_date`) VALUES
(110, '22', '22', '2023-03-01 09:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `logdata_3`
--

CREATE TABLE `logdata_3` (
  `id` int(5) UNSIGNED NOT NULL,
  `suhu` varchar(5) NOT NULL,
  `kelembapan` varchar(5) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logdata_3`
--

INSERT INTO `logdata_3` (`id`, `suhu`, `kelembapan`, `created_date`) VALUES
(109, '22', '22', '2023-03-01 09:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `logdata_4`
--

CREATE TABLE `logdata_4` (
  `id` int(5) UNSIGNED NOT NULL,
  `suhu` varchar(5) NOT NULL,
  `kelembapan` varchar(5) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logdata_4`
--

INSERT INTO `logdata_4` (`id`, `suhu`, `kelembapan`, `created_date`) VALUES
(109, '22', '22', '2023-03-01 09:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-02-21-151829', 'App\\Database\\Migrations\\Logdata', 'default', 'App', 1677106238, 1),
(2, '2023-02-21-151829', 'App\\Database\\Migrations\\Logdata_1', 'default', 'App', 1677386099, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logdata`
--
ALTER TABLE `logdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logdata_2`
--
ALTER TABLE `logdata_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logdata_3`
--
ALTER TABLE `logdata_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logdata_4`
--
ALTER TABLE `logdata_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logdata`
--
ALTER TABLE `logdata`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `logdata_2`
--
ALTER TABLE `logdata_2`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `logdata_3`
--
ALTER TABLE `logdata_3`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `logdata_4`
--
ALTER TABLE `logdata_4`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
