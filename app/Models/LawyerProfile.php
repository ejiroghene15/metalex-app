<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }
}
