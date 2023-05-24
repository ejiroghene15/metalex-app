<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ProfileController;
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
Route::view('find-lawyer', '')->name('find-lawyer');
Route::view('articles', '')->name('articles');
Route::view('about-us', '')->name('about');

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

  // * Dashboard
  Route::prefix('app')->group(function () {
    // * User Profile Setup
    Route::controller(ProfileController::class)->group(function () {
      Route::view('my-profile', 'dashboard.profile')->name('user.profile');
      Route::post('update-base-profile', 'updateBaseProfile')->name('profile.update');
      Route::post('update-avatar', 'updateAvatar')->name('avatar.update');
    });

    // MENU: Office Setup for lawyers and firms
    Route::controller(OfficeController::class)->group(function () {
      // Lawyers & Firms
      Route::view('office', 'dashboard.office')->name('office.profile');
      Route::post('update-profile', 'updateProfile')->name('office.update');

      // Firms
      Route::get('associates', 'myAssociates')->name('office.associates');
      Route::post('add-associate/{firm}', 'attachAssociate')->name('office.add-associate');
      Route::post('remove-associate/{firm}', 'detachAssociate')->name('office.remove-associate');
      Route::post('set-logo', 'setLogo')->name('office.set-logo');

      // Lawyers
      Route::get('certifications', 'myCertificates')->name('office.certificates');
      Route::post("add-certificate", 'addCertificate')->name('office.upload-certificate');
    });
  });
});

// MENU: Forum
Route::controller(ForumController::class)->group(function () {
  Route::get('forum', 'forums')->name('forums');

  // TOPICS: Under a selected forum
  Route::get('forum/{slug}.{id}', 'topics')->name('forum.topics');

  // THREADS: Under a forum topic
  Route::get('forum/d/{slug}.{topic}', 'threads')->name('forum.thread');

  Route::get('app/forum', 'userForums')->name('dashboard.forums');
  Route::post('app/forum/create', 'newForum')->name('forum.create');
  Route::post('forum/{forum}/create/topic', 'newTopic')->name('forum.create.topic');
  Route::post('forum/create/thread', 'newThread');
  Route::post('forum/bookmark/thread', 'bookmarkThread');
  Route::post('forum/removeBookmark/thread', 'removeBookmark');
});

// * Login, Logout, Reset Password
Route::controller(AuthController::class)->group(function () {
  Route::post('login', 'login')->name('auth.login');
  Route::get('logout', 'logout')->name('auth.logout');
  Route::post('reset-password', 'resetPassword')->name('password.update');
});
