<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Country;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CustomProvider extends ServiceProvider
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
    View::composer(['*'], function ($view) {
      return $view->with([
        'current_route' => Route::currentRouteName(),
        'categories' => BlogCategory::all(),
        'paginate_per_page' => env('APP_PAGINATE_PER_PAGE') # Using this as the default value for the no of records to show on each display/page for paginated records
      ]);
    });

    View::composer(['auth.register', 'user.*'], function ($view) {
      return $view->with('country', Country::all());
    });

    View::composer(['admin.*'], function ($view) {
      return $view->with([
        'posts' => Blog::withoutTrashed()->get(),
        'deleted_posts' => Blog::onlyTrashed()->get()
      ]);
    });

    View::composer(['publications.*'], function ($view) {
      return $view->with([
        'posts' => Blog::withoutTrashed(),
        'color_tag' => collect(['primary', 'secondary', 'success', 'danger', 'warning', 'info'])->random(),
        'linkedin_share_link' => "https://www.linkedin.com/sharing/share-offsite/?url=" . request()->fullUrl(),
        'twitter_share_link' => "https://twitter.com/intent/tweet?text=" . request()->fullUrl(),
        "facebook_share_link" => "https://www.facebook.com/sharer/sharer.php?u=" . request()->fullUrl(),
        "whatsapp_share_link" => "whatsapp://send?text=" . request()->fullUrl()
      ]);
    });
  }
}