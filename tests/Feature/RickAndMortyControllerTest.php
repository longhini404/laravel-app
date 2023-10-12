<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RickAndMortyControllerTest extends TestCase
{
    /**
     * Testa se o controlador retorna uma resposta HTTP 200 e contém dados dos personagens.
     *
     * @return void
     */
    public function testCharactersAreDisplayed()
    {
        $response = $this->get('/rick-and-morty');

        $response->assertStatus(200);
        $response->assertViewIs('rick-and-morty');

        $response->assertSee('Characters');
    }
}
