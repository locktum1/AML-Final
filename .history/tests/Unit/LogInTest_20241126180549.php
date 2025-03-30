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
            'email' => 'testemail@example.com',
            'password' => bcrypt('password123'), // Ensure the password matches your test input
        ]);

        $response = $this->post('/login', [
            'email' => ''
        ]);
    }
}
