<?php

namespace App\Providers;

use App\Models\Country;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CountryProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    View::composer(['auth.register', 'dashboard.profile'], function ($view) {
      return $view->with('country', Country::all());
    });
  }
}
