#Creación de un Nuevo Proyecto
$ composer create-project laravel/laravel Uber

#Asignación de NameSpace al Proyecto
$ php artisan app:name Uber

#Ejecución Servidor 
$ php artisan serv

#Crear un nuevo Controlador
$ php artisan make:controller LoginController

#Tarifas Uber X
Tarifa base 7.00
Por Minuto 1.80
Por KM 3.10

#Tarifas Uber XL
Tarifa base 12.25
Por Minuto 3.15
Por KM 5.45

#Tarifas Uber SUV
Tarifa base 40.00
Por Minuto 4.00
Por KM 13.12

#Tarifas Uber Black
Tarifa base 30.00
Por Minuto 3.50
Por KM 8.20

#Ejemplo Uber X

Un Viaje de 80 Minutos y se recorrio 60 km
80 x 1.80 = 144
60 x 3.10 = 186
Tarifa Base = 7

Total del Viaje = $337.00
