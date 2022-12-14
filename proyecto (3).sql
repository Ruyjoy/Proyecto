-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2022 a las 14:57:48
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

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
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id_con` int(11) NOT NULL,
  `nombre_con` varchar(100) NOT NULL,
  `des_con` varchar(200) NOT NULL,
  `precio_con` double NOT NULL,
  `foto_con` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id_con`, `nombre_con`, `des_con`, `precio_con`, `foto_con`) VALUES
(1, 'Consulta Veterinaria', 'Agenda día y hora para consulta con veterinario en clínica o domicilio', 0, '../../img/Consulta.jpg'),
(2, 'Análisis Clínicos', 'Agenda día y hora para análisis veterinarios en clínica o domicilio.', 1000, '../../img/Analisis.jpg'),
(3, 'Estetica animal', 'Agenda día y hora para estética animal en clínica.\r\n', 500, '../../img/Estetica.jpg'),
(4, 'Vacunaciones', 'Agenda día y hora para vacunaciones en clínica o domicilio con médico veterinario.', 300, '../../img/vacunaciones.jpg'),
(5, 'Coordinación con especialista', 'Agenda día y hora con nuestros médicos veterinarios especialistas.', 800, '../../img/Especialista.jpg'),
(6, 'Primera consulta de socio', 'Agenda día y hora para la primera consulta de examinación y diagnóstico para asociar a tu mascota', 800, '../../img/Primer.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intentos_usuario`
--

CREATE TABLE `intentos_usuario` (
  `id_usuario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `des_producto`, `precio_producto`, `id_catergoria`, `activo`, `imagen_producto`) VALUES
(1, 'ProPla', 'ProPlan no es una de las mejores comidas para perros y gatos por pura suerte, se trata de una marca con larga tradición y experiencia, y eso se nota en el resultado final.', '3700', 1, 1, '../../img/ProPlan.jpg'),
(2, 'Connie', 'Connie está hecho con ingredientes naturales de 1ª Calidad que aseguran el 100% de satisfacción a las necesidades nutritivas de tu mascota. Las proteínas de alto valor biológico y el agregado de ácido Omega 3 y 6 hacen que tu perro fortalezca sus músculos y desarrolle un pelaje sano y brillante.', '2131', 1, 1, '../../img/connie.jpg'),
(3, 'Origens', 'Es una línea especial de comida Premium que nutre lo mejor: el amor. Promover la salud y el placer con cada comida es ante todo un acto de afecto, que cierra lazos y prolonga los días de alegría, amistad y amor incondicional entre los tutores y sus perros y gatos.', '1755', 1, 1, '../../img/iOrigens.jpg'),
(4, 'Connie-cachorro-8-kg', 'Connie está hecho con ingredientes naturales de 1ª Calidad que aseguran el 100% de satisfacción a las necesidades nutritivas de tu mascota. Las proteínas de alto valor biológico y el agregado de ácido Omega 3 y 6 hacen que tu perro fortalezca sus músculos y desarrolle un pelaje sano y brillante. Nueva fórmula sin colorantes.', '975', 1, 1, '../../img/connie-cachorro-8-kg.jpg'),
(5, 'Frost Adulto', 'Alimentos para Perros adultos y cachorros, Raciones Frost Comida para Perros. El mejor precio online. Promociones Imperdibles.', '2890', 1, 1, '../../img/Frost Adulto.jpg'),
(7, 'Toky', '- Con Omega 3 y\r\n- Antioxidante\r\n- Vitaminas y Minerales\r\n\r\nEnriquecido con Omega 3 y 6: Colabora en la salud y el pelaje de su perro. Antioxidantes: Niveles garantizados de zinc, vitamina E y selenio. Vitaminas y minerales: Alta digestibilidad, defensa inmunitaria, control de peso y cuidado de los dientes.', '1134', 1, 1, '../../img/alimento.jpg'),
(8, 'Equilibrio', 'Tu mascota siempre saludable\r\nUna alimentación balanceada es esencial para que tu fiel compañero se mantenga sano y fuerte. La dieta de tu gato se refleja en su pelaje, por eso es de vital importancia que contenga todos los nutrientes necesarios para su crecimiento. Asegura la energía y vitalidad de tu amigo para que pueda correr, saltar y jugar todo el día.', '3271', 1, 1, '../../img/Equilibrio.jpg'),
(9, 'Lager 10kg', 'Beneficios del alimento seco\r\nLa mayor ventaja de la comida seca para mascotas es que se puede almacenar por mucho más tiempo sin que se deteriore, y evita la aparición de hongos o bacterias. Además, este tipo de alimento ayuda a eliminar el sarro y a retrasar la formación de la placa dental con el proceso de masticación y trituración.', '985', 1, 1, '../../img/lager-10-kg.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `rol` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Usuario dueño'),
(3, 'Ong'),
(4, 'UsuarioVeterinaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolmascota`
--

CREATE TABLE `rolmascota` (
  `id` int(11) NOT NULL,
  `rol` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codigo`, `pass`, `nombre`, `telefono`, `direccion`, `mail`, `img`, `rol`) VALUES
('1', '$2y$10$yVJW/DbjzhKu6GO4fGrw0uUTsjiYS7IcT2lMuQ8v2JVXhN8Pf3EDq', 'José Luis', 91777644, 'Calle 6', 'Ruyjoy@hotmail.com', NULL, 1),
('123', '$2y$10$9HsEu1KwPibEqj1iIaTO8eZQv9jWwGhp4oHiK/S57gSoiX8SapZwu', 'Juan', 91111111, 'asdsada', 'sss@sss.com', NULL, 2),
('a', '$2y$10$fo6CI/eICIptIhxjnVU5K.lNetCKv5Feap0PqsePFUJ9LJKPdTbvW', 'Juan', 917746, 'asdsa', '54354@fsagf', NULL, 4),
('Animales_Hogar', '$2y$10$P8lpZsjX82VOCKjDOgpA9Ooco5tTLRUZ71nFBd2CUEvbqGmAe.6Dm', 'Sin Hogar', 92222222, 'Montevideo, Uruguay', ' info@animalessinhogar.org', '../../img/Animales sin Hogar.jpg', 3),
('BuscaTobi', '$2y$10$4zicix2stiSO40dS.ACFquu6b/l7DjkazrEce10d14O68hhhwQc52', 'Tobi', 98591412, 'Montevideo, Uruguay', ' info@buscandoatobi.com', '../../img/buscandoatobi.jpg', 3),
('Costa_Rescata', '$2y$10$Wt9kev1SuOmxF2bWp2.FreW6D0yu9V2737p9IzkEKJwBkRtzCkvsm', 'La Costa', 97047369, 'Canelones, Uruguay', ' instagram@lacostarescata.go', '../../img/LacostaRescata.jpg', 3),
('Cuatro_Patas', '$2y$10$oCr/mhZRSljfPf9F146vS.Z26WiqpbyX41d1fNbt91ea.B3cBNE3O', 'Cuatro Patas', 98513327, 'Canelones, Uruguay', ' nancysouto5@gmail.com', '../../img/cuatro-patas-con-amor.jpg', 3),
('Pou', '$2y$10$VH9VYdulNtaoTVLhNX0VLOJ10xh2bBnjeJTO7uBZKr3xRnCKDZ9IS', 'POU', 99111111, 'Paysandu, Uruguay', ' PouOng@gmail.com', '../../img/POU Ong.jpg', 3),
('Rescate', '$2y$10$.IwSKN4vYG3Ol87URYR82OJWP2JkBOCG5etCYmGbo/0lnXBslvm7e', 'LAC', 96469999, 'Canelones, Uruguay', ' info@buscandoatobi.com', '../../img/Rescate.jpg', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_con`);

--
-- Indices de la tabla `intentos_usuario`
--
ALTER TABLE `intentos_usuario`
  ADD KEY `id_usuario` (`id_usuario`);

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
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_con` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rolmascota`
--
ALTER TABLE `rolmascota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `intentos_usuario`
--
ALTER TABLE `intentos_usuario`
  ADD CONSTRAINT `intentos_usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

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
