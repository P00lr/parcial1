<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [//para la asignacion masiva en el formulario
        'nombreCompleto', 
        'ci', 
        'telefono', 
        'fechaNacimiento', 
        'email', 
        'direccion', 
        'cargo', 
        'salario'
    ];
}
