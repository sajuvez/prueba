-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2019 a las 23:29:22
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_trabajo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `producto` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `lote` int(11) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`producto`, `cantidad`, `lote`, `fecha_vencimiento`, `precio`) VALUES
('test', 52, 51561, '0000-00-00', 5000),
('papas fritas', 666666, 666666, '2019-12-31', 555555),
('papas fritas', 666666, 666666, '2019-12-31', 555555),
('test', 888, 8888, '2016-08-28', 5555555),
('choclitos', 10, 5052019, '2023-07-29', 500),
('celular', 5, 270, '2019-06-27', 150),
('tomates', 50, 20180101, '2019-01-31', 500),
('papitas', 50, 5555555, '2019-01-31', 24),
('papitas', 50, 5555555, '2019-01-31', 24),
('ximena', 1, 24, '2057-12-31', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
