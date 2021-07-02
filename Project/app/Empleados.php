<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //Vincular MODEL - TABLE (Mysql)
    protected $table = "employee";

    //Establecer la PK de la entidad (por defecto :ArtistId)
    protected $primaryKey = "EmployeeId";

    //Omitir Campos de AUDITORIA
    public $timestamps = false;



    //Relacion 1-M Cliente
    public function clientes(){

        //hasMany: parameter
        //1. Modelo a relacionar
        //2. FK del modelo pápa

        return $this -> hasMany('App\Cliente', 'SupportRepId');
    }//FIN Clientes
}//FIN CLASE
