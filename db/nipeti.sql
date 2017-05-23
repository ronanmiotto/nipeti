-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 22/05/2017 às 23:52
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
  `titulo` varchar(200) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `dataInicio` date DEFAULT NULL,
  `dataFim` date DEFAULT NULL,
  `area` varchar(200) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `statuss` varchar(50) DEFAULT NULL,
  `fomento` varchar(150) DEFAULT NULL,
  `observacoes` varchar(400) DEFAULT NULL,
  `arquivo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;

--
-- Fazendo dump de dados para tabela `projeto`
--

INSERT INTO `projeto` (`idProjeto`, `titulo`, `descricao`, `dataInicio`, `dataFim`, `area`, `tipo`, `statuss`, `fomento`, `observacoes`, `arquivo`) VALUES
(1, 'Lula 2018', 'Lulão', '2013-10-27', '2014-11-29', 'Política', 'tcc', 'andamento', 'nao', 'Teste....', NULL),
(2, 'Mito2018', 'Bolsomito', '2014-10-28', '2016-10-29', 'Política', 'tcc', 'andamento', 'sim', 'Teste...', NULL),
(3, 'Nipeti - IFMS', 'Teste...', '2015-10-28', '2016-11-30', 'Política', 'tcc', 'concluido', 'sim', 'Teste...', 'Sem_título_1.pdf'),
(4, 'Projeto TADS', 'Projeto de desenvolvimento de sistemas.', '2014-10-29', '2016-11-30', 'Análise e Desenvolvimento de Sistemas', 'extensao', 'paralisado', 'nao', 'testando', 'Sem_título_11.pdf');

-- --------------------------------------------------------

--
-- Estrutura para tabela `publicacao`
--

CREATE TABLE `publicacao` (
  `idPublicacao` int(11) UNSIGNED NOT NULL,
  `projeto_idProjeto` int(11) UNSIGNED DEFAULT NULL,
  `tipo` varchar(150) NOT NULL,
  `descricao` longtext,
  `titulo` varchar(255) NOT NULL,
  `localidade` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `volume` int(100) NOT NULL,
  `cooautores` varchar(255) NOT NULL,
  `paginas` int(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `arquivo` varchar(150) DEFAULT NULL
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
  `bairro` varchar(255) NOT NULL,
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
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `tipo`, `nome`, `cpf`, `rg`, `sexo`, `dataNasc`, `cidade`, `uf`, `endereco`, `numero`, `bairro`, `cep`, `email`, `senha`, `fone`, `curso`, `periodo`, `turno`, `dataInicio`, `formacao`, `demaisFormacao`, `lattes`, `observacoes`, `imagem`) VALUES
(3, 2, 'Ronan Allen Miotto', '01405113189', '001422413', 'M', '1988-10-06', 'Nova Andradina', 'MS', 'Rua José Ferreira', 1212, 'Centro Educacional', '79750-000', 'ronanmiotto@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '999678967', 'tads', 'outros', 'noturno', '2014-01-01', '', '', '', 'Cursando.', 'ronaldin10.jpg'),
(4, 1, 'Luiz Picolo', '05401343289', '00231456', 'M', '1986-04-02', 'Campo Grande', 'CE', 'Rua A dos Santos', 678, 'Morada do Sol', '78679-000', 'picolo@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '67 99987-8978', '', '', '', '2014-03-02', 'Análise e Desenvolvimento de Sistemas', 'Bacharelado em História', 'http://picolo.com.br', 'Servidor IFMS', 'ronaldin11.jpg');

--
-- Índices de tabelas apagadas
--

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
  ADD PRIMARY KEY (`idProjeto`);

--
-- Índices de tabela `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`idPublicacao`),
  ADD KEY `PUBLICACAO_FKIndex3` (`projeto_idProjeto`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

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
  MODIFY `idProjeto` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
-- Restrições para tabelas `publicacao`
--
ALTER TABLE `publicacao`
  ADD CONSTRAINT `fk_8b94ac4b-29af-11e7-a87c-bc8556fd92b5` FOREIGN KEY (`projeto_idProjeto`) REFERENCES `projeto` (`idProjeto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
