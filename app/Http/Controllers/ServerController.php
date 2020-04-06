<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;

class ServerController extends Controller
{
    public function create(Request $request){
        
        $server = new Server;
        $server->name = $request->name;
        $server->description = $request->description;
        $server->category_id = $request->category_id;
        
        $server->save();

        return $server;
    
    }
}
