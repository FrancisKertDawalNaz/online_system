<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

// Handle Login Form Submission
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Handle Register Form Submission
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');