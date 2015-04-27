-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 27 2015 г., 20:05
-- Версия сервера: 5.6.21
-- Версия PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `cell_game_club_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounting_stat`
--

CREATE TABLE IF NOT EXISTS `accounting_stat` (
`id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `price` double NOT NULL DEFAULT '0',
  `client_id` double NOT NULL DEFAULT '0',
  `spot_id` int(11) NOT NULL,
  `Y` int(11) DEFAULT NULL,
  `M` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `accounting_stat`
--

INSERT INTO `accounting_stat` (`id`, `date`, `price`, `client_id`, `spot_id`, `Y`, `M`) VALUES
(7, '2014-03-22 14:51:00', 1, 2, 1, 2014, 3),
(8, '2014-04-25 15:52:00', 3, 2, 1, 2014, 4),
(9, '2014-02-23 16:52:00', 4, 2, 2, 2014, 2),
(10, '2014-03-26 13:52:00', 5, 2, 3, 2014, 3),
(11, '2015-03-21 13:52:00', 6, 2, 4, 2015, 3),
(12, '2015-03-22 13:51:00', 2, 2, 1, 2015, 3),
(13, '2015-03-23 14:52:00', 7, 0, 1, 2015, 3),
(14, '2015-04-21 08:42:00', 2, 4, 1, 2015, 4),
(15, '2015-04-22 08:43:00', 4, 2, 2, 2015, 4),
(16, '2015-04-26 09:49:00', 2, 2, 1, 2015, 4),
(17, '2015-04-25 09:49:00', 2, 2, 2, 2015, 4),
(18, '2015-04-24 09:49:00', 2, 2, 3, 2015, 4),
(19, '2015-04-23 09:49:00', 2, 2, 4, 2015, 4),
(20, '2013-04-23 09:49:00', 2, 2, 5, 2013, 4),
(21, '2013-04-22 09:49:00', 7, 2, 6, 2013, 4),
(22, '2014-03-21 14:51:00', 1, 2, 1, 2014, 3),
(23, '2014-06-22 14:51:00', 1, 2, 1, 2014, 6),
(24, '2014-05-22 14:51:00', 2, 2, 1, 2014, 5),
(25, '2014-05-21 14:51:00', 1, 2, 1, 2014, 5),
(26, '2016-05-22 14:51:00', 1, 2, 1, 2016, 5),
(27, '2016-05-23 14:51:00', 6, 2, 1, 2016, 5),
(28, '2014-02-22 16:52:00', 5, 2, 2, 2014, 2),
(29, '2014-04-21 15:52:00', 31, 2, 1, 2014, 4),
(30, '2014-06-01 14:51:00', 3, 2, 1, 2014, 6),
(31, '2015-04-23 14:47:00', 2, 2, 1, 2015, 4),
(32, '2015-04-24 09:54:00', 4, 4, 1, 2015, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
`id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `albums`
--

INSERT INTO `albums` (`id`, `name`) VALUES
(11, 'Ð¿Ð¾Ð»ÐµÐ´Ð½Ð¸Ð¹ Ð°Ð»ÑŒÐ±Ð¾Ð¼');

-- --------------------------------------------------------

--
-- Структура таблицы `budget`
--

CREATE TABLE IF NOT EXISTS `budget` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `cat_id` int(10) NOT NULL,
  `target` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `budget`
--

INSERT INTO `budget` (`id`, `user_id`, `cat_id`, `target`, `price`, `date`) VALUES
(1, 1, 1, 'target', 0, '2015-04-22'),
(2, 1, 1, '123', 11, '2015-04-22'),
(3, 1, 2, '123', 123, '2015-04-22'),
(4, 1, 3, '123', 123, '2015-04-09'),
(5, 1, 4, '123', 123, '2015-04-26'),
(6, 1, 1, '12', 11, '2015-04-23'),
(10, 1, 3, '1', 114, '2015-04-24'),
(11, 1, 3, '13', 123, '2015-04-24'),
(12, 1, 1, 'test aim', 1, '2015-04-25'),
(13, 1, 3, 'aim new pc ', 900, '2015-04-30');

-- --------------------------------------------------------

--
-- Структура таблицы `budget_cat`
--

CREATE TABLE IF NOT EXISTS `budget_cat` (
`id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `budget_cat`
--

INSERT INTO `budget_cat` (`id`, `name`) VALUES
(1, 'test'),
(2, 'test2'),
(3, 'test3'),
(4, 'test4');

-- --------------------------------------------------------

--
-- Структура таблицы `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '0',
  `start` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `start`) VALUES
(15, 'test12 test12', '2015-04-13'),
(17, 'aleksei odegov', '2015-04-13'),
(18, 'aleksei odegov', '2015-04-21'),
(19, 'aleksei odegov', '2015-04-28'),
(20, 'aleksei odegov', '2015-04-26'),
(21, 'aleksei odegov', '2015-04-23');

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
`id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL DEFAULT '0',
  `last_name` varchar(50) NOT NULL DEFAULT '0',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `phone` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '0',
  `info` varchar(255) DEFAULT '0',
  `type_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `last_name`, `birthday`, `phone`, `email`, `info`, `type_id`) VALUES
(2, 'qweqwe', 'tqta', '2015-04-22', '123123123', 'asdasd@etst.ru', 'asdasdasdasdasd', 1),
(3, '1', '1', '2015-04-22', '123123', 'asdasd@etst.ru', 'asdasdasdasdasd', 0),
(4, '2', '2', '2015-04-22', '123123', 'asdasd@etst.ru', 'asdasdasdasdasd', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `gallery_files`
--

CREATE TABLE IF NOT EXISTS `gallery_files` (
`id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL DEFAULT '0',
  `upload_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `album_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `gallery_files`
--

INSERT INTO `gallery_files` (`id`, `file_name`, `upload_time`, `album_id`) VALUES
(20, '631530311920x1080-hd-wallpaper-33-Desktop-Wallpapers-1024x576.jpg', '2015-04-27 17:02:51', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE IF NOT EXISTS `prices` (
  `id` int(11) NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `time_amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`id`, `type_id`, `price`, `time_amount`) VALUES
(1, 1, 2, 2),
(2, 1, 1, 1),
(3, 1, 3, 3),
(4, 1, 4, 4),
(5, 1, 0.75, 0.75);

-- --------------------------------------------------------

--
-- Структура таблицы `prices_types`
--

CREATE TABLE IF NOT EXISTS `prices_types` (
`id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `prices_types`
--

INSERT INTO `prices_types` (`id`, `name`, `type`) VALUES
(1, 'test\r\n', '1'),
(2, 'test2', '2'),
(3, 'test3', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `saved_time`
--

CREATE TABLE IF NOT EXISTS `saved_time` (
`id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT '0',
  `amount` int(11) DEFAULT '0',
  `saved_at` date DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `spots`
--

CREATE TABLE IF NOT EXISTS `spots` (
`id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '0',
  `user_on_spot` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `spots`
--

INSERT INTO `spots` (`id`, `number`, `name`, `status`, `user_on_spot`) VALUES
(1, 1, 'pc', 'info', 0),
(2, 2, 'pc', 'info', 0),
(3, 3, 'xbox', 'info', 0),
(4, 4, 'pc', 'info', 0),
(5, 5, 'pc', 'info', 0),
(6, 6, 'pc', 'info', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT '0',
  `last_name` varchar(50) DEFAULT '0',
  `birthday` date DEFAULT '0000-00-00',
  `phone` varchar(50) DEFAULT '0',
  `email` varchar(50) DEFAULT '0',
  `password` varchar(255) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `birthday`, `phone`, `email`, `password`) VALUES
(1, 'test', 'test', '1993-04-17', '4555555', 'admin@admin.ru', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'test12', 'test12', '1993-04-17', '123123', 'admin1@admin.ru', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'aleksei', 'odegov', '2015-04-21', '123123123', 'test@test.rue', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Структура таблицы `user_time`
--

CREATE TABLE IF NOT EXISTS `user_time` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time_status` int(1) DEFAULT '0',
  `spot_id` int(11) NOT NULL,
  `time_start` varchar(50) NOT NULL,
  `time_end` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `user_time`
--

INSERT INTO `user_time` (`id`, `user_id`, `time_status`, `spot_id`, `time_start`, `time_end`) VALUES
(8, 2, 0, 1, '2015/04/22 08:32', '2015/04/22 10:32'),
(10, 2, 0, 3, '2015/04/22 08:35', '2015/04/22 10:35'),
(11, 2, 0, 4, '2015/04/22 08:35', '2015/04/22 10:35'),
(12, 2, 0, 2, '2015/04/22 08:36', '2015/04/22 10:36'),
(13, 2, 0, 4, '2015/04/22 08:37', '2015/04/22 10:37'),
(14, 2, 0, 3, '2015/04/22 08:56', '2015/04/22 10:56'),
(15, 2, 0, 1, '2015/04/22 09:04', '2015/04/22 11:04'),
(16, 2, 0, 2, '2015/04/22 09:04', '2015/04/22 11:04'),
(17, 2, 0, 3, '2015/04/22 09:04', '2015/04/22 11:04'),
(18, 2, 0, 4, '2015/04/22 09:04', '2015/04/22 11:04'),
(19, 2, 0, 1, '2015/04/22 09:05', '2015/04/22 11:05'),
(20, 2, 0, 2, '2015/04/22 09:05', '2015/04/22 11:05'),
(21, 2, 0, 3, '2015/04/22 09:05', '2015/04/22 11:05'),
(22, 2, 0, 4, '2015/04/22 09:05', '2015/04/22 11:05'),
(23, 4, 0, 1, '2015/04/22 09:05', '2015/04/22 11:05'),
(24, 2, 0, 4, '2015/04/22 09:07', '2015/04/22 11:07'),
(25, 2, 0, 2, '2015/04/22 09:08', '2015/04/22 11:08'),
(26, 4, 0, 2, '2015/04/22 09:08', '2015/04/22 11:08'),
(27, 2, 0, 2, '2015/04/22 09:09', '2015/04/22 12:09'),
(28, 2, 0, 2, '2015/04/22 09:09', '2015/04/22 11:09'),
(29, 2, 0, 2, '2015/04/22 09:10', '2015/04/22 13:10'),
(30, 2, 0, 1, '2015/04/22 09:11', '2015/04/22 12:11'),
(31, 3, 0, 3, '2015/04/22 09:11', '2015/04/22 14:11'),
(32, 4, 0, 4, '2015/04/22 09:24', '2015/04/22 11:09'),
(33, 2, 0, 3, '2015/04/22 09:25', '2015/04/22 11:10'),
(34, 2, 0, 4, '2015/04/22 09:26', '2015/04/22 12:26'),
(35, 2, 0, 6, '2015/04/22 09:26', '2015/04/22 12:26'),
(36, 2, 0, 5, '2015/04/22 09:26', '2015/04/22 12:26'),
(37, 2, 0, 3, '2015/04/22 09:26', '2015/04/22 12:26'),
(38, 2, 0, 4, '2015/04/22 09:27', '2015/04/22 12:27'),
(39, 2, 0, 3, '2015/04/22 09:27', '2015/04/22 12:27'),
(40, 2, 0, 3, '2015/04/22 09:27', '2015/04/22 11:12'),
(41, 4, 0, 1, '2015/04/22 13:36', '2015/04/22 18:36'),
(42, 2, 0, 1, '2015/04/22 13:38', '2015/04/22 16:38'),
(43, 2, 0, 3, '2015/04/22 13:42', '2015/04/22 16:42'),
(44, 2, 0, 4, '2015/04/22 13:43', '2015/04/22 15:28'),
(45, 2, 0, 1, '2015/04/22 13:45', '2015/04/22 16:45'),
(46, 2, 0, 2, '2015/04/22 13:45', '2015/04/22 16:45'),
(47, 2, 0, 3, '2015/04/22 13:45', '2015/04/22 15:30'),
(48, 2, 0, 4, '2015/04/22 13:45', '2015/04/22 18:45'),
(49, 2, 0, 1, '2015/04/22 13:51', '2015/04/22 16:51'),
(50, 2, 0, 1, '2015/04/22 13:52', '2015/04/22 16:52'),
(51, 2, 0, 2, '2015/04/22 13:52', '2015/04/22 16:52'),
(52, 2, 0, 3, '2015/04/22 13:52', '2015/04/22 16:52'),
(53, 2, 0, 4, '2015/04/22 13:52', '2015/04/22 16:52'),
(54, 4, 0, 1, '2015/04/23 08:42', '2015/04/23 11:42'),
(55, 2, 0, 2, '2015/04/23 08:43', '2015/04/23 13:43'),
(56, 2, 0, 1, '2015/04/23 09:49', '2015/04/23 12:49'),
(57, 2, 0, 2, '2015/04/23 09:49', '2015/04/23 12:49'),
(58, 2, 0, 3, '2015/04/23 09:49', '2015/04/23 12:49'),
(59, 2, 0, 4, '2015/04/23 09:49', '2015/04/23 12:49'),
(60, 2, 0, 5, '2015/04/23 09:49', '2015/04/23 12:49'),
(61, 2, 0, 6, '2015/04/23 09:49', '2015/04/23 12:49'),
(62, 2, 0, 1, '2015/04/23 14:47', '2015/04/23 17:47'),
(63, 4, 0, 1, '2015/04/24 09:54', '2015/04/24 14:54');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounting_stat`
--
ALTER TABLE `accounting_stat`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `albums`
--
ALTER TABLE `albums`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `budget`
--
ALTER TABLE `budget`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `budget_cat`
--
ALTER TABLE `budget_cat`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `calendar`
--
ALTER TABLE `calendar`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery_files`
--
ALTER TABLE `gallery_files`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prices`
--
ALTER TABLE `prices`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prices_types`
--
ALTER TABLE `prices_types`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `saved_time`
--
ALTER TABLE `saved_time`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `spots`
--
ALTER TABLE `spots`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_time`
--
ALTER TABLE `user_time`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accounting_stat`
--
ALTER TABLE `accounting_stat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT для таблицы `albums`
--
ALTER TABLE `albums`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `budget`
--
ALTER TABLE `budget`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `budget_cat`
--
ALTER TABLE `budget_cat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `calendar`
--
ALTER TABLE `calendar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `gallery_files`
--
ALTER TABLE `gallery_files`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `prices_types`
--
ALTER TABLE `prices_types`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `saved_time`
--
ALTER TABLE `saved_time`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `spots`
--
ALTER TABLE `spots`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `user_time`
--
ALTER TABLE `user_time`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
