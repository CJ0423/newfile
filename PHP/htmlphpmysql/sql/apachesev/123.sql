-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Dec 27, 2012, 11:39 AM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `test`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `dept`
-- 

CREATE TABLE `dept` (
  `部門名稱` varchar(9) default NULL,
  `部門代號` varchar(9) default NULL,
  `主管姓名` varchar(9) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `dept`
-- 

INSERT INTO `dept` VALUES ('董事長室', 'A01', '林政賢');
INSERT INTO `dept` VALUES ('總經理室', 'B01', '何茂宗');
INSERT INTO `dept` VALUES ('研發一課', 'C01', '徐煥坤');
INSERT INTO `dept` VALUES ('研發二課', 'C02', '江正維');
INSERT INTO `dept` VALUES ('研發三課', 'C03', '易君揚');
INSERT INTO `dept` VALUES ('業務一課', 'D01', '陳曉蘭');
INSERT INTO `dept` VALUES ('業務二課', 'D02', '陳雅賢');
INSERT INTO `dept` VALUES ('業務三課', 'D03', '朱金倉');
INSERT INTO `dept` VALUES ('業務四課', 'D04', '林鵬翔');
INSERT INTO `dept` VALUES ('採購部', 'E01', '黃大倫');
INSERT INTO `dept` VALUES ('維修部', 'F01', '劉柏村');
INSERT INTO `dept` VALUES ('資訊部', 'G01', '林朝財');
INSERT INTO `dept` VALUES ('企劃部', 'H01', '程光民');
INSERT INTO `dept` VALUES ('人事部', 'I01', '楊習仁');
INSERT INTO `dept` VALUES ('行政部', 'J01', '許進發');
INSERT INTO `dept` VALUES ('會計部', 'K01', '胡富傑');
INSERT INTO `dept` VALUES ('圖書室', 'L01', '洪惠芬');

-- --------------------------------------------------------

-- 
-- 資料表格式： `employee`
-- 

CREATE TABLE `employee` (
  `姓名` varchar(8) default NULL,
  `現任職稱` varchar(11) default NULL,
  `部門代號` varchar(4) default NULL,
  `縣市` varchar(7) default NULL,
  `地址` varchar(32) default NULL,
  `電話` varchar(16) default NULL,
  `郵遞區號` varchar(3) default NULL,
  `目前月薪資` double default NULL,
  `年假天數` double default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `employee`
-- 

INSERT INTO `employee` VALUES ('方重圍', '顧問工程師', 'A01', '新竹市', '科學工業園區工業東四路7號2樓', '035-780050', '300', 190550, 7);
INSERT INTO `employee` VALUES ('何茂宗', '總經理', 'B01', '台北市', '中山區松江路301號9樓', '02-5020238', '104', 158620, 14);
INSERT INTO `employee` VALUES ('黃慧萍', '特別助理', 'B01', '台北縣', '新店市寶興路45巷5號3樓', '02-9179261', '231', 84460, 14);
INSERT INTO `employee` VALUES ('林建興', '研發副總', 'B01', '屏東市', '中正路688巷46弄59號', '08-7379531', '900', 142140, 14);
INSERT INTO `employee` VALUES ('蔡豪鈞', '業務副總', 'B01', '桃園縣', '楊梅鎮高榮里新榮路339號', '03-4905265', '326', 37080, 7);
INSERT INTO `employee` VALUES ('林森和', '助理工程師', 'C01', '台北市', '民權東路3段37號12樓', '(02)515-0000', '104', 39140, 7);
INSERT INTO `employee` VALUES ('黃志文', '研發副理', 'C01', '台北市', '光復南路422號2樓之1', '02-7043828', '106', 68186, 14);
INSERT INTO `employee` VALUES ('張藍方', '研發經理', 'C01', '台北市', '松德路159號-1', '02-7593733', '110', 69422, 14);
INSERT INTO `employee` VALUES ('徐煥坤', '資深工程師', 'C01', '台北縣', '土城市福安街75號', '02-2685871', '236', 37080, 14);
INSERT INTO `employee` VALUES ('王德惠', '研發工程師', 'C01', '台北縣', '新店市寶中路123巷1號5樓', '02-9174400', '231', 38110, 7);
INSERT INTO `employee` VALUES ('莊清媚', '研發工程師', 'C02', '台中市', '北區漢口路4段367號11樓', '04-2374989', '404', 33990, 14);
INSERT INTO `employee` VALUES ('張景松', '副工程師', 'C02', '台中市', '西屯區台中工業區工業五路3號', '04-3592345', '407', 32445, 14);
INSERT INTO `employee` VALUES ('李垂文', '研發副理', 'C02', '台中縣', '大里市仁化路261號', '(04)491-4141#254', '412', 35535, 7);
INSERT INTO `employee` VALUES ('盧大為', '研發經理', 'C02', '台北市', '大同區承德路一段40號12樓', '02-5559211', '103', 33990, 14);
INSERT INTO `employee` VALUES ('江正維', '研發工程師', 'C02', '台北市', '松山區南京東路5段5號2樓', '02-7649130', '105', 62830, 14);
INSERT INTO `employee` VALUES ('鍾智慧', '研發工程師', 'C03', '台北市', '八德路二段260號9樓', '02-7752450', '104', 30385, 7);
INSERT INTO `employee` VALUES ('方鎮深', '副工程師', 'C03', '台北市', '士林區社中街76號', '02-8118101', '111', 32960, 14);
INSERT INTO `employee` VALUES ('楊銘哲', '研發副理', 'C03', '台北市', '萬華區漢口街2段60號', '02-3111116', '108', 28016, 14);
INSERT INTO `employee` VALUES ('王演銓', '研發經理', 'C03', '桃園縣', '大園鄉北港村大工路31號', '03-3868956', '337', 39346, 14);
INSERT INTO `employee` VALUES ('易君揚', '助理工程師', 'C03', '桃園縣', '楊梅鎮秀才路520號', '03-4753821', '326', 77456, 14);
INSERT INTO `employee` VALUES ('鄭秀家', '研發工程師', 'C03', '高雄市', '五福三路21號6樓', '07-2135522', '801', 37595, 7);
INSERT INTO `employee` VALUES ('王玉治', '業務副理', 'D01', '台中縣', '潭子鄉建國路3之2號', '04-5331112', '427', 35844, 14);
INSERT INTO `employee` VALUES ('林鳳春', '業務專員', 'D01', '台北市', '中正區杭洲南路1段15-1號19樓', '02-3936566', '100', 60770, 14);
INSERT INTO `employee` VALUES ('葉秀珠', '業務助理', 'D01', '台北市', '南港區成功路一段65號2&3樓', '02-7832854', '115', 25544, 7);
INSERT INTO `employee` VALUES ('陳曉蘭', '業務經理', 'D01', '台南縣', '歸仁鄉南興村中山路851號', '06-2306611', '711', 30385, 7);
INSERT INTO `employee` VALUES ('吳美成', '資深專員', 'D01', '彰化縣', '和美鎮彰美路二段106號', '04-7352182', '508', 35844, 7);
INSERT INTO `employee` VALUES ('莊國雄', '業務副理', 'D02', '台中縣', '潭子鄉中山路三段493巷35號', '04-5343566', '427', 40376, 7);
INSERT INTO `employee` VALUES ('向大鵬', '業務專員', 'D02', '台北市', '建國北路2段145號3樓', '02-5031111', '104', 24102, 7);
INSERT INTO `employee` VALUES ('陳詔芳', '業務助理', 'D02', '高雄市', '新興區中正二路182號8-1樓', '07-2228856', '800', 28634, 7);
INSERT INTO `employee` VALUES ('陳雅賢', '業務經理', 'D02', '新竹縣', '湖口鄉光復北路92號', '035-981491', '303', 55826, 14);
INSERT INTO `employee` VALUES ('吳國信', '資深專員', 'D02', '彰化縣', '福興鄉萬豐村福工路12號', '04-7695161~4', '506', 38110, 7);
INSERT INTO `employee` VALUES ('張志輝', '業務副理', 'D03', '台中縣', '大肚鄉沙田路二段132巷60號', '04-6991173', '432', 32445, 7);
INSERT INTO `employee` VALUES ('林玉堂', '業務專員', 'D03', '台北市', '松江路124巷21號4樓', '02-5926597', '104', 26265, 7);
INSERT INTO `employee` VALUES ('張世興', '業務助理', 'D03', '台北縣', '淡水鎮下圭柔山100-2號', '02-6228750', '251', 72100, 14);
INSERT INTO `employee` VALUES ('朱金倉', '業務經理', 'D03', '高雄市', '三民區通化街120號', '07-3712111', '807', 40067, 14);
INSERT INTO `employee` VALUES ('謝穎青', '資深專員', 'D03', '高雄縣', '仁武鄉仁心路311號', '07-3711696', '814', 25235, 7);
INSERT INTO `employee` VALUES ('毛渝南', '業務副理', 'D04', '台北市', '大安區敦化南路2段218號', '02-3779968', '106', 78280, 7);
INSERT INTO `employee` VALUES ('郭曜明', '業務專員', 'D04', '台北市', '中山區八德路四段111號', '02-7532121', '105', 26780, 7);
INSERT INTO `employee` VALUES ('李進祿', '業務專員', 'D04', '台北市', '松山區復興北路369號3樓', '02-7150669', '105', 25750, 7);
INSERT INTO `employee` VALUES ('陳惠娟', '業務助理', 'D04', '高雄市', '三民區灣興街96之1號', '07-3853358', '807', 23690, 14);
INSERT INTO `employee` VALUES ('林鵬翔', '業務經理', 'D04', '彰化縣', '和美鎮鎮平里彰草路二段697號', '04-7525121', '508', 37080, 7);
INSERT INTO `employee` VALUES ('黃大倫', '採購經理', 'E01', '台中縣', '大肚鄉沙田路二段310巷2號', '04-6991191', '432', 27810, 14);
INSERT INTO `employee` VALUES ('黃振清', '採購副理', 'E01', '台北市', '大同區重慶北路三段137巷25號2樓', '02-5976225', '103', 35535, 14);
INSERT INTO `employee` VALUES ('林國和', '採購專員', 'E01', '台北市', '民生西路292號10樓', '02-5559676', '103', 63860, 14);
INSERT INTO `employee` VALUES ('黃秋好', '採購專員', 'E01', '台北市', '新明路124號', '02-7912161', '114', 24102, 7);
INSERT INTO `employee` VALUES ('陳弘昌', '採購助理', 'E01', '台南縣', '永康鄉中正北路711號', '06-2531221', '710', 22660, 7);
INSERT INTO `employee` VALUES ('張琪', '採購助理', 'E01', '桃園縣', '大園鄉橫峰村1號', '03-3811811', '337', 23175, 7);
INSERT INTO `employee` VALUES ('許鴻章', '維修經理', 'E01', '彰化縣', '秀水鄉埔崙村三越街82號', '04-7692511', '504', 26265, 7);
INSERT INTO `employee` VALUES ('連邦俊', '維修助理', 'F01', '台北市', '大安區仁愛路三段108號7樓', '02-7042162', '106', 29767, 14);
INSERT INTO `employee` VALUES ('張治', '維修工程師', 'F01', '台北市', '大安區復興南路一段390號5樓之3', '02-7081881', '106', 38934, 14);
INSERT INTO `employee` VALUES ('吳寶珠', '維修工程師', 'F01', '台北市', '中山區長安東路2段173號7樓', '02-7720267', '104', 33475, 14);
INSERT INTO `employee` VALUES ('洪毓祥', '維修工程師', 'F01', '台北市', '中正區忠孝東路2段123號B1', '02-3971881', '100', 41200, 14);
INSERT INTO `employee` VALUES ('丁組長', '助理工程師', 'F01', '台北市', '松山區南京東路5段46號7樓', '02-7613571', '105', 29355, 7);
INSERT INTO `employee` VALUES ('李秋煌', '助理工程師', 'F01', '台北市', '許昌街四二號九樓', '02-6584251', '100', 26368, 7);
INSERT INTO `employee` VALUES ('何信穎', '副工程師', 'F01', '台北縣', '土城市工業區中山路59號', '02-2683366', '236', 39037, 7);
INSERT INTO `employee` VALUES ('陳福金', '副工程師', 'F01', '台北縣', '樹林鎮三俊街273號', '02-6882387', '223', 28840, 7);
INSERT INTO `employee` VALUES ('林靜秋', '維修副理', 'F01', '桃園縣', '龍潭鄉九龍村中興路九龍段3巷13號', '03-4792988', '325', 61285, 14);
INSERT INTO `employee` VALUES ('劉柏村', '維修經理', 'F01', '高雄市', '鼓山區明倫路514巷19號', '07-5836967', '804', 31930, 7);
INSERT INTO `employee` VALUES ('季正杰', '資深工程師', 'F01', '嘉義市', '中正路690號', '05-3714666', '600', 62830, 7);
INSERT INTO `employee` VALUES ('顧舜生', '系統工程師', 'G01', '台中市', '台中工業區37路46號', '04-3594510', '400', 34299, 7);
INSERT INTO `employee` VALUES ('祝閔豪', '系統工程師', 'G01', '台北市', '松山區民生東路4段54號9樓901室', '02-7152266', '105', 32445, 14);
INSERT INTO `employee` VALUES ('鄭力中', '硬體工程師', 'G01', '台北市', '長春路328號5樓之2', '02-7198303', '104', 33475, 7);
INSERT INTO `employee` VALUES ('范揚耀', '程式設計師', 'G01', '台北市', '新生南路一段121號4樓', '02-2990212', '106', 32445, 7);
INSERT INTO `employee` VALUES ('高鴻烈', '程式設計師', 'G01', '台南縣', '永康市王行路68巷263號', '06-2017777', '710', 32445, 7);
INSERT INTO `employee` VALUES ('林朝財', '資訊經理', 'G01', '高雄市', '三民區民族一路491號', '07-3410301', '807', 74160, 14);
INSERT INTO `employee` VALUES ('陳美玉', '網路工程師', 'G01', '新竹縣', '湖口鄉新竹工業區光復南路15號', '035-983683', '303', 35535, 7);
INSERT INTO `employee` VALUES ('吳淑芬', '市場分析師', 'H01', '台北市', '士林區中正路115號', '02-8822342', '111', 32445, 7);
INSERT INTO `employee` VALUES ('林俊成', '企劃專員', 'H01', '台北市', '大同區貴德街36巷5號', '02-5555601', '103', 33475, 7);
INSERT INTO `employee` VALUES ('簡清皛', '企劃專員', 'H01', '台北市', '中山北路六段75號', '02-8342662', '111', 31930, 7);
INSERT INTO `employee` VALUES ('謝彗萍', '企劃專員', 'H01', '台北市', '中山區建國北路1段88巷12號', '02-5062442', '104', 35535, 7);
INSERT INTO `employee` VALUES ('黃憲政', '企劃專員', 'H01', '台北縣', '土城市大暖路71號', '02-2683969', '236', 35535, 7);
INSERT INTO `employee` VALUES ('鄭黛明', '企劃助理', 'H01', '台北縣', '淡水鎮埤島里51-11號', '02-6222131', '251', 36565, 14);
INSERT INTO `employee` VALUES ('魏阿輝', '美工專員', 'H01', '台南市', '安南區安和路二段269號', '06-2552171', '709', 30900, 7);
INSERT INTO `employee` VALUES ('鄭元杰', '美工專員', 'H01', '台南縣', '麻豆鎮小埤里苓子林8-12號', '06-5703271', '721', 31930, 14);
INSERT INTO `employee` VALUES ('謝忠証', '美工助理', 'H01', '高雄市', '左營區新庄子路339巷3號', '07-3431236', '813', 29870, 7);
INSERT INTO `employee` VALUES ('王禾', '企劃副理', 'H01', '高雄縣', '橋頭鄉芋林路299號', '07-6116622', '825', 60770, 14);
INSERT INTO `employee` VALUES ('程光民', '企劃經理', 'H01', '雲林縣', '斗六市雲林路三段369號', '05-5222331', '640', 26368, 7);
INSERT INTO `employee` VALUES ('楊習仁', '人事經理', 'I01', '台中縣', '烏日鄉中山路一段和平巷150弄27號', '04-3372621', '414', 29767, 7);
INSERT INTO `employee` VALUES ('陳舜庭', '人事專員', 'I01', '台北市', '中山北路三段22號', '02-5925252#3408', '104', 52530, 7);
INSERT INTO `employee` VALUES ('陳建岳', '人事專員', 'I01', '台南市', '中區中山路90號4樓', '06-2260191', '700', 23690, 7);
INSERT INTO `employee` VALUES ('劉伯村', '人事專員', 'I01', '高雄市', '小港區長春路5號', '07-8023601', '812', 28325, 7);
INSERT INTO `employee` VALUES ('張財全', '人事助理', 'I01', '高雄市', '前鎮區高雄加工出口區南一路10號', '07-8111171', '806', 31930, 7);
INSERT INTO `employee` VALUES ('陳淑慧', '行政助理', 'J01', '台北市', '大安區仁愛路四段109號15樓', '02-7110990', '106', 23690, 7);
INSERT INTO `employee` VALUES ('許進發', '行政經理', 'J01', '台北市', '敦化北路201-24號8樓', '02-7177888', '105', 21630, 14);
INSERT INTO `employee` VALUES ('王芳香', '行政專員', 'J01', '新竹市', '科學工業園區工業東二路6號', '035-773121', '300', 28840, 7);
INSERT INTO `employee` VALUES ('施美芳', '行政專員', 'J01', '嘉義縣', '水上鄉回歸村北回60號', '05-2357861', '608', 71997, 7);
INSERT INTO `employee` VALUES ('劉大慶', '總機', 'J01', '彰化縣', '和美鎮彰新路二段290號', '04-7351127', '508', 30900, 14);
INSERT INTO `employee` VALUES ('沈榮治', '會計助理', 'K01', '台北市', '莒光路310號5樓', '02-3062131', '108', 42436, 14);
INSERT INTO `employee` VALUES ('王繡瑩', '會計助理', 'K01', '台北市', '復興北路181號6樓', '02-7129111', '105', 41200, 7);
INSERT INTO `employee` VALUES ('林俐君', '會計師', 'K01', '台北市', '敦化北路201-24號後棟6樓', '02-7174500', '105', 28016, 7);
INSERT INTO `employee` VALUES ('李德竹', '會計師', 'K01', '台南縣', '歸仁鄉南保村中山路734號', '06-2301171', '711', 66950, 7);
INSERT INTO `employee` VALUES ('胡富傑', '會計經理', 'K01', '桃園縣', '觀音鄉富源村35-2號', '03-4901511', '328', 35535, 7);
INSERT INTO `employee` VALUES ('唐德義', '資深會計師', 'K01', '高雄市', '林森三路193巷34號', '07-3336571', '806', 32445, 14);
INSERT INTO `employee` VALUES ('鍾海萍', '資深會計師', 'K01', '新竹市', '科學工業園區展業一路20號2樓', '035-770255', '300', 25750, 7);
INSERT INTO `employee` VALUES ('溫智傑', '圖書助理', 'L01', '台北市', '中山區南京東路一段92號8樓', '02-5316125', '104', 21630, 7);
INSERT INTO `employee` VALUES ('邱資堡', '圖書助理', 'L01', '台北市', '塔城街66號3樓', '02-5523075', '103', 28943, 7);
INSERT INTO `employee` VALUES ('洪惠芬', '圖書館專員', 'L01', '高雄縣', '大社工業區興工路1-3號', '07-3514151', '815', 11330, 14);

-- --------------------------------------------------------

-- 
-- 資料表格式： `leave`
-- 

CREATE TABLE `leave` (
  `姓名` varchar(9) default NULL,
  `假別` varchar(9) default NULL,
  `年` double default NULL,
  `月` double default NULL,
  `天數` double default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `leave`
-- 

INSERT INTO `leave` VALUES ('方重圍', '休假', 89, 1, 2);
INSERT INTO `leave` VALUES ('李垂文', '事假', 89, 1, 1);
INSERT INTO `leave` VALUES ('林鵬翔', '病假', 89, 1, 4);
INSERT INTO `leave` VALUES ('唐德義', '休假', 89, 1, 7);
INSERT INTO `leave` VALUES ('徐煥坤', '婚假', 89, 1, 4);
INSERT INTO `leave` VALUES ('許鴻章', '休假', 89, 1, 8);
INSERT INTO `leave` VALUES ('黃秋好', '事假', 89, 1, 3);
INSERT INTO `leave` VALUES ('黃振清', '病假', 89, 1, 6);
INSERT INTO `leave` VALUES ('王演銓', '休假', 89, 2, 4);
INSERT INTO `leave` VALUES ('王德惠', '休假', 89, 2, 7);
INSERT INTO `leave` VALUES ('向大鵬', '休假', 89, 2, 1);
INSERT INTO `leave` VALUES ('吳淑芬', '病假', 89, 2, 4);
INSERT INTO `leave` VALUES ('李垂文', '事假', 89, 2, 1);
INSERT INTO `leave` VALUES ('洪惠芬', '事假', 89, 2, 4);
INSERT INTO `leave` VALUES ('徐煥坤', '病假', 89, 2, 1);
INSERT INTO `leave` VALUES ('莊清媚', '病假', 89, 2, 7);
INSERT INTO `leave` VALUES ('陳美玉', '休假', 89, 2, 3);
INSERT INTO `leave` VALUES ('鄭秀家', '病假', 89, 2, 2);
INSERT INTO `leave` VALUES ('王演銓', '病假', 89, 3, 6);
INSERT INTO `leave` VALUES ('王德惠', '事假', 89, 3, 5);
INSERT INTO `leave` VALUES ('王繡瑩', '事假', 89, 3, 5);
INSERT INTO `leave` VALUES ('何茂宗', '喪假', 89, 3, 3);
INSERT INTO `leave` VALUES ('李垂文', '事假', 89, 3, 6);
INSERT INTO `leave` VALUES ('沈榮治', '休假', 89, 3, 1);
INSERT INTO `leave` VALUES ('林俊成', '病假', 89, 3, 2);
INSERT INTO `leave` VALUES ('施美芳', '休假', 89, 3, 8);
INSERT INTO `leave` VALUES ('高鴻烈', '事假', 89, 3, 2);
INSERT INTO `leave` VALUES ('陳弘昌', '病假', 89, 3, 5);
INSERT INTO `leave` VALUES ('謝穎青', '喪假', 89, 3, 6);
INSERT INTO `leave` VALUES ('朱金倉', '事假', 89, 4, 5);
INSERT INTO `leave` VALUES ('李垂文', '病假', 89, 4, 1);
INSERT INTO `leave` VALUES ('季正杰', '休假', 89, 4, 2);
INSERT INTO `leave` VALUES ('林俊成', '休假', 89, 4, 1);
INSERT INTO `leave` VALUES ('林國和', '事假', 89, 4, 4);
INSERT INTO `leave` VALUES ('張景松', '休假', 89, 4, 4);
INSERT INTO `leave` VALUES ('張琪', '休假', 89, 4, 2);
INSERT INTO `leave` VALUES ('莊國雄', '病假', 89, 4, 2);
INSERT INTO `leave` VALUES ('莊清媚', '病假', 89, 4, 2);
INSERT INTO `leave` VALUES ('陳弘昌', '病假', 89, 4, 1);
INSERT INTO `leave` VALUES ('陳淑慧', '事假', 89, 4, 6);
INSERT INTO `leave` VALUES ('黃秋好', '休假', 89, 4, 8);
INSERT INTO `leave` VALUES ('盧大為', '事假', 89, 4, 1);
INSERT INTO `leave` VALUES ('簡清皛', '病假', 89, 4, 6);
INSERT INTO `leave` VALUES ('王芳香', '病假', 89, 5, 6);
INSERT INTO `leave` VALUES ('李進祿', '休假', 89, 5, 2);
INSERT INTO `leave` VALUES ('林鳳春', '休假', 89, 5, 9);
INSERT INTO `leave` VALUES ('邱資堡', '事假', 89, 5, 9);
INSERT INTO `leave` VALUES ('高鴻烈', '婚假', 89, 5, 8);
INSERT INTO `leave` VALUES ('黃大倫', '事假', 89, 5, 8);
INSERT INTO `leave` VALUES ('黃憲政', '休假', 89, 5, 1);
INSERT INTO `leave` VALUES ('謝彗萍', '病假', 89, 5, 1);
INSERT INTO `leave` VALUES ('葉秀珠', '休假', 89, 5, 1);
INSERT INTO `leave` VALUES ('陳詔芳', '喪假', 89, 5, 1);
INSERT INTO `leave` VALUES ('林玉堂', '事假', 89, 5, 1);
INSERT INTO `leave` VALUES ('毛渝南', '病假', 89, 5, 1);
INSERT INTO `leave` VALUES ('吳美成', '婚假', 89, 6, 5);
INSERT INTO `leave` VALUES ('易君揚', '事假', 89, 6, 5);
INSERT INTO `leave` VALUES ('林國和', '休假', 89, 6, 1);
INSERT INTO `leave` VALUES ('林朝財', '病假', 89, 6, 7);
INSERT INTO `leave` VALUES ('林朝財', '病假', 89, 6, 3);
INSERT INTO `leave` VALUES ('張景松', '休假', 89, 6, 2);
INSERT INTO `leave` VALUES ('張琪', '事假', 89, 6, 4);
INSERT INTO `leave` VALUES ('莊清媚', '病假', 89, 6, 6);
INSERT INTO `leave` VALUES ('郭曜明', '病假', 89, 6, 4);
INSERT INTO `leave` VALUES ('黃秋好', '病假', 89, 6, 1);
INSERT INTO `leave` VALUES ('溫智傑', '休假', 89, 6, 1);
INSERT INTO `leave` VALUES ('鄭力中', '病假', 89, 6, 6);
INSERT INTO `leave` VALUES ('盧大為', '事假', 89, 6, 2);
INSERT INTO `leave` VALUES ('徐煥坤', '事假', 89, 7, 2);
INSERT INTO `leave` VALUES ('張景松', '休假', 89, 7, 8);
INSERT INTO `leave` VALUES ('陳弘昌', '休假', 89, 7, 9);
INSERT INTO `leave` VALUES ('林靜秋', '事假', 89, 8, 2);
INSERT INTO `leave` VALUES ('胡富傑', '病假', 89, 8, 8);
INSERT INTO `leave` VALUES ('張世興', '休假', 89, 8, 8);
INSERT INTO `leave` VALUES ('張景松', '休假', 89, 8, 2);
INSERT INTO `leave` VALUES ('莊清媚', '休假', 89, 8, 9);
INSERT INTO `leave` VALUES ('許鴻章', '休假', 89, 8, 6);
INSERT INTO `leave` VALUES ('陳美玉', '事假', 89, 8, 2);
INSERT INTO `leave` VALUES ('黃大倫', '喪假', 89, 8, 8);
INSERT INTO `leave` VALUES ('蔡豪鈞', '休假', 89, 8, 8);
INSERT INTO `leave` VALUES ('盧大為', '喪假', 89, 8, 2);
INSERT INTO `leave` VALUES ('顧舜生', '事假', 89, 8, 6);
INSERT INTO `leave` VALUES ('祝閔豪', '事假', 89, 9, 1);
INSERT INTO `leave` VALUES ('許進發', '事假', 89, 9, 1);
INSERT INTO `leave` VALUES ('鄭黛明', '事假', 89, 10, 4);
INSERT INTO `leave` VALUES ('葉秀珠', '休假', 89, 10, 2);
INSERT INTO `leave` VALUES ('陳詔芳', '喪假', 89, 10, 2);
INSERT INTO `leave` VALUES ('林玉堂', '事假', 89, 10, 2);
INSERT INTO `leave` VALUES ('毛渝南', '病假', 89, 10, 2);
INSERT INTO `leave` VALUES ('鍾海萍', '病假', 89, 11, 6);
INSERT INTO `leave` VALUES ('鍾智慧', '病假', 89, 11, 4);

-- --------------------------------------------------------

-- 
-- 資料表格式： `overtime`
-- 

CREATE TABLE `overtime` (
  `姓名` varchar(9) default NULL,
  `年` double default NULL,
  `月` double default NULL,
  `日` double default NULL,
  `加班時數` double default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `overtime`
-- 

INSERT INTO `overtime` VALUES ('莊清媚', 89, 12, 3, 2);
INSERT INTO `overtime` VALUES ('張景松', 89, 12, 3, 4);
INSERT INTO `overtime` VALUES ('盧大為', 89, 12, 4, 2);
INSERT INTO `overtime` VALUES ('江正維', 89, 12, 5, 2);
INSERT INTO `overtime` VALUES ('鍾智慧', 89, 12, 6, 3);
INSERT INTO `overtime` VALUES ('方鎮深', 89, 12, 8, 2);
INSERT INTO `overtime` VALUES ('黃慧萍', 89, 12, 9, 3);
INSERT INTO `overtime` VALUES ('李垂文', 89, 12, 11, 2);
INSERT INTO `overtime` VALUES ('張景松', 89, 12, 13, 4);
INSERT INTO `overtime` VALUES ('黃慧萍', 89, 12, 17, 2);
INSERT INTO `overtime` VALUES ('林建興', 89, 12, 19, 2);
INSERT INTO `overtime` VALUES ('莊清媚', 89, 1, 3, 2);
INSERT INTO `overtime` VALUES ('張景松', 89, 1, 3, 2);
INSERT INTO `overtime` VALUES ('盧大為', 89, 1, 4, 3);
INSERT INTO `overtime` VALUES ('江正維', 89, 1, 5, 2);
INSERT INTO `overtime` VALUES ('鍾智慧', 89, 1, 6, 3);
INSERT INTO `overtime` VALUES ('方鎮深', 89, 1, 8, 3);
INSERT INTO `overtime` VALUES ('黃慧萍', 89, 1, 9, 2);
INSERT INTO `overtime` VALUES ('李垂文', 89, 1, 11, 2);
INSERT INTO `overtime` VALUES ('張景松', 89, 1, 13, 2);
INSERT INTO `overtime` VALUES ('黃慧萍', 89, 1, 17, 2);
INSERT INTO `overtime` VALUES ('林建興', 89, 1, 19, 2);
INSERT INTO `overtime` VALUES ('莊清媚', 89, 1, 20, 2);
INSERT INTO `overtime` VALUES ('王德惠', 89, 1, 22, 2);
INSERT INTO `overtime` VALUES ('林森和', 89, 1, 24, 2);
INSERT INTO `overtime` VALUES ('黃志文', 89, 1, 25, 4);
INSERT INTO `overtime` VALUES ('黃慧萍', 89, 1, 26, 2);
INSERT INTO `overtime` VALUES ('張藍方', 89, 1, 26, 4);
INSERT INTO `overtime` VALUES ('楊銘哲', 89, 1, 28, 5);
INSERT INTO `overtime` VALUES ('徐煥坤', 89, 1, 29, 5);
INSERT INTO `overtime` VALUES ('黃志文', 89, 2, 1, 3);
INSERT INTO `overtime` VALUES ('張藍方', 89, 2, 1, 4);
INSERT INTO `overtime` VALUES ('徐煥坤', 89, 2, 2, 2);
INSERT INTO `overtime` VALUES ('江正維', 89, 2, 4, 1);
INSERT INTO `overtime` VALUES ('林鳳春', 89, 2, 5, 3);
INSERT INTO `overtime` VALUES ('葉秀珠', 89, 2, 6, 2);
INSERT INTO `overtime` VALUES ('莊國雄', 89, 2, 7, 4);
INSERT INTO `overtime` VALUES ('吳美成', 89, 2, 8, 2);
INSERT INTO `overtime` VALUES ('陳曉蘭', 89, 2, 9, 4);
INSERT INTO `overtime` VALUES ('陳詔芳', 89, 2, 11, 6);
INSERT INTO `overtime` VALUES ('易君揚', 89, 2, 15, 4);
INSERT INTO `overtime` VALUES ('王演銓', 89, 2, 16, 3);
INSERT INTO `overtime` VALUES ('陳雅賢', 89, 3, 8, 4);
INSERT INTO `overtime` VALUES ('張琪', 89, 3, 8, 3);
INSERT INTO `overtime` VALUES ('郭曜明', 89, 3, 12, 2);
INSERT INTO `overtime` VALUES ('李進祿', 89, 3, 15, 4);
INSERT INTO `overtime` VALUES ('陳弘昌', 89, 3, 21, 4);
INSERT INTO `overtime` VALUES ('黃志文', 89, 3, 22, 2);
INSERT INTO `overtime` VALUES ('張藍方', 89, 3, 22, 2);
INSERT INTO `overtime` VALUES ('徐煥坤', 89, 3, 22, 4);
INSERT INTO `overtime` VALUES ('盧大為', 89, 3, 23, 6);
INSERT INTO `overtime` VALUES ('江正維', 89, 3, 23, 2);
INSERT INTO `overtime` VALUES ('許鴻章', 89, 3, 24, 4);
INSERT INTO `overtime` VALUES ('吳國信', 89, 3, 25, 2);
INSERT INTO `overtime` VALUES ('黃振清', 89, 3, 25, 2);
INSERT INTO `overtime` VALUES ('黃大倫', 89, 3, 26, 1);
INSERT INTO `overtime` VALUES ('張志輝', 89, 3, 27, 3);
INSERT INTO `overtime` VALUES ('陳惠娟', 89, 3, 27, 2);
INSERT INTO `overtime` VALUES ('林鵬翔', 89, 3, 28, 4);
INSERT INTO `overtime` VALUES ('林國和', 89, 3, 29, 3);
INSERT INTO `overtime` VALUES ('張治', 89, 3, 29, 6);
INSERT INTO `overtime` VALUES ('林玉堂', 89, 3, 30, 2);
INSERT INTO `overtime` VALUES ('毛渝南', 89, 3, 30, 4);
INSERT INTO `overtime` VALUES ('吳寶珠', 89, 4, 8, 4);
INSERT INTO `overtime` VALUES ('洪毓祥', 89, 4, 8, 4);
INSERT INTO `overtime` VALUES ('丁組長', 89, 4, 9, 1);
INSERT INTO `overtime` VALUES ('李秋煌', 89, 4, 9, 2);
INSERT INTO `overtime` VALUES ('祝閔豪', 89, 4, 20, 4);
INSERT INTO `overtime` VALUES ('王德惠', 89, 4, 22, 2);
INSERT INTO `overtime` VALUES ('劉柏村', 89, 4, 24, 3);
INSERT INTO `overtime` VALUES ('何信穎', 89, 4, 25, 4);
INSERT INTO `overtime` VALUES ('陳福金', 89, 4, 26, 3);
INSERT INTO `overtime` VALUES ('鄭力中', 89, 4, 28, 5);
INSERT INTO `overtime` VALUES ('盧大為', 89, 4, 29, 2);
INSERT INTO `overtime` VALUES ('江正維', 89, 4, 30, 1);
INSERT INTO `overtime` VALUES ('許鴻章', 89, 5, 2, 2);
INSERT INTO `overtime` VALUES ('吳國信', 89, 5, 7, 3);
INSERT INTO `overtime` VALUES ('黃振清', 89, 5, 8, 3);
INSERT INTO `overtime` VALUES ('黃大倫', 89, 5, 10, 2);
INSERT INTO `overtime` VALUES ('張志輝', 89, 5, 11, 3);
INSERT INTO `overtime` VALUES ('陳惠娟', 89, 5, 13, 3);
INSERT INTO `overtime` VALUES ('林鵬翔', 89, 5, 13, 3);
INSERT INTO `overtime` VALUES ('林國和', 89, 5, 14, 4);
INSERT INTO `overtime` VALUES ('張治', 89, 5, 16, 2);
INSERT INTO `overtime` VALUES ('黃憲政', 89, 5, 17, 2);
INSERT INTO `overtime` VALUES ('陳建岳', 89, 5, 18, 4);
INSERT INTO `overtime` VALUES ('張財全', 89, 5, 18, 5);
INSERT INTO `overtime` VALUES ('陳淑慧', 89, 5, 18, 4);
INSERT INTO `overtime` VALUES ('林俊成', 89, 5, 20, 2);
INSERT INTO `overtime` VALUES ('王禾', 89, 5, 21, 5);
INSERT INTO `overtime` VALUES ('莊清媚', 89, 5, 22, 1);
INSERT INTO `overtime` VALUES ('張景松', 89, 5, 22, 2);
INSERT INTO `overtime` VALUES ('謝彗萍', 89, 5, 25, 2);
INSERT INTO `overtime` VALUES ('劉伯村', 89, 5, 25, 4);
INSERT INTO `overtime` VALUES ('簡清皛', 89, 5, 31, 3);
INSERT INTO `overtime` VALUES ('李垂文', 89, 6, 3, 2);
INSERT INTO `overtime` VALUES ('王芳香', 89, 6, 5, 2);
INSERT INTO `overtime` VALUES ('鍾海萍', 89, 6, 5, 4);
INSERT INTO `overtime` VALUES ('施美芳', 89, 6, 6, 3);
INSERT INTO `overtime` VALUES ('唐德義', 89, 6, 7, 3);
INSERT INTO `overtime` VALUES ('溫智傑', 89, 6, 10, 4);
INSERT INTO `overtime` VALUES ('劉大慶', 89, 6, 13, 2);
INSERT INTO `overtime` VALUES ('胡富傑', 89, 6, 21, 3);
INSERT INTO `overtime` VALUES ('李垂文', 89, 6, 22, 3);
INSERT INTO `overtime` VALUES ('沈榮治', 89, 6, 25, 3);
INSERT INTO `overtime` VALUES ('王繡瑩', 89, 6, 26, 5);
INSERT INTO `overtime` VALUES ('林俐君', 89, 6, 27, 4);
INSERT INTO `overtime` VALUES ('邱資堡', 89, 6, 27, 4);
INSERT INTO `overtime` VALUES ('李德竹', 89, 6, 28, 4);
INSERT INTO `overtime` VALUES ('唐德義', 89, 6, 29, 4);

-- --------------------------------------------------------

-- 
-- 資料表格式： `product`
-- 

CREATE TABLE `product` (
  `產品名稱` varchar(31) default NULL,
  `產品代號` varchar(14) default NULL,
  `單價` double default NULL,
  `成本` double default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `product`
-- 

INSERT INTO `product` VALUES ('486主機板VL slot *3 16MB RAM', 'MB486V3R16', 13487, 7687);
INSERT INTO `product` VALUES ('486主機板VL slot *3 32MB RAM', 'MB486V3R32', 24577, 14009);
INSERT INTO `product` VALUES ('486主機板PCI slot *3 16MB RAM', 'MB486P3R16', 15186, 8656);
INSERT INTO `product` VALUES ('486主機板PCI slot *3 32MB RAM', 'MB486P3R32', 25976, 14806);
INSERT INTO `product` VALUES ('585主機板PCI slot *3 32MB RAM', 'MB586P3R32', 31971, 18222);
INSERT INTO `product` VALUES ('586主機板PCI slot *3 16MB RAM', 'MB586P3R16', 15486, 8826);
INSERT INTO `product` VALUES ('586主機板VL slot *3 32MB RAM', 'MB586V3R32', 36467, 20785);
INSERT INTO `product` VALUES ('586主機板VL slot *3 16MB RAM', 'MB586V3R16', 15186, 8656);
INSERT INTO `product` VALUES ('586主機板EISA slot *3 32MB RAM', 'MB586E3R32', 41162, 23462);
INSERT INTO `product` VALUES ('586主機板EISA slot *3 16MB RAM', 'MB586E3R16', 18783, 10705);
INSERT INTO `product` VALUES ('586主機板EISA slot *7 32MB RAM', 'MB586E7R32', 42261, 24088);
INSERT INTO `product` VALUES ('586主機板EISA slot *7 16MB RAM', 'MB586E7R16', 21480, 12243);
INSERT INTO `product` VALUES ('SuperVGA 1280*1024 VL BUS 1MB', 'SVGAV1M', 3846, 2191);
INSERT INTO `product` VALUES ('SuperVGA 1280*1024 VL BUS 2MB', 'SVGAV2M', 4675, 2664);
INSERT INTO `product` VALUES ('SuperVGA 1280*1024 PCI BUS 1MB', 'SVGAP1M', 4115, 2345);
INSERT INTO `product` VALUES ('SuperVGA 1280*1024 PCI BUS 2MB', 'SVGAP2M', 4945, 2818);
INSERT INTO `product` VALUES ('SCSIcard PCI BUS', 'SCSIPB', 2198, 1252);
INSERT INTO `product` VALUES ('SCSIcard VL BUS', 'SCSIVB', 1947, 1109);
INSERT INTO `product` VALUES ('EnhanceIDE PCI BUS', 'EIDE1RP', 2198, 1252);
INSERT INTO `product` VALUES ('EnhanceIDE VL BUS', 'EIDE2RP', 1558, 887);

-- --------------------------------------------------------

-- 
-- 資料表格式： `sales`
-- 

CREATE TABLE `sales` (
  `客戶代號` varchar(9) default NULL,
  `業務姓名` varchar(9) default NULL,
  `產品代號` varchar(12) default NULL,
  `數量` double default NULL,
  `交易年` double default NULL,
  `交易月` double default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `sales`
-- 

INSERT INTO `sales` VALUES ('A0015', '吳國信', 'SVGAV2M', 1970, 88, 1);
INSERT INTO `sales` VALUES ('A0046', '張志輝', 'SVGAV1M', 790, 88, 1);
INSERT INTO `sales` VALUES ('A0049', '林玉堂', 'SVGAP2M', 1210, 88, 1);
INSERT INTO `sales` VALUES ('A0050', '林鳳春', 'SCSIPB', 1120, 88, 1);
INSERT INTO `sales` VALUES ('A0053', '林鵬翔', 'EIDE2RP', 1700, 88, 2);
INSERT INTO `sales` VALUES ('A0055', '陳雅賢', 'MB486V3R32', 200, 88, 2);
INSERT INTO `sales` VALUES ('A0019', '郭曜明', 'SCSIVB', 430, 88, 3);
INSERT INTO `sales` VALUES ('A0026', '陳曉蘭', 'MB586E7R16', 1700, 88, 3);
INSERT INTO `sales` VALUES ('A0029', '林鳳春', 'SVGAP1M', 160, 88, 3);
INSERT INTO `sales` VALUES ('A0004', '毛渝南', 'MB486V3R32', 610, 88, 3);
INSERT INTO `sales` VALUES ('A0018', '王玉治', 'SCSIPB', 220, 88, 3);
INSERT INTO `sales` VALUES ('A0033', '向大鵬', 'EIDE1RP', 520, 88, 3);
INSERT INTO `sales` VALUES ('A0034', '林鵬翔', 'EIDE2RP', 800, 88, 4);
INSERT INTO `sales` VALUES ('A0036', '林鵬翔', 'MB586V3R32', 770, 88, 4);
INSERT INTO `sales` VALUES ('A0039', '謝穎青', 'MB586E3R16', 800, 88, 4);
INSERT INTO `sales` VALUES ('A0019', '郭曜明', 'SVGAV1M', 820, 88, 4);
INSERT INTO `sales` VALUES ('A0039', '謝穎青', 'MB586E7R16', 1300, 88, 4);
INSERT INTO `sales` VALUES ('A0042', '毛渝南', 'SVGAV1M', 1430, 88, 4);
INSERT INTO `sales` VALUES ('A0003', '張志輝', 'SVGAV2M', 770, 88, 4);
INSERT INTO `sales` VALUES ('A0043', '王玉治', 'SVGAV2M', 160, 88, 4);
INSERT INTO `sales` VALUES ('A0046', '張志輝', 'SCSIPB', 1430, 88, 5);
INSERT INTO `sales` VALUES ('A0048', '郭曜明', 'EIDE1RP', 870, 88, 5);
INSERT INTO `sales` VALUES ('A0050', '林鳳春', 'MB586V3R16', 1620, 88, 5);
INSERT INTO `sales` VALUES ('A0006', '向大鵬', 'MB486P3R32', 1070, 88, 5);
INSERT INTO `sales` VALUES ('A0021', '謝穎青', 'EIDE2RP', 430, 88, 5);
INSERT INTO `sales` VALUES ('A0044', '陳曉蘭', 'SVGAP1M', 1330, 88, 5);
INSERT INTO `sales` VALUES ('A0046', '張志輝', 'EIDE1RP', 290, 88, 5);
INSERT INTO `sales` VALUES ('A0052', '李進祿', 'MB586P3R16', 520, 88, 5);
INSERT INTO `sales` VALUES ('A0006', '向大鵬', 'SCSIPB', 50, 88, 6);
INSERT INTO `sales` VALUES ('A0008', '吳美成', 'EIDE1RP', 1430, 88, 6);
INSERT INTO `sales` VALUES ('A0009', '王玉治', 'EIDE2RP', 1070, 88, 6);
INSERT INTO `sales` VALUES ('A0013', '吳國信', 'MB586V3R32', 1330, 88, 6);
INSERT INTO `sales` VALUES ('A0015', '吳國信', 'MB586E3R32', 1350, 88, 6);
INSERT INTO `sales` VALUES ('A0011', '向大鵬', 'MB586V3R32', 310, 88, 6);
INSERT INTO `sales` VALUES ('A0012', '陳雅賢', 'MB586V3R16', 630, 88, 6);
INSERT INTO `sales` VALUES ('A0014', '莊國雄', 'MB586E3R16', 1260, 88, 6);
INSERT INTO `sales` VALUES ('A0047', '朱金倉', 'SVGAV2M', 990, 88, 7);
INSERT INTO `sales` VALUES ('A0023', '林鳳春', 'SCSIPB', 730, 88, 7);
INSERT INTO `sales` VALUES ('A0027', '謝穎青', 'MB486V3R16', 1520, 88, 7);
INSERT INTO `sales` VALUES ('A0033', '向大鵬', 'MB586V3R16', 1620, 88, 7);
INSERT INTO `sales` VALUES ('A0016', '林玉堂', 'MB586E3R16', 1480, 88, 7);
INSERT INTO `sales` VALUES ('A0039', '謝穎青', 'SVGAV2M', 220, 88, 8);
INSERT INTO `sales` VALUES ('A0044', '陳曉蘭', 'EIDE1RP', 1070, 88, 8);
INSERT INTO `sales` VALUES ('A0008', '吳美成', 'SVGAP1M', 1070, 88, 8);
INSERT INTO `sales` VALUES ('A0059', '朱金倉', 'SVGAV1M', 1300, 88, 8);
INSERT INTO `sales` VALUES ('A0009', '王玉治', 'MB586V3R16', 730, 88, 8);
INSERT INTO `sales` VALUES ('A0041', '謝穎青', 'SVGAP2M', 990, 88, 8);
INSERT INTO `sales` VALUES ('A0051', '莊國雄', 'MB486P3R32', 430, 88, 8);
INSERT INTO `sales` VALUES ('A0021', '謝穎青', 'SVGAP1M', 650, 88, 9);
INSERT INTO `sales` VALUES ('A0049', '林玉堂', 'MB486V3R32', 1430, 88, 9);
INSERT INTO `sales` VALUES ('A0051', '莊國雄', 'MB486P3R32', 820, 88, 9);
INSERT INTO `sales` VALUES ('A0054', '林鵬翔', 'MB586V3R16', 250, 88, 9);
INSERT INTO `sales` VALUES ('A0057', '林鳳春', 'MB586E7R32', 240, 88, 9);
INSERT INTO `sales` VALUES ('A0058', '吳美成', 'MB586E7R16', 1350, 88, 9);
INSERT INTO `sales` VALUES ('A0048', '郭曜明', 'MB486V3R16', 460, 88, 9);
INSERT INTO `sales` VALUES ('A0010', '陳曉蘭', 'SCSIPB', 1500, 88, 10);
INSERT INTO `sales` VALUES ('A0011', '向大鵬', 'SCSIVB', 1330, 88, 10);
INSERT INTO `sales` VALUES ('A0023', '林鳳春', 'SCSIPB', 540, 88, 10);
INSERT INTO `sales` VALUES ('A0025', '王玉治', 'EIDE1RP', 720, 88, 10);
INSERT INTO `sales` VALUES ('A0015', '吳國信', 'EIDE2RP', 1430, 88, 10);
INSERT INTO `sales` VALUES ('A0021', '謝穎青', 'SVGAP1M', 250, 88, 11);
INSERT INTO `sales` VALUES ('A0030', '吳美成', 'MB486P3R32', 360, 88, 11);
INSERT INTO `sales` VALUES ('A0033', '向大鵬', 'MB586V3R16', 140, 88, 11);
INSERT INTO `sales` VALUES ('A0034', '林鵬翔', 'MB586E3R32', 1430, 88, 11);
INSERT INTO `sales` VALUES ('A0038', '張志輝', 'MB486P3R32', 720, 88, 11);
INSERT INTO `sales` VALUES ('A0017', '吳美成', 'MB586E7R32', 1790, 88, 11);
INSERT INTO `sales` VALUES ('A0035', '郭曜明', 'MB486V3R16', 1350, 88, 11);
INSERT INTO `sales` VALUES ('A0041', '謝穎青', 'MB586V3R16', 540, 88, 12);
INSERT INTO `sales` VALUES ('A0043', '王玉治', 'MB586E3R16', 360, 88, 12);
INSERT INTO `sales` VALUES ('A0052', '李進祿', 'EIDE1RP', 900, 88, 12);
INSERT INTO `sales` VALUES ('A0001', '毛渝南', 'MB486V3R16', 310, 89, 1);
INSERT INTO `sales` VALUES ('A0014', '莊國雄', 'SVGAV1M', 800, 89, 1);
INSERT INTO `sales` VALUES ('A0016', '林玉堂', 'SVGAP1M', 1260, 89, 1);
INSERT INTO `sales` VALUES ('A0020', '朱金倉', 'EIDE1RP', 800, 89, 2);
INSERT INTO `sales` VALUES ('A0017', '吳美成', 'SVGAP2M', 180, 89, 3);
INSERT INTO `sales` VALUES ('A0027', '謝穎青', 'SVGAV1M', 70, 89, 3);
INSERT INTO `sales` VALUES ('A0028', '陳雅賢', 'SVGAV2M', 1880, 89, 3);
INSERT INTO `sales` VALUES ('A0030', '吳美成', 'SVGAP2M', 2510, 89, 3);
INSERT INTO `sales` VALUES ('A0031', '吳國信', 'SCSIPB', 100, 89, 3);
INSERT INTO `sales` VALUES ('A0035', '郭曜明', 'MB586P3R16', 900, 89, 4);
INSERT INTO `sales` VALUES ('A0038', '張志輝', 'MB586E3R32', 720, 89, 4);
INSERT INTO `sales` VALUES ('A0041', '謝穎青', 'MB586E7R16', 180, 89, 4);
INSERT INTO `sales` VALUES ('A0002', '李進祿', 'SVGAV1M', 800, 89, 5);
INSERT INTO `sales` VALUES ('A0019', '郭曜明', 'SVGAV1M', 540, 89, 5);
INSERT INTO `sales` VALUES ('A0047', '朱金倉', 'SCSIVB', 380, 89, 5);
INSERT INTO `sales` VALUES ('A0049', '林玉堂', 'EIDE2RP', 1260, 89, 5);
INSERT INTO `sales` VALUES ('A0051', '莊國雄', 'MB586E3R32', 1700, 89, 5);
INSERT INTO `sales` VALUES ('A0052', '李進祿', 'MB586E3R16', 1570, 89, 5);
INSERT INTO `sales` VALUES ('A0053', '林鵬翔', 'MB586E7R32', 310, 89, 5);
INSERT INTO `sales` VALUES ('A0004', '毛渝南', 'SVGAP1M', 720, 89, 6);
INSERT INTO `sales` VALUES ('A0005', '張志輝', 'SVGAP2M', 460, 89, 6);
INSERT INTO `sales` VALUES ('A0007', '毛渝南', 'SCSIVB', 1410, 89, 6);
INSERT INTO `sales` VALUES ('A0010', '陳曉蘭', 'MB486P3R16', 1330, 89, 6);
INSERT INTO `sales` VALUES ('A0011', '向大鵬', 'MB486P3R32', 90, 89, 6);
INSERT INTO `sales` VALUES ('A0012', '陳雅賢', 'MB586P3R16', 1770, 89, 6);
INSERT INTO `sales` VALUES ('A0014', '莊國雄', 'MB586V3R16', 1350, 89, 6);
INSERT INTO `sales` VALUES ('A0016', '林玉堂', 'MB586E3R16', 160, 89, 6);
INSERT INTO `sales` VALUES ('A0022', '林玉堂', 'MB586V3R16', 310, 89, 6);
INSERT INTO `sales` VALUES ('A0020', '朱金倉', 'SVGAV2M', 900, 89, 7);
INSERT INTO `sales` VALUES ('A0024', '林玉堂', 'SCSIVB', 540, 89, 7);
INSERT INTO `sales` VALUES ('A0025', '王玉治', 'EIDE1RP', 1260, 89, 7);
INSERT INTO `sales` VALUES ('A0031', '吳國信', 'MB586P3R16', 160, 89, 7);
INSERT INTO `sales` VALUES ('A0032', '莊國雄', 'MB586V3R32', 1880, 89, 7);
INSERT INTO `sales` VALUES ('A0017', '吳美成', 'MB586E7R32', 1290, 89, 8);
INSERT INTO `sales` VALUES ('A0035', '郭曜明', 'MB586E3R16', 1070, 89, 8);
INSERT INTO `sales` VALUES ('A0036', '林鵬翔', 'MB586E7R32', 140, 89, 8);
INSERT INTO `sales` VALUES ('A0037', '李進祿', 'MB586E7R16', 540, 89, 8);
INSERT INTO `sales` VALUES ('A0040', '朱金倉', 'SVGAP1M', 200, 89, 8);
INSERT INTO `sales` VALUES ('A0042', '毛渝南', 'SCSIPB', 240, 89, 8);
INSERT INTO `sales` VALUES ('A0045', '李進祿', 'EIDE2RP', 1260, 89, 8);
INSERT INTO `sales` VALUES ('A0047', '朱金倉', 'MB586V3R32', 1070, 89, 8);
INSERT INTO `sales` VALUES ('A0048', '郭曜明', 'MB486V3R16', 1260, 89, 9);
INSERT INTO `sales` VALUES ('A0050', '林鳳春', 'MB486P3R16', 990, 89, 9);
INSERT INTO `sales` VALUES ('A0052', '李進祿', 'MB586P3R16', 920, 89, 9);
INSERT INTO `sales` VALUES ('A0053', '林鵬翔', 'MB586V3R32', 230, 89, 9);
INSERT INTO `sales` VALUES ('A0055', '陳雅賢', 'MB586E3R32', 110, 89, 9);
INSERT INTO `sales` VALUES ('A0056', '向大鵬', 'MB586E3R16', 140, 89, 9);
INSERT INTO `sales` VALUES ('A0060', '陳曉蘭', 'SVGAV2M', 1260, 89, 9);
INSERT INTO `sales` VALUES ('A0009', '王玉治', 'SVGAP2M', 540, 89, 10);
INSERT INTO `sales` VALUES ('A0012', '陳雅賢', 'EIDE1RP', 1350, 89, 10);
INSERT INTO `sales` VALUES ('A0013', '吳國信', 'EIDE2RP', 1620, 89, 10);
INSERT INTO `sales` VALUES ('A0014', '莊國雄', 'EIDE1RP', 1300, 89, 10);
INSERT INTO `sales` VALUES ('A0018', '王玉治', 'MB586E7R16', 1140, 89, 10);
INSERT INTO `sales` VALUES ('A0022', '林玉堂', 'SVGAP2M', 370, 89, 10);
INSERT INTO `sales` VALUES ('A0024', '林玉堂', 'SCSIVB', 650, 89, 10);
INSERT INTO `sales` VALUES ('A0026', '陳曉蘭', 'EIDE2RP', 160, 89, 10);
INSERT INTO `sales` VALUES ('A0028', '陳雅賢', 'MB486V3R32', 200, 89, 11);
INSERT INTO `sales` VALUES ('A0029', '林鳳春', 'MB486P3R16', 460, 89, 11);
INSERT INTO `sales` VALUES ('A0032', '莊國雄', 'MB586V3R32', 100, 89, 11);
INSERT INTO `sales` VALUES ('A0037', '李進祿', 'MB486P3R16', 1350, 89, 11);
INSERT INTO `sales` VALUES ('A0039', '謝穎青', 'MB586P3R16', 880, 89, 11);
INSERT INTO `sales` VALUES ('A0018', '王玉治', 'MB586E7R16', 270, 89, 12);
INSERT INTO `sales` VALUES ('A0040', '朱金倉', 'MB586V3R32', 730, 89, 12);
INSERT INTO `sales` VALUES ('A0042', '毛渝南', 'MB586E3R32', 540, 89, 12);
INSERT INTO `sales` VALUES ('A0044', '陳曉蘭', 'MB586E7R32', 540, 89, 12);
INSERT INTO `sales` VALUES ('A0045', '李進祿', 'MB586E7R16', 800, 89, 12);
INSERT INTO `sales` VALUES ('A0031', '吳國信', 'MB586P3R16', 240, 90, 1);
INSERT INTO `sales` VALUES ('A0008', '吳美成', 'MB586V3R32', 540, 90, 1);
INSERT INTO `sales` VALUES ('A0058', '吳美成', 'MB586P3R16', 180, 90, 1);
INSERT INTO `sales` VALUES ('A0051', '莊國雄', 'SCSIVB', 940, 90, 1);
INSERT INTO `sales` VALUES ('A0010', '謝穎青', 'MB586E3R32', 520, 90, 1);
INSERT INTO `sales` VALUES ('A0048', '郭曜明', 'SVGAP1M', 990, 90, 1);
INSERT INTO `sales` VALUES ('A0049', '林玉堂', 'SVGAP2M', 1210, 90, 1);
INSERT INTO `sales` VALUES ('A0050', '林鳳春', 'SCSIPB', 1120, 90, 1);
INSERT INTO `sales` VALUES ('A0053', '林鵬翔', 'EIDE2RP', 1700, 90, 1);
INSERT INTO `sales` VALUES ('A0055', '陳雅賢', 'MB486V3R32', 200, 90, 1);
INSERT INTO `sales` VALUES ('A0058', '吳美成', 'MB586E7R16', 500, 90, 2);
INSERT INTO `sales` VALUES ('A0054', '林鵬翔', 'MB486V3R16', 720, 90, 2);
INSERT INTO `sales` VALUES ('A0028', '陳雅賢', 'MB486V3R32', 560, 90, 2);
INSERT INTO `sales` VALUES ('A0034', '林鵬翔', 'EIDE2RP', 800, 90, 2);
INSERT INTO `sales` VALUES ('A0036', '林鵬翔', 'MB586V3R32', 770, 90, 2);
INSERT INTO `sales` VALUES ('A0039', '謝穎青', 'MB586E3R16', 800, 90, 2);
INSERT INTO `sales` VALUES ('A0019', '郭曜明', 'SVGAV1M', 820, 90, 2);
INSERT INTO `sales` VALUES ('A0039', '謝穎青', 'MB586E7R16', 1300, 90, 2);
INSERT INTO `sales` VALUES ('A0042', '毛渝南', 'SVGAV1M', 1430, 90, 2);
INSERT INTO `sales` VALUES ('A0003', '張志輝', 'SVGAV2M', 770, 90, 2);
INSERT INTO `sales` VALUES ('A0056', '向大鵬', 'MB486P3R16', 200, 90, 3);
INSERT INTO `sales` VALUES ('A0042', '毛渝南', 'SVGAP1M', 270, 90, 3);
INSERT INTO `sales` VALUES ('A0002', '李進祿', 'MB486V3R16', 130, 90, 3);
INSERT INTO `sales` VALUES ('A0037', '李進祿', 'MB586E3R16', 130, 90, 3);
INSERT INTO `sales` VALUES ('A0049', '林玉堂', 'MB486V3R32', 450, 90, 3);
INSERT INTO `sales` VALUES ('A0032', '莊國雄', 'SCSIVB', 100, 90, 3);
INSERT INTO `sales` VALUES ('A0003', '張志輝', 'MB486V3R16', 120, 90, 3);
INSERT INTO `sales` VALUES ('A0060', '陳曉蘭', 'MB586V3R16', 610, 90, 3);
INSERT INTO `sales` VALUES ('A0040', '朱金倉', 'MB586E7R32', 430, 90, 3);
INSERT INTO `sales` VALUES ('A0059', '朱金倉', 'SVGAV1M', 800, 90, 3);
INSERT INTO `sales` VALUES ('A0040', '朱金倉', 'MB586E7R32', 430, 90, 4);
INSERT INTO `sales` VALUES ('A0059', '朱金倉', 'SVGAV1M', 800, 90, 4);
INSERT INTO `sales` VALUES ('A0043', '王玉治', 'SVGAP2M', 900, 90, 4);
INSERT INTO `sales` VALUES ('A0037', '李進祿', 'MB586V3R16', 270, 90, 4);
INSERT INTO `sales` VALUES ('A0045', '李進祿', 'SCSIVB', 720, 90, 4);
INSERT INTO `sales` VALUES ('A0005', '張志輝', 'MB486P3R16', 650, 90, 4);
INSERT INTO `sales` VALUES ('A0038', '張志輝', 'MB586E7R32', 520, 90, 4);
INSERT INTO `sales` VALUES ('A0041', '謝穎青', 'SVGAV2M', 160, 90, 4);
INSERT INTO `sales` VALUES ('A0044', '陳曉蘭', 'SCSIPB', 920, 90, 4);
INSERT INTO `sales` VALUES ('A0001', '毛渝南', 'MB586E7R16', 360, 90, 4);
INSERT INTO `sales` VALUES ('A0001', '毛渝南', 'MB586E7R16', 360, 90, 5);
INSERT INTO `sales` VALUES ('A0007', '毛渝南', 'MB586P3R16', 940, 90, 5);
INSERT INTO `sales` VALUES ('A0047', '朱金倉', 'EIDE2RP', 630, 90, 5);
INSERT INTO `sales` VALUES ('A0045', '李進祿', 'SVGAP2M', 2250, 90, 5);
INSERT INTO `sales` VALUES ('A0030', '吳美成', 'MB486P3R32', 340, 90, 5);
INSERT INTO `sales` VALUES ('A0054', '林鵬翔', 'MB586V3R16', 380, 90, 5);
INSERT INTO `sales` VALUES ('A0050', '林鳳春', 'MB486P3R16', 560, 90, 5);
INSERT INTO `sales` VALUES ('A0055', '陳雅賢', 'MB586E3R32', 390, 90, 5);
INSERT INTO `sales` VALUES ('A0020', '李進祿', 'SVGAV2M', 180, 90, 5);
INSERT INTO `sales` VALUES ('A0013', '吳國信', 'MB586E3R32', 366, 90, 5);
INSERT INTO `sales` VALUES ('A0006', '向大鵬', 'MB486V3R16', 450, 90, 6);
INSERT INTO `sales` VALUES ('A0007', '毛渝南', 'MB486V3R32', 200, 90, 6);
INSERT INTO `sales` VALUES ('A0059', '朱金倉', 'MB586V3R32', 270, 90, 6);
INSERT INTO `sales` VALUES ('A0009', '王玉治', 'MB486P3R32', 180, 90, 6);
INSERT INTO `sales` VALUES ('A0020', '李進祿', 'SVGAV2M', 180, 90, 6);
INSERT INTO `sales` VALUES ('A0013', '吳國信', 'MB586E3R32', 790, 90, 6);
INSERT INTO `sales` VALUES ('A0008', '吳美成', 'MB486P3R16', 540, 90, 6);
INSERT INTO `sales` VALUES ('A0036', '林鵬翔', 'MB586E3R32', 540, 90, 6);
INSERT INTO `sales` VALUES ('A0023', '林鳳春', 'MB586E3R32', 650, 90, 6);
INSERT INTO `sales` VALUES ('A0057', '林鳳春', 'MB586E7R32', 340, 90, 6);
INSERT INTO `sales` VALUES ('A0056', '向大鵬', 'MB586E3R16', 250, 90, 7);
INSERT INTO `sales` VALUES ('A0026', '陳曉蘭', 'EIDE2RP', 1060, 90, 7);
INSERT INTO `sales` VALUES ('A0035', '郭曜明', 'MB486V3R16', 1350, 90, 7);
INSERT INTO `sales` VALUES ('A0041', '謝穎青', 'MB586V3R16', 540, 90, 7);
INSERT INTO `sales` VALUES ('A0043', '王玉治', 'MB586E3R16', 360, 90, 7);
INSERT INTO `sales` VALUES ('A0052', '李進祿', 'EIDE1RP', 900, 90, 7);
INSERT INTO `sales` VALUES ('A0001', '毛渝南', 'MB486V3R16', 310, 90, 7);
INSERT INTO `sales` VALUES ('A0014', '莊國雄', 'SVGAV1M', 800, 90, 7);
INSERT INTO `sales` VALUES ('A0016', '林玉堂', 'SVGAP1M', 1260, 90, 7);
INSERT INTO `sales` VALUES ('A0020', '朱金倉', 'EIDE1RP', 800, 90, 7);
INSERT INTO `sales` VALUES ('A0043', '王玉治', 'SCSIVB', 990, 90, 8);
INSERT INTO `sales` VALUES ('A0024', '林玉堂', 'MB586E3R16', 100, 90, 8);
INSERT INTO `sales` VALUES ('A0034', '莊國雄', 'MB586E3R32', 850, 90, 8);
INSERT INTO `sales` VALUES ('A0029', '林鳳春', 'MB486P3R16', 200, 90, 8);
INSERT INTO `sales` VALUES ('A0046', '張志輝', 'MB586P3R16', 800, 90, 8);
INSERT INTO `sales` VALUES ('A0057', '郭曜明', 'MB486P3R32', 270, 90, 8);
INSERT INTO `sales` VALUES ('A0038', '郭曜明', 'SVGAV1M', 490, 90, 8);
INSERT INTO `sales` VALUES ('A0037', '李進祿', 'MB586E7R16', 540, 90, 8);
INSERT INTO `sales` VALUES ('A0040', '朱金倉', 'SVGAP1M', 200, 90, 8);
INSERT INTO `sales` VALUES ('A0042', '毛渝南', 'SCSIPB', 240, 90, 8);
INSERT INTO `sales` VALUES ('A0040', '朱金倉', 'SVGAV1M', 160, 90, 9);
INSERT INTO `sales` VALUES ('A0025', '王玉治', 'MB586E7R32', 720, 90, 9);
INSERT INTO `sales` VALUES ('A0016', '林玉堂', 'MB586E3R16', 1480, 90, 9);
INSERT INTO `sales` VALUES ('A0039', '謝穎青', 'SVGAV2M', 220, 90, 9);
INSERT INTO `sales` VALUES ('A0044', '陳曉蘭', 'EIDE1RP', 1070, 90, 9);
INSERT INTO `sales` VALUES ('A0008', '吳美成', 'SVGAP1M', 1070, 90, 9);
INSERT INTO `sales` VALUES ('A0059', '朱金倉', 'SVGAV1M', 1300, 90, 9);
INSERT INTO `sales` VALUES ('A0009', '王玉治', 'MB586V3R16', 730, 90, 9);
INSERT INTO `sales` VALUES ('A0041', '謝穎青', 'SVGAP2M', 990, 90, 9);
INSERT INTO `sales` VALUES ('A0051', '莊國雄', 'MB486P3R32', 430, 90, 9);
INSERT INTO `sales` VALUES ('A0011', '向大鵬', 'MB586E3R16', 730, 90, 10);
INSERT INTO `sales` VALUES ('A0022', '林玉堂', 'SVGAP2M', 720, 90, 10);
INSERT INTO `sales` VALUES ('A0042', '毛渝南', 'MB586E3R32', 540, 90, 10);
INSERT INTO `sales` VALUES ('A0044', '陳曉蘭', 'MB586E7R32', 540, 90, 10);
INSERT INTO `sales` VALUES ('A0045', '李進祿', 'MB586E7R16', 800, 90, 10);
INSERT INTO `sales` VALUES ('A0031', '吳國信', 'MB586P3R16', 240, 90, 10);
INSERT INTO `sales` VALUES ('A0008', '吳美成', 'MB586V3R32', 540, 90, 10);
INSERT INTO `sales` VALUES ('A0058', '吳美成', 'MB586P3R16', 180, 90, 10);
INSERT INTO `sales` VALUES ('A0051', '莊國雄', 'SCSIVB', 940, 90, 10);
INSERT INTO `sales` VALUES ('A0010', '謝穎青', 'MB586E3R32', 520, 90, 10);
INSERT INTO `sales` VALUES ('A0048', '郭曜明', 'SVGAP1M', 990, 90, 10);
INSERT INTO `sales` VALUES ('A0036', '林鵬翔', 'MB486V3R32', 540, 90, 11);
INSERT INTO `sales` VALUES ('A0053', '莊國雄', 'MB586V3R32', 360, 90, 11);
INSERT INTO `sales` VALUES ('A0012', '陳雅賢', 'MB586E7R32', 630, 90, 11);
INSERT INTO `sales` VALUES ('A0027', '謝穎青', 'MB486V3R16', 240, 90, 11);
INSERT INTO `sales` VALUES ('A0037', '李進祿', 'MB586E7R16', 540, 90, 11);
INSERT INTO `sales` VALUES ('A0040', '朱金倉', 'SVGAP1M', 200, 90, 11);
INSERT INTO `sales` VALUES ('A0042', '毛渝南', 'SCSIPB', 240, 90, 11);
INSERT INTO `sales` VALUES ('A0045', '李進祿', 'EIDE2RP', 1260, 90, 11);
INSERT INTO `sales` VALUES ('A0047', '朱金倉', 'MB586V3R32', 1070, 90, 11);
INSERT INTO `sales` VALUES ('A0048', '郭曜明', 'MB486V3R16', 1260, 90, 11);
INSERT INTO `sales` VALUES ('A0050', '林鳳春', 'MB486P3R16', 990, 90, 11);
INSERT INTO `sales` VALUES ('A0052', '李進祿', 'MB586P3R16', 920, 90, 11);
INSERT INTO `sales` VALUES ('A0013', '吳國信', 'MB586E7R16', 450, 90, 12);
INSERT INTO `sales` VALUES ('A0060', '陳曉蘭', 'SVGAV2M', 670, 90, 12);
