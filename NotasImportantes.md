#SSH y Llaves

##Creación y Copia de Llaves de SSH Existentes (Linux y OSX)

>
~~~
$ pbcopy < ~/.ssh/id_rsa.pub
~~~

##Instalación y Configuración de Vagrant (Recomendado por Arce)
$ https://www.youtube.com/watch?v=k9xQBKzpOjk

##Bajar GPG para Windows
Liga - https://www.gnupg.org/download/

## Mac
Liga - https://help.github.com/articles/generating-a-new-gpg-key/#platform-mac

## Windows
Liga - https://help.github.com/articles/generating-a-new-gpg-key/#platform-windows

## GNU/Linux
Liga - https://help.github.com/articles/generating-a-new-gpg-key/#platform-linux

## Creación de un Nuevo Proyecto
>
~~~
$ composer create-project laravel/laravel Uber
~~~

## Asignación de NameSpaceo o Renombrar NameSpace al Proyecto
>
~~~
$ php artisan app:name Uber
~~~

## Ejecución Servidor 
>
~~~
$ php artisan serv
~~~

## Crear un nuevo Controlador
>
~~~
$ php artisan make:controller LoginController
~~~

## Crear un nuevo Controlador con metodos basicos - Acceso API
>
~~~
$ php artisan make:controller ConductoresController --resource
~~~

## Crear un Modelo
>
~~~
$ php artisan make:model Conductores
~~~

## Crear Un modelo con migración para crear la base de datos desde el Modelo
>
~~~
$ php artisan make:model Vehiculos --migration
~~~

## Utilizar tabla de bases de datos existentes
## agregar estas lineas en la raiz del proyecto creado 1 x 1

>
~~~
$ composer require --dev --no-update "xethron/migrations-generator:dev-l5"
~~~

>
~~~
$ composer require --dev --no-update "way/generators:dev-feature/laravel-five-stable"
~~~

>
~~~
$ composer config repositories.repo-name git "git@github.com:jamisonvalenta/Laravel-4-Generators.git"
~~~

>
~~~
$ composer update
~~~

## Agregamos a Service Providers en config/app.php:

>
~~~
Way\Generators\GeneratorsServiceProvider::class,
Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider::class,
~~~

## Hacemos la migración con base de datos existente4
>
~~~
$ php artisan migrate:generate
~~~

## Form html - Laravel Collective (En raíz del proyecto)
>
~~~
$ composer require laravelcollective/html
~~~


## Laravel Collective (Instalación)
Liga - https://laravelcollective.com/docs/5.0/html#installation

## Evitar timestamps para actualización y creación(created_at, updated_at) se declaran en el modelo creado.

>
~~~
public $timestamps = false;
~~~