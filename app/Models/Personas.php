<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class personas extends Model
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
}
