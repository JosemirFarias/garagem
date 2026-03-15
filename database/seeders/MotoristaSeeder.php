<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotoristaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Motorista::create([
            'nome' => 'Josemir',
            'cpf' => '123.456.789-12',
            'cnh' => '789456123',
            'data_nascimento' => '1989-10-24',
            'validade_cnh' => '2030-01-01',
            'telefone' => '(83) 12345-6789'
        ]);
    }
}
