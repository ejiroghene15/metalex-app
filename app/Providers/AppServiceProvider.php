<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Mail;
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

    // * Set Pagination to use bootstrap 5 styling
    Paginator::useBootstrapFive();
  }
}
