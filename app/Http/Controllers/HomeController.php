<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function search()
    {
        return view('search');
    }

    public function results(Request $request)
    {
        dump($request->input('street'));
//        $house = House::where('adress',$request->input('street'))->get();
        return view('results');
    }
}
