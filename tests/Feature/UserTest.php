<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;
use App\Models\Category;

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
        //$category = Category::create(['name' => 'Brio Wax']);

        // Crear un producto asociado a la categoría
        $product = Product::create([
            'name' => 'PASTA PARA LUSTRAR',
            'description' => 'Es una mezcla de ceras cien por ciento naturales...',
            'price' => 10.99,
            'url_products' => '/images/pasta-para-lustrar.jpg',
            'category_id' => $category->id,
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

        // Verificar que la imagen del producto aparece en la página
        $response->assertSee('/images/pasta-para-lustrar.jpg');
    }
}