<x-layout title="Panel de Control - Administrador">
    <div class="container-fluid mt-4 px-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="titulo m-0 txt-color">Panel de Control de Administrador</h1>
        </div>

        <!-- FILA DE TARJETAS INDICADORAS (KPI Cards) -->
        <div class="row g-4 mb-4">
            <!-- Ingresos Mensuales -->
            <div class="col-md-4">
                <div class="card border-0 shadow-lg h-100 p-3" style="background: linear-gradient(135deg, #0b1a3a, #1a2f6b);">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white-50 text-uppercase small fw-bold">Ganancias del Mes</h6>
                            <h2 class="fw-bold mb-0" style="color: #afffaa;">${{ number_format($ingresosMes, 2) }}</h2>
                        </div>
                        <span class="fs-1 opacity-50">
                            <svg xmlns="http://w3.org" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-report-money">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                <path d="M9 5a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2" />
                                <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                                <path d="M12 17v1m0 -8v1" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Alertas de Stock Crítico -->
            <div class="col-md-4">
                <div class="card border-0 shadow-lg h-100 p-3 {{ $productosCriticos->count() > 0 ? 'border-start border-danger border-4' : '' }}" style="background-color: #1a1a1a;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white-50 text-uppercase small fw-bold">Stock Crítico (<=3)</h6>
                                    <h2 class="fw-bold mb-0 {{ $productosCriticos->count() > 0 ? 'text-danger' : 'text-success' }}">
                                        {{ $productosCriticos->count() }} Alertas
                                    </h2>
                        </div>
                        <span class="fs-1 opacity-50">
                            <svg xmlns="http://w3.org" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-alert-triangle">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 9v4" />
                                <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0" />
                                <path d="M12 16h.01" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- MITAD IZQUIERDA -->
            <div class="col-lg-8">
                <!-- Listado de Ventas -->
                <div class="card shadow-lg p-4 mb-4" style="background-color: #111;">
                    <h5 class="subtitulo txt-color mb-3">Historial Reciente de Ventas</h5>
                    <div class="table-responsive">
                        <table class="table table-dark table-striped table-hover align-middle m-0">
                            <thead>
                                <tr>
                                    <th class="text-white-50">ID Venta</th>
                                    <th class="text-white-50">Cliente</th>
                                    <th class="text-white-50">Items</th>
                                    <th class="text-white-50">Total Cobrado</th>
                                    <th class="text-white-50">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($ultimasVentas as $v)
                                <tr>
                                    <td class="text-white-50">#{{ $v->id }}</td>
                                    <td class="text-white-50">{{ $v->persona['nombre y apellido'] ?? 'Cliente Anónimo' }}</td>
                                    <td class="text-white-50">{{ $v->cantidad }} unidades</td>
                                    <td class="card-text-price fw-bold text-white-50">${{ number_format($v->precioTotal, 2) }}</td>
                                    <td>
                                        <span class="badge bg-{{ $v->estado ? 'success' : 'warning' }}">
                                            {{ $v->estado ? 'Pagado' : 'Pendiente' }}
                                        </span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-3">No hay ventas registradas en el sistema todavía.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Alertas de Reposición -->
                @if($productosCriticos->count() > 0)
                <div class="card shadow-lg p-4 border-start border-danger border-4" style="background-color: #1a1a1a;">
                    <h5 class="fw-bold text-danger mb-3">Reposición Urgente</h5>
                    <div class="row row-cols-1 row-cols-md-2 g-2">
                        @foreach($productosCriticos as $prod)
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-between p-2 rounded" style="background-color: #111; border: 1px solid #2a2a2a;">
                                <span class="text-truncate text-white-50 small me-2" style="max-width: 200px;">{{ $prod->nombre }}</span>
                                <span class="badge bg-danger">Quedan: {{ $prod->stock }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <!-- MITAD DERECHA -->
            <div class="col-lg-4">
                <!-- Más Vendidos -->
                <div class="card shadow-lg p-4 mb-4" style="background-color: #111;">
                    <h5 class="subtitulo txt-color mb-3">Los 3 Más Vendidos</h5>
                    <ul class="list-group list-group-flush">
                        @forelse($productosMasVendidos as $top)
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent text-white-50 px-0 py-2 border-secondary" style="opacity: 0.9;">
                            <div class="text-truncate me-2" style="max-width: 220px;">
                                <span class="fw-bold" style="color: #afffaa;">#{{ $loop->iteration }}</span> {{ $top->producto->nombre ?? 'Producto' }}
                            </div>
                            <span class="badge rounded-pill text-dark" style="background-color: #afffaa;">{{ $top->total_vendido }} u.</span>
                        </li>
                        @empty
                        <li class="list-group-item text-muted bg-transparent px-0 text-center">No hay registros de compras.</li>
                        @endforelse
                    </ul>
                </div>
                <!-- Panel de Navegación Rápida -->
                <div class="card shadow-lg p-4" style="background-color: #161616; border: 1px solid #252525 !important;">
                    <h5 class="fw-bold mb-3 text-secondary" style="font-family: 'Jersey 10', Arial; font-size: 2rem;">Accesos del Sistema</h5>
                    <div class="d-grid gap-2">
                        <!-- Agregamos text-white-50 para suavizar el texto de los botones -->
                        <a href="{{ route('productos.formulario') }}" class="btn fw-bold text-start text-truncate text-white-50">
                            Cargar Nuevo Producto
                        </a>
                        <a href="{{ route('productos.index') }}" class="btn fw-bold text-start text-truncate text-white-50" style="background-color: #333;">
                            Gestionar productos
                        </a>
                        <a href="{{ route('admin.Ver_Consultas') }}" class="btn fw-bold text-start text-truncate text-white-50" style="background-color: #222;">
                            Ver Consultas de Clientes
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>