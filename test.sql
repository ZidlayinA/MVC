-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2023 a las 13:39:14
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `Codigo` int(50) NOT NULL DEFAULT 0,
  `Descripcion` varchar(50) NOT NULL DEFAULT '0',
  `Costo` int(4) NOT NULL DEFAULT 0,
  `Stock` int(20) NOT NULL,
  `Foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `Codigo`, `Descripcion`, `Costo`, `Stock`, `Foto`) VALUES
(1, 1001, 'Ant-Man and The Wasp: Quantumania', 293, 40, '230226084409-41492.jpg'),
(2, 1002, 'Ella dijo', 315, 23, '230226084524-40710.jpg'),
(3, 1003, 'The Whale', 206, 83, '230226084551-41497.jpg'),
(4, 1004, 'Maybe I Do', 124, 64, '230226084624-41611.jpg'),
(5, 1005, 'Avatar: The Way Of Water', 92, 130, '230226084648-39644.jpg'),
(6, 1006, 'Missing ', 164, 123, '230226084717-41646.jpg'),
(7, 1007, 'The Amazing Maurice ', 125, 25, '230226084813-41400.jpg'),
(8, 1008, 'Puss In Boots: The Last Wish', 380, 92, '230226084900-41139.jpg'),
(9, 1009, 'Mummies', 165, 18, '230226090357-41760.jpg'),
(10, 1010, 'Huesera', 192, 155, '230226090434-41498.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(1, 'dbelmares@utc.edu.mx', 'belmares');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
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
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
