<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use App\Models\Producto;
use App\Models\Categoria;

class ProductosController extends Controller{
    public function index()
    {
        $productos = Producto::with('categoria')->orderBy('created_at', 'desc')->get();
        return view('backend.Productos.Listar_Productos', compact('productos'));
    }


    public function ver_gestion()
    {
        $productos = Producto::withTrashed()->with('categoria')->orderBy('created_at', 'desc')->get();
        $categorias = Categoria::all();
        return view('backend.Productos.Producto_Gestion', compact('productos', 'categorias'));
    }


    public function form_crear_producto()
    {
        $categorias = Categoria::all();
        return view('backend.Productos.Producto_Carga', compact('categorias'));
    }


    public function crear_producto(ProductoRequest $request)
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



    public function update(ProductoRequest $datos, string $id){
        $datos = $datos->validated();

        $producto = Producto::withTrashed()->findOrFail($id);

        $producto->update($datos);

        return redirect()->back()->with('success', 'Producto actualizado correctamente');
    }


    public function destroy(String $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->back()->with('success', 'Producto deshabilitado correctamente');
    }


    public function restore(String $id){
        $producto = Producto::withTrashed()->findOrFail($id);
        $producto->restore();

        return redirect()->back()->with('success', 'Producto restaurado correctamente');
    }
}
