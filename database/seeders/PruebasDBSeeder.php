<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Importar el facade DB

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Insertar categorías
        DB::table('categories')->insert([
            ['name' => 'Automotriz'],
            ['name' => 'Hogar'],
            ['name' => 'Industrial'],
            ['name' => 'Ferreteria'],
            ['name' => 'Limpieza']
        ]);

        // Insertar lineas
        DB::table('lines')->insert([
            ['name' => 'Auto', 'line_description' => 'Productos de la linea Auto'],
            ['name' => 'Visol', 'line_description' => 'Productos de la linea Visol'],
            ['name' => 'Prodin', 'line_description' => 'Productos de la linea Prodin'],
            ['name' => 'Shinola', 'line_description' => 'Productos de la linea Shinola'],
            ['name' => 'InstaWax', 'line_description' => 'Productos de la linea InstaWax'],
            ['name' => 'Gomy', 'line_description' => 'Productos de la linea Gomy'],
            ['name' => 'Limpio', 'line_description' => 'Productos de la linea Limpio'],
        ]);

        /* Insertar productos
        DB::table('products')->insert([
            [
                'name' => 'PASTA PARA LUSTRAR',
                'url_products' => null, // Valor nulo para 'url_products'
                'description' => 'Es una mezcla de ceras cien por ciento naturales que producen una capa protectora de alta duración resistente a rayones menores así como a la penetración y crecimiento de mohos en las superficies en que es aplicada. Recomendada para abrillantar pisos de cemento, madera, parquet, linolio, granito y otros.',
                'price' => null, // Valor nulo para 'price'
                'category_id' => 1,
                'line_id' => 1, // Asociado con la primera línea insertada
                'popular' => false, // Valor predeterminado para 'popular'
            ],
        ]);
        */
    }
}
