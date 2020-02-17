-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `php_1080419`
--

-- --------------------------------------------------------

--
-- 資料表結構 `p1_admin`
--

CREATE TABLE `p1_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `p1_admin`
--

INSERT INTO `p1_admin` (`id`, `acc`, `pwd`) VALUES
(1, 'admin', '1234'),
(2, 'peter', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `p2_carousel`
--

CREATE TABLE `p2_carousel` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `p2_carousel`
--

INSERT INTO `p2_carousel` (`id`, `img`, `dpy`) VALUES
(1, 'imagead01.jpg', 1),
(2, 'imagead02.jpg', 1),
(3, 'imagead03.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `p3_footer`
--

CREATE TABLE `p3_footer` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `p3_footer`
--

INSERT INTO `p3_footer` (`id`, `text`, `img`, `dpy`) VALUES
(1, 'Copyright ©2019 李竑鋕', '12.png', 0),
(2, 'Copyright ©2017 李竑鋕', '18.jpg', 0),
(3, 'Copyright ©2016 李竑鋕', '6.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `p4_new`
--

CREATE TABLE `p4_new` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `p4_new`
--

INSERT INTO `p4_new` (`id`, `img`, `title`, `text`, `link`, `dpy`) VALUES
(1, 'new1.jpg', 'HAPPY HOLIDAYS!', '我們想通過特殊的方式來慶祝假期，所以我們將舉辦一次額外的魔術神話活動！ 從12月19日（星期四）到1月6日（星期一），以下獎金率將應用於我們的官方網絡', 'https://www.playatlas.com/index.php?/atlas-news/news/latest-patch-happy-holidays-r231/', 1),
(2, 'new2.jpg', 'XBOX AND PC CROSSPLAY IS NOW LIVE!', '嗨，探路者，讓旅途開始吧！在有史以來最大的遊戲世界之一中潛入無止境的海盜與航海，探索與戰鬥冒險！ 我們很高興地宣布Xbox和PC聯合啟動。', 'https://www.playatlas.com/index.php?/atlas-news/news/xbox-and-pc-crossplay-is-now-live-r216/', 1),
(3, 'new4.jpg_large', 'ATLAS DEVKIT UPDATE: BLACKWOOD & MORE', '此最新更新包括Blackwood地圖，作為如何創建獨立地圖的示例，以及遊戲的所有最新內容和新增內容。新地圖為mod開發人員提供了一個示例，可作為一種創建自己獨特的ATLAS體驗的方式，該體驗旨在託管在單個服務器上。', 'https://www.playatlas.com/index.php?/atlas-news/news/xbox-and-pc-crossplay-is-now-live-r216/', 1),
(6, 'new3.jpg', 'BLACKWOOD - A NEW TWISTED ADVENTURE AND ATLAS SALE!', 'ATLAS的免費更新提供了期待已久的地圖Blackwood！在赤道生物群系上準備一個黑暗的轉折，那裡有黑暗的叢林，山洞，村莊，房屋，農場和許多有趣的動物。', 'https://www.playatlas.com/index.php?/atlas-news/news/blackwood-a-new-twisted-adventure-and-atlas-sale-r180/', 1),
(7, 'new5.jpg', 'SHIPS AHOY: NEW SKINS AND BLACKWOOD ON THE HORIZON', '使用新的船舵皮膚為您的旅途增添光彩！我們很高興為您介紹新的選項，以使用三個新的皮膚來定制您的船！每個都將與任務的完成聯繫在一起。', 'https://www.playatlas.com/index.php?/atlas-news/news/ships-ahoy-new-skins-and-blackwood-on-the-horizon-r177/', 1),
(8, 'new6.jpg', 'WILD PIRATE ENCAMPMENTS, NON DEDICATED MODE!', '“野生海盜營地”是指在可佔領的島嶼上居住的敵方NPC人物，防禦艦隊和防禦工事的集合。他們擁有各種各樣的武器，防禦，並居住在預製的堡壘中。他們還將擁有代表所有4類的AI船巡邏其島嶼的海岸線。', 'https://www.playatlas.com/index.php?/atlas-news/news/captains-log-34-wild-pirate-encampments-non-dedicated-mode-and-more-r171/', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `p5_new2`
--

CREATE TABLE `p5_new2` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `dpy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `p5_new2`
--

INSERT INTO `p5_new2` (`id`, `text`, `date`, `dpy`) VALUES
(1, '《ATLAS》01月14日上午09點全服維護公告', '2020-01-14', 1),
(4, '《ATLAS》01月14日上午09點全服維護公告', '2020-01-13', 1),
(5, '《ATLAS》01月07日上午09點全服維護公告', '2020-01-07', 1),
(6, '《ATLAS》01月07日上午09點全服維護公告', '2020-01-06', 1),
(7, '《ATLAS》12月31日上午09點全服維護公告', '2019-12-31', 1),
(8, '《ATLAS》12月31日上午09點全服維護公告', '2019-12-30', 1),
(9, '《ATLAS》12月24日上午09點全服維護公告', '2019-12-24', 1),
(10, '《ATLAS》12月24日上午09點全服維護公告', '2019-12-23', 1),
(11, '《ATLAS》12月17日上午09點全服維護公告', '2019-12-17', 1),
(12, '《ATLAS》12月17日上午09點全服維護公告', '2019-12-16', 1),
(13, '《ATLAS》12月10日上午09點全服維護公告', '2019-12-10', 1),
(14, '《ATLAS》12月10日上午09點全服維護公告', '2019-12-09', 1),
(15, '《ATLAS》12月03日上午09點全服維護公告', '2019-12-03', 1),
(16, '《ATLAS》12月03日上午09點全服維護公告', '2019-12-02', 1),
(17, '《ATLAS》11月26日上午09點全服維護公告', '2019-11-26', 1),
(18, '《ATLAS》11月26日上午09點全服維護公告', '2019-11-25', 1),
(19, '《ATLAS》11月19日上午09點全服維護公告', '2019-11-19', 1),
(20, '《ATLAS》11月19日上午09點全服維護公告', '2019-11-18', 1),
(21, '《ATLAS》11月12日上午09點全服維護公告', '2019-11-12', 1),
(22, '《ATLAS》11月12日上午09點全服維護公告', '2019-11-11', 1),
(23, '《ATLAS》11月05日上午09點全服維護公告', '2019-11-05', 1),
(24, '《ATLAS》11月05日上午09點全服維護公告', '2019-11-04', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `p1_admin`
--
ALTER TABLE `p1_admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `p2_carousel`
--
ALTER TABLE `p2_carousel`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `p3_footer`
--
ALTER TABLE `p3_footer`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `p4_new`
--
ALTER TABLE `p4_new`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `p5_new2`
--
ALTER TABLE `p5_new2`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `p1_admin`
--
ALTER TABLE `p1_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `p2_carousel`
--
ALTER TABLE `p2_carousel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `p3_footer`
--
ALTER TABLE `p3_footer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `p4_new`
--
ALTER TABLE `p4_new`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `p5_new2`
--
ALTER TABLE `p5_new2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
