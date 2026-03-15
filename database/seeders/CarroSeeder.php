<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Carro::create([
            'marca' => 'Toyota',
            'modelo' => 'Corolla',
            'ano' => 2022,
            'placa' => 'ABC-1234',
            'motorista_id' => 1
        ]);

        \App\Models\Carro::create([
            'marca' => 'Volkswagen',
            'modelo' => 'Gol',
            'ano' => 2015,
            'placa' => 'XYZ-9999',
            'motorista_id' => null
        ]);
    }
}
