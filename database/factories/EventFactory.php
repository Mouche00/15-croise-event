<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->sentence,
            'image' => 'storage/uploads/default.jpg',
            'venue' => $this->faker->address,
            'seats' => $this->faker->numberBetween(1, 1000),
            'price' => $this->faker->numberBetween(1, 1000),
            'date' => $this->faker->dateTime(now()->addYear(), 'Africa/Casablanca'),
            'validated_at' => now(),
            'organizer_id' => User::factory()->create(),
            'category_id' => Category::factory()->create()
        ];
    }
}
