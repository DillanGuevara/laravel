<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'usuario', // Agrega aquí el campo 'usuario' y cualquier otro campo que desees permitir en la asignación masiva
        // Otros campos aquí...
    ];
}

