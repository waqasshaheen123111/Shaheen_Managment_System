-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 12:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tution_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `album_counters`
--

CREATE TABLE `album_counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `last_album_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album_counters`
--

INSERT INTO `album_counters` (`id`, `type_id`, `last_album_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2023-04-09 05:52:44', '2023-04-09 05:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `cafe`
--

CREATE TABLE `cafe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groups` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `groups`, `created_at`, `updated_at`) VALUES
(1, '10', 'Computer Science', '2022-12-16 23:20:39', '2022-12-18 22:26:46'),
(2, '9', 'Bio', '2022-12-16 23:55:47', '2022-12-18 06:32:43'),
(3, '10', 'Bio', '2022-12-19 03:43:01', '2022-12-19 03:43:01'),
(4, '9', 'Computer Science', '2022-12-19 03:45:31', '2022-12-19 03:45:31'),
(5, '7', 'Computer Science', '2023-02-17 17:59:52', '2023-02-17 17:59:52'),
(6, NULL, 'Computer Science', '2023-02-20 16:06:05', '2023-02-20 16:06:05');

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
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_teachers`
--

CREATE TABLE `grade_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grade_teachers`
--

INSERT INTO `grade_teachers` (`id`, `teacher_id`, `class_id`, `created_at`, `updated_at`) VALUES
(15, 1, 1, NULL, NULL),
(17, 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `user_id`, `img`, `path`, `created_at`, `updated_at`) VALUES
(1, 2, '5OhAoPlNeC2oPObncIMW4PR9tKA4qFWNu2zSOuHA.jpg', 'public/uploads/users/5OhAoPlNeC2oPObncIMW4PR9tKA4qFWNu2zSOuHA.jpg', '2023-05-02 15:55:05', '2023-05-02 15:55:05'),
(2, 2, 'y4OkztucEg4Vty8fapJp7aHFCGcssDjH7xYpkww1.jpg', 'public/uploads/users/y4OkztucEg4Vty8fapJp7aHFCGcssDjH7xYpkww1.jpg', '2023-05-02 15:55:05', '2023-05-02 15:55:05'),
(3, 3, 'DhQmngygeGiGMt1X9YnIcbIlqxKxSE3QO4BbyQmy.jpg', 'uploads/users/DhQmngygeGiGMt1X9YnIcbIlqxKxSE3QO4BbyQmy.jpg', '2023-05-02 16:14:08', '2023-05-02 16:14:08'),
(4, 3, 'zwtTGCcBtcyyciJBTCpLlFxWpo8vO9ypDTi7Ojzn.jpg', 'uploads/users/zwtTGCcBtcyyciJBTCpLlFxWpo8vO9ypDTi7Ojzn.jpg', '2023-05-02 16:14:08', '2023-05-02 16:14:08'),
(5, 3, '4XfCfBqaxq88CYbSahvc3RCWtrhfMfxRTuDo7IIU.jpg', 'uploads/users/4XfCfBqaxq88CYbSahvc3RCWtrhfMfxRTuDo7IIU.jpg', '2023-05-02 16:14:08', '2023-05-02 16:14:08'),
(6, 4, 'ABLimiI0PTZVKeC17TBz9gQsIZP4Qp3oScZmLnPE.jpg', 'uploads/users/ABLimiI0PTZVKeC17TBz9gQsIZP4Qp3oScZmLnPE.jpg', '2023-05-02 16:20:46', '2023-05-02 16:20:46'),
(7, 4, 'U2KH9iESEjrXrgiBpcLCwUvdw8aSGI17HkhlsgfA.jpg', 'uploads/users/U2KH9iESEjrXrgiBpcLCwUvdw8aSGI17HkhlsgfA.jpg', '2023-05-02 16:20:46', '2023-05-02 16:20:46'),
(8, 4, 'zvASqqCj3lFDbm1xkjxUhd3AaznsYYkPScJ6fgJw.jpg', 'uploads/users/zvASqqCj3lFDbm1xkjxUhd3AaznsYYkPScJ6fgJw.jpg', '2023-05-02 16:20:46', '2023-05-02 16:20:46'),
(9, 6, 'FXMr8GGfbe2rbLJWdWGuu5TSKIFlTbxKrZfW1lLC.jpg', 'uploads/users/FXMr8GGfbe2rbLJWdWGuu5TSKIFlTbxKrZfW1lLC.jpg', '2023-05-02 16:26:20', '2023-05-02 16:26:20'),
(10, 6, '8ZN6CZosu5CNYrv0h3Rtqu0awyHiDK05JC6zXDiD.jpg', 'uploads/users/8ZN6CZosu5CNYrv0h3Rtqu0awyHiDK05JC6zXDiD.jpg', '2023-05-02 16:26:20', '2023-05-02 16:26:20'),
(11, 7, 'bRzFxV6tv7neHhLGEnz4zQ8ueTffO7FTnasrXL5B.jpg', 'public/uploads/users/bRzFxV6tv7neHhLGEnz4zQ8ueTffO7FTnasrXL5B.jpg', '2023-05-03 15:34:38', '2023-05-03 15:34:38'),
(12, 7, 'JLqXR8n2dH1pifIetBu3CdS0cwvqpNO8yP8kKOiI.jpg', 'public/uploads/users/JLqXR8n2dH1pifIetBu3CdS0cwvqpNO8yP8kKOiI.jpg', '2023-05-03 15:34:38', '2023-05-03 15:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `library_albums`
--

CREATE TABLE `library_albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `library_albums`
--

INSERT INTO `library_albums` (`id`, `type_id`, `title`, `parent_id`, `created_at`, `updated_at`) VALUES
(2, 1, 'New Album 2796', NULL, '2023-04-09 06:09:48', '2023-04-09 06:09:48'),
(3, 1, 'New Album 9229', NULL, '2023-04-09 06:09:48', '2023-04-09 06:09:48'),
(6, 2, 'New Album 9703', NULL, '2023-04-09 06:10:05', '2023-04-09 06:10:05'),
(7, 2, 'New Album 327', NULL, '2023-04-09 06:10:06', '2023-04-09 06:10:06'),
(8, 2, 'New Album 6808', NULL, '2023-04-09 06:10:06', '2023-04-09 06:10:06'),
(9, 2, 'New Album 6337', NULL, '2023-04-09 06:10:09', '2023-04-09 06:10:09'),
(10, 2, 'New Album 5249', 8, '2023-04-09 06:10:17', '2023-04-09 06:10:17'),
(11, 2, 'New Album 9926', 8, '2023-04-09 06:10:20', '2023-04-09 06:10:20'),
(12, 2, 'New Album 8964', 11, '2023-04-09 06:14:16', '2023-04-09 06:14:16'),
(13, 2, 'New Album 5978', 11, '2023-04-09 06:14:20', '2023-04-09 06:14:20'),
(14, 1, 'New Album 1051', NULL, '2023-04-10 12:27:07', '2023-04-10 12:27:07'),
(15, 1, 'New Album 7045', 14, '2023-04-10 12:27:17', '2023-04-10 12:27:17'),
(17, 2, 'New Album 2373', 9, '2023-04-10 12:28:12', '2023-04-10 12:28:12'),
(18, 1, 'New Album 5029', 2, '2023-04-25 14:14:14', '2023-04-25 14:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `library_album_details`
--

CREATE TABLE `library_album_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `library_album_id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `library_types`
--

CREATE TABLE `library_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `library_types`
--

INSERT INTO `library_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Image Library', '2023-03-26 10:50:10', '2023-03-26 10:50:10'),
(2, 'Video Library', '2023-03-26 10:55:07', '2023-03-26 10:55:07');

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
(5, '2022_12_06_144252_add_role_to_users', 1),
(6, '2022_12_07_045051_add_dp_to_users_table', 1),
(7, '2022_12_09_113503_create_students_table', 1),
(8, '2022_12_09_114647_create_class_table', 1),
(9, '2022_12_09_114751_create_parent_table', 1),
(10, '2022_12_09_114825_create_task_table', 1),
(11, '2022_12_09_114851_create_fee_table', 1),
(12, '2022_12_09_114917_create_cafe_table', 1),
(13, '2022_12_09_114959_create_teacher_table', 1),
(14, '2022_12_14_053606_create_classes_table', 2),
(15, '2022_12_14_054519_create_subjects_table', 2),
(16, '2022_12_15_034926_create_images_table', 3),
(17, '2022_12_17_035139_create_grade_teachers_table', 4),
(18, '2022_12_18_124229_create_subject_grade_table', 5),
(19, '2023_02_19_211012_create_movies_table', 6),
(20, '2023_03_26_093909_create_library_types_table', 7),
(21, '2023_03_26_155811_create_library_albums_table', 8),
(22, '2023_03_30_173114_create_album_counters_table', 9),
(23, '2023_03_31_184838_create_library_album_details_table', 10),
(24, '2023_04_18_100708_create_subscribers_table', 11),
(25, '2019_05_03_000001_create_customer_columns', 12),
(26, '2019_05_03_000002_create_subscriptions_table', 12),
(27, '2019_05_03_000003_create_subscription_items_table', 12),
(28, '2023_05_02_204419_create_images_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movie_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `category`, `actor_name`, `created_at`, `updated_at`) VALUES
(1, 'Pathan', 'action', 'Srk', '2023-02-22 14:43:45', '2023-02-22 14:43:45'),
(2, 'Pathandd', 'action', 'Srk', '2023-02-22 14:51:00', '2023-02-22 14:51:00'),
(3, 'Pathan', 'action', 'Srk', '2023-02-22 15:48:06', '2023-02-22 15:48:06'),
(4, 'Pk', 'Funny', 'Amir Khan', '2023-02-22 16:38:26', '2023-02-22 16:38:26'),
(5, 'Jawan', 'Action', 'Srk', '2023-03-18 00:28:29', '2023-03-18 00:28:29'),
(6, 'Bodyguard', 'Action', 'Salman Khan', '2023-03-18 00:32:50', '2023-03-18 00:32:50'),
(7, 'Kick', 'action', 'Salman Khan', '2023-03-18 00:36:28', '2023-03-18 00:36:28'),
(8, 'rab ne bana di jori', 'romantic', 'srk', '2023-04-18 13:45:18', '2023-04-18 13:45:18'),
(9, 'kisi ka bhai kisi ki jan', 'romantic', 'salman tidal', '2023-04-18 13:48:14', '2023-04-18 13:48:14'),
(10, 'kisi ka bhai kisi ki jan', 'romantic', 'salman tidal', '2023-04-18 13:48:14', '2023-04-18 13:48:14');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(150) DEFAULT NULL,
  `phone` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(11) NOT NULL DEFAULT 0,
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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(150) DEFAULT NULL,
  `parent_id` int(12) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Physics', '2022-12-18 22:43:30', '2022-12-18 22:43:30'),
(2, 'Chemistry', '2022-12-18 22:43:30', '2022-12-18 22:43:30'),
(3, 'Math', '2022-12-18 22:43:30', '2022-12-18 22:43:30'),
(4, 'Islamiyat', '2022-12-18 22:43:30', '2022-12-18 22:43:30'),
(5, 'Computer', '2022-12-18 22:43:30', '2022-12-18 22:43:30'),
(6, 'Urdu', '2022-12-18 22:43:30', '2022-12-18 22:43:30'),
(7, 'English', '2022-12-18 22:43:30', '2022-12-18 22:43:30'),
(8, 'Pak Study', '2022-12-18 22:43:30', '2022-12-18 22:43:30'),
(9, 'Bio', '2022-12-18 23:18:08', '2022-12-18 23:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `subject_grade`
--

CREATE TABLE `subject_grade` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject_grade`
--

INSERT INTO `subject_grade` (`id`, `subject_id`, `class_id`, `created_at`, `updated_at`) VALUES
(2, 2, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(6, 3, 1, NULL, NULL),
(7, 5, 1, NULL, NULL),
(9, 7, 1, NULL, NULL),
(10, 8, 1, NULL, NULL),
(11, 1, 2, NULL, NULL),
(12, 2, 2, NULL, NULL),
(13, 3, 2, NULL, NULL),
(14, 4, 2, NULL, NULL),
(17, 7, 2, NULL, NULL),
(18, 8, 2, NULL, NULL),
(19, 9, 2, NULL, NULL),
(21, 6, 2, NULL, NULL),
(23, 1, 3, NULL, NULL),
(24, 2, 3, NULL, NULL),
(25, 3, 3, NULL, NULL),
(26, 4, 3, NULL, NULL),
(27, 6, 3, NULL, NULL),
(28, 7, 3, NULL, NULL),
(29, 8, 3, NULL, NULL),
(30, 9, 3, NULL, NULL),
(31, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `user_id`, `name`, `email`, `status`, `amount`, `created_at`, `updated_at`) VALUES
(1, 69, 'Waqas Shaheen', 'waqasshaheen123111@gmail.com', 1, 2000000, '2023-04-18 08:34:46', '2023-04-18 08:34:46'),
(2, 69, 'Waqas Shaheen', 'waqasshaheen123111@gmail.com', 1, 2000000, '2023-04-18 08:56:40', '2023-04-18 08:56:40'),
(3, 69, 'Waqas Shaheen', 'waqasshaheen123111@gmail.com', 1, 2000000, '2023-04-25 14:16:00', '2023-04-25 14:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_items`
--

CREATE TABLE `subscription_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `user_id`, `contact`, `status`, `qualification`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 0, NULL, '2023-05-02 15:55:05', '2023-05-02 15:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `dob`, `mobile`, `adress`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
(1, 'Waqas Shaheen', 'waqasshaheen123111@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$GE7f.WBuq.TX/lWrp3nTiumwEj.bdDfbxE3FmYFdEXFLJYYMFCvm2', NULL, '2023-05-02 15:51:23', '2023-05-02 15:51:23', 1, NULL, NULL, NULL, NULL),
(2, 'Waqas Butt', 'waqasbutt@gmail.com', '2001-06-29 00:00:00', '03030457106', 'Shad Bagh, Lahore, Punjab, 54010, Pakistan', NULL, '$2y$10$OxaMjwbka/lqmjVI0JvMHueDwfh/hNlbXXY9sxZEj.71Vd.Q1wOt6', NULL, '2023-05-02 15:55:05', '2023-05-02 15:55:05', 3, NULL, NULL, NULL, NULL),
(4, 'Notanki User', 'notanki@gmail.com', '2023-05-03 00:00:00', '03234925410', 'Shad Bagh, Lahore, Punjab, 54010, Pakistan', NULL, '$2y$10$S/fYmU7npxMNDfKUO6Hmb.XyK2q1uva0zikVj8X.rrLs9zByX4cbq', NULL, '2023-05-02 16:20:46', '2023-05-02 16:20:46', 0, NULL, NULL, NULL, NULL),
(5, 'Xerxes Spencer', 'bogasalasu@mailinator.com', '2023-05-23 00:00:00', 'Porro Nam corporis m', 'Est in officia ex mo', NULL, '$2y$10$nec9PD1SQrNK74xRc7e0AOIgPrciC/Vid8YcV4jVqzN27jwgneVmS', NULL, '2023-05-02 16:24:42', '2023-05-02 16:24:42', 0, NULL, NULL, NULL, NULL),
(6, 'notanki user 2', 'notanki2@gmail.com', '2023-05-08 00:00:00', '0302038230', 'Shad Bagh, Lahore, Punjab, 54010, Pakistan', NULL, '$2y$10$9Sr3/NCcaCFlTZcmj5tY3eUC.mA0JBRsqAqrhdiXCiX2Q73g8Giya', NULL, '2023-05-02 16:26:20', '2023-05-02 16:26:20', 0, NULL, NULL, NULL, NULL),
(7, 'demo3', 'demo3@gmail.com', '2012-08-17 00:00:00', '03030457106', 'Shad Bagh, Lahore, Punjab, 54010, Pakistan', NULL, '$2y$10$rnJmQgnLFhr5VWlSOcWZ..y79RDJ4sJqt6YGgkPQu6ZJm2SbsUODG', NULL, '2023-05-03 15:34:37', '2023-05-03 15:34:37', 0, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album_counters`
--
ALTER TABLE `album_counters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_counters_type_id_foreign` (`type_id`);

--
-- Indexes for table `cafe`
--
ALTER TABLE `cafe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_teachers`
--
ALTER TABLE `grade_teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grade_teachers_teacher_id_foreign` (`teacher_id`),
  ADD KEY `grade_teachers_class_id_foreign` (`class_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_albums`
--
ALTER TABLE `library_albums`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `library_albums_type_id_title_unique` (`type_id`,`title`),
  ADD KEY `library_albums_parent_id_foreign` (`parent_id`),
  ADD KEY `library_albums_type_id_parent_id_index` (`type_id`,`parent_id`);

--
-- Indexes for table `library_album_details`
--
ALTER TABLE `library_album_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `library_album_details_library_album_id_foreign` (`library_album_id`);

--
-- Indexes for table `library_types`
--
ALTER TABLE `library_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_grade`
--
ALTER TABLE `subject_grade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_grade_subject_id_foreign` (`subject_id`),
  ADD KEY `subject_grade_class_id_foreign` (`class_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscribers_user_id_foreign` (`user_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  ADD KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`);

--
-- Indexes for table `subscription_items`
--
ALTER TABLE `subscription_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscription_items_subscription_id_stripe_price_unique` (`subscription_id`,`stripe_price`),
  ADD UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_stripe_id_index` (`stripe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album_counters`
--
ALTER TABLE `album_counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cafe`
--
ALTER TABLE `cafe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grade_teachers`
--
ALTER TABLE `grade_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `library_albums`
--
ALTER TABLE `library_albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `library_album_details`
--
ALTER TABLE `library_album_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library_types`
--
ALTER TABLE `library_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subject_grade`
--
ALTER TABLE `subject_grade`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_items`
--
ALTER TABLE `subscription_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album_counters`
--
ALTER TABLE `album_counters`
  ADD CONSTRAINT `album_counters_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `library_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `grade_teachers`
--
ALTER TABLE `grade_teachers`
  ADD CONSTRAINT `grade_teachers_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `grade_teachers_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`);

--
-- Constraints for table `library_albums`
--
ALTER TABLE `library_albums`
  ADD CONSTRAINT `library_albums_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `library_albums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `library_albums_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `library_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `library_album_details`
--
ALTER TABLE `library_album_details`
  ADD CONSTRAINT `library_album_details_library_album_id_foreign` FOREIGN KEY (`library_album_id`) REFERENCES `library_albums` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subject_grade`
--
ALTER TABLE `subject_grade`
  ADD CONSTRAINT `subject_grade_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `subject_grade_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD CONSTRAINT `subscribers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
