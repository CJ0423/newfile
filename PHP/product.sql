-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2022 年 12 月 19 日 02:06
-- 伺服器版本: 5.5.39
-- PHP 版本： 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `product`
--

-- --------------------------------------------------------

--
-- 資料表結構 `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `no` int(10) unsigned NOT NULL DEFAULT '0',
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `brand` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `specification` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `price` int(11) NOT NULL DEFAULT '0',
  `date` date NOT NULL DEFAULT '0000-00-00',
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `price`
--

INSERT INTO `price` (`no`, `category`, `brand`, `specification`, `price`, `date`, `url`) VALUES
(301, '主機板', '華碩', 'ASUS P4C800 Deluxe', 7200, '2004-06-02', 'www.asus.com.tw'),
(302, '主機板', '陞技', 'ABIT IC7-G', 6200, '2004-07-25', 'www.abit.com.tw'),
(303, '主機板', '技嘉', 'GigaByte GA-8KNXP Ultra', 12250, '2004-08-09', 'www.gigabyte.com.tw'),
(304, '主機板', '陞技', 'ABIT IS7-E', 2800, '2004-08-05', 'www.abit.com.tw'),
(305, '主機板', '華碩', 'ASUS P4G8X', 5600, '2004-08-02', 'www.asus.com.tw'),
(306, '主機板', '微星', 'MSI GNB Max (MS-6565)', 6600, '2004-07-30', 'www.msi.com.tw'),
(307, '主機板', '技嘉', 'GigaByte GA-8KNXP', 7150, '2004-04-05', 'www.gigabyte.com.tw'),
(308, '主機板', '微星', 'MSI MS-865P Neo-L', 2250, '2004-08-10', 'www.msi.com.tw'),
(309, '主機板', '華碩', 'ASUS P4G8X Deluxe', 6200, '2004-07-02', 'www.asus.com.tw'),
(310, '主機板', '技嘉', 'GigaByte GA-8IPE1000 Pro', 3500, '2004-07-05', 'www.gigabyte.com.tw'),
(311, 'CPU', 'Intel', 'P4-3.2GHz E', 9200, '2004-07-15', 'www.intel.com.tw'),
(312, 'CPU', 'Intel', 'P4-2.8GHz E', 5700, '2004-07-15', 'www.intel.com.tw'),
(313, 'CPU', 'Intel', 'Intel Celeron 2.6G', 2950, '2004-07-15', 'www.intel.com.tw'),
(314, 'CPU', 'AMD', 'AMD Athlon 64 3200+', 9600, '2004-08-01', 'www.amd.com'),
(315, 'CPU', 'AMD', 'AMD AthlonXP 3200+', 6500, '2004-08-01', 'www.amd.com'),
(316, '記憶體', '創見', 'Transcend 512MB DDR-400', 3100, '2004-08-10', 'www.transcend.com.tw'),
(317, '記憶體', '勝創', 'Kingmax 512MB DDR-466', 3250, '2004-08-10', 'www.kingmax.com.tw'),
(318, '記憶體', '金士頓', 'Kingston 512MB DDR-400', 2950, '2004-08-15', 'www.kingston.com'),
(319, '記憶體', '創見', 'Transcend 512MB DDR-333', 3230, '2004-08-15', 'www.transcend.com.tw'),
(320, '記憶體', '勝創', 'Kingmax 512MB DDR-433', 2950, '2004-08-15', 'www.kingmax.com.tw'),
(321, '顯示卡', '華碩', 'A9800XT', 20275, '2004-08-01', 'www.asus.com.tw'),
(322, '顯示卡', '麗台', 'Quadro 4 NVS400/ 64M', 19445, '2004-08-01', 'www.leadtek.com.tw'),
(323, '顯示卡', '麗台', 'Leadtek WinFast A350 Ultra TDH', 17645, '2004-08-01', 'www.leadtek.com.tw'),
(324, '顯示卡', '華碩', 'ASUS AGP-V9520 Magic', 2030, '2004-08-01', 'www.asus.com.tw'),
(325, '硬碟', 'Western Digital', 'Western Digital Caviar WD2500JB', 7090, '2004-08-10', 'www.westerndigital.com'),
(326, '硬碟', 'HITACHI', 'HITACHI Deskstar 180GXP (180GB)', 3600, '2004-08-10', 'www.hitachi.com'),
(327, '硬碟', 'Western Digital', 'Western Digital Caviar WD2000JB', 4990, '2004-08-10', 'www.westerndigital.com'),
(328, '硬碟', 'Western Digital', 'Western Digital Caviar WD800JB', 2650, '2004-08-10', 'www.westerndigital.com'),
(329, '硬碟', 'HITACHI', 'HITACHI Deskstar 7K250(160GB/2MB)', 3050, '2004-08-10', 'www.hitachi.com'),
(330, '螢幕', '優派', 'ViewSonic VG800', 17750, '2004-08-05', 'www.viewsonic.com.tw'),
(331, '螢幕', 'EIZO', 'EIZO FlexScan L768', 30975, '2004-08-05', 'www.eizo.com.tw'),
(332, '螢幕', '優派', 'ViewSonic VP191b', 32000, '2004-08-01', 'www.viewsonic.com.tw'),
(333, '螢幕', 'EIZO', 'EIZO FlexScan L767', 28250, '2004-08-05', 'www.eizo.com.tw'),
(334, '印表機', '惠普', 'HP color LaserJet 2550L', 19999, '2004-08-07', 'www.hp.com.tw'),
(335, '印表機', 'Canon', 'Canon LBP-800', 8500, '2004-08-07', 'www.abico.com.tw'),
(336, '印表機', 'EPSON', 'EPSON EPL-6200L', 5900, '2004-08-07', 'www.epson.com.tw'),
(337, '掃描器', 'HP', 'HP Scanjet 5590', 19900, '2004-08-02', 'www.hp.com.tw'),
(338, '掃描器', 'UMAX', 'UMAX Astra 3450U', 2600, '2004-08-01', 'www.umax.com.tw'),
(339, '掃描器', 'UMAX', 'UMAX Astra 4000U', 2800, '2004-08-01', 'www.umax.com.tw'),
(340, 'CPU', 'AMD', 'AMD AthlonXP 2000+', 1800, '2004-07-25', 'www.amd.com');

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`idco` tinyint(2) unsigned zerofill NOT NULL,
  `class` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `productNumber` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `productName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `品號` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- 資料表的匯出資料 `products`
--

INSERT INTO `products` (`idco`, `class`, `productNumber`, `productName`, `img`, `price`, `品號`) VALUES
(01, '卡比', 'purses01', '卡比商品1', '../images/(1).jpg', '10', 'good牌'),
(02, '卡比', 'purses02', '卡比商品2', '../images/(2).jpg', '10', 'good牌'),
(03, '卡比', 'purses03', '卡比商品3', '../images/(3).jpg', '10', 'good牌'),
(04, '卡比', 'purses04', '卡比商品4', '../images/(4).jpg', '10', 'good牌'),
(05, '卡比', 'purses05', '卡比商品5', '../images/(5).jpg', '10', 'good牌'),
(06, '卡比', 'purses06', '卡比商品6', '../images/(6).jpg', '10', 'good牌'),
(07, '卡比', 'purses07', '卡比商品7', '../images/(7).jpg', '10', 'good牌'),
(08, '卡比', 'purses08', '卡比商品8', '../images/(8).jpg', '10', 'good牌'),
(09, '卡比', 'purses09', '卡比商品9', '../images/(9).jpg', '10', 'good牌'),
(10, '卡比', 'purses10', '卡比商品10', '../images/(10).jpg', '10', 'good牌'),
(11, '胖丁', 'purses01', '原始胖丁', '../images/01.jpg', '3730', 'polo'),
(12, '胖丁', 'purses02', '生氣胖丁', '../images/02.jpg', '660', 'polo'),
(13, '胖丁', 'purses03', '開心胖丁', '../images/03.jpg', '4180', 'polo'),
(14, '胖丁', 'purses04', '胖~可丁', '../images/04.jpg', '3600', 'polo'),
(15, '胖丁', 'purses05', '組合胖丁', '../images/05.jpg', '3600', 'polo'),
(16, '胖丁', 'purses06', '迷人胖丁', '../images/06.jpg', '3600', 'polo'),
(17, '胖丁', 'purses07', '充滿決心的胖丁', '../images/07.jpg', '3280', 'polo'),
(18, '胖丁', 'purses08', '很生氣的胖丁', '../images/08.jpg', '3430', 'polo'),
(19, '胖丁', 'purses09', '喜樂胖丁', '../images/09.jpg', '2760', 'polo'),
(20, '胖丁', 'purses10', '傲驕胖丁', '../images/10.jpg', '3960', 'polo');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `price`
--
ALTER TABLE `price`
 ADD PRIMARY KEY (`no`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`idco`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `products`
--
ALTER TABLE `products`
MODIFY `idco` tinyint(2) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
