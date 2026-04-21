<x-layout title="Comercializacion">

    <div class="container-sm mt-4">
        <h2 class="mb-4">Información de Comercialización</h2>
        <p>Sabemos que la ansiedad por que llegue esa consola es grande, y que la seguridad de tu dinero y el transporte de tu equipo es lo más importante. Por eso, diseñamos un proceso de compra transparente, rápido y protegido.</p>
    </div>

    <div class="accordion container" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-wallet">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                        <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                    </svg> Medios de Pago</button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <p>Trabajamos con plataformas seguras para que elijas la opción que mejor se adapte a vos:</p>
                    <ul>
                        <li><strong>Tarjetas de Crédito y Débito:</strong> Aceptamos todas las tarjetas bancarias (Visa, MasterCard, Cabal) a través de un pago encriptado.</li>
                        <li><strong>Transferencia Bancaria:</strong> ¡Aprovechá un 10% de descuento directo en el total de tu compra pagando mediante transferencia bancaria o alias de billeteras virtuales! Una vez realizado el pedido.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-package">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                        <path d="M12 12l8 -4.5" />
                        <path d="M12 12l0 9" />
                        <path d="M12 12l-8 -4.5" />
                        <path d="M16 5.25l-8 4.5" />
                    </svg> Envíos y Entregas</button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <p>Llegamos a cada rincon de la Argentina con rapidez y seguridad.</p>
                    <ul>
                        <li><strong>Correo Argentino:</strong> Realizamos todos nuestros despachos a través de Correo Argentino, con la opción de envío a domicilio o retiro en tu sucursal más cercana.</li>
                        <li><strong>Despacho rápido:</strong> Una vez acreditado el pago, preparamos y despachamos tu pedido en un plazo máximo de 24 a 48 horas hábiles.</li>
                        <li><strong>Código de Seguimiento:</strong> Al momento del despacho, recibirás por email tu número de tracking para que sepas exactamente dónde está tu paquete en todo momento.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 text-center">
        <img src="{{asset('img/marioComer.png')}}" class="card-img-top" alt="mario comercializacion">
    </div>
</x-layout>