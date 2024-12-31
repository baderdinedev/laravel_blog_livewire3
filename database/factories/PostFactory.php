<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'title' => $this->faker->sentence(5),
            'slug' => $this->faker->unique()->slug(3),
            'image' => $this->faker->imageUrl(640, 480, 'posts', true, 'Faker'), // Adjusted for clarity
            'body' => $this->faker->paragraphs(3, true), // Corrected and included for the body field
            'published_at' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'featured' => $this->faker->boolean(10), // 10% chance to be true
        ];
    }
}
