-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-03-2016 a las 13:59:19
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `csatestprep_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenesnivelacion`
--

CREATE TABLE IF NOT EXISTS `examenesnivelacion` (
  `idExam` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `resp1` varchar(1) NOT NULL,
  `resp2` varchar(1) NOT NULL,
  `resp3` varchar(1) NOT NULL,
  `resp4` varchar(1) NOT NULL,
  `resp5` varchar(1) NOT NULL,
  `resp6` varchar(1) NOT NULL,
  `resp7` varchar(1) NOT NULL,
  `resp8` varchar(1) NOT NULL,
  `resp9` varchar(1) NOT NULL,
  `resp10` varchar(1) NOT NULL,
  `pts` int(11) NOT NULL,
  `estatus` varchar(100) NOT NULL,
  PRIMARY KEY (`idExam`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `examenesnivelacion`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
