<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/register', function() { 
    return view('register');
});
Route::get('/dashboard', function() { 
    return view('dashboard');
});
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::get('/dashboard', function() { 
//     return view('dashboard');
// })->middleware('checklogin');

Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');