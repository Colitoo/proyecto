<x-layout title="Carrito">
    <style>
        /* Ocultar flechas del input number */
        .cantidad-input::-webkit-outer-spin-button,
        .cantidad-input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .cantidad-input[type=number] {
            -moz-appearance: textfield;
        }
    </style>

    <div class="container-md mt-5">
        <h2 class="subtitulo text-center txt-color mb-4">Carrito de Compras</h2>

        @if ($venta && $venta->detalleVentas->isNotEmpty())
        <div class="row">
            <div class="col-md-7">
                <div class="row row-cols-1 g-3">
                    @foreach ($venta->detalleVentas as $detalle)
                    <div class="col">
                        <div class="card bg-dark mb-3 border-0 shadow-sm p-2">
                            <div class="row g-0 align-items-center">

                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('storage/' . $detalle->producto->url_imagen) }}"
                                        class="img-fluid rounded"
                                        alt="{{ $detalle->producto->nombre }}"
                                        style="max-height: 100px; object-fit: cover;">
                                </div>

                                <div class="col-md-8">
                                    <div class="card-body py-2 text-white">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h5 class="card-title fw-bold text-white mb-0">{{ $detalle->producto->nombre }}</h5>

                                            {{-- Botón eliminar producto individual --}}
                                            <form action="{{ route('carrito.eliminar', $detalle->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent text-danger p-0" title="Eliminar producto" style="cursor: pointer;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 7l16 0" />
                                                        <path d="M10 11l0 6" />
                                                        <path d="M14 11l0 6" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg></button>
                                            </form>
                                        </div>

                                        <form action="{{ route('carrito.update-cantidad', $detalle->id) }}" method="POST" class="d-flex align-items-center">
                                            @csrf
                                            @method('PUT')
                                            <label class="me-2">Cantidad:</label>

                                            <div class="d-flex align-items-center gap-2">
                                                <button type="button"
                                                    class="btn btn-secondary px-3 text-bold"
                                                    onclick="cambiarCantidad(this, -1)"
                                                    {{ $detalle->cantidad <= 1 ? 'disabled' : '' }}>
                                                    -
                                                </button>

                                                <input type="hidden" name="cantidad" value="{{ $detalle->cantidad }}" class="cantidad-hidden">

                                                <input type="number"
                                                    class="form-control fw-bold text-center cantidad-input"
                                                    value="{{ $detalle->cantidad }}"
                                                    min="1"
                                                    max="{{ $detalle->producto->stock }}"
                                                    style="width: 70px;"
                                                    onchange="actualizarCantidadManual(this)">

                                                <button type="button"
                                                    class="btn btn-outline-light px-3 text-bold"
                                                    onclick="cambiarCantidad(this, +1)"
                                                    {{ $detalle->cantidad >= $detalle->producto->stock ? 'disabled' : '' }}>
                                                    +
                                                </button>

                                                <span class="ms-1">
                                                    Stock disponible: <strong>{{ $detalle->producto->stock }}</strong>
                                                    @if ($detalle->cantidad >= $detalle->producto->stock)
                                                    <span class="text-warning">(máximo)</span>
                                                    @endif
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-grid mt-3 text-end">
                    <form action="{{ route('carrito.vaciar') }}" method="POST" class="mt-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-50 py-2">
                            Vaciar Carrito
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card border-0 shadow-sm p-4 bg-dark">
                    <h4 class="mb-4">Resumen de Compra</h4>

                    <ul class="list-group list-group-flush mb-4">
                        @foreach ($venta->detalleVentas as $detalle)
                        <li class="list-group-item bg-transparent d-flex justify-content-between align-items-start px-0 py-3">
                            <div class="me-auto">
                                <div class="text-white" style="max-width: 200px;">{{ $detalle->producto->nombre }}</div>
                                <span class="text-white">{{ $detalle->cantidad }} x ${{ number_format($detalle->precioUnitario, 2) }}</span>
                            </div>
                            <span class="fw-bold text-white">${{ number_format($detalle->subtotal, 2) }}</span>
                        </li>
                        @endforeach
                    </ul>

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-white">Costo de Envío:</span>
                        <span class="text-white">Fijo ($1500.00)</span>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span class="fs-5 text-white">Total General:</span>
                        <span class="fs-4 text-white">${{ number_format($venta->precioTotal + 1500, 2) }}</span>
                    </div>

                    <button type="button" class="btn btn-primary btn-outline-light w-100 py-2 shadow-sm"
                        data-bs-toggle="modal" data-bs-target="#modalFinalizarCompra">
                        Finalizar Compra
                    </button>
                </div>
            </div>
        </div>

        @else
        <div class="text-center py-5">
            <p class="txt-color fs-5">Tu carrito está vacío.</p>
            <a href="/catalogo" class="btn btn-primary btn-outline-light">Ver productos</a>
        </div>
        @endif

    </div>

    {{-- MODAL: siempre fuera del @if para que Bootstrap pueda manejarlo correctamente --}}
    <div class="modal fade" id="modalFinalizarCompra" tabindex="-1"
        aria-labelledby="modalFinalizarCompraLabel" aria-hidden="true" data-bs-theme="dark">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5 fw-bold txt-color" id="modalFinalizarCompraLabel">Datos de Envío y Pago</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formCheckout"
                        action="{{ $venta ? route('carrito.verificar-stock', $venta->id) : '#' }}"
                        method="POST">
                        @csrf

                        <div class="row">
                            <!-- SECCIÓN ENVÍO -->
                            <div class="col-md-6 border-end">
                                <h5 class="fw-bold mb-3 text-white">1. Dirección de Entrega</h5>

                                <div class="mb-3">
                                    <label class="form-label">Dirección / Calle y Altura</label>
                                    <input type="text" name="direccion" class="form-control"
                                        placeholder="Ej: Av. Siempreviva 742" value="{{ old('direccion') }}">
                                    @error('direccion')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Código Postal</label>
                                        <input type="text" name="codigo_postal" class="form-control"
                                            placeholder="Ej: 3500" value="{{ old('codigo_postal') }}">
                                        @error('codigo_postal')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Ciudad</label>
                                        <input type="text" name="ciudad" class="form-control"
                                            placeholder="Ej: San Luis" value="{{ old('ciudad') }}">
                                        @error('ciudad')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Provincia</label>
                                    <input type="text" name="provincia" class="form-control"
                                        placeholder="Ej: Corrientes" value="{{ old('provincia') }}">
                                    @error('provincia')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- SECCIÓN TARJETA -->
                            <div class="col-md-6 ps-md-4">
                                <h5 class="fw-bold mb-3 text-white">2. Datos de la Tarjeta</h5>

                                <div class="mb-3">
                                    <label class="form-label">Nombre impreso en la tarjeta</label>
                                    <input type="text" name="tarjeta_nombre" class="form-control"
                                        placeholder="Ej: Juan Pérez" value="{{ old('tarjeta_nombre') }}">
                                    @error('tarjeta_nombre')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Número de Tarjeta</label>
                                    <input type="text" name="tarjeta_numero" class="form-control"
                                        placeholder="0000 0000 0000 0000" maxlength="16">
                                    @error('tarjeta_numero')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Vencimiento (MM/AA)</label>
                                        <input type="text" name="tarjeta_vence" class="form-control"
                                            placeholder="MM/AA" maxlength="5">
                                        @error('tarjeta_vence')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Código (CVC)</label>
                                        <input type="password" name="tarjeta_cvc" class="form-control"
                                            placeholder="123" maxlength="4">
                                        @error('tarjeta_cvc')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Modificar Carrito</button>
                    <button type="submit" form="formCheckout" class="btn btn-secondary">Validar y Confirmar Pedido</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function cambiarCantidad(btn, delta) {
            const wrapper = btn.closest('.d-flex');
            const inputHidden = wrapper.querySelector('.cantidad-hidden');
            const inputNumber = wrapper.querySelector('.cantidad-input');
            const form = btn.closest('form');
            const stock = parseInt(wrapper.querySelector('strong').textContent);

            let nueva = parseInt(inputNumber.value) + delta;

            if (nueva < 1) nueva = 1;
            if (nueva > stock) nueva = stock;

            inputNumber.value = nueva;
            inputHidden.value = nueva;

            wrapper.querySelector('button:first-child').disabled = nueva <= 1;
            wrapper.querySelector('button:nth-child(4)').disabled = nueva >= stock;

            form.submit();
        }

        function actualizarCantidadManual(input) {
            const wrapper = input.closest('.d-flex');
            const inputHidden = wrapper.querySelector('.cantidad-hidden');
            const form = input.closest('form');
            const stock = parseInt(wrapper.querySelector('strong').textContent);

            let nueva = parseInt(input.value);

            // Validaciones
            if (isNaN(nueva) || nueva < 1) {
                nueva = 1;
            }
            if (nueva > stock) {
                nueva = stock;
                alert(`La cantidad máxima disponible es ${stock}`);
            }

            input.value = nueva;
            inputHidden.value = nueva;

            wrapper.querySelector('button:first-child').disabled = nueva <= 1;
            wrapper.querySelector('button:nth-child(4)').disabled = nueva >= stock;

            form.submit();
        }

        // Limpia el backdrop si el modal se cierra mal
        document.addEventListener('hidden.bs.modal', function() {
            document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
            document.body.classList.remove('modal-open');
            document.body.style.removeProperty('overflow');
            document.body.style.removeProperty('padding-right');
        });
    </script>
</x-layout>