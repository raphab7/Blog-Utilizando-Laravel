<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            'categoria_id' => 1,
            'nome' => 'Detergente',
            'quantidade' => 15,
            'valor' => 2.90
        ]);

        DB::table('produtos')->insert([
            'categoria_id' => 1,
            'nome' => 'Alvejante',
            'quantidade' => 15,
            'valor' => 2.90
        ]);

        DB::table('produtos')->insert([
            'categoria_id' => 2,
            'nome' => 'Palha de aço',
            'quantidade' => 15,
            'valor' => 2.90
        ]);

        DB::table('produtos')->insert([
            'categoria_id' => 1,
            'nome' => 'Sabão em pedra',
            'quantidade' => 15,
            'valor' => 2.90
        ]);

        DB::table('produtos')->insert([
            'categoria_id' => 2,
            'nome' => 'Filtro de barro',
            'quantidade' => 15,
            'valor' => 500,
        ]);
    }
}
