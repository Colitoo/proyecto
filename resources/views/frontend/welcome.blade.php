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

    <section class="container mt-5 mb-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Nuestras Categorías</h2>
            <p>Explorá el catálogo de piezas originales que tenemos para vos.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 text-center bg text-white p-3">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Consolas de Sobremesa</h4>
                        <p class="card-text opacity-75">Sistemas de sobremesa testeados para brindar la mejor experiencia de juego.</p>
                        <a href="/consolas" class="btn btn-outline-light btn-lg mt-2">Ver Consolas</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 text-center bg text-white p-3">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Mandos</h4>
                        <p class="card-text opacity-75">Controles originales para disfrutar horas a tus juegos favoritos.</p>
                        <a href="/mandos" class="btn btn-outline-light btn-lg mt-2">Ver Mandos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 text-center bg text-white p-3">
                    <div class="card-body">
                        <div class="mb-3">
                            <h4 class="card-title fw-bold">Portatiles</h4>
                            <p class="card-text opacity-75">Consolas portátiles en perfecto estado, listas para jugar en cualquier lugar.</p>
                            <a href="/portatiles" class="btn btn-outline-light btn-lg mt-2">Ver Portátiles</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="contenedor-carousel container mt-4">
        <h2 class="titulo">Productos más vendidos</h2>

        <div id="carouselMasVendidos" class="carousel carouselGeneral slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="{{asset('img/3DS.jpg')}}" class="d-block carousel-img w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{asset('img/play1.jpg')}}" class="d-block carousel-img w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{asset('img/play2.jpg')}}" class="d-block carousel-img w-100" alt="...">
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

    <section class="contenedor-carousel container mt-4">
        <h2 class="titulo">Comentarios de nuestros clientes</h2>
        <div id="carouselComentarios" class="carousel carouselGeneral2 slide">
            <div class="carousel-inner interior-carousel">
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