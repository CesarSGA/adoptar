-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-01-2021 a las 23:23:27
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adopciones`
--
CREATE DATABASE IF NOT EXISTS `adopciones` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `adopciones`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adopciones`
--

CREATE TABLE `adopciones` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pet` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `pet` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `name`, `lastname`, `email`, `phone`, `pet`, `date`) VALUES
(1, 'Gabriela', 'Cortes', 'maria@gmail.com', '4432232379', 'Perro', '2021-01-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historias`
--

CREATE TABLE `historias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `historia` varchar(150) NOT NULL,
  `imagen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historias`
--

INSERT INTO `historias` (`id`, `nombre`, `historia`, `imagen`) VALUES
(1, 'Max', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione cum dolore in libero at doloremque ipsam magni? Sit eum natus, minus corrupti in ips', '1.jpg'),
(2, 'Rorro', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione cum dolore in libero at doloremque ipsam magni? Sit eum natus, minus corrupti in ips', '2.jpg'),
(3, 'Chimuelo', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione cum dolore in libero at doloremque ipsam magni? Sit eum natus, minus corrupti in ips', '3.jpg'),
(4, 'Estrella', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione cum dolore in libero at doloremque ipsam magni? Sit eum natus, minus corrupti in ips', '4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `nota` text NOT NULL,
  `sexo` enum('Hembra','Macho') NOT NULL,
  `edad` int(2) NOT NULL DEFAULT 0,
  `tipo` enum('Gato','Perro') NOT NULL,
  `imagen` text NOT NULL DEFAULT 'gato',
  `estatus` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id`, `nombre`, `nota`, `sexo`, `edad`, `tipo`, `imagen`, `estatus`) VALUES
(1, 'Fifi', 'Es muy cariñosa', 'Hembra', 1, 'Gato', 'gato1.jpg', 1),
(2, 'Kira', 'Viejita pero activa\r\nmuy cariñosa\r\n', 'Hembra', 7, 'Gato', 'gato2.jpg', 1),
(3, 'Latas', 'Joven\r\nesterilizado \r\ncome bien', 'Macho', 4, 'Gato', 'gato3.jpg', 1),
(4, 'Lencha', 'No le gusta estar en interiores\r\nMuy activa', 'Hembra', 1, 'Gato', 'gato4.jpg', 1),
(5, 'Fiona', 'Muy Gorda\r\nDe día una y de noche otra ', 'Hembra', 2, 'Gato', 'gato5.jpg', 1),
(6, 'Cocos', 'Muy macho', 'Macho', 2, 'Gato', 'gato6.jpg', 1),
(7, 'Micha', 'Muy muy activa\r\nConvive con perros', 'Hembra', 0, 'Gato', 'gato7.jpg', 1),
(8, 'Orejitas de Lince', 'Fuerte\r\nCazador\r\nEs Fiel', 'Macho', 5, 'Gato', 'gato8.jpg', 1),
(9, 'Pepo', 'Negro como la noche', 'Macho', 1, 'Gato', 'gato9.jpg', 1),
(10, 'Pelusa', '', 'Hembra', 0, 'Gato', 'gato10.jpg', 1),
(11, 'Blacky', 'Muy callejera\r\nNo usa arenero', 'Hembra', 4, 'Gato', 'gato11.jpg', 1),
(12, 'Chepa', 'Rescatada de una camada de calle', 'Hembra', 0, 'Gato', 'gato12.jpg', 1),
(13, 'Zarpado', 'Agresivo con otros animales ', 'Macho', 5, 'Gato', 'gato13.jpg', 1),
(14, 'Cocoro', 'Muy cariñoso\r\nMuy Dormilón\r\nMuy Tranquilo', 'Macho', 2, 'Gato', 'gato14.jpg', 1),
(15, 'Mixiote', 'Come mucho\r\nRequiere atención', 'Macho', 9, 'Gato', 'gato15.jpg', 1),
(16, 'Luna', 'sin info', 'Hembra', 0, 'Perro', 'perro1.jpg', 1),
(17, 'Fresa', 'todas sus vacunas en regla', 'Hembra', 4, 'Perro', 'perro2.jpg', 1),
(18, 'Drako', 'Husky', 'Macho', 4, 'Perro', 'perro3.jpg', 1),
(19, 'Meredith', 'Bulldog', 'Hembra', 1, 'Perro', 'perro4.jpg', 1),
(20, 'Max', 'Pitbull', 'Macho', 4, 'Perro', 'perro5.jpg', 1),
(21, 'Spike', 'Pug', 'Macho', 6, 'Perro', 'perro6.jpg', 1),
(22, 'Pupy', 'Muy viejita', 'Hembra', 13, 'Perro', 'perro7.jpg', 1),
(23, 'Coffe', 'Muy travieso', 'Macho', 0, 'Perro', 'perro8.jpg', 1),
(24, 'Oliva', 'Bella como una estrella', 'Hembra', 0, 'Perro', 'perro9.jpg', 1),
(25, 'Gonter', 'Protector', 'Macho', 3, 'Perro', 'perro10.jpg', 1),
(26, 'Kobu', 'No convive con mas perros', '', 4, 'Perro', 'perro11.jpg', 1),
(27, 'Chaneka', 'Pastor Belga', 'Hembra', 0, 'Perro', 'perro12.jpg', 1),
(28, 'Beba', 'Muy Activa', 'Hembra', 2, 'Perro', 'perro13.jpg', 0),
(29, 'Choco', 'Pitbull', 'Hembra', 10, 'Perro', 'perro14.jpg', 1),
(30, 'Black', 'Muy agresivo con otros animales', 'Macho', 5, 'Perro', 'perro15.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(30) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `rfc` varchar(14) NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `name`, `curp`, `rfc`, `address`, `email`) VALUES
(1, 'cesar', 'e10adc3949ba59abbe56e057f20f883e', 'Cesar Guzman', 'guzman18', 'guzman', 'Antonio Alzate', 'cesar@mail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adopciones`
--
ALTER TABLE `adopciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_adopciones_usuarios` (`id_user`),
  ADD KEY `fk_adopciones_mascotas` (`id_pet`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historias`
--
ALTER TABLE `historias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adopciones`
--
ALTER TABLE `adopciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `historias`
--
ALTER TABLE `historias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adopciones`
--
ALTER TABLE `adopciones`
  ADD CONSTRAINT `fk_adopciones_mascotas` FOREIGN KEY (`id_pet`) REFERENCES `mascotas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_adopciones_usuarios` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
