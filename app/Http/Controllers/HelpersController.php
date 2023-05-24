<?php

namespace App\Http\Controllers;

class HelpersController extends Controller
{
  static $paginate_per_page = 10;

  public static function logActivity($activity)
  {
    // * Log user activity
    return request()->user()->activity()->create(['activity' => $activity]);
  }

  public static function slugify($string): string
  {
    // Replaces all spaces with hyphens.
    $string = str_replace(' ', '-', $string);

    // Removes special chars.
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    // Replaces multiple hyphens with single one.
    return strtolower(preg_replace('/-+/', '-', $string));
  }

}
