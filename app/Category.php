<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $table = 'categories';
    protected $fillable = array('name','description','market_id');

    public function market(){
        return $this->belongsTo(Market::class);
    }




    
}
