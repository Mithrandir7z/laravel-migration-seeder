<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//richiama il model che sta in app\trip
use App\Trip;

class HomeController extends Controller
{
    public function index() {
        $trips = Trip::all();
        
        $data = [
            "trips" => $trips
        ];

        // dd($data);

        return view("home", $data);
    }
}
