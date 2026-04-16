<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function ver_contacto()
    {
        return view('frontend.informacion-contacto');
    }

    public function guardar_contacto(Request $request){
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $telefono = $request->input('telefono');
        $motivo = $request->input('motivo');
        $plataforma = $request->input('plataforma');
        $mensaje = $request->input('mensaje');
        
        dd($request->all());
        
    }
}
