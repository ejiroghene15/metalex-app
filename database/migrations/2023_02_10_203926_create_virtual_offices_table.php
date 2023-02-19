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
    Schema::create('virtual_offices', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
      $table->string('user_type');
      $table->string('firm_name');
      $table->string('profile_image');
      $table->string('specialization')->nullable();
      $table->text("physical_office_address")->nullable();
      $table->text('description')->nullable();
      $table->char('offers_probono', 5)->default('no');
      $table->string('year_of_call')->nullable();
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
    Schema::dropIfExists('virtual_offices');
  }
};
