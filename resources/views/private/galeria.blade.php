@extends('private.admin')

@section('content')
    <div class="max-w-4xl mx-auto">

        <h1 class="text-2xl font-bold mb-6">
            Galería de {{ $propiedad->titulo }}
        </h1>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- FORM -->
        <form action="{{ route('propiedades.galeria.store', $propiedad->id) }}" method="POST" enctype="multipart/form-data"
            class="bg-white p-6 rounded-xl border mb-6">

            @csrf

            <input type="file" name="imagenes[]" multiple class="input mb-4" required>

            <button class="bg-[#1a0a19] text-white px-4 py-2 rounded-lg">
                Subir imágenes
            </button>
        </form>

        <!-- GALERIA -->
        <hr>

        <div>
            <h2 class="text-xl font-bold py-6">Imágenes ya cargadas</h2>

            <div class="grid grid-cols-4 gap-4">
                @foreach ($propiedad->imagenes as $img)
                    <div class="relative group">

                        <img src="{{ asset('storage/' . $img->url) }}" class="w-full h-32 object-cover rounded-lg">

                        <!-- BOTON ELIMINAR -->
                        <form action="{{ route('imagenes.destroy', $img->id) }}" method="POST"
                            class="absolute top-2 right-2 opacity-1 transition">

                            @csrf
                            @method('DELETE')

                            <button onclick="return confirm('¿Eliminar imagen?')"
                                class="bg-red-600 text-white w-7 h-7 rounded-full text-sm flex items-center justify-center hover:bg-red-600">
                                ✕
                            </button>
                        </form>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
