-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2024 a las 04:48:56
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
-- Base de datos: `dbformulario2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `num_reporte` int(11) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `nombre_caso` varchar(255) DEFAULT NULL,
  `miembro_proteccion` varchar(255) DEFAULT NULL,
  `narracion_situacion_nna` text DEFAULT NULL,
  `narracion_redes_familiares` text DEFAULT NULL,
  `residencia_familiar` varchar(255) DEFAULT NULL,
  `sosten_economico` varchar(255) DEFAULT NULL,
  `relacion_madre_familia` varchar(255) DEFAULT NULL,
  `patron_migracion` varchar(255) DEFAULT NULL,
  `sistema_compadrazgo` varchar(255) DEFAULT NULL,
  `espacios_socializacion` varchar(255) DEFAULT NULL,
  `participacion_familiar` varchar(255) DEFAULT NULL,
  `alcoholismo_enfermedades` varchar(255) DEFAULT NULL,
  `bilinguisimo_comunidad` text DEFAULT NULL,
  `registro_civil` enum('Si','No','No Aplica') DEFAULT NULL,
  `acta_nacimiento` enum('Si','No','No Aplica') DEFAULT NULL,
  `hijo_no_vive_familia` enum('Si','No','No Aplica') DEFAULT NULL,
  `opinion_nna` enum('Si','No','No Aplica') DEFAULT NULL,
  `cuidado_principal` enum('Si','No','No Aplica') DEFAULT NULL,
  `violencia_violencia` enum('Si','No','No Aplica') DEFAULT NULL,
  `golpes_insultos` enum('Si','No','No Aplica') DEFAULT NULL,
  `alimentacion` enum('Si','No','No Aplica') DEFAULT NULL,
  `ultima_visita_doctor` enum('Si','No','No Aplica') DEFAULT NULL,
  `cartilla_vacunacion` enum('Si','No','No Aplica') DEFAULT NULL,
  `cartilla_completa` enum('Si','No','No Aplica') DEFAULT NULL,
  `enfermedad` enum('Si','No','No Aplica') DEFAULT NULL,
  `asistencia_medica` enum('Si','No','No Aplica') DEFAULT NULL,
  `servicio_medico` enum('Si','No','No Aplica') DEFAULT NULL,
  `discapacidad` enum('Si','No','No Aplica') DEFAULT NULL,
  `aditamentos` enum('Si','No','No Aplica') DEFAULT NULL,
  `escuela` enum('Si','No','No Aplica') DEFAULT NULL,
  `calificaciones` enum('Si','No','No Aplica') DEFAULT NULL,
  `clase_favorita` varchar(255) DEFAULT NULL,
  `clase_dificil` varchar(255) DEFAULT NULL,
  `hora_dormir` time DEFAULT NULL,
  `hora_levantar` time DEFAULT NULL,
  `hora_jugar` time DEFAULT NULL,
  `jugar` text DEFAULT NULL,
  `socializar` enum('Si','No','No Aplica') DEFAULT NULL,
  `deporte` enum('Si','No','No Aplica') DEFAULT NULL,
  `observaciones_negacion` text DEFAULT NULL,
  `observaciones_afectacion` text DEFAULT NULL,
  `familiograma` text DEFAULT NULL,
  `narracion_general` text DEFAULT NULL,
  `fecha_plan_restitucion` date DEFAULT NULL,
  `nombre_elaborador` varchar(255) DEFAULT NULL,
  `firmas_elaboradores` text DEFAULT NULL,
  `otros_datos` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id`, `fecha`, `num_reporte`, `ciudad`, `nombre_caso`, `miembro_proteccion`, `narracion_situacion_nna`, `narracion_redes_familiares`, `residencia_familiar`, `sosten_economico`, `relacion_madre_familia`, `patron_migracion`, `sistema_compadrazgo`, `espacios_socializacion`, `participacion_familiar`, `alcoholismo_enfermedades`, `bilinguisimo_comunidad`, `registro_civil`, `acta_nacimiento`, `hijo_no_vive_familia`, `opinion_nna`, `cuidado_principal`, `violencia_violencia`, `golpes_insultos`, `alimentacion`, `ultima_visita_doctor`, `cartilla_vacunacion`, `cartilla_completa`, `enfermedad`, `asistencia_medica`, `servicio_medico`, `discapacidad`, `aditamentos`, `escuela`, `calificaciones`, `clase_favorita`, `clase_dificil`, `hora_dormir`, `hora_levantar`, `hora_jugar`, `jugar`, `socializar`, `deporte`, `observaciones_negacion`, `observaciones_afectacion`, `familiograma`, `narracion_general`, `fecha_plan_restitucion`, `nombre_elaborador`, `firmas_elaboradores`, `otros_datos`) VALUES
(1, '2024-09-16', 21, 'mexico', 'jorge', 'we', 'we', 'ew', 'ew', 'we', 'ew', 'ew', 'we', 'ew', 'ew', 'e', 'ew', 'Si', 'No', 'No', 'No', 'No', 'No Aplica', 'Si', 'Si', 'Si', 'Si', 'No', 'No', 'No', 'Si', 'No', 'No', 'Si', 'No', 'sd', 'sdsd', '22:37:00', '22:37:00', '22:37:00', 'ew', 'Si', 'Si', 'ew', 'ew', 'ew', 'ew', '2024-09-18', 'ew', 'ew', 'ew');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
