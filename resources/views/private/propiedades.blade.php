@extends('private.admin')

@section('content')
    <div class="flex flex-col gap-10">
        <ul>
            <a href="{{ route('dashboard') }}">
                <li>Inicio del panel</li>
            </a>
        </ul>
    </div>

    <div class="w-full max-w-full overflow-hidden">
        <!-- Header -->
        <div class="block md:flex md:justify-between md:items-center mb-10">
            <div class="mb-4 md:mb-0">
                <h1 class="text-2xl font-bold text-[#1a0a19] md:mb-2">Propiedades</h1>
                <p class="text-sm text-gray-500">Gestión de propiedades</p>
            </div>

            <div>
                <a href="{{ route('propiedades.create') }}"
                    class="bg-[#1a0a19] text-white px-5 py-2 rounded-xl hover:opacity-90 whitespace-nowrap">
                    + Nueva propiedad
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabla — solo visible en md+ -->
        <div class="hidden md:block bg-white rounded-2xl border border-gray-100 overflow-hidden">
            <div class="w-full overflow-x-auto">
                <table class="min-w-[1200px] w-full text-sm">
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
                    <tbody class="divide-y">
                        @foreach ($propiedades as $propiedad)
                            <tr class="hover:bg-gray-50 transition align-middle">
                                <td class="p-4">
                                    <div class="w-20 h-16 rounded-lg overflow-hidden bg-gray-200">
                                        <img src="{{ asset('storage/' . $propiedad->imagen_portada_url) }}"
                                             class="w-full h-full object-cover">
                                    </div>
                                </td>
                                <td class="p-4 font-medium text-[#1a0a19] whitespace-nowrap">
                                    {{ $propiedad->titulo }} <br>
                                    <span class="text-xs text-gray-400">{{ $propiedad->slogan }}</span>
                                </td>
                                <td class="p-4 text-gray-600">
                                    {{ $propiedad->direccion }} <br>
                                    <span class="text-xs text-gray-400">{{ $propiedad->ciudad }}</span>
                                </td>
                                <td class="p-4 text-gray-600 whitespace-nowrap">
                                    {{ $propiedad->superficie_total ?? '-' }} m² /
                                    {{ $propiedad->superficie_cubierta ?? '-' }} m² <br>
                                    {{ $propiedad->ambientes ?? '-' }} amb ·
                                    {{ $propiedad->dormitorios ?? '-' }} dorm ·
                                    {{ $propiedad->banios ?? '-' }} baños
                                </td>
                                <td class="p-4 text-right whitespace-nowrap">
                                    <div class="flex gap-3 text-sm">
                                        <a href="{{ route('propiedades.galeria', $propiedad->id) }}" class="text-blue-600 hover:underline">Editar galeria</a>
                                    </div>
                                </td>
                                <td class="p-4 text-right whitespace-nowrap">
                                    <div class="flex gap-3 text-sm">
                                        <a href="{{ route('propiedades.caracteristicas', $propiedad->id) }}" class="text-blue-600 hover:underline">Editar caracteristicas</a>
                                    </div>
                                </td>
                                <td class="p-4 whitespace-nowrap">
                                    <a href="{{ route('propiedades.show', $propiedad) }}"
                                        class="text-[#1a0a19] hover:underline">
                                        Ver
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Cards mobile — solo visible en < md -->
        <div class="md:hidden flex flex-col gap-4">
            @foreach ($propiedades as $propiedad)
                <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden">

                    <!-- Imagen + título -->
                    <div class="flex items-center gap-3 p-4">
                        <div class="w-16 h-14 rounded-lg overflow-hidden bg-gray-200 shrink-0">
                            <img src="{{ asset('storage/' . $propiedad->imagen_portada_url) }}"
                                 class="w-full h-full object-cover">
                        </div>
                        <div>
                            <p class="font-medium text-[#1a0a19] text-sm leading-snug">{{ $propiedad->titulo }}</p>
                            <p class="text-xs text-gray-400">{{ $propiedad->slogan }}</p>
                        </div>
                    </div>

                    <!-- Datos -->
                    <div class="px-4 pb-3 text-xs text-gray-500 space-y-1">
                        <p>{{ $propiedad->direccion }}, <span class="text-gray-400">{{ $propiedad->ciudad }}</span></p>
                        <p>
                            {{ $propiedad->superficie_total ?? '-' }} m² /
                            {{ $propiedad->superficie_cubierta ?? '-' }} m² &middot;
                            {{ $propiedad->ambientes ?? '-' }} amb &middot;
                            {{ $propiedad->dormitorios ?? '-' }} dorm &middot;
                            {{ $propiedad->banios ?? '-' }} baños
                        </p>
                    </div>

                    <!-- Acciones -->
                    <div class="border-t border-gray-100 flex divide-x divide-gray-100 text-sm">
                        <a href="{{ route('propiedades.galeria', $propiedad->id) }}"
                           class="flex-1 text-center py-3 text-blue-600">Galería</a>
                        <a href="{{ route('propiedades.caracteristicas', $propiedad->id) }}"
                           class="flex-1 text-center py-3 text-blue-600">Características</a>
                        <a href="{{ route('propiedades.show', $propiedad) }}"
                           class="flex-1 text-center py-3 text-[#1a0a19]">Ver</a>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
@endsection