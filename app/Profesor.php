<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    //
    protected $fillable = [
        'id', 'user', 'nivelEstudios','IdiomaImparte', 'nivelesIdioma', 'aniosExp','telefono'
    ];


    public function isUser()
    {
        return $this->belongsTo('App\User','user');
    }

    public function posts()
    {
        return $this->hasMany('App\Post','profesor');
    }
}
