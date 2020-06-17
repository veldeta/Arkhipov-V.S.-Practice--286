-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 17 2020 г., 20:31
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
  `Departure` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Arrivals` time NOT NULL,
  `Time in sky` time NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `flights`
--

INSERT INTO `flights` (`ID`, `Where from`, `__Where__`, `Day`, `Departure`, `Arrivals`, `Time in sky`, `price`) VALUES
(1, 'Омск', 'Москва', '2020-06-13', '10:10:00', '10:10:00', '10:10:00', 2999),
(3, 'Санкт-Петербург', 'Москва', '2020-06-14', '10:10:00', '10:10:00', '10:10:00', 1999),
(5, 'Москва', 'Уфа', '2020-06-27', '20:00:00', '23:59:00', '03:59:00', 5990),
(6, 'Омск', 'Москва', '2020-06-13', '10:10:00', '12:10:00', '02:00:00', 1000),
(7, 'Омск', 'Москва', '2020-06-16', '10:10:00', '12:10:00', '02:00:00', 1000);

-- --------------------------------------------------------

--
-- Структура таблицы `history`
--

CREATE TABLE `history` (
  `ID` int(11) NOT NULL,
  `Ticketing_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `of_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `history`
--

INSERT INTO `history` (`ID`, `Ticketing_id`, `user_id`, `of_id`) VALUES
(1, 3, NULL, 0),
(4, 3, NULL, 0),
(5, 3, 19, 0),
(6, 5, 48, 0),
(7, 3, 19, 2),
(8, 3, 48, 3),
(9, 1, 48, 3),
(10, 1, 48, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
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
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Surname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `email`, `login`, `password`, `name`, `Surname`, `role`) VALUES
(17, '100001@student.spb-rtk.ru', 'good2002', '1234567980', 'NULL', NULL, 0),
(18, 'Tor34599@mail.ru', 'TorVelikiy', 'ab933ddd8fde64f047f2b3aadeaee413', 'NULL', NULL, 0),
(19, '100001@student.spb-rtk.ru', 'good2002', 'b609d06900796189d434146d7bb2d9e2', 'NULL', NULL, 0),
(37, '100001@student.spb-rtk.ru', 'good2002', 'b609d06900796189d434146d7bb2d9e2', 'NULL', NULL, 0),
(38, '100001@student.spb-rtk.ru', 'good2002', 'b609d06900796189d434146d7bb2d9e2', 'NULL', NULL, 3),
(39, 'dodo89207@gmail.com', 'Pop2000pop', '25f9e794323b453885f5181f1b624d0b', 'NULL', NULL, 0),
(48, 'terminatorslava38@gmail.com', 'veldeta1', '18deea7d72445b39f19c07cf41cedeba', 'Вячеслав', 'Архипов', 1);

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
-- Индексы таблицы `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Ticketing_id` (`Ticketing_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`) USING BTREE;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `history`
--
ALTER TABLE `history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`Ticketing_id`) REFERENCES `flights` (`ID`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
