<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase {
    use RefreshDatabase;

    public function testAccessToLogin() {
        $response = $this->get('/login');
        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    public function testAccessToRegister() {
        $response = $this->get('/register');
        $response->assertSuccessful();
        $response->assertViewIs('auth.register');
    }

    public function testAccessToLoginWhenAuthenticated() {
        $user = factory(User::class)->make();
        $response = $this->actingAs($user)->get('/login');
        $response->assertRedirect('/');
    }

    public function testAccessToRegisterWhenAuthenticated() {
        $user = factory(User::class)->make();
        $response = $this->actingAs($user)->get('/register');
        $response->assertRedirect('/');
    }

    public function testLogin() {
        //Імітація користувача у БД
        $user = factory(User::class)->create([
            'name' => 'Alex Hlukhyi',
            'email' => $email = 'o.hlukhyi@gmail.com',
            'password' => bcrypt($password = '12345678'),
            'phone' => '+380501234567',
            'access' => 'user'
        ]);
        //Запит до REST API
        $response = $this->post('/login', [
            'email' => $email,
            'password' => $password,
            '_token' => csrf_token()
        ]);
        //Перевірка результатів
        $response->assertStatus(200);
        $this->assertAuthenticatedAs($user);
    }

    public function testRegister() {
        //Об'єкт з даними для реєстрації
        $user = [
            'name' => 'Alex Hlukhyi',
            'email' => 'o.hlukhyi@gmail.com',
            'password' => '12345678',
            'phone' => '+380501234567',
            'access' => 'user'
        ];
        //Запит до REST API
        $response = $this->post('/register', $user);
        //Перевірка результатів
        $response->assertStatus(200);
        array_splice($user,2, 1);
        $this->assertDatabaseHas('users', $user);
    }

    public function testLoginWithIncorrectCredentials() {
        $user = factory(User::class)->create([
            'name' => 'Alex Hlukhyi',
            'email' => $email = 'o.hlukhyi@gmail.com',
            'password' => bcrypt($password = '12345678'),
            'phone' => '+380501234567',
            'access' => 'user'
        ]);

        $response = $this->from('/login')->post('/login', [
            'email' => $email,
            'password' => 'WrongPasswordLOL',
            '_token' => csrf_token()
        ]);

        $response->assertStatus(200);
        //$this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }
}
