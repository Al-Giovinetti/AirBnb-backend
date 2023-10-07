<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Faker\Generator as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $myProfile=new User();
        $myProfile->name = 'Alessio';
        $myProfile->email = 'ale@gmail.com';
        $myProfile->password = Hash::make('123456789');
        $myProfile->save();

       for($i=0; $i<5; $i++){
        $newProfile=new User();

        $username = $faker->firstName();
        $newProfile->name = $faker->numerify($username.'####');

        $newProfile->email = $faker->email();
        $newProfile->password = Hash::make($faker->password());
        $newProfile->save();
       }
    }
}
