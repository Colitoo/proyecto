<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        // Crear categorias
        $consolas   = Categoria::create(['nombre' => 'Consolas']);
        $mandos     = Categoria::create(['nombre' => 'Mandos']);
        $portatiles = Categoria::create(['nombre' => 'Portatiles']);

        // Consolas
        $consolas->productos()->createMany([
            ['nombre' => 'Combo PlayStation 1', 'descripcion' => 'No dejen pasar la oportunidad de experimentar los origenes', 'precio' => 400.00, 'url_imagen' => 'img/play1.jpg'],
            ['nombre' => 'PlayStation 2',       'descripcion' => 'Para muchos la mejor de la historia',                        'precio' => 250.00, 'url_imagen' => 'img/play2.jpg'],
            ['nombre' => 'PlayStation 3',       'descripcion' => 'La primera consola de Sony con graficos HD',                 'precio' => 200.00, 'url_imagen' => 'img/PS3.jpg'],
            ['nombre' => 'Nintendo Wii',        'descripcion' => 'La consola más innovadora de Nintendo',                      'precio' => 150.00, 'url_imagen' => 'img/wii.jpg'],
            ['nombre' => 'GameCube',            'descripcion' => 'Una consola de sobremesa de Nintendo',                       'precio' => 400.00, 'url_imagen' => 'img/gamecube.jpg'],
        ]);

        // Mandos
        $mandos->productos()->createMany([
            ['nombre' => 'Mando play 1',              'descripcion' => 'Mando de play 1 original en buen estado', 'precio' => 20.00,  'url_imagen' => 'img/mandops1.jpg'],
            ['nombre' => 'Mando play 2',              'descripcion' => 'Mando de play 2 original en buen estado', 'precio' => 25.00,  'url_imagen' => 'img/mandops2.jpg'],
            ['nombre' => 'Mando play 3',              'descripcion' => 'Mando de play 3 original en buen estado', 'precio' => 25.00,  'url_imagen' => 'img/mandops3.jpg'],
            ['nombre' => 'Mando Wii Remote',          'descripcion' => 'Mando de wii original en buen estado',   'precio' => 20.00,  'url_imagen' => 'img/mandowii.jpg'],
            ['nombre' => 'Mando GameCube Controller', 'descripcion' => 'Mando de gamecube original',              'precio' => 25.00,  'url_imagen' => 'img/mandogamecube.jpg'],
        ]);

        // Portatiles
        $portatiles->productos()->createMany([
            ['nombre' => 'PSP',              'descripcion' => 'Una consola portatil que te permite jugar en cualquier lugar', 'precio' => 300.00, 'url_imagen' => 'img/psp.jpg'],
            ['nombre' => 'PlayStation Vita', 'descripcion' => 'La ultima consola portatil de sony',                          'precio' => 350.00, 'url_imagen' => 'img/psvita.jpg'],
            ['nombre' => 'Nintendo 3DS-XL',  'descripcion' => 'Una consola portatil de Nintendo con pantalla 3D',            'precio' => 200.00, 'url_imagen' => 'img/3DS.jpg'],
            ['nombre' => 'GameBoy Advance',  'descripcion' => 'La consola portátil más icónica de Nintendo',                 'precio' => 120.00, 'url_imagen' => 'img/gameboy.jpg'],
        ]);
    }
}
