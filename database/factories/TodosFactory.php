<?php

namespace Database\Factories;

use App\Models\Todos;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Todos>
 */
class TodosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'due_date' => $this->faker->datetime(),
            'start_date' => $this->faker->dateTime(),
            'user_id' => User::factory()
        ];
    }
}
