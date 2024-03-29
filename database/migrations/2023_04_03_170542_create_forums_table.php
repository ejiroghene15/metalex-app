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
    Schema::create('forums', function (Blueprint $table) {
      $table->id();
      $table->foreignId("user_id");
      $table->string("name");
      $table->string("slug");
      $table->foreignId("category_id");
      $table->text("description")->nullable();
      $table->boolean("status")->default(0);
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
    Schema::dropIfExists('forums');
  }
};
