<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase; // Utilisé pour remettre la base de données à l'état initial après chaque test.

    /**
     * A basic feature test example.
     */
    public function test_when_call_page_list_category(): void
    {
        $response = $this->get('/categoryList');

        $response->assertStatus(200);
    }


    public function test_admin_when_create_category():void {
        
        $this->post('/createCategory', [
            'category' => 'iphone x',
            'status' => 'Disponible',
           

        ])
       
        ->assertSessionHasNoErrors()
        ->dump();
        
}

}