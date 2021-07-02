<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tienda;

class TiendaController extends Controller
{
    //INICIO CLASS TiendaController--------------------------------
    public function index(){
    	//Ulilice entidad para traer tiendas
		$tienda = Tienda::all();

		//llevo las tiendas a la vista
		return view("tienda")->with("tienda", $tienda);
    }

    //ACCION CREATE:-------------------------------------
    public function create(){
    	//Mostrar vista de registro tiendas
    	return view('registrarTienda');
    }

    public function store(){

    	$nombre = $_POST["nom"];
    	$descripcion = $_POST["des"];

    	//Crear la entidad--------
    	$tienda = new Tienda();
    	$tienda->nombre = $nombre;
    	$tienda->descripcion = $descripcion;

    	//Guardar o persistir--------------
    	$tienda->save();

    	echo "Exito al registrar";
    }
}//FIN CLASS TiendaController--------------------------------
