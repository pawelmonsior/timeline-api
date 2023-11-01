<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TimelineEvent>
 */
class TimelineEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->word();
        $description = $this->faker->text();
        $start_date = $this->faker->dateTime();
        $end_date = $this->faker->dateTime();

        return [
            'category_id' => Category::factory(),
            'name' => $name,
            'description' => $description,
            'start_date' => $start_date,
            'end_date' => $end_date
        ];
    }
}
