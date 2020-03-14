-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Mar-2020 às 00:08
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `senha` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `tb_login`
--

INSERT INTO `tb_login` (`id`, `email`, `senha`) VALUES
(2, 'thayrone@gmail.com', 'thayrone'),
(3, 'thatha', '123'),
(4, 'teste@gmail.com', '123'),
(5, 'teste@gmail.com', '123'),
(6, 'teste@gmail.com', '123'),
(7, 'teste@gmail.com', '123'),
(8, 'teste@gmail.com', '123'),
(9, 'teste@gmail.com', '202cb962ac59075b964b07152d234b'),
(10, 'hum@gmail.com', '202cb962ac59075b964b07152d234b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario_investidor`
--

CREATE TABLE IF NOT EXISTS `tb_usuario_investidor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `cofirmacaoSenha` varchar(32) NOT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `telefone` varchar(30) NOT NULL,
  `investimentoPretendido` double NOT NULL,
  `cpf` int(15) NOT NULL,
  `cep` int(12) NOT NULL,
  `logradouro` varchar(30) NOT NULL,
  `numero_casa` int(10) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `complemento` varchar(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `tb_usuario_investidor`
--

INSERT INTO `tb_usuario_investidor` (`id`, `nome`, `email`, `senha`, `cofirmacaoSenha`, `celular`, `telefone`, `investimentoPretendido`, `cpf`, `cep`, `logradouro`, `numero_casa`, `bairro`, `complemento`, `cidade`, `estado`) VALUES
(2, 'Rasta', 'auu@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0', '0', 0, 0, 0, '', 0, '', '', '', ''),
(5, 'Thayrone', 'thayrone@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0', '0', 0, 0, 0, '', 0, '', '', '', ''),
(9, 'eduarda rocha', 'eduarda@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0', '0', 0, 0, 0, '', 0, '', '', '', ''),
(11, 'gago', 'gago@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0', '0', 0, 0, 0, '', 0, '', '', '', ''),
(12, 'fvs', 'FVS@GMAIL.COM', '202cb962ac59075b964b07152d234b70', '', '0', '0', 0, 0, 0, '', 0, '', '', '', ''),
(13, 'Mauro', 'mauro@hotmail.com', '202cb962ac59075b964b07152d234b70', '123', '', '0', 0, 0, 63500000, 'Rua B', 0, 'Centro', 'Casa', 'IGUATU', 'MG'),
(14, 'JOSE', 'jose@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', '', 0, 0, 0, '', 0, '', '', '', ''),
(17, 'Maria Silva', 'maria@hotmail.com', '202cb962ac59075b964b07152d234b70', '', '', '35810101', 0, 2147483647, 632545, 'RuaB', 32, 'Centro', 'casa', 'ce', 'Ig'),
(18, 'Raimundo Alves', 'raimundo@hotmail.com', '202cb962ac59075b964b07152d234b70', '', '', '35810101', 0, 2147483647, 632545, 'RuaB', 32, 'Centro', 'casa', 'ce', 'BA'),
(19, 'Sol e Brilho LTDA', 'sol@gmail.com', '202cb962ac59075b964b07152d234b70', '', '8892750501', '(11)6565-46546', 0, 2147483647, 63500125, 'RuaB', 40, 'Centro', 'casa', 'BA', 'Ig');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario_startup`
--

CREATE TABLE IF NOT EXISTS `tb_usuario_startup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `cofirmacaoSenha` varchar(32) NOT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `telefone` varchar(30) NOT NULL,
  `cpf` int(15) NOT NULL,
  `cep` int(12) NOT NULL,
  `logradouro` varchar(30) NOT NULL,
  `numero_casa` int(10) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `complemento` varchar(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `tb_usuario_startup`
--

INSERT INTO `tb_usuario_startup` (`id`, `nome`, `email`, `senha`, `cofirmacaoSenha`, `celular`, `telefone`, `cpf`, `cep`, `logradouro`, `numero_casa`, `bairro`, `complemento`, `cidade`, `estado`) VALUES
(1, 'Sol e Lua LTDA', 'sol@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', '35810101', 35852311, 63500000, 'ruab', 40, 'centro', 'ggg', 'iguatu', 'BA'),
(2, 'L&L ServiÃ§os de informatica', 'l@gmail.com', '202cb962ac59075b964b07152d234b70', '', '8892750501', '(11)6565-46546', 12345678, 635241, 'RuaB', 32, 'Centro', 'casa', 'ce', 'Ig');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
