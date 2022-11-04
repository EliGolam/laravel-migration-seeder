<?php

use Illuminate\Database\Seeder;

// MODELS
use App\models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

class TrainsTableSeeder extends Seeder
{

    private array $companyList = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 10; $i++) {
            $this->companyList[] = $faker->company();
        }

        for($i = 0; $i < 100; $i++) {
            $train = new Train();

            $train->companies = $this->getCompany();

            $stations = $this->getStations($faker);
            $train->departure_stations = $stations[0];
            $train->arrival_stations = $stations[1];

            $times = $this->getTimes($faker);
            $train->departure_times = $times[0];
            $train->arrival_times = $times[1];

            $train->train_codes = $this->getCode($faker, $train->companies);

            $train->num_compartments = $faker->numberBetween(1, 20);
            $train->is_in_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
        }
    }



    private function getCompany() : string {
        $index = rand(0, count($this->companyList));
        return $this->companyList[$index];
    }

    private function getStations(Faker $faker) : array {
        $dep_station = $faker->city();
        do {
            $arr_station = $faker->city();
        } while($dep_station == $arr_station);

        return [$dep_station, $arr_station];
    }

    private function getTimes(Faker $faker) : array {
        $date = DateTime::createFromFormat('Y-m-d', $faker->date());
        $time = $faker->time();
        $dep_time = DateTime::createFromFormat('Y-m-d H:i:s', $date . $time);

        if ($time > '23:00:00') {
            date_add($date, date_interval_create_from_date_string("1 day"));
        }

        do {
            $time = $faker->time();
            $arr_time = DateTime::createFromFormat('Y-m-d H:i:s', $date . $time);
        } while ($arr_time < $dep_time);

        return [$dep_time, $arr_time];
    }

    private function getCode(Faker $faker, string &$company) : string {
        $code = substr($company, 0 , 3) . strval($faker->randomNumber(3, true));
        return $code;
    }

}
