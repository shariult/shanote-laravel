<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void {
    // create the notes table
    Schema::create('notes', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('user_id');
      $table->string('title');
      $table->string('description');
      $table->text('description_long')->nullable();
      $table->enum('color', ['#705AF1', '#E73B62', '#EAA11A', '#40BB7F', '#4CA2E8', '#21283B'])->nullable();
      $table->string('image_path')->nullable();
      $table->string('file_path')->nullable();
      $table->boolean('is_completed')->default(false);
      $table->boolean('is_private')->default(true);
      $table->boolean('is_pinned')->default(false);
      $table->string('share_key')->nullable();
      $table->timestamps();

      // add user foreign key
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    // remove foreign key first
    Schema::table('notes', function (Blueprint $table) {
      $table->dropForeign(['user_id']);
      $table->dropColumn(['user_id']);
    });

    // delete notes table
    Schema::dropIfExists('notes');
  }
};