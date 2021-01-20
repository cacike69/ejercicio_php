-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-01-2021 a las 15:16:37
-- Versión del servidor: 5.5.20
-- Versión de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `test`
--
CREATE DATABASE `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `Nombre_producto` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion_Producto` varchar(10000) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Precio_Producto` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Nombre_producto`, `Descripcion_Producto`, `Precio_Producto`) VALUES
('', '', 0),
('Nombre', 'ingrediente', 10),
('Nombre', 'ingrediente', 10),
('nombre_prueba', 'ingrediente', 20),
('prueba1', 'prueba1', 10),
('prueba12', 'prueba12', 10),
('prueba12', 'prueba12', 10),
('prueba123', 'ingrediente', 10),
('prueba12', 'ingrediente', 10),
('prueba12', 'ingrediente', 10),
('prueba12', 'ingrediente', 10),
('prueba12', 'ingrediente', 10),
('prueba12', 'ingrediente', 10),
('prueba12', 'ingrediente', 10),
('lucian', 'ingrediente', 90);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nick` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Pk_Nick_Name',
  `email` varchar(30) COLLATE utf8_spanish_ci NOT NULL COMMENT 'correo',
  `contrasenya` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`nick`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nick`, `email`, `contrasenya`) VALUES
('', '', ''),
('lucian', 'lucian@yahoo.es', 'lucian123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
