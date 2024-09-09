<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    use HasFactory;
    protected $table = 'propiedades';//haciendo referencia a la tabla o migracion de propiedades
    protected $fillable = ['nombre', 'precio', 'tipo', 'ubicacion', 'superficie', 'descripcion', 'propietario_id', 'vendedor_id'];
}
