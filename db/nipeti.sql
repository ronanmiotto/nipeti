-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 18/05/2017 às 13:35
-- Versão do servidor: 5.7.18-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nipeti`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `arquivo`
--

CREATE TABLE `arquivo` (
  `idArquivo` int(11) UNSIGNED NOT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `caminho` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;

-- --------------------------------------------------------

--
-- Estrutura para tabela `orientacao`
--

CREATE TABLE `orientacao` (
  `idOrientacao` int(11) UNSIGNED NOT NULL,
  `dataInicio` date DEFAULT NULL,
  `dataFim` date DEFAULT NULL,
  `tipoOrientacao` varchar(200) DEFAULT NULL,
  `usuario_idServidor` int(10) UNSIGNED NOT NULL,
  `usuario_idEstudante` int(10) UNSIGNED NOT NULL,
  `projeto_idProjeto` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;

-- --------------------------------------------------------

--
-- Estrutura para tabela `participa`
--

CREATE TABLE `participa` (
  `idParticipa` int(11) UNSIGNED NOT NULL,
  `dataInicio` date DEFAULT NULL,
  `dataFim` date DEFAULT NULL,
  `tipo` varchar(150) DEFAULT NULL,
  `usuario_idUsuario` int(10) UNSIGNED NOT NULL,
  `projeto_idProjeto` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;

-- --------------------------------------------------------

--
-- Estrutura para tabela `projeto`
--

CREATE TABLE `projeto` (
  `idProjeto` int(11) UNSIGNED NOT NULL,
  `arquivo_idArquivo` int(11) UNSIGNED NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `dataInicio` date DEFAULT NULL,
  `dataFim` date DEFAULT NULL,
  `area` varchar(200) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `statuss` varchar(50) DEFAULT NULL,
  `fomento` varchar(150) DEFAULT NULL,
  `observacoes` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;

-- --------------------------------------------------------

--
-- Estrutura para tabela `publicacao`
--

CREATE TABLE `publicacao` (
  `idPublicacao` int(11) UNSIGNED NOT NULL,
  `arquivo_idArquivo` int(11) UNSIGNED NOT NULL,
  `projeto_idProjeto` int(11) UNSIGNED DEFAULT NULL,
  `descricao` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `tipo` int(11) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `cidade` varchar(150) DEFAULT NULL,
  `uf` char(2) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `numero` int(255) NOT NULL,
  `bairro` varchar(150) NOT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `fone` varchar(45) DEFAULT NULL,
  `curso` varchar(200) DEFAULT NULL,
  `periodo` varchar(100) DEFAULT NULL,
  `turno` varchar(45) DEFAULT NULL,
  `dataInicio` date DEFAULT NULL,
  `formacao` varchar(200) DEFAULT NULL,
  `demaisFormacao` varchar(500) DEFAULT NULL,
  `lattes` varchar(500) DEFAULT NULL,
  `observacoes` varchar(500) DEFAULT NULL,
  `imagem` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `arquivo`
--
ALTER TABLE `arquivo`
  ADD PRIMARY KEY (`idArquivo`);

--
-- Índices de tabela `orientacao`
--
ALTER TABLE `orientacao`
  ADD PRIMARY KEY (`idOrientacao`),
  ADD KEY `fk_orientacao_usuario1_idx` (`usuario_idServidor`),
  ADD KEY `fk_orientacao_usuario2_idx` (`usuario_idEstudante`),
  ADD KEY `fk_orientacao_projeto1_idx` (`projeto_idProjeto`);

--
-- Índices de tabela `participa`
--
ALTER TABLE `participa`
  ADD PRIMARY KEY (`idParticipa`),
  ADD KEY `fk_participa_usuario1_idx` (`usuario_idUsuario`),
  ADD KEY `fk_participa_projeto1_idx` (`projeto_idProjeto`);

--
-- Índices de tabela `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`idProjeto`),
  ADD KEY `PROJETO_FKIndex1` (`arquivo_idArquivo`);

--
-- Índices de tabela `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`idPublicacao`),
  ADD KEY `PUBLICACAO_FKIndex3` (`projeto_idProjeto`),
  ADD KEY `PUBLICACAO_FKIndex4` (`arquivo_idArquivo`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `arquivo`
--
ALTER TABLE `arquivo`
  MODIFY `idArquivo` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `orientacao`
--
ALTER TABLE `orientacao`
  MODIFY `idOrientacao` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `participa`
--
ALTER TABLE `participa`
  MODIFY `idParticipa` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `idProjeto` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `idPublicacao` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `orientacao`
--
ALTER TABLE `orientacao`
  ADD CONSTRAINT `fk_orientacao_projeto1` FOREIGN KEY (`projeto_idProjeto`) REFERENCES `projeto` (`idProjeto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orientacao_usuario1` FOREIGN KEY (`usuario_idServidor`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orientacao_usuario2` FOREIGN KEY (`usuario_idEstudante`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `participa`
--
ALTER TABLE `participa`
  ADD CONSTRAINT `fk_participa_projeto1` FOREIGN KEY (`projeto_idProjeto`) REFERENCES `projeto` (`idProjeto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_participa_usuario1` FOREIGN KEY (`usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `projeto`
--
ALTER TABLE `projeto`
  ADD CONSTRAINT `fk_8b94ac55-29af-11e7-a87c-bc8556fd92b5` FOREIGN KEY (`arquivo_idArquivo`) REFERENCES `arquivo` (`idArquivo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `publicacao`
--
ALTER TABLE `publicacao`
  ADD CONSTRAINT `fk_8b94ac4b-29af-11e7-a87c-bc8556fd92b5` FOREIGN KEY (`projeto_idProjeto`) REFERENCES `projeto` (`idProjeto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_8b94ac50-29af-11e7-a87c-bc8556fd92b5` FOREIGN KEY (`arquivo_idArquivo`) REFERENCES `arquivo` (`idArquivo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
