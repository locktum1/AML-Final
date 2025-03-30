<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase;

class LogInTest extends TestingTestCase
{
    use RefreshDatabase;

    public function test_user_can_log_in()
    {
        $user = User::factory()->create([
            'name' => 'test name',
            'email' => 'testemail@test.com',
            'password' => 'testpassword',
            'dob' => '01/01/2000'
        ]);
    }
}
