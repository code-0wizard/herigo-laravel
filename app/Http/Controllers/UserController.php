<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\User\StoreUserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
  public function create()
  {
    // Log::info('Hello, World');
    return view('users.create');
  }

  public function store(StoreUserRequest $request)
  {
    $validated = $request->validated();
    $user = User::create([
      'name' => $validated['name'],
      'email' => $validated['email'],
      'password' => Hash::make($validated['password']),
    ]);
    return redirect()->route('top')->with('success', '会員登録が完了しました！');
  }
}