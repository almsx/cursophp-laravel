<!DOCTYPE html>
<html>
  <head>
    <title>Usuarios {{ $car->id }}</title>
  </head>
  <body>
    <h1>Usuario {{ $car->id }}</h1>
    <ul>
      <li>Make: {{ $car->make }}</li>
      <li>Model: {{ $car->model }}</li>
      <li>Produced on: {{ $car->produced_on }}</li>
    </ul>
  </body>
</html>