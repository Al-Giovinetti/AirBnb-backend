<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sponsor;
use App\Models\Apartment;
use App\Models\ApartmentSponsor;
use Faker\Generator as Faker;

class ApartmentSponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $sponsorsId = Sponsor::all()->pluck('id')->toArray();
        $apartmentsId = Apartment::all()->pluck('id')->toArray();

        foreach($apartmentsId as $apartment){
            $newApartmentSponsor = new ApartmentSponsor();
            
            $newApartmentSponsor->apartment_id = $apartment;

            $randomKeysponsor = array_rand($sponsorsId);
            $newApartmentSponsor->sponsor_id = $sponsorsId[$randomKeysponsor];

            $newApartmentSponsor->sponsor_start = $faker->dateTimeBetween('-30 week');

            $dataStart = $newApartmentSponsor->sponsor_start->format('Y-m-d H:i:s');
            //var_dump($dataStart);
            if ($newApartmentSponsor->sponsor_id == 1) {
                $newApartmentSponsor->sponsor_end = date('Y-m-d H:i:s', strtotime('+183 day', strtotime($dataStart)));
            } elseif ($newApartmentSponsor->sponsor_id == 2) {
                $newApartmentSponsor->sponsor_end = date('Y-m-d H:i:s', strtotime('+91 day', strtotime($dataStart)));
            } else {
                $newApartmentSponsor->sponsor_end = date('Y-m-d H:i:s', strtotime('+30 day', strtotime($dataStart)));
            }

            $newApartmentSponsor->save();
        }
    }
}
