-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-12-04 16:31:18
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
-- 数据库： `homework`
--
CREATE DATABASE IF NOT EXISTS `homework` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `homework`;

-- --------------------------------------------------------

--
-- 表的结构 `test`
--

CREATE TABLE `test` (
  `uid` int(4) NOT NULL COMMENT '用户ID',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT '名字',
  `gender` int(1) DEFAULT NULL COMMENT '性别',
  `brief` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin COMMENT '简介'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `test`
--

INSERT INTO `test` (`uid`, `name`, `gender`, `brief`) VALUES
(2, '张三', 1, '不想写');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(1) NOT NULL,
  `username` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `qq` int(10) NOT NULL,
  `college` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `profession` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mima` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `sex`, `phone`, `qq`, `college`, `profession`, `mima`) VALUES
(0, '王', '男', 123478988, 1234567898, '数学', '李', 0),
(1, 'zhang', '男', 157612535, 2461533, '语文', '孙', 0),
(3, '赵', '男', 6841533, 45534, '化学', '唐', 0),
(3, '赵', '男', 6841533, 45534, '化学', '唐', 0),
(3, '赵', '男', 6841533, 45534, '化学', '唐', 0),
(3, '赵', '男', 6841533, 45534, '化学', '唐', 0),
(3, '赵', '男', 6841533, 45534, '化学', '唐', 0),
(3, '赵', '男', 6841533, 45534, '化学', '唐', 0),
(3, '赵', '男', 6841533, 45534, '化学', '唐', 0),
(3, '赵', '男', 6841533, 45534, '化学', '唐', 0),
(3, '赵', '男', 6841533, 45534, '化学', '唐', 0),
(3, '赵', '男', 6841533, 45534, '化学', '唐', 0),
(3, '赵', '男', 6841533, 45534, '化学', '唐', 0),
(3, '赵', '男', 6841533, 45534, '化学', '唐', 0),
(3, '赵', '男', 6841533, 45534, '化学', '唐', 0),
(3, '赵', '男', 6841533, 45534, '化学', '唐', 0),
(3, '赵', '男', 6841533, 45534, '化学', '唐', 0),
(3, '赵', '男', 6841533, 45534, '化学', '唐', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
