<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class NoteFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array {
    return [
      "user_id"          => User::factory(),
      "title"            => $this->faker->word(7),
      "description"      => $this->faker->paragraph(1, true),
      "description_long" => $this->faker->paragraph(4, true),
      "color"            => $this->faker->randomElement(['#705AF1', '#E73B62', '#EAA11A', '#40BB7F', '#4CA2E8', '#21283B']),
      "image_path"       => $this->faker->imageUrl(640, 480, 'business', true, 'note'),
      "is_completed"     => $this->faker->boolean(),
      "is_pinned"        => $this->faker->boolean(1),
      "is_private"       => $this->faker->boolean(99),
    ];
  }
}