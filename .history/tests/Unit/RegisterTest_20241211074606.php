<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    use RefreshDatabase;

    public function test_user_can_log_in()
    {
        $user = User::factory()->create([
            'email' => 'testemail@testemail.com',
            'password' => bcrypt('testpassword'),
        ]);

        $response = $this->post('/login', [
            'email' => 'testemail@testemail.com',
            'password' => 'testpassword',
        ]);

        $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($user);
    }
}
