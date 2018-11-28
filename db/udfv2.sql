-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Nov-2018 às 17:49
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udf-challenge`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(255) NOT NULL,
  `email_aluno` varchar(255) NOT NULL,
  `senha_aluno` varchar(32) NOT NULL,
  `curso_aluno` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome_aluno`, `email_aluno`, `senha_aluno`, `curso_aluno`) VALUES
(19910622, 'Robson Ribeiro', 'robson.robygol@gmail.com', '69727fef27a967e0f67cfece8fd225b8', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `code`
--

CREATE TABLE `code` (
  `id_Code` int(11) NOT NULL,
  `Code_ForRegister` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comunidade`
--

CREATE TABLE `comunidade` (
  `id_comunidade` int(11) NOT NULL,
  `nome_comunidade` varchar(255) NOT NULL,
  `admin_comunidade` int(11) NOT NULL,
  `aluno_id_aluno` int(11) NOT NULL,
  `professor_id_professor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `desafiocomunidade`
--

CREATE TABLE `desafiocomunidade` (
  `id_desafioComunidade` int(11) NOT NULL,
  `prazo_desComu` datetime NOT NULL,
  `descricao_desComu` text NOT NULL,
  `linguagem_desComu` int(11) NOT NULL,
  `dificuldade_desComu` int(11) NOT NULL,
  `correcao_desComu` int(11) NOT NULL,
  `comunidade_id_comunidade` int(11) NOT NULL,
  `comunidade_professor_id_professor` int(11) NOT NULL,
  `comunidade_aluno_id_aluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `desafiogeral`
--

CREATE TABLE `desafiogeral` (
  `id_desafio` int(11) NOT NULL,
  `prazo_desafio` datetime NOT NULL,
  `descricao_desafio` text NOT NULL,
  `linguagem_desafio` int(11) NOT NULL,
  `dificuldade_desafio` int(11) NOT NULL,
  `professor_id_professor` int(11) NOT NULL,
  `aluno_id_aluno` int(11) NOT NULL,
  `correcao_desafio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id_professor` int(11) NOT NULL,
  `nome_professor` varchar(255) NOT NULL,
  `email_professor` varchar(255) NOT NULL,
  `senha_professor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id_Code`);

--
-- Indexes for table `comunidade`
--
ALTER TABLE `comunidade`
  ADD PRIMARY KEY (`id_comunidade`,`aluno_id_aluno`,`professor_id_professor`);

--
-- Indexes for table `desafiocomunidade`
--
ALTER TABLE `desafiocomunidade`
  ADD PRIMARY KEY (`id_desafioComunidade`,`comunidade_id_comunidade`,`comunidade_professor_id_professor`,`comunidade_aluno_id_aluno`);

--
-- Indexes for table `desafiogeral`
--
ALTER TABLE `desafiogeral`
  ADD PRIMARY KEY (`id_desafio`,`professor_id_professor`,`aluno_id_aluno`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_professor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comunidade`
--
ALTER TABLE `comunidade`
  MODIFY `id_comunidade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `desafiogeral`
--
ALTER TABLE `desafiogeral`
  MODIFY `id_desafio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
