-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2020 г., 18:08
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
-- База данных: `productdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `description` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `description`, `product_price`, `product_image`) VALUES
(1, 'Мешочек', 'Мешочек из хлопка с принтом 27*33 см', 300, 'assets/img/product_1.jpg'),
(2, 'Массажер', 'Массажер для лица роликовый кварцевый', 1500, 'assets/img/product_2.jpg'),
(3, 'Стакан', 'Стеклянный стакан для зубных щеток черный', 270, 'assets/img/product_3.jpg'),
(4, 'Крем', 'Увлажняющий крем для лица', 540, 'assets/img/product_5.jpg'),
(5, 'Хлопковый диск', 'Многоразовые диски из  органического хлопка', 180, 'assets/img/product_6.jpg'),
(6, 'Люфа', 'Универсальная экологическая люфа', 290, 'assets/img/product_7.jpg'),
(7, 'Трубочка', 'Экологическая многоразовая трубочка', 340, 'assets/img/product_8.jpg'),
(8, 'Подставка', 'Эко подставка из семен льна', 510, 'assets/img/product_9.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
