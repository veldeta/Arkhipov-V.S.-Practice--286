-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 13 2020 г., 17:11
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bez_reg`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`ID`, `admin`, `Password`) VALUES
(1, './admin/.ad', 'b9d11b3be25f5a1a7dc8ca04cd310b28'),
(2, './admin/.ab', '2fcf1cc318b885bd221c2b3a7bce93bf'),
(3, './admin/.gb', '24889392dca6afac7e31d838bb4e48d9');

-- --------------------------------------------------------

--
-- Структура таблицы `flights`
--

CREATE TABLE `flights` (
  `ID` int(11) NOT NULL,
  `Where from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `__Where__` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Day` date NOT NULL,
  `Departure` time NOT NULL,
  `Arrivals` time NOT NULL,
  `Time in sky` time NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `flights`
--

INSERT INTO `flights` (`ID`, `Where from`, `__Where__`, `Day`, `Departure`, `Arrivals`, `Time in sky`, `price`) VALUES
(1, 'Омск', 'Москва', '2020-06-13', '10:10:00', '10:10:00', '10:10:00', 2999),
(3, 'Санкт-Петербург', 'Москва', '2020-06-14', '10:10:00', '10:10:00', '10:10:00', 1999);

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `ID` int(11) NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`ID`, `role`) VALUES
(0, 'Новичок'),
(1, 'Любитель'),
(2, 'Профи'),
(3, 'Admin'),
(4, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Surname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `email`, `login`, `password`, `name`, `Surname`, `role`) VALUES
(17, '100001@student.spb-rtk.ru', 'good2002', '1234567980', 'NULL', NULL, 0),
(18, '100001@student.spb-rtk.ru', 'good2002', 'b609d06900796189d434146d7bb2d9e2', 'NULL', NULL, 0),
(19, '100001@student.spb-rtk.ru', 'good2002', 'b609d06900796189d434146d7bb2d9e2', 'NULL', NULL, 1),
(37, '100001@student.spb-rtk.ru', 'good2002', 'b609d06900796189d434146d7bb2d9e2', 'NULL', NULL, 0),
(38, '100001@student.spb-rtk.ru', 'good2002', 'b609d06900796189d434146d7bb2d9e2', 'NULL', NULL, 3),
(39, '100001@student.spb-rtk.ru', 'good2002', 'b609d06900796189d434146d7bb2d9e2', 'NULL', NULL, 0),
(40, '100001@student.spb-rtk.ru', 'good2002', 'b609d06900796189d434146d7bb2d9e2', 'NULL', NULL, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `flights`
--
ALTER TABLE `flights`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
