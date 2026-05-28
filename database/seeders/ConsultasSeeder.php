<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Consulta::create([
            'nombre y apellido' => 'Consulta de prueba',
            'mail' => 'un@ejemplo.com',
            'telefono' => '123456789',
            'motivo' => 'Consulta de prueba',
            'plataforma' => 'General',
            'mensaje' => 'mensaje de prueba',
            'contestado' => false,
        ]);
    }
}
