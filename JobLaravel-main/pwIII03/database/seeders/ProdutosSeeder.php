<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            'nome' => 'caloi',
            'quantidade' => 50,
            'valor' => 35.90,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'patinete',
            'quantidade' => 52,
            'valor' => 35.21,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'patins',
            'quantidade' => 66,
            'valor' => 108.21,
        ]);
    }
}
