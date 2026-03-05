<?php

declare(strict_types=1);

namespace Tests\Feature\Api\Product;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{

    use RefreshDatabase;
    protected $seed = true; // Isso força o 'php artisan db:seed' a cada refresh

    public function testEndpointGetAllProducts(): void
    {
        $response = $this->get('/api/produtos');

        $data = $response->json();

        $this->assertEquals(200, $response->getStatusCode());

        $this->assertIsArray($data);
        $this->assertTrue(count($data) >= 1);

        $this->assertArrayHasKey('id', $data[0]);

        $this->assertIsString($data[0]['nome']);

//        $response->assertExactJson([
//            [
//                'id' => 1,
//                'nome' => 'Limao',
//            ]
//        ]);

    }

    public function um_produto_pode_ser_excluido()
    {

        $response = $this->deleteJson("/api/produtos/2");

        $response->assertStatus(200);
        $this->assertDatabaseMissing('produtos', ['id' => 2]);
    }
}
