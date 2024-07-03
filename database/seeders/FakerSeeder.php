<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class FakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 12; $i++) {
            $newTrain = new Train();

            $newTrain->company = $faker->word();
            $newTrain->departure_station = $faker->word();
            $newTrain->arrival_station = $faker->word();
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrival_time = $faker->dateTime();
            $newTrain->train_code = $faker->randomNumber(9, true);
            $newTrain->number_of_carriages = $faker->randomNumber(9, false);
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();

            $newTrain->save();
        }
    }
}
