-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 04:56 AM
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
-- Database: `berth_plan`
--

-- --------------------------------------------------------

--
-- Table structure for table `delays`
--

CREATE TABLE `delays` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Delay_start` datetime NOT NULL,
  `Delay_end` datetime NOT NULL,
  `finish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delays`
--

INSERT INTO `delays` (`id`, `type`, `Delay_start`, `Delay_end`, `finish`, `created_at`, `updated_at`) VALUES
(4, '234', '2022-05-11 02:32:00', '2022-05-11 03:33:00', 'false', '2022-05-17 08:39:41', '2022-05-17 08:39:41');

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
(104, '2014_10_12_000000_create_users_table', 1),
(105, '2014_10_12_100000_create_password_resets_table', 1),
(106, '2019_08_19_000000_create_failed_jobs_table', 1),
(107, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(108, '2022_05_15_215448_create_vessels_table', 1),
(109, '2022_05_16_082439_create_nofifies_table', 1),
(110, '2022_05_16_082832_create_delays_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nofifies`
--

CREATE TABLE `nofifies` (
  `id` int(10) UNSIGNED NOT NULL,
  `messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `redips_subject`
--

CREATE TABLE `redips_subject` (
  `sub_id` char(2) NOT NULL,
  `sub_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `redips_subject`
--

INSERT INTO `redips_subject` (`sub_id`, `sub_name`) VALUES
('bi', 'Biology'),
('ch', 'Chemistry'),
('en', 'English'),
('et', 'Ethics'),
('hi', 'History'),
('it', 'IT'),
('ma', 'Mathematics'),
('ph', 'Physics'),
('ss', 'Delay');

-- --------------------------------------------------------

--
-- Table structure for table `redips_timetable`
--

CREATE TABLE `redips_timetable` (
  `tbl_id` int(10) UNSIGNED NOT NULL,
  `sub_id` char(2) NOT NULL,
  `tbl_row` smallint(6) NOT NULL,
  `tbl_col` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `redips_timetable`
--

INSERT INTO `redips_timetable` (`tbl_id`, `sub_id`, `tbl_row`, `tbl_col`) VALUES
(3624, 'it', 1, 1),
(3625, 'ph', 1, 3),
(3626, 'hi', 2, 2),
(3627, 'ph', 3, 1),
(3628, 'ph', 3, 2),
(3629, 'it', 3, 3),
(3630, 'ph', 3, 4),
(3631, 'ph', 3, 5),
(3632, 'hi', 4, 1),
(3633, 'et', 4, 2),
(3634, 'hi', 4, 3),
(3635, 'hi', 4, 4),
(3636, 'hi', 4, 5),
(3637, 'it', 5, 1),
(3638, 'it', 5, 2),
(3639, 'it', 5, 3),
(3640, 'it', 5, 4),
(3641, 'it', 5, 5),
(3642, 'ma', 6, 1),
(3643, 'ma', 6, 2),
(3644, 'ch', 6, 3),
(3645, 'ma', 6, 4),
(3646, 'ma', 6, 5),
(3647, 'en', 7, 1),
(3648, 'en', 7, 2),
(3649, 'ma', 7, 3),
(3650, 'en', 7, 4),
(3651, 'en', 7, 5),
(3652, 'ch', 8, 2),
(3653, 'ch', 8, 3),
(3654, 'en', 8, 4),
(3655, 'ch', 8, 5),
(3656, 'it', 9, 3),
(3657, 'it', 12, 2),
(3658, 'it', 13, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Driane Perez', 'drianeperez12@gmail.com', NULL, '$2y$10$VsigzOsPiQ3fP.Ce6mAWz.bV0NrYGQov3ukCmnLENag7lY/Pr2oUa', NULL, '2022-05-16 22:14:58', '2022-05-16 22:14:58'),
(2, 'diojian', 'ddpgame2020@gmail.com', NULL, '$2y$10$/TMvB9NFoqo7WzKwcUZ2veUkIcfmrLutYOeaup9HK.RR.RHzRXpqm', NULL, '2022-05-16 23:53:23', '2022-05-16 23:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `vessels`
--

CREATE TABLE `vessels` (
  `id` int(10) UNSIGNED NOT NULL,
  `Vessel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voyage_number` int(11) NOT NULL,
  `ETA` datetime NOT NULL,
  `ETD` datetime NOT NULL,
  `ATA` datetime DEFAULT NULL,
  `ATD` datetime DEFAULT NULL,
  `pilot_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operation_supervisor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gang_foreman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stevedore_gang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crane_operator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Head_operator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `histacker_operator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Machines_needed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vessels`
--

INSERT INTO `vessels` (`id`, `Vessel`, `voyage_number`, `ETA`, `ETD`, `ATA`, `ATD`, `pilot_name`, `operation_supervisor`, `gang_foreman`, `stevedore_gang`, `crane_operator`, `Head_operator`, `histacker_operator`, `Machines_needed`, `finish`, `updated_at`, `created_at`) VALUES
(1, 'Tropical', 345, '2022-05-17 14:00:00', '2022-05-13 14:00:00', '2022-05-14 15:15:00', '2022-05-12 14:00:00', 'Paul Sabal', 'Ameera Marin', 'Mike Ayuso', 'Gang 3', 'Kenrick Richards', 'Frank Cho ', 'Lindon Samuels', 'Link Belt Crane Tow head Truck Suzuki Truck ', 'false', '2022-05-16 23:56:14', '2022-05-16 23:55:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delays`
--
ALTER TABLE `delays`
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
-- Indexes for table `nofifies`
--
ALTER TABLE `nofifies`
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
-- Indexes for table `redips_subject`
--
ALTER TABLE `redips_subject`
  ADD PRIMARY KEY (`sub_id`) USING BTREE;

--
-- Indexes for table `redips_timetable`
--
ALTER TABLE `redips_timetable`
  ADD PRIMARY KEY (`tbl_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vessels`
--
ALTER TABLE `vessels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delays`
--
ALTER TABLE `delays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `nofifies`
--
ALTER TABLE `nofifies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `redips_timetable`
--
ALTER TABLE `redips_timetable`
  MODIFY `tbl_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3659;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vessels`
--
ALTER TABLE `vessels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
