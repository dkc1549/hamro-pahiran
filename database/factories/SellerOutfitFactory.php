<?php

namespace Database\Factories;

use App\Models\Outfit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SellerOutfit>
 */
class SellerOutfitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'outfit_id' => Outfit::factory(),
            'seller_name' => $this->faker->name,
            'seller_contact' => $this->faker->phoneNumber,
            'seller_address' => $this->faker->address,
            'price' => $this->faker->randomFloat(2, 500, 5000),
            'stock' => $this->faker->numberBetween(1, 50),
        ];
    }
}
