<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nombre' => 'Mandos de consolas',
        ]);

        Categoria::create([
            'nombre' => 'Portátiles',
        ]);

        Categoria::create([
            'nombre' => 'Sobremesa',
        ]);
    }
}
