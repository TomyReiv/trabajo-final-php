-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2022 a las 01:19:44
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
-- Base de datos: `habilitaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoja4`
--

CREATE TABLE `hoja4` (
  `id` int(11) NOT NULL,
  `numero` varchar(30) NOT NULL,
  `R.social` varchar(50) NOT NULL,
  `C.inicial` varchar(30) NOT NULL,
  `firma` varchar(30) NOT NULL,
  `rubros` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `acta` varchar(30) NOT NULL,
  `patente` varchar(30) NOT NULL,
  `control2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hoja4`
--

INSERT INTO `hoja4` (`id`, `numero`, `R.social`, `C.inicial`, `firma`, `rubros`, `fecha`, `acta`, `patente`, `control2`) VALUES
(1, '12452', 'Unifrio S.A', 'no', 'Unifrio', 'Hielo envasado', '2022-10-17', '0', 'AS123AA', '0'),
(2, '12345', '  Unifrio SA', '', 'Unifrio', 'Hielo', '2022-10-17', '', 'AJ456QA', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hoja4`
--
ALTER TABLE `hoja4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hoja4`
--
ALTER TABLE `hoja4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
