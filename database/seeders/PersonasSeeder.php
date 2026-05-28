<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Personas::create([
            'nombre y apellido' => 'admin principal',
            'telefono' => '123456789',
            'email'=> 'admin@admin.com',
            'password' => bcrypt('admin'),
            'perfiles_id' => 1,
            'estado' => true,
        ]);
    }
}
