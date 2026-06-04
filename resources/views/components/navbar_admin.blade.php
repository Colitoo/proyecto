<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand clickable" href="/admin"> <img src="{{ asset('img/logo.png')}}" alt="Logo"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            @auth
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/Listar_Productos">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/Listar_Ventas">Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/Ver_Consultas">Consultas</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/Producto_Carga">Cargar Producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/Producto_Gestion">Gestionar Producto</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link">Cerrar sesión</button>
                    </form>
                </li>
            </ul>
            @endauth
        </div>
    </div>
</nav>