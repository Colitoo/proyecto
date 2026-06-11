<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;
use App\Models\DetalleVenta;
use App\Models\Producto;
use App\Http\Requests\CompraRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CarritoController extends Controller
{
    // 1. Ver el carrito
    public function index()
    {
        $usuarioId = Auth::id();

        $venta = Ventas::with('detalleVentas.producto')
            ->where('personas_id', $usuarioId)
            ->where('estado', false)
            ->orderBy('created_at', 'desc')
            ->first();

        return view('frontend.carrito', compact('venta'));
    }

    // 2. Añadir producto al carrito
    public function agregar(Request $request, mixed $id)
    {
        $usuarioId = Auth::id();

        if (Auth::user()->perfiles_id == 1) {
            return redirect()->back()->with('error', 'Los administradores no pueden agregar productos al carrito.');
        }

        $producto = Producto::where('id', $id)
            ->where('stock', '>=', 1)
            ->first();

        if (!$producto) {
            return redirect()->route('catalogo.index')->with('error', 'Este producto no está disponible.');
        }

        $venta = Ventas::firstOrCreate(
            ['personas_id' => $usuarioId, 'estado' => false],
            ['fecha' => now(), 'cantidad' => 0, 'precioTotal' => 0]
        );


        $detalle = DetalleVenta::where('venta_id', $venta->id)
            ->where('producto_id', $producto->id)
            ->first();


        if ($detalle) {
            if ($detalle->cantidad + 1 > $producto->stock) {
                return redirect()->route('catalogo.index')->with('error', 'No puedes agregar más unidades que el stock disponible.');
            }
            $detalle->cantidad += 1;
            $detalle->subtotal = $detalle->cantidad * $detalle->precioUnitario;
            $detalle->save();
        } else {
            DetalleVenta::create([
                'venta_id'       => $venta->id,
                'producto_id'    => $producto->id,
                'cantidad'       => 1,
                'precioUnitario' => $producto->precio,
                'subtotal'       => $producto->precio,
            ]);
        }

        $this->sincronizarCabecera($venta);

        return redirect()->back()->with('success', 'Producto añadido al carrito!');
    }

    // 3. Actualizar cantidad desde el selector del carrito
    public function updateCantidad(Request $request, mixed $id)
    {
        $detalle = DetalleVenta::with('producto', 'venta')->findOrFail($id);
        $nuevaCantidad = (int) $request->input('cantidad');
        $producto = $detalle->producto;

        if ($nuevaCantidad < 1) {
            return back()->with('error', 'La cantidad mínima es 1.');
        }

        if ($nuevaCantidad > $producto->stock) {
            return back()->with('error', "Solo quedan {$producto->stock} unidades disponibles.");
        }

        $detalle->cantidad = $nuevaCantidad;
        $detalle->subtotal = $nuevaCantidad * $detalle->precioUnitario;
        $detalle->save();

        $this->sincronizarCabecera($detalle->venta);

        return back()->with('success', 'Cantidad actualizada.');
    }

    // 4. Eliminar un producto del carrito
    public function eliminar(mixed $id)
    {
        $detalle = DetalleVenta::with('venta')->findOrFail($id);

        if ($detalle->venta->personas_id !== Auth::id()) {
            abort(403);
        }

        $venta = $detalle->venta;
        $detalle->delete();
        $this->sincronizarCabecera($venta);

        return back()->with('success', 'Producto removido del carrito.');
    }

    // 5. Verificar stock y confirmar la compra
    public function verificarStock(CompraRequest $datos, mixed $id)
    {
        $datos = $datos->validated();   

        $venta = Ventas::with('detalleVentas.producto')->findOrFail($id);

        try {
            DB::transaction(function () use ($venta) {
                foreach ($venta->detalleVentas as $detalle) {
                    // Bloqueamos la fila para evitar condición de carrera
                    $producto = Producto::lockForUpdate()->findOrFail($detalle->producto_id);

                    if ($producto->stock <= 0) {
                        throw new \Exception("El producto '{$producto->nombre}' ya no está disponible.");
                    }

                    if ($detalle->cantidad > $producto->stock) {
                        throw new \Exception("'{$producto->nombre}' no tiene stock suficiente. Quedan {$producto->stock} unidades.");
                    }

                    $producto->decrement('stock', $detalle->cantidad);
                }

                $venta->estado = true;
                $venta->fecha  = now();
                $venta->save();
            });
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('success', '¡Compra finalizada con éxito!');
    }

    // Auxiliar: mantiene cantidad y precioTotal de la cabecera sincronizados
    private function sincronizarCabecera(Ventas $venta): void
    {
        $venta->cantidad    = $venta->detalleVentas()->sum('cantidad');
        $venta->precioTotal = $venta->detalleVentas()->sum('subtotal');
        $venta->save();
    }

    // 6. Vaciar el carrito
    public function vaciar()
    {
        $usuarioId = Auth::id();
        $venta = Ventas::where('personas_id', $usuarioId)
            ->where('estado', false)
            ->first();

        if ($venta) {
            $venta->detalleVentas()->delete();
            $this->sincronizarCabecera($venta);
        }

        return redirect()->route('carrito.index')->with('success', 'Carrito vaciado.');
    }
}
