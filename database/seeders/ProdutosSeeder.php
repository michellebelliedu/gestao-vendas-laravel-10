<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    public function run(): void
    {
        Produto::insert([
            [
                'nome' => 'Bacon',
                'valor' => '12.50',
            ],
            [
                'nome' => 'Couve',
                'valor' => '10.00',
            ],
            [
                'nome' => 'Leite',
                'valor' => '4.50',
            ],
            [
                'nome' => 'Manteiga',
                'valor' => '17.88',
            ],

        ]);
    }
}
