-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Окт 14 2020 г., 23:30
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE `shop` (
  `id` int NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `address_small` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address_big` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `count` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`id`, `name`, `address_small`, `address_big`, `count`) VALUES
(1, '01', '/img/small/01s.jpg', '/img/big/01.jpg', 1),
(2, '02', '/img/small/02s.jpg', '/img/big/02.jpg', 2),
(3, '03', '/img/small/03s.jpg', '/img/big/03.jpg', 0),
(4, '04', '/img/small/04s.jpg', '/img/big/04.jpg', 0),
(5, '05', '/img/small/05s.jpg', '/img/big/05.jpg', 0),
(6, '06', '/img/small/06s.jpg', '/img/big/06.jpg', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
