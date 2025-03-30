<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase;

class LogInTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_log_in()
    {
        $user = User::factory()->create([
            'email' => 'testemail@testemail.com',
            'password' => bcrypt('testpassword'),
        ]);

        $response = $this->post('/login', [
            'email' => 'testemail@testemail.com',
            'password' => bcrypt('testpassword'),
        ]);

        $response->assertRedirect('/home'); // Adjust the redirect location to match your app's configuration

        // Assert the user is authenticated
        $this->assertAuthenticatedAs($user);
    }
}
