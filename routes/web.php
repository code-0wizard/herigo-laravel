<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HeritageController;

Route::get('/', [HeritageController::class, 'index'])->name('top');;
Route::get('/users/signup', [UserController::class, 'create'])->name('users.signup');
Route::post('/users', [UserController::class, 'store'])->name('users.store');