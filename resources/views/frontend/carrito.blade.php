<x-layout title="Carrito">
    <div class="container mt-5">
        <h2 class="subtitulo mb-4">Carrito de Compras</h2>

        <div class="row">
            <div class="col-md-7">
                <div class="row row-cols-1 g-3">
                    @foreach ($venta->detalleVentas as $detalle)
                    <div class="col">
                        <div class="card mb-3 border-0 shadow-sm p-2">
                            <div class="row g-0 align-items-center">
                                
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('storage/' . $detalle->producto->url_imagen) }}"
                                        class="img-fluid rounded"
                                        alt="{{ $detalle->producto->nombre }}"
                                        style="max-height: 100px; object-fit: cover;">
                                </div>
                        
                                <div class="col-md-8">
                                    <div class="card-body py-2">
                                        <h5 class="card-title fw-bold text-dark mb-2">{{ $detalleVentas->producto->nombre }}</h5>

                                        <!-- Formulario inline para actualizar cantidad al cambiar el select -->
                                        <form action="{{ route('carrito.update-cantidad', $detalle->id) }}" method="POST" class="d-flex align-items-center">
                                            @csrf
                                            @method('PUT')
                                            <label class="me-2 text-muted small">Cantidad:</label>

                                            <!-- Desplegable limitado por el stock real de la BD -->
                                            <select name="cantidad" class="form-select form-select-sm w-auto" onchange="this.form.submit()">
                                                <!-- Protegemos que empiece en 1 y termine en el stock máximo disponible -->
                                                @for ($i = 1; $i <= $detalleVentas->producto->stock; $i++)
                                                    <option value="{{ $i }}" {{ $detalle->cantidad == $i ? 'selected' : '' }}>
                                                        {{ $i }} {{ $i == $detalleVentas->producto->stock ? '(Últimos disponibles)' : '' }}
                                                    </option>
                                                    @endfor
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-5">
                <div class="card border-0 shadow-sm p-4 bg-light">
                    <h4 class="fw-bold mb-4">Resumen de Compra</h4>

                    <ul class="list-group list-group-flush mb-4">
                        @foreach ($venta->detallesVentas as $detalle)
                        <li class="list-group-item bg-transparent d-flex justify-content-between align-items-start px-0 py-3">
                            <div class="me-auto">
                                <div class="fw-bold text-truncate" style="max-width: 200px;">{{ $detalleVentas->producto->nombre }}</div>
                                <small class="text-muted">{{ $detalleVentas->cantidad }} x ${{ number_format($detalleVentas->precioUnitario, 2) }}</small>
                            </div>
                            <span class="fw-bold text-dark">${{ number_format($detalleVentas->subtotal, 2) }}</span>
                        </li>
                        @endforeach
                    </ul>

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Costo de Envío:</span>
                        <span class="fw-bold text-success">Fijo ($1500.00)</span>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span class="fs-5 fw-bold">Total General:</span>
                        <span class="fs-4 fw-bold text-primary">${{ number_format($venta->precioTotal + 1500, 2) }}</span>
                    </div>

                    <!-- BOTÓN QUE DISPARA EL MODAL EMERGENTE -->
                    <button type="button" class="btn btn-primary w-100 py-2 fw-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#modalFinalizarCompra">
                        Finalizar Compra
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- ========================================== -->
    <!-- MODAL EMERGENTE: FORMULARIO DE VALIDACIÓN  -->
    <!-- ========================================== -->
    <div class="modal fade" id="modalFinalizarCompra" tabindex="-1" aria-labelledby="modalFinalizarCompraLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold" id="modalFinalizarCompraLabel">Datos de Envío y Pago</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de validación temporal (Acción hacia la verificación de stock posterior) -->
                    <form id="formCheckout" action="{{ route('carrito.verificar-stock', $venta->id) }}" method="POST">
                        @csrf

                        <div class="row">
                            <!-- SECCIÓN ENVÍO -->
                            <div class="col-md-6 border-end">
                                <h5 class="fw-bold mb-3 text-secondary">1. Dirección de Entrega</h5>

                                <div class="mb-3">
                                    <label class="form-label">Dirección / Calle y Altura</label>
                                    <input type="text" name="direccion" class="form-control" placeholder="Ej: Av. Siempreviva 742" required>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Código Postal</label>
                                        <input type="text" name="codigo_postal" class="form-control" placeholder="Ej: 3500" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Ciudad</label>
                                        <input type="text" name="ciudad" class="form-control" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Provincia</label>
                                    <input type="text" name="provincia" class="form-control" required>
                                </div>
                            </div>

                            <!-- SECCIÓN TARJETA -->
                            <div class="col-md-6 ps-md-4">
                                <h5 class="fw-bold mb-3 text-secondary">2. Datos de la Tarjeta</h5>

                                <div class="mb-3">
                                    <label class="form-label">Nombre impreso en la tarjeta</label>
                                    <input type="text" name="tarjeta_nombre" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Número de Tarjeta</label>
                                    <input type="text" name="tarjeta_numero" class="form-control" placeholder="0000 0000 0000 0000" maxlength="16" required>
                                </div>

                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Vencimiento (MM/AA)</label>
                                        <input type="text" name="tarjeta_vence" class="form-control" placeholder="MM/AA" maxlength="5" required>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Código (CVC)</label>
                                        <input type="password" name="tarjeta_cvc" class="form-control" placeholder="123" maxlength="4" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Modificar Carrito</button>
                    <!-- El botón envía el formulario al validador de stock -->
                    <button type="submit" form="formCheckout" class="btn btn-success fw-bold">Validar y Confirmar Pedido</button>
                </div>
            </div>
        </div>
    </div>
</x-layout>