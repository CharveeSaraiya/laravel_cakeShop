-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 04:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytestdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `cdate` date NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pid` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pname`, `price`, `photo`, `qty`, `cdate`, `userid`, `pid`, `created_at`, `updated_at`) VALUES
(1, 'muffin', 25, 'muffin.jpg', 1, '2021-08-04', 'eMxVomUhd6u2AVVe9U2eL8f1rQPeBBf2DDzmZITe', 4, '2021-08-03 21:06:07', '2021-08-03 21:06:07'),
(7, 'choclate cake', 500, 'WhatsApp Image 2021-07-19 at 22.49.04 (1).jpeg', 1, '2022-09-17', 'pUPdEkuPCEFPhONi40FmE8gCUhweTYN7cc6v02rr', 2, '2022-09-17 07:41:38', '2022-09-17 07:41:38'),
(9, 'choclate cake', 500, 'WhatsApp Image 2021-07-19 at 22.49.04 (1).jpeg', 1, '2022-09-21', '5fHNcvHCJlNCas5rl5qTHboguB0X8fEaGDNhdSay', 2, '2022-09-21 04:20:28', '2022-09-21 04:20:28'),
(10, 'choclate cake', 500, 'WhatsApp Image 2021-07-19 at 22.49.04 (1).jpeg', 1, '2022-09-21', '5fHNcvHCJlNCas5rl5qTHboguB0X8fEaGDNhdSay', 2, '2022-09-21 05:40:16', '2022-09-21 05:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cakes', 'delecious', 'muffin.jpg', 'A', '2021-08-02 21:35:55', '2021-08-02 21:35:55'),
(2, 'Muffines', 'lovely and delicious', 'macroons.jpg', 'A', '2021-08-02 21:36:29', '2021-08-02 21:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `firstname`, `lastname`, `message`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(11, 'charvee', 'Saraiya', 'loved it', 'charveesar3aiy4a@gmail.com', '7576867890', '2021-08-05 11:42:09', '2021-08-05 11:42:09'),
(12, 'drashti', 'majsjsakak', 'sadsadsaxvcxv', 'drashti14447523@gmail.com', '8989898989', '2021-08-05 21:04:33', '2021-08-05 21:04:33'),
(14, 'drashti', 'majsjsakak', 'sadsadsaxvcxv', 'drashti1444667523@gmail.com', '8989898989', '2021-08-05 21:06:19', '2021-08-05 21:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `address`, `city`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(29, 'drashti', 'majsjsakak', 'dnjkfnafasmf', 'ahem', 'drashti147523@gmail.com', '8989898989', '2021-08-03 21:05:08', '2021-08-03 21:05:08'),
(31, 'drashti', 'majsjsakak', 'dnjkfnafasmf', 'ahem', 'drashti14447523@gmail.com', '8989898989', '2021-08-03 21:06:51', '2021-08-03 21:06:51'),
(33, 'drashti', 'majsjsakak', 'dnjkfnafasmf', 'ahem', 'drashti144475723@gmail.com', '8989898989', '2021-08-03 21:10:21', '2021-08-03 21:10:21'),
(35, 'drashti', 'majsjsakak', 'dnjkfnafasmf', 'ahem', 'drashti1344475723@gmail.com', '8989898989', '2021-08-03 21:12:05', '2021-08-03 21:12:05'),
(36, 'charvee', 'Saraiya', 'dnjkfnafasmf', 'ahem', 'charveesar13aiy4a@gmail.com', '7576867890', '2021-08-05 21:04:02', '2021-08-05 21:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `e_no` int(6) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `desgn` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `skills` varchar(30) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  `salary` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`e_no`, `ename`, `desgn`, `gender`, `skills`, `profilepic`, `salary`) VALUES
(1, 'prachi', 'designer', 'Female', 'Developer,Designer,Managing', 'xyz.jpg', 3456),
(2, 'mohini', 'HR', 'Female', 'coder,Developer,analists,Manag', 'xyz.jpg', 360000),
(3, 'mohini', 'HR', 'Female', 'coder,Developer,analists,Manag', 'xyz.jpg', 360000),
(4, 'hasti', 'designer', 'Female', 'coder,Developer,analists', 'xyz.jpg', 360000),
(5, 'charvee', 'designer', 'Female', 'coder,Developer,Designer,Manag', 'xyz.jpg', 360000),
(6, 'drashti', 'HR', 'Female', 'coder,Developer,analists,Manag', 'login-img.jpg', 4000),
(9, 'mohini', 'HR', 'Female', 'coder,Developer,analists', 'login-img.jpg', 360000),
(10, 'hasti', 'HR', 'Female', 'coder,Developer,analists', 'login-img.jpg', 3456);

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
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(325, '2014_10_12_000000_create_users_table', 1),
(326, '2014_10_12_100000_create_password_resets_table', 1),
(327, '2019_08_19_000000_create_failed_jobs_table', 1),
(328, '2021_07_14_173545_create_student', 1),
(329, '2021_07_15_123607_create_occasion', 1),
(330, '2021_07_17_031206_create_faq', 1),
(331, '2021_07_17_050235_create_category', 1),
(334, '2021_07_30_030739_create_customer', 2),
(335, '2021_07_28_025545_create_cart', 3),
(336, '2021_08_05_023313_create_contactus', 4);

-- --------------------------------------------------------

--
-- Table structure for table `occasion`
--

CREATE TABLE `occasion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Oname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `occasion`
--

INSERT INTO `occasion` (`id`, `Oname`, `status`, `created_at`, `updated_at`) VALUES
(1, 'party', 'A', '2021-08-02 21:33:53', '2021-08-02 21:33:53'),
(2, 'wedding', 'A', '2021-08-02 21:34:15', '2021-08-02 21:34:15'),
(3, 'Birthday', 'A', '2021-08-02 21:34:31', '2021-08-02 21:34:31'),
(4, 'anniversary', 'A', '2021-08-02 21:34:52', '2021-08-02 21:34:52'),
(5, 'farewell', 'A', '2021-08-02 21:35:08', '2021-08-02 21:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `odate` date NOT NULL,
  `cid` bigint(20) NOT NULL,
  `ddate` date NOT NULL,
  `billamt` int(11) NOT NULL,
  `deliverycharges` int(11) NOT NULL,
  `netamt` int(11) NOT NULL,
  `deliveryaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `odate`, `cid`, `ddate`, `billamt`, `deliverycharges`, `netamt`, `deliveryaddress`, `firstname`, `lastname`, `city`, `email`, `phone`, `status`, `mode`, `created_at`, `updated_at`) VALUES
(10, '2021-08-04', 29, '2021-08-04', 1525, 50, 1575, 'jickl', 'charvee', 'Saraiya', 'nkjiok,m', 'charveesaraiya@gmail.com', '7576867890', 'O', 'COD', '2021-08-03 21:05:08', '2021-08-03 21:05:08'),
(11, '2021-08-04', 31, '2021-08-04', 25, 50, 75, 'jickl', 'charvee', 'Saraiya', 'nkjiok,m', 'charveesaraiya@gmail.com', '7576867890', 'O', 'COD', '2021-08-03 21:06:51', '2021-08-03 21:06:51'),
(12, '2021-08-04', 33, '2021-08-04', 25, 50, 75, 'jickl', 'charvee', 'Saraiya', 'nkjiok,m', 'charveesaraiya@gmail.com', '7576867890', 'O', 'COD', '2021-08-03 21:10:21', '2021-08-03 21:10:21'),
(13, '2021-08-04', 35, '2021-08-04', 25, 50, 75, 'jickl', 'charvee', 'Saraiya', 'nkjiok,m', 'charveesaraiya@gmail.com', '7576867890', 'O', 'COD', '2021-08-03 21:12:05', '2021-08-03 21:12:05'),
(14, '2021-08-06', 36, '2021-08-06', 525, 50, 575, 'dnjkfnafasmf', 'drashti', 'majsjsakak', 'ahem', 'drasht12i@gmail.com', '8989898989', 'O', 'COD', '2021-08-05 21:04:02', '2021-08-05 21:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `oid` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `oid`, `pid`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 11, 4, 1, 25, '2021-08-03 21:06:51', '2021-08-03 21:06:51'),
(2, 12, 4, 1, 25, '2021-08-03 21:10:21', '2021-08-03 21:10:21'),
(3, 13, 4, 1, 25, '2021-08-03 21:12:05', '2021-08-03 21:12:05'),
(4, 14, 4, 1, 25, '2021-08-05 21:04:02', '2021-08-05 21:04:02'),
(5, 14, 2, 1, 500, '2021-08-05 21:04:02', '2021-08-05 21:04:02');

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `unit` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calories` int(11) NOT NULL,
  `catid` bigint(20) NOT NULL,
  `oid` bigint(20) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mfgdate` date NOT NULL,
  `expdate` date NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `price`, `weight`, `unit`, `calories`, `catid`, `oid`, `description`, `mfgdate`, `expdate`, `image1`, `image2`, `image3`, `image4`, `status`, `created_at`, `updated_at`) VALUES
(2, 'choclate cake', 500, 200, 'kg', 120, 1, 1, 'asd\r\ns\r\nd\r\nsa', '2005-05-01', '2005-05-03', 'WhatsApp Image 2021-07-19 at 22.49.04 (1).jpeg', 'birthday.jpeg', 'WhatsApp Image 2021-07-19 at 22.49.04 (3).jpeg', 'exams.jpeg', 'A', '2021-07-21 21:04:47', '2021-07-21 21:04:47'),
(4, 'muffin', 25, 50, 'gms', 120, 2, 3, 'lovely', '2021-08-03', '2021-10-05', 'muffin.jpg', 'donut.jpg', 'owl-muffin.jpg', 'donut.jpg', 'A', '2021-08-02 21:37:43', '2021-08-02 21:37:43'),
(5, 'cheesecakes', 200, 150, 'gms', 120, 1, 5, 'cheesy', '2021-08-04', '2021-08-16', 'cheesecake.jpg', 'choclate late.jpg', 'macroons.jpg', 'pancake.jpg', 'A', '2021-08-02 21:39:53', '2021-08-02 21:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `username`, `password`, `email`, `gender`, `skills`, `city`) VALUES
(1, 'charvee saraiya', 'charvee', 'charveesaraiya@gmail.com', 'female', 'Hindi,English', 'surat'),
(2, 'xyz', '1234', 'xyz@gmail.com', 'F', 'H,E,', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'charvee', 'charveesaraiya@gmail.com', '', NULL, '12345', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contactus_email_unique` (`email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_email_unique` (`email`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`e_no`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occasion`
--
ALTER TABLE `occasion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `e_no` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;

--
-- AUTO_INCREMENT for table `occasion`
--
ALTER TABLE `occasion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
