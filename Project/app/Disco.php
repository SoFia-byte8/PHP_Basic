<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
    //Vincular MODEL - TABLE (Mysql)
    protected $table = "album";

    //Establecer la PK de la entidad (por defecto :ArtistId)
    protected $primaryKey = "AlbumId";

    //Omitir Campos de AUDITORIA
    public $timestamps = false;

    //Inverso de la relacion
    //N album - 1 artist
    public function artist(){
        //Uso beLongsTo: relacion N - 1
        return $this->belongsTo('App\Artist', 'ArtistId');
    }
}
