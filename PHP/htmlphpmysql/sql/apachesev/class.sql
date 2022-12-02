-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生日期: 2016 年 11 月 18 日 04:11
-- 伺服器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `class`
--
CREATE DATABASE `class`;
USE class;
-- --------------------------------------------------------

--
-- 表的結構 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `cid` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `cname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `csex` enum('F','M') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'F',
  `cbirthday` date NOT NULL,
  `cemail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cphone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `caddr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- 轉存資料表中的資料 `student`
--

INSERT INTO `student` (`cid`, `cname`, `csex`, `cbirthday`, `cemail`, `cphone`, `caddr`) VALUES
(1, '張惠玲', 'F', '1987-04-04', 'elven@superstar.com', '0922988876', '台北市南京東路12號'),
(2, '彭建志', 'M', '1987-01-01', 'jinglun@superstar.com', '0918181111', '台北市敦化北路168號'),
(3, '謝耿鴻', 'M', '1987-08-11', 'sugie@superstar.com', '0914530768', '台中市大業路66號'),
(4, '蔣志明', 'M', '1984-06-20', 'shane@superstar.com', '0946820035', '台中市台灣大道六段1018號'),
(5, '王佩珊', 'F', '1988-02-15', 'ivy@superstar.com', '0920981233', '台中市漢口路13號'),
(6, '陳大明', 'M', '1985-03-12', 'cdm@superstar.com', '0912333456', '台中市大墩路238號'),
(7, '簡雅惠', 'F', '1986-09-10', 'jiv@superstar.com', '0936555789', '台中市文心路100號'),
(8, '賴秀英', 'F', '1986-12-10', 'lsi@superstar.com', '0907408965', '台中市惠來路1號'),
(9, '張雅琪', 'F', '1988-12-01', 'cic@superstar.com', '0916456723', '台南市東明路266號'),
(10, '許朝元', 'M', '1993-08-10', 'slbrt@superstar.com', '0918976588', '台東市東台路29號');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
