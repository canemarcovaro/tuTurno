<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Turn;

class TurnosDisponibles implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $turn;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Turn $turn)
    {
        
        $this->turn=$turn;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        
        return new Channel('home');
    }
}
