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
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => 
        ]);
    }
}
