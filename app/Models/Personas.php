<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Personas extends Authenticatable
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

    // Métodos para autenticación con campos personalizados
    public function getAuthIdentifierName()
    {
        return 'mail';
    }

    public function getAuthPassword()
    {
        return $this->contraseña;
    }
}
