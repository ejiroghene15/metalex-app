<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
      $table->id();
      $table->string('cover_image');
      $table->string('title');
      $table->string('subtitle')->nullable();
      $table->string('authors');
      $table->string('isbn')->nullable();
      $table->string('edition')->nullable();
      $table->date('publication_date')->nullable();
      $table->string('publisher')->nullable();
      $table->string('language')->nullable();
      $table->string('category');
      $table->string('tags')->nullable();
      $table->text('short_description')->nullable();
      $table->text('about_book')->nullable();
      $table->text('table_of_contents')->nullable();
      $table->integer('number_of_pages')->nullable();
      $table->string('format')->nullable();
      $table->decimal('price', 10, 2)->nullable();
      $table->string('currency')->default('USD');
      $table->string('status')->nullable();
      $table->string('file_path')->nullable();
      $table->string('external_link')->nullable();
      $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
