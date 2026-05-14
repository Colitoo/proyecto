<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Personas;
class CuentaController extends Controller
{
    public function ver_login(){
        return view('frontend.login');
    }

    public function ver_register()
    {
        return view('frontend.register');
    }

    public function guardar_login(LoginRequest $request){
        $datos = $request->validated();

        //$usuario = Personas::where('mail', $datos['email'])->first();

        $correo_usuario = $datos['email'];
        $pass_usuario = $datos['password'];

        //acá el envío a la BD para comprobar

        //si existe retornaria la vista del admin
        //hay que hacer otra vista para que el usuario vea su cuenta?
    }

    public function guardar_register(RegisterRequest $request){
        $datos = $request->validated();
        
        Personas::create([
            'nombre y apellido' => $datos['name'],
            'telefono' => $datos['number'],
            'mail' => $datos['email'],
            'contraseña' => bcrypt($datos['password']),
            'perfiles_id' => 2,
            'estado' => true,
        ]);
    }
}
