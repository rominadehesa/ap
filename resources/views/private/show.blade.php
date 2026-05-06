@extends('private.admin')

@section('content')
    <div class="max-w-6xl mx-auto space-y-8">

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-[#1a0a19]">{{ $propiedad->titulo }}</h1>
                <p class="text-sm text-gray-500">{{ $propiedad->titulo }}</p>
            </div>

            <div class="flex gap-2">
                <a class="bg-[#1a0a19] text-white px-5 py-2 rounded-xl hover:opacity-90 whitespace-nowrap">
                    + Editar propiedad
                </a>

                <form action="{{ route('propiedades.destroy', $propiedad->id) }}" method="POST"
                    onsubmit="return confirm('¿Seguro que querés eliminar esta propiedad?')">

                    @csrf
                    @method('DELETE')

                    <button class="bg-red-600 text-white px-4 py-2 rounded-lg">
                        Eliminar
                    </button>
                </form>
            </div>
        </div>

        <!-- DATOS BÁSICOS + IMAGEN -->
        <div class="flex gap-6 items-start">

            <!-- Datos -->
            <div class="flex-1 bg-white p-6 rounded-xl border">
                <p class="font-semibold text-md mb-3">Datos básicos</p>

                <div class="grid grid-cols-2 gap-4 text-sm">
                    <p><b>Título:</b> {{ $propiedad->titulo }}</p>
                    <p><b>Slogan:</b> {{ $propiedad->slogan ?? '-' }}</p>
                    <p><b>Tipo:</b> {{ $propiedad->tipo }}</p>
                    <p><b>Operación:</b> {{ $propiedad->operacion }}</p>
                    <p><b>Estado:</b> {{ $propiedad->estado_inmueble ?? '-' }}</p>

                    <p><b>Dirección:</b> {{ $propiedad->direccion }}</p>
                    <p><b>Ciudad:</b> {{ $propiedad->ciudad }}</p>
                    <p><b>Zona:</b> {{ $propiedad->zona ?? '-' }}</p>
                    <p><b>Barrio:</b> {{ $propiedad->barrio ?? '-' }}</p>
                </div>
            </div>

            <!-- Imagen -->
            <div class="w-64">
                <img src="{{ asset('storage/' . $propiedad->imagen_portada_url) }}"
                    class="w-full h-40 object-cover rounded-xl">
            </div>

        </div>

        <!-- SUPERFICIES -->
        <div class="bg-white p-6 rounded-xl border">
            <p class="font-semibold text-md mb-3">Superficie</p>

            <div class="grid grid-cols-2 gap-4 text-sm">
                <p>Total: {{ $propiedad->superficie_total ?? '-' }} m²</p>
                <p>Cubierta: {{ $propiedad->superficie_cubierta ?? '-' }} m²</p>
            </div>
        </div>

        <!-- DATOS (AMBIENTES) -->
        <div class="bg-white p-6 rounded-xl border">
            <p class="font-semibold text-md mb-3">Datos</p>

            <div class="grid grid-cols-4 gap-4 text-sm">
                <p>Ambientes: {{ $propiedad->ambientes ?? '-' }}</p>
                <p>Dormitorios: {{ $propiedad->dormitorios ?? '-' }}</p>
                <p>Baños: {{ $propiedad->banios ?? '-' }}</p>
                <p>Pisos: {{ $propiedad->cant_pisos ?? '-' }}</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl border">
            <div class="flex justify-between items-end mb-3">
                <p class="font-semibold text-md">Galeria</p>
                <a href=" {{ route('propiedades.galeria', $propiedad->id) }}" class="text-blue-600 hover:underline">Editar
                    galeria</a>
            </div>

            <div class="flex gap-4 overflow-x-auto">
                @foreach ($propiedad->imagenes as $item)
                    <div class="min-w-[200px] h-32 rounded-xl overflow-hidden bg-gray-200">
                        <img src="{{ asset('storage/' . $item->url) }}" class="w-full h-full object-cover">
                    </div>
                @endforeach
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl border">
            <div class="flex justify-between items-end mb-3">
                <p class="font-semibold text-md">Caracteristicas</p>
                <a href="{{ route('propiedades.caracteristicas', $propiedad->id) }}"
                    class="text-blue-600 hover:underline">Editar caracteristicas</a>
            </div>

            <div class="flex gap-4 overflow-x-auto">
                @foreach ($propiedad->caracteristicas as $item)
                    <div class="bg-black/5 rounded-xl min-w-[200px] border">
                        <div class="min-w-[200px] h-32 rounded-t-xl overflow-hidden bg-gray-200">
                            <img src="{{ asset('storage/' . $item->url) }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <p class="text-sm font-semibold mt-1">{{ $item->nombre }}</p>
                            <p class="text-xs text-gray-500">{{ $item->descripcion }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- TEXTO -->
        <div class="bg-white p-6 rounded-xl border">
            <p class="font-semibold text-md mb-3">Texto</p>

            <div class="space-y-3 text-sm">
                <p><b>Slogan:</b> {{ $propiedad->slogan ?? '-' }}</p>
                <p><b>Descripción:</b> {{ $propiedad->descripcion ?? '-' }}</p>
            </div>
        </div>

        <!-- SERVICIOS -->
        <div class="bg-white p-6 rounded-xl border">
            <p class="font-semibold text-md mb-3">Servicios</p>

            <div class="grid grid-cols-3 gap-2 text-sm">
                @foreach ([
            'tiene_luz' => 'Luz',
            'tiene_gas_natural' => 'Gas natural',
            'tiene_gas_garrafa' => 'Gas garrafa',
            'tiene_agua_corriente' => 'Agua',
            'tiene_cloaca' => 'Cloaca',
            'tiene_internet' => 'Internet',
            'tiene_pavimento' => 'Pavimento',
        ] as $campo => $label)
                    <div class="flex justify-between border rounded px-2 py-1">
                        <span>{{ $label }}</span>
                        <span class="{{ $propiedad->$campo ? 'text-green-600' : 'text-red-500' }}">
                            {{ $propiedad->$campo ? 'Sí' : 'No' }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- COMODIDADES -->
        <div class="bg-white p-6 rounded-xl border">
            <p class="font-semibold text-md mb-3">Comodidades</p>

            <div class="grid grid-cols-3 gap-2 text-sm">
                @foreach ([
            'tiene_cochera' => 'Cochera',
            'tiene_patio' => 'Patio',
            'tiene_jardin' => 'Jardín',
            'tiene_pileta' => 'Pileta',
            'tiene_quincho' => 'Quincho',
            'tiene_terraza' => 'Terraza',
            'tiene_balcon' => 'Balcón',
            'tiene_ascensor' => 'Ascensor',
            'tiene_seguridad' => 'Seguridad',
            'tiene_parrilla' => 'Parrilla',
            'tiene_calefaccion' => 'Calefacción',
            'tiene_aire_acondicionado' => 'Aire',
        ] as $campo => $label)
                    <div class="flex justify-between border rounded px-2 py-1">
                        <span>{{ $label }}</span>
                        <span class="{{ $propiedad->$campo ? 'text-green-600' : 'text-red-500' }}">
                            {{ $propiedad->$campo ? 'Sí' : 'No' }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- EXTRA -->
        <div class="bg-white p-6 rounded-xl border">
            <p class="font-semibold text-md mb-3">Extra</p>

            <p class="text-sm">
                Apto crédito:
                <span class="{{ $propiedad->apto_credito ? 'text-green-600' : 'text-red-500' }}">
                    {{ $propiedad->apto_credito ? 'Sí' : 'No' }}
                </span>
            </p>
        </div>

    </div>
@endsection
