<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class LawyerPolicy
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

  public function certificates(User $user)
  {
    return $user->user_type === "lawyer" ? Response::allow() : Response::deny("Unauthorized access");
  }
}
