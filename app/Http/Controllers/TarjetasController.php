<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class TarjetasController extends Controller{

    public function ver_tarjetas(){
        $productos = Producto::with('categoria')->where('activo', true)->orderBy('created_at', 'desc')->get();
        return view('frontend.productos', compact('productos'));
    }

    public function ver_mandos(){
        $mandos = Producto::whereHas('categoria', function ($query) {
            $query->where('categorias.id', 1);
        })->get();
        return view('frontend.mandos', compact('mandos'));
    }

    public function ver_portatiles(){
        $portatiles = Producto::whereHas('categoria', function ($query){
            $query->where('categorias.id', 2);
        })->get();
        return view('frontend.portatiles', compact('portatiles'));
    }

    public function ver_sobremesa(){
        $consolas = Producto::whereHas('categoria', function ($query) {
            $query->where('categorias.id', 3);
        })->get();
        return view('frontend.consolas', compact('consolas'));
    }

}
