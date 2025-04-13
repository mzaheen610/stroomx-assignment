<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Franchise;
use App\Models\Guardian;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guardian>
 */
class GuardianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->numerify('##########'),
            'relationship' => fake()->randomElement([
                'Father',
                'Mother',
                'Guardian',
                'Grandparent',
                'Uncle',
                'Aunt'
            ]),
            'franchise_id' => Franchise::factory()
        ];
    }
}
