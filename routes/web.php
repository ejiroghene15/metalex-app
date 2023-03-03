<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Country;
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

Route::view('/', 'index')->name('home');

// * Unauthenticated Routes
Route::middleware(['guest'])->group(function () {
  Route::prefix('auth')->group(function () {
    Route::view('register', 'auth.register')->name('register');
    Route::view('login', 'auth.login')->name('login');
    Route::view('forgot-password', 'auth.forgot-password')->name('password.request');

    Route::get('/reset-password/{token}', function ($token) {
      return view('auth.reset-password', ['token' => $token]);
    })->name('password.reset');
  });
});

// * Authenticated Routes
Route::middleware(['auth'])->group(function () {
  Route::view('email/verify', 'auth.verify-email')->name('verification.notice');

  // * Email Verification
  Route::controller(AuthController::class)->group(function () {
    Route::get('email/verify{id}/{hash}', 'verifyEmail')->middleware('signed')->name('verification.verify');
    Route::post('/email/verification-notification', 'resendVerificationLink')->middleware(['throttle:6,1'])->name('verification.send');
  });

  Route::prefix('app')->group(function () {
    // * User Profile Setup
    Route::controller(ProfileController::class)->group(function () {
      Route::view('my-profile', 'dashboard.profile')->name('user.profile');
      Route::post('update-base-profile', 'updateBaseProfile')->name('profile.update');
      Route::post('update-avatar', 'updateAvatar')->name('avatar.update');
    });

    // * Office Setup for lawyers and firms
    Route::controller(OfficeController::class)->group(function () {
      Route::view('office', 'dashboard.office')->name('office.profile');

      Route::get('associates', 'myAssociates')->name('office.associates');

      Route::post('set-logo', 'setLogo')->name('office.set-logo');
      Route::post('update-profile', 'updateProfile')->name('office.update');
      Route::post('add-associate/{office}', 'attachAssociate')->name('office.add-associate');
      Route::post('remove-associate/{office}', 'detachAssociate')->name('office.remove-associate');
    });
  });
});

// * Login, Logout, Reset Password
Route::controller(AuthController::class)->group(function () {
  Route::post('login', 'login')->name('authenticate.login');
  Route::get('logout', 'logout')->name('authenticate.logout');
  Route::post('reset-password', 'resetPassword')->name('password.update');
});
