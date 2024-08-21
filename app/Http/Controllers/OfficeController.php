<?php

namespace App\Http\Controllers;

use App\Models\FirmProfile;
use App\Models\LawyerProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficeController extends Controller
{
  public function setLogo(Request $request)
  {
    $request->validate(['logo' => 'required|mimes:png,jpg,jpeg|max:1024'], ['max' => "Selected image exceeds maximum upload size"]);

    // * generate a unique name for the image based on the album id.
    $img_name = bin2hex("logo_" . Auth::user()->email);

    // * Store the image on cloudinary
    $image = $request->logo->storeOnCloudinaryAs('office_logo', $img_name);

    // * Update user profile image
    $request->user()->firm->update(["logo" => $image->getSecurePath()]);

    // * Log user activity
    HelpersController::logActivity('Updated firm logo');

    return ResponseController::_success("Firm Logo Updated");
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
    $request->user()->{$request->user_type}->update($request->all());

    // * Log user activity
    HelpersController::logActivity('Updated office profile details');

    return ResponseController::_success("Office Profile Updated");
  }

  public function myAssociates(Request $request)
  {
    $associates = $request->user()->firm->associates;
    return view('dashboard.office.associates')->withAssociates($associates);
  }

  public function attachAssociate(FirmProfile $firm, Request $request)
  {
    $request->validate(['email' => 'bail|required|email']);

    if ($request->email === Auth::user()->email) return back()->withMessage("You cannot add yourself as an associate")->withStatus("danger");

    $associate = User::where('email', $request->email)->pluck('id');

    if (count($associate)) {
      $firm->associates()->syncWithoutDetaching($associate);

      // * Log user activity
      HelpersController::logActivity("Added a new associate <b>$request->email</b> to the firm");

      return ResponseController::_success("Associate added");
    }

    return ResponseController::_error("Sorry!! This lawyer could not be added as an associate to your firm possibly because do not have an account on this platform.");
  }

  public function detachAssociate(FirmProfile $firm, Request $request)
  {
    $associate = base64_decode($request->user_id);

    $associate_details = User::find($associate)->first();

    $firm->associates()->detach([$associate]);

    // * Log user activity
    HelpersController::logActivity("Removed associate <b>$associate_details->email</b> from firm");

    return ResponseController::_error("Associate Removed");
  }

  public function myCertificates(Request $request)
  {
    $this->authorize('certificates', LawyerProfile::class);
    return view('dashboard.office.certifications')->withCertificates($request->user()->certificates);
  }

  public function addCertificate(Request $request)
  {
    $this->authorize('certificates', LawyerProfile::class);

    $certificate = $request->validate(
      [
        'certificate' => 'bail|required|mimes:png,jpg,jpeg|max:1024',
        'type' => 'required',
        'institution' => 'required',
        'title' => 'required',
        'additional_info' => 'required',
      ],
      [
        'max' => "Selected image exceeds maximum upload size",
        'required' => ":attribute is required"
      ]
    );

    // * generate a unique name for the image based on the album id.
    $certificate['unique_id'] = $unique_id = bin2hex(random_bytes(4));

    // * Store the image on cloudinary
    $image = $request->certificate->storeOnCloudinaryAs('certificate', $unique_id);

    // * get the url returned from cloudinary after certificate has been successfully uploaded
    $certificate['certificate'] = $image->getSecurePath();

    $request->user()->certificates()->create($certificate);

    // * Log user activity
    HelpersController::logActivity("Uploaded certificate $request->title");

    return ResponseController::_success("Certificate Uploaded");
  }
}
