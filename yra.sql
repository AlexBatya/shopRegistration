-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 09 2023 г., 13:19
-- Версия сервера: 10.5.17-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yra`
--

-- --------------------------------------------------------

--
-- Структура таблицы `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `request`
--

INSERT INTO `request` (`id`, `img`, `text`, `user_id`, `status`, `price`, `title`) VALUES
(5, 'uploads/1678023427video-transformed.png', 'Сломалась видеокарта скорее всего умер чип', 2, 'ОТРЕМОНИРОВАННО', 500, 'Ремонт видеокарты'),
(6, 'uploads/16780235051591784168084_bulletin-transformed.png', 'Надо заменить аудио модуль', 2, 'РЕМОНИТИРУЕТЬСЯ', 1500, 'Ремонт матплаты'),
(7, 'uploads/167802355027849_original-transformed.png', 'Надо заменить чип памяти', 2, 'ОТРЕМОНИРОВАННО', 5000, 'Ремонт оперативной памяти'),
(8, 'uploads/16780235969ef4126c4f15527ab8973fc65bb8bc1a-transformed.png', 'Черный экран когда вставляю процессор', 2, 'ОТРЕМОНИРОВАННО', 8000, 'Ремонт процессора'),
(9, 'uploads/16780272929ef4126c4f15527ab8973fc65bb8bc1a-transformed.png', 'Тротлинг проца, без нагрузки на Гп', 5, 'НА РАССМОТРЕНИЕ', 0, ''),
(10, 'uploads/1678027319video-transformed.png', 'Нужен ребол чипа старый сдох ', 5, 'НА РАССМОТРЕНИЕ', 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `login`, `email`, `password`) VALUES
(4, 'картошка ', 'грибами', '228228', 'zcxvwd@bk.ru', '123456'),
(5, 'Юрий', 'Каргин', 'admin', 'kargiba@mail.ru', 'qweqwe');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
