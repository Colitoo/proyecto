<x-layout_admin>
    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h2 class="txt-color">Detalles del Producto</h2>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-dark">
                        <h5 class="text-center txt-color mb-0">{{ $producto->nombre }}</h5>
                    </div>
                    <div class="card-body">
                        @if($producto->url_imagen)
                            <div class="text-center mb-4">
                                <img src="{{ asset($producto->url_imagen) }}" alt="{{ $producto->nombre }}" class="img-fluid" style="max-height: 400px;">
                            </div>
                        @endif

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h6 class="text-muted">Categoría</h6>
                                <p>{{ $producto->categoria ? $producto->categoria->nombre : 'Sin categoría' }}</p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-muted">Precio</h6>
                                <p class="h5 txt-color">${{ number_format($producto->precio, 2) }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h6 class="text-muted">Stock</h6>
                                <p>
                                    <span class="badge @if($producto->stock > 0) bg-success @else bg-danger @endif">
                                        {{ $producto->stock }}
                                    </span>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-muted">Fecha de Creación</h6>
                                <p>{{ $producto->created_at->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="text-muted">Descripción</h6>
                            <p>{{ $producto->descripcion ?? 'Sin descripción' }}</p>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout_admin>
