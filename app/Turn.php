<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    protected $table = 'turns';
    protected $fillable = array('server_id','code','status');

    public function server(){
        return $this->belongsTo(Server::class);
    }

}
