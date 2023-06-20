<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    // * If on localhost, send every mail to test address
    if ($this->app->environment('local')) {
      Mail::alwaysTo(env('MAIL_TO_TEST_ADDRESS'));
    }

    // * These are the flag categories under which a content is reported
    View::share('flags', DB::table('flag_content_category')->get(['id', 'name', 'description']));

    // * Set Pagination to use bootstrap 5 styling
    Paginator::useBootstrapFive();
  }
}
