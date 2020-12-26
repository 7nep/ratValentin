-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 26 2020 г., 22:47
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `teatr`
--

-- --------------------------------------------------------

--
-- Структура таблицы `afisha`
--

CREATE TABLE `afisha` (
  `ID` int(20) NOT NULL,
  `Название` varchar(200) NOT NULL,
  `Дата` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `bileti`
--

CREATE TABLE `bileti` (
  `ID` int(25) NOT NULL,
  `Price` varchar(225) NOT NULL,
  `Name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `bileti`
--

INSERT INTO `bileti` (`ID`, `Price`, `Name`) VALUES
(1, '500', 'Gachi muchi');

-- --------------------------------------------------------

--
-- Структура таблицы `kontakti`
--

CREATE TABLE `kontakti` (
  `ID` int(20) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `phone number` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `novosti`
--

CREATE TABLE `novosti` (
  `ID` int(25) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Data` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `afisha`
--
ALTER TABLE `afisha`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `bileti`
--
ALTER TABLE `bileti`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `kontakti`
--
ALTER TABLE `kontakti`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `afisha`
--
ALTER TABLE `afisha`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `bileti`
--
ALTER TABLE `bileti`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `kontakti`
--
ALTER TABLE `kontakti`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `afisha`
--
ALTER TABLE `afisha`
  ADD CONSTRAINT `afisha_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `bileti` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
