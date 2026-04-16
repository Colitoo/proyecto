<x-layout title="Registro">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Registrarse</h2>
        <p class="text-center">
            Al registrarte en este sitio, podrás recibir nuestras novedades, ofertas especiales y actualizaciones. Solo tienes que completar los campos a continuación y te crearemos una cuenta seguida. Solo te pediremos la información necesaria para que el proceso de compra sea más rápido y sencillo.
        </p>
    </div>

    <div class="text-center mb-3">
        <form action="#" method="POST">

            <div class="row justify-content-center mb-5">

                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label fw-bold">Nombre completo *</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <label for="number" class="form-label fw-bold">Número de teléfono *</label>
                    <input type="tel" class="form-control" id="number" name="number" required>
                    <label for="email" class="form-label fw-bold">Correo electrónico *</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <label for="password" class="form-label fw-bold">Contraseña *</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <label for="confirm_password" class="form-label fw-bold">Confirmar contraseña *</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                    <button type="submit" class="btn btn-primary px-4 mt-4">Registrarse</button>
                </div>
            </div>
        </form>
    </div>
</x-layout>