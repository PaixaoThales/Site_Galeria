-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2017 às 02:02
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_galeria`
--
CREATE DATABASE IF NOT EXISTS `bd_galeria` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_galeria`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_obradearte`
--

CREATE TABLE IF NOT EXISTS `tb_obradearte` (
  `id_obra` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(35) NOT NULL,
  `autor` varchar(35) NOT NULL,
  `tecnica` varchar(35) NOT NULL,
  `ano` varchar(4) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `estiloArtistico` varchar(35) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `img` varchar(50) NOT NULL,
  PRIMARY KEY (`id_obra`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `tb_obradearte`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
