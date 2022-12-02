-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2021 年 08 月 11 日 16:48
-- 伺服器版本: 5.5.39
-- PHP 版本： 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `123`
--
--
-- 資料庫： `cdcol`
--

-- --------------------------------------------------------

--
-- 資料表結構 `cds`
--

CREATE TABLE IF NOT EXISTS `cds` (
  `titel` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `interpret` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `jahr` int(11) DEFAULT NULL,
`id` bigint(20) unsigned NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- 資料表的匯出資料 `cds`
--

INSERT INTO `cds` (`titel`, `interpret`, `jahr`, `id`) VALUES
('Beauty', 'Ryuichi Sakamoto', 1990, 1),
('Goodbye Country (Hello Nightclub)', 'Groove Armada', 2001, 4),
('Glee', 'Bran Van 3000', 1997, 5);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `cds`
--
ALTER TABLE `cds`
 ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `cds`
--
ALTER TABLE `cds`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;--
-- 資料庫： `class`
--

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`cid` tinyint(2) unsigned zerofill NOT NULL,
  `cname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `csex` enum('F','M') COLLATE utf8_unicode_ci DEFAULT 'F',
  `cBirthday` date NOT NULL,
  `cEmail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cphone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caddr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 資料表的匯出資料 `students`
--

INSERT INTO `students` (`cid`, `cname`, `csex`, `cBirthday`, `cEmail`, `cphone`, `caddr`) VALUES
(01, '張惠玲', 'F', '1987-04-06', 'elven@superstar.com', '0922988876', '台北市南京東路12號');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`cid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `students`
--
ALTER TABLE `students`
MODIFY `cid` tinyint(2) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;--
-- 資料庫： `phpmyadmin`
--

-- --------------------------------------------------------

--
-- 資料表結構 `pma_bookmark`
--

CREATE TABLE IF NOT EXISTS `pma_bookmark` (
`id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 資料表結構 `pma_column_info`
--

CREATE TABLE IF NOT EXISTS `pma_column_info` (
`id` int(5) unsigned NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin' AUTO_INCREMENT=8 ;

--
-- 資料表的匯出資料 `pma_column_info`
--

INSERT INTO `pma_column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`) VALUES
(1, 'class', 'students', 'cid', '', '', '_', ''),
(2, 'class', 'students', 'cname', '', '', '_', ''),
(3, 'class', 'students', 'csex', '', '', '_', ''),
(4, 'class', 'students', 'cBirthday', '', '', '_', ''),
(5, 'class', 'students', 'cEmail', '', '', '_', ''),
(6, 'class', 'students', 'cphone', '', '', '_', ''),
(7, 'class', 'students', 'caddr', '', '', '_', '');

-- --------------------------------------------------------

--
-- 資料表結構 `pma_designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- 資料表結構 `pma_history`
--

CREATE TABLE IF NOT EXISTS `pma_history` (
`id` bigint(20) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 資料表結構 `pma_navigationhiding`
--

CREATE TABLE IF NOT EXISTS `pma_navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- 資料表結構 `pma_pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
`page_nr` int(10) unsigned NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 資料表結構 `pma_recent`
--

CREATE TABLE IF NOT EXISTS `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- 資料表的匯出資料 `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '[{"db":"class","table":"students"},{"db":"webauth","table":"user_pwd"},{"db":"phpmyadmin","table":"pma_column_info"},{"db":"phpmyadmin","table":"pma_designer_coords"},{"db":"phpmyadmin","table":"pma_history"},{"db":"phpmyadmin","table":"pma_pdf_pages"},{"db":"phpmyadmin","table":"pma_recent"},{"db":"phpmyadmin","table":"pma_relation"},{"db":"cdcol","table":"cds"},{"db":"mysql","table":"user"}]');

-- --------------------------------------------------------

--
-- 資料表結構 `pma_relation`
--

CREATE TABLE IF NOT EXISTS `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- 資料表結構 `pma_savedsearches`
--

CREATE TABLE IF NOT EXISTS `pma_savedsearches` (
`id` int(5) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 資料表結構 `pma_table_coords`
--

CREATE TABLE IF NOT EXISTS `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- 資料表結構 `pma_table_info`
--

CREATE TABLE IF NOT EXISTS `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- 資料表結構 `pma_table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- 資料表結構 `pma_tracking`
--

CREATE TABLE IF NOT EXISTS `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- 資料表結構 `pma_userconfig`
--

CREATE TABLE IF NOT EXISTS `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- 資料表的匯出資料 `pma_userconfig`
--

INSERT INTO `pma_userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-08-11 14:47:34', '{"lang":"zh_TW","collation_connection":"utf8mb4_unicode_ci"}');

-- --------------------------------------------------------

--
-- 資料表結構 `pma_usergroups`
--

CREATE TABLE IF NOT EXISTS `pma_usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- 資料表結構 `pma_users`
--

CREATE TABLE IF NOT EXISTS `pma_users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pma_column_info`
--
ALTER TABLE `pma_column_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- 資料表索引 `pma_designer_coords`
--
ALTER TABLE `pma_designer_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- 資料表索引 `pma_history`
--
ALTER TABLE `pma_history`
 ADD PRIMARY KEY (`id`), ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- 資料表索引 `pma_navigationhiding`
--
ALTER TABLE `pma_navigationhiding`
 ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- 資料表索引 `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
 ADD PRIMARY KEY (`page_nr`), ADD KEY `db_name` (`db_name`);

--
-- 資料表索引 `pma_recent`
--
ALTER TABLE `pma_recent`
 ADD PRIMARY KEY (`username`);

--
-- 資料表索引 `pma_relation`
--
ALTER TABLE `pma_relation`
 ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`), ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- 資料表索引 `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- 資料表索引 `pma_table_coords`
--
ALTER TABLE `pma_table_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- 資料表索引 `pma_table_info`
--
ALTER TABLE `pma_table_info`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- 資料表索引 `pma_table_uiprefs`
--
ALTER TABLE `pma_table_uiprefs`
 ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- 資料表索引 `pma_tracking`
--
ALTER TABLE `pma_tracking`
 ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- 資料表索引 `pma_userconfig`
--
ALTER TABLE `pma_userconfig`
 ADD PRIMARY KEY (`username`);

--
-- 資料表索引 `pma_usergroups`
--
ALTER TABLE `pma_usergroups`
 ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- 資料表索引 `pma_users`
--
ALTER TABLE `pma_users`
 ADD PRIMARY KEY (`username`,`usergroup`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `pma_column_info`
--
ALTER TABLE `pma_column_info`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- 使用資料表 AUTO_INCREMENT `pma_history`
--
ALTER TABLE `pma_history`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
MODIFY `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT;--
-- 資料庫： `test`
--

DELIMITER $$
--
-- Procedure
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `test_multi_sets`()
    DETERMINISTIC
begin
        select user() as first_col;
        select user() as first_col, now() as second_col;
        select user() as first_col, now() as second_col, now() as third_col;
        end$$

DELIMITER ;
--
-- 資料庫： `webauth`
--

-- --------------------------------------------------------

--
-- 資料表結構 `user_pwd`
--

CREATE TABLE IF NOT EXISTS `user_pwd` (
  `name` char(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` char(32) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- 資料表的匯出資料 `user_pwd`
--

INSERT INTO `user_pwd` (`name`, `pass`) VALUES
('xampp', 'wampp');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `user_pwd`
--
ALTER TABLE `user_pwd`
 ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
