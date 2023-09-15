-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2023 a las 05:16:49
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_administrador_de_archivos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id`, `nombre`, `descripcion`, `url`) VALUES
(1, 'Documento1', 'Descripcion doc 1', ''),
(2, 'Documento2', 'Descripcion doc 2', ''),
(3, 'Captura de pantalla 2023-03-12 132751.png', '', 'uploads/Captura de pantalla 2023-03-12 132751.png'),
(4, 'Captura de pantalla 2023-03-12 141936.png', '', 'uploads/Captura de pantalla 2023-03-12 141936.png'),
(5, 'panzon32.png', 'pablo32', 'uploads/panzon32.png'),
(6, 'panzon2.png', 'pablo32', 'uploads/panzon2.png'),
(7, 'Captura de pantalla 2023-03-12 142015.png', '', 'uploads/Captura de pantalla 2023-03-12 142015.png'),
(8, 'Captura de pantalla 2023-03-12 132751.png', '', 'uploads/Captura de pantalla 2023-03-12 132751.png'),
(9, 'hoy2.png', 'estoeshoy', 'uploads/hoy2.png'),
(10, 'horitas.png', 'pruebas', 'uploads/horitas.png'),
(11, 'garces.png', 'no me cree ', 'uploads/garces.png'),
(12, 'eres.png', 'ers2', 'uploads/eres.png'),
(13, 'eres.png', 'ers2', 'uploads/eres.png'),
(14, 'hoy.png', 'estoeshoy', 'uploads/hoy.png'),
(15, 'eres.png', '', 'uploads/eres.png'),
(16, 'eres.png', 'ers2', 'uploads/eres.png'),
(17, 'pedo.png', '', 'uploads/pedo.png'),
(18, 'elena .png', 'fea', 'uploads/elena .png'),
(20, 'eres.png', 'fea', 'uploads/eres.png'),
(21, 'justiocia.png', 'papar', 'uploads/justiocia.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_direccion`
--

CREATE TABLE `tb_direccion` (
  `id` int(11) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `calle_principal` varchar(50) NOT NULL,
  `calle_secundaria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_direccion`
--

INSERT INTO `tb_direccion` (`id`, `ciudad`, `calle_principal`, `calle_secundaria`) VALUES
(1, 'La Troncal', 'loja', '27 de febrero'),
(2, 'El Triunfo', 'Barcelona', '8 De Abril');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` varchar(13) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `direccion_id` int(11) NOT NULL,
  `archivo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `nombre`, `apellido`, `telefono`, `usuario`, `clave`, `mail`, `direccion_id`, `archivo_id`) VALUES
(1, 'pablo', 'valdez', '0980292129', 'root', '1986', 'pablo@gmail.com', 1, 1),
(2, 'pas', 'calle', '0980292134', 'paroot', '1982', '@pastota', 2, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_direccion`
--
ALTER TABLE `tb_direccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `direccion_id` (`direccion_id`),
  ADD KEY `archivo_id` (`archivo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tb_direccion`
--
ALTER TABLE `tb_direccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD CONSTRAINT `tb_usuario_ibfk_1` FOREIGN KEY (`direccion_id`) REFERENCES `tb_direccion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_usuario_ibfk_2` FOREIGN KEY (`archivo_id`) REFERENCES `archivos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
