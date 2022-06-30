<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        $aziende = [
            'Trenitalia',
            'Trenord',
            'Italo'
        ];

        $dates = [
            '2022-06-29',
            '2022-06-27',
            '2022-06-30',
            '2022-07-01'
        ];

        for ($i=0; $i < 100; $i++) { 
            $train = new Train();
            $train->azienda = $aziende[rand(0, count($aziende) - 1)];
            $train->stazione_partenza = $faker->city();
            $train->binario_partenza = rand(1, 30);
            $train->stazione_arrivo = $faker->city();
            $train->binario_arrivo = rand(1, 30);
            $train->data_partenza = $dates[rand(0, count($dates) - 1)];
            $train->orario_partenza = $faker->time('H:i');
            $train->data_arrivo = date('Y-m-d H:i:s', strtotime($train->departure_date . '+1 day'));
            $train->orario_arrivo = $faker->time('H:i');
            $train->codice_treno = rand(0000, 99999);
            $train->numero_carrozze = rand(3, 30);
            $train->in_orario = $faker->boolean(95);
            $train->cancellato = $faker->boolean(5);
            
            // Per salvare i dati nel database
            $train->save();
        }
    }
}
