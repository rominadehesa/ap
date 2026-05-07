@extends('private.admin')

@section('content')

<div class="max-w-6xl mx-auto py-6">

    <!-- HEADER -->
    <div class="mb-6 flex justify-between items-end">
        <div>

            <h1 class="text-3xl font-bold text-[#1a0a19] mb-2">
                {{ isset($propiedad) ? 'Editar propiedad' : 'Nueva propiedad' }}
            </h1>
            
            <p class="text-gray-500">
                {{ isset($propiedad)
                ? 'Actualizá la información de la propiedad.'
                : 'Completá los datos para publicar una nueva propiedad.' }}
            </p>
        
        </div>
        <a href="{{ route('propiedades.index') }}" class="text-blue-500 hover:text-blue-700">
            ← Volver a la lista de propiedades
        </a>
    </div>

    <!-- ERRORES -->
    @if ($errors->any())
        <div class="bg-red-50 border border-red-200 text-red-700 p-4 rounded-2xl mb-6">
            <p class="font-semibold mb-2">Ocurrieron algunos errores:</p>

            <ul class="list-disc pl-5 text-sm space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- FORM -->
    <form
        action="{{ isset($propiedad) ? route('propiedades.update', $propiedad->id) : route('propiedades.store') }}"
        method="POST"
        enctype="multipart/form-data"
        class="space-y-6"
    >

        @csrf

        @if (isset($propiedad))
            @method('PUT')
        @endif

        <!-- ========================= -->
        <!-- DATOS BASICOS -->
        <!-- ========================= -->

        <div class="bg-[#fafafa] border border-gray-200 rounded-2xl p-6 space-y-6">

            <div>
                <h2 class="text-xl font-bold text-[#1a0a19]">
                    Datos básicos
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Información principal de la propiedad.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <!-- TITULO -->
                <div>
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Título
                    </label>

                    <input
                        name="titulo"
                        value="{{ old('titulo', $propiedad->titulo ?? '') }}"
                        placeholder="Ej: Casa moderna con pileta"
                        class="input"
                    >

                    <p class="text-xs text-gray-500 mt-1">
                        Este título será visible en las publicaciones.
                    </p>
                </div>

                <!-- TIPO -->
                <div>
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Tipo de propiedad
                    </label>

                    <select name="tipo" class="input">
                        <option value="">Seleccionar tipo</option>

                        @foreach ([
                            'Casa' => 'Casa',
                            'Departamento' => 'Departamento',
                            'PH' => 'PH',
                            'Duplex' => 'Dúplex',
                            'Triplex' => 'Tríplex',
                            'Monoambiente' => 'Monoambiente',
                            'Loft' => 'Loft',
                            'Oficina' => 'Oficina',
                            'Local' => 'Local comercial',
                            'Galpon' => 'Galpón',
                            'Deposito' => 'Depósito',
                            'Lote' => 'Lote',
                            'Terreno' => 'Terreno',
                            'Quinta' => 'Quinta',
                            'Casaquinta' => 'Casa quinta',
                            'Campo' => 'Campo',
                            'Cochera' => 'Cochera',
                        ] as $val => $label)

                            <option
                                value="{{ $val }}"
                                {{ old('tipo', $propiedad->tipo ?? '') == $val ? 'selected' : '' }}
                            >
                                {{ $label }}
                            </option>

                        @endforeach
                    </select>
                </div>

                <!-- OPERACION -->
                <div>
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Operación
                    </label>

                    <select name="operacion" class="input">
                        <option value="">Seleccionar operación</option>

                        @foreach ([
                            'Venta' => 'Venta',
                            'Alquiler' => 'Alquiler'
                        ] as $val => $label)

                            <option
                                value="{{ $val }}"
                                {{ old('operacion', $propiedad->operacion ?? '') == $val ? 'selected' : '' }}
                            >
                                {{ $label }}
                            </option>

                        @endforeach
                    </select>
                </div>

                <!-- ESTADO -->
                <div>
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Estado del inmueble
                    </label>

                    <select name="estado_inmueble" class="input">
                        <option value="">Seleccionar estado</option>

                        @foreach ([
                            'A estrenar' => 'A estrenar',
                            'Buen estado' => 'Buen estado',
                            'A reciclar' => 'A reciclar',
                        ] as $val => $label)

                            <option
                                value="{{ $val }}"
                                {{ old('estado_inmueble', $propiedad->estado_inmueble ?? '') == $val ? 'selected' : '' }}
                            >
                                {{ $label }}
                            </option>

                        @endforeach
                    </select>
                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- UBICACION -->
        <!-- ========================= -->

        <div class="bg-[#fafafa] border border-gray-200 rounded-2xl p-6 space-y-6">

            <div>
                <h2 class="text-xl font-bold text-[#1a0a19]">
                    Ubicación
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Datos de ubicación de la propiedad.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div>
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Dirección
                    </label>

                    <input
                        name="direccion"
                        value="{{ old('direccion', $propiedad->direccion ?? '') }}"
                        placeholder="Ej: Av. Libertador 1234"
                        class="input"
                    >

                    <p class="text-xs text-gray-500 mt-1">
                        Ingresá calle, altura y referencias si es necesario.
                    </p>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Ciudad
                    </label>

                    <input
                        name="ciudad"
                        value="{{ old('ciudad', $propiedad->ciudad ?? '') }}"
                        placeholder="Ej: Tigre"
                        class="input"
                    >
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Zona
                    </label>

                    <input
                        name="zona"
                        value="{{ old('zona', $propiedad->zona ?? '') }}"
                        placeholder="Ej: Zona Norte"
                        class="input"
                    >
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Barrio
                    </label>

                    <input
                        name="barrio"
                        value="{{ old('barrio', $propiedad->barrio ?? '') }}"
                        placeholder="Ej: Nordelta"
                        class="input"
                    >
                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- SUPERFICIES -->
        <!-- ========================= -->

        <div class="bg-[#fafafa] border border-gray-200 rounded-2xl p-6 space-y-6">

            <div>
                <h2 class="text-xl font-bold text-[#1a0a19]">
                    Superficies
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Medidas generales del inmueble.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div>
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Superficie total
                    </label>

                    <input
                        name="superficie_total"
                        value="{{ old('superficie_total', $propiedad->superficie_total ?? '') }}"
                        placeholder="Ej: 250"
                        class="input"
                    >

                    <p class="text-xs text-gray-500 mt-1">
                        Expresada en m².
                    </p>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Superficie cubierta
                    </label>

                    <input
                        name="superficie_cubierta"
                        value="{{ old('superficie_cubierta', $propiedad->superficie_cubierta ?? '') }}"
                        placeholder="Ej: 180"
                        class="input"
                    >

                    <p class="text-xs text-gray-500 mt-1">
                        Expresada en m².
                    </p>
                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- CARACTERISTICAS -->
        <!-- ========================= -->

        <div class="bg-[#fafafa] border border-gray-200 rounded-2xl p-6 space-y-6">

            <div>
                <h2 class="text-xl font-bold text-[#1a0a19]">
                    Características principales
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Información estructural del inmueble.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

                <div>
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Ambientes
                    </label>

                    <input
                        name="ambientes"
                        value="{{ old('ambientes', $propiedad->ambientes ?? '') }}"
                        class="input"
                    >
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Dormitorios
                    </label>

                    <input
                        name="dormitorios"
                        value="{{ old('dormitorios', $propiedad->dormitorios ?? '') }}"
                        class="input"
                    >
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Baños
                    </label>

                    <input
                        name="banios"
                        value="{{ old('banios', $propiedad->banios ?? '') }}"
                        class="input"
                    >
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Pisos
                    </label>

                    <input
                        name="cant_pisos"
                        value="{{ old('cant_pisos', $propiedad->cant_pisos ?? '') }}"
                        class="input"
                    >
                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- DESCRIPCION -->
        <!-- ========================= -->

        <div class="bg-[#fafafa] border border-gray-200 rounded-2xl p-6 space-y-6">

            <div>
                <h2 class="text-xl font-bold text-[#1a0a19]">
                    Descripción
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Información comercial y descriptiva.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div>
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Slogan
                    </label>

                    <textarea
                        name="slogan"
                        rows="4"
                        placeholder="Ej: Excelente propiedad con vista al lago"
                        class="input resize-none"
                    >{{ old('slogan', $propiedad->slogan ?? '') }}</textarea>

                    <p class="text-xs text-gray-500 mt-1">
                        Frase corta destacada para publicaciones.
                    </p>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700 mb-1 block">
                        Descripción
                    </label>

                    <textarea
                        name="descripcion"
                        rows="4"
                        placeholder="Describí características, ubicación y puntos fuertes."
                        class="input resize-none"
                    >{{ old('descripcion', $propiedad->descripcion ?? '') }}</textarea>

                    <p class="text-xs text-gray-500 mt-1">
                        Describí los puntos fuertes de la propiedad.
                    </p>
                </div>

            </div>

        </div>

        <!-- ========================= -->
        <!-- IMAGEN -->
        <!-- ========================= -->

        <div class="bg-[#fafafa] border border-gray-200 rounded-2xl p-6 space-y-4">

            <div>
                <h2 class="text-xl font-bold text-[#1a0a19]">
                    Imagen principal
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Esta imagen será la portada de la publicación.
                </p>
            </div>

            <div>
                <input
                    type="file"
                    name="imagen_portada"
                    class="input"
                >

                @if (isset($propiedad) && $propiedad->imagen_portada_url)

                    <img
                        src="{{ asset('storage/' . $propiedad->imagen_portada_url) }}"
                        class="w-48 h-32 object-cover rounded-xl mt-4 border"
                    >

                @endif
            </div>

        </div>

        <!-- ========================= -->
        <!-- SERVICIOS -->
        <!-- ========================= -->

        <div class="bg-[#fafafa] border border-gray-200 rounded-2xl p-6 space-y-6">

            <div>
                <h2 class="text-xl font-bold text-[#1a0a19]">
                    Servicios
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Servicios disponibles en la propiedad.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 text-sm">

                @foreach ([
                    'tiene_luz' => 'Luz',
                    'tiene_gas_natural' => 'Gas natural',
                    'tiene_gas_garrafa' => 'Gas garrafa',
                    'tiene_agua_corriente' => 'Agua corriente',
                    'tiene_cloaca' => 'Cloaca',
                    'tiene_internet' => 'Internet',
                    'tiene_pavimento' => 'Pavimento',
                ] as $name => $label)

                    <label class="border rounded-xl px-4 py-3 flex items-center gap-2 cursor-pointer hover:border-[#1a0a19] transition">

                        <input type="hidden" name="{{ $name }}" value="0">

                        <input
                            type="checkbox"
                            name="{{ $name }}"
                            value="1"
                            {{ old($name, $propiedad->$name ?? 0) ? 'checked' : '' }}
                        >

                        <span>{{ $label }}</span>

                    </label>

                @endforeach

            </div>

        </div>

        <!-- ========================= -->
        <!-- COMODIDADES -->
        <!-- ========================= -->

        <div class="bg-[#fafafa] border border-gray-200 rounded-2xl p-6 space-y-6">

            <div>
                <h2 class="text-xl font-bold text-[#1a0a19]">
                    Comodidades y amenities
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Características adicionales del inmueble.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 text-sm">

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
                    'tiene_aire_acondicionado' => 'Aire acondicionado',
                ] as $name => $label)

                    <label class="border rounded-xl px-4 py-3 flex items-center gap-2 cursor-pointer hover:border-[#1a0a19] transition">

                        <input type="hidden" name="{{ $name }}" value="0">

                        <input
                            type="checkbox"
                            name="{{ $name }}"
                            value="1"
                            {{ old($name, $propiedad->$name ?? 0) ? 'checked' : '' }}
                        >

                        <span>{{ $label }}</span>

                    </label>

                @endforeach

            </div>

        </div>

        <!-- ========================= -->
        <!-- PUBLICACION -->
        <!-- ========================= -->

        <div class="bg-[#fafafa] border border-gray-200 rounded-2xl p-6 space-y-6">

            <div>
                <h2 class="text-xl font-bold text-[#1a0a19]">
                    Publicación
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Configuración adicional de la propiedad.
                </p>
            </div>

            <label class="border rounded-xl px-4 py-3 flex items-center gap-3 cursor-pointer hover:border-[#1a0a19] transition">

                <input type="hidden" name="apto_credito" value="0">

                <input
                    type="checkbox"
                    name="apto_credito"
                    value="1"
                    {{ old('apto_credito', $propiedad->apto_credito ?? 0) ? 'checked' : '' }}
                >

                <div>
                    <p class="font-medium">
                        Apto crédito
                    </p>

                    <p class="text-xs text-gray-500">
                        Indica si la propiedad acepta crédito hipotecario.
                    </p>
                </div>

            </label>

        </div>

        <!-- BOTON -->
        <div class="flex justify-end">

            <button
                class="bg-[#1a0a19] hover:bg-[#2a1128] transition text-white px-8 py-4 rounded-2xl font-medium"
            >
                {{ isset($propiedad)
                    ? 'Actualizar propiedad'
                    : 'Guardar propiedad' }}
            </button>

        </div>

    </form>

</div>

@endsection