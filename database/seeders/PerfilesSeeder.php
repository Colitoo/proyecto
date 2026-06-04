<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perfiles;

class PerfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Perfiles::create([
            'descripcion' => 'Administrador',
        ]);

        Perfiles::create([
            'descripcion' => 'Usuario',
        ]);
    }
}
