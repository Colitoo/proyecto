<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class TarjetasController extends Controller
{
    /**
     * Mostrar catálogo de productos (frontend)
     */

/*
    public function listarFrontend()
    {
        $productos = Producto::where('activo', true)
            ->with('categoria')
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function ($producto) {
                return [
                    'id' => $producto->id,
                    'nombre' => $producto->nombre,
                    'descripcion' => $producto->descripcion,
                    'precio' => '$' . number_format($producto->precio, 2),
                    'imagen' => $producto->url_imagen,
                    'categoria' => $producto->categoria->nombre ?? 'Sin categoría',
                ];
            })
            ->toArray();

        return view('frontend.productos', compact('productos'));
    }
*/
    /**
     * Mostrar lista de productos (backend)
     */
    public function ver_tarjetas()
    {
        $productos = Producto::with('categoria')->orderBy('created_at', 'desc')->get();
        return view('frontend.productos', compact('productos'));
    }
}
