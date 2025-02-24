<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
  public function showLoginForm()
  {
    return view('login');
  }

  public function login(Request $request)
  {
    // Log::info('Hello, World');
    $credentials = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      return redirect()->route('top');
    }

    return back()->withErrors([
      'email' => 'メールアドレスまたはパスワードが間違っています。',
    ]);
  }
}