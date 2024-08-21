<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPost;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
  public function index()
  {
    return view('admin.cms.index');
  }

  public function storePost(StoreBlogPost $request)
  {
    // * Validate the request
    $validated = collect($request->safe()->except(['thumbnail']));

    // * Generate unique token for the post
    $token = str_shuffle(Str::random(20));

    // * Store the image on cloudinary
    $thumbnail = $request->thumbnail->storeOnCloudinaryAs('blog_post_thumbnails', $token);

    $blog_data = $validated->merge([
      'thumbnail' => $thumbnail->getSecurePath(),
      'user_id' => auth()->id(),
      'slug' => Str::slug($request->title),
      'token' => $token,
      'status' => 'published'
    ]);

    $blog = new Blog;
    $blog->create($blog_data->all());

    HelpersController::logActivity("Post created <b>$request->title</b>");
    return redirect()->back()->withMessage("Post created")->withStatus("success");
  }

  public function editPost(Blog $post)
  {
    return view('admin.cms.edit-post', compact("post"));
  }

  public function updatePost(Blog $post, StoreBlogPost $request)
  {
    // * Validate the request
    $validated = collect($request->safe()->except(['thumbnail']));

    if ($request->has('thumbnail')) {
      $thumbnail = $request->thumbnail->storeOnCloudinaryAs('blog_post_thumbnails', $post->token);
    }

    $blog_data = $validated->merge([
      'thumbnail' => $request->has('thumbnail') ? $thumbnail->getSecurePath() : $post->thumbnail,
    ]);

    $post->update($blog_data->all());

    HelpersController::logActivity("Post <b>$post->title</b> has been updated");
    return ResponseController::_success("Post updated");
  }

  public function deletePost(Blog $post)
  {
    $post->delete();

    HelpersController::logActivity("Deleted Post <b>$post->title</b>");
    return ResponseController::_success("Post deleted");
  }

  public function saveCategory(Request $request)
  {
    $request->validate(['name' => 'required'], ['required' => 'The category name is required']);
    $request->merge(['slug' => Str::slug($request->name)]);

    $category = new BlogCategory;
    $category->create($request->all());

    HelpersController::logActivity("Created category <b>$request->category</b>");
    return ResponseController::_success("Category created");
  }
}
