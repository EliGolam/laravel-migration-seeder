<?php

namespace App\View\Components;

use App\models\Train;
use Illuminate\View\Component;

class TicketCard extends Component
{

    public string $departure_station;
    public string $arrival_station;
    public $departure_time;
    public $arrival_time;
    public $train_code;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Train &$train)
    {
        $this->departure_station = $train['departure_stations'];
        $this->arrival_station = $train['arrival_stations'];
        $this->departure_time = $train['departure_times'];
        $this->arrival_time = $train['arrival_times'];
        $this->train_code = $train['train_codes'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.ticket-card');
    }
}
