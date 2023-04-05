<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comentarios')->insert([
            'postagem_id' => 1,
            'conteudo' => 'Primeira postagem - primeiro comentario',
        ]);

        DB::table('comentarios')->insert([
            'postagem_id' => 1,
            'conteudo' => 'Primeira postagem - segundo comentario',
        ]);

        DB::table('comentarios')->insert([
            'postagem_id' => 2,
            'conteudo' => 'Segunda postagem - primeiro comentario',
        ]);
    }
}
