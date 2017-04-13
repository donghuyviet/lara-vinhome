-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2017 at 03:22 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinhome`
--

-- --------------------------------------------------------

--
-- Table structure for table `articel`
--

CREATE TABLE `articel` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cate_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articel`
--

INSERT INTO `articel` (`id`, `title`, `slug`, `images`, `description`, `remember_token`, `created_at`, `updated_at`, `status`, `desc`, `cate_id`) VALUES
(23, 'chùa hương đi chơi', 'chua-huong', '2LrJ_20170402_095822.jpg', '<p>ở đ&acirc;y rồi</p>\r\n\r\n<p><img alt="HAGL da khong giu duoc loi hua cua bau Duc hinh anh 1" src="http://znews-photo.d.za.zdn.vn/w660/Uploaded/OFH_ftqftma2/2017_04_10/Hoang_Anh_Gia_Lai_Thanh_Hoa.jpg" /></p>\r\n', NULL, '2017-04-08 06:06:44', '2017-04-09 20:20:37', '0', '<p>c&oacute; anh</p>\r\n\r\n<h1>HAGL đ&atilde; kh&ocirc;ng giữ được lời hứa của bầu Đức</h1>\r\n', '1'),
(26, 'chùa hương part1', 'chua-huong-part1', 'i75V_20170402_095850.jpg', '<p>&aacute;dfasd</p>\r\n', NULL, '2017-04-08 06:13:14', '2017-04-09 06:33:14', '0', '<p>dsfasdf</p>\r\n', '1'),
(27, 'chém gió', 'chemgios', 'puq7_20170402_095825.jpg', '<p>&aacute;dfadsf</p>\r\n', NULL, '2017-04-08 06:40:43', '2017-04-09 06:33:25', '0', '<p>sdfasdf</p>\r\n', '1'),
(28, 'xu thối', 'xu-thoi', 'US3P_QuangLeresize.jpg', '<p>đi thăm lăng b&aacute;c</p>\r\n', NULL, '2017-04-09 06:29:10', '2017-04-09 06:32:10', '0', '<p>đi thăm lăng b&aacute;c</p>\r\n', '1'),
(31, 'về quê 30/4', 've-que', 'kQyv_20170402_095648.jpg', '<p>&aacute;dfasdf</p>\r\n', NULL, '2017-04-09 07:11:35', '2017-04-09 07:11:35', '0', '<p>ấdfasdfasdfasdf</p>\r\n', '4'),
(32, 'Sunderland vs Man Utd (0-2, H2): Mkhitaryan tỏa sáng', 'sunderland-vs-man-utd-0-2-h2-mkhitaryan-toa-sang', 'f6rW_20170402_095825.jpg', '<h1>Sunderland vs Man Utd (0-2, H2): Mkhitaryan tỏa s&aacute;ng</h1>\r\n', NULL, '2017-04-09 07:12:49', '2017-04-09 20:15:26', '0', '<p>dsfasdfaSunderland vs Man Utd (0-2, H2): Mkhitaryan tỏa s&aacute;ng</p>\r\n', '1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_cate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) NOT NULL,
  `position` int(20) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title_cate`, `slug`, `status`, `position`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tin tức', 'tin-tuc', 0, 2, NULL, '2017-03-12 07:37:43', '2017-04-09 21:07:42'),
(4, 'giới thiệu', 'gioi-thieu', 0, 3, NULL, '2017-03-12 08:20:22', '2017-04-09 21:07:52'),
(5, 'Căn Hộ', 'can-ho', 0, 1, NULL, '2017-03-13 02:14:49', '2017-04-09 21:07:35'),
(6, 'trang chủ', 'trang-chu', 0, 0, NULL, '2017-03-13 02:15:02', '2017-04-04 00:26:49'),
(7, 'Vị Trí', 'vi-tri', 0, 4, NULL, '2017-04-04 00:26:34', '2017-04-09 21:07:59'),
(8, 'Tiện Ích', 'tien-ich', 0, 5, NULL, '2017-04-04 00:37:02', '2017-04-09 21:08:06'),
(9, 'Đối Tác', 'doi-tac', 0, 6, NULL, '2017-04-04 00:37:16', '2017-04-09 21:08:12'),
(10, 'chùa hương', 'chua-huong', 0, 7, NULL, '2017-04-09 07:52:39', '2017-04-09 21:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_01_13_034728_create_jobs_table', 2),
(4, '2017_02_09_055732_create_search_table', 3),
(5, '2017_02_13_102624_create_location_table', 3),
(6, '2017_02_13_102851_create_job_location_table', 3),
(7, '2014_10_12_000000_create_rooms_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acreage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chair` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chair_total` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `print` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `projectors` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tivi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `penSlideshow` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `board` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `penwrite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `park` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `title`, `description`, `images`, `url`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'chùa hương', 'demosss', 'WXGQ_20170306_220816.jpg', 'http://news.zing.vn/', '0', NULL, '2017-04-08 06:03:32', '2017-04-09 21:35:45'),
(7, 'hoa anh dao', 'hoa anh dao', 'OYc1_20170402_123335.jpg', 'http://news.zing.vn/', '0', NULL, '2017-04-09 06:39:23', '2017-04-09 21:35:52'),
(8, 'người tình bên bến sông hương', 'người tính', 'oF4m_QuangLe-bolero.png', '', '0', NULL, '2017-04-09 07:14:00', '2017-04-09 07:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `tel`, `address`, `images`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'donghuyviet', 'donghuyviet@gmail.com', '$2y$10$ZdEIp0Yf62bX2aBrKA4DCOp.wRZ3hw.CEP2yqmZspPKdY/v0polJi', '', '', '', 'Db97nIAbktYwMZDTMGr6NBvANlDrfXEPZDi7hjdNBtZF6ztOSnFoVk6QWl23', '2017-01-11 00:44:52', '2017-04-10 07:31:06'),
(2, 'vietdong', 'vietdong@gmail.com', '$2y$10$i/O7Ro9gEkTbK8dR/q5K8.cbQzyGhRkTpHa//p74VCgA.TQEXT68W', '', '', '', NULL, '2017-04-07 19:03:39', '2017-04-07 19:03:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articel`
--
ALTER TABLE `articel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articel_slug_unique` (`slug`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rooms_email_unique` (`email`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
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
-- AUTO_INCREMENT for table `articel`
--
ALTER TABLE `articel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
