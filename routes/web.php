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

Route::get('/productos', [TarjetasController::class, 'listarFrontend']);

Route::get('/contacto', [ContactoController::class, 'ver_contacto']);

Route::post('/form-contacto', [ContactoController::class, 'guardar_contacto'])->name('formulario_contacto');


Route::get('/login', [CuentaController::class, 'ver_login']);

Route::post('/form-login', [CuentaController::class, 'guardar_login'])->name('formulario-login');

Route::get('/register', [CuentaController::class, 'ver_register']);

Route::post('/form-register', [CuentaController::class, 'guardar_register'])->name('formulario-register');

Route::post('/logout', [CuentaController::class, 'logout'])->name('logout');

// Backend - Rutas de Productos
Route::get('/admin/productos',          [TarjetasController::class, 'gestionar'])->name('productos.index');
Route::get('/admin/productos/gestionar',[TarjetasController::class, 'gestionar'])->name('productos.gestionar');
Route::get('/admin/productos/create',   [TarjetasController::class, 'create'])->name('productos.create');
Route::post('/admin/productos',         [TarjetasController::class, 'store'])->name('productos.store');
Route::get('/admin/productos/{id}/edit',[TarjetasController::class, 'edit'])->name('productos.edit');
Route::put('/admin/productos/{id}',     [TarjetasController::class, 'update'])->name('productos.update');
Route::patch('/admin/productos/{id}',   [TarjetasController::class, 'toggleActivo'])->name('productos.toggleActivo');
Route::delete('/admin/productos/{id}',  [TarjetasController::class, 'destroy'])->name('productos.destroy');
Route::get('/admin/productos/{id}',     [TarjetasController::class, 'show'])->name('productos.show');

Route::get('admin', [CuentaController::class, 'index']);