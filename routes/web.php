<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\MagazineController;
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
Route::view('/', 'main.home')->name('home');
Route::view('about', 'main.about')->name('main.about');
Route::livewire('news', 'pages::blog')->name('main.news');
Route::view('contact-us', 'main.contact-us')->name('main.contact-us');
Route::view('faq', 'main.faq')->name('faq');
Route::view('careers', 'main.careers')->name('main.careers');
Route::view('technologies', 'main.subsidiaries.tech')->name('sub.tech');
Route::view('academy', 'main.subsidiaries.academy')->name('sub.academy');
Route::view('publications', 'main.subsidiaries.publications')->name('sub.publications');
Route::view('entertainment', 'main.subsidiaries.entertainment')->name('sub.entertainment');
Route::view('lp', 'main.subsidiaries.legal')->name('sub.legal');

//Route::domain('app.' . config('app.url'))->group(function () {
Route::view('services', 'services')->name('services');
Route::view('directory', 'directory')->name('directory');
Route::view('terms', 'terms')->name('terms');
Route::view('privacy-policy', 'privacy-policy')->name('privacy-policy');
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
    Route::get('books', 'books')->name('p.books');
    Route::get('authors', 'authors')->name('p.authors');

    Route::get('article/{article}.{id}', 'singleArticle')->name('full-article');
    Route::get('category/{category}.{id}', 'singleCategory')->name('single-category');

    Route::post('/download/', 'downloadMagazine')->name('download-magazine');

    Route::post('article/add-bookmark', 'addBookmark');
    Route::post('article/remove-bookmark', 'removeBookmark');

  });
});

// * AUTHENTICATED PAGES
Route::middleware(['auth'])->group(function () {
  // * DASHBOARD ROUTES
  Route::prefix('dashboard')->group(function () {

    // USER DASHBOARD
    Route::livewire('u/{user}', 'pages::dashboard.user')->name('user.dashboard');

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

      // * BOOKS
      Route::controller(BookController::class)->group(function () {
        Route::get('books', 'index')->name('book.list');
        Route::view('book/upload', 'admin.book.new')->name('book.create');
        Route::delete('book/delete/{id}', 'destroy')->name('book.delete');
      });
      Route::post('upload-book', [FileUploadController::class, 'book'])->name('upload-book');

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

// * EMAIL VERIFICATION, LOGOUT
Route::controller(AuthController::class)->group(function () {
  Route::get('email/verify{id}/{hash}', 'verifyEmail')
    ->middleware('signed')
    ->name('verification.verify');

  Route::post('/email/verification-notification', 'resendVerificationLink')
    ->middleware(['throttle:6,1'])
    ->name('verification.send');

  Route::get('logout', 'logout')->name('auth.logout');
});

// * SIGNUP, LOGIN, FORGOT PASSWORD
Route::prefix('auth')->group(function () {
  Route::livewire('register', 'pages::auth.register')->name('register');
  Route::livewire('login', 'pages::auth.login')->name('login');
  Route::livewire('forgot-password', 'pages::auth.forgot-password')->name('password.request');
  Route::livewire('/reset-password/{token}', 'pages::auth.reset-password')->name('password.reset');
})->middleware('guest');

// Academy Program
Route::view('academy-program', 'main.subsidiaries.academy.index')->name('academy-program');