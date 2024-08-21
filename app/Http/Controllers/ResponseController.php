<?php

namespace App\Http\Controllers;

class ResponseController extends Controller
{
  // * For API requests
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

  // * For internal HTTP Requests
  public static function _success($message)
  {
    return back()->withMessage($message)->withStatus("success");
  }

  public static function _error($message)
  {
    return back()->withMessage($message)->withStatus("danger");
  }
}
