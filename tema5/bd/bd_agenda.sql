-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2022 a las 00:28:45
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `profesion_id` int(11) NOT NULL,
  `fotografia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `apellidos`, `fecha_nacimiento`, `sexo`, `telefono`, `direccion`, `profesion_id`, `fotografia`) VALUES
(2, 'Vito Santiago', 'Pimentel Villafani', '2002-02-14', 'M', 645521, 'Jose Marti', 3, ''),
(9, 'Quibusdam esse nihi', 'Consequat Nam est ', '2021-11-04', 'F', 25, 'Eligendi commodi dol', 1, ''),
(10, 'Sapiente distinctio', 'Ipsa non lorem reru', '2003-05-14', 'M', 12, 'Impedit sed aut aut', 1, 'fotocmb.png'),
(12, 'Itaque enim deserunt', 'Repellendus Pariatu', '1982-03-17', 'F', 57, 'Quia ut officia qui ', 1, ''),
(13, 'Nihil ullam at et te', 'Mollit debitis minus', '2009-03-12', 'F', 28, 'Aut laborum corrupti', 1, ''),
(14, 'Dolores in dolorem v', 'Sunt ad aut aute dol', '2008-12-02', 'M', 44, 'Et sit sed explicabo', 1, 'fotocmb.jpg'),
(15, 'Laborum delectus en', 'Cumque cupiditate qu', '1971-01-26', 'M', 77, 'Elit et eum esse c', 1, 'cmb.jpg'),
(16, 'Repudiandae aperiam ', 'Eos exercitation cu', '2012-02-11', 'F', 21, 'Ut corporis ducimus', 1, ''),
(17, 'Perspiciatis quis e', 'Sint ut quia sed ve', '2012-05-11', 'M', 41, 'Et assumenda pariatu', 1, '17..'),
(18, 'Reprehenderit maior', 'Commodo sit accusan', '2000-05-11', 'M', 8, 'Voluptatem consequa', 1, '18.'),
(19, 'Maiores quis earum q', 'Aut pariatur Enim v', '1979-05-25', 'F', 15, 'Et enim nihil omnis ', 1, '19..'),
(20, 'Error at sit velit r', 'Est ipsum quis quo', '1987-02-17', 'M', 63, 'Reiciendis asperiore', 1, '20..'),
(21, 'Et ipsum velit enim', 'Sapiente ea doloribu', '1990-10-20', 'F', 29, 'Quod dolore at ex te', 1, '21..'),
(22, 'Juan', 'Perez', '1980-01-10', 'M', 777777, 'Calvo 190', 1, ''),
(23, 'Juan', 'Perez', '1980-01-10', 'M', 777777, 'Calvo 190', 1, ''),
(24, 'Juan', 'Perez', '1980-01-10', 'M', 777777, 'Calvo 190', 1, ''),
(25, 'Voluptatibus autem v', 'Nesciunt facilis od', '1980-01-26', 'F', 62, 'Necessitatibus id in', 1, ''),
(26, 'Deserunt vel consect', 'Similique placeat o', '1998-05-07', 'F', 11, 'Et velit vel volupt', 1, '26..');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesion`
--

CREATE TABLE `profesion` (
  `id` int(11) NOT NULL,
  `profesion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesion`
--

INSERT INTO `profesion` (`id`, `profesion`) VALUES
(1, 'Ingeniería en Sistemas'),
(3, 'Ingeniería en Ciencias de la Computación'),
(4, 'Ingeniería en TI y Seguridad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `correoelectronico` varchar(200) NOT NULL,
  `celular` int(11) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nombrecompleto` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `correoelectronico`, `celular`, `password`, `nombrecompleto`, `nivel`) VALUES
(1, 'usuario@sis256.com', 71171177, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Usuario', 0),
(2, 'admin@sis256.com', 71171177, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Adinistrador', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesion`
--
ALTER TABLE `profesion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `profesion`
--
ALTER TABLE `profesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
