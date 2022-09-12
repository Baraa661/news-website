<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
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
            'news_id'=> News::all()->random()->id,
            'comment'=> $this->faker->paragraph(1),
            'name'=> $this->faker->name(),
            'email'=> $this->faker->freeEmail(),
            'active'=> $this->faker->boolean(),
        ];
    }
}
