<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    //Relacion tienda-producto
    public function productos(){
    	return $this->hasMany("App\Producto");
    }
}
