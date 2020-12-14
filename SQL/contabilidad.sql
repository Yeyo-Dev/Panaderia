-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2020 a las 02:47:13
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `panaderia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contabilidad`
--

CREATE TABLE `contabilidad` (
  `idcuentas` varchar(4) NOT NULL COMMENT 'Letras y numeros',
  `cuentas` varchar(45) NOT NULL COMMENT 'Texto',
  `valor` decimal(10,2) NOT NULL COMMENT 'Numeros con decimales',
  `fecha` date NOT NULL COMMENT 'Fecha'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contabilidad`
--

INSERT INTO `contabilidad` (`idcuentas`, `cuentas`, `valor`, `fecha`) VALUES
('AC1', 'Caja', '5.00', '2020-10-21'),
('AC6', 'Documentos por cobrar', '1.00', '2020-10-21'),
('AD10', 'Intereses pagados por anticipado', '123.00', '2020-10-21'),
('AD3', 'Gastos de Mercadotecnia', '3.00', '2020-10-21'),
('AD6', 'Papeleria Y Utiles', '34.00', '2020-10-21'),
('AF3', 'Mobiliario Y Equipo', '9.00', '2020-10-21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contabilidad`
--
ALTER TABLE `contabilidad`
  ADD PRIMARY KEY (`idcuentas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
