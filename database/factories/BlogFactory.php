<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition(): array
    {
        return [
            'thumbnail' => $this->faker->imageUrl(),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->paragraphs(3, true),
            'status' => $this->faker->randomElement(['published', 'draft', 'pending']),
            'token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),

            'user_id' => User::factory(),
            'category' => BlogCategory::factory(),
        ];
    }
}
