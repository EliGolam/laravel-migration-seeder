<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Train;

class HomeController extends Controller
{
    public function index() {
        $now = date('Y-m-d');

        $trains = Train::all();
        $trainsToday = Train::whereDate("departure_times", $now)->get();

        $pageTitle = 'Home Page';

        return view('home', compact('trains', 'trainsToday', 'pageTitle'));
    }
}
