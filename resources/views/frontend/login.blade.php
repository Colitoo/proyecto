<x-layout title="Login">
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm mb-4 mt-4">
                    <div class="card-header bg-dark">
                        <h2 class="text-center txt-color mb-0">Iniciar Sesión</h2>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <form action="{{ url('form-login') }}" method="POST">
                                <div class="justify-content-center mb-5">
                                    <div class="mb-3 p-3">
                                        <label for="email" class="form-label fw-bold mt-4">Correo electrónico *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <label for="password" class="form-label fw-bold mt-4">Contraseña *</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary btn-outline-light mt-4">Acceder</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="mt-3">
                                    ¿No tenés una cuenta? <a href="/register">Registrate aquí</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>