<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase;

class LogInTest extends TestCase
{
    use RefreshDatabase;

    @test
    public function test_unauthenticated_users_cannot_access_protected_routes()
    {
        $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($user);
    }
}
