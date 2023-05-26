<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post' => fake()->randomElement(Post::all()->pluck('id')->toArray()),
            'category' => fake()->randomElement(Category::all()->pluck('id')->toArray())
        
        ];
    }
}
