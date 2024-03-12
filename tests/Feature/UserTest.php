<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_user_cannot_create()
    {
        $response = $this->post('/register',[
            'name' => 'asep',
            'email' => 'asep@gmail.com',
            'password' => '12345678',
            'password_confirmation' => '12345678',
            'role' => 'member'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'asep@gmail.com'
        ]);

        $user = User::where('email', 'asep@gmail.com')->first();
        $this->actingAs($user);

        $response2 = $this->get('/create');
        $response2->assertStatus(200);
    }   

    // Admin

    public function test_admin_can_create()
    {
        $response = $this->post('/register',[
            'name' => 'apud',
            'email' => 'apud@gmail.com',
            'password' => '12345678',
            'password_confirmation' => '12345678',
            'role' => 'admin'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'apud@gmail.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'juhro@gmail.com'
        ]);

        $user = User::where('email', 'asep@gmail.com')->first();
        $this->actingAs($user);

        $response2 = $this->get('/create');
        $response2->assertStatus(200);
    } 

}
    
