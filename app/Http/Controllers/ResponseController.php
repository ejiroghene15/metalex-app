<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
  public static function success($message, $data = null)
  {
    return response()->json([
      "status" => "success",
      "code" => 1,
      "message" => $message,
      "data" => $data
    ]);
  }

  public static function error($message, $data = null)
  {
    return response()->json([
      "status" => "error",
      "code" => 3,
      "message" => $message,
      "data" => $data
    ], 400);
  }
}
