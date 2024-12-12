<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;
use App\Models\User;

class RecipeSeeder extends Seeder
{
    public function run()
    {
        // Fetch some existing users
        $users = User::all();

        if ($users->isEmpty()) {
            // Add some users first if none exist
            $users = User::factory(5)->create();
        }

        // Create recipes for each user
        foreach ($users as $user) {
            Recipe::create([
                'title' => 'Recipe by ' . $user->username,
                'description' => 'This is a description of a recipe made by ' . $user->username,
                'image' => null, // You can replace this with dummy image paths
                'user_id' => $user->id,
            ]);
        }
    }
}
