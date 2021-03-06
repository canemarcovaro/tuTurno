<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $table = 'servers';
    protected $fillable = array('name','description','market_id','status');

    public function market(){
        return $this->belongsTo(Category::class);
    }
    public function turns(){
        return $this->hasMany(Turn::class);
    }
}
