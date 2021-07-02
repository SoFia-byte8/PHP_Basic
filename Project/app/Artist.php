<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    //Vincular MODEL - TABLE (Mysql)
    protected $table = "artist";

    //Establecer la PK de la entidad (por defecto :ArtistId)
    protected $primaryKey = "ArtistId";

    //Omitir Campos de AUDITORIA
    public $timestamps = false;




    //definir relacion artista -album
    //  1 Artis = M Album

    public function discos()
    {
        //hasMany: parameter
        //1. Modelo a relacionar
        //2. FK del modelo pápa

        return $this->hasMany('App\Disco', 'ArtistId');
    }

    //definir la relacion de multitabla entre
    //artist y sus canciones(tracks)

    // public function canciones(){
    //     //hasMany Throught: 1-m pero atravez de
    //     //primero el nieto
    //     return $this->hasManyThrough();
    // }

    public function canciones()
    {
        //hasManyThroug = PARAMETROS
        //1.MODELO NIETO
        //2.MODELO PAPA
        //3.FK DEL ABUELO EN EL PAPA
        //4.FK DEL PAPA EN EL NIETO
        //5.CLAVE PRIMARIA DEL ABUELA
        //6.CLAVE PRIMARIA DEL PAPA
        return $this->hasManyThrough(
            'App\Cancion',
            'App\Disco',
            'ArtistId',
            'AlbumId',
            'ArtistId',
            'AlbumId'
        );
    } //FIN FUNCTION

}//Fin Artist
