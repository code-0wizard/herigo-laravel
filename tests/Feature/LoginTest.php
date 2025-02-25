<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Tests\TestCase;

class LoginTest extends TestCase
{
  use RefreshDatabase;

  /**
   * ログインに成功することをテスト
   *
   * @return void
   */
  public function test_login_success()
  {
      $user = User::factory()->create([
          'email' => 'test@example.com',
          'password' => Hash::make('password123'),
      ]);

      $response = $this->post('/login', [
          'email' => 'test@example.com',
          'password' => 'password123',
      ]);
      
      $response->assertRedirect('/');
  }
}