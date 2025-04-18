<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase;

class LogInTest extends TestCase
{
    use RefreshDatabase;

    public function test_unauthori()
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
