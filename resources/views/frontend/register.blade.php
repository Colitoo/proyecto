<x-layout title="Registro">
    <div class="container justify-content-center">
        <div class="card border-0 mt-4">
            <div class="card-body">
                <h2 class="text-center mb-4">Registrarse</h2>
                <div class="text-center mb-3">
                    <form action="#" method="POST">

                        <div class="row justify-content-center mb-5">

                            <div class="col-md-6 mb-3 text-start">
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
                                <button type="submit" class="btn btn-primary px-4 mt-4">Registrarse</button>
                            </div>
                        </div>
                    </form>
                    <p>
                        Al registrarte en este sitio, podrás recibir nuestras novedades, ofertas especiales y actualizaciones. Solo tienes que completar los campos a continuación y te crearemos una cuenta seguida. Solo te pediremos la información necesaria para que el proceso de compra sea más rápido y sencillo.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>