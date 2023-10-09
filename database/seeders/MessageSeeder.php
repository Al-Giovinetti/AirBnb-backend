<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Owner;
use App\Models\Message;


class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $messages=[
            'Buongiorno, sono Mr. X, volevo sapere se i cani sono ammessi.',
            'Salve, sono Mr.Y, ho una pronotazione per il 26/05, volevo sapere se fosse possibile aggiungere un posto letto?',
            'Buonasera, sono Miss W, ho bisogno di parlarle in privato approposito della mia prenotazione. Posso avere il suo numero privato.',
            'Buonasera, sono Alfred G. stasera arriveremo in ritardo rispetto a quanto pattuito.',
            'Salve, lavoro per Il Pino Immobilaire e siamo in cerca di case da acquistare, la sua è in vendita?',
            'Sono Franco M. sono rimasto fuori casa aiuto!!!',
            'Buonasera sono Martina, ci siamo incontrati stamani, volevo avvisarla che il lavandino è intasato.'
        ];

        $ownersId = Owner::all()->pluck('id')->toArray();

        foreach($messages as $key => $message){
            $ownerRandomKey = array_rand($ownersId);

            $newMessage = new Message();
            $newMessage->id = $key+1;
            $newMessage->owner_id = $ownersId[$ownerRandomKey];
            $newMessage->sender_email = $faker->email();
            $newMessage->content = $message;
            $newMessage->save();
        };
    }
}
