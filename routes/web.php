<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('login', [AuthController::class,'authentinate'])->name('authentinate');

Route::resource('/users', AuthController::class);
Route::resource('/kategori', KategoriController::class);

Route::POST('/logout', [AuthController::class, 'logout'])->name('logout');