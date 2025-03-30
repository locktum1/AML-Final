<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register()
    {
        $data = [
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'dob' => '2000-01-01',
            'usertype' => 'user',
        ];

        $response = $this->post('/submit-register',$data);

        $response->assertRedirect('/subscribe');
        $this->assertAuthenticated();
    }

    
}
