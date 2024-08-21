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
    Schema::create('certifications', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained("users")->onUpdate("cascade")->onDelete("cascade");
      $table->string("type")->nullable();
      $table->string("institution")->nullable();
      $table->string("title")->nullable();
      $table->string("certificate")->nullable();
      $table->string("additional_info")->nullable();
      $table->string("unique_id")->nullable();
      $table->boolean("confirmation_status")->default(0);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('certifications');
  }
};
