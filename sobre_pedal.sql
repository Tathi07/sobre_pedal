-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2019 a las 18:31:15
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sobre_pedal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrados`
--

CREATE TABLE `registrados` (
  `ID_registrados` int(3) NOT NULL,
  `nombre_registrados` varchar(15) NOT NULL,
  `correo_registrados` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registrados`
--

INSERT INTO `registrados` (`ID_registrados`, `nombre_registrados`, `correo_registrados`) VALUES
(1, 'admin', 'tatianara74@gmail.com'),
(15, 'sneider', 'sneider212@gmail.com'),
(18, 'Mario', 'instructormsepulveda@gmail.com'),
(19, 'porpois', 'porpoiseseven@gmail.com'),
(20, 'sobrepedal', 'sobrepedal.04@gmail.com'),
(21, 'mario', 'mario12@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `secciones_Sitio` varchar(10) NOT NULL,
  `fecha` int(4) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`secciones_Sitio`, `fecha`, `foto`) VALUES
('seccion2', 1868, 'img/gunnar.png'),
('seccion3', 1895, 'img/beng.png'),
('seccion5', 1908, 'img/tonelli.png'),
('seccion6', 1921, 'img/gunnar.png'),
('seccion7', 1969, 'img/motociclista.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_ingresados`
--

CREATE TABLE `usuarios_ingresados` (
  `id` int(5) NOT NULL,
  `Nombre_user` varchar(10) NOT NULL,
  `Contrasena_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios_ingresados`
--

INSERT INTO `usuarios_ingresados` (`id`, `Nombre_user`, `Contrasena_user`) VALUES
(1, 'adcm', '123'),
(3, 'maira', '123'),
(4, 'laura', '123'),
(5, 'tatiana', '123'),
(6, 'mario', 'aprobado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrados`
--
ALTER TABLE `registrados`
  ADD PRIMARY KEY (`ID_registrados`);

--
-- Indices de la tabla `usuarios_ingresados`
--
ALTER TABLE `usuarios_ingresados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Nombre_user` (`Nombre_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registrados`
--
ALTER TABLE `registrados`
  MODIFY `ID_registrados` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios_ingresados`
--
ALTER TABLE `usuarios_ingresados`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
