<x-layout title="Inicio">

    <div class="banner-container">
        <img src="{{ asset('img/banner(1).png') }}" alt="banner inicio" class="banner-img">
        <h2 class="banner-texto">Welcome to the Past</h2>
        <h1 class="banner-texto">Especialistas en Consolas Retro <br><a href="/productos" class="btn btn-primary btn-outline-light">Ver catálogo</a> </h1>
    </div>
    <div class="info-general nav" role="alert">
        <p class="info-item">Envios por Correo Argentino</p>
        <p class="info-item">10% OFF abonando con transferencia</p>
        <p class="info-item">Garantía de 3 meses</p>
    </div>

    <section class="container mt-5 mb-5 text-center">
        <h2 class="fw-bold">Nuestro Objetivo</h2>
        <p>Nuestra mision como una empresa modesta, es proveer de productos y experiencias de otra epoca. Por ello nos enfocamos en lo "Retro" del mundo de los videos juegos, queremos proporcionar la oportunidad que las personas que disfrutan de este hobby puedan revivir viejos recuerdos o conocer los orignes de lo que conocen hoy.</p>
        <a href="/quienes-somos" class="btn text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                <path d="M12 9h.01" />
                <path d="M11 12h1v4h1" />
            </svg> Más información</a>
        </div>
    </section>

    <section class="contenedor-carousel  mt-4">
        <div class="container mt-5 mb-5 text-center">
            <h2 class="titulo subtitulo text-center">Productos más vendidos</h2>
            <p>Nos enorgullese presentarles los productos más queridos y vendidos por nuestra tienda.</p>
        </div>

        <div id="carouselMasVendidos" class="carousel carouselGeneral slide " data-bs-ride="carousel">
            <div class="carousel-interior">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="{{asset('img/3DS.jpg')}}" class="carousel-img" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{asset('img/play1.jpg')}}" class="carousel-img" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{asset('img/play2.jpg')}}" class="carousel-img" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselMasVendidos" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselMasVendidos" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class=" col-auto mt-5 text-end">
            <a href="/productos" class="btn btn-primary">Más productos</a>
        </div>
    </section>

    <section class="container mt-5 mb-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Nuestras Categorías</h2>
            <p>Te invitamos a que explores de mejor manera nuestros productos para entender su funcionamiento y características.</p>
        </div>

        <ul class="list-group mt-4 row row-cols-1 row-cols-md-3 g-4">
            <div class="card mb-4 border-0 shadow-lg bg text-white w-100">
                <div class="row g-0 align-items-center">
                    <div class="col-md-5">
                        <img src="{{asset('img/play2.jpg')}}" class="img-fluid h-100 w-100 rounded-start object-fit-cover" alt="PlayStation 2">
                    </div>

                    <div class="col-md-6 px-5 ps-md-5">
                        <div class="card h-100 shadow-sm border-0 text-center bg text-white p-3">
                            <h5 class="card-title fw-bold">Consolas de Sobremesa</h5>
                            <p class="card-text opacity-75">En esta categoria encontraras las opciones de las consolas retro que ofrecemos, donde prodras jugar de la forma "tipica" frente a un televisor con un mando en la mano. Incluyendo la amplia biblioteca que ofrece cada consola con los juegos iconicos que cada una puede ofrecer.</p>
                            <a href="/consolas" class="btn btn-outline-light btn-lg mt-2">Ver Consolas</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4 border-0 shadow-lg bg text-white w-100">
                <div class="row g-0 align-items-center">
                    <div class="col-md-6 px-5 ps-md-5">
                        <div class="card h-100 shadow-sm border-0 text-center bg text-white p-3">
                            <h5 class="card-title fw-bold">Mandos</h5>
                            <p class="card-text opacity-75">En esta categoria encontraras las herramientas utilizadas para interactuar con el mundo dentro del juego, a pesar de que no son productos de la actualidad no significa que no contengan tegnologias y diseños inovadores, en su momento cada uno destaco a su manera ya sea por su comodidad o inovacion.</p>
                            <a href="/mandos" class="btn btn-outline-light btn-lg mt-2">Ver Mandos</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <img src="{{asset('img/mandogamecube.jpg')}}" class="img-fluid h-100 w-100 rounded-start object-fit-cover" alt="mando de GameCube">
                    </div>
                </div>
            </div>

            <div class="card mb-4 border-0 shadow-lg bg text-white w-100">
                <div class="row g-0 align-items-center">
                    <div class="col-md-5">
                        <img src="{{asset('img/3DS.jpg')}}" class="img-fluid h-100 w-100 rounded-start object-fit-cover" alt="Nintendo 3DS">
                    </div>

                    <div class="col-md-6 px-5 ps-md-5">
                        <div class="card h-100 shadow-sm border-0 text-center bg text-white p-3">
                            <h5 class="card-title fw-bold">Portatiles</h5>
                            <p class="card-text opacity-75">En esta categoria encontraras las consolas, fueron aquellas consolas que trajeron una manera de jugar única. Con su extrema comodidad y versatilidad a la hora de jugar permitia jugar en los lugares que uno quisiera, no se dejen llevar por sus limitaciones tecnicas porque cuentan con su propio catalogo que no desepciona.</p>
                            <a href="/portatiles" class="btn btn-outline-light btn-lg mt-2">Ver Portátiles</a>
                        </div>
                    </div>
                </div>
            </div>
        </ul>
    </section>

    <section class="container mt-5 mb-5">
        <div class="card mb-4 border-0 shadow-lg bg text-white w-100">

            <div class="card h-100 shadow-sm border-0 text-center bg text-white p-3">
                <h2 class="card-title fw-bold">Novedades de la Tienda</h2>
                <p class="card-text opacity-75">Como parte de nuestro compromiso hacia la comunidad de jugadores nos esforzamos por traer a la "vida" nuevos productos Retro por ello en esta seccion les preseentaremos los nuevos productos que ingresan a nuestro catalogo.</p>
                <p class="card-text opacity-75">Les presentamos a la GameCube una consola extremadamente potente para su epoca que no se supo valorar en su momento.</p>
            </div>

            <img src="{{ asset('img/gamecube.jpg') }}" class="img-fluid rounded-bottom mx-auto d-block" style="object-fit: cover; height: 450px; max-width: 90%;" alt="GameCube">
        </div>
    </section>

    <section class="contenedor-carousel container mt-4">
        <div class="container mt-5 mb-5 text-center">
            <h2 class="titulo subtitulo text-center">Comentarios de Nuestros Clientes</h2>
            <p>Nos alegra poder compartir las experiencias de usuarios anteriores de nuestra tienda con ustedes.</p>
        </div>
        <div id="carouselComentarios" class="carousel carouselGeneral2 slide">
            <div class="carousel-innter interior-carousel">
                <div class="carousel-item active">

                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="img-box">
                                    <img src="{{ asset('img/mandops2.jpg') }}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Juan Perez</h5>
                                    <p class="card-text">Tenia mis dudas, pero cumplió todas mis espectativas, el paquete llegó en excelente estado y el mando anda de 10!.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="img-box">
                                    <img src="{{ asset('img/mandogamecube.jpg') }}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">María García</h5>
                                    <p class="card-text">Excelente servicio, el producto llego perfecto a mi domicilio y muy rápido. Volvería a comprar sin dudarlo la proxima.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="carousel-item">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="img-box">
                                    <img src="{{ asset('img/mandops1.jpg') }}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Carlos Rodríguez</h5>
                                    <p class="card-text">El mando funciona perfecto.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="img-box">
                                    <img src="{{ asset('img/psvita.jpg') }}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Rodrigo Monzon</h5>
                                    <p class="card-text">10/10 super recomendada la pagina, la psvita vino chipeada tal cual mencionada asi que super contento con mi nueva compraaa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="img-box">
                                    <img src="{{ asset('img/psp.jpg') }}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Manuel González</h5>
                                    <p class="card-text">La psp que siempre quise desde chico y al fin es mia, es increible las condiciones en las que llegó, parece nueva 100% muy buen servicio.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="img-box">
                                    <img src="{{ asset('img/3DS.jpg') }}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Pablo Perez</h5>
                                    <p class="card-text">El 3DS es increíble, la calidad de imagen es excelente y la batería dura mucho tiempo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselComentarios" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselComentarios" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</x-layout>