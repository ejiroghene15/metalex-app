<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationsController;
use App\Http\Controllers\UserController;
use App\Mail\RegisteredMail;
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
Route::view('/', 'main.home')->name('main.home');
Route::view('about', 'main.about')->name('main.about');
Route::view('news', 'main.news-updates')->name('main.news');
Route::view('contact-us', 'main.contact-us')->name('main.contact-us');
Route::view('faq', 'main.faq')->name('main.faq');
Route::view('careers', 'main.careers')->name('main.careers');
Route::view('technologies', 'main.subsidiaries.tech')->name('sub.tech');
Route::view('academy', 'main.subsidiaries.academy')->name('sub.academy');
Route::view('publications', 'main.subsidiaries.publications')->name('sub.publications');
Route::view('entertainment', 'main.subsidiaries.entertainment')->name('sub.entertainment');
Route::view('lp', 'main.subsidiaries.legal')->name('sub.legal');

//Route::domain('app.' . config('app.url'))->group(function () {
//  Route::view('/', 'index')->name('home');
Route::view('services', 'services')->name('services');
Route::view('directory', 'directory')->name('directory');
Route::view('about-us', 'about')->name('about');
Route::view('terms', 'terms')->name('terms');
Route::view('privacy-policy', 'privacy-policy')->name('privacy-policy');
//Route::view('faq', 'faq')->name('faq');
Route::view('not-found', 'errors.404')->name('not-found');

Route::get('view-mail', function () {
  return (new RegisteredMail())->render();
});

// MENU: Forum
Route::controller(ForumController::class)->group(function () {
  Route::get('forum', 'forums')->name('forums');

  // TOPICS: Under a selected forum
  Route::get('forum/{slug}.{id}', 'topics')->name('forum.topics');

  // THREADS: Under a forum topic
  Route::get('forum/d/{slug}.{topic_id}', 'threads')->name('forum.thread');

  Route::post('forum/{forum}/create/topic', 'newTopic')->name('forum.create.topic');
  Route::post('forum/create/thread', 'newThread');
  Route::post('forum/bookmark/thread', 'bookmarkThread');
  Route::post('forum/removeBookmark/thread', 'removeThreadBookmark');
  Route::post('forum/report/thread/{thread}', 'report');
});

// MENU: Articles
Route::prefix('publication')->group(function () {
  Route::controller(PublicationsController::class)->group(function () {
    Route::get('articles', 'articles')->name('p.articles');
    Route::get('categories', 'categories')->name('p.category');
    Route::get('magazines', 'magazines')->name('p.magazine');
    Route::get('authors', 'authors')->name('p.authors');

    Route::get('article/{article}.{id}', 'singleArticle')->name('full-article');
    Route::get('category/{category}.{id}', 'singleCategory')->name('single-category');

    Route::post('/download/', 'downloadMagazine')->name('download-magazine');

    Route::post('article/add-bookmark', 'addBookmark');
    Route::post('article/remove-bookmark', 'removeBookmark');

  });
});

// * Login, Logout, Reset Password
Route::controller(AuthController::class)->group(function () {
  Route::post('login', 'login')->name('auth.login');
  Route::get('logout', 'logout')->name('auth.logout');
  Route::post('reset-password', 'resetPassword')->name('password.update');
});

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

  // * VERIFICATION
  Route::controller(AuthController::class)->group(function () {
    Route::get('email/verify{id}/{hash}', 'verifyEmail')->middleware('signed')->name('verification.verify');
    Route::post('/email/verification-notification', 'resendVerificationLink')->middleware(['throttle:6,1'])->name('verification.send');
  });

  // * DASHBOARD ROUTES
  Route::prefix('dashboard')->group(function () {

    // USER DASHBOARD
    Route::view('u/{user}', 'user.index')->name('user.dashboard');

    // BOOKMARKSf
    Route::view('bookmarks', 'user.bookmarks')->name('user.bookmarks');

    // CMS
    Route::view('cms/posts', 'user.cms.post')->name('user.blog');
    Route::view('cms/post/create', 'user.cms.new-post')->name('user.blog.create');
    Route::get('cms/post/edit/{post}', [UserController::class, 'editBlog'])->name('user.blog.edit');

    // USER PROFILE
    Route::controller(ProfileController::class)->group(function () {
      Route::view('my-profile', 'user.profile.index')->name('user.profile');
      Route::view('my-profile/edit', 'user.profile.index')->name('user.profile.edit');
      Route::post('update-base-profile', 'updateBaseProfile')->name('user.profile.update');
      Route::post('update-avatar', 'updateAvatar')->name('user.avatar.update');
    });

    // FORUM
    Route::controller(ForumController::class)->group(function () {
      Route::get('forum', 'userForums')->name('forum.all');
      Route::post('forum/create', 'newForum')->name('forum.create');
      Route::get('forum/edit/{slug}.{forum}', 'editForum')->name('forum.edit');
      Route::put('forum/update/{forum}', 'updateForum')->name('forum.update');
      Route::delete('forum/delete', 'deleteForum')->name('forum.delete');

      Route::view('my-forum-topics', 'user.forum.topics')->name('my-forum-topics');
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

  // * ADMIN ROUTES
  Route::middleware(['admin'])->group(function () {
    Route::prefix('admin')->group(function () {
      Route::view('magazine/upload', 'admin.magazine.new')->name('magazine.create');
      Route::view('cms/category', 'admin.cms.category')->name('cms.category');
      Route::view('cms/posts', 'admin.cms.post')->name('cms.post');
      Route::view('cms/post/create', 'admin.cms.new-post')->name('cms.post.create');

      Route::get('', [AdminController::class, 'index'])->name('admin');
      Route::get('activities', [AdminController::class, 'activities'])->name('view-activities');
      Route::get('magazine', [AdminController::class, 'showMagazines'])->name('magazine.list');
      Route::get('users', [AdminController::class, 'allUsers'])->name('view-users');

      // * UPLOAD A MAGAZINE
      Route::post('upload-magazine', [FileUploadController::class, 'magazine'])->name('upload-magazine');

    });
  });

  // CMS
  Route::controller(BlogController::class)->group(function () {
    Route::get('cms', 'index')->name('cms');
    Route::get('cms/post/edit/{post}', 'editPost')->name('cms.post.edit');
    Route::post('cms/post/store', 'storePost')->name('cms.post.store');
    Route::post('cms/post/update/{post}', 'updatePost')->name('cms.post.update');
    Route::post('cms/post/delete/{post}', 'deletePost')->name('cms.post.delete');
    Route::post('cms/category/store', 'saveCategory')->name('cms.category.store');
  });

  Route::controller(MagazineController::class)->group(function () {
    Route::delete('magazine/delete/{id}', 'destroy')->name('magazine.delete');
  });
});

require_once __DIR__ . '/livewire.php';
//});