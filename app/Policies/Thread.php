<?php

namespace App\Policies;

use App\Models\ForumThread;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Thread
{
  use HandlesAuthorization;

  /**
   * Create a new policy instance.
   *
   * @return void
   */
  public function __construct()
  {
    //
  }


  public function flag_thread(User $user, ForumThread $thread)
  {
    return $user->id !== $thread->user_id;
  }
}
