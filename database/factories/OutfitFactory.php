<?php

namespace Database\Factories;

use App\Models\EthnicGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Outfit>
 */
class OutfitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ethnic_group_id' => EthnicGroup::inRandomOrder()->first()->id ?? EthnicGroup::factory(),
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'photo' => 'outfits/default.jpg',
            'used_in_festivals' => $this->faker->boolean(80), // 80% chance it's used in festivals
            'used_in_rituals' => $this->faker->boolean(50),
        ];
    }
}
