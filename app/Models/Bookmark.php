<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function forum()
  {
    return $this->belongsTo(ForumTopics::class, 'content_id');
  }

  public function blog()
  {
    return $this->belongsTo(Blog::class, 'content_id');
  }
}
