<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;

class VentaController extends Controller
{
    public function index(){
        $ventas = Ventas::with('persona', 'detalleVentas.producto')->orderBy('fecha', 'desc')->get();

        return view('backend.Productos.Listar_Ventas', compact('ventas'));
    }

    //aca va a ir el método para mostrar una venta particular
}
