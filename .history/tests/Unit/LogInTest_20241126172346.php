<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\User;

class LogInTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_user_can_log_in()
    {
        $user = User::factory()->create([

        ]);
    }
}
