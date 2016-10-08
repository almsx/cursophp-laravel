#Creación de un Nuevo Proyecto
$ composer create-project laravel/laravel Uber

#Asignación de NameSpaceo o Renombrar NameSpace al Proyecto
$ php artisan app:name Uber

#Ejecución Servidor 
$ php artisan serv

#Crear un nuevo Controlador
$ php artisan make:controller LoginController

#Crear un nuevo Controlador con metodos basicos - Acceso API
$ php artisan make:controller ConductoresController --resource

#Crear un Modelo
$ php artisan make:model Conductores

#Crear Un modelo con migración para crear la base de datos desde el Modelo
$ php artisan make:model Vehiculos --migration

#Utilizar tabla de bases de datos existentes
$ composer require --dev --no-update "xethron/migrations-generator:dev-l5"

$ composer require --dev --no-update "way/generators:dev-feature/laravel-five-stable"

$ composer config repositories.repo-name git "git@github.com:jamisonvalenta/Laravel-4-Generators.git"

$ composer update

#Agregamos a Service Providers en config/app.php:
$ Way\Generators\GeneratorsServiceProvider::class,
$ Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider::class,

#Hacemos la migración con base de datos existente4
$ php artisan migrate:generate

#Form html
$ composer require laravelcollective/html

#Laravel Collective
$ https://laravelcollective.com/docs/5.0/html#installation

#Evitar timestamps para actualizacion y creacion se declaran en el modelo
$ public $timestamps = false;