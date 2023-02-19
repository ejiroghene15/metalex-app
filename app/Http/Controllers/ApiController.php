<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
  const CSC_BASE_URL = "https://api.countrystatecity.in/v1/countries/";

  public static function getCountry($country_id)
  {
    return self::CSC()->get(SELF::CSC_BASE_URL . "$country_id")['name'];
  }

  public static function getCountryStates($country_id)
  {
    return self::CSC()->get(SELF::CSC_BASE_URL . "$country_id/states");
  }

  public static function CSC()
  {
    return Http::withHeaders(['X-CSCAPI-KEY' => env('CSC_API_TOKEN')]);
  }
}
