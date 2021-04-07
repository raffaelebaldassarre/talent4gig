<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Breeds extends Controller
{
    public function breedList()
    {
        $data = Http::get("https://dog.ceo/api/breeds/list/all")->json();

        return view('welcome',['data' => $data]);
    }
}
