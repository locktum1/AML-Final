<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase;

class LogInTest extends TestCase
{
    use RefreshDatabase;

    public function test_unauthenticated_users_cannot_access_protected_routes()
    {
        $response = $this->get('/admin/logs');
        $response->assertRedirect('/login');
        $this->assertAuthenticatedAs($user);
    }
}
