<x-layout title="Panel de Control">
    <div class="container-fluid mt-4 px-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="titulo m-0 txt-color">Panel de Control de Administrador</h1>
        </div>

        @if($productosCriticos->count() > 0)
        <div class="row g-4 mb-4">
            <div class="col-12">
                <div class="card shadow-sm border-start border-danger border-5 p-3">
                    <h6 class="text-uppercase text-danger mb-3">Reposición Urgente</h6>
                    <div class="d-flex flex-wrap gap-3">
                        @foreach($productosCriticos as $prod)
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-white-50 small">{{ $prod->nombre }}</span>
                            <span class="badge bg-danger">Quedan: {{ $prod->stock }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card shadow-lg p-4">
                    <h5 class="subtitulo txt-color mb-3">Historial Reciente de Ventas</h5>
                    <div class="table-responsive">
                        <table class="table table-dark table-striped table-hover align-middle m-0">
                            <thead>
                                <tr>
                                    <th>ID Venta</th>
                                    <th>Cliente</th>
                                    <th>Items</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($ultimasVentas as $v)
                                <tr>
                                    <td>#{{ $v->id }}</td>
                                    <td>{{ $v->persona['nombre y apellido'] ?? 'Cliente Anónimo' }}</td>
                                    <td>{{ $v->cantidad }} unidades</td>
                                    <td class="card-text-price fw-bold">${{ number_format($v->precioTotal, 2) }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-3">No hay ventas registradas en el sistema todavía.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 d-flex flex-column gap-4">
                <div class="card border-start border-5 shadow-lg p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="card-text-price">
                            <h6 class="text-uppercase small fw-bold">Ganancias del Mes</h6>
                            <h2 class="fw-bold mb-0">${{ number_format($ingresosMes, 2) }}</h2>
                        </div>
                        <svg xmlns="http://w3.org" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-report-money">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                            <path d="M9 5a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2" />
                            <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                            <path d="M12 17v1m0 -8v1" />
                        </svg>
                    </div>
                </div>

                <div class="card shadow-lg p-4">
                    <h5 class="subtitulo txt-color mb-3">Los 3 Más Vendidos</h5>
                    <ul class="list-group list-group-flush">
                        @forelse($productosMasVendidos as $top)
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent text-white px-0 py-2 border-secondary">
                            <div class="text-truncate me-2" style="max-width: 220px;">
                                <span class="fw-bold">#{{ $loop->iteration }}</span> {{ $top->producto->nombre ?? 'Producto' }}
                            </div>
                            <span class="badge rounded-pill card-text-price">{{ $top->total_vendido }} u.</span>
                        </li>
                        @empty
                        <li class="list-group-item text-warning bg-transparent px-0 text-center">No hay registros de compras</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-layout>