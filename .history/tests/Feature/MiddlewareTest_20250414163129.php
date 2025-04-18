<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase;

class MiddlewareTest extends TestCase
{
    use RefreshDatabase;

    public function test_unauthenticated_users_cannot_access_protected_routes()
    {
        $response = $this->get('/subscribe');
        $response->assertRedirect('/login');
    }

    public function test_authenticated_users_cannot_access_admin_routes()
    {
        /** @var \App\Models\User $user */
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => 'password',
            'dob' => '2000-01-01',
        ]);
        $this->actingAs($user);

        $response = $this->get('/admin/logs');
        $response->assertRedirect('/login');
    }

    public function test_authenticated_users_cannot_access_admin_routes()
    {
        /** @var \App\Models\User $user */
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => 'password',
            'dob' => '2000-01-01',
            'usertype' => 'admin'
        ]);
        $this->actingAs($user);

        $response = $this->get('/admin/logs');
        $response->assertRedirect('/login');
    }
}
