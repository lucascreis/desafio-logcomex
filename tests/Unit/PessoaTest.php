<?php

namespace Tests\Unit;

use Database\Seeders\PessoasTestSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PessoaTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Valida se a rota PESSOA está disponível
     */
    public function testEndpointPessoa(): void
    {
        $response = $this->get('/pessoa');
        $response->assertStatus(200);
    }

    /**
     * Valida se a quantidade de registros é igual a 5
     */
    public function testTotalNumberOfPeople(): void
    {
        $this->seed(PessoasTestSeeder::class);

        $response = $this->getJson('/api/pessoa');
        $response->assertJsonCount(5, 'pessoas');
    }
}
