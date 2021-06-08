-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 05:57 PM
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
(7, 9, 8, '1', '07:00', '17:00', '07:40', '2021-05-11', '2021-06-10', 1, 0, '2021-05-11 20:36:28', '2021-05-11 20:36:28'),
(8, 9, 8, '2', '07:00', '17:00', '14:20', '2021-05-11', '2021-06-10', 1, 0, '2021-05-11 20:36:36', '2021-05-11 20:36:36'),
(9, 10, 8, '1', '07:00', '17:00', NULL, '2021-05-17', '2021-06-16', 1, 0, '2021-05-17 09:50:54', '2021-05-17 09:50:54'),
(10, 10, 8, '2', '07:00', '17:00', '15:40', '2021-05-17', '2021-06-16', 1, 0, '2021-05-17 09:57:58', '2021-05-17 09:57:58'),
(11, 11, 8, '1', '07:00', '17:00', '15:40', '2021-05-17', '2021-06-16', 1, 0, '2021-05-17 10:04:22', '2021-05-17 10:04:22'),
(12, 11, 8, '2', '07:00', '17:00', '14:20', '2021-05-17', '2021-06-16', 1, 0, '2021-05-17 10:05:49', '2021-05-17 10:05:49'),
(13, 12, 8, '1', '07:00', '17:00', '08:00', '2021-05-17', '2021-06-16', 0, 0, '2021-05-17 15:08:36', '2021-05-17 15:08:36'),
(14, 12, 8, '3', '07:00', '17:00', '07:40', '2021-05-17', '2021-06-16', 0, 0, '2021-05-17 15:08:44', '2021-05-17 15:08:44'),
(15, 13, 8, '2', '07:00', '17:00', '09:20', '2021-05-23', '2021-06-22', 0, 0, '2021-05-23 14:15:21', '2021-05-23 14:15:21'),
(16, 13, 8, '1', '07:00', '17:00', '08:40', '2021-05-23', '2021-06-22', 0, 0, '2021-05-23 14:15:35', '2021-05-23 14:15:35'),
(17, 14, 8, '1', '07:00', '17:00', NULL, '2021-05-24', '2021-06-23', 0, 0, '2021-05-24 10:04:19', '2021-05-24 10:04:19'),
(18, 14, 8, '7', '07:00', '17:00', NULL, '2021-05-24', '2021-06-23', 0, 0, '2021-05-24 10:09:00', '2021-05-24 10:09:00'),
(19, 14, 8, '6', '07:00', '17:00', '07:40', '2021-05-24', '2021-06-23', 0, 0, '2021-05-24 10:11:43', '2021-05-24 10:11:43');

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
  `minutespertask` int(11) DEFAULT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0,
  `active` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bouquets`
--

INSERT INTO `bouquets` (`id`, `name`, `price`, `currancy_symbol`, `dayspersubscription`, `daysperweek`, `workperday`, `minutespertask`, `cancel`, `active`, `created_at`, `updated_at`) VALUES
(1, 'الباقة البرونزية', '100', 'RSA', 30, 2, 1, 20, 0, 0, '2021-04-20 09:12:41', '2021-05-08 19:21:43'),
(2, 'الباقة الفضية', '600', 'RSA', 30, 4, 1, 20, 0, 0, '2021-04-20 09:12:41', '2021-05-04 17:15:45'),
(3, 'الباقة الذهبية', '1000', 'RSA', 30, 7, 2, 20, 0, 0, '2021-04-20 09:16:46', '2021-05-23 11:29:00');

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
(1, '6th oct branch', '78578', 2, '3333333333333333', '3223', 1, 'ttt', '2021-04-28 07:46:33', '2021-04-28 07:46:33', 0, 1),
(2, 'teamigroup002', 'hsdfhgsdf', 3, '1654654654', 'lkjljlkjlkj', 1, 'tarek', '2021-04-28 07:52:15', '2021-05-01 10:52:25', 0, 0),
(3, 'teamigroup002', 'hsdfhgsdf', 3, '1654654654', 'lkjljlkjlkj', 1, 'fgdfg', '2021-04-28 11:36:06', '2021-04-29 09:09:54', 0, 0),
(4, 'teamigroup', '78578', 5, '454354345434', 'eeeeeeeeeee ededwew', 1, 'احمد', '2021-04-28 19:15:49', '2021-04-28 19:15:49', 0, 0),
(5, 'teamigroup002', '02022222', 5, '1654654654', 'lkjljlkjlkj', 1, 'aaaa', '2021-04-28 19:16:10', '2021-04-28 19:16:10', 0, 0),
(6, 'teamigroup002', 'صصص', 3, '1654654654', 'rrr', 1, 'احمد', '2021-04-29 07:24:00', '2021-05-01 10:51:40', 0, 0),
(7, '1', '1', 3, '1', '1', 1, '1', '2021-04-29 07:24:29', '2021-04-29 07:47:42', 0, 0),
(8, 'teamigroup002', '78578', 3, '1654654654', 'lkjljlkjlkj', 1, 'ahmed', '2021-04-29 07:25:46', '2021-04-29 07:25:46', 0, 1),
(9, 'teamigroup002', '78578', 3, '1654654654', 'lkjljlkjlkj', 1, 'احمد', '2021-04-29 07:27:23', '2021-04-29 07:27:23', 0, 0),
(10, 'teamigroup002', '78578', 3, '1654654654', 'lkjljlkjlkj', 1, 'احمد', '2021-04-29 09:10:16', '2021-04-29 09:10:16', 0, 0),
(11, 'teamigroup002', 'hsdfhgsdf', 6, '1654654654', 'lkjljlkjlkj', 1, 'احمد', '2021-05-01 10:55:53', '2021-05-01 10:55:53', 0, 1),
(12, 'teamigroup002', '78578', 7, '1654654654', 'lkjljlkjlkj', 1, 'احمد', '2021-05-02 16:29:41', '2021-05-02 16:29:41', 0, 1),
(13, 'teamigroup002', '78578', 7, '1654654654', 'lkjljlkjlkj', 1, 'ahmed', '2021-05-02 16:29:50', '2021-05-02 16:29:50', 0, 0),
(14, 'teamigroup002', 'hsdfhgsdf', 7, '1654654654', 'lkjljlkjlkj', 1, 'ahmed', '2021-05-02 16:29:58', '2021-05-02 16:29:58', 0, 0),
(15, 'teamigroup002', '78578', 8, '1654654654', 'lkjljlkjlkj', 1, 'احمد', '2021-05-02 18:30:43', '2021-05-02 18:30:43', 0, 0),
(16, 'teamigroup002555555', '78578', 9, '1654654654', 'lkjljlkjlkj', 1, 'احمد', '2021-05-03 08:26:20', '2021-05-03 08:26:32', 0, 0),
(17, 'testing188888', 'ss', 10, '01095109055', '6th of october الحى الثامن 45', 1, 'احمد', '2021-05-04 09:20:36', '2021-05-04 09:23:05', 0, 1),
(18, 'testing1', 'hsdfhgsdf', 10, '01095109055', '6th of october الحى الثامن 45', 1, 'احمد', '2021-05-04 09:22:41', '2021-05-04 09:22:41', 0, 1),
(19, 'Ahmed Elgbaly', 'dsa', 11, '123', 'asd', 1, 'asd', '2021-05-06 10:09:20', '2021-05-06 10:09:20', 0, 1),
(20, 'vodafone', '7878', 10, '0202020202', '7888585', 1, 'tttt', '2021-05-11 11:47:43', '2021-05-11 11:47:43', 0, 1),
(21, 'vodafone', '7878', 10, '0202020202', '7888585', 1, 'tttt', '2021-05-11 11:47:55', '2021-05-11 11:47:55', 0, 1);

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
(1, 'كاش', '', '', 0, 0, '2021-04-29 12:08:06', '2021-04-29 12:08:06', 0, 0),
(2, 'ايداع بنكى', '0000-0000-0000-0000', 'bank', 0, 0, '2021-04-29 12:08:06', '2021-04-29 12:08:06', 0, 0),
(24, 'ahmed shehab', 'sdfd', 'sds', 1, 1, '2021-05-09 20:08:46', '2021-05-09 20:08:46', 1, NULL),
(25, 'fghffg', 'ghfghfg', 'hfghgf', 1, 0, '2021-05-09 20:13:51', '2021-05-09 20:13:51', 1, NULL),
(26, 'ahmed shehab', 'sd', 'sdf', 1, 0, '2021-05-09 20:13:59', '2021-05-09 20:13:59', 1, NULL),
(27, 'ttt', 'ttt', 'ttt', 1, 1, '2021-05-09 20:14:11', '2021-05-09 20:14:11', 1, NULL),
(28, '111', '111', '111', 1, 0, '2021-05-09 20:30:38', '2021-05-09 20:30:38', 1, NULL),
(29, '222', '222', '222', 1, 1, '2021-05-09 20:30:53', '2021-05-09 20:30:53', 1, NULL),
(30, 'ahmed shehab', 'fghtryhrt', 'trytrt', 1, 1, '2021-05-09 20:43:38', '2021-05-09 20:43:38', 1, NULL),
(31, 'vodafone cash', '01095109055', 'vodafone', 1, 0, '2021-05-10 09:53:50', '2021-05-10 09:53:50', 1, NULL),
(32, 'vodafone cash', '123456789', 'vodafone', 0, 0, '2021-05-10 19:07:56', '2021-05-10 19:07:56', 1, NULL),
(33, 'vodafone cashffff', 'fsdfsd', 'sdfdsfds', 1, 0, '2021-05-10 19:08:19', '2021-05-10 19:08:19', 1, NULL),
(34, 'STC', '123456789456789', 'STC', 0, 0, '2021-05-10 20:58:52', '2021-05-10 20:58:52', 1, NULL),
(35, 'ahmed', 'e3433', 'eeee', 1, 0, '2021-05-10 21:00:53', '2021-05-10 21:00:53', 1, NULL),
(36, 'STC', '123456789456789', 'vodafone', 0, 1, '2021-05-11 12:27:46', '2021-05-11 12:27:46', 1, NULL),
(37, 'STC', 'fsdfsd', 'vodafone', 1, 1, '2021-05-11 12:27:55', '2021-05-11 12:27:55', 1, NULL);

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
(2, 'mision', '‎نظرا للتطور التقني والتكنولوجي الذي تشهده المملكة \r\n‎وحرصا منا على تقديم خدماتنا بافضل الوسائل الموفره للوقت والمال ،والقدرة الدائمة على التحكم .\r\n‎فموقعنا يوفر لك القدرة على التحكم بكافة خدماتنا من خلال عدد من الباقات التي تمنحك حرية الاختيار بين عدد من الباقات التي تستطيع من خلالها تحديد مواعيد وعدد الزيارات التي تحتاجها وايضا امكانية تسجيلك لشركتك وفروعها والتحكم بباقة كل فرع على حدى \r\n‎وايضا من خلال موقع Glass Doctors \r\n‎تستطيع تسجيل :\r\n‎العقار السكني (فيلات -منازل -عمارات)  \r\n‎العقار التجاري (شركات -مولات -محلات تجارية -مطاعم -كافيهات -مخابز )\r\n‎عقار صناعي (مصانع -ورش) \r\n\r\n‎الموقع حريص على تقديم افضل الخدمات للعملاء ومتابعة مواعيد الزيارات ومتابعه الفواتير \r\n‎والاجابة على كافة الاستفسارات والعمل الدائم لرفع مستوى الخدمة لننال رضاء العميل \r\n‎من خلال الخدمات المميزة والسرعة والاتقان و الالتزام', 'Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision Our Mision ', 'المهام المهام ', 'Our Mision', 1, 0, 0, '2021-05-26 18:50:43'),
(3, 'service', 'الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات الخدمات ', 'Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service Service ', 'عنوان الخدمة ', 'Service ', 1, 0, 0, '2021-05-26 12:50:26'),
(4, 'company', 'بيانات الشركه', 'ITG', 'الشركة عنوان', 'company citg', 1, 0, 0, '2021-05-23 15:05:11'),
(5, 'address', 'الرياض المدينة', 'Riyadh ', NULL, NULL, 1, 0, 0, '2021-05-24 16:50:43'),
(6, 'email', 'glasdoctor1@galssdoctors.com', 'sales@galssdoctors.com', NULL, NULL, 1, 0, 0, '2021-05-24 16:50:43'),
(7, 'phone', '٢٢٢٢٢٢٢٤٤٤٤٤٤٤٤٤٤', '+966 444 555 666', NULL, NULL, 1, 0, 0, '2021-05-24 16:50:43'),
(8, 'facebook', NULL, 'https://www.facebook.com', NULL, NULL, 1, 0, 0, '2021-05-24 16:16:45'),
(9, 'whatsapp', NULL, 'https://wa.me/+201095109055', NULL, NULL, 1, 0, 0, '2021-05-24 16:16:45'),
(10, 'instgram', NULL, 'https://www.instagram.com/', NULL, NULL, 1, 0, 0, '2021-05-24 16:16:46'),
(11, 'google_map', 'AIzaSyBjCCuQL1P3qR6qti1Hh-eb5WwigF9F_84&callback=initMap&libraries ', 'AIzaSyBjCCuQL1P3qR6qti1Hh-eb5WwigF9F_84&callback=initMap&libraries', NULL, NULL, 1, 0, 0, '2021-05-24 16:50:43');

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
(1, 1, 'احمد شهاب', 'شارع جمال عبد الناصر', 1, '01095109055', '666', 1, '2021-04-28 07:38:11', '2021-04-28 07:38:11', 0),
(2, 2, 'teamigroup', 'eeeeeeeeeee ededwew', 1, '01095109055', '666', 1, '2021-04-28 07:41:43', '2021-04-28 07:41:43', 0),
(3, 3, 'teamigroup002', '3434', 1, '01095109055', '14141414', 0, '2021-04-28 07:51:58', '2021-04-29 09:07:37', 0),
(4, 4, 'teamigroup', 'tt', 1, '01095109055', '666', 1, '2021-04-28 18:49:39', '2021-04-28 18:53:20', 0),
(5, 5, 'testing1', '6th of october الحى الثامن 45', 1, '01095109055', '777', 1, '2021-04-28 19:12:54', '2021-04-28 19:13:10', 0),
(6, 6, 'teamigroup002', 'lkjljlkjlkj', 1, '1654654654', '666', 1, '2021-05-01 10:55:13', '2021-05-01 10:55:13', 0),
(7, 9, 'teamigroup002', 'lkjljlkjlkj', 1, '1654654654', '666', 1, '2021-05-02 16:29:30', '2021-05-02 16:29:30', 0),
(8, 10, 'teamigroup002', 'lkjljlkjlkj', 1, '1654654654', '666', 1, '2021-05-02 18:30:34', '2021-05-02 18:30:34', 0),
(9, 11, 'teamigroup002', 'lkjljlkjlkj', 1, '1654654654', '666', 1, '2021-05-03 08:26:04', '2021-05-03 08:26:41', 0),
(10, 8, 'testing1', '6th of october الحى الثامن 45', 1, '333', 'qqq', 1, '2021-05-04 09:09:14', '2021-05-11 11:42:43', 0),
(11, 12, 'Ahmed Elgbaly', 'asd', 1, '123', 'asd', 1, '2021-05-06 10:09:01', '2021-05-06 10:09:01', 0);

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `cancel` int(1) NOT NULL DEFAULT 0,
  `active` int(1) NOT NULL DEFAULT 0,
  `new` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_create_id`, `subscription_id`, `branch_id`, `date_from`, `date_to`, `paid`, `total_amount`, `payment_method`, `created_at`, `updated_at`, `cancel`, `active`, `new`) VALUES
(9, 8, 1, 17, '2021-05-11', '2021-06-10', 0, '100', 34, '2021-05-11 20:31:28', '2021-05-11 20:31:28', 1, 0, 1),
(10, 8, 1, 17, '2021-05-17', '2021-06-16', 0, NULL, NULL, '2021-05-17 09:50:44', '2021-05-17 09:50:44', 1, 0, 1),
(11, 8, 1, 17, '2021-05-17', '2021-06-16', 0, NULL, NULL, '2021-05-17 10:04:10', '2021-05-17 10:04:10', 1, 0, 1),
(12, 8, 1, 17, '2021-05-17', '2021-06-16', 1, '100', 34, '2021-05-17 15:08:28', '2021-05-17 15:08:28', 0, 0, 1),
(13, 8, 1, 20, '2021-05-23', '2021-06-22', 0, '100', 34, '2021-05-23 14:11:00', '2021-05-23 14:11:00', 0, 0, 1),
(14, 8, 1, 17, '2021-05-24', '2021-06-23', 0, NULL, NULL, '2021-05-24 10:00:24', '2021-05-24 10:00:24', 0, 0, 1),
(15, 8, 2, 21, '2021-05-24', '2021-06-23', 0, NULL, NULL, '2021-05-24 10:17:40', '2021-05-24 10:17:40', 0, 0, 1);

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
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new` int(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `role`, `lang`, `new`, `remember_token`, `created_at`, `updated_at`, `cancel`) VALUES
(1, 'teamigroup002', 'crew.001.002@gmail.com', '01095109055', '2021-05-24 14:01:44', '$2y$10$INrxYcUYFJfOZygooPSmPeGswKxlSBekXK7hBnD4i/xgb19jNGUIi', 'admin', 'ar', 0, NULL, '2021-04-28 07:21:28', '2021-04-28 07:21:28', 0),
(2, 'احمد شهاب', 'crew.007771.002@gmail.com', '67757556', '2021-05-03 12:39:24', '$2y$10$uBRGJvtK49GBoqtjH/9MOO0OjKTzepKP1nwKnlGfTfWQH0s9ENm1e', NULL, NULL, 0, NULL, '2021-04-28 07:41:13', '2021-04-28 07:41:13', 0),
(3, '888888ahmed Elgbalyahmed ', 'ssssaemad@hotmail.com88888', '01095109055', '2021-05-03 20:12:42', '$2y$10$YQkWP3auO157X5DAK8v8Z.jnxQW4oKkYNOklQ4VW0msOCa/lUijHS', NULL, NULL, 1, NULL, '2021-04-28 07:51:24', '2021-04-28 07:51:24', 0),
(4, 'احمد شهاب', 'crew.001111.002@gmail.com', '99969698956', '2021-04-28 21:33:03', '$2y$10$S2fmOXPq.6tdjg49be2IE.CmOTB/v7ljOPb58YDCuB8ihbwnTqD6.', NULL, NULL, 0, NULL, '2021-04-28 18:45:33', '2021-04-28 18:45:33', 0),
(5, 'Anwar El-Ansy', 'anwar@gmail.com', '565656565656565', '2021-04-28 21:11:45', '$2y$10$Xcm4KItD2hp0VdgpK5sCgO5aKxs4w.roWrgK9SJI7HMp8hvvqhvPS', NULL, NULL, 1, NULL, '2021-04-28 19:11:45', '2021-04-28 19:11:45', 0),
(6, 'teamigroup002', 'crew.001.003333@gmail.com', '0101010101010', '2021-05-01 12:54:16', '$2y$10$8FlqyW.7PqSWptYX9LVf6.DELTfpDmSMsm4uU.L5AjGKsBvQUTBsO', NULL, NULL, 1, NULL, '2021-05-01 10:54:16', '2021-05-01 10:54:16', 0),
(7, 'teamigroup002', 'crew.001.00ddd2@gmail.com', '453345334', '2021-05-02 12:16:28', '$2y$10$ZxhKoychnbr3gzb.dxMEMe1l7wgdBC3GZiZ/s4vT2WaAMhvh.wm42', NULL, NULL, 1, NULL, '2021-05-02 10:16:28', '2021-05-02 10:16:28', 0),
(8, 'Team I Group', 'crew.001.003@gmail.com', '01095109055', '2021-05-23 14:29:13', '$2y$10$5OJCt.IxWx.8QzZ0rruhwulI03hsyscylfNbeZ3hkvu1KDapzOjIG', NULL, 'ar', 0, NULL, '2021-05-02 10:28:45', '2021-05-02 10:28:45', 0),
(9, 'teamigroup002555', 'crew.00001.003@gmail.com', '8989898989898', '2021-05-03 12:39:30', '$2y$10$MhHS8MDWsOZs6NBHl4xnxO55.zrIgbQKbfEov/rXqGCbXvEB13YbO', NULL, NULL, 0, NULL, '2021-05-02 16:28:39', '2021-05-02 16:28:39', 0),
(10, 'teamigroup002', 'crew.00551.002@gmail.com', '854564654', '2021-05-03 12:39:33', '$2y$10$Ker8mOpwE28203orDlNE3evZLvQYhNM028.yFv3xhb6Bq3R7cAYia', NULL, NULL, 0, NULL, '2021-05-02 18:30:17', '2021-05-02 18:30:17', 0),
(11, 'teamigroup002', 'crew.07701.002@gmail.com', '6549879', '2021-05-03 12:39:35', '$2y$10$htK9clJgqwP0SMjSm18swubCwnVgd9r5DgkYwiMtM4wM8sJ.eRuwG', NULL, NULL, 0, NULL, '2021-05-03 08:25:08', '2021-05-03 08:25:08', 0),
(12, 'Ahmed Elgbaly', 'ahmedelgbaly30@gmail.com', '4418548', '2021-05-06 12:08:23', '$2y$10$VeaX2Gplq6fo7QaWpBJaO.I.oRBH1KmmRlQ9/YGDCgjhWhAmaDdHe', NULL, NULL, 1, NULL, '2021-05-06 10:08:23', '2021-05-06 10:08:23', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `publicwebcontents`
--
ALTER TABLE `publicwebcontents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
