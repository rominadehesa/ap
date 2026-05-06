<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagenPropiedad extends Model
{
    protected $table = 'imagen_propiedad';

    protected $fillable = [
        'url',
        'propiedad_id',
    ];

    public function propiedad()
    {
        return $this->belongsTo(Propiedad::class);
    }
}
