<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BlogCategory extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function createdAt(): Attribute
  {
    return Attribute::make(
      get: fn(string $value) => date("F jS, Y", strtotime($value))
    );
  }

  public function updatedAt(): Attribute
  {
    return Attribute::make(
      get: fn(string $value) => date("F jS, Y", strtotime($value))
    );
  }

  public function blog_post(): HasMany
  {
    return $this->hasMany(Blog::class, 'category');
  }
}
