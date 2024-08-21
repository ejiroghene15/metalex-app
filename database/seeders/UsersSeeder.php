<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::factory()->count(3)->sequence(
      ['user_type' => 'client'],
      ['user_type' => 'lawyer'],
      ['user_type' => 'firm']
    )->create();
  }
}
