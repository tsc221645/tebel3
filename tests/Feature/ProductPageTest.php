<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;
use App\Models\Category;
use App\Models\Line; // Asegúrate de tener un modelo para 'Line' si es necesario

class ProductPageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the product page displays products correctly.
     *
     * @return void
     */
    public function test_product_page_displays_products_correctly()
    {
        // Crear una categoría
        $category = Category::create(['name' => 'Brio Wax']);

        // Crear una línea (opcional si 'line_id' puede ser nulo)
        $line = Line::create(['name' => 'Default Line', 'line_description' => 'Default']);

        // Crear un producto asociado a la categoría y la línea
        $product = Product::create([
            'name' => 'PASTA PARA LUSTRAR',
            'description' => 'Es una mezcla de ceras cien por ciento naturales...',
            'price' => 10.99,
            'url_products' => '/imasges/pasta-para-lustrar.jpg',
            'category_id' => $category->id,
            'line_id' => $line->id, // Usar 'null' si no es necesario
            'popular' => true, // Usar 'false' si no es popular
        ]);

        // Hacer una petición GET a la página de productos
        $response = $this->get('/products');

        // Verificar que la respuesta es exitosa
        $response->assertStatus(200);

        // Verificar que el nombre del producto aparece en la página
        $response->assertSeeText('PASTA PARA LUSTRAR');

        // Verificar que la descripción del producto aparece en la página
        $response->assertSeeText('Es una mezcla de ceras cien por ciento naturales...');

        // Verificar que el precio del producto aparece en la página
        $response->assertSeeText('10.99');

        /*
        // Verificar que la imagen del producto aparece en la página
        $response->assertSee('/images/pasta-para-lustrar.jpg');
        */

        // Verificar que el producto aparece como popular (si es necesario en tu lógica)
        if ($product->popular) {
            $response->assertSeeText('Popular');
        }
    }
}