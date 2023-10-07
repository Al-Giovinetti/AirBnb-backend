<?php

namespace Database\Seeders;

use App\Models\Apartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Owner;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run( Faker $faker): void
    {
        $ownersId=Owner::all()->pluck('id')->toArray();

        $apartments=[
            [
                'owner_id'=>'1',
                'name'=>'Villa Fiona',
                'description'=>'descriptionA',
                'image'=>'imageA',
                'region'=>'Toscana',
                'city'=>'Firenze',
                'address'=>'via del buco 5',
            ],
            [
                'owner_id'=>'1',
                'name'=>'Casa Giampietro',
                'description'=>'descriptionB',
                'image'=>'imageB',
                'region'=>'Lazio',
                'city'=>'Roma',
                'address'=>'via delle cascine 30',
            ],
            [
                'owner_id'=>'2',
                'name'=>'Casa Vianello',
                'description'=>'descriptionC',
                'image'=>'imageC',
                'region'=>'Trentino',
                'city'=>'Trento',
                'address'=>'località stelvio 81',
            ],
            [
                'owner_id'=>'3',
                'name'=>'CiaoBelli house',
                'description'=>'descriptionD',
                'image'=>'imageD',
                'region'=>'Marche',
                'city'=>'Ancona',
                'address'=>'largo Augusto 120',
            ],
            [
                'owner_id'=>'3',
                'name'=>'B&T home',
                'description'=>'descriptionE',
                'image'=>'imageE',
                'region'=>'Sicilia',
                'city'=>'Palermo',
                'address'=>'via Zaira Cani 10',
            ],
            [
                'owner_id'=>'3',
                'name'=>'Guest House',
                'description'=>'descriptionF',
                'image'=>'imageF',
                'region'=>'Sardegna',
                'city'=>'Sassari',
                'address'=>'via caprina 1',
            ],
            [
                'owner_id'=>'4',
                'name'=>'Duomo1',
                'description'=>'descriptionG',
                'image'=>'imageG',
                'region'=>'Lombardia',
                'city'=>'Milano',
                'address'=>"via sant' Ambrogio 212",
            ],
            [
                'owner_id'=>'5',
                'name'=>'Rifugio 00',
                'description'=>'descriptionH',
                'image'=>'imageH',
                'region'=>"Val d'Aosta",
                'city'=>'Aosta',
                'address'=>'valico sulla cima 10',
            ],
            [
                'owner_id'=>'6',
                'name'=>'Penultima house',
                'description'=>'descriptionI',
                'image'=>'imageI',
                'region'=>'Piemonte',
                'city'=>'Alba',
                'address'=>'stretto tartufelllo 87',
            ],
            [
                'owner_id'=>'6',
                'name'=>'Finalmente arrivati',
                'description'=>'descriptionL',
                'image'=>'imageL',
                'region'=>'Puglia',
                'city'=>'Ostuni',
                'address'=>'via infinita 13h',
            ],
            
        ];

        foreach($apartments as $key => $apartment){
            $newApartment=new Apartment();
            $newApartment->id = $key+1;
            $newApartment->owner_id = $apartment['owner_id'];
            $newApartment->name = $apartment['name'];
            $newApartment->description = $apartment['description'];
            $newApartment->image = $apartment['image'];
            $newApartment->region = $apartment['region'];
            $newApartment->city = $apartment['city'];
            $newApartment->address = $apartment['address'];
            $newApartment->beds = $faker->numberBetween(1, 6);
            $newApartment->nightly_rate = $faker->randomFloat(2, 30, 100);
            $newApartment->save();


        }
    }
}
