<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'url_imagen',
        'categoria_id',
        'activo',
    ];
    protected $casts = [
        'precio' => 'decimal:2',
        'stock' => 'integer',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
