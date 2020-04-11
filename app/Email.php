<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'emails';
    protected $fillable = array('email');
    public function market(){
        return $this->belongsTo(Market::class);
    }

}
