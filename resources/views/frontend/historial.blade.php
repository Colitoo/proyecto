<x-layout title="Historial de compras">
    <div class="container mt-4">
        <h2 class="txt-color subtitulo text-center">Historial de compras</h2>
        <p class="text-white"> </p>
        <div class="table-responsive mt-4">
            <table class="table table-dark table-striped table-hover align-middle">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Imagen</th>
                        <th>Cantidad</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($ventas as $venta)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($venta->fecha)->format('d/m/Y') }}</td>
                        <td>
                            @if($venta->detalleVentas->first()?->producto)
                            <img src="{{ asset('storage/' . $venta->detalleVentas->first()->producto->url_imagen) }}"
                                alt="{{ $venta->detalleVentas->first()->producto->nombre }}"
                                width="60" height="60"
                                style="object-fit: contain;">
                            @else
                            <span class="text-secondary">Sin imagen</span>
                            @endif
                        </td>
                        <td>{{ $venta->detalleVentas->sum('cantidad') }}</td>
                        <td>
                            @foreach($venta->detalleVentas as $detalle)
                            <div>{{ $detalle->producto->nombre ?? 'Sin nombre' }}</div>
                            @endforeach
                        </td>
                        <td>${{ number_format($venta->precioTotal, 2) }}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-outline-light" data-bs-toggle="modal" data-bs-target="#DetalleVenta{{ $venta->id }}">
                                Ver detalle
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4">Todavía no realizaste ninguna compra</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            @foreach($ventas as $venta)
            <div class="modal fade" id="DetalleVenta{{ $venta->id }}" tabindex="-1" aria-labelledby="DetalleVentaLabel{{ $venta->id }}" aria-hidden="true" data-bs-theme="dark">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="DetalleVentaLabel{{ $venta->id }}">Detalle de compra #{{ $venta->id }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Nombre del Comprador:</strong> {{ $venta->persona['nombre y apellido'] ?? 'Sin nombre' }}</p>
                            <p><strong>Precio Total:</strong> ${{ number_format($venta->precioTotal, 2) }}</p>
                            <p><strong>Fecha: </strong> {{ \Carbon\Carbon::parse($venta->fecha)->format('d/m/Y') }} </p>
                            <p><strong>Hora: </strong>{{ \Carbon\Carbon::parse($venta->fecha)->format('H:i') }}</p>
                        </div>
                        <table class="table table-borderless align-middle">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Producto</th>
                                    <th>Categoría</th>
                                    <th>Cantidad</th>
                                    <th>Precio Unitario</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($venta->detalleVentas as $detalle)
                                <tr>
                                    <td>
                                        @if($venta->detalleVentas->first()?->producto)
                                        <img src="{{ asset('storage/' . $venta->detalleVentas->first()->producto->url_imagen) }}"
                                            alt="{{ $venta->detalleVentas->first()->producto->nombre }}"
                                            width="90" height="90"
                                            style="object-fit: contain;">
                                        @else
                                        <span class="text-secondary">Sin imagen</span>
                                        @endif
                                    </td>
                                    <td>{{ $detalle->producto->nombre ?? 'Producto' }}</td>
                                    <td>{{ $detalle->producto->categoria->nombre}}</td>
                                    <td>{{ $detalle->cantidad }}</td>
                                    <td>${{ number_format($detalle->precioUnitario, 2) }}</td>
                                    <td>${{ number_format($detalle->subtotal, 2) }}</td>
                                </tr>
                                <hr class="border-secondary">
                                @endforeach
                            </tbody>
                        </table>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>