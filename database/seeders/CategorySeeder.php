<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Deportes',
            'description' => 'Categoria de deportes'
        ]);

        Category::create([
            'name' => 'Ventas',
            'description' => 'Categoria para venta de articulos varios'
        ]);
    }
}
