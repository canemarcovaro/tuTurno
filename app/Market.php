<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    
    protected $table = 'markets';
    protected $fillable = array('name');

    public function servers(){
        return $this->hasMany(Server::class);
    }
    public function categories(){
        return $this->hasMany(Category::class);
    }
}
