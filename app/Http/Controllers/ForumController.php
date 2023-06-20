<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\ForumCategory;
use App\Models\ForumThread;
use App\Models\ForumTopics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ForumController extends Controller
{
  // * Return all forums that has been created
  public function forums()
  {
    $forums = ForumCategory::all();
    return view('forum.index', compact("forums"));
  }

  // * Create a new forum
  public function newForum(Request $request)
  {
    $validate = $request->validate([
      'forum_name' => 'required',
      'forum_category' => 'required',
      'description' => 'max:100'
    ]);

    Forum::create([
      "user_id" => Auth::id(),
      "name" => $request->forum_name,
      "slug" => HelpersController::slugify($request->forum_name),
      "category_id" => $request->forum_category,
      "description" => $request->description
    ]);

    // * Log user activity
    HelpersController::logActivity("Created new forum - $request->forum_name");

    return ResponseController::_success("New forum - $request->forum_name created");
  }

  // * Delete a forum
  public function deleteForum(Request $request)
  {
    $forum = Forum::find(base64_decode($request->forum_id));
    $forum->delete();

    // * Log user activity
    HelpersController::logActivity("Deleted forum - $forum->name");

    return ResponseController::_success("Deleted forum - $forum->name");
  }

  // * Create a new topic for discussion
  public function newTopic(Request $request, Forum $forum)
  {
    $request->validate([
      "subject" => "required",
      "body" => "required"
    ]);

    $request['user_id'] = Auth::id();
    $request['slug'] = HelpersController::slugify($request->subject);

    $forum->topics()->create($request->all());

    // * Log user activity
    HelpersController::logActivity("Created new forum topic - $request->subject");

    return ResponseController::_success("Topic $request->subject created");
  }

  // * Return all topics that has been created under a particular forum
  public function topics($slug, $id)
  {
    $per_page = HelpersController::$paginate_per_page;
    $forum = Forum::where('id', $id)->where('slug', $slug)->with(['topics' => function ($query) use ($per_page) {
      return $query->paginate($per_page);
    }])->first();

    $topics = $forum->topics()->paginate($per_page)->fragment('topic');

    if (!$forum) return back();
    return view('forum.topics', compact("forum", "topics"));
  }

  // * Create a new thread reply to a forum topic
  public function newThread(Request $request)
  {
    $request->validate([
      'reply' => 'required'
    ]);

    $topic = ForumTopics::find(base64_decode($request->topic));

    $topic->threads()->create([
      'topic_id' => $topic->id,
      'user_id' => $request->user()->id,
      'reply' => $request->reply,
      'is_replying' => $request->has('is_replying'),
      'thread_id' => $request->has('is_replying') && $request->is_replying ? base64_decode($request->thread) : 0
    ]);

    // * Log user activity
    HelpersController::logActivity("Commented on thread - <a href='/forum/d/$topic->slug.$topic->id'>$topic->subject </a>");

    return ResponseController::success("posted");
  }

  // * Return all threads under a forum topic
  public function threads($slug, $id)
  {
    $per_page = HelpersController::$paginate_per_page;
    $topic = ForumTopics::where('id', $id)->where('slug', $slug)->with(['threads' => function ($thread) use ($per_page) {
      return $thread->where('is_replying', 0)->paginate($per_page);
    }])->first();

    $threads = $topic->threads()->where('is_replying', 0)->paginate($per_page)->fragment('thread');

    if (!$topic) return back();

    return view('forum.thread', compact('topic', 'threads'));
  }

  // * Bookmark a forum thread
  public function bookmarkThread()
  {
    $topic = ForumTopics::find(base64_decode(request()->topic));
    $topic->bookmark()->create([
      'user_id' => Auth::id(),
      'type' => 'forum'
    ]);

    // * Log user activity
    HelpersController::logActivity("Bookmarked thread - <a href='/forum/d/$topic->slug.$topic->id'>$topic->subject </a>");

    return ResponseController::success("Thread Bookmarked");
  }

  // * Remove a thread from user bookmark
  public function removeBookmark()
  {
    $topic = ForumTopics::find(base64_decode(request()->topic));
    $topic->bookmark()->where('user_id', Auth::id())->delete();

    // * Log user activity
    HelpersController::logActivity("Bookmarked removed - <a href='/forum/d/$topic->slug.$topic->id'>$topic->subject </a>");

    return ResponseController::success("Thread removed from bookmarks");
  }

  // * Report a content posted
  public function report(Request $request, $t)
  {
    $thread = ForumThread::find(base64_decode($t));
    $thread->update([
      'flagged_as' => $request->flag,
      'flagged_by' => Auth::id()
    ]);

    // * Log user activity
    HelpersController::logActivity("Flagged a thread as $request->flag");

    return ResponseController::success("posted");
  }

  // * Return a forum created by a user of the application
  public function userForums()
  {
    $forums = Forum::where('user_id', Auth::id())->get();
    $category = ForumCategory::all();
    return view('dashboard.forum', compact("forums", "category"));
  }
}
