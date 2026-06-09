<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\DetalleVenta;
class Ventas extends Model
{
    protected $table = 'ventas';
    
    protected $fillable = [
        'personas_id',
        'cantidad',
        'precioTotal',
        'fecha',
        'estado',
    ];
    protected $casts = [
        'precioTotal' => 'decimal:2',
        'estado' => 'boolean',
    ];

    public function persona()
    {
        return $this->belongsTo(Personas::class, 'personas_id');
    }

    public function detalleVentas()
    {
        return $this->hasMany(DetalleVenta::class, 'venta_id');
    }

    
}
