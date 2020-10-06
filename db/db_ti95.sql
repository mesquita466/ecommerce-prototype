-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Out-2020 às 08:36
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_ti95`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_login`
--

INSERT INTO `tb_login` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Lucas Mesquita de Souza', 'lucas.msouza@senac.com', 'admin'),
(3, 'joji', 'sushitrash@hotmail.com', 'nectar123'),
(5, 'casey', 'caseygard@hotmail.com', 'cass3141'),
(7, 'Alexander O\'Connor', 'rexoc@hotmail.com', 'pony123'),
(8, 'Connor Mason', 'mason.connor@hotmail.com', 'moralpanic123'),
(9, 'luquita', 'luquita@maluco.com', 'luquita123'),
(10, 'brand', 'brandfire@rune.com', 'brand123'),
(11, 'carlin', 'casa@aberta.com', 'carl123'),
(12, 'sonin', 'blenin@sinin.com', 'clever'),
(13, 'alexandre', 'xandao@super.com', 'xandao123'),
(14, 'random', 'random@random.com', 'random'),
(15, 'random2', 'random2@random.com', 'random2'),
(16, 'aang', 'aang@bender.com', 'katara123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD KEY `senha` (`senha`) USING BTREE;

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
