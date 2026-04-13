<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'RETRO STORE' }}</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>

<body class="bg-light d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/"> <img src="{{ asset('img/logo.png')}}" alt="Logo"> </a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/productos">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/quienes-somos">Quiénes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/informacion-contacto">Contacto</a>
                    </li>

                </ul>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Iniciar sesión | Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/carrito">Carrito</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4" style="flex-grow: 1;">
        {{ $slot }}
    </div>

    <footer class="bg-dark text-white py-3 mt-4">
        <div class="container py-4">
            <div class="row">

                <!-- Columna 1 -->
                <div class="col-md-4">
                    <h5>Quienes somos</h5>
                    <p>Somos una empresa con mas de 10 años aportando a
                        la industria de venta de consolas y el entretenimiento de
                        nuestros clientes, siempre aportanto las mejores experiencias de juego.</p>
                    <a href="/Quienes-somos" class="text-white">Más información</a>
                </div>

                <!-- Columna 2 -->
                <div class="col-md-4">
                    <h5>Contacto</h5>
                    <p>Email: RSclienteServis@gmail.com</p>
                    <p>Tel: +5493624223492</p>
                </div>

                <!-- Columna 3 -->
                <div class="col-md-4">
                    <h5>Enlaces</h5>
                    <ul class="list-unstyled">
                        <li><a href="/Contacto" class="text-white">Contacto</a></li>
                        <li><a href="/seguimiento-de-pedidos" class="text-white">Seguimiento de Pedidos</a></li>
                        <li><a href="/Terminos-y-usos" class="text-white">Términos y Usos</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="bg-dark text-white text-center py-2">
            &copy; {{ date('Y') }} RETRO STORE by Colo y Beni. Todos los derechos reservados.
        </div>
    </footer>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>