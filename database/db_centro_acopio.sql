-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2021 a las 01:07:05
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_centro_acopio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `calle` varchar(50) NOT NULL,
  `numero_menor` int(11) NOT NULL,
  `numero_mayor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`calle`, `numero_menor`, `numero_mayor`) VALUES
('a', 1, 100),
('b', 1, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartonero`
--

CREATE TABLE `cartonero` (
  `id_cartonero` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `telefono` int(20) NOT NULL,
  `franja_horaria_preferida` varchar(120) NOT NULL,
  `dni` int(8) NOT NULL,
  `vehiculo` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `material` varchar(50) NOT NULL,
  `aceptado` tinyint(1) NOT NULL,
  `condicion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`id`, `material`, `aceptado`, `condicion`) VALUES
(1111115, 'Platico', 1, 'Aplastado'),
(1111118, 'Vidrio', 1, 'Roto'),
(1111120, 'Vidrio', 1, 'De cocacola'),
(1111121, 'Vidrio de Pepsi', 1, 'Sano'),
(1111122, 'Carton', 0, 'asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material_recolectado`
--

CREATE TABLE `material_recolectado` (
  `id_material` int(11) NOT NULL,
  `id_cartonero` int(8) NOT NULL,
  `peso` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `material_recolectado`
--

INSERT INTO `material_recolectado` (`id_material`, `id_cartonero`, `peso`) VALUES
(1111120, 10000000, 150),
(1111120, 20000000, 120),
(1111120, 40000000, 120),
(1111121, 20000, 150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `direccion` varchar(25) NOT NULL,
  `telefono` int(10) NOT NULL,
  `franja_horaria` varchar(50) NOT NULL,
  `categoria_volumen` varchar(75) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `numero` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `franja_horaria`, `categoria_volumen`, `imagen`, `numero`) VALUES
(3, 'Juan Carlos', 'Gonzales', 'San Martin 2313', 11235423, '9  a  12hs  o  ', 'Entra  en  el  baúl  de  un  auto', NULL, 0),
(4, '123', '234', '23423', 234, '234', 'Entra en el baul de un auto', NULL, 0),
(5, 'calle', 'calle', 'a', 123, 'calle', 'Entra en el baul de un auto', NULL, 50);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD UNIQUE KEY `calle` (`calle`);

--
-- Indices de la tabla `cartonero`
--
ALTER TABLE `cartonero`
  ADD PRIMARY KEY (`id_cartonero`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `material_recolectado`
--
ALTER TABLE `material_recolectado`
  ADD PRIMARY KEY (`id_material`,`id_cartonero`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cartonero`
--
ALTER TABLE `cartonero`
  MODIFY `id_cartonero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111123;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `material_recolectado`
--
ALTER TABLE `material_recolectado`
  ADD CONSTRAINT `fk__material_recolactdo_material` FOREIGN KEY (`id_material`) REFERENCES `material` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
