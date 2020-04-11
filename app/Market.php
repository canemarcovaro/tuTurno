<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Market extends Model implements HasMedia
{
    use HasMediaTrait;
        
    protected $table = 'markets';
    protected $fillable = array('name');

    public function servers(){
        return $this->hasMany(Server::class);
    }
    public function categories(){
        return $this->hasMany(Category::class);
    }
     public function addresses(){
        return $this->hasMany(Address::class);
    }
    public function emails(){
        return $this->hasMany(Email::class);
    }
    public function phones(){
        return $this->hasMany(Phone::class);
    }
}
