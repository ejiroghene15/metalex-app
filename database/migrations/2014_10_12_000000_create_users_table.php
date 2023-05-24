<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('first_name')->nullable();
      $table->string('last_name')->nullable();
      $table->text('firm_name')->nullable();
      $table->string('avatar')->default("https://res.cloudinary.com/jiroghene/image/upload/v1583814631/profilephotos/placeholder_afglhp.jpg");
      $table->string('email')->unique();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password');
      $table->string('user_type')->nullable();
      $table->string('city')->nullable();
      $table->string('state')->nullable();
      $table->string('country')->nullable();
      $table->string('address')->nullable();
      $table->string('zip_code')->nullable();
      $table->boolean('is_verified')->default(0);
      $table->boolean('account_status')->default(0);
      $table->rememberToken();
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('users');
  }
};
