<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

Route::controller(AuthController::class)->group(function () {
  Route::post('register', 'register');
  Route::post('forgot-password', 'sendPasswordResetLink');
});

Route::post('contact-us', [ApiController::class, 'sendContactMail'])->name('api.send-contact-mail');

Route::get('blogs', function (Request $request) {
  $blogs = Blog::withoutTrashed()->with(['b_category:id,name', 'author:id,first_name,last_name'])->get();
  return response()->json($blogs);
});

Route::get('blog/{blog}', function ($blog) {
  $blog = Blog::with(['b_category:id,name', 'author:id,first_name,last_name'])->findOrFail($blog);
  return response()->json($blog);
});

