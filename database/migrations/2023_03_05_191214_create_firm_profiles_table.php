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
    Schema::create('firm_profiles', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
      $table->string('firm_name')->nullable();
      $table->string('logo')->nullable();
      $table->string('specialization')->nullable();
      $table->text("address")->nullable();
      $table->text('description')->nullable();
      $table->char('offers_probono', 5)->default('no');
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
    Schema::dropIfExists('firm_profiles');
  }
};
