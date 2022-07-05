-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 12:34 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiser`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_login_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_logout_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_login_sec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_break` bigint(255) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `break_managements`
--

CREATE TABLE `break_managements` (
  `id` bigint(20) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  `total_break` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_id` varchar(255) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `status` int(10) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_id`, `department_name`, `status`, `updated_at`, `created_at`) VALUES
(1, 'D01', 'ADMIN', 1, NULL, NULL),
(2, 'D02', 'IT_DEPARTMENT', 1, NULL, NULL),
(3, 'D03', 'HR_DEPARTMENT', 1, NULL, NULL),
(4, 'D04', 'OPERATIONS_DEPARTMENT', 1, NULL, NULL),
(5, 'D05', 'GRAPHIC_DEPARTMENT', 1, NULL, NULL),
(6, 'D06', 'ACC_DEPARTMENT', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employeeleaves`
--

CREATE TABLE `employeeleaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Employee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Leave_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leavefrom` date NOT NULL,
  `leaveto` date NOT NULL,
  `No_of_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pending_leaves` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees__profiles`
--

CREATE TABLE `employees__profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Employee_ID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `First_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Last_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DateOfJoining` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Marital_Status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DOB` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mob` bigint(20) DEFAULT NULL,
  `Profile_Image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Highest_Qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `State` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PinCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_28_092210_create_users_table', 2),
(6, '2022_03_29_095245_create_attendances_table', 3),
(7, '2022_04_08_063758_create_tests_table', 4),
(8, '2022_04_11_050653_create_employeeleaves_table', 5),
(9, '2022_04_04_105239_create_tasks_table', 6),
(10, '2022_04_06_050033_create_task__statuses_table', 6),
(11, '2022_04_08_073809_create_task_images_table', 6),
(12, '2022_04_08_094223_update_tasks_table', 6),
(13, '2022_04_13_110738_rename__s__dept_id_to_tasks_table', 7),
(14, '2022_04_13_112810_add_column_name_reciver_dept_id_to_task_table', 8),
(15, '2022_04_14_113316_add_deleted_at_to_tasks_table', 9),
(16, '2022_04_13_044829_create_notifications_table', 10),
(17, '2022_04_21_102123_create_employees__profiles_table', 11),
(18, '2022_04_21_122903_add_deleted_at_to_employees__profiles_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `SenderId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReciverId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sndr_DeptId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rcvr_DeptId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdditionalCmnt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StartDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CompletionDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` tinyint(1) NOT NULL DEFAULT 0,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task_images`
--

CREATE TABLE `task_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `TaskId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FileName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mediaType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task__statuses`
--

CREATE TABLE `task__statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `TaskStatusCode` int(11) NOT NULL,
  `TaskStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task__statuses`
--

INSERT INTO `task__statuses` (`id`, `TaskStatusCode`, `TaskStatus`, `created_at`, `updated_at`) VALUES
(1, 0, 'Initiated', '2022-04-06 05:12:11', '2022-04-06 05:12:11'),
(2, 1, 'In Progress', '2022-04-06 05:14:37', '2022-04-06 05:14:40'),
(3, 2, 'For Review', '2022-04-06 05:13:31', '2022-04-06 05:13:31'),
(4, 3, 'Completed', '2022-04-06 05:14:43', '2022-04-06 05:14:46'),
(5, 4, 'For Updation', '2022-04-08 12:06:18', '2022-04-08 12:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `testingmail`
--

CREATE TABLE `testingmail` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testingmail`
--

INSERT INTO `testingmail` (`id`, `email`) VALUES
(1, 'rajeevkumar1799@gmail.com'),
(2, 'mansigalaxym@gmail.com'),
(3, 'unknown.known98765@gmail.com'),
(4, 'sethakshit50@gmail.com'),
(5, 'harsimran@thewiseowl.in'),
(6, 'manish@thewiseowl.in'),
(7, 'orgabrahma15@gmail.com'),
(8, 'design@thewiseowl.in'),
(9, 'accounts@thewiseowl.in');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Empid` int(11) DEFAULT NULL,
  `lunchstart` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunchend` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totallunch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherstart` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherend` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalother` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dept_ID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Role` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `Dept_ID`, `Role`, `created_at`, `updated_at`) VALUES
(1, 'Shyam Yadav', 'shyam@thewiseowl.in', 'Shyam@123', 'D02', 0, '2022-03-28 11:23:09', '2022-03-28 11:23:09'),
(3, 'Govind Jha', 'govind@thewiseowl.in', 'Govind@123', 'D06', 1, '2022-04-06 07:29:53', '2022-04-06 07:29:53'),
(4, 'Manish', 'manish@thewiseowl.in', 'Manish@123', 'D05', 1, '2022-04-06 07:29:53', '2022-04-06 07:29:53'),
(5, 'Orga', 'orga@thewiseowl.in', 'Orga@123', 'D04', 0, '2022-04-06 07:41:44', '2022-04-06 07:41:44'),
(6, 'Meghnaa Arhora', 'Meghnaa@thewiseowl.in', 'Meghnaa@123', 'D01', 2, '2022-04-06 07:41:44', '2022-04-06 07:41:44'),
(7, 'Govind Jha', 'hr@thewiseowl.in', 'hr@123', 'D03', 1, '2022-04-11 04:59:32', '2022-04-11 04:59:32'),
(8, 'Rajeev Kumar', 'rajeev@thewiseowl.in', 'rajeev@123', 'D02', 0, '2022-04-11 11:52:10', '2022-04-11 11:52:10'),
(9, 'Harsimran Kaur', 'harsimran@thewiseowl.in', 'Harsimran@123', 'D04', 1, '2022-04-21 18:12:23', '2022-04-21 18:12:23'),
(10, 'Varsha', 'varsha@thewiseowl.in', 'Varsha@123', 'D04', 0, '2022-04-21 18:14:37', '2022-04-21 18:14:37'),
(11, 'Chandan', 'chandan@thewiseowl.in', 'Chandan@123', 'D05', 0, '2022-04-21 18:16:03', '2022-04-21 18:16:03'),
(12, 'Sana', 'sana@thewiseowl.in', 'Sana@123', 'D05', 0, '2022-04-21 18:18:21', '2022-04-21 18:18:21'),
(13, 'Mansi', 'mansi@thewiseowl.in', 'Mansi@123', 'D02', 0, '2022-04-21 18:22:01', '2022-04-21 18:22:01'),
(14, 'Akshit Seth', 'akshit@gmail.com', 'akshit@123', 'D02', 1, '2022-04-21 18:24:38', '2022-04-21 18:24:38'),
(17, 'Tara', 'tara@thewiseowl.in', 'tara@123', 'D02', 0, NULL, NULL),
(20, 'Mansi', 'mansi@gmail.com', 'mansi@987', 'D02', 1, '2022-04-29 12:58:04', '2022-04-29 12:58:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `break_managements`
--
ALTER TABLE `break_managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeeleaves`
--
ALTER TABLE `employeeleaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees__profiles`
--
ALTER TABLE `employees__profiles`
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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_images`
--
ALTER TABLE `task_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task__statuses`
--
ALTER TABLE `task__statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testingmail`
--
ALTER TABLE `testingmail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `break_managements`
--
ALTER TABLE `break_managements`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employeeleaves`
--
ALTER TABLE `employeeleaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees__profiles`
--
ALTER TABLE `employees__profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task_images`
--
ALTER TABLE `task_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task__statuses`
--
ALTER TABLE `task__statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testingmail`
--
ALTER TABLE `testingmail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
