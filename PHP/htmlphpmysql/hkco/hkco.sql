-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2021 年 09 月 03 日 03:36
-- 伺服器版本: 5.5.39
-- PHP 版本： 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `hkco`
--

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`idno` tinyint(3) unsigned zerofill NOT NULL,
  `kind1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `產品編號` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `產品名稱` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `圖檔` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `單價` smallint(10) NOT NULL,
  `規格` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `庫存量` smallint(10) NOT NULL,
  `安全存量` smallint(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- 資料表的匯出資料 `product`
--

INSERT INTO `product` (`idno`, `kind1`, `產品編號`, `產品名稱`, `圖檔`, `單價`, `規格`, `庫存量`, `安全存量`) VALUES
(001, 'toy', 'toy01', '紳士鳥', 'bank-1.wmf', 200, '陶瓷', 770, 100),
(002, 'toy', 'toy02', '呆呆鱷', 'bank-11.wmf', 150, '陶瓷', 300, 100),
(003, 'toy', 'toy03', '星光魚', 'bank-13.wmf', 300, '陶瓷', 300, 100),
(004, 'toy', 'toy04', '淘氣鳥', 'bank-37.wmf', 120, '橡膠', 300, 100),
(005, 'toy', 'toy05', '花花豬', 'bank-56.wmf', 180, '陶瓷', 70, 100),
(006, 'toy', 'toy06', '跳跳蛙', 'bank-123.wmf', 110, '橡膠', 300, 100),
(007, 'toy', 'toy07', '綠毛怪', 'bank-150.wmf', 80, '橡膠', 300, 100),
(008, 'toy', 'toy08', '乖巧免', 'bank-152.wmf', 180, '陶瓷', 300, 100),
(009, 'toy', 'toy09', '聖誕老人', 'bank-164.wmf', 250, '陶瓷', 50, 100),
(010, 'toy', 'toy10', '小飛象', 'bank-176.wmf', 130, '橡膠', 300, 100),
(011, 'purses', 'purses01', '棋盤勇士', '01.jpg', 3730, 'polo', 300, 100),
(012, 'purses', 'purses02', '經典綠格', '02.jpg', 660, 'polo', 60, 100),
(013, 'purses', 'purses03', '活力滿點', '03.jpg', 4180, 'polo', 300, 100),
(014, 'purses', 'purses04', '拉鍊扁包', '04.jpg', 3600, 'polo', 300, 100),
(015, 'purses', 'purses05', '梯形拉錬', '05.jpg', 3600, 'polo', 300, 100),
(016, 'purses', 'purses06', '迷人水餃包', '06.jpg', 4030, 'polo', 300, 100),
(017, 'purses', 'purses07', '酷炫帥包', '07.jpg', 5280, 'polo', 300, 100),
(018, 'purses', 'purses08', '文藝精神', '08.jpg', 3430, 'polo', 300, 100),
(019, 'purses', 'purses09', '勇士型男', '09.jpg', 2760, 'polo', 300, 100),
(020, 'purses', 'purses10', '束繩拉鍊小托特', '10.jpg', 3960, 'polo', 300, 100),
(021, 'toy', 'toy11', '紅喜魚', 'bank-180.wmf', 380, '陶瓷', 300, 100),
(022, 'toy', 'toy12', '可愛小猴', 'bank-187.wmf', 820, '陶瓷', 300, 100),
(025, 'cloth', 'cloth01', '休閒衫', 'cloth01.jpg', 500, '不織布', 300, 100),
(026, 'cloth', 'cloth02', '運動衫', 'cloth02.jpg', 550, '排汗化纖布', 600, 100);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`idno`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `product`
--
ALTER TABLE `product`
MODIFY `idno` tinyint(3) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
