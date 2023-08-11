<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
  use HasApiTokens, HasFactory, Notifiable, CanResetPassword;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'first_name',
    'last_name',
    'email',
    'avatar',
    'password',
    'country',
    'address',
    'state',
    'city',
    'zip_code',
    'user_type',
    'firm_name',
    'is_verified',
    'account_status'
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function createdAt(): Attribute
  {
    return Attribute::make(
      get: fn(string $value) => date("F jS, Y", strtotime($value))
    );
  }

  // * A users full name
  public function fullName()
  {
    return $this->first_name . ' ' . $this->last_name;
  }

  // * Firm associated with the user if they signed up to offer services as a firm
  public function firm()
  {
    return $this->hasOne(FirmProfile::class)->withDefault();
  }

  // * Get the users profile details if they are a lawyer
  public function lawyer()
  {
    return $this->hasOne(LawyerProfile::class)->withDefault();
  }

  // * Get all activities associated with the user
  public function activity()
  {
    return $this->hasMany(Activity::class)->orderByDesc('id');
  }

  public function certificates()
  {
    return $this->hasMany(Certification::class);
  }

  // * Forums associated with a user
  public function forums(): HasMany
  {
    return $this->hasMany(Forum::class);
  }

  // * Blog Posts associated with a user
  public function blog(): HasMany
  {
    return $this->hasMany(Blog::class);
  }

  // * All bookmarked contents by the user
  public function bookmarks(): HasMany
  {
    return $this->hasMany(Bookmark::class);
  }

  // * All forum topics created by a user
  public function forumTopics(): HasMany
  {
    return $this->hasMany(ForumTopics::class);
  }

  // * All thread content posted by a user
  public function forumThreads(): HasMany
  {
    return $this->hasMany(ForumThread::class);
  }

}
