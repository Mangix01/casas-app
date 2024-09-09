<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes'; //haciendo referencia a la tabla o migracion de clientes

    //el FILLABLE me permite definir los campos que el usuario podra visualizar y manipular en la interfaz
    protected $fillable = ['nombre', 'telefono', 'email', 'direccion'];
}
