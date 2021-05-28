<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetaBuscadorController extends Controller
{
    //Action form-search
    public function form_search(){

    return view('form_search');
    }
    //Action search
    public function search(){
        $termino =$_POST["termino"];
        $motor = $_POST["motores"];

        switch($motor){
            case 1: return redirect()-> to("https://www.google.com/search?q=$termino");
                break;
            case 2: return redirect()-> to("https://www.youtube.com/results?search_query=$termino");
                break;
            case 3: return redirect()-> to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
        }
    }
}
