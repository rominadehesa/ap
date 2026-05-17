<!DOCTYPE html>
<html lang="en">

@include('frames.head', ['title' => 'Propiedad'])

<body>
    <header>
        @include('frames.nav')
        <main>

        </main>
    </header>


    <section class="flex flex-col gap-10">

        {{-- Volver --}}
        <a href="{{ route('todas-propiedades') }}" class="text-sm font-medium" style="color: #3E153D">← Volver a propiedades</a>

        {{-- Encabezado --}}
        <div class="w-full md:flex md:justify-between gap-10 items-start">

            <div class="flex flex-col gap-6 md:w-1/2">

                <div class="flex gap-2">
                    <span class="text-md font-medium px-5 py-2 rounded-full bg-[#F2BF14] text-[#3E153D]">{{ $propiedad->tipo }}</span>
                    <span class="text-md font-medium px-5 py-2 rounded-full bg-[#471C46] text-[#fff6d8]">{{ $propiedad->operacion }}</span>
                    <span class="text-md font-medium px-5 py-2 rounded-full bg-[#fff6d8] text-[#471C46] border border-[#471C46]">{{ $propiedad->estado_inmueble }}</span>
                </div>

                <h1 class="text-4xl lg:text-5xl" style="color: #2F2F2F">
                    {{ $propiedad->titulo }}
                </h1>

                <div class="flex items-start gap-2 text-md text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                        fill="currentColor">
                        <path
                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                    </svg>
                    {{ $propiedad->direccion }}, {{ $propiedad->ciudad }} - {{ $propiedad->zona }}
                </div>

                <div>
                    <p class="font-semibold mb-4 text-2xl">{{ $propiedad->slogan }}</p>
                    <p class="text-sm text-gray-600">{{ $propiedad->descripcion }}</p>
                </div>

            </div>

            <div class=" w-full md:w-1/2 rounded-2xl overflow-hidden">
                @if ($propiedad->imagen_portada_url)
                    <img src="{{ asset('storage/' . $propiedad->imagen_portada_url) }}" alt="Propiedad" class="w-full h-80 object-cover" />
                @endif
            </div>

        </div>
    
    </section>
    
    <section class="bg-[#eee]">    
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

    <section class="bg-[#471C46]">
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

    <section class="bg-[#fffbee]">

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
                        @if($propiedad->{$item['campo']})

                            <div class="flex flex-col items-center justify-center gap-2 rounded-xl p-4 text-center border border-gray-100 bg-[#fff] shadow-sm hover:shadow transition">

                                {{-- ICONO SIMPLE (podemos mejorar después) --}}
                                <div class="w-8 h-8 rounded-full bg-[#F2BF14] flex items-center justify-center text-[#fff6d8] text-sm font-bold">
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

    <section>
        {{-- Galería --}}
        <div>
            <p class="text-md text-gray-800 uppercase tracking-widest mb-10">Galería de fotos</p>
            <div class="flex gap-3 overflow-x-auto pb-2">
                @foreach ($propiedad->imagenes as $item)
                    <img src="{{ asset('storage/' . $item->url) }}" alt="" class="w-1/2 h-[250px] rounded-xl object-cover"/>
                @endforeach
            </div>
        </div>

    </section>

    <section id="contacto" class="bg-[#fafafa]">
        <div class="md:flex md:justify-between items-start gap-20">

            <div class="w-full md:w-[40%]">
                <h1 class=" text-4xl md:text-5xl text-start mb-6">Dejanos tu consulta sobre esta propiedad</h1>
                <p class="leading-[1.7] mb-8">Completá el formulario y nos ponemos en contacto a la
                    brevedad para asesorarte sobre esta propiedad.</p>
            </div>

            <form class="w-full md:w-[50%] bg-white border border-gray-100 shadow-sm px-8 py-8 rounded-2xl flex flex-col gap-4">
                <div class="md:flex gap-4">
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
                    class="w-full bg-[#3E153D] text-white py-3 rounded-lg text-sm font-semibold hover:bg-[#2c0f2b] transition">
                    Enviar consulta →
                </button>
            </form>

        </div>
    </section>


    @include('frames.footer')

</body>

</html>
