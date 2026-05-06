<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedad;
use App\Models\ImagenPropiedad;
use App\Models\CaracteristicaPropiedad;
use Illuminate\Support\Facades\Storage;

class PropiedadController extends Controller
{

    public function index()
    {
        $propiedades = Propiedad::with('imagenes')
            ->latest()
            ->paginate(9);

        return view('private.propiedades', compact('propiedades'));
    }

    public function create()
    {
        return view('private.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'titulo' => 'required|string|max:255',
                'tipo' => 'required|string',
                'operacion' => 'required|string',
                'direccion' => 'required|string',
                'ciudad' => 'required|string',

                'zona' => 'nullable|string',
                'barrio' => 'nullable|string',

                'superficie_total' => 'nullable|numeric',
                'superficie_cubierta' => 'nullable|numeric',

                'ambientes' => 'nullable|integer',
                'dormitorios' => 'nullable|integer',
                'banios' => 'nullable|integer',
                'cant_pisos' => 'nullable|integer',

                'estado_inmueble' => 'nullable|string',
                'descripcion' => 'nullable|string',
                'slogan' => 'nullable|string',

                'imagen_portada' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            ],
            [
                'required' => 'El campo :attribute es obligatorio.',
            ],
            [
                'titulo' => 'título',
                'tipo' => 'tipo de propiedad',
                'operacion' => 'operación',
                'direccion' => 'dirección',
                'ciudad' => 'ciudad',
                'imagen_portada' => 'imagen',
            ]
        );

        // 📸 GUARDAR IMAGEN
        if ($request->hasFile('imagen_portada')) {
            $path = $request->file('imagen_portada')->store('propiedades', 'public');
            $data['imagen_portada_url'] = $path;
        }

        // ✅ BOOLEANOS (todos los de tu migración)
        $booleans = [
            // servicios
            'tiene_luz',
            'tiene_gas_natural',
            'tiene_gas_garrafa',
            'tiene_agua_corriente',
            'tiene_cloaca',
            'tiene_internet',
            'tiene_pavimento',

            // comodidades
            'tiene_cochera',
            'tiene_patio',
            'tiene_jardin',
            'tiene_pileta',
            'tiene_quincho',
            'tiene_terraza',
            'tiene_balcon',
            'tiene_ascensor',
            'tiene_seguridad',
            'tiene_parrilla',
            'tiene_calefaccion',
            'tiene_aire_acondicionado',

            // extra
            'apto_credito'
        ];

        foreach ($booleans as $field) {
            $data[$field] = $request->boolean($field);
        }

        Propiedad::create($data);

        return redirect()
            ->route('propiedades.index')
            ->with('success', 'Propiedad creada correctamente');
    }

    public function show($id)
    {
        $propiedad = Propiedad::findOrFail($id);
        return view('private.show', compact('propiedad'));
    }

    public function galeria($id)
    {
        $propiedad = Propiedad::findOrFail($id);
        return view('private.galeria', compact('propiedad'));
    }

    public function guardarGaleria(Request $request, $id)
    {
        $propiedad = Propiedad::findOrFail($id);

        $request->validate([
            'imagenes.*' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        foreach ($request->file('imagenes') as $imagen) {
            $path = $imagen->store('propiedades', 'public');

            $propiedad->imagenes()->create([
                'url' => $path
            ]);
        }

        return back()->with('success', 'Imágenes cargadas correctamente');
    }

    public function quitarImagen($id)
    {
        $imagen = ImagenPropiedad::findOrFail($id);

        // borrar archivo físico
        if ($imagen->url && Storage::disk('public')->exists($imagen->url)) {
            Storage::disk('public')->delete($imagen->url);
        }

        // borrar registro en BD
        $imagen->delete();

        return back()->with('success', 'Imagen eliminada');
    }

    public function caracteristicas($id)
    {
        $propiedad = Propiedad::findOrFail($id);
        return view('private.caracteristicas', compact('propiedad'));
    }

    public function guardarCaracteristica(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'icono' => 'nullable|image|mimes:png,jpg,svg,webp|max:2048'
        ]);

        $propiedad = Propiedad::findOrFail($id);

        $path = null;
        if ($request->hasFile('icono')) {
            $path = $request->file('icono')->store('caracteristicas', 'public');
        }

        $propiedad->caracteristicas()->create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'url' => $path
        ]);

        return back()->with('success', 'Característica agregada');
    }

    public function eliminarCaracteristica($id)
    {
        $item = CaracteristicaPropiedad::findOrFail($id);

        if ($item->url && Storage::disk('public')->exists($item->url)) {
            Storage::disk('public')->delete($item->url);
        }

        $item->delete();

        return back()->with('success', 'Característica eliminada');
    }

    public function edit($id)
    {
        $propiedad = Propiedad::findOrFail($id);

        return view('private.create', compact('propiedad'));
    }

    public function update(Request $request, $id)
    {
        $propiedad = Propiedad::findOrFail($id);

        $data = $request->validate([
            'titulo' => 'required|string|max:255',
            'tipo' => 'required|string',
            'operacion' => 'required|string',
            'direccion' => 'required|string',
            'ciudad' => 'required|string',
            'zona' => 'nullable|string',
            'barrio' => 'nullable|string',

            'superficie_total' => 'nullable|numeric',
            'superficie_cubierta' => 'nullable|numeric',
            'ambientes' => 'nullable|numeric',
            'dormitorios' => 'nullable|numeric',
            'banios' => 'nullable|numeric',
            'cant_pisos' => 'nullable|numeric',

            'estado_inmueble' => 'nullable|string',
            'descripcion' => 'nullable|string',
            'slogan' => 'nullable|string',

            'imagen_portada' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // 🔥 CHECKBOXES (servicios + comodidades + apto credito)
        $checkboxes = [
            'tiene_luz',
            'tiene_gas_natural',
            'tiene_gas_garrafa',
            'tiene_agua_corriente',
            'tiene_cloaca',
            'tiene_internet',
            'tiene_pavimento',

            'tiene_cochera',
            'tiene_patio',
            'tiene_jardin',
            'tiene_pileta',
            'tiene_quincho',
            'tiene_terraza',
            'tiene_balcon',
            'tiene_ascensor',
            'tiene_seguridad',
            'tiene_parrilla',
            'tiene_calefaccion',
            'tiene_aire_acondicionado',

            'apto_credito',
        ];

        foreach ($checkboxes as $field) {
            $data[$field] = $request->input($field, 0);
        }

        // 🖼️ IMAGEN PORTADA (si se cambia)
        if ($request->hasFile('imagen_portada')) {

            // borrar anterior (opcional pero recomendado)
            if ($propiedad->imagen_portada_url && Storage::disk('public')->exists($propiedad->imagen_portada_url)) {
                Storage::disk('public')->delete($propiedad->imagen_portada_url);
            }

            $data['imagen_portada_url'] = $request->file('imagen_portada')
                ->store('propiedades', 'public');
        }

        // 💾 actualizar todo
        $propiedad->update($data);

        return redirect()
            ->route('propiedades.edit', $propiedad->id)
            ->with('success', 'Propiedad actualizada correctamente');
    }

    public function destroy($id) {
        $propiedad = Propiedad::findOrFail($id);

        if ($propiedad->imagen_portada_url && Storage::disk('public')->exists($propiedad->imagen_portada_url)) {
            Storage::disk('public')->delete($propiedad->imagen_portada_url);
        }

        foreach ($propiedad->imagenes as $img) {
            if ($img->url && Storage::disk('public')->exists($img->url)) {
                Storage::disk('public')->delete($img->url);
            }
            $img->delete();
        }

        foreach ($propiedad->caracteristicas as $car) {
            if ($car->url && Storage::disk('public')->exists($car->url)) {
                Storage::disk('public')->delete($car->url);
            }
            $car->delete();
        }

        $propiedad->delete();

        return redirect()
            ->route('propiedades.index')
            ->with('success', 'Propiedad eliminada correctamente');
    }
}
