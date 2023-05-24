<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ForumTopics extends Model
{
  use HasFactory;

  protected $guarded = [];

  protected $with = ['threads'];

  public function forum(): BelongsTo
  {
    return $this->belongsTo(Forum::class);
  }

  public function threads(): HasMany
  {
    return $this->hasMany(ForumThread::class, 'topic_id');
  }

  public function views(): Attribute
  {
    return Attribute::make(
      set: fn($value) => $value / 2
    );
  }

  public function bookMark(): HasMany
  {
    return $this->hasMany(Bookmark::class, 'content_id');
  }

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }
}
