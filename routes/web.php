<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('landing');
});

// LOGIN
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'authenticate']);

// REGISTER
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'store']);

// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
});

// LOGOUT
Route::post('/logout', [AuthController::class,'logout']);