<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Personas extends Authenticatable
{   
    protected $table = 'personas';

    protected $fillable = [ 
        'nombre y apellido',
        'telefono',
        'email',
        'password',
        'perfiles_id',
        'estado',
   ];
    protected $casts = [
        'estado' => 'boolean',
    ];
    protected $hidden = [
        'password',
    ];

}
