<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use App\Http\Requests\ContactoRequest;

class ContactoController extends Controller
{
    public function ver_contacto()
    {
        return view('frontend.informacion-contacto');
    }

    public function guardar_contacto(ContactoRequest $request){
        $datos =$request->validated();

        $nombre = $datos['nombre'];
        $email = $datos['email'];
        $telefono = $datos['telefono'];
        $motivo = $datos['motivo'];
        $plataforma = $datos['plataforma'];
        $mensaje = $datos['mensaje'];

        //aca se agrega para enviar a BD

        return redirect()->back()->with('success_message', 'Tu Consulta fue enviada correctamente!');
    }
}
