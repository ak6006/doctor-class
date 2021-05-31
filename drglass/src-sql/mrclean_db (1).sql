-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 01:03 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrclean_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `co_id` int(11) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `response_person` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `cancel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `code`, `co_id`, `phone`, `address`, `response_person`, `created_at`, `updated_at`, `cancel`) VALUES
(1, 'فرع اكتوبر', NULL, 9, '5465465', 'النصر', 'احمد', '2021-04-19 08:29:31', '2021-04-19 08:29:31', 0),
(2, 'teamigroup', '78578', 9, '01095109055', '3434 llll', 'احمد', '2021-04-19 08:46:58', '2021-04-19 08:46:58', 0),
(3, 'errter', 'tretrer', 13, '3435435434543', 'terter', 'dffgfd', '2021-04-19 08:53:10', '2021-04-19 08:53:10', 0),
(4, 'teamigroup', '78578', 13, '01095109055', 'eeeeeeeeeee ededwew', 'احمد', '2021-04-19 08:58:33', '2021-04-19 08:58:33', 0),
(5, 'teamigroup', '78578', 13, '01095109055', 'eeeeeeeeeee ededwew', 'احمد', '2021-04-19 09:00:08', '2021-04-19 09:00:08', 0),
(6, 'احمد شهاب', NULL, 13, '454', 'eeeeeeeeeee ededwew', NULL, '2021-04-19 09:02:40', '2021-04-19 09:02:40', 0),
(7, 'teamigroup', 'hsdfhgsdf', 13, '454354345434', 'eeeeeeeeeee ededwew', 'احمد', '2021-04-19 09:24:49', '2021-04-19 09:24:49', 0),
(8, 'alr', '78787', 14, '9798798', '878787', 'fgdfg', '2021-04-19 10:11:39', '2021-04-19 10:11:39', 0),
(9, 'teamigroup', '78578', 14, '01095109055', 'eeeeeeeeeee ededwew', 'ahmed', '2021-04-19 10:14:35', '2021-04-19 10:14:35', 0),
(10, 'teamigroup', 'hsdfhgsdf', 14, '01095109055', 'eeeeeeeeeee ededwew', 'fgdfg', '2021-04-19 10:17:53', '2021-04-19 10:17:53', 0),
(11, 'احمد شهاب333', '78578', 14, '01095109055', 'eeeeeeeeeee ededwew', 'tarek', '2021-04-19 10:21:54', '2021-04-19 10:21:54', 0),
(14, 'teamigroup8989', '78578', 19, 'قغ', 'eeeeeeeeeee ededwew', 'ahmed', '2021-04-19 19:49:39', '2021-04-19 19:50:39', 0);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_18_111408_create_students_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `name`, `address`, `phone`, `vat`, `created_at`, `updated_at`) VALUES
(2, 0, 'ahmed shehab', 'crew.001.002@gmail.com', '01095109055', '123456', '2021-04-18 09:34:17', '2021-04-18 09:39:43'),
(4, 0, 'احمد شهاب', 'crew.001.002@gmail.com', '454354345434', '123456', '2021-04-18 09:36:15', '2021-04-18 09:38:47'),
(5, 0, 'احمد شهاب', 'crew.001.002@gmail.com', '01095109055', 'jkhkjhk', '2021-04-18 10:21:24', '2021-04-18 10:21:24'),
(6, 0, 'احمد شهاب', 'crew.001.002@gmail.com', '01095109055', '123456', '2021-04-18 10:34:23', '2021-04-18 10:34:23'),
(7, 0, 'teamig', 'nasr buil', '555658568', '5255', '2021-04-18 10:53:08', '2021-04-18 10:53:08'),
(8, NULL, 'team', 'dsfds', '43453', 'jkhkjhk', '2021-04-18 19:58:13', '2021-04-18 19:58:13'),
(9, 4, 'تيم اى جروب', 'عمارات النصر', '010951090558', '14141414', '2021-04-18 20:03:19', '2021-04-19 08:49:25'),
(10, 9, 'teamigroup', 'crew.001.002@gmail.com', '01095109055', '123456', '2021-04-18 20:54:31', '2021-04-18 20:54:31'),
(11, 10, 'teamigroup', 'crew.001.002@gmail.com', '01095109055', NULL, '2021-04-18 20:57:46', '2021-04-18 20:57:46'),
(12, 12, 'teamiiiggg', 'eeeeeeeeeee ededweweryter', '454354345434', '666', '2021-04-19 06:44:04', '2021-04-19 06:44:04'),
(13, 7, 'teamigroup', '6th october', '01095109055', '666', '2021-04-19 08:52:35', '2021-04-19 08:55:05'),
(14, 13, 'test', '3434dde4', '01095109055', '666', '2021-04-19 10:11:14', '2021-04-19 10:17:34'),
(15, 16, 'teamigroup5', 'alnasr', '0109510905589', '15vat', '2021-04-19 17:36:12', '2021-04-19 17:37:03'),
(16, NULL, 'teamigroup', 'eeeeeeeeeee ededwew', '454354345434', '14141414', '2021-04-19 17:53:50', '2021-04-19 17:53:50'),
(17, NULL, 'teamigroup', 'eeeeeeeeeee ededwew', '01095109055', NULL, '2021-04-19 17:55:52', '2021-04-19 17:55:52'),
(18, NULL, 'ttt', 'ttt', '555', NULL, '2021-04-19 17:56:14', '2021-04-19 17:56:14'),
(19, 17, '888', '8889', '888', '999', '2021-04-19 17:57:07', '2021-04-19 19:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `cancel`) VALUES
(5, 'احمد شهاب', 'crew.001.0082@gmail.com', '2021-04-18 20:45:24', '$2y$10$mMzpLr5.MZr4FCp7dqrqp.qgibSBQ04BfljaQ49oC3F3GB8xMk8Au', NULL, NULL, '2021-04-18 17:34:04', '2021-04-18 17:34:04', 0),
(6, 'احمد شهاب', 'crew.005551.002@gmail.com', '2021-04-18 20:45:24', '$2y$10$C6MkDCxHn42Y4t8PGbPUoenspUpZSgjLMVoY578W6E3vZcn/zH0J6', NULL, NULL, '2021-04-18 18:42:07', '2021-04-18 18:42:07', 0),
(7, 'teamigroup', 'crew.001.003@gmail.com', '2021-04-18 20:45:57', '$2y$10$Hb78mT6irUk64e7hO9ymy.50kPbkzchKy1Qm8Rc8P6IM06kWK22u6', NULL, NULL, '2021-04-18 18:45:57', '2021-04-18 18:45:57', 0),
(8, 'احمد شهاب', 'crew.007771.002@gmail.com', '2021-04-18 22:38:57', '$2y$10$cMpj6AGt6p3QTouEl7JK/eqdsgeV/sbXGNWK1ERr9sByIUxO9Uu3a', NULL, NULL, '2021-04-18 20:38:57', '2021-04-18 20:38:57', 0),
(9, 'احمد شهابسسسس', 'crew.1.002@gmail.com', '2021-04-18 22:51:02', '$2y$10$8CLISAVeuaeeEblBk.qjyuF8oBXJsyUT3Hb5h8d0hmWabb0iNg8b2', NULL, NULL, '2021-04-18 20:51:02', '2021-04-18 20:51:02', 0),
(10, 'احمد شهاب333', 'crew.00a1.003@gmail.com', '2021-04-18 22:56:58', '$2y$10$c.2dbKTm02p26MqBC6I7revcMv5VEOxtbyROCxApC3AUZnXaZJD3u', NULL, NULL, '2021-04-18 20:56:58', '2021-04-18 20:56:58', 0),
(11, 'teamigroup', 'crew.001.00553@gmail.com', '2021-04-18 22:59:22', '$2y$10$u6IMZVHkg6M/GSl/DppuruXKdn4r04ZIjnm0KTPSquWlkISTBRzwG', NULL, NULL, '2021-04-18 20:59:22', '2021-04-18 20:59:22', 0),
(12, 'احمد شهاب333', 'crew.002221.002@gmail.com', '2021-04-19 08:43:26', '$2y$10$eVodS6/Ec5tlZ7CS5KgSseYtiFAt4GOETxaF2z78Ej69F0DtkpZgS', NULL, NULL, '2021-04-19 06:43:26', '2021-04-19 06:43:26', 0),
(13, 'ahmed shehab', 'crew.003331.0082@gmail.com', '2021-04-19 12:08:28', '$2y$10$yui7r8FhEeUTLb19xI5OX.bwRrY9bKAKG8cMI3wTFaHmaDTzjx542', NULL, NULL, '2021-04-19 10:08:28', '2021-04-19 10:08:28', 0),
(15, 'احمد شهاب', 'crew.001.002@gmail.com', '2021-04-19 12:54:00', '$2y$10$zRzcVj1/D2CRlWtNrj5yXOPqndsj.sxeJJqmENmse2LNfHcqWJPKm', 'admin', NULL, '2021-04-19 10:52:12', '2021-04-19 10:52:12', 0),
(16, 'teamigroup', 'crew.001.0083@gmail.com', '2021-04-19 19:28:05', '$2y$10$VOLXmlKDZeGOYUk3/fq0VuqPur8xBuFe973R7vi6VLU.kGtTzNoei', NULL, NULL, '2021-04-19 17:28:05', '2021-04-19 17:28:05', 0),
(17, 'احمد شهاب', 'crew.00133.003@gmail.com', '2021-04-19 19:38:58', '$2y$10$ctmcW24WASdg36EJEgUjzuEcTFjkAjAF.tjD5EIpybzE.Va6ZNeL.', NULL, NULL, '2021-04-19 17:38:58', '2021-04-19 17:38:58', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
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
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
