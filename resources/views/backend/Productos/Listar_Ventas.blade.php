<x-layout title="Lista de Ventas">
    <div class="container mt-4">
        <h2 class="txt-color">Lista de Ventas totales</h2>
        <div class="table-responsive mt-4">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Comprador</th>
                        <th>cantidad</th>
                        <th>Precio Total</th>
                        <th>fecha</th>
                        <th>Estado</th>
                        <th>Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($ventas as $venta)
                    <tr>
                        <td>{{ $venta->id }}</td>
                        <td>{{ $venta->persona->nombre ?? 'Sin nombre' }}</td>
                        <td>{{ $venta->cantidad }}</td>
                        <td>${{ number_format($venta->precioTotal, 2) }}</td>
                        <td>{{ $venta->fecha }}</td>
                        <td>
                            @if($venta->estado)
                            <span class="badge bg-success">Activo</span>
                            @else
                            <span class="badge bg-danger">Inactivo</span>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#DetalleVenta{{ $venta->id }}">
                                ver detalle
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No hay ventas</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Modales para cada venta -->
            @foreach($ventas as $venta)
            <div class="modal fade" id="DetalleVenta{{ $venta->id }}" tabindex="-1" aria-labelledby="DetalleVentaLabel{{ $venta->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="DetalleVentaLabel{{ $venta->id }}">Detalle de la Venta #{{ $venta->id }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Nombre del Comprador:</strong> {{ $venta->persona->nombre ?? 'Sin nombre' }}</p>
                            <p><strong>Precio Total:</strong> ${{ number_format($venta->precioTotal, 2) }}</p>
                            <p><strong>Fecha:</strong> {{ $venta->fecha }}</p>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio Unitario</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($venta->detalleVentas as $detalle)
                                <tr>
                                    <td>{{ $detalle->producto->nombre ?? 'Producto eliminado' }}</td>
                                    <td>{{ $detalle->cantidad }}</td>
                                    <td>${{ number_format($detalle->precioUnitario, 2) }}</td>
                                    <td>${{ number_format($detalle->subtotal, 2) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
