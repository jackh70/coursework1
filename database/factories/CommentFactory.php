<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'content' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'user_id' => 'App\Models\User'::inRandomOrder()->first()->id,
            'post_id' => 'App\Models\Post'::inRandomOrder()->first()->id,
        ];
    }
}
