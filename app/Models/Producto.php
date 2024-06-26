<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    
    protected $fillable = [
        
         'nombre',
         'cantidad',
         'precio',
         'descripcion',
         'marca',
         'agregado_fecha',
         'fecha_vencimiento',
         'categoria',
     ];
}
