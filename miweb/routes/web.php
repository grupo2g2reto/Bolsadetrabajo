<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {
    return view('prueba');
});


Route::get('alumnos', function () {
    return "Mostrando alumnos";
});

Route::get('alumnos/{nombre?}/{edad?}', function ($nombre=null, $edad=null) {
	//Con ? decimos que puede o no estar la variable
    if($edad && !$nombre){
    	//si no se ha introducido el nombre en la ruta pero si la edad
    	return "Mostrando edad $edad";
	}
	else if($nombre && !$edad){
		//si se ha introducido el nombre en la ruta pero no la edad
		return "Mostrando $nombre";
	}
	else if($nombre && $edad){
		//si se ha introducido el nombre y la edad en la ruta
		return "Mostrando $nombre y edad $edad";
	}
});

Route::get('alumnos/{nombre}', function ($nombre) {
    return "Mostrando alumno $nombre";
})->where('nombre', '[A-Za-z]+');

Route::get('alumnos/{edad}', function ($edad) {
    return "Mostrando edad $edad";
})->where('edad', '[0-9]+');


