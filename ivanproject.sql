-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 06 2017 г., 19:53
-- Версия сервера: 10.1.26-MariaDB
-- Версия PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ivanproject`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(3) NOT NULL,
  `menu_name` varchar(255) NOT NULL COMMENT 'название в меню',
  `content` text NOT NULL COMMENT 'контент',
  `title` varchar(255) NOT NULL COMMENT 'тайтл',
  `description` varchar(255) NOT NULL COMMENT 'описание',
  `visible` enum('0','1') NOT NULL COMMENT 'видимость',
  `visible_in_main_menu` enum('0','1') NOT NULL COMMENT 'видимость в главном меню'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Страницы';

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `menu_name`, `content`, `title`, `description`, `visible`, `visible_in_main_menu`) VALUES
(1, 'Главная', 'Главная страница', 'Главная', 'Главная', '1', '1'),
(2, 'Новости', 'Новости', 'Новости', 'Новости', '1', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
