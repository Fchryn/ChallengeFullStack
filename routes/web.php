<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', [\App\Http\Controllers\UserController::class, 'register']);
Route::get('/forgot', [\App\Http\Controllers\UserController::class, 'forgot']);
Route::get('/reset/{email}/{token}', [\App\Http\Controllers\UserController::class, 'reset'])->name('reset');

Route::post('/register', [\App\Http\Controllers\UserController::class, 'saveUser'])->name('auth.register');
Route::post('/login', [\App\Http\Controllers\UserController::class, 'loginUser'])->name('auth.login');
Route::post('/forgot', [\App\Http\Controllers\UserController::class, 'forgotPassword'])->name('auth.forgot');

Route::group(['middleware' => ['LoginCheck']], function() {
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index']);
    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'profile'])->name('profile');
    Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('auth.logout');
});

