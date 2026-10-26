<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_application_returns_a_successful_response(): void
    {
        $this->seed();

        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Beautage', false);
    }

    public function test_storefront_routes_are_available(): void
    {
        $this->seed();

        foreach ([
            '/collections',
            '/checkout',
            '/blog',
            '/our-story',
            '/track-order',
            '/products/lumina-pro-led-mask',
        ] as $path) {
            $this->get($path)->assertOk();
        }
    }
}
