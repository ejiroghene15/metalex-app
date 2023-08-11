<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ForumTopics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

  public function editBlog(Blog $post)
  {
    $this->authorize('updateBlog', $post);
    return view('user.cms.edit-post', compact("post"));
  }

}
