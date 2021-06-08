-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 01:44 PM
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
  `day_name_en` varchar(255) DEFAULT NULL,
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

INSERT INTO `appointments` (`id`, `country_id`, `city_id`, `day_name`, `day_name_en`, `fromhour`, `tohour`, `fromampm`, `toampm`, `active`, `cancel`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'السبت', 'Saturday', '07:00', '17:00', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(2, 1, 1, 'الأحد', 'Sunday', '07:00', '17:00', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(3, 1, 1, 'الأثنين', 'Monday', '07:00', '17:00', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(4, 1, 1, 'الثلاثاء', 'Tuesday', '07:00', '17:00', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(5, 1, 1, 'الأربعاء', 'Wednesday', '07:00', '17:00', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(6, 1, 1, 'الخميس', 'Thursday', '07:00', '17:00', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(7, 1, 1, 'الجمعة', 'Friday', '07:00', '17:00', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(8, 1, 2, 'السبت', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(9, 1, 2, 'الأحد', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(10, 1, 2, 'الأثنين', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(11, 1, 2, 'الثلاثاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(12, 1, 2, 'الأربعاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(13, 1, 2, 'الخميس', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(14, 1, 2, 'الجمعة', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(15, 1, 3, 'السبت', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(16, 1, 3, 'الأحد', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(17, 1, 3, 'الأثنين', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(18, 1, 3, 'الثلاثاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(19, 1, 3, 'الأربعاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(20, 1, 3, 'الخميس', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(21, 1, 3, 'الجمعة', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(22, 1, 4, 'السبت', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(23, 1, 4, 'الأحد', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(24, 1, 4, 'الأثنين', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(25, 1, 4, 'الثلاثاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(26, 1, 4, 'الأربعاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(27, 1, 4, 'الخميس', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(28, 1, 4, 'الجمعة', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(29, 1, 5, 'السبت', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(30, 1, 5, 'الأحد', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(31, 1, 5, 'الأثنين', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(32, 1, 5, 'الثلاثاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(33, 1, 5, 'الأربعاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(34, 1, 5, 'الخميس', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(35, 1, 5, 'الجمعة', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(36, 1, 6, 'السبت', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(37, 1, 6, 'الأحد', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(38, 1, 6, 'الأثنين', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(39, 1, 6, 'الثلاثاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(40, 1, 6, 'الأربعاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(41, 1, 6, 'الخميس', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(42, 1, 6, 'الجمعة', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(43, 1, 7, 'السبت', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(44, 1, 7, 'الأحد', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(45, 1, 7, 'الأثنين', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(46, 1, 7, 'الثلاثاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(47, 1, 7, 'الأربعاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(48, 1, 7, 'الخميس', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(50, 1, 7, 'الجمعة', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(51, 1, 8, 'السبت', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(52, 1, 8, 'الأحد', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(53, 1, 8, 'الأثنين', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(54, 1, 8, 'الثلاثاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(56, 1, 8, 'الأربعاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(57, 1, 8, 'الخميس', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(59, 1, 8, 'الجمعة', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(60, 1, 9, 'السبت', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(61, 1, 9, 'الأحد', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(62, 1, 9, 'الأثنين', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(63, 1, 9, 'الثلاثاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(64, 1, 9, 'الأربعاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(65, 1, 9, 'الخميس', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(66, 1, 9, 'الجمعة', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(67, 1, 10, 'السبت', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(68, 1, 10, 'الأحد', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(69, 1, 10, 'الأثنين', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(70, 1, 10, 'الثلاثاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(71, 1, 10, 'الأربعاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(72, 1, 10, 'الخميس', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(73, 1, 10, 'الجمعة', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(74, 1, 11, 'السبت', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(75, 1, 11, 'الأحد', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(76, 1, 11, 'الأثنين', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(77, 1, 11, 'الثلاثاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(78, 1, 11, 'الأربعاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(79, 1, 11, 'الخميس', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(80, 1, 11, 'الجمعة', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(81, 1, 12, 'السبت', NULL, '07', '17', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(82, 1, 12, 'الأحد', NULL, '07', '14', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(83, 1, 12, 'الأثنين', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(84, 1, 12, 'الثلاثاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(85, 1, 12, 'الأربعاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(86, 1, 12, 'الخميس', NULL, '10', '13', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(87, 1, 12, 'الجمعة', NULL, '07', '13', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(88, 1, 13, 'السبت', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(89, 1, 13, 'الأحد', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(90, 1, 13, 'الأثنين', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(91, 1, 13, 'الثلاثاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(92, 1, 13, 'الأربعاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(93, 1, 13, 'الخميس', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(94, 1, 13, 'الجمعة', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(95, 1, 14, 'السبت', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(96, 1, 14, 'الأحد', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(97, 1, 14, 'الأثنين', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(98, 1, 14, 'الثلاثاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(99, 1, 14, 'الأربعاء', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(100, 1, 14, 'الخميس', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(101, 1, 14, 'الجمعة', NULL, '07', '20', 'AM', 'PM', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `appointments_details`
--

CREATE TABLE `appointments_details` (
  `id` int(11) NOT NULL,
  `appointments_id` int(11) DEFAULT NULL,
  `create_user_id` int(11) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `hour_from` varchar(255) DEFAULT NULL,
  `hour_to` varchar(255) DEFAULT NULL,
  `hour_choosed` varchar(255) DEFAULT NULL,
  `bouquet_start_date` date DEFAULT NULL,
  `bouquet_end_date` date DEFAULT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0,
  `active` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments_details`
--

INSERT INTO `appointments_details` (`id`, `appointments_id`, `create_user_id`, `day`, `hour_from`, `hour_to`, `hour_choosed`, `bouquet_start_date`, `bouquet_end_date`, `cancel`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 37, '1', '07:00', '17:00', '07:00', '2021-06-08', '2021-07-07', 1, 0, '2021-06-08 09:12:42', '2021-06-08 09:12:42'),
(2, 1, 37, '2', '07:00', '17:00', '07:00', '2021-06-08', '2021-07-07', 1, 0, '2021-06-08 09:12:55', '2021-06-08 09:12:55'),
(3, 2, 37, '1', '07:00', '17:00', '07:00', '2021-06-08', '2021-07-07', 1, 0, '2021-06-08 09:49:28', '2021-06-08 09:49:28'),
(4, 2, 37, '2', '07:00', '17:00', '07:00', '2021-06-08', '2021-07-07', 1, 0, '2021-06-08 09:49:36', '2021-06-08 09:49:36'),
(5, 3, 37, '1', '07:00', '17:00', '07:00', '2021-06-08', '2021-07-07', 0, 0, '2021-06-08 10:03:41', '2021-06-08 10:03:41'),
(6, 3, 37, '2', '07:00', '17:00', '07:00', '2021-06-08', '2021-07-07', 0, 0, '2021-06-08 10:04:03', '2021-06-08 10:04:03'),
(7, 4, 37, '1', '07:00', '17:00', '07:20', '2021-07-01', '2021-07-30', 1, 0, '2021-06-08 10:59:38', '2021-06-08 10:59:38'),
(8, 4, 37, '2', '07:00', '17:00', '07:20', '2021-07-01', '2021-07-30', 1, 0, '2021-06-08 10:59:46', '2021-06-08 10:59:46'),
(9, 5, 37, '1', '07:00', '17:00', '07:20', '2021-06-08', '2021-07-07', 0, 0, '2021-06-08 11:40:54', '2021-06-08 11:40:54'),
(10, 5, 37, '2', '07:00', '17:00', '07:20', '2021-06-08', '2021-07-07', 0, 0, '2021-06-08 11:41:02', '2021-06-08 11:41:02');

-- --------------------------------------------------------

--
-- Table structure for table `bouquets`
--

CREATE TABLE `bouquets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `currancy_symbol` varchar(255) NOT NULL,
  `dayspersubscription` int(11) DEFAULT NULL,
  `daysperweek` int(11) NOT NULL,
  `workperday` int(11) DEFAULT NULL,
  `minutespertask` int(11) DEFAULT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0,
  `active` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bouquets`
--

INSERT INTO `bouquets` (`id`, `name`, `name_en`, `price`, `currancy_symbol`, `dayspersubscription`, `daysperweek`, `workperday`, `minutespertask`, `cancel`, `active`, `created_at`, `updated_at`) VALUES
(1, 'الباقة البرونزية', 'Bronze Package', '100', 'RS', 30, 2, 1, 20, 0, 0, '2021-04-20 09:12:41', '2021-05-31 05:52:21'),
(2, 'الباقة الفضية', '\r\nSilver  Package', '600', 'RS', 30, 4, 1, 20, 0, 0, '2021-04-20 09:12:41', '2021-05-31 05:52:32'),
(3, 'الباقة الذهبية', 'Golden Package', '1000', 'RS', 30, 7, 2, 20, 0, 0, '2021-04-20 09:16:46', '2021-05-31 05:52:43');

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
(1, 'testwallet', '112', 1, '375736', 'st 11', 1, 'ahmed', '2021-06-08 07:12:16', '2021-06-08 07:12:16', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `city_code` varchar(255) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `cancel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `name`, `name_en`, `city_code`, `active`, `created_at`, `updated_at`, `cancel`) VALUES
(1, 1, 'الرياض', 'Riyadh', '', 0, '2021-04-21 08:30:50', '2021-04-21 08:30:50', 0),
(2, 1, 'جدة', NULL, NULL, 1, '2021-04-21 08:33:55', '2021-04-21 08:33:55', 1),
(3, 1, 'بريدة', NULL, NULL, 1, '2021-04-21 08:33:55', '2021-04-21 08:33:55', 1),
(4, 1, 'مكة المكرمة', NULL, NULL, 1, '2021-04-21 08:35:13', '2021-04-21 08:35:13', 1),
(5, 1, 'المدينة المنورة', NULL, NULL, 1, '2021-04-21 08:35:13', '2021-04-21 08:35:13', 1),
(6, 1, 'حائل', NULL, NULL, 1, '2021-04-21 08:35:51', '2021-04-21 08:35:51', 1),
(7, 1, 'سكاكا', NULL, NULL, 1, '2021-04-21 08:35:51', '2021-04-21 08:35:51', 1),
(8, 1, 'تبوك', NULL, NULL, 1, '2021-04-21 08:36:16', '2021-04-21 08:36:16', 1),
(9, 1, 'عرعر', NULL, NULL, 1, '2021-04-21 08:36:16', '2021-04-21 08:36:16', 1),
(10, 1, 'أبهاا', NULL, NULL, 1, '2021-04-21 08:36:52', '2021-04-21 08:36:52', 1),
(11, 1, 'جازان', NULL, NULL, 1, '2021-04-21 08:36:52', '2021-04-21 08:36:52', 1),
(12, 1, 'نجران', NULL, NULL, 1, '2021-04-21 08:37:45', '2021-04-21 08:37:45', 1),
(13, 1, 'الباحة', NULL, NULL, 1, '2021-04-21 08:37:45', '2021-04-21 08:37:45', 1),
(14, 1, 'الدمام', NULL, NULL, 1, '2021-04-21 08:38:21', '2021-04-21 08:38:21', 1);

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
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0,
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `cancel`, `active`) VALUES
(1, 'عربى', 'ar', 0, 0),
(2, 'English', 'en', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `new` int(1) NOT NULL DEFAULT 0,
  `cancel` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `money_wallet`
--

CREATE TABLE `money_wallet` (
  `id` int(11) NOT NULL,
  `companyid` int(11) DEFAULT NULL,
  `current_amount` varchar(255) DEFAULT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0,
  `entry_date` timestamp NULL DEFAULT current_timestamp(),
  `entry_userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `money_wallet`
--

INSERT INTO `money_wallet` (`id`, `companyid`, `current_amount`, `cancel`, `entry_date`, `entry_userid`) VALUES
(1, 1, '20', 0, '2021-06-08 09:17:21', 1),
(2, 1, '-20', 0, '2021-06-08 09:54:28', 1),
(3, 1, '100', 0, '2021-06-08 09:55:11', 1),
(4, 1, '1200', 0, '2021-06-08 11:26:24', 1),
(5, 1, '3000', 0, '2021-06-08 11:39:27', 1),
(6, 1, '10000', 0, '2021-06-08 11:40:09', 1);

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
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0,
  `active` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_create_id` int(11) DEFAULT NULL,
  `user_update_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `number`, `bank_name`, `cancel`, `active`, `created_at`, `updated_at`, `user_create_id`, `user_update_id`) VALUES
(1, 'كاش', '', '', 0, 1, '2021-04-29 12:08:06', '2021-04-29 12:08:06', 0, 0),
(2, 'ايداع بنكى', '0000-0000-0000-0000', 'bank', 0, 1, '2021-04-29 12:08:06', '2021-04-29 12:08:06', 0, 0),
(24, 'ahmed shehab', 'sdfd', 'sds', 1, 1, '2021-05-09 20:08:46', '2021-05-09 20:08:46', 1, NULL),
(25, 'fghffg', 'ghfghfg', 'hfghgf', 1, 0, '2021-05-09 20:13:51', '2021-05-09 20:13:51', 1, NULL),
(26, 'ahmed shehab', 'sd', 'sdf', 1, 0, '2021-05-09 20:13:59', '2021-05-09 20:13:59', 1, NULL),
(27, 'ttt', 'ttt', 'ttt', 1, 1, '2021-05-09 20:14:11', '2021-05-09 20:14:11', 1, NULL),
(28, '111', '111', '111', 1, 0, '2021-05-09 20:30:38', '2021-05-09 20:30:38', 1, NULL),
(29, '222', '222', '222', 1, 1, '2021-05-09 20:30:53', '2021-05-09 20:30:53', 1, NULL),
(30, 'ahmed shehab', 'fghtryhrt', 'trytrt', 1, 1, '2021-05-09 20:43:38', '2021-05-09 20:43:38', 1, NULL),
(31, 'vodafone cash', '01095109055', 'vodafone', 1, 0, '2021-05-10 09:53:50', '2021-05-10 09:53:50', 1, NULL),
(32, 'vodafone cash', '123456789', 'vodafone', 0, 1, '2021-05-10 19:07:56', '2021-05-10 19:07:56', 1, NULL),
(33, 'vodafone cashffff', 'fsdfsd', 'sdfdsfds', 1, 0, '2021-05-10 19:08:19', '2021-05-10 19:08:19', 1, NULL),
(34, 'STC', '123456789456789', 'STC', 0, 1, '2021-05-10 20:58:52', '2021-05-10 20:58:52', 1, NULL),
(35, 'ahmed', 'e3433', 'eeee', 1, 0, '2021-05-10 21:00:53', '2021-05-10 21:00:53', 1, NULL),
(36, 'STC', '123456789456789', 'vodafone', 1, 1, '2021-05-11 12:27:46', '2021-05-11 12:27:46', 1, NULL),
(37, 'STC', 'fsdfsd', 'vodafone', 1, 1, '2021-05-11 12:27:55', '2021-05-11 12:27:55', 1, NULL),
(38, 'سحب من  المحفظة المالية', 'محفظة مالية', 'لا يوجد', 0, 0, '2021-06-06 08:56:59', '2021-06-06 08:56:59', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `publicwebcontents`
--

CREATE TABLE `publicwebcontents` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `title_ar` text DEFAULT NULL,
  `title_en` text DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `cancel` int(1) DEFAULT 0,
  `active` int(1) DEFAULT 0,
  `update_date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publicwebcontents`
--

INSERT INTO `publicwebcontents` (`id`, `name`, `desc_ar`, `desc_en`, `title_ar`, `title_en`, `admin_id`, `cancel`, `active`, `update_date_time`) VALUES
(1, 'vision', 'رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع رؤية الموقع ', 'Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision Site Vision ', 'رؤية الموقع ', 'Site Vision ', 1, 0, 0, '2021-05-25 17:07:32'),
(2, 'mision', '‎نظرا للتطور التقني والتكنولوجي الذي تشهده المملكة \r\n‎وحرصا منا على تقديم خدماتنا بافضل الوسائل الموفره للوقت والمال ،والقدرة الدائمة على التحكم .\r\n‎فموقعنا يوفر لك القدرة على التحكم بكافة خدماتنا من خلال عدد من الباقات التي تمنحك حرية الاختيار بين عدد من الباقات التي تستطيع من خلالها تحديد مواعيد وعدد الزيارات التي تحتاجها وايضا امكانية تسجيلك لشركتك وفروعها والتحكم بباقة كل فرع على حدى \r\n‎وايضا من خلال موقع Glass Doctors \r\n‎تستطيع تسجيل :\r\n‎العقار السكني (فيلات -منازل -عمارات)  \r\n‎العقار التجاري (شركات -مولات -محلات تجارية -مطاعم -كافيهات -مخابز )\r\n‎عقار صناعي (مصانع -ورش) \r\n\r\n‎الموقع حريص على تقديم افضل الخدمات للعملاء ومتابعة مواعيد الزيارات ومتابعه الفواتير \r\n‎والاجابة على كافة الاستفسارات والعمل الدائم لرفع مستوى الخدمة لننال رضاء العميل \r\n‎من خلال الخدمات المميزة والسرعة والاتقان و الالتزام', 'Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision ', 'المهام الجديدة', 'Our Mision', 1, 0, 0, '2021-06-05 12:31:35'),
(3, 'service', 'الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات ', 'Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service ', 'عنوان الخدمة ', 'Service ', 1, 0, 0, '2021-05-26 12:50:26'),
(4, 'company', 'بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه بيانات الشركه ', 'company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors company glass doctors ', 'الشركة عنوان', 'company glass doctors', 1, 0, 0, '2021-05-30 22:12:38'),
(5, 'address', 'الرياض 111555 شارع بناية ', 'Riyadh St. 111 Buding 522', NULL, NULL, 1, 0, 0, '2021-05-31 13:13:13'),
(6, 'email', 'sales@galssdoctors.com', 'sales@galssdoctors.com', NULL, NULL, 1, 0, 0, '2021-05-31 13:13:13'),
(7, 'phone', '٢٢٢٢٢٢٢٤٤٤٤٤٤٤٤٤٤', '+966 444 555 666', NULL, NULL, 1, 0, 0, '2021-05-31 13:13:13'),
(8, 'facebook', NULL, 'https://www.facebook.com', NULL, NULL, 1, 0, 0, '2021-05-24 16:16:45'),
(9, 'whatsapp', NULL, 'https://wa.me/+201095109055', NULL, NULL, 1, 0, 0, '2021-05-24 16:16:45'),
(10, 'instgram', NULL, 'https://www.instagram.com/', NULL, NULL, 1, 0, 0, '2021-05-24 16:16:46'),
(11, 'google_map', 'AIzaSyBjCCuQL1P3qR6qti1Hh-eb5WwigF9F_84&callback=initMap&libraries ', 'AIzaSyBjCCuQL1P3qR6qti1Hh-eb5WwigF9F_84&callback=initMap&libraries', NULL, NULL, 1, 0, 0, '2021-05-31 13:13:13');

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
(1, 37, 'tig', 'st 11', 1, '375736', '444777', 1, '2021-06-08 07:11:53', '2021-06-08 07:11:53', 0);

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
  `payment_method` int(11) DEFAULT NULL,
  `cancel_request` int(1) DEFAULT 0,
  `cancel_request_dat` timestamp NOT NULL DEFAULT current_timestamp(),
  `stoped` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `cancel` int(1) NOT NULL DEFAULT 0,
  `active` int(1) NOT NULL DEFAULT 0,
  `new` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_create_id`, `subscription_id`, `branch_id`, `date_from`, `date_to`, `paid`, `total_amount`, `payment_method`, `cancel_request`, `cancel_request_dat`, `stoped`, `created_at`, `updated_at`, `cancel`, `active`, `new`) VALUES
(1, 37, 1, 1, '2021-06-08', '2021-07-07', 0, '100', 38, 1, '2021-06-08 09:12:26', 1, '2021-06-08 09:12:26', '2021-06-08 09:12:26', 1, 1, 1),
(2, 37, 1, 1, '2021-06-08', '2021-07-07', 1, '100', 38, 1, '2021-06-08 09:49:17', 1, '2021-06-08 09:49:17', '2021-06-08 09:49:17', 1, 1, 1),
(3, 37, 1, 1, '2021-06-08', '2021-07-07', 1, '100', 38, 0, '2021-06-08 10:03:23', 0, '2021-06-08 10:03:23', '2021-06-08 10:03:23', 0, 1, 1),
(4, 37, 1, 1, '2021-07-01', '2021-07-30', 0, '100', 38, 0, '2021-06-08 10:59:24', 1, '2021-06-08 10:59:24', '2021-06-08 10:59:24', 1, 1, 1),
(5, 37, 1, 1, '2021-06-08', '2021-07-07', 1, '100', 38, 0, '2021-06-08 11:40:45', 0, '2021-06-08 11:40:45', '2021-06-08 11:40:45', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new` int(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `mobile`, `password`, `role`, `lang`, `blang`, `new`, `remember_token`, `created_at`, `updated_at`, `cancel`) VALUES
(1, 'teamigroup002', 'crew.001.002@gmail.com', NULL, '01095109055', '$2y$10$INrxYcUYFJfOZygooPSmPeGswKxlSBekXK7hBnD4i/xgb19jNGUIi', 'admin', 'en', NULL, 0, NULL, '2021-04-28 07:21:28', '2021-04-28 07:21:28', 0),
(37, 'ahmed', 'crew.001.003@gmail.com', NULL, '0109510905555', '$2y$10$lTO1I.JjQ98Njnom4GDLW.LudDDSObLgBnqUROz.kYfqd2x33vdCq', NULL, 'ar', NULL, 1, NULL, '2021-06-08 07:11:31', '2021-06-08 07:11:31', 0);

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
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money_wallet`
--
ALTER TABLE `money_wallet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publicwebcontents`
--
ALTER TABLE `publicwebcontents`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `money_wallet`
--
ALTER TABLE `money_wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `publicwebcontents`
--
ALTER TABLE `publicwebcontents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
