<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawyerProfile extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'specialization',
    'description',
    'offers_probono',
    'university',
    'law_school',
    'year_of_call'
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
