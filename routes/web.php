<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('success', function () {
    return view('success_checkout');
})->name('success-checkout');

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Socialite Routes
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');

Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

Route::get('auth/facebook', [SocialController::class, 'facebookRedirect'])->name('user.login.facebook');

Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook'])->name('user.facebook.callback');


require __DIR__.'/auth.php';
