-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 16 2023 г., 14:19
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vdrug_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `addons`
--
-- Создание: Фев 23 2023 г., 17:24
--

DROP TABLE IF EXISTS `addons`;
CREATE TABLE `addons` (
  `id` int(3) NOT NULL,
  `title` varchar(25) CHARACTER SET utf8 NOT NULL,
  `developer` varchar(11) NOT NULL,
  `info` text CHARACTER SET utf8 NOT NULL,
  `perameter` text CHARACTER SET utf8 NOT NULL,
  `log` text CHARACTER SET utf8 NOT NULL,
  `temp` text CHARACTER SET utf8 NOT NULL,
  `status` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--
-- Создание: Мар 16 2023 г., 10:34
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `title` varchar(50) NOT NULL,
  `author` varchar(11) NOT NULL,
  `book` varchar(30) NOT NULL,
  `text` text NOT NULL,
  `time` varchar(15) NOT NULL,
  `log` varchar(300) NOT NULL,
  `access` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `bots`
--
-- Создание: Фев 23 2023 г., 17:24
-- Последнее обновление: Мар 16 2023 г., 02:11
--

DROP TABLE IF EXISTS `bots`;
CREATE TABLE `bots` (
  `id` varchar(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `type` varchar(1) NOT NULL,
  `status` varchar(1) NOT NULL,
  `master` varchar(11) NOT NULL,
  `group` varchar(25) NOT NULL,
  `channel` varchar(25) NOT NULL,
  `alert` text NOT NULL,
  `start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `info` text NOT NULL,
  `mirror` varchar(25) NOT NULL,
  `settings` varchar(300) NOT NULL,
  `nick` varchar(25) NOT NULL,
  `log` text NOT NULL,
  `skey` varchar(50) NOT NULL,
  `switcher` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `bots`
--

INSERT INTO `bots` (`id`, `title`, `type`, `status`, `master`, `group`, `channel`, `alert`, `start`, `info`, `mirror`, `settings`, `nick`, `log`, `skey`, `switcher`) VALUES
('5540552640', 'SANDBOX', '', '2', '', '', '', '', '2022-10-12 13:59:52', 'SANDBOX', '', '', 'SSSANDBOT', '1665583192 siteStart', 'AAG2wzt1X2OGNNr-kFwYeyDIl381HeTVeko', '1'),
('5650496364', 'Shadow Service', 'C', '2', '', '', '', '', '2022-09-27 19:26:13', 'Shadow Service Official Bot ', '', '', 'ShadowserviceBOT', '1664306773 siteStart', 'AAHmafpBsFXwE2XwUcN7twFp5FtQv87Of0M', '0'),
('5655424289', 'ANOTHER TEST BOT', 'S', '2', '5774290730', '', '', '', '2022-10-16 10:15:47', 'Another Test Bot', '', '', 'TESTSSSMDBOT', '1665915347 siteStart', 'AAGyUyCm3U64bEtgvPIZxDLn2E0UemxY2Ss', '1'),
('5673364946', 'Hykgyu', '', '2', '5242166445', '', '', '', '2022-11-16 23:11:52', '', '', '', 'Sdfgyybot', '1668640312 botStart 5682790477', 'AAE5aGI76a5_lSPqbhdfHE3NfqyA3nlBTHI', '1'),
('5682790477', 'SHADOW SERVICE BOT', '', '2', '5774290730', '', '', '', '2022-10-09 09:47:59', 'SHADOW SERVICE BOT', '', '', 'shadowservice_BOT', '1665308879 siteStart', 'AAEDLX0He-QEc49F_DuNIRFR1TwGsjurRXQ', '1'),
('5682996596', 'BroZZers', 'F', '2', '', '', '', '', '2022-09-27 19:44:48', 'Brozzers', '', '', 'BroZZersshopBOT', '1664307888 siteStart', 'AAFB7YEFLt5ek31m153YPahFglbzKZXeVtA', '0'),
('5683295680', 'Кайфарик 24/7', 'F', '1', '', '', '', '', '2022-12-17 16:52:52', '', '', '', 'KFK247_BOT', '', 'AAEvM-Gc-RzA4bADwZF9G3N6SgE6UP8DjRQ', '1'),
('5722362708', 'BigBoss', 'F', '2', '', '', '', '', '2022-09-27 23:53:18', 'Oscar', '', '', 'BigBoss4844848BOT', '1664322798 siteStart', 'AAFyUmLPKpyq5g4kCAKi1IwzpJrtSjrt9cY', '0'),
('5723091276', 'Кайфарик 24/7', 'F', '1', '', '', '', '', '2022-12-17 16:52:52', '', 'KFKMD', 'ltc1q9g7mljtamezywlw6xqyhl3sknh8ehu65gnfu6t&1KwiscpDA8yrdAztoxGbSaXPHEVHzre5zN&4779180001909614&120', 'KFK247_BOT', '', 'AAF4xVOtn_0aFvEaNE0Q4loaoVWsQ8kE5eI', '1'),
('5726261122', 'TEST SHOP BOT', 'S', '2', '', '', '', '', '2022-10-14 16:57:43', 'TEST SHOP BOT', '', '', 'TEST_24_SHOP_BOTBOT', '1665766663 siteStart', 'AAEJnDA4VuvqtV3WNdsZczRtl1Z6lA-rVU4', '1'),
('5776895877', 'GOD BOT', '@', '2', '5502414686', '', '', '', '2022-11-20 15:36:00', 'Bot of APostal', '', '', 'GoD_$$$_BOT', '1668958560 siteStart', 'AAHo1cnlFirbCKHphP39Epux21wTjdnX-uo', '1'),
('5902329910', 'Mirsoli', 'F', '1', '', '', '', '', '2023-02-28 13:50:36', '', '', '', 'MirsoIi_bot', '', 'AAF9Lbb6kZPeiEgU6WrOmMD2eziijQtOFM8', '1'),
('5947571409', 'G T I × B O T', 'H', '9', '', '', '', '', '2022-12-26 09:14:37', '', '', '', 'Gti_n2_bot', '', 'AAFHv9bpGIuTt2D1zHkIkVSp8QRVD-YU-pA', ''),
('5953831631', '24/7', 'F', '1', '6147898882', '', '', '', '2023-03-16 02:09:57', '', 'SKBOY', 'ltc1qnd25nd7f4mthh5ay3zdj6r9u7kmt94hqmhru2h&bc1qz7v63gddjhdenpds2rfdntywrczteulxavxd0x&4779180001909614', 'MDBOTCKBOT', '', 'AAEC5eL8R7tJTZCAmSJm-Q1nJga7oDZ3pqQ', '1'),
('5984814929', 'Кайфарик БОТ', 'F', '9', '', '', '', '', '2023-02-05 11:52:43', '', 'KFKMD', 'ltc1qnd25nd7f4mthh5ay3zdj6r9u7kmt94hqmhru2h&bc1qz7v63gddjhdenpds2rfdntywrczteulxavxd0x&4779180001909614&70', 'kaifarimd_bot', '', 'AAGlGfoRBNP_B1h_AxGHzfYTTAtAr0akYn8', '1'),
('5985168625', 'Соленыи мальчик', 'F', '1', '5067943657', '', '', '', '2023-01-01 06:13:08', '', 'SKBOY', 'ltc1qqcz86nz8r6hc8cqwp53dcjk5hdghmsp5jt3vya&ltc1qqcz86nz8r6hc8cqwp53dcjk5hdghmsp5jt3vya&4779180001909614&70', '', '', 'AAHSH2OCEUSVb_qrtRPKV02xbRfq1u7aMkc', '1'),
('6097017980', 'WoW BoT', 'G', '1', '6262736172', '', '', '', '2023-03-07 03:12:36', '', '', '', 'W0W_FL0W_BOT', '', 'AAHakw4Tr2MIOh7i-ad4HCEuPvluSUsssFo', '1'),
('6102830593', 'Milana', 'X', '1', '1455827398', '', '', '', '2023-03-12 13:50:03', '', '', '', 'MiLaNaMDBot', '', 'AAG3xLLohIzb-blyqQ1QJuoK0-eaxIbD7sg', '1'),
('6132441782', 'GoD BoT', 'A', '9', '', '', '', '', '2023-02-05 11:52:43', '', '', '', 'Eb_god_bot', '', 'AAGkSr4j9DYmqURZAnSesGmsLbTdQI6A0-I', '1'),
('6246376093', '🅰️POST B🤖T', '@', '9', '5901614439', '', '', '', '2023-03-03 19:09:34', '', '', '', 'APoST_SSS_BOT', '', 'AAGaGvpWx9PFH5KdcvaetSCkMsxdkUCExL8', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `callbacks`
--
-- Создание: Фев 23 2023 г., 17:24
-- Последнее обновление: Фев 23 2023 г., 17:24
--

DROP TABLE IF EXISTS `callbacks`;
CREATE TABLE `callbacks` (
  `title` varchar(30) NOT NULL,
  `short` varchar(5) NOT NULL,
  `callback` varchar(15) NOT NULL,
  `command` varchar(25) NOT NULL,
  `parameter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Telegram Bot Menu Buttons Callbacks';

--
-- Дамп данных таблицы `callbacks`
--

INSERT INTO `callbacks` (`title`, `short`, `callback`, `command`, `parameter`) VALUES
('КИШИНЁВ', 'CHISH', 'ORSKSH', '', ''),
('Alpha-PVP', 'APVP', 'SELALP', '', ''),
('Mephedrone', 'MEPH', 'SELMEF', '', ''),
('Центр', 'CTR', 'SECCEN', '', ''),
('Ботаника', 'BTK', 'SECBOT', '', ''),
('Рышкановка', 'RSK', 'SECRSH', '', ''),
('Чеканы', 'CKN', 'SECCEK', '', ''),
('Буюканы', 'BKN', 'SECBKN', '', ''),
('Скулянка', 'SKL', 'SECSKL', '', ''),
('БЕЛЬЦЫ', 'BELTS', 'ORSBLT', '', ''),
('0.5', 'WOS', 'FASWOS', '', ''),
('1', 'WLO', 'FASWLO', '', ''),
('Бошки', 'BSK', 'SELBSK', '', ''),
('Litecoin [LTC]', 'LTC', 'PAYLTC', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `captchas`
--
-- Создание: Мар 16 2023 г., 10:31
--

DROP TABLE IF EXISTS `captchas`;
CREATE TABLE `captchas` (
  `id` varchar(5) NOT NULL,
  `img` int(50) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `commands`
--
-- Создание: Фев 23 2023 г., 17:24
-- Последнее обновление: Мар 09 2023 г., 07:33
--

DROP TABLE IF EXISTS `commands`;
CREATE TABLE `commands` (
  `id` int(3) NOT NULL,
  `x` varchar(5) NOT NULL,
  `size` varchar(1) NOT NULL,
  `cmd` varchar(15) CHARACTER SET utf8 NOT NULL,
  `cat` varchar(10) CHARACTER SET utf8 NOT NULL,
  `addon` varchar(15) CHARACTER SET utf8 NOT NULL,
  `state` varchar(1) NOT NULL,
  `author` varchar(12) CHARACTER SET utf8 NOT NULL,
  `info` text CHARACTER SET utf8 NOT NULL,
  `prms` text NOT NULL,
  `cond` varchar(15) NOT NULL,
  `limit` varchar(13) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(50) NOT NULL,
  `code` text NOT NULL,
  `post` varchar(50) NOT NULL,
  `kb` text NOT NULL,
  `react` varchar(25) NOT NULL,
  `break` varchar(1) NOT NULL,
  `log` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `commands`
--

INSERT INTO `commands` (`id`, `x`, `size`, `cmd`, `cat`, `addon`, `state`, `author`, `info`, `prms`, `cond`, `limit`, `text`, `img`, `code`, `post`, `kb`, `react`, `break`, `log`) VALUES
(1, 'START', '5', 'start', 'core', '', '1', 'DEFAULT', 'DEFAULT, MAIN AND NECESSARY COMMAND', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'GID', '3', 'help', 'core', 'help', '2', 'DEFAULT', 'DEFAULT BUT NOT NECESSARY ', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'BAK', '3', 'update', 'core', 'update', '2', 'RSRVRS', 'NOT NECESSARY AND SOMETIMES NOT MENTIONED BUT NOT IMPOSSIBLE TO TURN IT OFF', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'BUS', '4', 'settings', 'core', 'PANEL', '2', 'DEFAULT', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'ID', '2', 'id', 'dev', 'HDBK', '4', 'RSRVRS', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'NEW', '3', 'new', 'core', '', '2', 'RSRVRS', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'BREAK', '5', 'exit', 'core', '', '1', 'RSRVRS', 'TERMINATE ANY PROCESS OR ACTIVITY AND CLOSE ACTIVE SESSION WITHOUT SAVING OF DATA AND NO POSSIBILITY TO CONTINUE PROCESSES LATER', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'CAPTC', '7', 'captcha', 'security', 'TXT2IMG', '2', 'RSRVRS', 'USER SECURITY LEVEL TO PRINT FIVE RANDOM GENERATED NUMBERS FROM THE IMAGE', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'DB', '2', 'database', 'dev', 'TeleSQL', '2', 'RSRVRS', 'MANAGING AND EDITING OF DB TABLES THROUGHT THE TELEGRAM BOT DIALOG INTERFACE', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `currencies`
--
-- Создание: Мар 09 2023 г., 07:40
-- Последнее обновление: Мар 09 2023 г., 07:58
--

DROP TABLE IF EXISTS `currencies`;
CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `iso` varchar(5) NOT NULL,
  `symbol` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `currencies`
--

INSERT INTO `currencies` (`id`, `title`, `iso`, `symbol`) VALUES
(1, 'DOLLAR USA', 'USD', '$'),
(2, 'LEI - REPUBLIC OF MOLDOVA', 'MDL', 'L'),
(3, 'BITCOIN', 'BTC', '₿'),
(4, 'LITECOIN', 'LTC', 'Ł'),
(5, 'EURO', 'EUR', '€'),
(6, 'РОССИЙСКИЙ РУБЛЬ', 'RUB', '₽'),
(7, 'ETHEREUM', 'ETH', 'Ξ'),
(8, 'УКРАИНСКАЯ ГРИВНА', 'UAH', '₴'),
(9, 'BINANCE BNB', 'BNB', '❖'),
(10, 'TETHER', 'USDT', '⏁');

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--
-- Создание: Фев 23 2023 г., 17:24
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `currency` int(11) NOT NULL,
  `wallet_id` varchar(255) NOT NULL,
  `transfer_key` varchar(255) NOT NULL,
  `receive_adress` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `dialogs`
--
-- Создание: Фев 23 2023 г., 17:24
--

DROP TABLE IF EXISTS `dialogs`;
CREATE TABLE `dialogs` (
  `id` int(23) NOT NULL,
  `status` tinytext CHARACTER SET utf8 NOT NULL,
  `bot` int(11) NOT NULL,
  `info` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `extensions`
--
-- Создание: Фев 23 2023 г., 17:24
--

DROP TABLE IF EXISTS `extensions`;
CREATE TABLE `extensions` (
  `bot` varchar(11) NOT NULL,
  `loc_saver` varchar(1) DEFAULT NULL,
  `ltc_pm` varchar(1) NOT NULL,
  `btc_pm` varchar(1) NOT NULL,
  `doge_pm` varchar(1) NOT NULL,
  `bpay_pm` varchar(1) NOT NULL,
  `maib_pm` varchar(1) NOT NULL,
  `qiwi_pm` varchar(1) NOT NULL,
  `ltc_out` varchar(1) NOT NULL,
  `btc_out` varchar(1) NOT NULL,
  `doge_out` varchar(1) NOT NULL,
  `bpay_out` varchar(1) NOT NULL,
  `qiwi_out` varchar(1) NOT NULL,
  `maib_out` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--
-- Создание: Мар 16 2023 г., 10:28
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `bot` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `user` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(15) NOT NULL,
  `cat` varchar(15) NOT NULL,
  `link` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `fonts`
--
-- Создание: Фев 23 2023 г., 17:24
--

DROP TABLE IF EXISTS `fonts`;
CREATE TABLE `fonts` (
  `id` int(11) NOT NULL,
  `title` varchar(15) NOT NULL,
  `aa` varchar(2) DEFAULT NULL,
  `a` varchar(2) DEFAULT NULL,
  `bb` varchar(2) DEFAULT NULL,
  `b` varchar(2) DEFAULT NULL,
  `cc` varchar(2) DEFAULT NULL,
  `c` varchar(2) DEFAULT NULL,
  `dd` varchar(2) DEFAULT NULL,
  `d` varchar(2) DEFAULT NULL,
  `ee` varchar(2) DEFAULT NULL,
  `e` varchar(2) DEFAULT NULL,
  `ff` varchar(2) DEFAULT NULL,
  `f` varchar(2) DEFAULT NULL,
  `gg` varchar(2) DEFAULT NULL,
  `g` varchar(2) DEFAULT NULL,
  `hh` varchar(2) DEFAULT NULL,
  `h` varchar(2) DEFAULT NULL,
  `ii` varchar(2) DEFAULT NULL,
  `i` varchar(2) DEFAULT NULL,
  `jj` varchar(2) DEFAULT NULL,
  `j` varchar(2) DEFAULT NULL,
  `kk` varchar(2) DEFAULT NULL,
  `k` varchar(2) DEFAULT NULL,
  `ll` varchar(2) DEFAULT NULL,
  `l` varchar(2) DEFAULT NULL,
  `mm` varchar(2) DEFAULT NULL,
  `m` varchar(2) DEFAULT NULL,
  `nn` varchar(2) DEFAULT NULL,
  `n` varchar(2) DEFAULT NULL,
  `oo` varchar(2) DEFAULT NULL,
  `o` varchar(2) DEFAULT NULL,
  `pp` varchar(2) DEFAULT NULL,
  `p` varchar(2) DEFAULT NULL,
  `qq` varchar(2) DEFAULT NULL,
  `q` varchar(2) DEFAULT NULL,
  `rr` varchar(2) DEFAULT NULL,
  `r` varchar(2) DEFAULT NULL,
  `ss` varchar(2) DEFAULT NULL,
  `s` varchar(2) DEFAULT NULL,
  `tt` varchar(2) DEFAULT NULL,
  `t` varchar(2) DEFAULT NULL,
  `uu` varchar(2) DEFAULT NULL,
  `u` varchar(2) DEFAULT NULL,
  `vv` varchar(2) DEFAULT NULL,
  `v` varchar(2) DEFAULT NULL,
  `ww` varchar(2) DEFAULT NULL,
  `w` varchar(2) DEFAULT NULL,
  `xx` varchar(2) DEFAULT NULL,
  `X` varchar(2) DEFAULT NULL,
  `yy` varchar(2) DEFAULT NULL,
  `Y` varchar(2) DEFAULT NULL,
  `zz` varchar(2) DEFAULT NULL,
  `z` varchar(2) DEFAULT NULL,
  `аа` varchar(2) DEFAULT NULL,
  `а` varchar(2) DEFAULT NULL,
  `бб` varchar(2) DEFAULT NULL,
  `б` varchar(2) DEFAULT NULL,
  `вв` varchar(2) DEFAULT NULL,
  `в` varchar(2) DEFAULT NULL,
  `гг` varchar(2) DEFAULT NULL,
  `г` varchar(2) DEFAULT NULL,
  `дд` varchar(2) DEFAULT NULL,
  `д` varchar(2) DEFAULT NULL,
  `ее` varchar(2) DEFAULT NULL,
  `е` varchar(2) DEFAULT NULL,
  `ёё` varchar(2) DEFAULT NULL,
  `ё` varchar(2) DEFAULT NULL,
  `жж` varchar(2) DEFAULT NULL,
  `ж` varchar(2) DEFAULT NULL,
  `зз` varchar(2) DEFAULT NULL,
  `з` varchar(2) DEFAULT NULL,
  `ии` varchar(2) DEFAULT NULL,
  `и` varchar(2) DEFAULT NULL,
  `йй` varchar(2) DEFAULT NULL,
  `й` varchar(2) DEFAULT NULL,
  `кк` varchar(2) DEFAULT NULL,
  `к` varchar(2) DEFAULT NULL,
  `лл` varchar(2) DEFAULT NULL,
  `л` varchar(2) DEFAULT NULL,
  `мм` varchar(2) DEFAULT NULL,
  `м` varchar(2) DEFAULT NULL,
  `нн` varchar(2) DEFAULT NULL,
  `н` varchar(2) DEFAULT NULL,
  `оо` varchar(2) DEFAULT NULL,
  `о` varchar(2) DEFAULT NULL,
  `пп` varchar(2) DEFAULT NULL,
  `п` varchar(2) DEFAULT NULL,
  `рр` varchar(2) DEFAULT NULL,
  `р` varchar(2) DEFAULT NULL,
  `сс` varchar(2) DEFAULT NULL,
  `с` varchar(2) DEFAULT NULL,
  `тт` varchar(2) DEFAULT NULL,
  `т` varchar(2) DEFAULT NULL,
  `уу` varchar(2) DEFAULT NULL,
  `у` varchar(2) DEFAULT NULL,
  `фф` varchar(2) DEFAULT NULL,
  `ф` varchar(2) DEFAULT NULL,
  `хх` varchar(2) DEFAULT NULL,
  `х` varchar(2) DEFAULT NULL,
  `цц` varchar(2) DEFAULT NULL,
  `ц` varchar(2) DEFAULT NULL,
  `чч` varchar(2) DEFAULT NULL,
  `ч` varchar(2) DEFAULT NULL,
  `шш` varchar(2) DEFAULT NULL,
  `ш` varchar(2) DEFAULT NULL,
  `щщ` varchar(2) DEFAULT NULL,
  `щ` varchar(2) DEFAULT NULL,
  `ъъ` varchar(2) DEFAULT NULL,
  `ъ` varchar(2) DEFAULT NULL,
  `ыы` varchar(2) DEFAULT NULL,
  `ы` varchar(2) DEFAULT NULL,
  `ьь` varchar(2) DEFAULT NULL,
  `ь` varchar(2) DEFAULT NULL,
  `ээ` varchar(2) DEFAULT NULL,
  `э` varchar(2) DEFAULT NULL,
  `юю` varchar(2) DEFAULT NULL,
  `ю` varchar(2) DEFAULT NULL,
  `яя` varchar(2) DEFAULT NULL,
  `я` varchar(2) DEFAULT NULL,
  `d0` varchar(2) DEFAULT NULL,
  `d1` varchar(2) DEFAULT NULL,
  `d2` varchar(2) DEFAULT NULL,
  `d3` varchar(2) DEFAULT NULL,
  `d4` varchar(2) DEFAULT NULL,
  `d5` varchar(2) DEFAULT NULL,
  `d6` varchar(2) DEFAULT NULL,
  `d7` varchar(2) DEFAULT NULL,
  `d8` varchar(2) DEFAULT NULL,
  `d9` varchar(2) DEFAULT NULL,
  `s0` varchar(2) DEFAULT NULL,
  `s1` varchar(2) DEFAULT NULL,
  `s2` varchar(2) DEFAULT NULL,
  `s3` varchar(2) DEFAULT NULL,
  `s4` varchar(2) DEFAULT NULL,
  `s5` varchar(2) DEFAULT NULL,
  `s6` varchar(2) DEFAULT NULL,
  `s7` varchar(2) DEFAULT NULL,
  `s8` varchar(2) DEFAULT NULL,
  `s9` varchar(2) DEFAULT NULL,
  `p0` varchar(2) DEFAULT NULL,
  `p1` varchar(2) DEFAULT NULL,
  `p2` varchar(2) DEFAULT NULL,
  `p3` varchar(2) DEFAULT NULL,
  `p4` varchar(2) DEFAULT NULL,
  `p5` varchar(2) DEFAULT NULL,
  `p6` varchar(2) DEFAULT NULL,
  `p7` varchar(2) DEFAULT NULL,
  `p8` varchar(2) DEFAULT NULL,
  `p9` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `forum`
--
-- Создание: Мар 16 2023 г., 10:43
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE `forum` (
  `title` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `text` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `reply` int(11) NOT NULL,
  `spoiler` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--
-- Создание: Мар 16 2023 г., 10:26
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries` (
  `id` varchar(6) NOT NULL,
  `creator` varchar(11) NOT NULL,
  `access` varchar(1) NOT NULL,
  `count` varchar(3) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `games`
--
-- Создание: Мар 16 2023 г., 10:40
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE `games` (
  `id` varchar(6) NOT NULL,
  `group` varchar(30) NOT NULL,
  `bot` varchar(11) NOT NULL,
  `lines` text NOT NULL,
  `title` varchar(50) NOT NULL,
  `challenge` varchar(300) NOT NULL,
  `start` varchar(15) NOT NULL,
  `timer` varchar(6) NOT NULL,
  `prize` varchar(150) NOT NULL,
  `winner` varchar(100) NOT NULL,
  `log` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--
-- Создание: Мар 09 2023 г., 00:39
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` varchar(12) NOT NULL,
  `title` varchar(25) NOT NULL,
  `type` varchar(15) NOT NULL,
  `link` varchar(30) NOT NULL,
  `creator` varchar(11) NOT NULL,
  `bot` varchar(11) NOT NULL,
  `administrator` text NOT NULL,
  `moderator` text NOT NULL,
  `partener` text NOT NULL,
  `about` text NOT NULL,
  `feedback` text NOT NULL,
  `rules` text NOT NULL,
  `settings` varchar(100) NOT NULL,
  `chellenge` varchar(11) NOT NULL,
  `log` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `merches`
--
-- Создание: Фев 23 2023 г., 17:24
-- Последнее обновление: Фев 23 2023 г., 17:24
--

DROP TABLE IF EXISTS `merches`;
CREATE TABLE `merches` (
  `id` int(4) NOT NULL,
  `name` tinytext NOT NULL,
  `complectation` text NOT NULL,
  `price` varchar(9) NOT NULL,
  `category` varchar(2) NOT NULL,
  `parameter` text CHARACTER SET utf8 NOT NULL,
  `status` varchar(2) NOT NULL,
  `agent` varchar(11) NOT NULL,
  `seller` text NOT NULL,
  `start` datetime NOT NULL,
  `info` text NOT NULL,
  `gallery` text CHARACTER SET utf8 NOT NULL,
  `button` text NOT NULL,
  `bonus` text NOT NULL,
  `place` text CHARACTER SET utf8 NOT NULL,
  `city` varchar(11) NOT NULL,
  `sector` text NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `photos` text CHARACTER SET utf8 NOT NULL,
  `sold` datetime NOT NULL,
  `temp` text CHARACTER SET utf8 NOT NULL,
  `log` text CHARACTER SET utf8 NOT NULL,
  `ticket` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `merches`
--

INSERT INTO `merches` (`id`, `name`, `complectation`, `price`, `category`, `parameter`, `status`, `agent`, `seller`, `start`, `info`, `gallery`, `button`, `bonus`, `place`, `city`, `sector`, `description`, `photos`, `sold`, `temp`, `log`, `ticket`) VALUES
(1111, 'Alpha-PVP', '1', '28', 'RC', 'SLAA', '7', 'Bartolo', 'F', '2022-09-29 17:28:16', 'Белый крис', '', '$APVPBTN', '', '', '37301', '3730102', 'Information access denied ', '', '2022-11-05 16:04:40', '', '', '0'),
(1112, 'Alpha-PVP', '0.5', '17', 'RC', 'SLAA', '7', 'Bartolo', 'F', '2022-10-01 20:42:32', 'Белый крис', '', '$APVPBTN', '', '', '37301', '3730101', 'Information access denied ', '', '2022-11-05 11:38:47', '', '', ''),
(1113, 'Mephedrone', '1', '23', 'RC', 'SLMF', '7', 'Bartolo', 'F', '2022-10-01 20:42:32', 'Кристалл', '', '$MEPHBTN', '', '', '37301', '3730107', 'Information access denied ', '', '2022-10-09 21:17:10', '', '', ''),
(1114, 'Бошки', '1г', '17', 'RC', '', '8', 'Bartolo', 'F', '2022-10-09 20:01:39', 'Топовая шмаль', '', '', '', '', '37301', '3730102', 'Ты лох', '', '0000-00-00 00:00:00', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--
-- Создание: Фев 23 2023 г., 17:24
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(33) NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `followed` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `dialog` int(23) NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `media` text CHARACTER SET utf8 NOT NULL,
  `special` text CHARACTER SET utf8 NOT NULL,
  `status` tinytext CHARACTER SET utf8 NOT NULL,
  `bot` int(11) NOT NULL,
  `log` text CHARACTER SET utf8 NOT NULL,
  `flags` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--
-- Создание: Фев 23 2023 г., 17:24
-- Последнее обновление: Мар 10 2023 г., 01:27
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` varchar(13) NOT NULL,
  `user` varchar(11) NOT NULL,
  `bot` varchar(11) NOT NULL,
  `merch` varchar(4) NOT NULL,
  `time` varchar(20) NOT NULL,
  `status` varchar(1) CHARACTER SET utf8 NOT NULL,
  `temp` text CHARACTER SET utf8 NOT NULL,
  `log` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user`, `bot`, `merch`, `time`, `status`, `temp`, `log`) VALUES
('', '', '5985168625', '', '1673112817', '0', '', '\nPayLTC 1672849874\nrestart 1673112695\nrestart 1673112756\nrestart 1673112817'),
('1', '2', '3', '', '', '', '', ''),
('12345', '', '', '', '', '', '', ''),
('12346', '5774290730', '5682790477', '1111', '', '0', '', ''),
('12347', '5774290730', '5682790477', '1111', '', '0', '', ''),
('12348', '5774290730', '5682790477', '1111', '', '0', '', ''),
('12349', '5774290730', '5682790477', '1113', '', '1', '', ''),
('12350', '5774290730', '5682790477', '1112', '', '1', '', ''),
('12351', '5774290730', '5682790477', '1112', '', '1', '', ''),
('12352', '5067943657', '5682790477', '1111', '', '1', '', ''),
('12353', '5309546923', '5682996596', '1112', '', '1', '', ''),
('12354', '5432444839', '5682790477', '', '', '1', '', ''),
('12355', '5432444839', '5682790477', '', '', '1', '', ''),
('12356', '5432444839', '5682790477', '', '', '1', '', ''),
('12357', '5432444839', '5682790477', '', '', '1', '', ''),
('12358', '5432444839', '5682790477', '', '', '1', '', ''),
('12359', '5432444839', '5682790477', '', '', '1', '', ''),
('12360', '5432444839', '5682790477', '', '', '1', '', ''),
('12361', '5432444839', '5682790477', '', '', '1', '', ''),
('12362', '5432444839', '5682790477', '', '', '1', '', ''),
('12363', '5432444839', '5682790477', '', '', '1', '', ''),
('12364', '5432444839', '5682790477', '', '', '1', '', ''),
('12365', '5432444839', '5682790477', '', '', '1', '', ''),
('12366', '5432444839', '5682790477', '', '', '1', '', ''),
('12367', '5432444839', '5682790477', '', '', '1', '', ''),
('12368', '5432444839', '5682790477', '', '', '1', '', ''),
('12370', '5432444839', '5682790477', '', '', '1', '', ''),
('12371', '5432444839', '5682790477', '', '', '1', '', ''),
('12372', '5432444839', '5682790477', '', '', '1', '', ''),
('12373', '5432444839', '5682790477', '', '', '1', '', ''),
('12374', '5432444839', '5682790477', '', '', '1', '', ''),
('12375', '5432444839', '5682790477', '', '', '1', '', ''),
('12376', '5432444839', '5682790477', '', '', '1', '', ''),
('12377', '5432444839', '5682790477', '', '', '1', '', ''),
('12378', '5432444839', '5682790477', '', '', '1', '', ''),
('12379', '5432444839', '5682790477', '', '', '1', '', ''),
('12380', '5432444839', '5682790477', '', '', '1', '', ''),
('12381', '5432444839', '5682790477', '', '', '1', '', ''),
('12382', '5432444839', '5682790477', '', '', '1', '', ''),
('12383', '5432444839', '5682790477', '', '', '1', '', ''),
('12384', '5432444839', '5682790477', '', '', '1', '', ''),
('12385', '5432444839', '5682790477', '', '', '1', '', ''),
('12386', '5190802267', '5682996596', '1112', '', '1', '', ''),
('12387', '5071630573', '5682996596', '1112', '', '1', '', ''),
('12388', '5774290730', '5682790477', '', '', '1', '', ''),
('12389', '219961279', '5726261122', '1111', '', '1', '', ''),
('12390', '219961279', '5726261122', '1112', '', '1', '', ''),
('12391', '5205886102', '5682996596', '1111', '', '1', '', ''),
('12392', '5242166445', '5682996596', '1111', '', '1', '', ''),
('12393', '5774290730', '5682790477', '1112', '', '1', '', ''),
('12394', '5205886102', '5682996596', '1112', '', '1', '', ''),
('12395', '5205886102', '5682996596', '1111', '', '1', '', ''),
('12396', '5045686006', '5682996596', '1111', '', '1', '', ''),
('12397', '5572174093', '5682996596', '1112', '', '1', '', ''),
('12398', '5309616548', '5682996596', '1111', '', '1', '', ''),
('12399', '5205886102', '5682996596', '1111', '', '1', '', ''),
('12400', '1355167858', '5682996596', '1112', '', '1', '', ''),
('12401', '5045686006', '5682996596', '1111', '', '1', '', ''),
('12402', '5131395402', '5682996596', '1111', '', '1', '', ''),
('12403', '2121561364', '5682996596', '1111', '', '1', '', ''),
('12404', '5205886102', '5682996596', '', '', '1', '', ''),
('12405', '5205886102', '5682996596', '1112', '', '1', '', ''),
('12406', '5680937858', '5682996596', '1111', '', '1', '', ''),
('12407', '5340656978', '5682996596', '1111', '', '1', '', ''),
('12408', '5683969354', '5682996596', '1111', '', '1', '', ''),
('12409', '5438771817', '5682790477', '1111', '', '1', '', ''),
('12410', '5119415811', '5682790477', '1111', '', '1', '', ''),
('12411', '5119415811', '5985168625', '1112', '', '1', '', ''),
('12412', '5623049405', '5985168625', '1111', '', '1', '', ''),
('12413', '5067943657', '5985168625', 'ENZO', '1672778083.087', '0', 'Город: КИШИНЕВ\nРайон: Буюканы\nТовар: ENZO WHITE VHQ 1г|0.34468465179035', 'start 1672777954.4339\nPayLTC 1672777961.0381\nPayLTC 1672778021.1493\nPayLTC 1672778083.087'),
('12414', '5067943657', '5985168625', 'ENZO', '', '0', 'Город: КИШИНЕВ\nРайон: Малая Малина\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1672789341'),
('12415', '5062916774', '5985168625', 'ENZO', '1672849812', '0', 'Город: КИШИНЕВ\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1672849748\nPayLTC 1672849752\nPayLTC 1672849812'),
('12416', '5062916774', '5985168625', 'Бота', '', '0', 'Город: \nРайон: Ботаника\nТовар: Ботаника|0', 'start 1672849936'),
('12417', '5062916774', '5985168625', 'ENZO', '1672850069', '1', 'Город: КИШИНЕВ\nРайон: Ботаника\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1672849944\nPayLTC 1672849947\nPayLTC 1672850008\nPayLTC 1672850069'),
('12418', '5022694772', '5985168625', 'ENZO', '1672867009', '0', 'Город: КИШИНЕВ\nРайон: Ботаника\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1672866898\nPayLTC 1672866901\nPayLTC 1672866961\nPayLTC 1672867009'),
('12419', '5351574548', '5985168625', 'ENZO', '1672867433', '0', 'Город: КИШИНЕВ\nРайон: Буюканы\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1672867308\nPayLTC 1672867311\nPayLTC 1672867371\nPayLTC 1672867433'),
('12420', '5016525057', '5985168625', 'ENZO', '1673473599', '1', 'Город: КИШИНЕВ\nРайон: Ботаника\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1672872111\nPayLTC 1673473477\nPayLTC 1673473537\nPayLTC 1673473599'),
('12421', '5022694772', '5985168625', 'ENZO', '', '1', 'Город: КИШИНЕВ\nРайон: Ботаника\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1672872328'),
('12422', '5683017530', '5985168625', 'ENZO', '', '1', 'Город: КИШИНЕВ\nРайон: Центр\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1672872426'),
('12423', '5071630573', '5985168625', 'ENZO', '1672955990', '1', 'Город: КИШИНЕВ\nРайон: Буюканы\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1672955878\nPayLTC 1672955882\nPayLTC 1672955929\nPayLTC 1672955990'),
('12424', '5973793145', '5985168625', 'ENZO', '1672973547', '0', 'Город: КИШИНЕВ\nРайон: Рышкановка\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1672973421\nPayLTC 1672973425\nPayLTC 1672973485\nPayLTC 1672973547'),
('12425', '1669239035', '5985168625', 'ENZO', '', '1', 'Город: КИШИНЕВ\nРайон: Ботаника\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1672979933'),
('12426', '5427195941', '5985168625', 'ENZO', '1672980747', '0', 'Город: КИШИНЕВ\nРайон: Малая Малина\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1672980622\nPayLTC 1672980625\nPayLTC 1672980685\nPayLTC 1672980747'),
('12427', '5067943657', '5985168625', 'ENZO', '', '0', 'Город: КИШИНЕВ\nРайон: Cтарая Почта\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1673009684'),
('12428', '5045686006', '5985168625', 'ENZO', '1673009844', '0', 'Город: КИШИНЕВ\nРайон: Буюканы\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673009716\nPayLTC 1673009722\nPayLTC 1673009782\nPayLTC 1673009844'),
('12429', '5638573257', '5985168625', 'ENZO', '', '0', 'Город: БЕЛЬЦЫ\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673010767'),
('12430', '5231691256', '5985168625', 'ENZO', '1673107633', '0', 'Город: ОРГЕЕВ\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1673107496\nPayLTC 1673107511\nPayLTC 1673107571\nPayLTC 1673107633'),
('12431', '5231691256', '5985168625', '', '1673108331', '0', 'Город: \nТовар: |0', 'start 1673108120\nPayLTC 1673108167\nPayLTC 1673108209\nPayLTC 1673108271\nPayLTC 1673108331'),
('12432', '5089940693', '5985168625', 'ENZO', '1673129491', '0', 'Город: КИШИНЕВ\nРайон: Буюканы\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1673129360\nPayLTC 1673129368\nPayLTC 1673129429\nPayLTC 1673129491'),
('12433', '5205886102', '5985168625', 'ENZO', '', '0', 'Город: КИШИНЕВ\nРайон: Чеканы\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673129436'),
('12434', '5231691256', '5985168625', 'ENZO', '', '0', 'Город: ОРГЕЕВ\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1673180060'),
('12435', '5231691256', '5985168625', 'ENZO', '', '0', 'Город: ОРГЕЕВ\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673180224'),
('12436', '5231691256', '5985168625', 'ENZO', '', '0', 'Город: ОРГЕЕВ\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673180479'),
('12437', '5231691256', '5985168625', 'ENZO', '1673195932', '0', 'Город: ОРГЕЕВ\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1673195828\nPayLTC 1673195834\nPayLTC 1673195894\nPayLTC 1673195932'),
('12438', '5231691256', '5985168625', 'ENZO', '', '0', 'Город: ОРГЕЕВ\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673196013'),
('12439', '5231691256', '5985168625', '', '1673261632', '1', 'Город: \nРайон: \nТовар: |0', 'start 1673261513\nPayLTC 1673261521\nPayLTC 1673261570\nPayLTC 1673261632'),
('12440', '5045686006', '5985168625', 'ENZO', '1673309827', '0', 'Город: ЯЛОВЕНЬ\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673309700\nPayLTC 1673309705\nPayLTC 1673309765\nPayLTC 1673309827'),
('12441', '5045686006', '5985168625', 'ENZO', '1673310774', '1', 'Город: ЯЛОВЕНЬ\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673310665\nPayLTC 1673310668\nPayLTC 1673310728\nPayLTC 1673310774'),
('12442', '745866883', '5985168625', 'ENZO', '', '1', 'Город: КИШИНЕВ\nРайон: Буюканы\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673315296'),
('12443', '5394869400', '5985168625', 'ENZO', '', '1', 'Город: КИШИНЕВ\nРайон: Ботаника\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673315700'),
('12444', '5427195941', '5985168625', 'ENZO', '1673326705', '1', 'Город: КИШИНЕВ\nРайон: Буюканы\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673326577\nPayLTC 1673326583\nPayLTC 1673326643\nPayLTC 1673326705'),
('12445', '5050388109', '5985168625', 'ENZO', '1673363275', '0', 'Город: БЕЛЬЦЫ\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1673363177\nPayLTC 1673363181\nPayLTC 1673363213\nPayLTC 1673363275'),
('12446', '5050388109', '5985168625', 'ENZO', '1673385214', '0', 'Город: ОРГЕЕВ\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673385088\nPayLTC 1673385092\nPayLTC 1673385152\nPayLTC 1673385214'),
('12447', '5067943657', '5985168625', 'Мала', '', '1', 'Город: \nРайон: Малая Малина\nТовар: Малая Малина|0', 'start 1673385275'),
('12448', '5664229104', '5985168625', 'ENZO', '1673419795', '1', 'Город: КИШИНЕВ\nРайон: Чеканы\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673419682\nPayLTC 1673419691\nPayLTC 1673419734\nPayLTC 1673419795'),
('12449', '5351574548', '5985168625', 'ENZO', '', '1', 'Город: КИШИНЕВ\nРайон: Буюканы\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1673420090'),
('12450', '5026376282', '5985168625', 'ENZO', '1673573897', '0', 'Город: КИШИНЕВ\nРайон: Малая Малина\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1673573771\nPayLTC 1673573775\nPayLTC 1673573835\nPayLTC 1673573897'),
('12451', '5973793145', '5985168625', 'ENZO', '', '0', 'Город: КИШИНЕВ\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673628011'),
('12452', '5089940693', '5985168625', 'ENZO', '1673679232', '1', 'Город: КИШИНЕВ\nРайон: Cтарая Почта\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1673679106\nPayLTC 1673679110\nPayLTC 1673679170\nPayLTC 1673679232'),
('12453', '5205886102', '5985168625', 'ENZO', '1673693288', '0', 'Город: КИШИНЕВ\nРайон: Малая Малина\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1673693161\nPayLTC 1673693166\nPayLTC 1673693226\nPayLTC 1673693288'),
('12454', '5971074357', '5985168625', 'ENZO', '1673744849', '0', 'Город: ЯЛОВЕНЬ\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673744722\nPayLTC 1673744726\nPayLTC 1673744787\nPayLTC 1673744849'),
('12455', '5971074357', '5985168625', '', '', '0', 'Город: \nТовар: |0', 'start 1673746092'),
('12456', '5971074357', '5985168625', '', '', '1', 'Город: \nРайон: \nТовар: |0', 'start 1673747212'),
('12457', '5579363605', '5985168625', 'ENZO', '1673764192', '1', 'Город: КИШИНЕВ\nРайон: Чеканы\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1673764067\nPayLTC 1673764070\nPayLTC 1673764130\nPayLTC 1673764192'),
('12458', '5050388109', '5985168625', 'ENZO', '1673765833', '1', 'Город: КИШИНЕВ\nРайон: Ботаника\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673765707\nPayLTC 1673765711\nPayLTC 1673765771\nPayLTC 1673765833'),
('12459', '5631147145', '5985168625', 'ENZO', '', '1', 'Город: КИШИНЕВ\nРайон: Чеканы\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673767719'),
('12460', '5205886102', '5985168625', 'ENZO', '1673772621', '0', 'Город: ЯЛОВЕНЬ\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673772496\nPayLTC 1673772499\nPayLTC 1673772560\nPayLTC 1673772621'),
('12461', '5633437713', '5985168625', 'ENZO', '1673775044', '1', 'Город: КИШИНЕВ\nРайон: Рышкановка\nТовар: ENZO WHITE VHQ 1г|0.34496484', 'start 1673774894\nPayLTC 1673774922\nPayLTC 1673774982\nPayLTC 1673775044'),
('12462', '5966646020', '5985168625', 'ENZO', '1673864590', '1', 'Город: ОРГЕЕВ\nТовар: ENZO WHITE VHQ 0.5г|0.19901818', 'start 1673864458\nPayLTC 1673864468\nPayLTC 1673864528\nPayLTC 1673864590'),
('2', '5067943657', '5723091276', '', '', '', '', ''),
('3', '5067943657', '5723091276', 'A10', '', '', '', ''),
('4578853', '6147898882', '5984814929', 'A10', '', '', '', ''),
('4578854', '6147898882', '5984814929', 'A10', '', '', '', ''),
('4578855', '6147898882', '5984814929', 'BWK', '', '', '', ''),
('4578856', '5901614439', '5984814929', 'A10', '', '', '', ''),
('4578857', '5355189191', '5984814929', 'A05', '', '', '', ''),
('4578858', '5857719966', '5984814929', 'A05', '', '', '', ''),
('4578859', '6147898882', '5984814929', 'A10', '', '', '', ''),
('4578860', '5050388109', '5984814929', 'A10', '', '', '', ''),
('4578861', '5237711559', '5984814929', 'A05', '', '', '', ''),
('4578862', '5237711559', '5984814929', 'A10', '', '', '', ''),
('4578863', '5237711559', '5984814929', 'A10', '', '', '', ''),
('4578864', '5237711559', '5984814929', 'A10', '', '', '', ''),
('4578865', '5901614439', '5984814929', 'A10', '', '', '', ''),
('4578866', '5901614439', '5984814929', 'A50', '', '', '', ''),
('4578867', '5050388109', '5984814929', 'A10', '', '', '', ''),
('4578868', '5159730651', '5984814929', 'A10', '', '', '', ''),
('4578869', '5159730651', '5984814929', 'A05', '', '', '', ''),
('4578870', '5159730651', '5984814929', 'A10', '', '', '', ''),
('4578871', '5351574548', '5984814929', 'A10', '', '', '', ''),
('4578872', '5901614439', '5984814929', 'A10', '', '', '', ''),
('4578873', '5749213455', '5984814929', 'A10', '', '', '', ''),
('4578874', '1825570984', '5984814929', 'A05', '', '', '', ''),
('4578875', '5577911592', '5984814929', 'A10', '', '', '', ''),
('4578876', '5404361803', '5984814929', 'A05', '', '', '', ''),
('4578877', '5404361803', '5984814929', 'A05', '', '', '', ''),
('4578878', '5351574548', '5984814929', 'A10', '', '', '', ''),
('4578879', '5404361803', '5984814929', 'A05', '', '', '', ''),
('62783997', '5432444839', '5683295680', '', '', '1', '', ''),
('62783998', '5067943657', '5723091276', '', '', '', '', ''),
('62783999', '5837615638', '5723091276', '', '', '', '', ''),
('62784000', '5067943657', '5723091276', 'A05', '', '', '', ''),
('62784001', '5067943657', '5723091276', 'A10', '', '', '', ''),
('62784002', '5016525057', '5723091276', 'A10', '', '', '', ''),
('62784003', '5016525057', '5723091276', 'A10', '', '', '', ''),
('62784004', '5050388109', '5723091276', 'A10', '', '', '', ''),
('62784005', '5790079943', '5723091276', 'A05', '', '', '', ''),
('62784006', '5062916774', '5723091276', 'A05', '', '', '', ''),
('62784007', '5546220368', '5723091276', 'BWK', '', '', '', ''),
('62784008', '5924136086', '5723091276', 'A05', '', '', '', ''),
('62784009', '5419096952', '5723091276', 'A05', '', '', '', ''),
('62784010', '5419096952', '5723091276', 'A05', '', '', '', ''),
('62784011', '5026376282', '5723091276', 'A05', '', '', '', ''),
('62784012', '5419096952', '5723091276', 'A05', '', '', '', ''),
('62784013', '5419096952', '5723091276', 'A05', '', '', '', ''),
('62784014', '5419096952', '5723091276', 'A05', '', '', '', ''),
('62784015', '5419096952', '5723091276', 'A05', '', '', '', ''),
('62784016', '5419096952', '5723091276', 'A05', '', '', '', ''),
('62784017', '5419096952', '5723091276', 'A05', '', '', '', ''),
('62784018', '5419096952', '5723091276', 'A05', '', '', '', ''),
('62784019', '5419096952', '5723091276', 'A05', '', '', '', ''),
('62784020', '5020015570', '5723091276', 'A05', '', '', '', ''),
('62784021', '5111754659', '5723091276', 'BWK', '', '', '', ''),
('62784022', '5062916774', '5723091276', 'A10', '', '', '', ''),
('62784023', '5067943657', '5723091276', 'A05', '', '', '', ''),
('62784024', '5119415811', '5723091276', 'A10', '', '', '', ''),
('62784025', '5351574548', '5723091276', 'A10', '', '', '', ''),
('62784026', '5026376282', '5723091276', 'A05', '', '', '', ''),
('62784027', '5050388109', '5723091276', 'A05', '', '', '', ''),
('62784028', '5045686006', '5723091276', 'A05', '', '', '', ''),
('62784029', '5045686006', '5723091276', 'A10', '', '', '', ''),
('62784030', '5071630573', '5723091276', 'A05', '', '', '', ''),
('62784031', '5388669702', '5723091276', 'A05', '', '', '', ''),
('62784032', '5355189191', '5723091276', 'A05', '', '', '', ''),
('62784033', '5829628642', '5723091276', 'A10', '', '', '', ''),
('62784034', '5020015570', '5723091276', 'A10', '', '', '', ''),
('62784035', '5857719966', '5723091276', 'A05', '', '', '', ''),
('62784036', '5857719966', '5723091276', 'A10', '', '', '', ''),
('62784037', '5788838070', '5723091276', 'A05', '', '', '', ''),
('62784038', '5788838070', '5723091276', 'A05', '', '', '', ''),
('62784039', '5236682557', '5723091276', 'A05', '', '', '', ''),
('62784040', '5236682557', '5723091276', 'A10', '', '', '', ''),
('62784041', '5197519958', '5723091276', 'A10', '', '', '', ''),
('62784042', '5702016865', '5723091276', 'A05', '', '', '', ''),
('62784043', '5937222679', '5723091276', 'A05', '', '', '', ''),
('62784044', '6290933585', '5723091276', 'BWK', '', '', '', ''),
('62784045', '5577911592', '5723091276', 'A10', '', '', '', ''),
('62784046', '5351574548', '5723091276', 'A10', '', '', '', ''),
('62784047', '5404361803', '5723091276', 'A05', '', '', '', ''),
('62784048', '5404361803', '5723091276', 'A05', '', '', '', ''),
('62784049', '5404361803', '5723091276', 'A05', '', '', '', ''),
('62784050', '5404361803', '5723091276', 'A05', '', '', '', ''),
('62784051', '5404361803', '5723091276', 'A05', '', '', '', ''),
('62784052', '5404361803', '5723091276', 'A05', '', '', '', ''),
('62784053', '5404361803', '5723091276', 'A05', '', '', '', ''),
('62784054', '5404361803', '5723091276', 'A05', '', '', '', ''),
('62784055', '5050388109', '5723091276', 'A10', '', '', '', ''),
('62784056', '5404361803', '5723091276', 'A05', '', '', '', ''),
('62784057', '2055445461', '5723091276', 'A05', '', '', '', ''),
('62784058', '5404361803', '5723091276', 'A05', '', '', '', ''),
('62784059', '5404361803', '5723091276', 'A05', '', '', '', ''),
('62784060', '5355189191', '5723091276', 'A05', '', '', '', ''),
('order', 'C', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `payments`
--
-- Создание: Фев 23 2023 г., 17:24
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments` (
  `id` int(20) NOT NULL,
  `user` int(11) NOT NULL,
  `bot` int(11) NOT NULL,
  `summ` int(8) NOT NULL,
  `currency` tinytext CHARACTER SET utf8 NOT NULL,
  `time` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `wallet` text CHARACTER SET utf8 NOT NULL,
  `parameter` text CHARACTER SET utf8 NOT NULL,
  `temp` text CHARACTER SET utf8 NOT NULL,
  `ticket` int(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `places`
--
-- Создание: Фев 23 2023 г., 17:24
-- Последнее обновление: Фев 23 2023 г., 17:24
--

DROP TABLE IF EXISTS `places`;
CREATE TABLE `places` (
  `country` varchar(3) NOT NULL,
  `city` varchar(5) NOT NULL,
  `sector` varchar(7) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `places`
--

INSERT INTO `places` (`country`, `city`, `sector`, `name`) VALUES
('373', '', '', 'MDA'),
('373', '37301', '', 'CHISH'),
('373', '37301', '3730102', 'BTK'),
('373', '37301', '3730103', 'RSK'),
('373', '37301', '3730101', 'CTR'),
('373', '37301', '3730105', 'BKN'),
('373', '37301', '3730104', 'CKN'),
('373', '37301', '3730106', 'TCN'),
('373', '37301', '3730107', 'SKL'),
('373', '37301', '3730108', 'PSV'),
('373', '37301', '3730109', 'KDR'),
('373', '37301', '3730110', 'BBC'),
('373', '37302', '', 'BELTS'),
('373', '37311', '', 'TIRAS'),
('373', '37312', '', 'BENDR'),
('373', '37303', '', 'KOMRT'),
('373', '37304', '', 'KAGUL'),
('373', '37305', '', 'CDRLG'),
('373', '37306', '', 'ORHEI'),
('373', '37307', '', 'ANNOI'),
('373', '37309', '', 'STRSN'),
('373', '37313', '', 'RYBKA'),
('373', '37315', '', 'GRGRP'),
('373', '37314', '', 'REZIN'),
('373', '37308', '', 'SOROK');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--
-- Создание: Фев 23 2023 г., 17:24
-- Последнее обновление: Фев 23 2023 г., 17:24
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` varchar(20) NOT NULL,
  `author` varchar(11) NOT NULL,
  `bot` varchar(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `status` varchar(1) NOT NULL,
  `url` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `keyboard` text NOT NULL,
  `log` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `author`, `bot`, `time`, `status`, `url`, `text`, `keyboard`, `log`) VALUES
('6148e6a3169ccd74cbea', '5067943657', '5776895877', '1673318873', '1', '', 'Для&[Название => https://t.me/god_sss_bot]&', '%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5+%3D%3E+https%3A%2F%2Ft.me%2Fgod_sss_bot+%5D%5B+%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5+%3D%3E+https%3A%2F%2Ft.me%2Fgod_sss_bot%5D', '5067943657 saved 6148e6a3169ccd74cbea in 1673318873'),
('9ccbf2f1cf9cf6e2ef8e', '5067943657', '5776895877', '1673319760', '1', '', 'Для того чтоб создать публикацию с кнопками-ссылками, для начала пришлите текст самой публикации:', '%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5+%3D%3E+https%3A%2F%2Ft.me%2Fgod_sss_bot+%5D%5B+%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5+%3D%3E+https%3A%2F%2Ft.me%2Fgod_sss_bot%5D%26%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5+%3D%3E+https%3A%2F%2Ft.me%2Fgod_sss_bot+%5D%5B+%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5+%3D%3E+https%3A%2F%2Ft.me%2Fgod_sss_bot%5D%26%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5+%3D%3E+https%3A%2F%2Ft.me%2Fgod_sss_bot+%5D%5B+%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5+%3D%3E+https%3A%2F%2Ft.me%2Fgod_sss_bot%5D', '5067943657 saved 9ccbf2f1cf9cf6e2ef8e in 1673319760'),
('aa1c9029c465e5ddc70b', '5067943657', '5776895877', '1673326805', '1', 'https://shadowservice.site//disk/user/5067943657/1', 'Для того чтоб создать публикацию с кнопками-ссылками, для начала пришлите текст самой публикации:', '%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%3D%3Ehttps%3A%2F%2Ft.me%2Fgod_sss_bot%5D%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%3D%3Ehttps%3A%2F%2Ft.me%2Fgod_sss_bot%5D%26%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%3D%3Ehttps%3A%2F%2Ft.me%2Fgod_sss_bot%5D%26%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%3D%3Ehttps%3A%2F%2Ft.me%2Fgod_sss_bot%5D%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%3D%3Ehttps%3A%2F%2Ft.me%2Fgod_sss_bot%5D%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%3D%3Ehttps%3A%2F%2Ft.me%2Fgod_sss_bot%5D', '5067943657 saved aa1c9029c465e5ddc70b in 1673326805'),
('94550a7617d685058abd', '5026376282', '5776895877', '1673395470', '1', 'https://shadowservice.site//disk/user/5026376282/1', 'Для того чтоб создать публикацию с кнопками-ссылками, для начала пришлите текст самой публикации:', '%5B%D0%AD%D0%BE+%D0%91%D0%B0%D1%80%D1%82%D0%BE%D0%BB%D0%BE%3D%3Ehttps%3A%2F%2Ft.me%2Feobardbartolo%5D%26%5B%D0%93%D1%83%D0%B3%D0%BB%3D%3Ehttps%3A%2F%2Fgoogle.com%5D%5B%D0%AF%D0%BD%D0%B4%D0%B5%D0%BA%D1%81%3D%3Ehttps%3A%2F%2Fyandex.ru%5D%26%5B%D0%91%D0%BB%D0%B0%3D%3Ehttps%3A%2F%2Ft.me%2FGoD_SSS_BoT%5D%5B%D0%91%D0%BB%D0%B0%3D%3Ehttps%3A%2F%2Ft.me%2FGoD_SSS_BoT%5D%5B%D0%91%D0%BB%D0%B0%3D%3Ehttps%3A%2F%2Ft.me%2FGoD_SSS_BoT%5D', '5026376282 saved 94550a7617d685058abd in 1673395470'),
('2ea79a11ba6805a91797', '5067943657', '5776895877', '1673397020', '1', 'https://shadowservice.site//disk/user/5067943657/1', 'Для того чтоб создать публикацию с кнопками-ссылками, для начала пришлите текст самой публикации:', '%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%3D%3Ehttps%3A%2F%2Ft.me%2Fgod_sss_bot%5D%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%3D%3Ehttps%3A%2F%2Ft.me%2Fgod_sss_bot%5C%5D%26%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%3D%3Ehttps%3A%2F%2Ft.me%2Fgod_sss_bot%5D%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%3D%3Ehttps%3A%2F%2Ft.me%2Fgod_sss_bot%5C%5D%26%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%3D%3Ehttps%3A%2F%2Ft.me%2Fgod_sss_bot%5D%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%3D%3Ehttps%3A%2F%2Ft.me%2Fgod_sss_bot%5C%5D%26%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%3D%3Ehttps%3A%2F%2Ft.me%2Fgod_sss_bot%5D%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%3D%3Ehttps%3A%2F%2Ft.me%2Fgod_sss_bot%5C%5D%26%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%3D%3Ehttps%3A%2F%2Ft.me%2Fgod_sss_bot%5D%5B%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%3D%3Ehttps%3A%2F%2Ft.me%2Fgod_sss_bot%5C%5D', '5067943657 saved 2ea79a11ba6805a91797 in 1673397020');

-- --------------------------------------------------------

--
-- Структура таблицы `rates`
--
-- Создание: Фев 23 2023 г., 17:24
-- Последнее обновление: Мар 09 2023 г., 00:01
--

DROP TABLE IF EXISTS `rates`;
CREATE TABLE `rates` (
  `fiat` varchar(5) NOT NULL,
  `btc` varchar(25) NOT NULL,
  `ltc` varchar(25) NOT NULL,
  `time` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rates`
--

INSERT INTO `rates` (`fiat`, `btc`, `ltc`, `time`) VALUES
('USD', '16663.8', '75.37', '1672780913'),
('USD', '16663.8', '75.37', '1672782989'),
('MDL', '393445.58', '1564.99', '1672783989'),
('MDL', '433777.931345', '1815.719238', '1675620061'),
('MDL', '433993.144643', '1813.971288', '1675620461'),
('MDL', '433800.099074', '1824.610465', '1675666913'),
('MDL', '433661.606765', '1823.319629', '1675667002'),
('MDL', '433661.606765', '1823.319629', '1675667043'),
('MDL', '433671.599316', '1824.412196', '1675667474'),
('MDL', '434061.573603', '1827.201035', '1675668031'),
('MDL', '434444.354972', '1827.968566', '1675668196'),
('MDL', '434482.366499', '1828.164491', '1675668250'),
('MDL', '434560.699269', '1828.521898', '1675668332'),
('MDL', '434480.964209', '1828.400838', '1675668388'),
('MDL', '434612.818257', '1828.76103', '1675668526'),
('MDL', '434614.329922', '1829.902849', '1675668615'),
('MDL', '434614.329922', '1829.902849', '1675668622'),
('MDL', '434677.024755', '1832.762307', '1675668965'),
('MDL', '434780.005937', '1832.272019', '1675668983'),
('MDL', '435944.600069', '1825.747489', '1675700758'),
('MDL', '435944.600069', '1825.747489', '1675700765'),
('MDL', '427981.007455', '1806.127152', '1675728852'),
('MDL', '430986.588821', '1869.4891', '1675759494'),
('MDL', '407306.33985', '1756.866093', '1676108690'),
('MDL', '407336.625361', '1758.381912', '1676108898'),
('MDL', '408395.460562', '1768.574242', '1676118113'),
('MDL', '408181.015157', '1751.395046', '1676129563'),
('MDL', '407048.02787', '1756.810847', '1676137043'),
('MDL', '406054.449877', '1697.740223', '1676355395'),
('MDL', '411200.687283', '1778.694702', '1676397512'),
('MDL', '411405.297825', '1781.333562', '1676397777'),
('MDL', '413793.948582', '1785.758199', '1676404768'),
('MDL', '413793.948582', '1785.758199', '1676404788'),
('MDL', '414118.817643', '1781.951773', '1676411212'),
('MDL', '426764.071501', '1816.041742', '1676480542'),
('MDL', '444588.033827', '1876.671864', '1676597644'),
('MDL', '455446.445282', '1845.622036', '1676720287'),
('MDL', '454981.789985', '1752.572408', '1677014585'),
('MDL', '454246.944284', '1747.487318', '1677014589'),
('MDL', '454246.944284', '1747.487318', '1677014603'),
('MDL', '439762.189647', '1770.973283', '1677430292'),
('MDL', '440735.558268', '1773.261065', '1677434787'),
('MDL', '443439.936607', '1776.37613', '1677538609'),
('MDL', '443218.94888', '1776.303422', '1677538764'),
('MDL', '443218.94888', '1776.303422', '1677538770'),
('MDL', '443626.688043', '1776.711015', '1677540139'),
('MDL', '448447.312753', '1845.163306', '1677673077'),
('MDL', '421205.501288', '1677.835573', '1677847509'),
('MDL', '423119.304656', '1646.692453', '1678138756'),
('MDL', '422872.198593', '1646.876972', '1678138810'),
('MDL', '420480.223376', '1646.169042', '1678165696'),
('MDL', '420248.50899', '1650.659829', '1678169164'),
('MDL', '419239.943589', '1621.071076', '1678218461'),
('MDL', '416967.399101', '1602.491616', '1678220852'),
('MDL', '416701.888938', '1602.98559', '1678220980'),
('MDL', '417779.271217', '1609.910447', '1678221864'),
('MDL', '415710.692442', '1615.169065', '1678232152'),
('MDL', '415794.297603', '1618.673742', '1678232189'),
('MDL', '416263.662325', '1619.450578', '1678233340'),
('MDL', '416291.196639', '1619.4364', '1678233379'),
('MDL', '417267.546644', '1622.493495', '1678234432'),
('MDL', '416611.239343', '1618.295853', '1678235439'),
('MDL', '417040.165355', '1620.768197', '1678235607'),
('MDL', '416733.888484', '1613.434176', '1678236706'),
('MDL', '416772.779067', '1613.430214', '1678236751'),
('MDL', '416595.847236', '1612.193573', '1678237757'),
('MDL', '416640.890625', '1612.402495', '1678237934'),
('MDL', '416635.054955', '1612.117469', '1678238077'),
('MDL', '415761.014579', '1607.706244', '1678254118'),
('MDL', '415910.732667', '1608.032761', '1678254340'),
('MDL', '414449.373863', '1554.46588', '1678314205'),
('MDL', '409617.975507', '1549.414314', '1678320071');

-- --------------------------------------------------------

--
-- Структура таблицы `referals`
--
-- Создание: Фев 23 2023 г., 17:24
--

DROP TABLE IF EXISTS `referals`;
CREATE TABLE `referals` (
  `bot` varchar(11) NOT NULL,
  `referal` varchar(11) NOT NULL,
  `inviter` varchar(11) NOT NULL,
  `start` datetime NOT NULL,
  `rcb` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--
-- Создание: Мар 09 2023 г., 07:59
-- Последнее обновление: Мар 16 2023 г., 02:12
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `hash` varchar(20) NOT NULL,
  `user` varchar(11) NOT NULL,
  `bot` varchar(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `update` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`hash`, `user`, `bot`, `time`, `update`) VALUES
('8kiaYBVlXAePVDiI2K4A', '5067943657', '5776895877', '0000-00-00 00:00:00', ''),
('IUPUhlFi0lZhK2DjWCTO', '5067943657', '5776895877', '0000-00-00 00:00:00', ''),
('UfdnVYCKIjTGAPMZ8sHy', '5067943657', '5776895877', '1671441336', ''),
('e419a1a81037d8470fd8', '5022694772', '5683295680', '1671553324', ''),
('00f6fcc05a8ef3b8dcc9', '5022694772', '5683295680', '1671553347', ''),
('0e0dd44d74db6026505a', '5022694772', '5683295680', '1671553488', ''),
('832db5d8fb674c4598c4', '5188380634', '5683295680', '1671559499', ''),
('61aa3d64f3a0512015dd', '5188380634', '5683295680', '1671559523', ''),
('d995221bc154a2bc18ed', '5188380634', '5683295680', '1671559540', ''),
('ad2b37408f52e57f7d46', '763404764', '5683295680', '1671571682', ''),
('daa62531f5a862991436', '763404764', '5683295680', '1671571715', ''),
('c9d353dd684af94240fb', '763404764', '5683295680', '1671571733', ''),
('eba1b1847ff251064e83', '5067943657', '5683295680', '1671574856', ''),
('bce7f876c60383fc4bd2', '5067943657', '5683295680', '1671574865', ''),
('8aedf9b576b8b2b38921', '5067943657', '5683295680', '1671574877', ''),
('373da4071656f6b677b0', '5159730651', '5683295680', '1671576634', ''),
('b247029a1643b6f2e340', '5159730651', '5683295680', '1671576652', ''),
('660ccd51a68349b8bf35', '5351574548', '5683295680', '1671578916', ''),
('3ef9106aabaa1d9b4435', '5351574548', '5683295680', '1671578926', ''),
('66452d8755d937fa5031', '5104954383', '5683295680', '1671603744', ''),
('d4d7ff64eefd7e3e193f', '5104954383', '5683295680', '1671603751', ''),
('7d11cb33a46b0b638efb', '5790079943', '5683295680', '1671612857', ''),
('ebaf885b87daf2cb38d7', '868505869', '5683295680', '1671620390', ''),
('86091756213e8315b9fb', '868505869', '5683295680', '1671620403', ''),
('ed5bfb33d878c68397ec', '5741175538', '5683295680', '1671620507', ''),
('3e158cf17c42ae2700ea', '5741175538', '5683295680', '1671620517', ''),
('6f82f0b208ca023cb105', '5104954383', '5683295680', '1671672429', ''),
('b510bbb1440187af5270', '5104954383', '5683295680', '1671672433', ''),
('9afc6204f47261790b10', '5104954383', '5683295680', '1671672890', ''),
('4637f946a72ab0621a61', '5104954383', '5683295680', '1671672892', ''),
('a1829901a62ff0875497', '5045686006', '5683295680', '1671691319', ''),
('66a477023a7e04c9f80b', '5045686006', '5683295680', '1671691359', ''),
('6db879c130e0d2ada899', '5045686006', '5683295680', '1671691551', ''),
('a30dbb0c6e4be3c5380b', '5045686006', '5683295680', '1671691553', ''),
('cd288aa569ba3003c7ae', '5104954383', '5683295680', '1671717553', ''),
('7a747163c1368592b30b', '5104954383', '5683295680', '1671717672', ''),
('815fdbae61f92e9d6fb6', '5104954383', '5683295680', '1671717696', ''),
('c85f28a592ad32d6c769', '5885838581', '5683295680', '1671744538', ''),
('962ec13d6d09a2fa2a17', '5885838581', '5683295680', '1671744539', ''),
('0e02f7a1ae2bbaa1e8ae', '5037291579', '5683295680', '1671781507', ''),
('d4e99ffffe65fa521107', '5045686006', '5683295680', '1671785221', ''),
('562646503a077f06573e', '5863033261', '5683295680', '1671892934', ''),
('bd35bcf2e6389ff31514', '5863033261', '5683295680', '1671892959', ''),
('7bbea2d70048dcc14de4', '5584566771', '5683295680', '1671893123', ''),
('a4f54c22579451153db7', '5381505291', '5683295680', '1671893172', ''),
('5d1a4691bd24dc679849', '5381505291', '5683295680', '1671893191', ''),
('4a9ba9306889976b484b', '5513718295', '5723091276', '1671921698', ''),
('1048eaeaacbff936a1ae', '5513718295', '5723091276', '1671921707', ''),
('0dfb41c858cce94f9548', '5067943657', '5723091276', '', ''),
('jtG2xbkJ38i5EZLgCNxY', '5067943657', '5776895877', '', ''),
('8be6cc2c9227d80f5f7d', '5067943657', '5723091276', '', ''),
('41ec1a49cc6f46d322de', '5067943657', '5723091276', '', ''),
('09bd81112c396e5362c5', '5067943657', '5723091276', '', ''),
('918d64408cfc16f78b44', '5067943657', '5723091276', '', ''),
('14bc05cb8c6bd59a9677', '5067943657', '5723091276', '', ''),
('5f0772a7f18bcd1b9359', '5067943657', '5723091276', '', ''),
('4b8fed752516c91b4eeb', '5067943657', '5723091276', '', ''),
('e292fac02214be8d5375', '5067943657', '5723091276', '', ''),
('4d1c554ea1057e5ce0b7', '5067943657', '5723091276', '', ''),
('xBOz0uASW9JwW5DOFN6k', '5067943657', '5776895877', '1672623398.8305', ''),
('0dtTRTphmVSiaN6JwtuD', '5067943657', '5776895877', '1672623636.742', ''),
('c462486c42863cd0d782', '5837615638', '5723091276', '1672965489', ''),
('a2aed5be847eccd6492e', '5837615638', '5723091276', '1672965520', ''),
('b85ad6bb7a0d0aba85f7', '5062916774', '5723091276', '1673601566', ''),
('f74a2891308a6db3ba33', '5062916774', '5723091276', '1673601576', ''),
('19967215f4af2a423107', '5089940693', '5723091276', '1673601983', ''),
('3bd60f5c9b139adcf6a0', '5089940693', '5723091276', '1673601991', ''),
('f26e3b864fb0f33d980f', '5340910552', '5723091276', '1673649707', ''),
('e67fb3d9ee88b86c7060', '5340910552', '5723091276', '1673649722', ''),
('05baed509adee126c756', '1734999972', '5723091276', '1673819836', ''),
('659d117a2e63ddacb798', '5790079943', '5723091276', '1673824644', ''),
('068d86c2ae5b58949f86', '5790079943', '5723091276', '1673824652', ''),
('6e93d7a24a5c6da38820', '5930630225', '5723091276', '1673880146', ''),
('5dd9c47b6853a0bd4007', '5930630225', '5723091276', '1673880184', ''),
('9f2638f16a7dd655ce3c', '5111754659', '5723091276', '1673888062', ''),
('726354551942a55e571a', '5111754659', '5723091276', '1673888083', ''),
('07a545dcfb0554a95968', '5036567786', '5723091276', '1673910980', ''),
('8f06d0b4ffdb40d2a959', '5036567786', '5723091276', '1673910996', ''),
('c039784e4be0d0cb4bf8', '889522215', '5723091276', '1674150582', ''),
('d6fe0732a9b1fe32bf58', '889522215', '5723091276', '1674150644', ''),
('9d18c75755725fccf00d', '5067943657', '5723091276', '1674186945', ''),
('b38a7b4f15d21be3d0ad', '5829628642', '5723091276', '1674187534', ''),
('93e5a5b82083a6216703', '5829628642', '5723091276', '1674187549', ''),
('929981fc1a8433e9fa85', '5067943657', '5723091276', '1674187630', ''),
('f9b8d5967e71da01ebcb', '5067943657', '5723091276', '1674187726', ''),
('e4faf6afe4b0b5d166e4', '5067943657', '5723091276', '1674187789', ''),
('e9e53056b1876713f80f', '5067943657', '5723091276', '1674188199', ''),
('661b1ab529ded8e0de26', '5067943657', '5723091276', '1674189139', ''),
('e7e46c7429648cbd5b99', '5829628642', '5723091276', '1674189222', ''),
('9ca2de5cfaf2488878c5', '5067943657', '5723091276', '1674189284', ''),
('900b4562d3d64eb2e479', '5016525057', '5723091276', '1674189371', ''),
('3db9e6defeea14f338ea', '5016525057', '5723091276', '1674189378', ''),
('b06b3ecacae30bffdf76', '5205886102', '5723091276', '1674189466', ''),
('bcd7f907607e0ad66cad', '5205886102', '5723091276', '1674189472', ''),
('930475c90ddc9393fd9d', '5050388109', '5723091276', '1674191505', ''),
('3dd76066cc65111ce4f1', '5050388109', '5723091276', '1674191516', ''),
('9f2074a7eac783475fc0', '5119415811', '5723091276', '1674193386', ''),
('f09f132a996a91e7d837', '5119415811', '5723091276', '1674193391', ''),
('f8fef017dd36058a62c7', '5020015570', '5723091276', '1674202088', ''),
('4133a826c21a8a75f676', '5020015570', '5723091276', '1674202112', ''),
('0666dda9f22c1855327c', '1590091813', '5723091276', '1674202198', ''),
('cf9c77329e5e4b2caa6d', '1590091813', '5723091276', '1674202210', ''),
('402ee6c4ea3caf1b1e4c', '5431363732', '5723091276', '1674202378', ''),
('4f9d5d014722559df04a', '734870099', '5723091276', '1674202599', ''),
('001bf27738e2df7b097b', '734870099', '5723091276', '1674202628', ''),
('0edd594dab26cadb0fc4', '734870099', '5723091276', '1674202683', ''),
('91d07252663eedf19b19', '5925779033', '5723091276', '1674202700', ''),
('cd13a1d7d6e07867e652', '5789200262', '5723091276', '1674202705', ''),
('3c1b11c5a3cdd3995146', '1580387513', '5723091276', '1674202706', ''),
('55b5cdcc6f3843e66852', '5789200262', '5723091276', '1674202712', ''),
('43ca0af7341874ab74e7', '5925779033', '5723091276', '1674202718', ''),
('8e5903129a5e1fb4252b', '1580387513', '5723091276', '1674202723', ''),
('ef8880935ac6b4d36acc', '5789200262', '5723091276', '1674202727', ''),
('3b5e87c5626a49c815c2', '5546220368', '5723091276', '1674203566', ''),
('73845696f0cd3ee380ee', '5546220368', '5723091276', '1674203576', ''),
('f9a9a5124a14d3f3b886', '5924136086', '5723091276', '1674204302', ''),
('80c282d379ee6d73fcb4', '5924136086', '5723091276', '1674204313', ''),
('f7c3c958d3b33e121eb6', '5419096952', '5723091276', '1674204778', ''),
('48fde64250a92e53314c', '5419096952', '5723091276', '1674204793', ''),
('23f804ae7e905db2a32e', '5419096952', '5723091276', '1674204808', ''),
('9835b9365d11d474d5de', '5419096952', '5723091276', '1674204938', ''),
('2a2b31e283de85ee39c3', '5026376282', '5723091276', '1674208214', ''),
('39e1c7d67d582e4d7aa8', '5026376282', '5723091276', '1674208222', ''),
('754a2da6e96d851be633', '5419096952', '5723091276', '1674208734', ''),
('505e21bdafece5c1ca0e', '5022694772', '5723091276', '1674210669', ''),
('83381db5daaaf8ea9488', '5419096952', '5723091276', '1674212616', ''),
('c9deb5c78a454454e34b', '5437268632', '5723091276', '1674213929', ''),
('042d030d58f1aedea38d', '5671775156', '5723091276', '1674228524', ''),
('93f89c0e7093d5112d7e', '5671775156', '5723091276', '1674231468', ''),
('089cce2949aa5ff17548', '5111754659', '5723091276', '1674243004', ''),
('4253d38f589c8e41eae4', '5197519958', '5723091276', '1674309425', ''),
('d21ffdb1dca1ea6ca4b7', '5197519958', '5723091276', '1674309448', ''),
('12917a68d3ef6eec1f78', '5197519958', '5723091276', '1674314971', ''),
('ebffba29d96717d3791d', '5351574548', '5723091276', '1674344304', ''),
('97b066d2be74c4b25c52', '5351574548', '5723091276', '1674344311', ''),
('c401592dcbcc559d98b8', '5427195941', '5723091276', '1674459006', ''),
('d5650a85900c5641ec75', '5427195941', '5723091276', '1674459014', ''),
('acd25892bdf94301463d', '5789200262', '5723091276', '1674476038', ''),
('00569ce87201aa410afe', '5789200262', '5723091276', '1674476056', ''),
('c7e00e979052a3eb2064', '5789200262', '5723091276', '1674476075', ''),
('9ce8360fcce028e49d54', '768984514', '5723091276', '1674492435', ''),
('74fa0e335e387622367c', '768984514', '5723091276', '1674492446', ''),
('77e7e1748ca29ca7b6a6', '5071630573', '5723091276', '1674550534', ''),
('512fa9b4bb5b5e21cea0', '5071630573', '5723091276', '1674550548', ''),
('7d6d50cad8524a45dcc4', '5067943657', '5723091276', '1674550611', ''),
('b17645dbe1391115c92c', '6147898882', '6132441782', '1675659855', ''),
('c008f9822dc360c908fa', '6147898882', '6132441782', '1675660113', ''),
('aa7004400ee68b4db0c4', '6147898882', '6132441782', '1675660558', ''),
('57f6ff70298ab4af868b', '6147898882', '6132441782', '1675660657', ''),
('0320e328f93cdde82ccf', '6147898882', '6132441782', '1675660706', ''),
('52639342178221ac9d41', '6147898882', '6132441782', '1675660735', ''),
('a0a538be6034ddc90fee', '6147898882', '5984814929', '1675661155', ''),
('ed0eb49bd9d37d3abeff', '6147898882', '5984814929', '1675661165', ''),
('ce58f1439dc0129fc2fb', '6147898882', '5984814929', '1675666186', ''),
('47ddddca2e77580a4e7f', '6147898882', '5984814929', '1675668018', ''),
('1a8571060e5a9dd95faa', '5901614439', '5984814929', '1675693602', ''),
('6c15138eb479599b3bfd', '5901614439', '5984814929', '1675693614', ''),
('89f49e7011ce06895585', '6082731972', '5984814929', '1675693985', ''),
('3711caf6805da0309fde', '6082731972', '5984814929', '1675694002', ''),
('584e451d6382fa3d386c', '6147898882', '5984814929', '1675728734', ''),
('5f25c72447ec9d47312b', '5050388109', '5984814929', '1675730035', ''),
('ba36a849c9fd2549b270', '5050388109', '5984814929', '1675730089', ''),
('1c3a39813a7731256c45', '5351574548', '5984814929', '1675730121', ''),
('6237a83e12f13111f9c2', '5351574548', '5984814929', '1675730207', ''),
('7c80f5b610983a388b01', '5351574548', '5984814929', '1675730366', ''),
('65447db36ad6acff9139', '5045686006', '5984814929', '1675730424', ''),
('b34499e5241f1be29034', '5045686006', '5984814929', '1675730667', ''),
('24780ef46723dc74b19e', '5045686006', '5984814929', '1675730797', ''),
('ef504b160867d3abb399', '5045686006', '5984814929', '1675730851', ''),
('246bd5f1ec7543b7d352', '6147898882', '5984814929', '1675731118', ''),
('8307e7a99ff722f7a54d', '6147898882', '5984814929', '1675731196', ''),
('83cc8b42999c671db5e1', '6147898882', '5984814929', '1675731237', ''),
('9566c40a5558a9b13719', '6147898882', '5984814929', '1675731250', ''),
('18fe871345adbdd546db', '6147898882', '5984814929', '1675731305', ''),
('4c171dadc775dcb262ff', '6147898882', '5984814929', '1675731313', ''),
('28272d87f2ab8916694d', '6147898882', '5984814929', '1675731364', ''),
('dfa3626b74107ca7fa7c', '6147898882', '5984814929', '1675731677', ''),
('9e05a3dcd538cab5e396', '6147898882', '5984814929', '1675733224', ''),
('587bf3ef77b403bb4802', '6147898882', '5984814929', '1675733297', ''),
('8525d1cc456d8ce0f52d', '6147898882', '5984814929', '1675733354', ''),
('03a613298ba1d0d1de90', '6147898882', '5984814929', '1675733418', ''),
('d1907c93506ba81b7150', '6147898882', '5984814929', '1675733462', ''),
('a78368708c05fa00a6ef', '6147898882', '5984814929', '1675733511', ''),
('392821e903b7698d4c93', '6147898882', '5984814929', '1675733548', ''),
('88c6931da2db10a3efb6', '6147898882', '5984814929', '1675733697', ''),
('9e16f72c590d94883d61', '6147898882', '5984814929', '1675733750', ''),
('b3c23b6c5131a3dbb796', '6147898882', '5984814929', '1675733777', ''),
('fded2475819c2484ac74', '6147898882', '5984814929', '1675733811', ''),
('ee9ce1291aad69df9ac6', '6147898882', '5984814929', '1675733866', ''),
('afb7437c1413ba284bca', '6147898882', '5984814929', '1675733973', ''),
('758c2c95310d2f08df1f', '6147898882', '5984814929', '1675734002', ''),
('857e3d2afbd86f9bb384', '6147898882', '5984814929', '1675734015', ''),
('151c1133d0dfa5407ed6', '6147898882', '5984814929', '1675734059', ''),
('bd64973a542623fb9842', '6147898882', '5984814929', '1675734112', ''),
('97f26208ffd97e2be119', '6147898882', '5984814929', '1675734117', ''),
('9a540aae60ee87dc0fb4', '6147898882', '5984814929', '1675734141', ''),
('9e9f09bc908f84a1ea15', '6147898882', '5984814929', '1675734330', ''),
('147fcadf15a432d3fc84', '6147898882', '5984814929', '1675734345', ''),
('11e295ef39a4a01fe9fa', '6147898882', '5984814929', '1675734385', ''),
('746ef5730cebd9eaa939', '6147898882', '5984814929', '1675734922', ''),
('ce651dbe35e52b8a9a09', '6147898882', '5984814929', '1675735043', ''),
('70e8e12d336a8971b232', '6147898882', '5984814929', '1675735084', ''),
('164163366683289f6e95', '6147898882', '5984814929', '1675735181', ''),
('edd135041de17bdf40d8', '6147898882', '5984814929', '1675735209', ''),
('64c10991deeb7959d532', '6147898882', '5984814929', '1675735259', ''),
('49fe50a681c60938b937', '5388669702', '5723091276', '1675851800', ''),
('f21d63dfa63056383a70', '5355189191', '5723091276', '1675851933', ''),
('d134d715cc1b2c35fc0d', '5355189191', '5984814929', '1675864832', ''),
('ec74473ef094d4eca8bc', '5067943657', '5723091276', '1675972750', ''),
('af374ba547b79d512d7c', '5390461731', '5723091276', '1676020988', ''),
('54c497dc70a2d802d78a', '5684621297', '5723091276', '1676030970', ''),
('2bcc8ee06abdde563703', '5684621297', '5984814929', '1676092807', ''),
('1b8f2d9e7f0a00d994bc', '5347640274', '5723091276', '1676104385', ''),
('dd1cb57a104f6de7b871', '5857719966', '5723091276', '1676108661', ''),
('6dc67e6331a0c834f7a7', '5857719966', '5984814929', '1676113162', ''),
('ffd1017aad30b1b94894', '5390461731', '5723091276', '1676120666', ''),
('ddd62231c5575887e648', '5197519958', '5984814929', '1676122842', ''),
('266f2ae667f9a4c17e2c', '5788838070', '5723091276', '1676129492', ''),
('efee4987671fdd72de90', '784462642', '5723091276', '1676131598', ''),
('356de0a859fbbf33e6dd', '6036752824', '5723091276', '1676138193', ''),
('abb6e1de6d10406b1a68', '5607601048', '5723091276', '1676306160', ''),
('37c27ede523f9d9d6ca2', '5671775156', '5723091276', '1676403975', ''),
('63d2a319d7744e786e41', '5671775156', '5984814929', '1676404121', ''),
('8f35153eaaddf28f13f2', '6102196378', '5984814929', '1676479867', ''),
('b77d92face015f77242c', '5607601048', '5723091276', '1676530577', ''),
('a4b3eb5ca71cbb3867ca', '5607601048', '5723091276', '1676530603', ''),
('651e3950888c0b4d9b7b', '5347640274', '5984814929', '1676531956', ''),
('10ea05c2bdee12407125', '6004732992', '5984814929', '1676597620', ''),
('00c739efbafeb6755836', '5237711559', '5723091276', '1676617954', ''),
('4b1b1295f96e717bd259', '5203604492', '5984814929', '1676708056', ''),
('3d6d6d0f7d9219db2c2f', '5075409286', '5984814929', '1676708120', ''),
('bec49e2199fdd71d747a', '5635471087', '5984814929', '1676708158', ''),
('42f6a928f997a4c27b7c', '5347640274', '5984814929', '1676874983', ''),
('bf14ff2f782a74387496', '5702016865', '5723091276', '1676904448', ''),
('603c4b9505ca15677ab5', '5236682557', '5723091276', '1677014490', ''),
('995dd6f2674335da492a', '5607601048', '5723091276', '1677053949', ''),
('e53a4102193b17004008', '5901614439', '5723091276', '1677415171', ''),
('d9684cf65267339fd834', '5901614439', '5723091276', '1677417260', ''),
('c65b800f22428e695fc1', '5901614439', '5723091276', '1677417381', ''),
('4e2f08f4e1d82520fdfa', '5901614439', '5723091276', '1677418628', ''),
('ef102641d388fb5f969a', '5901614439', '5723091276', '1677418672', ''),
('07d8f313c1e4850c3df0', '5901614439', '5723091276', '1677418775', ''),
('2336556e0d983b894e0e', '5901614439', '5723091276', '1677418838', ''),
('0ddcc4b466649749fff4', '5390461731', '5723091276', '1677535052', ''),
('7a6318ba1934983529df', '5579548973', '5984814929', '1677539375', ''),
('930d3e0734fd1edc25b6', '5579548973', '5984814929', '1677539378', ''),
('7a3656138ca935c7a41b', '5044555974', '5984814929', '1677539747', ''),
('ccd524962346b709c86c', '5159730651', '5723091276', '1677540184', ''),
('4b0858749eb1607c0d24', '5159730651', '5723091276', '1677542277', ''),
('4ed16969a358d7fe12b6', '5579548973', '5984814929', '1677543875', ''),
('47ce93e9e61b3fd99b5f', '5579548973', '5984814929', '1677543885', ''),
('7aa2c9fc57283af98bde', '1815440433', '5984814929', '1677543915', ''),
('ba12a3b78198df0403a1', '1815440433', '5984814929', '1677543995', ''),
('593338a27efad9fdeda0', '6011013593', '5723091276', '1677556337', ''),
('a0f5b4d6fa229eab4ae3', '6011013593', '5723091276', '1677556351', ''),
('0a56b97946cef716fe46', '5540943049', '5723091276', '1677602609', ''),
('78f7251a4d946d44b9be', '5540943049', '5723091276', '1677602612', ''),
('109b59aa6ab15ebf2f7d', '5691594155', '5984814929', '1677604081', ''),
('c54708f54cd221edc376', '5937222679', '5723091276', '1677667177', ''),
('bf1204d40aa413e68ece', '5937222679', '5723091276', '1677667182', ''),
('282ed746942b22915df0', '5471492711', '5723091276', '1677667253', ''),
('71aa90ad5ce6f5f27f3c', '5237711559', '5984814929', '1677762151', ''),
('f2173a46cc4510dc847b', '5901614439', '5723091276', '1677763857', ''),
('7f5712f729722e126b36', '6262736172', '5723091276', '1677763909', ''),
('98029b054736f591b68c', '6262736172', '5723091276', '1677764338', ''),
('98d0425544df3f26af90', '6290933585', '5723091276', '1677847401', ''),
('033ad9618f19eb9dd03a', '6290933585', '5723091276', '1677847404', ''),
('59b1a20a5e8efc1812f8', '6290933585', '5723091276', '1677847436', ''),
('ea8177d6784416bdd889', '5637486075', '5723091276', '1677853134', ''),
('d84d6b5828d0106820c2', '5637486075', '5723091276', '1677853138', ''),
('7b56f68121cb2dbaa4d7', '6262736172', '5984814929', '1677889654', ''),
('1eb099f171b8f6a6082f', '6262736172', '5984814929', '1677890416', ''),
('527878d00857b9d13be0', '5577911592', '5984814929', '1677892880', ''),
('8bd046183097a3af4dc5', '5577911592', '5723091276', '1677892993', ''),
('6a6d098170088278b6e3', '5540943049', '5723091276', '1678097367', ''),
('82b37f371e4924d44d60', '5640828091', '5984814929', '1678165654', ''),
('a10b4684955aac13f86c', '2102937193', '5984814929', '1678165707', ''),
('6a02cd905f19d45022eb', '5749213455', '5984814929', '1678169138', ''),
('26ea04105ee1f7333af1', '1825570984', '5984814929', '1678178611', ''),
('76bc41c6cd6051445633', '5947129458', '5984814929', '1678183980', ''),
('0c29faba3d7c4e535cff', '5540943049', '5723091276', '1678201017', ''),
('04c9cefb574cdda1359b', '5404361803', '5723091276', '1678218384', ''),
('39e2e5609f7dc57d1774', '5404361803', '5723091276', '1678220875', ''),
('0860b58b4c69dc858021', '847311439', '5723091276', '1678221654', ''),
('f6821f9fffff68299637', '5404361803', '5984814929', '1678221822', ''),
('ec4bfff519a3780b8d23', '6011013593', '5984814929', '1678233638', ''),
('6071a46ee2419a3762c2', '5404361803', '5723091276', '1678235191', ''),
('90a31b3bf86699f6dcf9', '2055445461', '5723091276', '1678281917', ''),
('1206ed70c2a4bfff6de2', '5540943049', '5723091276', '1678288927', ''),
('ba67a0ac67b9cb317ddf', '5513718295', '5984814929', '1678932749', '');

-- --------------------------------------------------------

--
-- Структура таблицы `stuff`
--
-- Создание: Мар 16 2023 г., 10:44
--

DROP TABLE IF EXISTS `stuff`;
CREATE TABLE `stuff` (
  `user` varchar(11) NOT NULL,
  `bot` varchar(11) NOT NULL,
  `group` varchar(20) NOT NULL,
  `master` varchar(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `log` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `subscriptions`
--
-- Создание: Фев 23 2023 г., 17:24
-- Последнее обновление: Фев 23 2023 г., 17:24
--

DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE `subscriptions` (
  `email` varchar(35) NOT NULL,
  `user` varchar(11) NOT NULL,
  `bot` varchar(11) NOT NULL,
  `start` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `log` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='подписки и подписчики';

--
-- Дамп данных таблицы `subscriptions`
--

INSERT INTO `subscriptions` (`email`, `user`, `bot`, `start`, `log`) VALUES
('eobartolo@gmail.com', '0', '0', '2022-09-17 01:07:17', ''),
('eobartolo@gmail.com', '0', '0', '2022-09-17 01:16:01', ''),
('eobartolo@gmail.com', '0', '0', '2022-09-17 01:30:53', '');

-- --------------------------------------------------------

--
-- Структура таблицы `transactions`
--
-- Создание: Фев 23 2023 г., 17:24
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `txid` varchar(255) NOT NULL,
  `input_txid` varchar(255) NOT NULL,
  `currency` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `confirmations` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
-- Создание: Фев 23 2023 г., 17:24
-- Последнее обновление: Мар 16 2023 г., 08:26
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` varchar(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `nick` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `status` varchar(2) NOT NULL,
  `balance` varchar(11) NOT NULL,
  `ratio` varchar(15) NOT NULL,
  `start` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bot` varchar(11) NOT NULL,
  `info` text NOT NULL,
  `temp` text NOT NULL,
  `lang` varchar(2) NOT NULL,
  `city` varchar(8) NOT NULL,
  `log` text NOT NULL,
  `pass` varchar(15) NOT NULL,
  `pin` varchar(4) NOT NULL,
  `ban` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `first_name`, `last_name`, `nick`, `email`, `status`, `balance`, `ratio`, `start`, `bot`, `info`, `temp`, `lang`, `city`, `log`, `pass`, `pin`, `ban`) VALUES
('', '', '', '', '', '', '0', '0.00', '0', '2022-10-12 23:34:14', '5682996596', '', '', 'RU', '', '1665606854-ban-5682996596', '', '', 1),
('-1001599299', '', 'Непосредственно', 'ВА', '', '', '0', '0.00', '0', '2023-03-07 06:30:17', '6097017980', '', '', 'RU', '', '1678159817-ban-6097017980', '', '', 1),
('-1001796895', '', '', '', '', '', '0', '0.00', '0', '2022-10-11 22:08:34', '5682790477', '', '', 'RU', '', '1665515314-ban-5682790477', '', '', 1),
('1090736352', '', 'Француз', '777', '', '', '1', '0.00', '0', '2022-12-20 04:22:05', '5683295680', '', 'IFA=5683295680', 'RU', '', '1671499325-start-5683295680', '', '', 0),
('1118740086', '', '🅜🅐🅗🅓🅘', '', '', '', '1', '0.00', '0', '2022-11-01 00:54:07', '5682996596', '', '', 'RU', '', '1667253247-start-5682996596', '', '', 0),
('1118803020', '', 'Redkii', '', '', '', '1', '0.00', '0', '2022-10-30 17:53:52', '5682996596', '', '5682996596=Alpha-PVP&3730101', 'RU', '37301', '1667141614-start-5682996596', '', '', 0),
('1257198768', '', 'Зверь', '', '', '', '1', '0.00', '0', '2022-10-31 08:17:01', '5682996596', '', '5682996596=Alpha-PVP&3730101', 'RU', '37301', '1667193407-start-5682996596', '', '', 0),
('1270204455', '', 'Radja', '', '', '', '1', '0.00', '0', '2023-01-07 06:04:56', '5985168625', '', 'ОРГЕЕВ', 'RU', '', '1673060693-start-5985168625', '', '', 0),
('1334592816', '', 'Жыгазажыгралка', '', '', '', '1', '0.00', '0', '2023-01-06 19:30:25', '5985168625', '', '', 'RU', '', '1672982725-start-5985168625', '', '', 0),
('1355167858', '', '...', '', '', '', '1', '0.00', '0', '2022-10-21 01:52:10', '5682996596', '', '', 'RU', '37301', '1666306295-start-5682996596', '', '', 0),
('1455827398', '', '🦋•●♥️.:**:.*.:｡', '', '', '', '0', '0.00', '0', '2023-03-12 18:10:09', '6102830593', '', '', 'RU', '', '1678633809-ban-6102830593', '', '', 1),
('1558498951', '', 'ROLEX Сплю', '', '', '', '1', '0.00', '0', '2022-10-31 00:51:35', '5682996596', '', 'ORS=CHISH', 'RU', '', '1667166682-start-5682996596', '', '', 0),
('1592348613', '', 'Mamad', '', '', '', '1', '0.00', '0', '2022-10-27 00:12:26', '5682996596', '', 'ORS=CHISH', 'RU', '', '1666818729-start-5682996596', '', '', 0),
('1626105513', '', 'Изя', 'Самтредский', '', '', '1', '0.00', '0', '2022-10-13 06:11:27', '5682996596', '', '', 'RU', '', '1665630687-start-5682996596', '', '', 0),
('1669239035', '', 'Алина', 'ааа', '', '', '1', '0.00', '0', '2023-01-06 07:38:53', '5985168625', '', '12425', 'RU', '', '1672979925-start-5985168625', '', '', 0),
('1694700842', '', 'Tg', 'Wesnet', '', '', '1', '0.00', '0', '2022-10-22 01:30:42', '5682996596', '', '', 'RU', '', '1666391442-start-5682996596', '', '', 0),
('1734999972', '', 'Andrei', '', '', '', '1', '0.00', '0', '2023-01-16 00:57:16', '5723091276', '', 'CAPTCHA', 'RU', '', '1673819836-start-5723091276', '', '', 0),
('1737846928', '', 'Да Я ТакаЯ!!', '', '', '', '1', '0.00', '0', '2022-10-15 23:51:27', '5682790477', '', '', 'RU', '', '1665867087-start-5682790477', '', '', 0),
('1773185522', '', 'художник', '', '', '', '1', '0.00', '0', '2022-10-16 07:12:51', '5682996596', '', 'ORS=CHISH', 'RU', '', '1665893568-start-5682996596', '', '', 0),
('1780455255', '', 'R', 'S', '', '', '1', '0.00', '0', '2022-10-25 12:49:09', '5682996596', '', '', 'RU', '', '1666691349-start-5682996596', '', '', 0),
('1791464136', '', 'Van0', '', '', '', '1', '0.00', '0', '2023-03-14 12:39:33', '6102830593', '', '', 'RU', '', '1678783340-start-6102830593', '', '', 0),
('1794271017', '', 'qasm', '', '', '', '1', '0.00', '0', '2022-11-02 21:59:58', '5682996596', '', 'ORS=CHISH', 'RU', '37301', '1667407646-start-5682996596', '', '', 0),
('1815440433', '', 'жук', '', '', '', '0', '0.00', '0', '2023-03-08 07:06:07', '5984814929', '', '', 'RU', '', '1678248367-ban-5984814929', '', '', 1),
('1825570984', '', 'анна', '', '', '', '1', '0.00', '0', '2023-03-07 11:43:47', '5984814929', '', '', 'RU', '', '1678178611-start-5984814929', '', '', 0),
('1873754159', '', 'Веня', '', '', '', '1', '0.00', '0', '2022-10-17 17:10:09', '5682996596', '', '', 'RU', '', '1666015809-start-5682996596', '', '', 0),
('2046039641', '', 'Путешественник', '', '', '', '1', '0.00', '0', '2023-01-15 11:42:19', '5985168625', '', 'КИШИНЕВ|15', 'RU', '', '1673772133-start-5985168625', '', '', 0),
('2050208107', '', 'Zafarbek', '', '', '', '1', '0.00', '0', '2022-10-27 22:04:18', '5682996596', '', '', 'RU', '', '1666897458-start-5682996596', '', '', 0),
('2055445461', '', 'Ван', '', '', '', '1', '0.00', '0', '2023-03-08 16:25:50', '5723091276', '', '', 'RU', '', '1678281917-start-5723091276', '', '', 0),
('2102937193', '', 'Refresh', '', '', '', '1', '0.00', '0', '2023-03-07 08:08:27', '5984814929', '', 'CAPTCHA=67328', 'RU', '', '1678165707-start-5984814929', '', '', 0),
('2116644342', '', 'Vanika', '', '', '', '1', '0.00', '0', '2023-01-04 02:16:00', '5723091276', '', 'IFA=5723091276', 'RU', '', '1672787759-start-5723091276', '', '', 0),
('2121561364', '', 'Юра', '', '', '', '1', '0.00', '0', '2022-10-27 03:09:13', '5682996596', '', '5682996596=Бошки&3730102&3730102&3730102&3730102&3730102', 'RU', '37301', '1666829298-start-5682996596', '', '', 0),
('2144604295', '', '❁ КⷦAͣRͬRͬAͣ ❁', '', '', '', '1', '0.00', '0', '2022-12-20 04:15:50', '5682996596', '', 'IFA=5683295680', 'RU', '37301', '1667210943-start-5682996596', '', '', 0),
('219961279', '', 'A B', '', '', '', '1', '0.00', '0', '2022-10-15 15:58:36', '5726261122', '', '', 'RU', '37301', '1665767233-start-5726261122', '', '', 0),
('272365177', '', '', '', '', '', '0', '0.00', '0', '2022-10-21 16:39:34', '5682996596', '', '', 'RU', '', '1666359561-ban-5682996596', '', '', 1),
('402103792', '', 'Александр', '', '', '', '1', '0.00', '0', '2022-10-20 16:36:16', '5682996596', '', 'ORS=CHISH', 'RU', '', '1666272967-start-5682996596', '', '', 0),
('477067623', '', 'Vidlik', '', '', '', '1', '0.00', '0', '2022-12-20 04:18:07', '5683295680', '', 'IFA=5683295680', 'RU', '', '1671499086-start-5683295680', '', '', 0),
('488028912', '', 'Name', 'Family', '', '', '1', '0.00', '0', '2022-10-23 00:19:40', '5682996596', '', '', 'RU', '', '1666473580-start-5682996596', '', '', 0),
('5016525057', '', 'BA', '', '', '', '1', '0.00', '0', '2023-01-20 07:36:18', '5682790477', '', '', 'RU', '', '1666883069-start-5682790477', '', '', 0),
('5018950697', '', 'Purik', '', '', '', '1', '0.00', '0', '2022-10-19 16:31:41', '5682996596', '', '5682996596=Alpha-PVP&3730101', 'RU', '37301', '1666044713-start-5682996596', '', '', 0),
('5020660511', '', 'Jon', 'doe', '', '', '1', '0.00', '0', '2022-11-03 10:19:45', '5682996596', '', '', 'RU', '37301', '1667459979-start-5682996596', '', '', 0),
('5022694772', '', 'ВА', '', '', '', '1', '0.00', '0', '2023-01-20 13:31:09', '5682790477', '', 'CAPTCHA', 'RU', '', '1667595374-start-5682790477', '', '', 0),
('5026376282', '', 'SMOKE', '', '', '', '1', '0.00', '0', '2023-01-20 12:50:22', '5776895877', '', '', 'RU', '', '1673394965-start-5776895877', '', '', 0),
('5036567786', '', 'Миша', '', '', '', '1', '0.00', '0', '2023-01-17 02:16:36', '5723091276', '', '', 'RU', '', '1673910980-start-5723091276', '', '', 0),
('5037291579', '', 'Безымянная', '!!!!!', '', '', '1', '0.00', '0', '2022-12-23 10:45:08', '5683295680', '', 'CAPTCHA', 'RU', '', '1671781507-start-5683295680', '', '', 0),
('5045686006', '', '', '', '', '', '0', '0.00', '0', '2023-03-03 22:06:58', '5682996596', '', 'CAPTCHA=21309', 'RU', '37301', '1665785626-ban-5682996596', '', '', 1),
('5049729233', '', 'Сухроб', 'Косимов', '', '', '1', '0.00', '0', '2022-10-20 11:29:07', '5682996596', '', '', 'RU', '', '1666254547-start-5682996596', '', '', 0),
('5050388109', '', 'Пыхов)', '', '', '', '1', '0.00', '0', '2023-03-08 04:13:28', '5683295680', '', '', 'RU', '', '1671349385-start-5683295680', '', '', 0),
('5062916774', '', '💎 РАБОТАЮ @SKTO', '', '', '', '1', '0.00', '0', '2023-01-16 00:06:06', '5683295680', '', 'КИШИНЕВ|26', 'RU', '', '1671382615-start-5683295680', '', '', 0),
('5067943657', '', 'Ⲉⲟ Ҕⲁⲣⲧⲟⲗⲟ', '✑ РЕЗЕРВ', '', '', '1', '0.00', '0', '2023-03-16 04:13:46', '5682790477', '', '', 'RU', 'NULL', '1665471047-start-5682790477', '', '', 0),
('5071630573', '', 'К', '', '', '', '1', '0.00', '0', '2023-01-24 11:55:48', '5682996596', '', '', 'RU', '37301', '1665735050-start-5682996596', '', '', 0),
('5087318579', '', 'R :):', '', '', '', '1', '0.00', '0', '2023-01-04 23:22:17', '5985168625', '', 'КИШИНЕВ|26', 'RU', '', '1672863723-start-5985168625', '', '', 0),
('5089940693', '', 'НИКолетА', '', '', '', '1', '0.00', '0', '2023-01-14 09:51:46', '5985168625', '', '12452', 'RU', '', '1673129352-start-5985168625', '', '', 0),
('5094666259', '', 'Ст', '', '', '', '1', '0.00', '0', '2022-12-18 23:47:59', '5683295680', '', 'IFA=5683295680', 'RU', '', '1671396479-start-5683295680', '', '', 0),
('5104954383', '', '♛🐇Кролик', '', '', '', '1', '0.00', '0', '2022-12-22 04:27:10', '5683295680', '', 'IFA=5683295680', 'RU', '', '1671603744-start-5683295680', '', '', 0),
('5107730944', '', 'ГАСТАРБАЙТЕРrez', '', '', '', '1', '0.00', '0', '2022-11-01 00:34:38', '5682996596', '', '5682996596=Бошки', 'RU', '37301', '1667252054-start-5682996596', '', '', 0),
('5111754659', '', 'Vadim', 'Tk', '', '', '1', '0.00', '0', '2023-01-16 19:54:43', '5723091276', '', '', 'RU', '', '1673888062-start-5723091276', '', '', 0),
('5116747662', '', 'Jony', '', '', '', '1', '0.00', '0', '2023-03-14 05:31:02', '6102830593', '', '', 'RU', '', '1678761062-start-6102830593', '', '', 0),
('5119415811', '', 'Love', '', '', '', '1', '0.00', '0', '2023-01-20 08:43:11', '5682790477', '', '', 'RU', '', '1667636553-start-5682790477', '', '', 0),
('5131395402', '', 'Litecoin', 'Moldova ( ЛЮБЫЕ', '', '', '1', '0.00', '0', '2022-10-26 05:12:22', '5682996596', '', '', 'RU', '37301', '1666750321-start-5682996596', '', '', 0),
('5144113650', '', 'СпинО_ГрыЗ', '', '', '', '1', '0.00', '0', '2022-10-31 14:09:24', '5682996596', '', 'ORS=CHISH', 'RU', '', '1667214561-start-5682996596', '', '', 0),
('5159730651', '', 'А', '', '', '', '1', '0.00', '0', '2023-03-08 02:46:49', '5683295680', '', '', 'RU', '', '1671576634-start-5683295680', '', '', 0),
('5159912312', '', 'По Граму', '', '', '', '1', '0.00', '0', '2022-12-19 14:44:21', '5776895877', '', 'IFA=5683295680', 'RU', '', '1670957163-start-5776895877', '', '', 0),
('5169222478', '', '.', '.', '', '', '1', '0.00', '0', '2022-11-02 05:57:56', '5682996596', '', '5682996596=Alpha-PVP', 'RU', 'NULL', '1667357856-start-5682996596', '', '', 0),
('5188380634', '', '𝗔𝗳𝗿𝗼𝗗i𝗭i𝗮𝗸', '', '', '', '1', '0.00', '0', '2022-12-20 21:05:23', '5683295680', '', '', 'RU', '', '1671559499-start-5683295680', '', '', 0),
('5190802267', '', 'РЕКЛАМАТОР', '👑', '', '', '1', '0.00', '0', '2022-10-14 01:42:10', '5682996596', '', '', 'RU', '37301', '1665700875-start-5682996596', '', '', 0),
('5197519958', '', 'V', 'D', '', '', '0', '0.00', '0', '2023-03-03 17:48:09', '5723091276', '', '', 'RU', '', '1677854889-ban-5723091276', '', '', 1),
('5199781879', '', '꧁❤•༆$𝙼𝙸𝙻𝙰𝙽𝙰 𝙺𝙸𝙼', '꧁❤•༆$𝙼𝙸𝙻𝙰𝙽𝙰 𝙺𝙸𝙼', '', '', '1', '0.00', '0', '2023-03-14 01:38:37', '6102830593', '', 'Milana', 'RU', '', '1678633842-start-6102830593', '', '', 0),
('5205886102', '', '🅑🅡🅞🅩🅩🅔🅡🅢', '', '', '', '1', '0.00', '0', '2023-01-20 07:37:52', '5682996596', '', '', 'RU', '37301', '1665481563-start-5682996596', '', '', 0),
('5221639727', '', 'ibinitut', '', '', '', '1', '0.00', '0', '2023-01-11 12:00:29', '5985168625', '', '', 'RU', '', '1673013374-start-5985168625', '', '', 0),
('5231691256', 'sashacomp', 'Алмаз', '', '', '', '1', '0.00', '0', '2023-01-10 18:00:37', '5985168625', '', 'ОРГЕЕВ|15', 'RU', '', '1673107374-start-5985168625', 'dC71lTn4', '', 0),
('5237711559', '', '𝕯𝖊𝖆𝖉𝖕𝖔𝖔𝖑 🔫', '', '', '', '1', '0.00', '0', '2023-03-16 11:26:29', '5683295680', '', '1', 'RU', '', '1671518378-start-5683295680', '', '', 0),
('5241585229', '', 'ДОБЕРМАН', '', '', '', '1', '0.00', '0', '2022-10-18 11:51:47', '5682996596', '', 'ORS=CHISH', 'RU', '', '1666083103-start-5682996596', '', '', 0),
('5242166445', '', 'Black Seller Op', '', '', '', '1', '0.00', '0', '2023-01-06 03:55:20', '5682996596', '', 'POST photo=https://shadowservice.site/disk/user/5242166445/1672966519-file_2.jpg&text=♨️ВНИМАНИЕ', 'RU', '37301', '1665893793-start-5682996596', '', '', 0),
('5258504762', '', 'Yu', 'Y', '', '', '1', '0.00', '0', '2023-03-15 07:12:03', '6102830593', '', '', 'RU', '', '1678768151-start-6102830593', '', '', 0),
('5278310173', '', 'Bro', '', '', '', '1', '0.00', '0', '2023-01-10 07:35:41', '5985168625', '', '', 'RU', '', '1673325341-start-5985168625', '', '', 0),
('5302185420', '', 'ФЕДЕРАЦИЯ', '', '', '', '1', '0.00', '0', '2022-10-22 03:04:38', '5682996596', '', '5682996596=Alpha-PVP', 'RU', '37301', '1666397064-start-5682996596', '', '', 0),
('5309546923', '', 'Малый', 'МдСт', '', '', '1', '0.00', '0', '2022-10-11 12:59:43', '5682996596', '', '', 'RU', '37301', '1665482364-start-5682996596', '', '', 0),
('5309616548', '', 'Usain', 'Bolt', '', '', '1', '0.00', '0', '2022-10-19 18:03:54', '5682996596', '', '5682996596=Alpha-PVP&3730102', 'RU', '37301', '1666040889-start-5682996596', '', '', 0),
('5325825642', '', 'V', 'V', '', '', '1', '0.00', '0', '2022-10-16 06:58:53', '5682996596', '', '', 'RU', '', '1665892733-start-5682996596', '', '', 0),
('5329284158', '', 'Leo', '', '', '', '1', '0.00', '0', '2023-03-14 07:58:50', '6102830593', '', '', 'RU', '', '1678769930-start-6102830593', '', '', 0),
('5330187057', '', 'ROLEX', '', '', '', '1', '0.00', '0', '2023-01-15 09:47:27', '5985168625', '', 'КИШИНЕВ|15', 'RU', '', '1673765240-start-5985168625', '', '', 0),
('5340656978', '', 'Доом', '', '', '', '1', '0.00', '0', '2022-10-30 20:38:41', '5682996596', '', '', 'RU', '37301', '1667151498-start-5682996596', '', '', 0),
('5340910552', '', 'vn7777', '❤️♠️', '', '', '1', '0.00', '0', '2023-01-14 01:42:02', '5723091276', '', '', 'RU', '', '1673649707-start-5723091276', '', '', 0),
('5347711055', '', 'Тот🔥', '', '', '', '1', '0.00', '0', '2023-03-14 09:51:18', '6102830593', '', '', 'RU', '', '1678776654-start-6102830593', '', '', 0),
('5351574548', '', 'infinity', '', '', '', '1', '0.00', '0', '2023-03-04 04:05:55', '5683295680', '', '', 'RU', '', '1671578916-start-5683295680', '', '', 0),
('5355189191', '', 'Аир', '', '', '', '0', '0.00', '0', '2023-03-06 23:11:41', '5723091276', '', '', 'RU', '', '1678133501-ban-5723091276', '', '', 1),
('5357689014', '', 'Ден', '', '', '', '1', '0.00', '0', '2022-10-31 06:39:29', '5682996596', '', 'ORS=CHISH', 'RU', '', '1667187567-start-5682996596', '', '', 0),
('5381505291', '', 'Mario', '', '', '', '1', '0.00', '0', '2022-12-24 17:46:31', '5683295680', '', '', 'RU', '', '1671893172-start-5683295680', '', '', 0),
('5382890816', '', 'Talasik', '', '', '', '1', '0.00', '0', '2023-01-10 15:43:48', '5985168625', '', '', 'RU', '', '1673354628-start-5985168625', '', '', 0),
('5388669702', '', 'А', '', '', '', '0', '0.00', '0', '2023-03-06 17:58:38', '5723091276', '', '', 'RU', '', '1678114718-ban-5723091276', '', '', 1),
('5390461731', '', 'Eduard', 'Fortuna', '', '', '0', '0.00', '0', '2023-03-03 17:23:37', '5723091276', '', '', 'RU', '', '1677853417-ban-5723091276', '', '', 1),
('5394869400', '', 'Fghi', 'Erty', '', '', '1', '0.00', '0', '2023-01-10 04:55:00', '5985168625', '', '12443', 'RU', '', '1673315688-start-5985168625', '', '', 0),
('5404361803', '', 'Add jftj', 'Djjx', '', '', '1', '0.00', '0', '2023-03-08 03:26:31', '5723091276', '', 'IFA=5723091276', 'RU', '', '1678218384-start-5723091276', '', '', 0),
('5410506745', '', 'Tredu', 'Uiy', '', '', '1', '0.00', '0', '2023-01-06 17:00:27', '5985168625', '', '', 'RU', '', '1673013627-start-5985168625', '', '', 0),
('5427195941', '', '️', '', '', '', '1', '0.00', '0', '2023-01-23 10:30:14', '5683295680', '', '', 'RU', '', '1671355147-start-5683295680', '', '', 0),
('5428418565', '', 'big', 'Boss', '', '', '1', '0.00', '0', '2023-01-07 19:15:26', '5985168625', '', 'КИШИНЕВ|26', 'RU', '', '1673108115-start-5985168625', '', '', 0),
('5431694130', '', '𒈞R☢ᴍα𝖘ђkα', '', '', '', '1', '0.00', '0', '2022-12-20 04:16:32', '5683295680', '', 'IFA=5683295680', 'RU', '', '1671498992-start-5683295680', '', '', 0),
('5431778493', '', 'Name', '', '', '', '1', '0.00', '0', '2023-01-13 05:54:30', '5985168625', '', 'КИШИНЕВ', 'RU', '', '1673578462-start-5985168625', '', '', 0),
('5432444839', '', '', '', '', '', '1', '0.00', '0', '2022-11-16 20:48:55', '5682790477', '', 'iH6=BOT', 'RU', '37301', ' start 5682790477', '', '', 0),
('5433130882', '', 'KATY', 'Ryan', '', '', '1', '0.00', '0', '2022-11-02 14:36:52', '5682996596', '', 'ORS=CHISH', 'RU', '', '1667389009-start-5682996596', '', '', 0),
('5438771817', '', 'Вит', '', '', '', '1', '0.00', '0', '2022-11-07 15:14:09', '5682790477', '', 'iH6=Efhh', 'RU', '37301', '1667601769-start-5682790477', '', '', 0),
('5446309944', '', 'Серж', 'Вованович', '', '', '1', '0.00', '0', '2022-10-28 10:39:32', '5682996596', '', '', 'RU', '', '1666942772-start-5682996596', '', '', 0),
('5452255999', '', 'Серо', 'Водород', '', '', '1', '0.00', '0', '2022-10-14 08:08:09', '5682996596', '', 'ORS=CHISH', 'RU', '', '1665724087-start-5682996596', '', '', 0),
('5456853410', '', 'Sergiu', 'Burlacu', '', '', '1', '0.00', '0', '2023-01-14 02:00:11', '5985168625', '', '', 'RU', '', '1673650810-start-5985168625', '', '', 0),
('5472013197', '', '𝗔꯭𝗹𝗶꯭ ➤꯭ SAMADJ', '', '', '', '1', '0.00', '0', '2022-10-14 11:07:08', '5682996596', '', '', 'RU', '37301', '1665734818-start-5682996596', '', '', 0),
('5498574736', '', 'Халоло', '', '', '', '1', '0.00', '0', '2022-12-20 04:13:25', '5683295680', '', 'IFA=5683295680', 'RU', '', '1671498804-start-5683295680', '', '', 0),
('5502414686', '', '🅰️', 'P O S T A L', '', '', '1', '0.00', '0', '2022-11-20 18:37:04', '5682790477', '', '', 'RU', '', '1668687312-start-5682790477', '', '', 0),
('5513718295', '', 'LTC', 'LALI', '', '', '1', '0.00', '0', '2023-03-16 05:12:36', '5776895877', '', '', 'RU', '', '1669534373-start-5776895877', '', '', 0),
('5516988915', '', 'MAD', '`yck', '', '', '1', '0.00', '0', '2022-12-19 14:47:07', '5683295680', '', 'IFA=5683295680', 'RU', '', '1671450426-start-5683295680', '', '', 0),
('5527885096', '', '𝙺𝚊𝚜𝚜𝚊𝚁𝚒𝙺', '', '', '', '1', '0.00', '0', '2023-03-14 01:32:22', '6102830593', '', '', 'RU', '', '1678746635-start-6102830593', '', '', 0),
('5532016302', '', 'Zidra', 'Malenikaea', '', '', '1', '0.00', '0', '2022-10-16 07:15:08', '5682996596', '', '5682996596=Alpha-PVP&3730102&3730102', 'RU', '37301', '1665893691-start-5682996596', '', '', 0),
('5540943049', '', 'Valerian', 'Prutenau', '', '', '1', '0.00', '0', '2023-03-06 13:09:27', '5723091276', '', 'IFA=5723091276', 'RU', '', '1678097367-start-5723091276', '', '', 0),
('5541672118', '', 'Pablo', 'Escobar', '', '', '1', '0.00', '0', '2023-01-10 08:55:01', '5985168625', '', '', 'RU', '', '1673330101-start-5985168625', '', '', 0),
('5563918886', '', 'Sayyoh18', '', '', '', '1', '0.00', '0', '2022-10-30 23:26:31', '5682996596', '', '', 'RU', '', '1667161567-start-5682996596', '', '', 0),
('5572174093', '', 'Aлеx', '', '', '', '1', '0.00', '0', '2022-10-18 04:17:29', '5682996596', '', '', 'RU', '37301', '1665883430-start-5682996596', '', '', 0),
('5577911592', '', 'LegendaLTC РАБО', '24/7', '', '', '1', '0.00', '0', '2023-03-04 04:23:43', '5984814929', '', '', 'RU', '', '1677892880-start-5984814929', '', '', 0),
('5579363605', '', 'tolea', '', '', '', '1', '0.00', '0', '2023-01-16 18:09:43', '5985168625', '', 'КИШИНЕВ|26', 'RU', '', '1673764028-start-5985168625', '', '', 0),
('5584566771', '', 'Финиш', '', '', '', '1', '0.00', '0', '2022-12-24 17:45:23', '5683295680', '', 'CAPTCHA', 'RU', '', '1671893123-start-5683295680', '', '', 0),
('5593749625', '', 'Tenebrae daemon', '', '', '', '1', '0.00', '0', '2023-01-16 10:27:18', '5985168625', '', 'ЯЛОВЕНЬ', 'RU', '', '1673853930-start-5985168625', '', '', 0),
('5623049405', '', 'Буду в 12:00! С', 'Есть клады', '', '', '1', '0.00', '0', '2022-11-05 16:04:40', '5682790477', '', '', 'RU', '37301', '1667653458-start-5682790477', '', '', 0),
('5627028120', '', 'Igori', '', '', '', '1', '0.00', '0', '2023-01-13 05:32:23', '5985168625', '', 'КИШИНЕВ|26', 'RU', '', '1673577130-start-5985168625', '', '', 0),
('5631147145', '', 'qwerty777', '', '', '', '1', '0.00', '0', '2023-01-15 10:29:33', '5985168625', '', 'КИШИНЕВ|15', 'RU', '', '1673767705-start-5985168625', '', '', 0),
('5633437713', '', 'YA', 'MAIB BLYAT\"', '', '', '1', '0.00', '0', '2023-01-15 12:28:15', '5985168625', '', '12461', 'RU', '', '1673772417-start-5985168625', '', '', 0),
('5637486075', '', 'Собачонок', '', '', '', '1', '0.00', '0', '2023-03-03 17:18:58', '5723091276', '', 'IFA=5723091276', 'RU', '', '1677853134-start-5723091276', '', '', 0),
('5638573257', '', 'От Патрона', 'До Гандона', '', '', '1', '0.00', '0', '2023-01-13 18:34:34', '5985168625', '', 'КИШИНЕВ', 'RU', '', '1673010736-start-5985168625', '', '', 0),
('5640828091', '', 'Daniel', '', '', '', '1', '0.00', '0', '2023-03-07 08:08:09', '5984814929', '', 'CAPTCHA=19520', 'RU', '', '1678165654-start-5984814929', '', '', 0),
('5646974487', '', 'YADEVIL', '', '', '', '1', '0.00', '0', '2023-01-16 19:54:38', '5985168625', '', 'КИШИНЕВ', 'RU', '', '1673888074-start-5985168625', '', '', 0),
('5664229104', '', 'Tudor', '', '', '', '1', '0.00', '0', '2023-01-11 09:48:02', '5985168625', '', '12448', 'RU', '', '1673419662-start-5985168625', '', '', 0),
('5680937858', '', 'Юля', 'Шилова', '', '', '1', '0.00', '0', '2022-10-30 17:23:36', '5682996596', '', '', 'RU', '37301', '1667139795-start-5682996596', '', '', 0),
('5682821070', '', 'OXXXYMIRON', 'Дилер #1', '', '', '1', '0.00', '0', '2022-12-02 17:12:18', '5776895877', '', '', 'RU', '', '1669990338-start-5776895877', '', '', 0),
('5683017530', '', 'Big', 'Bro 💎', '', '', '1', '0.00', '0', '2023-01-05 01:47:06', '5985168625', '', '12422', 'RU', '', '1672871539-start-5985168625', '', '', 0),
('5683969354', '', '🅑🅡🅞🅩🅩🅔🅡🅢', '', '', '', '1', '0.00', '0', '2022-10-31 13:10:43', '5682996596', '', '', 'RU', 'NULL', '1667211015-start-5682996596', '', '', 0),
('5691030632', '', 'Marcus', 'Aurelius', '', '', '1', '0.00', '0', '2022-10-21 11:04:09', '5682996596', '', 'ORS=CHISH', 'RU', '', '1666339446-start-5682996596', '', '', 0),
('5691594155', '', 'Make', 'Makesiv', '', '', '0', '0.00', '0', '2023-03-04 08:04:44', '5984814929', '', '', 'RU', '', '1677906284-ban-5984814929', '', '', 1),
('5692758669', '', 'Аке', 'Аке', '', '', '1', '0.00', '0', '2022-10-18 16:10:47', '5682996596', '', '', 'RU', '', '1666098647-start-5682996596', '', '', 0),
('5702016865', '', 'Dumitru', '', '', '', '0', '0.00', '0', '2023-03-07 21:04:54', '5723091276', '', '', 'RU', '', '1678212293-ban-5723091276', '', '', 1),
('5720335405', '', 'Jaloliddin', 'Kholmatov', '', '', '1', '0.00', '0', '2022-10-17 07:25:39', '5682996596', '', '', 'RU', '', '1665980739-start-5682996596', '', '', 0),
('5733286119', '', 'L E X', '7 7 7', '', '', '1', '0.00', '0', '2023-01-13 05:27:25', '5985168625', '', 'КИШИНЕВ', 'RU', '', '1673576841-start-5985168625', '', '', 0),
('5741175538', '', 'Dron', 'Crot', '', '', '1', '0.00', '0', '2022-12-21 14:01:57', '5683295680', '', '', 'RU', '', '1671620507-start-5683295680', '', '', 0),
('5749213455', '', 'SKIIIIBA', '', '', '', '1', '0.00', '0', '2023-03-07 09:05:46', '5984814929', '', '', 'RU', '', '1678169138-start-5984814929', '', '', 0),
('5767130386', '', '𝐄𝐕𝐀 ❉', '', '', '', '1', '0.00', '0', '2022-12-20 05:04:05', '5683295680', '', 'IFA=5683295680', 'RU', '', '1671501844-start-5683295680', '', '', 0),
('5768486680', '', 'A.Y.E', '', '', '', '1', '0.00', '0', '2022-10-20 15:31:56', '5682996596', '', '', 'RU', '', '1666269116-start-5682996596', '', '', 0),
('5770467248', '', 'BAXT QASRI', '', '', '', '1', '0.00', '0', '2022-10-31 21:36:36', '5682996596', '', '', 'RU', '37301', '1667241380-start-5682996596', '', '', 0),
('5774290730', '', '', '', '', '', '1', '0.00', '0', '2022-10-23 05:51:30', '5682790477', '', 'IFA=5682790477', 'RU', '37301', ' start 5682790477', '', '', 1),
('5780564881', '', 'Маленькая', 'девочка', '', '', '1', '0.00', '0', '2023-01-15 11:07:39', '5985168625', '', '', 'RU', '', '1673770059-start-5985168625', '', '', 0),
('5789200262', '', 'Bar', 'Biliqrd', '', '', '1', '0.00', '0', '2023-01-20 11:18:32', '5985168625', '', '', 'RU', '', '1673009405-start-5985168625', '', '', 0),
('5790079943', '', 'Политика', '', '', '', '1', '0.00', '0', '2023-01-16 02:17:32', '5683295680', '', '', 'RU', '', '1671612857-start-5683295680', '', '', 0),
('5795063697', '', 'Куш', 'Куш', '', '', '1', '0.00', '0', '2022-10-16 05:54:50', '5682996596', '', '', 'RU', '', '1665888890-start-5682996596', '', '', 0),
('5808421892', '', 'K', 'K', '', '', '1', '0.00', '0', '2022-12-18 20:48:32', '5683295680', '', 'IFA=5683295680', 'RU', '', '1671385711-start-5683295680', '', '', 0),
('5808779138', '', 'N🚫', 'N🅰️ME ️', '', '', '1', '0.00', '0', '2022-11-23 10:57:14', '5682790477', '', '', 'RU', '', '1669190233-start-5682790477', '', '', 0),
('5809796747', '', 'Ан', 'Viii', '', '', '1', '0.00', '0', '2023-01-15 21:37:30', '5985168625', '', 'КИШИНЕВ', 'RU', '', '1673807846-start-5985168625', '', '', 0),
('5821426148', '', 'Armaghidon', 'mir', '', '', '1', '0.00', '0', '2023-01-11 09:25:09', '5985168625', '', 'КИШИНЕВ|15', 'RU', '', '1673418302-start-5985168625', '', '', 0),
('5823228743', '', 'Пророк', '', '', '', '1', '0.00', '0', '2023-03-15 20:02:46', '6102830593', '', '', 'RU', '', '1678899766-start-6102830593', '', '', 0),
('5829628642', '', 'LEVRICTOR', '', '', '', '1', '0.00', '0', '2023-01-20 07:05:49', '5776895877', '', '', 'RU', '', '1673323850-start-5776895877', '', '', 0),
('5837615638', '', 'Вася', '', '', '', '1', '0.00', '0', '2023-01-06 03:38:40', '5723091276', '', '', 'RU', '', '1672965489-start-5723091276', '', '', 0),
('5844557462', '', 'Орфей', '', '', '', '1', '0.00', '0', '2022-11-23 18:15:09', '5682790477', '', '', 'RU', '', '1669216509-start-5682790477', '', '', 0),
('5852812778', '', '️', 'Ⲉⲟ Ҕⲁⲣⲧⲟⲗⲟ', '', '', '1', '0.00', '0', '2022-12-04 13:32:22', '5776895877', '', '', 'RU', '', '1670149941-start-5776895877', '', '', 0),
('5863033261', '', 'свобода', '', '', '', '1', '0.00', '0', '2022-12-24 17:42:39', '5683295680', '', '', 'RU', '', '1671892934-start-5683295680', '', '', 0),
('5879908662', '', 'V-.Bk', '', '', '', '1', '0.00', '0', '2023-03-15 18:45:10', '6102830593', '', '', 'RU', '', '1678895110-start-6102830593', '', '', 0),
('5885838581', '', 'Тооо', 'Провинцыя', '', '', '1', '0.00', '0', '2022-12-23 00:29:00', '5683295680', '', 'IFA=5683295680', 'RU', '', '1671744538-start-5683295680', '', '', 0),
('5900558044', '', 'Кака', 'Пука', '', '', '1', '0.00', '0', '2023-03-13 02:38:49', '6102830593', '', 'Milana', 'RU', '', '1678660666-start-6102830593', '', '', 0),
('5901614439', '', '🅰️POSTAL', '', '', '', '1', '0.00', '0', '2023-03-05 21:20:26', '6246376093', '', 'IFA=6132441782', 'RU', '', '1677799727-start-6246376093', '', '', 0),
('5921124757', '', 'Sn', '', '', '', '1', '0.00', '0', '2023-01-06 22:10:49', '5985168625', '', '', 'RU', '', '1673032249-start-5985168625', '', '', 0),
('5924676300', '', 'Go', '', '', '', '1', '0.00', '0', '2023-03-14 01:30:41', '6102830593', '', '', 'RU', '', '1678746627-start-6102830593', '', '', 0),
('5927911437', '', '48367', '', '', '', '1', '0.00', '0', '2023-03-14 10:00:42', '6102830593', '', '', 'RU', '', '1678776987-start-6102830593', '', '', 0),
('5930630225', '', 'Bezumnii Max', 'Max', '', '', '1', '0.00', '0', '2023-01-16 17:43:04', '5723091276', '', '', 'RU', '', '1673880146-start-5723091276', '', '', 0),
('5943695764', '', 'RB', '', '', '', '1', '0.00', '0', '2022-12-20 04:18:46', '5683295680', '', 'IFA=5683295680', 'RU', '', '1671499126-start-5683295680', '', '', 0),
('5947129458', '', 'Dan', '', '', '', '1', '0.00', '0', '2023-03-07 13:13:00', '5984814929', '', 'CAPTCHA=35687', 'RU', '', '1678183980-start-5984814929', '', '', 0),
('5966646020', '', '@228', 'Бэн7', '', '', '1', '0.00', '0', '2023-01-16 13:20:59', '5985168625', '', '12462', 'RU', '', '1673864344-start-5985168625', '', '', 0),
('5970589265', '', 'Vadim', '', '', '', '1', '0.00', '0', '2023-03-14 10:04:13', '6102830593', '', '', 'RU', '', '1678777453-start-6102830593', '', '', 0),
('5971074357', '', '😎', '', '', '', '1', '0.00', '0', '2023-01-15 04:50:56', '5985168625', '', 'ЯЛОВЕНЬ|26', 'RU', '', '1673732721-start-5985168625', '', '', 0),
('5973793145', '', 'M&D', '', '', '', '1', '0.00', '0', '2023-01-13 19:40:23', '5985168625', '', '', 'RU', '', '1672973412-start-5985168625', '', '', 0),
('5989981366', '', 'Майк', '', '', '', '1', '0.00', '0', '2022-12-20 11:11:46', '5683295680', '', 'IFA=5683295680', 'RU', '', '1671523906-start-5683295680', '', '', 0),
('6011013593', '', 'Особо', 'Опасен', '', '', '1', '0.00', '0', '2023-03-08 03:00:49', '5776895877', '', '', 'RU', '', '1678011501-start-5776895877', '', '', 0),
('6147898882', '', 'Ⲉⲟ', 'Ҕⲁⲣⲧⲟⲗⲟ', '', '', '0', '0.00', '0', '2023-03-16 05:17:43', '5984814929', '', 'КИШИНЕВ', 'RU', '', '1678931439-ban-5984814929', '', '', 1),
('6217314767', '', 'С.Т.И.М.У.Л', '', '', '', '1', '0.00', '0', '2023-03-14 02:17:03', '6102830593', '', '', 'RU', '', '1678749374-start-6102830593', '', '', 0),
('6262736172', '', 'Непосредственно', 'ВА', '', '', '1', '0.00', '0', '2023-03-07 06:36:04', '5984814929', '', '', 'RU', '', '1677889654-start-5984814929', '', '', 0),
('6290933585', '', 'ВА', '', '', '', '1', '0.00', '0', '2023-03-03 15:43:25', '5723091276', '', 'IFA=5723091276', 'RU', '', '1677847401-start-5723091276', '', '', 0),
('637747331', '', 'Evgesha2011', '', '', '', '1', '0.00', '0', '2023-01-13 03:45:44', '5985168625', '', '', 'RU', '', '1673570744-start-5985168625', '', '', 0),
('650167035', '', '🇺🇿🥇🥇🥇🥇🥇🥇🇺🇿', '', '', '', '1', '0.00', '0', '2022-10-23 21:33:02', '5682996596', '', '', 'RU', '', '1666549982-start-5682996596', '', '', 0),
('696006282', '', 'AUX', 'lov', '', '', '1', '0.00', '0', '2023-01-05 01:35:47', '5985168625', '', '', 'RU', '', '1672871746-start-5985168625', '', '', 0),
('745866883', '', 'Andrusa_rez', '', '', '', '1', '0.00', '0', '2023-01-10 04:48:16', '5985168625', '', '12442', 'RU', '', '1673314802-start-5985168625', '', '', 0),
('745916894', '', '_Skill_ 🤖 Боты(', 'тех. поддержка ', '', '', '1', '0.00', '0', '2023-03-14 12:29:02', '6102830593', '', '', 'RU', '', '1678786131-start-6102830593', '', '', 0),
('763404764', '', 'Gun', 'Gun', '', '', '1', '0.00', '0', '2022-12-21 00:28:35', '5683295680', '', '', 'RU', '', '1671571682-start-5683295680', '', '', 0),
('782283213', '', 'Махмудов Р', '', '', '', '1', '0.00', '0', '2022-11-03 05:57:41', '5682996596', '', '', 'RU', '', '1667444261-start-5682996596', '', '', 0),
('813743140', '', 'IbotSHoh.13', '', '', '', '1', '0.00', '0', '2022-10-12 23:27:02', '5682996596', '', '5682996596=Alpha-PVP&3730101', 'RU', '37301', '1665606395-start-5682996596', '', '', 0),
('847311439', '', '♻️PROFI в РАБОТ', '', '', '', '1', '0.00', '0', '2023-03-07 23:41:02', '5723091276', '', '', 'RU', '', '1678221654-start-5723091276', '', '', 0),
('854777751', '', 'Maysun', '', '', '', '1', '0.00', '0', '2023-01-07 10:14:48', '5985168625', '', 'КИШИНЕВ', 'RU', '', '1673075669-start-5985168625', '', '', 0),
('868505869', '', 'First Name', '', '', '', '1', '0.00', '0', '2022-12-21 14:00:03', '5683295680', '', '', 'RU', '', '1671620390-start-5683295680', '', '', 0),
('915102784', '', 'darya', '', '', '', '1', '0.00', '0', '2022-10-20 16:49:03', '5682996596', '', 'ORS=CHISH', 'RU', '', '1666273725-start-5682996596', '', '', 0),
('932728003', '', 'sists', 'оаноо', '', '', '1', '0.00', '0', '2023-01-05 01:30:30', '5985168625', '', 'КИШИНЕВ|15', 'RU', '', '1672871424-start-5985168625', '', '', 0),
('973373297', '', '🌍', '🌗🌗', '', '', '1', '0.00', '0', '2022-10-11 18:26:33', '5682996596', '', '', 'RU', '', '1665501993-start-5682996596', '', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `wallets`
--
-- Создание: Фев 23 2023 г., 17:24
-- Последнее обновление: Фев 23 2023 г., 17:24
--

DROP TABLE IF EXISTS `wallets`;
CREATE TABLE `wallets` (
  `id` varchar(25) NOT NULL,
  `cat` varchar(6) NOT NULL,
  `wallet` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL,
  `payment` varchar(6) NOT NULL,
  `log` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wallets`
--

INSERT INTO `wallets` (`id`, `cat`, `wallet`, `status`, `payment`, `log`) VALUES
('', 'BTC', 'bc1qzxeaz66h5vjx2nay5e58ymrr840ppdequjmkfr', '0', '', ''),
('', 'BTC', 'bc1qpkwa88z62znvpj79tyq6spcufdad50gj4fp7d6', '0', '', ''),
('', 'BTC', 'bc1qflezy2shatd7exwracz2zzncpqzth89fg753pj', '0', '', ''),
('', 'BTC', 'bc1qc7efku9cauxdzannz5zpmdv59wuxnxh48pyhhl', '0', '', ''),
('', 'BTC', 'bc1qavusuk2svdvtc493nyk4d2tdf02y7nk6ucn9a8', '0', '', ''),
('', 'BTC', 'bc1qaha548lk88v20se0plshf5dneygnslhg62xl83', '0', '', ''),
('', 'BTC', 'bc1qt02p88ulmng23athq63z2jtuhr9t4ws2zquf6y', '0', '', ''),
('', 'BTC', 'bc1q0can9yhq4t28pjxyu4ggqv42td903g5esrvsr5', '0', '', ''),
('', 'BTC', 'bc1quwxpvphkf0yjrgexn7zsaywd7v5q4gulf7u8n2', '0', '', ''),
('', 'BTC', 'bc1qg83gjnvhrp0sna0v0uhfa7r3r3v50quftrnejt', '0', '', ''),
('', 'BTC', 'bc1qq2vsuj08vy27qcj0v2la5pqdtrnrm6zxjkks2w', '0', '', ''),
('', 'BTC', 'bc1qhlmawvqu39kkpr4wxfr9tmet6h04qa7u8y3akh', '0', '', ''),
('', 'BTC', 'bc1qjlanp6qmypfjc5sjjtsrer2t979gmdh65lakwl', '0', '', ''),
('', 'BTC', 'bc1qgh6u20dj6jh87lkwxce3rk5hh0rjyy0k3vlrww', '0', '', ''),
('', 'BTC', 'bc1qkde3svdswh09c28dac26pfrp7w5jkxhgc4v9g0', '0', '', ''),
('', 'BTC', 'bc1qfztmseczx0tgrwjwmp3xxl9talhz7anvwt09q4', '0', '', ''),
('', 'BTC', 'bc1qqjwja6u5m0fpg5nqwxxvgcajjn758reuhwnj3w', '0', '', ''),
('', 'BTC', 'bc1qnuhk2tgc2dlhu0ec3a4gfct5p8judnauh37gk2', '0', '', ''),
('', 'BTC', 'bc1qc04c2yxfd0waakn66qeu4vwf2kmepug4vmtslv', '0', '', ''),
('', 'BTC', 'bc1qe6yjszs8ta4u5gvshu3pvcmr6k0nglfgs0u3x3', '0', '', ''),
('', 'LTC', 'ltc1q66g37u0lgvy600djszgrxw940sj9rlv7y0kgh3', '0', '', ''),
('', 'LTC', 'ltc1qmaeyjnjvrg0n5z3vrqt77trpdf2cazsa3gdpmy', '0', '', ''),
('', 'LTC', 'ltc1qc22jn5ayphey3zz5rsr3y5e6cyh0gmqsr7u6zj', '0', '', ''),
('', 'LTC', 'ltc1qw3mtfww4dt6zfm7grjecfs7dkast0d2mzjdmzu', '0', '', ''),
('', 'LTC', 'ltc1qqvpeqlvluq65qpjgqvpx037kp8qj57dc5g0dr6', '0', '', ''),
('', 'LTC', 'ltc1qmk5ffeyr7zn2y5s0v47fvfl3r958ar7p8h4ex9', '0', '', ''),
('', 'LTC', 'ltc1q79mcuezawm0gn49twd403ufue42j26k2vkdwt9', '0', '', ''),
('', 'LTC', 'ltc1q7u68dgsew44efw8n6q78z8utj4c63gjp53vqak', '0', '', ''),
('', 'LTC', 'ltc1qklvf7mnk83zye8ahrkyu5uw3nn85qayvna5az0', '0', '', ''),
('', 'LTC', 'ltc1qkeyg756nrw2ph2k7zwxfp8sxfq98fgdyzy7rd4', '0', '', ''),
('', 'LTC', 'ltc1qfa64ukpxnxsxm04gwej7f6gs00q9cz2dannl5p', '0', '', ''),
('', 'LTC', 'ltc1qsram2al3dm9q0gvmsgmt67j9cpkje5cmgs7s6t', '0', '', ''),
('', 'LTC', 'ltc1qccs6pjqgn7cpvk64hkvnm6vuyxvs6g8l2qhwq2', '0', '', ''),
('', 'LTC', 'ltc1qectxavj29euza7aq0hc2utf59g064thd0dpuvu', '0', '', ''),
('', 'LTC', 'ltc1q3tk7czfpzhxvtcdt5j2m7chmqhecsfgksrvc32', '0', '', ''),
('', 'LTC', 'ltc1q2n4gk7hujltxxn3qve0ecuvlxhut9gl7l5ttk8', '0', '', ''),
('', 'LTC', 'ltc1quw5trx87uwfftvmlg8zgnlk2hs570fvmld85wm', '0', '', ''),
('', 'LTC', 'ltc1q0whj4z8qeknqhq6v7x5xuekakwfm9gqkzpp2c0', '0', '', ''),
('', 'LTC', 'ltc1qgjyru84vdtu2yqm2hta6u9ngsfw5hnsrqzt8ma', '0', '', ''),
('', 'LTC', 'ltc1qqm5xu7aahadja9ahnety8hqnenzgc5n64ec99f', '0', '', ''),
('', 'DOGE', 'DKCzVk1nmaD4HEbQszGwmhJ7ojXsEiaybi', '0', '', ''),
('', 'DOGE', 'DFYK71eoeZDrxtCx3dp65kU7GkkAb4bwWE', '0', '', ''),
('', 'DOGE', 'DEFnfCADPJKJSKZBuRxADWyZxic8riG6nV', '0', '', ''),
('', 'DOGE', 'DJyzqczrbgUFHovK2T3j9AX6mrzB9sthae', '0', '', ''),
('', 'DOGE', 'DC9urBBbB7d1trExLRhatE3uDTxyQQMtLo', '0', '', ''),
('', 'DOGE', 'D7JZptmv999vQWqNexa7VhdXDArcoQ9s2Q', '0', '', ''),
('', 'DOGE', 'DEgtm6bTygjJ3wSaffDDPkjbe5wF1FgDsZ', '0', '', ''),
('', 'DOGE', 'DLSmxe9QDkiH2jCmJgs1FemvanHHWWKYUe', '0', '', ''),
('', 'DOGE', 'DU3468etA3WYVcqK6qBPkiE621vDYXw55Z', '0', '', ''),
('', 'DOGE', 'DEXBWsLVWC5p1zbr11qw6cEJCcN24BWhj6', '0', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bots`
--
ALTER TABLE `bots`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `commands`
--
ALTER TABLE `commands`
  ADD UNIQUE KEY `cmd` (`cmd`(13));

--
-- Индексы таблицы `currencies`
--
ALTER TABLE `currencies`
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bot` (`bot`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `fonts`
--
ALTER TABLE `fonts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `merches`
--
ALTER TABLE `merches`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `addons`
--
ALTER TABLE `addons`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `fonts`
--
ALTER TABLE `fonts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `merches`
--
ALTER TABLE `merches`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1115;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`bot`) REFERENCES `bots` (`id`),
  ADD CONSTRAINT `files_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
