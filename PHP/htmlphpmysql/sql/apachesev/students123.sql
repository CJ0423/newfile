-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生日期: 2018 年 05 月 31 日 02:47
-- 伺服器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `students`
--

-- --------------------------------------------------------

--
-- 表的結構 `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `no` varchar(8) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(8) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `chinese` tinyint(4) NOT NULL DEFAULT '0',
  `math` tinyint(4) NOT NULL DEFAULT '0',
  `nature` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 轉存資料表中的資料 `grade`
--

INSERT INTO `grade` (`no`, `name`, `chinese`, `math`, `nature`) VALUES
('A8608001', '王大明', 88, 96, 92),
('A8608002', '陳小新', 95, 89, 99),
('A8608003', '小紅豆', 80, 86, 89),
('A8608004', '章小倩', 85, 91, 93),
('A8608005', '李青青', 90, 96, 80),
('A8608007', '陳俊榮', 100, 98, 95),
('A8608008', '張美麗', 79, 87, 86),
('A8608011', '張小毛', 88, 95, 100),
('A8608013', '趙大明', 76, 80, 86);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
