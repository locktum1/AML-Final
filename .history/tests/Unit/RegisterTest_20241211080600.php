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
            'dob' => '2000-01-01',
            'usertype' => 'user',
        ];

        $response = $this->post('/submit-register',$data);

        $response->assertRedirect('/subscribe');
        $this->assertAuthenticated();
    }

    public function test_user_can_not_register_with_invalid_email(){
        $data = [
            'name' => 'Test User',
            'email' => 'invalidemail',
            'password' => 'password',
            'dob' => '2000-01-01',
            'usertype' => 'user',
        ];

        $response = $this->post('/submit-register',$data);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }

    public function test_user_can_not_register_with_one_word_name(){
        $data = [
            'name' => 'Test',
            'email' => 'test@test.com',
            'password' => 'password',
            'dob' => '2000-01-01',
            'usertype' => 'user',
        ];

        $response = $this->post('/submit-register',$data);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }

    public function test_user_can_not_register_with_uncapitalized_name(){
        $data = [
            'name' => 'test user',
            'email' => 'test@test.com',
            'password' => 'password',
            'dob' => '2000-01-01',
            'usertype' => 'user',
        ];

        $response = $this->post('/submit-register',$data);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }

    public function test_user_can_not_register_with_a_password_under_8_characters(){
        $data = [
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => 'pswd',
            'dob' => '2000-01-01',
            'usertype' => 'user',
        ];

        $response = $this->post('/submit-register',$data);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }

    public function test_user_can_not_register_with_a_badly_formatted_date_of_birth(){
        $data = [
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => 'password',
            'dob' => '2000/01/01',
            'usertype' => 'user',
        ];

        $response = $this->post('/submit-register',$data);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }

    public function test_user_can_not_register_being_under_18_years_old(){
        $data = [
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => 'password',
            'dob' => '2015/01/01',
            'usertype' => 'user',
        ];

        $response = $this->post('/submit-register',$data);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }

    public function test_user_can_not_register_being_over_100_years_old(){
        $data = [
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => 'password',
            'dob' => '2150/01/01',
            'usertype' => 'user',
        ];

        $response = $this->post('/submit-register',$data);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }
}
