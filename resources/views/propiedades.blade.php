<!DOCTYPE html>
<html lang="en">

@include('frames.head', ['title' => 'Inicio'])

<body>
    <header>
        @include('frames.nav')
        <main>

        </main>
    </header>

    <section id="explorar" class="bg-[#fafafa]">

        <!-- Header -->
        <div class="mb-10">
            <h1 class="text-4xl lg:text-5xl mt-2">Todas las propiedades</h1>
        </div>

        <!-- Layout -->
        <div class="flex flex-col lg:flex-row gap-10">

            <!-- BOTON MOBILE -->
            <div class="lg:hidden mb-5">

                <button onclick="openFilters()" class="w-full py-3 rounded-xl bg-[#3E153D] text-white font-medium shadow">

                    Filtrar propiedades

                </button>

            </div>

            <!-- OVERLAY -->
            <div id="filtersOverlay" onclick="closeFilters()" class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden">
            </div>


            <!-- FILTROS -->
            <div id="filtersPanel"
                class="
        fixed lg:static
        top-0 left-0
        h-screen lg:h-fit
        w-[88%] sm:w-[420px] lg:w-1/4
        bg-white
        z-50 lg:z-auto
        p-6
        rounded-none lg:rounded-xl
        shadow-xl lg:shadow
        overflow-y-auto
        transform -translate-x-full lg:translate-x-0
        transition-transform duration-300
    ">

                <div class="flex items-center justify-between mb-6 lg:hidden">

                    <h2 class="text-xl font-semibold text-[#3E153D]">
                        Filtros
                    </h2>

                    <button onclick="closeFilters()" class="text-2xl text-gray-500">

                        ✕

                    </button>

                </div>

                <script>
                    function openFilters() {

                        document.getElementById('filtersPanel')
                            .classList.remove('-translate-x-full');

                        document.getElementById('filtersOverlay')
                            .classList.remove('hidden');
                    }

                    function closeFilters() {

                        document.getElementById('filtersPanel')
                            .classList.add('-translate-x-full');

                        document.getElementById('filtersOverlay')
                            .classList.add('hidden');
                    }
                </script>
                <form method="GET" class="space-y-5">
                    <div>
                        <label class="text-sm text-gray-500">Tipo</label>

                        <select name="tipo" class="w-full px-3 py-2 rounded-md border border-gray-200">

                            <option value="">Todos</option>

                            @foreach (['Casa', 'Departamento', 'PH', 'Duplex', 'Triplex', 'Monoambiente', 'Loft', 'Oficina', 'Local', 'Galpon', 'Terreno', 'Quinta'] as $tipo)
                                <option value="{{ $tipo }}" {{ request('tipo') == $tipo ? 'selected' : '' }}>
                                    {{ $tipo }}
                                </option>
                            @endforeach

                        </select>
                    </div>


                    <!-- UBICACION -->
                    <div class="grid grid-cols-1 gap-3">

                        <div>
                            <label class="text-sm text-gray-500">Ciudad</label>

                            <input type="text" name="ciudad" value="{{ request('ciudad') }}" placeholder="Ej: Tigre"
                                class="w-full px-3 py-2 rounded-md border border-gray-200">
                        </div>
                    </div>

                    <!-- AMBIENTES -->
                    <div class="grid grid-cols-1 gap-3">

                        <div>
                            <label class="text-sm text-gray-500">Ambientes</label>

                            <select name="ambientes" class="w-full px-3 py-2 rounded-md border border-gray-200">

                                <option value="">Todos</option>

                                @for ($i = 1; $i <= 6; $i++)
                                    <option value="{{ $i }}"
                                        {{ request('ambientes') == $i ? 'selected' : '' }}>
                                        {{ $i }}{{ $i == 6 ? '+' : '' }}
                                    </option>
                                @endfor

                            </select>
                        </div>

                    </div>

                    <!-- SUPERFICIE -->
                    <div>

                        <label class="text-sm text-gray-500 block mb-2">
                            Superficie
                        </label>

                        <div class="flex gap-2">

                            <input type="number" name="m2_min" value="{{ request('m2_min') }}" placeholder="M² mín"
                                class="w-1/2 px-3 py-2 rounded-md border border-gray-200">

                            <input type="number" name="m2_max" value="{{ request('m2_max') }}" placeholder="M² máx"
                                class="w-1/2 px-3 py-2 rounded-md border border-gray-200">

                        </div>

                    </div>

                    <!-- COMODIDADES -->
                    <div>

                        <label class="text-sm text-gray-500 block mb-3">
                            Comodidades
                        </label>

                        <div class="grid grid-cols-2 gap-2 text-sm">

                            @foreach ([
        'pileta' => 'Pileta',
        'cochera' => 'Cochera',
        'parrilla' => 'Parrilla',
        'jardin' => 'Jardín',
        'terraza' => 'Terraza',
        'seguridad' => 'Seguridad',
    ] as $name => $label)
                                <label class="flex items-center gap-2">

                                    <input type="checkbox" name="{{ $name }}" value="1"
                                        {{ request($name) ? 'checked' : '' }}>

                                    <span class="text-gray-600">
                                        {{ $label }}
                                    </span>

                                </label>
                            @endforeach

                        </div>

                    </div>
                    <br>
                    <!-- BOTONES -->
                    <div class="mt-8">
                        <button type="submit"
                                class="w-full flex-1 py-2 bg-[#3E153D] mb-1 text-white rounded-md text-sm hover:bg-[#2c0f2b] transition">

                                Buscar

                            </button>

                            <a href="{{ route('todas-propiedades') }}">
                                    
                                <button type="button"
                                class="w-full flex-1 py-2 bg-[#787878] text-white rounded-md text-sm hover:bg-[#585858] transition">
                                
                                Limpiar
                                
                            </button>
                        </a>

                    </div>

                </form>
            </div>

            <!-- RESULTADOS -->
            <div class="w-full lg:w-3/4">

                <p class="text-gray-400 mb-6">Resultados</p>

                <div class="max-h-[600px] overflow-y-auto pr-2">
                    @foreach ($propiedades as $item)
                        <!-- CARD -->
                        <article
                            class="group bg-white border border-gray-100 rounded-2xl overflow-hidden shadow border hover:shadow-lg transition-all duration-300 mb-4">

                            <div class="flex flex-col md:flex-row">

                                <!-- IMAGEN -->
                                <div class="relative md:w-[240px] shrink-0">

                                    <div class="h-[220px] md:h-full overflow-hidden">

                                        <img src="{{ asset('storage/' . $item->imagen_portada_url) }}"
                                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500">

                                    </div>

                                    <!-- Overlay -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent">
                                    </div>

                                    <!-- Tipo -->
                                    <div class="absolute top-3 left-3">

                                        <span
                                            class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[11px] font-semibold text-[#1a0a19]">

                                            {{ $item->operacion }} · {{ $item->tipo }}

                                        </span>

                                    </div>

                                </div>

                                <!-- CONTENIDO -->
                                <div class="flex-1 p-5 flex flex-col justify-between">

                                    <div>

                                        <!-- TITULO -->
                                        <h2
                                            class="text-xl font-semibold text-[#1a0a19] leading-snug mb-2 group-hover:text-[#4b1d49] transition">

                                            {{ $item->slogan }}

                                        </h2>

                                        <h2
                                            class="text-md font-light text-[#1a0a19] leading-snug mb-2 group-hover:text-[#4b1d49] transition">

                                            {{ $item->titulo }}

                                        </h2>


                                        <!-- UBICACION -->
                                        <p class="text-sm text-gray-500 mb-4">

                                            {{ $item->direccion }}, {{ $item->ciudad }}

                                        </p>

                                        <!-- DATOS -->
                                        <div class="flex flex-wrap gap-2 mb-4">

                                            @if ($item->superficie_total)
                                                <div
                                                    class="bg-[#faf8fa] border border-[#f0e8f0] rounded-xl px-3 py-1.5 text-sm text-[#1a0a19]">

                                                    {{ $item->superficie_total }} m²

                                                </div>
                                            @endif

                                            @if ($item->ambientes)
                                                <div
                                                    class="bg-[#faf8fa] border border-[#f0e8f0] rounded-xl px-3 py-1.5 text-sm text-[#1a0a19]">

                                                    {{ $item->ambientes }} amb.

                                                </div>
                                            @endif

                                            @if ($item->dormitorios)
                                                <div
                                                    class="bg-[#faf8fa] border border-[#f0e8f0] rounded-xl px-3 py-1.5 text-sm text-[#1a0a19]">

                                                    {{ $item->dormitorios }} dorm.

                                                </div>
                                            @endif

                                            @if ($item->banios)
                                                <div
                                                    class="bg-[#faf8fa] border border-[#f0e8f0] rounded-xl px-3 py-1.5 text-sm text-[#1a0a19]">

                                                    {{ $item->banios }} baños

                                                </div>
                                            @endif

                                        </div>

                                        <!-- DESCRIPCION -->
                                        <p class="text-sm text-gray-600 leading-relaxed line-clamp-2">

                                            {{ $item->descripcion }}

                                        </p>

                                    </div>

                                    <!-- FOOTER -->
                                    <div class="flex items-center justify-between mt-5 pt-4 border-t border-gray-100">

                                        <!-- FEATURES -->
                                        <div class="flex flex-wrap gap-2">

                                            @if ($item->tiene_pileta)
                                                <span
                                                    class="text-[11px] bg-blue-50 text-blue-700 px-2.5 py-1 rounded-full">
                                                    Pileta
                                                </span>
                                            @endif

                                            @if ($item->tiene_cochera)
                                                <span
                                                    class="text-[11px] bg-gray-100 text-gray-700 px-2.5 py-1 rounded-full">
                                                    Cochera
                                                </span>
                                            @endif

                                            @if ($item->tiene_parrilla)
                                                <span
                                                    class="text-[11px] bg-orange-50 text-orange-700 px-2.5 py-1 rounded-full">
                                                    Parrilla
                                                </span>
                                            @endif

                                        </div>

                                        <!-- BOTON -->
                                        <a href="{{ route('ver-propiedad', $item->id) }}"
                                        class="text-[#f1f1f1] bg-[#3E153D] text-sm py-2 transition rounded-3xl w-8 h-8 flex items-center justify-center">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">

                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />

                                        </svg>

                                    </a>

                                    </div>

                                </div>

                            </div>

                        </article>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    @include('frames.contactForm')
    @include('frames.footer')

</body>

</html>
