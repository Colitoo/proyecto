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

    public function perfil(){
        return $this->belongsTo(Perfiles::class, 'perfiles_id');
    }

    public function esAdmin(){
        return $this->perfil && $this->perfil->perfiles_id === 1;
    }

    public function Ventas()
    {
        return $this->hasMany(Ventas::class, 'personas_id');
    }

}
