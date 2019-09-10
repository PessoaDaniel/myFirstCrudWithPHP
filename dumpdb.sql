-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Set-2019 às 13:17
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `perssonagens`
--

CREATE TABLE `perssonagens` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `anime` varchar(300) DEFAULT NULL,
  `origem` varchar(255) DEFAULT NULL,
  `sexo` enum('M','F') DEFAULT NULL,
  `ranking` varchar(5) DEFAULT NULL,
  `descricaopersonagem` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `poderes`
--

CREATE TABLE `poderes` (
  `elemento` enum('Agua','Fogo','Ar','Terra','Raios','Magia','Luz','Sombras','Especial') DEFAULT NULL,
  `descricaoelemento` longtext DEFAULT NULL,
  `descriçãopoder` longtext DEFAULT NULL,
  `nomepoder` varchar(255) DEFAULT NULL,
  `atributo` varchar(255) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `idperssonagem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `perssonagens`
--
ALTER TABLE `perssonagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `poderes`
--
ALTER TABLE `poderes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idperssonagem` (`idperssonagem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `perssonagens`
--
ALTER TABLE `perssonagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `poderes`
--
ALTER TABLE `poderes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `poderes`
--
ALTER TABLE `poderes`
  ADD CONSTRAINT `poderes_ibfk_1` FOREIGN KEY (`idperssonagem`) REFERENCES `perssonagens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
