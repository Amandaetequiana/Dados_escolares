<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'nome' => 'Tatiane',
        'endereco' => 'Av. Imperador',
        'serie' => 3,
        'turma' => 'Novotec',
      ]);
      User::create([
        'nome' => 'Bruna',
        'endereco' => 'Av. Paulista',
        'serie' => 3,
        'turma' => 'Novotec',
      ]);
      User::create([
        'nome' => 'Thiago',
        'endereco' => 'Av. Águia de Haia',
        'serie' => 3,
        'turma' => 'Novotec',
      ]);
    }
}
