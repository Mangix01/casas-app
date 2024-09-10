<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cliente = new Cliente();
        $cliente->nombre = 'Karen Rojas';
        $cliente->telefono = '36528995';
        $cliente->email = 'karen@gmail.com';
        $cliente->direccion = 'Av. Lirios';
        $cliente->save();

        $cliente = new Cliente();
        $cliente->nombre = 'Juan Miguel';
        $cliente->telefono = '56223223';
        $cliente->email = 'juan@gmail.com';
        $cliente->direccion = 'Av. Lirios';
        $cliente->save();

        $cliente = new Cliente();
        $cliente->nombre = 'Alex Medrano';
        $cliente->save();
    }
}
