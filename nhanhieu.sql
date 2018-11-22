-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3304
-- Thời gian đã tạo: Th10 22, 2018 lúc 10:58 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhanhieu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `achievements`
--

CREATE TABLE `achievements` (
  `id` int(10) UNSIGNED NOT NULL,
  `achievementName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievementDate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievementLink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievementText` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `achievements`
--

INSERT INTO `achievements` (`id`, `achievementName`, `achievementDate`, `achievementLink`, `achievementText`, `created_at`, `updated_at`) VALUES
(1, 'Et sint labore.', '2005-04-28 09:58:59', 'http://leuschke.com/ut-commodi-quia-harum-iusto', 'Dicta inventore voluptatem id sapiente sapiente et. Modi ducimus ut ratione.', '2018-10-11 19:48:40', '2018-10-11 19:48:40'),
(2, 'Temporibus ea quae.', '1999-06-30 13:44:51', 'http://www.kertzmann.com/ipsam-qui-et-autem-velit.html', 'Reprehenderit excepturi rerum et temporibus. Similique architecto cum vitae ut tenetur distinctio.', '2018-10-11 19:48:40', '2018-10-11 19:48:40'),
(3, 'Numquam expedita ut.', '2001-07-19 09:01:33', 'http://www.cummings.biz/ad-consectetur-magnam-possimus-qui-excepturi-quis-quis-amet.html', 'Cumque esse et eaque fugit. Voluptatem saepe commodi eos.', '2018-10-11 19:48:40', '2018-10-11 19:48:40'),
(4, 'Et fuga enim.', '1981-05-16 06:53:43', 'https://www.feeney.org/velit-qui-eum-voluptates-voluptatem-est-beatae-eum-quam', 'Esse excepturi at eos quis in. Optio labore distinctio eligendi aperiam quia illo voluptatibus.', '2018-10-11 19:48:40', '2018-10-11 19:48:40'),
(5, 'Ea odio eveniet ab.', '2010-07-07 08:54:32', 'http://lynch.com/amet-illo-neque-ut-quo-beatae', 'Numquam consequatur excepturi qui a aut. Rerum tenetur labore iure. Est et accusamus quis.', '2018-10-11 19:48:41', '2018-10-11 19:48:41'),
(6, 'Error aliquid ut.', '2002-08-23 09:22:16', 'http://www.huels.biz/', 'In inventore voluptatem tenetur quas. Delectus at harum sit quam et reiciendis sint aliquam.', '2018-10-11 19:48:41', '2018-10-11 19:48:41'),
(7, 'Qui est magnam odit.', '1970-11-14 13:15:58', 'http://www.baumbach.com/quo-iste-error-vero-maiores-quod-veritatis', 'Officia amet sunt est vero. Sed sint perferendis beatae modi.', '2018-10-11 19:48:41', '2018-10-11 19:48:41'),
(8, 'Libero tempora vel.', '1976-02-22 10:11:37', 'https://satterfield.com/itaque-quidem-eos-recusandae-itaque-tenetur-ullam-dolores.html', 'A minus et earum in. Dolore et aut rerum inventore sed eaque.', '2018-10-11 19:48:41', '2018-10-11 19:48:41'),
(9, 'Sint fuga ut error.', '1985-12-09 06:07:56', 'http://wyman.net/', 'Dolor animi ut omnis. Consequatur modi vel et commodi alias cupiditate cumque.', '2018-10-11 19:48:41', '2018-10-11 19:48:41'),
(10, 'Veritatis rerum.', '1987-09-04 05:03:30', 'http://macejkovic.biz/', 'Natus aut odio dolore iste voluptatem. Cum quasi quo est ut.', '2018-10-11 19:48:41', '2018-10-11 19:48:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activitys`
--

CREATE TABLE `activitys` (
  `id` int(10) UNSIGNED NOT NULL,
  `intervaltime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activityText` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activityDate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `activitys`
--

INSERT INTO `activitys` (`id`, `intervaltime`, `activityText`, `activityDate`, `created_at`, `updated_at`) VALUES
(1, 'Quasi quia.', 'Mollitia deserunt porro unde minus sit asperiores ex. Vero dolore assumenda officiis.', 'Similique quos aut.', '2018-10-11 19:48:39', '2018-10-11 19:48:39'),
(2, 'Adipisci aut rerum.', 'Qui culpa eum quos ea cupiditate. Eos quod officia delectus aut accusamus temporibus architecto.', 'Quia incidunt.', '2018-10-11 19:48:39', '2018-10-11 19:48:39'),
(3, 'Nemo enim illo.', 'Ut veniam repudiandae aut. Id qui neque et reiciendis dolore. Minima aliquam eos officia qui nemo.', 'Qui necessitatibus.', '2018-10-11 19:48:39', '2018-10-11 19:48:39'),
(4, 'Autem quae ut a.', 'Voluptas aspernatur laboriosam autem repudiandae. Quod est omnis fugiat et sed qui eius.', 'Ratione quia nemo.', '2018-10-11 19:48:39', '2018-10-11 19:48:39'),
(5, 'Accusantium ipsum.', 'Tenetur culpa optio porro deleniti excepturi. Quis laboriosam explicabo ut deserunt.', 'Ratione iusto eaque.', '2018-10-11 19:48:39', '2018-10-11 19:48:39'),
(6, 'Est fugit nam enim.', 'Voluptate quia quia earum voluptas esse quibusdam. Officiis ipsam voluptatem quos.', 'Voluptatem a animi.', '2018-10-11 19:48:40', '2018-10-11 19:48:40'),
(7, 'Unde quaerat eum.', 'Aperiam quasi dolores sit. Et et hic et quia. Occaecati quos amet eius harum fugit est.', 'Perspiciatis.', '2018-10-11 19:48:40', '2018-10-11 19:48:40'),
(8, 'Reiciendis commodi.', 'Recusandae aut autem eum adipisci. Laborum aut est inventore qui. Occaecati est aut et ut velit.', 'Aut possimus.', '2018-10-11 19:48:40', '2018-10-11 19:48:40'),
(9, 'Voluptate ut odio.', 'Enim voluptatem dolor est repudiandae laudantium dolores et. Quaerat earum provident et.', 'Voluptatum culpa.', '2018-10-11 19:48:40', '2018-10-11 19:48:40'),
(10, 'Consequuntur.', 'Unde est quod delectus. Nam explicabo omnis doloremque et.', 'Dolor nesciunt ut.', '2018-10-11 19:48:40', '2018-10-11 19:48:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `imageName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageFile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `imageName`, `imageFile`, `created_at`, `updated_at`) VALUES
(13, NULL, 'user-uploads/fb13e3ec543b5e334af54f5034dc7ec5.jpg', '2018-11-08 02:12:06', '2018-11-08 02:12:06'),
(14, NULL, 'user-uploads/102296167ad99ee6b2607df6a24b3750.JPG', '2018-11-22 01:36:11', '2018-11-22 01:36:11'),
(15, NULL, 'user-uploads/dc253586101359911d19413e5c3fb0b5.jpg', '2018-11-22 01:36:39', '2018-11-22 01:36:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(45, '2014_10_12_000000_create_users_table', 1),
(46, '2014_10_12_100000_create_password_resets_table', 1),
(47, '2018_10_11_064649_create_achievements_table', 1),
(48, '2018_10_11_065213_create_activitys_table', 1),
(49, '2018_10_11_065406_create_feedback_table', 1),
(50, '2018_10_11_065558_create_images_table', 1),
(51, '2018_10_11_065814_create_news_table', 1),
(52, '2018_10_11_070312_create_posts_table', 1),
(53, '2018_10_11_070537_create_profiles_table', 1),
(54, '2018_10_11_070911_create_projects_table', 1),
(55, '2018_10_11_071107_create_videos_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `newsTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkNews` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newsImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newsInfor` longtext COLLATE utf8mb4_unicode_ci,
  `newsDate` datetime DEFAULT NULL,
  `linkShow` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `newsTitle`, `linkNews`, `newsImage`, `newsInfor`, `newsDate`, `linkShow`, `created_at`, `updated_at`) VALUES
(6, 'Et aliquam fugiat.', 'https://streich.com/eaque-ut-consequuntur-fugiat-velit-consequatur-non-maxime.html', 'Impedit eius.', 'Enim sed odit quibusdam voluptatem voluptas mollitia enim. Et omnis sint voluptas alias et voluptatum adipisci. Accusamus quia itaque vel est a. Iusto nam ut voluptatem est cupiditate.', '2013-12-16 06:03:14', 'Reprehenderit dolor.', '2018-10-11 19:48:43', '2018-10-11 19:48:43'),
(7, 'Sit odit et.', 'http://zboncak.com/', 'Nam tempora sint.', 'Ut similique ea ut et a velit. Pariatur nostrum error magni ratione aliquam exercitationem impedit. Qui ex quas blanditiis ut autem tempore aperiam. Rerum ut saepe saepe aut.', '2013-09-03 04:15:00', 'Necessitatibus nisi.', '2018-10-11 19:48:43', '2018-10-11 19:48:43'),
(8, 'Id incidunt ea.', 'http://cormier.net/blanditiis-quos-et-placeat-ex-eos-quidem-dolorem', 'Iusto cumque.', 'Atque nostrum ex necessitatibus odio perferendis. Magni quidem dolores ipsam esse aut. Totam reiciendis praesentium nobis quas. Omnis illo dicta aspernatur nihil.', '2013-12-29 11:58:19', 'Debitis et sed sit.', '2018-10-11 19:48:43', '2018-10-11 19:48:43'),
(9, 'Qui eum deserunt et.', 'https://www.klein.com/iste-aspernatur-expedita-reprehenderit', 'Et et voluptatibus.', 'Aut animi enim et quisquam qui. Maxime tenetur et harum vitae. Voluptatem dolore aut doloribus cupiditate corrupti. Enim commodi corporis iure eveniet quia in.', '2008-03-14 20:57:56', 'Vel error vero.', '2018-10-11 19:48:43', '2018-10-11 19:48:43'),
(11, 'ádasd', 'ádasd', 'user-uploads/6e7bd4bd6f04d809bfc63765ca571ccf.png', '<p>&aacute;dasdasd</p>', '2018-11-06 13:04:58', NULL, '2018-11-06 06:04:58', '2018-11-06 06:04:58'),
(12, 'ádasdasd', 'ádasd', 'user-uploads/c1b6bec6d30577339d0c0e2871cc2938.png', '<p>&aacute;dadasd</p>', '2018-11-06 13:06:51', 'ádasd', '2018-11-06 06:06:51', '2018-11-06 06:06:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `postTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  `summary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `postTitle`, `createDate`, `summary`, `content`, `image`, `created_at`, `updated_at`) VALUES
(11, 'ádasd', NULL, '<p>sdasda</p>', '<p>&aacute;dasd</p>', 'user-uploads/16a798911094fb9e97ec7631e0478812.png', '2018-11-05 21:44:59', '2018-11-05 21:44:59'),
(12, 'sdasda', '2018-11-06 06:29:58', '<p>&aacute;dasd&aacute;dasdasd</p>', '<p>&aacute;dasd</p>', 'user-uploads/5b5a7c55cbee2abc6d748d108170420f.png', '2018-11-05 21:47:37', '2018-11-05 23:29:58'),
(13, 'ádasdasd', '2018-11-06 04:48:18', '<p>&aacute;dasd</p>', '<p>&aacute;dasdasd</p>', 'user-uploads/2f92bd1e041ff0c3f0da71abea52b228.png', '2018-11-05 21:48:18', '2018-11-05 21:48:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthDay` datetime DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `projectName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projectImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projectTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projectInfor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projectText` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `projects`
--

INSERT INTO `projects` (`id`, `projectName`, `projectImage`, `projectTitle`, `projectInfor`, `projectText`, `created_at`, `updated_at`) VALUES
(13, 'ádasd', 'uploads/636549179165928759_Masstel-L133 (1).png', 'ádasdasd', 'ádasd', 'ádasd', '2018-10-17 18:56:56', '2018-10-17 18:56:56'),
(14, 'ádasd', 'uploads/636549179165928759_Masstel-L133 (1).png', 'ádasdasd', 'ádasd', 'ádasd', '2018-10-17 18:57:04', '2018-10-17 18:57:04'),
(15, 'adasd', 'uploads/636528302863568598_Asus-X541UA-XX272T.png', 'ádasdasd', 'ádasd', 'ádasasd', '2018-10-17 19:01:57', '2018-10-17 19:01:57'),
(16, 'ádas', 'uploads/636549179165928759_Masstel-L133 (1).png', 'ádasda', 'sadas', 'sdasd', '2018-10-17 19:04:44', '2018-10-17 19:04:44'),
(17, 'ádasdÁDSa', 'uploads/636485870878106449_ASUS--X542UA-1.png', 'adasdasd', 'ádasd', 'ádasdasd', '2018-10-17 19:09:16', '2018-10-17 19:09:16'),
(18, 'ádasd', 'uploads/636584485424670051_X411UA-BV221T.png', 'ádasdads', 'ádasd', 'ádasdad', '2018-10-17 19:10:53', '2018-10-17 19:10:53'),
(20, 'ádas', 'uploads/636595538963218134_ASUS-TUF-FX504.png', 'ádasd', 'ádasd', 'ấdsasd', '2018-10-17 19:13:54', '2018-10-17 19:13:54'),
(21, 'ádasd', 'uploads/636528302863568598_Asus-X541UA-XX272T.png', 'ádasd', 'ádasd', 'ádasdad', '2018-10-17 19:16:05', '2018-10-17 19:16:05'),
(22, 'ádasd', 'uploads/636595538963218134_ASUS-TUF-FX504.png', 'sadasdad', 'ádasd', 'ádad', '2018-10-17 19:17:27', '2018-10-17 19:17:27'),
(23, 'ádasd', 'uploads/636528302863568598_Asus-X541UA-XX272T.png', 'âsdasd', 'ádasd', 'ádas', '2018-10-17 19:18:01', '2018-10-17 19:18:01'),
(24, 'ádasd', 'uploads/636549179165928759_Masstel-L133 (1).png', 'ádasdasd', 'ádasdas', 'ádasd', '2018-10-17 19:18:38', '2018-10-17 19:18:38'),
(25, 'ádas', 'uploads/636549179165928759_Masstel-L133 (1).png', 'ádasdasd', 'ádasd', 'ádasd', '2018-10-17 19:20:08', '2018-10-17 19:20:08'),
(26, NULL, 'uploads/636549179165928759_Masstel-L133 (1).png', 'ấdasd', NULL, NULL, '2018-10-17 19:20:35', '2018-10-17 19:20:35'),
(27, NULL, 'uploads/636549179165928759_Masstel-L133 (1).png', NULL, NULL, NULL, '2018-10-17 19:21:25', '2018-10-17 19:21:25'),
(28, 'ádsa', 'uploads/636528302863568598_Asus-X541UA-XX272T.png', 'ádasdÁDAAWD', 'ádas', 'ádasd', '2018-10-17 19:22:59', '2018-10-17 19:22:59'),
(29, NULL, 'uploads/636528302863568598_Asus-X541UA-XX272T.png', NULL, NULL, NULL, '2018-10-17 19:23:48', '2018-10-17 19:23:48'),
(30, 'ádasd', 'uploads/636549179165928759_Masstel-L133 (1).png', 'sádasd', 'ádasd', 'ádasd', '2018-10-17 19:24:45', '2018-10-17 19:24:45'),
(31, 'Quae repellendus.', 'uploads/636528302863568598_Asus-X541UA-XX272T.png', 'Fugiat sint enim.', 'Et facilis et necessitatibus nesciunt quo dolor.', 'Nemo rerum aliquam expedita quia ut. Aut explicabo aut iure voluptatem enim.', '2018-10-19 01:35:42', '2018-10-19 01:35:42'),
(35, 'dfghjjklkjh', 'uploads/636595538963218134_ASUS-TUF-FX504.png', 'fjfjfjfj', 'gjn,mnvbn', 'dfghjklkjfhj', '2018-10-23 17:46:55', '2018-10-23 17:46:55'),
(36, 'dfghjjklkjh', 'uploads/636595538963218134_ASUS-TUF-FX504.png', 'fjfjfjfj', 'gjn,mnvbn', 'dfghjklkjfhj', '2018-10-23 17:47:00', '2018-10-23 17:47:00'),
(37, 'dfghjjklkjh', 'uploads/636595538963218134_ASUS-TUF-FX504.png', 'fjfjfjfj', 'gjn,mnvbn', 'dfghjklkjfhj', '2018-10-23 17:47:05', '2018-10-23 17:47:05'),
(38, 'asdasd', 'uploads/636528302863568598_Asus-X541UA-XX272T.png', 'dasdasd', 'asdasd', 'asdasdasd', '2018-10-23 17:48:39', '2018-10-23 17:48:39'),
(39, NULL, 'user-uploads/3529e7e410f1a457d81bd3bf62c6b823.png', NULL, NULL, NULL, '2018-11-05 20:26:13', '2018-11-05 20:26:13'),
(40, 'ádsada', 'user-uploads/5cb561ac31607b2c69dc7923da804c88.png', NULL, 'ádasasd', NULL, '2018-11-05 20:27:01', '2018-11-05 20:27:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'asda', 'hieule1191997@gmail.com', NULL, '$2y$10$V4tqG1iiUiSD2FpNzdOeI.shuJG5LNVPdjVQBnWLnWy3OIgqVOR.i', 'vrrR6O6X5o8xShTNyxUApgXpHhvp1EhkWohmLgZuh32PBm8EGeuXlZrnvvXu', '2018-10-12 00:08:39', '2018-10-12 00:08:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `videoName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videoImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videoLink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videoFile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `videos`
--

INSERT INTO `videos` (`id`, `videoName`, `videoImage`, `videoLink`, `videoFile`, `created_at`, `updated_at`) VALUES
(1, 'Voluptates est.', 'Vitae natus.', 'http://www.senger.com/odio-molestiae-sed-possimus-nostrum-architecto-deserunt', 'Ducimus officia voluptatem nostrum eaque.', '2018-10-11 19:48:46', '2018-10-11 19:48:46'),
(2, 'Sequi occaecati.', 'Necessitatibus.', 'http://www.hettinger.com/', 'Inventore placeat autem facere fugit vel et.', '2018-10-11 19:48:46', '2018-10-11 19:48:46'),
(3, 'Illo illum alias.', 'At voluptas officia.', 'http://www.trantow.com/dolorum-a-minus-quis-quasi', 'Et quis voluptatem qui earum blanditiis sit.', '2018-10-11 19:48:46', '2018-10-11 19:48:46'),
(4, 'Nihil magnam.', 'Ipsam laboriosam.', 'http://www.stoltenberg.org/autem-accusamus-qui-error-qui-quia', 'Quos in reprehenderit aut ut impedit.', '2018-10-11 19:48:46', '2018-10-11 19:48:46'),
(5, 'Repellendus.', 'Quis explicabo.', 'http://grimes.org/ipsam-voluptatibus-quibusdam-quia-et-quis-corporis', 'Culpa ab sequi dolore deleniti ut quo facere.', '2018-10-11 19:48:46', '2018-10-11 19:48:46'),
(6, 'Exercitationem.', 'Repudiandae neque.', 'http://rippin.net/consequuntur-doloribus-nam-amet-dolorum', 'Dolor sunt odit excepturi.', '2018-10-11 19:48:46', '2018-10-11 19:48:46'),
(7, 'Quos vel dolorem.', 'Iure similique eos.', 'https://www.lind.com/magni-recusandae-inventore-nemo-vel-dolore-eos', 'Rerum cumque possimus itaque nostrum.', '2018-10-11 19:48:46', '2018-10-11 19:48:46'),
(8, 'Reprehenderit eaque.', 'Eum dolores.', 'http://www.heaney.com/quibusdam-non-in-magni-nostrum', 'Dolore illo temporibus ad.', '2018-10-11 19:48:46', '2018-10-11 19:48:46'),
(9, 'Optio veniam eos.', 'Deleniti expedita.', 'http://klocko.com/corrupti-doloribus-eaque-aut-similique-dolorem-commodi-totam.html', 'Non excepturi aliquam exercitationem ut.', '2018-10-11 19:48:46', '2018-10-11 19:48:46'),
(10, 'Velit qui dolorem.', 'Sed esse non dolore.', 'http://www.upton.biz/voluptate-dolor-voluptatem-quisquam-cupiditate-natus-non-in-quisquam.html', 'Vel et sint nulla vitae officia.', '2018-10-11 19:48:46', '2018-10-11 19:48:46'),
(11, 'avatar_bg.jpg', 'avatar_bg.jpg', 'https://www.youtube.com/?gl=VN', 'user-uploads/54f03b14a7515369df05e3d368bfe3be.jpg', '2018-11-08 03:12:30', '2018-11-08 03:12:30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `activitys`
--
ALTER TABLE `activitys`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `activitys`
--
ALTER TABLE `activitys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
