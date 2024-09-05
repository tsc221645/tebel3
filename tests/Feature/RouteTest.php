<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteTest extends TestCase
{
    use RefreshDatabase; // Opcional, si necesitas refrescar la base de datos en las pruebas

    /**
     * Test the home route returns a successful response.
     *
     * @return void
     */
    public function test_home_route()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * Test the inicio route returns a successful response.
     *
     * @return void
     */
    public function test_inicio_route()
    {
        $response = $this->get('/inicio');
        $response->assertStatus(200);
    }

    /**
     * Test the productos route returns a successful response.
     *
     * @return void
     */
    public function test_productos_route()
    {
        $response = $this->get('/productos');
        $response->assertStatus(200);
    }

    /**
     * Test the login route returns a successful response.
     *
     * @return void
     */
    public function test_login_route()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    /**
     * Test the misionvision route returns a successful response.
     *
     * @return void
     */
    public function test_misionvision_route()
    {
        $response = $this->get('/misionvision');
        $response->assertStatus(200);
    }

    /**
     * Test the signup route returns a successful response.
     *
     * @return void
     */
    public function test_signup_route()
    {
        $response = $this->get('/signup');
        $response->assertStatus(200);
    }

    /**
     * Test the about route returns a successful response.
     *
     * @return void
     */
    public function test_about_route()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
    }

    /**
     * Test the shipment route returns a successful response.
     *
     * @return void
     */
    public function test_shipment_route()
    {
        $response = $this->get('/shipment');
        $response->assertStatus(200);
    }
}
