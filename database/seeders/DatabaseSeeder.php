<?php

namespace Database\Seeders;

use App\Models\Bookmarks;
use App\Models\Todos;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Demo user',
            'email' => 'cwellkane@gmail.com',
        ]);
        Bookmarks::factory(10)->create(['user_id' => $user->id]);
        Todos::factory(5)->create(['user_id' => $user->id]);
    }
}
