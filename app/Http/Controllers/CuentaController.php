<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Personas;
use Illuminate\Support\Facades\Auth;

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
        //guarda lo que ingresas en el formulario de login, lo valida y despues lo guarda en un array credenciales
        $datos = $request->validated();
        
        $credenciales = [
            'email' => $datos['email'],
            'password' => $datos['password'],
            'estado' => true,
        ];

        //compara lo que vino en el array con la base de datos para ver si existe y luego redireccionarlo a su respectiva vista dependiendo del perfil. En caso que no exista devuelve error y no lo deja pasar
        if (Auth::attempt($credenciales)) {
            $usuario = Auth::user();
            $request->session()->regenerate();

            if ($usuario->perfiles_id == 1){
                return redirect('/admin');
            }elseif ($usuario->perfiles_id == 2){
                return redirect('/');
            }
        } else {
            return back()->withErrors([
                'email' => 'Correo y/o contraseñas incorrectas.',
                'password' => 'Correo y/o contraseñas incorrectas.',
            ]);
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function guardar_register(RegisterRequest $request){

        //valida lo que ingresas en el formulario de registro y si todo esta correcto crea un usuario nuevo en la base de datos con la informacion ingresada. Caso contrario el request devuelve los errores y no lo deja pasar
        $datos = $request->validated();
        
        Personas::create([
            'nombre y apellido' => $datos['name'],
            'telefono' => $datos['number'],
            'email' => $datos['email'],
            'password' => bcrypt($datos['password']),
            'perfiles_id' => 2,
            'estado' => true,
        ]);

        return redirect('/login')->with('success', 'Registro exitoso. Ahora puede iniciar sesión.');
    }
}
