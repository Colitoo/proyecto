<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/Contacto', function () {
    return view('frontend.contacto');
});

Route::get('/Quienes-somos', function () {
    return view('frontend.quienes-somos');
});

Route::get('/Catalogo', function () {
    return view('frontend.catalogo');
});

Route::get('/Carrito', function () {
    return view('frontend.carrito');
});

Route::get('/Terminos-y-usos', function () {
    return view('frontend.terminos-y-usos');
});

Route::get('/Seguimiento-de-pedidos', function () {
    return view('frontend.seguimiento-de-pedidos');
}); 


