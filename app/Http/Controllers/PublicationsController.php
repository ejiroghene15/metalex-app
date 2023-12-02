<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\ForumTopics;
use Illuminate\Http\Request;

class PublicationsController extends Controller
{
  public function articles()
  {
    return view('publications.articles');
  }

  public function singleArticle($slug, Blog $id)
  {
    return view('publications.single.article')->with('post', $id);
  }

  public function categories()
  {
    return view('publications.categories');
  }

  public function singleCategory($slug, BlogCategory $id)
  {
    return view('publications.single.category')->with('category', $id);
  }

  public function magazines()
  {
    return view('publications.magazines');
  }

  public function authors()
  {
    return view('publications.authors');
  }

  // * Bookmark a blog
  public function addBookmark(Request $request)
  {
    $blog = Blog::find(base64_decode($request->id));

    $request->user()->bookmarks()->create([
      'content_id' => $blog->id,
      'type' => 'blog'
    ]);

    // * Log user activity
    HelpersController::logActivity("Bookmarked Article - <a href='/forum/d/$blog->slug.$blog->id'>$blog->title </a>");

    return ResponseController::success("article has been added to your bookmarks");
  }

  // * Remove a blog from user bookmarks
  public function removeBookmark(Request $request)
  {
    $blog = ForumTopics::find(base64_decode($request->id));
    $request->user()->bookmarks()->where([['content_id', $blog->id], ['type', 'blog']])->delete();

    // * Log user activity
//    HelpersController::logActivity("Bookmarked removed - <a href='/forum/d/$topic->slug.$topic->id'>$topic->subject </a>");

    return ResponseController::success("article has been removed from your bookmarks");
  }

  public function downloadMagazine()
  {
    $file = request()->url;
    $fileContents = file_get_contents($file);

    if ($fileContents !== false) {

      $filename = basename($file);

      return response($fileContents)
        ->header('Content-Type', 'application/pdf') // Adjust the content type based on the file type
        ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    } else {
      // Error response if file retrieval fails
      return response()->json(['error' => 'Unable to retrieve file from the external resource'], 500);
    }
  }
}
