-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2024 a las 04:49:06
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbformulario3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla3`
--

CREATE TABLE `tabla3` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `num_reporte` varchar(50) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `nombre_caso` varchar(255) DEFAULT NULL,
  `miembro_proteccion` varchar(255) DEFAULT NULL,
  `narracion` text DEFAULT NULL,
  `registro_dibujo` varchar(255) DEFAULT NULL,
  `registro_molestia` varchar(255) DEFAULT NULL,
  `temores` text DEFAULT NULL,
  `adulto_significativo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla3`
--

INSERT INTO `tabla3` (`id`, `fecha`, `num_reporte`, `ciudad`, `nombre_caso`, `miembro_proteccion`, `narracion`, `registro_dibujo`, `registro_molestia`, `temores`, `adulto_significativo`) VALUES
(1, '2024-09-16', '12', 'sd', 'sd', 'sd', 'sd', 'sd', 'ds', 'sd', 'ds');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla3`
--
ALTER TABLE `tabla3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla3`
--
ALTER TABLE `tabla3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
