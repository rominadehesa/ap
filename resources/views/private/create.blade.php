@extends('private.admin')

@section('content')

    <div class="max-w-6xl mx-auto">

        <!-- HEADER -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-[#1a0a19]">
                {{ isset($propiedad) ? 'Editar propiedad' : 'Nueva propiedad' }}
            </h1>
            <p class="text-sm text-gray-500">
                {{ isset($propiedad) ? 'Modificá los datos de la propiedad' : 'Completa el formulario para registrar una nueva propiedad' }}
            </p>
        </div>

        <!-- ERRORES -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded-xl mb-6">
                <ul class="text-sm list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- FORM -->
        <form action="{{ isset($propiedad) ? route('propiedades.update', $propiedad->id) : route('propiedades.store') }}"
            method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-2xl border space-y-8">

            @csrf
            @if (isset($propiedad))
                @method('PUT')
            @endif

            <!-- DATOS BASICOS -->
            <div class="grid grid-cols-2 gap-4">

                <input name="titulo" placeholder="Título" value="{{ old('titulo', $propiedad->titulo ?? '') }}"
                    class="input">

                <input name="direccion" placeholder="Dirección" value="{{ old('direccion', $propiedad->direccion ?? '') }}"
                    class="input">

                <input name="ciudad" placeholder="Ciudad" value="{{ old('ciudad', $propiedad->ciudad ?? '') }}"
                    class="input">

                <input name="zona" placeholder="Zona" value="{{ old('zona', $propiedad->zona ?? '') }}" class="input">

                <input name="barrio" placeholder="Barrio" value="{{ old('barrio', $propiedad->barrio ?? '') }}"
                    class="input">

                <select name="tipo" class="input">
                    <option value="">Tipo</option>

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
                        <option value="{{ $val }}"
                            {{ old('tipo', $propiedad->tipo ?? '') == $val ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>

                <select name="operacion" class="input">
                    <option value="">Operación</option>
                    @foreach (['Venta' => 'Venta', 'Alquiler' => 'Alquiler'] as $val => $label)
                        <option value="{{ $val }}"
                            {{ old('operacion', $propiedad->operacion ?? '') == $val ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>

                <select name="estado_inmueble" class="input">
                    <option value="">Estado</option>
                    @foreach ([
            'A estrenar' => 'A estrenar',
            'Buen estado' => 'Buen estado',
            'A reciclar' => 'A reciclar',
        ] as $val => $label)
                        <option value="{{ $val }}"
                            {{ old('estado_inmueble', $propiedad->estado_inmueble ?? '') == $val ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>

            </div>

            <!-- SUPERFICIES -->
            <div class="grid grid-cols-2 gap-4">
                <input name="superficie_total" placeholder="Superficie total"
                    value="{{ old('superficie_total', $propiedad->superficie_total ?? '') }}" class="input">

                <input name="superficie_cubierta" placeholder="Superficie cubierta"
                    value="{{ old('superficie_cubierta', $propiedad->superficie_cubierta ?? '') }}" class="input">
            </div>

            <!-- DATOS -->
            <div class="grid grid-cols-4 gap-4">
                <input name="ambientes" placeholder="Ambientes" value="{{ old('ambientes', $propiedad->ambientes ?? '') }}"
                    class="input">

                <input name="dormitorios" placeholder="Dormitorios"
                    value="{{ old('dormitorios', $propiedad->dormitorios ?? '') }}" class="input">

                <input name="banios" placeholder="Baños" value="{{ old('banios', $propiedad->banios ?? '') }}"
                    class="input">

                <input name="cant_pisos" placeholder="Cantidad de pisos"
                    value="{{ old('cant_pisos', $propiedad->cant_pisos ?? '') }}" class="input">
            </div>

            <!-- TEXTO -->
            <div class="grid grid-cols-2 gap-4">
                <textarea name="slogan" placeholder="Slogan" class="input">{{ old('slogan', $propiedad->slogan ?? '') }}</textarea>
                <textarea name="descripcion" placeholder="Descripción" class="input">{{ old('descripcion', $propiedad->descripcion ?? '') }}</textarea>
            </div>

            <!-- IMAGEN -->
            <div>
                <label class="font-semibold mb-2">Imagen de portada</label>
                <input type="file" name="imagen_portada" class="input">

                @if (isset($propiedad) && $propiedad->imagen_portada_url)
                    <img src="{{ asset('storage/' . $propiedad->imagen_portada_url) }}" class="w-40 mt-2 rounded-lg">
                @endif
            </div>

            <!-- SERVICIOS -->
            <div>
                <p class="font-semibold mb-2">Servicios</p>
                <div class="grid grid-cols-3 gap-2 text-sm">

                    @foreach ([
            'tiene_luz' => 'Luz',
            'tiene_gas_natural' => 'Gas natural',
            'tiene_gas_garrafa' => 'Gas garrafa',
            'tiene_agua_corriente' => 'Agua',
            'tiene_cloaca' => 'Cloaca',
            'tiene_internet' => 'Internet',
            'tiene_pavimento' => 'Pavimento',
        ] as $name => $label)
                        <label class="flex items-center gap-2">
                            <input type="hidden" name="{{ $name }}" value="0">
                            <input type="checkbox" name="{{ $name }}" value="1"
                                {{ old($name, $propiedad->$name ?? 0) ? 'checked' : '' }}>
                            {{ $label }}
                        </label>
                    @endforeach

                </div>
            </div>

            <!-- COMODIDADES -->
            <div>
                <p class="font-semibold mb-2">Comodidades</p>
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
        ] as $name => $label)
                        <label class="flex items-center gap-2">
                            <input type="hidden" name="{{ $name }}" value="0">
                            <input type="checkbox" name="{{ $name }}" value="1"
                                {{ old($name, $propiedad->$name ?? 0) ? 'checked' : '' }}>
                            {{ $label }}
                        </label>
                    @endforeach

                </div>
            </div>

            <!-- EXTRA -->
            <label class="flex items-center gap-2">
                <input type="hidden" name="apto_credito" value="0">
                <input type="checkbox" name="apto_credito" value="1"
                    {{ old('apto_credito', $propiedad->apto_credito ?? 0) ? 'checked' : '' }}>
                Apto crédito
            </label>

            <!-- BOTON -->
            <button class="bg-[#1a0a19] text-white px-6 py-3 rounded-xl">
                {{ isset($propiedad) ? 'Actualizar propiedad' : 'Guardar propiedad' }}
            </button>

        </form>

    </div>

@endsection
