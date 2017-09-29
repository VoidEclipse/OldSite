-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 15 2016 г., 21:33
-- Версия сервера: 10.1.10-MariaDB
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `auth`
--

-- --------------------------------------------------------

--
-- Структура таблицы `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `uId` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `download`
--

INSERT INTO `download` (`id`, `uId`, `time`) VALUES
(1, 2, 1462911573),
(2, 2, 1462911574),
(3, 2, 1462998038),
(4, 2, 1462998039),
(5, 2, 1462998040),
(6, 2, 1463084511),
(7, 2, 1463257410),
(8, 2, 1463257413);

-- --------------------------------------------------------

--
-- Структура таблицы `header`
--

CREATE TABLE `header` (
  `hId` int(11) NOT NULL,
  `headerText` text NOT NULL,
  `fileName` text NOT NULL,
  `fileType` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `header`
--

INSERT INTO `header` (`hId`, `headerText`, `fileName`, `fileType`) VALUES
(1, 'Ð¡Ð¾Ð²ÐµÑ€ÑˆÐµÐ½Ð½Ð¾ Ð½Ð¾Ð²Ð°Ñ ÑÐ¸ÑÑ‚ÐµÐ¼Ð° Ð²Ñ‹Ð´Ð°Ñ‡Ð¸ Ð½Ð°Ð»Ð¸Ñ‡Ð½Ñ‹Ñ…!', '../up/files/294901.png', 'image/png');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `userId` int(11) NOT NULL,
  `time` text NOT NULL,
  `tId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `message`, `userId`, `time`, `tId`) VALUES
(13, 'dsfdsfdsf', 1, '1461606908', 7),
(14, 'dfdsfdfd', 1, '1461606911', 7),
(15, 'dcc', 1, '1461607216', 7),
(16, 'Ð°Ð²Ð°', 1, '1461612230', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--
-- используется(#1932 - Table 'auth.news' doesn't exist in engine)
-- Ошибка считывания данных: (#1932 - Table 'auth.news' doesn't exist in engine)

-- --------------------------------------------------------

--
-- Структура таблицы `program`
--

CREATE TABLE `program` (
  `prId` int(11) NOT NULL,
  `fileName` text NOT NULL,
  `fileType` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `program`
--

INSERT INTO `program` (`prId`, `fileName`, `fileType`) VALUES
(1, '../up/files/197818.exe', 'application/x-msdownload');

-- --------------------------------------------------------

--
-- Структура таблицы `theme`
--

CREATE TABLE `theme` (
  `tId` int(11) NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `author` int(11) NOT NULL,
  `time` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `theme`
--

INSERT INTO `theme` (`tId`, `title`, `message`, `author`, `time`) VALUES
(7, 'fdfd', 'dsfsdf', 1, 1461606903),
(8, 'fd', 'rfref', 1, 1461611601),
(9, 'dfd', 'dfdf', 0, 1462483633),
(10, 'dfdsf', 'sdfdsf', 0, 1462483639),
(11, 'ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸', 'ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸! ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸! ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸! ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸! ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸! ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸! ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸! ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸! ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸! ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸! ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸! ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸! ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸! ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸! ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸! ÐŸÑ€Ð¾ÑˆÑƒ Ð¿Ð¾Ð¼Ð¾Ñ‰Ð¸!', 7, 1463258153);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `permissions` int(11) NOT NULL,
  `dataEmail` text NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `login`, `password`, `permissions`, `dataEmail`, `isActive`) VALUES
(1, '', 'admin', '288367c5f180b78f95b8810825dbe9f7', 1, '', 0),
(2, '', 'qwe', 'c57a960946655028ad35b88b0456eb6f', 0, '', 0),
(7, 'fkofte@mail.ru', 'qwer', 'e7e51c819d430ba89fdda91b22ceac1d', 0, '82203958fa339f6ab015dbaa0af973fd', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`hId`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`prId`);

--
-- Индексы таблицы `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`tId`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `header`
--
ALTER TABLE `header`
  MODIFY `hId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `program`
--
ALTER TABLE `program`
  MODIFY `prId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `theme`
--
ALTER TABLE `theme`
  MODIFY `tId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
