<x-layout_admin>
    <div class="container mt-4">
        <h2 class="txt-color">Cargar Nuevo Producto</h2>

        <div class="card bg-dark mt-4 p-4">
            <form action="{{ route('productos.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea name="descripcion" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input type="number" name="precio" step="0.01" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">URL Imagen</label>
                    <input type="text" name="url_imagen" class="form-control"
                        placeholder="img/nombre.jpg">
                </div>

                <div class="mb-3">
                    <label class="form-label">Categoría</label>
                    <select name="categoria_id" class="form-select" required>
                        <option value="">Seleccioná una categoría</option>
                        @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Estado</label>
                    <select name="activo" class="form-select">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Guardar Producto</button>
                <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</x-layout_admin>