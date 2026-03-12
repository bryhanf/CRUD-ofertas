<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = [
        'titulo', 
        'tienda', 
        'vigencia', 
        'precio_original', 
        'precio_descuento'
    ];
}