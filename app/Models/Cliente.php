<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [//para la asignacion masiva en el formulario
        'nombreCompleto',
        'telefono',
        'email',
        'direccion',
        'genero',
        'fechaNacimiento',
        'formaPago',
        'estadoCliente',
    ];
}
