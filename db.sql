-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 14 2021 г., 04:15
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
-- База данных: `pros`
--
CREATE DATABASE IF NOT EXISTS `pros` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pros`;

-- --------------------------------------------------------

--
-- Структура таблицы `bases`
--

CREATE TABLE `bases` (
  `base_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `location` varchar(255) NOT NULL,
  `images` blob NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `services` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `bron`
--

CREATE TABLE `bron` (
  `bron_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `base_name` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bron`
--

INSERT INTO `bron` (`bron_id`, `user_id`, `base_name`, `service`, `date`, `price`) VALUES
(1, 3, 'Турбаза \'Танхай\'', '1,2,3,4', '2021-03-25', 2300),
(2, 3, 'Турбаза \'Песчаная гора\'', '1,2,3,4', '2021-03-25', 5000);

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `base_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `base_name`, `name`, `price`) VALUES
(1, 'Турбаза \'Песчаная гора\'', 'Аренда гостевого домика', 2200),
(2, 'Турбаза \'Песчаная гора\'', 'Аренда летнего домика', 1700),
(3, 'Турбаза \'Песчаная гора\'', 'Аренда палатки', 1500),
(4, 'Турбаза \'Песчаная гора\'', 'Баня', 300),
(9, 'Турбаза \'Песчаная гора\'', 'Выезд на рыбалку (на лодку)', 1000),
(10, 'Турбаза \'Танхай\'', 'Аренда гостевого дома (на одного человека на день до 23:00 часов)', 500),
(11, 'Турбаза \'Танхай\'', 'Аренда гостевого дома (на одного человека в сутки)', 1000),
(12, 'Турбаза \'Танхай\'', 'Аренда гаража (одна машина вместимость ограничена)', 300),
(13, 'Турбаза \'Танхай\'', 'Аренда игрового дома на одного человека (до 23:00 часов)', 500),
(14, 'Турбаза \'Кэнкэмэ\'', 'Трансфер НАМЦЫ-КЭНКЭМЭ-НАМЦЫ (микроавтобус на 7 мест М/T: 89141105935)', 5000),
(15, 'Турбаза \'Кэнкэмэ\'', 'Трансфер ЯКУТСК-КЭНКЭМЭ-ЯКУТСК (микроавтобус на 7 мест М/T: 89141105935)', 9000),
(16, 'Турбаза \'Кэнкэмэ\'', 'Аренда кафе (от 10 человек, цена за одного человека, М/Т: 89141105935)', 500),
(17, 'Турбаза \'Кэнкэмэ\'', 'Аренда дома на сутки (на 7 человек) + 1 человек 500\r\nВремя заезда 14:00\r\nВремя выезда 12:00', 7000),
(20, 'Турбаза \'Кэнкэмэ\'', 'Аренда домика на день (М/Т: 89141105935)', 5000);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `number` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `lastname`, `number`, `password`) VALUES
(3, 'k.kulichkin@mail.ru', 'Кеша', 'Куличкин', '89992448733', '202cb962ac59075b964b07152d234b70'),
(6, 'memories53@mail.ru', 'Роберт', 'Алексеев', '123123123', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bases`
--
ALTER TABLE `bases`
  ADD PRIMARY KEY (`base_id`);

--
-- Индексы таблицы `bron`
--
ALTER TABLE `bron`
  ADD PRIMARY KEY (`bron_id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT для таблицы `bases`
--
ALTER TABLE `bases`
  MODIFY `base_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `bron`
--
ALTER TABLE `bron`
  MODIFY `bron_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
