<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'first_name' => fake()->firstName,
      'last_name' => fake()->lastName,
      'firm_name' => fake()->company,
      'email' => fake()->unique()->safeEmail,
      'email_verified_at' => now(),
      'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      'city' => fake()->city(),
      'state' => '',
      'country' => fake()->country,
      'address' => fake()->address,
      'zip_code' => fake()->postcode,
      'is_verified' => 1,
      'account_status' => 1,
      'remember_token' => Str::random(10),
    ];
  }

  /**
   * Indicate that the model's email address should be unverified.
   *
   * @return static
   */
  public function unverified()
  {
    return $this->state(fn(array $attributes) => [
      'email_verified_at' => null,
    ]);
  }

  public function configure()
  {
    return $this->afterMaking(function (User $user) {
      //
    })->afterCreating(function (User $user) {
      $user_type = $user->user_type;
      // * Create a profile for the user based on the user type
      if ($user_type !== 'client') $user->$user_type()->create(
        [
          'specialization' => fake()->jobTitle,
          'offers_probono' => rand(0, 1),
        ]
      );
    });
  }


}
