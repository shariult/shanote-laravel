<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder {
  use WithoutModelEvents;

  /**
   * Seed the application's database.
   */
  public function run(): void {
    // User::factory(10)->create();
// clear previous data
    Schema::disableForeignKeyConstraints();
    DB::table('users')->truncate();
    DB::table('notes')->truncate();
    Schema::enableForeignKeyConstraints();

// seed new data
    $this->call(UserSeeder::class);
    $this->call(NoteSeeder::class);

  }
}