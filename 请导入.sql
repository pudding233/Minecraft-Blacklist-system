-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2020-04-16 21:51:27
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
-- 数据库： `root`
--

-- --------------------------------------------------------

--
-- 表的结构 `black_admin`
--

CREATE TABLE `black_admin` (
  `uid` int(11) NOT NULL,
  `user` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `last` datetime NOT NULL,
  `dlip` varchar(15) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `black_admin`
--

INSERT INTO `black_admin` (`uid`, `user`, `pass`, `last`, `dlip`, `active`) VALUES
(1, 'admin', '91b2b0f1fc2dd1a6c27987ffd72c8d4b', '2020-04-16 21:08:18', '127.0.0.1', 1);

-- --------------------------------------------------------

--
-- 表的结构 `black_config`
--

CREATE TABLE `black_config` (
  `k` varchar(255) NOT NULL DEFAULT '',
  `v` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `black_config`
--

INSERT INTO `black_config` (`k`, `v`) VALUES
('sitename', '我的世界黑名单系统'),
('keywords', '我的世界黑名单系统'),
('description', '我的世界黑名单系统'),
('limit', '1000');

-- --------------------------------------------------------

--
-- 表的结构 `black_list`
--

CREATE TABLE `black_list` (
  `id` int(11) NOT NULL,
  `qq` text,
  `level` int(1) NOT NULL,
  `date` datetime NOT NULL,
  `note` text COMMENT '拉黑原因',
  `source` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转储表的索引
--

--
-- 表的索引 `black_admin`
--
ALTER TABLE `black_admin`
  ADD PRIMARY KEY (`uid`);

--
-- 表的索引 `black_config`
--
ALTER TABLE `black_config`
  ADD PRIMARY KEY (`k`(10));

--
-- 表的索引 `black_list`
--
ALTER TABLE `black_list`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `black_admin`
--
ALTER TABLE `black_admin`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `black_list`
--
ALTER TABLE `black_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
