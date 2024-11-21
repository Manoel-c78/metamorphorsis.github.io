-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Tempo de geração: 21/11/2024 às 19:18
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetox`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `loja`
--

CREATE TABLE `loja` (
  `ID` int(255) NOT NULL,
  `razao_social` varchar(255) DEFAULT NULL,
  `nome_fantasia` varchar(255) DEFAULT NULL,
  `inscricao` varchar(255) DEFAULT NULL,
  `cpf_cnpj` varchar(30) DEFAULT NULL,
  `CEP_loja` varchar(15) DEFAULT NULL,
  `rua_loja` varchar(20) DEFAULT NULL,
  `numero_loja` varchar(50) DEFAULT NULL,
  `bairro_loja` varchar(50) DEFAULT NULL,
  `cidade_loja` varchar(50) DEFAULT NULL,
  `UF_loja` varchar(50) DEFAULT NULL,
  `telefone_loja` varchar(50) DEFAULT NULL,
  `email_loja` varchar(50) DEFAULT NULL,
  `nome_proprietario` varchar(50) DEFAULT NULL,
  `CPF_proprietario` varchar(50) DEFAULT NULL,
  `telefone_proprietario` varchar(50) DEFAULT NULL,
  `servico_oferecido` varchar(60) DEFAULT NULL,
  `horario_funcionamento` varchar(50) DEFAULT NULL,
  `horario_fechado` varchar(50) DEFAULT NULL,
  `dias_funcionamento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `loja`
--

INSERT INTO `loja` (`ID`, `razao_social`, `nome_fantasia`, `inscricao`, `cpf_cnpj`, `CEP_loja`, `rua_loja`, `numero_loja`, `bairro_loja`, `cidade_loja`, `UF_loja`, `telefone_loja`, `email_loja`, `nome_proprietario`, `CPF_proprietario`, `telefone_proprietario`, `servico_oferecido`, `horario_funcionamento`, `horario_fechado`, `dias_funcionamento`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `loja`
--
ALTER TABLE `loja`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
