-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2022 a las 17:13:36
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `data`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) CHARACTER SET utf8 DEFAULT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `userId`) VALUES
(46, 'Educacion', 27),
(47, 'Datos', 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `matricula` varchar(100) DEFAULT NULL,
  `edad` float DEFAULT NULL,
  `promedio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `matricula`, `edad`, `promedio`) VALUES
(1, 'Miguel', '14010023', 20, 8.5),
(2, 'Diana', '16010027', 21, 8.8),
(3, 'Josue', '19010026', 20, 7.9),
(4, 'Sergio', '20024567', 19, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion`
--

CREATE TABLE `educacion` (
  `id` int(11) NOT NULL,
  `matricula` varchar(100) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `edad` float DEFAULT NULL,
  `promedio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `educacion`
--

INSERT INTO `educacion` (`id`, `matricula`, `nombre`, `edad`, `promedio`) VALUES
(1, '14010023', 'Miguel', 20, 8.5),
(2, '16010027', 'Diana', 21, 8.8),
(3, '19010026', 'Josue', 20, 7.9),
(4, '20024567', 'Sergio', 19, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educación`
--

CREATE TABLE `educación` (
  `id` int(11) NOT NULL,
  `Matricula` varchar(100) DEFAULT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Edad` float DEFAULT NULL,
  `Promedio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `pass` varchar(125) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `pass`) VALUES
(6, 'test', '$2y$10$37aSPZD3fPpeeu5PAturLeoB4WqZeB8iGjJih201dthqGC5qX0Y7e'),
(26, 'cano', '$2y$10$uxziFsVRItWZhWgkfBISuOcZeUlhmAUYGUksJJKJgZrX6BbDtIh..'),
(27, 'josue', '$2y$10$5/Z51rM6gQgdRn37SmWVTujHqxL9E6aGWuTI5ABM/0iV9/6ZvcFDW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `educación`
--
ALTER TABLE `educación`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
