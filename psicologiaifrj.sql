-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2022 às 23:24
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `psicologiaifrj`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `datas`
--

CREATE TABLE `datas` (
  `data_disponivel` tinyint(1) NOT NULL DEFAULT 1,
  `id` int(11) NOT NULL,
  `data_disponibilizada` datetime NOT NULL,
  `data_disponibilizacao` datetime NOT NULL,
  `cor` varchar(20) DEFAULT '#007bff',
  `mensagem` varchar(30) DEFAULT 'Horario Disponível'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `datas`
--

INSERT INTO `datas` (`data_disponivel`, `id`, `data_disponibilizada`, `data_disponibilizacao`, `cor`, `mensagem`) VALUES
(0, 13, '2022-12-10 12:00:00', '2022-12-03 18:17:55', 'gray', 'Horario Ocupado'),
(0, 14, '2022-12-18 17:00:00', '2022-12-03 18:18:09', 'gray', 'Horario Ocupado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(120) NOT NULL,
  `email` varchar(130) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `matricula` varchar(70) NOT NULL,
  `id` int(11) NOT NULL,
  `psicologo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `senha`, `matricula`, `id`, `psicologo`) VALUES
('', 'rubemcorrea0@gmail.com', '202cb962ac59075b964b07152d234b70', '20220000', 1, 0),
('Henrique', 'henrique@psicologo.com', 'fcc62e4b46054142a897b38b9025da4d', 'null', 2, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `datas`
--
ALTER TABLE `datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
