<x-layout_admin>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-dark">
                        <h2 class="text-center txt-color mb-0">Crear Nuevo Producto</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('productos.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-bold">Nombre del Producto *</label>
                                <input type="text" class="form-control @error('nombre') is-invalid @enderror" 
                                       id="nombre" name="nombre" placeholder="Ej: PlayStation 2" value="{{ old('nombre') }}">
                                @error('nombre')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="descripcion" class="form-label fw-bold">Descripción</label>
                                <textarea class="form-control @error('descripcion') is-invalid @enderror" 
                                          id="descripcion" name="descripcion" rows="4" 
                                          placeholder="Descripción del producto...">{{ old('descripcion') }}</textarea>
                                @error('descripcion')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="precio" class="form-label fw-bold">Precio *</label>
                                    <input type="number" step="0.01" class="form-control @error('precio') is-invalid @enderror" 
                                           id="precio" name="precio" placeholder="0.00" value="{{ old('precio') }}">
                                    @error('precio')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="stock" class="form-label fw-bold">Stock *</label>
                                    <input type="number" class="form-control @error('stock') is-invalid @enderror" 
                                           id="stock" name="stock" placeholder="0" value="{{ old('stock') }}">
                                    @error('stock')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="categoria_id" class="form-label fw-bold">Categoría *</label>
                                <select class="form-select @error('categoria_id') is-invalid @enderror" 
                                        id="categoria_id" name="categoria_id">
                                    <option value="" disabled @selected(old('categoria_id')==null)>
                                        Selecciona una categoría...
                                    </option>
                                    @foreach($categorias ?? [] as $categoria)
                                        <option value="{{ $categoria->id }}" @selected(old('categoria_id')==$categoria->id)>
                                            {{ $categoria->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('categoria_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="url_imagen" class="form-label fw-bold">URL de la Imagen</label>
                                <input type="text" class="form-control @error('url_imagen') is-invalid @enderror" 
                                       id="url_imagen" name="url_imagen" placeholder="ej: img/producto.jpg" value="{{ old('url_imagen') }}">
                                @error('url_imagen')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Crear Producto</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout_admin>