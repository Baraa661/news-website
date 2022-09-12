<?php

namespace Database\Factories;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id'=> Category::all()->random()->id,
            'title'=> $this->faker->paragraph(),
            'image'=> $this->faker->imageUrl(640,480),
            'content'=> $this->faker->paragraph(10),
        ];
    }
}
