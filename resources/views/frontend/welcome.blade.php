<x-layout title="Inicio">

    <div class="banner-container">
        <img src="{{asset('img/banner(1).png')}}" alt="banner inicio" class="img-fluid mb-4">
    </div>


    <section class="container mt-4">
        <h2>Productos más vendidos</h2>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/3DS.jpg')}}" class="d-block w-100" alt="Nintendo 3DS">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/play1.jpg')}}" class="d-block w-100" alt="PlayStation 1">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/play2.jpg')}}" class="d-block w-100" alt="PlayStation 2">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <a href="/productos" class="btn btn-primary">Ver más</a>
    </section>

</x-layout>