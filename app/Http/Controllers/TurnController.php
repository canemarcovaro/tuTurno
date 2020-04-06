<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turn;

class TurnController extends Controller
{
    public function create(Request $request){
        
        $turn = new Turn;
        $turn->server_id = $request->server_id;
        $turn->code = "123";
        $turn->save();

        return $turn;
    
    }
}
