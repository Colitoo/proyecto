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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $producto->id }}">
                                    Editar
                                </button>


                                {{-- Habilitar/Deshabilitar --}}
                                @if($producto->activo)
                                <form action="{{ route('productos.toggleActivo', $producto->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-secondary">
                                        Deshabilitar
                                    </button>
                                </form>
                                @else
                                <form action="{{ route('productos.toggleActivo', $producto->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success">
                                        Habilitar
                                    </button>
                                </form>
                                @endif

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
            <!-- Modal -->
            <!-- Agregamos "modal-xl" en la segunda línea -->
            <div class="modal fade" id="exampleModal{{ $producto->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto N°{{ $producto->id }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="formEditar{{ $producto->id }}" action="{{ route('productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <!-- Nombre -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" required>
                                    </div>
                                    <!-- Precio -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Precio</label>
                                        <input type="number" name="precio" step="0.01" class="form-control" value="{{ $producto->precio }}" required>
                                    </div>
                                    <!-- Stock -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Stock</label>
                                        <input type="number" name="stock" class="form-control" value="{{ $producto->stock }}" required>
                                    </div>
                                    <!-- Categoría -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Categoría</label>
                                        <select name="categoria_id" class="form-select" required>
                                            <option value="">Seleccioná una categoría</option>
                                            @foreach($categorias as $categoria)
                                            <option value="{{ $categoria->id }}" {{ $producto->categoria_id == $categoria->id ? 'selected' : '' }}>
                                                {{ $categoria->nombre }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Imagen (Opcional en la edición) -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Imagen (Dejar vacío si no cambia)</label>
                                        <input type="file" name="imagen" class="form-control">
                                    </div>
                                    <!-- Descripción (Ocupa todo el ancho) -->
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Descripción</label>
                                        <textarea name="descripcion" class="form-control" rows="3">{{ $producto->descripcion }}</textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" form="formEditar{{ $producto->id }}" class="btn btn-primary">Guardar cambios</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>