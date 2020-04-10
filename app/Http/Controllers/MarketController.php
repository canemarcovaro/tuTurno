<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Market;

class MarketController extends Controller
{
    public function create(Request $request){
        
        $market = new Market;
        $market->name = $request->name;
        $market->save();

        return $market;
    
    }

    public function index(Request $request){
        
        
        $markets =  Market::all();

        return $markets;
    
    }
}
