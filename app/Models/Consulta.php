<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = 'consultas';

    protected $fillable = [
        'nombre y apellido',
        'mail',
        'telefono',
        'motivo',
        'plataforma',
        'mensaje',
        'contestado'
    ];
    protected $casts = [
        'contestado' => 'boolean',
    ];
}
