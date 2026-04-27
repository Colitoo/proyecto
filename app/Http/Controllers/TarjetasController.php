<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarjetasController extends Controller
{
    public function ver_tarjetas(){

        $productos = [
            [
                'nombre' => 'Combo PlayStation 1',
                'descripcion' => 'No dejen pasar la portunidad de experimentar los origenes de lo que conocemos hoy dia',
                'precio' => '$400.00',
                'imagen' => 'img/play1.jpg'
            ],
            [
                'nombre' => 'Mando play 1',
                'descripcion' => 'Mando de play 1 original en buen estado, probado y funcionando al 100%',
                'precio' => '$20.00',
                'imagen' => 'img/mandops1.jpg'
            ],
            [
                'nombre' => 'PlayStation 2',
                'descripcion' => 'Para muchos la mejor de la historia, el catalogo mas iconico incluido. No dejen pasar la oportunidad',
                'precio' => '$250.00',
                'imagen' => 'img/play2.jpg'
            ],
            [
                'nombre' => 'Mando play 2',
                'descripcion' => 'Mando de play 2 original en buen estado, probado y funcionando al 100%',
                'precio' => '$25.00',
                'imagen' => 'img/mandops2.jpg'
            ],
            [
                'nombre' => 'PlayStation 3',
                'descripcion' => 'La primera consola de Sony con graficos HD, gran oportunidad para los amantes de la tecnologia y los juegos de esa epoca',
                'precio' => '$200.00',
                'imagen' => 'img/PS3.jpg'
            ],
            [
                'nombre' => 'Mando play 3',
                'descripcion' => 'Mando de play 3 original en buen estado, probado y funcionando al 100%',
                'precio' => '$25.00',
                'imagen' => 'img/mandops3.jpg'
            ],
            [
                'nombre' => 'PSP (PlayStation Portable)',
                'descripcion' => 'Una consola portatil que te permite jugar en cualquier lugar, con un excelente rendimiento y una gran variedad de juegos',
                'precio' => '$300.00',
                'imagen' => 'img/psp.jpg'
            ],
            [
                'nombre' => 'PlayStation Vita',
                'descripcion' => 'La ultima consola portatil de sony, con una pantalla tactil y una gran variedad de juegos',
                'precio' => '$350.00',
                'imagen' => 'img/psvita.jpg'
            ],
            [
                'nombre' => 'Nintendo 3DS-XL',
                'descripcion' => 'Una consola portatil de Nintendo, con una gran variedad de juegos y pantalla 3D',
                'precio' => '$200.00',
                'imagen' => 'img/3DS.jpg'

            ],
            [
                'nombre' => 'GameBoy Advance',
                'descripcion' => 'La consola portátil más icónica de Nintendo, con una gran variedad de juegos y pantalla a color',
                'precio' => '$120.00', 
                'imagen' => 'img/gameboy.jpg'
            ],
            [
                'nombre' => 'Nintendo Wii',
                'descripcion' => 'La consola más innovadora de Nintendo, con una gran variedad de juegos y una experiencia de juego única. incluiye mando y juegos!!',
                'precio' => '$150.00',
                'imagen' => 'img/wii.jpg'
            ],
            [
                'nombre' => 'Mando Wii Remote',
                'descripcion' => 'Mando de wii original en buen estado, probado y funcionando al 100%',
                'precio' => '$20.00',
                'imagen' => 'img/mandowii.jpg'
            ],
            [
                'nombre' => 'GameCube',
                'descripcion' => 'Una consola de sobremesa de Nintendo, con una gran variedad de juegos y una experiencia de juego única',
                'precio' => '$400.00',
                'imagen' => 'img/gamecube.jpg'
            ],
            [
                'nombre' => 'Mando GameCube Controller',
                'descripcion' => 'Mando de gamecube original en buen estado, probado y funcionando al 100%, compatible con la Nintendo wii',
                'precio' => '$25.00',
                'imagen' => 'img/mandogamecube.jpg'
            ]
        ];


        return view('frontend.productos', compact('productos'));
    }

    public function ver_mandos()
    {
        $mandos = [
            [
                'nombre' => 'Mando play 1',
                'descripcion' => 'Mando de play 1 original en buen estado, probado y funcionando al 100%',
                'precio' => '$20.00',
                'imagen' => 'img/mandops1.jpg'
            ],
            [
                'nombre' => 'Mando play 2',
                'descripcion' => 'Mando de play 2 original en buen estado, probado y funcionando al 100%',
                'precio' => '$25.00',
                'imagen' => 'img/mandops2.jpg'
            ],
            [
                'nombre' => 'Mando play 3',
                'descripcion' => 'Mando de play 3 original en buen estado, probado y funcionando al 100%',
                'precio' => '$25.00',
                'imagen' => 'img/mandops3.jpg'
            ],
            [
                'nombre' => 'Mando Wii Remote',
                'descripcion' => 'Mando de wii original en buen estado, probado y funcionando al 100%',
                'precio' => '$20.00',
                'imagen' => 'img/mandowii.jpg'
            ],
            [
                'nombre' => 'Mando GameCube Controller',
                'descripcion' => 'Mando de gamecube original en buen estado, probado y funcionando al 100%, compatible con la Nintendo wii',
                'precio' => '$25.00',
                'imagen' => 'img/mandogamecube.jpg'
            ]
        ];

        return view('frontend.mandos', compact('mandos'));
    }

    public function ver_consolas()
    {
        $consolas = [
            [
                'nombre' => 'Combo PlayStation 1',
                'descripcion' => 'No dejen pasar la oportunidad de experimentar los origenes de lo que conocemos hoy dia',
                'precio' => '$400.00',
                'imagen' => 'img/play1.jpg'
            ],
            [
                'nombre' => 'PlayStation 2',
                'descripcion' => 'Para muchos la mejor de la historia, el catalogo mas iconico incluido. No dejen pasar la oportunidad',
                'precio' => '$250.00',
                'imagen' => 'img/play2.jpg'
            ],
            [
                'nombre' => 'PlayStation 3',
                'descripcion' => 'La primera consola de Sony con graficos HD, gran oportunidad para los amantes de la tecnologia y los juegos de esa epoca',
                'precio' => '$200.00',
                'imagen' => 'img/PS3.jpg'
            ],
            [
                'nombre' => 'Nintendo Wii',
                'descripcion' => 'La consola más innovadora de Nintendo, con una gran variedad de juegos y una experiencia de juego única. incluye mando y juegos!!',
                'precio' => '$150.00',
                'imagen' => 'img/wii.jpg'
            ],
            [
                'nombre' => 'GameCube',
                'descripcion' => 'Una consola de sobremesa de Nintendo, con una gran variedad de juegos y una experiencia de juego única',
                'precio' => '$400.00',
                'imagen' => 'img/gamecube.jpg'
            ]
        ];

        return view('frontend.consolas', compact('consolas'));
    }

    public function ver_portatiles()
    {
        $portatiles = [
            [
                'nombre' => 'PSP (PlayStation Portable)',
                'descripcion' => 'Una consola portatil que te permite jugar en cualquier lugar, con un excelente rendimiento y una gran variedad de juegos',
                'precio' => '$300.00',
                'imagen' => 'img/psp.jpg'
            ],
            [
                'nombre' => 'PlayStation Vita',
                'descripcion' => 'La ultima consola portatil de sony, con una pantalla tactil y una gran variedad de juegos',
                'precio' => '$350.00',
                'imagen' => 'img/psvita.jpg'
            ],
            [
                'nombre' => 'Nintendo 3DS-XL',
                'descripcion' => 'Una consola portatil de Nintendo, con una gran variedad de juegos y pantalla 3D',
                'precio' => '$200.00',
                'imagen' => 'img/3DS.jpg'
            ],
            [
                'nombre' => 'GameBoy Advance',
                'descripcion' => 'La consola portátil más icónica de Nintendo, con una gran variedad de juegos y pantalla a color',
                'precio' => '$120.00',
                'imagen' => 'img/gameboy.jpg'
            ]
        ];

        return view('frontend.portatiles', compact('portatiles'));
    }
}
