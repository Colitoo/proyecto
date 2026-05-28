<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use App\Http\Requests\ContactoRequest;
use App\Models\Consulta;

class ContactoController extends Controller
{
    public function ver_contacto()
    {
        return view('frontend.informacion-contacto');
    }

    public function guardar_contacto(ContactoRequest $request){
        $datos =$request->validated();

        //crea la consulta nueva con los datos del formulario de contacto y la guarda en la base de datos
        Consulta::create([
            'nombre y apellido' => $datos['nombre'],
            'mail' => $datos['email'],
            'telefono' => $datos['telefono'],
            'motivo' => $datos['motivo'],
            'plataforma' => $datos['plataforma'],
            'mensaje' => $datos['mensaje'],
            'contestado' => false,
        ]);

        return redirect()->back()->with('success_message', 'Tu Consulta fue enviada correctamente!');
    }

    //muestra las consultas en la vista del admin ordenadas por fecha de creación 
    public function mostrar_consultas(){
        $consultas = Consulta::orderBy('created_at')->get();

        return view('backend.Productos.Ver_Consultas', compact('consultas'));
    }
}
