-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 12 2015 г., 17:16
-- Версия сервера: 5.5.45
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `game_db`
--
CREATE DATABASE IF NOT EXISTS `game_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `game_db`;

-- --------------------------------------------------------

--
-- Структура таблицы `GAMES_T`
--

DROP TABLE IF EXISTS `GAMES_T`;
CREATE TABLE IF NOT EXISTS `GAMES_T` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `unknown_number` int(4) NOT NULL,
  `score` int(11) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`game_id`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

-- --------------------------------------------------------

--
-- Структура таблицы `GAMETAB_T`
--

DROP TABLE IF EXISTS `GAMETAB_T`;
CREATE TABLE IF NOT EXISTS `GAMETAB_T` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `value` int(6) NOT NULL,
  PRIMARY KEY (`att_id`),
  KEY `game_id` (`game_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=101 ;

-- --------------------------------------------------------

--
-- Структура таблицы `USERS_T`
--

DROP TABLE IF EXISTS `USERS_T`;
CREATE TABLE IF NOT EXISTS `USERS_T` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `GAMES_T`
--
ALTER TABLE `GAMES_T`
  ADD CONSTRAINT `games_t_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `USERS_T` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `GAMETAB_T`
--
ALTER TABLE `GAMETAB_T`
  ADD CONSTRAINT `gametab_t_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `GAMES_T` (`game_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
