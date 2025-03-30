<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase;

class LogInTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register()
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

    public function test_user_can_register_with_incorrect_email()
    {
        $user = User::factory()->create([
            'email' => 'testemail@testemail.com',
            'password' => bcrypt('testpassword'),
        ]);

        $response = $this->post('/login', [
            'email' => 'incorrect@testemail.com',
            'password' => 'testpassword',
        ]);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }

    public function test_user_can_register_with_incorrect_password()
    {
        $user = User::factory()->create([
            'email' => 'testemail@testemail.com',
            'password' => bcrypt('testpassword'),
        ]);

        $response = $this->post('/login', [
            'email' => 'testemail@testemail.com',
            'password' => 'incorrectpassword',
        ]);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }
}
