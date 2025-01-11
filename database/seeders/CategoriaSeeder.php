<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categorias')->insert([
            ['nome' => 'Música'],
            ['nome' => 'Teatro'],
            ['nome' => 'Cinema'],
            ['nome' => 'Exposição'],
            ['nome' => 'Dança'],
            ['nome' => 'Festa'],
            ['nome' => 'Feira'],
            ['nome' => 'Gastronomia'],
            ['nome' => 'Literatura'],
            ['nome' => 'Esporte'],
            ['nome' => 'Criança'],
            ['nome' => 'Outros'],
        ]);
    }
}
