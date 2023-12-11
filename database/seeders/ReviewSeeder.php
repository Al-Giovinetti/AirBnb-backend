<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Apartment;
use App\Models\Review;


class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $reviews = [
            'Struttura abbastanza vecchiotta ma siamo stati bene.',
            'Il prossimo anno torneremo sicuramente, top.',
            'Lontana dal centro e mezzi pubblici inesistenti.',
            'In estate è proprio carna.',
            'Non torneremo mai più.',
            'caso degli orrori, sporca.',
            'Ci vorrebbe una deblattizzazione.',
            'Molto curata in tutti i particolari.'
        ];

        $apartmentsId = Apartment::all()->pluck('id')->toArray();

        foreach($apartmentsId as $apartmentId){
            $randomReview = rand(1,count($reviews));
            for($i=0; $i<$randomReview; $i++){
                $newReview = new Review();
                $newReview->apartment_id = $apartmentId;
                $newReview->sender = $faker->name();
                $newReview->content = $reviews[$i];
                $newReview->vote = $faker->numberBetween(1,5);
                $newReview->save();
            }
        }
    }
}
