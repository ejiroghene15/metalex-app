<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('blogs', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
      $table->string('thumbnail')->nullable()->default("");
      $table->string('title')->nullable();
      $table->string('slug')->nullable();
      $table->foreignId('category')->nullable();
      $table->longText('body')->nullable();
      $table->char('status', '10')->nullable();
      $table->char('token', '20')->nullable();
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
    Schema::dropIfExists('blogs');
  }
};
