<x-layout title="Productos">

    <h1>pagina de productos</h1>

    <section class="container mt-5">

        <div class="row">
            <div class="col-md-4">
                <h2>Productos Destacados</h2>
                <p>Explora nuestra selección de productos destacados,
                    cuidadosamente elegidos para ofrecerte lo mejor en calidad y rendimiento. Desde consolas de última generación
                    hasta accesorios innovadores, descubre lo que tenemos para ofrecerte y lleva tu experiencia de juego al siguiente nivel.</p>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="{{asset('img/play1.jpg')}}" class="card-img-top" alt="play1">
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
                        <img src="{{asset('img/mandops1.jpg')}}" class="card-img-top" alt="mandops1">
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
                        <img src="{{asset('img/play2.jpg')}}" class="card-img-top" alt="play2">
                        <div class="card-body">
                            <h5 class="card-title">Play Station 2</h5>
                            <p class="card-text">Para muchos la mejor de la historia, el catalogo mas iconico incluido. No dejen pasar la oportunida.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">$200</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-layout>