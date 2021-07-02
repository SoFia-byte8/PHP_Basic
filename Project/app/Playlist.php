<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    //Vincular MODEL - TABLE (Mysql)
    protected $table = "playlist";

    //Establecer la PK de la entidad (por defecto :ArtistId)
    protected $primaryKey = "PlaylistId";

    //Omitir Campos de AUDITORIA
    public $timestamps = false;

    //relacin N - N entre playlist y cancion
public function canciones(){
    //metodo: belongToMany
    return $this -> belongsToMany(
        'App\Cancion',
        'playlisttrack',
        'PlaylistId',
        'TrackId'
    );
}
}//FIN CLASS
