-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 03-Fev-2025 às 00:37
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `aula_php`
--
CREATE DATABASE IF NOT EXISTS `aula_php` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aula_php`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `nome_aluno` varchar(255) NOT NULL,
  `data_nascimento` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_aluno`, `nome_aluno`, `data_nascimento`) VALUES
(1, 'Pedro', '24/05/2005'),
(3, 'joana', '24/05/2009'),
(4, 'janones', '24/05/2002');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_cursos`
--

CREATE TABLE IF NOT EXISTS `alunos_cursos` (
  `id_aluno_curso` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  PRIMARY KEY (`id_aluno_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `alunos_cursos`
--

INSERT INTO `alunos_cursos` (`id_aluno_curso`, `id_aluno`, `id_curso`) VALUES
(7, 1, 7),
(9, 5, 12),
(10, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nome_curso` varchar(255) NOT NULL,
  `carga_horaria` int(11) NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nome_curso`, `carga_horaria`) VALUES
(1, 'java', 222),
(2, 'PHP', 40),
(5, 'pythom', 60);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES
(1, 'root', '202cb962ac59075b964b07152d234b70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
