<x-layout title="Productos">
    <div class="container mt-4">
        <h1>pagina de productos</h1>
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
                                <img src="{{asset('img/psp.jpg')}}" class="card-img-top" alt="psp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Play Station Portable</h5>
                                <p class="card-text">Una consola portatil que te permite jugar en cualquier lugar, con un excelente rendimiento y una gran variedad de juegos.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">$300</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                                <div class="img-box">
                                    <img src="{{asset('img/psvita.jpg')}}" class="card-img-top" alt="psvita">
                                </div>
                            <div class="card-body">
                                <h5 class="card-title">Play Station Vita</h5>
                                <p class="card-text">La ultima consola portatil de sony, con una pantalla tactil y una gran variedad de juegos.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">$400</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="img-box">
                                <img src="{{asset('img/gameboy.jpg')}}" class="card-img-top" alt="gameboy">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Game Boy</h5>
                                <p class="card-text">La consola portátil más icónica de Nintendo, con una gran variedad de juegos.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">$80</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="img-box">
                                <img src="{{asset('img/3DS.jpg')}}" class="card-img-top" alt="3DS-XL">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">3DS-XL</h5>
                                <p class="card-text">La consola portátil más innovadora de Nintendo, con una gran variedad de juegos y una experiencia de juego única.</p>
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