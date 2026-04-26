<x-layout title="Registro">
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm mb-4 mt-4">
                    <div class="card-header bg-dark">
                        <h2 class="text-center txt-color mb-0">Registrarse</h2>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <form action="{{ url('form-register') }}" method="POST">
                                <div class="justify-content-center mb-5">
                                    <div class="mb-3 p-3">
                                        <label for="name" class="form-label fw-bold mt-4">Nombre completo *</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                        <label for="number" class="form-label fw-bold mt-4">Número de teléfono *</label>
                                        <input type="tel" class="form-control" id="number" name="number" required>
                                        <label for="email" class="form-label fw-bold mt-4">Correo electrónico *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <label for="password" class="form-label fw-bold mt-4">Contraseña *</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                        <label for="confirm_password" class="form-label fw-bold mt-4">Confirmar contraseña *</label>
                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary btn-outline-light mt-4">Registrarse</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p>
                                Al registrarte en este sitio, podrás recibir nuestras novedades, ofertas especiales y actualizaciones. Solo tienes que completar los campos a continuación y te crearemos una cuenta seguida. Solo te pediremos la información necesaria para que el proceso de compra sea más rápido y sencillo.
                            </p>
                            <div class="text-center">
                                <p class="mt-3">
                                    ¿Ya tenés una cuenta? <a href="/login">Inicia sesión aquí</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>