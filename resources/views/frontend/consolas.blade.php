<x-layout title="Consolas">
    <div class="container mt-4">
        <h2 class="text-center subtitulo">Pagina de productos: Consolas de Mesa</h2>
    </div>

    <section class="container mt-5">
        <div class="row">
            <!-- Columna izquierda con texto -->
            <div class="dropdown container">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</button>
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

            <!-- Columna derecha con tarjetas -->
            <div class="col-md-9">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <div class="img-box">
                                <img src="{{asset('img/play1.jpg')}}" class="card-img-top" alt="play1">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Combo Play Station 1</h5>
                                <p class="card-text">No dejen pasar la portunidad de experimentar los origenes de lo que conocemos hoy dia </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">$200</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="img-box">
                                <img src="{{asset('img/play2.jpg')}}" class="card-img-top" alt="play2">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Play Station 2</h5>
                                <p class="card-text">Para muchos la mejor de la historia, el catalogo mas iconico incluido. No dejen pasar la oportunida.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">$200</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="img-box">
                                <img src="{{asset('img/play3.jpg')}}" class="card-img-top" alt="play3">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Play Station 3</h5>
                                <p class="card-text">La primera consola de sony con graficos HD, una gran opcion para los amantes de la tecnologia y los juegos.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">$300</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="img-box">
                                <img src="{{asset('img/wii.jpg')}}" class="card-img-top" alt="wii">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Wii</h5>
                                <p class="card-text">La consola de entretenimiento más innovadora de Nintendo, con una gran variedad de juegos y una experiencia de juego única. incluiye mando y juegos!!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">$350</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout>