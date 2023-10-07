<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\User;
use App\Models\Owner;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $usersId = User::all()->pluck('id');

        foreach($usersId as $ownerId){
            $newOwner = new Owner();
            $newOwner->id = $ownerId;
            $newOwner->user_id = $ownerId;
            $newOwner->name = $faker->firstName();
            $newOwner->surname = $faker->lastName();
            $newOwner->age = $faker->numberBetween(25, 80);
            $newOwner->image = $faker->imageUrl(640, 480, 'person', true);
            $newOwner->bio = $faker->paragraph();
            $newOwner->save();
        }
        
    }
}
