<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    protected $table = 'propiedades';
    protected $fillable = [
        'titulo',
        'tipo',
        'operacion',
        'direccion',
        'ciudad',
        'zona',
        'barrio',
        'superficie_total',
        'superficie_cubierta',
        'ambientes',
        'dormitorios',
        'banios',
        'cant_pisos',
        'estado_inmueble',
        'descripcion',
        'slogan',
        'imagen_portada_url',

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
        'apto_credito',
    ];

    public function imagenes()
    {
        return $this->hasMany(ImagenPropiedad::class);
    }

    public function caracteristicas()
    {
        return $this->hasMany(CaracteristicaPropiedad::class);
    }
}
