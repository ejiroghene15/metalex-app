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
    Schema::create('forum_threads', function (Blueprint $table) {
      $table->id();
      $table->foreignId("topic_id")->constrained('forum_topics')->onUpdate('cascade')->onDelete('cascade');
      $table->foreignId("user_id")->constrained('users')->onUpdate('cascade')->onDelete('cascade');
      $table->text("reply");
      $table->boolean("is_replying")->default(0);
      $table->unsignedBigInteger("thread_id")->nullable();
      $table->string("flagged_as")->nullable();
      $table->integer("flagged_by")->nullable();
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
    Schema::dropIfExists('forum_threads');
  }
};
