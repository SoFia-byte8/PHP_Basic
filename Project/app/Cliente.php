<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    //Vincular MODEL - TABLE (Mysql)    //Modificar tabla
    protected $table = "customer";

    //Establecer la PK de la entidad (por defecto :ArtistId)
    protected $primaryKey = "CustomerId";

    //Omitir Campos de AUDITORIA
    public $timestamps = false;


    // 1 - N
    public function facturas(){

        //hasMany: parameter
        //1. Modelo a relacionar
        //2. FK del modelo pápa

        return $this -> hasMany('App\Factura', 'CustomerId');
    }
}
