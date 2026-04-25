<x-layout title="Información de Contacto">

    <div class="container">
        <div class="mb-5 mt-5">
            <h2 class="text-center mt-4 subtitulo">Contactate con el equipo de RGTS</h2>

            <p>¿Buscás esa joya de 16-bits que te faltaba, o solamente necesitás información? En Retro Games Tech Store estamos para ayudarte. Escribinos y un especialista de nuestro equipo se pondrá en contacto con vos a la brevedad.</p>
        </div>

        <section class="row mt-4">
            <div class="col-md-5 container-md">
                <h3 class="text-center">Datos Legales y Operativos</h3>
                <ul class="list-unstyled mb-5">
                    <li class="mb-3"><b class="txt-color">Razón Social:</b> Avalos y Alcaraz S.R.L.</li>
                    <li class="mb-3"><b class="txt-color">Nombre Comercial:</b> RGTS - Retro Games Tech Store</li>
                    <li class="mb-3"><b class="txt-color">Titulares:</b> Avalos Alurralde Fausto y Alcaraz Benito Eduardo</li>
                    <li class="mb-3"><b class="txt-color">Domicilio Legal:</b> Calle 9 de Julio 1449, Piso 1, Salon de Laboratorio 1, W3400 Corrientes, Capital, Argentina.</li>
                    <li class="mb-3"><b class="txt-color">CUIT:</b> 30-71234567-8 </li>
                </ul>

                <h3 class="text-center">Contacto directo</h3>
                <ul class="list-unstyled mb-5">
                    <li class="mb-3"><b><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                            </svg> </b> <a href="http://wa.me/+543781408249" target="_blank" rel="noopener noreferrer">+54 9 379 412-3456</a></li>
                    <li class="mb-3"><b><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mail">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                <path d="M3 7l9 6l9 -6" />
                            </svg> </b> <a href="mailto:soporte@rgts-store.com.ar">soporte@rgts-store.com.ar</a></li>
                </ul>


            </div>
            <div class="col-md-7">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark">
                        <h3 class="mb-0 text-center txt-color">Formulario de Contacto</h3>
                    </div>
                    <div class="card-contacto">

                        <form action="{{ url('form-contacto') }}" method="POST">

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nombre" class="form-label fw-bold">Nombre y Apellido *</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label fw-bold">Correo Electrónico *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="telefono" class="form-label fw-bold">Teléfono de contacto</label>
                                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ej: 3794 123456">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="motivo" class="form-label fw-bold">Motivo de la consulta</label>
                                    <select class="form-select" id="motivo" name="motivo" required>
                                        <option value="" selected disabled>Seleccioná una opción...</option>
                                        <option value="stock">Consultar stock de consolas o juegos</option>
                                        <option value="envios">Consulta sobre envíos</option>
                                        <option value="seguridad">Seguridad del comprador</option>
                                        <option value="politicas">Politicas de nuestra organizacion</option>
                                        <option value="otros">Otros</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="plataforma" class="form-label fw-bold">Plataforma de interés</label>
                                <select class="form-select" id="plataforma" name="plataforma">
                                    <option value="ninguna" selected>General</option>
                                    <option value="sobremesa">Sobremesa (PS1, PS2, Wii, etc.)</option>
                                    <option value="portatiles">Portátiles (GameBoy, PsVita, etc.)</option>
                                    <option value="mandos">Mandos de consolas</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="mensaje" class="form-label fw-bold">Mensaje *</label>
                                <textarea class="form-control border-dark" id="mensaje" name="mensaje" rows="4" placeholder="Contanos en detalle cómo podemos serte de ayuda..." required></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-outline-light btn-lg">Contacta a RGTS</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-layout>