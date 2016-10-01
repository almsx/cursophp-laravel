SELECT Usuarios.*,MetodosPago.*,Conductores.*, Vehiculos.*, CategoriasCoches.*, Estados.*, Marcas.*, ViajesUber.*
FROM Usuarios
JOIN MetodosPago ON Usuarios.idUsuario = MetodosPago.idUsuario
JOIN ViajesUber ON Usuarios.idUsuario = ViajesUber.idUsuario
JOIN Conductores ON ViajesUber.idConductor = Conductores.idConductor
JOIN Vehiculos ON ViajesUber.idVehiculo  = Vehiculos.idVehiculo
JOIN CategoriasCoches ON ViajesUber.idCategoria = CategoriasCoches.idCategoria
JOIN Estados ON Usuarios.idEstado = Estados.idEstado
JOIN Marcas ON Vehiculos.idMarca = Marcas.idMarca