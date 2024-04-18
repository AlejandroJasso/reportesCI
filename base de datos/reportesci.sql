-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-04-2024 a las 21:24:23
-- Versión del servidor: 8.2.0
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reportesci`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

DROP TABLE IF EXISTS `agentes`;
CREATE TABLE IF NOT EXISTS `agentes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `curso` int NOT NULL,
  `username` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `password` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `is_agente` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `agentes`
--

INSERT INTO `agentes` (`id`, `nombre`, `apellidos`, `curso`, `username`, `password`, `is_agente`, `deleted`) VALUES
(1, 'David', 'Navarro López', 3, 'david@email.com', '202cb962ac59075b964b07152d234b70', 1, 0),
(2, 'alex', '', 0, 'alex@email.com', '202cb962ac59075b964b07152d234b70', 1, 0),
(3, 'Jorge', '', 0, 'jorge@email.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 0),
(4, 'prueba', '', 0, 'prueba@email.com', '202cb962ac59075b964b07152d234b70', 1, 0),
(5, 'prueba2', '', 0, 'prueba2@email.com', '202cb962ac59075b964b07152d234b70', 1, 0),
(6, 'prueba3', '', 0, 'prueba3@email.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 0),
(7, 'prueba4', '', 0, 'prueba4@email.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 0),
(8, 'prueba6', '', 0, 'prueba6@email.com', '202cb962ac59075b964b07152d234b70', 1, 0),
(9, 'prueba7', '', 0, 'prueba7@email.com', '202cb962ac59075b964b07152d234b70', 1, 0),
(10, 'prueba8', '', 0, 'prueba8@email.com', '202cb962ac59075b964b07152d234b70', 1, 0),
(11, 'prueba9', '', 0, 'prueba9@email.com', '202cb962ac59075b964b07152d234b70', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

DROP TABLE IF EXISTS `autos`;
CREATE TABLE IF NOT EXISTS `autos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `marca` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `modelo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `placas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha_compra` date NOT NULL,
  `archivo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id`, `marca`, `modelo`, `placas`, `color`, `fecha_compra`, `archivo`) VALUES
(1, 'VM', 'Polo', '521CADS', 'Blanco', '2024-04-02', '661edfd04de76profile-02.jpg'),
(2, 'Ford', 'Figo', '332JBDA1', 'Blanco', '2024-04-16', '661ee439c9017profile-02.jpg'),
(3, 'VW', 'Vento', '8329CDAS', 'Negro', '1999-02-12', '66217a1ac142bprofile-02.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `duenyos`
--

DROP TABLE IF EXISTS `duenyos`;
CREATE TABLE IF NOT EXISTS `duenyos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `curso` int NOT NULL,
  `password` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `username` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `is_duenyo` int NOT NULL DEFAULT '1',
  `deleted` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `duenyos`
--

INSERT INTO `duenyos` (`id`, `nombre`, `apellidos`, `curso`, `password`, `username`, `is_duenyo`, `deleted`) VALUES
(1, 'Alejandro', 'Jasso', 3, '202cb962ac59075b964b07152d234b70', 'alejandro', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

DROP TABLE IF EXISTS `reportes`;
CREATE TABLE IF NOT EXISTS `reportes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidoP` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidoM` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contacto` varchar(12) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_reporte` date NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `archivo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id`, `nombre`, `apellidoP`, `apellidoM`, `contacto`, `fecha_reporte`, `descripcion`, `archivo`, `deleted`) VALUES
(1, 'Alejandro', 'Jasso', 'Almanza', '4641234567', '2024-04-16', 'Reporte', '661e9ce50c0bfprofile-02.jpg', 0),
(2, 'Alejandro', 'Almanza', 'Jasso', '4567890721', '2024-04-16', 'Robo', '661ecdf5cd185profile-02.jpg', 0),
(3, 'Jorge', 'Jasso', 'Jasso', '4623456789', '2024-04-09', 'Reporte', '661edc2f406a9profile-02.jpg', 0),
(4, 'Prueba', 'Reporte', 'Reporte', '4641234567', '2024-04-18', 'Robo', '6621631e69f8dprofile-02.jpg', 0),
(5, 'Prueba5', 'Prueba5', 'Prueba5', '4646464646', '2024-04-18', 'Reporte', '662167bdd5d53profile-02.jpg', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
