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
        $owners=[
            [
                'name'=>'Alessio',
                'surname'=>'Giovinetti',
                'age'=>28,
                'image'=>'aaaaaaaaaaaaaa',
                'bio'=>'aaaaaaaaaaaaa',
            ],
            [
                'name'=>'Giada',
                'surname'=>'Pellini',
                'age'=>29,
                'image'=>'bbbbbbbbbbb',
                'bio'=>'bbbbbbbbbbbbbbbbio',
            ],
            [
                'name'=>'Dario',
                'surname'=>'Giannetti',
                'age'=>25,
                'image'=>'ccccccccccccc',
                'bio'=>'cccccccccccccbio',
            ],
            [
                'name'=>'Annarita',
                'surname'=>'Baldocchi',
                'age'=>55,
                'image'=>'dddddddddddd',
                'bio'=>'dddddddddddbio',
            ],
            [
                'name'=>'Giuliana',
                'surname'=>'delCiglio',
                'age'=>70,
                'image'=>'eeeeeeeeeee',
                'bio'=>'eeeeeeeeeeeebio',
            ],
            [
                'name'=>'Eugenio',
                'surname'=>'Baltorini',
                'age'=>64,
                'image'=>'ffffffffffffff',
                'bio'=>'fffffffffffbio',
            ],
        ];

        foreach($owners as $key => $owner){
            $newOwner = new Owner();
            $newOwner->id = $key+1;
            $newOwner->user_id = $key+1;
            $newOwner->name = $owner['name'];
            $newOwner->surname =  $owner['surname'];
            $newOwner->age = $owner['age'];
            $newOwner->image = $owner['image'];
            $newOwner->bio = $owner['bio'];
            $newOwner->save();
        }
        
    }
}
