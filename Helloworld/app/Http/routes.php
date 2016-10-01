<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('controlador','PruebaController@index');
Route::get('name/{name}','PruebaController@nombre');

Route::resource('login','LoginController');


Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function(){
	return "hola desde routes.php";
});

Route::get('nombre/{nombre}', function($nombre){
	return "mi nombre es ".$nombre;
});

Route::get('edad/{edad}', function($edad){
	return "tu edad es ".$edad;
});