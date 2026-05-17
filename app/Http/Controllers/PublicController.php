<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedad;

class PublicController extends Controller
{
    public function inicio()
    {
        $propiedades = Propiedad::with('imagenes')->latest()->limit(6)->get();
        return view('welcome')->with('propiedades', $propiedades);
    }

    public function verPropiedades(Request $request)
{
    $query = Propiedad::query();

    // Tipo
    if ($request->filled('tipo')) {
        $query->where('tipo', $request->tipo);
    }

    // Ciudad
    if ($request->filled('ciudad')) {
        $query->where('ciudad', 'LIKE', '%' . $request->ciudad . '%');
    }

    // Ambientes
    if ($request->filled('ambientes')) {

        if ($request->ambientes >= 6) {
            $query->where('ambientes', '>=', 6);
        } else {
            $query->where('ambientes', $request->ambientes);
        }
    }

    // Superficie mínima
    if ($request->filled('m2_min')) {
        $query->where('superficie_total', '>=', $request->m2_min);
    }

    // Superficie máxima
    if ($request->filled('m2_max')) {
        $query->where('superficie_total', '<=', $request->m2_max);
    }

    // Comodidades
    if ($request->filled('pileta')) {
        $query->where('tiene_pileta', 1);
    }

    if ($request->filled('cochera')) {
        $query->where('tiene_cochera', 1);
    }

    if ($request->filled('parrilla')) {
        $query->where('tiene_parrilla', 1);
    }

    if ($request->filled('jardin')) {
        $query->where('tiene_jardin', 1);
    }

    if ($request->filled('terraza')) {
        $query->where('tiene_terraza', 1);
    }

    if ($request->filled('seguridad')) {
        $query->where('tiene_seguridad', 1);
    }

    $propiedades = $query->latest()->paginate(10);

    return view('propiedades', compact('propiedades'));
}

    public function verPropiedadPorId($id)
    {
        $propiedad = Propiedad::with(['imagenes', 'caracteristicas'])->find($id);

        if (!$propiedad) {
            return redirect()
                ->route('todas-propiedades')
                ->with('error', 'Propiedad no encontrada.');
        }

        return view('propiedadPorId', compact('propiedad'));
    }

    public function quienesSomos()
    {
        return view('quienessomos');
    }
}
