-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Ноя 14 2022 г., 19:11
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kalkulator`
--

-- --------------------------------------------------------

--
-- Структура таблицы `baza_kalcul`
--

CREATE TABLE `baza_kalcul` (
  `id` int NOT NULL,
  `one_data` int NOT NULL,
  `operetion` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `two_data` int NOT NULL,
  `otvet` varchar(10000) COLLATE utf8mb4_general_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `baza_kalcul`
--

INSERT INTO `baza_kalcul` (`id`, `one_data`, `operetion`, `two_data`, `otvet`, `created`) VALUES
(221, 15, '/', 36, '0.41666666666667', '2022-11-14 22:00:17'),
(222, 15, '+', 458, '473', '2022-11-14 22:02:03'),
(223, 15, '+', 458, '473', '2022-11-14 22:02:40'),
(224, 15, '+', 15, '30', '2022-11-14 22:06:07'),
(225, 15, '-', 15, '0', '2022-11-14 22:06:09'),
(226, 15, '*', 15, '225', '2022-11-14 22:06:11'),
(227, 15, '/', 15, '1', '2022-11-14 22:06:13'),
(228, 15, '/', 2, '7.5', '2022-11-14 22:06:16'),
(229, 15, '/', 0, 'Ошибка: На ноль делить нельзя, введите другое число', '2022-11-14 22:06:20');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `baza_kalcul`
--
ALTER TABLE `baza_kalcul`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `baza_kalcul`
--
ALTER TABLE `baza_kalcul`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
