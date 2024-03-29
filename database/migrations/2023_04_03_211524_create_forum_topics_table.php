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
    Schema::create('forum_topics', function (Blueprint $table) {
      $table->id();
      $table->foreignId("forum_id");
      $table->foreignId("user_id")->constrained('users')->onUpdate('cascade')->onDelete('cascade');;
      $table->string("subject");
      $table->string("slug");
      $table->longText("body");
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
    Schema::dropIfExists('forum_topics');
  }
};
