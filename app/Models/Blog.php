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

  public function slug(): Attribute
  {
    return Attribute::make(
      get: fn(string $value) => html_entity_decode($value),
    );
  }

  public function title(): Attribute
  {
    return Attribute::make(
      get: fn(string $value) => html_entity_decode($value),
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

  public function readTime(): string
  {
    $wordCount = str_word_count($this->body);
    $readingTime = round($wordCount / 200);
    return max($readingTime, 1) . " Min Read";
  }

  public function excerpt($limit = 20): string
  {
    // Strip HTML tags and trim whitespace
    $text = strip_tags(trim($this->body, '&nbsp;'));

    // Break the text into an array of words
    $words = explode(' ', $text);

    // If the number of words is less than or equal to the limit, return the full text
    if (count($words) <= $limit) {
      return $text;
    }

    // Slice the words array to get only the desired number of words
    $excerpt = array_slice($words, 0, $limit);

    // Join the words back into a string and append ellipsis
    return implode(' ', $excerpt) . '...';
  }

}
