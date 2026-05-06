@extends('private.admin')

@section('content')
    <div class="max-w-4xl mx-auto">

        <h1 class="text-2xl font-bold mb-6">
            Características de {{ $propiedad->titulo }}
        </h1>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- FORM -->
        <form action="{{ route('propiedades.caracteristicas.store', $propiedad->id) }}" method="POST"
            enctype="multipart/form-data" class="bg-white p-6 rounded-xl border mb-6 grid gap-4">

            @csrf

            <input name="nombre" placeholder="Nombre (Ej: Vista al río)" class="input">

            <textarea name="descripcion" placeholder="Descripción (opcional)" class="input"></textarea>

            <input type="file" name="icono" class="input">

            <button class="bg-[#1a0a19] text-white px-4 py-2 rounded-lg">
                Agregar característica
            </button>

        </form>

        <!-- LISTADO -->
        <div class="bg-white p-6 rounded-xl border">
            <div class="flex justify-between items-end mb-3">
                <p class="font-semibold text-md">Caracteristicas cargadas</p>
            </div>

            <div class="flex gap-4 overflow-x-auto">

                @foreach ($propiedad->caracteristicas as $item)
                    <div class="bg-black/5 rounded-xl min-w-[200px] border relative ">

                        @if ($item->url)
                            <div class="min-w-[200px] h-32 rounded-t-xl overflow-hidden bg-gray-200">
                                <img src="{{ asset('storage/' . $item->url) }}"
                                class="w-full h-full object-cover">
                            </div>
                        @endif

                        <div class="p-4">
                            <p class="text-sm font-semibold mt-1">{{ $item->nombre }}</p>
                            <p class="text-xs text-gray-500">{{ $item->descripcion }}</p>
                        </div>

                        <!-- DELETE -->
                        <form action="{{ route('caracteristicas.destroy', $item->id) }}" method="POST"
                            class="absolute top-2 right-2">

                            @csrf
                            @method('DELETE')

                            <button onclick="return confirm('Eliminar característica?')"
                                class="bg-red-600 text-white w-6 h-6 rounded-full text-xs">
                                ✕
                            </button>

                        </form>

                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
