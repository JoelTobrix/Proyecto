-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2024 a las 04:08:23
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyects`
--
CREATE DATABASE IF NOT EXISTS `proyects` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `proyects`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `ID` int(11) NOT NULL,
  `Codigo_acceso` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`ID`, `Codigo_acceso`) VALUES
(1, '8906');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `Codigo_barras` int(11) NOT NULL,
  `Producto` varchar(100) NOT NULL,
  `Precio` double NOT NULL,
  `Existencia` int(11) NOT NULL,
  `Acciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`Codigo_barras`, `Producto`, `Precio`, `Existencia`, `Acciones`) VALUES
(2, 'Mouse', 12, 3, 'Disponible'),
(8, 'Mouse', 15, 9, 'Disponible'),
(11, 'Impresora Epson', 12.25, 3, 'Disponible'),
(12, 'Impresora Epson', 125.35, 3, 'Disponible'),
(13, 'Impresora Epson', 13.45, 1, 'Disponible'),
(14, 'Mouse', 53.25, 4, 'Disponible'),
(15, 'Impresora Epson', 530.2, 4, 'Disponible'),
(18, 'Impresora Epson', 13.5, 4, 'Disponible'),
(21, 'Mouse', 12.45, 1, 'Disponible'),
(22, 'Mouse', 13.52, 3, 'Disponible'),
(24, 'Impresora Epson', 10.25, 3, 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_usuario` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `contraseña` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_usuario`, `usuario`, `contraseña`) VALUES
(4, 'Dario07@example.com', 'dario7'),
(5, 'julissa2007@example.com', 'july'),
(6, 'Maria2002@example.com', 'escuela2017'),
(7, 'Pamela123@example.com', 'Pame123'),
(8, 'Ximena123@example.com', 'Ximenita'),
(9, 'Valeria2002@example.com', 'Firulais123'),
(11, 'Kenny123@gmail.com', 'kemsito'),
(13, 'Marco03@example.com', '123'),
(14, 'Ricardo2001@example.com', 'Rick'),
(15, 'Fernanda2003@example.com', 'Fer123'),
(16, 'Mariamagdalena123@example.com', 'Mary123'),
(17, 'Juanfer2001@example.com', 'Fer123'),
(18, 'ValeriaYanez123@example.com', 'Jenny2003');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`Codigo_barras`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `Codigo_barras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
