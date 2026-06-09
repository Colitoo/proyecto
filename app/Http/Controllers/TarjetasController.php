<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class TarjetasController extends Controller
{
    public function ver_tarjetas(Request $request)
    {
        // 1. Traemos todas las categorías para alimentar el menú desplegable (dropdown)
        $categorias = Categoria::all();

        // 2. Iniciamos la consulta base filtrando solo productos con stock válido
        $query = Producto::with('categoria')
            ->where('stock', '>=', 0)
            ->orderBy('created_at', 'desc');

        // 3. Si el usuario seleccionó una categoría en el dropdown, filtramos los productos
        if ($request->has('categoria') && $request->categoria != '') {
            $query->where('categoria_id', $request->categoria);
        }

        // 4. Ejecutamos la consulta final
        $productos = $query->get();

        // 5. Retornamos la vista unificada (frontend.productos) con ambas variables
        return view('frontend.productos', compact('productos', 'categorias'));
    }
}
