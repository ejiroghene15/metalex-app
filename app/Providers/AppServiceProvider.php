<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
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
    Schema::defaultStringLength(191); // or any value below or equal to 191

    // * If on localhost, send every mail to test address
    if ($this->app->environment('local')) {
      Mail::alwaysTo(env('MAIL_TO_TEST_ADDRESS'));
    }

//    if (!$this->app->runningInConsole()) {
//      // * These are the flag categories under which a content is reported
//
//    }
// Set the current page manually
    Paginator::currentPageResolver(function () {
      request()->query('pageSize', 10);
    });

    // * Set Pagination to use bootstrap 5 styling
    Paginator::useBootstrapFive();
  }
}
