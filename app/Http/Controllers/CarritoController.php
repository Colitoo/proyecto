<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;
use App\Models\DetalleVenta;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
    // 1. Ver la vista del carrito con sus productos
    public function index()
    {
        // Simulamos el usuario logueado con ID 1 (Luego cambiar por auth()->id())
        $usuarioId = 1;

        // Buscamos la venta activa en estado 'carrito'
        $venta = Ventas::with('detalleVentas.producto')
            ->where('personas_id', $usuarioId)
            ->where('estado', 'carrito')
            ->first();

        // Si no tiene carrito activo, creamos un objeto vacío temporal para no romper la vista
        if (!$venta) {
            $venta = new Ventas();
            $venta->detalleVentas = collect();
            $venta->precioTotal = 0;
        }

        return view('carrito', compact('venta'));
    }

    // 2. Añadir un producto al carrito
    public function add($id)
    {
        $producto = Producto::findOrFail($id);
        $usuarioId = 1; // Cambiar por auth()->id() en producción

        if ($producto->stock < 1) {
            return back()->with('error', 'Este producto no tiene stock disponible.');
        }

        // Buscamos o creamos la cabecera de la venta en estado 'carrito'
        $venta = Ventas::firstOrCreate(
            ['personas_id' => $usuarioId, 'estado' => 'carrito'],
            ['fecha' => now(), 'cantidad' => 0, 'precioTotal' => 0]
        );

        // Buscamos si el producto ya está en el detalle de este carrito
        $detalle = DetalleVenta::where('venta_id', $venta->id)
            ->where('producto_id', $producto->id)
            ->first();

        if ($detalle) {
            if ($detalle->cantidad + 1 > $producto->stock) {
                return back()->with('error', 'No puedes agregar más unidades del stock disponible.');
            }
            $detalle->cantidad += 1;
            $detalle->subtotal = $detalle->cantidad * $detalle->precioUnitario;
            $detalle->save();
        } else {
            DetalleVenta::create([
                'venta_id' => $venta->id,
                'producto_id' => $producto->id,
                'cantidad' => 1,
                'precioUnitario' => $producto->precio,
                'subtotal' => $producto->precio
            ]);
        }

        $this->actualizarTotalesCabecera($venta);

        return back()->with('success', '¡Producto añadido al carrito!');
    }

    // 3. Actualizar cantidad desde el selector desplegable
    public function updateCantidad(Request $request, $id)
    {
        $detalle = DetalleVenta::findOrFail($id);
        $nuevaCantidad = $request->input('cantidad');
        $producto = $detalle->producto;

        if ($nuevaCantidad > $producto->stock) {
            return back()->with('error', "Solo quedan {$producto->stock} unidades.");
        }

        if ($nuevaCantidad < 1) {
            return back()->with('error', 'La cantidad mínima es 1.');
        }

        $detalle->cantidad = $nuevaCantidad;
        $detalle->subtotal = $nuevaCantidad * $detalle->precioUnitario;
        $detalle->save();

        $this->actualizarTotalesCabecera($detalle->venta);

        return back()->with('success', 'Cantidad actualizada.');
    }

    // 4. Eliminar un producto del carrito
    public function destroy($id)
    {
        $detalle = DetalleVenta::findOrFail($id);
        $venta = $detalle->venta;

        $detalle->delete();
        $this->actualizarTotalesCabecera($venta);

        return back()->with('success', 'Producto removido del carrito.');
    }

    // 5. Validar Modal y verificar stock definitivo (Checkout)
    public function verificarStock(Request $request, $id)
    {
        $request->validate([
            'direccion'      => 'required|string|max:255',
            'codigo_postal'  => 'required|string|max:20',
            'ciudad'         => 'required|string|max:100',
            'provincia'      => 'required|string|max:100',
            'tarjeta_nombre' => 'required|string|max:255',
            'tarjeta_numero' => 'required|digits:16',
            'tarjeta_vence'  => 'required|string|max:5',
            'tarjeta_cvc'    => 'required|digits_between:3,4',
        ]);

        $venta = Ventas::with('detalleVentas.producto')->findOrFail($id);

        // Transacción de Base de Datos para asegurar la consistencia del stock
        DB::transaction(function () use ($venta) {
            foreach ($venta->detalleVentas as $detalle) {
                // Forzamos recarga del producto para leer el stock más fresco en la BD
                $producto = Producto::lockForUpdate()->find($detalle->producto_id);

                if ($detalle->cantidad > $producto->stock) {
                    throw new \Exception("El producto '{$producto->nombre}' ya no tiene stock suficiente.");
                }

                // Descontamos stock físico
                $producto->decrement('stock', $detalle->cantidad);
            }

            // Pasamos la orden a pagada/procesada
            $venta->estado = 'pagado';
            $venta->fecha = now();
            $venta->save();
        });

        return redirect()->route('ventas.index')->with('success', '¡Compra finalizada con éxito!');
    }

    // Función auxiliar para mantener la cabecera sincronizada
    private function actualizarTotalesCabecera($venta)
    {
        $venta->cantidad = $venta->detalleVentas()->sum('cantidad');
        $venta->precioTotal = $venta->detalleVentas()->sum('subtotal');
        $venta->save();
    }
}
