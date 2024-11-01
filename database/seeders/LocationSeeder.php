<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            [
                'location_name' => 'Denpasar'
            ],
            [
                'location_name' => 'Buleleng'
            ],
            [
                'location_name' => 'Jimbaran'
            ],
        ];

        Location::insert($locations);
    }
}
