-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 02:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forgotpassword_otp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `password`, `forgotpassword_otp`, `profile_pic`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mansi', 'Arya', 'mansigalaxym@gmail.com', '$2y$10$q07q5nQDgbtgsmRxAC9H/uQ68y1j5RN9ZrzFBVn//qlfaYQ2aMM/C', '8817', '700008315-download.jpg', NULL, '2022-05-17 01:31:19', '2022-05-29 22:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `cty_id` bigint(20) UNSIGNED NOT NULL,
  `cty_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cty_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cty_id`, `cty_name`, `cty_country`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'patna', '2', '2022-05-25 22:02:54', '2022-05-27 02:43:35', NULL),
(2, 'New Summer', '3', '2022-05-25 22:02:57', '2022-05-25 22:02:57', NULL),
(3, 'Schadenchester', '3', '2022-05-25 22:02:59', '2022-05-25 22:02:59', NULL),
(4, 'Araceliville', '5', '2022-05-25 22:03:00', '2022-05-25 22:03:00', NULL),
(5, 'Steuberberg', '8', '2022-05-25 22:03:02', '2022-05-25 22:03:02', NULL),
(6, 'Krajcikstad', '8', '2022-05-25 22:03:20', '2022-05-25 22:03:20', NULL),
(7, 'Hassanside', '4', '2022-05-25 22:03:22', '2022-05-25 22:03:22', NULL),
(8, 'Port Dillan', '4', '2022-05-25 22:03:23', '2022-05-25 22:03:23', NULL),
(9, 'Port Janiya', '6', '2022-05-25 22:03:25', '2022-05-25 22:03:25', NULL),
(10, 'East Eloy', '9', '2022-05-25 22:03:26', '2022-05-25 22:03:26', NULL),
(11, 'delhi', '2', '2022-05-27 02:14:13', '2022-05-27 02:14:13', NULL),
(12, 'delhi', '3', '2022-05-27 02:14:20', '2022-05-27 02:14:20', NULL),
(13, 'delhi', '4', '2022-05-27 02:31:32', '2022-05-27 02:31:32', NULL),
(14, 'patna', '2', '2022-05-27 02:31:59', '2022-05-27 02:31:59', NULL),
(15, 'pat', '2', '2022-05-27 02:32:42', '2022-05-27 02:44:39', '2022-05-27 02:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `cnt_id` bigint(20) UNSIGNED NOT NULL,
  `cnt_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`cnt_id`, `cnt_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'China', '2022-05-25 22:05:45', '2022-05-27 00:16:38', NULL),
(2, 'India', '2022-05-25 22:05:59', '2022-05-25 22:05:59', NULL),
(3, 'Lao People\'s Democratic Republic', '2022-05-25 22:06:00', '2022-05-25 22:06:00', NULL),
(4, 'Falkland Islands (Malvinas)', '2022-05-25 22:06:02', '2022-05-25 22:06:02', NULL),
(5, 'Uk', '2022-05-25 22:06:03', '2022-05-27 06:15:07', NULL),
(6, 'Bosnia and Herzegovina', '2022-05-25 22:06:04', '2022-05-25 22:06:04', NULL),
(7, 'Malaysia', '2022-05-25 22:06:06', '2022-05-25 22:06:06', NULL),
(8, 'Pitcairn Islands', '2022-05-25 22:06:08', '2022-05-25 22:06:08', NULL),
(9, 'Madagascar', '2022-05-25 22:06:09', '2022-05-25 22:06:09', NULL),
(10, 'Belarus', '2022-05-25 22:06:11', '2022-05-25 22:06:11', NULL),
(11, 'Uk', '2022-05-27 00:20:14', '2022-05-27 00:54:26', '2022-05-27 00:54:26');

-- --------------------------------------------------------

--
-- Table structure for table `dance_styles`
--

CREATE TABLE `dance_styles` (
  `ds_id` bigint(20) UNSIGNED NOT NULL,
  `ds_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dance_styles`
--

INSERT INTO `dance_styles` (`ds_id`, `ds_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hattie Kassulke III', '2022-05-25 22:06:52', '2022-05-25 22:06:52', NULL),
(2, 'Maymie Goyette', '2022-05-25 22:06:54', '2022-05-25 22:06:54', NULL),
(3, 'Alvena Hessel', '2022-05-25 22:06:56', '2022-05-25 22:06:56', NULL),
(4, 'Kristy Windler', '2022-05-25 22:07:09', '2022-05-25 22:07:09', NULL),
(5, 'Belly dance', '2022-05-25 22:07:11', '2022-05-27 06:04:29', NULL),
(6, 'Mike Krajcik', '2022-05-25 22:07:12', '2022-05-25 22:07:12', NULL),
(7, 'Mr. Zachariah Cormier Sr.', '2022-05-25 22:07:13', '2022-05-25 22:07:13', NULL),
(8, 'Brandon Mohr II', '2022-05-25 22:07:15', '2022-05-25 22:07:15', NULL),
(9, 'Timmy Reilly', '2022-05-25 22:07:17', '2022-05-25 22:07:17', NULL),
(10, 'Dr. Kitty Lemke III', '2022-05-25 22:07:24', '2022-05-25 22:07:24', NULL),
(11, 'Test dance', '2022-05-27 05:34:21', '2022-05-27 05:34:21', NULL),
(12, 'Timmy dance', '2022-05-27 05:39:22', '2022-05-27 05:41:32', '2022-05-27 05:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_profile_pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_venue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_from_date` datetime NOT NULL,
  `event_to_date` datetime NOT NULL,
  `event_city_id` int(11) NOT NULL,
  `event_country_id` int(11) NOT NULL,
  `event_postcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_price_from` double(8,2) NOT NULL,
  `event_price_to` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_description`, `event_profile_pic`, `event_venue`, `event_from_date`, `event_to_date`, `event_city_id`, `event_country_id`, `event_postcode`, `event_price_from`, `event_price_to`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'xyz', 'Repudiandae tempora est fugit voluptates.', '298463054-download.jpg', 'Porro cupiditate cupiditate velit et ratione ducimus nihil.', '2022-08-10 03:43:59', '2022-09-15 03:43:59', 1, 2, '110092', 1000.00, 2000.00, '2022-05-30 03:58:18', '2022-06-09 22:48:07', '2022-06-09 22:48:07'),
(2, 'xyz', 'Repudiandae tempora est fugit voluptates.', '', 'Porro cupiditate cupiditate velit et ratione ducimus nihil.', '2022-07-09 03:43:59', '2022-09-02 03:43:59', 1, 2, '110092', 1000.00, 2000.00, '2022-05-31 23:06:55', '2022-06-14 04:40:16', '2022-06-14 04:40:16'),
(11, 'jhfbjdfbjd', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer', '', 'It is a long established fact that a reader will be distracted by the', '2022-09-22 03:43:59', '2022-10-23 03:43:59', 2, 3, '110092', 1000.00, 2000.00, '2022-06-15 03:19:03', '2022-06-15 03:33:05', NULL),
(12, 'jhfbjdfbjd', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer', '', 'It is a long established fact that a reader will be distracted by the', '2022-09-22 03:43:59', '2022-10-23 03:43:59', 2, 3, '110092', 1000.00, 2000.00, '2022-06-15 03:29:11', '2022-06-15 03:29:11', NULL),
(18, 'jhfbjdfbjd', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer', '', 'It is a long established fact that a reader will be distracted by the', '2022-09-22 03:43:59', '2022-10-23 03:43:59', 2, 3, '110092', 1000.00, 2000.00, '2022-06-15 06:18:16', '2022-06-15 06:18:16', NULL),
(19, 'jhfbjdfbjd', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer', '', 'It is a long established fact that a reader will be distracted by the', '2022-09-22 03:43:59', '2022-10-23 03:43:59', 2, 3, '110092', 1000.00, 2000.00, '2022-06-15 06:21:09', '2022-06-15 06:21:09', NULL),
(20, 'jhfbjdfbjd', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer', '', 'It is a long established fact that a reader will be distracted by the', '2022-09-22 03:43:59', '2022-10-23 03:43:59', 2, 3, '110092', 1000.00, 2000.00, '2022-06-15 06:23:28', '2022-06-15 06:23:28', NULL),
(21, 'jhfbjdfbjd', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer', '', 'It is a long established fact that a reader will be distracted by the', '2022-09-22 03:43:59', '2022-10-23 03:43:59', 2, 3, '110092', 1000.00, 2000.00, '2022-06-15 06:23:58', '2022-06-15 06:23:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_artists`
--

CREATE TABLE `event_artists` (
  `art_id` bigint(20) UNSIGNED NOT NULL,
  `art_event_id` int(11) NOT NULL,
  `art_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `art_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `art_city` int(11) NOT NULL,
  `art_country` int(11) NOT NULL,
  `art_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_artists`
--

INSERT INTO `event_artists` (`art_id`, `art_event_id`, `art_name`, `art_image`, `art_city`, `art_country`, `art_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'akshit', '1093694910-download.jpg', 1, 1, 'xyz', '2022-05-25 21:59:36', '2022-05-31 00:57:53'),
(2, 9, 'Dr. Tate Kassulke IV', '0', 9, 5, 'Quisquam architecto sunt iure aut eveniet perspiciatis at. Odio ut consequatur dolores. Qui hic ut odit odio repellendus sunt. Ipsam beatae aperiam tempora vel est qui blanditiis.', '2022-05-25 22:00:36', '2022-05-25 22:00:36'),
(3, 10, 'Yvonne Durgan', '0', 8, 2, 'Perspiciatis voluptas est aut expedita maiores ipsa. Voluptate voluptatibus libero a voluptatum. Doloribus id modi molestias minus veritatis. Ab vero doloribus autem et.', '2022-05-25 22:01:19', '2022-05-25 22:01:19'),
(4, 8, 'Mr. Ramon Lynch', '0', 6, 1, 'Praesentium unde ratione impedit ullam quia unde. Qui dolorem quia autem voluptas sapiente iure. Ut a totam et dolorum est architecto sit.', '2022-05-25 23:04:43', '2022-05-25 23:04:43'),
(5, 5, 'akshit seth', '1146452548-download.jpg', 1, 1, 'xyz', '2022-05-25 23:05:19', '2022-05-31 01:04:05'),
(6, 3, 'Eusebio Thompson', '0', 4, 6, 'Fugit voluptates quia sint. Recusandae dolor et et eos et. Inventore itaque eum id dolorem sit ut odio. Aut sapiente ab possimus consequatur totam eum autem.', '2022-05-25 23:05:43', '2022-05-25 23:05:43'),
(7, 12, 'rajeev', '714765890-download.jpg', 2, 1, 'efefef', '2022-05-25 23:06:16', '2022-05-31 01:34:16'),
(8, 2, 'Yolanda Hettinger', '0', 8, 8, 'Nostrum animi rerum minus soluta necessitatibus maiores. Nam ut recusandae error distinctio totam. Accusantium dolore illo iusto veritatis. Numquam rerum velit odit architecto.', '2022-05-25 23:06:58', '2022-05-25 23:06:58'),
(9, 1, 'Ms. Kellie Bogan IV', '0', 10, 6, 'Dolorum odio cupiditate consequuntur culpa. Perferendis id nesciunt nisi minus. Quasi doloribus culpa ut et.', '2022-05-25 23:07:23', '2022-05-25 23:07:23'),
(10, 4, 'Israel Reynolds Sr.', '0', 7, 9, 'Delectus velit perferendis sequi dolores non eveniet enim laborum. Velit exercitationem qui neque fuga officia et omnis. Accusamus quas aspernatur omnis voluptate omnis.', '2022-05-25 23:08:00', '2022-05-25 23:08:00'),
(12, 10, 'mansi', '167094670-download.jpg', 2, 1, 'xyz', '2022-05-31 02:01:36', '2022-05-31 02:01:36'),
(13, 8, 'mansi wrwerfe', '1312728412-download.jpg', 2, 1, 'xyz', '2022-05-31 02:12:15', '2022-05-31 02:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `event_images`
--

CREATE TABLE `event_images` (
  `event_img_id` bigint(20) UNSIGNED NOT NULL,
  `event_img_event_id` int(11) NOT NULL,
  `event_img_images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_keywords`
--

CREATE TABLE `event_keywords` (
  `event_keyw_id` bigint(20) UNSIGNED NOT NULL,
  `event_keyw_event_id` int(11) NOT NULL,
  `event_keyw_keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_keywords`
--

INSERT INTO `event_keywords` (`event_keyw_id`, `event_keyw_event_id`, `event_keyw_keywords`, `created_at`, `updated_at`) VALUES
(1, 1, 'm, f, fw, f', '2022-06-01 04:19:45', '2022-06-01 04:19:45'),
(4, 11, 'test price', '2022-06-15 03:19:03', '2022-06-15 03:19:03'),
(5, 12, 'test price wdw', '2022-06-15 03:29:11', '2022-06-15 03:29:11'),
(6, 16, 'test price wdw', NULL, NULL),
(7, 17, 'test price wdw, vedcf', NULL, NULL),
(8, 18, 'try', '2022-06-15 06:18:16', '2022-06-15 06:18:16'),
(9, 19, 'try', '2022-06-15 06:21:10', '2022-06-15 06:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `event_link_dance_style`
--

CREATE TABLE `event_link_dance_style` (
  `elds_id` bigint(20) UNSIGNED NOT NULL,
  `elds_event_id` int(11) NOT NULL,
  `elds_dance_style_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_link_dance_style`
--

INSERT INTO `event_link_dance_style` (`elds_id`, `elds_event_id`, `elds_dance_style_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, NULL),
(2, 1, 1, '2022-06-15 06:02:27', '2022-06-16 06:02:27'),
(3, 2, 4, '2022-06-09 06:02:49', '2022-06-09 06:02:49'),
(4, 2, 1, '2022-06-09 06:03:13', '2022-06-09 06:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `event_link_event_types`
--

CREATE TABLE `event_link_event_types` (
  `elet_id` bigint(20) UNSIGNED NOT NULL,
  `elet_event_id` int(11) NOT NULL,
  `elet_event_type_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_link_event_types`
--

INSERT INTO `event_link_event_types` (`elet_id`, `elet_event_id`, `elet_event_type_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2022-06-09 04:38:43', '2022-06-09 04:38:43'),
(2, 2, 2, '2022-06-09 04:39:23', '2022-06-09 04:39:23'),
(3, 1, 5, '2022-06-09 04:40:06', '2022-06-09 04:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `event_schedules`
--

CREATE TABLE `event_schedules` (
  `sch_id` bigint(20) UNSIGNED NOT NULL,
  `sch_event_id` int(11) NOT NULL,
  `sch_date` date NOT NULL,
  `sch_from_time` time NOT NULL,
  `sch_to_time` time NOT NULL,
  `sch_short_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sch_artist_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_schedules`
--

INSERT INTO `event_schedules` (`sch_id`, `sch_event_id`, `sch_date`, `sch_from_time`, `sch_to_time`, `sch_short_description`, `sch_artist_name`, `created_at`, `updated_at`) VALUES
(1, 8, '2022-05-26', '03:54:04', '03:54:04', 'Libero ratione quod libero tempore.', 'Destiney Barrows', '2022-05-25 22:24:04', '2022-05-25 22:24:04'),
(2, 2, '2022-05-17', '03:54:04', '05:54:04', 'xyz', 'mansi', '2022-05-25 22:24:06', '2022-05-31 04:43:35'),
(3, 8, '2022-05-26', '03:54:25', '03:54:25', 'Ipsum qui harum temporibus odio deserunt.', 'Ms. Fay Borer III', '2022-05-25 22:24:25', '2022-05-25 22:24:25'),
(4, 9, '2022-05-26', '03:54:27', '03:54:27', 'Rerum quaerat qui voluptatibus similique.', 'Prof. Rudy Mosciski Sr.', '2022-05-25 22:24:27', '2022-05-25 22:24:27'),
(5, 3, '2022-05-10', '06:54:04', '09:54:04', 'xyzthh', 'mansi seth', '2022-05-25 22:24:28', '2022-05-31 04:44:35'),
(6, 6, '2022-05-26', '03:54:29', '03:54:29', 'Illum quae est quod rerum a aperiam quis.', 'Joseph Block PhD', '2022-05-25 22:24:29', '2022-05-25 22:24:29'),
(7, 8, '2022-05-26', '03:54:31', '03:54:31', 'Ad minima dignissimos consectetur aut.', 'Efrain Bergstrom', '2022-05-25 22:24:31', '2022-05-25 22:24:31'),
(8, 10, '2022-05-26', '03:54:32', '03:54:32', 'Quia et consequuntur sint reiciendis.', 'Yasmeen Harris', '2022-05-25 22:24:32', '2022-05-25 22:24:32'),
(9, 7, '2022-05-26', '03:54:44', '03:54:44', 'Voluptates excepturi ad autem eos reiciendis.', 'Rogelio Yost', '2022-05-25 22:24:44', '2022-05-25 22:24:44'),
(12, 3, '2022-05-10', '06:54:04', '09:54:04', 'xyzthh', 'akshit arya', '2022-05-31 04:47:11', '2022-05-31 04:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `event_tickets`
--

CREATE TABLE `event_tickets` (
  `tck_id` bigint(20) UNSIGNED NOT NULL,
  `tck_event_id` int(11) NOT NULL,
  `tck_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tck_price` double(8,2) NOT NULL,
  `tck_booking_fee` int(11) NOT NULL,
  `tck_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_tickets`
--

INSERT INTO `event_tickets` (`tck_id`, `tck_event_id`, `tck_title`, `tck_price`, `tck_booking_fee`, `tck_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'show', 1500.00, 200, 'hghjgj', '2022-05-25 22:28:34', '2022-05-31 06:23:16'),
(3, 3, 'Sint est.', 600.00, 0, 'Eum est quasi nostrum.', '2022-05-25 22:28:38', '2022-05-25 22:28:38'),
(4, 7, 'Alias.', 1334.00, 0, 'Beatae sit eos tempora numquam.', '2022-05-25 22:28:39', '2022-05-25 22:28:39'),
(6, 7, 'Quis quas.', 1505.00, 0, 'Omnis error ab fugit fugit asperiores.', '2022-05-25 22:29:00', '2022-05-25 22:29:00'),
(7, 3, 'Esse.', 1289.00, 0, 'Reprehenderit tempore vero quod qui cum impedit.', '2022-05-25 22:29:02', '2022-05-25 22:29:02'),
(8, 2, 'Aliquid.', 749.00, 0, 'Velit perspiciatis assumenda et facere.', '2022-05-25 22:29:03', '2022-05-25 22:29:03'),
(9, 2, 'Quod.', 1714.00, 0, 'Et dolorem autem nihil.', '2022-05-25 22:29:05', '2022-05-25 22:29:05'),
(10, 4, 'Nobis.', 710.00, 0, 'Aut harum et alias suscipit doloremque.', '2022-05-25 22:29:13', '2022-05-25 22:29:13'),
(12, 2, 'show abcgnhg', 3000.00, 2000, 'hghjgj', '2022-05-31 06:24:39', '2022-05-31 06:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `event_types`
--

CREATE TABLE `event_types` (
  `evt_id` bigint(20) UNSIGNED NOT NULL,
  `evt_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_types`
--

INSERT INTO `event_types` (`evt_id`, `evt_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Uriah Kreiger DVM', '2022-05-25 22:21:16', '2022-05-25 22:21:16', NULL),
(2, 'Josiah Parker', '2022-05-25 22:21:18', '2022-05-25 22:21:18', NULL),
(3, 'Prof. Wilfred Prohaska DVM', '2022-05-25 22:21:52', '2022-05-25 22:21:52', NULL),
(4, 'Ms. Karlie Hahn', '2022-05-25 22:21:53', '2022-05-25 22:21:53', NULL),
(5, 'Test Event', '2022-05-25 22:21:55', '2022-05-27 07:31:53', '2022-05-27 07:31:53'),
(6, 'Edison Murazik II', '2022-05-25 22:21:56', '2022-05-25 22:21:56', NULL),
(7, 'Noble Kassulke DVM', '2022-05-25 22:21:57', '2022-05-25 22:21:57', NULL),
(8, 'Dr. Ladarius Gutmann', '2022-05-25 22:21:59', '2022-05-25 22:21:59', NULL),
(9, 'Freeda Schinner', '2022-05-25 22:22:08', '2022-05-25 22:22:08', NULL),
(10, 'Nicolette Kerluke', '2022-05-25 22:22:09', '2022-05-25 22:22:09', NULL),
(11, 'Ladarius Gutmann', '2022-05-27 07:03:12', '2022-05-27 07:14:14', '2022-05-27 07:14:14');

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
(4, '2022_05_17_060439_create_admins_table', 1),
(5, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(6, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(7, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(8, '2016_06_01_000004_create_oauth_clients_table', 2),
(9, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(11, '2022_05_17_090604_update_users_structure', 3),
(12, '2022_05_17_090839_create_personal_access_tokens', 3),
(13, '2022_05_18_114746_add_status_column_in_users_table', 4),
(14, '2022_05_18_102409_add_profile_to_users', 5),
(32, '2022_05_23_133048_add_logintype_providerid_column_in_users_table', 12),
(33, '2022_05_24_025937_drop_username_column_from_admins_table', 13),
(34, '2022_05_19_110217_create_dancestyles_table', 14),
(35, '2022_05_19_110512_create_event_types_table', 14),
(36, '2022_05_19_110654_create_cities_table', 14),
(37, '2022_05_19_110832_create_countries_table', 14),
(38, '2022_05_19_120135_create_events_table', 15),
(39, '2022_05_19_125441_create_artists_table', 15),
(40, '2022_05_19_130319_create_schedules_table', 15),
(41, '2022_05_19_131307_create_tickets_table', 15),
(42, '2022_05_24_035933_create_event_images_table', 16),
(43, '2022_05_24_040731_create_event_keywords_table', 17),
(44, '2022_05_27_060615_add_soft_delete_column_in_city_table', 18),
(45, '2022_05_27_061056_add_soft_delete_column_in_country_table', 19),
(46, '2022_05_27_070103_add_country_column_in_city_table', 20),
(47, '2022_05_27_102833_add_soft_delete_column_in_dancestyle_table', 21),
(48, '2022_05_27_115955_add_soft_delete_column_in_event_types_table', 22),
(49, '2022_05_30_074343_drop_event_image_and_keyword_column_in_events_table', 23),
(51, '2022_05_31_114737_add_booking_fee_column_in_event_tickets_table', 24),
(52, '2022_06_09_043039_create_table_event_link_event_types', 25),
(53, '2022_06_09_055811_create_event_link_dance_style_table', 26),
(54, '2022_06_10_033955_add_soft_delete_column_in_events_table', 27),
(57, '2022_06_10_050943_create_user_favorite_events_table', 28),
(58, '2022_06_10_105237_create_user_likes_events_table', 29),
(59, '2022_06_15_040124_add_status_column_in_user_favorite_events_table', 30);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('06ad8c158dc1eb702f807fc9e97c8c1cfe43bf3c436dcfb9b24df4ee0234c536fabf7e66789ec495', 1, 1, 'POSTMAN', '[]', 0, '2022-05-17 01:55:29', '2022-05-17 01:55:29', '2023-05-17 07:25:29'),
('7ad4b45d9c4ccee7fde69488e68fdfa9fe0ad214ae551aeecc810092be4a7394dd586866b443969d', 1, 1, 'Token', '[]', 0, '2022-05-17 01:59:20', '2022-05-17 01:59:20', '2023-05-17 07:29:20'),
('89182df4476c5049bf06109124e5351d8d9743b6ef71bb72699820d9665054033606693ac447ab6c', 1, 1, 'POSTMAN', '[]', 0, '2022-05-17 01:56:18', '2022-05-17 01:56:18', '2023-05-17 07:26:18'),
('f9b44a1a941994c4f8efc5403ccb2b8024850df78aac111d206d603e157a751477acfd05749601a0', 1, 1, 'POSTMAN', '[]', 0, '2022-05-17 01:54:45', '2022-05-17 01:54:45', '2023-05-17 07:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'B8K4BQJqEcQA4SwRqBD1eZOpn3qIAedZSWzOrVIc', NULL, 'http://localhost', 1, 0, 0, '2022-05-17 01:54:12', '2022-05-17 01:54:12'),
(2, NULL, 'Laravel Password Grant Client', 'oo30M1NBl18yMbmEiNlLEmWvxzKEHf9HMpizAthf', 'users', 'http://localhost', 0, 1, 0, '2022-05-17 01:54:12', '2022-05-17 01:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-05-17 01:54:12', '2022-05-17 01:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_token` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `device_token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Admin', 1, '5el2knDnCt', '1380782a5dd54fbbb0a7276fbc4b0d529cea9784e6e8c920d485e619824f9b26', 'test-device-token', '[\"*\"]', NULL, '2022-05-17 08:17:40', '2022-05-17 08:17:40'),
(2, 'App\\Models\\Admin', 1, 'wW9LH7bLtc', '7f55ab28e918d892664f59c81724e7a2d64dfa93cf7f1d81c432485b1250fa1c', NULL, '[\"*\"]', NULL, '2022-05-17 22:05:24', '2022-05-17 22:05:24'),
(3, 'App\\Models\\Admin', 1, '1d21cSKVJM', '481b9cb52310e511c10af89c88ae987c87dc8478a56cff002f810a55df08321c', NULL, '[\"*\"]', NULL, '2022-05-17 22:48:43', '2022-05-17 22:48:43'),
(4, 'App\\Models\\Admin', 1, 'j0hVLwVmUm', 'bf8ec20b08489cdf9df55347450b704971cd60fd3e860395f740b537a0b06f9a', NULL, '[\"*\"]', NULL, '2022-05-18 00:19:14', '2022-05-18 00:19:14'),
(5, 'App\\Models\\Admin', 1, 'moO3Pq4rYd', '6919e3d9050837dcf32bcfe96dc227679e945517050ff3065432459a1f1f985a', NULL, '[\"*\"]', NULL, '2022-05-18 00:21:50', '2022-05-18 00:21:50'),
(6, 'App\\Models\\Admin', 1, 'rtpUNZWvMx', 'a2dc2f4dfd97930631197bfb4c5422af7f19b57ee8258c7a62dd720f6b7ad5e0', NULL, '[\"*\"]', NULL, '2022-05-18 00:50:28', '2022-05-18 00:50:28'),
(7, 'App\\Models\\Admin', 1, 'EeyRoMhEcJ', '921d1adc43abc6eb664c6f8faf1c242972065f360ec98a9647b9d5029f4d7514', NULL, '[\"*\"]', NULL, '2022-05-18 01:47:36', '2022-05-18 01:47:36'),
(8, 'App\\Models\\User', 1, 'oLc7AkY1Fa', '710edbe0ee33684299f30be51bff12e9ef6a9e36fe3bb4820b0c71d51f146a58', NULL, '[\"*\"]', NULL, '2022-05-18 06:55:20', '2022-05-18 06:55:20'),
(9, 'App\\Models\\User', 1, 'JwckFbmkWl', '179ff68e3d584533753ed9d639ae05a50fdd4323ffe091d960cec222a073e59f', NULL, '[\"*\"]', NULL, '2022-05-18 08:02:40', '2022-05-18 08:02:40'),
(10, 'App\\Models\\User', 1, 'oHdJFBiUta', 'a7bcb1586e4a2301fbc8f3e43ba003aa4c55a09386ca50e1abdf87c250e47cac', NULL, '[\"*\"]', NULL, '2022-05-18 08:06:09', '2022-05-18 08:06:09'),
(11, 'App\\Models\\Admin', 1, 'LoyIs22rNN', '820fd1aa2e8f5dfd60d05d7f796ee22caada121f4f3c5e921d188ebbe2ffc9c5', NULL, '[\"*\"]', NULL, '2022-05-18 22:42:03', '2022-05-18 22:42:03'),
(12, 'App\\Models\\Admin', 1, '8BmI8gijdD', '2dacf19090776ea5169242ec177698a8bc2fc4bddd171171f0a0fd24bd681dc2', NULL, '[\"*\"]', NULL, '2022-05-19 00:32:12', '2022-05-19 00:32:12'),
(13, 'App\\Models\\Admin', 1, 'Rv77QEDpl2', '8dd107cce6e32182ec3b8595864cbb57b31463183d1a981bd7be956828f4cacf', NULL, '[\"*\"]', '2022-05-19 02:16:19', '2022-05-19 02:05:31', '2022-05-19 02:16:19'),
(14, 'App\\Models\\Admin', 1, 'RrNTCPz0qb', '6fc3e249304a4683a0d5a384d04ef559a2b2e0487ea5edbd66107ea389571007', NULL, '[\"*\"]', '2022-05-24 02:21:50', '2022-05-19 02:22:22', '2022-05-24 02:21:50'),
(15, 'App\\Models\\Admin', 1, 'JJJ3cdNooo', '37cb51ac5f8777c170c3afd86e7f0d61dfa8917b05f8944625069a06d3b20249', NULL, '[\"*\"]', '2022-06-08 23:48:39', '2022-05-19 22:46:40', '2022-06-08 23:48:39'),
(16, 'App\\Models\\Admin', 1, 'ruFtWcZ5qy', '61a646959502ea06133354cad03cb9e4e795f434f96763818c22d6a0f9ea27ff', NULL, '[\"*\"]', '2022-06-08 23:58:36', '2022-05-20 01:37:46', '2022-06-08 23:58:36'),
(17, 'App\\Models\\Admin', 1, 'dNqS9TIBju', '518eda176101262cd88b01a2439064f64c09a47d4f09ca6cdaf9c708c00ebe11', NULL, '[\"*\"]', NULL, '2022-05-23 07:05:15', '2022-05-23 07:05:15'),
(18, 'App\\Models\\Admin', 1, 'BBxN0dxbcB', '35e3c0f3aad396a2d6f40cdbe02c62880f728b3e0509c911cd34faef86b6fde3', NULL, '[\"*\"]', NULL, '2022-05-23 07:06:26', '2022-05-23 07:06:26'),
(19, 'App\\Models\\Admin', 1, 'QAJD86fJ6y', 'd365fe445a440c4b286809d63ccf021269c87a63afdf510a28df3817719f1212', NULL, '[\"*\"]', NULL, '2022-05-23 07:10:19', '2022-05-23 07:10:19'),
(20, 'App\\Models\\Admin', 1, '8pLC2W71JC', '1ef4d449f4b0a029cc128ddbd4703f37e58be2994a0d071eed58419eccb3271d', NULL, '[\"*\"]', NULL, '2022-05-23 07:10:33', '2022-05-23 07:10:33'),
(21, 'App\\Models\\Admin', 1, 'lS0yzzz62P', '96aec1ebb403037ebaa9bba1f90b84a0a1acbcba50a2e7079825a83fb752397a', NULL, '[\"*\"]', NULL, '2022-05-23 07:10:44', '2022-05-23 07:10:44'),
(22, 'App\\Models\\Admin', 1, 'WM955T6YWB', 'c273ccbdbc605229e1654e6256ad9452285a6fbc6dab7aa0be0ea35964b299b8', NULL, '[\"*\"]', '2022-06-09 01:45:52', '2022-05-24 02:22:13', '2022-06-09 01:45:52'),
(23, 'App\\Models\\User', 1, 'uVDUiwk6Ek', '3e49f99da7efcfe26d1daa2737042656b7ff06842dbb81b5a0d57a78e03467f5', NULL, '[\"*\"]', NULL, '2022-05-24 02:23:29', '2022-05-24 02:23:29'),
(24, 'App\\Models\\User', 1, 'GSkhvFy5Iq', 'f34dcd96e6738f1274da96bfc43728d73ef373bf99ee865370e7c49db2c5cfd0', NULL, '[\"*\"]', NULL, '2022-05-24 03:28:55', '2022-05-24 03:28:55'),
(25, 'App\\Models\\User', 1, 'hHgl6lAEXB', 'f871d84c056ee542d621b702357ef4068334beef210aa23fb8d0f1763fa093b0', NULL, '[\"*\"]', NULL, '2022-05-24 05:16:50', '2022-05-24 05:16:50'),
(26, 'App\\Models\\User', 1, 'HNfZIehrjI', '5caa696b661c692726457fc21956466e642e96d13e8670b6b19840a0b9609ab9', NULL, '[\"*\"]', NULL, '2022-05-24 05:48:46', '2022-05-24 05:48:46'),
(27, 'App\\Models\\User', 1, 'jw8em3xPm1', '778ab81a60383876f1dd4ab3dcf4f36470f9b17f507f09421ebe833558f8eb22', NULL, '[\"*\"]', NULL, '2022-05-24 05:53:51', '2022-05-24 05:53:51'),
(28, 'App\\Models\\User', 1, 'haiUqSwLg6', '6df4a186d0ff31f90cace6e1bde6dd4c5c645791fe574130008e11317c782909', NULL, '[\"*\"]', NULL, '2022-05-24 05:56:11', '2022-05-24 05:56:11'),
(29, 'App\\Models\\User', 1, 'klUWGOKD3A', '0ade5f43ba0055abf22d25e05271e2e989136c57db2a5f78e4f085efc7ade6bc', NULL, '[\"*\"]', NULL, '2022-05-24 05:58:21', '2022-05-24 05:58:21'),
(30, 'App\\Models\\User', 1, 'Uio4fN2H4y', '1a3531893e1e016ccc4fc9bfe698b7508b1ad9cfdc379d49e22534b4b495107d', NULL, '[\"*\"]', NULL, '2022-05-24 06:04:31', '2022-05-24 06:04:31'),
(31, 'App\\Models\\User', 1, 'CrsRlUNJeb', '10f1d98c2374b15fdec6cbfbe1a3f0cffefee451dc6186633fa014a03ba0bf8a', NULL, '[\"*\"]', NULL, '2022-05-24 06:21:58', '2022-05-24 06:21:58'),
(32, 'App\\Models\\User', 1, '93PLVacHud', 'bc4388687837afadabc5d79087989008d66d6a35cf6c24fe6d7da3b3f77835db', NULL, '[\"*\"]', NULL, '2022-05-24 06:40:56', '2022-05-24 06:40:56'),
(33, 'App\\Models\\User', 1, 'LQnjXhOrMG', 'c281f74ac3a947baaa07db32c6258a4b3f97ee9f26a18912ae54b7fa4732d13f', NULL, '[\"*\"]', NULL, '2022-05-24 06:47:26', '2022-05-24 06:47:26'),
(34, 'App\\Models\\User', 1, 'oEtXPzAeMi', 'e05d8da0929c79b0f256ab4812e307e1f678914c519d64e4f576bba0d3158b11', NULL, '[\"*\"]', NULL, '2022-05-24 06:53:10', '2022-05-24 06:53:10'),
(35, 'App\\Models\\User', 1, 'W2hdAMvZgk', '2d759a41241733c4785c0694113ab2a9c1a88496f92ef4df2a4ec898217fa80b', NULL, '[\"*\"]', NULL, '2022-05-24 06:56:30', '2022-05-24 06:56:30'),
(36, 'App\\Models\\User', 1, 'xXazmIPorT', '3e5b7cdeeb7cfb8f339460a7cfd3d80c7e3df2985354b116a2fe2ed4162db138', NULL, '[\"*\"]', NULL, '2022-05-24 06:58:52', '2022-05-24 06:58:52'),
(37, 'App\\Models\\User', 1, '0YGV8dG4Zv', '2ab943e292ea26c6e0cb94c626a6712fcdbc81b4ee36837fa204a44b90b00dfb', NULL, '[\"*\"]', NULL, '2022-05-24 06:59:48', '2022-05-24 06:59:48'),
(38, 'App\\Models\\User', 2, 'bSqgLwBnFS', 'cb205d04bf804fc63aae7c0791812948c8d50fc35d47acfe5b1637854cad89e8', NULL, '[\"*\"]', NULL, '2022-05-24 07:02:39', '2022-05-24 07:02:39'),
(39, 'App\\Models\\User', 2, '837cFVfeGz', '16b56342083a8988b7ff64c45bf92281b78a64ab9d34850205b54d8b5b95202b', NULL, '[\"*\"]', NULL, '2022-05-24 07:03:14', '2022-05-24 07:03:14'),
(40, 'App\\Models\\User', 3, 'M8mXHYWXID', 'f8acc9b37ed37ca842eefc9ce36e7eb2408cd3e687c2fdf6e06840ee9465be0b', NULL, '[\"*\"]', NULL, '2022-05-24 22:01:34', '2022-05-24 22:01:34'),
(41, 'App\\Models\\User', 1, '8HDgd17AhA', '2f58e09d6ae09edcae16d526264026f18cde5d27cf0808743b705dc4544d20fe', NULL, '[\"*\"]', NULL, '2022-05-24 23:07:54', '2022-05-24 23:07:54'),
(42, 'App\\Models\\User', 1, 'U4zRrSB2UU', '66334a054773f211cec7e66762b6090d74483fd46604466a5b83ecb69bd45ab6', NULL, '[\"*\"]', NULL, '2022-05-24 23:29:38', '2022-05-24 23:29:38'),
(43, 'App\\Models\\User', 3, 'inFQrz2FUX', '4fdd66abe68313f758741d2424880d150849f3ab6f11e092a59815effd5e9d0e', NULL, '[\"*\"]', NULL, '2022-05-25 01:19:24', '2022-05-25 01:19:24'),
(44, 'App\\Models\\User', 3, 'cIlRITCDqq', 'cccd461010f7ab9ab39d00471fc664a71d954822e57f8174e82f3184ff633039', NULL, '[\"*\"]', NULL, '2022-05-25 01:22:34', '2022-05-25 01:22:34'),
(45, 'App\\Models\\User', 3, 'jULaaWu9R6', '23b0e56d08aa1f5c04210db7d2a1cc67e734e584e4037d27d13524768bf52731', NULL, '[\"*\"]', NULL, '2022-05-25 01:24:29', '2022-05-25 01:24:29'),
(46, 'App\\Models\\User', 1, 'r3o08FBjJh', '2ed3769ccead4fc7dfb297723b5732684354ff4d3fbd8e72bab8d67237ebae99', NULL, '[\"*\"]', NULL, '2022-05-25 01:24:54', '2022-05-25 01:24:54'),
(47, 'App\\Models\\User', 1, 'UXJi9HxZ5d', 'e244b0e76aa968b140d658efe44d0bf8d0fcc51d25364f2e3e7dc41efab2b2a3', 'test-device-token', '[\"*\"]', NULL, '2022-05-25 02:21:27', '2022-05-25 02:21:27'),
(48, 'App\\Models\\User', 1, '5oc6gjzba3', 'dbdb7964e4d1b0cbac80a8c7decb45220227d97473c98ae819c643dada600313', NULL, '[\"*\"]', NULL, '2022-05-25 04:45:50', '2022-05-25 04:45:50'),
(49, 'App\\Models\\User', 1, 'MapyuUzDLo', 'd8520ff90174650976489898bbf79ae689fa013fe6a120ec560e7cce11c3892d', NULL, '[\"*\"]', NULL, '2022-05-25 05:07:46', '2022-05-25 05:07:46'),
(50, 'App\\Models\\User', 1, 'c32AlMdYhh', 'c10ef1890faea7ae73501e0c200da1e224caa66ad565acc1d0cb23dc632eb5a6', NULL, '[\"*\"]', NULL, '2022-05-25 05:16:59', '2022-05-25 05:16:59'),
(51, 'App\\Models\\User', 1, 'zzNxcQ17hj', '0604a6584848a3e58bbb2642b717e81fd93c882eb74b24876bd92172eb8f4371', NULL, '[\"*\"]', NULL, '2022-05-25 05:38:58', '2022-05-25 05:38:58'),
(52, 'App\\Models\\User', 1, 'JanhhJawdb', 'c9628a477829bae0333b395812c46295197dee6224b9976c0fd78e0d68376a79', NULL, '[\"*\"]', NULL, '2022-05-25 05:41:22', '2022-05-25 05:41:22'),
(53, 'App\\Models\\User', 1, 'x2MbIq5ZUn', '25fca1a4bb9792fb16e9767c0259f79456ddc260efa751df3c9f0b28c2a7e8fb', NULL, '[\"*\"]', NULL, '2022-05-25 05:45:16', '2022-05-25 05:45:16'),
(54, 'App\\Models\\User', 1, 'BkWDdP5wxe', '1d117d5d84d42871b20e967efd4da774b4d57d1a002128f543642f83b9439c3d', NULL, '[\"*\"]', NULL, '2022-05-25 06:28:52', '2022-05-25 06:28:52'),
(55, 'App\\Models\\User', 1, 'E0pTNucZvB', '87270746ca187bffd90b4e3b9876fd4d154ff5cc704ac65f631595fbf0bb6287', NULL, '[\"*\"]', NULL, '2022-05-25 06:29:49', '2022-05-25 06:29:49'),
(56, 'App\\Models\\User', 1, 'qjulgXoS0L', 'd7e9f32cac2e325563413c3b765928327977fcd849ed979c6e017e85480760a6', NULL, '[\"*\"]', NULL, '2022-05-25 06:31:10', '2022-05-25 06:31:10'),
(57, 'App\\Models\\User', 1, 'qM8hu2yAFO', '50d5e8f5d2cd6f14db5559b0a699ae9a5f1bc4b3acfa797be131c1b111bf3998', NULL, '[\"*\"]', NULL, '2022-05-25 07:24:07', '2022-05-25 07:24:07'),
(58, 'App\\Models\\User', 7, 'ovYeQKheBf', '23cd80e4e4d07acb595b09bc3fa2c0d243144aea316f92328238736765a4b504', NULL, '[\"*\"]', '2022-06-15 03:20:44', '2022-06-08 23:53:08', '2022-06-15 03:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usr_id` bigint(20) UNSIGNED NOT NULL,
  `usr_fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `usr_lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `usr_username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `usr_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `usr_profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usr_email_ver_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `usr_reset_pass_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `usr_email_verified_at` timestamp NULL DEFAULT NULL,
  `usr_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `usr_provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usr_login_type` int(11) DEFAULT NULL,
  `usr_status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usr_id`, `usr_fname`, `usr_lname`, `usr_username`, `usr_email`, `usr_profile`, `usr_email_ver_token`, `usr_reset_pass_token`, `usr_email_verified_at`, `usr_password`, `usr_provider_id`, `usr_login_type`, `usr_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mansi', 'Arya', 'mansi', 'mansigalam@gmail.com', '164572766-download.jpg', '', '', NULL, '$2y$10$UByxqR1YJjfykgxyFLPI6.HQUxV.R2LOK6WBCgyUEDoat5bqi.XfW', '123', 1, 1, NULL, '2022-05-18 02:22:51', '2022-05-25 07:24:07'),
(2, 'Anna', 'Arya', 'testing', 'anna@gmail.com', NULL, '223194', '', '2022-05-20 04:15:19', '$2y$10$b3ELhtZPBNQiasnPbpvsJ.5bBRtmRXMtfOiEp1MpbCXq6EtkghwDa', '1245', 2, 1, NULL, '2022-05-20 03:37:58', '2022-05-20 04:16:26'),
(3, 'Akshit', 'seth', 'akseth', 'mansigalaxy@gmail.com', NULL, '', '', '2022-05-24 22:01:34', '$2y$10$c8kXY2pVW/xxi7yLLct6dOM0GiIDvSx1a500Eypd6sxhmP9lIktLW', NULL, NULL, 1, NULL, '2022-05-24 21:58:52', '2022-05-24 22:01:34'),
(6, 'rajeev', 'seth', 'akshit', 'mansiga@gmail.com', NULL, '176400', '', NULL, '$2y$10$YwCORDsHZYdeJxXv3ba1POOKpmYJothgUH8OYvfijp91.62s8HJ.C', NULL, NULL, 1, NULL, '2022-05-25 01:56:42', '2022-05-25 01:56:42'),
(7, 'Mansi', 'Arya', 'mansifgjgfj', 'mansigalaxym@gmail.com', NULL, '660116', '', '2022-06-09 05:22:59', '$2y$10$he09Wcs2V7OlSTDGW2..fOc04pE3cJi2x40ai8eHrPo/vX7QwX/xy', NULL, NULL, 1, NULL, '2022-05-25 07:27:23', '2022-06-08 23:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_favorite_events`
--

CREATE TABLE `user_favorite_events` (
  `ufe_if` bigint(20) UNSIGNED NOT NULL,
  `ufe_event_id` int(11) NOT NULL,
  `ufe_user_id` int(11) NOT NULL,
  `ufe_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_favorite_events`
--

INSERT INTO `user_favorite_events` (`ufe_if`, `ufe_event_id`, `ufe_user_id`, `ufe_status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, '2022-06-10 04:47:03', '2022-06-15 00:48:28'),
(2, 1, 1, 1, '2022-06-14 23:03:51', '2022-06-14 23:03:51'),
(3, 3, 2, 1, '2022-06-15 00:49:02', '2022-06-15 00:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_likes_events`
--

CREATE TABLE `user_likes_events` (
  `ule_id` bigint(20) UNSIGNED NOT NULL,
  `ule_event_id` int(11) NOT NULL,
  `ule_user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cty_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`cnt_id`);

--
-- Indexes for table `dance_styles`
--
ALTER TABLE `dance_styles`
  ADD PRIMARY KEY (`ds_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_artists`
--
ALTER TABLE `event_artists`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `event_images`
--
ALTER TABLE `event_images`
  ADD PRIMARY KEY (`event_img_id`);

--
-- Indexes for table `event_keywords`
--
ALTER TABLE `event_keywords`
  ADD PRIMARY KEY (`event_keyw_id`);

--
-- Indexes for table `event_link_dance_style`
--
ALTER TABLE `event_link_dance_style`
  ADD PRIMARY KEY (`elds_id`);

--
-- Indexes for table `event_link_event_types`
--
ALTER TABLE `event_link_event_types`
  ADD PRIMARY KEY (`elet_id`);

--
-- Indexes for table `event_schedules`
--
ALTER TABLE `event_schedules`
  ADD PRIMARY KEY (`sch_id`);

--
-- Indexes for table `event_tickets`
--
ALTER TABLE `event_tickets`
  ADD PRIMARY KEY (`tck_id`);

--
-- Indexes for table `event_types`
--
ALTER TABLE `event_types`
  ADD PRIMARY KEY (`evt_id`);

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
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usr_id`),
  ADD UNIQUE KEY `users_usr_email_unique` (`usr_email`);

--
-- Indexes for table `user_favorite_events`
--
ALTER TABLE `user_favorite_events`
  ADD PRIMARY KEY (`ufe_if`);

--
-- Indexes for table `user_likes_events`
--
ALTER TABLE `user_likes_events`
  ADD PRIMARY KEY (`ule_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `cty_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `cnt_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dance_styles`
--
ALTER TABLE `dance_styles`
  MODIFY `ds_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `event_artists`
--
ALTER TABLE `event_artists`
  MODIFY `art_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `event_images`
--
ALTER TABLE `event_images`
  MODIFY `event_img_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_keywords`
--
ALTER TABLE `event_keywords`
  MODIFY `event_keyw_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `event_link_dance_style`
--
ALTER TABLE `event_link_dance_style`
  MODIFY `elds_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_link_event_types`
--
ALTER TABLE `event_link_event_types`
  MODIFY `elet_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_schedules`
--
ALTER TABLE `event_schedules`
  MODIFY `sch_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `event_tickets`
--
ALTER TABLE `event_tickets`
  MODIFY `tck_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `event_types`
--
ALTER TABLE `event_types`
  MODIFY `evt_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usr_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_favorite_events`
--
ALTER TABLE `user_favorite_events`
  MODIFY `ufe_if` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_likes_events`
--
ALTER TABLE `user_likes_events`
  MODIFY `ule_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
