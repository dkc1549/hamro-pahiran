<?php

namespace Database\Seeders;

use App\Models\EthnicGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EthnicGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Manually adding real Nepali ethnic groups
        $ethnicGroups = [
            ['name' => 'Sherpa', 'origin' => 'Himalayan Region'],
            ['name' => 'Newar', 'origin' => 'Kathmandu Valley'],
            ['name' => 'Tharu', 'origin' => 'Terai Region'],
            ['name' => 'Tamang', 'origin' => 'Hilly Regions'],
            ['name' => 'Gurung', 'origin' => 'Midwest Nepal'],
            ['name' => 'Magar', 'origin' => 'Western Nepal'],
        ];

        foreach ($ethnicGroups as $group) {
            EthnicGroup::create($group);
        }
    }
}
