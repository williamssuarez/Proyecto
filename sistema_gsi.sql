-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-02-2023 a las 21:53:34
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_gsi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `operador_tecnico` int(11) NOT NULL,
  `agregado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellido`, `operador_tecnico`, `agregado`) VALUES
(13, 'williams', 'suarez', 1, '2023-01-24 05:19:29'),
(14, 'javier', 'casteñeda', 2, '2023-01-24 05:19:29'),
(15, 'leonardo', 'gonzales', 3, '2023-01-24 05:19:29'),
(16, 'Cesar', 'Leon', 2, '2023-01-24 05:19:29'),
(21, 'jose', 'anziani', 1, '2023-01-24 05:19:29'),
(24, 'gabriel', 'pantoja', 1, '2023-01-24 05:19:29'),
(28, 'carlos', 'pantoja', 4, '2023-01-24 05:19:29'),
(29, 'juancho', 'perez', 2, '2023-01-24 05:19:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `numero_bien` int(11) NOT NULL,
  `departamento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `recibido_por` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_recibido` date NOT NULL DEFAULT current_timestamp(),
  `problema` text COLLATE utf8_unicode_ci NOT NULL,
  `entregado_por` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `numero_bien`, `departamento`, `recibido_por`, `fecha_recibido`, `problema`, `entregado_por`, `fecha_entrega`) VALUES
(1, 19525, 'Presupuesto', 'Williams', '2023-01-24', 'Actualizacion S.O', 'Williams', '2023-06-15'),
(3, 21026, 'Tesoreria', 'Felipe Troja', '2023-01-24', 'No enciende', 'Williams', '2023-06-15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
