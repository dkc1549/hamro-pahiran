<?php

namespace Database\Seeders;

use App\Models\OutfitMaterial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutfitMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OutfitMaterial::factory(30)->create();
    }
}
