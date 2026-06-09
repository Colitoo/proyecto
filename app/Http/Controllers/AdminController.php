<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Ventas;
use App\Models\DetalleVenta;
use App\Models\Personas;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        // 1. Ganancias de las ventas completadas (estado = true) en el mes en curso
        $ingresosMes = Ventas::where('estado', true)
            ->whereMonth('fecha', now()->month)
            ->whereYear('fecha', now()->year)
            ->sum('precioTotal');

        // 2. Alerta de Stock Crítico: Productos activos con 3 unidades o menos en stock
        $productosCriticos = Producto::where('stock', '<=', 3)
            ->get();

        // 3. Cantidad total de clientes registrados en el sistema (perfiles_id != 1)
        $totalClientes = Personas::where('perfiles_id', '!=', 1)->count();

        // 4. Últimas 3 ventas reales con los datos de la persona que compró
        $ultimasVentas = Ventas::with('persona')
            ->where('estado', true)
            ->orderBy('fecha', 'desc')
            ->take(3)
            ->get();

        // 5. TOP 3 Productos más vendidos (Agrupando por producto_id en el detalle)
        $productosMasVendidos = DetalleVenta::select('producto_id', DB::raw('SUM(cantidad) as total_vendido'))
            ->groupBy('producto_id')
            ->orderBy('total_vendido', 'desc')
            ->take(3)
            ->with('producto')
            ->get();

        return view('backend.Productos.index', compact(
            'ingresosMes',
            'productosCriticos',
            'totalClientes',
            'ultimasVentas',
            'productosMasVendidos'
        ));
    }
}
