<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 30; $i++){
            $newTrain = new Train();
            $newTrain->company =$faker->company;
            $newTrain->start_station =$faker->city;
            $newTrain->arrival_station =$faker->city;
            $newTrain->start_time =$faker->time;
            $newTrain->arrivals_time =$faker->time;
            $newTrain->number_of_carriages = $faker->numberBetween(5, 10);
            $newTrain->cancelled = $faker->boolean();
            $newTrain->in_time = $faker->boolean();
            $newTrain->updated_at = 'b';
            $newTrain->created_at = 'b';
            $newTrain->save();
        }
    }
}