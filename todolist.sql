-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 23 2020 г., 22:00
-- Версия сервера: 8.0.21
-- Версия PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `todolist`
--

-- --------------------------------------------------------

--
-- Структура таблицы `task_list`
--

DROP TABLE IF EXISTS `task_list`;
CREATE TABLE IF NOT EXISTS `task_list` (
  `task_list_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `task_details` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `task_status` enum('no','yes') CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`task_list_id`),
  UNIQUE KEY `task_list_id_2` (`task_list_id`,`user_id`,`task_details`,`task_status`),
  KEY `task_list_id` (`task_list_id`,`user_id`,`task_details`,`task_status`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Дамп данных таблицы `task_list`
--

INSERT INTO `task_list` (`task_list_id`, `user_id`, `task_details`, `task_status`) VALUES
(14, 1, 'a', 'no'),
(15, 1, '?', 'no');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
