<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';
    protected $fillable = array('location');
    
    public function market(){
        return $this->belongsTo(Market::class);
    }

}
