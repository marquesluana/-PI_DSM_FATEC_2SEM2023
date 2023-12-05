-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12-Out-2023 às 17:31
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hcc_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'Evento_1', '#587578', '2023-11-16 10:05:00', '2023-11-16 11:05:00'),
(2, 'Evento_2', '#587578', '2023-11-18 10:06:00', '2023-11-18 11:06:00'),
(3, 'Evento_3', '#587578', '2023-11-20 10:07:00', '2023-11-20 11:07:00'),
(4, 'Evento_4', '#587578', '2023-11-23 10:08:00', '2023-11-23 11:08:00'),
(5, 'Evento_5', '#587578', '2023-11-25 10:09:00', '2023-11-26 11:09:00'),
(6, 'Evento_6', '#587578', '2023-11-27 10:10:00', '2023-11-27 11:10:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
