<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;

class personas extends Authenticate
{   
    protected $table = 'personas';

    protected $fillable = [ 
        'nombre y apellido',
        'telefono',
        'mail',
        'contraseña',
        'perfiles_id',
        'estado',
   ];
    protected $casts = [
        'estado' => 'boolean',
    ];
    protected $hidden = [
        'contraseña',
    ]; 
}
