<x-layout title="Productos">
    <section class="container-md mt-4">
        <div class="container mt-4">
            <h1 class="text-center subtitulo">Pagina de productos</h1>
            <h2>Un poco sobre nuestros productos</h2>
            <p>En nuestra tienda encontrarás una amplia selección de productos de calidad, cuidadosamente seleccionados para ofrecerte lo mejor en rendimiento y diseño.
                Consolas y mandos considerados "retros", pero que tienen mucho que ofrecer con sus iconicos catalogos incluidos. No dejes pasar la oportunidad de experimentar los origenes de lo que conocemos hoy dia, con una gran variedad de juegos y una experiencia de juego única.
            </p>
        </div>

        <div class="container mt-5">
            <div class="row">
                <!-- Columna izquierda con texto -->
                <div class="col-md-3 mb-4">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category-plus">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 4h6v6h-6v-6" />
                                <path d="M14 4h6v6h-6v-6" />
                                <path d="M4 14h6v6h-6v-6" />
                                <path d="M14 17h6m-3 -3v6" />
                            </svg></button>
                        <ul class="dropdown-menu w-100">
                            <li><a class="dropdown-item" href="consolas">Consolas</a></li>
                            <li><a class="dropdown-item" href="mandos">Mandos</a></li>
                            <li><a class="dropdown-item" href="portatiles">Portátiles</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-9">

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($productos as $item)
                        <div class="col">
                            <div class="card h-100 tarjeta-producto">
                                <div class="img-box img-box-producto">
                                    <img src="{{asset($item['imagen'])}}" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item['nombre'] }}</h5>
                                    <p class="card-text">{{ $item['descripcion'] }}</p>
                                </div>
                                <div class="card-footer align-items-center text-center">
                                    <small class="card-text-price">{{ $item['precio'] }}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>