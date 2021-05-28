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

Route::get('/', function () {
    return view('welcome');
});

//Routes of Interation
Route::get('variables', function(){
    $mensaje = 10;
    var_dump($mensaje);
    echo "<hr />";
    $mensaje = "Sofía Calderón!";
    var_dump($mensaje);
});

//Arreglo: Estructura de Datos, ALmacena más de Un Dato o Uno.
//Arreglo una Dimensión
Route::get('arreglos', function(){
    $estudiante = [ "AN" => "Ana",
                    "MA" => "Maria",
                    "JO" => "Jorge"];
    echo "<pre>";
    print_r($estudiante);
    echo "<pre>";
});

//Arreglo Dos Dimensiones
Route::get('country', function(){
//One Dimention
    $country = [ "Colombia" => [
        //Two Dimention
        "capital" => "Bogotá",
        "moneda" => "Peso",
        "poblacion" => 50.34
    ],
    "Peru" => [
        "capital" => "Lima",
        "moneda" => "Sol",
        "poblacion" => 32.80
      ],
    "Paraguay" => [
        "capital" => "Asunción",
        "moneda" => "Guaraní paraguayo",
        "poblacion" => 7.45
      ]
    ];
// Invocar o Llamar Vista
    return view("country")->with("naciones" , $country );
});

Route::get('form_search', "MetaBuscadorController@form_search");
Route::post('search', "MetaBuscadorController@search");

//Recorer Array in Foreach - Recoorer el nombre en las primeras Dimensiones
/*foreach($paises as  $pais ){
    foreach($paises as $nombrepais => $pais ):
        echo "<h1>$nombrepais</h1>";
        echo "<pre>";
print_r($paises["Colombia"]["moneda"]);
echo ($pais["capital"]);
            echo "<pre>";
            echo ($pais["moneda"]);
            echo "<pre>";
            echo ($pais["poblacion"]);
            echo "<pre>";
            echo "<hr />";
    endforeach;
};*/
