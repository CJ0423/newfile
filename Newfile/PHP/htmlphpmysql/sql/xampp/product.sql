-- phpMyAdmin SQL Dump
-- version 2.6.0-pl1
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Oct 04, 2004, 11:11 AM
-- 伺服器版本: 4.0.21
-- PHP 版本: 5.0.2
-- 
-- 資料庫: `product`
-- 
CREATE DATABASE `product`;
USE product;

-- --------------------------------------------------------

-- 
-- 資料表格式： `price`
-- 

CREATE TABLE `price` (
  `no` int(10) unsigned NOT NULL default '0',
  `category` varchar(20) NOT NULL default '',
  `brand` varchar(20) NOT NULL default '',
  `specification` varchar(100) NOT NULL default '',
  `price` int(11) NOT NULL default '0',
  `date` date NOT NULL default '0000-00-00',
  `url` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- 列出以下資料庫的數據： `price`
-- 

INSERT INTO `price` VALUES (301, '主機板', '華碩', 'ASUS P4C800 Deluxe', 7200, '2004-06-02', 'www.asus.com.tw');
INSERT INTO `price` VALUES (302, '主機板', '陞技', 'ABIT IC7-G', 6200, '2004-07-25', 'www.abit.com.tw');
INSERT INTO `price` VALUES (303, '主機板', '技嘉', 'GigaByte GA-8KNXP Ultra', 12250, '2004-08-09', 'www.gigabyte.com.tw');
INSERT INTO `price` VALUES (304, '主機板', '陞技', 'ABIT IS7-E', 2800, '2004-08-05', 'www.abit.com.tw');
INSERT INTO `price` VALUES (305, '主機板', '華碩', 'ASUS P4G8X', 5600, '2004-08-02', 'www.asus.com.tw');
INSERT INTO `price` VALUES (306, '主機板', '微星', 'MSI GNB Max (MS-6565)', 6600, '2004-07-30', 'www.msi.com.tw');
INSERT INTO `price` VALUES (307, '主機板', '技嘉', 'GigaByte GA-8KNXP', 7150, '2004-04-05', 'www.gigabyte.com.tw');
INSERT INTO `price` VALUES (308, '主機板', '微星', 'MSI MS-865P Neo-L', 2250, '2004-08-10', 'www.msi.com.tw');
INSERT INTO `price` VALUES (309, '主機板', '華碩', 'ASUS P4G8X Deluxe', 6200, '2004-07-02', 'www.asus.com.tw');
INSERT INTO `price` VALUES (310, '主機板', '技嘉', 'GigaByte GA-8IPE1000 Pro', 3500, '2004-07-05', 'www.gigabyte.com.tw');
INSERT INTO `price` VALUES (311, 'CPU', 'Intel', 'P4-3.2GHz E', 9200, '2004-07-15', 'www.intel.com.tw');
INSERT INTO `price` VALUES (312, 'CPU', 'Intel', 'P4-2.8GHz E', 5700, '2004-07-15', 'www.intel.com.tw');
INSERT INTO `price` VALUES (313, 'CPU', 'Intel', 'Intel Celeron 2.6G', 2950, '2004-07-15', 'www.intel.com.tw');
INSERT INTO `price` VALUES (314, 'CPU', 'AMD', 'AMD Athlon 64 3200+', 9600, '2004-08-01', 'www.amd.com');
INSERT INTO `price` VALUES (315, 'CPU', 'AMD', 'AMD AthlonXP 3200+', 6500, '2004-08-01', 'www.amd.com');
INSERT INTO `price` VALUES (316, '記憶體', '創見', 'Transcend 512MB DDR-400', 3100, '2004-08-10', 'www.transcend.com.tw');
INSERT INTO `price` VALUES (317, '記憶體', '勝創', 'Kingmax 512MB DDR-466', 3250, '2004-08-10', 'www.kingmax.com.tw');
INSERT INTO `price` VALUES (318, '記憶體', '金士頓', 'Kingston 512MB DDR-400', 2950, '2004-08-15', 'www.kingston.com');
INSERT INTO `price` VALUES (319, '記憶體', '創見', 'Transcend 512MB DDR-333', 3230, '2004-08-15', 'www.transcend.com.tw');
INSERT INTO `price` VALUES (320, '記憶體', '勝創', 'Kingmax 512MB DDR-433', 2950, '2004-08-15', 'www.kingmax.com.tw');
INSERT INTO `price` VALUES (321, '顯示卡', '華碩', 'A9800XT', 20275, '2004-08-01', 'www.asus.com.tw');
INSERT INTO `price` VALUES (322, '顯示卡', '麗台', 'Quadro 4 NVS400/ 64M', 19445, '2004-08-01', 'www.leadtek.com.tw');
INSERT INTO `price` VALUES (323, '顯示卡', '麗台', 'Leadtek WinFast A350 Ultra TDH', 17645, '2004-08-01', 'www.leadtek.com.tw');
INSERT INTO `price` VALUES (324, '顯示卡', '華碩', 'ASUS AGP-V9520 Magic', 2030, '2004-08-01', 'www.asus.com.tw');
INSERT INTO `price` VALUES (325, '硬碟', 'Western Digital', 'Western Digital Caviar WD2500JB', 7090, '2004-08-10', 'www.wdc.com');
INSERT INTO `price` VALUES (326, '硬碟', 'HITACHI', 'HITACHI Deskstar 180GXP (180GB)', 3600, '2004-08-10', 'www.hitachi.com');
INSERT INTO `price` VALUES (327, '硬碟', 'Western Digital', 'Western Digital Caviar WD2000JB', 4990, '2004-08-10', 'www.wdc.com');
INSERT INTO `price` VALUES (328, '硬碟', 'Western Digital', 'Western Digital Caviar WD800JB', 2650, '2004-08-10', 'www.wdc.com');
INSERT INTO `price` VALUES (329, '硬碟', 'HITACHI', 'HITACHI Deskstar 7K250(160GB/2MB)', 3050, '2004-08-10', 'www.hitachi.com');
INSERT INTO `price` VALUES (330, '螢幕', '優派', 'ViewSonic VG800', 17750, '2004-08-05', 'www.viewsonic.com.tw');
INSERT INTO `price` VALUES (331, '螢幕', 'EIZO', 'EIZO FlexScan L768', 30975, '2004-08-05', 'www.eizo.com.tw');
INSERT INTO `price` VALUES (332, '螢幕', '優派', 'ViewSonic VP191b', 32000, '2004-08-01', 'www.viewsonic.com.tw');
INSERT INTO `price` VALUES (333, '螢幕', 'EIZO', 'EIZO FlexScan L767', 28250, '2004-08-05', 'www.eizo.com.tw');
INSERT INTO `price` VALUES (334, '印表機', '惠普', 'HP color LaserJet 2550L', 19999, '2004-08-07', 'www.hp.com.tw');
INSERT INTO `price` VALUES (335, '印表機', 'Canon', 'Canon LBP-800', 8500, '2004-08-07', 'www.abico.com.tw');
INSERT INTO `price` VALUES (336, '印表機', 'EPSON', 'EPSON EPL-6200L', 5900, '2004-08-07', 'www.epson.com.tw');
INSERT INTO `price` VALUES (337, '掃描器', 'HP', 'HP Scanjet 5590', 19900, '2004-08-02', 'www.hp.com.tw');
INSERT INTO `price` VALUES (338, '掃描器', 'UMAX', 'UMAX Astra 3450U', 2600, '2004-08-01', 'www.umax.com.tw');
INSERT INTO `price` VALUES (339, '掃描器', 'UMAX', 'UMAX Astra 4000U', 2800, '2004-08-01', 'www.umax.com.tw');
