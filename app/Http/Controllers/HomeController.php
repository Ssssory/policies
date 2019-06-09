<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->category = DB::table('category')->get();
        $this->districts = DB::table('districts')->get();
        $this->district_property = DB::table('dict_district_property')->get();
        $this->house_property = DB::table('dict_house_property')->get();
    }

    public function search()
    {
        return view('search');
    }

    public function results(Request $request)
    {
        $category = $request->input('radio','moms');
        $currentCategoryId = DB::table('category')->where('code',$category)->first()->id;
        $address = $request->input('street');
        $arAddress = explode(" ",$address);
        if( count($arAddress) != 2 ){
            dump("error Address");
            return view('search');
        }
        $house = House::where('street',$arAddress[0])->where('num_house',$arAddress[1])->first();
        if( empty($house) ){
            dump("error Address");
            return view('search');
        }
        $currentDistrict = DB::table('house_district')->where('house_id',$house->id)->first()->district_id;
        $reiting = DB::table('rating')->where('house_id',$house->id)->where('category',$currentCategoryId)->first()->result;
        $achivments = DB::table('achievments')->where('district_id',$currentDistrict)->get();
        
//        dump($achivments);
        return view('results',[
            'house'       => $house,
            'reiting'     => $reiting,
            'achivments'  => $achivments
        ]);
    }
}
