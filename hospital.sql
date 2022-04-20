-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 05:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `address`, `gender`, `created_at`, `updated_at`) VALUES
(9, 'Sheikh Farid', 'farid@lifeline.com', '01712345677', 'Bashundhara', NULL, '2021-12-25 03:23:16', '2021-12-25 03:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `doctor_id`, `date`, `time`, `created_at`, `updated_at`) VALUES
(7, 14, 10, '2021-12-25', '19:00:00', '2021-12-25 04:11:15', '2021-12-25 04:11:15'),
(8, 14, 13, '2021-12-30', '19:11:00', '2021-12-25 04:12:01', '2021-12-25 04:12:01'),
(9, 15, 12, '2021-12-26', '19:20:00', '2021-12-25 04:13:39', '2021-12-25 04:13:39'),
(10, 15, 11, '2021-12-27', '19:45:00', '2021-12-25 04:14:16', '2021-12-25 04:14:16'),
(11, 16, 11, '2021-12-26', '20:00:00', '2021-12-25 05:57:21', '2021-12-25 05:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `phone`, `address`, `gender`, `speciality`, `college`, `position`, `created_at`, `updated_at`) VALUES
(10, 'Sanzar Adnan', 'sanzar@lifeline.com', '01712345677', 'Bashundhara', NULL, 'Medicine Specialist', 'Dhaka Medical College', 'Surgeon', '2021-12-25 03:33:20', '2021-12-25 06:02:04'),
(11, 'Khan Osman', 'usman@lifeline.com', '01712345677', 'Bashundhara', NULL, 'Medicine Specialist', 'Dhaka Medical College', 'Professor', '2021-12-25 03:39:22', '2021-12-25 03:56:37'),
(12, 'Motiur Rahman', 'motiur@lifeline.com', '01712345677', 'Bashundhara', NULL, 'Kidney Specialist', 'Kurmitola Hospital', 'Surgeon', '2021-12-25 03:40:28', '2021-12-25 04:08:34'),
(13, 'Mahdy Hasan', 'mahady@lifeline.com', '01712345677', 'Bashundhara', NULL, 'Kidney Specialist', 'Kurmitola Hospital', 'Surgeon', '2021-12-25 03:41:13', '2021-12-25 04:09:42'),
(17, 'Md. Shafique Ahmed', 'shafique@gmail.com', '01712345677', 'Bashundhara', NULL, NULL, NULL, NULL, '2021-12-25 05:59:44', '2021-12-25 05:59:44');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_12_15_114341_create_sessions_table', 1),
(7, '2021_12_21_173704_change_users_table', 1),
(8, '2021_12_22_064110_create_doctors_table', 1),
(9, '2021_12_22_064436_create_admins_table', 1),
(10, '2021_12_22_064625_create_patients_table', 1),
(11, '2021_12_22_163900_change_doctos_table', 1),
(12, '2021_12_22_165810_create_prescriptions_table', 1),
(13, '2021_12_22_165846_create_appointments_table', 1),
(14, '2021_12_24_081524_create_reports_table', 2),
(15, '2021_12_24_185236_change_prescriptions_table', 3);

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `email`, `phone`, `address`, `gender`, `dob`, `created_at`, `updated_at`) VALUES
(14, 'Rakibul Hasan Rajib', 'rajib@lifeline.com', '01712345677', 'Bashundhara', NULL, NULL, '2021-12-25 03:42:20', '2021-12-25 03:42:20'),
(15, 'Sumyia Afnan Mukta', 'sumyia@lifeline.com', '01712345677', 'Bashundhara', NULL, NULL, '2021-12-25 03:43:41', '2021-12-25 03:43:41'),
(16, 'Rakib Hasan', 'rakib@gmail.com', '01712345677', 'Bashundhara', NULL, NULL, '2021-12-25 05:56:33', '2021-12-25 05:56:33');

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
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `symptoms` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `treatment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `patient_id`, `doctor_id`, `symptoms`, `treatment`, `created_at`, `updated_at`, `appointment_id`) VALUES
(8, 14, 10, 'Nausea, vomiting.\r\nRash.\r\nAches and pains.', 'Take rest.\r\nTake paracetamol three times a day.\r\nDrink Enough Water.', '2021-12-25 04:25:18', '2021-12-25 04:25:18', 7),
(9, 15, 11, 'Shaking chills\r\nHeadache\r\nMuscle aches\r\nTiredness', 'Chloroquine two times a day after eating.\r\nDoxycycline once a day at night.\r\nTake rest.\r\nUse protection against mosquitoes.', '2021-12-25 04:29:12', '2021-12-25 04:29:12', 10),
(10, 15, 12, 'Fatigue\r\nShortness of breath\r\nFrequent urination', 'USG of Kidney Ureter and Prostrate.\r\nTake Clavourox two times a day.\r\nDrink enough water.\r\nDon\'t eat much salt.', '2021-12-25 04:31:46', '2021-12-25 04:31:46', 9),
(11, 14, 13, 'Persistent urge to urinate\r\nBurning sensation while urinating.', 'Take Clavourox 250 mg two times a day.\r\nTake Progut three times a day.', '2021-12-25 04:34:09', '2021-12-25 04:34:09', 8),
(12, 14, 10, 'Fever \r\nCold', 'CBC blood test\r\nSerum Creatinine', '2021-12-25 06:01:31', '2021-12-25 06:01:31', 7);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `patient_id`, `name`, `path`, `created_at`, `updated_at`) VALUES
(6, 15, 'USG of KUB', '1640428668.jpg', '2021-12-25 04:37:48', '2021-12-25 04:37:48'),
(7, 14, 'Blood Test', '1640428684.png', '2021-12-25 04:38:04', '2021-12-25 04:38:04'),
(8, 15, 'Blood Culture', '1640428704.png', '2021-12-25 04:38:24', '2021-12-25 04:38:24'),
(9, 14, 'Xray of arm', '1640428738.jpg', '2021-12-25 04:38:58', '2021-12-25 04:38:58'),
(10, 16, 'Xray', '1640433616.png', '2021-12-25 06:00:16', '2021-12-25 06:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('LsIsJHZUzFkTtPcHdFjsGIzTLmXrOcBB5RlhpWRe', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.88 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOHRjM3BlSXNNd1pwRUd2RU9TR2FhbUVaT0M5d3c2NjVPbERMblRWYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kb2MiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMDtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJENDQVZpY25SeElGWE1PR1FPMTM2cHVES1B6ZGYuMDVFaklaNHNpTUtSbHVsSE5wSzVVQ2d5Ijt9', 1650470130);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(9, 'Sheikh Farid', 'farid@lifeline.com', '01712345677', 'Bashundhara', 'admin', NULL, '$2y$10$an1qzwoMjTSo/iHzPM2kquG7/CHShhNbhvYEF0mWjrXBO9xMVK1Qm', NULL, NULL, NULL, NULL, NULL, '2021-12-25 03:23:16', '2021-12-25 03:23:16'),
(10, 'Sanzar Adnan', 'sanzar@lifeline.com', '01712345677', 'Bashundhara', 'doctor', NULL, '$2y$10$CCAVicnRxIFXMOGQO136puDKPzdf.05EjIZ4siMKRlulHNpK5UCgy', NULL, NULL, NULL, NULL, NULL, '2021-12-25 03:33:20', '2021-12-25 03:33:20'),
(11, 'Khan Osman', 'usman@lifeline.com', '01712345677', 'Bashundhara', 'doctor', NULL, '$2y$10$YWLYjGTXxQMmVbssG5ArqeZD8eXqI0PnZrG9pYmSs6b8IpUodupF2', NULL, NULL, NULL, NULL, NULL, '2021-12-25 03:39:22', '2021-12-25 03:39:22'),
(12, 'Motiur Rahman', 'motiur@lifeline.com', '01712345677', 'Bashundhara', 'doctor', NULL, '$2y$10$T./u7hdFdhNwaehagn/h0e94Dzq8iJZ095PXT5uAy9dw08iLecTcO', NULL, NULL, NULL, NULL, NULL, '2021-12-25 03:40:28', '2021-12-25 03:40:28'),
(13, 'Mahdy Hasan', 'mahady@lifeline.com', '01712345677', 'Bashundhara', 'doctor', NULL, '$2y$10$M5MCtjatKuf6PcVp1gKAIOxNiyl/NCjp9mbSR7WjIhsVaQTqtyzYK', NULL, NULL, NULL, NULL, NULL, '2021-12-25 03:41:13', '2021-12-25 03:41:13'),
(14, 'Rakibul Hasan Rajib', 'rajib@lifeline.com', '01712345677', 'Bashundhara', 'patient', NULL, '$2y$10$nFPN7UT1EEk2sCH8J.pxnuRdB6OXANgtbEdNk.a6JipBxHL0TlJHy', NULL, NULL, NULL, NULL, NULL, '2021-12-25 03:42:20', '2021-12-25 03:42:20'),
(15, 'Sumyia Afnan Mukta', 'sumyia@lifeline.com', '01712345677', 'Bashundhara', 'patient', NULL, '$2y$10$XuRqDfYVM4jMLQ2g3Mh/oug8m3tMW6llI7v/kVitfl3gbiQJrShRe', NULL, NULL, NULL, NULL, NULL, '2021-12-25 03:43:41', '2021-12-25 03:43:41'),
(16, 'Rakib Hasan', 'rakib@gmail.com', '01712345677', 'Bashundhara', 'patient', NULL, '$2y$10$a4oZCErIz/jNWZHm18Wba.zPt0QEJdDFR/xPj4cFi3lUl6xosijOC', NULL, NULL, NULL, NULL, NULL, '2021-12-25 05:56:33', '2021-12-25 05:56:33'),
(17, 'Md. Shafique Ahmed', 'shafique@gmail.com', '01712345677', 'Bashundhara', 'doctor', NULL, '$2y$10$1offKr3nF1yD.4S6kQeAM.BaNBCDVfqKL8RUt113f/oXu1Zaog1Pa', NULL, NULL, NULL, NULL, NULL, '2021-12-25 05:59:44', '2021-12-25 05:59:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
