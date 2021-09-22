-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 26-Jun-2021 às 21:41
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
-- Banco de dados: `bdFilme`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbFilme`
--

CREATE TABLE `tbFilme` (
  `idFilme` int(11) NOT NULL,
  `nomeFilme` varchar(40) NOT NULL,
  `anoFilme` int(11) DEFAULT NULL,
  `notaFilme` int(11) NOT NULL,
  `comentFilme` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbFilme`
--

INSERT INTO `tbFilme` (`idFilme`, `nomeFilme`, `anoFilme`, `notaFilme`, `comentFilme`) VALUES
(1, 'Shrek 2', 2004, 10, 'Melhor filme que eu já vi na vida, bom demais'),
(2, 'Shrek 1', 2001, 9, 'muito bom mas o 2 é melhor'),
(3, 'La la land', 2019, 5, 'final horrivel'),
(4, 'Shrek terceiro', 2007, 10, 'não lembro desse só queria cadastrar mesmo'),
(5, 'Shrek Para Sempre', 2010, 10, ''),
(6, 'pf funciona', 2001, 3, 'nao aguento mais'),
(54, 'bxws', 2000, 3, 'dw'),
(55, ' nce', 2000, 3, 'de'),
(56, 'dfej', 2000, 3, 'fr'),
(57, 'kjhkj', 2000, 3, 'kjhk'),
(58, 'diu', 2000, 3, 'de'),
(61, 'Teste ultimate', 2001, 9, 'mt bao');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbFilme`
--
ALTER TABLE `tbFilme`
  ADD PRIMARY KEY (`idFilme`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbFilme`
--
ALTER TABLE `tbFilme`
  MODIFY `idFilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
