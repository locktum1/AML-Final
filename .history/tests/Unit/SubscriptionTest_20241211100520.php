<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Media;
use Illuminate\Foundation\Testing\TestCase;


class SubscriptionTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_subscribe_using_stripe(){
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => 'password',
            'dob' => '2000-01-01',
        ]);
        $this->actingAs($user);



    }
}
