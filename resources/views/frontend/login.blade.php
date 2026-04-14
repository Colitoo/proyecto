<x-layout title="Login">

    <h2 class="text-center mb-4">Inicia Sesion</h2>

    <div class="text-center mb-3">
        <form action="#" method="POST">

            <div class="row justify-content-center mb-5">

                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label fw-bold">
                        Usuario o correo electrónico *
                    </label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <label for="password" class="form-label fw-bold">
                        Contraseña *
                    </label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
            </div>

            <div class="row justify-content-center">
                <button type="submit" class="btn btn-primary px-4">Acceder</button>
                <p class="mt-3">
                    ¿No tenés una cuenta? <a href="/register">Registrate aquí</a>
                </p>
            </div>
        </form>
    </div>
</x-layout>