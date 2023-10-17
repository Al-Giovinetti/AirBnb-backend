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
                'image'=>'https://media.istockphoto.com/id/1278978817/it/foto/ritratto-di-uomo-maturo-felice-sorridente.jpg?s=612x612&w=0&k=20&c=BHvitOOQOQKb4Ulr4WwAur6wbBkl3WLSScfIS0gRRVY=',
                'bio'=>'Comodità e attenzione del dettaglio, sono queste le caratteristiche sulle quali si fonda tutta la permaneza nelle mie strutture. Provare per credere',
            ],
            [
                'name'=>'Giada',
                'surname'=>'Pellini',
                'age'=>29,
                'image'=>'https://www.ymea.it/wp/wp-content/uploads/2020/09/donne-over-60.jpeg',
                'bio'=>'bbbbbbbbbbbbbbbbio',
            ],
            [
                'name'=>'Dario',
                'surname'=>'Giannetti',
                'age'=>25,
                'image'=>'https://www.wonderchannel.it/wp-content/uploads/2022/12/michael-b-jordan-uomini-piu-belli-2022-1140x570.jpg.webp',
                'bio'=>'cccccccccccccbio',
            ],
            [
                'name'=>'Annarita',
                'surname'=>'Baldocchi',
                'age'=>55,
                'image'=>'https://static.open.online/wp-content/uploads/2021/07/emma-watson-abusi-online-donne-1152x768.jpg',
                'bio'=>'dddddddddddbio',
            ],
            [
                'name'=>'Giuliana',
                'surname'=>'delCiglio',
                'age'=>25,
                'image'=>'https://www.africarivista.it/wp-content/uploads/2019/03/donna.jpg',
                'bio'=>'eeeeeeeeeeeebio',
            ],
            [
                'name'=>'Eugenio',
                'surname'=>'Baltorini',
                'age'=>64,
                'image'=>'https://larchitetto.it/wp-content/uploads/2023/10/uomini-donne-riccardo-guarnieri-amore.jpg',
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
