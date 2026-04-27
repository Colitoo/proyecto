<x-layout title="Seguimiento de producto">
    <section class="container-md mt-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="no-center-sub subtitulo txt-color">Seguimiento de productos</h2>
                <p>
                    Nuestra prioridad es que todos los argentinos reciban sus pedidos a tiempo, por eso hacemos uso del correo argentino para dar seguimiento a su pedido en tiempo real, para que puedas estar al tanto del estado de tu pedido en todo momento.
                </p>
            </div>

            <div class="col-md-6 text-center">
                <img src="{{asset('img/sonicEnvio.png')}}" class="sonic-envio" alt="sonicEnvio">
            </div>

        </div>



        <div class="card shadow-sm mb-4 mt-4">
            <div class="card-header bg-dark">
                <h3 class="text-center txt-color mb-0">Pasos para seguir el producto
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-truck-delivery">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 17a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M15 17a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                        <path d="M3 9l4 0" />
                    </svg>
                </h3>
            </div>
            <div class="card-body">
                <div class="text-center mb-3 p-3">
                    <p>Primero entrá al link del Correo Argentino</p>
                    <p>Seleccioná el tipo de envio, Origen Nacional - Destino Nacional</p>
                    <p>Luego ingresá el número de seguimiento de tu pedido</p>
                        <a href="https://www.correoargentino.com.ar/" class="btn btn-primary btn-outline-light mt-3">Correo Argentino</a>
                </div>
            </div>
        </div>



        <div class="container mt-4">
            <hr>
            <div class="text-center">
                <h4>¿No sabés dónde encontrar tu número de seguimiento?</h4>
                <p>El número de seguimiento se encuentra en el correo de confirmacion de compra, si todavía tenés alguna duda no dudes en contactarnos, estamos para ayudarte</p>
                <a href="/contacto" class="btn btn-primary btn-outline-light">Contacta con nosotros</a>

            </div>
        </div>
    </section>
</x-layout>