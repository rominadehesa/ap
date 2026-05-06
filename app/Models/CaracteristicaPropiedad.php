<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaracteristicaPropiedad extends Model {

    protected $table = 'caracteristica_propiedad';

    protected $fillable = [
        'nombre',
        'descripcion',
        'url',
        'propiedad_id',
    ];

    public function propiedad()
    {
        return $this->belongsTo(Propiedad::class);
    }
}
