-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-10-30 09:27:25
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `example`
--

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `height` float DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `valid` tinyint(4) DEFAULT NULL,
  `birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `height`, `weight`, `name`, `phone`, `email`, `create_time`, `valid`, `birth_date`) VALUES
(1, 180, 80, 'John', '0900000000', 'john@test.com', '2020-10-30 15:46:00', 1, '1990-05-05'),
(2, 156, 48, 'May', '0900000000', 'may@test.com', '2020-10-30 15:46:00', 1, '1990-06-05'),
(3, 176, 76, 'Tom', '0900000000', 'tom@test.com', '2020-10-30 15:46:00', 1, '1991-11-08'),
(4, 176, 76, 'Jay', '0900000000', 'jay@test.com', '2020-10-30 08:58:54', 1, '1991-11-08'),
(5, 160, 50, 'Mary', '0900000000', 'mary@test.com', '2020-10-30 09:00:03', 1, '1992-01-23'),
(6, 182, 88, 'Thomas', '0900000000', 'thomas@test.com', '2020-10-30 09:06:24', 1, '1989-02-15'),
(7, 158, 49, 'Sarah', '0900000000', 'sarah@test.com', '2020-10-30 09:19:38', 1, '1995-04-10'),
(8, 187, 89, 'Jerry', '0900000000', 'jerry@test.com', '2020-10-30 09:19:38', 1, '1996-07-31'),
(9, 173, 65, 'Jack', '0900000000', 'jack@test.com', '2020-10-30 09:26:06', 1, '1994-09-10'),
(10, 165, 54, 'Jacy', '0900000000', 'jacy@test.com', '2020-10-30 09:26:06', 1, '1997-10-26'),
(11, 186, 92, 'Bruce', '0900000000', 'bruce@test.com', '2020-10-30 09:26:06', 1, '1993-12-01');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `name_2` (`name`),
  ADD KEY `email` (`email`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
