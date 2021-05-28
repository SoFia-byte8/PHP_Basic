<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    protected $table='artist';//Vincular un Modelo a una Tabla
    protected $primaryKey = 'ArtistId';// Establecer la PK para la entidad (Defecto Id)
    public $timestamp = false;//Omitir campos de Auditoria

}
