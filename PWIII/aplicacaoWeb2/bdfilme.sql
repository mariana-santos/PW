-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jun-2021 às 03:08
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdfilme`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfilme`
--

CREATE TABLE `tbfilme` (
  `idFilme` int(11) NOT NULL,
  `nomeFilme` varchar(40) NOT NULL,
  `anoFilme` int(11) DEFAULT NULL,
  `notaFilme` int(11) NOT NULL,
  `comentFilme` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbfilme`
--

INSERT INTO `tbfilme` (`idFilme`, `nomeFilme`, `anoFilme`, `notaFilme`, `comentFilme`) VALUES
(1, 'Shrek 2', 2004, 10, 'Melhor filme que eu já vi na vida, bom demais'),
(3, 'Shrek 1', 2001, 9, 'qualquer filme do shrek é a perfeição'),
(4, 'La la land', 2020, 6, 'Ruim.'),
(74, 'Forrest Gump', 1994, 10, 'perfeito'),
(75, 'Carros', 2006, 0, 'só pra entrar na estatística da classe C'),
(76, 'Cats', 2020, 2, 'Não sei, nunca assisti'),
(77, 'Borat', 2020, 10, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbfilme`
--
ALTER TABLE `tbfilme`
  ADD PRIMARY KEY (`idFilme`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbfilme`
--
ALTER TABLE `tbfilme`
  MODIFY `idFilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
