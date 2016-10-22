-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-10-2016 a las 16:43:48
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
  `fotografia` text NOT NULL,
  `usuarioC` varchar(11) NOT NULL,
  `passwordC` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Conductores`
--

INSERT INTO `Conductores` (`idConductor`, `nombre`, `aPaterno`, `aMaterno`, `idEstado`, `telefono`, `fotografia`, `usuarioC`, `passwordC`) VALUES
(1, 'Gabriel', 'Mancera', 'Lopez', 1, '5531321143', 'img/foto.png', 'gabriel', '123'),
(2, 'Erick', 'Lopez', 'n', 2, '5531321143', 'img/fotografia.png', 'erick', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estados`
--

CREATE TABLE `Estados` (
  `idEstado` int(11) NOT NULL,
  `nombreEstado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Estados`
--

INSERT INTO `Estados` (`idEstado`, `nombreEstado`) VALUES
(1, 'CDMx'),
(2, 'Edomex'),
(3, 'yucatan'),
(4, 'guerrero');

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
-- Estructura de tabla para la tabla `MetodosPago`
--

CREATE TABLE `MetodosPago` (
  `idPago` int(11) NOT NULL,
  `nombrePago` text NOT NULL,
  `cuentaPago` varchar(4) NOT NULL,
  `mm` varchar(2) NOT NULL,
  `dd` varchar(2) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `MetodosPago`
--

INSERT INTO `MetodosPago` (`idPago`, `nombrePago`, `cuentaPago`, `mm`, `dd`, `cvv`, `idUsuario`) VALUES
(1, 'TDC BANAMEX', '2200', '12', '19', '123', 1),
(2, 'TDC AMEX', '8913', '10', '18', '123', 1);

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
  `correoF` text NOT NULL,
  `usuarioU` varchar(11) NOT NULL,
  `passwordU` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`idUsuario`, `nombreU`, `apellidoPU`, `apellidoMU`, `telefono`, `idEstado`, `correoA`, `correoF`, `usuarioU`, `passwordU`) VALUES
(1, 'Alberto', 'Luebbert', 'Mendoza', '5531321143', 1, 'albeto@ideashappy.com', 'albeto@ideashappy.com', 'almsx', '123'),
(2, 'Eduard', 'Saint Martin', 'Lopez', '5531321143', 1, 'pepe@gg.com', 'pepe@gg.com', 'eduardo', '123');

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
  `idMarca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Vehiculos`
--

INSERT INTO `Vehiculos` (`idVehiculo`, `nombreVehiculo`, `anio_modelo`, `color`, `placas`, `idMarca`) VALUES
(1, 'VENTO', '2016', 'ROJO', 'XSS-SLS', 1);

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
  `idPago` int(11) NOT NULL,
  `costoViaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ViajesUber`
--

INSERT INTO `ViajesUber` (`idViaje`, `fechaSolicitud`, `fechaInicio`, `fechaFinaliza`, `latitudInicio`, `longitudInicio`, `latitudFinal`, `longitudFinal`, `idUsuario`, `idVehiculo`, `idConductor`, `idCategoria`, `idPago`, `costoViaje`) VALUES
(1, '2016-10-01 10:21:34', '2016-10-01 10:21:34', '2016-10-01 10:21:34', '19.2929292', '-99.9292929292', '0', '0', 1, 1, 1, 1, 1, '0');

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
-- Indices de la tabla `MetodosPago`
--
ALTER TABLE `MetodosPago`
  ADD PRIMARY KEY (`idPago`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idEstado` (`idEstado`);

--
-- Indices de la tabla `Vehiculos`
--
ALTER TABLE `Vehiculos`
  ADD PRIMARY KEY (`idVehiculo`),
  ADD KEY `idMarca` (`idMarca`);

--
-- Indices de la tabla `ViajesUber`
--
ALTER TABLE `ViajesUber`
  ADD PRIMARY KEY (`idViaje`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idVehiculo` (`idVehiculo`),
  ADD KEY `idConductor` (`idConductor`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idPago` (`idPago`);

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
  MODIFY `idConductor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `Estados`
--
ALTER TABLE `Estados`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `Marcas`
--
ALTER TABLE `Marcas`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `MetodosPago`
--
ALTER TABLE `MetodosPago`
  MODIFY `idPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Vehiculos`
--
ALTER TABLE `Vehiculos`
  MODIFY `idVehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ViajesUber`
--
ALTER TABLE `ViajesUber`
  MODIFY `idViaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Conductores`
--
ALTER TABLE `Conductores`
  ADD CONSTRAINT `conductores_ibfk_1` FOREIGN KEY (`idEstado`) REFERENCES `Estados` (`idEstado`);

--
-- Filtros para la tabla `MetodosPago`
--
ALTER TABLE `MetodosPago`
  ADD CONSTRAINT `metodospago_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `Usuarios` (`idUsuario`);

--
-- Filtros para la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idEstado`) REFERENCES `Estados` (`idEstado`);

--
-- Filtros para la tabla `Vehiculos`
--
ALTER TABLE `Vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`idMarca`) REFERENCES `Marcas` (`idMarca`);

--
-- Filtros para la tabla `ViajesUber`
--
ALTER TABLE `ViajesUber`
  ADD CONSTRAINT `viajesuber_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `Usuarios` (`idUsuario`),
  ADD CONSTRAINT `viajesuber_ibfk_2` FOREIGN KEY (`idVehiculo`) REFERENCES `Vehiculos` (`idVehiculo`),
  ADD CONSTRAINT `viajesuber_ibfk_3` FOREIGN KEY (`idConductor`) REFERENCES `Conductores` (`idConductor`),
  ADD CONSTRAINT `viajesuber_ibfk_4` FOREIGN KEY (`idCategoria`) REFERENCES `CategoriasCoches` (`idCategoria`),
  ADD CONSTRAINT `viajesuber_ibfk_5` FOREIGN KEY (`idPago`) REFERENCES `MetodosPago` (`idPago`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
