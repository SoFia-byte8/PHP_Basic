<?php

use Illuminate\Support\Facades\Route;
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
//Callback: Función sin nombre, que hace parte de los parametrod de la Invocación de otra.
Route::get('/', function () {
    return view('welcome');
});
//JAVA, .NET: Fuertemente Tipados.
//PHP, PYTHON, JAVASCRIPT: Debilmente Tipado.
Route::get('variables', function () {
    $mensaje = 8;
    var_dump($mensaje);
    echo "<hr />";
    $mensaje = "Sofía Calderón! Nice!";
    var_dump($mensaje);
    echo "<br />";
    $mensaje = true;
    var_dump($mensaje);
});
Route::get('dates', function () {
    //Array-> Es una estructura de Datos-Almacenando 1 o más Datos.
    $estudiantes = ["DG" => "Diego",
                    "MT" => "Matias",
                    "JN" => "Juan" ];
    echo "<pre>";
    print_r($estudiantes);
    echo "<pre>";
});
