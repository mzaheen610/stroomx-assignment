<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Schedule;
use App\Models\Franchise;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement([
                'Morning Session',
                'Afternoon Session',
                'Evening Session',
                'Weekend Session',
                'Special Session'
            ]),
            'start_time' => fake()->datetime('H:i:s'),
            'end_time' => fake()->datetime('H:i:s'),
            'franchise_id' => Franchise::factory()
        ];
    }
}
