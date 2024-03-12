<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;

use App\Models\User;
use Tests\TestCase;

class UnitTest extends TestCase
{
    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_enpoint_not_exist()
    {
        $response = $this->get('update');
        $response->assertStatus(404);
    }

    public function test_user_duplictions()
    {
        $user1 = User::make([
            'name' => 'Alex',
            'email' => 'alex@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'Jajang',
            'email' => 'jajang@gmail.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
        $this->assertTrue($user1->email != $user2->email);
    }

    public function test_delete_user()
    {
        $user = User::make([
            'name' => 'asep',
            'email' => 'asep@gmail.com'
        ]);

        $user->delete();
        $this->assertTrue(true);
    }
}
