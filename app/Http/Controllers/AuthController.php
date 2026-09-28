<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistration;
use App\Mail\RegisteredMail;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class AuthController extends Controller
{
  public function resendVerificationLink(Request $request)
  {
    $request->user()->sendEmailVerificationNotification();

    // * Log user activity
    HelpersController::logActivity('Initiated a resend email verification action');

    return back()->withMessage('Verification link sent!')->withStatus("success");
  }

  public function verifyEmail(EmailVerificationRequest $request)
  {
    $request->fulfill();
    $user = json_decode($request->user());

    User::find($user->id)->update([
      "is_verified" => 1,
      "account_status" => 1,
    ]);

    // * Log user activity
    HelpersController::logActivity('Email successfully verified');

    return redirect()->route('home');
  }


  public function logout(Request $request)
  {
    // * Log user activity
    HelpersController::logActivity('Logged out');
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('home');
  }
}
