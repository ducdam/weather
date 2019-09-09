<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeatherValidation;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function getAll(WeatherValidation $request)
    {
        $cityname = $request->cityname;
        $citiesJson = file_get_contents('city.json');
        $cities = (object)json_decode($citiesJson);
        foreach ($cities as $key => $city){
            if ($city->name == $cityname){
                $client = new Client();
                $res = $client->request('GET', 'http://api.openweathermap.org/data/2.5/forecast?q=' . $cityname . '&appid=335584a2c701432262c18d9d6ea5d035');
                $datajson = $res->getBody();
                $data = json_decode($datajson);
//                dd($data);
                return view('Weather', compact('data'));
            }
        }
        $alert = "khong co du lieu";
        return view("index",compact('alert'));
    }
}

