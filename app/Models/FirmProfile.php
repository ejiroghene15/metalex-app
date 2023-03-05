<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirmProfile extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'firm_name',
    'logo',
    'specialization',
    'address',
    'description',
    'offers_probono',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function associates()
  {
    return $this->belongsToMany(User::class, 'associates', 'firm_id', 'lawyer_id');
  }
}
