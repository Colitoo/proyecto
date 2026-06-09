<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;
use Illuminate\Support\Facades\Auth;

class VentaController extends Controller
{
    public function index(){
        $ventas = Ventas::with('persona', 'detalleVentas.producto')->orderBy('fecha', 'desc')->get();

        return view('backend.Productos.Listar_Ventas', compact('ventas'));
    }

    public function historial()
    {
        $ventas = Ventas::where('personas_id', Auth::id())->with(['detalleVentas.producto', 'persona'])->orderBy('created_at', 'desc')->get();

        return view('frontend.historial', compact('ventas'));
    }
}
