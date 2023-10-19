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
  public function __construct(HelpersController $helper)
  {
  }

  // * Return all forums that has been created
  public function forums()
  {
    return view('forum.index', ['forums' => ForumCategory::all()]);
  }

  // * Create a new forum
  public function newForum(Request $request)
  {
    $forum = $request->validate([
      'name' => 'required',
      'category_id' => 'required',
      'description' => 'max:100'
    ]);

    $forum['slug'] = HelpersController::slugify($request->name);

    $request->user()->forums()->create($forum);

    // * Log user activity
    HelpersController::logActivity("Created new forum - $request->name");

    return ResponseController::_success("New forum - $request->name created");
  }

  // * Edit a forum
  public function editForum($slug, Forum $forum)
  {
    return view('user.forum.edit', ['forum' => $forum]);
  }

  // * Update a forum
  public function updateForum(Request $request)
  {
    $forum = $request->validate([
      'name' => 'required',
      'description' => 'required',
      'rules' => 'required'
    ]);

    $request->user()->forums()->update($forum);

    HelpersController::logActivity("Updated forum - $request->name");

    return ResponseController::_success("Forum updated");
  }

  // * Delete a forum
  public function deleteForum(Request $request)
  {
    $request->user()->forums()->where('id', base64_decode($request->id))->delete();

    // * Log user activity
    HelpersController::logActivity("Deleted forum - $request->name");

    return ResponseController::_success("Deleted forum - $request->name");
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

    $request->user()->forumThreads()->create([
      'topic_id' => $topic->id,
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
  public function bookmarkThread(Request $request)
  {
    $topic = ForumTopics::find(base64_decode($request->id));

    $request->user()->bookmarks()->create([
      'content_id' => $topic->id,
      'type' => 'forum'
    ]);

    // * Log user activity
    HelpersController::logActivity("Bookmarked thread - <a href='/forum/d/$topic->slug.$topic->id'>$topic->subject </a>");

    return ResponseController::success("Thread Bookmarked");
  }

  // * Remove a thread from user bookmarks
  public function removeThreadBookmark(Request $request)
  {
    $topic = ForumTopics::find(base64_decode($request->topic));
    $request->user()->bookmarks()->where([['content_id', $topic->id], ['type', 'forum']])->delete();

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
  public function userForums(Request $request)
  {
    return view('user.forum.index', ['forums' => $request->user()->forums(), 'category' => ForumCategory::all()]);
  }
}
