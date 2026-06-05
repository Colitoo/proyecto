<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\TarjetasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\CarritoController;
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

Route::get('/catalogo', [TarjetasController::class, 'ver_tarjetas']);

Route::get('/contacto', [ContactoController::class, 'ver_contacto']);

Route::post('/form-contacto', [ContactoController::class, 'guardar_contacto'])->name('formulario_contacto');


Route::get('/login', [CuentaController::class, 'ver_login']);

Route::post('/form-login', [CuentaController::class, 'guardar_login'])->name('formulario-login');

Route::get('/register', [CuentaController::class, 'ver_register']);

Route::post('/form-register', [CuentaController::class, 'guardar_register'])->name('formulario-register');

Route::post('/logout', [CuentaController::class, 'logout'])->name('logout');

Route::resource('productos', ProductosController::class);

//para acceder debes estar logeado
Route::middleware('auth')->group(function () {
    Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');
    Route::post('carrito/agregar/{id}', [CarritoController::class, 'agregar'])->name('carrito.agregar');
    Route::put('carrito/actualizar/{id}', [CarritoController::class, 'actualizar'])->name('carrito.actualizar');
    //ruta para carrito.updateCantidad
    Route::put('carrito/update-cantidad/{id}', [CarritoController::class, 'updateCantidad'])->name('carrito.update-cantidad');
    Route::delete('carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
    Route::delete('carrito/vaciar', [CarritoController::class, 'vaciar'])->name('carrito.vaciar');
    Route::post('carrito/verificar-stock/{id}', [CarritoController::class, 'verificarStock'])->name('carrito.verificar-stock');
});


//para acceder debes ser admin, el rol verifica que sea con perfil_id 1
Route::middleware('rol:1')->prefix('admin')->group(function (){
    Route::get('/productos/create',   [ProductosController::class, 'create'])->name('productos.create');
    Route::get('/productos/gestionar', [ProductosController::class, 'gestionar'])->name('productos.gestionar');
    Route::get('/productos/{id}/edit', [ProductosController::class, 'edit'])->name('productos.edit');
    Route::put('/productos/{id}',     [ProductosController::class, 'update'])->name('productos.update');
    Route::patch('/productos/{id}',   [ProductosController::class, 'toggleActivo'])->name('productos.toggleActivo');



    //este no debería usarse porque borra de la tabla de la base de datos, pero lo dejo por las dudas
    Route::delete('/productos/{id}',  [ProductosController::class, 'destroy'])->name('productos.destroy');

    //este muestra un producto específico al admin
    Route::get('/productos/{id}',     [ProductosController::class, 'show'])->name('productos.show');

    //este  crea el producto nuevo en la tabla de Productos con los datos del formulario de carga
    Route::post('/Producto_Carga', [ProductosController::class, 'store'])->name('productos.store');
    Route::get('/Producto_Carga', [ProductosController::class, 'create'])->name('productos.create');
    //este muestra la lista de productos al admin y le deja gestionar cada uno
    Route::get('/Producto_Gestion', [ProductosController::class, 'gestionar'])->name('productos.index');

    //este muestra solo una lista de prodcutos  al admin
    Route::get('/Listar_Productos', [ProductosController::class, 'index'])->name('admin.listar_productos');
    Route::get('/Listar_Ventas', [VentaController::class, 'index'])->name('admin.listar_ventas'); // cambiar controller
    Route::get('/Ver_Consultas', [ContactoController::class, 'mostrar_consultas'])->name('admin.Ver_Consultas'); //cambiar controlador


    //muestra el inicio al admin
    Route::get('/', [CuentaController::class, 'index']);
});