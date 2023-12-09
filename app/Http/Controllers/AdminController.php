<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Blog;
use App\Models\Bookmark;
use App\Models\Forum;
use App\Models\ForumTopics;
use App\Models\Magazine;

class AdminController extends Controller
{
  public function index()
  {
    $post_count = Blog::withoutTrashed()->count();
    $forum_count = Forum::all()->count();
    $thread_count = ForumTopics::all()->count();
    $bookmark_count = Bookmark::all()->count();

    return view('admin.index', compact('post_count', 'forum_count', 'thread_count', 'bookmark_count'));
  }

  public function activities()
  {
    return view('admin.activities', ['activity' => Activity::all()]);
  }

  public function showMagazines()
  {
    return view('admin.magazine.index', ['magazines' => Magazine::all()]);
  }
}
