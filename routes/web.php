<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\TarjetasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\AdminController;
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

// Esta única ruta ahora se encarga de mostrar todo el catálogo y sus filtros
Route::get('/catalogo', [TarjetasController::class, 'ver_tarjetas'])->name('catalogo.index');
    
Route::get('/contacto', [ContactoController::class, 'ver_contacto']);

Route::post('/form-contacto', [ContactoController::class, 'guardar_contacto'])->name('formulario_contacto');


Route::get('/login', [CuentaController::class, 'ver_login'])->name('login');

Route::post('/form-login', [CuentaController::class, 'guardar_login'])->name('formulario-login');

Route::get('/register', [CuentaController::class, 'ver_register']);

Route::post('/form-register', [CuentaController::class, 'guardar_register'])->name('formulario-register');

Route::post('/logout', [CuentaController::class, 'logout'])->name('logout');

Route::resource('productos', ProductosController::class);


//para acceder debes estar logeado
Route::middleware('auth')->group(function () {
    Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');
    Route::post('/carrito/agregar/{id}', [CarritoController::class, 'agregar'])->name('carrito.agregar');
    Route::put('/carrito/actualizar/{id}', [CarritoController::class, 'actualizar'])->name('carrito.actualizar');
    //ruta para carrito.updateCantidad
    Route::put('/carrito/update-cantidad/{id}', [CarritoController::class, 'updateCantidad'])->name('carrito.update-cantidad');
    Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
    Route::delete('/carrito/vaciar', [CarritoController::class, 'vaciar'])->name('carrito.vaciar');
    Route::post('/carrito/verificar-stock/{id}', [CarritoController::class, 'verificarStock'])->name('carrito.verificar-stock');
    Route::get('/historial', [VentaController::class, 'historial'])->name('historial-compras');
});


//para acceder verifica que sea con perfil_id 1
Route::middleware('rol:1')->prefix('admin')->group(function (){
    //seccion de productos
    //este muestra el formulario para editar un producto específico
    Route::put('/productos/{id}', [ProductosController::class, 'update'])->name('productos.update');

    //este muestra un producto específico al admin pero no lo usamos
    Route::get('/productos/{id}', [ProductosController::class, 'show'])->name('productos.show');

    //este hace la eliminación lógica del producto
    Route::delete('/productos/{id}', [ProductosController::class, 'destroy'])->name('productos.destroy');

    //este restaura de la eliminacion lógica
    Route::put('/productos/{id}/restore', [ProductosController::class, 'restore'])->name('productos.restore');
    
    //muestra el formulario para crear un producto
    Route::get('/Producto_Carga', [ProductosController::class, 'form_crear_producto'])->name('productos.formulario');

    //este crea el producto nuevo en la tabla de Productos con los datos del formulario de carga
    Route::post('/Producto_Carga', [ProductosController::class, 'crear_producto'])->name('productos.crear');
    
    //este muestra la lista de productos al admin y le deja gestionar cada uno
    Route::get('/Producto_Gestion', [ProductosController::class, 'ver_gestion'])->name('productos.index');

    //este muestra solo una lista de prodcutos  al admin
    Route::get('/Listar_Productos', [ProductosController::class, 'index'])->name('admin.listar_productos');

    
    //seccion de ventas
    Route::get('/Listar_Ventas', [VentaController::class, 'index'])->name('admin.listar_ventas'); // cambiar controller


    //seccion de consultas
    Route::get('/Ver_Consultas', [ContactoController::class, 'mostrar_consultas'])->name('admin.Ver_Consultas'); //cambiar controlador


    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::put('consultas/{id}/marcar-contestada', [ContactoController::class, 'marcarContestada'])->name('consultas.marcar-contestada');
    Route::put('consultas/{id}/marcar-pendiente', [ContactoController::class, 'marcarPendiente'])->name('consultas.marcar-pendiente');
});

