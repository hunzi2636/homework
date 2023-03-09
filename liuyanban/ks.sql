-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2023-03-09 16:46:42
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `ks`
--

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `phone`, `name`, `comments`, `time`) VALUES
(1, '18873239208', 'jiao', 'cesssssss', 1678347840),
(4, '18873239208', 'jiao', 'cesssssss', 1678347892),
(5, '18873239208', 'jiao', 'cesssssss', 1678347892),
(6, '18873239208', 'jiao', 'cesssssss', 1678347894),
(7, '18873239208', 'jiao', 'cesssssss', 1678347894),
(8, '18873239208', 'jiao', 'cesssssss', 1678347895),
(9, '18873239208', 'jiao', 'cesssssss', 1678347903),
(10, '18873239208', 'jiao', 'cesssssss', 1678347904);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `password_hash`) VALUES
(7, 'jiao', '18873239208', '$2y$10$8sllBixz5YvPde/1B47ekOUK1kvSl0Bt9vZTZ7Wklm09HOQxHYTJ2');

--
-- 转储表的索引
--

--
-- 表的索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
