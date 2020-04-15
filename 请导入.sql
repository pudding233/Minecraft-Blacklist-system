-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost:3306
-- 生成日期: 2020 年 04 月 15 日 19:18
-- 服务器版本: 5.6.47-log
-- PHP 版本: 5.6.40

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `s6863196`
--

-- --------------------------------------------------------

--
-- 表的结构 `black_admin`
--

CREATE TABLE IF NOT EXISTS `black_admin` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `last` datetime NOT NULL,
  `dlip` varchar(15) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `black_admin`
--

INSERT INTO `black_admin` (`uid`, `user`, `pass`, `last`, `dlip`, `active`) VALUES
(1, 'admin', '91b2b0f1fc2dd1a6c27987ffd72c8d4b', '2020-04-15 19:13:59', '117.182.224.92', 1);

-- --------------------------------------------------------

--
-- 表的结构 `black_config`
--

CREATE TABLE IF NOT EXISTS `black_config` (
  `k` varchar(255) NOT NULL DEFAULT '',
  `v` text,
  PRIMARY KEY (`k`(10))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `black_config`
--

INSERT INTO `black_config` (`k`, `v`) VALUES
('sitename', '我的世界黑名单系统'),
('keywords', '我的世界黑名单系统'),
('description', '我的世界黑名单系统');

-- --------------------------------------------------------

--
-- 表的结构 `black_list`
--

CREATE TABLE IF NOT EXISTS `black_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qq` text,
  `level` int(1) NOT NULL,
  `date` datetime NOT NULL,
  `note` text COMMENT '拉黑原因',
  `source` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `black_list`
--

INSERT INTO `black_list` (`id`, `qq`, `level`, `date`, `note`, `source`) VALUES
(15, 'ceshi', 1, '2020-04-15 19:11:48', 'ceshi1', 'ceshi2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
