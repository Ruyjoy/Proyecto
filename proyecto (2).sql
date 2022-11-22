-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2022 a las 22:29:11
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
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `lugar` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `foto` varchar(200) NOT NULL,
  `codigo_usu` varchar(200) NOT NULL,
  `rolmascota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id`, `nombre`, `tipo`, `lugar`, `descripcion`, `fecha`, `foto`, `codigo_usu`, `rolmascota`) VALUES
(1, 'Persha', 'Gato', 'Canelones', 'adsad', '2022-11-23', '../../img/1_A_Toda_Vela_2021_ong-info_contact-data_A toda vela web baja_1617006500344.jpg', '321', 1);

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
(20, 'Twits', 'Algo para ver', '1680', 1, 1, '../../img/Twits.jpg'),
(21, 'Toky', 'Producto balanceado para todos', '2200', 1, 1, '../../img/alimento.jpg');

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
(2, 'Usuario dueño'),
(3, 'Ong'),
(5, 'Usuario Veterinaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolmascota`
--

CREATE TABLE `rolmascota` (
  `id` int(11) NOT NULL,
  `rol` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rolmascota`
--

INSERT INTO `rolmascota` (`id`, `rol`) VALUES
(1, 'Mascota_Perdida'),
(2, 'Mascota_Adopcion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codigo` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codigo`, `pass`, `nombre`, `telefono`, `direccion`, `mail`, `img`, `rol`) VALUES
('1', '1', 'Jose luis', 91777644, 'asdasd', 'sdasd', NULL, 1),
('123', '123', 'Pepe', 91777644, 'Calle 6 manzana 7 solar 20 Esquina algo en ella', 'mma@hotmail.com', '../../img/1_A_Toda_Vela_2021_ong-info_contact-data_A toda vela web baja_1617006500344.jpg', 3),
('321', '321', '321', 321, '312', '321', '321', 2),
('sda', 'sada', 'sada', 123, 'dsad', ' dsad', '../../img/WhatsApp Image 2022-10-12 at 20.23.51.jpeg', 3);

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
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigo_usu` (`codigo_usu`),
  ADD KEY `rolmascota` (`rolmascota`);

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
-- Indices de la tabla `rolmascota`
--
ALTER TABLE `rolmascota`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`),
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
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rolmascota`
--
ALTER TABLE `rolmascota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `mascotas_ibfk_1` FOREIGN KEY (`rolmascota`) REFERENCES `rolmascota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mascotas_ibfk_2` FOREIGN KEY (`codigo_usu`) REFERENCES `usuario` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
