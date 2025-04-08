<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Models\Blog;
use App\Models\BlogCategory;
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
  // Get page number and page size from query parameters, with defaults
  $pageNumber = $request->query('pageNumber', 1);  // Default to page 1
  $pageSize = $request->query('pageSize', 10);  // Default to 10 per page

  $blogs = Blog::withoutTrashed()->with(['b_category:id,name', 'author:id,first_name,last_name'])->paginate($pageSize);

// Customize the pagination query string parameters
  $blogs->appends(['pageNumber' => $pageNumber, 'pageSize' => $pageSize]);

// Optionally, change the default "page" parameter name to "pageNumber"
  $blogs->setPageName('pageNumber');

  // Transform the paginated data to include only specified fields
  $formattedBlogs = $blogs->through(function ($blog) {
    return [
      'id' => $blog->id,
      'author' => $blog->author ? $blog->author->first_name . ' ' . $blog->author->last_name : null,
      'title' => $blog->title,
      'created_at' => $blog->created_at,
      'thumbnail' => $blog->thumbnail,
      'category' => $blog->b_category ? $blog->b_category->name : null,
    ];
  });

  return response()->json($formattedBlogs);
});

Route::get('blog-categories', function (Request $request) {
// Get page number and page size from query parameters, with defaults
  $pageNumber = $request->query('pageNumber', 1);  // Default to page 1
  $pageSize = $request->query('pageSize', 10);  // Default to 10 per page

  $category_id = BlogCategory::where('slug', $request->query('category'))->pluck('id')[0];

  $blogs = Blog::withoutTrashed()->where('category', $category_id)->with(['b_category:id,name', 'author:id,first_name,last_name'])->paginate($pageSize);

  // Customize the pagination query string parameters
  $blogs->appends(['pageNumber' => $pageNumber, 'pageSize' => $pageSize]);

  // Optionally, change the default "page" parameter name to "pageNumber"
  $blogs->setPageName('pageNumber');

  // Transform the paginated data to include only specified fields
  $formattedBlogs = $blogs->through(function ($blog) {
    return [
      'id' => $blog->id,
      'author' => $blog->author ? $blog->author->first_name . ' ' . $blog->author->last_name : null,
      'title' => $blog->title,
      'created_at' => $blog->created_at,
      'thumbnail' => $blog->thumbnail,
      'category' => $blog->b_category ? $blog->b_category->name : null,
    ];
  });

  return response()->json($formattedBlogs);
});

Route::get('category-list', function () {
  $category = BlogCategory::all();
  return response()->json($category);
});

Route::get('blog/{blog}', function ($blog) {
  $blog = Blog::with(['b_category:id,name', 'author:id,first_name,last_name'])->findOrFail($blog);
  return response()->json($blog);
});

