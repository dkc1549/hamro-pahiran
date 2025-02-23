<?php

namespace Database\Seeders;

use App\Models\SellerOutfit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellerOutfitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SellerOutfit::factory(30)->create();
    }
}
