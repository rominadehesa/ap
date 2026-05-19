<!DOCTYPE html>
<html lang="en">

@include('frames.head', ['title' => 'Propiedad'])

<body>
    <header>
        @include('frames.nav')
        <main class="relative h-[70vh] flex items-end overflow-hidden p-10 md:p-20">

            <!-- IMAGEN -->
            <img src="{{ asset('storage/' . $propiedad->imagen_portada_url) }}"
                class="absolute inset-0 w-full h-full object-cover" />

            <!-- OVERLAY -->
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/10 to-black/10"></div>

            <!-- CONTENIDO -->
            <div class="relative z-10 w-full px-4 md:px-20 md:px-32 pb-10 md:pb-16">

                <!-- TAGS -->
                <div class="flex flex-wrap gap-2 mb-5">

                    <span class="px-4 py-1.5 rounded-full bg-[#F2BF14] text-[#3E153D] text-sm font-medium">

                        {{ $propiedad->tipo }}

                    </span>

                    <span class="px-4 py-1.5 rounded-full bg-[#F2BF14] text-[#3E153D] text-sm font-medium">

                        {{ $propiedad->operacion }}

                    </span>

                    <span class="px-4 py-1.5 rounded-full bg-[#F2BF14] text-[#3E153D] text-sm font-medium">

                        {{ $propiedad->estado_inmueble }}

                    </span>

                </div>

                <!-- TITULO -->
                <h1 class="text-white text-4xl md:text-6xl leading-tight max-w-4xl mb-4">

                    {{ $propiedad->titulo }}

                </h1>

            </div>

        </main>
    </header>


    <section class="flex flex-col gap-8">

        <!-- BOTON -->
        <a href="{{ route('todas-propiedades') }}"
            class="text-[#f1f1f1] rotate-180 bg-[#3E153D] text-sm py-2 transition rounded-3xl w-8 h-8 flex items-center justify-center">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />

            </svg>

        </a>


        {{-- Encabezado --}}
        <div class="w-full md:flex md:justify-between gap-16 items-start">

            <div class="flex flex-col gap-6 md:w-1/2">

                <div class="mt-4">
                    <h1 class="font-bold text-[#2F2F2F] mb-1 text-4xl md:text-5xl">{{ $propiedad->slogan }}</h1>
                    <br>
                    <p class="text-lg text-gray-400">{{ $propiedad->descripcion }}</p>
                </div>

                <div class="flex items-center gap-3 p-4 rounded-2xl bg-[#eee] border shadow-sm mt-4">

                    <div class="w-10 h-10 rounded-xl bg-[#F6F1F6] flex items-center justify-center text-[#471C46]">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />

                        </svg>

                    </div>


                    <div>

                        <p class="text-xs uppercase tracking-wide text-gray-400">
                            Ubicación
                        </p>

                        <p class="text-sm text-gray-700">
                            {{ $propiedad->direccion }}, {{ $propiedad->ciudad }} - {{ $propiedad->zona }}
                        </p>

                    </div>

                </div>

                <div class="block md:hidden w-full md:w-1/2 rounded-2xl overflow-hidden mt-4">
                    @if ($propiedad->imagen_portada_url)
                        <img src="{{ asset('storage/' . $propiedad->imagen_portada_url) }}" alt="Propiedad"
                            class="w-full h-80 object-cover" />
                    @endif
                </div>

                <hr>

                <div class=" flex flex-col gap-3">
                    <p class="text-md text-gray-500">Explorá esta propiedad</p>
                    <div class="flex flex-wrap gap-2">

                        <a href="#datos"
                            class="px-4 py-2 rounded-full bg-[#f5f1f5] text-[#471C46] text-sm hover:bg-[#471C46] hover:text-white transition">

                            Datos importantes

                        </a>

                        <a href="#caracteristicas"
                            class="px-4 py-2 rounded-full bg-[#f5f1f5] text-[#471C46] text-sm hover:bg-[#471C46] hover:text-white transition">

                            Características

                        </a>

                        <a href="#servicios"
                            class="px-4 py-2 rounded-full bg-[#f5f1f5] text-[#471C46] text-sm hover:bg-[#471C46] hover:text-white transition">

                            Servicios

                        </a>

                        <a href="#galeria"
                            class="px-4 py-2 rounded-full bg-[#f5f1f5] text-[#471C46] text-sm hover:bg-[#471C46] hover:text-white transition">

                            Galería

                        </a>

                    </div>

                </div>

            </div>

            <div class="hidden md:block h-[80vh] w-full md:w-1/2 rounded-2xl overflow-hidden">
                @if ($propiedad->imagen_portada_url)
                    <img src="{{ asset('storage/' . $propiedad->imagen_portada_url) }}" alt="Propiedad"
                        class="w-full h-90 object-cover" />
                @endif
            </div>

        </div>

    </section>

    <section class="bg-[#eee]" id="datos">
        <p class="text-md text-gray-800 uppercase tracking-widest mb-10">DATOS IMPORTANTES</p>
        {{-- Cards datos clave --}}
        <div class="grid grid-cols-2 gap-3">

            <div class="rounded-xl p-4 bg-white border">
                <p class="text-xs text-gray-400 uppercase tracking-widest mb-1">Superficie total</p>
                <p class="text-xl font-medium">{{ $propiedad->superficie_total }}<span
                        class="text-sm font-normal text-gray-400">m²</span></p>
            </div>

            <div class="rounded-xl p-4 bg-white border">
                <p class="text-xs text-gray-400 uppercase tracking-widest mb-1">Sup. cubierta</p>
                <p class="text-xl font-medium">{{ $propiedad->superficie_cubierta }} <span
                        class="text-sm font-normal text-gray-400">m²</span></p>
            </div>

            <div class="rounded-xl p-4 bg-white border">
                <p class="text-xs text-gray-400 uppercase tracking-widest mb-1">Dormitorios</p>
                <p class="text-xl font-medium">{{ $propiedad->dormitorios }}</p>
            </div>

            <div class="rounded-xl p-4 bg-white border">
                <p class="text-xs text-gray-400 uppercase tracking-widest mb-1">Baños</p>
                <p class="text-xl font-medium">{{ $propiedad->banios }}</p>
            </div>

            <div class="rounded-xl p-4 bg-white border">
                <p class="text-xs text-gray-400 uppercase tracking-widest mb-1">Ambientes</p>
                <p class="text-xl font-medium">{{ $propiedad->ambientes }}</p>
            </div>

            <div class="rounded-xl p-4 bg-white border">
                <p class="text-xs text-gray-400 uppercase tracking-widest mb-1">Pisos</p>
                <p class="text-xl font-medium">{{ $propiedad->cant_pisos }}</p>
            </div>
        </div>

    </section>

    <section class="bg-[#471C46]" id="caracteristicas">
        {{-- Características --}}
        <p class="text-md text-white uppercase tracking-widest mb-10">Características</p>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            @foreach ($propiedad->caracteristicas as $item)
                <div class="rounded-2xl overflow-hidden hover:-translate-y-1 transition duration-300 bg-white">
                    <img src="{{ asset('storage/' . $item->url) }}" class="h-40 w-full object-cover" />
                    <div class="p-4">
                        <p class="font-medium mb-1">{{ $item->nombre }}</p>
                        <p class="text-sm text-gray-400 leading-snug">
                            {{ $item->descripcion }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </section>

    <section class="bg-[#fffbee]" id="servicios">

        <div class="flex flex-col gap-8">

            <div class="mb-10">
                <p class="text-md uppercase tracking-widest mb-10">
                    Servicios y comodidades
                </p>

                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">

                    @php
                        $items = [
                            // SERVICIOS
                            ['campo' => 'tiene_luz', 'label' => 'Luz'],
                            ['campo' => 'tiene_gas_natural', 'label' => 'Gas natural'],
                            ['campo' => 'tiene_gas_garrafa', 'label' => 'Gas garrafa'],
                            ['campo' => 'tiene_agua_corriente', 'label' => 'Agua'],
                            ['campo' => 'tiene_cloaca', 'label' => 'Cloaca'],
                            ['campo' => 'tiene_internet', 'label' => 'Internet'],
                            ['campo' => 'tiene_pavimento', 'label' => 'Pavimento'],

                            // COMODIDADES
                            ['campo' => 'tiene_cochera', 'label' => 'Cochera'],
                            ['campo' => 'tiene_patio', 'label' => 'Patio'],
                            ['campo' => 'tiene_jardin', 'label' => 'Jardín'],
                            ['campo' => 'tiene_pileta', 'label' => 'Pileta'],
                            ['campo' => 'tiene_quincho', 'label' => 'Quincho'],
                            ['campo' => 'tiene_terraza', 'label' => 'Terraza'],
                            ['campo' => 'tiene_balcon', 'label' => 'Balcón'],
                            ['campo' => 'tiene_ascensor', 'label' => 'Ascensor'],
                            ['campo' => 'tiene_seguridad', 'label' => 'Seguridad'],
                            ['campo' => 'tiene_parrilla', 'label' => 'Parrilla'],
                            ['campo' => 'tiene_calefaccion', 'label' => 'Calefacción'],
                            ['campo' => 'tiene_aire_acondicionado', 'label' => 'Aire acondicionado'],
                        ];
                    @endphp

                    @foreach ($items as $item)
                        @if ($propiedad->{$item['campo']})
                            <div
                                class="flex flex-col items-center justify-center gap-2 rounded-xl p-4 text-center border border-gray-100 bg-[#fff] shadow-sm hover:shadow transition">

                                {{-- ICONO SIMPLE (podemos mejorar después) --}}
                                <div
                                    class="w-8 h-8 rounded-full bg-[#F2BF14] flex items-center justify-center text-[#fff6d8] text-sm font-bold">
                                    ✓
                                </div>

                                <span class="text-sm text-gray-600">
                                    {{ $item['label'] }}
                                </span>

                            </div>
                        @endif
                    @endforeach

                </div>
            </div>

        </div>

    </section>

    <section id="galeria">
        {{-- Galería --}}
        <div>
            <p class="text-md text-gray-800 uppercase tracking-widest mb-10">Galería de fotos</p>
            <div class="flex gap-3 overflow-x-auto pb-2">
                @foreach ($propiedad->imagenes as $item)
                    <img src="{{ asset('storage/' . $item->url) }}" alt=""
                        class="w-1/2 h-[250px] rounded-xl object-cover" />
                @endforeach
            </div>
        </div>

    </section>

    <section id="contacto" class="bg-[#fafafa]">
        <div class="flex justify-start  mb-8 md:mb-10">
            <span class="inline-block text-[16px] tracking-[0.10em] uppercase text-[#F2BF14] font-semibold">
                Comunicate con nuestro equipo
            </span>
        </div>
        <div class="md:flex md:justify-between items-start gap-20">
            <div class="w-full md:w-[40%]">
                <h1 class=" text-4xl md:text-5xl text-start mb-6">Si te interesa esta propiedad, no dudés en
                    contactarnos.</h1>
                <p class="leading-[1.7] mb-8">Completá el formulario y nos ponemos en contacto a la
                    brevedad para asesorarte sobre esta propiedad.</p>
            </div>

            <form class="w-full md:w-[50%] bg-white shadow-sm px-8 py-10 shadow rounded-2xl flex flex-col gap-4">
            <div class="flex flex-col gap-4 md:flex-row">
                <div class="flex flex-col gap-1 w-full">
                    <label class="text-xs text-gray-500 font-medium">Nombre</label>
                    <input type="text" placeholder="Tu nombre"
                        class="border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 outline-none focus:border-[#3E153D] transition bg-gray-50" />
                </div>
                <div class="flex flex-col gap-1 w-full">
                    <label class="text-xs text-gray-500 font-medium">Teléfono</label>
                    <input type="tel" placeholder="+54 11 ..."
                        class="border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 outline-none focus:border-[#3E153D] transition bg-gray-50" />
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <label class="text-xs text-gray-500 font-medium">Email</label>
                <input type="email" placeholder="tucorreo@email.com"
                    class="border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 outline-none focus:border-[#3E153D] transition bg-gray-50" />
            </div>
            <div class="flex flex-col gap-1">
                <label class="text-xs text-gray-500 font-medium">Mensaje</label>
                <textarea rows="4" placeholder="Contanos en qué podemos ayudarte..."
                    class="border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-800 outline-none focus:border-[#3E153D] transition bg-gray-50 resize-none"></textarea>
            </div>
            <button type="submit"
                class="w-full bg-[#3E153D] text-white py-3 rounded-lg text-sm font-semibold hover:bg-[#2c0f2b] transition mt-4">
                Enviar consulta
            </button>
            <span class="text-sm text-gray-500 text-center mt-2">
                Te responderemos a la brevedad. 
            </span>
        </form>

        </div>
    </section>


    @include('frames.footer')

</body>

</html>
