<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualOffice extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'user_type',
    'specialization',
    'physical_office_address',
    'description',
    'offers_probono',
    'year_of_call',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function associates()
  {
    return $this->belongsToMany(User::class, 'associates', 'office_id', 'user_id');
  }
}
