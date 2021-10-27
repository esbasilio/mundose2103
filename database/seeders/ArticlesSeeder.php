<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'category_id' => 1,
            'title' => 'titulo uno de deportes',
            'summary' => 'El equipo de Brasil juega contra EEUU',
            'image' => '*',
            'description' => 'Sera un partido amistoso',
            'author' => 'emilio'
        ]);

        Article::create([
            'category_id' => 1,
            'title' => 'Tenis a todo deporte',
            'summary' => 'Se iniciara un torneo de tenis en la ciudad de Cordoba',
            'image' => '*',
            'description' => 'El torneo estara dado entre las fechas ...',
            'author' => 'esb'
        ]);

        Article::create([
            'category_id' => 2,
            'title' => 'Se vende auto fiat',
            'summary' => 'auto en muy buen estado',
            'image' => '*',
            'description' => 'Auto fiat mod 2015 en excelente estado',
            'author' => 'Sebastian'
        ]);

        Article::create([
            'category_id' => 2,
            'title' => 'Se vende bicicleta',
            'summary' => 'Se vende bicicleta todo terreno',
            'image' => '*',
            'description' => 'Bici todo terreno rodado 28 ... mas descrip.',
            'author' => 'Sebastian'
        ]);

        Article::create([
            'category_id' => 2,
            'title' => 'PC gamer',
            'summary' => 'Se vende PC gamer',
            'image' => '*',
            'description' => 'Intel i7, placa de video de ultima generacion',
            'author' => 'vendedor'
        ]);
        Article::create([
            'category_id' => 2,
            'title' => 'combo',
            'summary' => 'combo de mouse y teclado',
            'image' => '*',
            'description' => 'Mouse y teclado gamer',
            'author' => 'vendedor'
        ]);
        Article::create([
            'category_id' => 2,
            'title' => 'Silla gamer',
            'summary' => 'Silla gamer',
            'image' => '*',
            'description' => 'silla gamer, con la compra auris de regalo',
            'author' => 'vendedor'
        ]);
    }
}
