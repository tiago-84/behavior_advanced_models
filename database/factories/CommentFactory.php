<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'post' => fake()->randomElement(User::all()->pluck('id')->toArray()),
        'user' => fake()->randomElement(User::all()->pluck('id')->toArray()),
        'content' => fake()->paragraph('1')
        ];
    }
}
