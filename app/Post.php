<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'id', 'tema', 'categoria','tipo', 'descripcion', 'nombreArchivo','profesor'
    ];

    public function fromProfesor()
    {
         return $this->belongsTo('App\Profesor','profesor');
        
    }
}
