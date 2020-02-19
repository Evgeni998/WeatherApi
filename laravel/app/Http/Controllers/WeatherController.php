<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function show() {
        //Sofia id
        $cityId = "727011";
        //Personal key
        $apiKey = "aa5d9bfaa83ff76a04ad1fc9c6d54bf7";
        //Shows the data for the current day only
        //$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;  
        //Shows the data for 5 days
        $googleApiUrl = "api.openweathermap.org/data/2.5/forecast?id=".$cityId."&appid=".$apiKey;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        
        curl_close($ch);
        $data = json_decode($response);
        //dd($data);
        $currentTime = time();
        return view('weather')->with('data', $data)->with('currentTime', $currentTime);
    }
}
