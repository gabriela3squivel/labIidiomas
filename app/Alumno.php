<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $fillable = [
        'id', 'user', 'curp','nivel', 'grado', 'grupo'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
