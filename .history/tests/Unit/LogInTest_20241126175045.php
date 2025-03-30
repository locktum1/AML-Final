<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;
use App\Models\User;

class LogInTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_log_in()
    {
        logger()->info('Database connection:', config('database.connections'));

        $user = User::factory()->create([
            'name' => 'test name',
            'email' => 'testemail@test.com',
            'password' => 'testpassword',
            'dob' => '01/01/2000'
        ]);
    }
}
