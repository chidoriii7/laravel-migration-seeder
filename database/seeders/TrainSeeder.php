<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 50; $i++){
            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->orario_arrivo = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->codice_treno = $faker->bothify('??####');
            $train->numero_carrozze = $faker->numberBetween(2, 20);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
    
            $train->save();
        }
    }
}
