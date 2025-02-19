<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ApiController extends Controller
{
  const CSC_BASE_URL = "https://api.countrystatecity.in/v1/countries/";

  public static function getCountry($country_id)
  {
    return self::CSC()->get(SELF::CSC_BASE_URL . "$country_id")['name'];
  }

  public static function CSC()
  {
    return Http::withHeaders(['X-CSCAPI-KEY' => env('CSC_API_TOKEN')]);
  }

  public static function getCountryStates($country_id)
  {
    return self::CSC()->get(SELF::CSC_BASE_URL . "$country_id/states");
  }

  public function sendContactMail(Request $request)
  {
    $response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
      'secret' => config('app.google_captcha_site_secret'),
      'response' => "$request->captcha",
    ]);

    if (+$response->json('success') === 1) {
      Mail::later(now()->addMinutes(10), new ContactMessage($request->all()));
      return response()->json(['status' => 'success']);
    }
  }
}
