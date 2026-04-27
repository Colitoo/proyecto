<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\TarjetasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/comercializacion', function () {
    return view('frontend.comercializacion');
});

Route::get('/quienes-somos', function () {
    return view('frontend.quienes-somos');
});

Route::get('/terminos-y-usos', function () {
    return view('frontend.terminos-y-usos');
});

Route::get('/seguimiento', function () {
    return view('frontend.seguimiento');
});

Route::get('/carrito', function () {
    return view('frontend.carrito');
});

Route::get('/productos', [TarjetasController::class, 'ver_tarjetas']);

Route::get('/mandos', [TarjetasController::class, 'ver_mandos']);

Route::get('/consolas', [TarjetasController::class, 'ver_consolas']);

Route::get('/portatiles', [TarjetasController::class, 'ver_portatiles']);


Route::get('/contacto', [ContactoController::class, 'ver_contacto']);

Route::post('/form-contacto', [ContactoController::class, 'guardar_contacto'])->name('formulario_contacto');


Route::get('/login', [CuentaController::class, 'ver_login']);

Route::post('/form-login', [CuentaController::class, 'guardar_login'])->name('formulario-login');

Route::get('/register', [CuentaController::class, 'ver_register']);

Route::post('/form-register', [CuentaController::class, 'guardar_register'])->name('formulario-register');