<?php

namespace Database\Seeders;

use App\Models\Outfit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutfitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 20 outfits
        Outfit::factory(20)->create();
    }
}
