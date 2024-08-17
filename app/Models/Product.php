<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'CODIGO_PT',
        'NOMBRE_PRODUCTO',
        'PRECIO',
        'FACTOR_CONVERSION_EXISTENCIA',
        'PESO_UNIDAD_MAYOR',
        'VOLUMEN_UNIDAD_MAYOR',
        'PRECIO_UNITARIO',
    ];
}
