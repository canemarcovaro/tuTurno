<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;
use App\Turn;

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

    public function nextTurn(Request $request){
        
        $server_id = $request->server_id;
        $category_id = $request->category_id;
        
        //Busco el ultimo turno que atendi.
        $beforeTurn = Turn::where('category_id',$category_id)->where('server_id',$server_id)->where('status','on')->first();

        //Si existia un turno, cambio su estado de ON a End. De este modo se finaliza el turno.
        if($beforeTurn != null){
         $beforeTurn->update(['status' => 'end','server_id'=>$server_id]);
        }

        //Busco si existen turnos disponibles para atender.
        $turn = Turn::where('category_id',$category_id)->where('server_id',null)->where('status','next')->first();

        //Si existe, llamo a este turno y cambio su estado a ON.
        if($turn != null){

         $turn->update(['status' => 'on','server_id'=>$server_id]);
         //Busco el siguiente posible turno para avisarle
         $nextTurn = Turn::where('category_id',$category_id)->where('server_id',null)->where('status','wait')->first();
         if($nextTurn != null){
         //Seteo el siguiente turno en estado next.
            $nextTurn->update(['status' => 'next']); 
         }
         return $turn;
        }
        else{
            //Busco si recien arrancan las operaciones, en ese caso tendria que haber un turno en wait.

            $turn = Turn::where('category_id',$category_id)->where('server_id',null)->where('status','wait')->first();
            if($turn != null){

                $turn->update(['status' => 'on','server_id'=>$server_id]);
                //Busco el siguiente posible turno para avisarle
                $nextTurn = Turn::where('category_id',$category_id)->where('server_id',null)->where('status','wait')->first();
                if($nextTurn != null){
                //Seteo el siguiente turno en estado next.
                   $nextTurn->update(['status' => 'next']); 
                }
                else{
                return "No hay turnos en cola actualmente.";
                }
            }
            else{
                return "No hay turnos en cola actualmente.";
            }
        }

        return $turn;
    
       
       
        

     
    }

    }
