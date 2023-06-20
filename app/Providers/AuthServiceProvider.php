<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\ForumThread;
use App\Models\LawyerProfile;
use App\Policies\LawyerPolicy;
use App\Policies\Thread;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AuthServiceProvider extends ServiceProvider
{
  /**
   * The model to policy mappings for the application.
   *
   * @var array<class-string, class-string>
   */
  protected $policies = [
    LawyerProfile::class => LawyerPolicy::class,
    ForumThread::class => Thread::class,
  ];

  /**
   * Register any authentication / authorization services.
   *
   * @return void
   */
  public function boot()
  {
    $this->registerPolicies();

    View::composer('*', function ($view) {
      return $view->with('user', Auth::user());
    });

  }
}
