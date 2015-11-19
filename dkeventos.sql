-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Nov-2015 às 17:36
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dkeventos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estadoevento`
--

CREATE TABLE IF NOT EXISTS `estadoevento` (
`id` int(10) NOT NULL,
  `nome` int(50) NOT NULL,
  `idEvento` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `estadoevento`
--

INSERT INTO `estadoevento` (`id`, `nome`, `idEvento`) VALUES
(8, 0, 3),
(9, 0, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
`id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` varchar(70) NOT NULL,
  `local` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `horaInicio` varchar(60) NOT NULL,
  `horaFim` varchar(60) NOT NULL,
  `idTipoEvento` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`id`, `titulo`, `descricao`, `local`, `data`, `horaInicio`, `horaFim`, `idTipoEvento`) VALUES
(3, 'Banga', 'Granda Festa', 'Maxixe', '2015-11-30', '19h', '0.0h', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `participante`
--

CREATE TABLE IF NOT EXISTS `participante` (
`id` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `grauAcademico` varchar(60) NOT NULL,
  `empresa` varchar(90) NOT NULL,
  `dataNascimento` date NOT NULL,
  `sexo` varchar(40) NOT NULL,
  `telefone` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `idEvento` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `participante`
--

INSERT INTO `participante` (`id`, `nome`, `apelido`, `grauAcademico`, `empresa`, `dataNascimento`, `sexo`, `telefone`, `email`, `idEvento`) VALUES
(6, 'Felix', 'Mambo', 'Nivel Medio', 'Estudante', '0000-00-00', 'felixMambo@yahoo.com.br', 844811264, 'Masculino', 3),
(8, '', '', '', '', '0000-00-00', '', 0, '', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `participante2`
--

CREATE TABLE IF NOT EXISTS `participante2` (
`id` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `datanascimento` date NOT NULL,
  `grauacademico` int(50) NOT NULL,
  `idEvento` int(10) NOT NULL,
  `telefone` int(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `participante2`
--

INSERT INTO `participante2` (`id`, `nome`, `sexo`, `datanascimento`, `grauacademico`, `idEvento`, `telefone`) VALUES
(1, 'rljrdphmwpr', 'maunguegmail.com', '2015-11-12', 0, 0, 146345),
(2, 'Dimas Jonasse', 'M', '2015-11-24', 0, 0, 2147483647),
(3, 'Celia Pondeca', 'F', '1991-12-09', 0, 0, 842365789);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoevento`
--

CREATE TABLE IF NOT EXISTS `tipoevento` (
`idtipo` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tipoevento`
--

INSERT INTO `tipoevento` (`idtipo`, `nome`) VALUES
(1, 'festas'),
(2, ' palestras'),
(3, ' workshops');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estadoevento`
--
ALTER TABLE `estadoevento`
 ADD PRIMARY KEY (`id`), ADD KEY `idEvento` (`idEvento`);

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
 ADD PRIMARY KEY (`id`), ADD KEY `idTipoEvento` (`idTipoEvento`);

--
-- Indexes for table `participante`
--
ALTER TABLE `participante`
 ADD PRIMARY KEY (`id`), ADD KEY `idEvento` (`idEvento`);

--
-- Indexes for table `participante2`
--
ALTER TABLE `participante2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipoevento`
--
ALTER TABLE `tipoevento`
 ADD PRIMARY KEY (`idtipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estadoevento`
--
ALTER TABLE `estadoevento`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `participante`
--
ALTER TABLE `participante`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `participante2`
--
ALTER TABLE `participante2`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tipoevento`
--
ALTER TABLE `tipoevento`
MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `estadoevento`
--
ALTER TABLE `estadoevento`
ADD CONSTRAINT `estadoevento_ibfk_1` FOREIGN KEY (`idEvento`) REFERENCES `evento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `evento`
--
ALTER TABLE `evento`
ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`idTipoEvento`) REFERENCES `tipoevento` (`idtipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `participante`
--
ALTER TABLE `participante`
ADD CONSTRAINT `participante_ibfk_1` FOREIGN KEY (`idEvento`) REFERENCES `evento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
