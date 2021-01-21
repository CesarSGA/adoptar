-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-01-2021 a las 10:06:40
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
(16, 'Fifi', 'sin info', 'Hembra', 0, 'Perro', 'perro1.jpg', 1),
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
(28, 'Beba', 'Muy Activa', 'Hembra', 2, 'Perro', 'perro13.jpg', 1),
(29, 'Choco', 'Pitbull', 'Hembra', 10, 'Perro', 'perro14.jpg', 1),
(30, 'Black', 'Muy agresivo con otros animales', 'Macho', 5, 'Perro', 'perro15.jpg', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
