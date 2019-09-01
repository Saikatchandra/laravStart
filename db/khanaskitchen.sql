-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 30, 2019 at 11:06 AM
-- Server version: 5.7.26
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khanaskitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Heavy meal', 'heavy-meal', '2019-07-18 06:21:58', '2019-07-18 06:21:58'),
(2, 'Juice', 'juice', '2019-07-18 05:52:23', '2019-07-18 06:21:33'),
(4, 'Fruits', 'fruits', '2019-07-18 06:22:15', '2019-07-18 06:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'khanas', 'khan@gmail.com', 'test', 'test', '2019-07-19 07:55:51', '2019-07-19 07:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `items_category_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(5, 2, 'Lichi juce', 'lichi', 30, 'lichi-juce-2019-07-18-5d2fca8399b33.jpg', '2019-07-18 08:25:23', '2019-07-18 08:25:23'),
(6, 4, 'apple', 'apple', 16, 'apple-2019-07-18-5d2fca9bbfa29.jpg', '2019-07-18 08:25:47', '2019-07-18 08:25:47'),
(3, 3, 'new', 'eweqw', 23, 'new-2019-07-18-5d2fbd79ba310.jpg', '2019-07-18 07:29:45', '2019-07-18 07:29:45'),
(4, 3, 'Khichuri edit', 'KhichuriKhichuriKhichuriKhichuriKhichuri', 25, 'khichuri-edit-2019-07-18-5d2fc635dd914.jpg', '2019-07-18 07:30:56', '2019-07-18 08:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_14_082010_create_sliders_table', 2),
(4, '2019_07_17_215952_create_categories_table', 3),
(5, '2019_07_17_231000_create_items_table', 4),
(6, '2019_07_18_152244_create_reservations_table', 5),
(7, '2019_07_18_200634_create_contacts_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_and_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `phone`, `email`, `date_and_time`, `message`, `status`, `created_at`, `updated_at`) VALUES
(10, 'monowarul', '9798797979', 'mono@gmail.com', '20 December 1899 - 09:December AM', 'ggkgkgkfdugfv', '1', '2019-07-31 17:01:28', '2019-07-31 17:01:47'),
(4, 'shimul', '23141141414', 'shi@gmail.com', '19 July 2019 - 04:ll AM', 'test', '1', '2019-07-19 00:16:21', '2019-07-19 02:56:45'),
(5, 'hp', '98893771', 'hp@gmail.com', '19 July 2019 - 02:July AM', 'teat', '1', '2019-07-19 00:18:26', '2019-07-19 23:02:51'),
(6, 'makeNew', '23422515155', 'mk@gmail.com', '19 July 2019 - 03:July AM', 'test', '1', '2019-07-19 00:21:39', '2019-07-19 23:02:56'),
(7, 'makeNew', '23422515155', 'mk@gmail.com', '19 July 2019 - 03:July AM', 'test', '1', '2019-07-19 00:24:20', '2019-07-19 23:07:43'),
(8, 'newan', '829793649639', 'nw@gmail.com', '20 July 2019 - 08:July AM', 'test', '1', '2019-07-19 00:26:06', '2019-07-19 23:07:55'),
(9, 'makefood', '9867996111', 'mk@gmail.com', '19 July 2019 - 07:July AM', 'tst', '0', '2019-07-19 00:34:18', '2019-07-19 00:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'test', 'test', 'test-2019-07-14-5d2b14dd98683.jpg', '2019-07-14 18:41:17', '2019-07-14 18:41:17'),
(4, 'b S', 'slider', 'b-test-2019-07-14-5d2b163ae31be.jpg', '2019-07-14 18:47:06', '2019-07-16 22:53:01'),
(5, 'b edit', 'slider edit', 'b-edit-2019-07-14-5d2b1b7e31e0a.jpg', '2019-07-14 19:09:34', '2019-07-14 19:09:34'),
(6, 'new sss', 'slider', 'new-2019-07-14-5d2b1c1046f5d.jpg', '2019-07-14 19:12:00', '2019-07-16 22:52:51'),
(7, 'new edit', 'slider', 'new-edit-2019-07-14-5d2b1c1fb6fe2.jpg', '2019-07-14 19:12:15', '2019-07-14 19:12:15'),
(8, 'new edit', 'slider', 'new-edit-2019-07-14-5d2b1c2aa5913.jpg', '2019-07-14 19:12:26', '2019-07-14 19:12:26'),
(9, 'test new', 'new slider', 'test-new-2019-07-16-5d2df9be96c51.jpg', '2019-07-16 23:22:22', '2019-07-16 23:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mahin', 'mh@gmail.com', '$2y$10$kP.VnvN9Icis2gbx19JTZek2Rm1vnoIJONbDlhp7HbUqm/7Jc/p4e', 'Mez5EKrD7dcERWGQ4BVeHIY1kjYhWDagBbwJwItDwLWJEQWirk8sH1NH2xvb', '2019-07-14 12:45:20', '2019-07-14 12:45:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
