<x-layout title="Productos">
    <section class="container-md mt-4">
        <div class="container">
            <h1 class="txt-color text-center subtitulo">Página de {{ $categorias->where('id', request('categoria'))->first()->nombre ?? 'Todos los productos' }}</h1>

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @elseif (session('error'))
            <div class="alert alert-danger alert-dismissible fade show mt-3">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            <h2>Un poco sobre nuestros productos</h2>
            <p>En nuestra tienda encontrarás una amplia selección de productos de calidad, cuidadosamente seleccionados para ofrecerte lo mejor en rendimiento y diseño.
                No dejes pasar la oportunidad de experimentar los origenes de lo que conocemos hoy dia y una experiencia de juego única.
            </p>
            <hr>
        </div>

        <div class="container mt-5">
            <div class="row">
                <!-- Columna del Filtro Dropdown -->
                <div class="col-md-3 mb-4">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                            <svg xmlns="http://w3.org" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category-plus">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 4h6v6h-6v-6" />
                                <path d="M14 4h6v6h-6v-6" />
                                <path d="M4 14h6v6h-6v-6" />
                                <path d="M14 17h6m-3 -3v6" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu w-100">
                            <li>
                                <a class="dropdown-item {{ !request('categoria') ? 'active' : '' }}" href="{{ route('catalogo.index') }}">
                                    Ver Todo
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            @foreach($categorias as $cat)
                            <li>
                                <a class="dropdown-item {{ request('categoria') == $cat->id ? 'active' : '' }}"
                                    href="{{ route('catalogo.index', ['categoria' => $cat->id]) }}">
                                    {{ $cat->nombre }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @forelse ($productos as $item)
                        <div class="col">
                            <div class="card h-100 tarjeta-producto">
                                <div class="img-box img-box-producto">
                                    <img src="{{ asset('storage/' . $item['url_imagen']) }}" class="card-img-top" alt="{{ $item['nombre'] }}">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item['nombre'] }}</h5>
                                    <p class="text-white"> {{ $item->categoria->nombre }} </p>
                                    <hr>
                                    <p class="card-text">{{ $item['descripcion'] }}</p>
                                    <p class="text-white">Stock: {{ $item['stock'] }}</p>
                                </div>
                                <div class="card-footer align-items-center text-center">
                                    <small class="card-text-price">${{ number_format($item['precio'], 2) }}</small>
                                    <form action="{{ route('carrito.agregar', $item['id']) }}" method="post">
                                        @csrf
                                        @if($item['stock'] >= 1)
                                        <button type="submit" class="btn btn-primary btn-outline-success w-100">Añadir al carrito</button>
                                        @else
                                        <button type="button" class="btn btn-secondary w-100" disabled>Agotado</button>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-md-8 text-center">
                            <p class="text-white">No contamos con productos en esta categoría por el momento.</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>