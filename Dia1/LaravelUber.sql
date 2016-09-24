-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-09-2016 a las 19:45:49
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `LaravelUber`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CategoriasCoches`
--

CREATE TABLE `CategoriasCoches` (
  `idCategoria` int(11) NOT NULL,
  `nombreCategoria` text NOT NULL,
  `banderazo` varchar(30) NOT NULL DEFAULT '35'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `CategoriasCoches`
--

INSERT INTO `CategoriasCoches` (`idCategoria`, `nombreCategoria`, `banderazo`) VALUES
(1, 'Uber X', '35'),
(2, 'Uber Black', '70'),
(3, 'Uber Suv', '100'),
(4, 'Uber XL', '150'),
(5, 'Uber PET', '150');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Conductores`
--

CREATE TABLE `Conductores` (
  `idConductor` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `aPaterno` varchar(40) NOT NULL,
  `aMaterno` varchar(40) NOT NULL,
  `idEstado` int(11) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `fotografia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estados`
--

CREATE TABLE `Estados` (
  `idEstado` int(11) NOT NULL,
  `nombreEstado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Marcas`
--

CREATE TABLE `Marcas` (
  `idMarca` int(11) NOT NULL,
  `nombreMarca` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Marcas`
--

INSERT INTO `Marcas` (`idMarca`, `nombreMarca`) VALUES
(1, 'NISSAN'),
(2, 'BMW'),
(3, 'FORD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pagos`
--

CREATE TABLE `Pagos` (
  `idPago` int(11) NOT NULL,
  `nombrePago` text NOT NULL,
  `cuentaPago` varchar(4) NOT NULL,
  `mm` varchar(2) NOT NULL,
  `dd` varchar(2) NOT NULL,
  `cvv` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombreU` varchar(40) NOT NULL,
  `apellidoPU` varchar(40) NOT NULL,
  `apellidoMU` varchar(40) NOT NULL,
  `telefono` varchar(40) NOT NULL,
  `idEstado` int(11) NOT NULL,
  `correoA` text NOT NULL,
  `correoF` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios_Pagos`
--

CREATE TABLE `Usuarios_Pagos` (
  `idUsuarioPago` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idPago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Vehiculos`
--

CREATE TABLE `Vehiculos` (
  `idVehiculo` int(11) NOT NULL,
  `nombreVehiculo` text NOT NULL,
  `anio_modelo` text NOT NULL,
  `color` text NOT NULL,
  `placas` text NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `idMarca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ViajesUber`
--

CREATE TABLE `ViajesUber` (
  `idViaje` int(11) NOT NULL,
  `fechaSolicitud` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechaInicio` datetime NOT NULL,
  `fechaFinaliza` datetime NOT NULL,
  `latitudInicio` varchar(40) NOT NULL,
  `longitudInicio` varchar(40) NOT NULL,
  `latitudFinal` varchar(40) NOT NULL,
  `longitudFinal` varchar(40) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idVehiculo` int(11) NOT NULL,
  `idConductor` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `costoViaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `CategoriasCoches`
--
ALTER TABLE `CategoriasCoches`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `Conductores`
--
ALTER TABLE `Conductores`
  ADD PRIMARY KEY (`idConductor`),
  ADD KEY `idEstado` (`idEstado`);

--
-- Indices de la tabla `Estados`
--
ALTER TABLE `Estados`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `Marcas`
--
ALTER TABLE `Marcas`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `Pagos`
--
ALTER TABLE `Pagos`
  ADD PRIMARY KEY (`idPago`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idEstado` (`idEstado`);

--
-- Indices de la tabla `Usuarios_Pagos`
--
ALTER TABLE `Usuarios_Pagos`
  ADD PRIMARY KEY (`idUsuarioPago`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idPago` (`idPago`);

--
-- Indices de la tabla `Vehiculos`
--
ALTER TABLE `Vehiculos`
  ADD PRIMARY KEY (`idVehiculo`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idMarca` (`idMarca`);

--
-- Indices de la tabla `ViajesUber`
--
ALTER TABLE `ViajesUber`
  ADD PRIMARY KEY (`idViaje`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idVehiculo` (`idVehiculo`),
  ADD KEY `idConductor` (`idConductor`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `CategoriasCoches`
--
ALTER TABLE `CategoriasCoches`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `Conductores`
--
ALTER TABLE `Conductores`
  MODIFY `idConductor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Estados`
--
ALTER TABLE `Estados`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Marcas`
--
ALTER TABLE `Marcas`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `Pagos`
--
ALTER TABLE `Pagos`
  MODIFY `idPago` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Usuarios_Pagos`
--
ALTER TABLE `Usuarios_Pagos`
  MODIFY `idUsuarioPago` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Vehiculos`
--
ALTER TABLE `Vehiculos`
  MODIFY `idVehiculo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ViajesUber`
--
ALTER TABLE `ViajesUber`
  MODIFY `idViaje` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Conductores`
--
ALTER TABLE `Conductores`
  ADD CONSTRAINT `conductores_ibfk_1` FOREIGN KEY (`idEstado`) REFERENCES `Estados` (`idEstado`);

--
-- Filtros para la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idEstado`) REFERENCES `Estados` (`idEstado`);

--
-- Filtros para la tabla `Usuarios_Pagos`
--
ALTER TABLE `Usuarios_Pagos`
  ADD CONSTRAINT `usuarios_pagos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `Usuarios` (`idUsuario`),
  ADD CONSTRAINT `usuarios_pagos_ibfk_2` FOREIGN KEY (`idPago`) REFERENCES `Pagos` (`idPago`);

--
-- Filtros para la tabla `Vehiculos`
--
ALTER TABLE `Vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `CategoriasCoches` (`idCategoria`),
  ADD CONSTRAINT `vehiculos_ibfk_2` FOREIGN KEY (`idMarca`) REFERENCES `Marcas` (`idMarca`);

--
-- Filtros para la tabla `ViajesUber`
--
ALTER TABLE `ViajesUber`
  ADD CONSTRAINT `viajesuber_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `Usuarios` (`idUsuario`),
  ADD CONSTRAINT `viajesuber_ibfk_2` FOREIGN KEY (`idVehiculo`) REFERENCES `Vehiculos` (`idVehiculo`),
  ADD CONSTRAINT `viajesuber_ibfk_3` FOREIGN KEY (`idConductor`) REFERENCES `Conductores` (`idConductor`),
  ADD CONSTRAINT `viajesuber_ibfk_4` FOREIGN KEY (`idCategoria`) REFERENCES `CategoriasCoches` (`idCategoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
