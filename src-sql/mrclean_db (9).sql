-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 11:54 PM
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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `day_name` varchar(255) DEFAULT NULL,
  `fromhour` varchar(255) NOT NULL,
  `tohour` varchar(255) NOT NULL,
  `fromampm` varchar(11) NOT NULL DEFAULT 'AM',
  `toampm` varchar(11) NOT NULL DEFAULT 'PM',
  `active` int(1) NOT NULL DEFAULT 0,
  `cancel` int(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `country_id`, `city_id`, `day_name`, `fromhour`, `tohour`, `fromampm`, `toampm`, `active`, `cancel`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'السبت', '07:00', '10:00', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(2, 1, 1, 'الأحد', '07:00', '10:00', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(3, 1, 1, 'الأثنين', '07:00', '10:00', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(4, 1, 1, 'الثلاثاء', '07:00', '10:00', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(5, 1, 1, 'الأربعاء', '07:00', '10:00', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(6, 1, 1, 'الخميس', '07:00', '10:00', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(7, 1, 1, 'الجمعة', '01:00', '07:00', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(8, 1, 2, 'السبت', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(9, 1, 2, 'الأحد', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(10, 1, 2, 'الأثنين', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(11, 1, 2, 'الثلاثاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(12, 1, 2, 'الأربعاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(13, 1, 2, 'الخميس', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(14, 1, 2, 'الجمعة', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(15, 1, 3, 'السبت', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(16, 1, 3, 'الأحد', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(17, 1, 3, 'الأثنين', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(18, 1, 3, 'الثلاثاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(19, 1, 3, 'الأربعاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(20, 1, 3, 'الخميس', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(21, 1, 3, 'الجمعة', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(22, 1, 4, 'السبت', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(23, 1, 4, 'الأحد', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(24, 1, 4, 'الأثنين', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(25, 1, 4, 'الثلاثاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(26, 1, 4, 'الأربعاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(27, 1, 4, 'الخميس', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(28, 1, 4, 'الجمعة', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(29, 1, 5, 'السبت', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(30, 1, 5, 'الأحد', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(31, 1, 5, 'الأثنين', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(32, 1, 5, 'الثلاثاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(33, 1, 5, 'الأربعاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(34, 1, 5, 'الخميس', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(35, 1, 5, 'الجمعة', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(36, 1, 6, 'السبت', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(37, 1, 6, 'الأحد', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(38, 1, 6, 'الأثنين', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(39, 1, 6, 'الثلاثاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(40, 1, 6, 'الأربعاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(41, 1, 6, 'الخميس', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(42, 1, 6, 'الجمعة', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(43, 1, 7, 'السبت', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(44, 1, 7, 'الأحد', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(45, 1, 7, 'الأثنين', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(46, 1, 7, 'الثلاثاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(47, 1, 7, 'الأربعاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(48, 1, 7, 'الخميس', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(50, 1, 7, 'الجمعة', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(51, 1, 8, 'السبت', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(52, 1, 8, 'الأحد', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(53, 1, 8, 'الأثنين', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(54, 1, 8, 'الثلاثاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(56, 1, 8, 'الأربعاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(57, 1, 8, 'الخميس', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(59, 1, 8, 'الجمعة', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(60, 1, 9, 'السبت', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(61, 1, 9, 'الأحد', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(62, 1, 9, 'الأثنين', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(63, 1, 9, 'الثلاثاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(64, 1, 9, 'الأربعاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(65, 1, 9, 'الخميس', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(66, 1, 9, 'الجمعة', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(67, 1, 10, 'السبت', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(68, 1, 10, 'الأحد', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(69, 1, 10, 'الأثنين', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(70, 1, 10, 'الثلاثاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(71, 1, 10, 'الأربعاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(72, 1, 10, 'الخميس', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(73, 1, 10, 'الجمعة', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(74, 1, 11, 'السبت', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(75, 1, 11, 'الأحد', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(76, 1, 11, 'الأثنين', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(77, 1, 11, 'الثلاثاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(78, 1, 11, 'الأربعاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(79, 1, 11, 'الخميس', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(80, 1, 11, 'الجمعة', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(81, 1, 12, 'السبت', '07', '17', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(82, 1, 12, 'الأحد', '07', '14', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(83, 1, 12, 'الأثنين', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(84, 1, 12, 'الثلاثاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(85, 1, 12, 'الأربعاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(86, 1, 12, 'الخميس', '10', '13', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(87, 1, 12, 'الجمعة', '07', '13', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(88, 1, 13, 'السبت', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(89, 1, 13, 'الأحد', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(90, 1, 13, 'الأثنين', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(91, 1, 13, 'الثلاثاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(92, 1, 13, 'الأربعاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(93, 1, 13, 'الخميس', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(94, 1, 13, 'الجمعة', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(95, 1, 14, 'السبت', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(96, 1, 14, 'الأحد', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(97, 1, 14, 'الأثنين', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(98, 1, 14, 'الثلاثاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(99, 1, 14, 'الأربعاء', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(100, 1, 14, 'الخميس', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(101, 1, 14, 'الجمعة', '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `appointments_details`
--

CREATE TABLE `appointments_details` (
  `id` int(11) NOT NULL,
  `appointments_id` int(11) NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `day` varchar(255) DEFAULT NULL,
  `hour_from` varchar(255) NOT NULL,
  `hour_to` varchar(255) NOT NULL,
  `fromampm` varchar(255) DEFAULT NULL,
  `toampm` varchar(255) DEFAULT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0,
  `active` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments_details`
--

INSERT INTO `appointments_details` (`id`, `appointments_id`, `create_user_id`, `day`, `hour_from`, `hour_to`, `fromampm`, `toampm`, `cancel`, `active`, `created_at`, `updated_at`) VALUES
(1, 86, 48, 'السبت', '02:00', '02:00', NULL, NULL, 0, 0, '2021-04-27 19:59:47', '2021-04-27 19:59:47'),
(2, 86, 48, 'الأحد', '04:00', '05:00', NULL, NULL, 0, 0, '2021-04-27 19:59:47', '2021-04-27 19:59:47'),
(3, 86, 48, 'الأثنين', '05:00', '06:00', NULL, NULL, 0, 0, '2021-04-27 19:59:47', '2021-04-27 19:59:47'),
(4, 86, 48, 'الثلاثاء', '06:00', '08:00', NULL, NULL, 0, 0, '2021-04-27 19:59:47', '2021-04-27 19:59:47'),
(5, 87, 48, 'السبت', '07:00', '14:00', NULL, NULL, 0, 0, '2021-04-27 20:01:31', '2021-04-27 20:01:31'),
(6, 87, 48, 'الأحد', '10:00', '14:00', NULL, NULL, 0, 0, '2021-04-27 20:01:31', '2021-04-27 20:01:31'),
(7, 88, 48, 'السبت', '01:02', '18:00', NULL, NULL, 0, 0, '2021-04-27 20:47:35', '2021-04-27 20:47:35'),
(8, 88, 48, 'الأحد', '02:00', '17:00', NULL, NULL, 0, 0, '2021-04-27 20:47:36', '2021-04-27 20:47:36'),
(9, 88, 48, 'الأربعاء', '00:00', '00:00', NULL, NULL, 0, 0, '2021-04-27 20:47:36', '2021-04-27 20:47:36'),
(10, 88, 48, 'الخميس', '03:00', '09:00', NULL, NULL, 0, 0, '2021-04-27 20:47:36', '2021-04-27 20:47:36'),
(11, 2, 2, 'الأحد', '06:05', '15:30', NULL, NULL, 0, 0, '2021-04-28 09:47:55', '2021-04-28 09:47:55'),
(12, 2, 2, 'الأربعاء', '13:04', '18:05', NULL, NULL, 0, 0, '2021-04-28 09:47:55', '2021-04-28 09:47:55'),
(13, 3, 3, 'السبت', '03:00', '04:00', NULL, NULL, 0, 0, '2021-04-28 09:53:27', '2021-04-28 09:53:27'),
(14, 3, 3, 'الأحد', '02:00', '03:00', NULL, NULL, 0, 0, '2021-04-28 09:53:27', '2021-04-28 09:53:27'),
(15, 3, 3, 'الأثنين', '04:00', '05:00', NULL, NULL, 0, 0, '2021-04-28 09:53:27', '2021-04-28 09:53:27'),
(16, 3, 3, 'الثلاثاء', '06:00', '05:00', NULL, NULL, 0, 0, '2021-04-28 09:53:27', '2021-04-28 09:53:27'),
(17, 3, 3, 'الأربعاء', '05:00', '05:00', NULL, NULL, 0, 0, '2021-04-28 09:53:27', '2021-04-28 09:53:27'),
(18, 3, 3, 'الخميس', '05:00', '04:00', NULL, NULL, 0, 0, '2021-04-28 09:53:27', '2021-04-28 09:53:27'),
(19, 3, 3, 'الجمعة', '06:00', '05:00', NULL, NULL, 0, 0, '2021-04-28 09:53:27', '2021-04-28 09:53:27'),
(20, 4, 3, 'السبت', '00:00', '00:00', NULL, NULL, 0, 0, '2021-04-28 11:06:25', '2021-04-28 11:06:25'),
(21, 4, 3, 'الأحد', '00:00', '00:00', NULL, NULL, 0, 0, '2021-04-28 11:06:25', '2021-04-28 11:06:25'),
(22, 4, 3, 'الأثنين', '00:00', '00:00', NULL, NULL, 0, 0, '2021-04-28 11:06:25', '2021-04-28 11:06:25'),
(23, 4, 3, 'الأربعاء', '00:00', '00:00', NULL, NULL, 0, 0, '2021-04-28 11:06:25', '2021-04-28 11:06:25'),
(24, 5, 3, 'السبت', '07:00', '15:00', NULL, NULL, 0, 0, '2021-04-28 18:32:56', '2021-04-28 18:32:56'),
(25, 5, 3, 'الأحد', '07:30', '15:00', NULL, NULL, 0, 0, '2021-04-28 18:32:56', '2021-04-28 18:32:56'),
(26, 5, 3, 'الثلاثاء', '03:00', '00:00', NULL, NULL, 0, 0, '2021-04-28 18:32:56', '2021-04-28 18:32:56'),
(27, 5, 3, 'الجمعة', '10:00', '22:00', NULL, NULL, 0, 0, '2021-04-28 18:32:56', '2021-04-28 18:32:56'),
(28, 6, 5, 'السبت', '00:00', '13:00', NULL, NULL, 0, 0, '2021-04-28 21:23:47', '2021-04-28 21:23:47'),
(29, 6, 5, 'الأحد', '14:02', '15:00', NULL, NULL, 0, 0, '2021-04-28 21:23:47', '2021-04-28 21:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `bouquets`
--

CREATE TABLE `bouquets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `currancy_symbol` varchar(255) NOT NULL,
  `dayspersubscription` int(11) DEFAULT NULL,
  `daysperweek` int(11) NOT NULL,
  `workperday` int(11) DEFAULT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0,
  `active` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bouquets`
--

INSERT INTO `bouquets` (`id`, `name`, `price`, `currancy_symbol`, `dayspersubscription`, `daysperweek`, `workperday`, `cancel`, `active`, `created_at`, `updated_at`) VALUES
(1, 'الباقة الفضية', '300', 'RSA', 30, 2, 1, 0, 0, '2021-04-20 09:12:41', '2021-04-20 09:12:41'),
(2, 'الباقة البرونزية', '600', 'RSA', 30, 4, 1, 0, 0, '2021-04-20 09:12:41', '2021-04-20 09:12:41'),
(3, 'الباقة الذهبية', '1000', 'RSA', 30, 7, 2, 0, 0, '2021-04-20 09:16:46', '2021-04-20 09:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `bouquets_points`
--

CREATE TABLE `bouquets_points` (
  `id` int(11) NOT NULL,
  `bouquets_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `cancel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `city` int(11) NOT NULL,
  `response_person` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `cancel` int(1) NOT NULL DEFAULT 0,
  `new` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `code`, `co_id`, `phone`, `address`, `city`, `response_person`, `created_at`, `updated_at`, `cancel`, `new`) VALUES
(1, 'احمد شهاب', '78578', 2, '888', 'eeeeeeeeeee ededwew', 1, 'احمد', '2021-04-28 07:46:33', '2021-04-28 07:46:33', 0, 1),
(2, 'teamigroup', 'hsdfhgsdf', 3, '333', 'eeeeeeeeeee ededwew', 1, 'tarek', '2021-04-28 07:52:15', '2021-04-28 07:52:15', 0, 1),
(3, 'teamigroup', 'hsdfhgsdf', 3, 'قغ', '3434', 1, 'fgdfg', '2021-04-28 11:36:06', '2021-04-28 11:36:06', 0, 1),
(4, 'teamigroup', '78578', 5, '454354345434', 'eeeeeeeeeee ededwew', 1, 'احمد', '2021-04-28 19:15:49', '2021-04-28 19:15:49', 0, 1),
(5, 'teamigroup002', '02022222', 5, '1654654654', 'lkjljlkjlkj', 1, 'aaaa', '2021-04-28 19:16:10', '2021-04-28 19:16:10', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city_code` varchar(255) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `cancel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `name`, `city_code`, `active`, `created_at`, `updated_at`, `cancel`) VALUES
(1, 1, 'الرياض', '', 0, '2021-04-21 08:30:50', '2021-04-21 08:30:50', 0),
(2, 1, 'جدة', NULL, 1, '2021-04-21 08:33:55', '2021-04-21 08:33:55', 1),
(3, 1, 'بريدة', NULL, 1, '2021-04-21 08:33:55', '2021-04-21 08:33:55', 1),
(4, 1, 'مكة المكرمة', NULL, 1, '2021-04-21 08:35:13', '2021-04-21 08:35:13', 1),
(5, 1, 'المدينة المنورة', NULL, 1, '2021-04-21 08:35:13', '2021-04-21 08:35:13', 1),
(6, 1, 'حائل', NULL, 1, '2021-04-21 08:35:51', '2021-04-21 08:35:51', 1),
(7, 1, 'سكاكا', NULL, 1, '2021-04-21 08:35:51', '2021-04-21 08:35:51', 1),
(8, 1, 'تبوك', NULL, 1, '2021-04-21 08:36:16', '2021-04-21 08:36:16', 1),
(9, 1, 'عرعر', NULL, 1, '2021-04-21 08:36:16', '2021-04-21 08:36:16', 1),
(10, 1, 'أبهاا', NULL, 1, '2021-04-21 08:36:52', '2021-04-21 08:36:52', 1),
(11, 1, 'جازان', NULL, 1, '2021-04-21 08:36:52', '2021-04-21 08:36:52', 1),
(12, 1, 'نجران', NULL, 1, '2021-04-21 08:37:45', '2021-04-21 08:37:45', 1),
(13, 1, 'الباحة', NULL, 1, '2021-04-21 08:37:45', '2021-04-21 08:37:45', 1),
(14, 1, 'الدمام', NULL, 1, '2021-04-21 08:38:21', '2021-04-21 08:38:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `cancel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `created_at`, `updated_at`, `cancel`) VALUES
(1, 'المملكة العربية السعودية', '+966', '2021-04-21 08:24:45', '2021-04-21 08:24:45', 0);

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
  `city` int(11) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `name`, `address`, `city`, `phone`, `vat`, `new`, `created_at`, `updated_at`, `cancel`) VALUES
(1, 1, 'احمد شهاب', 'eeeeeeeeeee ededwew', 1, '01095109055', '666', 1, '2021-04-28 07:38:11', '2021-04-28 07:38:11', 0),
(2, 2, 'teamigroup', 'eeeeeeeeeee ededwew', 1, '01095109055', '666', 1, '2021-04-28 07:41:43', '2021-04-28 07:41:43', 0),
(3, 3, 'teamigroup002', '3434', 1, '01095109055', '14141414', 0, '2021-04-28 07:51:58', '2021-04-28 09:05:28', 0),
(4, 4, 'teamigroup', 'tt', 1, '01095109055', '666', 1, '2021-04-28 18:49:39', '2021-04-28 18:53:20', 0),
(5, 5, 'teamigroup', '6th of october', 1, '01010101010', '666', 1, '2021-04-28 19:12:54', '2021-04-28 19:13:10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `user_create_id` int(11) DEFAULT NULL,
  `subscription_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `date_from` date DEFAULT NULL,
  `date_to` date DEFAULT NULL,
  `paid` int(1) NOT NULL DEFAULT 0,
  `total_amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `cancel` int(1) NOT NULL DEFAULT 0,
  `active` int(1) NOT NULL DEFAULT 0,
  `new` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_create_id`, `subscription_id`, `branch_id`, `date_from`, `date_to`, `paid`, `total_amount`, `created_at`, `updated_at`, `cancel`, `active`, `new`) VALUES
(1, 2, 1, NULL, NULL, NULL, 0, NULL, '2021-04-28 09:45:48', '2021-04-28 09:45:48', 0, 0, 1),
(2, 2, 1, 1, '2021-05-04', NULL, 0, '300', '2021-04-28 09:46:44', '2021-04-28 09:46:44', 0, 0, 1),
(3, 3, 3, 2, '2021-04-28', NULL, 1, '1000', '2021-04-28 09:52:36', '2021-04-28 09:52:36', 0, 1, 1),
(4, 3, 2, 2, '2021-04-28', NULL, 1, '600', '2021-04-28 11:06:02', '2021-04-28 11:06:02', 0, 0, 0),
(5, 3, 2, 2, '2021-05-01', NULL, 0, '600', '2021-04-28 18:30:39', '2021-04-28 18:30:39', 0, 0, 0),
(6, 5, 1, 4, '2021-05-01', NULL, 1, '300', '2021-04-28 21:16:25', '2021-04-28 21:16:25', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new` int(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `role`, `new`, `remember_token`, `created_at`, `updated_at`, `cancel`) VALUES
(1, 'احمد شهاب', 'crew.001.002@gmail.com', '1095109055', '2021-04-28 21:33:01', '$2y$10$t93ZjqU9d59MCvD8Wuw44OlmsFQP2Ys/u1q.piIF8Aq1w0wPyrEVS', 'admin', 0, NULL, '2021-04-28 07:21:28', '2021-04-28 07:21:28', 0),
(2, 'احمد شهاب', 'crew.007771.002@gmail.com', '67757556', '2021-04-28 21:32:55', '$2y$10$uBRGJvtK49GBoqtjH/9MOO0OjKTzepKP1nwKnlGfTfWQH0s9ENm1e', NULL, 1, NULL, '2021-04-28 07:41:13', '2021-04-28 07:41:13', 0),
(3, 'احمد شهاب', 'crew.001.003@gmail.com', '151515151515', '2021-04-28 20:05:13', '$2y$10$YQkWP3auO157X5DAK8v8Z.jnxQW4oKkYNOklQ4VW0msOCa/lUijHS', NULL, 0, NULL, '2021-04-28 07:51:24', '2021-04-28 07:51:24', 0),
(4, 'احمد شهاب', 'crew.001111.002@gmail.com', '99969698956', '2021-04-28 21:33:03', '$2y$10$S2fmOXPq.6tdjg49be2IE.CmOTB/v7ljOPb58YDCuB8ihbwnTqD6.', NULL, 0, NULL, '2021-04-28 18:45:33', '2021-04-28 18:45:33', 0),
(5, 'Anwar El-Ansy', 'anwar@gmail.com', '565656565656565', '2021-04-28 21:11:45', '$2y$10$Xcm4KItD2hp0VdgpK5sCgO5aKxs4w.roWrgK9SJI7HMp8hvvqhvPS', NULL, 1, NULL, '2021-04-28 19:11:45', '2021-04-28 19:11:45', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments_details`
--
ALTER TABLE `appointments_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `appointments_details`
--
ALTER TABLE `appointments_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;