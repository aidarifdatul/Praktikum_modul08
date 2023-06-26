<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//diarahkan ke auth -> login.blade.php
Route::get('/', function () {
    return view('auth.login');
});

// Route Home
Route::get('home', [HomeController::class, 'index'])->name('home');

// Route profile
Route::get('profile', ProfileController::class)->name('profile');

// Route employees
Route::resource('employees', EmployeeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
