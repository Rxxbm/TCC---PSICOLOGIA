-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Dez-2022 às 06:28
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
  `id_usuario` int(11) NOT NULL,
  `msg_alunos` varchar(200) NOT NULL,
  `confirm` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `psicologo` tinyint(1) NOT NULL,
  `permitido` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `senha`, `matricula`, `id`, `psicologo`, `permitido`) VALUES
('Rubem Ignacio Corrêa Neto', 'rubemcorrea0@gmail.com', '202cb962ac59075b964b07152d234b70', '20220000', 1, 0, 1),
('Henrique', 'henrique@psicologo.com', 'fcc62e4b46054142a897b38b9025da4d', 'null', 2, 1, 1),
('Giovana Rodrigues Soares', 'giovanarodrigues207@gmail.com', '202cb962ac59075b964b07152d234b70', '2020123769', 3, 0, 1),
('Robert da silva ribeiro', 'robert@gmail.com', '202cb962ac59075b964b07152d234b70', '2020123769', 8, 0, 1),
('teste testando', 'teste@ifrj.com', '202cb962ac59075b964b07152d234b70', '202200005565443', 9, 0, 1),
('as', 'a@email.com', '98f13708210194c475687be6106a3b84', '121212', 10, 0, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
