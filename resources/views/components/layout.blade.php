<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'RETRO STORE' }}</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">RETRO STORE</a>

            <div>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/Catalogo">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Quienes-somos">Quiénes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Contacto">Contacto</a>
                    </li>

                </ul>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/carrito">Carrito</a>
                    </li>
                </ul>
            </div>


        </div>
    </nav>

    <div class="container mt-4">
        {{ $slot }}
    </div>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>