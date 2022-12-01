-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 03/09/2022 às 16:19
-- Versão do servidor: 8.0.29-0ubuntu0.20.04.3
-- Versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `contabil`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `gestao`
--

CREATE TABLE `gestao` (
  `id` int NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `saldo` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `gestao`
--

INSERT INTO `gestao` (`id`, `nome`, `saldo`) VALUES
(2, 'cafe', 20),
(3, 'arroz', 10),
(4, 'açurca', 5.5),
(5, 'maizena', 5),
(6, 'quijo', 230),
(7, 'presunto', 42),
(8, 'pão', 25),
(9, 'koco', 1510),
(10, 'koco', 1510),
(11, 'coco', 10),
(12, 'kokar', 16),
(13, 'lola', 20),
(14, 'lola', 20),
(15, 'lola', 20),
(16, 'lola', 20),
(17, 'lola', 20),
(18, 'lola', 20),
(19, 'lola', 20),
(20, 'lola', 20),
(21, 'lola', 20),
(22, 'lola', 20),
(23, 'lola', 20),
(24, 'lola', 20),
(25, 'lola', 20),
(26, 'lola', 20),
(27, 'lola', 20),
(28, 'lola', 20),
(29, 'lola', 20),
(30, 'lola', 20),
(31, 'lola', 20),
(32, 'lola', 20),
(33, 'lola', 20),
(34, 'lola', 20),
(35, 'lola', 20),
(36, 'lola', 20),
(37, 'lola', 20),
(38, 'lola', 20),
(39, 'lola', 20),
(40, 'lola', 20),
(41, 'lola', 20),
(42, 'lola', 20),
(43, 'lola', 20),
(44, 'lola', 20),
(45, 'lola', 20),
(46, 'lola', 20),
(47, 'lola', 20),
(48, 'lola', 20),
(49, 'lola', 20),
(50, 'lola', 20),
(51, 'lola', 20),
(52, 'lola', 20),
(53, 'lola', 20),
(54, 'lola', 20),
(55, 'lola', 20),
(56, 'lola', 20),
(57, 'lola', 20),
(58, 'lola', 20),
(59, 'lola', 20),
(60, 'lola', 20),
(61, 'lola', 20),
(62, 'lola', 20),
(63, 'lola', 20),
(64, 'lola', 20),
(65, 'lola', 20),
(66, 'lola', 20),
(67, 'lola', 20),
(68, 'lola', 20),
(69, 'lola', 20),
(70, 'lola', 20),
(71, 'lola', 20),
(72, 'lola', 20),
(73, 'lola', 20),
(74, 'lola', 20),
(75, 'lola', 20),
(76, 'lola', 20),
(77, 'lola', 20),
(78, 'lola', 20),
(79, 'lola', 20),
(80, 'lola', 20),
(81, 'lola', 20),
(82, 'lola', 20),
(83, 'lola', 20),
(84, 'lola', 20),
(85, 'lola', 20),
(86, 'lola', 20),
(87, 'lola', 20),
(88, 'lola', 20),
(89, 'lola', 20),
(90, 'lola', 20),
(91, 'lola', 20),
(92, 'lola', 20),
(93, 'lola', 20),
(94, 'lola', 20),
(95, 'lola', 20),
(96, 'lola', 20),
(97, 'lola', 20),
(98, 'lola', 20),
(99, 'lola', 20),
(100, 'lola', 20),
(101, 'lola', 20),
(102, 'lola', 20),
(103, 'lola', 20),
(104, 'lola', 20),
(105, 'lola', 20),
(106, 'lola', 20),
(107, 'lola', 20),
(108, 'lola', 20),
(109, 'lola', 20),
(110, 'lola', 20),
(111, 'lola', 20),
(112, 'lola', 20),
(113, 'lola', 20),
(114, 'lola', 20),
(115, 'lola', 20),
(116, 'lola', 20),
(117, 'lola', 20),
(118, 'lola', 20),
(119, 'lola', 20),
(120, 'lola', 20),
(121, 'lola', 20),
(122, 'lola', 20),
(123, 'lola', 20),
(124, 'lola', 20),
(125, 'lola', 20),
(126, 'lola', 20),
(127, 'lola', 20),
(128, 'lola', 20),
(129, 'lola', 20),
(130, 'lola', 20),
(131, 'lola', 20),
(132, 'lola', 20),
(133, 'lola', 20),
(134, 'lola', 20),
(135, 'lola', 20),
(136, 'lola', 20),
(137, 'lola', 20),
(138, 'lola', 20),
(139, 'lola', 20),
(140, 'lola', 20),
(141, 'lola', 20),
(142, 'lola', 20),
(143, 'lola', 20),
(144, 'lola', 20),
(145, 'lola', 20),
(146, 'lola', 20),
(147, 'lola', 20),
(148, 'lola', 20),
(149, 'lola', 20),
(150, 'lola', 20),
(151, 'lola', 20),
(152, 'lola', 20),
(153, 'lola', 20),
(154, 'lola', 20),
(155, 'lola', 20),
(156, 'lola', 20),
(157, 'lola', 20),
(158, 'lola', 20),
(159, 'lola', 20),
(160, 'lola', 16);

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'lucas', 'lucas2000@gamil.com', '123456'),
(2, NULL, 'paulo@gmail.com', '123456');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `gestao`
--
ALTER TABLE `gestao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `gestao`
--
ALTER TABLE `gestao`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
