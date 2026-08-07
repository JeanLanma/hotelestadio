<section>

    <div class="px-8 py-[5.5rem] flex flex-wrap max-w-7xl mx-auto">
        <div class="lg:w-1/2 w-full">
            <h2 class="text-3xl font-bold">
                Hotel Estadio
            </h2>
            <span class="border-b-4 border-main block lg:w-72 my-2"></span>
            <p class="text-xl">
                En el corazón Guadalajara
            </p>
            <br>
            <p class="lg:pr-8 text-justify text-dark-text mb-8 lg:mb-0">
                El hotel estadio se encuentra a 150 metros del parque agua azul y a 20 minutos a pie de la catedral de
                Guadalajara. Ofrece servicio de recepción las 24 horas, un solárium, conexión Wi-Fi gratuita y
                aparcamiento gratuito.
                <br>
                Todas las habitaciones disponen de ventilador, escritorio y armario. También
                tienen TV por cable y baño privado con ducha y artículos de aseo gratuitos. Las habitaciones deluxe
                disponen además de aire acondicionado.
                <br>
                El restaurante ofrece un desayuno buffet. Además, hay servicio de habitaciones y maquinas expendedoras
                de bebidas y aperitivos.
                <br>
                El hotel dispone de servicio de lavandería y de limpieza en seco. También cuenta con un mostrador de
                información turística y un servicio de enlace con el aeropuerto, disponible por un suplemento.
                <br>
                ¡Hablamos tu idioma!
            </p>
            <div class="h-3 xl:h-8"></div>
            <a target="_blanck" href="{{ route('rengin.direct-booking') }}">
                <button class="cta-main-button w-full sm:w-80 bg-main">
                    <span>Reservar Ahora</span>
                </button>
            </a>
            <div class="h-14 lg:hidden"></div>
        </div>
        <!-- -->
        <div class="lg:w-1/2 overflow-hidden card-shadow">
            <img class="w-full bg-cover object-cover h-full lg:h-[36rem]" src="{{ asset('assets/img/about.jpg') }}"
                alt="About us Image">
        </div>
    </div>

</section>