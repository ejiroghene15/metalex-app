<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
  use HasFactory, SoftDeletes;

  protected $guarded = [];

  public function createdAt(): Attribute
  {
    return Attribute::make(
      get: fn(string $value) => date("F jS, Y", strtotime($value))
    );
  }

  public function deletedAt(): Attribute
  {
    return Attribute::make(
      get: fn(string $value) => date("F jS, Y", strtotime($value))
    );
  }

  public function b_category(): BelongsTo
  {
    return $this->belongsTo(BlogCategory::class, 'category');
  }

  public function author(): BelongsTo
  {
    return $this->belongsTo(User::class, 'user_id');
  }

}