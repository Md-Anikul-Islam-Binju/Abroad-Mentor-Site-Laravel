<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CountriesDetailController extends Controller
{
   
    public function ViewCountryDetails($id)
    {
        $country_detail_info=DB::table('countries_details_table')
                   
                          ->join('countries_table','countries_details_table.country_id','countries_table.id')
                          ->select('countries_details_table.*','countries_table.name')  
                          ->where('countries_details_table.id',$id)
                          ->first();

        //dd($country_detail_info);

       
        return view('pages.countries_detail_info',compact('country_detail_info'));

    }
}
