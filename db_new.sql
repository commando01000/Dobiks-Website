-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 08:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) NOT NULL,
  `title` varchar(400) NOT NULL,
  `description` text NOT NULL,
  `cover` varchar(500) NOT NULL,
  `embed` text NOT NULL,
  `builder` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `title`, `description`, `cover`, `embed`, `builder`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'African Shooting Championship', 'The African shooting championship took place in October 2023, and the brief was to announce that this international championship is happening in Egypt. We came up with the creative&nbsp; as a TV copy.', 'projects/4U0zucWBcr3jKANM1BZg7UQgQlExOw2SEMVbYBWd.png', 'https://www.instagram.com/reel/CybrB3frOjg/embed/', 'on', '2024-04-22 12:42:25', '2024-04-22 12:42:41', 1),
(2, 'Criss el masry', 'Criss el masry', 'projects/fVOPZsFcUKsSMvrTJY3pQevYTsZqMORivzgU29Zk.png', 'https://player.vimeo.com/video/852312220?h=509ce9e794', 'on', '2024-04-22 12:45:04', '2024-04-22 12:47:05', 1),
(3, 'Hayah Karima', 'Hayah Karima is a well known organization for charity and donation,\r\n\r\nIn ramadan 2022, the brief was to show to public how this organization build a decent life for people&nbsp; in countryside.\r\n\r\n&nbsp;\r\n\r\nOur strategy was to grab the attention given that we are in the most competitive month in the year, all brands are coming with TV copies.\r\n\r\nWe decided to take it to up level and produced a song featuring Amir Eid and showing the difference happened because of this charity organization.&nbsp;&nbsp;', 'projects/znJUdCvgl9hIFYG5LXeaUZkXCcwpW6YbTOJ1N7Kw.png', 'https://player.vimeo.com/video/741436611?h=6cef84291a', 'on', '2024-04-22 12:46:47', '2024-04-22 12:46:47', 1),
(4, 'Meat Lovers', 'In this brief Hayah Karima was trying to encourage the audience to donate in feast with their money for the purpose of delivering meat to people who needed.', 'projects/PEONI2KKy92TQJ8c8GIujsvcBQd2KVvxzkZYPuPC.png', 'https://player.vimeo.com/video/838029333?h=25b40bb323', 'on', '2024-04-22 12:48:16', '2024-04-22 12:48:26', 1),
(5, 'New alamien', 'New Alamein festival was one of most challenging projects we had, as New Alamein city is one of the new fourth generation cities in Egypt and the brief was mainly to announce the launching of&nbsp; the city. So we decided to do the announcement but in our own way . We created a line to be the big umbrella for the concept &ldquo;العالم علمين&rdquo;\r\n\r\n&nbsp;\r\n\r\nThe line was mainly to address that the whole world is inside the city, as the festival was very inclusive and gathered a lot of different activities from fashion to sports. Because we fell in love with the line, we decided not not just implement it in one copy, but three which were: the main copy, Tazkarti, and for Cris El Masry.', 'projects/vaJHzA1mlKYhnXgB4RACOjySOn80apGvRNcpcVV7.png', 'https://player.vimeo.com/video/853727931?h=67ec2eac3a', 'on', '2024-04-22 12:49:59', '2024-04-22 12:49:59', 1),
(6, 'Tagamal Bel Akhlaa’', 'Hayah Karima is a well known organization for charity and donation,\r\n\r\nIn ramadan 2022, the brief was to show to public how this organization build a decent life for people&nbsp; in countryside.\r\n\r\n&nbsp;\r\n\r\nOur strategy was to grab the attention given that we are in the most competitive month in the year, all brands are coming with TV copies.\r\n\r\nWe decided to take it to up level and produced a song featuring Amir Eid and showing the difference happened because of this charity organization.&nbsp;', 'projects/NCdwlRhHeTYGs5TeS7B22QjYiAZaESToWGDAR0tw.png', 'https://player.vimeo.com/video/741436611?h=6cef84291a', 'on', '2024-04-22 12:51:10', '2024-04-22 12:51:10', 1),
(7, 'tazkarti', 'tazkarti', 'projects/gfYD7Ix6gjYh4qPVeOrfrVyc4bCtXv2TK7FJfotF.png', 'https://player.vimeo.com/video/852688900?h=fe9667afc4', 'on', '2024-04-22 12:52:09', '2024-04-22 12:52:09', 1),
(8, 'World Youth Forum', 'Back Together\r\n\r\nIs an international event that usually takes place every year in Sharm el Sheikh, Egypt, and its main objective is to gather all youth around the world with one goal: to discuss global issues and try to propose solutions.\r\n\r\nIn this event we produced the international main copy.', 'projects/kvhuRQ3GpZOWtAmenzo1mmQFOhsskNWy55fvPwMg.png', 'https://player.vimeo.com/video/741438244?h=07ef45f52a', 'on', '2024-04-22 12:53:20', '2024-04-22 12:53:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) NOT NULL,
  `full_name` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(300) NOT NULL,
  `cv` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assign_forms_roles`
--

CREATE TABLE `assign_forms_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assign_forms_users`
--

CREATE TABLE `assign_forms_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_by` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `images`, `short_description`, `description`, `category_id`, `slug`, `created_by`, `created_at`, `updated_at`) VALUES
(5, '{\"en\":\"October War\",\"ar\":\"حرب اكتوبر\"}', 'blogs/4qh7t5ifx36hcX6BUIjZ6OtSnRsnuosVKkLbkSUQ.jpg', '{\"en\":\"salama\",\"ar\":\"حرب اكتوبر\"}', '{\"en\":\"<p>mousa</p>\",\"ar\":\"حرب اكتوبر\"}', 5, 'october-war', '1', '2024-07-04 17:05:10', '2024-07-06 09:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(5, '{\"ar\":\"الاخبار\",\"en\":\"Newsletter\"}', 1, '2024-07-04 10:09:07', '2024-07-06 06:59:06'),
(6, '{\"ar\":\"اخبار جديدة\",\"en\":\"news\"}', 1, '2024-07-06 07:03:05', '2024-07-06 07:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `business_email` varchar(255) NOT NULL,
  `business_website` varchar(255) NOT NULL,
  `business_address` text NOT NULL,
  `business_number` varchar(255) NOT NULL,
  `business_phone` varchar(255) NOT NULL,
  `business_logo` varchar(255) NOT NULL,
  `booking_slots` varchar(255) NOT NULL,
  `json` longtext DEFAULT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT 0,
  `amount` decimal(10,2) DEFAULT NULL,
  `currency_symbol` varchar(255) DEFAULT NULL,
  `currency_name` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_values`
--

CREATE TABLE `booking_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `json` longtext NOT NULL,
  `amount` double(8,2) DEFAULT NULL,
  `currency_symbol` varchar(255) DEFAULT NULL,
  `currency_name` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `booking_slots_date` date DEFAULT NULL,
  `booking_slots` text DEFAULT NULL,
  `booking_seats_date` date DEFAULT NULL,
  `booking_seats_session` varchar(255) DEFAULT NULL,
  `booking_seats` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `booking_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) NOT NULL,
  `name` varchar(400) NOT NULL,
  `description` text NOT NULL,
  `cover` varchar(500) NOT NULL,
  `builder` varchar(45) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `description`, `cover`, `builder`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'client100', 'test', 'clients/vtB16XuQ7xVGg6I7Am9dqWIjCZvimuV2IYZmYsJd.png', 'on', 1, '2024-04-22 12:56:49', '2024-04-22 12:57:31'),
(2, 'client86', 'test\r\n\r\n&nbsp;', 'clients/iOdyuOVnGZDRyp9GmylMegQnrrKMhKkolcqLh4zk.png', 'on', 1, '2024-04-22 12:57:13', '2024-04-22 12:57:13'),
(3, 'client', 'test', 'clients/cQEzlsacdDFh5NZNl6FqQLtqpVmPQiEyXdfgcqn1.png', 'on', 1, '2024-04-22 12:59:24', '2024-04-22 12:59:36'),
(4, 'client', 'clien', 'clients/AJbBDgHNVksDuHkkAavvkk2g5xAY2dsMiSL90hN4.png', 'on', 1, '2024-04-22 13:00:04', '2024-04-22 13:00:15'),
(5, 'client', 'client', 'clients/QGgWuYdiYPbVUqm7MvMPMsfo1mW3ScHD2JJcq0ob.png', 'on', 1, '2024-04-22 13:00:35', '2024-04-22 13:00:44'),
(6, 'client', 'client', 'clients/ZdM3arvnW9IpIu8pmXWOkASGBjHVgoeyIXgLBDPj.png', 'on', 1, '2024-04-22 13:01:04', '2024-04-22 13:01:04'),
(7, 'client', 'client description', 'clients/1DiSJSvcMWetbjR0z9uMAdRMTycRNuExVHRlCOsX.png', 'on', 1, '2024-04-22 13:01:31', '2024-04-22 13:01:44'),
(8, 'client title', 'client description', 'clients/m0TmioKqsam5fGiN3hixkLDUPDaRdHw6epYcrP7C.png', 'off', 1, '2024-04-22 13:02:14', '2024-04-22 13:02:14'),
(9, 'client', 'client', 'clients/zmkJJO4Kv5JXxU3reoJu0zWhpNJkt1PlTIKg2FRa.png', 'off', 1, '2024-04-22 13:02:35', '2024-04-22 13:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questions` varchar(255) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `order` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `questions`, `answer`, `order`, `created_at`, `updated_at`) VALUES
(10, '{\"en\":\"who are you?\",\"ar\":\"كييف حالك\"}', '{\"en\":\"dddddddddddd\",\"ar\":\"الحمد الله\"}', '9', '2024-07-05 16:34:24', '2024-07-05 16:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `gallerys`
--

CREATE TABLE `gallerys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `images` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `files` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `embed` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallerys`
--

INSERT INTO `gallerys` (`id`, `title`, `images`, `files`, `embed`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'مشروع دعم النساء المعنفات بالقاهرة ونجع حمادي', NULL, NULL, '', 1, '2024-01-22 22:51:05', '2024-02-25 14:40:18'),
(22, 'الفتيات المعرضين للخطر', NULL, NULL, '', 2, '2024-02-25 14:56:47', '2024-02-25 14:56:47'),
(23, 'fd sdf sdf', 'gallery/OVQhqmOJK8COMgQdjUx3lIayhmlEMn6c4VTvKkgx.jpg', '[\"gallery\\/cK0bx5V5JuvBSlukB9ekhPqTeJcmUvXYpgm8n4SJ.jpg\",\"gallery\\/J7FOzCM6UroXcXBils0nNULlKH7YeZl3vePoSLH0.jpg\",\"gallery\\/gGKaZgjfzevLuFBt8ae74LwVJPEzjhux6tuFKsOZ.jpg\",\"gallery\\/EHOImvgDQIez37MW0hEDPzH9GDWip08JvHJDBV6M.jpg\",\"gallery\\/QZYU1oimiaHRtctlG49PSCPv3uy1xPD9AP7KAVBl.jpg\",\"gallery\\/U4tVHflkYP4EOqG9dYQT4Cv2FwGkQeZs5NEQLr8G.jpg\",\"gallery\\/EIiEIBIJrrhJuyVGCkYNRZnf849LMPboA4YDAtfG.jpg\",\"gallery\\/1ZzsXi4EeWVhRybE4rcooAlnfhSXrknreJE4Jw3g.jpg\",\"gallery\\/WnYW4By4dVuchu5mPRSwkrilnNjsgZTar4gxZfuc.jpg\",\"gallery\\/mJrhv6FDtwmgNSllWZwXWyUqlmn0XYxzDVKlyF2i.jpg\",\"gallery\\/R1mJcwHJ6Mt0yROiID7dV7zGt44H1DXXolLqCEWn.jpg\",\"gallery\\/AaBETWZYPBwtpRWpZgCVjgfCGhI1W7U8EjAceeiF.jpg\"]', '', 1, '2024-02-29 11:41:00', '2024-02-29 11:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(3, '{\"en\":\"pdfs\",\"ar\":\"ملفات\"}', 1, '2024-07-06 07:11:13', '2024-07-06 07:11:13'),
(4, '{\"en\":\"images\",\"ar\":\"صور\"}', 1, '2024-07-06 07:14:05', '2024-07-06 07:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `header_settings`
--

CREATE TABLE `header_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_settings`
--

INSERT INTO `header_settings` (`id`, `menu`, `slug`, `page_id`, `created_at`, `updated_at`) VALUES
(2, 'أجفنــد', 'agfnd', 3, '2024-01-25 13:55:59', '2024-01-27 13:07:40'),
(3, 'جمعية تحسين الصحة', 'gmaay-thsyn-alsh', 2, '2024-01-26 01:59:55', '2024-01-27 13:07:47'),
(4, 'عن المبادرة', 'aan-almbadr', 1, '2024-01-27 01:14:53', '2024-01-27 13:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `joins`
--

CREATE TABLE `joins` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `joins`
--

INSERT INTO `joins` (`id`, `name`, `email`, `address`, `phone`, `cv`, `job_title`, `created_at`, `updated_at`) VALUES
(5, 'Mohamed Salama Mousa Mohamed', 'slamtm609@gmail.com', 'المحلة', '01094182099', 'CVs/2IjUUHwxj6NJabzb8wHqnTTAyYvNpzjnbkWOG9yi.pdf', '', '2024-07-02 12:49:13', '2024-07-02 09:49:13'),
(6, 'Mohamed Salama Mousa Mohamed', 'slamtm608@gmail.com', 'المحلةsssssssssssssssssssss', '0109418209', 'CVs/3z3qopPbRzTij6VoQmDul0Zryo6O9wyscxYB89LK.pdf', 'typographer', '2024-07-02 12:13:23', '2024-07-02 09:13:23'),
(8, 'Mahmoud Ebrahim', 'jfijcc124@gmail.com', 'Abu Bakr Al-Siddiq, First 6th of October, Giza Governorate', '01024736219', 'CVs/NEPVLY0voi2b6jdpT7ck6vFZq5QhmjgAHpCM9oDb.jpg', 'senior graphic designer', '2024-07-03 08:18:28', '2024-07-03 08:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `login_securities`
--

CREATE TABLE `login_securities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `google2fa_enable` tinyint(1) NOT NULL DEFAULT 0,
  `google2fa_secret` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mail_templates`
--

CREATE TABLE `mail_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `mailable` varchar(255) NOT NULL,
  `subject` text DEFAULT NULL,
  `html_template` longtext NOT NULL,
  `text_template` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mail_templates`
--

INSERT INTO `mail_templates` (`id`, `mailable`, `subject`, `html_template`, `text_template`, `created_at`, `updated_at`) VALUES
(1, 'App\\Mail\\TestMail', 'Mail send for testing purpose', '<p><strong>This Mail For Testing</strong></p>\n            <p><strong>Thanks</strong></p>', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(2, 'App\\Mail\\Thanksmail', 'New survey Submited - {{ title }}', '<div class=\"section-body\">\n            <div class=\"mx-0 row\">\n            <div class=\"mx-auto col-6\">\n            <div class=\"card\">\n            <div class=\"card-header\">\n            <h4 class=\"text-center w-100\">{{ title }}</h4>\n            </div>\n            <div class=\"card-body\">\n            <div class=\"text-center\">\n            <img src=\"{{image}}\" id=\"app-dark-logo\" class=\"my-5 text-center img img-responsive w-30 justify-content-center\"/>\n            </div>\n            <h2 class=\"text-center w-100\">{{ thanks_msg }}</h2>\n            </div>\n            </div>\n            </div>\n            </div>\n            </div>', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(3, 'App\\Mail\\BookingThanksmail', 'New booking Submited - {{ title }}', '<div class=\"section-body\">\n            <div class=\"mx-0 row\">\n            <div class=\"mx-auto col-6\">\n            <div class=\"card\">\n            <div class=\"card-header\">\n            <h4 class=\"text-center w-100\">{{ title }}</h4>\n            </div>\n            <div class=\"card-body\">\n            <div class=\"text-center\">\n            <img src=\"{{image}}\" id=\"app-dark-logo\" class=\"my-5 text-center img img-responsive w-30 justify-content-center\"/>\n            </div>\n            <h2 class=\"text-center w-100\">{{ thanks_msg }}</h2>\n            <h3 class=\"text-center w-100\">Click to view your booking details: <a target=\"_blank\" href=\"{{ link }}\">Click Here</a></h3>\n            </div>\n            </div>\n            </div>\n            </div>\n            </div>', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(4, 'App\\Mail\\PasswordReset', 'Reset Password Notification', '<p><strong>Hello!</strong></p><p>You are receiving this email because we received a password reset request for your account. To proceed with the password reset please click on the link below:</p><p><a href=\"{{url}}\">Reset Password</a></p><p>This password reset link will expire in 60 minutes.&nbsp;<br>If you did not request a password reset, no further action is required.</p>', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(5, 'App\\Mail\\RegisterMail', 'Register Mail.', '<p><strong>Hi {{name}}</strong></p>\n            <p><strong>Email : {{email}}</strong></p>\n            <p><strong>Thanks for registration, your account is active.</strong></p>', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(6, 'App\\Mail\\ConatctMail', 'New Enquiry Details.', '<p><strong>Name : {{name}}</strong></p>\n\n            <p><strong>Email : </strong><strong>{{email}}</strong></p>\n\n            <p><strong>Contact No : {{ contact_no }}&nbsp;</strong></p>\n\n            <p><strong>Message :&nbsp;</strong><strong>{{ message }}</strong></p>', NULL, '2024-01-22 00:14:06', '2024-01-22 00:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `meeting_polls`
--

CREATE TABLE `meeting_polls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `vote` datetime DEFAULT NULL,
  `poll_id` bigint(20) NOT NULL,
  `location` varchar(255) NOT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_settings`
--

CREATE TABLE `menu_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(225) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_settings`
--

INSERT INTO `menu_settings` (`id`, `type`, `title`, `slug`, `parent_id`, `page_id`, `sort`, `created_at`, `updated_at`) VALUES
(21, 'system', 'News', '/blog', 0, NULL, 1, '2024-02-03 00:58:27', '2024-04-22 11:11:54'),
(30, 'link', 'Contact Us', '/contact/', 0, NULL, -1, '2024-03-01 20:42:20', '2024-04-22 11:12:06'),
(32, 'link', 'projects', '/projects', 0, NULL, 0, '2024-04-21 11:20:23', '2024-04-21 11:20:23'),
(35, 'link', 'Join us', '/join/', 0, NULL, 0, '2024-04-22 11:10:31', '2024-04-23 20:17:12'),
(36, 'link', 'FAQ', '/faqs', 0, NULL, 0, '2024-04-22 11:10:31', '2024-04-22 11:10:31'),
(38, 'link', 'Testimonials', '/testimonials', 0, NULL, 0, '2024-07-03 09:42:37', '2024-07-03 09:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_24_000000_create_settings_table', 1),
(4, '2018_10_10_000000_create_mail_templates_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_09_22_192348_create_messages_table', 1),
(7, '2019_10_16_211433_create_favorites_table', 1),
(8, '2019_10_18_223259_add_avatar_to_users', 1),
(9, '2019_10_20_211056_add_extra_fields_to_users', 1),
(10, '2019_10_20_211056_add_messenger_color_to_users', 1),
(11, '2019_10_22_000539_add_dark_mode_to_users', 1),
(12, '2019_10_25_214038_add_active_status_to_users', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2020_08_22_121757_create_forms_table', 1),
(15, '2020_08_22_121758_create_form_values_table', 1),
(16, '2021_03_05_112733_create_modules_table', 1),
(17, '2021_03_10_032138_add_coloumn_module_table', 1),
(18, '2021_06_16_083454_create_login_securities_table', 1),
(19, '2021_06_16_115243_create_permission_tables', 1),
(20, '2021_08_10_060033_create_user_form_table', 1),
(21, '2021_08_25_050952_add_lang_field_in_users_table', 1),
(22, '2021_08_8_032138_add_coloumn_form_table', 1),
(23, '2021_09_21_060524_add_client_msg__to_forms__table', 1),
(24, '2021_10_14_085757_amount_to_forms_table', 1),
(25, '2021_10_14_085944_amount_to_form_values_table', 1),
(26, '2021_10_19_041655_add_payment_status_to_forms_table', 1),
(27, '2022_02_07_070446_add_payment_to_forms_table', 1),
(28, '2022_02_07_114611_add_payment_type_to_form_values_table', 1),
(29, '2022_02_21_032724_create_social_logins_table', 1),
(30, '2022_05_19_043539_social_type', 1),
(31, '2022_08_26_120030_add_status_to_form_values_table', 1),
(32, '2022_09_14_044629_create_polls_table', 1),
(33, '2022_09_23_065225_create_multiple_choices_table', 1),
(34, '2022_09_23_065251_create_meeting_polls_table', 1),
(35, '2022_09_23_065324_create_image_polls_table', 1),
(36, '2022_09_29_055159_add_forms_cc', 1),
(37, '2022_10_04_063224_create_comments_table', 1),
(38, '2022_10_04_063242_create_comments_replies_table', 1),
(39, '2022_10_13_102234_create_form_comments_controllers_table', 1),
(40, '2022_10_13_121737_create_form_comments_replies_table', 1),
(41, '2022_10_13_121754_create_form_comments_table', 1),
(42, '2022_10_14_051557_allow_section', 1),
(43, '2022_11_29_065355_create_dashboard_widgets_table', 1),
(44, '2023_01_17_072809_create_faqs_table', 1),
(45, '2023_01_17_103524_add_assign_type_to_forms_table', 1),
(46, '2023_02_06_115445_create_sms_templates_table', 1),
(47, '2023_02_06_115716_create_user_codes_table', 1),
(48, '2023_02_06_120602_add_country_code_to_users_table', 1),
(49, '2023_02_24_054509_create_assign_forms_users_table', 1),
(50, '2023_02_24_061824_create_assign_forms_roles_table', 1),
(51, '2023_03_20_065028_create_document_genrators_table', 1),
(52, '2023_03_20_095301_create_document_menus_table', 1),
(53, '2023_05_13_041437_create_events_table', 1),
(54, '2023_05_17_113006_create_testimonials_table', 1),
(55, '2023_05_18_104654_add_designation_testimonials_table', 1),
(56, '2023_05_22_131647_create_notifications_settings_table', 1),
(57, '2023_05_23_092628_create_notifications_table', 1),
(58, '2023_06_09_054119_add_set_end_date_to_forms_table', 1),
(59, '2023_06_22_084811_add_created_by_users_table', 1),
(60, '2023_07_17_061316_create_form_integration_settings_table', 1),
(61, '2023_07_27_050119_add_theme_to_forms_table', 1),
(62, '2023_08_09_065314_add_dark_to_users_table', 1),
(63, '2023_08_10_100105_create_form_templates_table', 1),
(64, '2023_08_11_100159_create_bookings_table', 1),
(65, '2023_08_14_090154_create_time_wise_bookings_table', 1),
(66, '2023_08_14_104801_create_seat_wise_bookings_table', 1),
(67, '2023_08_17_093556_create_booking_values_table', 1),
(68, '2023_08_24_035759_create_blog_categories_table', 1),
(69, '2023_08_24_062508_create_blogs_table', 1),
(70, '2023_08_24_110040_add_description_to_forms_table', 1),
(71, '2023_08_29_040231_add_created_by_to_blogs_table', 1),
(72, '2023_09_01_063412_create_footer_settings_table', 1),
(73, '2023_09_01_064016_create_page_settings_table', 1),
(74, '2023_09_04_044855_create_header_settings_table', 1),
(75, '2023_10_05_061229_create_annoucements_table', 1),
(76, '2023_10_05_113959_create_form_rules_table', 1),
(77, '2023_10_30_053352_add_conditional_rule_forms_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 6);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `permission` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `permission`, `created_at`, `updated_at`) VALUES
(2, 'user', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(3, 'role', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(13, 'blog', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(14, 'category', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(16, 'mailtemplate', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(17, 'sms-template', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(18, 'language', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(19, 'setting', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(20, 'chat', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(21, 'landing-page', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(22, 'testimonial', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(23, 'faqs', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(24, 'page-setting', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(25, 'gallery', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(26, 'project', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `multiple_choices`
--

CREATE TABLE `multiple_choices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vote` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `poll_id` bigint(20) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications_settings`
--

CREATE TABLE `notifications_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `email_notification` varchar(255) NOT NULL DEFAULT '0' COMMENT '1-On 0-Off',
  `sms_notification` varchar(255) NOT NULL DEFAULT '0' COMMENT '1-On 0-Off',
  `notify` varchar(255) NOT NULL DEFAULT '0' COMMENT '1-On 0-Off',
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications_settings`
--

INSERT INTO `notifications_settings` (`id`, `title`, `email_notification`, `sms_notification`, `notify`, `status`, `created_at`, `updated_at`) VALUES
(1, 'testing purpose', '1', '0', '1', 2, '2024-01-22 00:14:06', '2024-01-22 00:14:06'),
(2, 'new survey details', '2', '2', '1', 2, '2024-01-22 00:14:06', '2024-01-22 00:14:06'),
(3, 'From Create', '2', '2', '0', 1, '2024-01-22 00:14:06', '2024-01-22 00:14:06'),
(4, 'New Enquiry Details', '1', '2', '1', 1, '2024-01-22 00:14:06', '2024-01-22 00:14:06'),
(5, 'Register mail', '1', '2', '1', 1, '2024-01-22 00:14:06', '2024-01-22 00:14:06'),
(6, 'new booking survey details', '1', '2', '1', 1, '2024-01-22 00:14:06', '2024-01-22 00:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `page_settings`
--

CREATE TABLE `page_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `body` longtext DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `url_type` varchar(255) DEFAULT NULL,
  `page_url` varchar(255) DEFAULT NULL,
  `friendly_url` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `components` longtext CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `styles` longtext CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `html` longtext DEFAULT NULL,
  `css` longtext CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_settings`
--

INSERT INTO `page_settings` (`id`, `title`, `slug`, `body`, `type`, `url_type`, `page_url`, `friendly_url`, `description`, `components`, `styles`, `html`, `css`, `created_at`, `updated_at`) VALUES
(14, '{\"en\":\"English\",\"ar\":\"العربية\"}', 'english', '{\"en\":\"English body\",\"ar\":\"المحتوي\"}', NULL, NULL, NULL, NULL, '{\"en\":\"English des\",\"ar\":\"العربية وصف\"}', NULL, NULL, NULL, NULL, '2024-07-05 15:49:54', '2024-07-05 15:49:54'),
(15, '{\"en\":\"project 23333\",\"ar\":\"مشروع 2\"}', 'project-23333', '{\"en\":\"<p>project 2 detail</p>\",\"ar\":\"<h2 style=\\\"font-style:italic;\\\"><strong>محتوي مشروع</strong> 2</h2>\"}', NULL, NULL, NULL, NULL, '{\"en\":\"project 2 description\",\"ar\":\"وصف مشروع 2\"}', NULL, NULL, NULL, NULL, '2024-07-06 12:21:20', '2024-07-06 14:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'manage-dashboardwidget', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(2, 'create-dashboardwidget', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(3, 'edit-dashboardwidget', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(4, 'delete-dashboardwidget', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(5, 'export-dashboardwidget', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(6, 'manage-user', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(7, 'create-user', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(8, 'edit-user', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(9, 'delete-user', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(10, 'export-user', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(11, 'impersonate-user', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(12, 'phoneverified-user', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(13, 'emailverified-user', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(14, 'manage-role', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(15, 'create-role', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(16, 'edit-role', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(17, 'delete-role', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(18, 'export-role', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(19, 'manage-form-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(20, 'create-form-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(21, 'edit-form-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(22, 'delete-form-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(23, 'design-form-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(24, 'export-form-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(25, 'manage-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(26, 'create-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(27, 'edit-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(28, 'delete-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(29, 'design-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(30, 'fill-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(31, 'duplicate-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(32, 'theme-setting-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(33, 'integration-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(34, 'payment-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(35, 'export-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(36, 'dashboard-qrcode-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(37, 'manage-form-rule', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(38, 'create-form-rule', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(39, 'edit-form-rule', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(40, 'delete-form-rule', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(41, 'manage-submitted-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(42, 'edit-submitted-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(43, 'delete-submitted-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(44, 'download-submitted-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(45, 'export-submitted-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(46, 'show-submitted-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(47, 'manage-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(48, 'create-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(49, 'edit-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(50, 'delete-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(51, 'design-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(52, 'export-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(53, 'payment-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(54, 'fill-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(55, 'manage-booking-calendar', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(56, 'show-submitted-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(57, 'manage-submitted-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(58, 'edit-submitted-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(59, 'delete-submitted-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(60, 'export-submitted-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(61, 'copyurl-submitted-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(62, 'manage-poll', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(63, 'create-poll', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(64, 'edit-poll', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(65, 'delete-poll', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(66, 'vote-poll', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(67, 'result-poll', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(68, 'export-poll', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(69, 'manage-document', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(70, 'create-document', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(71, 'edit-document', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(72, 'delete-document', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(73, 'document-generate-document', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(74, 'export-document', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(75, 'manage-blog', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(76, 'create-blog', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(77, 'edit-blog', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(78, 'delete-blog', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(79, 'show-blog', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(80, 'export-blog', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(81, 'manage-category', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(82, 'create-category', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(83, 'edit-category', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(84, 'delete-category', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(85, 'show-category', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(86, 'export-category', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(87, 'manage-event', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(88, 'create-event', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(89, 'edit-event', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(90, 'delete-event', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(91, 'manage-mailtemplate', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(92, 'edit-mailtemplate', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(93, 'export-mailtemplate', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(94, 'manage-sms-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(95, 'edit-sms-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(96, 'export-sms-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(97, 'create-language', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(98, 'manage-language', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(99, 'delete-language', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(100, 'manage-setting', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(101, 'manage-chat', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(102, 'manage-landing-page', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(103, 'manage-testimonial', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(104, 'create-testimonial', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(105, 'edit-testimonial', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(106, 'delete-testimonial', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(107, 'export-testimonial', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(108, 'manage-faqs', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(109, 'create-faqs', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(110, 'edit-faqs', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(111, 'delete-faqs', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(112, 'export-faqs', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(113, 'manage-page-setting', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(114, 'create-page-setting', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(115, 'edit-page-setting', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(116, 'delete-page-setting', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(117, 'export-page-setting', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(118, 'manage-gallery', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(119, 'create-gallery', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(120, 'edit-gallery', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(121, 'delete-gallery', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(122, 'export-gallery', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(123, 'manage-project', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(124, 'create-project', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(125, 'edit-project', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(126, 'delete-project', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(127, 'show-project', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(128, 'export-project', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `client` varchar(255) DEFAULT NULL,
  `builder` varchar(225) DEFAULT NULL,
  `project_date` text DEFAULT NULL,
  `project_timeframe` text DEFAULT NULL,
  `project_location` text DEFAULT NULL,
  `project_category` bigint(20) DEFAULT 0,
  `project_status` tinyint(4) DEFAULT 0,
  `body` text NOT NULL,
  `embed` text NOT NULL,
  `components` longtext DEFAULT NULL,
  `styles` longtext DEFAULT NULL,
  `html` longtext DEFAULT NULL,
  `css` longtext DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `created_by` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `cover`, `description`, `client`, `builder`, `project_date`, `project_timeframe`, `project_location`, `project_category`, `project_status`, `body`, `embed`, `components`, `styles`, `html`, `css`, `slug`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'assela', 'projects/c9fqvU7jyQ6aG1zYSdpU4siO4lQVHkW0TOM0Uku4.png', 'Asseela is an up and coming Egyptian Furniture brand based in Cairo, Egypt. It has a wide range of unique contemporary pieces, including furniture, home accessories, and lighting units. The brand’s name is inspired by an old store that was considered the origin of ideas and furniture at an old age. Reviving the authenticity of the brand', 'assela', 'on', '21/5/2025', '2', 'location', 1, NULL, 'Asseela is an up and coming Egyptian Furniture brand based in Cairo, Egypt. It has a wide range of unique contemporary pieces, including furniture, home accessories, and lighting units. The brand&rsquo;s name is inspired by an old store that was considered the origin of ideas and furniture at an old age. Reviving the authenticity of the brand', '', NULL, NULL, NULL, NULL, 'assela', '1', '2024-04-22 12:24:22', '2024-04-24 13:34:36'),
(2, 'balkans', 'projects/fqUehRpq0f5aiCkzNe4f3CHd0aFu9fitMqcdxK2H.png', 'Balkans is a name for southeastern Europe, they are a group of countries that are famous for artists and artistic vision for the pottery.\r\n\r\nIntroducing our local pottery brand from Egypt, where each piece is meticulously handcrafted by skilled artisans, from the shaping of the clay to the intricate hand-painted details, our brand captures the spirit of authenticity and artistry that has been cherished throughout Egyptian history.', 'balkans', 'on', '21/5/2025', '2', 'location', 1, NULL, 'Balkans is a name for southeastern Europe, they are a group of countries that are famous for artists and artistic vision for the pottery. &nbsp; Introducing our local pottery brand from Egypt, where each piece is meticulously handcrafted by skilled artisans, from the shaping of the clay to the intricate hand-painted details, our brand captures the spirit of authenticity and artistry that has been cherished throughout Egyptian history.', '', NULL, NULL, NULL, NULL, 'balkans', '1', '2024-04-22 12:26:23', '2024-04-24 13:33:58'),
(3, 'cne', 'projects/obtIFbVDcstxPUVDbbsME6VPg7V6E0NkRq7B0qO8.png', 'CNE is a shareholding company established in 1991 by the Egyptian radio & television union (ERTU) in cooperation with private sector shareholders.\r\n\r\nIt distributes encrypted television and radio content, so when they say cipher, you imagine waves of interference, and CNE has expressed it through circles pattern.', 'cne', 'on', '21/5/2025', '3', 'location', 1, NULL, 'CNE is a shareholding company established in 1991 by the Egyptian radio &amp; television union (ERTU) in cooperation with private sector shareholders. It distributes encrypted television and radio content, so when they say cipher, you imagine waves of interference, and CNE has expressed it through circles pattern. &nbsp;', '', NULL, NULL, NULL, NULL, 'cne', '1', '2024-04-22 12:27:51', '2024-04-24 13:32:52'),
(4, 'Ed-Hub', 'projects/h70zWD6dC2zat94Dv7FeYYiAtiO4zuyj7Ew5Yuoo.png', 'EDHUB offers personalized consultations and tailored programs for students looking to study abroad and also provides individualized guidance to meet each student\'s unique needs.\r\n\r\nThe brand identity is bold as the brand targets the youth with different weights in the logo to create a lively look and feel and to hand in hand with that, the color palette is chosen to be trendy and youthful wide a wide range of colors reflecting the dynamic essence of the brand.', 'Ed-Hub', 'on', '21/5/2025', '3', 'location', 1, NULL, 'EDHUB offers personalized consultations and tailored programs for students looking to study abroad and also provides individualized guidance to meet each student&#39;s unique needs. &nbsp; The brand identity is bold as the brand targets the youth with different weights in the logo to create a lively look and feel and to hand in hand with that, the color palette is chosen to be trendy and youthful wide a wide range of colors reflecting the dynamic essence of the brand.', '', NULL, NULL, NULL, NULL, 'ed-hub', '1', '2024-04-22 12:31:03', '2024-04-24 13:31:04'),
(5, 'egypt marblex', 'projects/70EfidBBSyAtDx2YiTzv5QoJskq7qgNGVRQeJ3cz.png', 'DS+ has expertly crafted a brand identity for Egypt Marblex that seamlessly combines the expertise of their mother brand with contemporary design elements of the brilliant architect Shady abou Shady. The result is a visually striking and harmonious representation of the brand\'s commitment to tradition and modernity. By incorporating modern aesthetics while honoring its heritage. DSt\'s design work captures the essence of the brand\'s mastery and ensures that Egypt Marblex stands out as a quality-driven and innovative force in the industry.', 'egypt marblex', 'on', '21/5/2025', '3', 'location', 1, NULL, 'DS+ has expertly crafted a brand identity for Egypt Marblex that seamlessly combines the expertise of their mother brand with contemporary design elements of the brilliant architect Shady abou Shady. The result is a visually striking and harmonious representation of the brand&#39;s commitment to tradition and modernity. By incorporating modern aesthetics while honoring its heritage. DSt&#39;s design work captures the essence of the brand&#39;s mastery and ensures that Egypt Marblex stands out as a quality-driven and innovative force in the industry.', '', NULL, NULL, NULL, NULL, 'egypt-marblex', '1', '2024-04-22 12:32:26', '2024-04-24 13:30:39'),
(6, 'layla yassin', 'projects/j7DqL7AgTJ1bqnTmVy99SbWchrihJtxjJ4JZnddE.png', 'Laila Yassin is a contemporary art studio that focuses on expressing emotions using colors and brush strokes through paining canvas to add elegant yet expressive signature pieces in modern homes, one at a time.', 'layla yassin', 'on', '21/5/2025', '4', 'location', 1, NULL, 'Laila Yassin is a contemporary art studio that focuses on expressing emotions using colors and brush strokes through paining canvas to add elegant yet expressive signature pieces in modern homes, one at a time.', '', NULL, NULL, NULL, NULL, 'layla-yassin', '1', '2024-04-22 12:35:52', '2024-04-24 13:26:16'),
(7, 'pick a break', 'projects/bIl9O8OpWGi5LmFhOqz98fmn4sBbYVAiYmpPt17q.png', 'Pick a break is a service created to be at events and festivals  where you can take break within the occasion and go grab a drink or snacks.\r\n\r\nBecause our goal is to always create a unique identity for each project we work on, this branding identity\'s main goal was to create a friendly and inviting look and feel, thus the usage of the orange color to trigger hunger and the display typeface denoting friendliness.', 'pick a break', 'on', '21/5/2025', '3', 'location', 1, NULL, 'Pick a break is a service created to be at events and festivals&nbsp; where you can take break within the occasion and go grab a drink or snacks. &nbsp; Because our goal is to always create a unique identity for each project we work on, this branding identity&#39;s main goal was to create a friendly and inviting look and feel, thus the usage of the orange color to trigger hunger and the display typeface denoting friendliness.', '', NULL, NULL, NULL, NULL, 'pick-a-break', '1', '2024-04-22 12:36:44', '2024-04-24 13:22:44'),
(8, 'second home', 'projects/M7xfrG3xz8DXqK9RR2WNJfWwUPnpYh5iu1ArK1VI.webp', 'Its an Hotel Apartments highest level of service In Rehab city \r\nThe team came up with the brand identity to reflect timelessness and luxury, with the primary usage of the comma in the logo to reflect the mission of the hotel of pausing and taking a break.', 'second home', 'on', '21/5/2025', '3', 'location', 1, NULL, 'Its an Hotel Apartments highest level of service In Rehab city The team came up with the brand identity to reflect timelessness and luxury, with the primary usage of the comma in the logo to reflect the mission of the hotel of pausing and taking a break.', '', NULL, NULL, NULL, NULL, 'second-home', '1', '2024-04-22 12:38:30', '2024-04-24 13:22:22'),
(9, 'united media academy', 'projects/uH8zv5MzMBQrht41ry49sEczhFMbo0joTRJSiNcb.png', 'Rooted in a commitment to diversity, inclusivity, and ethical journalism, United Media Academy serves as a vibrant hub where individuals from all backgrounds can come together to learn, collaborate, and grow. Our faculty comprises industry experts, seasoned journalists, filmmakers, and media practitioners who are passionate about mentoring the next wave of talent and instilling in them the values of integrity, professionalism, and social responsibility', 'united media academy', 'on', '21/5/2025', '3', 'location', 1, NULL, 'Rooted in a commitment to diversity, inclusivity, and ethical journalism, United Media Academy serves as a vibrant hub where individuals from all backgrounds can come together to learn, collaborate, and grow. Our faculty comprises industry experts, seasoned journalists, filmmakers, and media practitioners who are passionate about mentoring the next wave of talent and instilling in them the values of integrity, professionalism, and social responsibility', '', NULL, NULL, NULL, NULL, 'united-media-academy', '1', '2024-04-22 12:39:28', '2024-04-24 13:20:06'),
(10, 'zad', 'projects/pkCfc8rzzKQvA7vmIYyXs3LoHSnJnvsEcgQuGIwN.png', 'Zad, an evocative fragrance brand, embarks on a sensory expedition through the realms of scent and emotion. Rooted in the essence of individuality and allure, Zad captures the essence of elegance and charisma in every bottle.\r\n\r\nInspired by the enchanting tapestry of human experiences, Zad seeks to encapsulate the intangible essence of moments through its distinct olfactory compositions', 'zad', 'on', '21/5/2025', '3', 'location', 1, NULL, 'Zad, an evocative fragrance brand, embarks on a sensory expedition through the realms of scent and emotion. Rooted in the essence of individuality and allure, Zad captures the essence of elegance and charisma in every bottle. &nbsp; Inspired by the enchanting tapestry of human experiences, Zad seeks to encapsulate the intangible essence of moments through its distinct olfactory compositions', '', NULL, NULL, NULL, NULL, 'zad', '1', '2024-04-22 12:40:25', '2024-04-24 13:16:51'),
(19, 'African Shooting Championship', 'projects/vR14atNsKSQMJkzXSIsGmSh9atAI7KVnbZLPqkyA.png', 'The African shooting championship took place in October 2023, and the brief was to announce that this international championship is happening in Egypt. We came up with the creative  as a TV copy.', 'African Shooting Championship', 'on', '21/5/2025', '6', 'location', 2, NULL, 'The African shooting championship took place in October 2023, and the brief was to announce that this international championship is happening in Egypt. We came up with the creative&nbsp; as a TV copy.', 'https://www.instagram.com/reel/CybrB3frOjg/embed/', NULL, NULL, NULL, NULL, 'african-shooting-championship', '1', '2024-04-22 14:56:56', '2024-04-24 13:36:19'),
(20, 'Criss el masry', 'projects/TEpOdQK3fYk1p0poMAz4vboJ73lb7fBc7NJ3iOZa.png', 'Criss el masry', 'Criss el masry', 'on', '21/5/2025', '6', 'location', 1, NULL, 'Criss el masry', 'https://player.vimeo.com/video/852312220?h=509ce9e794', NULL, NULL, NULL, NULL, 'criss-el-masry', '1', '2024-04-22 14:56:56', '2024-04-24 13:32:00'),
(21, 'Hayah Karima', 'projects/nVRARPNPMjPEn7miMoenqAXiAY3WuZK9QgigCOCX.png', 'Hayah Karima is a well known organization for charity and donation,\r\n\r\nIn ramadan 2022, the brief was to show to public how this organization build a decent life for people  in countryside.\r\n\r\n \r\n\r\nOur strategy was to grab the attention given that we are in the most competitive month in the year, all brands are coming with TV copies.\r\n\r\nWe decided to take it to up level and produced a song featuring Amir Eid and showing the difference happened because of this charity organization.', 'Hayah Karima', 'on', '21/5/2025', '6', 'location', 2, NULL, 'Hayah Karima is a well known organization for charity and donation, In ramadan 2022, the brief was to show to public how this organization build a decent life for people&nbsp; in countryside. &nbsp; Our strategy was to grab the attention given that we are in the most competitive month in the year, all brands are coming with TV copies. We decided to take it to up level and produced a song featuring Amir Eid and showing the difference happened because of this charity organization.&nbsp;&nbsp;', 'https://player.vimeo.com/video/741436611?h=6cef84291a', NULL, NULL, NULL, NULL, 'hayah-karima', '1', '2024-04-22 14:56:56', '2024-04-24 13:28:45'),
(22, 'Meat Lovers', 'projects/7g2PTN2Gw1E3ZGNGdz4mv1fALNArc5QmWgkHv7sj.png', 'In this brief Hayah Karima was trying to encourage the audience to donate in feast with their money for the purpose of delivering meat to people who needed.', 'Meat Lovers', 'on', '21/5/2025', '6', 'location', 2, NULL, 'In this brief Hayah Karima was trying to encourage the audience to donate in feast with their money for the purpose of delivering meat to people who needed.', 'https://player.vimeo.com/video/838029333?h=25b40bb323', NULL, NULL, NULL, NULL, 'meat-lovers', '1', '2024-04-22 14:56:56', '2024-04-24 13:25:49'),
(23, 'New alamien', 'projects/EPgTRP9D4AYSrkEEEfrCrmwxlplryqNfU6G7qCmZ.png', 'New Alamein festival was one of most challenging projects we had, as New Alamein city is one of the new fourth generation cities in Egypt and the brief was mainly to announce the launching of  the city. So we decided to do the announcement but in our own way . We created a line to be the big umbrella for the concept “العالم علمين”\r\n\r\n \r\n\r\nThe line was mainly to address that the whole world is inside the city, as the festival was very inclusive and gathered a lot of different activities from fashion to sports. Because we fell in love with the line, we decided not not just implement it in one copy, but three which were: the main copy, Tazkarti, and for Cris El Masry.', 'New alamien', 'on', '21/5/2025', '6', 'location', 2, NULL, 'New Alamein festival was one of most challenging projects we had, as New Alamein city is one of the new fourth generation cities in Egypt and the brief was mainly to announce the launching of&nbsp; the city. So we decided to do the announcement but in our own way . We created a line to be the big umbrella for the concept &ldquo;العالم علمين&rdquo; &nbsp; The line was mainly to address that the whole world is inside the city, as the festival was very inclusive and gathered a lot of different activities from fashion to sports. Because we fell in love with the line, we decided not not just implement it in one copy, but three which were: the main copy, Tazkarti, and for Cris El Masry.', 'https://player.vimeo.com/video/853727931?h=67ec2eac3a', NULL, NULL, NULL, NULL, 'new-alamien', '1', '2024-04-22 14:56:56', '2024-04-24 13:24:11'),
(24, 'Tagamal Bel Akhlaa’', 'projects/v8s7VAkLX69xsLo86PfV9cIe2WN4EXjbZZxVnqst.png', 'Hayah Karima is a well known organization for charity and donation,\r\n\r\nIn ramadan 2022, the brief was to show to public how this organization build a decent life for people  in countryside.\r\n\r\n \r\n\r\nOur strategy was to grab the attention given that we are in the most competitive month in the year, all brands are coming with TV copies.\r\n\r\nWe decided to take it to up level and produced a song featuring Amir Eid and showing the difference happened because of this charity organization.', 'Tagamal Bel Akhlaa’', 'on', '21/5/2025', '6', 'location', 2, NULL, 'Hayah Karima is a well known organization for charity and donation, In ramadan 2022, the brief was to show to public how this organization build a decent life for people&nbsp; in countryside. &nbsp; Our strategy was to grab the attention given that we are in the most competitive month in the year, all brands are coming with TV copies. We decided to take it to up level and produced a song featuring Amir Eid and showing the difference happened because of this charity organization.&nbsp;', 'https://player.vimeo.com/video/741436611?h=6cef84291a', NULL, NULL, NULL, NULL, 'tagamal-bel-akhlaa', '1', '2024-04-22 14:56:56', '2024-04-24 13:22:06'),
(25, 'tazkarti', 'projects/CaScv7UJFRMvDVDwKvjg2stRYkwDW5tdy1it1Oax.png', 'tazkarti', 'tazkarti', 'on', '21/5/2025', '6', 'location', 2, NULL, 'tazkarti', 'https://player.vimeo.com/video/852688900?h=fe9667afc4', NULL, NULL, NULL, NULL, 'tazkarti', '1', '2024-04-22 14:56:56', '2024-04-24 13:21:30'),
(26, 'World Youth Forum', 'projects/terchPIZBiEW6DDtyWo6PmaGL9QFC2KtARJ1VAlo.png', 'Back Together\r\n\r\nIs an international event that usually takes place every year in Sharm el Sheikh, Egypt, and its main objective is to gather all youth around the world with one goal: to discuss global issues and try to propose solutions.\r\n\r\nIn this event we produced the international main copy.', 'World Youth Forum', 'on', '21/5/2025', '6', 'location', 2, NULL, 'Back Together Is an international event that usually takes place every year in Sharm el Sheikh, Egypt, and its main objective is to gather all youth around the world with one goal: to discuss global issues and try to propose solutions. In this event we produced the international main copy.', 'https://player.vimeo.com/video/741438244?h=07ef45f52a', NULL, NULL, NULL, NULL, 'world-youth-forum', '1', '2024-04-22 14:56:56', '2024-04-24 13:19:17'),
(29, 'AIIB', 'projects/iVqnFhbxJ0MZiXHU2KbLmIDnGxmLlbddjeZE6C3W.png', 'AIIB Is a multilateral development bank whose mission is financing the Infrastructure with sustainability at its core. AIIB meets clients’ needs by unlocking new capital and investing in infrastructure that is green, technology-enabled and promotes regional connectivity.\r\n\r\nThe brand identity is built with an expandable strategy to be fledged on a wide variety of digital and on-ground visuals and to reflect the identity of the conference.', 'AIIB', 'on', '21/5/2025', '5', 'AIIB', 3, NULL, 'AIIB Is a multilateral development bank whose mission is financing the Infrastructure with sustainability at its core. AIIB meets clients&rsquo; needs by unlocking new capital and investing in infrastructure that is green, technology-enabled and promotes regional connectivity. &nbsp; The brand identity is built with an expandable strategy to be fledged on a wide variety of digital and on-ground visuals and to reflect the identity of the conference.', '', NULL, NULL, NULL, NULL, 'aiib', '1', '2024-04-22 16:30:22', '2024-04-24 13:35:25'),
(30, 'cairo summit for peace', 'projects/ozVDGt4UuAV1jZyqv6fG0oyPKEQso64ln6wIEYsF.png', 'The Cairo Summit for Peace stands as a beacon of hope and unity, calling upon nations from every corner of the globe to come together in pursuit of a common goal: peace. Rooted in the rich history and cultural tapestry of Cairo, this momentous event symbolizes a collective commitment to fostering understanding, dialogue, and reconciliation.', 'cairo summit for peace', 'on', '21/5/2025', '3', 'location', 1, NULL, 'The Cairo Summit for Peace stands as a beacon of hope and unity, calling upon nations from every corner of the globe to come together in pursuit of a common goal: peace. Rooted in the rich history and cultural tapestry of Cairo, this momentous event symbolizes a collective commitment to fostering understanding, dialogue, and reconciliation. &nbsp;', '', NULL, NULL, NULL, NULL, 'cairo-summit-for-peace', '1', '2024-04-22 16:32:31', '2024-04-24 13:33:39'),
(31, 'comesa', 'projects/Q9bDSniotrmCayg3WKEqfbK9GXuUMpFQlAUGNRFR.png', 'The 21st Summit of Heads of State of Government of the Common Market for Eastern and Southern Africa (COMESA) was held in November 2021 in the New Administrative Capital witnessing representatives of the 21 member countries.\r\nThe summit was held under the theme \"Building Resilience Through Strategic Digital Economic Integration\" and our branding and art direction aimed to highlight the bountiful resources that Africa possesses. Earthy colours were used inspired by the unique African vibes to give the final outcome.\r\nThe branding and art direction were transformed to elements of outdoor marketing, opening videos and video coverage of the summit.', 'comesa', 'on', '21/5/2025', '3', 'location', 1, NULL, 'The 21st Summit of Heads of State of Government of the Common Market for Eastern and Southern Africa (COMESA) was held in November 2021 in the New Administrative Capital witnessing representatives of the 21 member countries. The summit was held under the theme &quot;Building Resilience Through Strategic Digital Economic Integration&quot; and our branding and art direction aimed to highlight the bountiful resources that Africa possesses. Earthy colours were used inspired by the unique African vibes to give the final outcome. The branding and art direction were transformed to elements of outdoor marketing, opening videos and video coverage of the summit.', '', NULL, NULL, NULL, NULL, 'comesa', '1', '2024-04-22 16:34:21', '2024-04-24 13:32:34'),
(32, 'entlaq event', 'projects/txPgwiWN2yfPyVQXXMA0KEwvKL83s7PF8pozrjFR.png', 'entlaq event', 'entlaq event', 'on', '21/5/2025', '3', 'location', 1, NULL, 'entlaq event', '', NULL, NULL, NULL, NULL, 'entlaq-event', '1', '2024-04-22 16:35:58', '2024-04-24 13:30:16'),
(33, 'IMCE', 'projects/4UhruxjbcMuwXTcivzyvuK0eVOjyezMe2AHjulGG.png', 'IMCE  is considered one of the biggest industrial events organized by the Federation of Egyptian Industries. By its 1st edition came celebrating the centenary (100 years) of the FEI during October 2022, and the second edition took place in October 2023. Under the patronage and presence of His Excellency President Abdel Fattah El Sisi.\r\n\r\nThe team uplifted the previous edition’s logo and came up with a dynamic branding to reflect the ever-changing evolvement in industry and to create a flexible identity catering the different media of fledging for instance digital and on-ground visuals.', 'imce', 'on', '21/5/2025', '3', 'location', 3, NULL, 'IMCE&nbsp; is considered one of the biggest industrial events organized by the Federation of Egyptian Industries. By its 1st edition came celebrating the centenary (100 years) of the FEI during October 2022, and the second edition took place in October 2023. Under the patronage and presence of His Excellency President Abdel Fattah El Sisi. &nbsp; The team uplifted the previous edition&rsquo;s logo and came up with a dynamic branding to reflect the ever-changing evolvement in industry and to create a flexible identity catering the different media of fledging for instance digital and on-ground visuals.', '', NULL, NULL, NULL, NULL, 'imce', '1', '2024-04-22 16:37:20', '2024-04-24 13:28:20'),
(34, 'IPU', 'projects/AsoawVwBxpfupD6AlkXQpTD6fdsdM4D8ARWkHTaV.png', 'IPU serves as a dynamic platform for young parliamentarians to convene, collaborate, and catalyze meaningful action on the pressing issues of our time. From climate change and human rights to social justice and economic empowerment, IPU provides a forum for dialogue, debate, and decisive policymaking.', 'IPU', 'on', '21/5/2025', '3', 'location', 3, NULL, 'IPU serves as a dynamic platform for young parliamentarians to convene, collaborate, and catalyze meaningful action on the pressing issues of our time. From climate change and human rights to social justice and economic empowerment, IPU provides a forum for dialogue, debate, and decisive policymaking.', '', NULL, NULL, NULL, NULL, 'ipu', '1', '2024-04-22 16:38:17', '2024-04-24 13:27:06'),
(35, 'New Alamien Festival', 'projects/1yqdknkvA8BUnlARZImEkSafIf8LubG3BA3cuDwt.png', 'For its first edition, the team was briefed to create the visuals for the festival, both digital and on-ground. The art direction was created after the logo that was sent and the goal was to create a dynamic identity to match the festival’s lively essence and cater to the wide variety of visuals. The team worked on posters, bridge screen, key visuals for billboards and more.', 'new alamien', 'on', '21/5/2025', '3', 'location', 3, NULL, 'For its first edition, the team was briefed to create the visuals for the festival, both digital and on-ground. The art direction was created after the logo that was sent and the goal was to create a dynamic identity to match the festival&rsquo;s lively essence and cater to the wide variety of visuals. The team worked on posters, bridge screen, key visuals for billboards and more.', '', NULL, NULL, NULL, NULL, 'new-alamien-festival', '1', '2024-04-22 16:40:15', '2024-04-24 13:23:30'),
(36, 'World youth forum', 'projects/q3tnscjl1lLd8Sw3P4ZUkRKrBbChtYDIESMLIwby.png', 'The World Youth Forum 2021 comes back with a concept and a story after pausing through the pandemic. Connecting time and space, bridging where we were and where will we go. We needed to talk.. and we did.\r\n\r\nWe wanted to see more of you.. and we did We wanted to meet different civilizations.. and we did Suddenly, everything stopped. Facing a new challenge Where the world stood still. Facing the unpredictable.  There was silence.  Now we are back together Together we build Together we lead Together we create  And to innovate BACK TOGETHER', 'World youth forum', 'on', '21/5/2025', '3', 'location', 3, NULL, 'The World Youth Forum 2021 comes back with a concept and a story after pausing through the pandemic. Connecting time and space, bridging where we were and where will we go. We needed to talk.. and we did. &nbsp; We wanted to see more of you.. and we did We wanted to meet different civilizations.. and we did Suddenly, everything stopped. Facing a new challenge Where the world stood still. Facing the unpredictable.&nbsp; There was silence.&nbsp; Now we are back together Together we build Together we lead Together we create&nbsp; And to innovate BACK TOGETHER &nbsp;', '', NULL, NULL, NULL, NULL, 'world-youth-forum-1', '1', '2024-04-22 16:42:02', '2024-04-24 13:17:33'),
(37, 'hello', 'projects/BKoV42QST2dd7QbTu0xHf1v2DFrovP0rUXLTRRhV.png', 'ييييييييييييييييييييييييييييييي', 'يي', 'off', 'يييييييييييي', 'يييييي', 'ييي', 1, 0, 'ييييييييييييييييييييييي', '', NULL, NULL, NULL, NULL, 'hello', '1', '2024-06-23 08:54:13', '2024-06-23 08:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `projects_images`
--

CREATE TABLE `projects_images` (
  `id` bigint(20) NOT NULL,
  `img` varchar(500) NOT NULL,
  `project_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects_images`
--

INSERT INTO `projects_images` (`id`, `img`, `project_id`) VALUES
(1, 'projects/images/8NuRnWJm2Z8JKV5evDfZJixJKV9n57c1Ga97XpJ2.png', 1),
(2, 'projects/images/L9hAnT8dT7gRpg6fxhTCqPZTd0qO17e8YUlanggK.png', 1),
(3, 'projects/images/H5OxQoGwt0jEyyNKdfc49l0BELJrTFJKUiazhYzI.png', 1),
(4, 'projects/images/EFNF3q53mspWWRRWpQKuzDsBbcDCTRnNjJ5HncL2.png', 1),
(5, 'projects/images/460Ht178qhOd6JJ2swdyqGhhrU8mAomFFXfniSpM.png', 1),
(6, 'projects/images/iNuXfXaW70ekl1nYkNTzyGEbarPt7tKoefa0grXy.png', 1),
(7, 'projects/images/wooiXJZKXP4qhjzFqKTP2L295gz9bNBO5O5cSbBb.png', 1),
(8, 'projects/images/ovJren0Ha3IpeblfwZmEE5JFBEwJZezX8Uck9ByO.png', 1),
(9, 'projects/images/u2g6C9VNdi3RqCrGIQJJ59LHWgn5xZ70eqxkbnXq.jpg', 2),
(10, 'projects/images/PMAmnsdUi5BTFlRLTnLS7NXlqYpDN1jmRprSeRSL.jpg', 2),
(11, 'projects/images/zas7i2eGnDD6SprW4XE0tXkQQB1Uo0kcsrKmGYyn.jpg', 2),
(12, 'projects/images/A70lnIkD54dfuBZY1ymVGZUFdD6XNm05LSpbNOFR.jpg', 2),
(13, 'projects/images/Kw84YYBoUC4QjZ9j0uY6E5Hqva0STwruVsYGkOgB.jpg', 2),
(14, 'projects/images/ZJRFr3qh3DbBJtIQ98vcIavSCY9Ybgw8EvtcysOP.jpg', 2),
(15, 'projects/images/k2h8rxAJq9SCYpI40JwKKrGBLyKoHSIZ4X6pob9o.jpg', 2),
(16, 'projects/images/66O547QN8UXHQTGxtJeZYUgo2ulM8tE9NSyRTSgB.jpg', 2),
(17, 'projects/images/p8M3LEi8JxqZVdNTlaVNoiDCagcUwRkElRMeY2PP.jpg', 2),
(18, 'projects/images/Rc4jlCCjR8NTFQN7tUon5DGthoZbuM0LehfMdOih.jpg', 2),
(19, 'projects/images/4ADidKnhpKiOpSMvkSlbZrsb0H2TpE36FygkO0IY.jpg', 3),
(20, 'projects/images/v0AQbtJdx1wtlN1Mn52hza1ARNVBl6aDfL5wNQ3C.jpg', 3),
(21, 'projects/images/BOWIi7Y68vCH0vZfd2Cf25r4rP9squXR2MijsivB.jpg', 3),
(22, 'projects/images/8eu1mpsaDltw4oT4kF8ABYBumDdMjH2AnZarsONM.jpg', 3),
(23, 'projects/images/Mt6sLYWWieJei3FKwLlB5yxpNfR6xkwU5jpzx8tz.jpg', 3),
(24, 'projects/images/sWDZSIUnoGCJxFrKswBKo2T4kpa1KHYRXNyeXTvT.jpg', 4),
(25, 'projects/images/hnXsQceS23y3pW48Mnv3Y89VgRhEBppDUdfBPZeQ.jpg', 4),
(26, 'projects/images/K8L8yriubvBnzhAnokkEkI2oQUfpw6u9QefMidHz.jpg', 4),
(27, 'projects/images/Tct4jZ1yi90TynaYN5THIbxRQplER2PSCNSPS2Uq.jpg', 4),
(28, 'projects/images/o5OOFlqbEaoc1YR9BtC3MwdzNZb1wJnbsIyGamYA.jpg', 4),
(29, 'projects/images/qxJRzIxmzoxNhrydPNoecFwY129AG19gJhxQqP5o.jpg', 4),
(30, 'projects/images/KyqNuAfi8h1t0PrrmO0m0s8r3nNpoNvl7jpER69o.jpg', 4),
(31, 'projects/images/OTwpdXWODJQ9trErXMvH2T6U2IcVA7xNYGKm6agb.jpg', 4),
(40, 'projects/images/L0kHGu4wNLPph3L1pl4TBa0KKmdyhgll9MYrH1Jl.png', 5),
(41, 'projects/images/2OukVIwYHZwIQRloGOPzQY1joocuW4tRyAhBMb3s.png', 5),
(42, 'projects/images/0UMFFEh8SzRJuFYmVABxZszVlK4RHpNmdeAKupm4.png', 5),
(43, 'projects/images/tWwwrIvFfaxEuNxKbeltEvsCYCHaJX9bMGkJJ5dg.png', 5),
(44, 'projects/images/QEAEnEas4Av9PypMsWgreL3YDU2yXgmjgJhjgqqe.png', 5),
(45, 'projects/images/vBGlDBc1vNi55O7UkmUo84hQhdN6bje93PJF0fPF.png', 5),
(46, 'projects/images/ichkWhzdScOYL2WoI1Z0NNp2KiN7dZGxDJSZymkl.png', 5),
(47, 'projects/images/tLpOFp3Pg5NxxQiLl22mEkfwUiY2ReetRZfD3kng.jpg', 6),
(48, 'projects/images/B0wdDtOnA1MCt8TivNO3UrV5WQx7ZEn0byuTRcgS.jpg', 6),
(49, 'projects/images/4Y42Oz1oivgTHJI9Os8PK8KUsnSnkzHZAOT3f7Ck.jpg', 6),
(50, 'projects/images/Cqwlejh3gBuPw3j9ZmYvYSQuU0tc41sTZHHf3UM1.jpg', 6),
(51, 'projects/images/YXuBpHGpWL8T3ozsYTXOxHdWqMl2ojLNSWrHH3dB.jpg', 6),
(52, 'projects/images/cSefwNxYoxdP5rR66NjRG1sOT0m5XsAtECZDGIgF.jpg', 6),
(53, 'projects/images/Me5y3uxRoaJRwjlIuqBe8UYBtn1neGgKS5kSGB56.jpg', 7),
(54, 'projects/images/bXjKMlCdYEQhVKouQtKgg8rfETGLynQ1jh8Li1lF.jpg', 7),
(55, 'projects/images/dQRlyYNgfRF5FfhHlD3hTIo5szEidFzmexzhDcJH.jpg', 7),
(56, 'projects/images/jtR49dA7aD86UO8Uh93rJZyVtCYtv3XEeYS9XFEn.jpg', 7),
(57, 'projects/images/R7CY5RlIVy9PaB94NqYBJwsWiSEYorLlcw69F2gR.jpg', 7),
(58, 'projects/images/Lnj3gRFLqdYBAz6ezn2FME2PhdQwW4lwbGZYGabR.jpg', 7),
(59, 'projects/images/UbUahDTLuta1SPNxvPzvrL5KRzfIuvahwle5QtBm.jpg', 7),
(60, 'projects/images/jUavplCiUa2vkCxkxgLrgIezg5bGe0KLMdk9wP2S.jpg', 7),
(61, 'projects/images/whBBYc4drIKLMnFfOPH0LzQWDKFM81tu2tY1Ebre.jpg', 8),
(62, 'projects/images/SuwyLdz6LSfL5s78jiLsQ2emERlbm75p4SkYKgns.jpg', 8),
(63, 'projects/images/ycXVxAit7VtTOPYNNDDE907kl8EiKWtTi9iBHTz8.jpg', 8),
(64, 'projects/images/P8jNnqIbtDUfFb6qFEDzVXvTbfMNWPgeBZoFuDt8.jpg', 8),
(65, 'projects/images/CYpgc8Q7ioEHaXVunI2GrgPcmgQ5zetwstXVSJoo.png', 8),
(66, 'projects/images/0CJvvajL80QxxELa06uSmgYrvCttLdKopwOkg1w7.png', 8),
(67, 'projects/images/OqMPtPYV7aOOvmhnXH6UaTXzN2mcBYlgh1JspLga.png', 8),
(68, 'projects/images/6FdXxlPsyaLmN5MFi8I5TzIM8IL2sgPrr4v4TnPP.jpg', 9),
(69, 'projects/images/6jLfBX1LkVSwwgZ4YIeLvvmfU0mKs4X5mg6b3lab.jpg', 9),
(70, 'projects/images/yZjwTEDCtcn0CWGjglDl25rOFa2DXGpZohSybJ2b.jpg', 9),
(71, 'projects/images/J3eYO2OSwHEGwQoYdqXdDcBbFLQAHcaDpaOq8tG5.jpg', 9),
(72, 'projects/images/jF87KvtCicUCD4MtDFHny7zsndPpAgq9rRhx625u.jpg', 9),
(73, 'projects/images/IVFoYTDrP7zBua4fH2O3Y7QPcfQet5bHAQixVyhJ.jpg', 9),
(74, 'projects/images/pTsuozr73mmvhdCnQCCSLdarfqHL4fSaIjvvm8Zr.jpg', 9),
(75, 'projects/images/JpiDU13pyeviCTugjo12L6YEzgbhzVienuojKcJy.jpg', 10),
(76, 'projects/images/o5G5P7rYX5fuuwxuQVGTkZ7gv7nH6EuZUKnHMOdS.jpg', 10),
(77, 'projects/images/gZ4EpfNiaOpAyI4DZPdQ7LvNMf8ZidOSYLRS9uhf.jpg', 10),
(78, 'projects/images/ci0hBqjquo79UVxWhFqNAM4EHk84dViXOVskAnsP.jpg', 10),
(79, 'projects/images/o72uDxQefFWPr2PP4eVTqL07loFJ0H2SpGRBOLiW.jpg', 10),
(80, 'projects/images/5iZtU1NljD5vNYqlQRrqnjVuAxHajwYJPJryLrcb.jpg', 10),
(81, 'projects/images/WBp4hDVKBjfNCd1J1ulsJHzZexsh0JZ14SSw6gwn.jpg', 29),
(82, 'projects/images/ks537Y0iP5UZ7WjVOXauyDpGnk9ygRDC2WW9Pj6W.jpg', 29),
(83, 'projects/images/pqOwMzd47cDs0WkrYTcPCfwvos0xZE72VLYNMHqw.jpg', 29),
(84, 'projects/images/SAjqGILe90JzQmYJjvFIBU2tCpYH0PNRBSk51TUe.jpg', 29),
(85, 'projects/images/XZs8wNuYEiduVTaoulCw9yOXRNH2muY0UvtbRpnc.jpg', 29),
(86, 'projects/images/oVy7yXAb1tK7mQrL7QWeYyaIalvLQ3ph2Rc4XAnx.jpg', 29),
(87, 'projects/images/HAdVlA7NkOI8EIl0cBO68GTSywaQPVNMNMCowfK5.jpg', 29),
(88, 'projects/images/110nvTDcQAeqI509vdU2jn32omIU1TE3xxieAc7v.jpg', 29),
(89, 'projects/images/ys9Gw0wsddLxaj4fKxK7JL3qfHQsBWqn0Cqc9Xpb.jpg', 30),
(90, 'projects/images/WX9rk0M8Bpj25c1UVOod6PXkduYt4E6VPS9f8KZq.jpg', 30),
(91, 'projects/images/uKKAxlhJPUm6gwC0suUPK0JrEXcNOxAAKdxqfKWE.jpg', 30),
(92, 'projects/images/MZDQBzG5kqzdDNkw5E65M1tk3O3C5MXxPz4aIQiZ.jpg', 30),
(93, 'projects/images/wwL97nSF9Sv2FchNhjG7OalpAdPoVi5uT1AqXhaK.jpg', 30),
(94, 'projects/images/0lM3dH2gWrqjfvrs0gqwVaOehYEXYmn9QsXFJxcT.jpg', 30),
(95, 'projects/images/RPPOELqhX8RtH0DpNJhxAVl5QCZ89NrOLKDWnlbW.jpg', 30),
(96, 'projects/images/WeoEJ1QX2dCOD2V05EcIZTW8YmfCVjXez26VNEa8.jpg', 30),
(97, 'projects/images/GHzNhBoDXKu3p69r2e7bSMCmO2JLLRrvDlTybbGk.jpg', 30),
(98, 'projects/images/VpC19mEe3JtKgrFtSV1NQZLaO9R1oV5N2ADwspe5.jpg', 30),
(99, 'projects/images/I3NrXCPGGyBzZBNuB3zpBisckJnRe1uWSzHqdIc2.jpg', 30),
(100, 'projects/images/DvmS6iF43C6FmOOxRrzKjLUu8e7OVOyXN8zKF8jm.jpg', 31),
(101, 'projects/images/ElTNxIT33XAl0oh1AxInH8JmI5TJhxbniFlkXc6m.jpg', 31),
(102, 'projects/images/hCvi5T5Vprw7J8XFW1JW4pbDtwuUnVJm7GjJMnM9.jpg', 31),
(103, 'projects/images/EvXdBywiQE68ChLDWmOAcPECbBwesqSdAo9tuwHN.jpg', 31),
(104, 'projects/images/fV1gQZ4xyuKBKKydifQTeEJRqsZg5o6BlID5isCp.png', 31),
(105, 'projects/images/ThH1jE6luXmrhonD0QCWSfBSSeOYnnv2aXf3Mvta.png', 31),
(106, 'projects/images/mjXml0sIjQcMlbCe4NTRufoefi6NsFo8idQo8LS0.png', 31),
(107, 'projects/images/bMaS4nokjdRGQW1qTy6YSrifeo4KYJPRqdELyM7F.png', 31),
(108, 'projects/images/jnDQr1FV7p2OLZNFmo8IpdpCqpgdtU6Qsv9K6WsA.png', 32),
(109, 'projects/images/Np5zPSKBYDdy6dlmigxEaZvWyYJZX3E5Ra0DniVV.png', 32),
(110, 'projects/images/IyZhAAIeQTbyzrC12DkHaihr8y0LR7ZxIDgCYHYY.png', 32),
(111, 'projects/images/Kc64nhVmpShA0VAHhtx3G6dNIKB28ltRA8DVXeaG.png', 32),
(112, 'projects/images/XBUIGDLhBYYqdk996C77lQKyyZzed2eiuTXWpd4H.png', 32),
(113, 'projects/images/voq5uueS746Q5Bp10ZJMLYsBL9quVASZdEHjxGsI.png', 32),
(114, 'projects/images/VGJPkZY6BfH3W4N3gHvQSljx70bqxzbBiZLQGz1r.png', 32),
(115, 'projects/images/9Px7qWA84xF4y32fxCYBq3MaoZDR4DOQEB0cSoBt.png', 32),
(116, 'projects/images/Mnpqvp4Cmm91jrkmObh2zPNI8TVXu0Cfyh7Ye6aC.png', 32),
(117, 'projects/images/BWkNa0bkHCx5p6FDYI51xmsECz2HI9p9XrgrDMDq.jpg', 33),
(118, 'projects/images/rh6IjoWteQorWbh49YUtSwkhxTWVqfynomGxqyo9.jpg', 33),
(119, 'projects/images/ovyrzcl876LLABPho5SRyDEAnp6gAokcyKVTcT2v.jpg', 33),
(120, 'projects/images/zWErQhBb3wmO6nqWFn2jU20qCTf1mVg45Hd7mjoK.jpg', 33),
(121, 'projects/images/oj2ZdQyzaQDJCAj5xmDFirgJiNg6a1Z0RM53X9C7.jpg', 33),
(122, 'projects/images/6zZIQS2PJ6xFdAsLBwbgTtQcgpcEfYf9sA7QIL5W.jpg', 33),
(123, 'projects/images/1tOETz5sK1SRMKWacbc71x6e95g73d1zlFhtYXpl.jpg', 33),
(124, 'projects/images/iiRVZ6RVwZGqD80AeIGthmFAC1Bgho2gNGl7nixf.jpg', 33),
(125, 'projects/images/cfOKw6jHxx0p7Vt5iBQEKXezkxHcTA288DMLgnMH.jpg', 34),
(126, 'projects/images/v0puTk2saOPhZ5eG6s6Qa5tUzB26lFDoOTieWhiE.jpg', 34),
(127, 'projects/images/QbQH0DoBrw4RfNdXpQkWKVJxHqMous6DkXZVCbis.jpg', 34),
(128, 'projects/images/cT6PgKTXrUJcSDtSGa6xlnfdNJK9nLATimxlVCe0.jpg', 34),
(129, 'projects/images/4lyeB9lDjGaxCaSwg0xrIF1H698xNLZiXl3ppSRA.jpg', 34),
(130, 'projects/images/Tp6T0Nnxa7o6uaTOgk650kzrAK8MTLhpqL2YrLAE.jpg', 34),
(131, 'projects/images/Dm2VKBreWq4tReWwUTL08tUhXKrSR19N6cByyvBZ.jpg', 35),
(132, 'projects/images/X741k9AJwYWNv1lGpiMDUMKsnm4sByIGjZd0lgBP.jpg', 35),
(133, 'projects/images/iZ13zujS6BZ4IR0ahZXyLDQeH7Ug9Lx4lnlh70ns.jpg', 35),
(134, 'projects/images/V5UKPgx1F53xVXgCwEUs8kLb777pHvEzdPvvFPFj.jpg', 35),
(135, 'projects/images/tYFqoDcFZNFYRyY529k8KookO37KjjvE6BmIuH8f.jpg', 35),
(136, 'projects/images/oN1CV2yeLiECh7PZos0JVT5zESvZHTm5f0bhNoJi.jpg', 35),
(137, 'projects/images/qurb86XidbxgUEKF6UYMkXnN3qisW70I8FkusUPF.jpg', 36),
(138, 'projects/images/c93Tur4ZL59GWxRv3EHtAnjqx3GZjGqplwUPRUm1.jpg', 36),
(139, 'projects/images/DUn1HgqpTG6T0ucDtv56yOgKLcRta1OgwdVuIcuj.jpg', 36),
(140, 'projects/images/3MZMjmOQtkYXm0yQ5Ue0Ax77rhnoZgx8Dle66Psu.jpg', 36),
(141, 'projects/images/aRg8M4lQe1ALqW5WqWjbQ4CMd1Bjfcubt1gHkrPd.jpg', 36),
(142, 'projects/images/TSXqY9NDRzsFU0nIjcCpl1bIUQpUdwBp77jwDhpp.jpg', 36);

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Branding Projects', 1, '2024-01-22 22:50:51', '2024-04-22 14:39:26'),
(2, 'TV ADS', 0, '2024-04-18 09:23:29', '2024-07-06 12:23:03'),
(3, 'Events', 1, '2024-04-22 14:40:02', '2024-04-22 14:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(2, 'User', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(3, 'Avaweg', 'web', '2024-02-18 16:03:33', '2024-02-18 16:03:33'),
(4, 'sub_user', 'web', '2024-06-23 08:59:59', '2024-06-23 08:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(6, 1),
(6, 4),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(14, 4),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(75, 1),
(75, 4),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(100, 4),
(101, 1),
(101, 4),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(108, 4),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'app_name', 'DS+'),
(2, 'app_logo', 'app-logo/app-logo.png'),
(3, 'app_small_logo', 'app-logo/app-small-logo.png'),
(4, 'favicon_logo', 'app-logo/app-favicon-logo.png'),
(5, 'default_language', 'en'),
(6, 'color', 'theme-1'),
(7, 'app_dark_logo', 'app-logo/app-dark-logo.png'),
(8, 'storage_type', 'local'),
(9, 'date_format', 'M j, Y'),
(10, 'time_format', 'g:i A'),
(11, 'roles', 'User'),
(12, 'google_calendar_enable', 'off'),
(13, 'captcha_enable', 'off'),
(14, 'transparent_layout', 'off'),
(15, 'dark_mode', NULL),
(16, 'meta_image', '0'),
(17, 'document_theme1', 'document-theme/Stisla.png'),
(18, 'document_theme2', 'document-theme/Editor.png'),
(19, 'app_setting_status', 'on'),
(20, 'menu_setting_status', 'on'),
(21, 'feature_setting_status', 'on'),
(22, 'faq_setting_status', 'on'),
(23, 'testimonial_setting_status', 'on'),
(24, 'sidefeature_setting_status', 'on'),
(25, 'landing_page', '1'),
(26, 'apps_setting_enable', 'on'),
(27, 'apps_name', 'DS+'),
(28, 'apps_bold_name', 'DS+'),
(29, 'app_detail', 'DS+'),
(30, 'apps_image', 'landing-page/app/app.png'),
(31, 'apps_multiple_image_setting', '[{\"apps_multiple_image\":\"landing-page\\/app\\/1706059141_image.psd(15).png\"}]'),
(32, 'feature_setting_enable', 'off'),
(33, 'feature_name', 'Features'),
(34, 'feature_bold_name', 'Features'),
(35, 'feature_detail', 'test'),
(36, 'feature_setting', '[\n                                                        {\"feature_image\":\"seeder-images/active.svg\",\"feature_name\":\"Email Notification\",\"feature_bold_name\":\"On From Submit\",\"feature_detail\":\"You can send a notification email to someone in your organization when a contact submits a form. You can use this type of form processing step so that...\"},\n                                                        {\"feature_image\":\"seeder-images/security.svg\",\"feature_name\":\"Two Factor\",\"feature_bold_name\":\"Authentication\",\"feature_detail\":\"Security is our priority. With our robust two-factor authentication (2FA) feature, you can add an extra layer of protection to your Prime Laravel Form\"},\n                                                        {\"feature_image\":\"seeder-images/secretary.svg\",\"feature_name\":\"Multi Users With\",\"feature_bold_name\":\"Role & permission\",\"feature_detail\":\"Assign roles and permissions to different users based on their responsibilities and requirements. Admins can manage user accounts, define access level\"},\n                                                        {\"feature_image\":\"seeder-images/documents.svg\",\"feature_name\":\"Document builder\",\"feature_bold_name\":\"Easy and fast\",\"feature_detail\":\"Template Library: Offer a selection of pre-designed templates for various document types (e.g., contracts, reports).Template Creation: Allow users to create custom templates with placeholders for dynamic content.\\r\\n\\r\\nTemplate Library: Offer a selection of pre-designed templates for various document types (e.g., contracts, reports).Template Creation: Allow users to create custom templates with placeholders for dynamic content.\"}]'),
(37, 'menu_setting_section1_enable', 'on'),
(38, 'menu_image_section1', 'landing-page/menu/menusection1.png'),
(39, 'menu_name_section1', 'Hello we are, DS+'),
(40, 'menu_bold_name_section1', 'DS Team'),
(41, 'menu_detail_section1', 'Discover the new dimension with DS+! We focus on delivering exceptional experiences and effective communication. Join us and be part of the journey towards excellence, where creativity meets innovation.\r\nDiscover the new dimension with DS+! We focus on delivering exceptional experiences and effective communication. Join us and be part of the journey towards excellence, where creativity meets innovation.'),
(42, 'menu_setting_section2_enable', 'on'),
(43, 'menu_image_section2', 'landing-page/menu/menusection12.jpg'),
(44, 'menu_name_section2', 'Branding'),
(45, 'menu_bold_name_section2', 'Innovative Branding Solutions: Crafting Memorable Identities'),
(46, 'menu_detail_section2', '\"Branding projects are the canvas where identity, creativity, and strategic vision converge to craft compelling narratives that resonate with audiences and leave a lasting impression.\"\r\n\r\nAn example of our work: Rooted in a commitment to diversity, inclusivity, and ethical journalism, United Media Academy serves as a vibrant hub where individuals from all backgrounds can come together to learn, collaborate, and grow. Our faculty comprises industry experts, seasoned journalists, filmmakers, and media practitioners who are passionate about mentoring the next wave of talent and instilling in them the values of integrity, professionalism, and social responsibility'),
(47, 'menu_setting_section3_enable', 'on'),
(48, 'menu_image_section3', 'landing-page/menu/menusection13.jpg'),
(49, 'menu_name_section3', 'TV ADS'),
(50, 'menu_bold_name_section3', '#'),
(51, 'menu_detail_section3', 'Thanks to its exceptional professionalism and extensive experience, DS Company stands out as a leader in the television advertising creation industry, offering innovative and advanced solutions that reflect excellence and quality.'),
(52, 'business_growth_setting_enable', 'off'),
(53, 'business_growth_front_image', 'seeder-images/10.png'),
(54, 'business_growth_video', 'seeder-images/Dashboard _ Prime Laravel Form Builder.mp4'),
(55, 'business_growth_name', 'Business Growth'),
(56, 'business_growth_bold_name', 'Business Growth'),
(57, 'business_growth_detail', 'Offer unique products, services, or solutions that stand out in the market. Innovation and differentiation can attract customers and give you a competitive edge.'),
(58, 'business_growth_view_setting', '[{\"business_growth_view_name\":\"Positive Reviews\",\"business_growth_view_amount\":\"20 k+\"},{\"business_growth_view_name\":\"Total Sales\",\"business_growth_view_amount\":\"300 +\"},{\"business_growth_view_name\":\"Happy Users\",\"business_growth_view_amount\":\"100 k+\"}]'),
(59, 'business_growth_setting', '{\"1\":{\"business_growth_title\":\"Products Analytic\"},\"2\":{\"business_growth_title\":\"Manufacturers\"},\"3\":{\"business_growth_title\":\"Order Status Tracking\"},\"4\":{\"business_growth_title\":\"Supply Chain\"},\"5\":{\"business_growth_title\":\"Chatting Features\"},\"6\":{\"business_growth_title\":\"Workflows\"},\"7\":{\"business_growth_title\":\"Transformation\"},\"8\":{\"business_growth_title\":\"Easy Payout\"},\"9\":{\"business_growth_title\":\"Data Adjustment\"},\"10\":{\"business_growth_title\":\"Order Status Tracking\"},\"11\":{\"business_growth_title\":\"Store Swap Link\"},\"12\":{\"business_growth_title\":\"Manufacturers\"},\"13\":{\"business_growth_title\":\"Order Status Tracking\"},\"14\":{\"business_growth_title\":\"ggggg\"}}'),
(60, 'form_setting_enable', 'on'),
(61, 'form_name', 'Survey Form'),
(62, 'form_detail', 'Prime Laravel Form Builder is software for creating automated systems, you can create your own forms without writing a line of code. you have only to use the Drag & Drop to build your form and start using it.'),
(63, 'faq_setting_enable', 'off'),
(64, 'faq_name', 'FAQ'),
(65, 'blog_setting_enable', 'on'),
(66, 'blog_name', 'Latest News'),
(67, 'blog_detail', 'Latest and greatest post'),
(68, 'start_view_setting_enable', 'off'),
(69, 'start_view_name', 'اسم مشاهدة البداية'),
(70, 'start_view_detail', 'تفاصيل بدء المشاهدة'),
(71, 'start_view_link_name', 'Contact US'),
(72, 'start_view_link', '#'),
(73, 'start_view_image', 'seeder-images//11.png'),
(74, 'footer_setting_enable', 'on'),
(75, 'footer_description', 'إستجابةً لاحتياجات السيدات المترددات على الجمعية للحصول على الخدمات المختلفة قررت الجمعية العامة تبني قضية نبذ العنف الواقع عليهن سواء فى إطار العائلة او الشارع او المجتمع عموما والذي اتضح وتكشفت معالمه من خلال مجموعات النقاش البؤرية التي أجرتها الجمعية معهن'),
(76, 'rtl', '0'),
(77, '2fa', '0'),
(78, 'register', '0'),
(79, 'gtag', ''),
(80, 'email_verification', '0'),
(81, 'sms_verification', '0'),
(86, 'menu_button_title_section1', 'About us'),
(87, 'menu_button_url_section1', '#'),
(88, 'menu_button_title_section2', 'Learn More'),
(89, 'menu_button_url_section2', '#'),
(90, 'menu_button_title_section3', 'More advertisements'),
(91, 'menu_button_url_section3', '#'),
(92, 'seo_setting', 'on'),
(93, 'meta_title', 'DS+'),
(94, 'meta_keywords', 'DS+'),
(95, 'meta_description', 'DS+'),
(96, 'slider_setting_section1_enable', 'on'),
(97, 'slider_name_section1', 'Stay Connected'),
(98, 'slider_bold_name_section1', 'Stay Connected'),
(99, 'slider_detail_section1', 'Stay Connected'),
(100, 'slider_button_title_section1', 'View'),
(101, 'slider_button_url_section1', '#'),
(102, 'slider_image_section1', 'landing-page/slider/slidersection1.png'),
(103, 'project_setting_enable', 'off'),
(104, 'project_name', 'Projects'),
(105, 'project_detail', '\"جرت العادة أن تكون الحياة مليئة بالتحديات والتجارب. تعلمنا أن نواجهها بكل شجاعة وثقة. نحن نسعى دائماً لتحقيق النجاح والنمو الشخصي. الثقة والإيمان بالنفس يمكنهما أن يكونا المفتاح لتحقيق الطموحات والأحلام.\"'),
(106, 'testimonial_setting_enable', 'on'),
(107, 'testimonialg_setting_enable', 'on'),
(108, 'testimonial_name', 'Feedback from our clients.'),
(109, 'testimonial_detail', NULL),
(110, 'contactus_setting_enable', 'on'),
(111, 'contact_email', 'info@dsplus-eg.com'),
(112, 'contact_address', '141, Aly Ahmed El Gretly, District 3, East Academy 11865'),
(113, 'contact_phone1', '+20123456789'),
(114, 'contact_phone2', '+20123456789'),
(115, 'contact_facebook', 'https://web.facebook.com/DSPLUSEG'),
(116, 'contact_twitter', 'https://www.facebook.com/DSPLUSEG/'),
(117, 'contact_instagram', 'https://www.instagram.com/dspluseg/'),
(118, 'contact_youtube', '⁠https://www.youtube.com/@DSPLUSEG'),
(119, 'contact_linkedin', 'https://www.linkedin.com/company/dsplus-eg/'),
(120, 'latitude', '30.044695611218746'),
(121, 'longitude', '31.439352222850143'),
(122, 'slider_setting_section3_enable', 'off'),
(123, 'slider_setting_section2_enable', 'off'),
(124, 'slider_name_section2', 'Production'),
(125, 'slider_bold_name_section2', 'Maliha'),
(126, 'slider_detail_section2', 'Coming soon in Ramadan in collaboration with United Company'),
(127, 'slider_button_title_section2', 'view'),
(128, 'slider_button_url_section2', '#'),
(129, 'slider_image_section2', 'landing-page/slider/slidersection12.png'),
(130, 'slider_name_section3', 'events'),
(131, 'slider_bold_name_section3', 'New Suhag'),
(132, 'slider_detail_section3', 'We’re so proud of planning, producing and managing such a huge event with the presence of H.E. President Abdel Fattah El Sisi in New Suhag and Om Douma Village.'),
(133, 'slider_button_title_section3', 'view'),
(134, 'slider_button_url_section3', 'view'),
(135, 'slider_image_section3', 'landing-page/slider/slidersection13.png'),
(136, 'contact_city1', 'fIfth settlement'),
(137, 'contact_city2', 'misr el gdeda'),
(138, 'contact_address2', '141, Aly Ahmed El Gretly, District 3, East Academy 11865'),
(139, 'joinus_setting_enable', 'on'),
(140, 'feature1', NULL),
(141, 'feature2', NULL),
(142, 'feature3', NULL),
(143, 'feature4', NULL),
(144, 'feature5', NULL),
(145, 'feature6', NULL),
(146, 'joinus_text', 'We build brands designed to transform business, customer, and employee experiences.'),
(147, 'joinus_feature1', '2d motion designers'),
(148, 'joinus_feature2', 'art directior'),
(149, 'joinus_feature3', 'senior graphic designer'),
(150, 'joinus_feature4', 'strategIst'),
(151, 'joinus_feature5', '3d motion designer'),
(152, 'joinus_feature6', 'typographer'),
(153, 'contact_text', '200 minds, 7 locatIons, one team'),
(154, 'google_map_enable', 'on'),
(155, 'google_map_api', 'd8ad9ad9ad'),
(156, 'joinus_feature7', 'finalizer'),
(157, 'joinus_feature8', 'video editor'),
(158, 'who_we_are_link', 'https://www.youtube.com/embed/0bjRD_FTUkE?si=2YDgWlJjy-kZu0tE');

-- --------------------------------------------------------

--
-- Table structure for table `sms_templates`
--

CREATE TABLE `sms_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event` varchar(255) NOT NULL,
  `template` text DEFAULT NULL,
  `variables` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms_templates`
--

INSERT INTO `sms_templates` (`id`, `event`, `template`, `variables`, `created_at`, `updated_at`) VALUES
(1, 'verification code sms', 'Hello :name, Your verification code is :code', 'name,code', '2024-01-22 00:14:06', '2024-01-22 00:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `social_logins`
--

CREATE TABLE `social_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_type` varchar(255) DEFAULT NULL,
  `social_id` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rating` double(10,1) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `title`, `desc`, `designation`, `image`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Mohamed Salama', 'hello', '{\"en\":\"company\",\"ar\":\"هذه الشركة محترمة\"}', 'ss', 'testimonials/MFUXBsW4w1hg60lxEKuSR7a6iN2ieY7oiL7Uta9T.jpg', 5.0, '0', '2024-07-06 12:37:29', '2024-07-06 12:39:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar/avatar.png',
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL DEFAULT 'India',
  `messenger_color` varchar(255) NOT NULL DEFAULT '#2180f3',
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `country_code` varchar(255) DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `dark_layout` tinyint(1) NOT NULL DEFAULT 0,
  `rtl_layout` tinyint(1) NOT NULL DEFAULT 0,
  `transprent_layout` tinyint(1) NOT NULL DEFAULT 1,
  `theme_color` varchar(255) NOT NULL DEFAULT 'theme-2',
  `users_grid_view` tinyint(1) NOT NULL DEFAULT 0,
  `forms_grid_view` tinyint(1) NOT NULL DEFAULT 0,
  `phone` varchar(255) DEFAULT NULL,
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `lang` varchar(255) DEFAULT NULL,
  `social_type` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `avatar`, `address`, `country`, `messenger_color`, `active_status`, `country_code`, `phone_verified_at`, `dark_layout`, `rtl_layout`, `transprent_layout`, `theme_color`, `users_grid_view`, `forms_grid_view`, `phone`, `dark_mode`, `lang`, `social_type`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 'Admin', '2024-01-22 00:14:05', '$2y$12$tWPVu0dJ1z1JuqoN4rvXGOj3tMLWXGAyPHYhLsGKRzb8rWmEXRubO', NULL, 'avatar/1706198398.png', NULL, 'India', '#2180f3', 1, NULL, '2024-01-22 00:14:05', 0, 0, 0, 'theme-1', 0, 0, NULL, 0, 'ar', NULL, NULL, '2024-01-22 00:14:05', '2024-07-04 08:55:11'),
(2, 'Admin', 'admin2@admin.com', 'Admin', '2024-01-21 22:14:05', '$2y$12$tWPVu0dJ1z1JuqoN4rvXGOj3tMLWXGAyPHYhLsGKRzb8rWmEXRubO', NULL, 'avatar/1706198398.png', NULL, 'India', '#2180f3', 1, NULL, '2024-01-21 22:14:05', 0, 0, 0, 'theme-1', 0, 0, NULL, 0, 'en', NULL, NULL, '2024-01-21 22:14:05', '2024-06-20 06:55:31'),
(5, 'Mohamed Salama Mousa Mohamed', 'slamtm608@gmail.com', 'Avaweg', '2024-06-23 08:57:51', '$2y$10$QDWouIXTLUTZJ6baf7kw3.9iYJGA7sC8fTkuDcbZzMhvKVGgglbxi', NULL, 'avatar/avatar.png', NULL, 'India', '#2180f3', 1, '20', '2024-06-23 08:57:51', 0, 0, 1, 'theme-2', 0, 0, '01094182099', 0, 'en', NULL, 1, '2024-06-23 08:57:51', '2024-06-23 08:57:51'),
(6, 'Mohamed', 'ms5261373@gmail.com', 'sub_user', '2024-06-23 09:01:29', '$2y$10$8u1/K4KUXson5TitOMHwxOhpBlIzoCbcms9IIca6ydSQ.Ane3scyu', NULL, 'avatar/avatar.png', NULL, 'India', '#2180f3', 1, '93', '2024-06-23 09:01:29', 0, 0, 1, 'theme-2', 0, 0, '01094182099', 0, 'en', NULL, 1, '2024-06-23 09:01:29', '2024-06-23 09:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `users_origin`
--

CREATE TABLE `users_origin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar/avatar.png',
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL DEFAULT 'India',
  `messenger_color` varchar(255) NOT NULL DEFAULT '#2180f3',
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `country_code` varchar(255) DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `dark_layout` tinyint(1) NOT NULL DEFAULT 0,
  `rtl_layout` tinyint(1) NOT NULL DEFAULT 0,
  `transprent_layout` tinyint(1) NOT NULL DEFAULT 1,
  `theme_color` varchar(255) NOT NULL DEFAULT 'theme-2',
  `users_grid_view` tinyint(1) NOT NULL DEFAULT 0,
  `forms_grid_view` tinyint(1) NOT NULL DEFAULT 0,
  `phone` varchar(255) DEFAULT NULL,
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `lang` varchar(255) DEFAULT NULL,
  `social_type` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_origin`
--

INSERT INTO `users_origin` (`id`, `name`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `avatar`, `address`, `country`, `messenger_color`, `active_status`, `country_code`, `phone_verified_at`, `dark_layout`, `rtl_layout`, `transprent_layout`, `theme_color`, `users_grid_view`, `forms_grid_view`, `phone`, `dark_mode`, `lang`, `social_type`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', 'Admin', '2024-01-22 00:14:05', '$2y$10$yIUrK0VHWzO6UhSFHvkJEuLmCjvdGtgNuZDciTDkSPt7o5QHxb5yG', NULL, 'avatar/1706198398.png', NULL, 'India', '#2180f3', 1, NULL, '2024-01-22 00:14:05', 0, 0, 0, 'theme-1', 0, 0, NULL, 0, 'en', NULL, NULL, '2024-01-22 00:14:05', '2024-03-01 10:57:22'),
(4, 'Admin', 'avaw.egypt@gmail.com', 'Avaweg', '2024-02-18 15:54:46', '$2y$10$Y/YiUpztV867lAe1df8o0.TFNLI3HpN5PNLK24VzF19S/NwX4Ixvy', NULL, 'avatar/avatar.png', NULL, 'India', '#2180f3', 1, '20', '2024-02-18 15:54:46', 0, 0, 1, 'theme-2', 0, 0, '123456789', 0, 'ar', NULL, 1, '2024-02-18 15:54:46', '2024-02-18 16:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `user_codes`
--

CREATE TABLE `user_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_forms`
--

CREATE TABLE `user_forms` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `form_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_forms_roles`
--
ALTER TABLE `assign_forms_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assign_forms_roles_form_id_index` (`form_id`),
  ADD KEY `assign_forms_roles_role_id_index` (`role_id`);

--
-- Indexes for table `assign_forms_users`
--
ALTER TABLE `assign_forms_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assign_forms_users_form_id_index` (`form_id`),
  ADD KEY `assign_forms_users_user_id_index` (`user_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_values`
--
ALTER TABLE `booking_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_settings`
--
ALTER TABLE `header_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joins`
--
ALTER TABLE `joins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_securities`
--
ALTER TABLE `login_securities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_templates`
--
ALTER TABLE `mail_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting_polls`
--
ALTER TABLE `meeting_polls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_settings`
--
ALTER TABLE `menu_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiple_choices`
--
ALTER TABLE `multiple_choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `notifications_settings`
--
ALTER TABLE `notifications_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_settings`
--
ALTER TABLE `page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_images`
--
ALTER TABLE `projects_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_key_index` (`key`);

--
-- Indexes for table `sms_templates`
--
ALTER TABLE `sms_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_origin`
--
ALTER TABLE `users_origin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_codes`
--
ALTER TABLE `user_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_forms`
--
ALTER TABLE `user_forms`
  ADD KEY `user_forms_role_id_index` (`role_id`),
  ADD KEY `user_forms_form_id_index` (`form_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_forms_roles`
--
ALTER TABLE `assign_forms_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_forms_users`
--
ALTER TABLE `assign_forms_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_values`
--
ALTER TABLE `booking_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `header_settings`
--
ALTER TABLE `header_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `joins`
--
ALTER TABLE `joins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login_securities`
--
ALTER TABLE `login_securities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mail_templates`
--
ALTER TABLE `mail_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `meeting_polls`
--
ALTER TABLE `meeting_polls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_settings`
--
ALTER TABLE `menu_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `multiple_choices`
--
ALTER TABLE `multiple_choices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications_settings`
--
ALTER TABLE `notifications_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `page_settings`
--
ALTER TABLE `page_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `projects_images`
--
ALTER TABLE `projects_images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `sms_templates`
--
ALTER TABLE `sms_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_logins`
--
ALTER TABLE `social_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_origin`
--
ALTER TABLE `users_origin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_codes`
--
ALTER TABLE `user_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
