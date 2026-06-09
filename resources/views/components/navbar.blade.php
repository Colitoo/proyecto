<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand clickable" href="/"> <img src="{{ asset('img/logo.png')}}" alt="Logo"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/catalogo">Catálogo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/quienes-somos">Quiénes somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacto">Contacto</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto gap-2">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/login"> Iniciar sesión <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4g 0 0 1 4 4v2" />
                        </svg></a>
                </li>
                @endguest

                @auth
                <li class="nav-item">
                    <button class="btn bg-transparent nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#mi-perfil" aria-controls="offcanvasRight">Mi Perfil</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link btn bg-transparent" href="/carrito"> Ver carrito
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 19a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M15 19a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M17 17h-11v-14h-2" />
                            <path d="M6 5l14 1l-1 7h-13" />
                        </svg>
                    </button>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
@auth
<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="mi-perfil" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Mi Perfil</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between">
        <div>

            <div class="text-center mb-4">
                <h5 class="mt-3 mb-0">{{ Auth::user()->{'nombre y apellido'} }}</h5>
                <small class="text-secondary">{{ Auth::user()->perfil->descripcion ?? 'Sin perfil' }}</small>
            </div>

            <hr class="border-secondary">

            <ul class="list-unstyled">
                <li class="mb-3">
                    <small class="text-secondary d-block">Correo electrónico</small>
                    <span>{{ Auth::user()->email }}</span>
                </li>
                <li class="mb-3">
                    <small class="text-secondary d-block">Teléfono</small>
                    <span>{{ Auth::user()->telefono ?? 'No registrado' }}</span>
                </li>
            </ul>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline-danger w-100">
                Cerrar sesión
            </button>
        </form>
    </div>
</div>
@endauth