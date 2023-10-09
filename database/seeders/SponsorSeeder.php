<?php

namespace Database\Seeders;

use App\Models\Sponsor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sponsors = [
            [
                'name'=>'Semestrale',
                'color'=>'rgb(255,215,0)',
                'duration'=>'183'
            ],
            [
                'name'=>'Trimestrale',
                'color'=>'rgb(192,192,192)',
                'duration'=>'91'
            ],
            [
                'name'=>'Mensile',
                'color'=>'rgb(255,87,51)',
                'duration'=>'30'
            ],
        ];

        foreach($sponsors as $key => $sponsor){
            $newSponsor = new Sponsor();
            $newSponsor->id = $key+1;
            $newSponsor->name = $sponsor['name'];
            $newSponsor->color = $sponsor['color'];
            $newSponsor->duration_gg = $sponsor['duration'];
            $newSponsor->save();
        };
    }
}
