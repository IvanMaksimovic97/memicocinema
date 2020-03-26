-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2020 at 10:01 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id12959311_memico`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE `actions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`id`, `name`) VALUES
(1, 'Insert'),
(2, 'Update'),
(3, 'Delete'),
(4, 'Login');

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `first_name`, `last_name`, `deleted_at`) VALUES
(1, 'Brad', 'Pitt', NULL),
(2, 'Shia', 'LaBeouf', NULL),
(10, 'Logan', 'Lerman', NULL),
(11, 'Michael', 'Peña', NULL),
(12, 'Jon', 'Bernthal', NULL),
(13, 'Jovan', 'Sekulic', '2020-03-15 12:10:55'),
(14, 'Sam', 'Worthington', NULL),
(15, 'Zoe', 'Saldana', NULL),
(16, 'Sigourney', 'Weaver', NULL),
(17, 'Stephen', 'Lang', NULL),
(18, 'Anthony', 'McCarten', NULL),
(19, 'Peter', 'Morgan', NULL),
(20, 'Donald', 'Glover', NULL),
(21, 'Seth', 'Rogen', NULL),
(22, 'Bradley', 'Cooper', NULL),
(23, 'Anna', 'Friel', NULL),
(24, 'Jason', 'Statham', NULL),
(25, 'Natalya', 'Rudakova', NULL),
(26, 'Leonardo', 'DiCaprio', NULL),
(27, 'Joseph', 'Gordon-Levitt', NULL),
(28, 'Anton', 'Pampushnyy', NULL),
(29, 'Milos', 'Bikovic', NULL),
(30, 'Milena', 'Radulovic', NULL),
(31, 'Dragan', 'Bjelogrlic', NULL),
(32, 'Miodrag', 'Radonjic', NULL),
(33, 'Marlon', 'Brando', NULL),
(34, 'Al', 'Pacino', NULL),
(35, 'James', 'Caan', NULL),
(36, 'Russell', 'Crowe', NULL),
(37, 'Joaquin', 'Phoenix', NULL),
(38, 'Elisabeth', 'Moss', NULL),
(39, 'Oliver', 'Jackson-Cohen', NULL),
(40, 'John', 'Cusack', NULL),
(41, 'Thadie', 'Newton', NULL),
(42, 'Robert', 'Downey', NULL),
(43, 'Chris', 'Evans', NULL),
(44, 'Scarlet', 'Johansson', NULL),
(45, 'Bill', 'Skarsgard', NULL),
(46, 'Jaeden', 'Martell', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `deleted_at`) VALUES
(1, 'USA', NULL),
(2, 'UK', NULL),
(3, 'France', NULL),
(4, 'Italy', NULL),
(5, 'Germany', NULL),
(6, 'Russia', NULL),
(7, 'Serbia', NULL),
(8, 'Croatia', NULL),
(9, 'China', NULL),
(10, 'Japan', NULL),
(11, 'India', NULL),
(12, 'Australia', NULL),
(13, 'Turkey', NULL),
(14, 'Greece', NULL),
(15, 'India', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `first_name`, `last_name`, `deleted_at`) VALUES
(1, 'David', 'Ayer', NULL),
(2, 'James', 'Cameron', NULL),
(3, 'Bryan', 'Singer', NULL),
(4, 'Jon', 'Favreau', NULL),
(5, 'Neil', 'Burger', NULL),
(6, 'Oliver', 'Megaton', NULL),
(7, 'Christopher', 'Nolan', NULL),
(8, 'Andrey', 'Volgin', NULL),
(9, 'Milos', 'Avramovic', NULL),
(10, 'Francis Ford', 'Coppola', NULL),
(11, 'Ridley', 'Scott', NULL),
(12, 'Leigh', 'Whanell', NULL),
(13, 'Roland', 'Emmerich', NULL),
(14, 'Joss', 'Whedon', NULL),
(15, 'Andy', 'Muschietti', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `featured_films`
--

CREATE TABLE `featured_films` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `featured_films`
--

INSERT INTO `featured_films` (`id`, `movie_id`, `deleted_at`) VALUES
(1, 2, NULL),
(2, 6, NULL),
(3, 12, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `deleted_at`) VALUES
(1, 'Action', NULL),
(2, 'Adventure', NULL),
(3, 'Comedy', NULL),
(4, 'Crime', NULL),
(5, 'Detective', NULL),
(6, 'Drama', NULL),
(7, 'Fantasy', NULL),
(8, 'Melodrama', NULL),
(9, 'Romance', NULL),
(10, 'Superhero', NULL),
(11, 'Supernatural', NULL),
(12, 'Thriller', NULL),
(13, 'Sport', NULL),
(14, 'Historical', NULL),
(15, 'Horror', NULL),
(16, 'Musical', NULL),
(17, 'Sci-Fi', NULL),
(18, 'War', NULL),
(19, 'Western', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `alt`, `deleted_at`) VALUES
(3, '/images/1583954592fury.png', 'fury.png', '2020-03-14 13:50:06'),
(4, '/images/1584099998GJIEUbL.jpg', 'GJIEUbL.jpg', NULL),
(5, '/images/1584100321GJIEUbL.jpg', 'GJIEUbL.jpg', NULL),
(6, '/images/1584100416GJIEUbL.jpg', 'GJIEUbL.jpg', NULL),
(7, '/images/1584101538GJIEUbL.jpg', 'GJIEUbL.jpg', NULL),
(8, '/images/15841938061.jpg', '1.jpg', NULL),
(9, '/images/15841938062.jpg', '2.jpg', NULL),
(10, '/images/15841938063.jpg', '3.jpg', NULL),
(11, '/images/15841938064.jpg', '4.jpg', NULL),
(12, '/images/1584297764AvatarPoster.jpg', 'AvatarPoster.jpg', NULL),
(13, '/images/1584370315Avatar.jpeg', 'Avatar.jpeg', '2020-03-16 14:55:09'),
(14, '/images/1584370315avatar-1440x810.jpg', 'avatar-1440x810.jpg', '2020-03-16 14:55:10'),
(15, '/images/1584370315avatarlogo.jpg', 'avatarlogo.jpg', '2020-03-16 14:55:10'),
(16, '/images/1584370510avatarlogo.jpg', 'avatarlogo.jpg', NULL),
(17, '/images/1584370510avatar-1440x810.jpg', 'avatar-1440x810.jpg', NULL),
(18, '/images/1584370510Avatar.jpeg', 'Avatar.jpeg', NULL),
(19, '/images/1584375106MVbr.jpg', 'MVbr.jpg', NULL),
(20, '/images/15843751061526460640_bohemian-rhapsody.jpg', '1526460640_bohemian-rhapsody.jpg', NULL),
(21, '/images/1584385780lk.jpg', 'lk.jpg', NULL),
(22, '/images/1584385781The-Lion-King_dt1_still_1-620x350.jpg', 'The-Lion-King_dt1_still_1-620x350.jpg', NULL),
(23, '/images/1584386101Limitless.jpg', 'Limitless.jpg', NULL),
(24, '/images/1584386682t3.jpg', 't3.jpg', NULL),
(25, '/images/1584386682t31.jpg', 't31.jpg', NULL),
(26, '/images/1584386682TheTransporter3.jpg', 'TheTransporter3.jpg', NULL),
(27, '/images/1584387639insp.jpg', 'insp.jpg', NULL),
(28, '/images/1584388413bmm.jpg', 'bmm.jpg', NULL),
(29, '/images/1584388413kb.png', 'kb.png', NULL),
(30, '/images/1584389107jv.jpg', 'jv.jpg', NULL),
(31, '/images/1584389107jv1.jpg', 'jv1.jpg', NULL),
(32, '/images/1584389107jv3.png', 'jv3.png', NULL),
(33, '/images/1585054296gf.jpg', 'gff.jpg', NULL),
(34, '/images/1585054296gff.jpg', 'gf.jpg', NULL),
(35, '/images/1585054726tg.jpg', 'gladiatorevent913.jpg', NULL),
(36, '/images/1585054726gladiatorevent913.jpg', 'tg.jpg', NULL),
(37, '/images/1585055856im.jpg', 'im.jpg', NULL),
(38, '/images/15850566442012.jpg', '2012.jpg', NULL),
(39, '/images/1585057140av.jpg', 'av.jpg', NULL),
(40, '/images/1585057481it.jpg', 'it.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `deleted_at`) VALUES
(1, 'English', NULL),
(2, 'French', NULL),
(3, 'German', NULL),
(4, 'Italian', NULL),
(5, 'Spanish', NULL),
(6, 'Russian', NULL),
(7, 'Serbian', NULL),
(8, 'Croatian', NULL),
(9, 'Chinese', NULL),
(10, 'Japanese', NULL),
(11, 'Arabic', NULL),
(12, 'Greek', NULL),
(13, 'Turkish', NULL),
(14, 'Albanian', NULL),
(15, 'Romanian', NULL),
(16, 'Bulgarian', NULL),
(17, 'Vietnamese', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminLink` tinyint(1) NOT NULL,
  `userLink` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `path`, `name`, `adminLink`, `userLink`) VALUES
(1, '/', 'Homepage', 0, 0),
(2, '/admin/display', 'Display Items', 1, 0),
(3, '/admin/insert', 'Insert Item', 1, 0),
(5, '/admin/logs', 'Logs', 1, 0),
(6, '/contact', 'Contact', 0, 0),
(7, '/about', 'About', 0, 0),
(8, '/reservations', 'Reservations', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `table_id` int(11) NOT NULL,
  `row_id` int(11) DEFAULT NULL,
  `action_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `ip_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `success` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `table_id`, `row_id`, `action_id`, `created_at`, `ip_address`, `success`) VALUES
(1, NULL, 10, NULL, 4, '2020-03-15 12:43:23', '127.0.0.1', 0),
(2, 3, 10, 3, 4, '2020-03-15 12:43:40', '127.0.0.1', 1),
(3, 3, 1, 13, 1, '2020-03-15 13:10:39', '127.0.0.1', 1),
(4, 3, 1, 13, 3, '2020-03-15 13:10:55', '127.0.0.1', 1),
(5, 3, 10, 3, 4, '2020-03-15 17:00:08', '127.0.0.1', 1),
(6, NULL, 10, NULL, 4, '2020-03-15 19:21:27', '127.0.0.1', 0),
(7, NULL, 10, NULL, 4, '2020-03-15 19:21:35', '127.0.0.1', 0),
(8, 3, 10, 3, 4, '2020-03-15 19:21:47', '127.0.0.1', 1),
(9, 3, 3, 2, 1, '2020-03-15 19:35:51', '127.0.0.1', 1),
(10, 3, 1, 14, 1, '2020-03-15 19:36:36', '127.0.0.1', 1),
(11, 3, 1, 15, 1, '2020-03-15 19:37:32', '127.0.0.1', 1),
(12, 3, 1, 16, 1, '2020-03-15 19:38:07', '127.0.0.1', 1),
(13, 3, 1, 17, 1, '2020-03-15 19:38:23', '127.0.0.1', 1),
(14, 3, 6, 5, 1, '2020-03-15 19:42:44', '127.0.0.1', 1),
(15, 3, 10, 3, 4, '2020-03-16 15:41:54', '127.0.0.1', 1),
(16, 3, 6, 5, 3, '2020-03-16 15:42:40', '127.0.0.1', 1),
(17, 3, 6, 6, 1, '2020-03-16 15:51:55', '127.0.0.1', 1),
(18, 3, 6, 6, 2, '2020-03-16 15:55:11', '127.0.0.1', 1),
(19, 3, 7, 2, 1, '2020-03-16 16:48:09', '127.0.0.1', 1),
(20, 3, 1, 18, 1, '2020-03-16 16:59:28', '127.0.0.1', 1),
(21, 3, 1, 19, 1, '2020-03-16 16:59:47', '127.0.0.1', 1),
(22, 3, 3, 3, 1, '2020-03-16 17:03:50', '127.0.0.1', 1),
(23, 3, 6, 7, 1, '2020-03-16 17:11:46', '127.0.0.1', 1),
(24, 3, 9, 15, 1, '2020-03-16 18:29:54', '127.0.0.1', 1),
(25, 3, 1, 20, 1, '2020-03-16 20:07:03', '127.0.0.1', 1),
(26, 3, 1, 21, 1, '2020-03-16 20:07:24', '127.0.0.1', 1),
(27, 3, 3, 4, 1, '2020-03-16 20:07:41', '127.0.0.1', 1),
(28, 3, 6, 8, 1, '2020-03-16 20:09:41', '127.0.0.1', 1),
(29, 3, 1, 22, 1, '2020-03-16 20:12:23', '127.0.0.1', 1),
(30, 3, 1, 23, 1, '2020-03-16 20:12:37', '127.0.0.1', 1),
(31, 3, 3, 5, 1, '2020-03-16 20:12:57', '127.0.0.1', 1),
(32, 3, 6, 9, 1, '2020-03-16 20:15:02', '127.0.0.1', 1),
(33, 3, 1, 24, 1, '2020-03-16 20:21:11', '127.0.0.1', 1),
(34, 3, 1, 25, 1, '2020-03-16 20:21:29', '127.0.0.1', 1),
(35, 3, 3, 6, 1, '2020-03-16 20:22:11', '127.0.0.1', 1),
(36, 3, 6, 10, 1, '2020-03-16 20:24:42', '127.0.0.1', 1),
(37, 3, 1, 26, 1, '2020-03-16 20:31:46', '127.0.0.1', 1),
(38, 3, 1, 27, 1, '2020-03-16 20:32:23', '127.0.0.1', 1),
(39, 3, 3, 7, 1, '2020-03-16 20:33:00', '127.0.0.1', 1),
(40, 3, 6, 11, 1, '2020-03-16 20:40:40', '127.0.0.1', 1),
(41, 3, 1, 28, 1, '2020-03-16 20:48:04', '127.0.0.1', 1),
(42, 3, 1, 29, 1, '2020-03-16 20:48:17', '127.0.0.1', 1),
(43, 3, 1, 30, 1, '2020-03-16 20:48:53', '127.0.0.1', 1),
(44, 3, 3, 8, 1, '2020-03-16 20:49:25', '127.0.0.1', 1),
(45, 3, 6, 12, 1, '2020-03-16 20:53:33', '127.0.0.1', 1),
(46, 3, 1, 31, 1, '2020-03-16 21:02:43', '127.0.0.1', 1),
(47, 3, 1, 32, 1, '2020-03-16 21:03:05', '127.0.0.1', 1),
(48, 3, 3, 9, 1, '2020-03-16 21:03:28', '127.0.0.1', 1),
(49, 3, 6, 13, 1, '2020-03-16 21:05:07', '127.0.0.1', 1),
(50, 3, 7, 3, 1, '2020-03-16 21:06:14', '127.0.0.1', 1),
(51, 3, 10, 3, 4, '2020-03-17 00:35:21', '127.0.0.1', 1),
(52, 3, 10, 3, 4, '2020-03-17 01:24:18', '127.0.0.1', 1),
(53, 3, 10, 3, 4, '2020-03-17 13:42:53', '127.0.0.1', 1),
(54, 3, 9, 16, 1, '2020-03-17 13:57:17', '127.0.0.1', 1),
(55, 3, 9, 16, 3, '2020-03-17 13:57:41', '127.0.0.1', 1),
(56, 3, 9, 15, 3, '2020-03-17 13:57:43', '127.0.0.1', 1),
(57, 3, 9, 17, 1, '2020-03-17 14:01:35', '127.0.0.1', 1),
(58, 3, 8, 5, 1, '2020-03-17 14:59:49', '127.0.0.1', 1),
(59, 3, 10, 3, 2, '2020-03-17 18:31:15', '127.0.0.1', 1),
(60, 3, 9, 17, 3, '2020-03-17 19:00:16', '127.0.0.1', 1),
(61, 3, 10, 3, 2, '2020-03-17 19:11:21', '127.0.0.1', 1),
(62, 3, 10, 4, 2, '2020-03-17 19:11:54', '127.0.0.1', 1),
(63, 3, 10, 4, 2, '2020-03-17 19:52:57', '127.0.0.1', 1),
(64, 3, 10, 4, 2, '2020-03-17 19:57:36', '127.0.0.1', 1),
(65, 3, 10, 5, 1, '2020-03-17 20:02:14', '127.0.0.1', 1),
(66, 3, 10, 5, 2, '2020-03-17 20:09:57', '127.0.0.1', 1),
(67, 3, 10, 3, 4, '2020-03-17 20:13:47', '127.0.0.1', 1),
(68, NULL, 10, NULL, 4, '2020-03-17 20:18:20', '127.0.0.1', 0),
(69, NULL, 10, NULL, 4, '2020-03-17 20:23:28', '127.0.0.1', 0),
(70, NULL, 10, NULL, 4, '2020-03-17 20:30:24', '127.0.0.1', 0),
(71, NULL, 10, NULL, 4, '2020-03-17 20:30:40', '127.0.0.1', 0),
(72, 3, 10, 3, 4, '2020-03-17 20:33:57', '127.0.0.1', 1),
(73, 3, 9, 18, 1, '2020-03-17 20:35:04', '127.0.0.1', 1),
(74, 4, 10, 4, 4, '2020-03-17 20:35:39', '127.0.0.1', 1),
(75, 4, 9, 19, 1, '2020-03-17 20:36:04', '127.0.0.1', 1),
(76, 3, 10, 3, 4, '2020-03-17 20:36:38', '127.0.0.1', 1),
(77, 5, 10, 5, 4, '2020-03-17 20:55:47', '127.0.0.1', 1),
(78, 3, 10, 3, 4, '2020-03-17 21:02:34', '127.0.0.1', 1),
(79, 3, 10, 5, 2, '2020-03-17 21:52:12', '127.0.0.1', 1),
(80, 3, 10, 3, 4, '2020-03-18 11:28:57', '87.116.191.213', 1),
(81, 3, 6, 10, 2, '2020-03-18 11:30:33', '87.116.191.213', 1),
(82, 4, 10, 4, 4, '2020-03-18 11:31:25', '87.116.191.213', 1),
(83, NULL, 10, 6, 1, '2020-03-18 11:42:36', '87.116.191.213', 1),
(84, NULL, 10, 6, 2, '2020-03-18 11:43:15', '87.116.191.213', 1),
(85, 6, 10, 6, 4, '2020-03-18 11:43:43', '87.116.191.213', 1),
(86, NULL, 10, 7, 1, '2020-03-18 12:03:41', '87.116.183.197', 1),
(87, 3, 10, 3, 4, '2020-03-18 12:06:54', '87.116.191.213', 1),
(88, NULL, 10, NULL, 4, '2020-03-18 12:08:59', '87.116.183.197', 0),
(89, NULL, 10, NULL, 4, '2020-03-18 12:12:46', '24.135.18.212', 0),
(90, NULL, 10, NULL, 4, '2020-03-18 12:14:32', '24.135.18.212', 0),
(91, NULL, 10, 8, 1, '2020-03-18 12:15:32', '24.135.18.212', 1),
(92, 3, 10, 3, 4, '2020-03-18 12:19:43', '87.116.191.213', 1),
(93, NULL, 10, 9, 1, '2020-03-18 12:20:06', '24.135.18.212', 1),
(94, NULL, 10, 10, 1, '2020-03-18 12:25:38', '87.116.191.213', 1),
(95, NULL, 10, 11, 1, '2020-03-18 12:32:59', '24.135.18.212', 1),
(96, NULL, 10, 12, 1, '2020-03-18 12:47:58', '24.135.18.212', 1),
(97, NULL, 10, 12, 2, '2020-03-18 12:50:11', '24.135.18.212', 1),
(98, 3, 10, 3, 4, '2020-03-18 19:09:03', '87.116.191.213', 1),
(99, 3, 10, 3, 4, '2020-03-18 20:40:16', '87.116.191.213', 1),
(100, 4, 10, 4, 4, '2020-03-18 20:41:27', '87.116.191.213', 1),
(101, 3, 10, 3, 4, '2020-03-21 00:04:44', '87.116.191.213', 1),
(102, 3, 10, 3, 4, '2020-03-22 20:42:00', '87.116.191.213', 1),
(103, 3, 10, 3, 4, '2020-03-24 12:44:13', '87.116.190.27', 1),
(104, 3, 3, 10, 1, '2020-03-24 12:46:35', '87.116.190.27', 1),
(105, 3, 1, 33, 1, '2020-03-24 12:47:41', '87.116.190.27', 1),
(106, 3, 1, 34, 1, '2020-03-24 12:47:56', '87.116.190.27', 1),
(107, 3, 1, 35, 1, '2020-03-24 12:48:29', '87.116.190.27', 1),
(108, 3, 6, 14, 1, '2020-03-24 12:51:36', '87.116.190.27', 1),
(109, 3, 3, 11, 1, '2020-03-24 12:54:53', '87.116.190.27', 1),
(110, 3, 1, 36, 1, '2020-03-24 12:55:24', '87.116.190.27', 1),
(111, 3, 1, 37, 1, '2020-03-24 12:55:56', '87.116.190.27', 1),
(112, 3, 6, 15, 1, '2020-03-24 12:58:46', '87.116.190.27', 1),
(113, 3, 3, 12, 1, '2020-03-24 13:00:31', '87.116.190.27', 1),
(114, 3, 1, 38, 1, '2020-03-24 13:14:51', '87.116.190.27', 1),
(115, 3, 1, 39, 1, '2020-03-24 13:15:29', '87.116.190.27', 1),
(116, 3, 6, 16, 1, '2020-03-24 13:17:36', '87.116.190.27', 1),
(117, 3, 3, 13, 1, '2020-03-24 13:24:43', '87.116.190.27', 1),
(118, 3, 1, 40, 1, '2020-03-24 13:25:04', '87.116.190.27', 1),
(119, 3, 1, 41, 1, '2020-03-24 13:25:36', '87.116.190.27', 1),
(120, 3, 6, 17, 1, '2020-03-24 13:30:44', '87.116.190.27', 1),
(121, 3, 3, 14, 1, '2020-03-24 13:35:40', '87.116.190.27', 1),
(122, 3, 1, 42, 1, '2020-03-24 13:36:21', '87.116.190.27', 1),
(123, 3, 1, 43, 1, '2020-03-24 13:36:40', '87.116.190.27', 1),
(124, 3, 1, 44, 1, '2020-03-24 13:37:02', '87.116.190.27', 1),
(125, 3, 6, 18, 1, '2020-03-24 13:39:00', '87.116.190.27', 1),
(126, 3, 3, 15, 1, '2020-03-24 13:40:57', '87.116.190.27', 1),
(127, 3, 1, 45, 1, '2020-03-24 13:41:24', '87.116.190.27', 1),
(128, 3, 1, 46, 1, '2020-03-24 13:41:57', '87.116.190.27', 1),
(129, 3, 6, 19, 1, '2020-03-24 13:44:41', '87.116.190.27', 1),
(130, 3, 8, 6, 1, '2020-03-24 13:57:44', '87.116.190.27', 1),
(131, 3, 9, 20, 1, '2020-03-24 13:58:27', '87.116.190.27', 1),
(136, 3, 10, 3, 4, '2020-03-24 19:18:57', '87.116.190.27', 1),
(137, NULL, 10, 5, 4, '2020-03-25 17:32:39', '87.116.190.27', 0),
(138, 3, 10, 3, 4, '2020-03-25 17:32:59', '87.116.190.27', 1),
(139, 3, 10, 3, 4, '2020-03-25 21:06:51', '87.116.190.27', 1),
(140, 3, 10, 3, 4, '2020-03-25 21:08:56', '87.116.190.27', 1),
(141, 3, 10, 3, 4, '2020-03-25 21:17:05', '87.116.190.27', 1),
(142, 3, 8, 4, 2, '2020-03-25 21:19:07', '87.116.190.27', 1),
(143, 3, 8, 4, 2, '2020-03-25 21:49:00', '87.116.190.27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` datetime NOT NULL,
  `duration_mins` int(3) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `created_at`, `updated_at`, `deleted_at`, `title`, `release_date`, `duration_mins`, `description`) VALUES
(2, '2020-03-11 20:23:12', '2020-03-13 12:13:38', NULL, 'Fury', '2014-10-17 00:00:00', 134, '1945, in World War II Germany, the tough Sergeant Don \'Wardaddy\' Collier commands a tank and survives a German attack with his veteran crew composed of Boyd \'Bible\' Swan, Trini \'Gordo\' Garcia and Grady \'Coon-Ass\' Travis. He receives a rookie soldier Norman Ellison as the substitute for his deceased gunner and he tries to harden the youth along the way.'),
(3, '2020-03-13 11:53:36', '2020-03-14 11:07:25', '2020-03-14 11:07:25', 'ayy', '2020-03-03 00:00:00', 25, 'xd'),
(4, '2020-03-13 12:12:18', '2020-03-13 12:12:43', '2020-03-13 12:12:43', 'xd', '2020-02-26 00:00:00', 25, 'ayy'),
(5, '2020-03-15 18:42:44', '2020-03-16 14:42:39', '2020-03-16 14:42:39', 'Avatar', '2009-12-18 00:00:00', 162, 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.'),
(6, '2020-03-16 14:51:55', '2020-03-16 14:55:11', NULL, 'Avatar', '2009-12-16 22:22:00', 162, 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.'),
(7, '2020-03-16 16:11:46', '2020-03-16 16:11:46', NULL, 'Bohemian Rhapsody', '2018-11-02 00:00:00', 134, 'The story of the legendary British rock band Queen and lead singer Freddie Mercury, leading up to their famous performance at Live Aid (1985).'),
(8, '2020-03-16 19:09:41', '2020-03-16 19:09:41', NULL, 'Lion King', '2019-07-19 00:00:00', 118, 'After the murder of his father, a young lion prince flees his kingdom only to learn the true meaning of responsibility and bravery.'),
(9, '2020-03-16 19:15:01', '2020-03-16 19:15:01', NULL, 'Limitless', '2011-03-18 00:00:00', 105, 'With the help of a mysterious pill that enables the user to access one hundred percent of his brain abilities, a struggling writer becomes a financial wizard, but it also puts him in a new world with lots of dangers.'),
(10, '2020-03-16 19:24:42', '2020-03-18 11:30:33', NULL, 'The Transporter 3', '2008-11-26 11:11:00', 104, 'Frank Martin puts the driving gloves on to deliver Valentina, the kidnapped daughter of a Ukrainian government official, from Marseilles to Odessa on the Black Sea. En route, he has to contend with thugs who want to intercept Valentina\'s safe delivery and not let his personal feelings get in the way of his dangerous objective.'),
(11, '2020-03-16 19:40:40', '2020-03-16 19:40:40', NULL, 'Inception', '2010-07-16 00:00:00', 148, 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.'),
(12, '2020-03-16 19:53:33', '2020-03-16 19:53:33', NULL, 'The Balkan Line', '2019-03-21 00:00:00', 130, 'After the NATO bombing of Yugoslavia in 1999, the Yugoslav army pulls out of Kosovo region, leaving Serbian people at the mercy of the Albanian UCK terrorists. A small band of soldiers must take over the Slatina airport, and hold it until the Russian peacekeepers arrive.'),
(13, '2020-03-16 20:05:07', '2020-03-16 20:05:07', NULL, 'South Wind', '2018-11-15 00:00:00', 129, 'A young member of an underground gang in Belgrade puts himself and his family in danger when he crosses a mafia leader who works for the chief of police.'),
(14, '2020-03-24 12:51:36', '2020-03-24 12:51:36', NULL, 'The Godfather', '1972-03-24 00:00:00', 175, 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.'),
(15, '2020-03-24 12:58:46', '2020-03-24 12:58:46', NULL, 'Gladiator', '2000-05-05 00:00:00', 155, 'A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him into slavery.'),
(16, '2020-03-24 13:17:36', '2020-03-24 13:17:36', NULL, 'The Invisible Man', '2020-02-28 00:00:00', 124, 'When Cecilia\'s abusive ex takes his own life and leaves her his fortune, she suspects his death was a hoax. As a series of coincidences turn lethal, Cecilia works to prove that she is being hunted by someone nobody can see.'),
(17, '2020-03-24 13:30:44', '2020-03-24 13:30:44', NULL, '2012', '2009-11-13 00:00:00', 158, 'A frustrated writer struggles to keep his family alive when a series of global catastrophes threatens to annihilate mankind.'),
(18, '2020-03-24 13:39:00', '2020-03-24 13:39:00', NULL, 'The Avengers', '2012-05-04 00:00:00', 143, 'Earth\'s mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.'),
(19, '2020-03-24 13:44:41', '2020-03-24 13:44:41', NULL, 'It', '2017-09-08 00:00:00', 135, 'In the summer of 1989, a group of bullied kids band together to destroy a shape-shifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town.');

-- --------------------------------------------------------

--
-- Table structure for table `movie_actors`
--

CREATE TABLE `movie_actors` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie_actors`
--

INSERT INTO `movie_actors` (`id`, `movie_id`, `actor_id`, `deleted_at`) VALUES
(9, 3, 1, NULL),
(10, 3, 2, NULL),
(11, 4, 1, NULL),
(12, 4, 10, NULL),
(48, 2, 1, NULL),
(49, 2, 2, NULL),
(50, 2, 10, NULL),
(51, 2, 11, NULL),
(52, 2, 12, NULL),
(53, 5, 14, NULL),
(54, 5, 15, NULL),
(55, 5, 16, NULL),
(56, 5, 17, NULL),
(61, 6, 14, NULL),
(62, 6, 15, NULL),
(63, 6, 16, NULL),
(64, 6, 17, NULL),
(65, 7, 18, NULL),
(66, 7, 19, NULL),
(67, 8, 20, NULL),
(68, 8, 21, NULL),
(69, 9, 22, NULL),
(70, 9, 23, NULL),
(73, 11, 26, NULL),
(74, 11, 27, NULL),
(75, 12, 28, NULL),
(76, 12, 29, NULL),
(77, 12, 30, NULL),
(78, 13, 29, NULL),
(79, 13, 31, NULL),
(80, 13, 32, NULL),
(81, 10, 24, NULL),
(82, 10, 25, NULL),
(83, 14, 34, NULL),
(84, 14, 35, NULL),
(85, 15, 36, NULL),
(86, 15, 37, NULL),
(87, 16, 38, NULL),
(88, 16, 39, NULL),
(89, 17, 40, NULL),
(90, 17, 41, NULL),
(91, 18, 42, NULL),
(92, 18, 43, NULL),
(93, 18, 44, NULL),
(94, 19, 45, NULL),
(95, 19, 46, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movie_country`
--

CREATE TABLE `movie_country` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie_country`
--

INSERT INTO `movie_country` (`id`, `movie_id`, `country_id`, `deleted_at`) VALUES
(3, 3, 1, NULL),
(4, 4, 1, NULL),
(13, 2, 2, NULL),
(14, 5, 1, NULL),
(16, 6, 1, NULL),
(17, 7, 1, NULL),
(18, 8, 1, NULL),
(19, 9, 1, NULL),
(22, 11, 1, NULL),
(23, 11, 2, NULL),
(24, 12, 6, NULL),
(25, 12, 7, NULL),
(26, 13, 7, NULL),
(27, 10, 3, NULL),
(28, 10, 6, NULL),
(29, 14, 1, NULL),
(30, 15, 1, NULL),
(31, 15, 4, NULL),
(32, 16, 1, NULL),
(33, 17, 1, NULL),
(34, 18, 1, NULL),
(35, 19, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movie_directors`
--

CREATE TABLE `movie_directors` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `director_id` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie_directors`
--

INSERT INTO `movie_directors` (`id`, `movie_id`, `director_id`, `deleted_at`) VALUES
(3, 3, 1, NULL),
(4, 4, 1, NULL),
(12, 2, 1, NULL),
(13, 5, 2, NULL),
(15, 6, 2, NULL),
(16, 7, 3, NULL),
(17, 8, 4, NULL),
(18, 9, 5, NULL),
(20, 11, 7, NULL),
(21, 12, 8, NULL),
(22, 13, 9, NULL),
(23, 10, 6, NULL),
(24, 14, 10, NULL),
(25, 15, 11, NULL),
(26, 16, 12, NULL),
(27, 17, 13, NULL),
(28, 18, 14, NULL),
(29, 19, 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movie_genre`
--

CREATE TABLE `movie_genre` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie_genre`
--

INSERT INTO `movie_genre` (`id`, `movie_id`, `genre_id`, `deleted_at`) VALUES
(5, 3, 1, NULL),
(6, 4, 1, NULL),
(28, 2, 1, NULL),
(29, 2, 6, NULL),
(30, 2, 18, NULL),
(31, 5, 1, NULL),
(32, 5, 2, NULL),
(33, 5, 7, NULL),
(37, 6, 1, NULL),
(38, 6, 2, NULL),
(39, 6, 7, NULL),
(40, 7, 6, NULL),
(41, 7, 16, NULL),
(42, 8, 2, NULL),
(43, 8, 6, NULL),
(44, 9, 12, NULL),
(45, 9, 17, NULL),
(48, 11, 1, NULL),
(49, 11, 2, NULL),
(50, 11, 17, NULL),
(51, 12, 1, NULL),
(52, 12, 18, NULL),
(53, 13, 4, NULL),
(54, 13, 6, NULL),
(55, 13, 12, NULL),
(56, 10, 1, NULL),
(57, 10, 12, NULL),
(58, 14, 4, NULL),
(59, 14, 6, NULL),
(60, 15, 1, NULL),
(61, 15, 2, NULL),
(62, 15, 6, NULL),
(63, 16, 15, NULL),
(64, 16, 17, NULL),
(65, 17, 1, NULL),
(66, 17, 2, NULL),
(67, 17, 17, NULL),
(68, 18, 1, NULL),
(69, 18, 2, NULL),
(70, 18, 17, NULL),
(71, 19, 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movie_images`
--

CREATE TABLE `movie_images` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie_images`
--

INSERT INTO `movie_images` (`id`, `movie_id`, `image_id`, `deleted_at`) VALUES
(3, 3, 6, NULL),
(4, 4, 7, NULL),
(5, 2, 8, NULL),
(6, 2, 9, NULL),
(7, 2, 10, NULL),
(8, 2, 11, NULL),
(9, 5, 12, NULL),
(13, 6, 16, NULL),
(14, 6, 17, NULL),
(15, 6, 18, NULL),
(16, 7, 19, NULL),
(17, 7, 20, NULL),
(18, 8, 21, NULL),
(19, 8, 22, NULL),
(20, 9, 23, NULL),
(21, 10, 24, NULL),
(22, 10, 25, NULL),
(23, 10, 26, NULL),
(24, 11, 27, NULL),
(25, 12, 28, NULL),
(26, 12, 29, NULL),
(27, 13, 30, NULL),
(28, 13, 31, NULL),
(29, 13, 32, NULL),
(30, 14, 33, NULL),
(31, 14, 34, NULL),
(32, 15, 35, NULL),
(33, 15, 36, NULL),
(34, 16, 37, NULL),
(35, 17, 38, NULL),
(36, 18, 39, NULL),
(37, 19, 40, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movie_language`
--

CREATE TABLE `movie_language` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie_language`
--

INSERT INTO `movie_language` (`id`, `movie_id`, `language_id`, `deleted_at`) VALUES
(4, 3, 1, NULL),
(5, 4, 1, NULL),
(20, 2, 1, NULL),
(21, 2, 3, NULL),
(22, 5, 1, NULL),
(24, 6, 1, NULL),
(25, 7, 1, NULL),
(26, 8, 1, NULL),
(27, 9, 1, NULL),
(31, 11, 1, NULL),
(32, 12, 1, NULL),
(33, 12, 6, NULL),
(34, 12, 7, NULL),
(35, 12, 14, NULL),
(36, 13, 7, NULL),
(37, 13, 16, NULL),
(38, 10, 1, NULL),
(39, 10, 2, NULL),
(40, 10, 6, NULL),
(41, 14, 1, NULL),
(42, 15, 1, NULL),
(43, 15, 4, NULL),
(44, 16, 1, NULL),
(45, 17, 1, NULL),
(46, 18, 1, NULL),
(47, 19, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `show_time_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reserved_seats` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `show_time_id`, `user_id`, `reserved_seats`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 4, 3, 3, '2020-03-14 17:56:56', '2020-03-14 18:02:28', '2020-03-14 18:02:28'),
(5, 4, 3, 11, '2020-03-14 18:07:20', '2020-03-14 18:08:43', '2020-03-14 18:08:43'),
(6, 4, 3, 25, '2020-03-14 18:10:07', '2020-03-14 18:19:37', '2020-03-14 18:19:37'),
(7, 4, 3, 25, '2020-03-14 18:19:46', '2020-03-14 18:19:51', '2020-03-14 18:19:51'),
(8, 4, 3, 5, '2020-03-14 21:32:54', '2020-03-14 21:40:23', '2020-03-14 21:40:23'),
(9, 4, 3, 1, '2020-03-14 21:37:15', '2020-03-14 21:40:24', '2020-03-14 21:40:24'),
(10, 4, 3, 1, '2020-03-14 21:38:20', '2020-03-14 21:40:25', '2020-03-14 21:40:25'),
(11, 4, 3, 1, '2020-03-14 21:38:25', '2020-03-14 21:40:26', '2020-03-14 21:40:26'),
(12, 4, 3, 1, '2020-03-14 21:38:57', '2020-03-14 21:40:27', '2020-03-14 21:40:27'),
(13, 4, 3, 5, '2020-03-14 21:57:21', '2020-03-14 21:58:21', '2020-03-14 21:58:21'),
(14, 4, 3, 1, '2020-03-14 21:58:15', '2020-03-14 21:58:22', '2020-03-14 21:58:22'),
(15, 4, 3, 4, '2020-03-16 17:29:54', '2020-03-17 12:57:43', '2020-03-17 12:57:43'),
(16, 4, 3, 21, '2020-03-17 12:57:17', '2020-03-17 12:57:41', '2020-03-17 12:57:41'),
(17, 4, 3, 5, '2020-03-17 13:01:35', '2020-03-17 18:00:16', '2020-03-17 18:00:16'),
(18, 4, 3, 17, '2020-03-17 19:35:04', '2020-03-17 19:35:04', NULL),
(19, 5, 4, 5, '2020-03-17 19:36:04', '2020-03-17 19:36:04', NULL),
(20, 6, 3, 18, '2020-03-24 13:58:27', '2020-03-24 13:58:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `show_times`
--

CREATE TABLE `show_times` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `seats` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `show_times`
--

INSERT INTO `show_times` (`id`, `movie_id`, `time`, `seats`, `deleted_at`) VALUES
(4, 2, '2020-04-20 20:00:00', 22, NULL),
(5, 2, '2020-06-22 11:00:00', 16, NULL),
(6, 6, '2020-03-30 15:00:00', 120, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `name`, `table_name`) VALUES
(1, 'Actors', 'actors'),
(2, 'Countries', 'countries'),
(3, 'Directors', 'directors'),
(4, 'Genres', 'genres'),
(5, 'Languages', 'languages'),
(6, 'Movies', 'movies'),
(7, 'Featured films', 'featured_films'),
(8, 'Show times', 'show_times'),
(9, 'Reservations', 'reservations'),
(10, 'Users', 'users');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `role_id` int(11) NOT NULL,
  `auth_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `deleted_at`, `username`, `email`, `password`, `active`, `role_id`, `auth_key`) VALUES
(3, '2020-03-10 10:45:27', '2020-03-17 18:11:20', NULL, 'Admin', 'admin@gmail.com', '32ca9fc1a0f5b6330e3f4c8c1bbecde9bedb9573', 1, 1, NULL),
(4, '2020-03-15 09:53:07', '2020-03-17 18:57:36', NULL, 'Ivan997', 'imaksimovic97@gmail.com', '32ca9fc1a0f5b6330e3f4c8c1bbecde9bedb9573', 1, 2, NULL),
(5, '2020-03-17 19:02:14', '2020-03-17 20:52:12', NULL, 'Paja', 'paja123@gmail.com', '724f6501eaf585000bef348a51cb23b516b40575', 0, 2, NULL),
(6, '2020-03-18 11:42:36', '2020-03-18 11:43:15', NULL, 'Ivana99', 'maksimovic.ivana4@gmail.com', '32ca9fc1a0f5b6330e3f4c8c1bbecde9bedb9573', 1, 2, NULL),
(7, '2020-03-18 12:03:41', '2020-03-18 12:03:41', NULL, 'Gavra', 'gavrilov.nikola96@gmail.com', 'c617be0e5762bc65c0154a22f6126175841f6627', 0, 2, 'ea680c05e04d729bf724748967068de61396217c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_films`
--
ALTER TABLE `featured_films`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `table_id` (`table_id`),
  ADD KEY `action_id` (`action_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_actors`
--
ALTER TABLE `movie_actors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `actor_id` (`actor_id`);

--
-- Indexes for table `movie_country`
--
ALTER TABLE `movie_country`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `movie_directors`
--
ALTER TABLE `movie_directors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`,`director_id`),
  ADD KEY `director_id` (`director_id`);

--
-- Indexes for table `movie_genre`
--
ALTER TABLE `movie_genre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `movie_images`
--
ALTER TABLE `movie_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `movie_language`
--
ALTER TABLE `movie_language`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `language_id` (`language_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `show_time_id` (`show_time_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `show_times`
--
ALTER TABLE `show_times`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `featured_films`
--
ALTER TABLE `featured_films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `movie_actors`
--
ALTER TABLE `movie_actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `movie_country`
--
ALTER TABLE `movie_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `movie_directors`
--
ALTER TABLE `movie_directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `movie_genre`
--
ALTER TABLE `movie_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `movie_images`
--
ALTER TABLE `movie_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `movie_language`
--
ALTER TABLE `movie_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `show_times`
--
ALTER TABLE `show_times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `featured_films`
--
ALTER TABLE `featured_films`
  ADD CONSTRAINT `featured_films_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `logs_ibfk_2` FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`),
  ADD CONSTRAINT `logs_ibfk_3` FOREIGN KEY (`action_id`) REFERENCES `actions` (`id`);

--
-- Constraints for table `movie_actors`
--
ALTER TABLE `movie_actors`
  ADD CONSTRAINT `movie_actors_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `movie_actors_ibfk_2` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`);

--
-- Constraints for table `movie_country`
--
ALTER TABLE `movie_country`
  ADD CONSTRAINT `movie_country_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `movie_country_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `movie_directors`
--
ALTER TABLE `movie_directors`
  ADD CONSTRAINT `movie_directors_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `movie_directors_ibfk_2` FOREIGN KEY (`director_id`) REFERENCES `directors` (`id`);

--
-- Constraints for table `movie_genre`
--
ALTER TABLE `movie_genre`
  ADD CONSTRAINT `movie_genre_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`),
  ADD CONSTRAINT `movie_genre_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `movie_images`
--
ALTER TABLE `movie_images`
  ADD CONSTRAINT `movie_images_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `movie_images_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`);

--
-- Constraints for table `movie_language`
--
ALTER TABLE `movie_language`
  ADD CONSTRAINT `movie_language_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `movie_language_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`show_time_id`) REFERENCES `show_times` (`id`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `show_times`
--
ALTER TABLE `show_times`
  ADD CONSTRAINT `show_times_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
