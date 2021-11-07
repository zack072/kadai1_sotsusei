-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-11-07 08:45:31
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_d09_09`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai1user_table`
--

CREATE TABLE `kadai1user_table` (
  `id` int(12) NOT NULL,
  `username` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_deleted` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kadai1user_table`
--

INSERT INTO `kadai1user_table` (`id`, `username`, `password`, `deadline`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'aiueo', 'aaaaa', '2022-11-16', 0, 0, '2021-11-06 16:34:53', '2021-11-06 16:40:36'),
(2, '岡崎　貴任', 'sssss', '2021-11-06', 0, 0, '2021-11-06 17:21:59', '2021-11-06 17:21:59'),
(3, '岡崎　貴任', 'aiueo', '2021-11-06', 0, 0, '2021-11-06 17:40:36', '2021-11-06 17:40:36'),
(4, '岡崎　貴任', 'seiwapark', '2021-11-06', 0, 0, '2021-11-06 17:58:25', '2021-11-06 17:58:25');

-- --------------------------------------------------------

--
-- テーブルの構造 `todo_table`
--

CREATE TABLE `todo_table` (
  `id` int(12) NOT NULL,
  `todo` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `todo_table`
--

INSERT INTO `todo_table` (`id`, `todo`, `deadline`, `created_at`, `updated_at`) VALUES
(7, 'PHPの課題', '2021-10-31', '2021-10-30 08:13:13', '2021-10-30 08:13:13'),
(8, 'JSの課題', '2021-08-01', '2021-10-30 08:14:04', '2021-10-30 08:14:04'),
(9, '気分転換', '2020-11-11', '2021-10-30 08:15:05', '2021-10-30 08:15:05'),
(10, 'test2', '2021-12-01', '2021-10-30 08:15:32', '2021-10-30 08:15:32'),
(12, 'テスト', '2021-10-18', '2021-10-31 13:05:21', '2021-10-31 13:05:21'),
(13, 'テスト', '2021-10-31', '2021-10-31 13:05:30', '2021-10-31 13:05:30'),
(14, 'あああ', '2021-10-31', '2021-10-31 14:44:01', '2021-10-31 14:44:01'),
(15, 'test', '2021-10-18', '2021-10-31 15:42:21', '2021-10-31 15:42:21'),
(17, 'test2', '2021-10-12', '2021-10-31 16:40:16', '2021-10-31 16:40:16'),
(18, 'あいうえお', '2021-12-12', '2021-10-31 16:46:22', '2021-10-31 16:46:22'),
(19, 'かきくけこ', '2022-11-11', '2021-10-31 17:17:53', '2021-10-31 17:17:53'),
(21, 'post', '2021-11-16', '2021-11-07 16:20:32', '2021-11-07 16:20:32');

-- --------------------------------------------------------

--
-- テーブルの構造 `users_table`
--

CREATE TABLE `users_table` (
  `id` int(12) NOT NULL,
  `username` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_deleted` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `users_table`
--

INSERT INTO `users_table` (`id`, `username`, `password`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(2, 'test４', 'aiueoaaaa', 0, 0, '2021-11-02 17:13:05', '2021-11-05 20:00:11'),
(3, 'aiueo', 'aaaa', 0, 0, '2021-11-05 19:55:14', '2021-11-05 19:55:14'),
(4, 'aiueo', 'kakikukeko', 0, 0, '2021-11-05 19:58:52', '2021-11-05 19:58:52'),
(5, 'aiueo', 'kakikukeko', 0, 0, '2021-11-05 19:59:50', '2021-11-05 19:59:50'),
(6, 'test3', 'aaaaa', 0, 0, '2021-11-06 16:18:44', '2021-11-06 16:18:44');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kadai1user_table`
--
ALTER TABLE `kadai1user_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `todo_table`
--
ALTER TABLE `todo_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kadai1user_table`
--
ALTER TABLE `kadai1user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `todo_table`
--
ALTER TABLE `todo_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- テーブルの AUTO_INCREMENT `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
