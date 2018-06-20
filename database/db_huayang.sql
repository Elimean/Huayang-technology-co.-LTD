-- phpMyAdmin SQL Dump
-- version 4.0.10.11
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2018-06-13 18:08:19
-- 服务器版本: 5.5.54-log
-- PHP 版本: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `db_huayang`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_pwd` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pwd`) VALUES
(1, 'admin', '666888');

-- --------------------------------------------------------

--
-- 表的结构 `t_member_info`
--

CREATE TABLE IF NOT EXISTS `t_member_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mem_name` varchar(50) NOT NULL,
  `mem_tel` varchar(50) NOT NULL,
  `imei_1` varchar(50) NOT NULL,
  `imei_2` varchar(50) NOT NULL,
  `mem_score` varchar(50) NOT NULL,
  `mem_data` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- 表的结构 `t_service_info`
--

CREATE TABLE IF NOT EXISTS `t_service_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imei` varchar(50) NOT NULL,
  `after_sales` longtext NOT NULL,
  `maintenance` longtext NOT NULL,
  `mtn_data` varchar(50) NOT NULL,
  `mtn_name` varchar(50) NOT NULL,
  `mtn_take_data` varchar(50) NOT NULL,
  `note` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
