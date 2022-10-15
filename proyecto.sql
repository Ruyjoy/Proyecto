-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2022 a las 05:08:30
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donaciones`
--

CREATE TABLE `donaciones` (
  `id_dona` int(11) NOT NULL,
  `monto` double NOT NULL,
  `usuairo_id` int(11) NOT NULL,
  `ong_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ong`
--

CREATE TABLE `ong` (
  `codigo_ong` varchar(200) NOT NULL,
  `pass_ong` varchar(200) NOT NULL,
  `nombre_ong` varchar(200) NOT NULL,
  `telefono_ong` int(11) NOT NULL,
  `direccion_ong` varchar(200) NOT NULL,
  `mail_ong` varchar(200) NOT NULL,
  `ciudad_ong` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(200) NOT NULL,
  `des_producto` text NOT NULL,
  `precio_producto` decimal(10,0) NOT NULL,
  `id_catergoria` int(11) NOT NULL,
  `activo` int(11) NOT NULL,
  `imagen_producto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `des_producto`, `precio_producto`, `id_catergoria`, `activo`, `imagen_producto`) VALUES
(15, 'Algo', 'sagasgsa', '2000', 1, 1, '../../img/product-1.jpg'),
(17, 'dfasf', '342rfdsf', '323', 1, 1, '../../img/las_10_razas_de_perros_mas_populares_del_mundo_23205_orig.jpg'),
(18, 'Marcelo', 'sagfdasgdfhfeyh3y3754j45jrt', '20', 1, 1, '../../img/past-cont.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `rol` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Usuario dueño');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ci` int(11) NOT NULL,
  `nombre_usuario` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` int(11) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ci`, `nombre_usuario`, `pass`, `nombre`, `telefono`, `mail`, `rol`) VALUES
(1, 'Jose.luis', '1', 'José Luis', 91777644, 'ruyjoy@hotmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD PRIMARY KEY (`id_dona`),
  ADD KEY `usuairo_id` (`usuairo_id`),
  ADD KEY `ong_id` (`ong_id`);

--
-- Indices de la tabla `ong`
--
ALTER TABLE `ong`
  ADD PRIMARY KEY (`codigo_ong`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ci`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  MODIFY `id_dona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD CONSTRAINT `donaciones_ibfk_1` FOREIGN KEY (`ong_id`) REFERENCES `ong` (`codigo_ong`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donaciones_ibfk_2` FOREIGN KEY (`usuairo_id`) REFERENCES `usuario` (`ci`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
