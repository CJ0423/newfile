-- phpMyAdmin SQL Dump
-- version 2.6.0-pl1
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Oct 04, 2004, 11:12 AM
-- 伺服器版本: 4.0.21
-- PHP 版本: 5.0.2
-- 
-- 資料庫: `students`
-- 
CREATE DATABASE `students`;
USE students;

-- --------------------------------------------------------

-- 
-- 資料表格式： `grade`
-- 

CREATE TABLE `grade` (
  `no` varchar(8) NOT NULL default '',
  `name` varchar(8) NOT NULL default '',
  `chinese` tinyint(4) NOT NULL default '0',
  `math` tinyint(4) NOT NULL default '0',
  `nature` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- 列出以下資料庫的數據： `grade`
-- 

INSERT INTO `grade` VALUES ('A8608001', '王大明', 88, 96, 92);
INSERT INTO `grade` VALUES ('A8608002', '陳小新', 95, 89, 99);
INSERT INTO `grade` VALUES ('A8608003', '小紅豆', 80, 86, 89);
INSERT INTO `grade` VALUES ('A8608004', '章小倩', 85, 91, 93);
INSERT INTO `grade` VALUES ('A8608005', '李青青', 90, 96, 80);
INSERT INTO `grade` VALUES ('A8608006', '孫小美', 80, 77, 82);
INSERT INTO `grade` VALUES ('A8608007', '陳俊榮', 100, 98, 95);
INSERT INTO `grade` VALUES ('A8608008', '張美麗', 79, 87, 86);
INSERT INTO `grade` VALUES ('A8608009', '林娟娟', 75, 73, 79);
INSERT INTO `grade` VALUES ('A8608010', '鍾玲玲', 78, 83, 84);
