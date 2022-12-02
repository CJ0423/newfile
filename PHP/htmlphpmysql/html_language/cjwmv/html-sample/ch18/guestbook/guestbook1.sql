﻿-- phpMyAdmin SQL Dump
-- version 2.6.0-pl1
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Oct 04, 2004, 11:10 AM
-- 伺服器版本: 4.0.21
-- PHP 版本: 5.0.2
-- 
-- 資料庫: `guestbook`
-- 
-- CREATE DATABASE `guestbook`;
-- USE guestbook;

-- --------------------------------------------------------

-- 
-- 資料表格式： `message`
-- 

-- CREATE TABLE `message` (
--  `id` int(11) NOT NULL auto_increment,
--  `author` varchar(10) NOT NULL default '',
--  `subject` tinytext NOT NULL,
--  `content` text NOT NULL,
--  `date` datetime NOT NULL default '0000-00-00 00:00:00',
--  PRIMARY KEY  (`id`)
-- ) COMMENT='訪客留言表' AUTO_INCREMENT=28 ;

-- 
-- 列出以下資料庫的數據： `message`
-- 

INSERT INTO `message` VALUES (1, '陳小貞', '超級大富翁', '根據網路最新票選，網友們心目中最想看到蕭薔參加台視超級大富翁的節目，希望有一天真的可以看到蕭美人上陣。', '2004-08-01 15:28:36');
INSERT INTO `message` VALUES (2, '陳俊榮', '王力宏發新片了', '好消息告訴大家，王力宏發新片了，裡面有好聽的「龍的傳人」，建議大家可以用力聽聽看喔～！', '2004-08-01 15:30:03');
INSERT INTO `message` VALUES (3, '小咪', '狄鶯和孫鵬離婚了', '好勁爆的消息喔，甫生子的狄鶯才剛和孫鵬結婚，未料又旋風似的離婚了，令人不禁感嘆現代人的婚姻真難維繫。', '2004-08-01 15:32:34');
INSERT INTO `message` VALUES (4, '孫小美', '好戲鹿鼎記上場', '華視最近上演的新戲鹿鼎記，不僅女主角們陣容堅強，有朱茵、林心如、舒淇、陳法蓉...，更維持了張衛健一貫的搞笑風格，相當有看頭。', '2004-08-01 15:35:54');
INSERT INTO `message` VALUES (5, 'Amily', '酷酷的謝霆鋒', '記得日前謝霆鋒在記者會上，原本愉快的他，卻被記者問了 「如何當好繼父」的問題，而神情不快並斥責記者無聊，身為歌迷的我們，希望記者們不要再老是問一些這類的問題，多給歌手們一點私人空間。', '2004-08-01 15:38:29');
INSERT INTO `message` VALUES (6, '皮皮', '東東與張柏芝公佈戀情', '繼天后王菲與謝霆鋒公開戀情之後，又有一對俊男美女公開戀情，那就是東東和張柏芝，如果藝人們都勇於承認戀情，那麼狗仔隊可要失業了。', '2004-08-01 15:40:55');
INSERT INTO `message` VALUES (7, '颺', 'GiGi出精選集了', '梁詠琪  GiGi 在與鄭伊健的戀情風波之後，重新出發，推出了個人第一張精選集，內有膽小鬼、洗臉、短髮、愛的代價等好歌。', '2004-08-01 15:43:24');
INSERT INTO `message` VALUES (8, '阿淵', '魔女的條件重播', '哈日族最喜歡的魔女的條件又要重播了，這次是在東森綜合台，8 月 22 日 20:00 開始，喜歡菜菜子的朋友們千萬不要錯過了。', '2004-08-01 15:48:06');
INSERT INTO `message` VALUES (9, '阿淵', '神啊！請給我多一點時間要重播', '深田恭子和金城武合作演出的日劇 "神啊！請給我多一點時間" 要在東森綜合台重播，時間是 8 月 3 日 20:00。', '2004-08-01 15:52:02');
INSERT INTO `message` VALUES (10, '哈日寶寶', '惡作劇之吻要重播', '由漫畫改編的惡作劇之吻是一齣有趣的校園喜劇，男主角柏原崇個性孤傲，女主角佐藤藍子熱情活潑，衛視中文台將於 8 月 2日 20:00 重播該劇。', '2004-08-01 15:54:50');
INSERT INTO `message` VALUES (11, '哈日寶寶', '日本最具人氣藝人', '日本最近一本問卷統計出，十大最具人氣藝人分別為早安少女組、倉木麻衣、宇多田、椎名林禽、濱崎步、小柳由紀、優香、福山雅治、藤井龍和 AIKO。', '2004-08-01 15:58:59');
INSERT INTO `message` VALUES (12, '大餅', '中視八點挑戰金頭腦', '中視八點檔將於八月份推出益智節目，取代傳統的連續劇，對於不喜歡收看連續劇的朋友，這或野i以是另一個選擇。', '2004-08-01 16:01:06');
INSERT INTO `message` VALUES (13, '聽風在唱', '雙陳飛車記', '日前演出飛車追逐的雙陳，陳俊生、陳明真召開記者會，說明兩人並無發生衝突，更無腳踹車門，拉扯第三者之激烈動作，希望就此平息此風波。', '2004-08-01 16:03:45');
INSERT INTO `message` VALUES (14, '小倩', '徐若萱代言遠傳易付卡', '繼陳曉東之後，徐若萱成為遠傳易付卡的第二位代言人，而且該廣告已密集的在大各電視台播出，讓我們可以目睹徐若萱跳街舞的漫妙舞姿。', '2004-08-01 16:05:47');
INSERT INTO `message` VALUES (15, '佩佩', '吳宗憲新歡蜘蛛女', '原本以為吳宗憲在與陳孝萱分手之後會失志一陣子，沒想到這位天王有著通天本領，紅粉知己前仆後繼，立刻又傳出有蜘蛛女成為天王的新歡，看來天王是不會寂寞的。', '2004-08-01 16:08:46');
INSERT INTO `message` VALUES (16, '小倩', '大 S 徵求男友', '與酷龍傳出誹聞的大 S 日前在我猜我猜我猜猜的節目中，公開徵求男友，祝福大 S 早日找到適合的對象，能夠和小 S 一樣幸福的走上紅地毯的另一端。', '2004-08-01 16:10:47');
INSERT INTO `message` VALUES (17, '小聰明', '猜猜小叮噹的身高', '您知道小叮噹的身高和體重是一樣的數字嗎? 這是我在電視節目上看到的，答案是129.3喔。', '2004-08-01 16:13:51');
INSERT INTO `message` VALUES (18, '陳小貞', '天搖地動', '"天搖地動" 電影描述的是 1991 年 10 月漁船安麗雅號為了增加漁獲量，於是開往弗萊明角，未料當地氣象預告超級颶風葛瑞斯正在接近中，安麗雅號與其它船隻即將面臨前所未有的危機。', '2004-08-01 16:17:50');
INSERT INTO `message` VALUES (19, '陳俊榮', '超視八點新戲秋天的童話', '超視八點新戲秋天的童話是一個美麗純樸的少女、一個期待真愛的富家子弟、一個真心相待的青梅竹馬交織而成的美麗秋天童話，播出時間為 7 月 31 日起星期一到五晚間 10:00。', '2004-08-01 16:21:02');
INSERT INTO `message` VALUES (20, '阿淵', '臥虎藏龍開啟武俠電影新紀元', '國際知名導演李安的新作 "臥虎藏龍" 是第一部好萊塢投資的中國武俠電影，在台甫一推出便創下票房佳績。', '2004-08-01 16:24:00');
INSERT INTO `message` VALUES (21, 'Amily', '王菲開口 20 字就賺進 80 萬', '超級天后王菲在受邀參加一個網站的聊天室，只有開口說了 20 個字，有 80 萬元入袋，真是令人羨慕，而且天后還是保持著其一貫的酷酷作風，高興回答就回個是，不高興回答就不回答囉。', '2004-08-01 16:28:31');
INSERT INTO `message` VALUES (22, '小瓜呆', '張曼娟進駐 News98 八點檔', '張曼娟受 News98 電台之邀，將主持其八點檔之節目，內容將以溫馨導向。', '2004-08-01 17:48:19');
INSERT INTO `message` VALUES (23, '陳小貞', '蕭亞軒夏日薔薇演唱會', '新少男殺手蕭亞軒將於 8 月 26 日下午 6:00 舉辦個人演唱會，據唱片公司表示，這場演唱會斥資千萬，同時蕭亞軒正加緊努力排演中。', '2004-08-01 18:00:47');
INSERT INTO `message` VALUES (24, '李寶釵', '張國榮演唱會', '張國榮日前剛完成一場個人演唱會，在這場演唱會中，大家除了可以看到張國榮載歌載舞、精采萬分的演出之外，還可以看到大帥哥穿上數套裙裝的造型，真是讓女生看了也忌妒。', '2004-08-01 21:21:52');
INSERT INTO `message` VALUES (25, '小瓜呆', '七夕的雨', '昨天看到台視的超級大富翁節目，裡面有一個題目是七夕的雨是誰的眼瓷 A 答案分別為 1. 織女  2. 牛郎  3. 喜鵲  4. 王母娘娘，未料答題的情侶竟然回答喜鵲，喔，我的老天爺啊，真是好神奇的答案。', '2004-08-01 21:26:56');
INSERT INTO `message` VALUES (26, '小倩', '一窩蜂的益智節目', '回想在有線電視開放經營的時候，電視台一窩蜂的推出靈異節目，而現在，則是一窩蜂的推出益智節目，從星期一到星期五，幾乎天天都有，令人不禁感嘆，為何節目的製作人總是如此無創意，往往是互相抄襲，甚至很多節目是抄襲自日本，節目製作人請多多加油了。', '2004-08-01 21:31:06');
INSERT INTO `message` VALUES (27, '童言', '驚天動地 60 秒', '這部電影是描述藍道為一名頂尖的偷車賊，其最高記錄是在 60 秒之內偷走一部車。由於不希望自己的弟弟步其後塵，藍道決定金盆洗手，未料數年後，弟弟闖下大禍，藍道必須在四天內偷走 50 部名車，才能幫助弟弟，就在藍道開始動手的時候，過去來不及逮捕藍道的警方亦盯上他，最後，藍道能否在 24 小時之內完成任務解救弟弟呢？請看電影結局。', '2004-08-03 14:32:20');
