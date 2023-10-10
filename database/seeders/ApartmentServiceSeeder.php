<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApartmentService;
use App\Models\Service;
use App\Models\Apartment;
use Faker\Generator as Faker;

class ApartmentServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $apartmentsId = Apartment::all()->pluck('id')->toArray();
        $servicesNumber = Service::all()->count();
        $servicesId = Service::all()->pluck('id')->toArray();


        foreach($apartmentsId as $apartment){
            $randomNumberOfService = rand(1,$servicesNumber);
            $apartmentServices=[];

            while(count($apartmentServices)<$randomNumberOfService){
                $serviceKey = array_rand($servicesId);
                $serviceId = $servicesId[$serviceKey];
                if(!in_array($serviceId,$apartmentServices)){
                    $apartmentServices[]=$serviceId;
                }
            }

            foreach($apartmentServices as $apartmentService){
                $newApartmentService = new ApartmentService();
                $newApartmentService -> apartment_id = $apartment;
                $newApartmentService -> service_id = $apartmentService;
                $newApartmentService -> save();
            }
        }  
    }
}
