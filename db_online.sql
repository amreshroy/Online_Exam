-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 02:32 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `doc`, `created_at`, `updated_at`) VALUES
(1, 'Unit-1: Saikat\'s Family', 'Saikat Islam lives with his Parents in a flat in Bogura. His father Mr. Rashidul Islam is a banker. But in his free time Mr. Islam writes stories and listens to music. Saikat\'s mother is Mrs. Monwara Islam. She is a housewife. In her free time she enjoys sewing. She makes dresses. She often gets orders from her friends and neighbours.\r\nSaikat is in Class 5. He is a good student. He wants to improve his English, so he watches cartoons on TV everyday. He also reads English books. He likes books about animals, especially tigers and lions.', '2020-01-18 03:23:33', '2020-01-18 05:42:44'),
(2, 'Unit-2: See you!', 'Andy:   Hello, Rahim! How are you?\r\nRahim:   Hello, Andy! I\'m fine, thanks. And you?\r\nAndy:    Fine, thanks. Listen. I\'m going to the Book Fair. Would You like to come?\r\nRahim:   I\'m sorry. I can\'t right now. I have to take this medicine to my grandmother. But I can meet you in an hour.\r\nAndy:   OK.Great! I\'ll see you at the Book Fair.\r\nRahim:   Right. See you later. Bye!\r\nAndy:   See you!', '2020-01-18 05:42:13', '2020-01-18 06:48:57'),
(3, 'Unit-1: Hello!', 'Sima and Tomal are in the Town Hall Language Club. They come to the club to practice speaking English. They listen to CDs and watch DVDs in English, or speak English with friends. Today there is new person in the club. He is a young man. He is reading a book about Bangladesh.\r\n\r\nSima: Look, Tamal! Who\'s that gentleman?\r\nDo you know him?\r\n\r\nTamal:  Yes. That\'s Andy Smith. He\'s working with an NGO here. I met him yesterday at the bookshop.\r\n\r\nIma:   Maybe we can practice our English with him.\r\n\r\nTamal:   Good idea. I;ll introduce you to him. Come with me.', '2020-01-18 06:59:02', '2020-01-18 06:59:02'),
(4, 'Unit-5: Days in a calendar', 'January, February, March, April, May, June, July, August, September, October, November, December. \r\nThese are the twelve months of the year.\r\nNow sing them together so we can all hear.\r\nHow many months are there in a year.\r\nThere are twelve months in a year!\r\nwe know them all!\r\nLet\'s give a cheer!', '2020-01-18 07:14:58', '2020-01-18 07:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mr. Rahim Islam', '2020-01-18 04:01:05', '2020-01-18 04:01:05'),
(2, 1, 'Mr. Rashidul Islam', '2020-01-18 04:01:05', '2020-01-18 04:01:05'),
(3, 1, 'Ms. Rashidul Islam', '2020-01-18 04:01:05', '2020-01-18 04:01:05'),
(4, 1, 'Mrs. Monwara Islam', '2020-01-18 04:01:05', '2020-01-18 04:01:05'),
(5, 2, 'Mr. Monwara Islam', '2020-01-18 04:01:05', '2020-01-18 04:01:05'),
(6, 2, 'Ms. Rashidul Islam', '2020-01-18 04:01:05', '2020-01-18 04:01:05'),
(7, 2, 'Mrs. Monwara Islam', '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(8, 2, 'Mr. Rahim Islam', '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(9, 3, 'Writes stories', '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(10, 3, 'Watch movies', '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(11, 3, 'Internet Browsing', '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(12, 3, 'Social media', '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(13, 4, 'Play football', '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(14, 4, 'Play cricket', '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(15, 4, 'Watch movies', '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(16, 4, 'Watch cartoon', '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(17, 5, 'Bangla', '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(18, 5, 'English', '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(19, 5, 'Math', '2020-01-18 04:01:07', '2020-01-18 04:01:07'),
(20, 5, 'Physics', '2020-01-18 04:01:07', '2020-01-18 04:01:07'),
(21, 6, 'Dhaka', '2020-01-18 06:35:41', '2020-01-18 06:35:41'),
(22, 6, 'Sylhet', '2020-01-18 06:35:41', '2020-01-18 06:35:41'),
(23, 6, 'Rangpur', '2020-01-18 06:35:41', '2020-01-18 06:35:41'),
(24, 6, 'Book Fair', '2020-01-18 06:35:41', '2020-01-18 06:35:41'),
(25, 7, 'Playing', '2020-01-18 06:35:42', '2020-01-18 06:35:42'),
(26, 7, 'Home', '2020-01-18 06:35:42', '2020-01-18 06:35:42'),
(27, 7, 'Take medicine', '2020-01-18 06:35:42', '2020-01-18 06:35:42'),
(28, 7, 'tea stall', '2020-01-18 06:35:42', '2020-01-18 06:35:42'),
(29, 8, 'An hour', '2020-01-18 06:35:42', '2020-01-18 06:35:42'),
(30, 8, 'Half an hour', '2020-01-18 06:35:42', '2020-01-18 06:35:42'),
(31, 8, '12 hour later', '2020-01-18 06:35:42', '2020-01-18 06:35:42'),
(32, 8, 'Tomorrow', '2020-01-18 06:35:42', '2020-01-18 06:35:42'),
(33, 9, 'Bye', '2020-01-18 06:35:43', '2020-01-18 06:35:43'),
(34, 9, 'Good Bye', '2020-01-18 06:35:43', '2020-01-18 06:35:43'),
(35, 9, 'See you', '2020-01-18 06:35:43', '2020-01-18 06:35:43'),
(36, 9, 'Thanks', '2020-01-18 06:35:43', '2020-01-18 06:35:43'),
(37, 10, 'Book fair', '2020-01-18 06:35:43', '2020-01-18 06:35:43'),
(38, 10, 'Markets', '2020-01-18 06:35:43', '2020-01-18 06:35:43'),
(39, 10, 'Home', '2020-01-18 06:35:43', '2020-01-18 06:35:43'),
(40, 10, 'Road', '2020-01-18 06:35:43', '2020-01-18 06:35:43'),
(41, 11, 'Dhaka', '2020-01-18 07:06:36', '2020-01-18 07:06:36'),
(42, 11, 'Rangpur', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(43, 11, 'Shylet', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(44, 11, 'Town Hall', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(45, 12, 'For playing chess', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(46, 12, 'Watching Movies', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(47, 12, 'Practice English', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(48, 12, 'For Visiting', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(49, 13, 'Tushar', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(50, 13, 'amoresh', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(51, 13, 'hima', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(52, 13, 'Andy Smith', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(53, 14, 'Bookshop', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(54, 14, 'Home', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(55, 14, 'School', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(56, 14, 'Bus', '2020-01-18 07:06:38', '2020-01-18 07:06:38'),
(57, 15, 'Bangla', '2020-01-18 07:06:38', '2020-01-18 07:06:38'),
(58, 15, 'English', '2020-01-18 07:06:38', '2020-01-18 07:06:38'),
(59, 15, 'Bangladesh', '2020-01-18 07:06:38', '2020-01-18 07:06:38'),
(60, 15, 'Physics', '2020-01-18 07:06:38', '2020-01-18 07:06:38'),
(61, 16, 'January', '2020-01-18 07:22:20', '2020-01-18 07:22:20'),
(62, 16, 'February', '2020-01-18 07:22:20', '2020-01-18 07:22:20'),
(63, 16, 'March', '2020-01-18 07:22:20', '2020-01-18 07:22:20'),
(64, 16, 'April', '2020-01-18 07:22:20', '2020-01-18 07:22:20'),
(65, 17, 'February', '2020-01-18 07:22:20', '2020-01-18 07:22:20'),
(66, 17, 'March', '2020-01-18 07:22:20', '2020-01-18 07:22:20'),
(67, 17, 'January', '2020-01-18 07:22:20', '2020-01-18 07:22:20'),
(68, 17, 'April', '2020-01-18 07:22:20', '2020-01-18 07:22:20'),
(69, 18, 'February', '2020-01-18 07:22:20', '2020-01-18 07:22:20'),
(70, 18, 'March', '2020-01-18 07:22:20', '2020-01-18 07:22:20'),
(71, 18, 'January', '2020-01-18 07:22:20', '2020-01-18 07:22:20'),
(72, 18, 'Jun', '2020-01-18 07:22:21', '2020-01-18 07:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `correct_answers`
--

CREATE TABLE `correct_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `answer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `correct_answers`
--

INSERT INTO `correct_answers` (`id`, `question_id`, `answer_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2020-01-18 04:01:05', '2020-01-18 04:01:05'),
(2, 2, 7, '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(3, 3, 9, '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(4, 4, 16, '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(5, 5, 18, '2020-01-18 04:01:07', '2020-01-18 04:01:07'),
(6, 6, 24, '2020-01-18 06:35:41', '2020-01-18 06:35:41'),
(7, 7, 27, '2020-01-18 06:35:42', '2020-01-18 06:35:42'),
(8, 8, 29, '2020-01-18 06:35:42', '2020-01-18 06:35:42'),
(9, 9, 35, '2020-01-18 06:35:43', '2020-01-18 06:35:43'),
(10, 10, 37, '2020-01-18 06:35:43', '2020-01-18 06:35:43'),
(11, 11, 44, '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(12, 12, 47, '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(13, 13, 52, '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(14, 14, 53, '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(15, 15, 59, '2020-01-18 07:06:38', '2020-01-18 07:06:38'),
(16, 16, 61, '2020-01-18 07:22:20', '2020-01-18 07:22:20'),
(17, 17, 67, '2020-01-18 07:22:20', '2020-01-18 07:22:20'),
(18, 18, 72, '2020-01-18 07:22:21', '2020-01-18 07:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_28_051410_create_reading_table', 1),
(5, '2019_12_11_061644_create_abouts_table', 1),
(6, '2019_12_24_150438_create_pquizzes_table', 1),
(7, '2019_12_24_150438_create_quizzes_table', 1),
(8, '2019_12_25_063856_create_pquestions_table', 1),
(9, '2019_12_25_063856_create_questions_table', 1),
(10, '2019_12_25_071350_create_answers_table', 1),
(11, '2019_12_25_071350_create_panswers_table', 1),
(12, '2019_12_25_072039_create_correct_answers_table', 1),
(13, '2019_12_25_072039_create_pcorrect_answers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `quiz_id` int(10) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quiz_id`, `question`, `created_at`, `updated_at`) VALUES
(1, 1, 'What is Saikat\'s father\'s name?', '2020-01-18 04:01:05', '2020-01-18 04:01:05'),
(2, 1, 'What is Saikat\'s mother\'s name?', '2020-01-18 04:01:05', '2020-01-18 04:01:05'),
(3, 1, 'What does his father\'s do in their free time?', '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(4, 1, 'What does Saikat do in his free time?', '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(5, 1, 'What kind of books does Saikat like?', '2020-01-18 04:01:06', '2020-01-18 04:01:06'),
(6, 2, 'Where Andy going?', '2020-01-18 06:35:41', '2020-01-18 06:35:41'),
(7, 2, 'Where is Rahim going?', '2020-01-18 06:35:41', '2020-01-18 06:35:41'),
(8, 2, 'When can Rahim meet Andy?', '2020-01-18 06:35:42', '2020-01-18 06:35:42'),
(9, 2, 'How does Andy say goodbye Rahim?', '2020-01-18 06:35:43', '2020-01-18 06:35:43'),
(10, 2, 'Where can Rahim meet Andy?', '2020-01-18 06:35:43', '2020-01-18 06:35:43'),
(11, 3, 'Where are Sima and Tomal?', '2020-01-18 07:06:36', '2020-01-18 07:06:36'),
(12, 3, 'Why do they go there?', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(13, 3, 'Who is the new person there?', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(14, 3, 'Where did Tomal meet the new person?', '2020-01-18 07:06:37', '2020-01-18 07:06:37'),
(15, 3, 'What is he reading?', '2020-01-18 07:06:38', '2020-01-18 07:06:38'),
(16, 4, 'What month is it now?', '2020-01-18 07:22:20', '2020-01-18 07:22:20'),
(17, 4, 'What is the first month of the year?', '2020-01-18 07:22:20', '2020-01-18 07:22:20'),
(18, 4, 'What month after may?', '2020-01-18 07:22:20', '2020-01-18 07:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `quiz` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `user_id`, `quiz`, `created_at`, `updated_at`) VALUES
(1, 2, 'Unit-1: Quiz-1', '2020-01-18 04:01:05', '2020-01-18 04:01:05'),
(2, 2, 'Unit-2: Quiz-1', '2020-01-18 06:35:41', '2020-01-18 06:35:41'),
(3, 2, 'Unit-1: Quiz-2', '2020-01-18 07:06:36', '2020-01-18 07:06:36'),
(4, 2, 'Unit-5: Quiz-1', '2020-01-18 07:22:20', '2020-01-18 07:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `reading`
--

CREATE TABLE `reading` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `address`, `usertype`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user1', '01871914309', 'Road no-11, House no-2B, Khilkhet,Dhaka', NULL, 'user1@gmail.com', NULL, '$2y$10$coSH38PyAFz3IRNAgQZrJ.fttg3evek79QJxZDYVo7na9ja26oqra', NULL, '2020-01-18 02:40:54', '2020-01-18 02:40:54'),
(2, 'Amoresh Roy', '01871914309', 'Road no-16, House no-2B, Khilkhet,Dhaka', 'admin', 'amoreshray@gmail.com', NULL, '$2y$10$wb0pQH/n4b0FdX4kPU8xH.gyJ6/AdlrMJxp1x6qAk43m1LnYmsESm', NULL, '2020-01-18 02:42:39', '2020-01-18 02:42:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_question_id_index` (`question_id`);

--
-- Indexes for table `correct_answers`
--
ALTER TABLE `correct_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `correct_answers_question_id_index` (`question_id`),
  ADD KEY `correct_answers_answer_id_index` (`answer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_quiz_id_index` (`quiz_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_user_id_index` (`user_id`);

--
-- Indexes for table `reading`
--
ALTER TABLE `reading`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `correct_answers`
--
ALTER TABLE `correct_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reading`
--
ALTER TABLE `reading`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
