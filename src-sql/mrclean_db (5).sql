-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 03:49 PM
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
(81, 1, 12, 'السبت', '07', '17', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(82, 1, 12, 'الأحد', '07', '14', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(83, 1, 12, 'الأثنين', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(84, 1, 12, 'الثلاثاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(85, 1, 12, 'الأربعاء', '07', '20', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(86, 1, 12, 'الخميس', '10', '13', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
(87, 1, 12, 'الجمعة', '07', '13', 0, 0, '2021-04-21 11:06:55', '2021-04-21 11:06:55'),
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
-- Table structure for table `appointments_details`
--

CREATE TABLE `appointments_details` (
  `id` int(11) NOT NULL,
  `appointments_id` int(11) NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `day` int(11) DEFAULT NULL,
  `hour_from` varchar(255) NOT NULL,
  `hour_to` varchar(255) NOT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'الباقة الفضية', '300', 'ريال', 30, 2, 1, 0, 0, '2021-04-20 09:12:41', '2021-04-20 09:12:41'),
(2, 'الباقة البرونزية', '600', 'ريال', 30, 4, 1, 0, 0, '2021-04-20 09:12:41', '2021-04-20 09:12:41'),
(3, 'الباقة الذهبية', '1000', 'ريال', 30, 7, 2, 0, 0, '2021-04-20 09:16:46', '2021-04-20 09:16:46');

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
(1, 'teamigroup555', 'hsdfhgsdf', 1, '333', 'eeeeeeeeeee ededwew', 12, 'ahmed', '2021-04-22 19:00:17', '2021-04-22 19:00:17', 0, 1),
(2, 'احمد شهاب333', '8989', 1, '345434', '000', 8, 'ahmed', '2021-04-22 19:00:30', '2021-04-22 19:00:30', 0, 0),
(3, 'branch001', 'hsdfhgsdf', 2, '000', '000', 9, 'tarek', '2021-04-22 19:06:02', '2021-04-24 09:42:56', 0, 0),
(4, 'teamigroup', '78578', 3, '454354345434', 'eeeeeeeeeee ededwew', 10, 'sfdsgfsd', '2021-04-22 19:21:30', '2021-04-22 19:21:30', 0, 0),
(5, 'teamigroup001', '78578', 4, '345434', 'eeeeeeeeeee ededwew', 13, 'احمد', '2021-04-22 19:35:40', '2021-04-22 19:36:34', 0, 0),
(6, 'teamigroup002', 'hsdfhgsdf', 4, '345434', '3434', 8, 'ahmed', '2021-04-22 19:35:56', '2021-04-22 19:35:56', 0, 0),
(7, 'teamigroup003', '78787', 4, '000', 'eeeeeeeeeee ededwew', 3, 'sfdsgfsd', '2021-04-22 19:36:11', '2021-04-22 19:36:11', 0, 0),
(8, 'teamigroup', 'hsdfhgsdf', 5, '333', '3434', 10, 'dffgfd', '2021-04-24 06:06:45', '2021-04-24 06:06:45', 0, 0),
(9, 'احمد شهاب', 'hsdfhgsdf', 6, '333', 'eeeeeeeeeee ededwew', 12, 'fgdfg', '2021-04-24 06:14:59', '2021-04-24 06:14:59', 0, 0),
(10, 'teamigroup', '78578', 7, '333', '3434', 10, 'tarek', '2021-04-24 06:17:50', '2021-04-24 06:17:50', 0, 0),
(11, 'احمد شهاب', '78578', 8, '345434', 'eeeeeeeeeee ededwew', 4, 'dffgfd', '2021-04-24 06:21:07', '2021-04-24 06:21:07', 0, 0),
(12, 'احمد شهاب', 'hsdfhgsdf', 10, '333', 'eeeeeeeeeee ededwew', 11, 'tarek', '2021-04-24 07:21:55', '2021-04-24 07:21:55', 0, 0),
(13, 'احمد شهاب', '78578', 11, '454354345434', 'eeeeeeeeeee ededwew', 9, 'sfdsgfsd', '2021-04-24 07:52:09', '2021-04-24 07:52:09', 0, 0),
(14, 'احمد شهاب', '78578', 12, '454354345434', '3434', 10, 'ahmed', '2021-04-24 08:26:19', '2021-04-24 08:26:19', 0, 0),
(15, 'branch002', '78578', 2, '000', 'eeeeeeeeeee ededwew', 12, 'dffgfd', '2021-04-24 09:42:41', '2021-04-24 09:43:05', 0, 0),
(16, 'teamigroup', '78578', 13, '333', 'eeeeeeeeeee ededwew', 12, 'sfdsgfsd', '2021-04-24 10:14:50', '2021-04-24 10:14:50', 0, 1);

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
  `new` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cancel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `name`, `address`, `city`, `phone`, `vat`, `new`, `created_at`, `updated_at`, `cancel`) VALUES
(1, 15, 'teamigroup', 'eeeeeeeeeee ededwew', 14, '454354345434', 'rdter', 0, '2021-04-22 19:00:00', '2021-04-22 19:00:00', 0),
(2, 7, 'teamigroup', '3434', 8, '333', 'qqq', 0, '2021-04-22 19:05:46', '2021-04-22 19:05:46', 0),
(3, 25, 'teamigroup', 'eeeeeeeeeee ededwew', 10, '000', '14141414', 0, '2021-04-22 19:21:15', '2021-04-22 19:21:15', 0),
(4, 26, 'teamigroup', 'address', 4, '22222222222', '666', 0, '2021-04-22 19:34:10', '2021-04-22 19:35:18', 0),
(5, 27, 'teamigroup', 'eeeeeeeeeee ededwew', 5, '333', 'ddd', 0, '2021-04-24 06:06:32', '2021-04-24 06:06:32', 0),
(6, 28, 'احمد شهاب', '3434', 12, '333', 'rdter', 0, '2021-04-24 06:14:40', '2021-04-24 06:14:40', 0),
(7, 29, 'احمد شهاب', '3434', 13, '000', NULL, 0, '2021-04-24 06:17:39', '2021-04-24 06:17:39', 0),
(8, 30, 'احمد شهاب', '3434', 10, '000', 'qqqq', 0, '2021-04-24 06:20:53', '2021-04-24 06:20:53', 0),
(9, 32, 'teamigroup', 'eeeeeeeeeee ededwew', 9, '454354345434', '666', 0, '2021-04-24 06:39:16', '2021-04-24 06:39:16', 0),
(10, 33, 'احمد شهاب', 'eeeeeeeeeee ededwew', 12, '454354345434', 'ddd', 1, '2021-04-24 07:06:24', '2021-04-24 07:06:24', 0),
(11, 34, 'teamigroup666', 'eeeeeeeeeee ededwew', 14, '000', '14141414', 0, '2021-04-24 07:51:48', '2021-04-24 07:51:48', 0),
(12, 35, 'احمد شهاب', 'eeeeeeeeeee ededwew', 12, '345434', 'ddd', 1, '2021-04-24 08:25:56', '2021-04-24 08:25:56', 0),
(13, 36, 'teamigroup', 'eeeeeeeeeee ededwew', 9, '01095109055', '14141414', 1, '2021-04-24 10:14:30', '2021-04-24 10:14:30', 0);

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
(1, 15, 2, 2, '2021-05-07', '2021-05-07', 1, '600', '2021-04-22 21:00:36', '2021-04-22 21:00:36', 0, 1, 0),
(2, 7, 3, NULL, NULL, NULL, 1, NULL, '2021-04-22 21:05:32', '2021-04-22 21:05:32', 0, 1, 0),
(3, 7, 3, 3, '2021-05-01', '2021-05-01', 1, '1000', '2021-04-22 21:06:06', '2021-04-22 21:06:06', 0, 1, 1),
(4, 25, 2, NULL, NULL, NULL, 1, NULL, '2021-04-22 21:20:56', '2021-04-22 21:20:56', 0, 1, 0),
(5, 25, 1, 4, '2021-04-16', '2021-04-16', 0, '300', '2021-04-22 21:22:34', '2021-04-22 21:22:34', 0, 0, 0),
(6, 25, 1, 4, '2021-05-08', '2021-05-08', 0, '300', '2021-04-22 21:26:57', '2021-04-22 21:26:57', 0, 0, 0),
(7, 26, 3, NULL, NULL, NULL, 0, NULL, '2021-04-22 21:33:36', '2021-04-22 21:33:36', 0, 0, 0),
(8, 26, 3, 6, '2021-05-01', '2021-05-01', 0, '1000', '2021-04-22 21:36:42', '2021-04-22 21:36:42', 0, 0, 0),
(9, 26, 1, 5, '2021-05-01', '2021-05-01', 0, '300', '2021-04-22 21:54:50', '2021-04-22 21:54:50', 0, 0, 0),
(10, 27, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 08:06:19', '2021-04-24 08:06:19', 0, 0, 0),
(11, 27, 1, 8, '2021-04-16', '2021-04-16', 0, NULL, '2021-04-24 08:06:49', '2021-04-24 08:06:49', 0, 0, 0),
(12, 27, 2, 8, '2021-05-01', '2021-05-01', 0, NULL, '2021-04-24 08:08:27', '2021-04-24 08:08:27', 0, 0, 0),
(13, 27, 3, 8, '2021-05-01', NULL, 0, '1000', '2021-04-24 08:10:39', '2021-04-24 08:10:39', 0, 0, 0),
(14, 28, 2, 9, NULL, NULL, 0, NULL, '2021-04-24 08:15:09', '2021-04-24 08:15:09', 0, 0, 0),
(15, 29, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 08:16:43', '2021-04-24 08:16:43', 0, 0, 0),
(16, 29, 2, 10, '2021-05-01', NULL, 0, '600', '2021-04-24 08:18:07', '2021-04-24 08:18:07', 0, 0, 0),
(17, 30, 3, NULL, NULL, NULL, 0, NULL, '2021-04-24 08:20:28', '2021-04-24 08:20:28', 0, 0, 0),
(18, 30, 2, 11, '2021-04-17', NULL, 0, '600', '2021-04-24 08:21:14', '2021-04-24 08:21:14', 0, 0, 0),
(19, 31, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 08:28:28', '2021-04-24 08:28:28', 0, 0, 0),
(20, 31, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 08:29:08', '2021-04-24 08:29:08', 0, 0, 0),
(21, 31, 2, NULL, NULL, NULL, 0, NULL, '2021-04-24 08:29:29', '2021-04-24 08:29:29', 0, 0, 0),
(22, 31, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 08:31:09', '2021-04-24 08:31:09', 0, 0, 0),
(23, 31, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 08:32:18', '2021-04-24 08:32:18', 0, 0, 0),
(24, 32, 2, NULL, NULL, NULL, 0, NULL, '2021-04-24 08:33:22', '2021-04-24 08:33:22', 0, 0, 0),
(25, 32, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 08:39:20', '2021-04-24 08:39:20', 0, 0, 0),
(26, 32, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 08:51:08', '2021-04-24 08:51:08', 0, 0, 0),
(27, 32, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 08:53:40', '2021-04-24 08:53:40', 0, 0, 0),
(28, 32, 2, NULL, NULL, NULL, 0, NULL, '2021-04-24 08:55:24', '2021-04-24 08:55:24', 0, 0, 0),
(29, 33, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 09:04:00', '2021-04-24 09:04:00', 0, 0, 0),
(30, 33, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 09:04:43', '2021-04-24 09:04:43', 0, 0, 0),
(31, 33, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 09:04:59', '2021-04-24 09:04:59', 0, 0, 0),
(32, 33, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 09:06:29', '2021-04-24 09:06:29', 0, 0, 0),
(33, 33, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 09:08:29', '2021-04-24 09:08:29', 0, 0, 0),
(34, 33, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 09:09:33', '2021-04-24 09:09:33', 0, 0, 0),
(35, 33, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 09:11:26', '2021-04-24 09:11:26', 0, 0, 0),
(36, 33, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 09:12:20', '2021-04-24 09:12:20', 0, 0, 0),
(37, 33, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 09:12:48', '2021-04-24 09:12:48', 0, 0, 0),
(38, 33, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 09:12:54', '2021-04-24 09:12:54', 0, 0, 0),
(39, 33, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 09:13:14', '2021-04-24 09:13:14', 0, 0, 0),
(40, 33, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 09:15:59', '2021-04-24 09:15:59', 0, 0, 0),
(41, 33, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 09:21:39', '2021-04-24 09:21:39', 0, 0, 0),
(42, 33, 1, 12, '2021-04-23', NULL, 0, '300', '2021-04-24 09:26:18', '2021-04-24 09:26:18', 0, 0, 0),
(43, 33, 3, 12, '2021-05-08', NULL, 0, '1000', '2021-04-24 09:29:15', '2021-04-24 09:29:15', 0, 0, 0),
(44, 33, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 09:42:29', '2021-04-24 09:42:29', 0, 0, 0),
(45, 33, 2, 12, '2021-04-24', NULL, 0, '600', '2021-04-24 09:42:33', '2021-04-24 09:42:33', 0, 0, 0),
(46, 15, 1, 1, '2021-05-01', NULL, 1, '300', '2021-04-24 09:46:20', '2021-04-24 09:46:20', 0, 1, 0),
(47, 34, 3, 13, '2021-05-08', NULL, 0, '1000', '2021-04-24 09:52:14', '2021-04-24 09:52:14', 0, 0, 0),
(48, 34, 1, 13, '2021-05-07', NULL, 0, '300', '2021-04-24 10:23:32', '2021-04-24 10:23:32', 0, 0, 0),
(49, 35, 2, NULL, NULL, NULL, 0, NULL, '2021-04-24 10:26:01', '2021-04-24 10:26:01', 0, 0, 0),
(50, 35, 3, 14, '2021-05-05', NULL, 0, '1000', '2021-04-24 10:26:26', '2021-04-24 10:26:26', 0, 0, 0),
(51, 36, 2, 16, '2021-05-01', NULL, 1, '600', '2021-04-24 12:15:04', '2021-04-24 12:15:04', 0, 0, 1),
(52, 15, 1, NULL, NULL, NULL, 0, NULL, '2021-04-24 12:36:27', '2021-04-24 12:36:27', 0, 0, 1),
(53, 36, 1, 16, '2021-05-01', NULL, 0, '300', '2021-04-24 12:45:37', '2021-04-24 12:45:37', 0, 0, 1),
(54, 36, 1, 16, '2021-04-17', NULL, 0, '300', '2021-04-24 13:47:09', '2021-04-24 13:47:09', 0, 0, 1);

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
(5, 'احمد شهاب', 'crew.001.0082@gmail.com', NULL, '2021-04-24 11:57:57', '$2y$10$mMzpLr5.MZr4FCp7dqrqp.qgibSBQ04BfljaQ49oC3F3GB8xMk8Au', NULL, 1, NULL, '2021-04-18 17:34:04', '2021-04-18 17:34:04', 0),
(6, 'احمد شهاب', 'crew.005551.002@gmail.com', NULL, '2021-04-24 11:58:01', '$2y$10$C6MkDCxHn42Y4t8PGbPUoenspUpZSgjLMVoY578W6E3vZcn/zH0J6', NULL, 1, NULL, '2021-04-18 18:42:07', '2021-04-18 18:42:07', 0),
(7, 'teamigroup', 'crew.001.003@gmail.com', NULL, '2021-04-18 20:45:57', '$2y$10$Hb78mT6irUk64e7hO9ymy.50kPbkzchKy1Qm8Rc8P6IM06kWK22u6', NULL, 0, NULL, '2021-04-18 18:45:57', '2021-04-18 18:45:57', 0),
(8, 'احمد شهاب', 'crew.007771.002@gmail.com', NULL, '2021-04-18 22:38:57', '$2y$10$cMpj6AGt6p3QTouEl7JK/eqdsgeV/sbXGNWK1ERr9sByIUxO9Uu3a', NULL, 0, NULL, '2021-04-18 20:38:57', '2021-04-18 20:38:57', 0),
(9, 'احمد شهابسسسس', 'crew.1.002@gmail.com', NULL, '2021-04-18 22:51:02', '$2y$10$8CLISAVeuaeeEblBk.qjyuF8oBXJsyUT3Hb5h8d0hmWabb0iNg8b2', NULL, 0, NULL, '2021-04-18 20:51:02', '2021-04-18 20:51:02', 0),
(10, 'احمد شهاب333', 'crew.00a1.003@gmail.com', NULL, '2021-04-18 22:56:58', '$2y$10$c.2dbKTm02p26MqBC6I7revcMv5VEOxtbyROCxApC3AUZnXaZJD3u', NULL, 0, NULL, '2021-04-18 20:56:58', '2021-04-18 20:56:58', 0),
(11, 'teamigroup', 'crew.001.00553@gmail.com', NULL, '2021-04-18 22:59:22', '$2y$10$u6IMZVHkg6M/GSl/DppuruXKdn4r04ZIjnm0KTPSquWlkISTBRzwG', NULL, 0, NULL, '2021-04-18 20:59:22', '2021-04-18 20:59:22', 0),
(12, 'احمد شهاب333', 'crew.002221.002@gmail.com', NULL, '2021-04-19 08:43:26', '$2y$10$eVodS6/Ec5tlZ7CS5KgSseYtiFAt4GOETxaF2z78Ej69F0DtkpZgS', NULL, 0, NULL, '2021-04-19 06:43:26', '2021-04-19 06:43:26', 0),
(13, 'ahmed shehab', 'crew.003331.0082@gmail.com', NULL, '2021-04-19 12:08:28', '$2y$10$yui7r8FhEeUTLb19xI5OX.bwRrY9bKAKG8cMI3wTFaHmaDTzjx542', NULL, 0, NULL, '2021-04-19 10:08:28', '2021-04-19 10:08:28', 0),
(15, 'احمد شهاب', 'crew.001.002@gmail.com', NULL, '2021-04-19 12:54:00', '$2y$10$zRzcVj1/D2CRlWtNrj5yXOPqndsj.sxeJJqmENmse2LNfHcqWJPKm', 'admin', 0, NULL, '2021-04-19 10:52:12', '2021-04-19 10:52:12', 0),
(16, 'teamigroup', 'crew.001.0083@gmail.com', NULL, '2021-04-19 19:28:05', '$2y$10$VOLXmlKDZeGOYUk3/fq0VuqPur8xBuFe973R7vi6VLU.kGtTzNoei', NULL, 0, NULL, '2021-04-19 17:28:05', '2021-04-19 17:28:05', 0),
(17, 'احمد شهاب', 'crew.00133.003@gmail.com', NULL, '2021-04-20 10:52:04', '$2y$10$ctmcW24WASdg36EJEgUjzuEcTFjkAjAF.tjD5EIpybzE.Va6ZNeL.', NULL, 0, NULL, '2021-04-19 17:38:58', '2021-04-19 17:38:58', 1),
(18, 'احمد شهاب', 'crew.001.00ff83@gmail.com', '052525252', '2021-04-20 11:48:10', '$2y$10$K6udyBYL2xAHdZV2rPmmk.85GikIlCnCar3VKgwE0W2uNbTkNsn16', NULL, 0, NULL, '2021-04-20 09:48:10', '2021-04-20 09:48:10', 0),
(19, 'احمد شهاب', 'crew.001884.002@gmail.com', '01095109055', '2021-04-20 13:22:19', '$2y$10$v014wuRtoZ.mGKag3oN41.lcZQ4gDrPT454dlkKIC4wA1JfH8AwNW', NULL, 0, NULL, '2021-04-20 11:22:19', '2021-04-20 11:22:19', 0),
(20, 'teamigroup', 'crew.yyy01.00tt@gmail.com', '667567567', '2021-04-21 09:15:50', '$2y$10$uFNAe64sc9ykJ/OoqedMvu5Y54CThMSymDGCLhUWIUwXbKVz3Ik6e', NULL, 0, NULL, '2021-04-21 07:15:50', '2021-04-21 07:15:50', 0),
(21, 'احمد شهاب', 'crew.022201.002@gmail.com', '32432432', '2021-04-21 10:38:42', '$2y$10$ijyCiPBhKzavIsgZFzTZuewZwZgFAMMCecReHQ1TNJ7wIyFTiLsIy', NULL, 0, NULL, '2021-04-21 08:38:42', '2021-04-21 08:38:42', 0),
(22, 'احمد شهاب', 'crew.03301.003@gmail.com', '010955555555', '2021-04-21 18:59:48', '$2y$10$.EVhjX//D0O7/lyikzHIuewB/ORLofJtxq44G3.a5N0reRGmTE3DW', NULL, 0, NULL, '2021-04-21 16:59:48', '2021-04-21 16:59:48', 0),
(23, 'احمد شهاب', 'crew.0454501.003@gmail.com', '0109510565656', '2021-04-21 19:31:44', '$2y$10$JIsSnOZiM6nDhaI3nO6JMOG38nuG41cRnVdapctf96bBrUIUodGLm', NULL, 0, NULL, '2021-04-21 17:31:44', '2021-04-21 17:31:44', 0),
(24, 'teamigroup', 'crew.001333.003@gmail.com', '01095109999', '2021-04-21 19:56:20', '$2y$10$hMFO.hwpPr6cLKMFY.KxCuwMW/iY6RKmJqLCoAytii57D3WunMnae', NULL, 0, NULL, '2021-04-21 17:56:20', '2021-04-21 17:56:20', 0),
(25, 'احمد شهاب333', 'crew.0001.003@gmail.com', '46546546546', '2021-04-22 21:20:38', '$2y$10$key21X18p6itwMu2JcXO9OztiwYE6R0Bs.pcnRnhl.8zPh2TLT1Gy', NULL, 0, NULL, '2021-04-22 19:20:38', '2021-04-22 19:20:38', 0),
(26, 'احمد شهاب', 'crew.001.00003@gmail.com', '010101010', '2021-04-22 21:32:44', '$2y$10$dSM27SMDZovylgQZ2drAL.yKdiX5hEKgSY0XvKu6mTrXnj7y7/dyq', NULL, 0, NULL, '2021-04-22 19:32:44', '2021-04-22 19:32:44', 0),
(27, 'teamigroup000', 'crew.001.005553@gmail.com', '01095109055', '2021-04-24 08:05:31', '$2y$10$ygqrkb6MvrmwdGp9mJJxh.KbCoNFwHrdDY/9M.fTog4KCmeZKFA/i', NULL, 0, NULL, '2021-04-24 06:05:31', '2021-04-24 06:05:31', 0),
(28, 'احمد شهاب', 'crew.008851.002@gmail.com', '5264567654', '2021-04-24 08:13:03', '$2y$10$HP2hYFJXt1reg8/NpKETLez8Egiu4FPZBvWrrA022C1J6SJGBI0rS', NULL, 0, NULL, '2021-04-24 06:13:03', '2021-04-24 06:13:03', 0),
(29, 'احمد شهاب', 'crew.00j1.003@gmail.com', '766777', '2021-04-24 08:16:33', '$2y$10$PdFlRNMT7pou9YiVIIE/U.OivNNXYPZbLhGzyjX7DUYBJYO1CSENK', NULL, 0, NULL, '2021-04-24 06:16:33', '2021-04-24 06:16:33', 0),
(30, 'احمد شهاب', 'crew.0ccc01.003@gmail.com', '6465465', '2021-04-24 08:20:18', '$2y$10$T0NMRw2/Qgpm4xa6blnybu0hB8ww1DCovhsVfOkQAxXpuZgoUH3iK', NULL, 0, NULL, '2021-04-24 06:20:18', '2021-04-24 06:20:18', 0),
(31, 'احمد شهاب', 'crew.001.033303@gmail.com', '24324324332', '2021-04-24 08:28:23', '$2y$10$ZT4MGAzV8QaKFhLSbnwR9ewX03RoLWq..mqtbUT9ZFhH/BMx0oBra', NULL, 0, NULL, '2021-04-24 06:28:23', '2021-04-24 06:28:23', 0),
(32, 'احمد شهاب', 'crew.0fgfg01.002@gmail.com', '455343', '2021-04-24 08:33:11', '$2y$10$iyKozRwjj1Mta2jFiPKAKej.nxp/Tyqx/7gaX16atwa4wfIZZehRe', NULL, 0, NULL, '2021-04-24 06:33:11', '2021-04-24 06:33:11', 0),
(33, 'احمد شهاب', 'crew.001.00jh2@gmail.com', '9574987', '2021-04-24 09:02:12', '$2y$10$8.gKE6v8oSH2P/FXukDOhete.koTD8nu.8IU9E0HpnujhRyzPKZli', NULL, 0, NULL, '2021-04-24 07:02:12', '2021-04-24 07:02:12', 0),
(34, 'teamigroup555', 'crew.001.002222@gmail.com', '64564654654845', '2021-04-24 09:51:22', '$2y$10$.iQV37rHKz2XGGAS82D.5uwiqUoPXSOJNYfHTLd4XnftdNB8oYYTi', NULL, 0, NULL, '2021-04-24 07:51:22', '2021-04-24 07:51:22', 0),
(35, 'teamigroup', 'crew.001.078703@gmail.com', '87879797987987', '2021-04-24 10:25:39', '$2y$10$QU7CUvbozmmE8TLjJCV7U.fBSfhTQ7NJZa.qAPsgWA82CLOkVJ4yC', NULL, 0, NULL, '2021-04-24 08:25:39', '2021-04-24 08:25:39', 0),
(36, 'احمد شهاب', 'crew.001.001112@gmail.com', '12321321321', '2021-04-24 12:13:43', '$2y$10$BTwHA5cc4v9Sp07nzDPivur4W5l3y7.hSyXwPz8/aj8/rEGlZ2.JG', NULL, 1, NULL, '2021-04-24 10:13:43', '2021-04-24 10:13:43', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
