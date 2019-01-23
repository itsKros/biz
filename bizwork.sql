-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 04:24 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `user_id`, `name`, `address`, `website`, `email`, `phone`, `bio`, `created_at`, `updated_at`) VALUES
(1, 2, 'Brian Creative Soft', '1635 Franklin Street Montgomery, AL 36104', 'http://example.com', 'briancs@mail.com', '978-899-1433', '<p>Interdum velit laoreet id donec. Duis ut diam quam nulla porttitor. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Egestas purus viverra accumsan in nisl nisi scelerisque eu ultrices. <em><strong>Mauris sit amet massa vitae</strong></em> tortor condimentum lacinia quis vel. Turpis tincidunt id aliquet risus feugiat in ante metus dictum. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Aliquet risus feugiat in ante metus dictum. Sit amet consectetur adipiscing elit duis tristique. Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec. Varius morbi enim nunc faucibus a pellentesque sit amet porttitor.</p>\r\n\r\n<p><strong>Velit scelerisque in dictum non</strong> consectetur a. Molestie at elementum eu facilisis. Pretium nibh ipsum consequat nisl vel pretium. Turpis egestas pretium aenean pharetra magna. Arcu dictum varius duis at consectetur lorem. Ultricies lacus sed turpis tincidunt id aliquet risus feugiat.</p>\r\n\r\n<p>Eget nullam non nisi est sit amet facilisis magna. Elit sed vulputate mi sit amet mauris commodo. Libero enim sed faucibus turpis in eu.</p>', NULL, '2019-01-22 21:48:11'),
(2, 3, 'Jon Solutions', '3756 Preston Street Wichita, KS 67213', 'http://example.org', 'jsolutions@mail.com', '202-555-0166', '<p>Tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Consectetur a erat nam at lectus. A iaculis at erat pellentesque. Ac orci phasellus egestas tellus. Elit eget gravida cum sociis natoque penatibus et. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Ultrices vitae auctor eu augue ut lectus arcu bibendum at. Habitasse platea dictumst vestibulum rhoncus. Non curabitur gravida arcu ac tortor dignissim convallis aenean et. <a href=\"#\">Elit eget gravida</a> cum sociis natoque. Dolor purus non enim praesent. Pellentesque habitant morbi tristique senectus. Mi sit amet mauris commodo.</p>\r\n\r\n<p>Sed libero enim sed faucibus turpis in eu mi bibendum. Morbi quis commodo odio aenean sed adipiscing diam. Facilisis volutpat est velit egestas dui id ornare. Tortor condimentum lacinia quis vel eros donec ac odio tempor. Netus et malesuada fames ac turpis egestas. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Elit at imperdiet dui accumsan. Lectus vestibulum mattis ullamcorper velit. Amet volutpat consequat mauris nunc congue nisi vitae suscipit. Eget duis at tellus at urna. Sed vulputate mi sit amet mauris commodo quis imperdiet. A diam maecenas sed enim ut sem viverra.</p>', NULL, '2019-01-22 21:42:37'),
(4, 2, '123 Frontier', '2595 Pearlman Avenue Sudbury, MA 01776', 'www.123frontier.com', 'kroshan197@gmail.com', '123frontier@gmail.com', '<p>Dui ut ornare lectus sit amet est placerat. Non blandit massa enim nec dui nunc mattis enim ut. Praesent semper feugiat nibh sed pulvinar proin. Diam maecenas ultricies mi eget mauris. Eget mauris pharetra et ultrices neque ornare. Laoreet sit amet cursus sit amet dictum sit. Eget aliquet nibh praesent tristique magna. Aliquet porttitor lacus luctus accumsan. Nunc eget lorem dolor sed viverra ipsum nunc aliquet. Nisl rhoncus mattis rhoncus urna neque viverra justo nec.</p>\r\n\r\n<blockquote>\r\n<p><strong>Enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra.</strong> Risus feugiat in ante metus. Orci dapibus ultrices in iaculis nunc sed augue lacus viverra. Phasellus vestibulum lorem sed risus ultricies. Viverra vitae congue eu consequat ac. Sed cras ornare arcu dui vivamus arcu felis. Arcu bibendum at varius vel pharetra vel turpis nunc.</p>\r\n</blockquote>\r\n\r\n<p>Ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. A cras semper auctor neque vitae tempus quam pellentesque. Diam donec adipiscing tristique risus nec feugiat. Congue eu consequat ac felis donec et odio pellentesque. Risus ultricies tristique nulla aliquet enim tortor at auctor. Quis risus sed vulputate odio ut. Risus viverra adipiscing at in.</p>\r\n\r\n<p>Fermentum leo vel orci porta non pulvinar neque laoreet. Nisl pretium fusce id velit ut tortor pretium. Volutpat lacus laoreet non curabitur gravida arcu.</p>', '2019-01-18 22:19:40', '2019-01-22 21:50:00'),
(5, 3, 'Sapphire Tech', '196 Woodside Circle Mobile, FL 36602', 'www.sapphiretech.com', 'support@sapphiretech.com', '987-654-3210', '<p>Aenean euismod elementum nisi quis eleifend quam adipiscing vitae. In est ante in nibh mauris. Ipsum dolor sit amet consectetur. Auctor elit sed vulputate mi. Pretium quam vulputate dignissim suspendisse in est ante in nibh. Cras ornare arcu dui vivamus arcu. Malesuada nunc vel risus commodo viverra maecenas accumsan lacus. Adipiscing bibendum est ultricies integer. Pulvinar sapien et ligula ullamcorper. Amet consectetur adipiscing elit ut aliquam purus sit. Turpis tincidunt id aliquet risus feugiat in ante metus. Lacus vel facilisis volutpat est velit. In massa tempor nec feugiat nisl pretium fusce id velit. Sem nulla pharetra diam sit amet nisl. Semper risus in hendrerit gravida. Dolor magna eget est lorem ipsum dolor sit.</p>\r\n\r\n<p><a href=\"#\">Enim sed faucibus turpis in.</a> Amet nulla facilisi morbi tempus. Amet porttitor eget dolor morbi non arcu. Morbi quis commodo odio aenean sed adipiscing diam donec. Euismod quis viverra nibh cras pulvinar mattis nunc. Eu lobortis elementum nibh tellus molestie nunc non blandit massa. Tempus imperdiet nulla malesuada pellentesque elit eget. Bibendum est ultricies integer quis auctor elit. Diam phasellus vestibulum lorem sed risus ultricies tristique. Nunc aliquet bibendum enim facilisis gravida neque convallis a cras. Pulvinar elementum integer enim neque volutpat. Nunc consequat interdum varius sit amet. Libero id faucibus nisl tincidunt eget nullam non. Massa sed elementum tempus egestas sed sed risus pretium. Elit sed vulputate mi sit amet mauris. Id volutpat lacus laoreet non. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin nibh. Semper quis lectus nulla at volutpat diam ut venenatis.</p>', '2019-01-22 10:43:03', '2019-01-22 21:43:02');

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
(3, '2019_01_13_170035_create_listings_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `isAdmin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, 1, '$2y$10$F4LE9phb0oBGtGhrp.WauuRs0bjKZJr/va22r.hkmXEvWmOcjLzqy', 'o7BJRUXqX6DXjZMQRFJRULs5vgc0AnZJzhn0HIkSwI8eU6TklIQ6P3VWXxls', '2019-01-05 11:59:36', '2019-01-05 11:59:36'),
(2, 'Brian Fury', 'brian@mail.com', NULL, NULL, '$2y$10$i7GnlRKfQ.HSSUnbfR/cj.39eeBEfkk2okrU8bU/KBDbeSjiNXtjC', '6S5Kg6bmLo28YoMTRExd75tka2nde00w2fo8QG7YahsUgOONRTAXGdsReqGX', '2019-01-05 12:03:00', '2019-01-05 12:03:00'),
(3, 'Jon Doe', 'jon@mail.com', NULL, NULL, '$2y$10$//K/w/E9joPwVerqmUgqeu/BtnE3kQFEDYP0z876Yl9bZs8LeuQ.q', 'AIsUrTEtxUN2SaJLRlmWkt8hLAGtTPkMnpDEK4VDWcA3xiP32bn0JjQbSJPZ', '2019-01-13 11:58:59', '2019-01-13 11:58:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
