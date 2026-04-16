<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/register', function () {
    return view('frontend.register');
});

Route::get('/contacto', [ContactoController::class, 'ver_contacto']);

Route::post('/form-contacto', [ContactoController::class, 'guardar_contacto'])->name('formulario_contacto');


Route::get('/terminos-y-usos', function () {
    return view('frontend.terminos-y-usos');
});

Route::get('/productos', function () {
    return view('frontend.productos');
});

Route::get('/consultas', function () {
    return view('frontend.consultas');
});

Route::get('/seguimiento', function () {
    return view('frontend.seguimiento');
});

Route::get('/comercializacion', function () {
    return view('frontend.comercializacion');
});

Route::get('/quienes-somos', function () {
    return view('frontend.quienes-somos');
});

Route::get('/carrito', function () {
    return view('frontend.carrito');
});

Route::get('/consolas', function () {
    return view('frontend.consolas');
});

Route::get('/mandos', function () {
    return view('frontend.mandos');
});

Route::get('/portatiles', function () {
    return view('frontend.portatiles');
});
