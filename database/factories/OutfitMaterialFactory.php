<?php

namespace Database\Factories;

use App\Models\Outfit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OutfitMaterial>
 */
class OutfitMaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'outfit_id' => Outfit::factory(),
            'outfit_id' => Outfit::inRandomOrder()->first()->id ?? Outfit::factory(),
            'material_name' => $this->faker->randomElement(['Cotton', 'Wool', 'Silk', 'Hemp', 'Linen']),
            'description' => $this->faker->sentence(),
        ];
    }
}
