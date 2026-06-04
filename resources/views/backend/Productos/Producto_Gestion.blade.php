<x-layout title="Gestion de Productos">
    <div class="container mt-4">
        <h2 class="txt-color">Gestionar Productos</h2>

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <div class="table-responsive mt-4">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->categoria->nombre ?? 'Sin categoría' }}</td>
                        <td>${{ number_format($producto->precio, 2) }}</td>
                        <td>
                            @if($producto->activo)
                            <span class="badge bg-success">Activo</span>
                            @else
                            <span class="badge bg-danger">Inactivo</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">

                                {{-- Editar --}}
                                <a href="{{ route('productos.edit', $producto->id) }}"
                                    class="btn btn-warning">
                                    Editar
                                </a>

                                {{-- Habilitar/Deshabilitar --}}
                                <form action="{{ route('productos.toggleActivo', $producto->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit"
                                        class="btn {{ $producto->activo ? 'btn-secondary' : 'btn-success' }}">
                                        {{ $producto->activo ? 'Deshabilitar' : 'Habilitar' }}
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4">No hay productos</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>