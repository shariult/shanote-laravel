<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::table('users', function (Blueprint $table) {
      // add columns to user table
      $table->string('username')->after('name');
      $table->string('profile_image')->nullable()->after('username');
      $table->integer('age')->after('profile_image');
      $table->string('country')->nullable()->after('age');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::table('users', function (Blueprint $table) {
      // drop the columns created
      $table->dropColumn(['username', 'age', 'profile_image', 'country']);
    });
  }
};