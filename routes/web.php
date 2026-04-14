<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/contacto', function () {
    return view('frontend.informacion-contacto');
});

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
