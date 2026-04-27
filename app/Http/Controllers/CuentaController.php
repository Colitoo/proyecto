<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuentaController extends Controller
{
    public function ver_login(){
        return view('frontend.login');
    }

    public function ver_register()
    {
        return view('frontend.register');
    }

    public function guardar_login(Request $request){
        $correo_usuario = $request->input('email');
        $pass_usuario = $request->input('password');

        dd($request->all());
    }

    public function guardar_register(Request $request)
    {
        $nombre = $request->input('name');
        $telefono = $request->input('number');
        $correo_usuario = $request->input('email');
        $pass_usuario = $request->input('password');
        $pass_confirm_usuario = $request->input('confirm_password');

        dd($request->all());
    }
}
