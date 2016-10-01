CREATE TABLE `CategoriasCoches` (
  `idCategoria` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
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

CREATE TABLE `Estados` (
  `idEstado` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombreEstado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Conductores`
--

CREATE TABLE `Conductores` (
  `idConductor` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `aPaterno` varchar(40) NOT NULL,
  `aMaterno` varchar(40) NOT NULL,
  `idEstado` int(11) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `fotografia` text NOT NULL DEFAULT 'img/fotografia.png',
  FOREIGN KEY (idEstado) REFERENCES Estados(idEstado)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Marcas` (
  `idMarca` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombreMarca` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Marcas`
--

INSERT INTO `Marcas` (`idMarca`, `nombreMarca`) VALUES
(1, 'NISSAN'),
(2, 'BMW'),
(3, 'FORD');


CREATE TABLE `Usuarios` (
  `idUsuario` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombreU` varchar(40) NOT NULL,
  `apellidoPU` varchar(40) NOT NULL,
  `apellidoMU` varchar(40) NOT NULL,
  `telefono` varchar(40) NOT NULL,
  `idEstado` int(11) NOT NULL,
  `correoA` text NOT NULL,
  `correoF` text NOT NULL,
  FOREIGN KEY (idEstado) REFERENCES Estados(idEstado)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Vehiculos` (
  `idVehiculo` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombreVehiculo` text NOT NULL,
  `anio_modelo` text NOT NULL,
  `color` text NOT NULL,
  `placas` text NOT NULL,
  `idMarca` int(11) NOT NULL,
  FOREIGN KEY (idMarca) REFERENCES Marcas(idMarca)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pagos`
--

CREATE TABLE `MetodosPago` (
  `idPago` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombrePago` text NOT NULL,
  `cuentaPago` varchar(4) NOT NULL,
  `mm` varchar(2) NOT NULL,
  `dd` varchar(2) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  FOREIGN KEY (idUsuario) REFERENCES Usuarios(idUsuario)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `ViajesUber` (
  `idViaje` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
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
  `costoViaje` text NOT NULL,
  FOREIGN KEY (idUsuario) REFERENCES Usuarios (idUsuario),
  FOREIGN KEY (idVehiculo) REFERENCES Vehiculos (idVehiculo),
  FOREIGN KEY (idConductor) REFERENCES Conductores (idConductor),
  FOREIGN KEY (idCategoria) REFERENCES CategoriasCoches (idCategoria),
  FOREIGN KEY (idPago) REFERENCES MetodosPago (idPago)
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

