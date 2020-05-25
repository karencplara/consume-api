<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StarWarsController extends Controller
{
    public function index()
    {
        $response = Http::get('http://swapi.dev/api/films');
        $result = $response->body();

        $data = json_decode($result, true);

        return view('index', compact('data'));
    }
}
