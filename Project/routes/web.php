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

Route::get("paises", function () {
    $paises = [
        "Colombia" => [
            "#" => "1",
            "capital" => "Bogotá",
            "moneda" => "Peso",
            "poblacion" => "50,34 millones"
        ],
        "Peru" => [
            "#" => "2",
            "capital" => "Lima",
            "moneda" => "Sol",
            "poblacion" => "32,51 millones"
        ],
        "Ecuador" => [
            "#" => "3",
            "capital" => "Quito",
            "moneda" => "Dolar",
            "poblacion" => "17,37 millones"
        ]
    ];

    //Retornar vista WITH los siguientes datos
    //WITH usa un APODO y el valor de donde viene
    return view("paises") -> with("naciones", $paises);

    /*
    foreach($paises as $nombrepais => $pais):
        echo "<pre>";
        echo "<h1>$nombrepais</h1>";

        print_r($pais["capital"]);
        echo "</pre>";

        echo "<hr>";
    endforeach;
    */
});

Route::get('tienda', "TiendaController@index");
Route::get('tienda/create', "TiendaController@create");
Route::post('tienda/store', "TiendaController@store");

//BUSCADOR
Route::get('formulario_buscador', "MetabuscadorController@formulario_buscador");
Route::post('buscar', "MetabuscadorController@buscar");


//Artist
Route::resource('artistas', 'ArtistController');
Route::resource('song', 'SongController');
