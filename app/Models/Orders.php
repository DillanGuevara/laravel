<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'nombre', // Agrega aquí el campo 'nombre' y cualquier otro campo que desees permitir en la asignación masiva
        // Otros campos aquí...
    ];
}
