<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes'; //haciendo referencia a la tabla o migracion de clientes

    //el FILLABLE me permite definir los campos que el usuario podra visualizar y manipular en la interfaz
    protected $fillable = ['nombre', 'telefono', 'email', 'direccion'];

    public function propiedades() : BelongsToMany
    {
        return $this->belongsToMany(Propiedad::class);
    }

    public function transacciones() : HasMany
    {
        return $this->HasMany(Transaccion::class);
    }
}
