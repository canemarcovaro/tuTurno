<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Market;

use Illuminate\Support\Facades\DB;

class MarketController extends Controller
{
    public function create(Request $request){
        
        $market = new Market;
        $market->name = $request->name;
        $market->save();

        return $market;
    
    }

    public function index(Request $request){
        
     
        $markets =  Market::join('phones','markets.id','=','phones.market_id')->join('emails','markets.id','=','emails.market_id')->join('addresses','markets.id','=','addresses.market_id')->select('markets.id','markets.name','phones.phone_number','emails.email','addresses.location')->groupBy('markets.id','markets.name','phones.phone_number')->get();

        for ($i=0; $i <$markets->count(); $i++) {

            for ($j=0; $j <$markets[$i]->getMedia()->count(); $j++) { 
             $imgUrl = $markets[$i]["media"][$j]->getFullUrl();
             
  
             $markets[$i]["media"][$j]["imgUrl"] = $imgUrl;
             
            }
          }
  

        return $markets;
    
    }
    
    public function index2(Request $request){
        
     
      $markets =  Market::all();


      return $markets;
  
  }
}
