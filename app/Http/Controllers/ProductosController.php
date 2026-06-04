<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use App\Models\Producto;
use App\Models\Categoria;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::with('categoria')->orderBy('created_at', 'desc')->get();
        return view('backend.Productos.Listar_Productos', compact('productos'));
    }

    /**
     * Mostrar gestión de productos (backend)
     */
    public function gestionar()
    {
        $productos = Producto::with('categoria')->orderBy('created_at', 'desc')->get();
        return view('backend.Productos.Producto_Gestion', compact('productos'));
    }

    /**
     * Mostrar formulario crear producto
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('backend.Productos.Producto_Carga', compact('categorias'));
    }

    /**
     * Guardar producto nuevo
     */
    public function store(ProductoRequest $request)
    {
        $datos = $request->validated();

        $datos['url_imagen'] = $request->file('imagen')->store('productos', 'public');

        Producto::create([
            'nombre'       => $datos['nombre'],
            'descripcion'  => $datos['descripcion'],
            'precio'       => $datos['precio'],
            'stock'        => $datos['stock'],
            'url_imagen'   => $datos['url_imagen'],
            'categoria_id' => $datos['categoria_id'],
            'activo'       => $datos['activo'] ?? true,
        ]);

        return redirect()->route('admin.listar_productos')
            ->with('success', 'Producto creado correctamente');
    }

    /**
     * Mostrar producto específico
     */
    public function show(string $id)
    {
        $producto = Producto::findOrFail($id);
        return redirect()->route('productos.index');
    }

    /**
     * Mostrar formulario editar
     */
    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        return view('backend.Productos.Producto_Editar', compact('producto', 'categorias'));
    }

    /**
     * Actualizar producto
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::findOrFail($id);

        $validated = $request->validate([
            'nombre' => 'required|string|max:150',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:1',
            'url_imagen' => 'nullable|string',
            'categoria_id' => 'required|exists:categorias,id',
            'activo' => 'nullable|boolean',
        ]);

        $producto->update($validated);

        return redirect()->route('admin.listar_productos')
            ->with('success', 'Producto actualizado correctamente');
    }

    /**
     * Habilitar/Deshabilitar producto
     */
    public function toggleActivo($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->activo = !$producto->activo;
        $producto->save();
        return redirect()->back()->with('success', 'Estado actualizado');
    }

    /**
     * Eliminar producto
     */
    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto eliminado correctamente');
    }
}
