<x-layouts.main>
    <x-slot:title>Constructly - Pagina de Inicio</x-slot:title>
    <x-slot:description>Pagina de Inicio</x-slot:description>

    <section class="h-[700px] mt-18"
        style="background-image: url('/images/hero.webp'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container mx-auto h-full flex flex-col justify-center items-start">
            <div class="flex items-center gap-4">
                <p class="text-xs text-primary font-semibold py-1 px-4 rounded-full bg-primary/30"><span class="uppercase text-[0.5625rem]">AR</span> Hecho en Argentina</p>
                <img src="/images/stars.svg" alt="">
                <span class="text-font-secondary text-sm">(5)</span>
            </div>
            <h1 class="text-5xl font-bold text-font-primary max-w-[32rem] mt-2">Gestiona tus <span class="text-primary">obras</span> como un profesional</h1>
            <p class="text-font-secondary text-lg max-w-[32rem] mt-6">Tableros Kanban, control de inventario y facturación con Mercado Pago. Todo desde tu celular, pensado para supervisores en obra.</p>
            <ul class="flex max-w-[500px] flex-wrap">
                <li class="min-w-60 py-4">Mapa de obras</li>
                <li class="min-w-60 py-4">Hasta 30 usuarios</li>
                <li class="min-w-60 py-4">Google Calendar</li>
                <li class="min-w-60 py-4">Mercado Pago</li>
            </ul>

            <div class="mt-6 flex gap-4">
                <x-ui.main-button to="registrarse" variant="primary">Comenzar Gratis</x-ui.main-button>
                <x-ui.main-button to="registrarse" variant="secondary">Ver Demo</x-ui.main-button>
            </div>

            <small class="text-font-secondary mt-6">Mas de 500+ Constructoras ya confian en Constructly</small>
        </div>
    </section>

    <ul class="flex items-center justify-center gap-100 w-full bg-tertiary min-h-60">
        <li class="text-primary font-bold text-7xl">1</li>
        <li class="text-primary font-bold text-7xl">2</li>
        <li class="text-primary font-bold text-7xl">3</li>
    </ul>

</x-layouts.main>