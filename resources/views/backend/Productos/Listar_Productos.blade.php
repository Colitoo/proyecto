<x-layout title="Lista de Productos">
    <div class="container mt-4">
        <h2 class="subtitulo txt-color text-center">Lista de Productos</h2>

        <div class="table-responsive mt-4">
            <table class="table table-dark table-striped table-bordered table-hover align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $producto->url_imagen) }}" alt="{{ $producto->nombre }}"
                                width="60" height="60"
                                style="object-fit: contain;">
                        </td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->categoria->nombre ?? 'Sin categoría' }}</td>
                        <td>{{ $producto->stock }}</td>
                        <td>${{ number_format($producto->precio, 2) }}</td>
                        <td>
                            @if(!$producto->trashed())
                            <span class="badge bg-success">Activo</span>
                            @else
                            <span class="badge bg-danger">Inactivo</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No hay productos o no están activos</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>