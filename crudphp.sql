-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2023 a las 02:24:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crudphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cod_producto` int(255) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `telefono` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_producto`, `producto`, `nombre`, `apellidos`, `telefono`) VALUES
(28, 'xbox series s', 'Rodrigo Alejandro', 'Ramos Lozano', 33112550),
(29, 'Play station 5', 'Manuel Alejandro', 'Perez Arellano', 12345679),
(30, 'nintendo switch oled', 'Pedro Adrian', 'Moreno Mendoza ', 33145721),
(31, 'Doloremque optio in', 'Reprehenderit assume', 'Non cum commodo blan', 71),
(32, 'Doloremque optio in', 'Reprehenderit assume', 'Non cum commodo blan', 71),
(33, 'xbox', 'alejandro', 'gutierrez', 311),
(34, 'xbox', 'alejandro', 'gutierrez', 311),
(35, 'play4', 'ffff', 'ggggggggg', 2121),
(36, 'play4', 'ffff', 'ggggggggg', 2121),
(37, 'Ea dolores sed in qu', 'Laboris molestiae ap', 'Autem suscipit fugia', 96),
(38, 'casa', 'jajaja', 'ohhhhhh', 21),
(39, 'Alias cillum tempor ', 'Commodo aperiam ut m', 'Modi reprehenderit ', 72),
(40, 'Illum ea iure conse', 'Nisi aperiam beatae ', 'Et et eos est ut cu', 40),
(41, 'Similique in incidun', 'Nihil mollitia quo p', 'Nisi iusto placeat ', 13),
(42, 'Eos ratione eum inv', 'Nisi magni omnis deb', 'Obcaecati magna inci', 83),
(43, 'Ratione eaque aliqui', 'Ut voluptatem deseru', 'Modi odit labore con', 71),
(44, 'rodri', 'jajaja', 'holaa', 1111),
(45, 'pc master race', 'lazaro', 'estrada', 31313);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`) VALUES
(1, 'Possimus fugit lab', 'Et reprehenderit ut ', '94'),
(2, 'rodri', 'dadad@gmail.com', '123'),
(3, 'rodrigo', 'corisramos@gmail.com', '12334'),
(4, 'coris', 'carlitos@hotmail.com', '123'),
(5, 'lazaro', 'feranndito12@gmail.com', '1234'),
(6, 'moises ', 'moye30@gmail.com', '123'),
(7, 'usuario1', 'usuario1@gmail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cod_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `cod_producto` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
