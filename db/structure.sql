-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Out-2020 às 02:14
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
-- Banco de dados: `db_ecommerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_birthday` date NOT NULL,
  `user_genre` enum('male','female','other') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_birthday`, `user_genre`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', '2001-07-03', 'other'),
(4, 'Rick Sanchez', 'rsanchez@galaxy.com', 'hotplanets', '1974-03-18', 'male'),
(5, 'Connor Mason', 'cmason@nbt.com', 'moralpanic123', '1991-10-23', 'male'),
(6, 'Lucas Mesquita', 'lucas.msouza@senac.com', 'lms03701', '2001-07-03', 'male'),
(7, 'Cassie', 'cassie@beta.com', 'becassie', '1997-05-18', 'other'),
(8, 'Patrick', 'pocket@trick.com', 'ptrix', '1985-12-05', 'other'),
(9, 'Casey Gardner', 'casey.gard@hotmail.com', 'caseygard', '1999-09-18', 'female');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user-email` (`user_email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
