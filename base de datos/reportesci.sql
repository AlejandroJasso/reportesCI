-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-04-2024 a las 21:25:11
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `agentes`
--

INSERT INTO `agentes` (`id`, `nombre`, `apellidos`, `curso`, `username`, `password`, `is_agente`, `deleted`) VALUES
(1, 'David', 'Navarro López', 3, 'david', '202cb962ac59075b964b07152d234b70', 1, 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id`, `marca`, `modelo`, `placas`, `color`, `fecha_compra`, `archivo`) VALUES
(1, 'VM', 'Polo', '521CADS', 'Blanco', '2024-04-02', '661edfd04de76profile-02.jpg'),
(2, 'Ford', 'Figo', '332JBDA1', 'Blanco', '2024-04-16', '661ee439c9017profile-02.jpg');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id`, `nombre`, `apellidoP`, `apellidoM`, `contacto`, `fecha_reporte`, `descripcion`, `archivo`) VALUES
(1, 'Alejandro', 'Jasso', 'Almanza', '4641234567', '2024-04-16', 'Reporte', '661e9ce50c0bfprofile-02.jpg'),
(2, 'Alejandro', 'Almanza', 'Jasso', '4567890721', '2024-04-16', 'Robo', '661ecdf5cd185profile-02.jpg'),
(3, 'Jorge', 'Jasso', 'Jasso', '4623456789', '2024-04-09', 'Reporte', '661edc2f406a9profile-02.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
