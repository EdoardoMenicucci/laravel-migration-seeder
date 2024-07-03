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
        $newTrain->departure_station = 'Ancona';
        $newTrain->arrival_station = 'Torino';
        $newTrain->departure_time = 9.30;
        $newTrain->arrival_time = 12.10;
        $newTrain->train_code = 123456789;
        $newTrain->number_of_carriages = 12;
        $newTrain->on_time = true;
        $newTrain->cancelled = false;

        $newTrain->save();
    }
}
