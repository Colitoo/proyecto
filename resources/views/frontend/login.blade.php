<x-layout title="Login">
    <div class="container justify-content-center">
        <div class="card border-0 mt-4">
            <div class="card-body">
                <div class="container mt-2">
                    <h2 class="text-center subtitulo">Iniciar Sesión</h2>
                </div>

                <div class="text-center mb-3">
                    <form action="#" method="POST">

                        <div class="row justify-content-center mb-5">

                            <div class="col-md-6 mb-3 text-start">
                                <label for="email" class="form-label fw-bold mt-4">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <label for="password" class="form-label fw-bold mt-4">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <button type="submit" class="btn btn-outline-light mt-4">Acceder</button>
                            </div>
                            <p class="mt-3">
                                ¿No tenés una cuenta? <a href="/register">Registrate aquí</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>