<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase; // Utilisé pour remettre la base de données à l'état initial après chaque test.

    /**
     * Test si la page de connexion s'affiche correctement.
     */
    public function test_login_page_is_displayed(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }


    public function test_register_page_is_displayed(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }


    public function test_admin_when_create_account():void {
        
        $this->post('/registerAdmin', [
            'name' => 'Admin',
            'role' => 'Admin',
            'email' => 'daniel@email.com',
            'tel' => '778456772',
            'password'=>'daniel',
            'password_confirm'=>'daniel',

        ])
        ->assertRedirect('/')
        ->assertSessionHasNoErrors();
        
    }

   
    public function test_admin_can_login_with_valid_credentials(): void
    {
        
        $admin =new User();
        $admin->name="daniel";
        $admin->password=  bcrypt('daniel');
        $admin->email="daniel@gmail.com";
        $admin->role="";
        $admin->profil="";
        $admin->tel="";
        $admin->save();

        $response = $this->post('/doLogin', [
            'email' => 'daniel@gmail.com',
            'password' => 'daniel'
        ]);

        $this->assertAuthenticated();
      
    }

   
}
