<section class="bg-gray-50">
    <div class="px-8 py-[5.5rem] flex flex-wrap max-w-7xl mx-auto items-center">
        <div class="lg:w-1/2 w-full lg:pr-12 text-center lg:text-left mb-10 lg:mb-0">
            <h2 class="text-3xl font-bold mb-2">Bienvenidos a Hotel Estadio</h2>
            <span class="border-b-4 border-main block w-24 mx-auto lg:mx-0 my-4"></span>
            <p class="text-xl text-dark-text">
                Vive una experiencia inolvidable. Descubre nuestras instalaciones, diseñadas para brindarte el máximo
                confort y descanso durante tu estadía en la perla tapatía.
            </p>
        </div>
        <div
            class="lg:w-1/2 w-full flex justify-center items-center p-8 bg-gray-900 rounded-[2rem] card-shadow relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-main/30 to-transparent pointer-events-none"></div>
            <video
                class="relative z-10 w-full max-w-[260px] sm:max-w-[300px] h-auto max-h-[70vh] object-cover rounded-2xl shadow-2xl border-4 border-gray-800"
                controls autoplay muted loop preload="metadata">
                <source src="{{ asset('assets/videos/video.mp4') }}" type="video/mp4">
                Tu navegador no soporta la reproducción de video.
            </video>
        </div>
    </div>
</section>