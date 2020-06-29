-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2020 г., 18:07
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ecoproduct`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `title`, `image`, `Description`, `price`) VALUES
(1, 'Крем', 'product_5.jpg', 'Этот потрясающий увлажняющий крем для лица можно использовать в любое время дня как на лице, так и теле, он отлично подходит для всех типов кожи!', 850),
(2, 'Хлопковый диск', 'product_6.jpg', 'Эти многоразовые диски для лица сделаны из двух слоев 100% органического хлопка - устойчивая, экологичная, супермягкая альтернатива. ', 350),
(3, 'Люфа', 'product_7.jpg', 'Прекрасная альтернатива пластиковым губкам для посуды и пластиковым мочалкам для ванн. Используйте  экологически чистую люфу для мытья посуды, естественного отшелушивания кожи, очистки раковин, ванн и многого другого!', 260),
(7, 'Мешочек', 'product_1.jpg', 'Мешочек из хлопка с принтом размера 27*33 см.', 300),
(8, 'Массажер для лица\r\n\r\n', 'product_2.jpg', 'Массажер для лица роликовый кварцевый.', 1500),
(9, 'Стакан', 'product_3.jpg', 'Стеклянный стакан для зубных щеток черный.', 400);

-- --------------------------------------------------------

--
-- Структура таблицы `new`
--

CREATE TABLE `new` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `new`
--

INSERT INTO `new` (`id`, `title`, `image`, `price`, `description`) VALUES
(1, 'Мешочек', 'product_1.jpg', 300, 'Мешочек из хлопка с принтом размера 27*33 см.'),
(2, 'Массажер для лица', 'product_2.jpg', 1500, 'Массажер для лица роликовый кварцевый.'),
(3, 'Стакан', 'product_3.jpg', 400, 'Стеклянный стакан для зубных щеток черный.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `new`
--
ALTER TABLE `new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
