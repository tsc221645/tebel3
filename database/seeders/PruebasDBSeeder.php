<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;

class PruebasDBSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
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
        */

        //Insertar productos
        DB::table('products')->insert([
            [
                'name' => 'AGUA DESTILADA',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'vida para la batería. Solución libre de iones (desionizada), para el buen funcionamiento de su batería. Para renovar el nivel del electrolito de baterías nuevas, cuando la pérdida es por evaporación.',
                'price' => 20.89, // Valor nulo para 'price'
                'category_id' => 9, //industrial
                'line_id' => 3, //Auto
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'Car Kool® 33%:',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Prediluido Es es un anticongelante de vida extendida basado en etilenglicol para motores de alto desempeño. Con Tecnología anticorrosiva que incorpora aditivos de rápida acción, para la protección de radiadores de hierro y aluminio.  Car Kool® 33% es una mezcla perfecta con alto desempeño en todas las condiciones climáticas, protege de las temperaturas extremas por su alto punto de ebullición y disminuye la necesidad de cambiar el refrigerante anualmente.  •	“Vida útil por 3 años”.    •	Especialmente para carros nuevos y de última generación.',
                'price' => 105.9, // 
                'category_id' => 7, //Automotriz
                'line_id' => 5, // Prodin
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'Car Kool® 50%',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es una fórmula concentrada que proporciona una máxima protección anticorrosiva y lubricante. Para motores de gasolina y diesel con radiadores de todo tipo de metal como hierro, aluminio, latón y/o acero. Car Kool® 50% cuenta con propiedades que proporcionan un sistema de refrigeración contra climas cálidos y fríos. Puede utilizarse en todas las marcas de vehículos, livianos y  de trabajo pesado.   •	Provee protección extendida por 5 años o 150,000 millas (341,000 km.) •	Listo para usarse, sin diluirlo con agua. •	Temperatura de congelamiento -37ºC y temperatura de ebullición + 173 ºC. •	Disminuye los costos de mantenimiento a largo plazo.',
                'price' => 105.9, // Valor nulo para 'price'
                'category_id' => 7, //automotriz
                'line_id' => 5, //Prodin
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'LIMPIA INYECTORES - DIESEL TREATMENT',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Lubrica partes vitales, protección contra el óxido y la corrosión, reduce el humo negro, extiende la vida de los inyectores de combustible, mantiene más limpios los inyectores, mejora el flujo de combustible, etc.',
                'price' => 19.52, // Valor nulo para 'price'
                'category_id' => 7, //automotriz
                'line_id' => 3, // Auto
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'ALCO GEL',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es un antibacterial para desinfectar manos y superficies. Está elaborado con alcohol al 70% por lo que mata el 99.9 % de virus y bacterias.',
                'price' => 130.50, // Valor nulo para 'price'
                'category_id' => 11, //limpieza
                'line_id' => 9, // limpio
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
        ]);
        
    }
}
