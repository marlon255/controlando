-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 03-Mar-2016 às 20:15
-- Versão do servidor: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `controle`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filial`
--

CREATE TABLE IF NOT EXISTS `filial` (
`id` int(10) NOT NULL,
  `cnpj` varchar(25) NOT NULL,
  `nome_fantas` varchar(25) NOT NULL,
  `nume_filial` varchar(25) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `cidade` varchar(35) NOT NULL,
  `data_abertura` varchar(25) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `filial`
--

INSERT INTO `filial` (`id`, `cnpj`, `nome_fantas`, `nume_filial`, `estado`, `cidade`, `data_abertura`) VALUES
(9, 's', 's', 's', 's', 's', 's');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE IF NOT EXISTS `fornecedor` (
`id` int(10) NOT NULL,
  `cnpj` varchar(35) NOT NULL,
  `social` varchar(35) NOT NULL,
  `fantasia` varchar(35) NOT NULL,
  `estadual` varchar(35) NOT NULL,
  `municipal` varchar(35) NOT NULL,
  `estado` varchar(35) NOT NULL,
  `cidade` varchar(35) NOT NULL,
  `telefone` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id`, `cnpj`, `social`, `fantasia`, `estadual`, `municipal`, `estado`, `cidade`, `telefone`, `email`) VALUES
(1, 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
`id` int(10) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `cargo` varchar(35) NOT NULL,
  `nivel` int(1) NOT NULL,
  `cpf` varchar(35) NOT NULL,
  `telefone` varchar(35) NOT NULL,
  `endereco` varchar(65) NOT NULL,
  `filial` varchar(35) NOT NULL,
  `data` varchar(35) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `cargo`, `nivel`, `cpf`, `telefone`, `endereco`, `filial`, `data`) VALUES
(1, 's', 's', 0, 's', 's', 's', 's', 's'),
(2, 'd', 'd', 0, 'd', 'd', 'd', 's', 'd'),
(3, 'd', 'd', 0, 'd', 'd', 'd', 's', 'd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filial`
--
ALTER TABLE `filial`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filial`
--
ALTER TABLE `filial`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
