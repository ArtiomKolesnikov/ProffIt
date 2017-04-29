-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 29 2017 г., 20:47
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `proff_it`
--

-- --------------------------------------------------------

--
-- Структура таблицы `personal_data`
--

CREATE TABLE `personal_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `personal_data`
--

INSERT INTO `personal_data` (`id`, `name`, `email`) VALUES
(1, 'Vasya', 'dsa@dsa.com'),
(2, 'Petya Daf', 'trewrew@q.com'),
(3, 'Jora Vata', 'uytyutrgh@das.com'),
(4, 'Вася Пупкин', 'asdfgh@dfreg.com'),
(5, 'Маня дупкина', 'mania@ma.com'),
(6, 'Жора Ваточник', 'jora@sa.com'),
(7, 'Манька Бабкина', 'dcsacsa@dsa.com');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_data_search`
--

CREATE TABLE `personal_data_search` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf32 NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `personal_data`
--
ALTER TABLE `personal_data`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal_data_search`
--
ALTER TABLE `personal_data_search`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `personal_data`
--
ALTER TABLE `personal_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `personal_data_search`
--
ALTER TABLE `personal_data_search`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
