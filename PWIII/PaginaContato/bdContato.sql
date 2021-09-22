-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 19-Mar-2021 às 01:46
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdContato`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbContato`
--

CREATE TABLE `tbContato` (
  `idContato` int(11) NOT NULL,
  `nomeContato` varchar(50) DEFAULT NULL,
  `emailContato` varchar(50) DEFAULT NULL,
  `assuntoContato` varchar(30) DEFAULT NULL,
  `mensagemContato` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbContato`
--

INSERT INTO `tbContato` (`idContato`, `nomeContato`, `emailContato`, `assuntoContato`, `mensagemContato`) VALUES
(1, 'mariana', 'mariana@email.com', 'teste', 'Essa é uma mensagem teste.'),
(2, 'Mari', 'email@exemplo.com', 'Assunto', 'Esse é um segundo teste.'),
(3, 'Mari', 'email@exemplo.com', 'Assunto', 'Esse é um terceiro teste.'),
(8, 'Mari', 'email@exemplo.com', 'Assunto', 'Esse é um quarto teste.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbContato`
--
ALTER TABLE `tbContato`
  ADD PRIMARY KEY (`idContato`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbContato`
--
ALTER TABLE `tbContato`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
