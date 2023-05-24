<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ForumThread extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function topic(): BelongsTo
  {
    return $this->belongsTo(ForumTopics::class);
  }

  public function replies()
  {
    return $this->hasMany(ForumThread::class, 'thread_id');
  }

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

}
