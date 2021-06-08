-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 11:45 PM
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
  `active` int(1) NOT NULL DEFAULT 0,
  `cancel` int(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `country_id`, `city_id`, `day_name`, `fromhour`, `tohour`, `active`, `cancel`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'السبت', '07', '17', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(2, 1, 1, 'الأحد', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(3, 1, 1, 'الأثنين', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(4, 1, 1, 'الثلاثاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(5, 1, 1, 'الأربعاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(6, 1, 1, 'الخميس', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(7, 1, 1, 'الجمعة', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(8, 1, 2, 'السبت', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(9, 1, 2, 'الأحد', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(10, 1, 2, 'الأثنين', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(11, 1, 2, 'الثلاثاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(12, 1, 2, 'الأربعاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(13, 1, 2, 'الخميس', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(14, 1, 2, 'الجمعة', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(15, 1, 3, 'السبت', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(16, 1, 3, 'الأحد', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(17, 1, 3, 'الأثنين', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(18, 1, 3, 'الثلاثاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(19, 1, 3, 'الأربعاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(20, 1, 3, 'الخميس', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(21, 1, 3, 'الجمعة', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(22, 1, 4, 'السبت', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(23, 1, 4, 'الأحد', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(24, 1, 4, 'الأثنين', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(25, 1, 4, 'الثلاثاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(26, 1, 4, 'الأربعاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(27, 1, 4, 'الخميس', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(28, 1, 4, 'الجمعة', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(29, 1, 5, 'السبت', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(30, 1, 5, 'الأحد', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(31, 1, 5, 'الأثنين', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(32, 1, 5, 'الثلاثاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(33, 1, 5, 'الأربعاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(34, 1, 5, 'الخميس', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(35, 1, 5, 'الجمعة', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(36, 1, 6, 'السبت', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(37, 1, 6, 'الأحد', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(38, 1, 6, 'الأثنين', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(39, 1, 6, 'الثلاثاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(40, 1, 6, 'الأربعاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(41, 1, 6, 'الخميس', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(42, 1, 6, 'الجمعة', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(43, 1, 7, 'السبت', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(44, 1, 7, 'الأحد', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(45, 1, 7, 'الأثنين', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(46, 1, 7, 'الثلاثاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(47, 1, 7, 'الأربعاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(48, 1, 7, 'الخميس', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(50, 1, 7, 'الجمعة', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(51, 1, 8, 'السبت', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(52, 1, 8, 'الأحد', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(53, 1, 8, 'الأثنين', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(54, 1, 8, 'الثلاثاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(56, 1, 8, 'الأربعاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(57, 1, 8, 'الخميس', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(59, 1, 8, 'الجمعة', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(60, 1, 9, 'السبت', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(61, 1, 9, 'الأحد', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(62, 1, 9, 'الأثنين', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(63, 1, 9, 'الثلاثاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(64, 1, 9, 'الأربعاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(65, 1, 9, 'الخميس', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(66, 1, 9, 'الجمعة', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(67, 1, 10, 'السبت', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(68, 1, 10, 'الأحد', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(69, 1, 10, 'الأثنين', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(70, 1, 10, 'الثلاثاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(71, 1, 10, 'الأربعاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(72, 1, 10, 'الخميس', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(73, 1, 10, 'الجمعة', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(74, 1, 11, 'السبت', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(75, 1, 11, 'الأحد', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(76, 1, 11, 'الأثنين', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(77, 1, 11, 'الثلاثاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(78, 1, 11, 'الأربعاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(79, 1, 11, 'الخميس', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(80, 1, 11, 'الجمعة', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(81, 1, 12, 'السبت', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(82, 1, 12, 'الأحد', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(83, 1, 12, 'الأثنين', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(84, 1, 12, 'الثلاثاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(85, 1, 12, 'الأربعاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(86, 1, 12, 'الخميس', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(87, 1, 12, 'الجمعة', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(88, 1, 13, 'السبت', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(89, 1, 13, 'الأحد', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(90, 1, 13, 'الأثنين', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(91, 1, 13, 'الثلاثاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(92, 1, 13, 'الأربعاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(93, 1, 13, 'الخميس', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(94, 1, 13, 'الجمعة', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(95, 1, 14, 'السبت', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(96, 1, 14, 'الأحد', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(97, 1, 14, 'الأثنين', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(98, 1, 14, 'الثلاثاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(99, 1, 14, 'الأربعاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(100, 1, 14, 'الخميس', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(101, 1, 14, 'الجمعة', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bouquets`
--

INSERT INTO `bouquets` (`id`, `name`, `price`, `currancy_symbol`, `dayspersubscription`, `daysperweek`, `workperday`, `cancel`, `created_at`, `updated_at`) VALUES
(1, 'الباقة الفضية', '300', 'ريال', 30, 2, 1, 0, '2021-04-20 09:12:41', '2021-04-20 09:12:41'),
(2, 'الباقة البرونزية', '600', 'ريال', 30, 4, 1, 0, '2021-04-20 09:12:41', '2021-04-20 09:12:41'),
(3, 'الباقة الذهبية', '1000', 'ريال', 30, 7, 2, 0, '2021-04-20 09:16:46', '2021-04-20 09:16:46');

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
  `cancel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `code`, `co_id`, `phone`, `address`, `city`, `response_person`, `created_at`, `updated_at`, `cancel`) VALUES
(1, 'فرع اكتوبر', NULL, 9, '5465465', 'النصر', 0, 'احمد', '2021-04-19 08:29:31', '2021-04-19 08:29:31', 0),
(2, 'teamigroup', '78578', 9, '01095109055', '3434 llll', 0, 'احمد', '2021-04-19 08:46:58', '2021-04-19 08:46:58', 0),
(3, '777', 'tretrer', 13, '3435435434543', 'terter', 0, 'dffgfd', '2021-04-19 08:53:10', '2021-04-20 11:08:15', 0),
(4, 'teamigroup', '78578', 13, '01095109055', 'eeeeeeeeeee ededwew', 0, 'احمد', '2021-04-19 08:58:33', '2021-04-19 08:58:33', 0),
(5, 'teamigroup', '78578', 13, '01095109055', 'eeeeeeeeeee ededwew', 0, 'احمد', '2021-04-19 09:00:08', '2021-04-19 09:00:08', 0),
(6, 'احمد شهاب', NULL, 13, '454', 'eeeeeeeeeee ededwew', 0, 'ahmed', '2021-04-19 09:02:40', '2021-04-20 11:12:47', 0),
(7, 'teamigroup', 'hsdfhgsdf', 13, '454354345434', 'eeeeeeeeeee ededwew', 0, 'احمد', '2021-04-19 09:24:49', '2021-04-19 09:24:49', 0),
(8, 'alr', '78787', 14, '9798798', '878787', 0, 'fgdfg', '2021-04-19 10:11:39', '2021-04-19 10:11:39', 0),
(9, 'teamigroup', '78578', 14, '01095109055', 'eeeeeeeeeee ededwew', 0, 'ahmed', '2021-04-19 10:14:35', '2021-04-19 10:14:35', 0),
(10, 'teamigroup', 'hsdfhgsdf', 14, '01095109055', 'eeeeeeeeeee ededwew', 0, 'fgdfg', '2021-04-19 10:17:53', '2021-04-19 10:17:53', 0),
(11, 'احمد شهاب333', '78578', 14, '01095109055', 'eeeeeeeeeee ededwew', 0, 'tarek', '2021-04-19 10:21:54', '2021-04-19 10:21:54', 0),
(14, 'teamigroup8989', '78578', 19, 'قغ', 'eeeeeeeeeee ededwew', 0, 'ahmed', '2021-04-19 19:49:39', '2021-04-19 19:50:39', 1),
(15, 'teamigroup777', '6565656', 13, '01010101', '33222 kjkjk', 0, 'ppppooo', '2021-04-20 11:12:32', '2021-04-20 11:12:32', 0),
(16, 'teamigroup', '78578', 20, '000', '3434', 0, 'tarek', '2021-04-20 11:23:00', '2021-04-20 11:23:00', 0),
(17, 'teamigroup', 'hsdfhgsdf', 20, '345434', 'eeeeeeeeeee ededwew', 0, 'dffgfd', '2021-04-20 11:29:18', '2021-04-20 11:29:18', 0),
(18, 'teamigroup', '78578', 21, '01095109055', 'eeeeeeeeeee ededwew', 11, 'احمد', '2021-04-21 07:44:10', '2021-04-21 07:44:10', 0),
(19, 'ahmed shehab', '8989', 21, '345434', '3434', 4, 'tarek', '2021-04-21 07:45:28', '2021-04-21 07:45:28', 0),
(20, 'احمد شهاب', 'hsdfhgsdf', 22, '000', '3434', 9, 'dffgfd', '2021-04-21 08:39:20', '2021-04-21 08:39:20', 0),
(21, 'teamigroup', 'hsdfhgsdf', 22, '000', '3434', 1, 'sfdsgfsd', '2021-04-21 08:40:13', '2021-04-21 08:40:13', 0),
(22, 'teamigroup', 'hsdfhgsdf', 23, '000', '3434', 4, 'dffgfd', '2021-04-21 10:15:12', '2021-04-21 10:15:12', 0),
(23, 'teamigroup2', '78578', 24, '01095109055', 'eeeeeeeeeee ededwew', 4, 'احمد', '2021-04-21 17:02:00', '2021-04-21 17:02:00', 0),
(24, 'احمد شهاب', '78578', 24, '345434', '000', 9, 'dffgfd', '2021-04-21 17:03:43', '2021-04-21 17:03:43', 0),
(25, 'teamigroup002', '78578', 25, '01095109055', 'addres', 4, 'احمد', '2021-04-21 17:33:24', '2021-04-21 17:34:57', 0),
(26, 'teamigroup033', '8989', 25, '454354345434', '3434', 11, 'dffgfd', '2021-04-21 17:33:55', '2021-04-21 17:33:55', 0),
(27, 'احمد شهاب', '78578', 26, '333', '3434', 10, 'ahmed', '2021-04-21 17:57:23', '2021-04-21 17:57:23', 0),
(28, 'teamigroup', 'hsdfhgsdf', 26, '333', '3434', 14, 'fgdfg', '2021-04-21 18:48:54', '2021-04-21 18:48:54', 0);

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
(2, 1, 'جدة', NULL, 0, '2021-04-21 08:33:55', '2021-04-21 08:33:55', 0),
(3, 1, 'بريدة', NULL, 0, '2021-04-21 08:33:55', '2021-04-21 08:33:55', 0),
(4, 1, 'مكة المكرمة', NULL, 0, '2021-04-21 08:35:13', '2021-04-21 08:35:13', 0),
(5, 1, 'المدينة المنورة', NULL, 0, '2021-04-21 08:35:13', '2021-04-21 08:35:13', 0),
(6, 1, 'حائل', NULL, 0, '2021-04-21 08:35:51', '2021-04-21 08:35:51', 0),
(7, 1, 'سكاكا', NULL, 0, '2021-04-21 08:35:51', '2021-04-21 08:35:51', 0),
(8, 1, 'تبوك', NULL, 0, '2021-04-21 08:36:16', '2021-04-21 08:36:16', 0),
(9, 1, 'عرعر', NULL, 0, '2021-04-21 08:36:16', '2021-04-21 08:36:16', 0),
(10, 1, 'أبهاا', NULL, 0, '2021-04-21 08:36:52', '2021-04-21 08:36:52', 0),
(11, 1, 'جازان', NULL, 0, '2021-04-21 08:36:52', '2021-04-21 08:36:52', 0),
(12, 1, 'نجران', NULL, 0, '2021-04-21 08:37:45', '2021-04-21 08:37:45', 0),
(13, 1, 'الباحة', NULL, 0, '2021-04-21 08:37:45', '2021-04-21 08:37:45', 0),
(14, 1, 'الدمام', NULL, 0, '2021-04-21 08:38:21', '2021-04-21 08:38:21', 0);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `name`, `address`, `city`, `phone`, `vat`, `created_at`, `updated_at`, `cancel`) VALUES
(2, 0, 'ahmed shehab', 'crew.001.002@gmail.com', NULL, '01095109055', '123456', '2021-04-18 09:34:17', '2021-04-18 09:39:43', 0),
(4, 0, 'احمد شهاب', 'crew.001.002@gmail.com', NULL, '454354345434', '123456', '2021-04-18 09:36:15', '2021-04-18 09:38:47', 0),
(5, 0, 'احمد شهاب', 'crew.001.002@gmail.com', NULL, '01095109055', 'jkhkjhk', '2021-04-18 10:21:24', '2021-04-18 10:21:24', 0),
(6, 0, 'احمد شهاب', 'crew.001.002@gmail.com', NULL, '01095109055', '123456', '2021-04-18 10:34:23', '2021-04-18 10:34:23', 0),
(7, 0, 'teamig', 'nasr buil', NULL, '555658568', '5255', '2021-04-18 10:53:08', '2021-04-18 10:53:08', 0),
(8, NULL, 'team', 'dsfds', NULL, '43453', 'jkhkjhk', '2021-04-18 19:58:13', '2021-04-18 19:58:13', 0),
(9, 4, 'تيم اى جروب', 'عمارات النصر', NULL, '010951090558', '14141414', '2021-04-18 20:03:19', '2021-04-19 08:49:25', 0),
(10, 9, 'teamigroup', 'crew.001.002@gmail.com', NULL, '01095109055', '123456', '2021-04-18 20:54:31', '2021-04-18 20:54:31', 0),
(11, 10, 'teamigroup', 'crew.001.002@gmail.com', NULL, '01095109055', NULL, '2021-04-18 20:57:46', '2021-04-18 20:57:46', 0),
(12, 12, 'teamiiiggg', 'eeeeeeeeeee ededweweryter', NULL, '454354345434', '666', '2021-04-19 06:44:04', '2021-04-19 06:44:04', 0),
(13, 7, 'teamigroup', '6th october', NULL, '01095109055', '8855', '2021-04-19 08:52:35', '2021-04-20 11:08:05', 0),
(14, 13, 'test', '3434dde4', NULL, '01095109055', '666', '2021-04-19 10:11:14', '2021-04-19 10:17:34', 0),
(15, 16, 'teamigroup5', 'alnasr', NULL, '0109510905589', '15vat', '2021-04-19 17:36:12', '2021-04-19 17:37:03', 0),
(16, NULL, 'teamigroup', 'eeeeeeeeeee ededwew', NULL, '454354345434', '14141414', '2021-04-19 17:53:50', '2021-04-19 17:53:50', 0),
(17, NULL, 'teamigroup', 'eeeeeeeeeee ededwew', NULL, '01095109055', NULL, '2021-04-19 17:55:52', '2021-04-19 17:55:52', 0),
(18, NULL, 'ttt', 'ttt', NULL, '555', NULL, '2021-04-19 17:56:14', '2021-04-19 17:56:14', 0),
(19, 17, '888', '8889', NULL, '888', '999', '2021-04-19 17:57:07', '2021-04-19 19:06:07', 1),
(20, 19, 'teamigroup', '3434', NULL, '454354345434', 'qqq', '2021-04-20 11:22:46', '2021-04-20 11:22:46', 0),
(21, 20, 'teamigroup111', 'eeeeeeeeeee ededwew', 8, '000', 'ddd', '2021-04-21 07:23:20', '2021-04-21 07:38:02', 0),
(22, 21, 'teamigroup', 'eeeeeeeeeee ededwew', 6, '454354345434', '666', '2021-04-21 08:39:06', '2021-04-21 08:39:06', 0),
(23, 15, 'teamigroup', 'eeeeeeeeeee ededwew', 4, '01095109055', 'ddd', '2021-04-21 10:14:58', '2021-04-21 10:14:58', 0),
(24, 22, 'teamigroup', 'eeeeeeeeeee ededwew', 4, '454354345434', '14141414', '2021-04-21 17:00:18', '2021-04-21 17:02:48', 0),
(25, 23, 'teamigroup', 'new address', 4, '01095109055', '14141414', '2021-04-21 17:32:42', '2021-04-21 17:34:36', 0),
(26, 24, 'teamigroup', 'eeeeeeeeeee ededwew', 11, '000', 'rdter', '2021-04-21 17:56:57', '2021-04-21 17:56:57', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `paid` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `cancel`) VALUES
(5, 'احمد شهاب', 'crew.001.0082@gmail.com', NULL, '2021-04-18 20:45:24', '$2y$10$mMzpLr5.MZr4FCp7dqrqp.qgibSBQ04BfljaQ49oC3F3GB8xMk8Au', NULL, NULL, '2021-04-18 17:34:04', '2021-04-18 17:34:04', 0),
(6, 'احمد شهاب', 'crew.005551.002@gmail.com', NULL, '2021-04-18 20:45:24', '$2y$10$C6MkDCxHn42Y4t8PGbPUoenspUpZSgjLMVoY578W6E3vZcn/zH0J6', NULL, NULL, '2021-04-18 18:42:07', '2021-04-18 18:42:07', 0),
(7, 'teamigroup', 'crew.001.003@gmail.com', NULL, '2021-04-18 20:45:57', '$2y$10$Hb78mT6irUk64e7hO9ymy.50kPbkzchKy1Qm8Rc8P6IM06kWK22u6', NULL, NULL, '2021-04-18 18:45:57', '2021-04-18 18:45:57', 0),
(8, 'احمد شهاب', 'crew.007771.002@gmail.com', NULL, '2021-04-18 22:38:57', '$2y$10$cMpj6AGt6p3QTouEl7JK/eqdsgeV/sbXGNWK1ERr9sByIUxO9Uu3a', NULL, NULL, '2021-04-18 20:38:57', '2021-04-18 20:38:57', 0),
(9, 'احمد شهابسسسس', 'crew.1.002@gmail.com', NULL, '2021-04-18 22:51:02', '$2y$10$8CLISAVeuaeeEblBk.qjyuF8oBXJsyUT3Hb5h8d0hmWabb0iNg8b2', NULL, NULL, '2021-04-18 20:51:02', '2021-04-18 20:51:02', 0),
(10, 'احمد شهاب333', 'crew.00a1.003@gmail.com', NULL, '2021-04-18 22:56:58', '$2y$10$c.2dbKTm02p26MqBC6I7revcMv5VEOxtbyROCxApC3AUZnXaZJD3u', NULL, NULL, '2021-04-18 20:56:58', '2021-04-18 20:56:58', 0),
(11, 'teamigroup', 'crew.001.00553@gmail.com', NULL, '2021-04-18 22:59:22', '$2y$10$u6IMZVHkg6M/GSl/DppuruXKdn4r04ZIjnm0KTPSquWlkISTBRzwG', NULL, NULL, '2021-04-18 20:59:22', '2021-04-18 20:59:22', 0),
(12, 'احمد شهاب333', 'crew.002221.002@gmail.com', NULL, '2021-04-19 08:43:26', '$2y$10$eVodS6/Ec5tlZ7CS5KgSseYtiFAt4GOETxaF2z78Ej69F0DtkpZgS', NULL, NULL, '2021-04-19 06:43:26', '2021-04-19 06:43:26', 0),
(13, 'ahmed shehab', 'crew.003331.0082@gmail.com', NULL, '2021-04-19 12:08:28', '$2y$10$yui7r8FhEeUTLb19xI5OX.bwRrY9bKAKG8cMI3wTFaHmaDTzjx542', NULL, NULL, '2021-04-19 10:08:28', '2021-04-19 10:08:28', 0),
(15, 'احمد شهاب', 'crew.001.002@gmail.com', NULL, '2021-04-19 12:54:00', '$2y$10$zRzcVj1/D2CRlWtNrj5yXOPqndsj.sxeJJqmENmse2LNfHcqWJPKm', 'admin', NULL, '2021-04-19 10:52:12', '2021-04-19 10:52:12', 0),
(16, 'teamigroup', 'crew.001.0083@gmail.com', NULL, '2021-04-19 19:28:05', '$2y$10$VOLXmlKDZeGOYUk3/fq0VuqPur8xBuFe973R7vi6VLU.kGtTzNoei', NULL, NULL, '2021-04-19 17:28:05', '2021-04-19 17:28:05', 0),
(17, 'احمد شهاب', 'crew.00133.003@gmail.com', NULL, '2021-04-20 10:52:04', '$2y$10$ctmcW24WASdg36EJEgUjzuEcTFjkAjAF.tjD5EIpybzE.Va6ZNeL.', NULL, NULL, '2021-04-19 17:38:58', '2021-04-19 17:38:58', 1),
(18, 'احمد شهاب', 'crew.001.00ff83@gmail.com', '052525252', '2021-04-20 11:48:10', '$2y$10$K6udyBYL2xAHdZV2rPmmk.85GikIlCnCar3VKgwE0W2uNbTkNsn16', NULL, NULL, '2021-04-20 09:48:10', '2021-04-20 09:48:10', 0),
(19, 'احمد شهاب', 'crew.001884.002@gmail.com', '01095109055', '2021-04-20 13:22:19', '$2y$10$v014wuRtoZ.mGKag3oN41.lcZQ4gDrPT454dlkKIC4wA1JfH8AwNW', NULL, NULL, '2021-04-20 11:22:19', '2021-04-20 11:22:19', 0),
(20, 'teamigroup', 'crew.yyy01.00tt@gmail.com', '667567567', '2021-04-21 09:15:50', '$2y$10$uFNAe64sc9ykJ/OoqedMvu5Y54CThMSymDGCLhUWIUwXbKVz3Ik6e', NULL, NULL, '2021-04-21 07:15:50', '2021-04-21 07:15:50', 0),
(21, 'احمد شهاب', 'crew.022201.002@gmail.com', '32432432', '2021-04-21 10:38:42', '$2y$10$ijyCiPBhKzavIsgZFzTZuewZwZgFAMMCecReHQ1TNJ7wIyFTiLsIy', NULL, NULL, '2021-04-21 08:38:42', '2021-04-21 08:38:42', 0),
(22, 'احمد شهاب', 'crew.03301.003@gmail.com', '010955555555', '2021-04-21 18:59:48', '$2y$10$.EVhjX//D0O7/lyikzHIuewB/ORLofJtxq44G3.a5N0reRGmTE3DW', NULL, NULL, '2021-04-21 16:59:48', '2021-04-21 16:59:48', 0),
(23, 'احمد شهاب', 'crew.0454501.003@gmail.com', '0109510565656', '2021-04-21 19:31:44', '$2y$10$JIsSnOZiM6nDhaI3nO6JMOG38nuG41cRnVdapctf96bBrUIUodGLm', NULL, NULL, '2021-04-21 17:31:44', '2021-04-21 17:31:44', 0),
(24, 'teamigroup', 'crew.001333.003@gmail.com', '01095109999', '2021-04-21 19:56:20', '$2y$10$hMFO.hwpPr6cLKMFY.KxCuwMW/iY6RKmJqLCoAytii57D3WunMnae', NULL, NULL, '2021-04-21 17:56:20', '2021-04-21 17:56:20', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
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
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
