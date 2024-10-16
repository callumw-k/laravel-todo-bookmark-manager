<?php

namespace Database\Factories;

use App\Models\Bookmarks;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Bookmarks>
 */
class BookmarksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => fake()->sentence(),
            'og_url' => fake()->url(),
            'shortened_url' => fake()->url(),
            'og_image' => fake()->url(),
        ];
    }

}
