<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Country;
use App\Models\ForumThread;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
        'directory' => User::whereIn('user_type', ['lawyer', 'firm'])->get(),
        'country' => Country::all(),
        'color_tag' => collect(['primary', 'secondary', 'success', 'danger', 'warning', 'info'])->random(),
        'current_route' => Route::currentRouteName(),
        'categories' => BlogCategory::all(),
        'paginate_per_page' => env('APP_PAGINATE_PER_PAGE') # Using this as the default value for the no of records to show on each display/page for paginated records
      ]);
    });


    View::composer(['user.index', 'admin.index'], function ($view) {
      return $view->with([
        'latest_threads_for_dashboard' => ForumThread::inRandomOrder()->latest()->limit(6)->get(),
        'posts_for_dashboard' => Blog::withoutTrashed()->inRandomOrder()->latest()->limit(5)->get(),
      ]);
    });

    View::composer(['admin.*'], function ($view) {
      return $view->with([
        'posts' => Blog::withoutTrashed()->get(),
        'deleted_posts' => Blog::onlyTrashed()->get()
      ]);
    });

    View::composer(['publications.*', 'about', 'forum.*'], function ($view) {
      return $view->with([
        'posts' => Blog::withoutTrashed(),
        'flags' => DB::table('flag_content_category')->get(['id', 'name', 'description']),
        'linkedin_share_link' => "https://www.linkedin.com/sharing/share-offsite/?url=" . request()->fullUrl(),
        'twitter_share_link' => "https://twitter.com/intent/tweet?text=" . request()->fullUrl(),
        "facebook_share_link" => "https://www.facebook.com/sharer/sharer.php?u=" . request()->fullUrl(),
        "whatsapp_share_link" => "whatsapp://send?text=" . request()->fullUrl()
      ]);
    });
  }
}
