<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;

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

Route::middleware(['auth'])->group(function () {
    // Checkout Routes
    Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success')->middleware('ensureUserRole:user');
    Route::get('checkout/{course:slug}', [CheckoutController::class, 'create'])->name('checkout.create')->middleware('ensureUserRole:user');
    Route::post('checkout/{course}', [CheckoutController::class, 'store'])->name('checkout.store')->middleware('ensureUserRole:user');

     // user dashboard
     Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
     Route::prefix('user/dashboard')->namespace('User')->name('user.')->middleware('ensureUserRole:user')->group(function () {
         Route::get('/', [UserDashboard::class, 'index'])->name('dashboard');
         Route::get('checkout/invoice/{checkout}', [CheckoutController::class, 'invoice'])->name('checkout.invoice');
     });
 
     // admin dashboard
     Route::prefix('admin/dashboard')->namespace('Admin')->name('admin.')->middleware('ensureUserRole:admin')->group(function () {
         Route::get('/', [AdminDashboard::class, 'index'])->name('dashboard');
 
         // admin checkout
         Route::post('checkout/{checkout}', [AdminCheckout::class, 'update'])->name('checkout.update');
     });

    // Route::get('dashboard/checkout/invoice/{checkout}', [CheckoutController::class, 'invoice'])->name('user.checkout.invoice');
});

// Socialite Routes
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

Route::get('auth/facebook', [UserController::class, 'facebookRedirect'])->name('user.login.facebook');

Route::get('auth/facebook/callback', [UserController::class, 'loginWithFacebook'])->name('user.facebook.callback');


require __DIR__.'/auth.php';
