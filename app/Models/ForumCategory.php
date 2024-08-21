<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ForumCategory extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function forum(): HasMany
  {
    return $this->hasMany(Forum::class, 'category_id');
  }
}
