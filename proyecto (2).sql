-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2022 a las 17:14:39
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
(7, 'papa', 'Gato', 'Canelones', 'dsadas', '2022-11-29', '../../img/Perro b.jpeg', '321', 1),
(8, 'Stella', 'Perro', 'Canelones', 'sadsad', '2022-11-29', '../img/Perro a.jpg', '321', 1);

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
(1, 'ProPla', 'ProPlan no es una de las mejores comidas para perros y gatos por pura suerte, se trata de una marca con larga tradición y experiencia, y eso se nota en el resultado final.', '3700', 1, 1, '../../img/ProPlan.jpg'),
(2, 'Connie', 'Connie está hecho con ingredientes naturales de 1ª Calidad que aseguran el 100% de satisfacción a las necesidades nutritivas de tu mascota. Las proteínas de alto valor biológico y el agregado de ácido Omega 3 y 6 hacen que tu perro fortalezca sus músculos y desarrolle un pelaje sano y brillante.', '2131', 1, 1, '../../img/connie.jpg'),
(3, 'Origens', 'Es una línea especial de comida Premium que nutre lo mejor: el amor. Promover la salud y el placer con cada comida es ante todo un acto de afecto, que cierra lazos y prolonga los días de alegría, amistad y amor incondicional entre los tutores y sus perros y gatos.', '1755', 1, 1, '../../img/iOrigens.jpg'),
(4, 'Connie-cachorro-8-kg', 'Connie está hecho con ingredientes naturales de 1ª Calidad que aseguran el 100% de satisfacción a las necesidades nutritivas de tu mascota. Las proteínas de alto valor biológico y el agregado de ácido Omega 3 y 6 hacen que tu perro fortalezca sus músculos y desarrolle un pelaje sano y brillante. Nueva fórmula sin colorantes.', '975', 1, 1, '../../img/connie-cachorro-8-kg.jpg'),
(5, 'Frost Adulto', 'Alimentos para Perros adultos y cachorros, Raciones Frost Comida para Perros. El mejor precio online. Promociones Imperdibles.', '2890', 1, 1, '../../img/Frost Adulto.jpg'),
(6, 'Lager 10kg', 'Lager esta hecho de nutritivos y seleccionados ingredientes. Estos son mezclados y sometidos a un científico y cuidadoso proceso de cocción. Durante el proceso son adicionadas 25 Vitaminas y Minerales, dejando a Lager más nutritivo y balanceado.', '945', 1, 1, '../../img/lager-10-kg.jpg'),
(7, 'Toky', '- Con Omega 3 y\r\n- Antioxidante\r\n- Vitaminas y Minerales\r\n\r\nEnriquecido con Omega 3 y 6: Colabora en la salud y el pelaje de su perro. Antioxidantes: Niveles garantizados de zinc, vitamina E y selenio. Vitaminas y minerales: Alta digestibilidad, defensa inmunitaria, control de peso y cuidado de los dientes.', '1134', 1, 1, '../../img/alimento.jpg'),
(8, 'Equilibrio', 'Tu mascota siempre saludable\r\nUna alimentación balanceada es esencial para que tu fiel compañero se mantenga sano y fuerte. La dieta de tu gato se refleja en su pelaje, por eso es de vital importancia que contenga todos los nutrientes necesarios para su crecimiento. Asegura la energía y vitalidad de tu amigo para que pueda correr, saltar y jugar todo el día.', '3271', 1, 1, '../../img/Equilibrio.jpg');

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
(4, 'UsuarioVeterinaria');

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
('2', '2 ', 'asjdsadjsa', 2147483647, '399 Pereida St', 'sadas@dsadsa', NULL, 4),
('321', '321', '321', 321, '312', '321', '321', 2),
('Animales_Hogar', '1234', 'Animales sin Hogar', 91111111, 'Montevideo, Uruguay', ' info@animalessinhogar.org', '../../img/Animales sin Hogar.jpg', 3),
('BuscaTobi', '1234', 'Tobi', 98591412, 'Montevideo, Uruguay', ' info@buscandoatobi.com', '../../img/buscandoatobi.jpg', 3),
('Costa_Rescata', '1234', 'La Costa Rescata', 97047369, 'Canelones, Uruguay', ' instagram@lacostarescata.go', '../../img/LacostaRescata.jpg', 3),
('Cuatro_Patas', '12345', 'Cuatro Patas', 98513327, 'Canelones, Uruguay', ' nancysouto5@gmail.com', '../../img/cuatro-patas-con-amor.jpg', 3),
('Pou', '123', 'POU', 99111111, 'Paysandu, Uruguay', ' PouOng@gmail.com', '../../img/POU Ong.jpg', 3),
('Rescate', '1234', 'LAC', 96469999, 'Canelones, Uruguay', ' info@buscandoatobi.com', '../../img/Rescate.jpg', 3);

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
