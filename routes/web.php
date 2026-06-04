<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\TarjetasController;
use App\Http\Controllers\ProductosController;
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

Route::get('/catalogo', [TarjetasController::class, 'ver_tarjetas']);

Route::get('/contacto', [ContactoController::class, 'ver_contacto']);

Route::post('/form-contacto', [ContactoController::class, 'guardar_contacto'])->name('formulario_contacto');


Route::get('/login', [CuentaController::class, 'ver_login']);

Route::post('/form-login', [CuentaController::class, 'guardar_login'])->name('formulario-login');

Route::get('/register', [CuentaController::class, 'ver_register']);

Route::post('/form-register', [CuentaController::class, 'guardar_register'])->name('formulario-register');

Route::post('/logout', [CuentaController::class, 'logout'])->name('logout');


// Backend - Rutas de Productos (DEBE ESTAR ANTES QUE Route::get('admin'))
Route::get('/admin/productos/create',   [ProductosController::class, 'create'])->name('productos.create');
Route::get('/admin/productos/gestionar',[ProductosController::class, 'gestionar'])->name('productos.gestionar');
Route::get('/admin/productos/{id}/edit',[ProductosController::class, 'edit'])->name('productos.edit');
Route::put('/admin/productos/{id}',     [ProductosController::class, 'update'])->name('productos.update');
Route::patch('/admin/productos/{id}',   [ProductosController::class, 'toggleActivo'])->name('productos.toggleActivo');

//este no debería usarse porque borra de la tabla de la base de datos, pero lo dejo por las dudas
Route::delete('/admin/productos/{id}',  [ProductosController::class, 'destroy'])->name('productos.destroy');

//este muestra un producto específico al admin
Route::get('/admin/productos/{id}',     [ProductosController::class, 'show'])->name('productos.show');

//este  crea el producto nuevo en la tabla de Productos con los datos del formulario de carga
Route::post('/admin/Producto_Carga',[ProductosController::class, 'store'])->name('productos.store');
Route::get('/admin/Producto_Carga', [ProductosController::class, 'create'])->name('productos.create');
//este muestra la lista de productos al admin y le deja gestionar cada uno
Route::get('/admin/Gestionar_Productos', [ProductosController::class, 'gestionar'])->name('productos.index');

//este muestra solo una lista de prodcutos  al admin
Route::get('/admin/Listar_Productos', [ProductosController::class, 'index'])->name('admin.listar_productos');

//muestra el inicio al admin
Route::get('/admin', [CuentaController::class, 'index']);

Route::resource('productos', ProductosController::class);