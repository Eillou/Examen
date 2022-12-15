-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2022 a las 02:59:11
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ordinario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regi`
--

CREATE TABLE `regi` (
  `id` int(7) NOT NULL,
  `usuario` varchar(122) NOT NULL,
  `contraseña` varchar(122) NOT NULL,
  `direccion` varchar(122) NOT NULL,
  `propietario` varchar(122) NOT NULL,
  `cvv` int(3) NOT NULL,
  `num_tar` int(16) NOT NULL,
  `fecha` date NOT NULL,
  `num_tel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `regi`
--

INSERT INTO `regi` (`id`, `usuario`, `contraseña`, `direccion`, `propietario`, `cvv`, `num_tar`, `fecha`, `num_tel`) VALUES
(1, ' ddd', ' dddd', 'ddd', 'ddd', 123, 0, '0000-00-00', 1231231231),
(2, ' ddd', ' ddd', 'ddd', 'ddd', 452, 0, '0000-00-00', 7585785);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `regi`
--
ALTER TABLE `regi`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
