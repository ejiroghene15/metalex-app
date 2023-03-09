<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
  public static function updateBaseProfile(Request $request)
  {
    $request->validate([
      'first_name' => 'required',
      'last_name' => 'required',
      'country' => 'required',
      'state' => 'required',
      'city' => 'nullable'
    ]);

    // * Update users base profile
    $request->user()->update($request->all());

    // * Log user activity
    $request->user()->activity()->create(['activity' => 'Updated basic profile details']);

    return back()->withMessage('Profile Updated')->withStatus('success');
  }

  public static function updateAvatar(Request $request)
  {
    $request->validate(['avatar' => 'required|mimes:png,jpg,jpeg,gif|max:1024'], ['max' => "Selected image exceeds maximum upload size"]);

    // * generate a unique name for the image based on the album id.
    $img_name = bin2hex("user_" . Auth::user()->email);

    // * Store the image on cloudinary
    $image = $request->avatar->storeOnCloudinaryAs('user_avatars', $img_name);

    // * Update user profile image
    $request->user()->update(["avatar" => $image->getSecurePath()]);

    // * Log user activity
    $request->user()->activity()->create(['activity' => 'Updated profile avatar']);

    return back()->withMessage("Profile image updated")->withStatus("success");
  }
}
