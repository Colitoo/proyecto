<x-layout title="Quiénes Somos">
    <div class="container-md mt-4">
        <div class="row">
            <div class="col-md-5 logo-grande">
                <img src="{{asset('img/logoGrande.png')}}" alt="Logo RGTS">
            </div>
            <div class="col-md-6">
                <h2 class="subtitulo no-center-sub txt-color">Quiénes Somos</h2>
                <p>Somos una empresa con más de 10 años aportando a la industria de la venta de consolas y al entretenimiento de nuestros clientes, siempre garantizando las mejores experiencias de juego. En <strong>RGTS (Retro Games Tech Store)</strong>, nos especializamos en ofrecer el catálogo retro más seguro y confiable del mercado.</p>
            </div>
            <hr>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <h3 class="fw-bold pb-2 subtitulo no-center-sub txt-color">Nuestra Trayectoria</h3>
                <p>Todo comenzó como un proyecto entre dos apasionados por los videojuegos. Al notar lo riesgoso que era comprar consolas clásicas por internet sin saber si funcionaban, decidimos fundar RGTS. Queríamos ser ese vendedor de extrema confianza que la comunidad necesitaba. Hoy perfeccionamos nuestra red de proveedores y nuestros métodos de prueba para que puedas comprar sin preocupaciones.</p>
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold pb-2 subtitulo no-center-sub txt-color">Nuestro Compromiso</h3>
                <ul class="list-group list-group-flush list-unstyled">
                    <li class="bg-transparent"><strong>Autenticidad y Calidad:</strong> Cada equipo pasa por un riguroso testing para certificar su originalidad y perfecto funcionamiento.</li>
                    <li class="bg-transparent"><strong>Compra 100% Segura:</strong> Transacciones transparentes, envíos asegurados y garantía real en todas tus compras.</li>
                    <li class="bg-transparent"><strong>Catálogo Seleccionado:</strong> Curamos nuestro stock para ofrecerte las mejores piezas de colección listas para enchufar y jugar.</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <h3 class="fw-bold">Nuestro Equipo</h3>
                <p>Las caras detrás de tu próxima consola.</p>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card equipo-card h-100 text-center position-relative">
                    <img src="{{asset('img/colo.png')}}" alt="colo" class="personaje personaje-izq">
                    <div class="card-body">
                        <h4 class="card-title">Avalos Alurralde Fausto</h4>
                        <h6 class="card-subtitle mb-3">Co-Fundador y Director general</h6>
                        <p class="card-text">Encargado de que tu experiencia de compra sea impecable. Fausto es quiengestiona la tienda online, la logística de envíos seguros y la atención directa a tus consultas.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card equipo-card h-100 text-center position-relative">
                    <img src="{{asset('img/beni.png')}}" alt="benito" class="personaje personaje-der">
                    <div class="card-body">
                        <h4 class="card-title">Alcaraz Benito</h4>
                        <h6 class="card-subtitle mb-3">Co-Fundador y Jefe de Calidad</h6>
                        <p class="card-text">Responsable de gestionar el stock y supervisar que las revisiones se realicen minuciosamente a cada consola antes de publicarla, asegurando que recibas lo mejor de lo mejor.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <h3 class="fw-bold">¿Dónde nos podes encontrar?</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.4931384656143!2d-58.83234359421426!3d-27.467968583690922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456ca6d24ec0c9%3A0xb92ce3fedb0d7729!2s%C3%81rea%20Graduados%20-%20Ciencias%20Exactas%20y%20Naturales%20y%20Agrimensura%20-%20UNNE!5e0!3m2!1ses!2sar!4v1776955030693!5m2!1ses!2sar" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</x-layout>