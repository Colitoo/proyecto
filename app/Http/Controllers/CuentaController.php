<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

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

        $correo_usuario = $datos['email'];
        $pass_usuario = $datos['password'];

        //acá el envío a la BD para comprobar

        //si existe retornaria la vista del inicio?
        //hay que hacer otra vista para que el usuario vea su cuenta?
    }

    public function guardar_register(RegisterRequest $request){
        $datos = $request->validated();

        $nombre = $datos['name'];
        $telefono = $datos['number'];
        $correo_usuario = $datos['email'];
        $pass_usuario = $datos['password'];
        $pass_confirm_usuario = $datos['confirm_password'];

        //acá enviaría la info nueva a la BD

        //después lo tendría que mandar a la pestaña de login no?

        //el usuario ya puso todos sus acá, entonces no tendríamos que pedirle otra vez estos datos en el formulario de contacto Si es que ya tiene cuenta, ahi dentriamos que usar estos datos nomas?
    }
}
