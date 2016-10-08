<!DOCTYPE html>
<html>
  <head>
    <title>Usuarios {{ $user->idUsuario }}</title>
  </head>
  <body>
    <h1>Usuario {{ $user->idUsuario }}</h1>
    <ul>
      <li>Nombre: {{ $user->nombreU }}</li>
      <li>apellido paterno: {{ $user->apellidoPU }}</li>
    </ul>
  </body>
</html>