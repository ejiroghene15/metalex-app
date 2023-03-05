<?php

namespace App\Http\Controllers;

use App\Models\FirmProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficeController extends Controller
{
  public function setLogo(Request $request)
  {
    $request->validate(['logo' => 'required|mimes:png,jpg,jpeg,gif|max:1024'], ['max' => "Selected image exceeds maximum upload size"]);

    // * generate a unique name for the image based on the album id.
    $img_name = bin2hex("logo_" . Auth::user()->email);

    // * Store the image on cloudinary
    $image = $request->logo->storeOnCloudinaryAs('office_logo', $img_name);

    // * Update user profile image
    $user = User::find(Auth::id());

    $user->firm->update(["logo" => $image->getSecurePath()]);

    return back()->withMessage("Firm Logo Updated")->withStatus("success");
  }

  public function updateProfile(Request $request)
  {
    $request->validate([
      'firm_name' => 'exclude_unless:user_type,firm|required',
      'address' => 'exclude_unless:user_type,firm|required',
      'university' => 'exclude_unless:user_type,lawyer|required',
      'law_school' => 'exclude_unless:user_type,lawyer|required',
      'specialization' => 'required',
      'offers_probono' => 'required',
      'description' => 'nullable',
    ]);

    $request['specialization'] = collect(json_decode(request('specialization')))->implode('value', ',');

    // * Update user profile image
    $user = User::find(Auth::id());

    $user->{$user->user_type}->update($request->all());

    return back()->withMessage("Office Profile Updated")->withStatus("success");
  }

  public function myAssociates()
  {
    $user = User::find(Auth::id());
    $associates = $user->firm->associates;
    return view('dashboard.office.associates')->withAssociates($associates);
  }

  public function attachAssociate(FirmProfile $firm, Request $request)
  {
    $request->validate(['email' => 'bail|required|email']);

    if ($request->email === Auth::user()->email) return back()->withMessage("You cannot add yourself as an associate")->withStatus("danger");

    $associate = User::where('email', $request->email)->pluck('id');

    if (count($associate)) {
      $firm->associates()->syncWithoutDetaching($associate);
      return back()->withMessage("Associate added")->withStatus("success");
    }

    return back()->withMessage("Sorry!! This lawyer could not be added as an associate to your firm possibly because do not have an account on this platform.")->withStatus("danger");
  }

  public function detachAssociate(FirmProfile $firm, Request $request)
  {
    $associate = base64_decode($request->user_id);

    $firm->associates()->detach([$associate]);

    return back()->withMessage("Associate removed")->withStatus("success");
  }
}
