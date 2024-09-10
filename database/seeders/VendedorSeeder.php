<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendedor;
use Illuminate\Support\Facades\DB;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //FORMATO ELOQUENT
        $vendedor = new Vendedor();
        $vendedor->nombre = 'William Castro';
        $vendedor->dni = '32568971';
        $vendedor->telefono = '774710789';
        $vendedor->codigo = 'V-33458';
        $vendedor->save();

        $vendedor = new Vendedor();
        $vendedor->nombre = 'Ana Suarez';
        $vendedor->dni = '78569523';
        $vendedor->telefono = '65897422';
        $vendedor->codigo = 'V-333344';
        $vendedor->save();

        //FORMATO CONSTRUCTOR DE BASE DE DATOS DE LARAVEL
        DB::table('vendedores')->insert(['nombre' => 'Marisol Fernandez','dni' => '23658974','codigo' => 'V-98756']);
    } 
}
