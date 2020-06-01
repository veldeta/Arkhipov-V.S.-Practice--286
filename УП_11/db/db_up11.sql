-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 30 2020 г., 12:45
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
-- База данных: `db_up11`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `admin_profile`
--

CREATE TABLE `admin_profile` (
  `ID` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `back`
--

CREATE TABLE `back` (
  `ID` int(11) NOT NULL,
  `_date_` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `class`
--

CREATE TABLE `class` (
  `ID` int(11) NOT NULL,
  `Class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `data_user`
--

CREATE TABLE `data_user` (
  `ID` int(11) NOT NULL,
  `Password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_id` int(11) NOT NULL,
  `History_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `day`
--

CREATE TABLE `day` (
  `ID` int(11) NOT NULL,
  `__date__` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Структура таблицы `history`
--

CREATE TABLE `history` (
  `ID` int(11) NOT NULL,
  `Ticketing_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `passenger`
--

CREATE TABLE `passenger` (
  `ID` int(11) NOT NULL,
  `Passenger` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `profile`
--

CREATE TABLE `profile` (
  `ID` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `search`
--

CREATE TABLE `search` (
  `ID` int(11) NOT NULL,
  `Where from_id` int(11) NOT NULL,
  `__Where__id` int(11) NOT NULL,
  `Day_id` int(11) NOT NULL,
  `Back_id` int(11) NOT NULL,
  `Flights_id` int(11) NOT NULL,
  `Passenger_id` int(11) NOT NULL,
  `Class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `ticketing`
--

CREATE TABLE `ticketing` (
  `ID` int(11) NOT NULL,
  `search_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `where from`
--

CREATE TABLE `where from` (
  `ID` int(11) NOT NULL,
  `Cite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `__where__`
--

CREATE TABLE `__where__` (
  `ID` int(11) NOT NULL,
  `Cite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Индексы таблицы `back`
--
ALTER TABLE `back`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `History_id` (`History_id`);

--
-- Индексы таблицы `day`
--
ALTER TABLE `day`
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
  ADD KEY `Ticketing_id` (`Ticketing_id`);

--
-- Индексы таблицы `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Admin_id` (`Admin_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Индексы таблицы `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Where from_id` (`Where from_id`),
  ADD KEY `__Where__id` (`__Where__id`),
  ADD KEY `Day_id` (`Day_id`),
  ADD KEY `Back_id` (`Back_id`),
  ADD KEY `Passenger_id` (`Passenger_id`),
  ADD KEY `Class_id` (`Class_id`),
  ADD KEY `Flights_id` (`Flights_id`);

--
-- Индексы таблицы `ticketing`
--
ALTER TABLE `ticketing`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `search_id` (`search_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `where from`
--
ALTER TABLE `where from`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `__where__`
--
ALTER TABLE `__where__`
  ADD PRIMARY KEY (`ID`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD CONSTRAINT `admin_profile_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`ID`);

--
-- Ограничения внешнего ключа таблицы `data_user`
--
ALTER TABLE `data_user`
  ADD CONSTRAINT `data_user_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `data_user_ibfk_2` FOREIGN KEY (`History_id`) REFERENCES `history` (`ID`);

--
-- Ограничения внешнего ключа таблицы `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`Ticketing_id`) REFERENCES `ticketing` (`ID`);

--
-- Ограничения внешнего ключа таблицы `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`Admin_id`) REFERENCES `admin` (`ID`),
  ADD CONSTRAINT `profile_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `user` (`ID`);

--
-- Ограничения внешнего ключа таблицы `search`
--
ALTER TABLE `search`
  ADD CONSTRAINT `search_ibfk_1` FOREIGN KEY (`Where from_id`) REFERENCES `where from` (`ID`),
  ADD CONSTRAINT `search_ibfk_2` FOREIGN KEY (`__Where__id`) REFERENCES `__where__` (`ID`),
  ADD CONSTRAINT `search_ibfk_3` FOREIGN KEY (`Day_id`) REFERENCES `day` (`ID`),
  ADD CONSTRAINT `search_ibfk_4` FOREIGN KEY (`Back_id`) REFERENCES `back` (`ID`),
  ADD CONSTRAINT `search_ibfk_5` FOREIGN KEY (`Passenger_id`) REFERENCES `passenger` (`ID`),
  ADD CONSTRAINT `search_ibfk_6` FOREIGN KEY (`Class_id`) REFERENCES `class` (`ID`),
  ADD CONSTRAINT `search_ibfk_7` FOREIGN KEY (`Flights_id`) REFERENCES `flights` (`ID`);

--
-- Ограничения внешнего ключа таблицы `ticketing`
--
ALTER TABLE `ticketing`
  ADD CONSTRAINT `ticketing_ibfk_1` FOREIGN KEY (`search_id`) REFERENCES `search` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
