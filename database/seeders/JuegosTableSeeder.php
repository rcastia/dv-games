<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JuegosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('juegos')->insert([
            [
                'nombre' => 'Red Dead Redemption 2',
                'descripcion' => 'Red Dead Redemption 2 es un videojuego de acción-aventura western, en un mundo abierto y en perspectiva de primera y tercera persona, ​con componentes para un jugador y multijugador.​ Fue desarrollado por Rockstar Games. Es la precuela de Red Dead Redemption y el tercer juego de la saga Red Dead.',
                'precio' => 249999,
                'consola_id' => 1,
                'formato_id' => 2,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'nombre' => 'The Legend of Zelda: Breath of the Wild',
                'descripcion' => 'The Legend of Zelda: Breath of the Wild es un videojuego de acción-aventura de 2017 de la serie The Legend of Zelda, desarrollado por la filial Nintendo EPD en colaboración con Monolith Soft y publicado por Nintendo para las consolas Wii U y Nintendo Switch.',
                'precio' => 239999,
                'consola_id' => 3,
                'formato_id' => 2,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'nombre' => 'God of War',
                'descripcion' => 'God of War es un videojuego de acción-aventura desarrollado por SCE Santa Monica Studio y publicado por Sony Interactive Entertainment. Su lanzamiento se produjo el 20 de abril de 2018, en exclusiva para la consola PlayStation 4.',
                'precio' => 299999,
                'consola_id' => 1,
                'formato_id' => 2,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'nombre' => 'Doom Eternal',
                'descripcion' => 'Doom Eternal es un videojuego de acción y disparos en primera persona desarrollado por id Software y publicado por Bethesda Softworks.​ Es el quinto título principal de la serie Doom y la secuela directa del juego estrenado en 2016.',
                'precio' => 149999,
                'consola_id' => 2,
                'formato_id' => 2,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'nombre' => 'Minecraft',
                'descripcion' => 'Minecraft es un videojuego de construcción, de tipo «mundo abierto» o sandbox creado originalmente por el sueco Markus Persson (conocido comúnmente como "Notch"),2​ y posteriormente desarrollado por su empresa, Mojang Studios. Fue lanzado públicamente el 17 de mayo de 2009, después de diversos cambios fue lanzada su versión completa el 18 de noviembre de 2011.',
                'precio' => 89999,
                'consola_id' => 2,
                'formato_id' => 1,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'nombre' => 'Super Smash Bros. Ultimate',
                'descripcion' => 'Super Smash Bros. Ultimate es un videojuego de lucha crossover de la serie Super Smash Bros. desarrollada por Bandai Namco Games y Sora Ltd. y publicado por Nintendo. Este salió a la venta para Nintendo Switch a nivel mundial el 7 de diciembre de 2018.',
                'precio' => 149999,
                'consola_id' => 3,
                'formato_id' => 2,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'nombre' => 'Spiderman',
                'descripcion' => 'Marvel Spider-Man es un videojuego de acción y aventura basado en el popular superhéroe hómonimo de la editorial Marvel Comics.​ Fue desarrollado por Insomniac Games y publicado por Sony Interactive Entertainment en exclusiva para la consola PlayStation 4.​',
                'precio' => 279999,
                'consola_id' => 1,
                'formato_id' => 2,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'nombre' => 'Just Cause 4',
                'descripcion' => 'Just Cause 4 es un videojuego perteneciente al género de acción y aventura desarrollado por la empresa Avalanche Studios y publicado por Square Enix. Es el cuarto videojuego de la serie Just Cause y la secuela de Just Cause 3 del año 2015.',
                'precio' => 99999,
                'consola_id' => 2,
                'formato_id' => 1,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'nombre' => 'Mario Kart 8 Deluxe',
                'descripcion' => 'Mario Kart 8 Deluxe es un videojuego de carreras desarrollado y publicado por Nintendo para la consola Nintendo Switch. Es la undécima entrega de la serie Mario Kart, novena en consolas de Nintendo, lanzado mundialmente el 28 de abril de 2017. Cuenta con todo lo visto previamente en Mario Kart 8.',
                'precio' => 349999,
                'consola_id' => 3,
                'formato_id' => 2,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'nombre' => 'Uncharted 4',
                'descripcion' => 'Uncharted 4: El desenlace del ladrón, es un videojuego de acción-aventura en tercera persona, lanzado el 10 de mayo de 2016, distribuido por Sony Computer Entertainment y desarrollado por Naughty Dog exclusivamente para PlayStation 4.',
                'precio' => 1299,
                'consola_id' => 1,
                'formato_id' => 1,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'nombre' => 'Animal Crossing',
                'descripcion' => 'Animal crossing es una serie de videojuegos de simulación de vida publicada por Nintendo y creada por Katsuya Eguchi y Hisashi Nogami, ​​​​​ en la que el jugador vive en un pueblo habitado por animales antropomórficos, llevando a cabo diversas actividades.',
                'precio' => 229999,
                'consola_id' => 3,
                'formato_id' => 1,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'nombre' => 'Battlefield 1',
                'descripcion' => 'Battlefield 1 es un videojuego de disparos y acción bélica en primera persona. El título fue desarrollado por DICE y distribuido mundialmente por Electronic Arts para PlayStation 4.',
                'precio' => 2299,
                'consola_id' => 1,
                'formato_id' => 2,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
        ]);
    }
}
