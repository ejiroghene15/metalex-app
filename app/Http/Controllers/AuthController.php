<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistration;
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
  public function login(Request $request)
  {
    $credentials = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($credentials, $request->has('remember_me'))) {
      $request->session()->regenerate();

      // * Log user activity
      $request->user()->activity()->create(['activity' => 'Logged in']);

      return redirect()->intended(route('home'));
    }

    return back()->withMessage('Incorrect login details')->withStatus("danger");
  }

  public function register(UserRegistration $request)
  {
    $validated = $request->safe()->merge([
      'specialization' => collect(json_decode(request('specialization')))->implode('value', ','),
      'password' => Hash::make(request('password')),
    ])->all();

    // * New user record
    $user = User::create($validated);

    // * Create a profile for the user based on the user type
    if ($user->user_type !== 'client') $user->{$validated['user_type']}()->create($validated);

    // * Send an email verification message to the newly registered user
    event(new Registered($user));

    // * Log user activity
    $user->activity()->create(['activity' => 'Created an account']);

    return ResponseController::success("A verification link has been sent to your email inbox, kindly click on the link to verify your account.");
  }

  public function resendVerificationLink(Request $request)
  {
    $request->user()->sendEmailVerificationNotification();

    // * Log user activity
    $request->user()->activity()->create(['activity' => 'Initiated a resend email verification action']);

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
    $request->user()->activity()->create(['activity' => 'Email successfully verified']);

    return redirect()->route('home');
  }

  public function sendPasswordResetLink(Request $request)
  {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
      $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
      ? ResponseController::success(__($status))
      : ResponseController::error(__($status));
  }

  public function resetPassword(Request $request)
  {
    $request->validate([
      'token' => 'required',
      'email' => 'required|email',
      'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
      $request->only('email', 'password', 'password_confirmation', 'token'),
      function ($user, $password) {
        $user->forceFill([
          'password' => Hash::make($password)
        ])->setRememberToken(Str::random(60));

        $user->save();

        event(new PasswordReset($user));
      }
    );

    return $status === Password::PASSWORD_RESET
      ? redirect()->route('login')->withMessage(__($status))->withStatus("success")
      : back()->withMessage(__($status))->withStatus("danger");
  }

  public function logout(Request $request)
  {
    // * Log user activity
    $request->user()->activity()->create(['activity' => 'Logged out']);

    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('home');
  }
}
