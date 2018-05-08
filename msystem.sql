-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2018 at 05:40 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(10) UNSIGNED NOT NULL,
  `gathering_id` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `time_in` timestamp NOT NULL DEFAULT '2018-04-29 23:15:19',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gathering`
--

CREATE TABLE `gathering` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `g_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `start_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gathering`
--

INSERT INTO `gathering` (`id`, `name`, `g_date`, `created_at`, `start_time`) VALUES
(1, 'PM', '2017-12-31 16:00:00', '2018-05-03 03:22:02', '5:30 PM'),
(2, 'SPM', '2018-05-01 16:00:00', '2018-05-03 03:47:23', '5:30 PM'),
(3, 'PBB', '2018-04-28 16:00:00', '2018-05-03 06:25:55', '5:30 PM'),
(4, 'WS', '2018-04-27 16:00:00', '2018-05-03 08:46:01', '5:30 PM'),
(5, 'WBE', '2018-05-03 16:00:00', '2018-05-04 04:26:03', '5:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` timestamp NULL DEFAULT NULL,
  `placeOfBirth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `civilStatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `homeAddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_baptism` timestamp NULL DEFAULT NULL,
  `placeOfBaptism` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baptizer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localeOf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `churchGroup` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `churchId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chatsauce` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_optional` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstName`, `middleName`, `lastName`, `date_of_birth`, `placeOfBirth`, `gender`, `language`, `civilStatus`, `age`, `job`, `skills`, `homeAddress`, `education`, `contactNumber`, `date_of_baptism`, `placeOfBaptism`, `baptizer`, `localeOf`, `churchGroup`, `churchId`, `chatsauce`, `email_optional`, `created_at`, `updated_at`) VALUES
(1, 'Mark', 'Minas', 'Magno', '1993-10-12 16:00:00', 'Sta. Cruz, Zambales', 'Male', 'Filipino, Zambal', 'Single', 24, 'Manual Operator', 'Sewing', 'Camaya Zone 2, Mariveles Bataan', 'La Verdad Christian College year 2013', '09306613120', '2010-04-15 16:00:00', 'ADD CENTRAL, Apalit Pampanga', 'Bro. Ato Tobias', 'Mariveles Bataan', 'KKTK, Group 7 Mariveles', '11006219', '09306613120', 'markmagno_13@yahoo.com', '2018-04-30 09:30:14', '2018-04-30 09:30:14'),
(2, 'Raymart', 'Sandoval', 'Bonilla', '1998-04-13 16:00:00', 'Balanga, Bataan', 'male', 'Filipino, Ilocano', 'Single', 20, 'Pharmacy Staff', 'Sketch', 'Camaya Zone 2, Mariveles Bataan', 'Calibunga High School Year 2014', 'None Yet', '2013-02-14 16:00:00', 'ADD CENTRAL, Apalit Pampanga', 'Bro. Jimmy Custorio', 'Mariveles Bataan', 'KKTK, AG, TMBB', '11302529', 'None Yet', 'scarlet.yoruichi14@gmail.com', '2018-04-30 09:39:04', '2018-04-30 09:39:04'),
(3, 'asda', 'asd', 'asd', '2017-12-31 16:00:00', 'sad', 'asd', 'asd', 'asd', 1, 'asd', 'ASD', 'ADS', 'ASD', 'asd', '2018-01-31 16:00:00', 'sadasd', 'sd', 'asd', 'asd', 'asd', 'asd', 'asd', '2018-05-02 01:09:02', '2018-05-02 01:09:02'),
(4, 'Dummy', 'Dummy', 'Dummy', '2017-12-31 16:00:00', 'DummyDummyDummyDummyDummyDummyDummy', 'Dummy', 'Dummy', 'Dummy', 12, 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', '2017-12-31 16:00:00', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', '2018-05-04 06:49:37', '2018-05-04 06:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_24_022637_create_members_table', 1),
(4, '2018_04_24_022743_create_search_history_table', 1),
(5, '2018_04_30_070656_create_attendance_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `search_history`
--

CREATE TABLE `search_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `searchedKey` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'getitstraight', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gathering`
--
ALTER TABLE `gathering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `search_history`
--
ALTER TABLE `search_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gathering`
--
ALTER TABLE `gathering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `search_history`
--
ALTER TABLE `search_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
