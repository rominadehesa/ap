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

        if ($request->filled('operacion')) {
            $query->where('operacion', $request->operacion);
        }

        if ($request->filled('barrio')) {
            $query->where('barrio', 'LIKE', '%' . $request->barrio . '%');
        }

        if ($request->filled('dormitorios')) {

            if ($request->dormitorios >= 5) {
                $query->where('dormitorios', '>=', 5);
            } else {
                $query->where('dormitorios', $request->dormitorios);
            }
        }

        if ($request->filled('buscar')) {

            $query->where(function ($q) use ($request) {

                $q->where('titulo', 'LIKE', '%' . $request->buscar . '%')
                    ->orWhere('descripcion', 'LIKE', '%' . $request->buscar . '%')
                    ->orWhere('ciudad', 'LIKE', '%' . $request->buscar . '%')
                    ->orWhere('barrio', 'LIKE', '%' . $request->buscar . '%')
                    ->orWhere('slogan', 'LIKE', '%' . $request->buscar . '%');
            });
        }

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

        if ($request->filled('apto_credito')) {
            $query->where('apto_credito', 1);
        }

        $propiedades = $query->latest()->get();
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
}
