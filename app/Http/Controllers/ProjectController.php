<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function welcome(Request $request)
    {
        $city1 = "Belgrade";
        $city2 = "New York";
        $city3 = "London";
        $city4 = "Rome";
        $city5 = "Moscow";
        $city6 = "Paris";
        $response1 = Http::get("https://api.openweathermap.org/data/2.5/weather?q=".$city1."&units=metric&appid=82e0be784317765ec3af35fc2e2d4aef");
        $response2 = Http::get("https://api.openweathermap.org/data/2.5/weather?q=".$city2."&units=metric&appid=82e0be784317765ec3af35fc2e2d4aef");
        $response3 = Http::get("https://api.openweathermap.org/data/2.5/weather?q=".$city3."&units=metric&appid=82e0be784317765ec3af35fc2e2d4aef");
        $response4 = Http::get("https://api.openweathermap.org/data/2.5/weather?q=".$city4."&units=metric&appid=82e0be784317765ec3af35fc2e2d4aef");
        $response5 = Http::get("https://api.openweathermap.org/data/2.5/weather?q=".$city5."&units=metric&appid=82e0be784317765ec3af35fc2e2d4aef");
        $response6 = Http::get("https://api.openweathermap.org/data/2.5/weather?q=".$city6."&units=metric&appid=82e0be784317765ec3af35fc2e2d4aef");
        
        $response_array = [$response1,$response2,$response3,$response4,$response5,$response6];
        
        return view('welcome', ['response'=>$response_array]);
    }

    public function search(Request $request)
    {
            $city =  $request['cityName'];
            $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=82e0be784317765ec3af35fc2e2d4aef");
            //dd($response);
            return view('search', ['response'=>$response]);

    }

    
}
