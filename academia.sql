-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Nov-2014 às 13:29
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `academia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) DEFAULT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `bairro` varchar(60) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `cidade` varchar(95) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `vencimento` int(11) NOT NULL DEFAULT '10',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `cpf`, `telefone`, `endereco`, `bairro`, `numero`, `complemento`, `cep`, `cidade`, `estado`, `vencimento`, `created`, `modified`) VALUES
(1, 'Gregori Dalzotto', '007.769.870-55', '(48) 9932-7881', 'Dr. Antonio Santaella', 'Canasvieiras', '111', '301', '95220-000', 'FlorianÃ³polis', 'SC', 10, '2014-11-20 17:23:24', '2014-11-26 01:44:01'),
(2, 'Oscar Alho', '', '', '', NULL, '', '', '', '', '', 1, '2014-11-21 00:38:44', '2014-11-21 00:38:44'),
(3, 'Greg', '', '', '', NULL, '', '', '', '', '', 1, '2014-11-21 00:40:11', '2014-11-21 00:40:11'),
(4, 'Naty', '', '', '', NULL, '', '', '', '', '', 4, '2014-11-21 00:40:53', '2014-11-21 00:40:53'),
(5, 'Morgan Freeman', '', '', '', NULL, '', '', '', '', '', 3, '2014-11-21 00:45:29', '2014-11-21 00:45:29'),
(6, 'John Doe', '', '', '', NULL, '', '', '', '', '', 2, '2014-11-21 00:48:23', '2014-11-21 00:48:23'),
(7, 'Member Nunes', '', '(54) 9900-0990', '', '', '222222222222222222222222222222222222222222222', '', '', '', '', 1, '2014-11-21 00:50:00', '2014-11-24 21:52:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_has_modalidades`
--

CREATE TABLE IF NOT EXISTS `alunos_has_modalidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modalidade_id` int(11) NOT NULL,
  `aluno_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `alunos_has_modalidades`
--

INSERT INTO `alunos_has_modalidades` (`id`, `modalidade_id`, `aluno_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensalidades`
--

CREATE TABLE IF NOT EXISTS `mensalidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0 - a vencer\n1 - vencida\n2 - paga',
  `valor` decimal(9,2) DEFAULT NULL,
  `valor_pago` decimal(9,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `mensalidades`
--

INSERT INTO `mensalidades` (`id`, `aluno_id`, `data`, `status`, `valor`, `valor_pago`, `created`, `modified`) VALUES
(1, 1, '2014-12-23', 0, '106.00', NULL, '2014-11-24 00:00:00', '2014-11-26 01:38:57'),
(2, 1, '2014-11-23', 2, '100.00', '100.00', NULL, '2014-11-26 01:33:27'),
(11, 1, '2015-01-23', 0, '98.00', '98.00', '2014-11-26 02:41:54', '2014-11-26 02:41:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidades`
--

CREATE TABLE IF NOT EXISTS `modalidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `modalidades`
--

INSERT INTO `modalidades` (`id`, `nome`, `status`, `created`, `modified`) VALUES
(1, 'Jiu Jitsu', '1', '2014-11-20 17:24:23', '2014-11-24 22:18:42'),
(3, 'MusculaÃ§Ã£o', '1', '2014-11-24 22:20:10', '2014-11-24 22:20:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
