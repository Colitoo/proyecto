<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalleventa extends Model
{
    protected $fillable = [
        'venta_id',
        'producto_id',
        'cantidad',
        'precioUnitario',
        'subtotal',
    ];
    protected $casts = [
        'precioUnitario' => 'decimal:2',
        'subtotal' => 'decimal:2',
    ];

    public function venta()
    {
        return $this->belongsTo(Ventas::class, 'venta_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
