<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Perfiles::create([
            'descripcion' => 'Administrador',
        ]);

        \App\Models\Perfiles::create([
            'descripcion' => 'Usuario',
        ]);
    }
}
