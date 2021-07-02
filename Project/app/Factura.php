<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //Vincular MODEL - TABLE (Mysql)    //Modificar tabla
    protected $table = "invoice";

    //Establecer la PK de la entidad (por defecto :ArtistId)
    protected $primaryKey = "InvoiceId";

    //Omitir Campos de AUDITORIA
    public $timestamps = false;
}
