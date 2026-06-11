<x-layout title="Cargar Producto">
    <section class="container mt-4">

        <div class="card shadow-sm mt-4">
            <div class="card-header bg-dark">
                <h2 class="subtitulo txt-color text-center">Cargar un Producto</h2>
            </div>

            <div class=" p-4">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif

                <form action="{{ route('productos.crear') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nombre del producto</label>
                            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" placeholder="Ej: Mando de PS2">
                            @error('nombre')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Categoría</label>
                            <select name="categoria_id" class="form-select">
                                <option value="">Seleccioná una categoría</option>
                                @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                @endforeach
                            </select>
                            @error('categoria_id')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Precio</label>
                            <input type="number" name="precio" step="0.01" class="form-control" value="{{ old('precio') }}" placeholder="Ej: 100">
                            @error('precio')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Stock</label>
                            <input type="number" name="stock" class="form-control" value="{{ old('stock') }}" placeholder="Ej: 20">
                            @error('stock')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Imagen</label>
                            <input type="file" name="imagen" class="form-control">
                            @error('imagen')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea name="descripcion" class="form-control" rows="3" placeholder="Describe el producto">{{ old('descripcion') }}</textarea>
                        @error('descripcion')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('productos.formulario') }}" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary btn-outline-light">Añadir Producto</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>