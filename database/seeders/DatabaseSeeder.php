<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Apartment;
use App\Models\Owner;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            OwnerSeeder::class,
            ApartmentSeeder::class,
            MessageSeeder::class,
            ReviewSeeder::class,
            SponsorSeeder::class,
            ServiceSeeder::class,
            

        ]);
    }
}
