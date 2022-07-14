-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-07-14 02:22:52
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `vote`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admins`
--

CREATE TABLE `admins` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '序號',
  `acc` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `pw` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `logs`
--

CREATE TABLE `logs` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '序號',
  `user_id` int(11) UNSIGNED NOT NULL COMMENT '投票者',
  `subject_id` int(11) UNSIGNED NOT NULL,
  `option_id` int(11) UNSIGNED NOT NULL,
  `vote_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `subject_id`, `option_id`, `vote_time`) VALUES
(1, 0, 2, 1, '2022-07-10 17:43:09'),
(2, 0, 2, 1, '2022-07-12 15:00:56'),
(3, 0, 2, 1, '2022-07-12 15:01:05'),
(4, 0, 4, 3, '2022-07-12 15:25:08'),
(5, 0, 2, 1, '2022-07-12 15:51:57'),
(6, 0, 4, 3, '2022-07-12 15:55:32'),
(7, 0, 5, 4, '2022-07-12 15:56:38'),
(8, 0, 12, 11, '2022-07-12 16:09:43'),
(9, 0, 12, 12, '2022-07-12 16:09:43');

-- --------------------------------------------------------

--
-- 資料表結構 `options`
--

CREATE TABLE `options` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '序號',
  `option` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '選項描述',
  `subject_id` int(11) NOT NULL,
  `total` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `options`
--

INSERT INTO `options` (`id`, `option`, `subject_id`, `total`) VALUES
(1, '星街彗星', 3, 3),
(2, '櫻巫女', 2, 2),
(3, '麵包', 4, 5),
(4, '刺客教條', 5, 1),
(5, '火影', 6, 0),
(10, '火影', 6, 0),
(11, '紅', 12, 1),
(12, '紫羅蘭', 12, 1),
(13, 'LOL', 5, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '序號',
  `subject` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '主題描述',
  `type_id` int(11) NOT NULL,
  `multiple` tinyint(1) NOT NULL DEFAULT 0 COMMENT '單/複選',
  `mulit_limit` tinyint(2) NOT NULL DEFAULT 1 COMMENT '單/複選項目數',
  `start` date NOT NULL,
  `end` date NOT NULL,
  `total` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `subjects`
--

INSERT INTO `subjects` (`id`, `subject`, `type_id`, `multiple`, `mulit_limit`, `start`, `end`, `total`) VALUES
(2, 'hololive最喜歡角色', 1, 0, 1, '2022-07-08', '2022-07-08', 5),
(4, '早餐', 1, 0, 1, '2022-07-10', '2022-07-10', 5),
(5, '遊戲', 1, 0, 1, '2022-07-10', '2022-07-10', 1),
(6, '漫畫', 1, 0, 1, '2022-07-10', '2022-07-10', 0),
(12, '喜歡顏色', 2, 1, 1, '2022-07-13', '2022-07-23', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `types`
--

CREATE TABLE `types` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '序號',
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '分類名稱'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'ACG'),
(2, '生活'),
(3, '生活');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '序號',
  `acc` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `pw` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `addr` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passnote` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `acc`, `pw`, `name`, `birthday`, `addr`, `email`, `passnote`) VALUES
(15, '111', '25d55ad283aa400af464c76d713c07ad', '111', '2022-07-01', '111', 'f30902889@gmail.com', '111'),
(16, '111', '1bbd886460827015e5d605ed44252251', '111', '2022-07-01', '111', 'f30902889@gmail.com', '111'),
(17, '111', 'bae5e3208a3c700e3db642b6631e95b9', '222', '2022-07-01', '222', 'f30902889@gmail.com', '222'),
(18, '222', 'bae5e3208a3c700e3db642b6631e95b9', '222', '2022-07-02', '222', 'f30902889@gmail.com', '222');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號', AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號', AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號', AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號', AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號', AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
