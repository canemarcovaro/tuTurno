<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';
    protected $fillable = array('phone_number');
    
    public function market(){
        return $this->belongsTo(Market::class);
    }

}
