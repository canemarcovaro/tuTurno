<?php

namespace App\Observers;

use App\Events\TurnosDisponibles;
use App\Turn;

class Observers
{
    /**
     * Handle the turn "created" event.
     *
     * @param  \App\Turn  $turn
     * @return void
     */
    public function created(Turn $turn)
    {
        //
    }

    /**
     * Handle the turn "updated" event.
     *
     * @param  \App\Turn  $turn
     * @return void
     */
    public function updated(Turn $turn)
    {
       
        $oldTurnCode = $turn->getOriginal('code');
        $newTurn = $turn->code;
      //  dd($oldTurnCode);
      /*  if($oldTurnCode != $newTurn){
            
            event(new TurnosDisponibles($turn));

        }*/
        
            
            event(new TurnosDisponibles($turn));

        
    }

    /**
     * Handle the turn "deleted" event.
     *
     * @param  \App\Turn  $turn
     * @return void
     */
    public function deleted(Turn $turn)
    {
        //
    }

    /**
     * Handle the turn "restored" event.
     *
     * @param  \App\Turn  $turn
     * @return void
     */
    public function restored(Turn $turn)
    {
        //
    }

    /**
     * Handle the turn "force deleted" event.
     *
     * @param  \App\Turn  $turn
     * @return void
     */
    public function forceDeleted(Turn $turn)
    {
        //
    }
}
