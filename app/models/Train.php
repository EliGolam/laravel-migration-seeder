<?php

namespace App\models;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    public string $companies;
    public string $departure_stations;
    public string $arrival_stations;
    public $departure_times;
    public $arrival_times;
    public $train_codes;
    public int $num_compartments;
    public bool $is_in_time;
    public bool $cancelled;

}
