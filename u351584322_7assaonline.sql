-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 29 أبريل 2024 الساعة 20:50
-- إصدار الخادم: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u351584322_7assaonline`
--

-- --------------------------------------------------------

--
-- بنية الجدول `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answers` varchar(500) NOT NULL,
  `is_correct` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answers`, `is_correct`, `created_at`, `updated_at`) VALUES
(73, 33, 'sd', 1, '2023-03-15 14:54:10', '2023-03-15 14:54:10'),
(72, 33, 'ds', 0, '2023-03-15 14:54:10', '2023-03-15 14:54:10'),
(71, 32, 'rtyu', 0, '2023-03-15 14:53:55', '2023-03-15 14:53:55'),
(70, 32, 'ghjg', 1, '2023-03-15 14:53:55', '2023-03-15 14:53:55'),
(69, 32, 'ghj', 0, '2023-03-15 14:53:55', '2023-03-15 14:53:55'),
(74, 34, 'a', 0, '2024-01-17 09:49:31', '2024-01-17 09:49:31'),
(75, 34, 'b', 0, '2024-01-17 09:49:31', '2024-01-17 09:49:31'),
(76, 34, 'd', 1, '2024-01-17 09:49:31', '2024-01-17 09:49:31'),
(77, 34, 'c', 0, '2024-01-17 09:49:31', '2024-01-17 09:49:31'),
(78, 35, '(a) PR is parallel to QS.', 0, '2024-01-23 07:36:53', '2024-01-23 07:36:53'),
(79, 35, '(b) PQ is perpendicular to RS.', 0, '2024-01-23 07:36:53', '2024-01-23 07:36:53'),
(80, 35, '(c) PR is perpendicular to QS.', 0, '2024-01-23 07:36:53', '2024-01-23 07:36:53'),
(81, 35, '(d) PQ is parallel to RS.', 1, '2024-01-23 07:36:53', '2024-01-23 07:36:53'),
(82, 36, 'a)-8', 0, '2024-01-23 08:08:05', '2024-01-23 08:08:05'),
(83, 36, 'b)-2', 0, '2024-01-23 08:08:05', '2024-01-23 08:08:05'),
(84, 36, 'c)2', 0, '2024-01-23 08:08:05', '2024-01-23 08:08:05'),
(85, 36, 'd)8', 1, '2024-01-23 08:08:05', '2024-01-23 08:08:05'),
(86, 37, 'a)121', 0, '2024-01-23 08:10:16', '2024-01-23 08:10:16'),
(87, 37, 'b)121/2', 0, '2024-01-23 08:10:16', '2024-01-23 08:10:16'),
(88, 37, 'c)121/4', 1, '2024-01-23 08:10:16', '2024-01-23 08:10:16'),
(89, 37, 'd)121/8', 0, '2024-01-23 08:10:16', '2024-01-23 08:10:16'),
(90, 38, 'a)-8 + 6√2 i', 1, '2024-01-23 08:15:55', '2024-01-23 08:15:55'),
(91, 38, 'b)8 + 6√2 i', 0, '2024-01-23 08:15:55', '2024-01-23 08:15:55'),
(92, 38, 'c)-8 + 4√2 i', 0, '2024-01-23 08:15:55', '2024-01-23 08:15:55'),
(93, 38, 'd)-8- 6√2 i', 0, '2024-01-23 08:15:55', '2024-01-23 08:15:55'),
(94, 39, 'a) 50 mph', 0, '2024-01-23 08:17:08', '2024-01-23 08:17:08'),
(95, 39, 'b) 38 mph', 1, '2024-01-23 08:17:08', '2024-01-23 08:17:08'),
(96, 39, 'c) 32 mph', 0, '2024-01-23 08:17:08', '2024-01-23 08:17:08'),
(97, 39, 'd) 27 mph', 0, '2024-01-23 08:17:08', '2024-01-23 08:17:08'),
(98, 40, 'a) 32 cm2', 0, '2024-01-23 08:49:05', '2024-01-23 08:49:05'),
(99, 40, 'b) 32+√3 cm2', 0, '2024-01-23 08:49:05', '2024-01-23 08:49:05'),
(100, 40, 'c) 32√3 cm2', 1, '2024-01-23 08:49:05', '2024-01-23 08:49:05'),
(101, 40, 'd) 32√2 cm2', 0, '2024-01-23 08:49:05', '2024-01-23 08:49:05'),
(102, 41, 'a) 0', 0, '2024-01-23 09:44:34', '2024-01-23 09:44:34'),
(103, 41, 'b) -1', 1, '2024-01-23 09:44:34', '2024-01-23 09:44:34'),
(104, 41, 'c) 0,-1', 0, '2024-01-23 09:44:34', '2024-01-23 09:44:34'),
(105, 41, 'd) 1,-1', 0, '2024-01-23 09:44:34', '2024-01-23 09:44:34');

-- --------------------------------------------------------

--
-- بنية الجدول `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `grade_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `attendence_date` date NOT NULL,
  `attendence_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `attendances`
--

INSERT INTO `attendances` (`id`, `student_id`, `grade_id`, `classroom_id`, `section_id`, `teacher_id`, `attendence_date`, `attendence_status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 3, 2, 1, '2022-12-28', 1, '2022-12-28 08:46:39', '2022-12-28 08:46:39');

-- --------------------------------------------------------

--
-- بنية الجدول `classrooms`
--

CREATE TABLE `classrooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name_Class` varchar(255) NOT NULL,
  `Grade_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `classrooms`
--

INSERT INTO `classrooms` (`id`, `Name_Class`, `Grade_id`, `created_at`, `updated_at`) VALUES
(7, '{\"en\":\"The third preparatory grade\",\"ar\":\"\\u0627\\u0644\\u0635\\u0641 \\u0627\\u0644\\u062b\\u0627\\u0644\\u062b \\u0627\\u0644\\u0627\\u0639\\u062f\\u0627\\u062f\\u064a\"}', 2, '2023-02-23 07:53:57', '2023-02-23 07:53:57'),
(6, '{\"en\":\"Second grade middle school\",\"ar\":\"\\u0627\\u0644\\u0635\\u0641 \\u0627\\u0644\\u062b\\u0627\\u0646\\u064a \\u0627\\u0644\\u0627\\u0639\\u062f\\u0627\\u062f\\u064a\"}', 2, '2023-02-23 07:53:57', '2023-02-23 07:53:57'),
(5, '{\"en\":\"seventh grade\",\"ar\":\"\\u0627\\u0644\\u0635\\u0641 \\u0627\\u0644\\u0627\\u0648\\u0644 \\u0627\\u0644\\u0627\\u0639\\u062f\\u0627\\u062f\\u064a\"}', 2, '2023-02-23 07:53:57', '2023-02-23 07:53:57'),
(8, '{\"en\":\"First grade secondary\",\"ar\":\"\\u0627\\u0644\\u0635\\u0641 \\u0627\\u0644\\u0627\\u0648\\u0644 \\u0627\\u0644\\u062b\\u0627\\u0646\\u0648\\u064a\"}', 3, '2023-02-23 07:55:00', '2023-02-23 07:55:00'),
(9, '{\"en\":\"The second secondary grade\",\"ar\":\"\\u0627\\u0644\\u0635\\u0641 \\u0627\\u0644\\u062b\\u0627\\u0646\\u064a \\u0627\\u0644\\u062b\\u0627\\u0646\\u0648\\u064a\"}', 3, '2023-02-23 07:55:00', '2023-02-23 07:55:00'),
(10, '{\"en\":\"Third grade secondary\",\"ar\":\"\\u0627\\u0644\\u0635\\u0641 \\u0627\\u0644\\u062b\\u0627\\u0644\\u062b \\u0627\\u0644\\u0627\\u062b\\u0627\\u0646\\u0648\\u064a\"}', 3, '2023-02-23 07:55:00', '2023-02-23 07:55:00');

-- --------------------------------------------------------

--
-- بنية الجدول `degrees`
--

CREATE TABLE `degrees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quizze_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `score` double(8,2) NOT NULL,
  `abuse` enum('0','1') NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `degrees`
--

INSERT INTO `degrees` (`id`, `quizze_id`, `student_id`, `question_id`, `score`, `abuse`, `date`, `created_at`, `updated_at`) VALUES
(55, 3, 2, 17, 5.00, '0', '2023-02-01', '2023-02-12 10:59:28', '2023-02-12 10:59:28');

-- --------------------------------------------------------

--
-- بنية الجدول `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `exam_answers`
--

CREATE TABLE `exam_answers` (
  `id` int(11) NOT NULL,
  `attempt_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `exam_attempts`
--

CREATE TABLE `exam_attempts` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `marks` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `fees`
--

CREATE TABLE `fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `Grade_id` bigint(20) UNSIGNED NOT NULL,
  `Classroom_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `year` varchar(255) NOT NULL,
  `Fee_type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `fee_invoices`
--

CREATE TABLE `fee_invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_date` date NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `Grade_id` bigint(20) UNSIGNED NOT NULL,
  `Classroom_id` bigint(20) UNSIGNED NOT NULL,
  `fee_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `fund_accounts`
--

CREATE TABLE `fund_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `receipt_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `Debit` decimal(8,2) DEFAULT NULL,
  `credit` decimal(8,2) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `genders`
--

CREATE TABLE `genders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `genders`
--

INSERT INTO `genders` (`id`, `Name`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Male\",\"ar\":\"\\u0630\\u0643\\u0631\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(2, '{\"en\":\"Female\",\"ar\":\"\\u0627\\u0646\\u062b\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24');

-- --------------------------------------------------------

--
-- بنية الجدول `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `Notes` text DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `grades`
--

INSERT INTO `grades` (`id`, `created_at`, `updated_at`, `Name`, `Notes`) VALUES
(1, '2022-12-28 08:25:23', '2022-12-28 08:25:23', '{\"en\":\"Primary stage\",\"ar\":\"\\u0627\\u0644\\u0645\\u0631\\u062d\\u0644\\u0629 \\u0627\\u0644\\u0627\\u0628\\u062a\\u062f\\u0627\\u0626\\u064a\\u0629\"}', NULL),
(2, '2022-12-28 08:25:24', '2022-12-28 08:25:24', '{\"en\":\"middle School\",\"ar\":\"\\u0627\\u0644\\u0645\\u0631\\u062d\\u0644\\u0629 \\u0627\\u0644\\u0627\\u0639\\u062f\\u0627\\u062f\\u064a\\u0629\"}', NULL),
(3, '2022-12-28 08:25:24', '2022-12-28 08:25:24', '{\"en\":\"High school\",\"ar\":\"\\u0627\\u0644\\u0645\\u0631\\u062d\\u0644\\u0629 \\u0627\\u0644\\u062b\\u0627\\u0646\\u0648\\u064a\\u0629\"}', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) NOT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `images`
--

INSERT INTO `images` (`id`, `filename`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
(1, 'Capture7.PNG', 2, 'App\\Models\\Student', '2022-12-28 08:33:52', '2022-12-28 08:33:52'),
(2, 'service_2.png', 3, 'App\\Models\\Student', '2023-01-23 10:18:21', '2023-01-23 10:18:21'),
(3, 'simple-simple-background-minimalism-black-background-wallpaper-thumb.jpg', 4, 'App\\Models\\Student', '2023-01-23 10:20:47', '2023-01-23 10:20:47');

-- --------------------------------------------------------

--
-- بنية الجدول `library`
--

CREATE TABLE `library` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `Grade_id` bigint(20) UNSIGNED NOT NULL,
  `Classroom_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_15_184804_create_Grades_table', 1),
(5, '2021_01_23_181414_create_Classrooms_table', 1),
(6, '2021_02_10_182227_create_sections_table', 1),
(7, '2021_02_17_191528_create_type__bloods_table', 1),
(8, '2021_02_17_192846_create_nationalities_table', 1),
(9, '2021_02_17_193627_create_religions_table', 1),
(10, '2021_02_23_191411_create_my__parents_table', 1),
(11, '2021_03_04_110235_create_parent_attachments_table', 1),
(12, '2021_03_05_181424_create_foreign_keys', 1),
(13, '2021_03_17_175656_create_genders_table', 1),
(14, '2021_03_17_175840_create_specializations_table', 1),
(15, '2021_03_18_174036_create_teachers_table', 1),
(16, '2021_03_28_155234_create_teacher_section_table', 1),
(17, '2021_04_10_181456_create_students_table', 1),
(18, '2021_04_28_195145_create_images_table', 1),
(19, '2021_05_11_193939_create_promotions_table', 1),
(20, '2021_06_01_174202_create_fees_table', 1),
(21, '2021_06_08_161640_create_fee_invoices_table', 1),
(22, '2021_06_08_163221_create_receipt_students_table', 1),
(23, '2021_06_08_181651_create_processing_fees_table', 1),
(24, '2021_06_08_181848_create_payment_students_table', 1),
(25, '2021_06_09_161830_create_student_accounts_table', 1),
(26, '2021_06_21_165112_create_fund_accounts_table', 1),
(27, '2021_07_16_185459_create_attendances_table', 1),
(28, '2021_07_28_192715_create_subjects_table', 1),
(29, '2021_08_13_132334_create_quizzes_table', 1),
(30, '2021_08_23_190623_create_questions_table', 1),
(31, '2021_10_23_180609_create_online_classes_table', 1),
(32, '2021_10_31_185145_create_library_table', 1),
(33, '2021_11_12_163746_create_settings_table', 1),
(34, '2021_12_11_142103_create_events_table', 1),
(35, '2022_07_18_001158_create_degrees_table', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `my__parents`
--

CREATE TABLE `my__parents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Name_Father` varchar(255) NOT NULL,
  `National_ID_Father` varchar(255) NOT NULL,
  `Passport_ID_Father` varchar(255) NOT NULL,
  `Phone_Father` varchar(255) NOT NULL,
  `Job_Father` varchar(255) NOT NULL,
  `Nationality_Father_id` bigint(20) UNSIGNED NOT NULL,
  `Blood_Type_Father_id` bigint(20) UNSIGNED NOT NULL,
  `Religion_Father_id` bigint(20) UNSIGNED NOT NULL,
  `Address_Father` varchar(255) NOT NULL,
  `Name_Mother` varchar(255) NOT NULL,
  `National_ID_Mother` varchar(255) NOT NULL,
  `Passport_ID_Mother` varchar(255) NOT NULL,
  `Phone_Mother` varchar(255) NOT NULL,
  `Job_Mother` varchar(255) NOT NULL,
  `Nationality_Mother_id` bigint(20) UNSIGNED NOT NULL,
  `Blood_Type_Mother_id` bigint(20) UNSIGNED NOT NULL,
  `Religion_Mother_id` bigint(20) UNSIGNED NOT NULL,
  `Address_Mother` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `my__parents`
--

INSERT INTO `my__parents` (`id`, `email`, `password`, `Name_Father`, `National_ID_Father`, `Passport_ID_Father`, `Phone_Father`, `Job_Father`, `Nationality_Father_id`, `Blood_Type_Father_id`, `Religion_Father_id`, `Address_Father`, `Name_Mother`, `National_ID_Mother`, `Passport_ID_Mother`, `Phone_Mother`, `Job_Mother`, `Nationality_Mother_id`, `Blood_Type_Mother_id`, `Religion_Mother_id`, `Address_Mother`, `created_at`, `updated_at`) VALUES
(1, 'parent@yahoo.com', '$2y$10$m5Gj3rMaRI5ITm2WfIVyHeTM/zg7Zs4FkJLOluXvSVOI4L8Z26oCG', '{\"en\":\"emad\",\"ar\":\"\\u0639\\u0645\\u0627\\u062f \\u0645\\u062d\\u0645\\u062f\"}', '1234567810', '1234567810', '1234567810', '{\"en\":\"programmer\",\"ar\":\"\\u0645\\u0628\\u0631\\u0645\\u062c\"}', 45, 5, 2, 'القاهرة', '{\"en\":\"SS\",\"ar\":\"\\u0633\\u0633\"}', '1234567810', '1234567810', '1234567810', '{\"en\":\"Teacher\",\"ar\":\"\\u0645\\u0639\\u0644\\u0645\\u0629\"}', 29, 7, 3, 'القاهرة', '2022-12-28 08:25:24', '2022-12-28 08:25:24');

-- --------------------------------------------------------

--
-- بنية الجدول `nationalities`
--

CREATE TABLE `nationalities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `nationalities`
--

INSERT INTO `nationalities` (`id`, `Name`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Afghan\",\"ar\":\"\\u0623\\u0641\\u063a\\u0627\\u0646\\u0633\\u062a\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(2, '{\"en\":\"Albanian\",\"ar\":\"\\u0623\\u0644\\u0628\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(3, '{\"en\":\"Aland Islander\",\"ar\":\"\\u0622\\u0644\\u0627\\u0646\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(4, '{\"en\":\"Algerian\",\"ar\":\"\\u062c\\u0632\\u0627\\u0626\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(5, '{\"en\":\"American Samoan\",\"ar\":\"\\u0623\\u0645\\u0631\\u064a\\u0643\\u064a \\u0633\\u0627\\u0645\\u0648\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(6, '{\"en\":\"Andorran\",\"ar\":\"\\u0623\\u0646\\u062f\\u0648\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(7, '{\"en\":\"Angolan\",\"ar\":\"\\u0623\\u0646\\u0642\\u0648\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(8, '{\"en\":\"Anguillan\",\"ar\":\"\\u0623\\u0646\\u063a\\u0648\\u064a\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(9, '{\"en\":\"Antarctican\",\"ar\":\"\\u0623\\u0646\\u062a\\u0627\\u0631\\u0643\\u062a\\u064a\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(10, '{\"en\":\"Antiguan\",\"ar\":\"\\u0628\\u0631\\u0628\\u0648\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(11, '{\"en\":\"Argentinian\",\"ar\":\"\\u0623\\u0631\\u062c\\u0646\\u062a\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(12, '{\"en\":\"Armenian\",\"ar\":\"\\u0623\\u0631\\u0645\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(13, '{\"en\":\"Aruban\",\"ar\":\"\\u0623\\u0648\\u0631\\u0648\\u0628\\u0647\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(14, '{\"en\":\"Australian\",\"ar\":\"\\u0623\\u0633\\u062a\\u0631\\u0627\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(15, '{\"en\":\"Austrian\",\"ar\":\"\\u0646\\u0645\\u0633\\u0627\\u0648\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(16, '{\"en\":\"Azerbaijani\",\"ar\":\"\\u0623\\u0630\\u0631\\u0628\\u064a\\u062c\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(17, '{\"en\":\"Bahamian\",\"ar\":\"\\u0628\\u0627\\u0647\\u0627\\u0645\\u064a\\u0633\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(18, '{\"en\":\"Bahraini\",\"ar\":\"\\u0628\\u062d\\u0631\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(19, '{\"en\":\"Bangladeshi\",\"ar\":\"\\u0628\\u0646\\u063a\\u0644\\u0627\\u062f\\u064a\\u0634\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(20, '{\"en\":\"Barbadian\",\"ar\":\"\\u0628\\u0631\\u0628\\u0627\\u062f\\u0648\\u0633\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(21, '{\"en\":\"Belarusian\",\"ar\":\"\\u0631\\u0648\\u0633\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(22, '{\"en\":\"Belgian\",\"ar\":\"\\u0628\\u0644\\u062c\\u064a\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(23, '{\"en\":\"Belizean\",\"ar\":\"\\u0628\\u064a\\u0644\\u064a\\u0632\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(24, '{\"en\":\"Beninese\",\"ar\":\"\\u0628\\u0646\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(25, '{\"en\":\"Saint Barthelmian\",\"ar\":\"\\u0633\\u0627\\u0646 \\u0628\\u0627\\u0631\\u062a\\u064a\\u0644\\u0645\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(26, '{\"en\":\"Bermudan\",\"ar\":\"\\u0628\\u0631\\u0645\\u0648\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(27, '{\"en\":\"Bhutanese\",\"ar\":\"\\u0628\\u0648\\u062a\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(28, '{\"en\":\"Bolivian\",\"ar\":\"\\u0628\\u0648\\u0644\\u064a\\u0641\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(29, '{\"en\":\"Bosnian \\/ Herzegovinian\",\"ar\":\"\\u0628\\u0648\\u0633\\u0646\\u064a\\/\\u0647\\u0631\\u0633\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(30, '{\"en\":\"Botswanan\",\"ar\":\"\\u0628\\u0648\\u062a\\u0633\\u0648\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(31, '{\"en\":\"Bouvetian\",\"ar\":\"\\u0628\\u0648\\u0641\\u064a\\u0647\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(32, '{\"en\":\"Brazilian\",\"ar\":\"\\u0628\\u0631\\u0627\\u0632\\u064a\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(33, '{\"en\":\"British Indian Ocean Territory\",\"ar\":\"\\u0625\\u0642\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0645\\u062d\\u064a\\u0637 \\u0627\\u0644\\u0647\\u0646\\u062f\\u064a \\u0627\\u0644\\u0628\\u0631\\u064a\\u0637\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(34, '{\"en\":\"Bruneian\",\"ar\":\"\\u0628\\u0631\\u0648\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(35, '{\"en\":\"Bulgarian\",\"ar\":\"\\u0628\\u0644\\u063a\\u0627\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(36, '{\"en\":\"Burkinabe\",\"ar\":\"\\u0628\\u0648\\u0631\\u0643\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(37, '{\"en\":\"Burundian\",\"ar\":\"\\u0628\\u0648\\u0631\\u0648\\u0646\\u064a\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(38, '{\"en\":\"Cambodian\",\"ar\":\"\\u0643\\u0645\\u0628\\u0648\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(39, '{\"en\":\"Cameroonian\",\"ar\":\"\\u0643\\u0627\\u0645\\u064a\\u0631\\u0648\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(40, '{\"en\":\"Canadian\",\"ar\":\"\\u0643\\u0646\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(41, '{\"en\":\"Cape Verdean\",\"ar\":\"\\u0627\\u0644\\u0631\\u0623\\u0633 \\u0627\\u0644\\u0623\\u062e\\u0636\\u0631\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(42, '{\"en\":\"Caymanian\",\"ar\":\"\\u0643\\u0627\\u064a\\u0645\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(43, '{\"en\":\"Central African\",\"ar\":\"\\u0623\\u0641\\u0631\\u064a\\u0642\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(44, '{\"en\":\"Chadian\",\"ar\":\"\\u062a\\u0634\\u0627\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(45, '{\"en\":\"Chilean\",\"ar\":\"\\u0634\\u064a\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(46, '{\"en\":\"Chinese\",\"ar\":\"\\u0635\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(47, '{\"en\":\"Christmas Islander\",\"ar\":\"\\u062c\\u0632\\u064a\\u0631\\u0629 \\u0639\\u064a\\u062f \\u0627\\u0644\\u0645\\u064a\\u0644\\u0627\\u062f\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(48, '{\"en\":\"Cocos Islander\",\"ar\":\"\\u062c\\u0632\\u0631 \\u0643\\u0648\\u0643\\u0648\\u0633\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(49, '{\"en\":\"Colombian\",\"ar\":\"\\u0643\\u0648\\u0644\\u0648\\u0645\\u0628\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(50, '{\"en\":\"Comorian\",\"ar\":\"\\u062c\\u0632\\u0631 \\u0627\\u0644\\u0642\\u0645\\u0631\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(51, '{\"en\":\"Congolese\",\"ar\":\"\\u0643\\u0648\\u0646\\u063a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(52, '{\"en\":\"Cook Islander\",\"ar\":\"\\u062c\\u0632\\u0631 \\u0643\\u0648\\u0643\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(53, '{\"en\":\"Costa Rican\",\"ar\":\"\\u0643\\u0648\\u0633\\u062a\\u0627\\u0631\\u064a\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(54, '{\"en\":\"Croatian\",\"ar\":\"\\u0643\\u0648\\u0631\\u0627\\u062a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(55, '{\"en\":\"Cuban\",\"ar\":\"\\u0643\\u0648\\u0628\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(56, '{\"en\":\"Cypriot\",\"ar\":\"\\u0642\\u0628\\u0631\\u0635\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(57, '{\"en\":\"Curacian\",\"ar\":\"\\u0643\\u0648\\u0631\\u0627\\u0633\\u0627\\u0648\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(58, '{\"en\":\"Czech\",\"ar\":\"\\u062a\\u0634\\u064a\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(59, '{\"en\":\"Danish\",\"ar\":\"\\u062f\\u0646\\u0645\\u0627\\u0631\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(60, '{\"en\":\"Djiboutian\",\"ar\":\"\\u062c\\u064a\\u0628\\u0648\\u062a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(61, '{\"en\":\"Dominican\",\"ar\":\"\\u062f\\u0648\\u0645\\u064a\\u0646\\u064a\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(62, '{\"en\":\"Dominican\",\"ar\":\"\\u062f\\u0648\\u0645\\u064a\\u0646\\u064a\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(63, '{\"en\":\"Ecuadorian\",\"ar\":\"\\u0625\\u0643\\u0648\\u0627\\u062f\\u0648\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(64, '{\"en\":\"Egyptian\",\"ar\":\"\\u0645\\u0635\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(65, '{\"en\":\"Salvadoran\",\"ar\":\"\\u0633\\u0644\\u0641\\u0627\\u062f\\u0648\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(66, '{\"en\":\"Equatorial Guinean\",\"ar\":\"\\u063a\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(67, '{\"en\":\"Eritrean\",\"ar\":\"\\u0625\\u0631\\u064a\\u062a\\u064a\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(68, '{\"en\":\"Estonian\",\"ar\":\"\\u0627\\u0633\\u062a\\u0648\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(69, '{\"en\":\"Ethiopian\",\"ar\":\"\\u0623\\u062b\\u064a\\u0648\\u0628\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(70, '{\"en\":\"Falkland Islander\",\"ar\":\"\\u0641\\u0648\\u0643\\u0644\\u0627\\u0646\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(71, '{\"en\":\"Faroese\",\"ar\":\"\\u062c\\u0632\\u0631 \\u0641\\u0627\\u0631\\u0648\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(72, '{\"en\":\"Fijian\",\"ar\":\"\\u0641\\u064a\\u062c\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(73, '{\"en\":\"Finnish\",\"ar\":\"\\u0641\\u0646\\u0644\\u0646\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(74, '{\"en\":\"French\",\"ar\":\"\\u0641\\u0631\\u0646\\u0633\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(75, '{\"en\":\"French Guianese\",\"ar\":\"\\u063a\\u0648\\u064a\\u0627\\u0646\\u0627 \\u0627\\u0644\\u0641\\u0631\\u0646\\u0633\\u064a\\u0629\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(76, '{\"en\":\"French Polynesian\",\"ar\":\"\\u0628\\u0648\\u0644\\u064a\\u0646\\u064a\\u0632\\u064a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(77, '{\"en\":\"French\",\"ar\":\"\\u0623\\u0631\\u0627\\u0636 \\u0641\\u0631\\u0646\\u0633\\u064a\\u0629 \\u062c\\u0646\\u0648\\u0628\\u064a\\u0629 \\u0648\\u0623\\u0646\\u062a\\u0627\\u0631\\u062a\\u064a\\u0643\\u064a\\u0629\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(78, '{\"en\":\"Gabonese\",\"ar\":\"\\u063a\\u0627\\u0628\\u0648\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(79, '{\"en\":\"Gambian\",\"ar\":\"\\u063a\\u0627\\u0645\\u0628\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(80, '{\"en\":\"Georgian\",\"ar\":\"\\u062c\\u064a\\u0648\\u0631\\u062c\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(81, '{\"en\":\"German\",\"ar\":\"\\u0623\\u0644\\u0645\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(82, '{\"en\":\"Ghanaian\",\"ar\":\"\\u063a\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(83, '{\"en\":\"Gibraltar\",\"ar\":\"\\u062c\\u0628\\u0644 \\u0637\\u0627\\u0631\\u0642\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(84, '{\"en\":\"Guernsian\",\"ar\":\"\\u063a\\u064a\\u0631\\u0646\\u0632\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(85, '{\"en\":\"Greek\",\"ar\":\"\\u064a\\u0648\\u0646\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(86, '{\"en\":\"Greenlandic\",\"ar\":\"\\u062c\\u0631\\u064a\\u0646\\u0644\\u0627\\u0646\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(87, '{\"en\":\"Grenadian\",\"ar\":\"\\u063a\\u0631\\u064a\\u0646\\u0627\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(88, '{\"en\":\"Guadeloupe\",\"ar\":\"\\u062c\\u0632\\u0631 \\u062c\\u0648\\u0627\\u062f\\u0644\\u0648\\u0628\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(89, '{\"en\":\"Guamanian\",\"ar\":\"\\u062c\\u0648\\u0627\\u0645\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(90, '{\"en\":\"Guatemalan\",\"ar\":\"\\u063a\\u0648\\u0627\\u062a\\u064a\\u0645\\u0627\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(91, '{\"en\":\"Guinean\",\"ar\":\"\\u063a\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(92, '{\"en\":\"Guinea-Bissauan\",\"ar\":\"\\u063a\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(93, '{\"en\":\"Guyanese\",\"ar\":\"\\u063a\\u064a\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(94, '{\"en\":\"Haitian\",\"ar\":\"\\u0647\\u0627\\u064a\\u062a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(95, '{\"en\":\"Heard and Mc Donald Islanders\",\"ar\":\"\\u062c\\u0632\\u064a\\u0631\\u0629 \\u0647\\u064a\\u0631\\u062f \\u0648\\u062c\\u0632\\u0631 \\u0645\\u0627\\u0643\\u062f\\u0648\\u0646\\u0627\\u0644\\u062f\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(96, '{\"en\":\"Honduran\",\"ar\":\"\\u0647\\u0646\\u062f\\u0648\\u0631\\u0627\\u0633\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(97, '{\"en\":\"Hongkongese\",\"ar\":\"\\u0647\\u0648\\u0646\\u063a \\u0643\\u0648\\u0646\\u063a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(98, '{\"en\":\"Hungarian\",\"ar\":\"\\u0645\\u062c\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(99, '{\"en\":\"Icelandic\",\"ar\":\"\\u0622\\u064a\\u0633\\u0644\\u0646\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(100, '{\"en\":\"Indian\",\"ar\":\"\\u0647\\u0646\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(101, '{\"en\":\"Manx\",\"ar\":\"\\u0645\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(102, '{\"en\":\"Indonesian\",\"ar\":\"\\u0623\\u0646\\u062f\\u0648\\u0646\\u064a\\u0633\\u064a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(103, '{\"en\":\"Iranian\",\"ar\":\"\\u0625\\u064a\\u0631\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(104, '{\"en\":\"Iraqi\",\"ar\":\"\\u0639\\u0631\\u0627\\u0642\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(105, '{\"en\":\"Irish\",\"ar\":\"\\u0625\\u064a\\u0631\\u0644\\u0646\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(106, '{\"en\":\"Italian\",\"ar\":\"\\u0625\\u064a\\u0637\\u0627\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(107, '{\"en\":\"Ivory Coastian\",\"ar\":\"\\u0633\\u0627\\u062d\\u0644 \\u0627\\u0644\\u0639\\u0627\\u062c\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(108, '{\"en\":\"Jersian\",\"ar\":\"\\u062c\\u064a\\u0631\\u0632\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(109, '{\"en\":\"Jamaican\",\"ar\":\"\\u062c\\u0645\\u0627\\u064a\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(110, '{\"en\":\"Japanese\",\"ar\":\"\\u064a\\u0627\\u0628\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(111, '{\"en\":\"Jordanian\",\"ar\":\"\\u0623\\u0631\\u062f\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(112, '{\"en\":\"Kazakh\",\"ar\":\"\\u0643\\u0627\\u0632\\u0627\\u062e\\u0633\\u062a\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(113, '{\"en\":\"Kenyan\",\"ar\":\"\\u0643\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(114, '{\"en\":\"I-Kiribati\",\"ar\":\"\\u0643\\u064a\\u0631\\u064a\\u0628\\u0627\\u062a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(115, '{\"en\":\"North Korean\",\"ar\":\"\\u0643\\u0648\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(116, '{\"en\":\"South Korean\",\"ar\":\"\\u0643\\u0648\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(117, '{\"en\":\"Kosovar\",\"ar\":\"\\u0643\\u0648\\u0633\\u064a\\u0641\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(118, '{\"en\":\"Kuwaiti\",\"ar\":\"\\u0643\\u0648\\u064a\\u062a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(119, '{\"en\":\"Kyrgyzstani\",\"ar\":\"\\u0642\\u064a\\u0631\\u063a\\u064a\\u0632\\u0633\\u062a\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(120, '{\"en\":\"Laotian\",\"ar\":\"\\u0644\\u0627\\u0648\\u0633\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(121, '{\"en\":\"Latvian\",\"ar\":\"\\u0644\\u0627\\u062a\\u064a\\u0641\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(122, '{\"en\":\"Lebanese\",\"ar\":\"\\u0644\\u0628\\u0646\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(123, '{\"en\":\"Basotho\",\"ar\":\"\\u0644\\u064a\\u0648\\u0633\\u064a\\u062a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(124, '{\"en\":\"Liberian\",\"ar\":\"\\u0644\\u064a\\u0628\\u064a\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(125, '{\"en\":\"Libyan\",\"ar\":\"\\u0644\\u064a\\u0628\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(126, '{\"en\":\"Liechtenstein\",\"ar\":\"\\u0644\\u064a\\u062e\\u062a\\u0646\\u0634\\u062a\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(127, '{\"en\":\"Lithuanian\",\"ar\":\"\\u0644\\u062a\\u0648\\u0627\\u0646\\u064a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(128, '{\"en\":\"Luxembourger\",\"ar\":\"\\u0644\\u0648\\u0643\\u0633\\u0645\\u0628\\u0648\\u0631\\u063a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(129, '{\"en\":\"Sri Lankian\",\"ar\":\"\\u0633\\u0631\\u064a\\u0644\\u0627\\u0646\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(130, '{\"en\":\"Macanese\",\"ar\":\"\\u0645\\u0627\\u0643\\u0627\\u0648\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(131, '{\"en\":\"Macedonian\",\"ar\":\"\\u0645\\u0642\\u062f\\u0648\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(132, '{\"en\":\"Malagasy\",\"ar\":\"\\u0645\\u062f\\u063a\\u0634\\u0642\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(133, '{\"en\":\"Malawian\",\"ar\":\"\\u0645\\u0627\\u0644\\u0627\\u0648\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(134, '{\"en\":\"Malaysian\",\"ar\":\"\\u0645\\u0627\\u0644\\u064a\\u0632\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(135, '{\"en\":\"Maldivian\",\"ar\":\"\\u0645\\u0627\\u0644\\u062f\\u064a\\u0641\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(136, '{\"en\":\"Malian\",\"ar\":\"\\u0645\\u0627\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(137, '{\"en\":\"Maltese\",\"ar\":\"\\u0645\\u0627\\u0644\\u0637\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(138, '{\"en\":\"Marshallese\",\"ar\":\"\\u0645\\u0627\\u0631\\u0634\\u0627\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(139, '{\"en\":\"Martiniquais\",\"ar\":\"\\u0645\\u0627\\u0631\\u062a\\u064a\\u0646\\u064a\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(140, '{\"en\":\"Mauritanian\",\"ar\":\"\\u0645\\u0648\\u0631\\u064a\\u062a\\u0627\\u0646\\u064a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(141, '{\"en\":\"Mauritian\",\"ar\":\"\\u0645\\u0648\\u0631\\u064a\\u0634\\u064a\\u0648\\u0633\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(142, '{\"en\":\"Mahoran\",\"ar\":\"\\u0645\\u0627\\u064a\\u0648\\u062a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(143, '{\"en\":\"Mexican\",\"ar\":\"\\u0645\\u0643\\u0633\\u064a\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(144, '{\"en\":\"Micronesian\",\"ar\":\"\\u0645\\u0627\\u064a\\u0643\\u0631\\u0648\\u0646\\u064a\\u0632\\u064a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(145, '{\"en\":\"Moldovan\",\"ar\":\"\\u0645\\u0648\\u0644\\u062f\\u064a\\u0641\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(146, '{\"en\":\"Monacan\",\"ar\":\"\\u0645\\u0648\\u0646\\u064a\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(147, '{\"en\":\"Mongolian\",\"ar\":\"\\u0645\\u0646\\u063a\\u0648\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(148, '{\"en\":\"Montenegrin\",\"ar\":\"\\u0627\\u0644\\u062c\\u0628\\u0644 \\u0627\\u0644\\u0623\\u0633\\u0648\\u062f\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(149, '{\"en\":\"Montserratian\",\"ar\":\"\\u0645\\u0648\\u0646\\u062a\\u0633\\u064a\\u0631\\u0627\\u062a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(150, '{\"en\":\"Moroccan\",\"ar\":\"\\u0645\\u063a\\u0631\\u0628\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(151, '{\"en\":\"Mozambican\",\"ar\":\"\\u0645\\u0648\\u0632\\u0645\\u0628\\u064a\\u0642\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(152, '{\"en\":\"Myanmarian\",\"ar\":\"\\u0645\\u064a\\u0627\\u0646\\u0645\\u0627\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(153, '{\"en\":\"Namibian\",\"ar\":\"\\u0646\\u0627\\u0645\\u064a\\u0628\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(154, '{\"en\":\"Nauruan\",\"ar\":\"\\u0646\\u0648\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(155, '{\"en\":\"Nepalese\",\"ar\":\"\\u0646\\u064a\\u0628\\u0627\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(156, '{\"en\":\"Dutch\",\"ar\":\"\\u0647\\u0648\\u0644\\u0646\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(157, '{\"en\":\"Dutch Antilier\",\"ar\":\"\\u0647\\u0648\\u0644\\u0646\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(158, '{\"en\":\"New Caledonian\",\"ar\":\"\\u0643\\u0627\\u0644\\u064a\\u062f\\u0648\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(159, '{\"en\":\"New Zealander\",\"ar\":\"\\u0646\\u064a\\u0648\\u0632\\u064a\\u0644\\u0646\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(160, '{\"en\":\"Nicaraguan\",\"ar\":\"\\u0646\\u064a\\u0643\\u0627\\u0631\\u0627\\u062c\\u0648\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(161, '{\"en\":\"Nigerien\",\"ar\":\"\\u0646\\u064a\\u062c\\u064a\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(162, '{\"en\":\"Nigerian\",\"ar\":\"\\u0646\\u064a\\u062c\\u064a\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(163, '{\"en\":\"Niuean\",\"ar\":\"\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(164, '{\"en\":\"Norfolk Islander\",\"ar\":\"\\u0646\\u0648\\u0631\\u0641\\u0648\\u0644\\u064a\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(165, '{\"en\":\"Northern Marianan\",\"ar\":\"\\u0645\\u0627\\u0631\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(166, '{\"en\":\"Norwegian\",\"ar\":\"\\u0646\\u0631\\u0648\\u064a\\u062c\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(167, '{\"en\":\"Omani\",\"ar\":\"\\u0639\\u0645\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(168, '{\"en\":\"Pakistani\",\"ar\":\"\\u0628\\u0627\\u0643\\u0633\\u062a\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(169, '{\"en\":\"Palauan\",\"ar\":\"\\u0628\\u0627\\u0644\\u0627\\u0648\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(170, '{\"en\":\"Palestinian\",\"ar\":\"\\u0641\\u0644\\u0633\\u0637\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(171, '{\"en\":\"Panamanian\",\"ar\":\"\\u0628\\u0646\\u0645\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(172, '{\"en\":\"Papua New Guinean\",\"ar\":\"\\u0628\\u0627\\u0628\\u0648\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(173, '{\"en\":\"Paraguayan\",\"ar\":\"\\u0628\\u0627\\u0631\\u063a\\u0627\\u0648\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(174, '{\"en\":\"Peruvian\",\"ar\":\"\\u0628\\u064a\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(175, '{\"en\":\"Filipino\",\"ar\":\"\\u0641\\u0644\\u0628\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(176, '{\"en\":\"Pitcairn Islander\",\"ar\":\"\\u0628\\u064a\\u062a\\u0643\\u064a\\u0631\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(177, '{\"en\":\"Polish\",\"ar\":\"\\u0628\\u0648\\u0644\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(178, '{\"en\":\"Portuguese\",\"ar\":\"\\u0628\\u0631\\u062a\\u063a\\u0627\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(179, '{\"en\":\"Puerto Rican\",\"ar\":\"\\u0628\\u0648\\u0631\\u062a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(180, '{\"en\":\"Qatari\",\"ar\":\"\\u0642\\u0637\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(181, '{\"en\":\"Reunionese\",\"ar\":\"\\u0631\\u064a\\u0648\\u0646\\u064a\\u0648\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(182, '{\"en\":\"Romanian\",\"ar\":\"\\u0631\\u0648\\u0645\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(183, '{\"en\":\"Russian\",\"ar\":\"\\u0631\\u0648\\u0633\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(184, '{\"en\":\"Rwandan\",\"ar\":\"\\u0631\\u0648\\u0627\\u0646\\u062f\\u0627\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(185, '{\"ar\":\"Kittitian\\/Nevisian\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(186, '{\"en\":\"St. Martian(French)\",\"ar\":\"\\u0633\\u0627\\u064a\\u0646\\u062a \\u0645\\u0627\\u0631\\u062a\\u0646\\u064a \\u0641\\u0631\\u0646\\u0633\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(187, '{\"en\":\"St. Martian(Dutch)\",\"ar\":\"\\u0633\\u0627\\u064a\\u0646\\u062a \\u0645\\u0627\\u0631\\u062a\\u0646\\u064a \\u0647\\u0648\\u0644\\u0646\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(188, '{\"en\":\"St. Pierre and Miquelon\",\"ar\":\"\\u0633\\u0627\\u0646 \\u0628\\u064a\\u064a\\u0631 \\u0648\\u0645\\u064a\\u0643\\u0644\\u0648\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(189, '{\"en\":\"Saint Vincent and the Grenadines\",\"ar\":\"\\u0633\\u0627\\u0646\\u062a \\u0641\\u0646\\u0633\\u0646\\u062a \\u0648\\u062c\\u0632\\u0631 \\u063a\\u0631\\u064a\\u0646\\u0627\\u062f\\u064a\\u0646\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(190, '{\"en\":\"Samoan\",\"ar\":\"\\u0633\\u0627\\u0645\\u0648\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(191, '{\"en\":\"Sammarinese\",\"ar\":\"\\u0645\\u0627\\u0631\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(192, '{\"en\":\"Sao Tomean\",\"ar\":\"\\u0633\\u0627\\u0648 \\u062a\\u0648\\u0645\\u064a \\u0648\\u0628\\u0631\\u064a\\u0646\\u0633\\u064a\\u0628\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(193, '{\"en\":\"Saudi Arabian\",\"ar\":\"\\u0633\\u0639\\u0648\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(194, '{\"en\":\"Senegalese\",\"ar\":\"\\u0633\\u0646\\u063a\\u0627\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(195, '{\"en\":\"Serbian\",\"ar\":\"\\u0635\\u0631\\u0628\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(196, '{\"en\":\"Seychellois\",\"ar\":\"\\u0633\\u064a\\u0634\\u064a\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(197, '{\"en\":\"Sierra Leonean\",\"ar\":\"\\u0633\\u064a\\u0631\\u0627\\u0644\\u064a\\u0648\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(198, '{\"en\":\"Singaporean\",\"ar\":\"\\u0633\\u0646\\u063a\\u0627\\u0641\\u0648\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(199, '{\"en\":\"Slovak\",\"ar\":\"\\u0633\\u0648\\u0644\\u0641\\u0627\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(200, '{\"en\":\"Slovenian\",\"ar\":\"\\u0633\\u0648\\u0644\\u0641\\u064a\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(201, '{\"en\":\"Solomon Island\",\"ar\":\"\\u062c\\u0632\\u0631 \\u0633\\u0644\\u064a\\u0645\\u0627\\u0646\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(202, '{\"en\":\"Somali\",\"ar\":\"\\u0635\\u0648\\u0645\\u0627\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(203, '{\"en\":\"South African\",\"ar\":\"\\u0623\\u0641\\u0631\\u064a\\u0642\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(204, '{\"en\":\"South Georgia and the South Sandwich\",\"ar\":\"\\u0644\\u0645\\u0646\\u0637\\u0642\\u0629 \\u0627\\u0644\\u0642\\u0637\\u0628\\u064a\\u0629 \\u0627\\u0644\\u062c\\u0646\\u0648\\u0628\\u064a\\u0629\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(205, '{\"en\":\"South Sudanese\",\"ar\":\"\\u0633\\u0648\\u0627\\u062f\\u0646\\u064a \\u062c\\u0646\\u0648\\u0628\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(206, '{\"en\":\"Spanish\",\"ar\":\"\\u0625\\u0633\\u0628\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(207, '{\"en\":\"St. Helenian\",\"ar\":\"\\u0647\\u064a\\u0644\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(208, '{\"en\":\"Sudanese\",\"ar\":\"\\u0633\\u0648\\u062f\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(209, '{\"en\":\"Surinamese\",\"ar\":\"\\u0633\\u0648\\u0631\\u064a\\u0646\\u0627\\u0645\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(210, '{\"en\":\"Svalbardian\\/Jan Mayenian\",\"ar\":\"\\u0633\\u0641\\u0627\\u0644\\u0628\\u0627\\u0631\\u062f \\u0648\\u064a\\u0627\\u0646 \\u0645\\u0627\\u064a\\u0646\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(211, '{\"en\":\"Swazi\",\"ar\":\"\\u0633\\u0648\\u0627\\u0632\\u064a\\u0644\\u0646\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(212, '{\"en\":\"Swedish\",\"ar\":\"\\u0633\\u0648\\u064a\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(213, '{\"en\":\"Swiss\",\"ar\":\"\\u0633\\u0648\\u064a\\u0633\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(214, '{\"en\":\"Syrian\",\"ar\":\"\\u0633\\u0648\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(215, '{\"en\":\"Taiwanese\",\"ar\":\"\\u062a\\u0627\\u064a\\u0648\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(216, '{\"en\":\"Tajikistani\",\"ar\":\"\\u0637\\u0627\\u062c\\u064a\\u0643\\u0633\\u062a\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(217, '{\"en\":\"Tanzanian\",\"ar\":\"\\u062a\\u0646\\u0632\\u0627\\u0646\\u064a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(218, '{\"en\":\"Thai\",\"ar\":\"\\u062a\\u0627\\u064a\\u0644\\u0646\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(219, '{\"en\":\"Timor-Lestian\",\"ar\":\"\\u062a\\u064a\\u0645\\u0648\\u0631\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(220, '{\"en\":\"Togolese\",\"ar\":\"\\u062a\\u0648\\u063a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(221, '{\"en\":\"Tokelaian\",\"ar\":\"\\u062a\\u0648\\u0643\\u064a\\u0644\\u0627\\u0648\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(222, '{\"en\":\"Tongan\",\"ar\":\"\\u062a\\u0648\\u0646\\u063a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(223, '{\"en\":\"Trinidadian\\/Tobagonian\",\"ar\":\"\\u062a\\u0631\\u064a\\u0646\\u064a\\u062f\\u0627\\u062f \\u0648\\u062a\\u0648\\u0628\\u0627\\u063a\\u0648\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(224, '{\"en\":\"Tunisian\",\"ar\":\"\\u062a\\u0648\\u0646\\u0633\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(225, '{\"en\":\"Turkish\",\"ar\":\"\\u062a\\u0631\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(226, '{\"en\":\"Turkmen\",\"ar\":\"\\u062a\\u0631\\u0643\\u0645\\u0627\\u0646\\u0633\\u062a\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(227, '{\"en\":\"Turks and Caicos Islands\",\"ar\":\"\\u062c\\u0632\\u0631 \\u062a\\u0648\\u0631\\u0643\\u0633 \\u0648\\u0643\\u0627\\u064a\\u0643\\u0648\\u0633\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(228, '{\"en\":\"Tuvaluan\",\"ar\":\"\\u062a\\u0648\\u0641\\u0627\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(229, '{\"en\":\"Ugandan\",\"ar\":\"\\u0623\\u0648\\u063a\\u0646\\u062f\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(230, '{\"en\":\"Ukrainian\",\"ar\":\"\\u0623\\u0648\\u0643\\u0631\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(231, '{\"en\":\"Emirati\",\"ar\":\"\\u0625\\u0645\\u0627\\u0631\\u0627\\u062a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(232, '{\"en\":\"British\",\"ar\":\"\\u0628\\u0631\\u064a\\u0637\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(233, '{\"en\":\"American\",\"ar\":\"\\u0623\\u0645\\u0631\\u064a\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(234, '{\"en\":\"US Minor Outlying Islander\",\"ar\":\"\\u0623\\u0645\\u0631\\u064a\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(235, '{\"en\":\"Uruguayan\",\"ar\":\"\\u0623\\u0648\\u0631\\u063a\\u0648\\u0627\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(236, '{\"en\":\"Uzbek\",\"ar\":\"\\u0623\\u0648\\u0632\\u0628\\u0627\\u0643\\u0633\\u062a\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(237, '{\"en\":\"Vanuatuan\",\"ar\":\"\\u0641\\u0627\\u0646\\u0648\\u0627\\u062a\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(238, '{\"en\":\"Venezuelan\",\"ar\":\"\\u0641\\u0646\\u0632\\u0648\\u064a\\u0644\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(239, '{\"en\":\"Vietnamese\",\"ar\":\"\\u0641\\u064a\\u062a\\u0646\\u0627\\u0645\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(240, '{\"en\":\"American Virgin Islander\",\"ar\":\"\\u0623\\u0645\\u0631\\u064a\\u0643\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(241, '{\"en\":\"Vatican\",\"ar\":\"\\u0641\\u0627\\u062a\\u064a\\u0643\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(242, '{\"en\":\"Wallisian\\/Futunan\",\"ar\":\"\\u0641\\u0648\\u062a\\u0648\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(243, '{\"en\":\"Sahrawian\",\"ar\":\"\\u0635\\u062d\\u0631\\u0627\\u0648\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(244, '{\"en\":\"Yemeni\",\"ar\":\"\\u064a\\u0645\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(245, '{\"en\":\"Zambian\",\"ar\":\"\\u0632\\u0627\\u0645\\u0628\\u064a\\u0627\\u0646\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(246, '{\"en\":\"Zimbabwean\",\"ar\":\"\\u0632\\u0645\\u0628\\u0627\\u0628\\u0648\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24');

-- --------------------------------------------------------

--
-- بنية الجدول `online_classes`
--

CREATE TABLE `online_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `integration` tinyint(1) NOT NULL,
  `Grade_id` bigint(20) UNSIGNED NOT NULL,
  `Classroom_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `meeting_id` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `start_at` datetime NOT NULL,
  `duration` int(11) NOT NULL COMMENT 'minutes',
  `password` varchar(255) NOT NULL COMMENT 'meeting password',
  `start_url` text NOT NULL,
  `join_url` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `parent_attachments`
--

CREATE TABLE `parent_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(4, 'midofathy081@gmail.com', 'yyizRBsMoQyPnOOiNFm6YG8mwFMgShhlsfwCRduQ', '2024-01-31 00:00:00', '2024-01-31 06:54:37'),
(5, 'amroldfox@gmail.com', 'JmZxI1O5cKZffUbzcOEagljFP4wkI1dRUDFn65z2', '2023-02-25 22:00:00', '2023-02-26 10:27:02'),
(6, 'mahmoudfathy23569@gmail.com', 'SyLGXLzAEWsNBt7jAXVPnL4xLCYVd9Y4aooYo3qn', '2024-01-31 00:00:00', '2024-01-31 06:49:18');

-- --------------------------------------------------------

--
-- بنية الجدول `payment_students`
--

CREATE TABLE `payment_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(8,2) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `processing_fees`
--

CREATE TABLE `processing_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(8,2) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `from_grade` bigint(20) UNSIGNED NOT NULL,
  `from_Classroom` bigint(20) UNSIGNED NOT NULL,
  `from_section` bigint(20) UNSIGNED NOT NULL,
  `to_grade` bigint(20) UNSIGNED NOT NULL,
  `to_Classroom` bigint(20) UNSIGNED NOT NULL,
  `to_section` bigint(20) UNSIGNED NOT NULL,
  `academic_year` varchar(255) NOT NULL,
  `academic_year_new` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `qnaeam`
--

CREATE TABLE `qnaeam` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `qnaeam`
--

INSERT INTO `qnaeam` (`id`, `exam_id`, `question_id`, `created_at`, `updated_at`) VALUES
(1, 3, 12, '2023-02-07 21:33:05', '2023-02-07 21:33:05'),
(2, 3, 14, '2023-02-07 21:33:05', '2023-02-07 21:33:05'),
(3, 3, 15, '2023-02-07 21:33:26', '2023-02-07 21:33:26'),
(4, 2, 16, '2023-02-07 21:33:26', '2023-02-07 21:33:26'),
(5, 1, 18, '2023-02-07 21:56:06', '2023-02-07 21:56:06'),
(6, 3, 19, '2023-02-07 21:56:06', '2023-02-07 21:56:06'),
(7, 3, 20, '2023-02-08 12:05:41', '2023-02-08 12:05:41'),
(8, 1, 24, '2023-02-12 09:39:05', '2023-02-12 09:39:05'),
(9, 5, 25, '2023-02-13 09:23:23', '2023-02-13 09:23:23'),
(10, 5, 26, '2023-02-13 09:24:26', '2023-02-13 09:24:26'),
(11, 6, 27, '2023-02-21 07:21:39', '2023-02-21 07:21:39'),
(12, 6, 28, '2023-02-21 07:22:48', '2023-02-21 07:22:48'),
(13, 6, 29, '2023-02-21 08:44:44', '2023-02-21 08:44:44'),
(14, 0, 30, '2023-02-26 10:39:29', '2023-02-26 10:39:29'),
(15, 0, 31, '2023-02-26 10:41:26', '2023-02-26 10:41:26'),
(16, 8, 32, '2023-03-15 12:53:55', '2023-03-15 12:53:55'),
(17, 8, 33, '2023-03-15 12:54:10', '2023-03-15 12:54:10'),
(18, 9, 34, '2024-01-17 09:49:31', '2024-01-17 09:49:31'),
(19, 8, 35, '2024-01-23 07:36:53', '2024-01-23 07:36:53'),
(20, 8, 36, '2024-01-23 08:08:05', '2024-01-23 08:08:05'),
(21, 8, 37, '2024-01-23 08:10:16', '2024-01-23 08:10:16'),
(22, 8, 38, '2024-01-23 08:15:55', '2024-01-23 08:15:55'),
(23, 8, 39, '2024-01-23 08:17:08', '2024-01-23 08:17:08'),
(24, 8, 40, '2024-01-23 08:49:05', '2024-01-23 08:49:05'),
(25, 8, 41, '2024-01-23 09:44:34', '2024-01-23 09:44:34');

-- --------------------------------------------------------

--
-- بنية الجدول `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `quizze_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `questions`
--

INSERT INTO `questions` (`id`, `title`, `description`, `quizze_id`, `created_at`, `updated_at`) VALUES
(32, 'hfjkjk', '<p>fhjgh</p>', 8, '2023-03-15 14:53:55', '2023-03-15 14:53:55'),
(33, 'fghjghjdfs', '<p>sdf</p>', 8, '2023-03-15 14:54:10', '2023-03-15 14:54:10'),
(34, 'jkdfd', '<p>efwef</p>', 9, '2024-01-17 09:49:31', '2024-01-17 09:49:31'),
(35, 'Given points P(7,5), Q(8,3), R(0,–1), and S(–1,1), which statement is true?', NULL, 8, '2024-01-23 07:36:53', '2024-01-23 07:36:53'),
(36, 'If y varies jointly as x and z and y = 12 when x = -2 and z = 3, find y when x = 4 and z = -1.', NULL, 8, '2024-01-23 08:08:05', '2024-01-23 08:08:05'),
(37, 'Find the value of c that makes trinomial a perfect square m2 + 11m + c ?', NULL, 8, '2024-01-23 08:10:16', '2024-01-23 08:10:16'),
(38, 'Simplify: (5 + √-8) + (-13 + 4√-2), where (√-1=i)', NULL, 8, '2024-01-23 08:15:55', '2024-01-23 08:15:55'),
(39, 'Kelsey and Madison leave a restaurant traveling in opposite directions on a straight road.  Kelsey drives 12 miles per hour faster than Madison.  After 2 hours, they are 176 miles apart.  Find Madison’s speed.', NULL, 8, '2024-01-23 08:17:08', '2024-01-23 08:17:08'),
(40, 'What is the area of an equilateral triangle of side length 8 cm?', NULL, 8, '2024-01-23 08:49:05', '2024-01-23 08:49:05'),
(41, 'Solve: 3/(x^2+3x)+(x+2)/(x+3)=1/x', NULL, 8, '2024-01-23 09:44:34', '2024-01-23 09:44:34');

-- --------------------------------------------------------

--
-- بنية الجدول `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `grade_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `time` time NOT NULL,
  `marks` float DEFAULT NULL,
  `totalmarks` float DEFAULT NULL,
  `plan` int(11) NOT NULL DEFAULT 0 COMMENT '0->free, 1->PAID',
  `price` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`price`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `quizzes`
--

INSERT INTO `quizzes` (`id`, `name`, `subject_id`, `grade_id`, `classroom_id`, `section_id`, `teacher_id`, `time`, `marks`, `totalmarks`, `plan`, `price`, `created_at`, `updated_at`) VALUES
(9, '{\"en\":\"cvbncvb\",\"ar\":\"turity\"}', 3, 3, 10, 15, 10, '05:30:00', 5, 10, 0, NULL, '2023-03-15 12:44:27', '2023-03-15 12:44:27'),
(8, '{\"en\":\"AmrBoard_Digital SAT_Test 6\",\"ar\":\"AmrBoard_Digital SAT_Test 6\"}', 3, 3, 10, 15, 10, '02:00:00', 5, 10, 0, NULL, '2023-02-26 10:35:59', '2023-02-27 09:53:10');

-- --------------------------------------------------------

--
-- بنية الجدول `receipt_students`
--

CREATE TABLE `receipt_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `Debit` decimal(8,2) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `religions`
--

CREATE TABLE `religions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `religions`
--

INSERT INTO `religions` (`id`, `Name`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Muslim\",\"ar\":\"\\u0645\\u0633\\u0644\\u0645\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(2, '{\"en\":\"Christian\",\"ar\":\"\\u0645\\u0633\\u064a\\u062d\\u064a\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(3, '{\"en\":\"Other\",\"ar\":\"\\u063a\\u064a\\u0631\\u0630\\u0644\\u0643\"}', '2022-12-28 08:25:24', '2022-12-28 08:25:24');

-- --------------------------------------------------------

--
-- بنية الجدول `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name_Section` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL,
  `Grade_id` bigint(20) UNSIGNED NOT NULL,
  `Class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `sections`
--

INSERT INTO `sections` (`id`, `Name_Section`, `Status`, `Grade_id`, `Class_id`, `created_at`, `updated_at`) VALUES
(18, '{\"ar\":\"ICT\",\"en\":\"ICT\"}', 1, 3, 10, '2023-03-15 08:47:54', '2023-03-15 08:47:54'),
(17, '{\"ar\":\"ICT\",\"en\":\"ICT\"}', 1, 3, 9, '2023-03-15 08:47:35', '2023-03-15 08:47:35'),
(16, '{\"ar\":\"ICT\",\"en\":\"ICT\"}', 1, 3, 8, '2023-03-15 08:47:18', '2023-03-15 08:47:18'),
(15, '{\"ar\":\"AST\",\"en\":\"AST\"}', 1, 3, 10, '2023-03-15 08:47:02', '2023-03-15 08:47:02'),
(14, '{\"ar\":\"AST\",\"en\":\"AST\"}', 1, 3, 9, '2023-03-15 08:46:22', '2023-03-15 08:46:22'),
(13, '{\"ar\":\"AST\",\"en\":\"AST\"}', 1, 3, 8, '2023-03-15 08:18:11', '2023-03-15 08:18:11');

-- --------------------------------------------------------

--
-- بنية الجدول `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'current_session', '2021-2022', NULL, '2024-01-31 06:47:33'),
(2, 'school_title', 'MS', NULL, '2024-01-31 06:47:33'),
(3, 'school_name', '7assaonline', NULL, '2024-01-31 06:47:33'),
(4, 'end_first_term', '01-12-2021', NULL, '2024-01-31 06:47:33'),
(5, 'end_second_term', '01-03-2022', NULL, '2024-01-31 06:47:33'),
(6, 'phone', '0123456789', NULL, '2024-01-31 06:47:33'),
(7, 'address', 'القاهرة', NULL, '2024-01-31 06:47:33'),
(8, 'school_email', 'info@7assaonline.com', NULL, '2024-01-31 06:47:33'),
(9, 'logo', '1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `specializations`
--

CREATE TABLE `specializations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `specializations`
--

INSERT INTO `specializations` (`id`, `Name`, `created_at`, `updated_at`) VALUES
(6, '{\"en\":\"Mathematics\",\"ar\":\"\\u0631\\u064a\\u0627\\u0636\\u064a\\u0627\\u062a\"}', '2023-02-23 08:48:32', '2023-02-23 08:48:32');

-- --------------------------------------------------------

--
-- بنية الجدول `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `student_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gender_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nationalitie_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blood_id` bigint(20) UNSIGNED DEFAULT NULL,
  `Date_Birth` date DEFAULT NULL,
  `Grade_id` bigint(20) UNSIGNED DEFAULT NULL,
  `Classroom_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_id` bigint(20) UNSIGNED DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `academic_year` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `teacher_id` bigint(11) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `student_id`, `gender_id`, `nationalitie_id`, `blood_id`, `Date_Birth`, `Grade_id`, `Classroom_id`, `section_id`, `parent_id`, `academic_year`, `active`, `teacher_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(25, '{\"ar\":\"mahmoud\",\"en\":\"mahmoud\"}', 'mahmoudfathy2356@gmail.com', '$2y$10$9dTDYxiEX4PcrLVgh7lR3O1SIfljAUQ5zYsF1P7i9WFzfCKZ8JrU.', 'LIAszPyYzoCmscm3waMHiFNSX7zeqKmM4ePOhOwt', 1, 64, NULL, NULL, 3, 10, 15, NULL, '2023', 1, 10, NULL, NULL, '2023-03-15 12:34:51'),
(26, NULL, 'ULBxFA.btwcpmb@borasca.xyz', '$2y$10$0QVY9Mj0NcPAnTpXMOjZte2W9WjVL.YXkP.3h4YILCjOwPS7zkGi2', 'SNmC15c3OZHEPXuqiuRXDtezqNdQWInmnnqcdmNX', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(27, NULL, 'cCXRuB.pqbmjbw@sabletree.foundation', '$2y$10$psCrYfqtZ.BAVtCJFBt03.DdilbvcvROaTw2cQRynxKucY/vROwNO', 'BlEBvUMdnFAu75ODgccr9QJUkzfQ2kc051G382YN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(28, NULL, 'YjKhat.qdwmmhc@sandcress.xyz', '$2y$10$cQ28G3H69b7LWzftgA.fo.T6qUa9eFeFGEfXUeAcnUmw1cH8LIl9u', 'OfrRvE3mxL27Rf7vkT1lTuUieRJTiC94Lp8FhFow', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(29, NULL, 'YApBWe.tqhjmtc@rottack.autos', '$2y$10$6tloEa9Cf7lwqimmGrMKZuCxinONoxDEX8DlKSRGNdoV6zGb38Ld.', 'hKQ0ZT0IFSOCBzZpRWfVqXI3x5tnzF4BsGlqxyaC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(30, NULL, 'OnxVHy.tbpjmjp@purline.top', '$2y$10$7Ud1tEDc67PgLwshHQWTxueZmaB4c4KvxEvJs45nIJkHgmKQYWdq2', '8IaP9YRJqb2JY6cYAOASiooZz4TfPqbS322D2TDQ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(31, NULL, 'EMooqz.bpthqbt@paravane.biz', '$2y$10$sGujFozUdls.8oOh.xKpWecbVoCUf9pD81o1J6wcRyHSqqk6MbEiC', 'fKyqkmLnKEVGiof1LAVhcAwzH8roL7mLtk2rQeDJ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(32, NULL, 'tFKtTO.djcbhb@brasswire.me', '$2y$10$lcvt8M3U.9EJ8Cy6AKXbk.hTP6fXge0js4zgWQRuA//Ja4nGksZS6', 'VYOufVY22ZGCpSrXKyIodQANrVbNovhIZAaw66sA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(33, NULL, 'kOXKeB.cpmbmwt@anaphora.team', '$2y$10$.JIR.JdAIoIdAfe6DtMF5OQcdwyFCEs0XTRBAAH/JDwylELor2.qS', 'cXadn3N2MGv4jUJYoQ6nVNrazEY4t0eiFdT9T473', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(34, NULL, 'tdjleB.wmqqjbc@rottack.autos', '$2y$10$s.hvvUQKKuCOhtYFDV3a1.oks3Rf8bsAUyZSebC6AinU4TQ5ulFNm', 'VMuXUlutUDZ1powRYcgOxpCTECyzf4VDhV5ch1j0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(35, NULL, 'tPjKpz.wbcdmht@sandcress.xyz', '$2y$10$tbW5XTBQaSPM200rOyRrsOhk4DHymsEsz1yWFpfQxYq.EIWJLKKt2', 'NBkIZTZ6i5kfNrafw8XjA3DJUAVnDrg5WF73CAUU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(36, NULL, 'SLLhqw.mjhjpwt@sandcress.xyz', '$2y$10$dGYDh.jcZRXe2hQSoU7xOOexnfChJ5whROCwIxZoc3ax6c1VRXWTC', 'xq39g93o4WDUS4G68u7ibxiXITmjsXrRMn0s5pJL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(37, NULL, 'jeepxj_90@yahoo.com', '$2y$10$xmf9rew2aSRzmkXJsf8yNO0u9B0LWLO/7ndZzWPfQgXfk0k2Lj9bm', 'DdkT8ijXOaOJcsCdvjkReop3eNX3nBZ12HwT3BBb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(38, NULL, 'kevinachristians@gmail.com', '$2y$10$BMHhJYmpH.NNAMklBsUF2uPpX/tAH.XXMwEBzaWvUYg5eCc2zSG.O', 'BoFWk0MYZGb2BiU19dgJSOWb5OTvlxRqJWtqOf9r', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(39, NULL, 'tvanstone@memberadvantage.com.au', '$2y$10$SptIP1zZwowyjtEcHT.r6e77UoshT4RHe1nBqTLOpT8JevFKxRoE2', '6prrzJCwXICJe9OFEkwAZsjClBsdzIMuMrA0WMO6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(40, NULL, 'maryj2977@yahoo.com', '$2y$10$bf/TtBYh5QJ9JboX/j8TOuigOIp576UUY1JOIkwSyQQHblLx.kmGG', '1mI9xjHEg8ouGqJSXDDdmLnh9J5MUzNMn6eGKjPd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(41, NULL, 'kanupatel01@gmail.com', '$2y$10$pX5Uu.mmFDX5cXO3BTLue.rPptcmmuqtXshrAeSKY.dsNsTgZ65h6', 'VSKGq7uietwioQFMnkgyCleFWq1hER7PbNV9Lvx1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(42, NULL, 'ewblue09@gmail.com', '$2y$10$/g5Nub26W4cKPIoz3i/5Ouzx8XGH1P0QbFXrJ8GUuU6En80HupKvO', 'W6m1QdUv5V4kLsRYoPWHK90OovMF2ooZGAy0avSx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(43, NULL, 'naAwXC.dbctddj@wheelry.boats', '$2y$10$SVoxBNfl4NN.ygYcPCdzS.yis/UFSjHXUGvq28SLabIV4kMJ0ZgJm', 'fIu4OcZxm00dQs06ByJRE6j2plSpeoM3g234kQoh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(44, NULL, 'sharonchancey1957@gmail.com', '$2y$10$owxo0ByIwlbBokhoaosmA.Qx/Q6XPV3sZ9jvPj068Kt54Rf7/TkKG', 'iYSP8T4jwXbQTvGIWzSCIrOC9Y8fWWv7WivtuD9k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(45, NULL, 'dongabel@comcast.net', '$2y$10$wuDy7I7a..OXEgvO/itPG.FdWE6zN5YOKp7qmPfq6fDzFKZVDs/tG', 'eFj8ArSbMwvRDfDOsqHl8vWEUJFNWa4vmNSKjn1n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(46, NULL, '2ndwind07@gmail.com', '$2y$10$K9YDT87DVi5k8hkusbFcnepqpbr.khb/7NRqSG7t.F.ryOOt/wWiW', 'NA848dpPBRhHSt4qEoSHtHh25Q8X5QCAifXE7wAn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(47, NULL, 'joannpalmer7744@comcast.net', '$2y$10$jM72AOH68WQo8bzX6UVCD.kBrBMgpC9te.Oo0y/qFkMOMv4Pe9oYW', 'Ld4QQ342kHBoV6ljMIdhxq0bIdjTHMFLnuosWze0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(48, NULL, 'mikem@landstarcak.com', '$2y$10$u54WpzL7YeS8/6SaedhFjONuSF.kxOgzF8WNvwcsdjT2KAdmCHhB6', 'hE8mnPLOznXC2GKtHjCvnddSUcOYeiIL4xhF9S3W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(49, NULL, 'crsimon05@gmail.com', '$2y$10$4CSS7kPeenOMuFPOsm5JweCo2cVqwmIVcPYIWx7zNayxocmPGfq0S', 'YctKxGJIbixTKplKurBurLls2LnqsDrCj26gPvue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(50, NULL, 'controller@gildevco.comn', '$2y$10$Z1jqHmsfSlVVKV8dFgBV5uqsYQeJ2wQ9E.W7Dxw/hBCaZVs30i9ru', 'XhslVMp379RKfpB4zO0Dtwr3LidTMHIhUB02KAX1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(51, NULL, 'kionabogard@gmail.com', '$2y$10$Kl7gGP3WjFixM463udLpHejDBTFd4P5Zu.13k4mBpkc7N07p8w5dK', 'Tm9DJLyDvkx2tpGLgQLXgWrF5I5NN2YRAOhAEOIA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(52, NULL, 'edpoulson@gmail.com', '$2y$10$HsmSIXvQ55d18JSN/WLKo.Uuo3No1UYWUMJ1pxj.Ofu.sMG2GFTI6', 'AqrmlF7kfgkcLqFhO2AwGbZjel0Ex74W15X12cw7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(53, NULL, '1962acorn@comcast.net', '$2y$10$mEZx2XY6xHDFIO5zgCWLHeZ/qiUU4oF76vCkLc1HtR0fdYJ3IPBhq', 'bxOk1dqVqFpMHgsxcgVB13U0yU8f5C7BDDN9TpEB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(54, NULL, 'justinlam.justin@gmail.com', '$2y$10$AAMBL7zD/dFe7SHTgBKMz.62qSRQcfcWsYNtnBx2CB4.tRYWzK55W', 'EMRmCWb2X8XLYBQZSruJofpioI1qwegk92u6EDS9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(55, NULL, 'atgrabert@gmail.com', '$2y$10$UuAISkLZ0xq.Jv3Tq5tFAeaDs8JltGh9KhvW22luQpO8eNc6zfj5O', 'HThp6ygjVwdn7lb3P34DkCRhcpYkQwgIMOkqzi9P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(56, NULL, 'vikingqueen2014@gmail.com', '$2y$10$SC5GhiCg1y75L2SkkJ2mPOlDWihkTx1zDZ58QJ.hzsZe4CqyN9dTC', 'AQa900lcwRmYjWVvhKH9HxcyL3k7nAMdDUdZFKef', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(57, NULL, 'tosuga@cpb4cm.com', '$2y$10$b29LliSP1mNGz/NGu8pfROBt0nTtoUy/c6Jw0zw1OACaGNTcD5qfG', 'MtCp1FZIzE9jz9yyshk50mPcx2Y3MeSwjpOdul8r', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(58, NULL, 'amandamegyesi@northcoastdesignbuild.com', '$2y$10$zNl25ixPpSsNoB9HDBgkg.1ROhZO33ya4BHOPcEbb/5ZXLrq8cOIC', 'MA40FaHeNMmYtKpalwclf8yI39KzqkIM1aOAdFiw', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(59, NULL, 'georgiatelecominstallation@yahoo.com', '$2y$10$xUa7Gq4IhRjieKBCzAo3u.h3NJB.KOoPqrIvbkRct6lTQQDvHjaVm', 'dO6tC0spdxK7rzFgDK1H1DxnCURQn0ZG2gtjY380', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(60, NULL, 'akrown@bayousbestburgers.com', '$2y$10$MM9y4EBSne7b772QVlvWiugg1F7Wp2h7F2jQDXn4n96HaQPazqwDG', 'Ugi1s5yHletoILvjjEY0DjLswnNMFP2E4njfAnbN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(61, NULL, 'jim.segers@thinkgreenlawnservice.com', '$2y$10$H454YercKx48ZX9XPFe7k.yF/CdodQer/ZexQj6a7GrazCy7cyBOq', 'yvcHH6V2dI8RlC0rOMgRaav8FHpCKP3nG5esnKyO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(62, NULL, 'jordan@humangear.com', '$2y$10$eVLg1h6GMxOhYxtQ//b7hOVM6twIuRm6H3oJdS0gdXOBQUkqX04Ue', '3OE9jIPdEMCUifhl247fpd7z77wmaEr2Dx1dny2g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(63, NULL, 'tacel75@gmail.com', '$2y$10$Nh0q/lz.aohFM0Qwy25Q3.ORHCB/zJdFxKmY5YwF4Bq3M/JwD5eFS', 'heeOiWZPbdiW124vivSQqiBDLcYC0AvJFYYRAW3h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(64, NULL, 'RShKha.mdbbtmh@spectrail.world', '$2y$10$ZJOrEFoLmoBqAhKkVwfSvOBm3FuwFU6H6aQPK96LujfJOZt3ir0PS', '9YCJWQsbDUyYqGHWkUAb1h9BUb7jGqpY5i1hHFaA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(65, NULL, 'm.boyle@mfpmn.com', '$2y$10$FrEU.BmlJvt2/2XR7Iq6puO2EcMfc6Gxm8zgb6PDOesoXwBtKrgr2', 'CVTubbSupbT8yAucIcx5kxdHdYr0cABdFpzrH3sk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(66, NULL, 'jomjar@gmail.com', '$2y$10$gf2D/3q0mm8kAzvA2YLlpeYSvzckBVtZTbtfqq57h8A09j3xL0o9u', '6pZ23ktRslHfARTgGo38qqK4MWKVGZWRBdvU3Qld', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(67, NULL, 'jimmynoyer8@gmail.com', '$2y$10$P1n5thRuJ4LZAfwIXqidee8K/xa/uzRx1pf9Hu8LQvYmjPLlPOL12', '5GqIifSscQmXTvqae9YFhqZ1mqOsvboZ4bJNTDwa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(68, NULL, 'steptosuccess2004@yahoo.com', '$2y$10$gGh05jLe9WGB3aQY2fm7UOJyOIPN8v8hiURABD8if9LLYjkc3h.h2', '7mo9DqH4drdvoF1veozgy2F3JHY3kXiCuRHJxKh0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(69, NULL, 'hurstfamily@sbcglobal.net', '$2y$10$.FivxbBklYUWfrkHm58hJOcYQINhNP8C6GRgxFMQbliYaP7AFg3/m', 'Eq8zQmnyo3vkko6QLLzKJR5Fk0PDUqJqs7HliwD6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(70, NULL, 'nabor.hdz63@gmail.com', '$2y$10$qThkUshMBSgoXTLOe8MMm.4hEy1rfuEWppOaVoNj/wv96odhwcCEW', '43XviSMrFGv5QOX9wNoZSjgAQCM2Lncg22TJeXA6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(71, NULL, 'tyson.brice@maryland.gov', '$2y$10$alBkRe1AXtWQWxmYxveHMuK.YijOmQ7yO.RrR6Zmk2q6rAkGM0mce', 'GXU2Dqm2vW66mgRy78L0fgeIz21MwByTSjYpqs4d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(72, NULL, 'fabiola.barajas27@yahoo.com', '$2y$10$4rKUFmybOJvc4ximit12Xec5B9ZtE8xrjZV5ZCpkUTa6K5G6OBuNu', 'Vr7GBi1QUoJCrdbBDloFmY3kwCyV4zJAyLEEChxT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(73, NULL, 'rourke3369@gmail.com', '$2y$10$MiTLNVSKRG5ESHF9cJodz.YYp7vWYtdEb5R2eeyBUFEI9yh/mFArO', 'LzsOCr7IyqLH0UsIHLcq0LRUHma8aJsRMdpqAb7S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(74, NULL, 'michael.phillips@ie2construction.com', '$2y$10$S0vQ2kH8CWf5ERXama7B1OV0w3Eq80TZi/wxdMdAPi5DY.P9f19zO', 'Wp7uLj4j1aTJuEl8NFPI9Ax0XrSzWdnoiUZYVVEO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(75, NULL, 'markprice59@aol.com', '$2y$10$J1k1jRnsF7igTZgjyLQ.YOW32FXsqvzgfxxW59BT0mW.NJm3x8MPS', 'ULM18ec7Q47NYPEUTYhfY3OXVpLtlcUqOhiR1hF2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(76, NULL, 'mcjones2012@aol.com', '$2y$10$APpUIbBt9SBbVH7JjJYSj.lB5669EaLbN8BFeJw6xeHC8RYwABHhS', 'M8kqSjENKhtlrbkbkzjggX4l4d54vOsThCdgiare', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(77, NULL, 'shalley@thearcnepa.org', '$2y$10$nkTw/VVUbtky0yRKVSFqteeM1Or9aFMlReYlK0YGuc552/d0OE01C', 'gzoejDlk8xh0C7sYKBslfvQAp8KoYZZt8Bfur7Y9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(78, NULL, 'shellym@jjconstructioninc.com', '$2y$10$v4vdfNBWtCEpS70PF6iVpejv1HtAncnhOZtJ0U8f7pWnwlUnYgKHW', 'nPT9Ta41lIWG5neSvKlGuHadZGJgHVfuThF04Gba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(79, NULL, 'kodyglassplumbing@gmail.com', '$2y$10$3CyGPfnmGdeWn2IcZ5qQJ.O2gILfKYL330xOQOSu9dDiUb.e9ar/u', 'pHJG2Rb7AAq1MICAFrl8I5EIv8WqoS4GvpXcUtJT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(80, NULL, 'smoeller@grand-rapids.mi.us', '$2y$10$cy/yPsKWyQ2gfud7xhOI9uZPObXJKIpDfLXlGWUHdJrS4uyWZymBW', 'e2m6p2tCSn1z8sg8tqx19b5NuCGS6wX5xtvMjXwI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(81, NULL, 'xewMur.tjdjbtq@flexduck.click', '$2y$10$3EdyM/XApALvFGKRA5dO2OURkS9fptSzbV9TxCEvawGE0kfHC7kcC', '2GMIR9VHBhxeWbbKLJUcR9isTFf9ck5e4tR76qYW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(82, NULL, 'p2bcool@ca.rr.com', '$2y$10$9Cch9O3wICbyekBQ1tJU7O9wYT06Sv.JxrkOr5BlrzPngr/YS8bJi', 'UUu6Ugwb2WxSkznes6V3HrE51F5xeJyxpUOdADIf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(83, NULL, 'veroniquekoch@gmail.com', '$2y$10$FxsET59sVPmCjzTC6gNXZ.9YSE3q0iMK8JuTsFniyed1MaQ1eyjUy', 'QMOK4RVizXVyjbrWT0UExWRavPGLB9Ihhq4a2RSc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(84, NULL, 'rmlovd@aol.com', '$2y$10$YnEZeXrgH9p2iee37XNNH.Qb9hwoW9ruiBNBsCvZp2Mu4zR0ygKR6', 'rXYozbG1S9wbSg67QT4uoEwmRiyKhUUEAfOMSsR0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(85, NULL, 'morrowjeffrey@stephens.com', '$2y$10$Fr4pKuvAKCB9lhtCHtrQ6.pnBupSzCUqYKYz5N3sDQnOM3.Qa3caC', 'kzaASvIxVp6NoEFmTgpEjxEHj8x0SqaLChVbRTkz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(86, NULL, 'vzconstruction@yahoo.com', '$2y$10$rbndzwh2GRNjqBoMJ3zrj.PUKJ/X7IKmkH0KgA/ubJhrHwQdUyIHG', 'JgS7c0cqobDXcv7UEv3fDw3FXy9ofclovD5GUAlg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(87, NULL, 'rd758@verizon.net', '$2y$10$GuRhTk3Gg75RwS98kKoZJu9AlzZ1tMefv69B9ELWoOpXmfpvIg5Qm', 'SCsmmh1hpsMHWeUo7Ulnv01bjWa7YWbrFdfMS8nl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(88, NULL, 'carolyn@samnichols.com', '$2y$10$1YBsctYjPNkgGKNf4feCJO/1eGW5ms5.uBJikWEet/Ra4puWDE28.', 'Iflc9aI6WYH29PiPyytn2j4FWLUbfs5xPCEOrx2c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(89, NULL, 'UjafjP.tcwcctq@sandcress.xyz', '$2y$10$BsnzNaMxomFLC8so85GYheMDO.hIeLHVE947/9lDJKiEpaJsn1aTu', 'BgvOAWt0V2dOsl7e67659DFivnOuXWEv8192Le3S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(90, NULL, 'chris1mulazzi@gmail.com', '$2y$10$kRvgEVdtYTxwoIYR8IiRh.yotIK98hJZ1hnLBa9YoqjDar6J2g402', 'adZct9T6Ry8Evv2E6tDoSNYEz5JHnC9T9S3qSpds', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(91, NULL, 'courtny43@gmail.com', '$2y$10$KntjaMNXUK1j31pJtaOa5.dxmy5xXp5sjyPL3afAIURluw9EOPGFi', 'fSMJeTRNkxsQMsje98jY878LlVEDEbd4PamklDGC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(92, NULL, 'naquin985@gmail.com', '$2y$10$iwO0U497GzfNG3Pt6DUOEO9S9ukQLqJX2tHUgR62YrSEht1GA8AXG', 'EmdLiIf0xaiyNTWP0h1KErOETabIizPlV7F4Y19w', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(93, NULL, 'greenberet722@msn.com', '$2y$10$5DuFWsJ.gti9Fzro9NspfOER9ZXlhYUpJxEIm35LYjxlK3iVvW2w.', 'eC8e0cDf97MzxYJoLy0s6bZ0pmzDUIP6JJKtkIBw', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(94, NULL, 'jlazenby@yahoo.com', '$2y$10$HzMPJggAJTcewb2Os8F44.ff5rjDYOkIjvqhBKxhq8DC7888cwNUW', 'W7fPe0UkMahAjA4nhakYnKlc5n1UEmYa30SR8kOn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(95, NULL, 'hextomato@outlook.com', '$2y$10$0rq3mMp.Vmda8l7JZgXU9u9xjj8gMHr1MJ7Tyx2K/bt4XuRHt1Iw6', 'AKMfTXoADioLLxFWzJwyn5McwgztQCQydnIYZ9IK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(96, NULL, 'clarkj@pattersonharbor.com', '$2y$10$Xx/mA/4J2glixCVNwCMCyOgAzKz25Q3VRn8w6oyfDHG4Jiy1phyUW', 'oiXOEylUxMFFGNOfmQU4Imvw3NAP8XP4FBhrBXL1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(97, NULL, 'jgauges@verizon.net', '$2y$10$z9SS3bQkDcQhWAkCS6Q0Oe1O0H3Ghjvny5xlJVZMNPXU34suusOda', 'S9A8pyCjkAKsuPsd87eCbi4mFZ5SjsgWL8v0aIV3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(98, NULL, 'danayscardena@gmail.com', '$2y$10$MSQKGYg05GSiHkP4H5qrBeu0D1aK7/T.selc41do04ye6ldnGSzcy', 'UemKz8Q4G40mA8xemMxWqP4bLsy14sz7cHo37TxK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(99, NULL, 'tom@tmvremodeling.com', '$2y$10$VqheRUQfC8wna8rUcGG2w.iQ2ITuJhM0C2V5RseL8Ixz0uIh0R2FO', 'xtcCCzUKLQbyyhgXtyCIEN5xSfVDoumHYrI6IrZT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(100, NULL, 'amysboudreaux@gmail.com', '$2y$10$50WlVXAA4TX/h6hY2PHHDeXLpTO9WS7tPS/rkq5J.N3VxQGAJO0Ba', 'H4AvtfXkIBsJCsBFXpuiAUXTEcy110zGuVX3VmGy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(101, NULL, 'ejTIji.wbjdmb@wisefoot.club', '$2y$10$4DnLfDWj3UqZJ07T2X5r5OizBX7BzRpA.Y9Z/CS.MVorKxt4y0Fzi', 'UwjNIrVIKvEMNrDmOI7JdVttY76n7FB6D8m4CyL0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(102, NULL, 'elianachicas@gmail.com', '$2y$10$oa0gw9U5sMda52iu./4YTO92ShjGqEd1Y3T5YXUszLnoqsw2JuR.m', 'rMMAtAx024cOveuFT825bxJPSNLyHdOOadcyQPsj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(103, NULL, 'mccollum.michael@gmail.com', '$2y$10$oPp5DFL9DMm7JRBhwjAgL.Gi/p5nCGgz6Z6bU0DCU7eG9BsZRdQWO', 'ZPgqDj1cnif2VX0IW111x7k2egrtTFd8GqA7dUsJ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(104, NULL, '7eruiluvatar@gmail.com', '$2y$10$IYxqKj7N4zL0c/A4yf6dAOKxGfINtutYpZrP../LtTGmJNVnyr.bm', 'rwBKuHFZboTMKzQnRRzVXx0yapst8MbBOznxKmSr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(105, NULL, 'info@acentec.com', '$2y$10$10C1dXND4Wr8HMQyQBxIVOBzQHJ/OnbtLfYpvO.7aOmKZzf46vLhe', 'EVsPpgjv5qlbItfeHLFszN7f0C54q8WG9M40J7BO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-02-26 22:10:11'),
(106, NULL, 'nate@nakate.org', '$2y$10$gndpjW456oMBjUPPaFFKcugz6k4qs7Pf9K5vFpxiYaGn7dOSor.tC', 'BWYe6HqN3ZAXdvtSMipRALoTV7TbwqmrZSCwbLkr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(107, NULL, 'hc2ltx@gmail.com', '$2y$10$DOTLSHkiuLymK23sQU7KWuabZhsh7sFQ8F4y013XMMTBEZ68MIeC.', 'kxIgwDMYbH26dQk0JjNp8aqHkIpNBYTZbyMpJoYL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(108, NULL, 'carriel@servprovigo.com', '$2y$10$ZLdpKuO4lmkQYyozjImLveaBeofYGVvOKK9EQSSeXzPqs9rGZ.N0u', 'VTcx8KRhtLRU0A7o0ciKukKAIVW1NNov6ao0SaRM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(109, NULL, 'candygirl2017@gmail.com', '$2y$10$YTmTUEgOE1Kytx1XdhTlyeIBrj6/CjOAVlU92xVan0SGOz4MiGc7i', 'Vyu6QOXEaxgw8KpKKn9FROxwb2wjxG4kpvv4tKd9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(110, NULL, 'patriciaryan@usa.net', '$2y$10$i326wBShqpplCkBh4zTwierYZtGjTA8DMJva7CAKEV7HLug3ubiyK', 'JzYUhZtAloDsqkdlNNlpSueTv83MaKaWAUwzg4nV', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(111, NULL, 'ejn25@comcast.net', '$2y$10$VfX3uDW.EYlr6oKnAKvR4urV32kB8usLjSNoaXeZk6qDx1Ttgy6HG', 'AESrn5sn5PBNiNXurniGGebuEVTUxDYG7zpIDsTY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(112, NULL, 'alexanderpoplazic@gmail.com', '$2y$10$52TYnSo3C1bq2ZfzwNnzUe/2ZNVGOizGP03cXLpPWypCbXa2GKSfe', 'v0yW1SkCH3na3DMou4WALaAzFIk49ancpsdqCVBB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(113, NULL, 'dustinesker@gmail.com', '$2y$10$C3j5XbWX.PekNkGZMHQaFOMS4SoMe1talPlOW8QOPzRJlT3seyXSS', '0tdCYHwKQhG1WjCKO6wnrQ9gzsOmG1YUU6wSpOkX', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(114, NULL, 'phi.phu.tran@gmail.com', '$2y$10$GAFyL5Zxuc3XO9984FS12erxm2QHlJspXWF8M7fxBiB/EG4BvBGcK', '80rPMScdVocJ61mYYM3iaObW6FAh4JRu0CX4ttAU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(115, NULL, 'ldwildgoose@gmail.com', '$2y$10$JJUTR1WyQZopic.feCrfm.NHV44sTkaUiFiWYuC6e9DP3T6Z//5.C', 'qAIUwlokaYCujpQxkgBHzfwZeWEf5KMwviCe8FeA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(116, NULL, 'edgar_balderrama2000@yahoo.com', '$2y$10$7RpZH42/7.40UKqWSQHAFOMdi95wAalvgRVtj7FTHMQQ1Pe4LNCFO', '3OMd3brwby6HSaXFj1fPTlwg2bE1eQ98JlOAhawg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(117, NULL, 'velio.astolfi@gmail.com', '$2y$10$zVR8.YnvOrJ9pyCI91S0dOOUGyvU53z5cLlLzz3BW0V4eerUBelNO', 'A0MTCY1ZSXQEHwffWLaHPY7ONPPtrL9BnVgx6LsM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(118, NULL, 'bclegg7814@gmail.com', '$2y$10$lzmkvMW9xcYqPkKctpMdQ.gpVaAFsjzCBGSG.PqTEgZnxDQW7PAHK', 'yjOlibTOhvNCQ6lUoF4k4Bo1DRzSWblF72KMWluY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(119, NULL, 'lamccurley@aol.com', '$2y$10$8.xFfflpQ5RMo05cUUZoB.gl1GcMVzeV/neQkDdVNyY405sZsoGGW', 'beFgwlVPDQubbgXjNxie1oBEC7GT1W3qO5fSenvm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(120, NULL, 'ch.arif4418@gmail.com', '$2y$10$YsFnkxHlRcGknGnDM5Hakul0k3mMkwf6NuR/bSuzQjpPi4RIh7Hjm', 'EmQJbL73Io2dMoWrR32cfcgNnuvBNjQ0AZhJ4KLe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(121, NULL, 'plmbrscrack@hotmail.com', '$2y$10$p0A0hDnL7fqplO7.mDJoAub7BYsA4dVSI9.JozVrL7yPL9gREQW1u', 'dQg54duvae0yKN3L6Nf0qatLzFU0iR1ss6YOOL8o', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(122, NULL, 'alexav@rea-alp.com', '$2y$10$SXKyNi0yemwsyv9p3JOuiebt4v3RYEZQ8Z8If5dNyi2cyrrNX.pmu', 'yJBM07uXP0k6btZvaUmt3D1NOabonEHdheJr4Myw', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(123, NULL, 'lincolncityclerk@nckcn.com', '$2y$10$uXzNOVxzyBrq5rJOQEU2qOWPcbdjoSrugwmVRxZ59rqc99dZFQI9.', 'zi314XU1YKeMTJY6WW8eVBntgcdPZOeBTGlCv8ao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(124, NULL, 'breelandmichael@yahoo.com', '$2y$10$fda.Spmo6eiKlp.PCZlaV.W.brXrQqhaKBzFBSYR1777Iz52GntFq', 'Je4LQlqJ6xxe7ON2pLkqkJ15R1FdR8ASJAjFgXNZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(125, NULL, 'tinadesa@yahoo.com', '$2y$10$j4ZYRJmIGMQLSN46ySAOY.dsbXgQGHTB6Pqa5Va8UnUcMWh16Zdv6', 'Tj6BPmPE5xAiFdzriPoLOZ5lZuITmN0h0AbPTz9h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(126, NULL, 'zipsham@yahoo.com', '$2y$10$GUo.hmOD8KXuf2oFY3Oi/e6Ye2iMJ2ds/DMHxpVfNtKmQSNUdYztK', 'aMCEJuDe8Ct7bqOmgmf08QiXYTl6kUR5j5Jgr9T8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(127, NULL, 'craig.chalfant@yahoo.com', '$2y$10$v1EsmlOXJLf.UHJ5UdLlBOVxXK/qAfdys6iP0Lo04xf4QECmla5Qa', 'XjxTda2F9VvpOwxXGW7IfvDs5Kmeo450iHh6f5zg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(128, NULL, 'mindsetgd@gmail.com', '$2y$10$QWA0iFQjE5dmhQE/iE5cjuy/oIwctxBLgDXTbIGd69KrRsObwiQhy', 'pOR45jFAalS5X3eAOrvrKEwhbJsoj4cmaEHS23Ht', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(129, NULL, 'cindypizzi@hotmail.com', '$2y$10$MQteFPjGFqc1yu3I8/ssn.nI4kP8yK/.kVgtfU1wTHQdB.3lzUITu', 'GsjsEQjPTd3Og1Yi2yXyQblX145h5sAfsLU4fu9d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(130, NULL, 'christyandalec@yahoo.com', '$2y$10$JxLTig5sb/Q4x3Zqf79X8eEu3qhRFPy2Zc6VOCGVWxzy4bUA/umRC', 'vdCSAELYeQh6dJzn5GaZAg1EW8t59EuYZ6fIqYid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(131, NULL, 'tHvpAu.mphpcc@rushlight.cfd', '$2y$10$9X.HQDVTDkrM5HIKcgLvI.rXvlooojHaslIGrFw/SHx6VBJsVjnBi', 'usTR3oyegDHnagAHrFmrbSaDUtpDYpSG5Fvh976w', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(132, NULL, 'jdickerson0811@gmail.com', '$2y$10$/I2.QfVvKA5jfmMP/SGCx.DpBbHoaX2XnK1B6A0nJETNw1k9fubca', 'VrEVU9IhYAf4XZF6B2tXXogJDpJkD1kuTHRitBBi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(133, NULL, 'info@renovateandrestore.com', '$2y$10$amxv4pVCygffqjZ6lg0VceoK1zEDNIb6yeYAzuBukFBvQ8S/T.seW', 'Eu5qkKdyMm4iPU9OejQVwpNBMXJ8kYUIKME1n3Fo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(134, NULL, 'txdiana@yahoo.com', '$2y$10$fXDIqQlvnUHbXxrUiO19HuC.02z/N1AHEIKtdCB1m9wkZFddUpZP.', 'fqEAC8o7NVxRU833osQSTeAdbScpUGYScdikR478', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(135, NULL, 'marcel.znidaric@gmail.com', '$2y$10$TCwQ4DSMHs0Ly7n5bkmd.uKazFF0EiynyqQNeeaHHRCHALqWBfLvm', '5n4Fp29dgWgV1DR3ghmrxrP36nLHTnElTchGRoPE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(136, NULL, 'kurienjenson@gmail.com', '$2y$10$LU8qkTVZyd7xo.6sszSxA.INT4pxo9yr8NeMpYtGpNYsfVJSrp36.', 'bFAdvb4u0oMnmPa11PhG9V4hzDLXKrKMpE0cxht8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(137, NULL, 'rongill@airpost.net', '$2y$10$vTfoCXSIhD434PhrXzuhMeHBDwIG2Z8hkY2Bdoi53thNkn//RQvnW', 'u0grriwNjU4jZDQKZMdtFB3io1kS0aUAyH5fAl9F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(138, NULL, 'antocaspu@hotmail.com', '$2y$10$vQ5YXQEf2iDAsUYOUN14fuuSgoZpQSBCT49RyIvGkqXHMKc7RMXsa', 'bNPWciYf911jC0VIyqAzRqQRIyiqWpMnSMcMHzLd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(139, NULL, 'esnuanra@hotmail.es', '$2y$10$JwHr2dFkqwZaKAKTBJEY.OKqRITzKq9qcXszw01kE5L2HdeNFdhe6', 'RSdflgnF4yMmt6J3PzxkWZKQrjxNQGZvGyQwI3vr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(140, NULL, 'sevans@advantagesecurityinc.com', '$2y$10$akwclhIMax2yR5dw/kZB7u2vToIxGG7v1YxOfW6S.4DNthfadV.ja', '1Ueu94NAQxzuiVe72JwJM8ddLYZJ4cO9ovHk2DOX', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(141, NULL, 'WXrcMF.bmqbtjd@gemination.hair', '$2y$10$kHZBf5eTfBuUEGJBHRVICOwe7Jx0hKFt0mm1pJluZsGjLEPlZAxS2', '32kcNwv7ob7NE7yzuGTbPcVCUqUngPYMVYzNaBpv', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(142, NULL, 'witz74@aol.com', '$2y$10$eNyxC.aLc3Tw0Fmj/nLBBeXNbLEvMRMnGvRTMxXruR5DBOh/H2TIu', 'smZVKACYNjkWhEsyIwTwoEpnhgOlynKJKg9PKjR3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(143, NULL, 'ericpark@uniscale.co.kr', '$2y$10$yBt/ct5uv5FPt7SdoxeFiOBv3xQAdz3PS9E/AVhkwdRAzXn5R8TGi', '6HaOXPjVQr4GzY7B1vawsE9IGmJbTQvzcGOsKHww', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(144, NULL, 'ojTsbJ.qtmmtbp@wheelry.boats', '$2y$10$UOP6BtJaOmW5VdmjlZzHCeWHU.aa0Tz7GOZOjvSF1.8TEvvhsPgrO', 'g3E6hsRAKLrSlkPZ3Kn3xYX8xSiYA74UAD42drkg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(145, NULL, 'jmaenner@comcast.net', '$2y$10$gCmiil1dGnjN2iILChLfM.ccx1COgpc5WqPqfj5q.hN7VFzRFZ4e2', 'Hb4STQCzwWyt2qbW149IidIxeYIuY8hIvXE8xVOy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(146, NULL, 'quachkimyen@yahoo.com', '$2y$10$2VupH0aOR7AVBfna5ZbsHeLQAEZB.JwajDyH.VwIL2YWcEXQz1r4y', 'VCsNL2gaUJJrwtfydYYbRv6tvtxSdXSCTGjzydz9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(147, NULL, 'tmichaels@tdscapes.com', '$2y$10$pvBYWaY4aPgPZ8HGrzRtXezVJoJtfkFV2uHb61dwzaJxm6KhQHRWG', 'NAYdsUPlKrtiq0bl5UiWlrGxSxk20DdivsRR7PDw', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(148, NULL, 'cyonlick@gmail.com', '$2y$10$5NyyXsiuiFWqur6BaLHB3eYTZOHKLCslo6QuIlgBa1KMtHTJbiuo.', 'PI8jf1yQ0ofUhQtb51LcgytXGZ14HumaHFvz8bZ4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(149, NULL, 'dinhngoc061193@gmail.com', '$2y$10$RDcDaVIxAgidgRY8.SMGpOkzX82LS7YvUJHrKyz5oQkauSdrUNe2q', '2INUatziKUlcxjdMQRak86aCZoJ9R9VYOnnnqlJ2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(150, NULL, 'ryanhrich@gmail.com', '$2y$10$evSTf6nwDGAJxUY09z08PO3VyZgt/6v91/kITJuXACZ79nkLOjiqC', 'IaDpOUvKiCxbgkhKMbsw4jKVq51uY3Rve4bxWSoZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(151, NULL, 'jjiwang@ucdavis.edu', '$2y$10$htTP.Jgx9yiCi.yyQsVnQ.epfW0YBu8Nkpj8S3VhQOftDK3zY32dC', 'k8I0xqq8XIp0LdXfxhFrTEmdpttvZQVXt6cAV8j8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-03-05 10:57:36'),
(152, NULL, 'abassani@inthyme.com', '$2y$10$mYOHHNg/tnklNjXWjJT8pOBEE4hM99Ntq6NBp47BUqQ6vQTqZRK3q', 'cBMns3Tjlb12Auek8kH5RN3A6ZHx1iuKfGP6Uugq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(153, NULL, 'john.tew@fulghumfibres.com', '$2y$10$hhIiNqM8aN3lBVGG1lU.5egRuv3u4gKVQL9/pkysa/zJY5R53dZE.', 'KYuMASM3QDJOvr4ydYs6u8peXfVsCOXy0Ko3XDAc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(154, NULL, 'info@gogloballimo.com', '$2y$10$W580kUfNqZdEU67Wdd7BfOXtNjXSWg38gDu0E1zOB0tikQWQiJc0i', 'indANGLHRHDeaaNZ0y55OdMUhHIc6zRoRbZpvHpN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(155, NULL, 'hussamfenjan@yahoo.com', '$2y$10$EJhEjsBS.uN.ghq/uOOzw.yXhcgLMkLYETmt0aYPO.OT7hPBdWSf6', 'LTmVlBFGh5x37FTiY1V9Jvy3DpPpX5bsVe33WqyU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(156, NULL, 'k1ngboss3467@gmail.com', '$2y$10$U5mCaEnd1Er033aiBYERs.K1oTKQ.xHfZPQgCWipvrADlaJ6qvVgi', 'tWQCKJW6lxd4pPyQRKnRR90LxJdI8yxvsPt1UfnF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(157, NULL, 'noahms18@gmail.com', '$2y$10$lTBJt1jMuR7n1e0VLduxBu8h/V7HY24SzwTTmp9cb8iLJtKhmSNaa', 'RQ88GiavQWZiGSCLw8mgR5bRRnSkj8gvXNA4ygOF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(158, NULL, 'gblafleur@gmail.com', '$2y$10$2EwuNxMFuBJDgTWLEQbsPuSgMTiyZWMnkcx9/hPLJnCFdyzWA3P3i', 'izraWzqxPNioVnXb86LCA89UqUYFSYRMbMLLiMNs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(159, NULL, 'jonathanmsmallwood@gmail.com', '$2y$10$Cjg1.f.zCfPCE2vYnI8It.XlYMFbF8cV3q7hJbmGsffAPu4c/ktDa', 'o3D5VE6DOfW50vlgqdXtEzLISfMBoaaBG7LNs5Hy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(160, NULL, 'djvwcv@hotmail.com', '$2y$10$niIBKka6lGj/xyJd/g/2oO7NosMLN5OGmsBUteeWCrUcOqb.S11Ny', 'CIDp0RUzR5IASsVk18Zpjm5rxvgxcitQaHtSlfKO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(161, NULL, 'rby22@yahoo.com', '$2y$10$SxotRc2oL7uZQ6dywRGcSuiUPnWK8w0JT7Kg153zZX45nO4BoPnrG', 'nD7Aj7cBg6vN6BzBMSQM27UlJH65pmGVnp0K41on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(162, NULL, 'commanders2005@gmail.com', '$2y$10$p0pYAEcdsOHKWBSIQ6rbP.MF4dg3nkdCWE1LMSo9OP9pz6IiNq.iO', 'QkO6UMrJ8Z1EEZhlAsTYtUSEVrvS1kUwb0Ivg2S8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(163, NULL, 'kjason5757@gmail.com', '$2y$10$NnyrQt369AeLAYL41T98w.u1ns0OKc0ZD04UC47mB2nJJOrMg/2Eu', 'Azjys6DZNzfBUCKZV0PIItTSFclgp2bbveQKz9bo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(164, NULL, 'wesbrasell@yahoo.com', '$2y$10$PFqzLWUu.y8xsNSZtyznourcToojj5SFiLw5ndptauO81JqiGFgeu', 'jckP7nxHHoxcrnU3JUISKlqpLFYFv9PxYetkZJqM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(165, NULL, 'ronbhim@yahoo.com', '$2y$10$7Foo4RW5KLNPGP9/qM.V/uTn4p3mvhhxcU372BwN2e6siA81QLrma', 'R5bLEoG2NNxMmQXGnU9itdm3Rb42VmoypX788cC6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(166, NULL, 'contiveros2008@gmail.com', '$2y$10$0VSQFfoxfwvA2BTS3y2r2eRkn4wQSwF0fgXuNmCFbPBMW9uCmH9I2', '5GzM1MC9Qpnb9FojY5UWWUypWIZMUOwFli7Jn072', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(167, NULL, 'tbailey@mcneilvt.com', '$2y$10$Dg8i24hpp/Al7M0NuOMBueo49nl5df1kGFeHHWlF7oUL2rNnmL8Ei', 'oB0MpLuZjzkBLIapNPK5QIxAMlGl1WzoJrPyf3Xv', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(168, NULL, '13cheeseandcrackers13@gmail.com', '$2y$10$1Nh00TXtv2XapLEmtyTaCu7oux8AhCqbmNRBqpfDxiPnSJGvAVzFu', '4CwGeTN7xoT1QQQfRNtDLrhg6yvw1cxTcBtIAicx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(169, NULL, 'rmanton@arcticstorm.com', '$2y$10$8L13PrmtBkaUqkcM/8qpTe6ja7YslCxqk/hGT2IJSadJ8UzGtjThG', 'Ck7axWCp5hzDdCeXWdCqE9C5SVcL5JpGWY3P4QuL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(170, NULL, 'chrismoscarella@gmail.com', '$2y$10$rQGsRJzLBTFh8hJmthH65eV8oOY.MOn4qIOnM7ImaGTrUBT6fLZ1y', 'TbvEG5HW6VbiMoHXya3mBcZBLRX2qCMGuiNUY1xS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(171, NULL, 'info@seattlepremierhealth.com', '$2y$10$5UqM6zQcbP4QXKZb3JHk0Opcw6h74XOH7wi8tIYAQTkh3GNG6ois6', 'sqh9Lf74IROGM0smSVel4LCcudngLG7FgnvRu6Ng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(172, NULL, 'martharuiz1@yahoo.com', '$2y$10$tGe2mUA8fOnrMXRrmKaIt.w5oWfh0uZ7a/X0vhSwWdvu4DlOGNi/m', '2I0Z56PrL3YnoS7RGZwVXdukmTptuDZzi756O835', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(173, NULL, 'pkim@rosenlegal.com', '$2y$10$tAMF/z2Tym4YW/9OvNDfLObnXFUHubTRLyBzg/3NwqDr6KMlLUQBi', 'u7PJRuuprjXfnk2pYZYch3OgRG8VDHPRF24xnaJk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-03-06 11:17:50'),
(174, NULL, 'mark@masterplanyourretirement.com', '$2y$10$upw.293WeU1pu3fIchmEKOJUdi8zPUQmlGc3HZR.4uxTTFrEv7iPS', 'Kx9HjBjI5RY1lg0BfMvfNRLmn9FjSOu6rKjVMQOh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(175, NULL, 'twaite@strongtie.com', '$2y$10$DLgJ.1RMAA89RMEIzD9zye4P4hyF0t0xQe7tnC1mdJsrdTOSjh5fe', 'NPBecDAmnyuLTopeGXHdT4nrEakPn8LMEVsmsVAm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-03-06 13:57:28'),
(176, NULL, 'ashknott77@gmail.com', '$2y$10$qVgw6lujyixfo3dxD2pbCOoA8PR4ht5qUe.JRMlBirtd0TVFxRZoK', 'Qk70YAMHjB1qlnCM4UAAsQjPZB5hNb8ZW28WqgE0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(177, NULL, 'admissions@njit.edu', '$2y$10$M4LSxYQNe56IwtTvHRSFEO/Qpan/JN3d.NZw4QbLjgxwui0y2IYa2', '5RXawkZOYd3CJ3b7lAG1H8nMsLYwMmA3NLtIViIe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(178, NULL, 'kev@totalsinging.com', '$2y$10$jTOs91VMhBaRI.HyTMSSmON.om7rawqzh7.Ol01OzEW7x59CI1UKi', 'BGevaPE7KqVa1XiYzB2vrAGglLixITYrwjbZznmp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(179, NULL, 'steve-russell@uiowa.edu', '$2y$10$5fE1hd2zUks9MpGfd8eVD.eKfCbazCKKsfJkg5z0S/eyfxEqssgm.', '2KYplati2umjQzqA4KW8adm8MQ7s4wtxaQ2eBR1l', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-03-06 15:58:37'),
(180, NULL, 'elenatitova5230@gmail.com', '$2y$10$tG.0m1mG2waccXDYy.tocOrpzlU1g9Y3QEZ8hjc2O/jghOfDiWmi6', 'nVYbwJUvq706PVE6vbIgHnHbfsNIBjHlxoKDtEUx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(181, NULL, 'rae_smith1629@yahoo.com', '$2y$10$Zop.BCsoikVPurFFa4/iMuDMf7nBZrjuZB7VwIjIiC11g.VEKQX2e', '08mLsTMigUQCx5ElrSlhdHAdLg9Uq2FzMy29BunT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(182, NULL, 'ben@awarchitect.com', '$2y$10$7ZUxQqj9heIneq0t.poUHuMxEIsrHwasrKnGv1t0uWWwzZ5Qi0iWm', 'SkeaDiqK4IFLgGOAih0qLHVQG7SUskmV4mhNttdb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(183, NULL, 'jburt@avalonrealty.ca', '$2y$10$bGTv91xr4aELiMPXyoGd9Op5cj27VGJrDbvEtshSqh4V.DciEuOFK', 'ggmtjkWFRGSKk4CdIr6YymEaf4jkLANgmK0KKeBT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(184, NULL, 'bflatau@gmail.com', '$2y$10$Rt2HfNEd0I1EcwvrZg6YWuordCbxLhjVXZbYSeNTuWn/snvCHaqKm', 'KB1FC3KIsWW2wITWVy9exELikvmdqFK5rUmUGo9Z', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(185, NULL, 'cgulley39@gmail.com', '$2y$10$xJo/ZTTx9ROSj5iI5qa.UurqPjmYN2avbx.wXX7aqayZW7L5jqQI2', 'F7EMjxszAAJxQODoys4bEDsLaAlBASHY2IpFKuwS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(186, NULL, 'joelsmall90@gmail.com', '$2y$10$6AGv9F.w2dGoc9TW.0Qvp.Z0uXi6y2lAbn4kx51slhxeTMXqK8q02', 'nRALuyoLmCcwREmFTfWoQozcIOVHDBtqcdnd5mMo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(187, NULL, 'zandarf86@yahoo.com', '$2y$10$Y4OoODvZEP8sYqE2joRZce1dXBEGaZRrKM3bP8pe7wcqBrYK/J1fe', 'vCRVYoTE4gHx50UWS7Zt2Z8NafFesnMvE1ygnrH3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(188, NULL, 'yoram@yoramzara.com', '$2y$10$EyvWF5JuYAy3.u5YjTMYBuihtp/6.Mp5pJsXUTscnvQP7QuAV6TkK', 'AufFhlUqYLzmrVWd47aIri6dlw64CTG6UzKUT3G9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(189, NULL, 'christian@lucid-tunes.com', '$2y$10$9J76ztORD.kPxI99x46jBeaIoPbZhFRxTWQxA6KEAxF8/0.oBRkGW', '8LFqh7LNuL5iJ0jkF57HfNo01B7UVsM891lngait', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(190, NULL, 'rfarrell412@gmail.com', '$2y$10$3QgV/Dy6ZCh3yMdZom.oMeNi6ctwYQzVis5OwflqFvDiUbqjBMXRm', 'jyaFuvay62dGeisVl41IOJZj0NiHvSCxcYu8Wbcz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(191, NULL, 'info@aoline.co.kr', '$2y$10$RbXkYVnQMWpvUhTTbH6mI./yfJ5s7LIddO7of0D4Lt/LAF.bxTxNS', 'TgSOW0f9DJZAlACu2hOW8TzzxTOxTmsivKL5aDVS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(192, NULL, 'blake.thomas@usa.com', '$2y$10$DSSqeSj0fExo64QPgCPcEOIMmlNTzWTDudSBcUbDsFEa4CYkzubx2', 'SronmeuqyLIOzTGvXpNWp8q4KGRngnhnSZRpjEgO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(193, NULL, 'ashauntiboyd@yahoo.com', '$2y$10$6rXihA7zC/5TpBy4hqPfoeamcco4OB/piux4IKw2mbwHaFCZPXCqu', '2IkGcfC1GfC6d4qmMMxaXcNctcqBeYlZ8aoYDiFM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(194, NULL, 'mmelton@westerndoorandgate.com', '$2y$10$Ysp3WSNuKDrI5uG2qrN6EOf.x0K.WToPmAKN2QgEdjo5VO9oUR/vq', 'NLx9FINksZWVCOrGYzW6zmPVtI4OR3UQD3Rm6AoP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(195, NULL, 'mikes.12inc@gmail.com', '$2y$10$3NHmxIroYKAb21EfWsj8mOGzM9Opc6ciBbIrkSclo1PmfDqSmulru', 'A783rbEWKw97XpCXLg8rcqmJ8PIQSVxs3jVGgsOz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(196, NULL, 'mrluvermansterj@gmail.com', '$2y$10$2qKA1y8xHz4CmETe/vo1yOccwWxBKLaVvfyYbXyxafaGU.qeqycyW', 'Xu27y1lUzMoiivXBklzA8STFiGbRKSEVrSo7libp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(197, NULL, 'iwa4001@med.cornell.edu', '$2y$10$SIyh9Mu0LmKWiRpsLc2psu3lupQ6BtCNOHfIw7sYP2IeVaKgq8ePm', 'RHjAtgGvMYGdMAbw3ffRMrDGm7CoTZg16cf2Yban', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(198, NULL, 'briannaj2112@gmail.com', '$2y$10$lFzG7Z25RFHJMZlnImyiRurRsauLqa1IxGebzu1LhanUn6lze2zqa', 'BnWSNrU9EpoJy4BOnR7nmFHSAKoOYZ6oXnAeBda6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(199, NULL, 'haayvn.ke@gmail.com', '$2y$10$u9q.0iSBqsFk52L28dxkaOdBZL1OmrBesqYux.pzgleLrTEfvrSlK', 'cnAky1Hto0cs5iPwg34kkpdFBOKfDKQDDp0RlcXn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(200, NULL, 'tonika.jones@toshiba.com', '$2y$10$WM7qERKUjKrQjAG1twc4/eGCvFnJ3w8TVTzOKhmLdE3UIFU8xwmIy', 'spJpg7sVE1ZJuyPxaXgjdKCU2ocsTkkQqGDvJHK2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(201, NULL, 'papafonde@gmail.com', '$2y$10$yPZaCxJvgA0yfn0CHcT8pODP1Hras5r0tdFjCOSdnFt/./UvS9qam', 'JKYqWqJDDfwWIPQafe6SRAqUijTkDcJ1ptA5dvbZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(202, NULL, 'rgthdyf@gmail.com', '$2y$10$eKhtnZnpWNsi7aPQ/mCaRuXEw1lhCaCElXTfWU1y82l61Q1w2CwrK', 'O7VfE5FmS7gve153ZJv5yr4F07Y4n2h3TWEYbyH5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(203, NULL, 'miguelleyva90@yahoo.com', '$2y$10$UUo1APrtinHt4Vs5DtU8Eu/MMZigcOnKnuXJ0yvoMky3AYCggYUj6', 'SuF0dm7ZL4hHzk6JEOXK1BSR3FiBPSvxpWabkgZE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(204, NULL, 'rokbfool@gmail.com', '$2y$10$VZLPCzu3lPPeDaqWQQQZj.MONAibKaK5Fu4y6lW1AVTH3penh/Uq2', 'noVmb7jKNkoFSjvQpRWapMnBAuqnRot9pHdh8L1A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(205, NULL, 'raechel315@hotmail.com', '$2y$10$zriVW3khneHwAkqTM06ZFeesAa639fRQvZk7002n9CBmLORuf1hQu', 'SYrlRx5SjOxqL4kS62rCqirjasW2yVYZTXRA8ljP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(206, NULL, 'john.horne@hook-n-haul.com', '$2y$10$OL5smkJFZPtb.p0uUEXtKeCy.FGfyPZFLosSgJnfO7ema2pQsz70m', 'eHanGyetikUiYOUBq2VdUEZaVWQCqq8ujAc7vBDe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(207, NULL, 'lklabacha@yahoo.com', '$2y$10$DCMtX/AL25SRu4.jhUi43eGej0f2JUDyTfjRjoT0jrKjcrQwlFYsC', 'l20irVstbBBjHHAfptv73ktu9cTlCGahx3ekf2kL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(208, NULL, 'stephen.patula@partners.mcd.com', '$2y$10$imj2snMFK9zEtIQlwDJYJe04/wGavOprhxUyVM4r/lr.GJFD3ady2', 'aIEq5ryj07WevrEu09Uszt79pIYbp0Qcygj0NFk6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-03-07 22:31:57'),
(209, NULL, 'leestewartferrel@gmail.com', '$2y$10$tsCfLtK7whAaXI.SaXvwdejaKnKWZLM6/3LmkLvWMLux4VuFs3hEO', 'bMMsCn08knE7TdpCjxD1IuvOIRoDPUZtPYpIDBCs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(210, NULL, 'fafel1@hotmail.com', '$2y$10$o5I6bQbwb/d9d8Z3ZyIXe.d5OT7/PHC4Ru4Y.WOfuhrILv8IPiZ2C', '4sayQ70fSvZyvcCZRsjvwtn8k7MNJykRDw6yr7up', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(211, NULL, 'andrepereiraphotography@gmail.com', '$2y$10$EYIWchO1Run5BJvccgRU3O7vMu5vDc4K4UccsH5UZ1xGyYwP04HOq', 'ftshmr2cJLZ0bryIOBXmuc40flztvPiEV8AFQhSx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(212, NULL, 'jody@ceriumtech.com', '$2y$10$HjB43izbr/vc8.axwzD20uRWTQqtxm/Q4eFhaCTOIioX1jcYjH79y', '1OChCCaU0CRGJNdTMNfKzCHfQo88CX2dvtk8Xi3V', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(213, NULL, 'youngcarterdjsaa@gmail.com', '$2y$10$zEhIoZajCEi8k/Y6Jjp8muCp3doJL5uAgpReEPDeg5ofYMivqFFhC', 'WteHtB62pk118LsZl4GiOc3Qigfp9uX6vf2xKwfv', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(214, NULL, 'srthrone@msn.com', '$2y$10$EZ4ledepeX72I1gQxyEobuhDDBa5Ge4zqHhrRuu64VauaFx2ElPPq', '4EMW6RWd7xfOHd4Bdg8fMNsrzDB1PFlgqBLfyJ7u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(215, NULL, 'melindacsr@aol.com', '$2y$10$zBy9n0m7ar9AQKrZ22o/x.emvLsiZbpbFLPbpWw84jWG8K.k2yBYe', 'cpoK8CZMuXcczPMj0m0ZyN7xKXn0gjR7xkyQ7xgq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(216, NULL, 'megatpl@gmail.com', '$2y$10$CbqdTLT.SMxo93k2bxFtZ.4mkYzcAIv77fqTUXYLjSqdSMkQBTubG', 'zkG5IkuDVe9w9xm0rmI94Z4OjLFnIVb2PnCbpVY1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-03-11 19:45:11'),
(217, NULL, 'qmqdwcqmp.t@monochord.xyz', '$2y$10$FVfgKZmOLi6BJKRQ1tyu0.0FZxMhwrRJmfjNc34H.PdNZ2qXvUmUG', '31BcGBtLjWFtaUxtmM7xBLcOz4rb1PUmALSbcQp7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(218, NULL, 'drgayele@yahoo.com', '$2y$10$jnrtFvMMa5.ooaRndck1wuEJHAV3EZ8mdncbh9Odw44ZWHXA6.u3i', '1A2cRKXTvNsSj2urVYq4gmOY7d9vSGo0uY8lw5Wb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(219, NULL, 'npatel@netlinksolutionz.com', '$2y$10$9tfeTOaeGgzcy8byZG87cOXmgF/v16fMse.u.ZGFX8/OMPfqBu3/a', 'DoyGzAOSsI4Vi4BSqmlF9uRVPj3vUN0U2F4DMUcp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(220, NULL, 'dwwbbdqbb.t@monochord.xyz', '$2y$10$.zLtqXtbrT3Qa0g5pjmJhOpafz.LMc/qYT96pIu4k9drEimlGNXF2', 'ToGXLo18cCh4VSasv2vze35FyLEc2aIzzdeBNYTn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(221, NULL, 'shonsims@icloud.com', '$2y$10$eOT37Apnb9zkV2RAXJdImeWY.cknnqeIu03xFRZtnETpG0Vn6TZPK', 'KI5lEx9w0rSlwYIR1D4TjExjuz3OwtxcvNlMvJZj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(222, NULL, 'madisonvanorden16@gmail.com', '$2y$10$LuJNBz//wx.qX8DaBSJDW.PLKP4yuAvdIh5JQLysXN1ABn9uddWVu', 'm72ojYZ4pT0RHeaDn12Csgz6gekteE8HUnqpTFNy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(223, NULL, 'seelallb@gmail.com', '$2y$10$eLT90ZTpbFns6Fw72MtZ1.9in28RDbcAjzHMGgtW6xDZpWCta09hC', 'S7YmOGlxzzjVTNuRvnGjxV8lNa7AI1vc7zhdeDlf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(224, NULL, 'drbryan29@yahoo.com', '$2y$10$HbIEAQzB4uTbxjV6yqkHBOp.RcTUeYhP1AxNeeoM9DsSdkTcIsEJK', 'DYq3WZsJr3hEfpQaAip1B6NOl3ShF8GmmxTrKPqF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(225, NULL, 'ajrare64@gmail.com', '$2y$10$c2usUwOFxRiPmExXIx8kJe3t0bG2xC5iruc00V6l4UGSfEf1NRklS', 'xRLkdCoBzF2D65PhLsMRCuVwD8a3AR54nJ6plvyv', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(226, NULL, 'capele@shaw.ca', '$2y$10$RUA6vjw9RwPOHL6P03ecb.R7pFiup6O1E6q//7HJzHYvTwNOCdo86', 'NXT1gkPhW65sg0e9J4Y62DUE8CkFHns2uSnC1GmN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(227, NULL, 'stevenewcomb@sbcglobal.net', '$2y$10$HJvkxTIEbHz4DXywGeOZQOgxzZVifvgBAhRJIXNZFvu00Zcc3Gv9e', '144O96pMFLrEuQXCmkupoWREVRg1XD9WbUlgWl9l', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(228, NULL, 'odentydus@gmail.com', '$2y$10$Ut9oEMLJK8j6wxNrmjX6nus4kqsal7CbjaHnmUjHzWeTRKQDf.S2a', 'xptPosIUHt6kK4iOolgZzUwtYSvD4cLMOfZD8Cho', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(229, NULL, '4xmeister@4xmeister.com', '$2y$10$lTZeLfwY8BIAS0muN6Y1PeFsl1eCoDwgJ4ET3/ZWbuLgoWyGNfN.u', 'FiGCTIUmK2x6Q1BmIGtCfHpukW7IH9WW7AhTSlz5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(230, NULL, 'luigi.giannuzzi@hotmail.com', '$2y$10$3oHCfDXSBbNIg0KLdrtjAOj/Ye9eeLBDuFJHhCi5hHS4Lb70U15TG', 'Ups4j1815bNumdpYasg2sqXlQEVaiFQerinsMJzy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(231, NULL, 'jimtyson88@icloud.com', '$2y$10$Icn5Go99RjlXrl/A0OCkbOBBSgBNtVHLM68ujErKUxNXDeKynmPjm', 'gVQcgGPZkKz8tiNW66zJV8eKZnqXf2zSMMxV5Rfy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(232, NULL, 'AeeXCk.hwhhdjq@sandcress.xyz', '$2y$10$3Ei/WFNJVPEJKECgLDAoZOaL1PEMNYboKq7qyerZ1qZSQSCsk/4/O', 'U1ZZWphPr8N3Uq1MGjoJsQdX5GQYNJi0jpdw3ePo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(233, NULL, 'robertnorris1933@znemail.com', '$2y$10$QZzTKHhw5kJyW.FMSCK5j.ILA4MsrpaoGr7N7Q1HcEM5QWok63oVC', 'yh8DbqZAuiV1Jiv72swL1Z4OvgNdtMwkhqVw09mv', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `student_accounts`
--

CREATE TABLE `student_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `fee_invoice_id` bigint(20) UNSIGNED DEFAULT NULL,
  `receipt_id` bigint(20) UNSIGNED DEFAULT NULL,
  `processing_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `Debit` decimal(8,2) DEFAULT NULL,
  `credit` decimal(8,2) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `grade_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` bigint(20) UNSIGNED DEFAULT NULL,
  `teacher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_id` bigint(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `grade_id`, `classroom_id`, `teacher_id`, `section_id`, `created_at`, `updated_at`) VALUES
(3, '{\"en\":\"Mathematics\",\"ar\":\"\\u0631\\u064a\\u0627\\u0636\\u064a\\u0627\\u062a\"}', 1, NULL, NULL, 6, '2023-02-23 08:48:32', '2023-02-23 08:48:32');

-- --------------------------------------------------------

--
-- بنية الجدول `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Specialization_id` bigint(20) UNSIGNED DEFAULT NULL,
  `Gender_id` bigint(20) UNSIGNED DEFAULT NULL,
  `Joining_Date` date DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `grade_id` bigint(11) UNSIGNED DEFAULT NULL,
  `classroom_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `teacher_id` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `teachers`
--

INSERT INTO `teachers` (`id`, `email`, `password`, `Name`, `Specialization_id`, `Gender_id`, `Joining_Date`, `Address`, `grade_id`, `classroom_id`, `section_id`, `active`, `teacher_id`, `created_at`, `updated_at`) VALUES
(11, 'mahmoud@gmail.com', '$2y$10$LBAoDFKFCv/2ZhE9HqYBTuKfoS8wIRseFrXsYvy5ddXtCfSjDLeuG', '{\"ar\":\"\\u0645\\u062d\\u0645\\u0648\\u062f\",\"en\":\"Mahmoud\"}', 6, 1, NULL, NULL, 3, 8, 15, 1, 'GFDZi1opHtN11QfvwVB5toqfnKoh75Yw55AcVB8h', '2023-03-14 10:19:46', '2023-03-15 07:10:55'),
(10, 'amroldfox@gmail.com', '$2y$10$QtTBS39KeeDTxNS8X8/KfODFuHX9h2v3qtQExsud/jhdQl7r0VPLO', '{\"ar\":\"\\u0639\\u0645\\u0631\\u0648\",\"en\":\"amr\"}', 6, 1, NULL, NULL, 3, 10, 15, 1, 'CzuTDWeMiznGS9YCgMIszsDp3UueJx9htpLJ5xDR', '2023-02-26 10:26:20', '2023-03-09 11:37:04'),
(68, 'angela.malson@masterycharter.org', '$2y$10$Gr6qc63/otOfyc7Jj7/gpeSpuf6XcurSug4jiXWPw65PjYhB.Rssi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'hCqZ5SfVu8gA6RmHahSBTu1h39bsHsMR0sZbZhFc', '2024-02-14 14:07:14', '2024-02-14 14:07:14'),
(67, 'gazilaura78@gmail.com', '$2y$10$q0S8dabGZCo2IK2tzYQ4lOQ5eS33ZQqhhL9Xs3OUx5JL55D1zx./G', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'rMwz8LunczOYXoGwjbOgsyaNbsciYOUpyf8lrSjR', '2024-02-14 02:38:52', '2024-02-14 02:38:52'),
(66, 'kimgagnon79@gmail.com', '$2y$10$0M0XJOvBiXmAjWtK4xQ3z.2vcDClXVuArZWSO1MpvQpos9j9M7Vu6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Euapv5n4iRv5UJzzdBuGGnVhx6cjR5Ib0vGc5Atm', '2024-02-14 00:32:59', '2024-02-14 00:32:59'),
(65, 'clemence@ahhcflorida.com', '$2y$10$jy2MXuHw6LrmzOScGBtf.uuuVKhdU149YzHt5ul4P01s/TTB6CxpK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Qzp38ognsauvYFrSlWe9ulyCXP1TkIZv2T2Bj0Bk', '2024-02-13 23:12:28', '2024-02-13 23:12:28'),
(64, 'jcarter@axiommarketinggroup.net', '$2y$10$G3TsRwjSSuBbl81FVhGYOu4sVHa9FLzCZJTHkLmipn5cXdp8iTS7K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'm8LI5Vm7Xs9grSATXS6BPH5T5iVJfIV5ta0QvFEx', '2024-02-13 20:51:11', '2024-02-13 20:51:11'),
(63, 'rawhite@ucla.edu', '$2y$10$czCKmTsaDapZflX1wOK7LOQJOsnT4lK.08ifVntz4a7GjpPOgfaRm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'pmbOoccC4bm0xVCHvdyQj7fgfb4dgDg1E0r5xABW', '2024-02-13 19:52:57', '2024-02-13 19:52:57'),
(62, 'hurstfamily@sbcglobal.net', '$2y$10$6vRXSc4ScYvWgJvg6VAY.eh50K9DuuNwAO8NtgYu22YDd1sqG0H8S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'uvoL1Wyb7BwS9e91KtogcBy8WGsSDX39i97sYNBB', '2024-02-13 18:56:16', '2024-02-13 18:56:16'),
(61, 'whga@aol.com', '$2y$10$.mIeahhVLU1Qv4VGEpyRS.rJj0kky1U.BPK4ZbpsCIgy1mkhp7zf.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'jsv1rndiNla2oP61VG1XW1punHNyExn1ygtemeTJ', '2024-02-13 17:32:16', '2024-02-13 17:32:16'),
(46, 'midofathy081@gmail.com', '$2y$10$CLrJ8XDKG8HYxQfq9.Sp2OhPRxyGUm8KmztZtZJ0fNEgY88MYwg5G', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'f0iBoGiyJinHesOGhSEu7Fiu6Po9Dv4KC297jdHW', '2024-01-31 06:53:54', '2024-01-31 06:54:18'),
(47, 'wwahidmd@gmail.com', '$2y$10$6ULUtsVkzlC3pUlHOvwTku2wkY.b45TfqKJ/5qX2R.cOeI9gN.1LK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '4KHv3U3BqOHa3UnOghjIQml2QyhJXwmlu3hkEDuQ', '2024-01-31 13:09:55', '2024-01-31 13:09:55'),
(48, 'cyborggold@gmail.com', '$2y$10$Os2NjE.Af46NdxNKM4t8ZuUKfTZyc2SNkQrCeA2ohIN/jpflOC7yO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'BroPFkgJQvTNMRdwjGDdnPAFxoCLhO6gw8TyeYP9', '2024-01-31 15:54:18', '2024-01-31 15:54:18'),
(49, 'austindeloach2018@gmail.com', '$2y$10$hjvxAgk6Bhkd0Iz7boNUlOJIjmspxWhX9j6o67SRwg.Iwq/hXLY7q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '7FzBopfWv8d6mlLhv8Mc0Ib5fDwHwxow2l20DH1f', '2024-01-31 17:34:18', '2024-01-31 17:34:18'),
(50, 'sherylplott@yahoo.com', '$2y$10$QoNaXHa.TxMkOrcTrjy9COgf4Qlxz7o./iBnU1ypUVv/tzr4pR1si', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'wy3fkbPHTmFQe5S5OVInRTHSBBAvfoAbwVZv6gzv', '2024-01-31 18:39:50', '2024-01-31 18:39:50'),
(51, 'ronab110@aol.com', '$2y$10$e4OK0f9xkfjnLSFnKiG5KePEiXS6ajXlQhu2jWl6p39dscPlMG6i2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'eZfVqbIaT1USHY8atINvdN1c31DbUAcAzJnZxLyp', '2024-01-31 20:05:18', '2024-01-31 20:05:18'),
(52, 'pajohnso@ncsu.edu', '$2y$10$RY6ZhCn8w8pun7bIyRcMHu7NuulQSUsSIG4RasjGrCKFP.iKbsd7y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Zp25V9TO88wc3wcyUDwSpqAAwfTFfistU3owONTw', '2024-01-31 22:00:26', '2024-01-31 22:00:26'),
(53, 'mixzy012813@gmail.com', '$2y$10$SY.4rMwYZlVcp6f8J9eYpehHfHLhyoBVu3kD/Nkqj4iUgSQe11uAK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'gtmYjSwsSFGfTJpGxSok0SZqB5pCzZa0nMRbcUP8', '2024-02-01 00:27:04', '2024-02-01 00:27:04'),
(54, 'christian.hetzel@7nteng.com', '$2y$10$R3TWxbznN1w.vAAlJeaHxuWCNJ.MGQba8gXpfZCHQvRtwYgqmQ.eC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '6fwQFu0tj1YZPKXDnWtPd3d7bV9H0R88sp4a3QYP', '2024-02-01 01:38:06', '2024-02-01 01:38:06'),
(55, 'katdeluna@gmail.com', '$2y$10$ptik8IS.Cqb2VRsdA0IL.OguKnKzIPZD/cpxYVSaXat9mNA6nLsTG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '7mblM97SgxuSmGXshrkdp1VVcnRH77aYktSm02fl', '2024-02-01 04:56:27', '2024-02-01 04:56:27'),
(56, 'AkVcOQ.mdbbtww@spectrail.world', '$2y$10$8HOUXSEX99WWB9Gk0ZUob.sT2bvZd7.aapedokrqkCB04JcBAK3fi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2day1Dkt7VTBQWUVlVBhYjgmhKJy2rkO9yhZSQsJ', '2024-02-13 04:04:57', '2024-02-13 04:04:57'),
(57, 'hyqmet.mece@mass.gov', '$2y$10$x9IR04IMsnEEcX6H2se5uOsbCHSBPsL37xk3IHCVNfoye9ygtDmRC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'uV60OhxlMi3EqQD2Rw5tBtDcqm6xqZVVcMPGLeL1', '2024-02-13 04:08:27', '2024-02-13 04:08:27'),
(58, 'info@highfashionfabrics.com', '$2y$10$rz6EEmEvc4B1Q28wd50d9erpnehGH7g/6rc56OSA82TsuDdYqbHZm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'lGm8kUvIVYLl6T3HnpwozbE3ErWpiAbJBAavZLHe', '2024-02-13 05:54:17', '2024-02-13 05:54:17'),
(59, 'laurelprokopow@gmail.com', '$2y$10$jmm06IqhKpTc6iwSA9M2keUhNYWWfUQuTRLwf8RIEVs2IIqZ0ZA/.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1Ofw6nyXZS1Cy2Mt3xw4ZiaSbVooN18T1aITmfqy', '2024-02-13 10:16:36', '2024-02-13 10:16:36'),
(60, 'cocozzafrancesco@gmail.com', '$2y$10$owPCfKODYVj9KYfdv0jlDe0fp97UZYCoKPPRaNpmgQ33CUY13C.aq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'nz42IRAFzhGjFihnwwGwMctzZuuufTYjzt5siU2J', '2024-02-13 12:15:41', '2024-02-13 12:15:41'),
(69, 'sladelance@aol.com', '$2y$10$xQKiTAqB71Delan3eubVZeFBP9I5P71Yi2t/XiuDy1kQHvNsK0sce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'v8NrjfoKhSE7ON455IUHI4jy5EwjwvEclZUKoUXs', '2024-02-14 17:55:23', '2024-02-14 17:55:23'),
(70, 'cisco@futuresbuildingcompany.com', '$2y$10$hgJ8J5OQPwBZzhHrBR9MIOvmdBfcvSapq1h250IVwDarGViXAOIzK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'ExMPZAIInNCgO2j4WChBGQaKop5TrfgshHLW7LUw', '2024-02-14 19:20:10', '2024-02-14 19:20:10'),
(71, 'markprice59@aol.com', '$2y$10$SRnTPrNO.rQ88O5prDyjT.LrrKCwDrOqaJz1roh8SICsxhR58yj06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'LKGduJvKaIdUDEzkiqvEf4NS7vMVblt0KMTbXBMs', '2024-02-14 20:11:13', '2024-02-14 20:11:13'),
(72, 'mrancourt@cslaval.qc.ca', '$2y$10$GgApGsNqI5LAQYs2e2D8MO09mgaEkhJ9zTcYuvmv2N5RRW8wjyFU2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'gaXQ7tYBh6RIOhXNt8iNXk3otUBpRypD9RXgjgQo', '2024-02-14 21:10:14', '2024-02-14 21:10:14'),
(73, 'rgarver@midwestlabs.com', '$2y$10$Ze6md4CCD7x944N/ieQ2eOZpqHJbTCYzb875rzx.p1qMfyeV3Tan.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '7kumiUTLclnwFy60AB3gJTgVn8jErWtLYojx1oVw', '2024-02-14 22:21:00', '2024-02-14 22:21:00'),
(74, 'j.farrell@scaec.com', '$2y$10$grWiiJyD8xWP1fHGvr.lnunwFPwL1h1AIh9.TLe5gMZV.jSOZtG8i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '8E9FpMGx3vijnn2aEABJQ08HVxd8oR685zASnKzc', '2024-02-14 23:18:25', '2024-02-14 23:18:25'),
(75, 'ashraf@fiveboromg.com', '$2y$10$6wYVflZ0E9tej5YZ5CuULOenW/j0E2HOg3m/BHYJU1pWuCtQTjPFe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'vzPfG2Vlqay06dDJ2PuRQd6xcLid29IuiAIwz6uI', '2024-02-15 01:06:56', '2024-02-15 01:06:56'),
(76, 'kcherezov@gentell.com', '$2y$10$YTr.DuZJWEOwenlrGyYJ2.JebfFtpnEtAnElP0vORVr31VPtZZ73u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'LhyqiJbHG4wZKhOdKeBL6Q3YOKtmynrmGfW6LANG', '2024-02-15 07:07:58', '2024-02-15 07:07:58'),
(77, 'md.moniruzzaman@dot.ca.gov', '$2y$10$uIPhSga9zeIN.W2o6jveXOSR080a.XZXvxdtwZboal/3jurkuraBq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'yjj2Og2GVOSWJ2SQk4LTkH4RDu9txHVndhHbjNVV', '2024-02-15 07:56:00', '2024-02-15 07:56:00'),
(78, 'service@masterlineplumbing.com', '$2y$10$lxtfGH2vpuGmrl3wXoDW1uRXWUfj5Ka9PglYhUIpFHwU6Dn4NIiB2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'a65MPwK8dYJ5KstiDDHHQn4ukXxWk1OTca68z9nb', '2024-02-15 10:07:55', '2024-02-15 10:07:55'),
(79, 'uWEPIa.tjdjbhc@flexduck.click', '$2y$10$icNgGsxfsjpWGonjG9q2dOqRCuW5dMvDoG0P69FzRKRGi0hosHUhO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'fxDINyiMDkxbrDfhIVM9q4DQSKvW7Um8NxgGQ6OQ', '2024-02-15 13:28:54', '2024-02-15 13:28:54'),
(80, 'trinityhs@yahoo.com', '$2y$10$EJReZycHmNanGblJ5p73Xux6Mu8yvIGytYTyrOBVxkDsOtTw086ri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'T1QpYUBxHHfmF8ZlMjJs2ONZHkdeNPSjuWLQr6M6', '2024-02-15 16:31:38', '2024-02-15 16:31:38'),
(81, 'estimates@energyfencing.com', '$2y$10$AUq7MWLlnoa8NMswn7d7sOQLy4dSlI4KbNDJOaI4Gyt76Rkdw9yF.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'HDX5vrEwI4GoFGLszWVc0RKkr8ZI6bMWXkaa6iXz', '2024-02-15 17:04:46', '2024-02-15 17:04:46'),
(82, 'thomassalemme@aol.com', '$2y$10$mHFZS21mf0t3I1Bgwajnj.lNDeZS4/0PFrqdVSKDgKmHbrUuB/Yry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'peVzHCoZ47IrFAfR0KVDuBF6sTLVpemfWPmnQOc0', '2024-02-15 19:13:25', '2024-02-15 19:13:25'),
(83, 'deemarsh67@gmail.com', '$2y$10$xT45soHN7vVLsb..siyDQe9NtvqkAvQ6ZAS2Ackc0HwA8EXZG2tqm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'HTuKcp5Lp1uQl1IowBn4JRN1kSZTCRzUJf9iUHhE', '2024-02-15 19:24:37', '2024-02-15 19:24:37'),
(84, 'ruthanne@verizon.net', '$2y$10$nkaXSYyDnRRdjg5x0AMPmu4/OoeKhzCdgnO7ttdtd28LCCKHuLd1q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1dZUK9gbSXgCmvRxuRmfQ6YKTS1VEluMN1vy6uOG', '2024-02-15 19:59:59', '2024-02-15 19:59:59'),
(85, 'georgetorresiii@gmail.com', '$2y$10$ZplMBoGqTJhV8KoH1ThlO.jyh76Uxyz8vG2PATTZkTn/FeX0GeXJK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'VvmceKkxQxEHF3C289bWKY9fvwnpxcXM1F9r3ysQ', '2024-02-15 20:19:44', '2024-02-15 20:19:44'),
(86, 'andre@ulbrichs.de', '$2y$10$4mcONiTyclLFTCZ/nF20muoS44O.U2scDvl60kiWltt2keuZeXot6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'jJ5LThihuopVkOUB9gEi2vsYbJ4kQUzAqDugj9VI', '2024-02-15 22:01:45', '2024-02-15 22:01:45'),
(87, 'jclark@pattersonharbor.com', '$2y$10$xzAujKAku6gKo5Bld9HKa.ocaeNPWOPKEYFXjshXQ3Ycm58T.B5D2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'QhHhtb6rkHFkTHWmeQaVDwzioimytUk246hlyMn0', '2024-02-16 02:00:14', '2024-02-16 02:00:14'),
(88, 'fourpawgma@yahoo.com', '$2y$10$xkuQZNsCu0S7IpCXgY.70OEbNt/vUeOiQ9tCnhZ/dLP8AHmhgj6p.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'FnOKEqbhPcjHqtIoAShvEdzhGVPnQgmyNKrg6xvB', '2024-02-16 12:18:09', '2024-02-16 12:18:09'),
(89, 'jason@williams-properties.com', '$2y$10$fbSE5oPIAxu/2CZKUGj.MeFz94AI2oLLf7RmtZNaJxSFGU6uWgmVS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '5P9tH6shbwyqFBW5uDE8ekyoCZqEWdM7FlOrj3s9', '2024-02-16 14:24:40', '2024-02-16 14:24:40'),
(90, 'juliely88@gmail.com', '$2y$10$dCncSNupeaMAg53QIgk4G.o3AQJvP3O7zhYzVcIan6K8CAbgxH66y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'MLQW8vNlI4HLu9mTSNbxD3dTbSy1QTfi0WZ0iYUM', '2024-02-16 15:27:24', '2024-02-16 15:27:24'),
(91, 'pYHupH.tcwcchp@sandcress.xyz', '$2y$10$eTTjDCcVg5ti2lRCplJ4d./B4UaBZV1Y//FlDOUC0hLSYwpx4sHmq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'BmzFgehqpXNq98UxnxVXMbgUbsS1ZlJgrcRQPypE', '2024-02-17 22:51:13', '2024-02-17 22:51:13'),
(92, 'krb1103@comcast.net', '$2y$10$RfpK4zIisOzytX01brL9xO02OOVq89QeJLC9etzyHuOIHWCffYLRS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'tXM4GrwQDWEg7r1RyxeLG4X6p4aFZwMjnXxxKn6c', '2024-02-18 17:06:14', '2024-02-18 17:06:14'),
(93, 'tousley95@gmail.com', '$2y$10$k/NnHmQhacP6CgRwVyzk7ujDDrE2.BTCpM2h5Xm03zRyxe9g.uG0S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Y1WDRxSFaHpnNTr8MsFPn79ukM04GUu3JGPpkd7g', '2024-02-19 14:42:52', '2024-02-19 14:42:52'),
(94, 'tmcconnell@miottawa.org', '$2y$10$pWupw5YgAJAtgfjvUyZruO.fHFWDE5FD1cq2CkyjuOG4l7Je9a/mW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'QVYXLCnLngmK8murx2QvWWGRIpY7cFoVKFOmIzlz', '2024-02-19 16:20:56', '2024-02-19 16:20:56'),
(95, 'ljsimsel@gmail.com', '$2y$10$VTJz9Bjq0fQlvTBP4vnMxutosPOaTvNnQG6VuERpsrtslz7R4XKD2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1TYJYjm53uwpot081dXqCkCsw0hRIh4HmnE2f2Rd', '2024-02-20 18:41:06', '2024-02-20 18:41:06'),
(96, 'itspdino@gmail.com', '$2y$10$/5YHrf6ET8fRvdsOkm7J7.qlhPAkgJmAtyK.1qb2GHFqTKBLY6H0S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'rrKfPRPyUJew4hr6BoIPF0EUBb1kjjlPu0nWgUmo', '2024-02-20 20:28:21', '2024-02-20 20:28:21'),
(97, 'felixmedina731@gmail.com', '$2y$10$pJGTgOJW9HtT0neuJfRVnuHYHa8bVmSrGhx/s3HsN8OcqEqfOYT.y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Z3EK61XnVsSJt0C3D1TU0Jdx1u36oQrIcGdRsnNA', '2024-02-21 06:02:41', '2024-02-21 06:02:41'),
(98, 'midofathy08@gmail.com', '$2y$10$HjSwRsnqb4VA.Ao8WgqECeImFb1d6HQ7VzW.e2hjHlUJbWmld57Xi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'DZEt5C6rRUnx6nwjoS7OytnEGAbBFvcLhOJAF5oj', '2024-02-21 11:25:20', '2024-02-21 11:25:20'),
(99, 'exulboutique@gmail.com', '$2y$10$GG9Qhl22jc8WCNpU0hHKx.4xkSpvf9PmPNprWBawwg.WV2JcCPQ9C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0zrr8g1yZCHcYBbes8gsiOAYIpMmGYWUIXVc3gL0', '2024-02-22 01:22:00', '2024-02-22 01:22:00'),
(100, 'bigrobnd66@aim.com', '$2y$10$jonw3y/87emUPSwgLxX57O/NvkerfaCKJ6sCwdAanHTMQ9BQqJ/06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'hb8ngOuoE55ubD5v6bEhNela9e9s3hfj8xLDlPE3', '2024-02-22 18:42:20', '2024-02-22 18:42:20'),
(101, 'jensonkurien88@gmail.com', '$2y$10$B1a/HWzHFnCoJj1TxV2Y/ubC7J7mphGYT2932kHHH2sOW.br2CC5K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '8Vy9ewGJGZGkVLCsCphZ9XBNZbGXJVOfmMkRqkh6', '2024-02-22 23:52:14', '2024-02-22 23:52:14'),
(102, 'jespino@northernep.com', '$2y$10$LiVYwUFKhavwMGZz.QGtH.nNOSqGq.DFkhZw8/O1ANwCqlTaLnUn6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'uoH2oK5fyKSwuJy3mAjyLizhNbFb62ku5lalUEPp', '2024-02-26 13:53:51', '2024-02-26 13:53:51'),
(103, 'QFHJny.wbjdmq@wisefoot.club', '$2y$10$ZUcL10I1IPPgJpGK7UV7IOj4EPDoX65Ol7H9CMh1Y.EEJvKYnh9U2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '7C2quEepbjEZFi9F2FzgcYBchPqTDT9uTCUGUzS1', '2024-02-26 18:53:02', '2024-02-26 18:53:02'),
(104, 'david@dmpstudio.com', '$2y$10$3tQGq4cztnfEAtD7GlI91uDyLb/xOvFWbwOcZCzWYP/lIXK7.A7Py', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'PHoF78TCEcpshqe78HrSJQafvZJfr8woLACgxEon', '2024-02-26 19:37:49', '2024-02-26 19:37:49'),
(105, 'conorcoughlin@earthlink.net', '$2y$10$xbEmkRBBTtKjtlUdbQj3qOenNu6SM9UA5dE.o6qo3G4u9p5SUUheC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Ucek7WcKb1DOkykfpjP5wCsv62snZzOGf8p0kUep', '2024-02-26 20:11:15', '2024-02-26 20:11:15'),
(106, 'huycao69@gmail.com', '$2y$10$HLAedJB75/0PI.VPhJlHLee3WoFNOnldWuPceVfEYyrPEheXttqvO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '6rHVkZLPOaUJu7f7z2TJSvubASOlxHOMqOqb6oYO', '2024-02-26 21:08:26', '2024-02-26 21:08:26'),
(107, 'andrew.liesenfeld@gmail.com', '$2y$10$.w97l.PsEwrZwCs/F.cyj.c0cN55KoAlg9ZjGUl1JyAap//Y68rhG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'EmPX2MdvKZjmqabQjXFEZqtwuwTz0M9qrDYsKWnR', '2024-02-26 21:40:06', '2024-02-26 21:40:06'),
(108, 'servproqboint@servpronet.com', '$2y$10$.io1cABs/0oZvRboFbQaiewLQlKxuTcRcIxqyJNGQ3jHzVkdh0BTW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'OOkXaUcbgxztKujzyExRyJGqaMlfeCY9whQIBCEU', '2024-02-27 10:09:44', '2024-02-27 10:09:44'),
(109, 'admin@servprovigo.com', '$2y$10$97UJCkXEsrqxbgUCnjBogugxqpbVA7CzECZUfnBPbTNLiCOtvEEkW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Ltrr5s7v25li50CMOWuibJYBb9srVUHcx0vB20O0', '2024-02-27 10:51:57', '2024-02-27 10:51:57'),
(110, 'james.gloer@gmail.com', '$2y$10$901Guz/3IFoP1szt8rlCiOWUVZXz9jRyZ3x0f8w9Soabf2rR5LvJi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'HWQBdsUfAMpI5BDSR83PX5fDZcZOt9KzBnANKS3y', '2024-02-27 15:20:29', '2024-02-27 15:20:29'),
(111, 'klperrin48@gmail.com', '$2y$10$nbVEm2COaScSaPT7pkdxue6oD7zU3EwV9DOo/60xPwl8p1x8kj77e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0j2jiMwEikeJr8TeFfFrxwcR5Efd1SKzCbqOb4dw', '2024-02-27 17:49:51', '2024-02-27 17:49:51'),
(112, 'elese.edwards@ozarkaero.com', '$2y$10$zkF.zJfnMQ8YGFQm0NgJcOG5Mro/QBl7QcEBtLC9xfZXhp6JS8sby', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Rs67O9mTBwte4IvPWreEFda0mdv7YIaMvpo8HqKs', '2024-02-27 18:14:07', '2024-02-27 18:14:07'),
(113, 'pearsonpl@outlook.com', '$2y$10$5hZ1PnzUnWMK1OHKNeIWCuGSMrkEtVV2v46RRSzUrgxw83pTnUotC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Unpul6fuT1rQIz8kCcWRqJXpgSUDX83GlEbHLfb2', '2024-02-27 19:11:05', '2024-02-27 19:11:05'),
(114, 'gxf@noc.soton.ac.uk', '$2y$10$KhNBe4G1HjH0irosHz4r..ZHFb5pGbgiBryPz8Dtfsv/sdhrUdbeC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '6LZ52d9eXcclqPNjdoahBAJEUKmUB7HQTrnf4PyR', '2024-02-27 20:18:24', '2024-02-27 20:18:24'),
(115, 'mitch.newman@movementgyms.com', '$2y$10$IafwFEz0mG3xV3WuA5SH0uQQ5MuD.Lx/MbtToc5GvfgryWLqmFGFG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'ix10Rh0p7C2g1WMlZDzqQYAFEhZ6Brag3jEmP5cB', '2024-02-27 20:37:45', '2024-02-27 20:38:55'),
(116, 'raffaelebramucci@pansoinco.com', '$2y$10$ubWBMnYI6fi3pxFHtNVozeJWxt33lDXM5rVtrpjBJMAPF/9.ZX5EO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '7q62zLpcpWbD5tejyqwgzQtkx1yPkvdvOQ7FsLbL', '2024-02-27 21:09:55', '2024-02-27 21:09:55'),
(117, 'spineda@wanderlustglobe.org', '$2y$10$SYtSOBIGpYd1/JSF9hEsXeF7uDg8JWc2.D.BJxSGBijR8n3brQqFm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'nsIua49OS9JkrNGQYmmmslKdO5OQOocMEbcxqf9B', '2024-02-27 22:26:57', '2024-02-27 22:26:57'),
(118, 'invoices@niemelaconstructionllc.com', '$2y$10$IHqxmHgIZtfLGZRR5icQsu7IzSDbjBjopiy5AcIVXUoT53slkaywe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3GxeMn4uayVsx85p4jpixnucodxwKKUfeY3NlhYG', '2024-02-28 01:41:38', '2024-02-28 01:41:38'),
(119, 'drholden231@gmail.com', '$2y$10$4Y3fQMewhVUQyTzEgHoU3ehAOMHOXlyZsaWZqcXs9yiz3nKA6fWhW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Hl72mlvNzYSQ8Taj69vefz3lWVQnoea2Jb3x90ez', '2024-02-28 03:04:17', '2024-02-28 03:04:17'),
(120, 'melton3205@gmail.com', '$2y$10$xRzEDn4ADlQCHjIQa0BhAOXnwYJHHRvtLMyyKHk0HR1.c4sJNQ6C6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Zq8c74VkpgT9WhqCxk3ERTYQZhYasi8fXvF9PoxI', '2024-02-28 03:54:51', '2024-02-28 03:54:51'),
(121, 'mg2010md@gmail.com', '$2y$10$8375nRtQOyE6gxSPCKCe5O5VF4DoU1hYsgZKlzXWLsd/lMAtfSXr.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'UJmWfjP9w2hwuTltquidfyyQX0tG50FExftWbdMT', '2024-02-28 06:32:33', '2024-02-28 06:32:33'),
(122, 'jechapmanjr@tx.rr.com', '$2y$10$5URg6.MCImTr2MhKaIAtLewhftzC/s6IXsH1dG3bC4qpJKzObHn1G', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'TPobIh5lGLrK5T441SKknvwNkFLQTvfilU70hy8D', '2024-02-28 12:30:07', '2024-02-28 12:30:07'),
(123, 'trevor.laurent@providence.org', '$2y$10$Hy7RLlGPvl.EUNNBAAs6m.qfBTkVydg/V0Azp0gOOhlN2qQoIvj8C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'c5W20K8tdKbHM5ZdiYVkW4tBh6kziIcf51QhCSJU', '2024-02-28 15:47:51', '2024-02-28 15:49:42'),
(124, 'bdavis.andrewservice@gmail.com', '$2y$10$vJO65sRXGmbxUYwVfSRxmOaScrLHsQbDrcZX9N6CjaT0MX0dLChXC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'pELbKmkr1GpyrEQaPoygwOmLMwb5EsLiwoidgR0P', '2024-02-28 17:13:43', '2024-02-28 17:13:43'),
(125, 'ryans698@yahoo.com', '$2y$10$UqkwOPj9UeG51ypcBeP2E.yeTUpKPx6ZdSt3OsYBjDN38mDJrZXOi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'tNpnSl3VJ8acIakpxyayTMe1NSNag48jjpq263uM', '2024-02-28 21:18:07', '2024-02-28 21:18:07'),
(126, 'egmm.it@newintra.seoulgrocery.com', '$2y$10$zoiCXnYFeCZPymLWt0lmouQKHYYrsd5Ge0CnHPWfkqS5TuQIv7X36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'AOBLlGhUZTRGcjEBQt6qd7rMlJuzXvpjefOFaAU2', '2024-02-28 23:17:35', '2024-02-28 23:17:35'),
(127, 'ddexter@adisotx.com', '$2y$10$7Z0DXo8WwqTzv6wzE/8CFeRwvvMFn5UVLp0BFK18Oyctm4C7S1.Mi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'NOE0ypsDywouku9SDej2TQfYfjKBQEg6rTIHHkgG', '2024-02-29 02:43:33', '2024-02-29 02:43:33'),
(128, 'madavan86@gmail.com', '$2y$10$EV29Prz7KXQKfGoue23YTOdV9htkp3skkYoUQpMOIiWKghzjwIkTy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'EfaGK2d7dgo0rqAa9tg2tLPC3r5jt96nBlBRFqFg', '2024-02-29 02:51:48', '2024-02-29 02:51:48'),
(129, 'ihazptfjy@gmail.com', '$2y$10$CTT/ERxxjMBDvyq2jX4Fj.HHwr4zt2oJOtAJeV3uUxdb86925t6ly', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'W7tWv2wytlRq3XNCCScPPl7OP2OdY8Hk3AykIZyn', '2024-02-29 04:09:13', '2024-02-29 04:09:13'),
(130, 'n0tk@comcast.net', '$2y$10$IyEW5lzoe5LBnuk0p9OOouJVQ1xSAAujQX4yUeBa.c6yXfZvWvzi6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'olUI3PQf6Y7OBpmPqXdkfeGvYMQTBCM3CXSQG4Z0', '2024-02-29 10:31:12', '2024-02-29 10:31:12'),
(131, 'scott@alperinlaw.com', '$2y$10$AlrvW3qk8vGlpEwJGLEL9eo8ceyWBzkqnI0N1wm6lyXxVJEfwRA1i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'L4tWD4mvU4mKZ1dgArtGDzpACdXGcNgFkGueWua6', '2024-02-29 13:51:47', '2024-02-29 13:51:47'),
(132, 'george.vanhorne@gmail.com', '$2y$10$eJ54I9f2JG74NRamoA0Ha.LQtdjgux5poWGfI.EHatiJTc7G2Xgwa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '6UMlJQ2gGIWKaxJIRxsduAkz2YClD2aLd04tE6Vn', '2024-02-29 16:05:20', '2024-02-29 16:05:20'),
(133, 'barden.bridgette@gmail.com', '$2y$10$sLD.CrvaF9ZdmSu7ooI9C.B1/qguvpmoZ1DNZuMwbZY55QA4ZLt32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'WFrKh1Xj14a3KfSQ2zyLO8mb9iXYQWaoir4cEKbZ', '2024-02-29 19:03:20', '2024-02-29 19:03:20'),
(134, 'ericmustanggt@aol.com', '$2y$10$iww3/kot9KXJ/0nufaprrOc9Er4yrgkNtZco9AFerHQ0iAGOn8tYa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'DemcuLkGWGOaWldiqlbIJCfNwTQX9MCQdAGzs4hH', '2024-02-29 20:40:53', '2024-02-29 20:40:53'),
(135, 'carlbdumas@gmail.com', '$2y$10$znm39DChOhhplgAmUBTuC.5i4BV1xlt1/F2cAmLYbGvyK7k7pkb/i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '5R1mPqGRDiU6hQzGPXa1TuEGqCPzjd3HUDmZ47kZ', '2024-03-01 00:04:54', '2024-03-01 00:04:54'),
(136, 'don@k2a-inc.com', '$2y$10$KW9TJt701MzEFp9KDfAHn.9tGjBpbRUxhXe/jS6kJ737ACwfq71Y2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'LJPeDMwMGjJ9Lpbv6Ek7B71IaDT9fBAzFAuH1LQx', '2024-03-01 05:31:48', '2024-03-01 05:31:48'),
(137, 'iwllyv.mphpcq@rushlight.cfd', '$2y$10$jvaQWDNQfkX7p69oT3GMtuUZhzXb8mdbfSFNqyOCBT5KaoSegTd6O', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'ZRXv7AvDgJw1b6zJtWjXETqjVPkL7kNfdsN5Dw1H', '2024-03-01 07:14:09', '2024-03-01 07:14:09'),
(138, 'ccarpio0106@gmail.com', '$2y$10$Kidi5Ny9sCddal7A1wTk6.juajEDr8vDzMMB9j7Hnffm5m181SWSK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'G81o8N7tl7qN7gduLZy7wUVfwwtqWfskbh2XzNLa', '2024-03-01 07:14:16', '2024-03-01 07:14:16'),
(139, 'javiahdwimberly@gmail.com', '$2y$10$i5wCCM9n9qg7OaWMDzTJ2.HdvkcdGNbUFlczI4iimcUnReMUC4WxC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'gUL1yibLEgmmZgGXBoQCAehl8y7s70aRcdDgPV7R', '2024-03-01 10:35:08', '2024-03-01 10:35:08'),
(140, 'jlugg4@yahoo.com', '$2y$10$pH.HBI8sztNEKdPGFP2mzegmjA2ZNjBGGbbFwBaVUvGcOGrpIyv2C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'YbQbiR0nxtP4gPSZba25vEwSipFwlx0RWxoiRam3', '2024-03-01 10:44:37', '2024-03-01 10:44:37'),
(141, 'jdickerson0811@gmail.com', '$2y$10$MohAILCdrAQQNhFbuDQJEuJlffifvdH6xW1OdJMNETRzrKVD.S6OO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'GmlyiGpBkwWe5TuR6Zj4b6pmfIPFLwc3DM95NShj', '2024-03-01 14:22:25', '2024-03-01 14:22:25'),
(142, 'garynitch@gmail.com', '$2y$10$/BLvpF/skJnHLwh0DzYBCuq.vt3S/JYT/AFZ8fCv2GaflD56Ap.fu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'yGqsOAYsxkab6t1tCXMYZILeMfQe3u3c6JDoIOVr', '2024-03-01 15:35:46', '2024-03-01 15:35:46'),
(143, 'mvega5161@gmail.com', '$2y$10$TN1LeusExMC/T7xL4UfNze3AAdUJ3/skJwGDCZnOfqnBuEZmz7hA.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'TBfkDET3VhU3AdjWXBOu3h2FAAqnrpCeJGOFpoCT', '2024-03-01 16:29:29', '2024-03-01 16:29:29'),
(144, 'dindoodle@verizon.net', '$2y$10$9q.lqowsLTkm4Z83wq7EzOdue7rHy05wn9VdcTN9gLBR9cmS1VJrG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'NqeCOAGLLXO9ojmVGdFtdEHd88MfflYGv8CkGUtN', '2024-03-01 17:04:48', '2024-03-01 17:04:48'),
(145, 'sluminkiwi@yahoo.com', '$2y$10$E18SsjsUsQSXX/0ggGqlseVN0Eni8L2wcNByAKdQoVUBkrL3QWrAm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'CJav0lwaQt3l5rnLfGnRBR8sM5WcnKg5yoUrYEnB', '2024-03-01 17:05:37', '2024-03-01 17:05:37'),
(146, 'wdgpi.gm@wahkohtowin.com', '$2y$10$V20.M3wUED26xriaa3.C4.90bTAtk0JDRxmAoIwCknK/vC1RxLJXC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '0gVZSgY4yWgKT3PElPK5NVKXcV21Br1L2yNRZubd', '2024-03-01 17:40:19', '2024-03-01 17:40:39'),
(147, 'tiger22364@yahoo.com', '$2y$10$eW0c0cI6MoxXv8eW0bEm7OrcOsBB0PmA2REtQ0hqyq2fCAsomVAHa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'adSJZKljbctdMOeQzl6hEVEV91MoaeaBkVBaLv8u', '2024-03-01 17:55:38', '2024-03-01 17:55:38'),
(148, 'jon.w.green@gmail.com', '$2y$10$RGjA9nIDkn8.k/OPL96M0u.0dVOZ7G3vJJJ8cwPF.u8a2drafgzU.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'yZ8XqWyXrPcHuP0BwXZo2MF5P69npBxAhDU3mlTl', '2024-03-01 22:31:09', '2024-03-01 22:31:09'),
(149, 'gstuck750@gmail.com', '$2y$10$oFmcPIH0x37VWC7c9WVJIuRTOUePqKYu5HK6WKw6vHRQwYbKAxvxW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'HNHVSPmpyOYeCcmkJcrB7PLdiowlH40Cjo9Sbfqf', '2024-03-02 02:35:45', '2024-03-02 02:35:45'),
(150, 'joshuajoe10@yahoo.com', '$2y$10$BEE.7Ge7FZvV7NyOxHCyNuD7a3U4l1.5stMkwQ6cEeBaqbfi9///W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'pvNJEcvY2NE754ISumD0409lcRvU6g0693jhavbL', '2024-03-02 03:29:03', '2024-03-02 03:29:03'),
(151, 'jefftswanson@gmail.com', '$2y$10$gSBaiXFBfkZBw8P3/2Ho0eVs6Rl29oIQnwF0j8k6qS2XgV2TyHEJi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'PajZOQ03pDy9eHBmDMQZXSKvoVI1VDVue6pH4uDI', '2024-03-02 04:51:38', '2024-03-02 04:51:38'),
(152, 'NrVzDp.bmqbtjt@gemination.hair', '$2y$10$rDTTUbFrHhVlC8tUYZ0jW.fXNfL4A10HSf2of0VQoZ3dvxIbvvVOa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '3LZtk3zfhGQPrbSDpPZrhqnF32pBp50AoTJD2K1H', '2024-03-04 03:21:50', '2024-03-04 03:21:50'),
(153, 'suarez.alex562@gmail.com', '$2y$10$XqzYOAj8FDPW6UKT59Q3KO3KrMt7e61PuFhzys51V0.SZTGWgQqFy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'JY3eWZGNzh2WyODg7NLJInZntbAek78Dkah3Cux3', '2024-03-04 16:43:28', '2024-03-04 16:43:28'),
(154, 'q3m3mmff@yahoo.com', '$2y$10$gbPWMqp2OvJ/qIJ/IR7tEeHBP0.OGcBfa0YBRLnuL0mNCrGkLQU5q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'SnDCfO0lbxmB3li1Gbe1q5HXeQPGuh2DPzD03TPi', '2024-03-04 18:38:10', '2024-03-04 18:38:10'),
(155, 'john.carey629@gmail.com', '$2y$10$sm0ir5EvFTJCv4b3ohYfAuI1UE4FIZhMHJIuEnYYj7ZPadlp1KDqq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'L56rKaj3PAsZR7M0hmHWWMiwSprtqB2ePRmA2gDe', '2024-03-04 19:12:45', '2024-03-04 19:12:45'),
(156, 'tgesselman@execpc.com', '$2y$10$43AnFrmeIatwn90lldgVJO0yitLg0QmPLIQgAtNyVUQM.0SFhELHu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'vK3CZ44kvnarQj8mdothkuYVkCjwcOwWDvfxqIWf', '2024-03-04 19:45:20', '2024-03-04 19:45:20'),
(157, 'andrewssrl@gmail.com', '$2y$10$c21r0s4YQLHMGtV4JsIjt.YgDBCqRjblKGjginkSs8rjo4oAGqVsy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'hBkteq5M2MWl63JqPjuliIUSs08jyE00C57OGeWs', '2024-03-04 20:17:31', '2024-03-04 20:17:31'),
(158, 'DTLFwm.qtmmhww@wheelry.boats', '$2y$10$nGfr79iz6IrUfQ2tHq5Rxev3Rcez5gUTcdliK9mivtnvcp1DmNuMK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'siXoeH5hUYFCEVlxaXdfQ7tgCODa4djWEekzrIMR', '2024-03-05 03:41:01', '2024-03-05 03:41:01'),
(159, 'greenbergjodi@yahoo.com', '$2y$10$AlubcU8s6OXUoBWZhjhgleYaTRiM/J7QVidhoqhHrJlBDCNTXF3Mu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'mjl5t91wjIa8hodd8sOj3nomQF3dDQhn9AMpUSBg', '2024-03-05 06:11:03', '2024-03-05 06:11:03'),
(160, 'jmason@oakwoodcontractsltd.co.uk', '$2y$10$UKt8u0OtTzMsET61AGEKk.3UbZ/65GEPtf1z9eAD/5/XRUvGAwbKe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'pXvBSyRKuouueCYkUxmabyTCAe7qhNgsCeHv3E0L', '2024-03-05 06:39:45', '2024-03-05 06:39:45'),
(161, 'mcammack@osaicwealth.com', '$2y$10$lv94Y8tNa8au8UFmuXmoPOcs5tYo.kmXQc8IK5oVUCEO1GC79qUE6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'InEVE6xN4fHqDLOEWJIzGyVdphoxhRV0Mj26PZ7Z', '2024-03-05 10:27:13', '2024-03-05 10:27:13'),
(162, 'plgarner@millenniumone.net', '$2y$10$KPD66SpppXeCBYllD7bDjegRID9GwXef41YGwHhFwB3oEZGzXEzwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'G0MOGh4k1CzaBJkIBHSd0L3zx9phSDQMnG2iIV6n', '2024-03-05 12:15:38', '2024-03-05 12:15:38'),
(163, 'xxhartleyxx@aol.com', '$2y$10$HPi0FkndwF7Kf2lTLSXjTeK2iGbjBK3Iy3Zs41N2ooM0vU3mvSsQ2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'N3adJ7dPMnbBTokvo1ltwX4gy678JpRYwO4DW37W', '2024-03-05 13:00:42', '2024-03-05 13:00:42'),
(164, 'bigboilin@gmail.com', '$2y$10$zhW35z/IZuMi.j6KqPmW.OC6yBSk04a4CgMt.GTzeRljsek10vyqy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'csQMLDv66k89Pmyk8W1ZxE5g74yHErPwTY6lEPqO', '2024-03-05 16:34:01', '2024-03-05 16:34:01'),
(165, 'edwinesmurrias@yahoo.com', '$2y$10$1JetGbJWi.GOYZRUQIXyAubsSlmcwun6u1kn0XhANKI9qjgqfe1y6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'JM0oGASeHQ76l4r2qBSOybzsNZxUb927RM6O2fTF', '2024-03-05 16:56:23', '2024-03-05 16:56:23'),
(166, 'jeff@stanbroughrealty.com', '$2y$10$YDEIe4zC7ylWnqgMGBHWWOUyiHb9BX.0wsS3I1or/HUE0lnHWrSVq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'rQoATEiiPqC7cAKqc0bmqaPX6xt5ICzfBFO4tnAZ', '2024-03-05 17:23:48', '2024-03-05 17:25:37'),
(167, 'noumanaz.6475@gmail.com', '$2y$10$IQ0MPDdOtosvST2LR6Gl.u.twrNU/6vr01DU4WFBaHwIiB5lrFgYC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'MzT4dS9BElow3exOEbCdF4viT5xJ9KPTyUVdGh3v', '2024-03-05 17:50:11', '2024-03-05 17:50:11'),
(168, 'lsc088@gmail.com', '$2y$10$CRoKZm9MXe2cCPytmen0v.//ZO/nI4VMMgmij7FwEWpmL25qYgtFK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'FjSjiAMtuPVE9naIcJlnbkSZ9rmSvf3clnGiTSfi', '2024-03-05 17:56:04', '2024-03-05 17:56:04'),
(169, 'baris.ersoy@arkasline.com.tr', '$2y$10$skYyknrL./Gw4pjhircqtuI50OwyYVVGiCweUsUwiZ2/rCCJHEj..', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'iMtIWwvhW1HJuvRKuSUlNxUgDetyMPndVA1M6lrn', '2024-03-05 18:42:22', '2024-03-05 18:42:49'),
(170, 'kseetul04@gmail.com', '$2y$10$4fvFNahtabCIrIrW2F4KCuqiHMmHr1RD6q1OiZB0yIFl0tcrAth86', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'BnO4pL3Y6wnDnbEqnHK01rqfOj18QETGxpoynb1h', '2024-03-05 19:06:16', '2024-03-05 19:06:16'),
(171, 'fholoci@gmail.com', '$2y$10$B4f4nwF8gRlbjN3/kkGYPOqS1GlczHMwwIikMgqVa/nR8K0PBUj0m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'ubLxwyRcAbMzifQwAdsoNtdv41zqgNU7xU3GFEPN', '2024-03-05 19:36:35', '2024-03-05 19:36:35'),
(172, 'wlfroxy10@yahoo.com', '$2y$10$IXSFtym1Bn8qJaDLrm5aAecAHgWxNMy1xd3mKRZv2b0.7LL8ZIycG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'iwGTPaZEiIgNNWT5dZTG0N8IEYlZYhv2OCnPJCBx', '2024-03-05 20:02:10', '2024-03-05 20:02:10'),
(173, 'k_daly777@hotmail.com', '$2y$10$Zo.nwAkwXzIwhszs5jVi1.ptRGi6SsP11KwMcULgzJIFmB0bYeI/S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'uoMUFWXpndSbKbDhdWOu3yAtm6qEg2rWFeeHy7Vp', '2024-03-05 20:50:22', '2024-03-05 20:50:22'),
(174, 'rcox@udhgroup.com', '$2y$10$.dFEEokyJDIgdhJr4MNj7umG3/eWbRRqVpd2ki5Z.St4ljXhgroOi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'UemhlBm7L9Q3X2it13naLG19GXFmGyWAXN22kfsa', '2024-03-06 00:00:52', '2024-03-06 00:00:52'),
(175, 'epaje@farmersagent.com', '$2y$10$/No0yedXFNWEgscdB8XwbevR0SJWfrjnlBNkKFiO4NLBqwtVq7oNi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'o3GfZTswrTAVZrU9r8S6V3DGeb5zjWvyS3dTvOuK', '2024-03-06 00:09:28', '2024-03-06 00:10:11'),
(176, 'simplyamazing2912@gmail.com', '$2y$10$zSXqB944D3uQmu8AXZxVS.67oigAzd.ThiAVeM3L4jIqa.BWjzsLW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'ItzBlL6IPMJFNEWt44tQbGfgFCiuqhTB3H4CWDmf', '2024-03-06 00:38:48', '2024-03-06 00:38:48'),
(177, 'restaurantfurn@bellsouth.net', '$2y$10$yH7Sg.RgAzsz3imbffToL.B3J8hNLOBXjXtW15hYj8zDawk5FSkdG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'zWrutOOf5FSqOVDrvH0PtPIdYNpnv5CMhZZe3aFh', '2024-03-06 00:57:58', '2024-03-06 00:57:58'),
(178, 'ejbepsilon@hotmail.com', '$2y$10$Z3r5e2kq4UB4UVIGQ1oSre5UowwUk1p8p6kAuIzOh/v/kp22jccvC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'pO6fL3rnJDNOkeFRCOwhGpsQGrskn8kN7d2C9Wdt', '2024-03-06 01:20:10', '2024-03-06 01:20:10'),
(179, 'accountspayable@arcticstorm.com', '$2y$10$LmgR6KlaLirDVQpa9OPdD.N6gQ.3mccPUXvnFXbq1OdV/omaODaz.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'dwki7ThsrdhmeGpAKKoYVkqNF1O2MuSXPRSrdSSI', '2024-03-06 02:18:19', '2024-03-06 02:18:19'),
(180, 'kanisha_md@yahoo.com', '$2y$10$mu6uD85P0vjVtRxRjRwSz.hDo5PKmBrYobInLHOTjbSnQqBLvci0u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'gr9eHlXrm8jb9uCv2lHpuK4LELfMNij85bRaqXFH', '2024-03-06 03:12:08', '2024-03-06 03:12:08'),
(181, 'sziel1508@gmail.com', '$2y$10$kbKJTW.waLydaJ49LIGAxOzM7Fl3nvV8JRDaDYsTVs.CBUim7PfYi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'aD56cI26Fmxt7T070n8sn14bKIRaNl1TIEdcwI9S', '2024-03-06 03:21:00', '2024-03-06 03:21:00'),
(182, 'jeffrey_he0114@hotmail.com', '$2y$10$/gf3FXhqC8LTaCC1vURsLuerCHai1dCSg3EQDODmJxpIqQ.lM.drm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'k41gk7Mp00RBXNGcAwnNwWsIgJbchcKDZQI3q30L', '2024-03-06 04:41:01', '2024-03-06 04:41:01'),
(183, 'tdsweed@yahoo.com', '$2y$10$PfPg1KIuqdbe/3vG9xhLLelMg.ysM/Tedsra.EiwosnxGEE44oF/e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'PkYeyAbdSCe3bzlWQdpGI0hf2OrITLTBvg9aDKm7', '2024-03-06 11:32:13', '2024-03-06 11:32:13'),
(184, 'julie_beauvais@hotmail.fr', '$2y$10$35VdxxpNxIWDR/JIdhhsuu1qR5V.RcO8eTsDAwRNrWdfpt3yR3X6q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'fR3ssKxCCERkpZaj7gspQX8TKz48q57CqWFvJZvj', '2024-03-06 12:39:07', '2024-03-06 12:39:07'),
(185, 'marecos@live.com', '$2y$10$O8n3hDQkjs2pgwgY3TpqJ.ogDf3/BOd0iiq5nv9jnqoJWuONVoMsC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'umwRpHvgIFDJ7xrtvj3DoxBc4DL93QwJBuKd9E3G', '2024-03-06 13:55:46', '2024-03-06 13:55:46'),
(186, 'caronunez_c@hotmail.com', '$2y$10$rm6mZYl6CZHwLsRtW/jPAeUpHJEjp/7Sy3R9h3NEHe6AtuX3UGYAy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'oYKKclmx74iEbsUtEXZCWqZaOFbwNHf7i3jzIFDh', '2024-03-06 14:37:14', '2024-03-06 14:37:14'),
(187, 'marki@wynmark.com', '$2y$10$H2bzSiNLLSbr5CrZXvWbhuUxozQeIjPuXie.DmoVrMTCZeLbRX8Wy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'uaHT0u4ojlq6njOempe5Ofz8A1yJctmOoD8YQNRa', '2024-03-06 15:31:58', '2024-03-06 15:31:58'),
(188, 'floydding@gmail.com', '$2y$10$H7.yxGXFpEacuQ/H33v/4u8ztiDkauNBfOyH3olwth3g8KCvRF01e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'uoLG1Caib6n6XxOGfdTJwlgEVaBh8xE2UQNxyyFx', '2024-03-06 16:50:11', '2024-03-06 16:50:11'),
(189, 'floydy843@yahoo.com', '$2y$10$APUqnleVz7xijr9/aTff5eiLVgkU8K67fNmqtJR/fldmqVwVHhMNe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leAAkKXAjf6EFNg2Nzf1bXDPrd2jhyWFSz5wPBrT', '2024-03-06 17:00:58', '2024-03-06 17:00:58'),
(190, 'treybonds@aol.com', '$2y$10$qBfWz.ryTeSl5bqF10IG/.Iu5f3uKQ5UtlNJsPPO.e/UfY9jWY5RO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'sbQ2dbic5WEhzBjy7yXzIwaSwUjX4sMlev0NerI8', '2024-03-06 17:14:44', '2024-03-06 17:14:44'),
(191, 'mendezantonia83@icloud.com', '$2y$10$gE/1WfvB/1wq1NJoqUHUeeccWao/rfiZKoKK6GOuK1aoVenFiTy8u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'yu6Tdy3LDSBoHqooLvQYKdh7bV1ehKzmNTqxWGUb', '2024-03-06 17:55:37', '2024-03-06 17:55:37'),
(192, 'tbridger@medtechconstruction.com', '$2y$10$ZVZdgKDFZJ2HlIu6RFgjvOnYtD2znT8IhrOpv7Hwtz63FTKdf6JRm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'aEHyxs7QHQqWCS7zmcxn7oQpNwNAhv5ZoNuXcrBi', '2024-03-06 18:13:05', '2024-03-06 18:13:05'),
(193, 'jtlehmann7@gmail.com', '$2y$10$lq7DEiC0sszOEDCNRVD.JukjdwtiV/UXrJ6aeJHL12ysi03Hr2/oq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Ib1AeHdOj79rYUeMQ8qTHIccix4lZEdc3D7XdA9u', '2024-03-06 18:44:02', '2024-03-06 18:44:02'),
(194, 'osborne7777@hotmail.com', '$2y$10$phU5RfocdwXtNd89MVsn/.t9M9hJIwM3PEZ5k4Nb/k0JuO7cjZ8ju', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'dN4PTA0nCuAVj6hMLeJkxMolwiBv82jbk1dFMzSQ', '2024-03-06 19:16:47', '2024-03-06 19:16:47'),
(195, 'zeev1958@gmail.com', '$2y$10$pe2cSxJxAonmJ.Y00cqCIO.e3LyYdej7ipg9Us3ZSMtaI/F.xRT1.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'pFzwXAdA12gUCLEsz7AaYJkcaK0vglLz4DlibDDo', '2024-03-06 20:09:58', '2024-03-06 20:09:58'),
(196, 'iacob.cristina85@gmail.com', '$2y$10$S3VYq/7QznFM9o6W9oB2XOICUfrWu9mBF0Od5weBsdqhfWg.FhPfK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'ydfg3TFbv3bh01lummDgZq9LnoIiL6d0itDHyp9r', '2024-03-06 21:22:32', '2024-03-06 21:22:32'),
(197, 'grupoarconada@gmail.com', '$2y$10$S/2sStTtoS4CT5d0JIGuZ.PYWn6ZqOJfDVMsbMAQXQNgML4lmJ/Ia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'e5zmZyPsnsoj4lkRAe6QEgLY3oge05IbIoIP2KuM', '2024-03-06 22:02:46', '2024-03-06 22:02:46'),
(198, 'electronicworkshop@live.com', '$2y$10$z4QVii8TnYehz4ySvBjny.Wi8mIfhSt4AnuWvG7vKJY6L2PIc335.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '7fezYMveVWJCPEcqYqI2x36WtnsGoyl2IkxwuYVz', '2024-03-06 23:15:03', '2024-03-06 23:15:03'),
(199, 'aynes@cox.net', '$2y$10$uGvslKavBBMAr6W.Tq5tvu638MtsKqgMzGFKOzm/L5Fvf/PD53klO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '8hozmOOOW26dEUVwjl7PxFQdsmlblZqHPj755gtn', '2024-03-07 00:59:43', '2024-03-07 00:59:43'),
(200, 'castilloj80@gmail.com', '$2y$10$O8Mzt9EexLojfcjDDoqjnOrBAXBWfhWtKoVE.4rsGRh4STCo4M.Ba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'MhA9clCjWuWG30zp70Ibsw7YR48MiabH6UpM5fAt', '2024-03-07 01:14:21', '2024-03-07 01:14:21'),
(201, 'movalleyranch@gmail.com', '$2y$10$uuHRdDE1ciOUpRlEmTPaw.LCLtxx5b9jYaWX8gD97nY./K7lMO2U.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'IAkPrtRAPS3KWu0YNHC0IYCGqy7HVq197Z6RX31M', '2024-03-07 12:26:43', '2024-03-07 12:26:43'),
(202, 'rose.griffin36@gmail.com', '$2y$10$PKf3dvxsda9iqOFyLyQ1fuwb4DYImbZQHKsUuS7k8s/0huzOFLz86', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'BmxDiun4pRezL4bNtrZVmbeL9pjbD1JxVEnIkLUt', '2024-03-07 14:34:14', '2024-03-07 14:34:14'),
(203, 'mabehawk@yahoo.com', '$2y$10$AD4iGFIMWOidl2oSD7ulDO745H8KHzo4hGtG4Ad91pUwnC/VfTneq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'a8WkIMum2oTMI9DcJlojitRoi1pNuMQhFYIlmMB8', '2024-03-07 15:31:29', '2024-03-07 15:31:29'),
(204, 'dr.mmalmosawicr@gmail.com', '$2y$10$jCiOSvBL4P9UZGHwwrSN5.B4W7B99rlOX9lTcqthfOwgf2ETHZRW.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '5O1IO4DF4yjV3QL3oSCrymqiETyeUZNCxIiiCJz3', '2024-03-07 16:01:14', '2024-03-07 16:01:14'),
(205, 'johnpetermike92@gmail.com', '$2y$10$t07kItIgB2SQIMbmWzESSeD0MrZMdmdDrvpev37AaKZoYD3SvocIa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'V9Rb7mb4SHnMNYAJ5iRjznfTuEeQSjsAsIGCcwMx', '2024-03-07 16:41:43', '2024-03-07 16:41:43'),
(206, 'amypi314@yahoo.com', '$2y$10$dt8MDkKf2.e6PvWePpC9hu8qUZrDfkz.Rg.Mgr9dVXkXx/RdDiUMe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'ok1dXrkNirFfDCNCOQ05XFKaJ8YjzLZCrrWXBIQN', '2024-03-07 17:13:04', '2024-03-07 17:13:04'),
(207, 'leo@leodotcom.nl', '$2y$10$o5ggCaMRWO20yhW6.bjpBu5.Sd.llnu/I9DXLHhRVC14YIMdBKGO6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '6V9DN5LqWqwnyqCdpN8ehwOnu1RAgFACIpdiB3JO', '2024-03-07 18:31:58', '2024-03-07 18:31:58'),
(208, 'nelson.matteson2@gmail.com', '$2y$10$swoa65y9LFP6ZdubgPg.0uj7ou1DT41SvHfzglmqthEnoN0BRTVvm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'vULqNpkuFmskoeUYEN5NoZLzjDPp3VQHynac477E', '2024-03-07 20:06:22', '2024-03-07 20:06:22'),
(209, 'dionam@earthlink.net', '$2y$10$l/uVrwWzZVMIIsOkvocVju5lp4D956nFaI9j/JK6Wq7ndabpVocTS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'fUeq78ndwNFhRl3AHJPqkGzK8xgoTOofEYALOveP', '2024-03-07 20:40:05', '2024-03-07 20:40:05'),
(210, 'wyntelia@gmail.com', '$2y$10$iHbTKhkBOuT/UW8reWsjBu8Z.BvYS52jWFwIdfaCAv6zVoNlNXkG2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'p46ne5BLLvgYuUxo0H2cXTD165odSsVf9rcSjq9x', '2024-03-07 21:32:38', '2024-03-07 21:32:38'),
(211, 'jnnieminen@yahoo.com', '$2y$10$LasUwWtV9CnJ9hg/l6jWAudyrvYzwyRJL2bvTB7z16hehoIg2DQ42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '6ynJ6GcFbAJbWude88pViTo717uOBPqWxiKuOcIy', '2024-03-07 22:07:42', '2024-03-07 22:07:42'),
(212, 'mommyof2swtgrls@aol.com', '$2y$10$S9A77yCa444LIHsKiVt21ejmYNU/X5cvhWdtY8cz.OL8PqAC1O.nO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'pPF2IYMUSOkmbmyGFrycbjt4byEdjFQHyGrwzCtC', '2024-03-07 22:57:45', '2024-03-07 22:57:45'),
(213, 'darius35150@yahoo.com', '$2y$10$3/qCbrFH.lQWoocJ2N5p4eMSDoHymCOi1/LbLqN/TY1GNY3hMTwoa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0soNA3yzfwjbaM2skqUP4QoMmbwdzjvB8wZksk6V', '2024-03-07 23:57:52', '2024-03-07 23:57:52'),
(214, 'matthewcelliott@live.com', '$2y$10$cxEwPzWp6qKOcAPwiiq4Ie8E7A4yjf90HY79rfCo5Ix0W0k7LW.4u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'RndH1xZwrZ0ua4PTcRfrECrEbJMgxMHOiRnNQQlE', '2024-03-08 00:19:26', '2024-03-08 00:19:26'),
(215, 'tez_untouchable@yahoo.com', '$2y$10$fb4RV6PhbnJJzsXtNduCPeP366Rtv8hzmxYrkWrH.ePYy0xZ8o7hi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'K9q5n71Iu1nEq0zE201BrBiNfmwudBmJPu4EkRmw', '2024-03-08 02:03:31', '2024-03-08 02:03:31'),
(216, 'yourgfislazy@gmail.com', '$2y$10$UPL.alRMeKVAkSP6J.VvAOaWgAFLBNDL8Nx/eTS8YKxvpGkRw45uC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1Xi2T5PHUKuZe7qcPFXAjIb1jgJS5O2Av9RHcPpZ', '2024-03-08 14:47:40', '2024-03-08 14:47:40'),
(217, 'israelmodx6@gmail.com', '$2y$10$0NDKZV5LMunZEVCw4zoSsONWBDEg1jcisjkMPYiQb1llfujWe80oe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'xXcplxQlNNiGVQFoV6HUQQkmXPSvVKHLqyqDsZA5', '2024-03-08 16:33:46', '2024-03-08 16:33:46'),
(218, 'rccronin83@yahoo.com', '$2y$10$Ene5elX3rdgvAGwRWIA/NujZjgIjeYLVQcelV.O1AZQ5I3V/m7bOu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '22fCysZJov3i4G68YKyiqpsP6dADdxCofjGMdZZb', '2024-03-08 18:26:15', '2024-03-08 18:26:15'),
(219, 'qmqdwcqmp.h@monochord.xyz', '$2y$10$zh/Ntnibps2OvR9tvyzM.Oj023gSjHreMwEsTisMl6OVZd9It0kGa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'K34vTQoF8eZWcG2YS00OikFYY4IzibHqH1T7UmsU', '2024-03-15 22:23:00', '2024-03-15 22:23:00'),
(220, 'giohonda@gmail.com', '$2y$10$EyTW88/SecE4AvFwyQHYmOyfFYdvmbM5xqAaCRE4eUrlrF//zc6vS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'WkzsTajx8I0bJww9bJjIVXI13KVMceQeoj6bA9vw', '2024-03-15 23:56:20', '2024-03-15 23:56:20'),
(221, 'kpkellum@hotmail.com', '$2y$10$fLK996TkObwx9TXcOyjzWuDhOLBu5l.qoAKKZS4kUkBdVLTOK.f7.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'x1oqbfL3dZXk6jPyN06MOMPKsFsFiMyUmJTaboig', '2024-03-17 16:01:14', '2024-03-17 16:01:14'),
(222, 'dwwbbdqbb.h@monochord.xyz', '$2y$10$dzRbg/nAcHuJZNcsMT1w4.Z23XS.iG2kAAeFQt3B4VX0leVPHMG2C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '04Q1GwJ57nmSjuPh5mOFibM5DLUy3O4oouZTCZyz', '2024-03-18 22:37:26', '2024-03-18 22:37:26'),
(223, 'experttaxprep@gmail.com', '$2y$10$K3COJd8Mx70uhteYQW.TMuB24T6Vmw4vXqZS5Tbdmye5ty9.Do6fO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'uv05DWHkQTJWhQmgAw9IXRdvV6j4jI9DFS1ZjFYf', '2024-03-18 23:59:11', '2024-03-18 23:59:11'),
(224, 'shonsims@icloud.com', '$2y$10$N0NankPNF28bCx6dH/m8he19wwxdOjvRxaKFTsRYd.Md/iBOwuAqa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'GOkoJ9tBjd7dJ8obof56ECZLAVjialjmdaXfvF1Y', '2024-03-19 09:56:27', '2024-03-19 09:56:27'),
(225, 'madisonvanorden16@gmail.com', '$2y$10$YaY2ZRmtdcfG3FA8yPTkYu7SRNvNFScnhlvTBs5PqoivTAnGGZ9xG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'SCcwpiF6vDqf2Q2Bf4acvAaupJ0EU44dudLDuJsT', '2024-03-20 10:39:28', '2024-03-20 10:39:28'),
(226, 'seelallb@gmail.com', '$2y$10$o2IfRvsFJ18PfyI0VL6GDuONuDKPfNVHmA6PohtixamJzYkkQSyDW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'fxEIwZNj4Jv4P2cqYrPe4mWXUKAQOMFL3NlvxnX7', '2024-03-20 17:09:43', '2024-03-20 17:09:43'),
(227, 'val@secretbeauty.ca', '$2y$10$/gG6izM6G1rJ.TpEizIvFeF.0mUsJ/rqZavWiO/knBeluVaTvx.6K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'eIgtYQNOQWHV9a3M6gPQhz8eIsU4VXSNHpzHgS6j', '2024-03-20 17:09:44', '2024-03-20 17:09:44'),
(228, 'evelynelamson@yahoo.com', '$2y$10$A.W3eoI.Po7vqoWb9vANyOwRZ7urL089Qk.n1TnZKZdIG6ZjjI4Du', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'hnIi0mxGajGq1Zvymne1wUqyDKmETiWSITnxTAkI', '2024-03-20 22:24:19', '2024-03-20 22:24:19'),
(229, 'robbynobby1@gmail.com', '$2y$10$kvXNJgaNkvNAfLuG7FjGP.46AjznyitURleXzOVc.Ytz904SfoUlO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'irVvKcolsRBoAgrgmG0qSIEXvHvH6sKVHOiGA9l8', '2024-03-21 16:16:37', '2024-03-21 16:16:37'),
(230, 'sharianmatt5426@gmail.com', '$2y$10$cO1X70uR6VGOKkEdWDQDD.JAW/YJ/0oll15cpEBFQ0UlLD3BDigJi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '7qniKiuVdR5ok7CNVWlr1Ej9FgxnBSvTMWCRJ2p9', '2024-03-21 20:57:39', '2024-03-21 20:57:39'),
(231, 'gabrielmlynarski2@gmail.com', '$2y$10$VcZPpV0XPuNwlgRQxGc1aOWwdZ/r/YRMdWIw/rgK9QBHrlW.jIKIK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'UJFr1c41FTWfgwu3AS7aAqkvsgRH2W8NNj0IrMEe', '2024-03-22 16:56:44', '2024-03-22 16:56:44'),
(232, 'pgholson@enkeiamerica.com', '$2y$10$qFAiAWbuU0Gi.nkOssTLmekkCCgXVOReqYImSQz7u1djVwx.lXXIS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'MXuJADaF0uH2CrpXDssnXLl5D3gGM2KY95sfvKIw', '2024-03-25 03:15:45', '2024-03-25 03:15:45'),
(233, 'vince.vu@gmail.com', '$2y$10$up9NYvItSAB6t.MwDnhxCe0dM0gzFs8rVY4PyjqdEwr0rVdbYz80q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2CAUfzCZtbV2AxTYKWPKrMeTDKPCwGQIPh0BlRzi', '2024-03-25 17:24:40', '2024-03-25 17:24:40'),
(234, 'zEkfMR.hwhhtmt@sandcress.xyz', '$2y$10$82118tWGjXEh.Ecw5EoD2efco5pYHTYvr14bkl9tllnLgnmD3gkLO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'wdXUM9rE2PuNdPY5Gl9eP2DQDJGQiZyYqcKxsTIm', '2024-04-07 14:09:58', '2024-04-07 14:09:58'),
(235, 'egymega50@gmail.com', '$2y$10$sjXPmzFXUrgzCtMmkpSENOJU24ofa1V33k7UmwSy17/Y7h5qKeCM6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'b9u7aQBhvTbCIIh65bOmnFWQGuPSEsIKKgZPZsJZ', '2024-04-29 11:22:16', '2024-04-29 11:22:50');

-- --------------------------------------------------------

--
-- بنية الجدول `teacher_section`
--

CREATE TABLE `teacher_section` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `teacher_section`
--

INSERT INTO `teacher_section` (`id`, `teacher_id`, `section_id`) VALUES
(13, 11, 15),
(12, 10, 14),
(10, 10, 13),
(8, 11, 13),
(11, 11, 14),
(14, 10, 15),
(15, 11, 16),
(16, 10, 16),
(17, 11, 17),
(18, 10, 17),
(19, 11, 18),
(20, 10, 18);

-- --------------------------------------------------------

--
-- بنية الجدول `type__bloods`
--

CREATE TABLE `type__bloods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `type__bloods`
--

INSERT INTO `type__bloods` (`id`, `Name`, `created_at`, `updated_at`) VALUES
(1, 'O-', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(2, 'O+', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(3, 'A+', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(4, 'A-', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(5, 'B+', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(6, 'B-', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(7, 'AB+', '2022-12-28 08:25:24', '2022-12-28 08:25:24'),
(8, 'AB-', '2022-12-28 08:25:24', '2022-12-28 08:25:24');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mahmoud fathy', 'mahmoudfathy23569@gmail.com', NULL, '$2y$10$DDxrcPh5/9/mfHlJ64540.JbpezRkMJbGuFCqXOfU603W0gA4ecDe', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendances_student_id_foreign` (`student_id`),
  ADD KEY `attendances_grade_id_foreign` (`grade_id`),
  ADD KEY `attendances_classroom_id_foreign` (`classroom_id`),
  ADD KEY `attendances_section_id_foreign` (`section_id`),
  ADD KEY `attendances_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classrooms_grade_id_foreign` (`Grade_id`);

--
-- Indexes for table `degrees`
--
ALTER TABLE `degrees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `degrees_quizze_id_foreign` (`quizze_id`),
  ADD KEY `degrees_student_id_foreign` (`student_id`),
  ADD KEY `degrees_question_id_foreign` (`question_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_answers`
--
ALTER TABLE `exam_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_attempts`
--
ALTER TABLE `exam_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fees_grade_id_foreign` (`Grade_id`),
  ADD KEY `fees_classroom_id_foreign` (`Classroom_id`);

--
-- Indexes for table `fee_invoices`
--
ALTER TABLE `fee_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fee_invoices_student_id_foreign` (`student_id`),
  ADD KEY `fee_invoices_grade_id_foreign` (`Grade_id`),
  ADD KEY `fee_invoices_classroom_id_foreign` (`Classroom_id`),
  ADD KEY `fee_invoices_fee_id_foreign` (`fee_id`);

--
-- Indexes for table `fund_accounts`
--
ALTER TABLE `fund_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fund_accounts_receipt_id_foreign` (`receipt_id`),
  ADD KEY `fund_accounts_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`),
  ADD KEY `library_grade_id_foreign` (`Grade_id`),
  ADD KEY `library_classroom_id_foreign` (`Classroom_id`),
  ADD KEY `library_section_id_foreign` (`section_id`),
  ADD KEY `library_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my__parents`
--
ALTER TABLE `my__parents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `my__parents_email_unique` (`email`) USING HASH,
  ADD KEY `my__parents_nationality_father_id_foreign` (`Nationality_Father_id`),
  ADD KEY `my__parents_blood_type_father_id_foreign` (`Blood_Type_Father_id`),
  ADD KEY `my__parents_religion_father_id_foreign` (`Religion_Father_id`),
  ADD KEY `my__parents_nationality_mother_id_foreign` (`Nationality_Mother_id`),
  ADD KEY `my__parents_blood_type_mother_id_foreign` (`Blood_Type_Mother_id`),
  ADD KEY `my__parents_religion_mother_id_foreign` (`Religion_Mother_id`);

--
-- Indexes for table `nationalities`
--
ALTER TABLE `nationalities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_classes`
--
ALTER TABLE `online_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `online_classes_grade_id_foreign` (`Grade_id`),
  ADD KEY `online_classes_classroom_id_foreign` (`Classroom_id`),
  ADD KEY `online_classes_section_id_foreign` (`section_id`);

--
-- Indexes for table `parent_attachments`
--
ALTER TABLE `parent_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_attachments_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`(250));

--
-- Indexes for table `payment_students`
--
ALTER TABLE `payment_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_students_student_id_foreign` (`student_id`);

--
-- Indexes for table `processing_fees`
--
ALTER TABLE `processing_fees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `processing_fees_student_id_foreign` (`student_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promotions_student_id_foreign` (`student_id`),
  ADD KEY `promotions_from_grade_foreign` (`from_grade`),
  ADD KEY `promotions_from_classroom_foreign` (`from_Classroom`),
  ADD KEY `promotions_from_section_foreign` (`from_section`),
  ADD KEY `promotions_to_grade_foreign` (`to_grade`),
  ADD KEY `promotions_to_classroom_foreign` (`to_Classroom`),
  ADD KEY `promotions_to_section_foreign` (`to_section`);

--
-- Indexes for table `qnaeam`
--
ALTER TABLE `qnaeam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_quizze_id_foreign` (`quizze_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_subject_id_foreign` (`subject_id`),
  ADD KEY `quizzes_grade_id_foreign` (`grade_id`),
  ADD KEY `quizzes_classroom_id_foreign` (`classroom_id`),
  ADD KEY `quizzes_section_id_foreign` (`section_id`),
  ADD KEY `quizzes_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `receipt_students`
--
ALTER TABLE `receipt_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `receipt_students_student_id_foreign` (`student_id`);

--
-- Indexes for table `religions`
--
ALTER TABLE `religions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_grade_id_foreign` (`Grade_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`) USING HASH,
  ADD KEY `students_gender_id_foreign` (`gender_id`),
  ADD KEY `students_nationalitie_id_foreign` (`nationalitie_id`),
  ADD KEY `students_blood_id_foreign` (`blood_id`),
  ADD KEY `students_grade_id_foreign` (`Grade_id`),
  ADD KEY `students_classroom_id_foreign` (`Classroom_id`),
  ADD KEY `students_section_id_foreign` (`section_id`),
  ADD KEY `students_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `student_accounts`
--
ALTER TABLE `student_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_accounts_fee_invoice_id_foreign` (`fee_invoice_id`),
  ADD KEY `student_accounts_receipt_id_foreign` (`receipt_id`),
  ADD KEY `student_accounts_processing_id_foreign` (`processing_id`),
  ADD KEY `student_accounts_payment_id_foreign` (`payment_id`),
  ADD KEY `student_accounts_student_id_foreign` (`student_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_grade_id_foreign` (`grade_id`),
  ADD KEY `subjects_classroom_id_foreign` (`classroom_id`),
  ADD KEY `subjects_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`) USING HASH,
  ADD KEY `teachers_specialization_id_foreign` (`Specialization_id`),
  ADD KEY `teachers_gender_id_foreign` (`Gender_id`);

--
-- Indexes for table `teacher_section`
--
ALTER TABLE `teacher_section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_section_teacher_id_foreign` (`teacher_id`),
  ADD KEY `teacher_section_section_id_foreign` (`section_id`);

--
-- Indexes for table `type__bloods`
--
ALTER TABLE `type__bloods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `degrees`
--
ALTER TABLE `degrees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_answers`
--
ALTER TABLE `exam_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `exam_attempts`
--
ALTER TABLE `exam_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_invoices`
--
ALTER TABLE `fee_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fund_accounts`
--
ALTER TABLE `fund_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `my__parents`
--
ALTER TABLE `my__parents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nationalities`
--
ALTER TABLE `nationalities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `online_classes`
--
ALTER TABLE `online_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent_attachments`
--
ALTER TABLE `parent_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment_students`
--
ALTER TABLE `payment_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `processing_fees`
--
ALTER TABLE `processing_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qnaeam`
--
ALTER TABLE `qnaeam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `receipt_students`
--
ALTER TABLE `receipt_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `student_accounts`
--
ALTER TABLE `student_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `teacher_section`
--
ALTER TABLE `teacher_section`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `type__bloods`
--
ALTER TABLE `type__bloods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
