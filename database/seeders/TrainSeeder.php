<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use function Laravel\Prompts\text;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {
            $trains = new Train();
            $trains->azienda = $faker->realText(10);
            $trains->stazione_di_partenza = $faker->realText(10);
            $trains->stazione_di_arrivo = $faker->realText(10);
            $trains->orario_di_partenza = $faker->dateTimeThisMonth();
            $trains->orario_di_arrivo = $faker->dateTimeThisMonth();
            $trains->codice_treno = $faker->realText(10);
            $trains->numero_carrozze = $faker->realText(10);
            $trains->in_orario = $faker->boolean();
            $trains->cancellato = $faker->boolean();
            $trains->save();
        }
    }
}
