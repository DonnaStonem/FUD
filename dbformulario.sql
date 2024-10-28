-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2024 a las 04:48:45
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
-- Base de datos: `dbformulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_deteccion`
--

CREATE TABLE `registro_deteccion` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `num_reporte` int(11) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `nombre_caso` varchar(255) NOT NULL,
  `miembro_proteccion` varchar(255) DEFAULT NULL,
  `narracion` text DEFAULT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `elaborador` varchar(255) DEFAULT NULL,
  `firma` varchar(255) DEFAULT NULL,
  `observaciones` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro_deteccion`
--

INSERT INTO `registro_deteccion` (`id`, `fecha`, `num_reporte`, `ciudad`, `nombre_caso`, `miembro_proteccion`, `narracion`, `ubicacion`, `elaborador`, `firma`, `observaciones`) VALUES
(1, '2024-09-03', 21, '12', 'jorge', 'sd', 'sd', 'sd', 'ds', 'sd', 'ds'),
(2, '2024-09-13', 12, 'mexico', 'jorge', 'niño', 'murio', 'mexico', 'yo', 'lopez', 'feo'),
(3, '2024-09-11', 12, 'mexico', 'jorge', 'niño', 's', 'mexico', 'yo', 'lopez', 's');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_deteccion`
--
ALTER TABLE `registro_deteccion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_deteccion`
--
ALTER TABLE `registro_deteccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
