<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedad;

class PublicController extends Controller {
    public function inicio() {
        return view('welcome');
    }

    public function verPropiedades(){
        return view('propiedades');
    }

    public function verPropiedadPorId($id){
        $propiedad = Propiedad::with(['imagenes', 'caracteristicas'])->find($id);

        if (!$propiedad) {
            return redirect()
                ->route('todas-propiedades')
                ->with('error', 'Propiedad no encontrada.');
        }

        return view('propiedadPorId', compact('propiedad'));
    }
}
