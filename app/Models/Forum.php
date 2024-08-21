<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Forum extends Model
{

  use HasFactory, SoftDeletes, Sluggable;

  protected $guarded = [];

  public function sluggable(): array
  {
    return [
      'slug' => [
        'source' => 'name'
      ]
    ];
  }

  public function category(): BelongsTo
  {
    return $this->belongsTo(ForumCategory::class);
  }

  public function topics(): HasMany
  {
    return $this->hasMany(ForumTopics::class);
  }

  public function threads()
  {
    return $this->through('topics')->has('threads');
  }

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }
}
