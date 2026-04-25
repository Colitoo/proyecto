<x-layout title="Mandos">
    <div class="container mt-4">
        <h2 class="text-center subtitulo">Pagina de productos: Mandos para consolas</h2>
    </div>

    <section class="container mt-5">
        <div class="row">
            <!-- Columna izquierda con texto -->
            <div class="dropdown container">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category-plus">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 4h6v6h-6v-6" />
                        <path d="M14 4h6v6h-6v-6" />
                        <path d="M4 14h6v6h-6v-6" />
                        <path d="M14 17h6m-3 -3v6" />
                    </svg></button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="consolas">Consolas</a></li>
                    <li><a class="dropdown-item" href="portatiles">Portátiles</a></li>
                    <li><a class="dropdown-item" href="productos">Todos los productos</a></li>
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
                                <img src="{{asset('img/mandops1.jpg')}}" class="card-img-top" alt="mandops1">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Play Station 1, Mando</h5>
                                <p class="card-text">mando de play 1, original en buen estado</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">$50</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="img-box">
                                <img src="{{asset('img/mandops2.jpg')}}" class="card-img-top" alt="mandops2">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Play Station 2, Mando</h5>
                                <p class="card-text">mando de play 2, original en buen estado</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">$50</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="img-box">
                                <img src="{{asset('img/mandops3.jpg')}}" class="card-img-top" alt="mandops3">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Play Station 3, Mando</h5>
                                <p class="card-text">mando de play 3, original en buen estado</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">$70</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="img-box">
                                <img src="{{asset('img/mandowii.jpg')}}" class="card-img-top" alt="mandowii">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Wii Remote</h5>
                                <p class="card-text">El mando de la consola de entretenimiento más innovadora de Nintendo, con una gran variedad de juegos y una experiencia de juego única.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">$70</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="img-box">
                                <img src="{{asset('img/mandogamecube.jpg')}}" class="card-img-top" alt="mandogamecube">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">GameCube Controller</h5>
                                <p class="card-text">El mando de la consola Game Cube, vuelve en esta nueva generacion para tener una nueva oportunidad con sus juegos retrocompatibles.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">$80</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>