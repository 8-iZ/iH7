-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 29 2022 г., 18:38
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
-- База данных: `eobarton_ih`
--

-- --------------------------------------------------------

--
-- Структура таблицы `addons`
--
-- Создание: Сен 16 2022 г., 22:40
--

DROP TABLE IF EXISTS `addons`;
CREATE TABLE `addons` (
  `id` int(3) NOT NULL,
  `title` tinytext CHARACTER SET utf8 NOT NULL,
  `developer` int(11) NOT NULL,
  `info` text CHARACTER SET utf8 NOT NULL,
  `perameter` text CHARACTER SET utf8 NOT NULL,
  `log` text CHARACTER SET utf8 NOT NULL,
  `temp` text CHARACTER SET utf8 NOT NULL,
  `status` tinytext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `bots`
--
-- Создание: Сен 27 2022 г., 19:22
-- Последнее обновление: Сен 27 2022 г., 23:53
--

DROP TABLE IF EXISTS `bots`;
CREATE TABLE `bots` (
  `id` varchar(11) NOT NULL,
  `title` tinytext NOT NULL,
  `type` tinytext NOT NULL,
  `status` varchar(1) NOT NULL,
  `master` varchar(11) NOT NULL,
  `start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `info` text NOT NULL,
  `nick` tinytext NOT NULL,
  `log` text NOT NULL,
  `skey` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `bots`
--

INSERT INTO `bots` (`id`, `title`, `type`, `status`, `master`, `start`, `info`, `nick`, `log`, `skey`) VALUES
('5650496364', 'Shadow Service', 'C', '2', '', '2022-09-27 19:26:13', 'Shadow Service Official Bot ', 'ShadowserviceBOT', '1664306773 siteStart', 'AAHmafpBsFXwE2XwUcN7twFp5FtQv87Of0M'),
('5682996596', 'BroZZers', 'F', '2', '', '2022-09-27 19:44:48', 'Brozzers', 'BroZZersshopBOT', '1664307888 siteStart', 'AAFB7YEFLt5ek31m153YPahFglbzKZXeVtA'),
('5722362708', 'BigBoss', 'F', '2', '', '2022-09-27 23:53:18', 'Oscar', 'BigBoss4844848BOT', '1664322798 siteStart', 'AAFyUmLPKpyq5g4kCAKi1IwzpJrtSjrt9cY');

-- --------------------------------------------------------

--
-- Структура таблицы `commands`
--
-- Создание: Сен 16 2022 г., 22:38
--

DROP TABLE IF EXISTS `commands`;
CREATE TABLE `commands` (
  `cmd` tinytext CHARACTER SET utf8 NOT NULL,
  `cat` tinytext CHARACTER SET utf8 NOT NULL,
  `addon` tinytext CHARACTER SET utf8 NOT NULL,
  `state` int(1) NOT NULL,
  `author` tinytext CHARACTER SET utf8 NOT NULL,
  `info` text CHARACTER SET utf8 NOT NULL,
  `log` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `commands`
--

INSERT INTO `commands` (`cmd`, `cat`, `addon`, `state`, `author`, `info`, `log`) VALUES
('start', 'core', '', 1, 'DUROV', 'DEFAULT, MAIN AND NECESSARY COMMAND', ''),
('help', 'core', 'help', 2, 'DUROV', 'DEFAULT BUT NOT NECESSARY ', ''),
('update', 'core', 'update', 2, 'RESERVARIOUS', 'NOT NECESSARY AND SOMETIMES NOT MENTIONED BUT NOT IMPOSSIBLE TO TURN IT OFF', '');

-- --------------------------------------------------------

--
-- Структура таблицы `dialogs`
--
-- Создание: Сен 16 2022 г., 22:38
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
-- Структура таблицы `fonts`
--
-- Создание: Сен 28 2022 г., 04:27
--

DROP TABLE IF EXISTS `fonts`;
CREATE TABLE `fonts` (
  `font` text NOT NULL,
  `type` text NOT NULL,
  `access` text NOT NULL,
  `aa` text NOT NULL,
  `a` text NOT NULL,
  `bb` text NOT NULL,
  `b` text NOT NULL,
  `cc` text NOT NULL,
  `c` text NOT NULL,
  `dd` text NOT NULL,
  `d` text NOT NULL,
  `ee` text NOT NULL,
  `e` int(11) NOT NULL,
  `ff` int(11) NOT NULL,
  `f` int(11) NOT NULL,
  `gg` int(11) NOT NULL,
  `g` int(11) NOT NULL,
  `hh` int(11) NOT NULL,
  `h` int(11) NOT NULL,
  `ii` int(11) NOT NULL,
  `i` int(11) NOT NULL,
  `jj` int(11) NOT NULL,
  `j` int(11) NOT NULL,
  `kk` int(11) NOT NULL,
  `k` int(11) NOT NULL,
  `ll` int(11) NOT NULL,
  `l` int(11) NOT NULL,
  `mm` int(11) NOT NULL,
  `m` int(11) NOT NULL,
  `nn` int(11) NOT NULL,
  `n` int(11) NOT NULL,
  `oo` int(11) NOT NULL,
  `o` int(11) NOT NULL,
  `pp` int(11) NOT NULL,
  `p` int(11) NOT NULL,
  `qq` int(11) NOT NULL,
  `q` int(11) NOT NULL,
  `rr` int(11) NOT NULL,
  `r` int(11) NOT NULL,
  `ss` int(11) NOT NULL,
  `s` int(11) NOT NULL,
  `tt` int(11) NOT NULL,
  `t` int(11) NOT NULL,
  `uu` int(11) NOT NULL,
  `u` int(11) NOT NULL,
  `vv` int(11) NOT NULL,
  `v` int(11) NOT NULL,
  `ww` int(11) NOT NULL,
  `w` int(11) NOT NULL,
  `xx` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `yy` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `zz` int(11) NOT NULL,
  `z` int(11) NOT NULL,
  `аа` int(11) NOT NULL,
  `а` int(11) NOT NULL,
  `бб` int(11) NOT NULL,
  `б` int(11) NOT NULL,
  `вв` int(11) NOT NULL,
  `в` int(11) NOT NULL,
  `гг` int(11) NOT NULL,
  `г` int(11) NOT NULL,
  `дд` int(11) NOT NULL,
  `д` int(11) NOT NULL,
  `ее` int(11) NOT NULL,
  `е` int(11) NOT NULL,
  `ёё` int(11) NOT NULL,
  `ё` int(11) NOT NULL,
  `жж` int(11) NOT NULL,
  `ж` int(11) NOT NULL,
  `зз` int(11) NOT NULL,
  `з` int(11) NOT NULL,
  `ии` int(11) NOT NULL,
  `и` int(11) NOT NULL,
  `кк` int(11) NOT NULL,
  `к` int(11) NOT NULL,
  `лл` int(11) NOT NULL,
  `л` int(11) NOT NULL,
  `мм` int(11) NOT NULL,
  `м` int(11) NOT NULL,
  `нн` int(11) NOT NULL,
  `н` int(11) NOT NULL,
  `оо` int(11) NOT NULL,
  `о` int(11) NOT NULL,
  `пп` int(11) NOT NULL,
  `п` int(11) NOT NULL,
  `рр` int(11) NOT NULL,
  `р` int(11) NOT NULL,
  `сс` int(11) NOT NULL,
  `с` int(11) NOT NULL,
  `тт` int(11) NOT NULL,
  `т` int(11) NOT NULL,
  `уу` int(11) NOT NULL,
  `у` int(11) NOT NULL,
  `фф` int(11) NOT NULL,
  `ф` int(11) NOT NULL,
  `хх` int(11) NOT NULL,
  `х` int(11) NOT NULL,
  `цц` int(11) NOT NULL,
  `ц` int(11) NOT NULL,
  `чч` int(11) NOT NULL,
  `ч` int(11) NOT NULL,
  `шш` int(11) NOT NULL,
  `ш` int(11) NOT NULL,
  `щщ` int(11) NOT NULL,
  `щ` int(11) NOT NULL,
  `ьь` int(11) NOT NULL,
  `ь` int(11) NOT NULL,
  `ыы` int(11) NOT NULL,
  `ы` int(11) NOT NULL,
  `ээ` int(11) NOT NULL,
  `э` int(11) NOT NULL,
  `юю` int(11) NOT NULL,
  `ю` int(11) NOT NULL,
  `яя` int(11) NOT NULL,
  `я` int(11) NOT NULL,
  `йй` int(11) NOT NULL,
  `й` int(11) NOT NULL,
  `ъъ` int(11) NOT NULL,
  `ъ` int(11) NOT NULL,
  `0` text NOT NULL,
  `1` text NOT NULL,
  `2` text NOT NULL,
  `3` text NOT NULL,
  `4` text NOT NULL,
  `5` text NOT NULL,
  `6` text NOT NULL,
  `7` text NOT NULL,
  `8` text NOT NULL,
  `9` text NOT NULL,
  `asym` text NOT NULL,
  `ssym` text NOT NULL,
  `dsym` text NOT NULL,
  `msym` text NOT NULL,
  `qsym` text NOT NULL,
  `isym` text NOT NULL,
  `csym` text NOT NULL,
  `xsym` text NOT NULL,
  `tsym` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `merches`
--
-- Создание: Сен 29 2022 г., 14:44
-- Последнее обновление: Сен 29 2022 г., 14:45
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
  `bonus` text NOT NULL,
  `place` text CHARACTER SET utf8 NOT NULL,
  `city` int(11) NOT NULL,
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

INSERT INTO `merches` (`id`, `name`, `complectation`, `price`, `category`, `parameter`, `status`, `agent`, `seller`, `start`, `info`, `gallery`, `bonus`, `place`, `city`, `sector`, `description`, `photos`, `sold`, `temp`, `log`, `ticket`) VALUES
(1111, 'Alpha-PVP', '1', '28', '6', '', '8', '0', 'F', '2022-09-29 17:28:16', 'Белый крис', '', '', '', 1, 'Botanica', 'Information access denied ', '', '0000-00-00 00:00:00', '', '', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--
-- Создание: Сен 16 2022 г., 22:37
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
-- Создание: Сен 16 2022 г., 22:36
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(5) NOT NULL,
  `user` int(11) NOT NULL,
  `bot` int(11) NOT NULL,
  `merch` int(4) NOT NULL,
  `status` tinytext CHARACTER SET utf8 NOT NULL,
  `temp` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `payments`
--
-- Создание: Сен 16 2022 г., 22:36
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
-- Структура таблицы `subscriptions`
--
-- Создание: Сен 14 2022 г., 23:58
--

DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE `subscriptions` (
  `email` tinytext NOT NULL,
  `user` int(11) NOT NULL,
  `bot` int(11) NOT NULL,
  `start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `log` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='подписки и подписчики';

--
-- Дамп данных таблицы `subscriptions`
--

INSERT INTO `subscriptions` (`email`, `user`, `bot`, `start`, `log`) VALUES
('eobartolo@gmail.com', 0, 0, '2022-09-16 22:07:17', ''),
('eobartolo@gmail.com', 0, 0, '2022-09-16 22:16:01', ''),
('eobartolo@gmail.com', 0, 0, '2022-09-16 22:30:53', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
-- Создание: Сен 16 2022 г., 22:35
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `nick` tinytext CHARACTER SET utf8 NOT NULL,
  `email` tinytext CHARACTER SET utf8 NOT NULL,
  `status` int(2) NOT NULL,
  `balance` int(9) NOT NULL,
  `ratio` int(15) NOT NULL,
  `start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bot` int(11) NOT NULL,
  `info` text NOT NULL,
  `temp` text CHARACTER SET utf8 NOT NULL,
  `lang` text CHARACTER SET utf8 NOT NULL,
  `city` int(3) NOT NULL,
  `log` text CHARACTER SET utf8 NOT NULL,
  `pass` mediumtext CHARACTER SET utf8 NOT NULL,
  `pin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

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
-- Индексы таблицы `merches`
--
ALTER TABLE `merches`
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
-- AUTO_INCREMENT для таблицы `merches`
--
ALTER TABLE `merches`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
