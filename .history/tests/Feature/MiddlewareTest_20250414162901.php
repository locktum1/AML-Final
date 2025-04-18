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
}
