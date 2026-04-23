<x-layout title="Productos">
    <div class="container mt-4">
        <h1>pagina de productos</h1>
    </div>

    <section class="container mt-5">
        <div class="row">
            <!-- Columna izquierda con texto -->
            <div class="dropdown container">
                <button class="btn btn-secondary dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="consolas">Consolas</a></li>
                    <li><a class="dropdown-item" href="mandos">Mandos</a></li>
                    <li><a class="dropdown-item" href="portatiles">Portátiles</a></li>
                </ul>
            </div>
            <div class="col-md-3 mt-4">
                <h2>Un poco sobre nuestros productos</h2>
                <p>En nuestra tienda encontrarás una amplia selección de productos de calidad, cuidadosamente seleccionados para ofrecerte lo mejor en rendimiento y diseño.
                    Consolas y mandos considerados "retros", pero que tienen mucho que ofrecer con sus iconicos catalogos incluidos. No dejes pasar la oportunidad de experimentar los origenes de lo que conocemos hoy dia, con una gran variedad de juegos y una experiencia de juego única.
                </p>
            </div>

            <div class="col-md-9">

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($productos as $item)
                    <div class="col">
                        <div class="card h-100 tarjeta-producto">
                            <div class="img-box">
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
    </section>

</x-layout>