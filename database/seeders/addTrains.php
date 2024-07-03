<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class addTrains extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();

        $newTrain->company = 'Trenitalia';
        $newTrain->departure_station = 'Lazio';
        $newTrain->arrival_station = 'Marche';
        $newTrain->departure_time = '2024-07-03 13:22:07';
        $newTrain->arrival_time = '2024-07-03 16:22:07';
        $newTrain->train_code = 123546789;
        $newTrain->number_of_carriages = 12;
        $newTrain->on_time = true;
        $newTrain->cancelled = false;

        $newTrain->save();
    }
}
