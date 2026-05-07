@extends('private.admin')

@section('content')
    <div class="w-full max-w-full overflow-hidden">

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-[#1a0a19] mb-2">Propiedades</h1>
                <p class="text-sm text-gray-500">Gestión de propiedades</p>
            </div>

            <a href="{{ route('propiedades.create') }}"
                class="bg-[#1a0a19] text-white px-5 py-2 rounded-xl hover:opacity-90 whitespace-nowrap">
                + Nueva propiedad
            </a>
        </div>

        @if(session('success'))
                <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-800">
                    {{ session('success') }}
                </div>
            @endif

        <!-- Tabla -->
        <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden">
            <div class="w-full overflow-x-auto">

                <table class="min-w-[1200px] w-full text-sm">

                    <!-- HEAD -->
                    <thead class="bg-gray-50 text-gray-600 text-sm font-medium">
                        <tr class="text-left">
                            <th class="p-4">Imagen</th>
                            <th class="p-4">Título - Slogan</th>
                            <th class="p-4">Ubicación</th>
                            <th class="p-4">Datos</th>
                            <th class="p-4">Galeria</th>
                            <th class="p-4">Caracteristicas</th>
                            <th class="p-4 text-right">Acciones</th>
                        </tr>
                    </thead>

                    <!-- BODY -->
                    <tbody class="divide-y">

                        @foreach ($propiedades as $propiedad)
                            <tr class="hover:bg-gray-50 transition align-middle">

                                <!-- Imagen -->
                                <td class="p-4">
                                    <div class="w-20 h-16 rounded-lg overflow-hidden bg-gray-200">
                                        <img src="{{ asset('storage/' . $propiedad->imagen_portada_url) }}"
     class="w-full h-full object-cover">
                                    </div>
                                </td>

                                <!-- Título -->
                                <td class="p-4 font-medium text-[#1a0a19] whitespace-nowrap">
                                    {{ $propiedad->titulo }} <br>
                                     <span class="text-xs text-gray-400">{{ $propiedad->slogan }}</span>
                                </td>

                                <!-- Ubicación -->
                                <td class="p-4 text-gray-600">
                                    {{ $propiedad->direccion }} <br>
                                    <span class="text-xs text-gray-400">{{ $propiedad->ciudad }}</span>
                                </td>

                                <!-- Datos agrupados -->
                                <td class="p-4 text-gray-600 whitespace-nowrap">
                                    {{ $propiedad->superficie_total ?? '-' }} m² /
                                    {{ $propiedad->superficie_cubierta ?? '-' }} m² <br>
                                    {{ $propiedad->ambientes ?? '-' }} amb ·
                                    {{ $propiedad->dormitorios ?? '-' }} dorm ·
                                    {{ $propiedad->banios ?? '-' }} baños
                                </td>


                                <!-- Galeria -->
                                <td class="p-4 text-right whitespace-nowrap">
                                    <div class="flex gap-3 text-sm">
                                        <a href="{{ route('propiedades.galeria', $propiedad->id) }}" class="text-blue-600 hover:underline">Editar galeria</a>
                                    </div>
                                </td>

                                <!-- Caracteristicas -->
                                <td class="p-4 text-right whitespace-nowrap">
                                    <div class="flex  gap-3 text-sm">
                                        <a href="{{ route('propiedades.caracteristicas', $propiedad->id) }}" class="text-blue-600 hover:underline">Editar caracteristicas</a>
                                    </div>
                                </td>

                                <!-- Acciones -->
                                <td class="p-4 whitespace-nowrap">
                                    <div class="">

                                        <a href="{{ route('propiedades.show', $propiedad) }}"
                                            class="text-[#1a0a19] hover:underline">
                                            Ver
                                        </a>

                                    </div>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>

        </div>

    </div>
@endsection
